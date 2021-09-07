<?php
require './datos/DatosCompra.php';

class GestorDatosCompra{
    //Atributos
    public static $datosCompra;

    public static function init(){
        self::$datosCompra = new DatosCompra(); 
    }

    public static function preparaDatosCompra($numTarjeta, $fecha){
        self::init();
        self::$datosCompra->setDatosCompra($numTarjeta, $fecha);
        return self::$datosCompra;
    }

}
