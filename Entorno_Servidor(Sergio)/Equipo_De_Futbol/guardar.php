<?
include 'db/mysql.php';
include 'entities/Jugador.php';

$dorsal = $_POST['dorsal'] ?? 0;
$nombre = $_POST['nombre'] ?? '';

$jugador = new Jugador($dorsal, $nombre);

$sql = "insert into jugadores (dorsal, nombre) values (:dorsal, :nombre)";
$stmt = $conector->prepare($sql);
$stmt->bindParam(':dorsal', $jugador->dorsal, PDO::PARAM_INT);
$stmt->bindParam(':nombre', $jugador->nombre, PDO::PARAM_STR);

$stmt->execute();

header("Location: index.php");
