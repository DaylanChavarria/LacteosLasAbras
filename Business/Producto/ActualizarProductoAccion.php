<?php

include_once './ProductoBusiness.php';
include_once '../Validaciones.php';

$instValidaciones = new Validaciones();
$resultValidaRecibidos = $instValidaciones->validaRecibidos(
        array('precio', 'nombre', 'descripcion', 'nombrein', 'descripcionin', 'imagen', 'codigo'));

/* Si se recibieron todos los datos esperados */
if (($resultValidaRecibidos == 1)) {
    $precio = $_POST['precio']; //Solo es un precio

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $nombrein = $_POST['nombrein'];
    $descripcionin = $_POST['descripcionin'];

    $codigo = $_POST['codigo'];
//    $codigoin = $_POST['codigoin'];
    $imagen = $_POST['imagen'];

    /*
     * Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
     * datos no numericos en campos numericos. 
     */

    //Se hace el llamado a la funcion que valida campos vacios.
    $resultValidaVacios = $instValidaciones->validaVacios(array($nombre, $precio, $descripcion,
        $nombrein, $descripcionin, $codigo,));

    //Se hace el llamado a la funcion que valida campos numericos.	
    $resultValidaNumericos = $instValidaciones->validaNumericos(array($precio));

    //Se interpretan los resultados de las validaciones.
    if (!$resultValidaVacios) {
        header("location: ../../Presentation/Admin/administrarProductos.php?msg=Todos los datos deben ser ingresados.");
    } elseif (!$resultValidaNumericos) {
        header("location: ../../Presentation/Admin/administrarProductos.php?msg=ERROR de formato, asegurese de ingresar solo numeros en los campos numericos.");
    } else {
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");

        //validar archivo
//        $resultadoArchivo = $instValidaciones->validarArchivo('archivo');
        if ($instValidaciones->validarArchivo('archivo')) {
//             validar extensiones
            if ($instValidaciones->validarExtensiones('archivo')) {
                $ruta = "../../Presentation/Admin/img/productos/" . $_FILES['archivo']['name'];
                if (!file_exists($ruta)) {

                    unlink("../../Presentation/Admin/img/productos/" . $imagen);
                    $resultado = @move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);
                    if ($resultado) {
                        $productoEs = new Producto(0, $nombre, $precio, $descripcion, 0, $codigo, $_FILES['archivo']['name']);
                        $productoIn = new Producto(0, $nombrein, $precio, $descripcionin, 1, $codigo, $_FILES['archivo']['name']);
                        $instBusiness = new ProductoBusiness();
                        $instBusiness->actualizarProductosEsBusiness($productoEs);
                        $instBusiness->actualizarProductosInBusiness($productoIn);

                        header("location: ../../Presentation/Admin/administrarProductos.php?result=success&msg=Inserción realizada con éxito.");
                    } else {
                        header("location: ../../Presentation/Admin/administrarProductos.php?msg=La imagen no pudo ser ingresada.");
                    }
                } else {
                    header("location: ../../Presentation/Admin/administrarProductos.php?msg=No se permite el ingreso porque existe una imagen con el mismo nombre.");
                }
            } else {
                header("location: ../../Presentation/Admin/administrarProductos.php?msg=El formato del archivo no es permitido. Ingrese una imagen en formato jpg o png.");
            }
        } else {
            $productoEs = new Producto(0, $nombre, $precio, $descripcion, 0, $codigo, $imagen);
            $productoIn = new Producto(0, $nombrein, $precio, $descripcionin, 1, $codigo, $imagen);
            $instBusiness = new ProductoBusiness();
            $instBusiness->actualizarProductosEsBusiness($productoEs);
            $instBusiness->actualizarProductosInBusiness($productoIn);
            header("location: ../../Presentation/Admin/administrarProductos.php?result=success&msg=Inserción realizada con éxito.");
        }
    }
} else {
    header("location: ../../Presentation/Admin/administrarProductos.php?msg=No se recibieron todos los datos esperados.");
}
?>