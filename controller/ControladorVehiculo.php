<?php

// importación de las clases del modelo que el controller usará
require_once __DIR__ . '/../model/Vehiculo.php';
require_once __DIR__ . '/../model/Moto.php';
require_once __DIR__ . '/../model/Auto.php';


// Importación a la vista que el controller utilizará

require_once __DIR__ . '/../view/VistaVehiculo.php';

class ControladorVehiculo
{
    private $vista;

    /**  @param VistaVehiculo $vista */
    public function __construct(VistaVehiculo $vista)
    {
        $this->vista = $vista;
    }

    public function demostrar()
    {

        // titulo inicial

        $this->vista->mostrarTitulo('Demostración POO -- Vehículos (MVC)');

        $vehiculos = array(
            new Vehiculo('Generico','Vehiculo',true),
            new Auto('Toyota', true, 4),
            new Auto('Renault',false,5),
            new Moto("Yamaha",true, 250)
        );

        $this->vista->mostrarSeparador();
        foreach ($vehiculos as $vehiculo){
            $this->vista->mostrarVehiculo($vehiculo);
        }

        $this->vista->mostrarSeparador();

        echo "pilares POO aplicados <br>";
        echo "- Encapsulamiento: atributos privados (marca,tipo,estado).";
        echo "- Herencia";
        echo "- Polimorfismo: mostrarInfo()se comporta distinto en cada subclase. <br>";
    }

    
}
