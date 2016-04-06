<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>La Flor Feliz (Administracion)</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../estilos.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>Resultado de su busqueda</h1>
			<!--<h3>Menu Principal</h3>-->


		</div>
	</header>
	
	<div class="container">
		

<?php 
include ("../bd/Conexion.php");

$busqueda	= $_POST['buscarpor'];
$buscar = $_POST['buscar'];

$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 

if($busqueda == "Folio"){
	Echo "Busqueda por ID";

	$NuevaConexion->Consulta("SELECT * FROM producto WHERE idProducto = '$buscar' ");
	$Resultado = $NuevaConexion->getResultado();
	if($fila = mysql_fetch_row($Resultado)){
			echo "
<center>
	<table bordercolor='#0E69AE' >  
		<th>  
			<form action='editarProducto.php'  method='post' >

					<BR>FOLIO <BR>
			<input  type=' text' name='id' size='7' value='".$fila[0]."'>
			<BR>Nombre del producto<BR>
			<input type='text' name='nombreProducto' size='20' value='".$fila[1]."'>
			<option>Tipo de producto</option>
			<input type='text' name='tipoProducto' size='20' value='".$fila[2]."'>
			<BR>Descripcion <BR>
			<input type='text' name='descripcion' size='20' value='".$fila[3]."'>
			<BR>Costo de compra <BR>
			<input type='text' name='costo' size='20' value='".$fila[4]."'>
			<BR>Cantidad <BR>
			<input type='text' name='cantidad' size='20' value='".$fila[5]."'>
			

				<button type=' submit' size=' 20'  name=' Guardar' > Actualizar</button >
			
			</form>
			<form action='../productos.php'  method='post'>
				<br><button type=' submit' size=' 20'  name=' Cancelar' > Cancelar </button >
				</form>
									
	<form action='eliminarProducto.php'  method='post'>
				<input  type=' text'  name=' id'  size=' 7' style='visibility:hidden' value='".$id =$fila[0]."'>
				<br><button type=' submit' size='0' name='eliminar'>Eliminar</button >
				</form>
		</th>  
	<table>

</center>
	<br><BR>"
;}else{echo "<br><br>Folio no encontrado";}
}else if($busqueda == "Nombre"){

	Echo "Busqueda por Nombre";

	$NuevaConexion->Consulta("SELECT * FROM producto WHERE nombreProducto= '$buscar' ");
	$Resultado = $NuevaConexion->getResultado();
	if($fila = mysql_fetch_row($Resultado)){
			echo "
<center>
	<table bordercolor='#0E69AE' >  
		<th>  
			<form action='editarProducto.php'  method='post' >

					<BR>FOLIO <BR>
			<input  type=' text' name='id' size='7' value='".$fila[0]."'>
			<BR>Nombre del producto<BR>
			<input type='text' name='nombreProducto' size='20' value='".$fila[1]."'>
			<option>Tipo de producto</option>
			<input type='text' name='tipoProducto' size='20' value='".$fila[2]."'>
			<BR>Descripcion <BR>
			<input type='text' name='descripcion' size='20' value='".$fila[3]."'>
			<BR>Costo de compra <BR>
			<input type='text' name='costo' size='20' value='".$fila[4]."'>
			<BR>Cantidad <BR>
			<input type='text' name='cantidad' size='20' value='".$fila[5]."'>
			

				<button type=' submit' size=' 20'  name=' Guardar' > Actualizar</button >
			
			</form>
			<form action='../productos.php'  method='post'>
				<br><button type=' submit' size=' 20'  name=' Cancelar' > Cancelar </button >
				</form>
						<form action='eliminarProducto.php'  method='post'>
				<input  type=' text'  name=' id'  size=' 7' style='visibility:hidden' value='".$id =$fila[0]."'>
				<br><button type=' submit' size='0' name='eliminar'>Eliminar</button >
				</form>				

		</th>  
	<table>

</center>
	<br><BR>"
;}else{echo "<br><br>Nombre no encontrado";}
}


	$NuevaConexion->cerrarConexion();



 ?>

		

	<footer>
		<div class="container">
			<h3>La flor feliz</h3>
			<h4>Para soporte tecnico contactanos. <br> 
				<br>Cel: 55 47 84 33 74 
				<br>Correo: soporte.serviweb@soporte.com</h4>
		</div>
	</footer>
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src="../js/jquery-latest.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>