<?php

require_once './bridge/ImplAbstractaReservacion.php';
require_once './whole_part/DatosBeneficios.php';

class ReservacionVIP extends ImplAbstractaReservacion{
    
    public $datosBeneficios;
    
    public function __construct() {
        parent::__construct();
        $this->datosBeneficios = new DatosBeneficios();
    }
    
    public function completarReservacion($datos) {
        parent::completarReservacion($datos);
        $this->datosBeneficios->setDatosBeneficios($datos["beneficios"]);    
    }
    
    public function mostrarReservacion() {
        return parent::mostrarReservacion(). $this->datosBeneficios->getDatosBeneficios();    
    }
}
