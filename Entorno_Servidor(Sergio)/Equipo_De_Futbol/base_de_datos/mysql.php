<?

//conector mysql
/*
$conexion = new mysqli("localhost", "root", "root", "futbol");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
*/

$username = 'root';
$password = 'root';
$host = 'mysql';
$port = '3306';
$dbname = 'futbol';

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
$conector = null;

try {
    $conector = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}
