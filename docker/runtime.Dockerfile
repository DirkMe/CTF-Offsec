# docker/runtime.Dockerfile
FROM php:7.4-apache-bullseye

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        cron openssh-server mariadb-client \
        libpng-dev libjpeg-dev libfreetype6-dev \
        libonig-dev libxml2-dev libzip-dev libicu-dev libssl-dev && \
    docker-php-ext-configure gd --with-jpeg --with-freetype && \
    docker-php-ext-install mysqli pdo_mysql gd mbstring xml zip intl opcache phar && \
    a2enmod rewrite && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Hilfs- und Cron-Skripte ins Image legen
COPY start.sh flag_init.sh /usr/local/bin/
COPY cron/backup          /usr/local/bin/backup
RUN chmod +x /usr/local/bin/start.sh /usr/local/bin/flag_init.sh /usr/local/bin/backup \
 && echo '* * * * * root /usr/local/bin/backup' > /etc/cron.d/backup \
 && chmod 644 /etc/cron.d/backup

EXPOSE 80 22

COPY apache/opencart.conf /etc/apache2/sites-available/opencart.conf
RUN a2dissite 000-default.conf \
 && a2ensite  opencart.conf


CMD ["/usr/local/bin/start.sh"]