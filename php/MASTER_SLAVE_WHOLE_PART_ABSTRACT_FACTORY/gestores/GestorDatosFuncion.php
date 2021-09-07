<?php
require './datos/DatosFuncion.php';
class GestorDatosFuncion{
    //attr
    public static $datosFuncion;

    public static function init(){
        self::$datosFuncion = new DatosFuncion(); 
    }

    public static function preparaDatosFuncion($asiento, $dia, $mes,$anio, $pelicula){
        self::init();
        self::$datosFuncion->setDatosFuncion($asiento, $dia, $mes,$anio, $pelicula);
        return self::$datosFuncion;
    }
}