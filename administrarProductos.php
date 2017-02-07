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
                                <a href="#">Productos</a>
                            </li>
                            <li>
                                <a href="#">Administrar</a>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <form>
                            <div class="box col-md-6">
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
                                                <img src="img/gal7.png" class="img-responsive"> <br/><br/>
                                                <input type="file"><br/>
                                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                                <button type="submit" class="btn btn-primary">Eliminar</button>
                                            </div>      
                                            <div class="col-md-6">

                                                <span class="badge">Español</span>
                                                <input type="text" class="form-control" placeholder="Titulo de la imagen" > <br/>
                                                <textarea class="form-control" id="exampleInputPassword1" placeholder="Descripcion de la imagen"></textarea><br/>
                                                <span class="badge">Inglés</span>
                                                <input type="text" class="form-control" placeholder="Titulo de la imagen" > <br/>
                                                <textarea class="form-control" id="exampleInputPassword1" placeholder="Descripcion de la imagen"></textarea>
                                            </div>  
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <form>
                            <div class="box col-md-6">
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
                                                <img src="img/gal7.png" class="img-responsive"> <br/><br/>
                                                <input type="file"><br/>
                                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                                <button type="submit" class="btn btn-primary">Eliminar</button>
                                            </div>      
                                            <div class="col-md-6">

                                                <span class="badge">Español</span>
                                                <input type="text" class="form-control" placeholder="Titulo de la imagen" > <br/>
                                                <textarea class="form-control" id="exampleInputPassword1" placeholder="Descripcion de la imagen"></textarea><br/>
                                                <span class="badge">Inglés</span>
                                                <input type="text" class="form-control" placeholder="Titulo de la imagen" > <br/>
                                                <textarea class="form-control" id="exampleInputPassword1" placeholder="Descripcion de la imagen"></textarea>
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




    </body>
</html>
