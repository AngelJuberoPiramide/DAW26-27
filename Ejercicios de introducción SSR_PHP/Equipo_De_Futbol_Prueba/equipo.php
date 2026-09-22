<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Equipo de Fútbol</title>
</head>

<body>

    <h1>Equipo de Fútbol</h1>

    <form action="equipo.php" method="POST">

        <label>Nombre del jugador:</label>
        <input type="text" name="nombre">
        <br><br>

        <label>Dorsal:</label>
        <input type="number" name="dorsal">
        <br><br>

        <input type="submit" value="Añadir jugador">

    </form>

<?php

$conexion = new mysqli("localhost", "root", "", "equipo_futbol");

if ($conexion->connect_error) {

    echo "Error de conexión";

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $dorsal = $_POST["dorsal"];

    $sql = "INSERT INTO jugadores (nombre, dorsal) VALUES ('$nombre', '$dorsal')";

    $conexion->query($sql);

    echo "<h2>Jugador añadido</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Dorsal: " . $dorsal;

}

?>

</body>

</html>