<?php
/*Imprime por pantalla " Hello, World! " utilizando una variable.
=>Convierte todos los caracteres del string a mayúsculas e imprime en pantalla.
=>Imprime por pantalla el tamaño (longitud) de la variable.
=>Imprime por pantalla el string en orden inverso de caracteres.
=>Crea una nueva variable con el contenido " Este es el curso de PHP " e imprime por pantalla la concatenación de ambos strings.
 */

$txt = "Hello World!";

//Variable convertida en mayúsculas

echo strtoupper($txt);
echo '</br>';

//Longitud variable

echo strlen($txt);
echo '</br>';

//Orden inverso

echo strrev($txt);
echo '</br>';

//Conctanación de varios string

$newTxt = "Este es el curso de PHP";
echo $newTxt . " " . $txt;
echo '</br>';