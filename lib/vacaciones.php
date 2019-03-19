<?php

class Vacaciones{
    private $rut;
    private $nombre;
    private $cargo;
    private $fecinicio;
    private $dias;
    private $comentario;
    
    function __construct($rut, $nombre, $cargo, $fecinicio, $dias, $comentario) {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->fecinicio = $fecinicio;
        $this->dias = $dias;
        $this->comentario = $comentario;
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getFecinicio() {
        return $this->fecinicio;
    }

    function getDias() {
        return $this->dias;
    }

    function getComentario() {
        return $this->comentario;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setFecinicio($fecinicio) {
        $this->fecinicio = $fecinicio;
    }

    function setDias($dias) {
        $this->dias = $dias;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }

    
    
    


    
}
