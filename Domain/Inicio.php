<?php

/**
 * Clase descriptiva de Empresa 
 * 
 * @author Gustavo
 */
class Inicio {

    public $Id;
    public $nombre;
    public $tipo;

    function Inicio($Id, $nombre, $tipo) {
        $this->Id = $Id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

}
