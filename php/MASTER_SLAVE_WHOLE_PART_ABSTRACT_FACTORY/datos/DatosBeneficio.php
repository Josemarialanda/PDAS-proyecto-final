<?php


/**
 * Description of DatosBeneficio
 *
 * @author giltenorio
 */
class DatosBeneficio {
    public $beneficios;
    
    
    public function __construct() {
        
    }

    public function setDatosBeneficios($beneficios) {
        $this->beneficios = $beneficios;
    }

    public function getDatosBeneficios() {
        
    return $this->beneficios;
    }

}
