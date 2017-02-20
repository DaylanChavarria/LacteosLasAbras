<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title>Free HTML5 Bootstrap Admin Template</title>
    </head>
    <body>
        <!-- topbar ends -->
        <div class="ch-container">
            <div class="row">
                <?php include 'menuAdmin.php'; ?>
                <div id="content" class="col-lg-10 col-sm-10">
                    <!-- content starts -->
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Grid</a>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
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
                                                    <textarea name="descripcion" class="form-control" id="exampleInputPassword1" placeholder="Descripcion de la imagen"></textarea><br/>
                                                    <span class="badge">Inglés</span>
                                                    <!--<input type="text" class="form-control" placeholder="Titulo de la imagen" > <br/>-->
                                                    <textarea name="descripcionin" class="form-control" id="exampleInputPassword1" placeholder="Descripcion de la imagen"></textarea>
                                                </div>  

                                                <div class="col-md-6">
                                                    <input style="visibility: hidden" name="codigo"  value="<?php echo $resultado[$index]->atcodigoImagen ?>"> <br/>
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


    <script>

        (function ($) {
            $.get = function (key) {
                key = key.replace(/[\[]/, '\\[');
                key = key.replace(/[\]]/, '\\]');
                var pattern = "[\\?&]" + key + "=([^&#]*)";
                var regex = new RegExp(pattern);
                var url = unescape(window.location.href);
                var results = regex.exec(url);
                if (results === null) {
                    return null;
                } else {
                    return results[1];
                }
            }
        })(jQuery);

        var getee = $.get("msg");
        alert(getee);
    </script>
</html>
