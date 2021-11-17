<?php

$texto = "programa";

//Para obtener la primera letra de la variable string
$primero = substr("$texto", 0, 1);
echo "$primero </br> <hr>";

//Para obtener la última letra de la variable string
$ultimo = substr($texto, -1, 1);
echo "$ultimo </br> <hr>";

//Para obtener el contenido entre la primera y última letra de la variable string
$num = strlen($texto);
$contenido = substr($texto, 1, $num - 2);
echo "$contenido </br> <hr>";

//Composición de las tres variables concatenadas.
echo $ultimo . $contenido . $primero . "</br> <hr>";
