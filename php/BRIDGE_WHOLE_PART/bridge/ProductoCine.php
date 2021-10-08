<?php


abstract class ProductoCine {
    
    public $tipoProductoCine;
    
    public function __construct($tipoProductoCine) {
        $this->tipoProductoCine = $tipoProductoCine;
    }
    
    public function crearProductoCine() {
        
    }
    
}
