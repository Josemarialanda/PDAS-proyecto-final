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
        <?php
        require_once 'Cliente.php';
        
        $cliente = new Cliente();
        
        $datos = array(
            "nombre" => "Gil",
            "apellidoP" => "Tenorio",
            "apellidoM" => "Varela",
            "edad" => 22,
            "tipoCliente" => "Sencilla",
            "asiento" => 22,
            "hora" => 13,
            "dia" => 10,
            "mes" => 12,
            "anio" => 2021,
            "pelicula" => "Spider-Man",
            "numTarjeta" => 21435687,
            "fecha" => time()
        );

        $datosVIP = array("Descuentos en dulceria", "Asientos preferentes");
        
        $reservacionSencilla = $cliente->solicitaReservacionSencilla($datos);
        #echo $reservacionSencilla->mostrarReservacion();
        
        $reservacionVIP = $cliente->hacerVIP($reservacionSencilla, $datosVIP);
        #echo $reservacionVIP->mostrarReservacion();
        
        $reservacionMultiple = $cliente->hacerMultiple($reservacionSencilla);
        $reservacionMultiple->agregarReservacion($reservacionVIP);
        $reservacionMultiple->mostrarReservaciones();
        ?>
    </body>
</html>
