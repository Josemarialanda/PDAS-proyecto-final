<?php
require_once 'Reservacion.php';
class ReservacionMultiple extends Reservacion{
    public $reservaciones;
    
    public function __construct() {
        $this->reservaciones = array();
    }
    
    public function agregarReservacion($reservacion) {
        array_push($this->reservaciones, $reservacion);
    }
    
    public function eliminarReservacion($reservacion) {
        unset($this->reservaciones[array_search($reservacion, $this->reservaciones)]);
    }
    public function MostrarReservaciones() {
        foreach ($this->reservaciones as $r) {
            
            echo "<ul><li>".$r->mostrarReservacion()."</li></ul>";
        }
    }
    public function getReservaciones() {
        return $this->reservaciones;
    }
}
