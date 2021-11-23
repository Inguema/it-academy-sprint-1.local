<?php
/**Crear una clase Employee define como atributos su nombre y sueldo.
 * Definir un método initialize que reciba como parámetros el nombre y sueldo.
 * Plantear un segundo método print que imprima el nombre y un mensaje si debe
 * o no pagar impuestos (si el sueldo supera 6000 paga impuestos).
 */

    class Empleado {
        private $nombre;
        private $sueldo;

        public function initialize ($nom, $sueldo) {
            $this -> nombre = $nom;
            $this -> sueldo = $sueldo;
        }

        public function imprimir () {

            if ($this -> sueldo > 6000) {
                echo $this -> nombre . "debe pagar impuestos";
            } else {
                echo $this -> nombre . " no debe pagar impuestos";
            }

        }
    }

    $obj = new Empleado;
    $obj -> initialize("Andrea", 1500);
    $obj -> imprimir();