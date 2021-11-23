<?php
/**Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto.
 * Define dos subclases; Triangle y Rectangle que hereden de Shape y que calculen respectivamente el área de la forma area().
 * En el archivo main define dos objetos, un triángulo y un rectángulo y llama al método area de cada uno.
 */
//Triangulo::__construct(ancho, alto);
include ('figura.php');
include ('triangulo.php');
include ('rectangulo.php');

$triangulo = new Triangulo (10, 5,  "El área del triángulo es: ");
$triangulo -> calcularArea();
$triangulo -> area();

$rectangulo = new Rectangulo(10, 6, "El área del rectángulo es: ");
$rectangulo -> calcularArea();
$rectangulo  -> area();
