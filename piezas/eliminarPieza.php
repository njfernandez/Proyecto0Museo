<?php

require_once "conexion.php";

$id=$_POST["id"];

/* En la Base de Datos en Vista de Relaciones de la Tabla ficha, aplicar 
el atributo ON Cascade Delete para la relacion entre ficha y socios */

$sql="DELETE FROM pieza WHERE `pieza`.`id` = $id";

//die($sql);
//echo $sql;

mysqli_query($conex,$sql);

header("Location:listado.php");

?>