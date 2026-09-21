<?php
/*
Ejercicio 6: Tu primera función reutilizable
Concepto: Una función es un bloque de código con nombre que puedes ejecutar las veces que quieras.
Instrucción: Crea una función llamada saludar que reciba un nombre y muestre un mensaje.
*/

$nombre = "Angel";

function saludar($nombre) {
    echo "Hola " . $nombre . ".";
}

saludar($nombre);

?>