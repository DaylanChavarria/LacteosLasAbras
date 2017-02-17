<?php

include '../../Data/InicioData.php';

/**
 * Clase encargada de conectar la capa de presentacion con la capa de
 * Datos, relacionada a Productos.
 */
class InicioBusiness extends InicioData {

//*******Obtener Productos******
    function ingresarInicioBusiness($imagen) {
        return $this->ingresarInicioData($imagen);
    }

    function eliminarInicioBusiness() {
        return $this->eliminarInicioData();
    }

    function obtenerInicioBusiness() {
        return $this->obtenerInicioData();
    }

}

?>