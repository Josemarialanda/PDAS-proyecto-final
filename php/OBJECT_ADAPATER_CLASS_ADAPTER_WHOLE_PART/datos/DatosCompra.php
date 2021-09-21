<?php

/**
 * Description of DatosCompra
 *
 * @author giltenorio
 */
class DatosCompra {
    private $numeroTarjeta;
    private $fecha;

    public function setDatosCompra($numTarjeta, $fecha){
        $this->numeroTarjeta = $numTarjeta;
        $this->fecha = $fecha;
    }

    public function getNumeroTarjeta() {
        return $this->numeroTarjeta;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setNumeroTarjeta($numeroTarjeta): void {
        $this->numeroTarjeta = $numeroTarjeta;
    }

    public function setFecha($fecha): void {
        $this->fecha = $fecha;
    }


}
