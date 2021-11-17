<?php
/*
 * Escribir un programa PHP para calcular la suma de los dos valores enteros dados. Si ambos valores son iguales, devuelve el doble de su suma.
 */

function sumaValores ($x, $y) {
    if($x == $y) {
        return "Los valores son iguales por lo tanto el resultado es el doble de la suma: " . 2 * ($x + $y);
    } else {
        return "El resultado de la suma de ambos valores es: " . ($x + $y);
    }
}
echo sumaValores(6 , 6);
echo "</br>";
echo "<hr>";
echo sumaValores(5, 7);