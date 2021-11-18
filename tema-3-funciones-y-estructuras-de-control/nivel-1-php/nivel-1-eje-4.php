<?php
/*Para prevenir olvidos al utilizar nuestra maravillosa opción "escondrijo" estableceremos
un parámetro por defecto igual a 10 en la función que se encarga de realizar esta cuenta.
 */

$y = 100;

for($x = 10; $x <= $y; $x++){
    if($x % 2 === 0) {
        echo $x .  '</br>';
    }
}
