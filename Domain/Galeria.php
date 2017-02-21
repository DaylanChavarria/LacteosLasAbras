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
    public $codigoImagen;

    function Galeria($Id, $nombre, $descripcion, $idioma, $codigoImagen) {
        $this->Id = $Id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->idioma = $idioma;
        $this->codigoImagen = $codigoImagen;
    }

}
