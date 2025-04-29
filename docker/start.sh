#!/bin/bash

# SSH Starten
/usr/sbin/sshd -D &

service cron start
# Daten-Ordner anlegen

# 3) Sicherstellen, dass .ssh und Datei mit 770/660 existieren
mkdir -p /home/ctf/.ssh
touch    /home/ctf/.ssh/authorized_keys
chown ctf:www-data    /home/ctf/.ssh
chmod  770             /home/ctf/.ssh
chown ctf:www-data    /home/ctf/.ssh/authorized_keys
chmod  660             /home/ctf/.ssh/authorized_keys

mkdir -p /var/www/html/includes/data/{sessions,backups}
chown -R www-data:www-data /var/www/html/includes/data

mkdir -p /var/www/html/modules
chown -R www-data:www-data /var/www/html/modules
chmod -R 775            /var/www/html/modules


# Flags setzen
/usr/local/bin/flag_init.sh &
exec apache2-foreground
