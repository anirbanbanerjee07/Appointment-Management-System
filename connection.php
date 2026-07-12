<?php
$servername = $_ENV['DB_HOST'];
$username   = $_ENV['DB_USER'];
$password   = $_ENV['DB_PASSWORD'];
$dbname     = $_ENV['DB_NAME'];
$port       = $_ENV['DB_PORT'];

$database = new mysqli(
    $servername,
    $username,
    $password,
    $dbname,
    $port
);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}
?>
