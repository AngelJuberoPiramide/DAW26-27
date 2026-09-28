<?php

include 'base_de_datos/mysql.php';

$dorsal = $_POST['dorsal'] ?? 0;

$sql = "DELETE FROM jugadores WHERE dorsal = :dorsal";

$stmt = $conector->prepare($sql);

$stmt->bindParam(':dorsal', $dorsal, PDO::PARAM_INT);

$stmt->execute();

header('Location: index.php');
exit;

?>