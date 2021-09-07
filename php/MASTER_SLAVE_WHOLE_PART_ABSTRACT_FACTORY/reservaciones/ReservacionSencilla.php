<?php

require './reservaciones/Reservacion.php';

/**
 * Description of ReservacionNormal
 *
 * @author giltenorio
 */
class ReservacionSencilla extends Reservacion{
    //put your code here
    
    
    public function __construct($datosCliente, $datosCompra, $datosFuncion) {
         parent::__construct($datosCliente, $datosCompra, $datosFuncion);
    }
    
    public function gestionarReservacion(){
        echo 'Gestionar Reservación sencilla';
    }
    
    public function mostrarReservacion(){
        return parent::mostrarReservacion();
    }
    
    

}
