<?php

require_once 'Reservacion.php';
require_once './datos/DatosBeneficio.php';
class ReservacionVIP extends Reservacion{
    public $datosBeneficio;
    
    public function __construct() {
        parent::__construct();
        $this->datosBeneficio = new DatosBeneficio();
    }
    
    public function mostrarReservacion() {
        return parent::mostrarReservacion(). $this->getDatosBeneficio()->getDatosBeneficios();
        
    }
    
    public function getDatosBeneficio() {
        return $this->datosBeneficio;
    }
    public function setDatosBeneficio($datosBeneficio): void {
        $this->datosBeneficio = $datosBeneficio;
    }



}
