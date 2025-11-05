<?php
$host = "localhost";
$user = "root";
$pass = "root123";
$db = "webapp_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>