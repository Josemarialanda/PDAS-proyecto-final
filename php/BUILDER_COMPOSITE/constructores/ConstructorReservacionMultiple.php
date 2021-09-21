<?php

require_once './constructores/ConstructorReservacion.php';
require_once './reservaciones/ReservacionSencilla.php';
require_once './reservaciones/ReservacionVIP.php';
require_once './reservaciones/ReservacionMultiple.php';


class ConstructorReservacionMultiple implements ConstructorReservacion{
    
    public $reservacionMultiple;
    
    public function __construct() {
        $this->reservacionMultiple = new ReservacionMultiple();
    }
    
    public function construirDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente) {
        $this->reservacionMultiple->getDatosCliente()->setDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente);
    }

    public function construirDatosCompra($numTarjeta, $fecha) {
        $this->reservacionMultiple->getDatosCompra()->setDatosCompra($numTarjeta, $fecha);
    }

    public function construirDatosFuncion($asiento, $hora, $dia, $mes, $anio, $pelicula) {
        $this->reservacionMultiple->getDatosFuncion()->setDatosFuncion($asiento, $hora, $dia, $mes, $anio, $pelicula);
    }
    
    public function construirDatosBeneficio($beneficios) {
    if (is_null($beneficios)){
            $this->reservacionMultiple->getDatosBeneficio()->setDatosBeneficio($beneficios);
            
            $reservacion = new ReservacionVIP();
            $reservacion->setDatosCliente($this->reservacionMultiple->getDatosCliente());
            $reservacion->setDatosCompra($this->reservacionMultiple->getDatosCompra());
            $reservacion->setDatosFuncion($this->reservacionMultiple->getDatosFuncion());
            $reservacion->setDatosBeneficio($this->reservacionMultiple->getDatosBeneficio());
            $this->reservacionMultiple->agregarReservacion($reservacion);
        }else{
            $reservacion = new ReservacionSencilla();
            $reservacion->setDatosCliente($this->reservacionMultiple->getDatosCliente());
            $reservacion->setDatosCompra($this->reservacionMultiple->getDatosCompra());
            $reservacion->setDatosFuncion($this->reservacionMultiple->getDatosFuncion());
            
            $this->reservacionMultiple->agregarReservacion($reservacion);
        }
        
    }

    public function obtenerReservacion() {
        return $this->reservacionMultiple;
    }

}
