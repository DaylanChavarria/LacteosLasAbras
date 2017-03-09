<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['user'])) {
    
} else {
    header("location: ./administracion.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Lácteos las Abras</title>  

        <?php 
            /* Se obtienen todas las imágenes */
            include '../../Business/Galeria/GaleriaBusiness.php';
            $instGaleriaBusiness = new GaleriaBusiness();
            $listImage = $instGaleriaBusiness->obtenerImagenesGaleriaBusiness();
        ?>
    </head>

    <body>
        <!-- topbar starts -->

        <!-- topbar ends -->
        <div class="ch-container">
            <div class="row">


                <?php include './menuAdmin.php'; ?>

                <div id="content" class="col-lg-10 col-sm-10">
                    <!-- content starts -->
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Galería</a>
                            </li>
                            <li>
                                <a href="#">Eliminar Imagen</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Mensaje de error o de realizado -->
                                        <?php
                                        $textError = "";
                                        if (isset($_GET['msg'])) {
                                            $textError = $_GET['msg'];
                                            ?>
                                            <div class="col-md-offset-1 col-md-10">
                                                <?php
                                                if (isset($_GET['result'])) {
                                                    ?>
                                                    <div class="alert alert-success text-center">
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <div class="alert alert-danger text-center">
                                                            <?php
                                                        }
                                                        ?>

                                                        <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                                        <h4> <?php echo $textError; ?> </h4>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>

                    <div class="row">
                        <div class="box col-md-12">
                            <div class="box-inner">
                                <div class="box-header well" data-original-title="">
                                    <h2><i class="glyphicon glyphicon-picture"></i>Imágenes de Galería</h2>

                                    <div class="box-icon">
<!--                                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                                class="glyphicon glyphicon-cog"></i></a>
                                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                class="glyphicon glyphicon-chevron-up"></i></a>-->
                                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                                class="glyphicon glyphicon-remove"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">



                                    <br>
                                    <ul class="thumbnails gallery">

                                    <?php
                                    for ($cont = 0; $cont < count($listImage);$cont += 2) {
                                        $tem = $listImage[$cont];
                                    ?>
                                    <li id="<?php echo $tem->codigoImagen . '&' . $tem->nombre . '&galeria' ?>"
                                     class="thumbnail">
                                        <a style="background:url(./img/galeria/<?php echo $tem->nombre ?>)"
                                           title="Sample Image 1" href="./img/galeria/<?php echo $tem->nombre ?>">
                                            <img 
                                                class="grayscale" src="./img/galeria/<?php echo $tem->nombre ?>"
                                                alt="Sample Image 1">
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <hr>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h3>Settings</h3>
                        </div>
                        <div class="modal-body">
                            <p>Here settings can be configured...</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                            <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
