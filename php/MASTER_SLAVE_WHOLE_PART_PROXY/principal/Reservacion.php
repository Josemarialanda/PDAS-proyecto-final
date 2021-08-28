<?php

class Reservacion{
    
    private $datosCliente;
    private $datosCompra;
    private $datosFuncion;
    

    public function __construct(){
        
    }

    public function setDatosCliente($dc){
        $this->datosCliente = $dc;
    }
    public function setDatosCompra($dc){
        $this->datosCompra = $dc;
    } 
    public function setDatosFuncion($df){
        $this->datosFuncion = $df;
    }

    public function mostrarReservacion(){
        return $this->datosCliente->getDatosCliente().$this->datosFuncion->getDatosFuncion().$this->datosCompra->getDatosCompra();
    }


}

