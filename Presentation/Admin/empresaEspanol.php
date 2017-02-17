<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title>Free HTML5 Bootstrap Admin Template</title>
    
        <?php
            include '../../Business/Empresa/EmpresaBusiness.php';
            $instEmpresaBusiness = new EmpresaBusiness();
            $tem = $instEmpresaBusiness->getEmpresaEsBusiness();
        ?>
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
                    <form method="POST" action="../../Business/Empresa/ActualizarEmpresaAccion.php?len=es">
                        <div class="row">

                            <!-- Input no visibles -->
                            <input type="hidden" name="id" value="<?php echo $tem->Id ?>" readonly="readonly">
                            <input type="hidden" name="idioma" value="<?php echo $tem->idioma ?>">

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Elaboración</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="elaboracion"><?php echo $tem->elaboracion ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Descripción Contactos</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionContactos" ><?php echo $tem->descripcionContactos ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Dirección</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="direccion" ><?php echo $tem->direccion ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Correo</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="correo"  ><?php echo $tem->correo ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Teléfono</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="telefonoA" ><?php echo $tem->telefonoA ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Segundo Teléfono</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="telefonoB" ><?php echo $tem->telefonoB ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Primer Encargado</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="encargadoA" ><?php echo $tem->encargadoA ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Segundo Encargado</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="encargadoB" ><?php echo $tem->encargadoB ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Misión</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="mision" ><?php echo $tem->mision ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Visión</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="vision" ><?php echo $tem->vision ?></textarea>
                                            </div>                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Historia</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="historia"><?php echo $tem->historia ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!--/span-->

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>¿Quiénes Somos?</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1"  name="quinesSomos"><?php echo $tem->quinesSomos ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!--/span-->


                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Introducción a Galería</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionGaleria"><?php echo $tem->descripcionGaleria ?></textarea>
                                            </div>                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Introducción a Nuestros Productos</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionProductoA"><?php echo $tem->descripcionProductoA ?></textarea>
                                            </div>                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Introducción a Productos</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="elaboracionProductoB" ><?php echo $tem->elaboracionProductoB ?></textarea>
                                            </div>                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Denominación de Origen</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="denominacion" ><?php echo $tem->denominacion ?></textarea>
                                            </div>                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Contáctenos</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" placeholder="Contáctenos en Español"></textarea>
                                            </div>                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="box col-md-6">
                                <div class="row">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>


                          
                        </div><!--/row-->

                    </form>
                    <!-- content ends -->
                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->

        </div>


        <hr>

        


    </body>
</html>
