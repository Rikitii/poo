<?php

require_once __DIR__ . '/controller/ControladorVehiculo.php';
require_once __DIR__ . '/view/VistaVehiculo.php';



$vista = new VistaVehiculo();
$controlador = new ControladorVehiculo($vista);

$controlador-> mostrarTitulo();



