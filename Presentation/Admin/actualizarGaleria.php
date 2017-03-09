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
    </head>
    <body>
        <!-- topbar ends -->
        <div class="ch-container">
            <div class="row">
                <?php include 'menuAdmin.php'; ?>
                <div id="content" class="col-lg-10 col-sm-10">
                    <!-- content starts -->

                    <div class="row">
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
                        <?php
                        include '../../Business/Galeria/GaleriaBusiness.php';
                        $instBusiness = new GaleriaBusiness();
                        $resultado = $instBusiness->obtenerImagenesGaleriaBusiness();
                        for ($index = 0; $index < sizeof($resultado); $index = $index + 2) {
                            ?>
                            <form method="POST" action="../../Business/Galeria/ActualizarGaleriaAccion.php" enctype="multipart/form-data">
                                <div class="box col-md-6">
                                    <div class="box-inner">
                                        <div class="box-header well" data-original-title="">
                                            <h2><i class="glyphicon glyphicon-th"></i>Imagen de Galería</h2>

                                            <div class="box-icon">
                                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                        class="glyphicon glyphicon-chevron-up"></i></a>

                                            </div>
                                        </div>
                                        <div class="box-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <img src="./img/galeria/<?php echo $resultado[$index]->nombre ?>" class="img-responsive"> <br/><br/>
                                                    <input name="archivo" type="file" >
                                                    <br/>
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                </div>      
                                                <div class="col-md-6">
                                                    <span class="badge">Español</span>
                                                    <!--<input type="text" class="form-control" placeholder="Titulo de la imagen" > <br/>-->
                                                    <textarea name="descripcion" class="form-control" id="exampleInputPassword1" placeholder="Descripcion de la imagen"><?php echo $resultado[$index]->descripcion ?></textarea><br/>
                                                    <span class="badge">Inglés</span>
                                                    <!--<input type="text" class="form-control" placeholder="Titulo de la imagen" > <br/>-->
                                                    <textarea name="descripcionin" class="form-control" id="exampleInputPassword1" placeholder="Descripcion de la imagen"><?php echo $resultado[$index+1]->descripcion ?></textarea>
                                                </div>  

                                                <div class="col-md-6">
                                                    <input style="visibility: hidden" name="codigo"  value="<?php echo $resultado[$index]->codigoImagen ?>"> <br/>
                                                    <input style="visibility: hidden" name="imagen"  value="<?php echo $resultado[$index + 1]->nombre ?>"> <br/>
                                                </div>  
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>

                            <?php
                        }
                        ?>
                    </div><!--/row-->
                    <!-- content ends -->
                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->
        </div>
        <hr>
    </body>
</html>
