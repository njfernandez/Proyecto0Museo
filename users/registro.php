<?php


require_once "conexion.php";

$error = "";


if(!empty($_POST['dni']) && !empty($_POST['nombre']) && 
   !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['clave']) && !empty($_POST['telefono'])){
	
    

  	if (Validacion()){
        
        
        $dni= $_POST['dni'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono=$_POST['telefono'];
           
            $email = $_POST['email'];
            $clave = $_POST['clave'];
            $fecha =date("Y/m/d");
           



            $sql="INSERT INTO usuario(dni,nombre,apellido,telefono,email,clave,	fecha_de_alta) VALUES('$dni','$nombre','$apellido','$telefono','$email','$clave','$fecha')";

            $result=mysqli_query($conex,$sql);
            //die($sql);

            if ($result){

        header("Location:form_registro.php?mensaje=ok");
           
     }else{ 

      $error.="error en la insercion de datos ";
      header("Location:form_registro.php?mensaje=".$error);
      }
        }else{
  		 
      header("Location:form_registro.php?mensaje=".$error);

  	 }

  }else{


  	$error.="Faltan Datos ";
	header("Location:form_registro.php?mensaje=".$error);
  
}
	

?>