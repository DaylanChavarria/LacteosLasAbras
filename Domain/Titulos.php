<?php
/**
 * Clase para manejar la interfaz del cliente
 * se manejará en español e Inglés 
 * Español = 0
 * inglés = 1
 * 
 * @author Daylan Chavarria
 */
class Titulos{
    private $id;
    private $nombre;
    private $descripcion;
    private $idioma; 
    
    function __construct($id, $nombre, $descripcion, $idioma) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->idioma = $idioma;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getIdioma() {
        return $this->idioma;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setIdioma($idioma) {
        $this->idioma = $idioma;
    }



}