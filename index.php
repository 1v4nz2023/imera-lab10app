<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuarios - Labo10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gestión de Usuarios - Labo10 (Ivan Mera)</h1>

    <form action="agregar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <button type="submit">Agregar</button>
    </form>

    <table>
        <tr>
            <th>ID</th><th>Nombre</th><th>Correo</th><th>Acción</th>
        </tr>
        <?php
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['correo']}</td>
                        <td><a href='eliminar.php?id={$row['id']}'>Eliminar</a></td>
                      </tr>";
            }
        }
        ?>
    </table>
</body>
</html>