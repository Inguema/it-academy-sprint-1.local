<?php

//Criba de Eratóstenes

function cribaErastotenes ($x): array {
    //Definimos el límite que será la variable x, parámetro que le daremos a la función.
    //Lista de números comenzando por el 2 hasta límite establecido en x que daremos por parámetro a la función.

    $numIntervalo = [];

    //Creamos un bucle for para guardar en un array el intérvalo de los números.
    for ($i = 2; $i < $x; $i++) {
        $numIntervalo[$i] = true;
    }

    //Recorremos los números y si son primos, miramos los múltiplos para descartarlos como no primos = false.
    for ($y = 2; $y < $x; $y++) {
        if ($numIntervalo[$y]) {
            for ($i = $y * $y; $i < $x; $i += $y) {
                $numIntervalo[$i] = false;
            }
        }
    }
    return $numIntervalo;
}

function mostrar (array $numeros) {
    foreach ($numeros as $numero => $esPrimo) {
        if ($esPrimo === true) {
            echo $numero . "<br/>";
        }
    }
}

//Establecer
echo "Números primos<hr/>";

$x = 20;
$numeros = cribaErastotenes($x);
echo "Listado total<hr/>";
var_dump($numeros);

echo "Solo primos<hr/>";
mostrar($numeros);