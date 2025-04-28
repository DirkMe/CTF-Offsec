#!/bin/bash
set -e

# ── Flag 1 – Backup‑Leak ────────────────────────────────────────────────────
mkdir -p /var/www/html/storage/backups
echo 'FLAG{BACKUP_LEAK}' > /var/www/html/storage/backups/flag1.txt
chmod 644 /var/www/html/storage/backups/flag1.txt

# ── Flag 2 – SQLi in oc_setting ─────────────────────────────────────────────
mysql -h "$DB_HOST" -u"$DB_USER" -p"$DB_PASS" "$DB_NAME" \
      -e "INSERT IGNORE INTO oc_setting (store_id, \`key\`, value) \
          VALUES (0, 'flag2', 'FLAG{SQLI_SUCCESS}');"

# ── Flag 3 – SSH‑Persistenz ────────────────────────────────────────────────
id -u ctf &>/dev/null || useradd -m -s /bin/bash ctf

mkdir -p /home/ctf/.ssh
echo 'FLAG{SSH_PERSISTENCE}' > /home/ctf/.ssh/flag3.txt
chown -R ctf:ctf /home/ctf/.ssh
chmod 700 /home/ctf/.ssh
chmod 600 /home/ctf/.ssh/flag3.txt

# ── Flag 4 – Root ───────────────────────────────────────────────────────────
echo 'FLAG{CRON_ROOT}' > /root/flag4.txt
chmod 600 /root/flag4.txt