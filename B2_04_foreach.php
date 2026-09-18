<?php
/*
Ejercicio 4: Recorrer una lista fácilmente (foreach)
Concepto: El bucle foreach es el más fácil de usar para recorrer todos los elementos de un array.
Instrucción: Crea un array con 3 frutas y muéstralas una a una en formato de lista.
 */

$frutas = ["fresa", "manzana", "melocoton"];

foreach($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>