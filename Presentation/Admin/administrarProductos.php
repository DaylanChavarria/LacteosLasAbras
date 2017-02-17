<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title>Productos</title>
        <script>
            function eliminar(id, imagen) {
                var url = "../../Business/Producto/EliminarProductoAccion.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: "id=" + id + "&imagen=" + imagen,
                    success: function (data)
                    {
                        alert(data);
                        location.reload();
                    },
                    error: function (data)
                    {
                        alert(data); // Mostrar la respuestas del script PHP.
                    }
                });
                return false; // Evitar ejecutar el submit del formulario.
            }
        </script>
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
                        <?php
                        include '../../Business/Producto/ProductoBusiness.php';
                        $instBusiness = new ProductoBusiness();
                        $resultado = $instBusiness->obtenerTodoProductoBusiness();
                        for ($index = 0; $index < sizeof($resultado); $index = $index + 2) {
//                            echo $resultado[$index]->nombre . '</br>';
//                            echo $resultado[$index + 1]->nombre . '</br>';
                            ?>
                            <form method="POST" action="../../Business/Producto/ActualizarProductoAccion.php" enctype="multipart/form-data" >
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
                                                    <img src="./img/productos/<?php echo $resultado[$index]->nombreImagen ?>" class="img-responsive"> <br/><br/>
                                                    <input name="archivo" type="file"><br/> 
                                                    <input name="imagen" type="text" class="form-control" placeholder="Titulo de la imagen" readonly value="<?php echo $resultado[$index]->nombreImagen ?>"> <br/> 
                                                    <input name="precio" type="number" class="form-control" placeholder="Precio del producto"  value="<?php echo $resultado[$index]->precio ?>"> <br/>
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                    <button type="button" onclick="eliminar(<?php echo "'" . $resultado[$index]->codigoProducto . "','" . $resultado[$index]->nombreImagen . "'" ?>)"class="btn btn-primary">Eliminar</button>
                                                </div>      
                                                <div class="col-md-6">
                                                    <span class="badge">Español</span>

                                                    <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="<?php echo $resultado[$index]->nombre ?>"> <br/>
                                                    <textarea name="descripcion" class="form-control" id="exampleInputPassword1" placeholder="Descripcion de la imagen" ><?php echo $resultado[$index]->descripcion ?></textarea><br/>

                                                    <span class="badge">Inglés</span>
                                                    <input name="nombrein" type="text" class="form-control" placeholder="Titulo de la imagen" value="<?php echo $resultado[$index + 1]->nombre ?>"> <br/>
                                                    <textarea name="descripcionin" class="form-control" id="exampleInputPassword1" placeholder="Descripcion de la imagen"><?php echo $resultado[$index + 1]->descripcion ?></textarea>
                                                </div>  
                                                <div class="col-md-6">
                                                    <input style="visibility: hidden" name="codigo"  value="<?php echo $resultado[$index]->codigoProducto ?>"> <br/>
                                                    <!--<input style="visibility: hidden" name="codigoin"  value="<?php echo $resultado[$index + 1]->codigoProducto ?>"> <br/>-->
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
                        }
                        ?>
                    </div>          
                </div>
            </div>
        </div>
        <hr>
    </body>
</html>
