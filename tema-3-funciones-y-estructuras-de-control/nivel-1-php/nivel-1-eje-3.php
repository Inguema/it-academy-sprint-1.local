<?php
//Imagínate que queremos que cuente hasta un número diferente de 10. Programa la función para que el final de la cuenta esté parametrizado.

$final = 50;

// Calcular resultados
function contarNum(int $final): array {
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

$numeros = contarNum($final);
mostrar($numeros);