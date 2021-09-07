<?php

/**
 * Description of Membresia
 *
 * @author giltenorio
 */
class Membresia implements ProductoCine{
    public $datosCliente;
    public $dia;
    public $mes;
    public $anio;
    
    public function __construct($datosCliente, $dia, $mes, $anio) {
        $this->datosCliente = $datosCliente;
        $this->dia = $dia;
        $this->mes = $mes;
        $this->anio = $anio;
    }
    public function gestionarProductoCine() {
        echo 'Gestionando producto Cine Membresia';
    }
    
    public function mostrarMembresia(){
        return $this->datosCliente->getDatosCliente()."Fecha de vencimiento: ". $this->dia."/". $this->mes."/". $this->anio;
    }

   
}
