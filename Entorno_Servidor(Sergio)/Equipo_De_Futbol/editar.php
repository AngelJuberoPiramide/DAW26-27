<?php

include 'base_de_datos/mysql.php';
include 'entidades/Jugador.php';

$id = $_GET['id'] ?? 0;

$sql = "SELECT * FROM jugadores WHERE id = :id";

$stmt = $conector->prepare($sql);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);

$stmt->execute();

$jugador = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar jugador</title>
</head>

<body>

<?php
include 'componentes/nav.php';
?>

<h1>Editar jugador</h1>

<form action="actualizar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $jugador['id']; ?>">

    <label>Dorsal:</label>
    <input type="number" name="dorsal" value="<?php echo $jugador['dorsal']; ?>" required>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $jugador['nombre']; ?>" required>

    <button type="submit">Guardar cambios</button>

</form>

</body>

</html>
