<?php

function costeTotal ($numChocolatinas, $numChicles, $numCaramelos) {
    $chocolate = 1;
    $chicles = 0.50;
    $caramelos = 1.50;

    $coste =($numChocolatinas * $chocolate) + ($numChicles * $chicles) + ($numCaramelos * $caramelos);

    return "Total compra: $coste €";

}

echo costeTotal(4, 1, 0);