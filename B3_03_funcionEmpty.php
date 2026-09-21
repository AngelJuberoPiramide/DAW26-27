<?php

/*
Ejercicio 3: Comprobar si el usuario dejó la casilla vacía (empty)
Concepto: La función empty() comprueba si una variable no tiene ningún valor escrito.
Instrucción: Verifica si el usuario envió un campo vacío desde un formulario.
*/

$variable = 1;

if(empty($variable)) {
    echo "La variable esta vacia.";
} else {
    echo "La variable no esta vacia.";
}

?>