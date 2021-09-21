<?php
require_once 'DatosBeneficio.php';

class ReservacionVIP extends Reservacion{
    public $datosBeneficio;
    
    public function __construct($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente,
            $asiento, $dia, $mes, $anio, $hora, $pelicula, $numTarjeta, $fecha, $beneficios) {
        
        parent::__construct($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente,
            $asiento, $dia, $mes, $anio, $hora, $pelicula, $numTarjeta, $fecha);
        
    $this->datosBeneficio = new DatosBeneficio();
        $this->datosBeneficio->setDatosBeneficios($beneficios);
        }
    
        public function mostrarReservacion() {
            return parent::mostrarReservacion().$this->datosBeneficio->getDatosBeneficios();
        }
      
}
