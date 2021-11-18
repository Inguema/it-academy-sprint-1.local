<?php
/*Declara dos variables X e Y de tipo int, dos variables N y M de tipo double y asigna a cada una un valor. A continuación, muestra por pantalla para X e Y :
El valor de cada variable
La suma
La resta
El producto
El módulo
Por N y M realizarás lo mismo.

Para todas las variables (X, Y, N, M)

El doble de cada variable
La suma de todas las variables
El producto de todas las variables
 */

$x = 1;
$y = 2;
$n = 1.51;
$m = 2.51;

echo "VALORES DE 'X' E 'Y'</br> <hr>";
echo "El valor de x es: " . $x . "</br>";
echo "El valor de y es: " . $y . "</br> <hr>";
echo "Suma: $x + $y = " . ($x + $y) . "</br>";
echo "Resta: $x - $y = " . ($x - $y) . "</br>";
echo "Multiplicación: $x * $y = " . ($x * $y) . "</br>";
echo "Módulo: $x % $y = " . ($x % $y) . "</br>";
echo "</br>";

echo "VALORES DE N Y M</br> <hr>";
echo "El valor de n es: " . $n . "</br>";
echo "El valor de m es: " . $m . "</br> <hr>";
echo "Suma: $n + $m = " . ($n + $m) . "</br>";
echo "Resta: $n - $m = " . ($n - $m) . "</br>";
echo "Multiplicación: $n * $m = " . ($n * $m) . "</br>";
echo "Módulo: $n % $m = " . ($n % $m) . "</br>";
echo "</br>";

echo "VALORES DE 'X', 'Y', 'N' y 'M'</br> <hr>";
echo "(2 * $x) = " . (2 * $x) . "</br>";
echo "(2 * $y) = " . (2 * $y) . "</br>";
echo "(2 * $n) = " . (2 * $n) . "</br>";
echo "(2 * $m) = " . (2 * $m) . "</br>";
echo "Suma de todas las variables: $x + $y + $n + $m = " . ($x + $y + $n + $m) . "</br>";
echo "Multplicación de todas las variables: $x *  $y * $n * $m = " . ($x * $y * $n * $m) . "</br>";
echo "</br>";