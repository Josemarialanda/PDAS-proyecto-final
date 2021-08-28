<?php
require './principal/Reservacion.php';
require './gestores/GestorDatosCliente.php';
require './gestores/GestorDatosCompra.php';
require './gestores/GestorDatosFuncion.php';
require './pago/ProxyAutorizacionPago.php';
class GestorReservacion{
    //attr
    private $reservacionSala;
    private $datosCliente;
    private $datosCompra;
    private $datosFuncion;
    
    public function __construct(){
        $this->reservacionSala = new Reservacion(); 

    }
    
    public function invocaSubordinados($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta,
                                        $fecha, $asiento, $dia, $mes, $anio, $pelicula){
    
        $this->datosCliente = GestorDatosCliente::preparaDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoC);
        $this->datosCompra = GestorDatosCompra::preparaDatosCompra($numTarjeta, $fecha);
        $this->datosFuncion = GestorDatosFuncion::preparaDatosFuncion($asiento, $dia, $mes, $anio, $pelicula);
        $this->creaReservacion();
        
        $proxy = new ProxyAutorizacionPago();
        $cargo = new Cargo();

        $r = $proxy->solicitaAutorizacionPago($cargo);
        
        
    }
    
    public function creaReservacion(){
        $this->reservacionSala->setDatosCliente($this->datosCliente);
        $this->reservacionSala->setDatosCompra($this->datosCompra);
        $this->reservacionSala->setDatosFuncion($this->datosFuncion);

    }
    public function unirResultados() {
        return $this->reservacionSala;
    }


    
}



