#!/bin/bash

# Flag 1: offenes Backup
mkdir -p /var/www/html/backup 
printf "Options +Indexes\nIndexOptions FancyIndexing NameWidth=* FoldersFirst\n" > /var/www/html/backup/.htaccess
echo 'FLAG{Backup Leak}  Es gibt einen User auf dem Server mit dem Nutzernamen CTF' > /var/www/html/backup/flag1.txt 
chmod 644 /var/www/html/backup/flag1.txt

# Flag 2 – SQLi-Tabelle mit PS-Prefix schon gesetzt durch initial DB 

# Flag 3: SSH-Key
echo 'FLAG{SSH_PERSISTENCE}' > /home/ctf/.ssh/flag3.txt

# Flag 4: Root über Cron
echo 'FLAG{CRON_ROOT}' > /root/flag4.txt
chmod 600 /root/flag4.txt
