<?php
session_start();

require_once "conexion.php";

$error="";



if(!empty($_POST['dni']) && !empty($_POST['clave']) && !empty($_POST['perfil'])){
	
    

  
        
        
        $dni= $_POST['dni'];
        $clave = $_POST['clave'];
        $tipo_usuario=$_POST['perfil'];

           



            $sql="SELECT * FROM `usuarios` WHERE dni = $dni && clave = '$clave' && tipoDeUsuario = '$tipo_usuario'";

            $result=mysqli_query($conex,$sql);
           // die($sql);

            if (mysqli_num_rows($result)==1){

                $fila=mysqli_fetch_array($result);
                if ($fila['tipoDeUsuario']=="cliente"){

                  $_SESSION['dnicli']=$fila['dni'];
              //  echo $_SESSION['dnicli'];
                //die();
                $_SESSION['nombrecli']=$fila['nombre'];
                $_SESSION['apellidocli']=$fila['apellido'];
                $_SESSION['tipousu']=$fila['tipoDeUsuario'];               

                  header("Location:cliente.php");

                }else if($fila['tipoDeUsuario']=="administrador"){

                  $_SESSION['dniadmin']=$fila['dni'];
                  //  echo $_SESSION['dnicli'];
                    //die();
                    $_SESSION['nombreadmin']=$fila['nombre'];
                    $_SESSION['apellidoadmin']=$fila['apellido'];
                    $_SESSION['tipousu']=$fila['tipoDeUsuario'];               
    
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