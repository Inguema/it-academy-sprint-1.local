<?php

function costeTotal ($numChocolatinas, $numChicles, $numCaramelos): float {
    $chocolate = 1;
    $chicles = 0.50;
    $caramelos = 1.50;

    $coste = ($numChocolatinas * $chocolate) + ($numChicles * $chicles) + ($numCaramelos * $caramelos);

    return $coste;

}
$coste = costeTotal(4, 1, 0);

echo "Total compra: $coste €";
