<?php
require_once './pago/IAutorizacionPago.php';
class SistemaAutorizacionPago implements IAutorizacionPago{
    
    public  $cargoSolicitado;
    
    public function __construct() {
    }
    
    public  function solicitaAutorizacionPago(Cargo $cargo): bool {
        $this->cargoSolicitado = $cargo;
        
        echo '<br>Procesando cargo...';
        
        echo '<br>Procesando cargo...';
        $this->autorizacionCargo();
        $r = false;
        $r = $this->verificacionCargo();
        
        return $r;
        
    }
    
    public  function verificacionCargo(){
        $b = false;
        if ($this->cargoSolicitado->getCargoExitoso() == true){
            $b = true;
        }else
            $b = false;
        return $b;
    }
    
    public  function autorizacionCargo(){
        $this->cargoSolicitado->setCargoExitoso(true);
    }
    

}
