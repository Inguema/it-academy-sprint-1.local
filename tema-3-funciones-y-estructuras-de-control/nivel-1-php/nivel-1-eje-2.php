<?php
/*Para jugar al "escondrijo" se nos ha pedido un programa que cuente hasta 10. Pero la persona
* que contará es un poco tramposa y lo hará contando de dos en dos. Crea una función que cuente
* hasta 10, de 2 en 2, mostrando cada número de la cuenta por pantalla.
*/

for($x = 0; $x <= 10; $x++) {
    if($x % 2 === 0) {
        echo $x .  '</br>';
    }
}
