<?php

require_once 'Reservacion.php';
require_once 'DatosCliente.php';
require_once 'DatosCompra.php';
require_once 'DatosFuncion.php';

class ReservacionSencilla extends Reservacion {

    public $datosCliente;
    public $datosCompra;
    public $datosFuncion;

    public function __construct($datos) {
        $this->datosCliente = new DatosCliente();
        $this->datosCompra = new DatosCompra();
        $this->datosFuncion = new DatosFuncion();

        $this->datosCliente->setDatosCliente($datos["nombre"], $datos["apellidoP"], $datos["apellidoM"], $datos["edad"],
                $datos["tipoCliente"]);
        $this->datosCompra->setDatosCompra($datos["numTarjeta"], $datos["fecha"]);
        $this->datosFuncion->setDatosFuncion($datos["asiento"], $datos["hora"], $datos["dia"], $datos["mes"],
                $datos["anio"], $datos["pelicula"]);
        parent::__construct($this->datosCliente, $this->datosCompra, $this->datosFuncion);
    }

    public function mostrarReservacion() {
        return parent::mostrarReservacion();
    }

}
