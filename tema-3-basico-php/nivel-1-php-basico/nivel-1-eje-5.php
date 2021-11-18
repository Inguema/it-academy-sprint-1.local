<?php
/*Crea dos  arrays , uno que incluya 5  integers , y otro que incluya 3  integers.
    Añade un valor más al array  que contiene 3  integers .
    Mezcla los dos  arrays  e imprime el tamaño del array  resultante por pantalla.
    Ahora imprime por pantalla el array resultando valor a valor.
    Consejo: puede que las funciones var_dump() y/o print_r() te resulten útiles para visualizar el contenido de tus arrays.
 */

$arrayUno = array(1, 2, 3, 4, 5);
$arrayDos = array(6, 7, 8);

//Añadir un valor al array que contiene 3 integers.
array_push($arrayDos, 9);
print_r($arrayDos);
echo "</br> <hr>";

//Mezcla los dos arrays e imprime el tamaño del array resultante.
$result = array_merge($arrayUno, $arrayDos);
echo "El tamaño del array resultante es: " . count($result) . "</br> <hr>";

//Imprimir por pantalla el array resultante valor a valor.
echo "Array resultante valor a valor: " ."</br>";
print_r($result) . "</br> <hr>";
