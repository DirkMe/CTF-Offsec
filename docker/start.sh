#!/bin/bash
set -e

# ── Dienste hochfahren ───────────────────────────────────────────────────────
service ssh   start
service cron  start

# ── Schreibverzeichnisse anlegen (falls Repo readonly gemountet) ─────────────
mkdir -p /var/www/html/storage/{logs,cache,download,upload,modification,session}
chown -R www-data:www-data /var/www/html/storage

# ── Auf MySQL warten (aber KEIN Schema-Import mehr) ──────────────────────────
until mysql -h "$DB_HOST" -u"$DB_USER" -p"$DB_PASS" -e "SELECT 1" >/dev/null 2>&1
do
  echo "[*] waiting for MySQL …"
  sleep 3
done

# ── Flag-Init (falls nötig) als Hintergrundjob ───────────────────────────────
/flag_init.sh &

# ── Apache im Vordergrund ────────────────────────────────────────────────────
exec apache2-foreground