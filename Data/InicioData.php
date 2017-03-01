<?php

include_once '../../Domain/Inicio.php';
include_once 'Data.php';

/**
 * Clase encargada de realizar las consultas en la Base de Datos relacionadas a Productos 
 */
class InicioData extends Data {

    //Insercion es solo una general, por ende no es publico ya que no tiene metodos especificos.
    function ingresarInicioData($imagen) {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $query = "call IngresarImagenDeInicio('" . $imagen->nombre . "'," . $imagen->tipo . ")";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $result;
    }

    function eliminarInicioData($id) {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $query = "call EliminarImagenDeInicio(" . $id . ")";
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $result;
    }

    function obtenerInicioData() {
        return $this->obtenerData(0);
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

}

?>