<?php

class DatosCliente {

    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $edad;
    public $tipoCliente;
    
    public function setDatosCliente($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $tipoCliente) {
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->edad = $edad;
        $this->tipoCliente = $tipoCliente;
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

    public function getEdad() {
        return $this->edad;
    }

    public function getTipoCliente() {
        return $this->tipoCliente;
    }


    

}
