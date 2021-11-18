<?php
//Escribe un programa en PHP para convertir una cadena en un array (recortando cada carácter y eliminando las líneas vacías).

$texto = "Bienvenidos a It Academy";

$arrayTexto = str_split($texto);
$arrayTexto = array_diff($arrayTexto, array(" ", null));

var_dump($arrayTexto);
