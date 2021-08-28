<?php

require_once './pago/Cargo.php';
require_once './pago/IAutorizacionPago.php';
require_once './sistemaExterno/SistemaAutorizacionPago.php';
class ProxyAutorizacionPago implements IAutorizacionPago{
    
    public $cargoSolicitado;

    public function __construct() {
        
    }

    public function solicitaAutorizacionPago(Cargo $cargo): bool{
        $sistema = new SistemaAutorizacionPago();
        $this->setCargoSolicitado($cargo);
        
        $this->preparaCargo();
       
        
        $r = $sistema->solicitaAutorizacionPago($this->getCargoSolicitado());
        
        if ($r ) {
            echo '<br/> Cargo Autorizado';
        }else
            echo '<br/> Cargo rechazado';

        return $r;
        
        
    }
    
    public function preparaCargo(){
        $cargo = 100;
        $reembolsable = false;
        $this->cargoSolicitado->setCargoSolicitado($cargo,$reembolsable);
       
    }

    public function getCargoSolicitado(){
        return $this->cargoSolicitado;
    }

    public function setCargoSolicitado(Cargo $cargo){
        $this->cargoSolicitado = $cargo;

    }

    

}
