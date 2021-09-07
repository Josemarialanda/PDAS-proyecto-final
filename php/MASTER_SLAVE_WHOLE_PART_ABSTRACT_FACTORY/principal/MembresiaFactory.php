<?php

require './membresias/MembresiaSencilla.php';
require_once './membresias/MembresiaVIP.php';



/**
 * Description of MembresiaFactory
 *
 * @author giltenorio
 */
class MembresiaFactory implements ProductoCineFactory{
    //put your code here
    public $membresia;
    public function crearProductoCineSencillo($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta, $fecha, $asiento, $dia, $mes, $anio, $pelicula) {
        $datosCliente = GestorDatosCliente::preparaDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoC);
        
        $membresia = new MembresiaSencilla($datosCliente,10,01,2022);
        return $membresia;
    }

    public function crearProductoCineVIP($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta, $fecha, $asiento, $dia, $mes, $anio, $pelicula, $beneficio) {
            
        $datosCliente = GestorDatosCliente::preparaDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoC);
        
        $datosBeneficio = GestorDatosBeneficio::preparaDatosBeneficio($beneficio);
        
        $membresia = new MembresiaVIP($datosCliente, $datosBeneficio,10,01,2022);
        
        
        return $membresia;


    }

}
