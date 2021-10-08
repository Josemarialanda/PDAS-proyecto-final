<?php

require_once './bridge/ImplAbstractaReservacion.php';
class ReservacionSencilla extends ImplAbstractaReservacion{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function completarReservacion($datos) {
        parent::completarReservacion($datos);
    }
    
    public function mostrarReservacion() {
        return parent::mostrarReservacion();
    }

}
