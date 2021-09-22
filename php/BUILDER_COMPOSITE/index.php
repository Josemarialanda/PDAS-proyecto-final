<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1 align="center">Test  de BUILDER_COMPOSITE</h1>
        <?php
        require './constructores/ConstructorReservacionSencilla.php';
        require './constructores/ConstructorReservacionVIP.php';
        require './constructores/ConstructorReservacionMultiple.php';
        require_once 'Cliente.php';
        
        $datos = array(
            "nombre" => "Gil",
            "apellidoP" => "Tenorio",
            "apellidoM" => "Varela",
            "edad" => 22,
            "tipoCliente" => "Estudiante",
            "asiento" => 22,
            "hora" => 13,
            "dia" => 10,
            "mes" => 12,
            "anio" => 2021,
            "pelicula" => "Spider-Man",
            "numTarjeta" => 21435687,
            "fecha" => time(),
            "beneficios" => null
        );
        $datosV = array(
            "nombre" => "Arturo",
            "apellidoP" => "Tenorio",
            "apellidoM" => "Varela",
            "edad" => 30,
            "tipoCliente" => "Visitante",
            "asiento" => 01,
            "hora" => 14,
            "dia" => 12,
            "mes" => 111,
            "anio" => 2021,
            "pelicula" => "Spider-Man",
            "numTarjeta" => 21435688,
            "fecha" => time(),
            "beneficios" => array("descuento", "asiento preferente")
        );
        
        $cliente = new Cliente();
        $reservacionSencilla = $cliente->solicitarReservacionSencilla($datos);
        #echo $reservacionSencilla->mostrarReservacion();
        
        $reservacionVIP = $cliente->solicitarReservacionVIP($datosV);
        #echo $reservacionVIP->mostrarReservacion();
        
        $reservacionMultiple = new ReservacionMultiple();
        $reservacionMultiple = $cliente->solicitarReservacionMultiple($datosV);
        $reservacionMultiple->agregarReservacion($reservacionSencilla);
        #$reservacionMultiple->MostrarReservaciones();
        
        #$reservacionMultiple->eliminarReservacion($reservacionSencilla);
        $reservacionMultiple->MostrarReservaciones();
        ?>
    </body>
</html>
