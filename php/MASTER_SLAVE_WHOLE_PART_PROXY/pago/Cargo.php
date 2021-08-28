<?php
class Cargo {
    private $cargo;
    private $reembolsable;
    private $cargoExitoso;
    
    public function __construct() {
        
    }
    
    public function setCargoSolicitado($cargo, $reembolsable){
        $this->cargo = $cargo;
        $this->reembolsable = $reembolsable;
        $this->cargoExitoso = true;
    }
    public function getCargo() {
        return $this->cargo;
    }

    public function getReembolsable() {
        return $this->reembolsable;
    }

    public function getCargoExitoso() {
        return $this->cargoExitoso;
    }

    public function setCargo($cargo): void {
        $this->cargo = $cargo;
    }

    public function setReembolsable($reembolsable): void {
        $this->reembolsable = $reembolsable;
    }

    public function setCargoExitoso($cargoExitoso): void {
        $this->cargoExitoso = $cargoExitoso;
    }




}
