#!/bin/bash
service cron start
# Daten-Ordner anlegen
mkdir -p /var/www/html/includes/data/{sessions,backups}
chown -R www-data:www-data /var/www/html/includes/data

mkdir -p /var/www/html/modules
chown -R www-data:www-data /var/www/html/modules
chmod -R 775            /var/www/html/modules


# Flags setzen
/usr/local/bin/flag_init.sh &
exec apache2-foreground
