<?php


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
    public function getAsiento() {
        return $this->asiento;
    }

    public function getDia() {
        return $this->dia;
    }

    public function getMes() {
        return $this->mes;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getPelicula() {
        return $this->pelicula;
    }

    public function setAsiento($asiento): void {
        $this->asiento = $asiento;
    }

    public function setDia($dia): void {
        $this->dia = $dia;
    }

    public function setMes($mes): void {
        $this->mes = $mes;
    }

    public function setAnio($anio): void {
        $this->anio = $anio;
    }

    public function setHora($hora): void {
        $this->hora = $hora;
    }

    public function setPelicula($pelicula): void {
        $this->pelicula = $pelicula;
    }


}
