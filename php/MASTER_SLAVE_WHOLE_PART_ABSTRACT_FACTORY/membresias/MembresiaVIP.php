<?php

class MembresiaVIP extends Membresia{
    public $datosBeneficios;
    
    public function __construct($datosCliente, $datosBeneficio, $dia, $mes, $anio) {
        parent::__construct($datosCliente, $dia, $mes, $anio);
        $this->datosBeneficios = $datosBeneficio;
    }
    
    public function gestionarMembresia(){
        echo "Gestionando membresia VIP";
    }
    
    public function mostrarMembresia() {
        return parent::mostrarMembresia()."<br>Tipo: Membresia VIP".$this->mostrarBeneficios();
    }
    
    public function mostrarBeneficios() {
        $informacion = "<h2>Datos de Beneficio</h2>";
        $informacion .= "Beneficios: " . $this->getDatosBeneficios()->getDatosBeneficios(). '<br/>';
        return $informacion;
    }
    
    public function getDatosBeneficios() {
        return $this->datosBeneficios;
    }


}
