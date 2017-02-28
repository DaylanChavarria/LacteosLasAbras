<?php

	include './EmpresaBusiness.php';
	include '../Validaciones.php';

	$instValidaciones = new Validaciones();

	$resultValidaRecibidos = $instValidaciones->validaRecibidos(
		array('id','historia','quinesSomos','descripcionGaleria','elaboracion','descripcionProductoA',
			'elaboracionProductoB','denominacion','descripcionContactos','direccion','correo',
			'telefonoA','telefonoB','encargadoA','encargadoB','mision','vision','idioma')
		);

	/*Si se recibieron todos los datos esperados*/
	if ($resultValidaRecibidos) {
		$Id = $_POST['id'];
		$historia = $_POST['historia'];
		$quienesSomos = $_POST['quinesSomos'];	
		$descripcionGaleria = $_POST['descripcionGaleria'];
		$elaboracion = $_POST['elaboracion'];
		$descripcionProductA = $_POST['descripcionProductoA'];
		$elaboracionproductB = $_POST['elaboracionProductoB'];
		$denominacion = $_POST['denominacion'];
		$descripcionContactos = $_POST['descripcionContactos'];
		$direccion = $_POST['direccion'];
		$correo = $_POST['correo'];
		$telefonoA = $_POST['telefonoA'];
		$telefonoB = $_POST['telefonoB'];
		$encargadoA = $_POST['encargadoA'];
		$encargadoB = $_POST['encargadoB'];
		$mision = $_POST['mision'];
		$vision = $_POST['vision'];
		$idioma = $_POST['idioma'];

		/*
		* Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
		* datos no numericos en campos numericos. 
		*/

		//Se hace el llamado a la funcion que valida campos vacios.
		$resultValidaVacios = $instValidaciones->validaVacios(
			array($Id, $historia, $quienesSomos, $descripcionGaleria, $elaboracion,
				$descripcionProductA, $elaboracionproductB, $denominacion, $descripcionContactos, $direccion,
				$correo, $telefonoA, $telefonoB, $encargadoA, $encargadoB, $mision, $vision, $idioma));
			
		//Se hace el llamado a la funcion que valida campos numericos.	
		$resultValidaNumericos = $instValidaciones->validaNumericos(array($Id, $telefonoA, $telefonoB, $idioma));

		//Se interpretan los resultados de las validaciones.
		if(!$resultValidaVacios){
			redireccionarConResultado("Todos los datos deben ser ingresados.");
		}elseif (!$resultValidaNumericos) {
			redireccionarConResultado("ERROR de formato, asegurese de ingresar solo números en los campos numéricos.");
		}else{
			/*Si se recibieron todos los datos, ninguno esta vacio*/
			$empresa = new Empresa($Id, $historia, $quienesSomos, $descripcionGaleria, $elaboracion, $descripcionProductA,
		        $elaboracionproductB, $denominacion, $descripcionContactos, $direccion, $correo, $telefonoA, $telefonoB, 
		        $encargadoA, $encargadoB, $mision, $vision, $idioma);

			$instBusiness = new EmpresaBusiness();
			if(isset($_GET['len']) && $_GET['len'] == 'es'){
				$result = $instBusiness->actualizaEmpresaEsBusiness($empresa);
				redireccionarConResultado("Actualización realizada con éxito.");
			}else{
				$result = $instBusiness->actualizaEmpresaInData($empresa);
				redireccionarConResultado("Actualización realizada con éxito.");
			}
		}
	}
	else header("location: ../../Presentation/Admin/empresaEspanol.php?msg=No se recibieron todos los datos esperados.");


	function redireccionarConResultado($respuesta){
		if(isset($_GET['len']) && $_GET['len'] == 'es'){
				header("location: ../../Presentation/Admin/empresaEspanol.php?msg=".$respuesta);
		}else{
			header("location: ../../Presentation/Admin/empresaIngles.php?msg=".$respuesta);
		}
	} 
?>