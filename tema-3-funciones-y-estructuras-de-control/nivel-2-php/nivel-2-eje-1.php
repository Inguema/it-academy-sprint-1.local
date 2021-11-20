<?php
/*Nos han pedido un listado de todos los años donde se produjeron juegos olímpicos desde 1960 incluido hasta 2016 .
Programa un bucle que calcule y muestre por pantalla los años olímpicos dentro de dicho intervalo.
 */

$x = 1960; //Año desde
$y = 2016; //Año hasta

// Calcular años
function jjoo ($x, $y): array {
    $years = [];
    for ($i = $x; $i <= $y; $i++) {
        if ($i % 4 === 0){
            $years[] = $i;
        }
    }
    return $years;
}

// Mostrar años
function mostrar (array $years) {
    echo "JJOO Año: </br>";
    foreach ($years as $year) {
        echo $year . '</br>';
    }
}

$years = jjoo($x, $y);
mostrar($years);

/*
function jjoo ($x, $y) {
    for ($i = $x; $i <= $y; $i++){
        if ($i % 4 === 0){
            echo $i . "</br>";
        }
    }
}
echo "JJOO Año: </br>";
jjoo($x, $y);
*/

