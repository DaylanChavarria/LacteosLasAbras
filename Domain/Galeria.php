<?php

/**
 * 
 * 
 * @author Edwin
 */
class Galeria {

    public $Id;
    public $nombre;
    public $descripcion;
    public $idioma;
    public $atcodigoImagen;

    function Galeria($Id, $nombre, $descripcion, $idioma, $atcodigoImagen) {
        $this->Id = $Id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->idioma = $idioma;
        $this->atcodigoImagen = $atcodigoImagen;
    }

}
