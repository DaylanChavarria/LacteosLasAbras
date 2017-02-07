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
                                    <h2><i class="glyphicon glyphicon-picture"></i>Imágenes de Inicio</h2>

                                    <div class="box-icon">
                                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                                class="glyphicon glyphicon-cog"></i></a>
                                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                class="glyphicon glyphicon-chevron-up"></i></a>
                                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                                class="glyphicon glyphicon-remove"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">

                                    <div class="box-content">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Cargar Imagen</label>
                                                <input type="file" id="exampleInputFile">

                                                <!--<p class="help-block">Example block-level help text here.</p>-->
                                            </div>
<!--                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Titulo</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Descripción</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>-->
                                            
                                            <button type="submit" class="btn btn-default">Agregar</button>
                                        </form>

                                    </div>

                                    <br>
                                    <ul class="thumbnails gallery">
                                        <li id="image-1" class="thumbnail">
                                            <a style="background:url(https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/1.jpg)"
                                               title="Sample Image 1" href="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/1.jpg"><img
                                                    class="grayscale" src="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/1.jpg"
                                                    alt="Sample Image 1"></a>
                                        </li>
                                        <li id="image-2" class="thumbnail">
                                            <a style="background:url(https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/2.jpg)"
                                               title="Sample Image 2" href="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/2.jpg"><img
                                                    class="grayscale" src="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/2.jpg"
                                                    alt="Sample Image 2"></a>
                                        </li>
                                        <li id="image-3" class="thumbnail">
                                            <a style="background:url(https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/3.jpg)"
                                               title="Sample Image 3" href="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/3.jpg"><img
                                                    class="grayscale" src="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/3.jpg"
                                                    alt="Sample Image 3"></a>
                                        </li>
                                        <li id="image-4" class="thumbnail">
                                            <a style="background:url(https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/4.jpg)"
                                               title="Sample Image 4" href="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/4.jpg"><img
                                                    class="grayscale" src="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/4.jpg"
                                                    alt="Sample Image 4"></a>
                                        </li>

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
