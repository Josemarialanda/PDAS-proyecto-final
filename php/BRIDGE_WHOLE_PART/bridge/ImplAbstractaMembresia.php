<?php

require_once 'ImplementadorProductoCine.php';
require_once './whole_part/DatosCliente.php';

class ImplAbstractaMembresia implements ImplementadorProductoCine {

    public $datosCliente;
    public $fechaVencimineto;

    public function __construct() {
        $this->datosCliente = new DatosCliente();
    }

    public function completarProductoCine($datos) {
        $this->completarMembreisa($datos);
    }

    public function mostrarProductoCine() {
        return $this->mostrarMembresia();
    }

    public function completarMembreisa($datos) {
        $this->datosCliente->setDatosCliente($datos["nombre"], $datos["apellidoP"], $datos["apellidoM"], $datos["edad"],
                $datos["tipoCliente"]);
        $this->fechaVencimineto = time();
    }

    public function mostrarMembresia() {

        $informacion = "<h2>Datos de Membresia</h2>";
        $informacion .= "Nombre: " . $this->datosCliente->getNombre();
        $informacion .= "<br/>Apellido Paterno: " . $this->datosCliente->getApellidoPaterno();
        $informacion .= "<br/>Apellido Materno: " . $this->datosCliente->getApellidoMaterno();
        $informacion .= "<br/>Edad: " . $this->datosCliente->getEdad();
        $informacion .= "<br/>Tipo de cliente: " . $this->datosCliente->getTipoCliente();
        $informacion .= "<br/>Fecha de venciminetoe: " . date('Y-m-d' , $this->fechaVencimineto) . '<br/>';

        return $informacion;
    }

}
