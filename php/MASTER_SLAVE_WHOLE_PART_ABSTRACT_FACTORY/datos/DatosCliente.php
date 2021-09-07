<?php

/**
 * Description of DatosCliente
 *
 * @author giltenorio
 */
class DatosCliente {

    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $tipoCliente;
    public $edad;

    public function getDatosCliente() {
        $informacion = "<h2>Datos de Cliente</h2>";
        $informacion .= "Nombre: " . $this->nombre;
        $informacion .= "<br/>Apellido Paterno: " . $this->apellidoPaterno;
        $informacion .= "<br/>Apellido Materno: " . $this->apellidoMaterno;
        $informacion .= "<br/>Edad: " . $this->edad;
        $informacion .= "<br/>Tipo de cliente: " . $this->tipoCliente . '<br/>';

        return $informacion;
    }

    public function setDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipo) {
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoP;
        $this->apellidoMaterno = $apellidoM;
        $this->edad = $edad;
        $this->tipoCliente = $tipo;
    }

}
