<?php
/**Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto.
 * Define dos subclases; Triangle y Rectangle que hereden de Shape y que calculen respectivamente el área de la forma area().
 * En el archivo main define dos objetos, un triángulo y un rectángulo y llama al método area de cada uno.
 */

    class Figura {

        //Atributos de la clase padre forma
        public $ancho;
        public $alto;
        public $area;

        //Constructor de clase
        public function __construct ($base, $altura) {
            $this -> ancho = $base;
            $this -> alto = $altura;
        }

        //Métodos de clase
        public function area () {

            echo $this -> area . "<br/>";

        }
    }