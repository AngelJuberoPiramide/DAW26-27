<?php

include 'base_de_datos/mysql.php';

$id = $_POST['id'] ?? 0;
$dorsal = $_POST['dorsal'] ?? 0;
$nombre = $_POST['nombre'] ?? '';

$sql = "UPDATE jugadores SET dorsal = :dorsal, nombre = :nombre WHERE id = :id";

$stmt = $conector->prepare($sql);

$stmt->bindParam(':dorsal', $dorsal, PDO::PARAM_INT);
$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

$stmt->execute();

header('Location: index.php');
exit;

?>