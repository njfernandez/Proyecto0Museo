<?php
session_start();
require_once '../conexion.php';
$error="";
if(!empty($_POST['dni']) && !empty($_POST['password'])){
	
     
        $dni= $_POST['dni'];
        $clave = $_POST['password'];
        $sql="SELECT * FROM `usuario` WHERE dni = '$dni' && clave = '$clave'";

            $result=mysqli_query($conex,$sql);
           // die($sql);

            if (mysqli_num_rows($result)==1){

                $fila=mysqli_fetch_array($result);
                if ($fila['tipo']=="gerente"){
                    $_SESSION['dni']=$fila['dni'];
                    $_SESSION['nombre']=$fila['nombre'];
                    $_SESSION['apellido']=$fila['apellido'];
                    $_SESSION['tipo']=$fila['tipo'];               
                    header("Location:cliente.php");

                }else if($fila['tipo']=="administrador"){

                  $_SESSION['dniAdmin']=$fila['dni'];
                  //  echo $_SESSION['dnicli'];
                    //die();
                    $_SESSION['nombreAdmin']=$fila['nombre'];
                    $_SESSION['apellidoAdmin']=$fila['apellido'];
                    $_SESSION['tipoAdmin']=$fila['tipo'];               
                  header("Location:administrador.php");

                  }  } else{   
          
      $error.="error en la insercion de datos ";
      header("Location:form_ingresar.php?mensaje=".$error);

      }

  }else{


  	$error.="Faltan Datos ";
	header("Location:form_ingresar.php?mensaje=".$error);
  
}
	

?>