<?php
// unsicherer AJAX-Upload (keine Auth, kein Filter)
if (empty($_FILES['file'])) {
    header('HTTP/1.1 400 Bad Request');
    die('Oops Something Went Wrong. Try again with curl and the orderfile');
}

$uploadDir = dirname(__FILE__) . '/../data/uploads/';
@mkdir($uploadDir, 0777, true);
move_uploaded_file(
    $_FILES['file']['tmp_name'],
    $uploadDir . basename($_FILES['file']['name'])
);

echo json_encode([
    'ok'   => true,
    'path' => 'modules/orderfiles/data/uploads/' . basename($_FILES['file']['name'])
]);
