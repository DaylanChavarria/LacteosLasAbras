<?php

include_once './GaleriaBusiness.php';
include_once '../Validaciones.php';

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

                    header("location: ../../Presentation/Admin/imagenesGaleria.php?result=success&msg=Inserción realizada con éxito.");
                } else {
                    header("location: ../../Presentation/Admin/imagenesGaleria.php?msg=La imagen no pudo ser ingresada.");
                }
            } else {
                header("location: ../../Presentation/Admin/imagenesGaleria.php?msg=No se permite el ingreso porque existe una imagen con el mismo nombre.");
            }
        } else {
            header("location: ../../Presentation/Admin/imagenesGaleria.php?msg=El formato del archivo no es permitido. Ingrese una imagen en formato jpg o png.");
        }
    }
} else {
    header("location: ../../Presentation/Admin/imagenesGaleria.php?msg=No se recibieron todos los datos esperados. Verifique que todos los campos estén llenos.");
}
?>