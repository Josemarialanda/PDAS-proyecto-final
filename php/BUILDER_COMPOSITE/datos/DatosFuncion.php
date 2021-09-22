<?php
/**
 * Description of DatosFuncion
 *
 * @author giltenorio
 */
class DatosFuncion {
    private $asiento;
    private $dia;
    private $mes;
    private $anio;
    private $hora;
    private $pelicula;

    public function __construct(){
        
    }

    public function setDatosFuncion($asiento,$hora, $dia, $mes, $anio, $pelicula){
        $this->asiento = $asiento;
        $this->hora = $hora;
        $this->dia = $dia;
        $this->mes = $mes;
        $this->anio = $anio;
        $this->pelicula = $pelicula;
    }
    
    public function getDatosFuncion(){
        $informacion = $informacion = "<h2>Datos de Función</h2>";
        $informacion .= "Pelicula : ".$this->pelicula;
        $informacion .= "<br/>Asiento : ".$this->asiento;
        $informacion .= "<br/>Hora: ".$this->hora;
        $informacion .= "<br/>Dia: ".$this->dia;
        $informacion .= "<br/>Mes: ".$this->mes;
        $informacion .= "<br/>Año: ".$this->anio.'<br/>';
        return $informacion;
    }
}
