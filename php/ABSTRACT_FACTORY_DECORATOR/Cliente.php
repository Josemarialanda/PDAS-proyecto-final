<?php

require_once './reservacion/ReservacionSencilla.php';
require_once './decorator/ConcreteDecoratorReservacionVIP.php';
require_once './decorator/ConcreteDecoratorReservacionMultiple.php';
require_once './abstractFactory/ReservacionSencillaFactory.php';

class Cliente {
    public function solicitaReservacionSencilla($datos) {
        $reservacinoSencillaF = new ReservacionSencillaFactory();
        $reservacinoSencillaF->crearReservacion($datos);
        
        return $reservacinoSencillaF->reservacionSencilla;
    }
    
    public function hacerVIP($reservacionSencilla,$datos) {
        $concreteReservacionVIP = new ConcreteDecoratorReservacionVIP($reservacionSencilla);
        $concreteReservacionVIP->aumentarReservacion($datos);
        return $concreteReservacionVIP->reservacionExtendida;
    }
    
    public function hacerMultiple($reservacionSencilla) {
        $concreteReservacionMultiple = new ConcreteDecoratorReservacionMultiple($reservacionSencilla);
        $concreteReservacionMultiple->aumentarReservacion('datos');
        return $concreteReservacionMultiple->reservacionExtendida;
    }
}
