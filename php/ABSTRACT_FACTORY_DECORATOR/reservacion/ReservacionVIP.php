<?php

require_once 'Reservacion.php';
require_once 'DatosBeneficios.php';
require_once 'DatosCliente.php';
require_once 'DatosCompra.php';
require_once 'DatosFuncion.php';
class ReservacionVIP extends Reservacion{
    
    public $datosBeneficio;
    
    public function __construct($datos, $datosCliente, $datosCompra, $datosFuncion) {
        
        parent::__construct($datosCliente, $datosCompra, $datosFuncion);
        
        $this->datosBeneficio = new DatosBeneficios();
        $this->datosBeneficio->setDatosBeneficios($datos);
    }
    
    public function mostrarReservacion() {
        return parent::mostrarReservacion(). $this->datosBeneficio->getDatosBeneficios();
    }
    
    
}
