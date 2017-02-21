<?php
	include 'InicioBusiness.php';

	$instInicioBusiness = new InicioBusiness();

	/* Se valida el id */
	if(isset($_POST['id']) && $_POST['id'] != ""){
		$result = $instInicioBusiness->eliminarInicioBusiness($_POST['id']);
		if($result){
			echo 'true';
		}
		else{
			echo 'false';
		}
	}
	else{
		echo 'false';
	}
?>