<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
$host = $_ENV['DB_HOST'];
$db_name = $_ENV['DB_DATABASE'];
$user = $_ENV['DB_USERNAME'];
$pass = $_ENV['DB_PASSWORD'];

try {
    $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo $e->getMessage();
}