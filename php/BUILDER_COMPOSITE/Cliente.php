<?php

require_once './constructores/ConstructorReservacionSencilla.php';
require_once './constructores/ConstructorReservacionVIP.php';
require_once './constructores/ConstructorReservacionMultiple.php';
require_once './constructores/DirectorReservacion.php';

class Cliente {
    public $directorReservacion;
    
    public function __construct() {
        $this->directorReservacion = new DirectorReservacion();
    }
    
    public function solicitarReservacionSencilla($datos) {
        $constructorReservacionSencilla = new ConstructorReservacionSencilla();
        $this->directorReservacion->setConstructorReservacion($constructorReservacionSencilla);
        $this->directorReservacion->construirReservacion($datos);
        return $constructorReservacionSencilla->obtenerReservacion();
    }
    public function solicitarReservacionVIP($datos) {
        $constructorReservacionVIP = new ConstructorReservacionVIP();
        $this->directorReservacion->setConstructorReservacion($constructorReservacionVIP);
        $this->directorReservacion->construirReservacion($datos);
        return $constructorReservacionVIP->obtenerReservacion();
    }
    
    public function solicitarReservacionMultiple($datos) {
        $constructorReservacionMultiple = new ConstructorReservacionMultiple();
        $this->directorReservacion->setConstructorReservacion($constructorReservacionMultiple);
        $this->directorReservacion->construirReservacion($datos);
        return $constructorReservacionMultiple->obtenerReservacion();
    }
}

