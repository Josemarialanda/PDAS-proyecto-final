<?php
require './datos/DatosCliente.php';

class GestorDatosCliente{
    //attr
    
    public static $datosCliente;
    
    public static function init(){
        self::$datosCliente = new DatosCliente(); 
    }

    public static function preparaDatosCliente($nombre, $apellidoP, $apellidoM,$edad, $tipoC){
        self::init();
        self::$datosCliente->setDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoC);
        
        return self::$datosCliente;
    }
}