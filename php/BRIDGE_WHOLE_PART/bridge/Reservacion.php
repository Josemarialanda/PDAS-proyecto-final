<?php

require_once './bridge/ProductoCine.php';
require_once './whole_part/reservacion/ReservacionSencilla.php';
require_once './whole_part/reservacion/ReservacionVIP.php';


class Reservacion extends ProductoCine{
    
    public $implementadorProductoCine;
    
    public function __construct($tipoProductoCine) {
        parent::__construct($tipoProductoCine);  
    }
    
    public function crearProducto($datos) {
        
         if ($this->tipoProductoCine == 'sencilla'){
            $this->implementadorProductoCine = new ReservacionSencilla();
        }else if($this->tipoProductoCine == 'VIP'){
            $this->implementadorProductoCine = new ReservacionVIP();
        }else{
            echo 'No existe ese producto';
        }
        
        $this->crearReservacion($datos);
    }
    
    public function crearReservacion($datos) {
        $this->implementadorProductoCine->completarProductoCine($datos);
    }
    public function getReservacion() {
        return $this->implementadorProductoCine;
    }
    
    public function mostrarReservacion() {
        return $this->implementadorProductoCine->mostrarProductoCine();
    }


    
}
