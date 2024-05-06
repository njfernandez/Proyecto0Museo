<?php


require_once "../conexion.php";

$error = "";


if(!empty($_POST['dni']) && 
!empty($_POST['nombre']) && 
!empty($_POST['apellido']) && 
!empty($_POST['email']) && 
!empty($_POST['fecha']) && 
!empty($_POST['clave']) && 
!empty($_POST['tipo'])){

            $dni= $_POST['dni'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $fecha = $_POST['fecha'];
            $clave = $_POST['clave'];
            $tipo = $_POST['tipo_usuario'];
            
            $sql ="INSERT INTO `usuario` (`idUsuario`, `dni`, `nombre`, `apellido`, `email`, `clave`, `fecha_alta`, `tipo`) VALUES (NULL, $dni, $nombre, $apellido, $email , $clave, $fecha, $tipo)";
            $result=mysqli_query($conex,$sql);
      
              if ($result){
              header("Location:form_agregar.php?mensaje=ok");
              }else{ 
              $error.="error en la insercion de datos en el arreglo ";
              header("Location:form_agregar.php?mensaje=".$error.$dni. $nombre. $apellido. $email . $clave, $fecha. $tipo);
              }    

  }else{

  $error.="Faltan Datos en todo el panel ";
	header("Location:form_agregar.php?mensaje=".$error);
  
}
	

?>
