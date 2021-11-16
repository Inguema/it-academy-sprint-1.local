<?php
$texto = "programa";
echo "</br>";
echo "<hr>";
echo $primero = substr("$texto", 0, 1);
echo "</br>";
echo $ultimo = substr($texto, -1, 1);
echo "</br>";
echo $contenido = substr($texto, 1, 6);
echo "</br>";
echo $ultimo . $contenido . $primero;
echo "</br>";
echo "<hr>";