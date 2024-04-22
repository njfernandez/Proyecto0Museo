<?php

require_once 'BD/conexion.php';
$sql="SELECT * FROM `pieza`,donante WHERE Donante_idDonante = donante.idDonante";
$result=mysqli_query($conex,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Inventario del Museo</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="listado.php" method="post">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar pieza por nombre..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!"><?php echo $_SESSION['nombreadmin']?></a></li>
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><a class="dropdown-item" href="#!">Actividad</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="salir.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                          
        
                        </div>
                    </div>
                  
                </nav>
        </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tabla de piezas</h1>
        
                       
                        <div class="card mb-4">
                            <div class="card-body">
                                Solo las cuentas autorizadas a pueden acceder a este apartado y modificar las piezas
                                <a class="btn btn-primary btn-sm mb-2" href="formAgregarPieza.php" role="button">Agregar</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                            </div>
                            <div class="card-body">


   


<div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">

</div>
        <table class="datatable-table">
        <div class="row ">
            <div class="col-9"
            ></div>

        
             </div>

         
           
             
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
                    
               <th scope="row"><?php echo $fila["idPieza"]; ?></th>
               <td><?php echo $fila["num_inventario"]; ?></td>
               <td><?php echo $fila["especie"]; ?></td>
               <td><?php echo $fila["estado_conservacion"]; ?></td>
               <td><?php echo $fila["fecha_ingreso"]; ?></td>
               <td><?php echo $fila["cantidad de piezas"]; ?></td>
               <td><?php echo $fila["clasificacion"]; ?></td>
               <td><?php echo $fila["observacion"]; ?></td>
               <td><?php echo $fila["Donante_idDonante"]; ?></td>
               <!--
                <td><?php //echo $fila["descripcion"]; ?></td>
               <td><?php //echo $fila["observacion"]; ?></td>
               -->
               <td>
               <div class="d-sm-inline-block">
                <form action="formEditarPieza.php" method="post">
		          <input type="hidden" name="id" value="<?php echo $fila["idpiezas"]; ?>">
		          <button class="btn border btn-outline-success btn-sm" type="submit" name="btneditar" id="btneditar">Editar</button>
                </form>
                </div>
               <div class="d-sm-inline-block"><form action="formEliminarPieza.php" method="post">
		          <input type="hidden" name="id" value="<?php echo $fila["idpiezas"]; ?>">
		          <button class="btn border btn-outline-danger btn-sm" type="submit" name="btnborrar" id="btnborrar">Borrar</button>
                </form>
            </div>
            <div class="d-sm-inline-block">
                <form action="detalles.php" method="post">
		          <input type="hidden" name="id" value="<?php echo $fila["idpiezas"]; ?>">
		          <button class="btn border btn-outline-info btn-sm" type="submit" name="btndetalles" id="btndetalles">Detalles</button>
                </form>
                </div>
        </td>
               
               </tr>

            <?php
            }
            ?>         
            
            </tbody>
      
       </table></div>
      
        
    
	   <?php
	     }else{

          echo "</table></div>";
          echo "<div class='container text-center lead my-3 py-3'><div class='alert alert-danger my-5 py-4'><p><em>No existen piezas! </em><a href='index.php' class='text-primary lead ms-2'>Volver</a></p></div></div>";
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
    </body>
</html>
