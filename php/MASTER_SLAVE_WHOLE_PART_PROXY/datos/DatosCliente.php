<?php


class DatosCliente{
    private  $nombre;
    private  $apellidoPaterno;
    private  $apellidoMaterno;
    private  $edad;
    private  $tipoCliente;

    public function setDatosCliente($nombre, $apellidoP, $apellidoM,$edad, $tipo){
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoP;
        $this->apellidoMaterno = $apellidoM;
        $this->edad = $edad;
        $this->tipoCliente = $tipo;
    }

    public function getDatosCliente(){
        $informacion = "<h2>Datos de Cliente</h2>";
        $informacion .= "Nombre: ".$this->nombre;
        $informacion .= "<br/>Apellido Paterno: ".$this->apellidoPaterno;
        $informacion .= "<br/>Apellido Materno: ".$this->apellidoMaterno;
        $informacion .= "<br/>Edad: ".$this->edad;
        $informacion .= "<br/>Tipo: ".$this->tipoCliente. '<br/>';

        return $informacion;   
    }
}

