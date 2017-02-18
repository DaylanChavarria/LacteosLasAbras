<?php

include './GaleriaBusiness.php';
include '../Validaciones.php';

$instValidaciones = new Validaciones();
$resultValidaRecibidos = $instValidaciones->validaRecibidos(
        array('descripcion', 'descripcionin'));
//validar archivo
$resultadoArchivo = $instValidaciones->validarArchivo('archivo');

/* Si se recibieron todos los datos esperados */
if (($resultValidaRecibidos == 1) && $resultadoArchivo == 1) {

    $descripcion = $_POST['descripcion'];
    $descripcionin = $_POST['descripcionin'];
    //Se hace el llamado a la funcion que valida campos vacios.
    $resultValidaVacios = $instValidaciones->validaVacios(array($descripcion, $descripcionin));
    if (!$resultValidaVacios) {
        header("location: ../../Presentation/Admin/imagenesGaleria.php?msg=Todos los datos deben ser ingresados.");
    } else {
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        // validar extensiones
        if ($instValidaciones->validarExtensiones('archivo')) {
            $ruta = "../../Presentation/Admin/img/galeria/" . $_FILES['archivo']['name'];
            if (!file_exists($ruta)) {
                $resultado = @move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);
                if ($resultado) {
                    $instBusiness = new GaleriaBusiness();
                    $galeria = new Galeria(0, $_FILES['archivo']['name'], $descripcion, 0, 0);
                    $galeriain = new Galeria(0, $_FILES['archivo']['name'], $descripcionin, 1, 0);
                    $instBusiness->ingresarGaleriaBusiness($galeria,$galeriain);

                    header("location: ../../Presentation/Admin/imagenesGaleria.php?msg=Inserción realizada con exito");
                } else {
                    header("location: ../../Presentation/Admin/imagenesGaleria.php?msg=No se ingreso");
                }
            } else {
                header("location: ../../Presentation/Admin/imagenesGaleria.php?msg=la imagen existe");
            }
        } else {
            header("location: ../../Presentation/Admin/imagenesGaleria.php?msg=Archivo no permitido");
        }
    }
} else {
    header("location: ../../Presentation/Admin/imagenesGaleria.php?msg=No se recibieron todos los datos esperados");
}
?>