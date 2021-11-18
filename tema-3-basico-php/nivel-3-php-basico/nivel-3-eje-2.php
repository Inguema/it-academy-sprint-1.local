<?php

//Escribe un programa en PHP que cuenta el número total de veces que un valor existe en el array.
$programaNum = [1, 1, 2, 2, 3, 4, 5, 5, 5, 5];
$programaTxt = ["x", "x", "x", "z", "x", "y"];

//Ejemplo con array con valores tipo número.
print_r(array_count_values($programaNum));
echo "<br> <hr>";

//Ejemplo con array con valores tipo texto.
print_r(array_count_values($programaTxt));
echo "<br> <hr>";