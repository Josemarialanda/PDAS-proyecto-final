<?php
$nombre = $_POST["nombre"];
$apellidoP = $_POST["ap"];
$apellidoM = $_POST["am"];
$edad = $_POST["edad"];
$tipo = $_POST["tipo"];
$tarjeta = $_POST["tarjeta"];
$pelicula = $_POST["pelicula"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$anio = $_POST["anio"];
$asiento = $_POST["asiento"];



?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <title>Test</title>

    </head>
    <body>
        <h1 align="center">"Test (Master Slave Whole Part Proxy)"</h1>

        <div align="center" class="bg-light p-5 rounded mt-3">
        <?php
            require './principal/Cliente.php';

            $hora = time();
            $f = date('d-m-Y', $hora);

            $cliente = new Cliente();

            $cliente->invocaGestorReservacion($nombre, $apellidoP, $apellidoM, $edad,
                    $tipo, $tarjeta, $hora, $asiento, $dia, $mes, $anio, $pelicula);

            $reservacion = $cliente->getReservacion();

            echo $reservacion->mostrarReservacion();
            echo'<br/>';
        ?>

        </div>


    </body>
</html>
