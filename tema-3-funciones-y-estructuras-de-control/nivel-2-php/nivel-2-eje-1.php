<?php
/*Nos han pedido un listado de todos los años donde se produjeron juegos olímpicos desde 1960 incluido hasta 2016 .
Programa un bucle que calcule y muestre por pantalla los años olímpicos dentro de dicho intervalo.
 */

for ($i = 1960; $i <= 2016; $i++){
    if ($i % 4 === 0){
        echo "JJOO Año: $i </br>";
    }
}