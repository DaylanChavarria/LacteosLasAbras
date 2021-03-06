
<!-- The styles -->
<link id="bs-css" href="./css/bootstrap-cerulean.min.css" rel="stylesheet">
<link href="./css/charisma-app.css" rel="stylesheet">
<link href='./bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
<link href='./bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
<link href='./bower_components/chosen/chosen.min.css' rel='stylesheet'>
<link href='./bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
<link href='./bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
<link href='./bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
<link href='./css/jquery.noty.css' rel='stylesheet'>
<link href='./css/noty_theme_default.css' rel='stylesheet'>
<link href='./css/elfinder.min.css' rel='stylesheet'>
<link href='./css/elfinder.theme.css' rel='stylesheet'>
<link href='./css/jquery.iphone.toggle.css' rel='stylesheet'>
<link href='./css/uploadify.css' rel='stylesheet'>
<link href='./css/animate.min.css' rel='stylesheet'>

<!-- jQuery -->
<script src="./bower_components/jquery/jquery.min.js"></script>

<!-- The fav icon -->
<link rel="shortcut icon" href="./img/logo.png">

<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">

    <div class="navbar-inner">
        <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" > <img alt="Charisma Logo" src="./img/logo.png" class="hidden-xs"/>
            <span>Lácteos las Abras</span></a>

        <!-- user dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">admin</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li class="divider"></li>
                <li><a href="../../Business/Ingreso/LogoutAction.php">Cerrar Sesión</a></li>
            </ul>
        </div>
        <!-- user dropdown ends -->

        <!-- theme selector starts -->
        <div class="btn-group pull-right theme-container animated tada">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-tint"></i><span
                    class="hidden-sm hidden-xs"> Cambiar Tema</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" id="themes">
                <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
            </ul>
        </div>
        <!-- theme selector ends -->

        <ul class="collapse navbar-collapse nav navbar-nav top-menu">
            <li><a href="../Client/inicio.php" target="_blank"><i class="glyphicon glyphicon-globe"></i> Ver Página </a></li>
        </ul>

    </div>
</div>

<!-- left menu starts -->
<div class="col-sm-2 col-lg-2">
    <div class="sidebar-nav">
        <div class="nav-canvas">
            <div class="nav-sm nav nav-stacked">

            </div>
            <ul class="nav nav-pills nav-stacked main-menu">
                <li class="nav-header">Panel de configuración</li>
                <li><a class="ajax-link" href="administracion.php"><i class="glyphicon glyphicon-home"></i><span>Inicio</span></a>
                </li>
                <li>
<!--                    <a class="ajax-link" href="imagenesInicio.php"><i class="glyphicon glyphicon-home"></i><span>Imágenes de Inicio</span></a>-->
                    <a href="imagenesInicio.php"><i class="glyphicon glyphicon-plus"></i><span>Imágenes de Inicio</span></a>
                
                </li>
                <li class="accordion">
                    <a href="#"><i class="glyphicon glyphicon-plus"></i><span>Imágenes de Galería</span></a>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="imagenesGaleria.php">Ingresar Imagen</a></li>
                        <li><a href="actualizarGaleria.php">Actualizar Imagen</a></li>
                        <li><a href="eliminarImagenesGaleria.php">Eliminar Imagen</a></li>
                    </ul>
                </li>
                <li class="accordion">
                    <a href="#"><i class="glyphicon glyphicon-plus"></i><span>Empresa</span></a>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="empresaEspanol.php">Estructura en Español</a></li>
                        <li><a href="empresaIngles.php">Estructura en Inglés</a></li>
                    </ul>
                </li>

                <li class="accordion">
                    <a href="#"><i class="glyphicon glyphicon-plus"></i><span>Productos</span></a>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="ingresarProductos.php">Ingresar nuevos Productos</a></li>
                        <li><a href="administrarProductos.php">Administrar Productos</a></li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</div>

<!-- external javascript -->

<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="./js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='../../AdmResource/bower_components/moment/min/moment.min.js'></script>
<script src='../../AdmResource/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='./js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="./bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="./bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="./js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="./bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="./bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="./js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="./js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="./js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="./js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="./js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="./js/charisma.js"></script>