<?php
/*
Escribir una función para verificar el grado de un estudiante en función de la nota.
Condiciones:
    Si la nota es 60% o más, el grado debería ser Primera División.
    Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
    Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
    Si la nota es menor a 33%, el estudiante reprobará.
 */

//$nota = (int) $_GET['nota']; // por parametro en url ?nota=
$nota = 59;

function notaAlumno(float $nota) {
    switch ($nota) {
        case $nota <= 0:
            echo "Error en la nota";
            break;
        case $nota <= 32:
            echo "El estudiante reprobará";
            break;
        case $nota <= 44:
            echo "Tercera División";
            break;
        case $nota <= 59:
            echo "Segunda División";
            break;
        case $nota <= 100:
            echo "Primera División";
            break;
        default:
            if ($nota === 0) {
                echo "El estudiante reprobará";
            }
    }
}


notaAlumno($nota);