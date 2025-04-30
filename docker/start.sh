#!/bin/bash
### SSH Config ändern um Connect über pubkey zu erlauben
sed -i 's/^#\?StrictModes .*/StrictModes no/' /etc/ssh/sshd_config
 # Pubkey immer erlauben
sed -i 's/^#\?PubkeyAuthentication .*/PubkeyAuthentication yes/' /etc/ssh/sshd_config
# Passwort-Login abschalten
sed -i 's/^#\?PasswordAuthentication .*/PasswordAuthentication no/' /etc/ssh/sshd_config
# SSH Starten
/usr/sbin/sshd -D &

service cron start
# Daten-Ordner anlegen

# 3) Sicherstellen, dass .ssh und Datei mit 770/660 existieren und www-data auch in Authorized Keys reinschreiben kann
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


mkdir /var/www/html/cache
mkdir /var/www/html/log
chown -R www-data:www-data /var/www/html/cache && chmod -R u+rwX,go-rwx /var/www/html/cache
chown -R www-data:www-data /var/www/html/log && chmod -R u+rwX,go-rwx /var/www/html/log

# Flags setzen
/usr/local/bin/flag_init.sh &
exec apache2-foreground
