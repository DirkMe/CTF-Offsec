#!/bin/bash
# Dieses Skript läuft jede Minute als root (Cron),
# gehört aber später dem User »ctf«, sodass man es zum Priv-Esc nutzen kann.

# Backup des Web-Roots
tar czf /tmp/var_www_html_$(date +%s).tgz /var/www/html 2>/dev/null

exit 0
