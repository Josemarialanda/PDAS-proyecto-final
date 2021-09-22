<?php

class DatosCliente {

    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $tipoCliente;
    public $edad;


    public function setDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipo) {
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoP;
        $this->apellidoMaterno = $apellidoM;
        $this->edad = $edad;
        $this->tipoCliente = $tipo;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    public function getApellidoMaterno() {
        return $this->apellidoMaterno;
    }

    public function getTipoCliente() {
        return $this->tipoCliente;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidoPaterno($apellidoPaterno): void {
        $this->apellidoPaterno = $apellidoPaterno;
    }

    public function setApellidoMaterno($apellidoMaterno): void {
        $this->apellidoMaterno = $apellidoMaterno;
    }

    public function setTipoCliente($tipoCliente): void {
        $this->tipoCliente = $tipoCliente;
    }

    public function setEdad($edad): void {
        $this->edad = $edad;
    }



}
