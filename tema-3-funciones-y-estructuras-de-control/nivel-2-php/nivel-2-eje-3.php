<?php

function costeTotal (int $numChocolatinas, int $numChicles, int $numCaramelos): float {
    $chocolate = 1;
    $chicles = 0.50;
    $caramelos = 1.50;

    return ($numChocolatinas * $chocolate) + ($numChicles * $chicles) + ($numCaramelos * $caramelos);
}

$coste = costeTotal(4, 1, 0);
echo "Total compra: $coste €";
