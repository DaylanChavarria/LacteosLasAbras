<?php

include '../../Data/GaleriaData.php';

/**
 * Clase encargada de conectar la capa de presentacion con la capa de
 * Datos, relacionada a Productos.
 */
class GaleriaBusiness extends GaleriaData {

//*******Obtener Productos******
    function ingresarGaleriaBusiness($imagen, $imagenin) {
        return $this->ingresarGaleriaData($imagen, $imagenin);
    }

    function eliminarGaleriaBusiness() {
        return $this->eliminarGaleriaData();
    }

    function obtenerGaleriaBusiness() {
        return $this->obtenerGaleriaData();
    }

    function obtenerImagenesGaleriaBusiness() {
        return $this->obtenerImagenesGaleriaData();
    }

    function actualizarImagenEsBusiness($producto) {
        return $this->actualizarImagenEsData($producto);
    }

    function actualizarImagenInBusiness($producto) {
        return $this->actualizarImagenInData($producto);
    }

}

?>