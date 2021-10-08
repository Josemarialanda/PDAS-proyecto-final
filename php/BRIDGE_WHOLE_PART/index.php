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

        $datosVIP = array(
            "nombre" => "Arturo",
            "apellidoP" => "Tenorio",
            "apellidoM" => "Varela",
            "edad" => 23,
            "tipoCliente" => "VIP",
            "asiento" => 01,
            "hora" => 12,
            "dia" => 01,
            "mes" => 111,
            "anio" => 2021,
            "pelicula" => "El exorcista",
            "numTarjeta" => 21435687,
            "fecha" => time(),
            "beneficios" => array("Descuentos en dulceria", "Asientos preferentes")
        );

        $cliente = new Cliente();
        #$reservacionSencilla = $cliente->crearReservacion("sencilla", $datos);
        #echo $reservacionSencilla->mostrarReservacion();
        echo '<h2>Test de reservacion</h2>';
        $reservacionVIP = $cliente->crearReservacion("VIP", $datosVIP);
        echo $reservacionVIP->mostrarReservacion();

        #$membresia = $cliente->crearMembresia("sencilla", $datos);
        #echo $membresia->mostrarMembresia();
        echo '<h2>Test de Membresia</h2>';

        $membresiaVIP = $cliente->crearMembresia("VIP", $datosVIP);
        echo $membresiaVIP->mostrarMembresia();
        ?>
    </body>
</html>
