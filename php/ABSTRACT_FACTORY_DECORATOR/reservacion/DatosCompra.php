<?php


class DatosCompra {
    private $numeroTarjeta;
    private $fechaVencimiento;

    public function setDatosCompra($numTarjeta, $fecha){
        $this->numeroTarjeta = $numTarjeta;
        $this->fechaVencimiento = $fecha;
    }
    public function getNumeroTarjeta() {
        return $this->numeroTarjeta;
    }

    public function getFechaVencimiento() {
        return $this->fechaVencimiento;
    }

    public function setNumeroTarjeta($numeroTarjeta): void {
        $this->numeroTarjeta = $numeroTarjeta;
    }

    public function setFechaVencimiento($fechaVencimiento): void {
        $this->fechaVencimiento = $fechaVencimiento;
    }


}
