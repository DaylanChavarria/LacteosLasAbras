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
                    <!-- content starts -->
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Galería</a>
                            </li>
                            <li>
                                <a href="#">Eliminar Fotos</a>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="box col-md-12">
                            <div class="box-inner">
                                <div class="box-header well" data-original-title="">
                                    <h2><i class="glyphicon glyphicon-picture"></i> Ingresar Imagen en Galería</h2>
                                </div>
                                <div class="box-content">

                                    <div class="box-content">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Cargar Imagen</label>
                                                <input type="file" id="exampleInputFile">

                                                <p class="help-block">Se recomienda subir imagenes con el tamaño: 1000 x 1000.</p>
                                            </div>
                                            <div class="form-group">
                                                <span for="exampleInputEmail1" class="badge">Informacion en Español</span>
                                               
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo Español">
                                                <br>
                                                <textarea class="form-control" id="exampleInputPassword1" placeholder="Descripción Español"></textarea>

                                            </div>
                                            <div class="form-group">
                                                <span for="exampleInputEmail1" class="badge">Informacion en Inglés</span>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo Inglés">
                                                <br>
                                                <textarea class="form-control" id="exampleInputPassword1" placeholder="Descripción Inglés"></textarea>
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
