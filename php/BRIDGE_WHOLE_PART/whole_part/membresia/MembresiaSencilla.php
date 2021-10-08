<?php
require_once './bridge/ImplAbstractaMembresia.php';

class MembresiaSencilla extends ImplAbstractaMembresia{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function completarMembreisa($datos) {
        parent::completarMembreisa($datos);
    }
    
    public function mostrarMembresia() {
        return parent::mostrarMembresia();
    }

}
