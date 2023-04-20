<?php
require_once "../../config/connection.php";
if (!empty($_POST['full_name']) && !empty($_POST['phone'])) {
    $insert = $db->prepare(
        'INSERT INTO `contacts` (full_name,nickname,email,phone,address,contact_type_id) VALUE(
            :fname,:nname,:email,:phone,:address,:type_id)'
    );
    $insert->execute([
        "fname" => $_POST['full_name'],
        "nname" => $_POST['nickname'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "address" => $_POST['address'],
        'type_id' => $_POST['type_id']
    ]);
    header("Location:create-contact.php?code=1");
} else {
    header("Location:create-contact.php?code=2");
}