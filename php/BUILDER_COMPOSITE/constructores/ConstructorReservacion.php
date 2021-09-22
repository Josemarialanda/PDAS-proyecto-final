<?php

interface ConstructorReservacion {
   
    public function construirDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente);
    
    public function construirDatosCompra($numTarjeta,$fecha);
    
    public function construirDatosFuncion($asiento,$hora,$dia,$mes,$anio,$pelicula);
    
    public function obtenerReservacion();
}
