<?php

require_once './whole_part/reservacion/DatosCompra.php';
require_once './whole_part/reservacion/DatosFuncion.php';
require_once './whole_part/DatosCliente.php';
require_once 'ImplementadorProductoCine.php';

class ImplAbstractaReservacion implements ImplementadorProductoCine {

    public $datosCliente;
    public $datosCompra;
    public $datosFuncion;
    
    public function __construct() {
        $this->datosCliente =  new DatosCliente();
        $this->datosCompra = new DatosCompra();
        $this->datosFuncion = new DatosFuncion();
    }

    
    public function completarProductoCine($datos) {
        $this->completarReservacion($datos);
    }

    public function mostrarProductoCine() {
        return $this->mostrarReservacion();
    }
    
    public function completarReservacion($datos){
        $this->datosCliente->setDatosCliente($datos["nombre"], $datos["apellidoP"], $datos["apellidoM"], $datos["edad"],
                $datos["tipoCliente"]);
        $this->datosFuncion->setDatosFuncion($datos["asiento"], $datos["hora"], $datos["dia"], $datos["mes"],
                $datos["anio"], $datos["pelicula"]);
        $this->datosCompra->setDatosCompra($datos["numTarjeta"], $datos["fecha"]);
    }
    
    public function mostrarReservacion() {
        $informacion = "<h2>Datos de Cliente</h2>";
        $informacion .= "Nombre: " .  $this->datosCliente->getNombre();
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
        $informacion .= "<br/>Fecha: " . date('Y-m-d' , $this->datosCompra->getFechaVencimiento()). "</br>";
        
        return $informacion;
    }

}
