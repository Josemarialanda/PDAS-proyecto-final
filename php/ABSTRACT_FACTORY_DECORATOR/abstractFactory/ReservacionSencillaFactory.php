<?php

require_once './abstractFactory/ReservacionFactory.php';
require_once './reservacion/ReservacionSencilla.php';

class ReservacionSencillaFactory implements ReservacionFactory{
    
    public $reservacionSencilla;
    
    public function crearReservacion($datos) {
        $this->crearReservacionSencilla($datos);
    }
    
    public function crearReservacionSencilla($datos) {
        $this->reservacionSencilla= new ReservacionSencilla($datos);
    }

}
