<?php

include './ProductoBusiness.php';
include '../Validaciones.php';

$instValidaciones = new Validaciones();
$resultValidaRecibidos = $instValidaciones->validaRecibidos(
        array('precio', 'nombreEs', 'descripcionEs', 'nombreIn', 'descripcionIn'));
//validar archivo
$resultadoArchivo = $instValidaciones->validarArchivo('archivo');

/* Si se recibieron todos los datos esperados */
if (($resultValidaRecibidos == 1) && ($resultadoArchivo == 1)) {
    $precio = $_POST['precio']; //Solo es un precio

    $nombreEs = $_POST['nombreEs'];
    $descripcionEs = $_POST['descripcionEs'];

    $nombreIn = $_POST['nombreIn'];
    $descripcionIn = $_POST['descripcionIn'];

    /*
     * Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
     * datos no numericos en campos numericos. 
     */

    //Se hace el llamado a la funcion que valida campos vacios.
    $resultValidaVacios = $instValidaciones->validaVacios(array($nombreEs, $precio, $descripcionEs,
        $nombreIn, $descripcionIn));

    //Se hace el llamado a la funcion que valida campos numericos.	
    $resultValidaNumericos = $instValidaciones->validaNumericos(array($precio));

    //Se interpretan los resultados de las validaciones.
    if (!$resultValidaVacios) {
        header("location: ../../Presentation/Admin/ingresarProductos.php?msg=Todos los datos deben ser ingresados.");
    } elseif (!$resultValidaNumericos) {
        header("location: ../../Presentation/Admin/ingresarProductos.php?msg=ERROR de formato, asegurese de ingresar solo numeros en los campos numericos.");
    } else {
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        // validar extensiones
        if ($instValidaciones->validarExtensiones('archivo')) {
            $ruta = "../../Presentation/Admin/img/productos/" . $_FILES['archivo']['name'];
            if (!file_exists($ruta)) {
                $resultado = @move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);
                if ($resultado) {
                    $productoEs = new Producto(0, $nombreEs, $precio, $descripcionEs, 0, 4, $_FILES['archivo']['name']);
                    $productoIn = new Producto(0, $nombreIn, $precio, $descripcionIn, 1, 4, $_FILES['archivo']['name']);
                    $instBusiness = new ProductoBusiness();
                    //recomendacion insertar como transaccion, si todo se guarda en base de datos (ingles y espa) se notificica exito al usuario,
                    // si ocurre error e nvbase se suprime la imagen copiada en la carpeta y se envia error
                    // preguntar a tavo
                    $result = $instBusiness->insertProductoBusiness($productoEs, $productoIn);

                    header("location: ../../Presentation/Admin/ingresarProductos.php?msg=Inserción realizada con exito");
                } else {
                    header("location: ../../Presentation/Admin/ingresarProductos.php?msg=No se ingreso");
                }
            } else {
                header("location: ../../Presentation/Admin/ingresarProductos.php?msg=la imagen existe");
            }
        } else {
            header("location: ../../Presentation/Admin/ingresarProductos.php?msg=Archivo no permitido");
        }
    }
} else {
    header("location: ../../Presentation/Admin/ingresarProductos.php?msg=No se recibieron todos los datos esperados");
}
?>