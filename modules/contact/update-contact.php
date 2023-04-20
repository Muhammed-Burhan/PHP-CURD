<?php
require_once "../../config/connection.php";
$id = $_POST['id'];
if (!empty($_POST['full_name']) && !empty($_POST['phone'])) {
    $insert = $db->prepare(
        'UPDATE `contacts` SET full_name=:fname,
        nickname=:nname,
        email=:email,
        phone=:phone,
        address=:address,
        contact_type_id=:type_id 
        WHERE id=:id
        '
    );
    $insert->execute([
        "id" => $id,
        "fname" => $_POST['full_name'],
        "nname" => $_POST['nickname'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "address" => $_POST['address'],
        'type_id' => $_POST['type_id']
    ]);
    header("Location:edit-contact.php?id=$id$&code=1");
} else {
    header("Location:edit-contact.php?id=$id&code=2");
}