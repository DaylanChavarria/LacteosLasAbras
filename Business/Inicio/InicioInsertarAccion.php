<?php

include './InicioBusiness.php';
include '../Validaciones.php';

$instValidaciones = new Validaciones();

//validar archivo
$resultadoArchivo = $instValidaciones->validarArchivo('archivo');

/* Si se recibieron todos los datos esperados */
if ($resultadoArchivo == 1) {
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    // validar extensiones
    if ($instValidaciones->validarExtensiones('archivo')) {
        $ruta = "../../Presentation/Admin/img/inicio/" . $_FILES['archivo']['name'];
        if (!file_exists($ruta)) {
            $resultado = @move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);
            if ($resultado) {
                $instBusiness = new InicioBusiness();
                //ID,RUTA,TIPO
                $imagenInicio = new Inicio(0, $_FILES['archivo']['name'], 0);
                $instBusiness->ingresarInicioBusiness($imagenInicio);
                header("location: ../../Presentation/Admin/imagenesInicio.php?msg=Inserción realizada con exito");
            } else {
                header("location: ../../Presentation/Admin/imagenesInicio.php?msg=No se ingreso");
            }
        } else {
            header("location: ../../Presentation/Admin/imagenesInicio.php?msg=la imagen existe");
        }
    } else {
        header("location: ../../Presentation/Admin/imagenesInicio.php?msg=Archivo no permitido");
    }
//    }
} else {
    header("location: ../../Presentation/Admin/imagenesInicio.php?msg=No se recibieron todos los datos esperados");
}
?>