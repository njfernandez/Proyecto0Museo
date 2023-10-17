<?php

function Validacion() {

 global $error;

	$var_bool=TRUE;
    
	
 
	if(preg_match("/[a-zA-Z]/",$_POST['dni']) || strlen($_POST['dni'])<>8){
		$error.="Error DNI ";
		$var_bool=FALSE;
	}



    if(!is_string($_POST['nombre']) || !preg_match("/^[a-zA-Z ]+$/", $_POST['nombre'])){
		$error.="Error nombre ";
		$var_bool=FALSE;
	}

	if(!is_string($_POST['apellido']) || !preg_match("/^[a-zA-Z ]+$/", $_POST['apellido'])){
		$error.="Error apellido ";
		$var_bool=FALSE;
	}
	
		
	
	if(!is_string($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$error.="Error Email ";
		$var_bool=FALSE;
	}


	
	
	


	return $var_bool;
}

?>