<?php

require_once './bridge/ImplAbstractaMembresia.php';
require_once './whole_part/DatosBeneficios.php';
class MembresiaVIP extends ImplAbstractaMembresia{
    
    public $datosBeneficio;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function completarMembreisa($datos) {
        parent::completarMembreisa($datos);
        $this->datosBeneficio = new DatosBeneficios();
        $this->datosBeneficio->setDatosBeneficios($datos["beneficios"]);
    }
    
    public function mostrarMembresia() {
        return parent::mostrarMembresia().$this->datosBeneficio->getDatosBeneficios(); 
    }
}
