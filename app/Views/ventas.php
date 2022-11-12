<?php
include("conexion.php");
session_start();
$usuario=$_SESSION['usuario'];
$sql="SELECT firstName, lastName FROM users WHERE usuario='$usuario'";
$resultado=$conexion->query($sql);
$row=$resultado->fetch_assoc();

if(!isset($_SESSION['usuario'])){
    header("Location:index.php");
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ventas</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>   
    </head>
    <?php
if (!$_POST){ 
?>
	<script type="text/javascript">
                function Eliminar(){
                    var respuesta= confirm("¿Estas seguro que deseas eliminar el dato?");
                    if(respuesta==true){
                        return true;
                    }else{
                        return false;
                    }
                }
                
            </script>
   	<form action="ventas.php" method="POST" enctype="multipart/form-data">
<style>
h1 {
  text-shadow: 2px 2px 5px black;
  font-family: 'Helveticah', Times;
  font-size: 50px;
  text-align: center;
}
</style>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="principal.php">DigitalRest</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
            <script type="text/javascript">
                function transaction(){
                    var respuesta= confirm("Estas seguro que deseas cerrar sesión?");
                    if(respuesta==true){
                        return true;
                    }else{
                        return false;
                    }
                }
                
            </script>
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <small>Bienvenid@</small>
                        <br>
                        <?php echo $row['firstName'];?>
                        <?php echo $row['lastName'];?>
                        <br>
                        <br>
                      
                        <div class="dropdown-divider"></div>                                                            
                        <a class="dropdown-item" href="logout.php"><button type='button' class='btn btn-danger' onclick="return transaction()">Cerrar sesión</button></a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="principal.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Principal</a
                            >
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                CRUD
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="cargausers.php">Usuarios</a><a class="nav-link" href="cargaventas.php">Ventas</a>
                                    <a class="nav-link" href="cargaempleados.php">Empleados</a> <a class="nav-link" href="cargaclientes.php">Clientes</a></nav>
                            </div>                                                   
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <h3>Ana Pech</h3>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tabla ventas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Modo Adminsitrador</li>
                        </ol>
                        
                        <div class="row">
                           
                        </div>
                        
                        <div class="card mb-4">
	                    <div class="card-header"><i class="fas fa-table mr-1"></i>Ventas</div>                        
                            <div class="card-heade">
                                <div class="table-responsive">						
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">										
                                        <thead>
                                            <tr>
												<th>ID_Venta</th>
                                                <th>Platillo</th>
                                                <th>Precio</th>
                                                <th>Fecha</th>
                                                <th>Tipo de pago</th>
                                                <th>Modalidad venta</th>
                                                
												<th colspan = "5">Acciones</th>		
                                            </tr>
										</thead>
                                        <tfoot>
                                            <tr>
												<th>ID_Venta</th>
                                                <th>Platillo</th>
                                                <th>Precio</th>
                                                <th>Fecha</th>
                                                <th>Tipo de pago</th>
                                                <th>Modalidad venta</th>
                                            </tr>
                                        </tfoot>
                                    
                                        <tbody>
      <?php
			
			$query = "SELECT VENTAS.ID_Venta,PLATILLOS.Platillo, Precio.Precio, VENTAS.Fecha, TPAGO.Tpago, Modalidad_ventas.Modalidad_ventas FROM PLATILLOS, VENTAS, PRECIO, TPAGO, Modalidad_ventas WHERE ventas.ID_Precio = precio.ID_Precio AND VENTAS.ID_Platillo = PLATILLOS.ID_Platillo AND VENTAS.ID_TP = TPAGO.ID_TP AND VENTAS.ID_MV = Modalidad_ventas.ID_MV";
			$resultado = $conexion->query($query);
			while($row = $resultado->fetch_assoc()){
			?>
				<h1><tr>
					<td><?php echo $row['ID_Venta']; ?></td>
					<td><?php echo $row['Platillo']; ?></td>
					<td><?php echo $row['Precio']; ?></td>
					<td><?php echo $row['Fecha']; ?></td>					
					<td><?php echo $row['Tpago']; ?></td>							
					<td><?php echo $row['Modalidad_ventas']; ?></td>
					<th><a href="ModificarVenta.php?ID_Venta=<?php echo $row['ID_Venta'];?>"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Modificar</button></a>
					<th><a href="EliminarVentas.php?ID_Venta=<?php echo $row['ID_Venta'];?>"><button type="button" class="btn btn-primary" onclick="return Eliminar()">Eliminar</button></a></th>
				</tr></h1>
			<?php
			}
			?>                               
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar venta</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Agregar Venta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          ID_Platillo: <select name = "ID_Platillo">
		<option value=""></option>
		<option value="1"> 1 (Ceviche de camaron)</option>
		<option value="2"> 2(Ceviche de pulpo)</option>
		</select>
   	<br> 
	   <br>
   	ID_Precio: <select name = "ID_Precio">
		<option value=""></option>
		<option value="1">1(165)</option>
		<option value="2">2(185)</option>
		</select>
   	<br>
	   <br>
	Fecha: <input REQUIRED type="date" name="Fecha" placeholder=""value=""> 
   	<br> 
	   <br>
   	Tipo de pago: <select name = "ID_TP">
		<option value=""></option>
		<option value="1">1(Tarjeta)</option>
		<option value="2">2(Efectivo)</option>		
		</select>
   	<br>
	   <br>	
	Modalidad de venta: <select name = "ID_MV">
		<option value=""></option>
		<option value="1">1(Domicilio)</option>
		<option value="2">2(Comedor)</option>		
		</select>
   	<br>
	   <br>			  
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		<input type="submit" class="btn btn-secondary" value="Enviar"> 
      </div>
  </div>
</div>
<br>

<?php
}else{ 	
      echo "</br> ID_Platillo: ".htmlspecialchars($_POST["ID_Platillo"]);
      echo "<br> ID_Precio: ".htmlspecialchars($_POST["ID_Precio"]);
      echo "<br> Fecha: ".htmlspecialchars($_POST["Fecha"]);
      echo "<br> ID_TP: ".htmlspecialchars($_POST["ID_TP"]);
      echo "<br> ID_MV: ".htmlspecialchars($_POST["ID_MV"]);
          	 
      include("crudVentas.php");
      Alta($_POST["ID_Platillo"],$_POST["ID_Precio"],$_POST["Fecha"],$_POST["ID_TP"],$_POST["ID_MV"]);
?>

	<th><a href="ventas.php">Consultar</a></th>	
<?php
}	
?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; DigitalRest 2021</div>
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
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>