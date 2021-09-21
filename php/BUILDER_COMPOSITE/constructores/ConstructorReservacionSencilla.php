<?php

require 'ConstructorReservacion.php';
require './reservaciones/ReservacionSencilla.php';
class ConstructorReservacionSencilla implements ConstructorReservacion{
    public $reservacionSencilla;
    
    public function __construct() {
        $this->reservacionSencilla = new ReservacionSencilla();
    }
    
    public function construirDatosFuncion($asiento, $hora, $dia, $mes, $anio, $pelicula) {
        $this->reservacionSencilla->getDatosFuncion()->setDatosFuncion($asiento,$hora, $dia, $mes, $anio, $pelicula);
    }

    public function construirDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente) {
        $this->reservacionSencilla->getDatosCliente()->setDatosCLiente($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente);
    }

    public function construirDatosCompra($numTarjeta, $fecha) {
        $this->reservacionSencilla->getDatosCompra()->setDatosCompra($numTarjeta, $fecha);
    }
    
    public function obtenerReservacion() {
        return $this->reservacionSencilla;
    }


}
