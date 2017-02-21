<?php

include '../../Domain/Galeria.php';
include 'Data.php';

/**
 * Clase encargada de realizar las consultas en la Base de Datos relacionadas a Productos 
 */
class GaleriaData extends Data {

    //Insercion es solo una general, por ende no es publico ya que no tiene metodos especificos.
    function ingresarGaleriaData($imagen, $imagenin) {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        /* Primero se obtiene el nuevo codigo de producto */
        $resultCodigo = mysqli_query($conn, "select max(atcodigoImagen) from la_galeria");
        $codigoImagen = (mysqli_fetch_array($resultCodigo)[0]) + 1;
        $query = "call IngresarImagenEnGaleria('" . $imagen->nombre . "','" . $imagen->descripcion . "'," . $imagen->idioma . "," . $codigoImagen . ")";
        $result = mysqli_query($conn, $query);
        $query = "call IngresarImagenEnGaleria('" . $imagenin->nombre . "','" . $imagenin->descripcion . "'," . $imagenin->idioma . "," . $codigoImagen . ")";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $result;
    }

    function eliminarGaleriaData($id) {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $query = "call EliminarImagenDeInicio('" . $id . ")";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $result;
    }

    function obtenerGaleriaData() {
        return $this->obtenerData(0);
    }

    function obtenerImagenesGaleriaData() {
        return $this->obtenerImagenesData(-1);
    }

    //Obtener
    private function obtenerImagenesData($idioma) {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $query = "call ObtenerTodosGaleria(" . $idioma . ")";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $miProducto = new Galeria($row['atId'], $row['atNombre'], $row['atDescripcion'], $row['atIdioma'], $row['atcodigoImagen']);
            array_push($array, $miProducto);
        }
        return $array;
    }

    //Actualizar
    function actualizarImagenEsData($producto) {
        return $this->actualizarGaleria($producto, 0);
    }

    function actualizarImagenInData($producto) {
        return $this->actualizarGaleria($producto, 1);
    }

    function obtenerData($tipo) {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $query = "call ObtenerImagenesInicio(" . $tipo . ")";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $image = new Inicio($row['atId'], $row['atNombre'], $row['atTipo']);
            array_push($array, $image);
        }
        return $array;
    }

    //Actualizar
    private function actualizarGaleria($galeria, $idioma) {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $query = "call ActualizarGaleria('" . $galeria->nombre . "','" . $galeria->descripcion . "'," . $idioma . "," . $galeria->codigoImagen . ")";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $result;
    }

}

?>