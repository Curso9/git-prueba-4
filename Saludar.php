<?php

class Saludar {

    private $nombre;

    function __construct($nombre)
    {
        $this->nombre= $nombre;
    }

    function escribirSaludo (){
        return "Hola $this->nombre";
    }

}