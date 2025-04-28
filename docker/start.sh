#!/bin/bash
set -e

# Dienste starten
service ssh   start
service cron  start

# Storage‑Ordner (inkl. Backups) anlegen
mkdir -p /var/www/html/storage/{logs,cache,download,upload,modification,session,backups}
chown -R www-data:www-data /var/www/html/storage

# Auf MySQL warten
until mysql -h "$DB_HOST" -u"$DB_USER" -p"$DB_PASS" -e "SELECT 1" >/dev/null 2>&1; do
  echo '[*] waiting for MySQL …'
  sleep 3
done

# Flags initialisieren (Hintergrund)
/flag_init.sh &

# Apache vorn
exec apache2-foreground