<?php


require_once 'ProductoCine.php';
require_once './whole_part/membresia/MembresiaSencilla.php';
require_once './whole_part/membresia/MembresiaVIP.php';


class Membresia extends ProductoCine{
    
    public $implementadorProductoCine;
    
    public function __construct($tipoProductoCine) {
        parent::__construct($tipoProductoCine);
    }
    
    public function crearProducto($datos) {
        
        if ($this->tipoProductoCine == 'sencilla'){
            $this->implementadorProductoCine = new MembresiaSencilla();
        }else if($this->tipoProductoCine == 'VIP'){
            $this->implementadorProductoCine = new MembresiaVIP();
        }else{
            echo 'No existe ese producto';
        }
        
        $this->crearMembresia($datos);
    }
    
    public function crearMembresia($datos) {
        $this->implementadorProductoCine->completarProductoCine($datos);
    }
    public function getMembresia() {
        return $this->implementadorProductoCine;
    }
    
    public function mostrarMembresia() {
        return $this->implementadorProductoCine->mostrarProductoCine();
    }
}
