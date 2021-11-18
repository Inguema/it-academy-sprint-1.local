<?php
//Imagínate que queremos que cuente hasta un número diferente de 10. Programa la función para que el final de la cuenta esté parametrizado.

$y = 100;

for($x = 0; $x <= $y; $x++){
    if($x % 2 === 0) {
        echo $x .  '</br>';
    }
}
