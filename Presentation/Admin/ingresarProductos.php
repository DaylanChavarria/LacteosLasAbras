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


                        <form action="../../Business/Producto/ProductoInsertarAccion.php" method="POST" enctype="multipart/form-data" >
                            <div class="box col-md-12">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Imagen de Productos</h2>
                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="badge">Español</span>
                                                <input type="text" class="form-control" name="nombreEs" placeholder="Digite el nombre del producto en español." > <br/>
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionEs"  placeholder="Digite la descripción del producto en español."></textarea><br/>

                                                <span class="badge">Inglés</span>
                                                <input type="text" class="form-control" name="nombreIn" placeholder="Digite el nombre del producto en inglés." > <br/>
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionIn" placeholder="Digite la descripción del producto en inglés."></textarea>

                                            </div> 
                                            <div class="col-md-6">
                                                <input type="number" name="precio" class="form-control" placeholder="Digite el precio del producto." > <br/>   
                                            </div>  
                                            <div class="col-md-6">
                                                <!--<img src="img/gal7.png" class="img-responsive"> <br/><br/>-->
                                                <input type="file" id="files" name="archivo" />
                                                <br />
                                                <output id="list" ></output>
                                                <br />
                                                <button type="submit" class="btn btn-primary">Ingresar</button>
                                                <!--<button type="submit" class="btn btn-primary">Eliminar</button>-->
                                            </div>      


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/row-->



                    <!-- content ends -->
                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->

        </div>


        <hr>

        <script>
            function archivo(evt) {
                var files = evt.target.files; // FileList object

                // Obtenemos la imagen del campo "file".
                for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function (theFile) {
                        return function (e) {
                            // Insertamos la imagen
                            document.getElementById("list").innerHTML = ['<img class="thumb img-responsive" style=" width: 100%; height: 100% " src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);

                    reader.readAsDataURL(f);
                }
            }

            document.getElementById('files').addEventListener('change', archivo, false);
        </script>

    </body>
</html>
