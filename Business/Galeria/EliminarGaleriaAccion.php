<?php

include_once 'GaleriaBusiness.php';
$instGaleriaBusiness = new GaleriaBusiness();
/* Se valida el id */
if (isset($_POST['id']) && $_POST['id'] != "") {
    $result = $instGaleriaBusiness->eliminarGaleriaBusiness($_POST['id']);
    if ($result) {
        unlink("../../Presentation/Admin/img/galeria/" . $_POST['srcImage']);
        echo 'true';
    } else {
        echo 'false';
    }
} else {
    echo 'false';
}
?>