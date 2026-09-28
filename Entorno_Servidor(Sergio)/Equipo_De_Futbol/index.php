<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de jugadores</title>
</head>

<body>

<?php
include 'componentes/nav.php';
include 'base_de_datos/mysql.php';
include 'entidades/Jugador.php';
?>

<h1>Lista de jugadores</h1>

<form action="index.php" method="GET">

    <input name="buscar" type="text" placeholder="Buscar jugador">

    <button type="submit">Buscar</button>

</form>

<ul>

    <?php

    $buscar = $_GET['buscar'] ?? '';

    if ($buscar != '') {

        $query = "SELECT * FROM jugadores WHERE nombre LIKE :buscar";

        $stmt = $conector->prepare($query);

        $buscar = '%' . $buscar . '%';

        $stmt->bindParam(':buscar', $buscar, PDO::PARAM_STR);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row) {

            $jugador = new Jugador($row['dorsal'], $row['nombre']);

            echo '<li>';

            echo '<form action="borrar.php" method="POST">';

            echo '<input type="hidden" name="dorsal" value="' . $jugador->dorsal . '">';

            echo '<p>Dorsal: ' . $jugador->dorsal . '</p>';

            echo '<p>Nombre: ' . $jugador->nombre . '</p>';

            echo '<button type="submit">Borrar</button>';

            echo '</form>';

            echo '</li>';
        }
    }

    ?>

</ul>

</body>

</html>