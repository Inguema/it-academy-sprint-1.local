<?php

/**
 * Crea la clase PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.
 * Crea el método throw que no hace otra cosa que echar el dado, es decir, genera un valor aleatorio para el objeto al que se le aplica el método.
 * Crea también el método shapeName, que diga cuál es la figura que ha salido en el último tirón del dado en cuestión.
 * Realiza una aplicación que permita echar cinco dados de póquer a la vez.
 * Además, programa el método getTotalThrowsque debe mostrar el número total de tiradas entre todos los dados.
 */

require_once 'PokerDice.php';

//Instancia de 5 dados
$dadoUno = new PokerDice();
$lanzamiento = $dadoUno->lanzarDado();
$tiradas[] = $dadoUno->figuraDado($lanzamiento);

$dadoDos = new PokerDice();
$lanzamiento = $dadoDos->lanzarDado();
$tiradas[] = $dadoDos->figuraDado($lanzamiento);

$dadoTres = new PokerDice();
$lanzamiento = $dadoTres->lanzarDado();
$tiradas[] = $dadoTres->figuraDado($lanzamiento);

$dadoCuatro = new PokerDice();
$lanzamiento = $dadoCuatro->lanzarDado();
$tiradas[] = $dadoCuatro->figuraDado($lanzamiento);

$dadoCinco = new PokerDice();
$lanzamiento = $dadoCinco->lanzarDado();
$tiradas[] = $dadoCinco->figuraDado($lanzamiento);

//Código que muestra el número de tiradas con los resultados de los 5 dados
$resultados = array_count_values($tiradas);
foreach ($resultados as $caraDado => $resultado) {
    echo 'De la cara ' . $caraDado . ' hay ' . $resultado . ' dados. <br/>';
}






