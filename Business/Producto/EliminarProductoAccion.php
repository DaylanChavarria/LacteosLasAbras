<?php

include_once './ProductoBusiness.php';
include_once '../Validaciones.php';
$instValidaciones = new Validaciones();
$resultValidaRecibidos = $instValidaciones->validaRecibidos(array('id', 'imagen'));
/* Si se recibieron todos los datos esperados */
if ($resultValidaRecibidos) {
    /* Si se recibieron todos los datos y  ninguno esta vacio */
    $instBusiness = new ProductoBusiness();
    $result = $instBusiness->eliminarProductoBusiness($_POST['id']);
    unlink("../../Presentation/Admin/img/productos/". $_POST['imagen']);
    return true;
//    $result = $instBusiness->eliminarProductoBusiness($_POST['id']);
//    header("location: ../../Presentation/Admin/administrarProductos.php?msg=Actualizacion realizada con exito");
} else {
//    header("location: ../../Presentation/Admin/administrarProductos.php?msg=No se recibieron todos los datos esperados");
    return false;
}
?>
