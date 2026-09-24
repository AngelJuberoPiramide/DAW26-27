<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ticket</title>
    <style>
    .error {
        color: red;
    }

    .socio {
        background-color: green;
    }

    .noSocio {
        background-color: gray;
    }
</style>
</head>

<body>

    <h1>Generador de Ticket</h1>

    <form method="POST">

        <label>Nombre del producto:</label>
        <input type="text" name="producto">
        <br><br>

        <label>Precio:</label>
        <input type="number" name="precio" step="0.01">
        <br><br>

        <label>Cantidad:</label>
        <input type="number" name="cantidad">
        <br><br>

        <label>Socio:</label>
        <input type="checkbox" name="socio">
        <br><br>

        <input type="submit" value="Calcular">

    </form>


    <?php

    function calcularTotal($precio, $cantidad, $esSocio)
    {
        $subtotal = $precio * $cantidad;

        if ($esSocio) {
            $descuento = $subtotal * 0.10;
        } else {
            $descuento = 0;
        }

        $total = ($subtotal - $descuento) * 1.21;

        return [
            "subtotal" => $subtotal,
            "descuento" => $descuento,
            "total" => $total
        ];
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $producto = $_POST["producto"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];

        if (isset($_POST["socio"])) {
            $esSocio = true;
        } else {
            $esSocio = false;
        }


        if (empty($producto)) {

            echo "<p class='error'>Introduce un producto.</p>";

        } elseif ($precio <= 0) {

            echo "<p class='error'>Introduce un precio mayor a cero.</p>";

        } elseif ($cantidad <= 0) {

            echo "<p class='error'>Introduce una cantidad mayor a cero.</p>";

        } else {

            $resultado = calcularTotal($precio, $cantidad, $esSocio);

            if ($esSocio) {
                echo "<div class='socio'>";
            } else {
                echo "<div class='noSocio'>";
            }

            echo "<h2>Ticket</h2>";
            echo "Producto: " . $producto . "<br>";
            echo "Precio: " . number_format($precio, 2, ",", ".") . " €<br>";
            echo "Cantidad: " . $cantidad . "<br>";
            echo "Subtotal: " . number_format($resultado["subtotal"], 2, ",", ".") . " €<br>";
            echo "Descuento: " . number_format($resultado["descuento"], 2, ",", ".") . " €<br>";
            echo "Total con IVA: " . number_format($resultado["total"], 2, ",", ".") . " €";

            echo "</div>";
        }
    }

    ?>

</body>
</html>