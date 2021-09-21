<?php

require_once './constructores/ConstructorReservacionSencilla.php';
require_once './constructores/ConstructorReservacionVIP.php';
require_once './constructores/ConstructorReservacionMultiple.php';

class DirectorReservacion {

    public $constructorReservacion;

    public function setConstructorReservacion($constructorReservacion): void {
        $this->constructorReservacion = $constructorReservacion;
    }

    public function construirReservacion($datos) {
        if (!is_null($this->constructorReservacion)) {
            if ($this->constructorReservacion instanceof ConstructorReservacionSencilla) {
                $this->construirBaseReservacion($datos);
            } elseif ($this->constructorReservacion instanceof ConstructorReservacionVIP) {
                $this->construirBaseReservacion($datos);
                $this->constructorReservacion->construirDatosBeneficio($datos["beneficios"]);
            } elseif ($this->constructorReservacion instanceof ConstructorReservacionMultiple) {
                $this->construirBaseReservacion($datos);
                $this->constructorReservacion->construirDatosBeneficio($datos["beneficios"]);
            }else{
                echo 'Constructor no valido';
            }
        }
    }

    public function construirBaseReservacion($datos) {
        $this->constructorReservacion->construirDatosCliente($datos["nombre"],
                $datos["apellidoP"], $datos["apellidoM"], $datos["edad"], $datos["tipoCliente"]);

        $this->constructorReservacion->construirDatosFuncion($datos["asiento"],
                $datos["hora"], $datos["dia"], $datos["mes"], $datos["anio"], $datos["pelicula"]);

        $this->constructorReservacion->construirDatosCompra($datos["numTarjeta"], $datos["fecha"]);
    }

}
