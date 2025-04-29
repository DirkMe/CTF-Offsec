FROM php:5.6-apache

# 1) kompletten sources.list ersetzen durch Archive-Mirror für Stretch
RUN printf 'Acquire::Check-Valid-Until "false";\n'                               > /etc/apt/apt.conf.d/99no-check-valid-until && \
    printf 'deb http://archive.debian.org/debian stretch main contrib non-free\n' > /etc/apt/sources.list && \
    printf 'deb http://archive.debian.org/debian-security stretch/updates main contrib non-free\n' >> /etc/apt/sources.list

# 2) Update & Installation aller Abhängigkeiten
RUN apt-get update && apt-get install -y --no-install-recommends \
      cron \
      default-mysql-client \
      libfreetype6-dev \
      libjpeg62-turbo-dev \
      libpng-dev \
      libmcrypt-dev \
    && docker-php-ext-configure gd --with-jpeg-dir=/usr/include/ --with-freetype-dir=/usr/include/ \
    && docker-php-ext-install \
         gd \
         mcrypt \
         mysqli \
         pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

RUN apt-get update && \
    apt-get install -y --no-install-recommends cron mariadb-client \
    && docker-php-ext-install mysqli pdo_mysql


RUN apt-get update \
&& apt-get install -y --no-install-recommends openssh-server \
&& mkdir -p /var/run/sshd \
&& ssh-keygen -A

# ── 2) CTF-User einrichten & SSH-Dir mit korrekten Rechten ───────────────
RUN useradd -m -s /bin/bash ctf \
 && mkdir -p /home/ctf/.ssh \
 && touch    /home/ctf/.ssh/authorized_keys \
 # Owner = ctf, Group = www-data
 &&chown -R ctf:ctf /home/ctf/.ssh \
 &&chmod 770             /home/ctf/.ssh \
 &&chmod 660             /home/ctf/.ssh/authorized_keys

 RUN sed -i 's/^#\?StrictModes .*/StrictModes no/' /etc/ssh/sshd_config

 # Pubkey immer erlauben
RUN sed -i 's/^#\?PubkeyAuthentication .*/PubkeyAuthentication yes/' /etc/ssh/sshd_config
# Passwort-Login abschalten
RUN sed -i 's/^#\?PasswordAuthentication .*/PasswordAuthentication no/' /etc/ssh/sshd_config

# ── 4) CTF-Skripte & Init ───────────────────────────────────────────────
COPY docker/start.sh        /usr/local/bin/start.sh
COPY docker/flag_init.sh    /usr/local/bin/flag_init.sh
COPY docker/cron/cron-backup.sh /usr/local/bin/cron-backup.sh


RUN chown ctf:ctf /usr/local/bin/cron-backup.sh \
 && chmod 755   /usr/local/bin/cron-backup.sh

 RUN printf "* * * * * root /usr/local/bin/cron-backup.sh\n" \
     > /etc/cron.d/ctf-backup \
 && chmod 644 /etc/cron.d/ctf-backup

EXPOSE 80 22

CMD ["/usr/local/bin/start.sh"]

