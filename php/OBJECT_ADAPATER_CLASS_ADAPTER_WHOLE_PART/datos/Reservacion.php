<?php

require_once 'DatosCliente.php';
require_once 'DatosFuncion.php';
require_once 'DatosCompra.php';

class Reservacion {

    public $datosCompra;
    public $datosCliente;
    public $datosFuncion;

    public function __construct($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente,
            $asiento, $dia, $mes, $anio, $hora, $pelicula, $numTarjeta, $fecha) {
        $this->datosCliente = new DatosCliente();
        $this->datosCompra = new DatosCompra();
        $this->datosFuncion = new DatosFuncion();

        $this->datosCliente->setDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoCliente);
        $this->datosFuncion->setDatosFuncion($asiento, $hora, $dia, $mes, $anio, $pelicula);
        $this->datosCompra->setDatosCompra($numTarjeta, $fecha);
    }

    public function mostrarReservacion() {
        $informacion = "<h2>Datos de Cliente</h2>";
        $informacion .= "Nombre: " . $this->datosCliente->getNombre();
        $informacion .= "<br/>Apellido Paterno: " . $this->datosCliente->getApellidoPaterno();
        $informacion .= "<br/>Apellido Materno: " . $this->datosCliente->getApellidoMaterno();
        $informacion .= "<br/>Edad: " . $this->datosCliente->getEdad();
        $informacion .= "<br/>Tipo de cliente: " . $this->datosCliente->getTipoCliente() . '<br/>';
        $informacion .= "<h2>Datos de Funcion</h2>";
        $informacion .= "<br/>Pelicula: " . $this->datosFuncion->getPelicula();
        $informacion .= "<br/>Fecha: " . $this->datosFuncion->getDia() .
                "/".$this->datosFuncion->getMes() ."/". $this->datosFuncion->getAnio();
        $informacion .= "<br/>Hora: " . $this->datosFuncion->getHora();
        $informacion .= "<br/>Asiento: " . $this->datosFuncion->getAsiento() . '<br/>';
        $informacion .= "<h2>Datos de Compra</h2>";
        $informacion .= "<br/>Número de tarjeta: " . $this->datosCompra->getNumeroTarjeta();
        $informacion .= "<br/>Fecha: " . $this->datosCompra->getFecha();
        
        return $informacion;
    }

}
