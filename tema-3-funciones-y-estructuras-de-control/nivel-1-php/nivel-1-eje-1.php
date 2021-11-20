<?php

//Programa una función que, dado un número cualquiera (por ejemplo, tu edad) nos diga si es par o impar mediante un mensaje por pantalla.

$x = 4;
//$x = $_GET['edad']; // por parametro en url ?edad=


function parImpar ($x) : string {

    $residuo = $x % 2;

    if ($residuo === 0) {
        return "$x es PAR";
    } else {
        return "$x es IMPAR";
    }
}

$result = parImpar($x);
echo $result;

