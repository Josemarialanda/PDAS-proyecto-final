<?php
require_once './reservaciones/Reservacion.php';

/**
 * Description of ReservacionVIP
 *
 * @author giltenorio
 */
class ReservacionVIP extends Reservacion{
    public $datosBeneficio;
    
    public function __construct($datosCliente, $datosCompra, $datosFuncion, $datosBeneficio) {
          parent::__construct($datosCliente, $datosCompra, $datosFuncion);
          $this->datosBeneficio = $datosBeneficio;
    }
    
    public function getDatosBeneficio() {
        return $this->datosBeneficio;
    }

    public function setDatosBeneficio($datosBeneficio): void {
        $this->datosBeneficio = $datosBeneficio;
    }

    public function mostrarBeneficios() {
        $informacion = "<h2>Datos de Beneficio</h2>";
        $informacion .= "Beneficios: " . $this->getDatosBeneficio()->getDatosBeneficios(). '<br/>';
        return $informacion;
    }
    
    public function gestionarReservacion(){
        
    }
    
    public function mostrarReservacion(){
        return parent::mostrarReservacion(). $this->mostrarBeneficios();
    }
    

    
    
}
