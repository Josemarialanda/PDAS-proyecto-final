<?php

require_once './datos/DatosCliente.php';
require_once './datos/DatosCompra.php';
require_once './datos/DatosFuncion.php';

class Reservacion {
    private $datosCliente;
    private $datosFuncion;
    private $datosCompra;
    
    public function __construct() {
        $this->datosCliente = new DatosCliente();
        $this->datosCompra = new DatosCompra();
        $this->datosFuncion = new DatosFuncion();
    }
    
    
    public function mostrarReservacion(){
        return $this->datosCliente->getDatosCliente().$this->datosCompra->getDatosCompra().$this->datosFuncion->getDatosFuncion(); 
    }
    
    public function gestionarReservacion() {
        echo 'Gestionar Reservación';
    }
    public function getDatosCliente() {
        return $this->datosCliente;
    }

    public function getDatosFuncion() {
        return $this->datosFuncion;
    }

    public function getDatosCompra() {
        return $this->datosCompra;
    }
    public function setDatosCliente($datosCliente): void {
        $this->datosCliente = $datosCliente;
    }

    public function setDatosFuncion($datosFuncion): void {
        $this->datosFuncion = $datosFuncion;
    }

    public function setDatosCompra($datosCompra): void {
        $this->datosCompra = $datosCompra;
    }


    
    


}
