<?php

/**
 * Crea la clase PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.
 * Crea el método throw que no hace otra cosa que echar el dado, es decir, genera un valor aleatorio para el
 * objeto al que se le aplica el método.
 * Crea también el método shapeName, que diga cuál es la figura que ha salido en el último tirón del dado en cuestión.
 * Crea finalmente el método getTotalThrows que debe mostrar el número total de tiradas entre todos los dados
 * Realiza una aplicación que permita echar cinco dados de póquer a la vez.
 */

class PokerDice {

    //Atributos
    private $dado = ["AS", "K", "Q", "J", "7", "8"];


    //Método lanzamiento de dados
    public function lanzarDado(): string {
        return array_rand($this->dado);
    }

    //Método que índique la figura que ha salido
    public function figuraDado($lanzamiento): string {
        return $this->dado[$lanzamiento];
    }

    //Método getTotalThrows que debe mostrar el número total de tiradas entre todos los dados
    public function getTotalLanzamientos() {

    }
}