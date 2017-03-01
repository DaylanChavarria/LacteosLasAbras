<?php

include_once './GaleriaBusiness.php';
include_once '../Validaciones.php';
$instValidaciones = new Validaciones();
$resultValidaRecibidos = $instValidaciones->validaRecibidos(
        array('descripcion', 'descripcionin', 'imagen', 'codigo'));
/* Si se recibieron todos los datos esperados */
if (($resultValidaRecibidos == 1)) {
    $descripcion = $_POST['descripcion'];
    $descripcionin = $_POST['descripcionin'];
    $codigo = $_POST['codigo'];
    $imagen = $_POST['imagen'];
    /*
     * Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
     * datos no numericos en campos numericos. 
     */
    //Se hace el llamado a la funcion que valida campos vacios.
    $resultValidaVacios = $instValidaciones->validaVacios(array($descripcion,
        $descripcionin, $imagen));

    //Se hace el llamado a la funcion que valida campos numericos.	
    $resultValidaNumericos = $instValidaciones->validaNumericos(array($codigo));
    //Se interpretan los resultados de las validaciones.
    if (!$resultValidaVacios) {
        header("location: ../../Presentation/Admin/actualizarGaleria.php?msg=Todos los datos deben ser ingresados.");
    } elseif (!$resultValidaNumericos) {
        header("location: ../../Presentation/Admin/actualizarGaleria.php?msg=Asegúrese de ingresar solo números en el campo de precio.");
    } else {
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");

//        $resultadoArchivo = $instValidaciones->validarArchivo('archivo');
        if ($instValidaciones->validarArchivo('archivo')) {
//             validar extensiones
//            echo $_FILES['archivo']['name'];
//            exit;
            if ($instValidaciones->validarExtensiones('archivo')) {
                $ruta = "../../Presentation/Admin/img/galeria/" . $_FILES['archivo']['name'];
                if (!file_exists($ruta)) {



                    unlink("../../Presentation/Admin/img/galeria/" . $imagen);
                    $resultado = @move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);
                    if ($resultado) {



                        $productoEs = new Galeria(0, $_FILES['archivo']['name'], $descripcion, 0, $codigo);
                        $productoIn = new Galeria(0, $_FILES['archivo']['name'], $descripcionin, 1, $codigo);
                        $instBusiness = new GaleriaBusiness();
                        $instBusiness->actualizarImagenEsBusiness($productoEs);
                        $instBusiness->actualizarImagenInBusiness($productoIn);


                        header("location: ../../Presentation/Admin/actualizarGaleria.php?result=success&msg=Actualización realizada con éxito.");
                    } else {
                        header("location: ../../Presentation/Admin/actualizarGaleria.php?msg=La imagen no pudo ser ingresada.");
                    }
                } else {
                    header("location: ../../Presentation/Admin/actualizarGaleria.php?msg=No se permite el ingreso porque existe una imagen con el mismo nombre.");
                }
            } else {
                header("location: ../../Presentation/Admin/actualizarGaleria.php?msg=El formato del archivo no es permitido. Ingrese una imagen en formato jpg o png.");
            }
        } else {

            $productoEs = new Galeria(0, $imagen, $descripcion, 0, $codigo);
            $productoIn = new Galeria(0, $imagen, $descripcionin, 1, $codigo);

            $instBusiness = new GaleriaBusiness();
            $instBusiness->actualizarImagenEsBusiness($productoEs);
            $instBusiness->actualizarImagenInBusiness($productoIn);
            header("location: ../../Presentation/Admin/actualizarGaleria.php?result=success&msg=Actualización realizada con éxito.");
        }
    }
} else {
    header("location: ../../Presentation/Admin/actualizarGaleria.php?msg=No se recibieron todos los datos esperados.");
}
?>