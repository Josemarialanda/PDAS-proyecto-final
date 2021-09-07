<?php
require './datos/DatosBeneficio.php';

/**
 * Description of GestorDatosBeneficio
 *
 * @author giltenorio
 */
class GestorDatosBeneficio {
    public static $datosBeneficio;
    
    public static function init(){
        
        self::$datosBeneficio = new DatosBeneficio(); 
    }

    public static function preparaDatosBeneficio($datosBeneficio){
        self::init();
        
        self::$datosBeneficio->setDatosBeneficios($datosBeneficio);
        
        return self::$datosBeneficio;
    }
}
