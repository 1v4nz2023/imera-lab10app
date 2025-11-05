<?php
$host = "localhost";
$user = "webuser";
$pass = "web123";  // coincide con el usuario que creaste
$db = "webapp_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>