
<?php

class Account {

    private $nombre;
    private $apellidos;
    private $numCuenta;
    private $saldo;

    //Constructor
    public function __construct($nom, $apellidos, $cuenta, $saldo) {
        $this->nombre = $nom;
        $this->apellidos = $apellidos;
        $this->numCuenta = $cuenta;
        $this->saldo = $saldo;
    }

    //Método deposit($amount)que permite ingresar una cantidad en su cuenta.
    public function ingresarDinero($cantidad) {
        $this->saldo += $cantidad;
    }

    //Método withdraw($amount)que permite retirar una cantidad de la cuenta siempre que haya saldo,
    // si no existe el método deberá devolver un mensaje de error
    public function retirarDinero($cantidadRetirar) {
        if ($this->saldo - $cantidadRetirar >= 0) {
            echo $this->saldo -= $cantidadRetirar;
        } else {
            echo "<p style='color: #d50283'> ¡¡No dispone de dinero suficiente en la cuenta!!</p>";
        }
    }

    /* --------------------------------------------------------------
     *  GETTERS & SETTERS
     * -------------------------------------------------------------*/

    /**
     * @return mixed
     */
    public function getNumCuenta()
    {
        return $this->numCuenta;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    //Setters

    /**
     * @param mixed $numCuenta
     */
    public function setNumCuenta($numCuenta): void
    {
        $this->numCuenta = $numCuenta;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }

}
