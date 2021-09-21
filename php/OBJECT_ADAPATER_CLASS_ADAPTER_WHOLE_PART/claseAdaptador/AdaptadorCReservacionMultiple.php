<?php

require_once 'IReservacionMultiple.php';
require_once './principal/GestorReservacion.php';
require_once './datos/Reservacion.php';
require_once './datos/ReservacionVIP.php';



class AdaptadorCReservacionMultiple extends GestorReservacion implements IReservacionMultiple{
    
    public $reservaciones;
    
    public function __construct() {
        parent::__construct();
        
        $this->reservaciones = array();
    }
    
    public function crearReservacion($datosReservaciones) {
        foreach ($datosReservaciones as $datos) {
            if (count($datos) == 13){
                $r = new Reservacion($datos["nombre"], $datos["apellidoP"], $datos["apellidoM"], $datos["edad"], 
                                    $datos["tipoCliente"], $datos["edad"], $datos["dia"], $datos["mes"], $datos["anio"],
                                    $datos["hora"], $datos["pelicula"], $datos["numTarjeta"], $datos["fecha"]);
                $this->agregarReservacion($r);
            }else{
                $r = new ReservacionVIP($datos["nombre"], $datos["apellidoP"], $datos["apellidoM"], $datos["edad"], 
                                        $datos["tipoCliente"], $datos["edad"], $datos["dia"], $datos["mes"], $datos["anio"],
                                        $datos["hora"], $datos["pelicula"], $datos["numTarjeta"], $datos["fecha"], $datos["beneficios"]);
                $this->agregarReservacion($r);
            }
        }
        return $this->getReservaciones();
    }
    
    public function agregarReservacion($reservacion) {
        array_push($this->reservaciones, $reservacion);
    }

    public function getReservaciones() {
        return $this->reservaciones;
    }



}
