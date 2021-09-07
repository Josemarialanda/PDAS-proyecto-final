<?php
require './membresias/Membresia.php';

/**
 * Description of MembresiaSencilla
 *
 * @author giltenorio
 */
class MembresiaSencilla extends Membresia{
    
    public function __construct($datosCliente, $dia, $mes, $anio) {
        
        parent::__construct($datosCliente, $dia, $mes, $anio);
    }
    
    public function gestionarMembresia(){
        echo 'Gestionar membresia sencilla';
    }
    
    public function mostrarMembresia() {
        return parent::mostrarMembresia(). "<br>Membresia sencilla";
    }
}
