<?php

class DatosBeneficios {
    
    public $beneficios;
    
    public function __construct() {
        $this->beneficios = array();
    }
    
    public function setDatosBeneficios($beneficios) {
        
        foreach ($beneficios as $b) {
            $this->beneficios[] = $b;
        }
        
    }
    
    public function getDatosBeneficios() {
        
        $informacion = "<h2>Beneficios</h2>";
        
        foreach ($this->beneficios as $b) {
            $informacion .= ".- " . $b."</br>";
        }
        
        return $informacion;
    }
}
