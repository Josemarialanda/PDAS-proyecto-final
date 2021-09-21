<?php

require_once 'GestorReservacion.php';
require_once './objetoAdaptador/AdaptadorOReservacion.php';
require_once './claseAdaptador/AdaptadorCReservacionMultiple.php';
class Cliente {
    
    public function solicitarReservacion($datos) {
        $gestorReservacion = new GestorReservacion();
        
        $reservacion = $gestorReservacion->crearReservacion($datos);
        return $reservacion;
    }
    public function solicitarReservacionVIP($datos) {
        $gestorOReservacion = new AdaptadorOReservacion();
        
        $reservacion = $gestorOReservacion->crearReservacion($datos);
        
        return $reservacion;
    }
    
    public function solicitarReservacionMultiple($datos){
        $gestorCReservacion = new AdaptadorCReservacionMultiple();
        $reservacion = $gestorCReservacion->crearReservacion($datos);
        return $reservacion;
    }
}
