<?php
class DatosCompra{

    private $numeroTarjeta;
    private $fecha;

    public function setDatosCompra($numTarjeta, $fecha){
        $this->numeroTarjeta = $numTarjeta;
        $this->fecha = $fecha;
    }

    public function getDatosCompra(){
        $f = date('d-m-Y', $this->fecha);
        $informacion = $informacion = "<h2>Datos de Compra</h2>";
        $informacion .= "Num de tarjeta: ".$this->numeroTarjeta;
        $informacion .= "<br/>Fecha: ".$f;
        return $informacion;
    }

}