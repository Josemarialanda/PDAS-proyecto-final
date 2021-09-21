<?php

require_once 'ConstructorReservacion.php';
require_once './reservaciones/ReservacionVIP.php';
class ConstructorReservacionVIP implements ConstructorReservacion{
    public $reservacionVIP;
    
    public function __construct() {
        $this->reservacionVIP = new ReservacionVIP();
    }
    
    public function construirDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente) {
        $this->reservacionVIP->getDatosCliente()->setDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente);
    }

    public function construirDatosCompra($numTarjeta, $fecha) {
        $this->reservacionVIP->getDatosCompra()->setDatosCompra($numTarjeta, $fecha);
    }

    public function construirDatosFuncion($asiento, $hora, $dia, $mes, $anio, $pelicula) {
        $this->reservacionVIP->getDatosFuncion()->setDatosFuncion($asiento, $hora, $dia, $mes, $anio, $pelicula);
    }
    
    public function construirDatosBeneficio($beneficios){
        $this->reservacionVIP->getDatosBeneficio()->setDatosBeneficios($beneficios);
    }

    public function obtenerReservacion() {
        return $this->reservacionVIP;
    }

}
