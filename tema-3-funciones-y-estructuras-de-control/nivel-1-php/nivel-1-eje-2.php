<?php
/*Para jugar al "escondrijo" se nos ha pedido un programa que cuente hasta 10. Pero la persona
* que contará es un poco tramposa y lo hará contando de dos en dos. Crea una función que cuente
* hasta 10, de 2 en 2, mostrando cada número de la cuenta por pantalla.
*/

// Calcular resultados
function contarNum(): array {
    for ($x = 2; $x <= 10; $x++) {
        $result[] = $x;
        $x++;
    }
    return $result;
}

// Calcular resultados
function mostrar(array $numeros) {
    foreach ($numeros as $numero) {
        echo $numero . "</br>";
    }
}

echo "Comienza a contar: </br>";

$numeros = contarNum();
mostrar($numeros);