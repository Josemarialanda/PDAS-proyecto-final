<?php


require './principal/GestorReservacion.php';

class Cliente {
    
    public $reservacion;
    public $gestor;
    
    public function __construct(){
        $this->reservacion = new Reservacion();
        $this->gestor = new GestorReservacion();
    }

    public function invocaGestorReservacion($nombre, $apellidoP, $apellidoM, $edad,
                                            $tipoCliente, $numTarjeta, $fecha, $asiento,
                                            $dia, $mes, $anio, $pelicula){
        
        $this->gestor->invocaSubordinados($nombre, $apellidoP,$apellidoM,$edad, 
                                        $tipoCliente, $numTarjeta,$fecha, $asiento, 
                                        $dia, $mes, $anio, $pelicula);
        
        $this->reservacion = $this->gestor->unirResultados();
    }

    public function getGestor(){
        return $this->gestor;
    }

    public function getReservacion(){
        return $this->reservacion;
    }
    
    
}
