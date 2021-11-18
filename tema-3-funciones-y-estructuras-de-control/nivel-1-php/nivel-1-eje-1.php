<?php

//Programa una función que, dado un número cualquiera (por ejemplo, tu edad) nos diga si es par o impar mediante un mensaje por pantalla.

$x = 4;
//$x = $_GET['edad']; // por parametro en url ?edad=
$residuo = $x % 2;

if ($residuo === 0) {
    echo "$x ES PAR";
} else {
    echo "$x IMPAR";
}