<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'base_de_datos/mysql.php';
include 'entidades/Jugador.php';

$dorsal = $_POST['dorsal'] ?? 0;
$nombre = $_POST['nombre'] ?? '';

$jugador = new Jugador($dorsal, $nombre);

$sql = "INSERT INTO jugadores (dorsal, nombre) VALUES (:dorsal, :nombre)";

$stmt = $conector->prepare($sql);

$stmt->bindParam(':dorsal', $jugador->dorsal, PDO::PARAM_INT);
$stmt->bindParam(':nombre', $jugador->nombre, PDO::PARAM_STR);

$stmt->execute();

header("Location: index.php");
exit;

?>