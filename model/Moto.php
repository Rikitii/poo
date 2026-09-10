<?php

require_once __DIR__ . '/Vehiculo.php';

class Moto extends Vehiculo
{

    // Atributo de moto

    private $cilindrada;

    
    public function __construct($marca,$estado,$cilindrada) {
        // Llama al padre (Reutilización)

        parent::__construct($marca, 'Moto', $estado);

        // Inicializamos del atributo propio de moto 
        $this->Cilindrada = $cilindrada;

    }

    //GETTERS Y SETTERS propios de moto

     public function getCilindrada(){
        return $this->cilindrada;
    }

    public function setCilindrada(){
        $this->cilindrada = $cilindrada;
    }


    public function mostrarInfo(){
        return parent::mostrarInfo() . "| cilindrada:
        {$this->cilindrada} cc.";
    }
   
}
