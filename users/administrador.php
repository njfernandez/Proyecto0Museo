<?php 
require_once '../conexion.php';
$sql="SELECT * FROM usuario";
$result=mysqli_query($conex,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla con Datos de la Base de Datos</title>
  <!-- Agregar los enlaces a los archivos de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
include '../nav.php';
?>
</div>
<div class="container">
<h2 class="mt-5 mb-4">Datos de la Base de Datos </h2>  

        <form class="" action="./form_agregar.php" method="post">
		          <button class="btn border btn-outline-success btn-sm" type="submit" name="btnAgregar" id="btnAgregar">Agregar Usuario</button>
                </form>



    <div class="table-responsive">

        <table class="datatable-table">
        <div class="row ">    
            <thead>
            <tr>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 1.30835734870317%;">
                    <a href="#" class="datatable">ID</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 1.30835734870317%;">
                    <a href="#" class="datatable">DNI</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 1.30835734870317%;">
                    <a href="#" class="datatable">nombre</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 1.30835734870317%;">
                    <a href="#" class="datatable">apellido</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 1.30835734870317%;">
                    <a href="#" class="datatable">email</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 1.30835734870317%;">
                    <a href="#" class="datatable">clave</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 1.30835734870317%;">
                    <a href="#" class="datatable">fecha_alta</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 1.30835734870317%;">
                    <a href="#" class="datatable">tipo</a>
                </th>
                <th data-sortable="true" aria-sort="ascending" class="datatable" style="width: 1.30835734870317%;">
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
               <td><?php echo $fila["nombre"]; ?></td>
               <td><?php echo $fila["apellido"]; ?></td>
               <td><?php echo $fila["email"]; ?></td>
               <td><?php echo $fila["clave"]; ?></td>
               <td><?php echo $fila["fecha_alta"]; ?></td>
               <td><?php echo $fila["tipo"]; ?></td>
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
      
       </table></div></div></div>

      
        
    
	   <?php
	     }else{

          echo "</table></div>";
          echo "<div class='container text-center lead my-3 py-3'><div class='alert alert-danger my-5 py-4'><p><em>No existen usuarios! </em><a href='index.php' class='text-primary lead ms-2'>Volver</a></p></div></div>";
         }
	   ?>  
 

                    </div>
                </div>
            </div>
    </main>
        <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>



</html>
