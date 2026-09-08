<?php

class VistaVehiculo
{
    /**  @param Vehiculo $vehiculo */

    public function mostrarVehiculo(Vehiculo $vehiculo)
    {
        echo $vehiculo->mostarInfo();
    }

    public function mostrarSeparador(){
        echo str_repeat('-',60);
    }


    /** @param string $titulo*/
    public function mostrarTitulo($titulo)
    {
        echo "=== {$titulo} ===";
    }
}
