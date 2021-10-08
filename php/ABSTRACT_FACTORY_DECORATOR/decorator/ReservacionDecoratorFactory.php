<?php

require_once './abstractFactory/ReservacionFactory.php';

class ReservacionDecoratorFactory implements ReservacionFactory{
    
    public $reservacionSencilla;
    
    public function __construct($reservacionSencilla) {
        $this->reservacionSencilla = $reservacionSencilla;
    }

    public function crearReservacion($datos) {
        
    }
    
    public function aumentarReservacion($datos) {
        
    }
    
    
    

}
