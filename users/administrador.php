<?php 
require_once '';
$sql="SELECT * FROM usuario,donante";
$result=mysqli_query($conex,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de Usuarios y Donantes</title>
  <!-- Agrega el enlace al archivo CSS de Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2>Tabla de Usuarios y Donantes</h2>
   
    <table class="datatable-table">
        <div class="row ">
            <div class="col-9"></div>
 
            <thead>

            <tr>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 19.30835734870317%;">
                    <a href="#" class="datatable">ID</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 19.30835734870317%;">
                    <a href="#" class="datatable">N° de Articulo</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 19.30835734870317%;">
                    <a href="#" class="datatable">Especie</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 19.30835734870317%;">
                    <a href="#" class="datatable">Estado</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 19.30835734870317%;">
                    <a href="#" class="datatable">Fecha</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 19.30835734870317%;">
                    <a href="#" class="datatable">Cantidad</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 19.30835734870317%;">
                    <a href="#" class="datatable">clasificacion</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 19.30835734870317%;">
                    <a href="#" class="datatable">Observacion</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 19.30835734870317%;">
                    <a href="#" class="datatable">Donante</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 19.30835734870317%;">
                    <a href="#" class="datatable">Accion</a>
                </th>
            </thead>
            <?php
               if (mysqli_num_rows($result)>0){
            ?>
            <tbody>     
            <?php
                While ($fila=mysqli_fetch_array($result)){
            ?>  
               <tr>
               <th scope="row"><?php echo $fila["idUsuario"]; ?></th>
               <td><?php echo $fila["dni"]; ?></td>
               <td><?php echo $fila["especie"]; ?></td>
               <td><?php echo $fila["nombre"]; ?></td>
               <td><?php echo $fila["apellido"]; ?></td>
               <td><?php echo $fila["email"]; ?></td>
               <td><?php echo $fila["clave"]; ?></td>
               <td><?php echo $fila["fecha_alta"]; ?></td>
               <td>
               <div class="d-sm-inline-block">
                <form action="formEditarPieza.php" method="post">
		          <input type="hidden" name="id" value="<?php echo $fila["idUsuario"]; ?>">
		          <button class="btn border btn-outline-success btn-sm" type="submit" name="btneditar" id="btneditar">Editar</button>
                </form>
                </div>
               <div class="d-sm-inline-block"><form action="formEliminarPieza.php" method="post">
		          <input type="hidden" name="id" value="<?php echo $fila["idUsuario"]; ?>">
		          <button class="btn border btn-outline-danger btn-sm" type="submit" name="btnborrar" id="btnborrar">Borrar</button>
                </form>
            </div>
            <div class="d-sm-inline-block">
                <form action="detalles.php" method="post">
		          <input type="hidden" name="id" value="<?php echo $fila["idUsuario"]; ?>">
		          <button class="btn border btn-outline-info btn-sm" type="submit" name="btndetalles" id="btndetalles">Detalles</button>
                </form>
                </div>
        </td>
               
               </tr>

            <?php
            }
            ?>         
            
            </tbody>
      
       </table>

       <?php
	     }else{

          echo "</table></div>";
          echo "<div class='container text-center lead my-3 py-3'><div class='alert alert-danger my-5 py-4'><p><em>No existen piezas! </em><a href='index.php' class='text-primary lead ms-2'>Volver</a></p></div></div>";
         }
	   ?>  

  </div>
  <!-- Agrega el enlace al archivo JavaScript de Bootstrap (opcional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
