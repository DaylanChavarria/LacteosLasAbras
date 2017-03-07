
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lácteos las Abras</title>
        <link rel="shortcut icon" href="../../ClientResource/images/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
        <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
        <meta name="author" content="FREEHTML5.CO" />


        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico">

        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>

        <!-- Animate.css -->
        <link rel="stylesheet" href="../../ClientResource/css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="../../ClientResource/css/icomoon.css">
        <!-- Simple Line Icons -->
        <link rel="stylesheet" href="../../ClientResource/css/simple-line-icons.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="../../ClientResource/css/bootstrap-datetimepicker.min.css">
        <!-- Flexslider -->
        <link rel="stylesheet" href="../../ClientResource/css/flexslider.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="../../ClientResource/css/bootstrap.css">

        <link rel="stylesheet" href="../../ClientResource/css/style.css">


        <!-- Modernizr JS -->
        <script src="../../ClientResource/js/modernizr-2.6.2.min.js"></script>

        <script src="../../ClientResource/js/jquery.min.js"></script>

        <style TYPE="text/css">*{text-align : justify;}</style>
        <?php
        include '../../Business/Empresa/EmpresaBusiness.php';
        include '../../Business/Titulos/TitulosBusiness.php';
        include '../../Business/Inicio/InicioBusiness.php';
        include '../../Business/Galeria/GaleriaBusiness.php';
        ?>
    </head>
    <body>


        <?php
        /* se hace el llamado a los titulos los cuales ya estan
         * establecidos, su estructura no va a cambiar por lo tanto
         * se conoce su posicion exacta en el array 
         * el idioma español apunta al atIdioma 0 y el ingles a 1
         * 
         */
        $tituloBusiness = new TitulosBusiness();
        $instEmpresaBusiness = new EmpresaBusiness();
        $idiomaTemp = true;


        if (isset($_POST['lang'])) {
            if ($_POST['lang'] == "Español") {

                $titulos = $tituloBusiness->obtenerTitulosEsBusiness();
                /* Para los botones de navegacion */
                $btnInicio = $titulos[0]->getNombre();
                $btnAcerca = $titulos[1]->getNombre();
                $btnGaleria = $titulos[2]->getNombre();
                $btnProductos = $titulos[3]->getNombre();
                $btnContactenos = $titulos[4]->getNombre();
                $btnLocalizacion = $titulos[5]->getNombre();
                $btnIdiomas = $titulos[6]->getNombre();
                $btnIdiomaEs = $titulos[7]->getNombre();
                $btnIdiomaIn = $titulos[8]->getNombre();
                $btnEnviarMensaje = $titulos[9]->getNombre();
                $btnVerProductos = $titulos[18]->getNombre();

                /* para los titulos */
                $historia = $titulos[10]->getNombre();
                $quienesSomos = $titulos[11]->getNombre();
                $galeria = $titulos[12]->getNombre();
                $productos = $titulos[13]->getNombre();
                $quesos = $titulos[14]->getNombre();
                $denominacion = $titulos[15]->getNombre();
                $contactenos = $titulos[16]->getNombre();
                $consulta = $titulos[17]->getNombre();

                /* Descripciones de cada titulo */
                $tem = $instEmpresaBusiness->getEmpresaEsBusiness();
            } else if ($_POST['lang'] == "Ingles") {
                $titulos = $tituloBusiness->obtenerTitulosInBusiness();
                /* Para los botones de navegacion */
                $btnInicio = $titulos[0]->getNombre();
                $btnAcerca = $titulos[1]->getNombre();
                $btnGaleria = $titulos[2]->getNombre();
                $btnProductos = $titulos[3]->getNombre();
                $btnContactenos = $titulos[4]->getNombre();
                $btnLocalizacion = $titulos[5]->getNombre();
                $btnIdiomas = $titulos[6]->getNombre();
                $btnIdiomaEs = $titulos[7]->getNombre();
                $btnIdiomaIn = $titulos[8]->getNombre();
                $btnEnviarMensaje = $titulos[9]->getNombre();
                $btnVerProductos = $titulos[18]->getNombre();

                /* para los titulos */
                $historia = $titulos[10]->getNombre();
                $quienesSomos = $titulos[11]->getNombre();
                $galeria = $titulos[12]->getNombre();
                $productos = $titulos[13]->getNombre();
                $quesos = $titulos[14]->getNombre();
                $denominacion = $titulos[15]->getNombre();
                $contactenos = $titulos[16]->getNombre();
                $consulta = $titulos[17]->getNombre();

                /* Descripciones de cada titulo */
                $tem = $instEmpresaBusiness->getEmpresaInBusiness();
                $idiomaTemp = false;
            }
        } else {
            /* Para los botones de navegacion */
            $titulos = $tituloBusiness->obtenerTitulosEsBusiness();
            $btnInicio = $titulos[0]->getNombre();
            $btnAcerca = $titulos[1]->getNombre();
            $btnGaleria = $titulos[2]->getNombre();
            $btnProductos = $titulos[3]->getNombre();
            $btnContactenos = $titulos[4]->getNombre();
            $btnLocalizacion = $titulos[5]->getNombre();
            $btnIdiomas = $titulos[6]->getNombre();
            $btnIdiomaEs = $titulos[7]->getNombre();
            $btnIdiomaIn = $titulos[8]->getNombre();
            $btnEnviarMensaje = $titulos[9]->getNombre();
            $btnVerProductos = $titulos[18]->getNombre();

            /* para los titulos */
            $historia = $titulos[10]->getNombre();
            $quienesSomos = $titulos[11]->getNombre();
            $galeria = $titulos[12]->getNombre();
            $productos = $titulos[13]->getNombre();
            $quesos = $titulos[14]->getNombre();
            $denominacion = $titulos[15]->getNombre();
            $contactenos = $titulos[16]->getNombre();
            $consulta = $titulos[17]->getNombre();

            /* Descripciones de cada titulo */
            $tem = $instEmpresaBusiness->getEmpresaEsBusiness();
        }
        ?>


        <div id="fh5co-container">
            <div id="fh5co-home" class="js-fullheight" data-section="home">

                <div class="flexslider">

                    <div class="fh5co-overlay"></div>
                    <div class="fh5co-text">
                        <div class="container">
                            <div class="row">
                                <h1 class="to-animate" style="text-align : center;">Lácteos</h1>
                                <h2 class="to-animate" style="text-align : center;">Las Abras</h2><br>
                            </div>
                        </div>
                    </div>
                    <ul class="slides">

                        <?php
                        $instBusiness = new InicioBusiness();
                        $resultado = $instBusiness->obtenerInicioBusiness();

                        foreach ($resultado as $current) {
                            ?>
                            <li style="background-image: url(../Admin/img/inicio/<?php echo $current->nombre ?>);" data-stellar-background-ratio="0.5"></li>

                            <?php
                        }
                        ?>


                    </ul>

                </div>

            </div>

            <div class="js-sticky">
                <div class="fh5co-main-nav">
                    <div class="container-fluid">
                        <div class="fh5co-menu-1">
                            <a href="#" data-nav-section="home"><?php echo $btnInicio; ?> </a>
                            <a href="#" data-nav-section="about"><?php echo $btnAcerca; ?></a>
                            <a href="#" data-nav-section="menu"><?php echo $btnGaleria; ?></a>
                            <a href="#" data-nav-section="events"><?php echo $btnProductos; ?></a>  
                        </div>
                        <div class="fh5co-logo">
                            <a data-toggle="modal" href="#myModal">     
                                <img src="../../ClientResource/images/logo.png" alt="Nuestro Logo">
                            </a>        
                        </div>
                        <div class="fh5co-menu-2 dropdown">
                            <a href="#" data-nav-section="reservation"><?php echo $btnContactenos; ?></a>
                            <a href="#" data-nav-section="localizacion"><?php echo $btnLocalizacion; ?></a>
                            <a data-toggle="modal" href="#myModalLanguaje">     
                                <?php echo $btnIdiomas; ?>
                            </a>                         
                            <a data-toggle="modal" href="#modalSesion" class="glyphicon glyphicon-log-in" data-toggle="tooltip" data-placement="bottom" title="Iniciar Sesión"></a>

                        </div>
                    </div>

                </div>
            </div>

            <div id="fh5co-about" data-section="about">
                <div class="fh5co-2col fh5co-text">
                    <h2 class="heading to-animate"><?php echo $historia; ?></h2>
                    <?php
                    $parrafos = explode("|", $tem->historia); //separa parrafos por medio de |

                    for ($i = 0; $i < count($parrafos); $i++) {
                        if ($i == 0) {
                            echo '<p class="to-animate"><span class="firstcharacter">' .
                            substr($parrafos[$i], 0, 1) . '</span>' .
                            substr($parrafos[$i], 1) . '</p>';
                        } else {
                            echo '<p class="to-animate">' . $parrafos[$i] . '</p>';
                        }
                    }
                    ?>


                </div>
                <div class="fh5co-2col fh5co-text">
                    <h2 class="heading to-animate"><?php echo $quienesSomos; ?></h2>
                    <?php
                    $parrafos = explode("|", $tem->quinesSomos); //separa parrafos por medio de |

                    for ($i = 0; $i < count($parrafos); $i++) {
                        echo '<p class="to-animate">' . $parrafos[$i] . '</p>';
                    }
                    ?>


                </div>
            </div>

            <div id="fh5co-menus" data-section="menu"  >
                <div class="container">
                    <div class="row text-center fh5co-heading row-padded">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="heading to-animate"><?php echo $galeria; ?></h2>
                            <p class="sub-heading to-animate"> <?php echo $tem->descripcionGaleria ?></p>
                        </div>
                    </div>

                    <div class="container">
                        <div id="main_area">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-xs-12" id="slider">
                                    <!-- Top part of the slider -->
                                    <div class="row">
                                        <div class="col-sm-6" id="carousel-bounding-box">
                                            <div class="carousel slide" id="myCarousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner" >


                                                    <?php
                                                    $galeriaBusiness = new GaleriaBusiness();
                                                    $imagenesGaleria = $galeriaBusiness->obtenerImagenesGaleriaENBusiness();
                                                    $conta = 0;

                                                    foreach ($imagenesGaleria as $currentGaleria) {
                                                        if ($conta == 0) {
                                                            ?>  

                                                            <div class="active item" <?php echo "data-slide-number='" . $conta . "'"; ?>>
                                                                <img src="../Admin/img/galeria/<?php echo $currentGaleria->nombre ?>">

                                                            </div>
                                                            <?php
                                                        } else {
                                                            ?> 

                                                            <div class="item" <?php echo "data-slide-number='" . $conta . "'"; ?>>
                                                                <img src="../Admin/img/galeria/<?php echo $currentGaleria->nombre ?>">

                                                            </div>

                                                            <?php
                                                        }
                                                        $conta = $conta + 1;
                                                    }
                                                    ?> 




                                                </div><!-- Carousel nav -->
                                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                                </a>                                
                                            </div>
                                        </div>

                                        <div class="col-sm-6" id="carousel-text"></div>







                                        <div id="slide-content" style="display: none;">


                                            <?php
                                            if ($idiomaTemp == true) {
                                                $galeriaBusiness = new GaleriaBusiness();
                                                $imagenesGaleria = $galeriaBusiness->obtenerImagenesGaleriaESBusiness();
                                            } else {
                                                $galeriaBusiness = new GaleriaBusiness();
                                                $imagenesGaleria = $galeriaBusiness->obtenerImagenesGaleriaENBusiness();
                                            }


                                            $conta = 0;

                                            foreach ($imagenesGaleria as $currentGaleria) {
                                                ?>  

                                                <div <?php echo "id='slide-content-" . $conta . "'"; ?> >

                                                    <p><?php echo $currentGaleria->descripcion; ?></p>

                                                </div>
                                                <?php
                                                $conta = $conta + 1;
                                            }
                                            ?> 



                                        </div>
                                    </div>
                                </div>
                            </div><!--/Slider-->

                            <div class="row hidden-xs" id="slider-thumbs">
                                <!-- Bottom switcher of slider -->
                                <ul class="hide-bullets">

                                    <?php
                                    $galeriaBusiness = new GaleriaBusiness();
                                    $imagenesGaleria = $galeriaBusiness->obtenerImagenesGaleriaENBusiness();
                                    $conta = 0;

                                    foreach ($imagenesGaleria as $currentGaleria) {
                                        ?>  

                                        <li class="col-sm-2">
                                            <!--<a class="thumbnail" <?php echo "id='carousel-selector-" . $conta . "'"; ?>><img src="../Admin/img/galeria/<?php echo $currentGaleria->nombre ?>"></a>-->
                                        </li>

                                        <?php
                                        $conta = $conta + 1;
                                    }
                                    ?> 
                                </ul>                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-events" data-section="events" style="background-image: url(../../ClientResource/images/product.jpg);" data-stellar-background-ratio="0.5">
                <div class="fh5co-overlay"></div>
                <div class="container">
                    <div class="row text-center fh5co-heading row-padded">
                        <div class="col-md-12  to-animate">
                            <h2 class="heading"><?php echo $productos; ?></h2>
                            <p class="sub-heading"><?php echo $tem->elaboracion; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="fh5co-event to-animate-2">
                                <h3><?php echo $quesos; ?></h3>
                                <span class="fh5co-event-meta"></span>
                                <p><?php echo $tem->descripcionProductoA; ?></p>
                                <p><a href="productos.php?lang=<?php
                                    if ($idiomaTemp == 1) {
                                        echo "es";
                                    } else {
                                        echo "en";
                                    }
                                    ?>" class="btn btn-primary btn-outline"><?php echo $btnVerProductos; ?></a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fh5co-event to-animate-2">
                                <h3><?php echo $denominacion; ?></h3>
                                <span class="fh5co-event-meta"></span>
                                <p><?php echo $tem->denominacion; ?>.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-contact" data-section="reservation">
                <div class="container">
                    <div class="row text-center fh5co-heading row-padded">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="heading to-animate"><?php echo $contactenos; ?></h2>
                            <p class="sub-heading to-animate"><?php echo $tem->descripcionContactos; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 to-animate-2">
                            <h3><?php echo $contactenos; ?></h3>
                            <ul class="fh5co-contact-info">
                                <li class="fh5co-contact-address ">
                                    <i class="icon-home"></i>
                                    <?php echo $tem->direccion; ?>
                                </li>
                                <li><i class="icon-user"></i> <?php echo $tem->encargadoA; ?> <br> <?php echo $tem->encargadoB; ?></li>
                                <li><i class="icon-phone"></i> (+506) <?php echo $tem->telefonoA; ?> <br> (+506) <?php echo $tem->telefonoB; ?></li>
                                <li><i class="icon-envelope"></i><?php echo $tem->correo; ?></li>

                            </ul>
                        </div>
                        <div class="col-md-6 to-animate-2">
                            <h3><?php echo $consulta; ?></h3>
                            <form action="home.php">
                                <div class="form-group ">
                                    <input id="name" class="form-control" placeholder="<?php
                                    if ($idiomaTemp == true) {
                                        echo 'Nombre';
                                    } else {
                                        echo 'Name';
                                    }
                                    ?> "type="text" required>
                                </div>
                                <div class="form-group ">
                                    <input id="email" class="form-control" placeholder="<?php
                                    if ($idiomaTemp == true) {
                                        echo 'Correo';
                                    } else {
                                        echo 'Email';
                                    }
                                    ?>" type="email" required>
                                </div>

                                <div class="form-group ">
                                    <textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="<?php
                                    if ($idiomaTemp == true) {
                                        echo 'Mensaje';
                                    } else {
                                        echo 'Message';
                                    }
                                    ?>" required></textarea>
                                </div>
                                <div class="form-group ">
                                    <input class="btn btn-primary" value="<?php echo $btnEnviarMensaje; ?>" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <div  id="mapa" data-section="localizacion">

            <iframe id="mapa2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1389.3628505235206!2d-83.71807445348067!3d9.957938028180395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f898bc2fb1af7c0!2sTienda+de+quesos+Layo!5e0!3m2!1ses!2ses!4v1485242938228" 
                    width="100%" height="250" frameborder="0" style="border:0s;"></iframe>

        </div>



        <div id="fh5co-footer">
            <div class="container">
                <div class="row row-padded">
                    <div class="col-md-12 text-center">
                        <p class="to-animate">&copy; 2017 Lacteos las Abras. <br> Designed by <a href="https://www.facebook.com/TCU-563-162821603904270" target="_blank">TCU 563 Universidad de Costa Rica Sede del Atlántico.</a> 
                        </p>
                        <ul class="fh5co-social">
                            <li class="to-animate-2"><a href="https://www.facebook.com/queseradLayo/?ref=ts&fref=ts" target="_blank"><i class="icon-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal de mision y vision -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">
                            <?php
                            if ($idiomaTemp == true) {
                                echo 'Misión';
                            } else {
                                echo 'Mission';
                            }
                            ?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <?php echo $tem->mision; ?>
                    </div>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">
                            <?php
                            if ($idiomaTemp == true) {
                                echo 'Visión';
                            } else {
                                echo 'Vision';
                            }
                            ?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <?php echo $tem->vision; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modalLanguaje fade" id="myModalLanguaje" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modalLanguaje-dialog" role="document">
                <div class="modalmodalLanguaje-content">
                    <form method="post">
                        <button type="submit" value="Ingles" name="lang" id="langEn"></button>
                        <button type="submit" value="Español" name="lang" id="langEs"></button>

                    </form>
                </div>
                <!--                <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                </div>-->
            </div>
        </div>

        <!-- modal Iniciar Sesion -->
        <!-- Modal de mision y vision -->
        <div class="modal fade" id="modalSesion" tabindex="-1" role="dialog" aria-labelledby="modalSesion">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modalSesion">Iniciar Sesión</h4>
                    </div>
                    <form method="POST" class="form-horizontal" action="../../Business/Ingreso/LoginBusinessAction.php" target="_blank">
                        <div class="modal-body">
                            <div class="form-group">
                                <!--<label for="inputEmail3" class="col-sm-2 control-label">Correo</label>-->
                                <div class="col-sm-12">
                                    <input name="email" type="emailb" class="form-control" id="inputEmail3" placeholder="Correo electrónico" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <!--<label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>-->
                                <div class="col-sm-12">
                                    <input name="password" type="passwordb" class="form-control" id="inputPassword3" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <!--                            <div class="form-group">
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"> Recordarme
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>-->
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </div>
                            </div></div>
                    </form>

                    <!--                    <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                        </div>-->
                </div>
            </div>
        </div>








        <!-- jQuery -->
        <script src="../../ClientResource/js/bootstrap-modal.js"></script>
        <script src="../../ClientResource/js/jquery.js"></script>
        <script src="../../ClientResource/js/jquery.min.js"></script>

        <!-- jQuery Easing -->
        <script src="../../ClientResource/js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="../../ClientResource/js/bootstrap.min.js"></script>
        <!-- Bootstrap DateTimePicker -->
        <script src="../../ClientResource/js/moment.js"></script>
        <script src="../../ClientResource/js/bootstrap-datetimepicker.min.js"></script>
        <!-- Waypoints -->
        <script src="../../ClientResource/js/jquery.waypoints.min.js"></script>
        <!-- Stellar Parallax -->
        <script src="../../ClientResource/js/jquery.stellar.min.js"></script>

        <!-- Flexslider -->
        <script src="../../ClientResource/js/jquery.flexslider-min.js"></script>
        <script>
            $(function () {
                $('#date').datetimepicker();
            });

            jQuery(document).ready(function ($) {

                $('#myCarousel').carousel({
                    interval: 5000
                });






                $('#carousel-text').html($('#slide-content-0').html());

                //Handles the carousel thumbnails
                $('[id^=carousel-selector-]').click(function () {
                    var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                    var id = parseInt(id);
                    $('#myCarousel').carousel(id);
                });


                // When the carousel slides, auto update the text
                $('#myCarousel').on('slid.bs.carousel', function (e) {
                    var id = $('.item.active').data('slide-number');
                    $('#carousel-text').html($('#slide-content-' + id).html());
                });
            });

        </script>
        <!-- Main JS -->
        <script src="../../ClientResource/js/main.js"></script>
    </body>
</html>

