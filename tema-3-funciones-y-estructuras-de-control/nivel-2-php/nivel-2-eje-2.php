<?php
/*Escribe una función que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
*Todo llamamiento que dure menos de 3 minutos tiene un coste de 10 céntimos.
*Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
 */
//Los 3 primeros min = 0.10
//A partir del primer segundo después del min 3, se suma 0.05 por min.


function gastoTelf($minLlamada): float {
    if ($minLlamada <= 3) {
        return 0.10;
    } else {
        $redondeoTiempo = ceil($minLlamada);
        return 0.10 + (($redondeoTiempo - 3) * 0.05);
    }
}

$minLlamada = 6.2;
$gastoTelf = gastoTelf($minLlamada);
echo "Duración llamada: " . $minLlamada . ". Coste: " . $gastoTelf . " €";
