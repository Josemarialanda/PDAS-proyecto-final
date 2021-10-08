<?php

require_once './bridge/Membresia.php';
require_once './bridge/Reservacion.php';

class Cliente {
    
    public function __construct() {
        
    }
    
    public function crearReservacion($tipo, $datos) {
        $reservacion = new Reservacion($tipo);
        $reservacion->crearProducto($datos);
        return $reservacion;
    }
    
    public function crearMembresia($tipo, $datos) {
        $membresia = new Membresia($tipo);
        $membresia->crearProducto($datos);
        return $membresia;
    }

}
