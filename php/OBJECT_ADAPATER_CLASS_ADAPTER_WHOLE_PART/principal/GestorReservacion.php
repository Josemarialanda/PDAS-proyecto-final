<?php

require_once './datos/Reservacion.php';
class GestorReservacion {
    
    public function __construct() {
        
    }
    
    public function crearReservacion($datos) {
        
        $reservacion = new Reservacion($datos["nombre"], $datos["apellidoP"], $datos["apellidoM"], $datos["edad"], 
                $datos["tipoCliente"], $datos["edad"], $datos["dia"], $datos["mes"], $datos["anio"],
                $datos["hora"], $datos["pelicula"], $datos["numTarjeta"], $datos["fecha"]);
        return $reservacion;
    }
}
