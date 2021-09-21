<?php
require_once './principal/GestorReservacion.php';
require_once './datos/ReservacionVIP.php';
class AdaptadorOReservacion extends GestorReservacion{
    
    public function crearReservacion($datos) {
        
        $reservacionVIP = new ReservacionVIP($datos["nombre"], $datos["apellidoP"], $datos["apellidoM"], $datos["edad"], 
                $datos["tipoCliente"], $datos["asiento"], $datos["dia"], $datos["mes"], $datos["anio"],
                $datos["hora"], $datos["pelicula"], $datos["numTarjeta"], $datos["fecha"], $datos["beneficios"]);
        
        return $reservacionVIP;
    }
}
