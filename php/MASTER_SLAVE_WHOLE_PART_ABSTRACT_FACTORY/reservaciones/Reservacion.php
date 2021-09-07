<?php
require './principal/ProductoCine.php';
/**
 * Description of Reservacion
 *
 * @author giltenorio
 */



class Reservacion implements ProductoCine{
    public $datosCliente;
    public $datosCompra;
    public $datosFuncion;
    

    public function __construct($datosCliente, $datosCompra, $datosFuncion) {
        $this->datosCliente = $datosCliente;
        $this->datosCompra = $datosCompra;
        $this->datosFuncion = $datosFuncion;
    }

    

    public function setDatosCliente($datosCliente): void {
        $this->datosCliente = $datosCliente;
    }

    public function setDatosCompra($datosCompra): void {
        $this->datosCompra = $datosCompra;
    }

    public function setDatosFuncion($datosFuncion): void {
        $this->datosFuncion = $datosFuncion;
    }

    
    public function mostrarReservacion() {
                return $this->datosCliente->getDatosCliente()
                       .$this->datosFuncion->getDatosFuncion()
                       .$this->datosCompra->getDatosCompra();

    }
    
    public function gestionarProductoCine(){
       return "Gestionando producto cine";
    }
    
}
