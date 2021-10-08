<?php

require_once 'ReservacionDecoratorFactory.php';
require_once './reservacion/ReservacionMultiple.php';

class ConcreteDecoratorReservacionMultiple extends ReservacionDecoratorFactory{
    public $reservacionExtendida;
    
    public function __construct($reservacionSencilla) {
        parent::__construct($reservacionSencilla);
    }
    
    public function aumentarReservacion($datos){
        $this->volverReservacionMultiple();
    }
    
    public function volverReservacionMultiple(){
        $this->reservacionExtendida = new ReservacionMultiple();
        $this->reservacionExtendida->agregarReservacion($this->reservacionSencilla);
    }
}
