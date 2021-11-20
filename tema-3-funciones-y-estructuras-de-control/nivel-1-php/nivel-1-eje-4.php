<?php
/*
Para prevenir olvidos al utilizar nuestra maravillosa opción "escondrijo" estableceremos
un parámetro por defecto igual a 10 en la función que se encarga de realizar esta cuenta.
 */

// Calcular resultados
function contarNum(int $final = 10): array {
    $result = [];
    for ($x = 2; $x <= $final; $x++) {
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
