<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './gestores/GestorDatosCliente.php';
        require './gestores/GestorDatosCompra.php';
        require './gestores/GestorDatosFuncion.php';
        require './reservaciones/ReservacionSencilla.php';
        require './principal/ProductoCineFactory.php';
        require './principal/ReservacionMasterFactory.php';
        require './principal/Cliente.php';
        require './reservaciones/ReservacionVIP.php';
        
        
        
        $c = new Cliente();
        $f = time();

        $reservacion =$c->solicitarProductoSencillo("reservacion", "Gil", "Tenorio", "Varela", 22, "Estudiante", "12234365", $f, 1, 12, 01, 2021, "exorcist");
        echo '<h1>Reservaciones</h1>';
        echo '<h2>Reservacion sencilla</h2>';

        echo $reservacion->mostrarReservacion();
        echo '<br><h2>Reservacion VIP</h2>';
        $c2 = new Cliente();
        $reservacion2 =$c2->solicitarProductoVIP("reservacion", "Juan", "Rodriguez", "Barcenas", 20, "VIP", "12234365", $f, 1, 23, 01, 2021, "Tokio Man", "descuento 50%");
        
        echo $reservacion2->mostrarReservacion();
        
        
        
        echo '<h1>Membresias</h1>';
        $c3 = new Cliente();
        $m = $c3->solicitarProductoSencillo("membresia", "Gil", "Tenorio", "Varela", 22, "Estudiante", "12234365", $f, 1, 12, 01, 2021, "exorcist");
        echo $m->mostrarMembresia();
        $c4 = new Cliente();
        $m = $c3->solicitarProductoVIP("membresia", "Juan", "Rodriguez", "Barcenas", 20, "VIP", "12234365", $f, 1, 12, 01, 2021, "Topkio Man", "Palomitas gratis toda la semana" );
        echo $m->mostrarMembresia();
                
        ?>
    </body>
</html>
