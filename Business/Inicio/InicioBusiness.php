<?php

include_once '../../Data/InicioData.php';

/**
 * Clase encargada de conectar la capa de presentacion con la capa de
 * Datos, relacionada a Productos.
 */
class InicioBusiness extends InicioData {

//*******Obtener Productos******
    function ingresarInicioBusiness($imagen) {
        return $this->ingresarInicioData($imagen);
    }

    function eliminarInicioBusiness($id) {
        return $this->eliminarInicioData($id);
    }

    function obtenerInicioBusiness() {
        return $this->obtenerInicioData();
    }

}

?>