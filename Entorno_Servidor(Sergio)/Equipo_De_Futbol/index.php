<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    include 'components/nav.php';
    include 'db/mysql.php';
    include 'entities/Jugador.php';
    ?>
    <h1>Lista de jugadores</h1>
    <form action="index.php" method="GET">
        <input name="buscar" type="text" placeholder="Buscar jugador">
        <button type="submit">Buscar</button>
    </form>
    <ul>
        <?
        $query = 'SELECT * FROM jugadores';
        $stmt = $conector->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $jugadores = array();

        foreach ($results as $row) {
            $jugador = new Jugador($row['dorsal'], $row['nombre']);
            array_push($jugadores, $jugador);
        }

        $buscar = $_GET['buscar'] ?? '';
        foreach ($jugadores as $jugador) {
            if ($buscar == $jugador->nombre || $buscar == '') {
                echo '<li>';
                echo '<form action="borrar.php" method="POST">';
                echo '<input type="hidden" name="dorsal" value="' . $jugador->dorsal . '">';
                echo '<p>' . $jugador->dorsal . '</p>';
                echo '<p>' . $jugador->nombre . '</p>';
                echo '<button type="submit">Borrar</button>';
                echo '</form>';
                echo '</li>';
            }
        }
        ?>
    </ul>
</body>

</html>