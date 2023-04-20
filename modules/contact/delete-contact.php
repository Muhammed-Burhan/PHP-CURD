<?php
require_once "../../config/connection.php";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $delete = $db->prepare(
        'DELETE FROM `contacts`
        WHERE id=:id
        '
    );
    $delete->execute([
        "id" => $id,
    ]);
    header("Location:list-contact.php?code=1");
} else {
    header("Location:list-contact.php?code=2");
}