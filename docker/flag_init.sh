#!/bin/bash
set -e

# Beispiel: Flag in admin-Notiz eintragen, falls noch nicht gesetzt
mysql -h "$DB_HOST" -u"$DB_USER" -p"$DB_PASS" "$DB_NAME" <<'SQL'
INSERT IGNORE INTO oc_note (note_id, title, text, status, date_added)
VALUES (42, 'Flag #2', 'FLAG{example_flag_2}', 1, NOW());
SQL