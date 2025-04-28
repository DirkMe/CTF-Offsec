#!/bin/bash
set -e

# Flag 1: offenes Backup
mkdir -p /var/www/html/modules/blocklayered/data/backups
echo 'FLAG{BACKUP_LEAK}' > /var/www/html/modules/blocklayered/data/backups/flag1.txt
chmod 644 /var/www/html/modules/blocklayered/data/backups/flag1.txt

# Flag 2: SQLi-Tabelle
mysql -h db -uroot -p"$MYSQL_ROOT_PASSWORD" prestashop <<'SQL'
CREATE TABLE IF NOT EXISTS ctf_flags (
  id INT PRIMARY KEY AUTO_INCREMENT,
  flag VARCHAR(255)
);
INSERT IGNORE INTO ctf_flags(flag) VALUES ('FLAG{SQLI_SUCCESS}');
SQL


# Flag 3: SSH-Key
useradd -m -s /bin/bash ctf
mkdir -p /home/ctf/.ssh
echo 'ssh-rsa AAAA…attacker@ctf' >> /home/ctf/.ssh/authorized_keys
echo 'FLAG{SSH_PERSISTENCE}' > /home/ctf/.ssh/flag3.txt
chown -R ctf:ctf /home/ctf/.ssh

# Flag 4: Root über Cron
echo 'FLAG{CRON_ROOT}' > /root/flag4.txt
chmod 600 /root/flag4.txt
