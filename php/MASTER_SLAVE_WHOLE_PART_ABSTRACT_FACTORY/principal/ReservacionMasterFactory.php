<?php
require './gestores/GestorDatosBeneficio.php';


/**
 * Description of ReservacionMasterFactory
 *
 * @author giltenorio
 */
class ReservacionMasterFactory implements ProductoCineFactory {

    public $reservacion;

    //put your code here
    public function crearProductoCineSencillo($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta,
            $fecha, $asiento, $dia, $mes, $anio, $pelicula) {
        $this->invocaSubordinadosSencillos($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta, $fecha, $asiento, $dia, $mes, $anio, $pelicula);
        return $this->reservacion;
    }

    public function crearProductoCineVIP($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta,
            $fecha, $asiento, $dia, $mes, $anio, $pelicula, $beneficio) {
        
        $this->invocaSubordinadosVIP($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta, $fecha, $asiento, $dia, $mes, $anio, $pelicula, $beneficio);
        
        return $this->reservacion;
    }

    public function invocaSubordinadosSencillos($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta,
            $fecha, $asiento, $dia, $mes, $anio, $pelicula) {

        $datosCliente = GestorDatosCliente::preparaDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoC);
        $datosCompra = GestorDatosCompra::preparaDatosCompra($numTarjeta, $fecha);
        $datosFuncion = GestorDatosFuncion::preparaDatosFuncion($asiento, $dia, $mes, $anio, $pelicula);
        $this->reservacion = new ReservacionSencilla($datosCliente, $datosCompra, $datosFuncion);
    }
    
    public function invocaSubordinadosVIP($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta,
            $fecha, $asiento, $dia, $mes, $anio, $pelicula, $beneficio) {
        
        $datosCliente = GestorDatosCliente::preparaDatosCliente($nombre, $apellidoP, $apellidoM, $edad, $tipoC);
        $datosCompra = GestorDatosCompra::preparaDatosCompra($numTarjeta, $fecha);
        $datosFuncion = GestorDatosFuncion::preparaDatosFuncion($asiento, $dia, $mes, $anio, $pelicula);
       
        $datosBeneficio = GestorDatosBeneficio::preparaDatosBeneficio($beneficio);
        
        $this->reservacion = new ReservacionVIP($datosCliente, $datosCompra, $datosFuncion, $datosBeneficio);
        
    }

}
