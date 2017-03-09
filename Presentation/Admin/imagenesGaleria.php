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
        <!-- topbar starts -->

        <!-- topbar ends -->
        <div class="ch-container">
            <div class="row">
                <?php include './menuAdmin.php'; ?>
                <div id="content" class="col-lg-10 col-sm-10">
              

                    <div class="row">
                        <div class="box col-md-12">
                            <div class="box-inner">
                                <div class="box-header well" data-original-title="">
                                    <h2><i class="glyphicon glyphicon-picture"></i> Ingresar Imagen en Galería</h2>
                                </div>
                                <div class="box-content">

                                    <div class="box-content">
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
                                            <form enctype="multipart/form-data" method="POST" action="../../Business/Galeria/GaleriaInsertarAccion.php">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Cargar Imagen</label>
                                                    <input name="archivo" type="file" id="exampleInputFile">

                                                    <p class="help-block">Se recomienda subir imagenes con el tamaño: 1000 x 1000.</p>
                                                </div>
                                                <div class="form-group">
                                                    <span for="exampleInputEmail1" class="badge">Informacion en Español</span>
                                                       <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo Español">-->
                                                    <br>
                                                    <textarea name="descripcion" class="form-control" id="exampleInputPassword1" placeholder="Descripción Español"></textarea>

                                                </div>
                                                <div class="form-group">
                                                    <span for="exampleInputEmail1" class="badge">Informacion en Inglés</span>
                                                    <!--<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo Inglés">-->
                                                    <br>
                                                    <textarea name="descripcionin" class="form-control" id="exampleInputPassword1" placeholder="Descripción Inglés"></textarea>
                                                </div>

                                                <button type="submit" class="btn btn-default">Agregar</button>
                                            </form>

                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <hr>
            </div>
    </body>
</html>
