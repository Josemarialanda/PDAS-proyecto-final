<?php
require './principal/MembresiaFactory.php';


class Cliente {
    public $reservacionF;
    public $membresia;
    
    public function __construct() {
        $this->reservacionF = new ReservacionMasterFactory();
        $this->membresia = new MembresiaFactory();
        
    }
    
    public function solicitarProductoSencillo($tipo,$nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta,
                                        $fecha, $asiento, $dia, $mes, $anio, $pelicula){
        if($tipo == "reservacion"){
            $r = $this->reservacionF->crearProductoCineSencillo($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta, $fecha, $asiento, $dia, $mes, $anio, $pelicula);
            return $r;
        }else{
           
            $m = $this->membresia->crearProductoCineSencillo($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta, $fecha, $asiento, $dia, $mes, $anio, $pelicula);
            
            return $m;
        }
        
    }
    
    public function solicitarProductoVIP($tipo,$nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta,
                                        $fecha, $asiento, $dia, $mes, $anio, $pelicula, $beneficio){
        
        if($tipo == "reservacion"){
            $r = $this->reservacionF->crearProductoCineVIP($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta, $fecha, $asiento, $dia, $mes, $anio, $pelicula,$beneficio);

            return $r;  
        }else{
            $m = $this->membresia->crearProductoCineVIP($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta, $fecha, $asiento, $dia, $mes, $anio, $pelicula,$beneficio);
            
            return $m;
        }
        
    }
}
