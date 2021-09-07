<?php

/**
 * Description of FabricaProductoCine
 *
 * @author giltenorio
 */
interface ProductoCineFactory {
    //put your code here
    public function crearProductoCineSencillo($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta,
                                        $fecha, $asiento, $dia, $mes, $anio, $pelicula);
    public function crearProductoCineVIP($nombre, $apellidoP, $apellidoM, $edad, $tipoC, $numTarjeta,
                                        $fecha, $asiento, $dia, $mes, $anio, $pelicula, $beneficio);
}
