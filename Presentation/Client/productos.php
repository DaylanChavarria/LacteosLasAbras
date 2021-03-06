<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Productos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

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

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../../ClientResource/products/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../../ClientResource/products/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../../ClientResource/products/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../../ClientResource/products/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../../ClientResource/products/css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="../../ClientResource/products/css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../../ClientResource/products/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../../ClientResource/products/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../../ClientResource/products/css/style.css">

	<!-- Modernizr JS -->
	<script src="../../ClientResource/products/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
        <style TYPE="text/css">*{text-align : justify;}</style>
	</head>
	<body>

	<?php 
		include_once '../../Business/Empresa/EmpresaBusiness.php';
		include_once '../../Business/Titulos/TitulosBusiness.php';
		include_once '../../Business/Producto/ProductoBusiness.php';


		$tituloBusiness = new TitulosBusiness();
        $instEmpresaBusiness = new EmpresaBusiness();
        $productosBusiness = new ProductoBusiness();

		if ($_GET['lang'] == "es") {

			$simbolo = "₡";
            $titulos = $tituloBusiness->obtenerTitulosEsBusiness();
            $quesos = $titulos[14]->getNombre();

            $tem = $instEmpresaBusiness->getEmpresaEsBusiness();

            $productos = $productosBusiness->obtenerProductosEsBusiness();



		}else{

			$simbolo = "$";
			$titulos = $tituloBusiness->obtenerTitulosInBusiness();
            $quesos = $titulos[14]->getNombre();

             $tem = $instEmpresaBusiness->getEmpresaInBusiness();

             $productos = $productosBusiness->obtenerProductosInBusiness();
		}



	?>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
                                    <div id="gtco-logo"><a href="../Client/inicio.php"><figure>
						<img src="../../ClientResource/images/back_icon.png" alt="">
						
					</figure></a></div>
				</div>
			</div>
			
		</div>
	</nav>
	

	
	
	<div class="gtco-section" style="background-image: url(images/img_bg_1.jpg); margin-top: 70px;" data-stellar-background-ratio="0.5">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color"><?php echo $quesos; ?></h2>
					<p><?php echo $tem->descripcionProductoA; ?></p>
				</div>
			</div>
			<div class="row">



				<?php  
					
					foreach ($productos as $currentProductos) {		
				?>

					<div class="col-lg-4 col-md-4 col-sm-6">
						<a href="../Admin/img/productos/<?php echo $currentProductos->nombreImagen ?>" class="fh5co-card-item image-popup">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="../Admin/img/productos/<?php echo $currentProductos->nombreImagen ?>" alt="Image" class="img-responsive">
							</figure>
							<div class="fh5co-text">
								<h2><?php echo $currentProductos->nombre ; ?></h2>
								<p><?php echo $currentProductos->descripcion ; ?></p>
								<?php 
									if ($currentProductos->precio > 0) {
										if ($_GET['lang'] == "es") {
								?>
											<p><span class="price cursive-font"><?php echo "₡" .$currentProductos->precio . " kg"; ?></span></p>
								<?php 
										}else{
								?>
											<p><span class="price cursive-font"><?php echo "$" .$currentProductos->precio . " kg"; ?></span></p>
								<?php 
										}
									}
								?>
								
							</div>
						</a>
					</div>

				<?php  
					}
				?>

				

			</div>
		</div>
	</div>
	
	



	<footer id="gtco-footer" role="contentinfo" style="background-image: url(./presentacion/images/img_bg_1.jpg)">
		<div class="overlay">
				<div class="col-md-12 text-center copyright">
					<p class="to-animate">&copy; 2017 Lacteos las Abras. <br> Designed by <a href="http://freehtml5.co/" target="_blank">TCU 563 Universidad de Costa Rica Sede del Atlántico.</a> 
					</p>
					<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
				</div>

		</div>
		
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="../../ClientResource/products/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../../ClientResource/products/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../../ClientResource/products/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../../ClientResource/products/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../../ClientResource/products/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../../ClientResource/products/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="../../ClientResource/products/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="../../ClientResource/products/js/jquery.magnific-popup.min.js"></script>
	<script src="../../ClientResource/products/js/magnific-popup-options.js"></script>
	
	<script src="products/js/moment.min.js"></script>
	<script src="products/js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="../../ClientResource/products/js/main.js"></script>

	</body>
</html>

