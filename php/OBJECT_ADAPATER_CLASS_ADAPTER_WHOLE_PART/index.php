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
                <h1 align="center">Test  de OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART</h1>

        <?php
        require_once './principal/Cliente.php';
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
            "fecha" => time()
        );
        $datosVIP = array(
            "nombre" => "Arturo",
            "apellidoP" => "Tenorio",
            "apellidoM" => "Varela",
            "edad" => 23,
            "tipoCliente" => "Estudiante",
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
        $reservacionS = $cliente->solicitarReservacion($datos);
        #echo $reservacionS->mostrarReservacion();
        
        $reservacionVIP = $cliente->solicitarReservacionVIP($datosVIP);
        #echo $reservacionVIP->mostrarReservacion();
        
        $datosMultiples = array($datos,$datosVIP);
        $reservaciones = $cliente->solicitarReservacionMultiple($datosMultiples);
        
        foreach ($reservaciones as $reservacion) {
            echo "<ul><li>".$reservacion->mostrarReservacion()."</li></ul>";
        }
        ?>
    </body>
</html>
