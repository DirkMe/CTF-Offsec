#!/bin/bash
set -e

# Flag 1: offenes Backup
mkdir -p /var/www/html/modules/blocklayered/data/backups
echo 'FLAG{BACKUP_LEAK}' > /var/www/html/modules/blocklayered/data/backups/flag1.txt
chmod 644 /var/www/html/modules/blocklayered/data/backups/flag1.txt

# Flag 2 – SQLi-Tabelle mit PS-Prefix
mysql -h db -uroot -p"$MYSQL_ROOT_PASSWORD" cubecart <<'SQL'
CREATE TABLE IF NOT EXISTS prefix2_0ctf_flags (
  id INT PRIMARY KEY AUTO_INCREMENT,
  flag VARCHAR(255)
) ENGINE=InnoDB;

INSERT IGNORE INTO prefix2_0ctf_flags(flag) VALUES ('FLAG{SQLI_SUCCESS}');
SQL


# Flag 3: SSH-Key
echo 'FLAG{SSH_PERSISTENCE}' > /home/ctf/.ssh/flag3.txt

# Flag 4: Root über Cron
echo 'FLAG{CRON_ROOT}' > /root/flag4.txt
chmod 600 /root/flag4.txt
