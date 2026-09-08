<?php

require_once __DIR__ . '/Vehiculo.php';

class Auto extends Vehiculo
{
    private $numeroPuertas;

   
    public function __construct($marca, $estado, $numeroPuertas)
    {
        parent::__construct($marca, 'Auto', $estado);

        $this->numeroPuertas = $numeroPuertas;
    }

    //GETTERS Y SETTERS

    public function getNumeroPuertas(){
        return $this->numeropuertas;
    }

    public function setNumeroPuertas($numeroPuertas){
        $this->numeropuertas = $numeroPuertas;
    }

    public function mostarInfo()
    {
        return parent::mostarInfo() . " |puertas";
    }
}
