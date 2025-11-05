<?php
include("db.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>