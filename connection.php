<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "edoc";
$port = 4306;

$database = new mysqli($servername, $username, $password, $dbname, $port);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}
?>
