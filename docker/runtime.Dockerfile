# docker/runtime.Dockerfile
FROM php:7.4-apache-bullseye

# ── System‑Pakete & PHP‑Erweiterungen ────────────────────────────────────────
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        cron openssh-server mariadb-client \
        libpng-dev libjpeg-dev libfreetype6-dev \
        libonig-dev libxml2-dev libzip-dev libicu-dev libssl-dev && \
    docker-php-ext-configure gd --with-jpeg --with-freetype && \
    docker-php-ext-install mysqli pdo_mysql gd mbstring xml zip intl opcache phar && \
    a2enmod rewrite && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# ── Hilfs‑Dateien ins Image ─────────────────────────────────────────────────
COPY docker/start.sh      /usr/local/bin/start.sh
COPY docker/flag_init.sh  /usr/local/bin/flag_init.sh
COPY docker/cron/backup   /usr/local/bin/backup

# Start‑ & Cron‑Skripte vorbereiten
RUN chmod +x /usr/local/bin/start.sh /usr/local/bin/flag_init.sh /usr/local/bin/backup && \
    # User »ctf« für Priv‑Escalation‑Teil anlegen
    useradd -m -s /bin/bash ctf && \
    # Cron‑Job (root) im Minutentakt
    echo '* * * * * root /usr/local/bin/backup' > /etc/cron.d/backup && \
    chmod 644 /etc/cron.d/backup

EXPOSE 80 22

# Apache‑VirtualHost
COPY docker/apache/opencart.conf /etc/apache2/sites-available/opencart.conf
RUN a2dissite 000-default.conf && \
    a2ensite  opencart.conf

CMD ["/usr/local/bin/start.sh"]