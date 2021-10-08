<?php
require_once 'ReservacionDecoratorFactory.php';
require_once './reservacion/ReservacionVIP.php';

class ConcreteDecoratorReservacionVIP extends ReservacionDecoratorFactory{
    
    public $reservacionExtendida;
    
    public function __construct($reservacionSencilla) {
        parent::__construct($reservacionSencilla);
    }
    
    public function volverReservacionVIP($datos) {
        $this->reservacionExtendida = new ReservacionVIP($datos, $this->reservacionSencilla->datosCliente,
                $this->reservacionSencilla->datosCompra,$this->reservacionSencilla->datosFuncion);
        
    }
    
    public function aumentarReservacion($datos) {
        $this->volverReservacionVIP($datos);
    }
}
