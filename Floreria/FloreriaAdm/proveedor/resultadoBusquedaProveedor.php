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
			Echo "Busqueda por FOLIO";

			$NuevaConexion->Consulta("SELECT * FROM proveedor WHERE idProveedor = '$buscar' ");
			$Resultado = $NuevaConexion->getResultado();
				if($fila = mysql_fetch_row($Resultado)){
			echo "
	<center>
		<table bordercolor='#0E69AE' >  
			<th>  
			<form action='editarProveedor.php'  method='post' >
				<BR><br>Folio<BR>
				<input  type=' text'  name='id'  size=' 7'  value='".$fila[0]."'>
				<BR>Empresa<BR>
				<input  type=' text'  name=' empresa'  size=' 20'  value='".$fila[1]."'> 
				<BR>Nombre <BR>
				<input  type=' text' name='nom'size=' 20'  value='".$fila[2]."'>
				<BR>Apellido Paterno<BR>
				<input  type=' text' name='apeP' size=' 20' value='".$fila[3]."'>
				<BR>Apellido Materno <BR>
				<input  type=' text' name='apM' size=' 20'  value='".$fila[4]."'>
				<BR>Telefono<BR>
				<input  type=' text' name='Tel' size=' 20'  value='".$fila[5]."'>
				<BR>Correo <BR>
				<input  type=' text'  name='corr'size=' 20'  value='".$fila[6]."'>
				<BR>Direccion Fisica <BR>
				<input  type=' text'  name='DirFi' size=' 20'  value='".$fila[7]."'>
				<BR>RFC <BR>
				<input  type=' text'  name='RFC' size=' 20'  value='".$fila[8]."'>
		
				<br><BR>


				<button type=' submit' size=' 20'  name=' Guardar' > Actualizar</button >
			
		</form>
			<form action='../Proveedores.php'  method='post'>
				<br><button type=' submit' size=' 20'  name=' Cancelar' > Cancelar </button >
				</form>		
<form action='eliminarProveedor.php'  method='post'>
				<input  type=' text'  name=' id'  size=' 7' style='visibility:hidden' value='".$id =$fila[0]."'>
				<br><button type=' submit' size='0' name='eliminar'>Eliminar</button >
				</form>
		</th>  
	<table>

</center>
	<br><BR>"
;}

else{echo "<br><br>Folio no encontrado";}
}else if($busqueda == "Empresa"){
	Echo "Busqueda por EMPRESA";

	$NuevaConexion->Consulta("SELECT * FROM proveedor WHERE nombreEmpresa = '$buscar' ");
	$Resultado = $NuevaConexion->getResultado();
		if($fila = mysql_fetch_row($Resultado)){
			echo "
<center>
	<table bordercolor='#0E69AE' >  
		<th>  
			<form action='editarProveedor.php'  method='post' >
				<BR><br>Folio<BR>
				<input  type=' text'  name='id'  size=' 7'  value='".$fila[0]."'>
				<BR>Empresa<BR>
				<input  type=' text'  name=' empresa'  size=' 20'  value='".$fila[1]."'> 
				<BR>Nombre <BR>
				<input  type=' text' name='nom'size=' 20'  value='".$fila[2]."'>
				<BR>Apellido Paterno<BR>
				<input  type=' text' name='apeP' size=' 20' value='".$fila[3]."'>
				<BR>Apellido Materno <BR>
				<input  type=' text' name='apM' size=' 20'  value='".$fila[4]."'>
				<BR>Telefono<BR>
				<input  type=' text' name='Tel' size=' 20'  value='".$fila[5]."'>
				<BR>Correo <BR>
				<input  type=' text'  name='corr'size=' 20'  value='".$fila[6]."'>
				<BR>Direccion Fisica <BR>
				<input  type=' text'  name='DirFi' size=' 20'  value='".$fila[7]."'>
				<BR>RFC <BR>
				<input  type=' text'  name='RFC' size=' 20'  value='".$fila[8]."'>
		
				<br><BR>


				<button type=' submit' size=' 20'  name=' Guardar' > Actualizar</button >
	</form>
			<form action='../Proveedores.php'  method='post'>
				<br><button type=' submit' size=' 20'  name=' Cancelar' > Cancelar </button >
				</form>
					<form action='eliminarProveedor.php'  method='post'>
				<input  type=' text'  name=' id'  size=' 7' style='visibility:hidden' value='".$id =$fila[0]."'>
				<br><button type=' submit' size='0' name='eliminar'>Eliminar</button >
				</form>				

		</th>  
	<table>

</center>
	<br><BR>"
;}else{echo "<br><br>Empresa no encontrada";}
}else if($busqueda == "RFC"){
	Echo "Busqueda por RFC";

	$NuevaConexion->Consulta("SELECT * FROM proveedor WHERE rfcProveedor = '$buscar' ");
	$Resultado = $NuevaConexion->getResultado();
	if($fila = mysql_fetch_row($Resultado)){
			echo "
<center>
	<table bordercolor='#0E69AE' >  
		<th>  
			<form action='editarProveedor.php'  method='post' >
				<BR><br>Folio<BR>
				<input  type=' text'  name='id'  size=' 7'  value='".$fila[0]."'>
				<BR>Empresa<BR>
				<input  type=' text'  name='empresa'  size=' 20'  value='".$fila[1]."'> 
				<BR>Nombre <BR>
				<input  type=' text' name='nom'size=' 20'  value='".$fila[2]."'>
				<BR>Apellido Paterno<BR>
				<input  type=' text' name='apeP' size=' 20' value='".$fila[3]."'>
				<BR>Apellido Materno <BR>
				<input  type=' text' name='apM' size=' 20'  value='".$fila[4]."'>
				<BR>Telefono<BR>
				<input  type=' text' name='Tel' size=' 20'  value='".$fila[5]."'>
				<BR>Correo <BR>
				<input  type=' text'  name='corr'size=' 20'  value='".$fila[6]."'>
				<BR>Direccion Fisica <BR>
				<input  type=' text'  name='DirFi' size=' 20'  value='".$fila[7]."'>
				<BR>RFC <BR>
				<input  type=' text'  name='RFC' size=' 20'  value='".$fila[8]."'>
		
				<br><BR>


				<button type=' submit' size=' 20'  name=' Guardar' > Actualizar</button >
			
			</form>
			<form action='../Proveedores.php'  method='post'>
				<br><button type=' submit' size=' 20'  name=' Cancelar' > Cancelar </button >
				</form>
				
				<form action='eliminarProveedor.php'  method='post'>
				<input  type=' text'  name=' id'  size=' 7' style='visibility:hidden' value='".$id =$fila[0]."'>
				<br><button type=' submit' size='0' name='eliminar'>Eliminar</button >
				</form>					

		</th>  
	<table>

</center>
	<br><BR>"
;}else{echo "<br><br>RFC no encontrado";}
}else if($busqueda == "Correo"){
	Echo "Busqueda por Correo";

	$NuevaConexion->Consulta("SELECT * FROM proveedor WHERE correoProveedor = '$buscar' ");
	$Resultado = $NuevaConexion->getResultado();
	if($fila = mysql_fetch_row($Resultado)){
			echo "
<center>
	<table bordercolor='#0E69AE' >  
		<th>  
			<form action='editarProveedor.php'  method='post' >
				<BR><br>Folio<BR>
				<input  type=' text'  name='id'  size=' 7'  value='".$fila[0]."'>
				<BR>Empresa<BR>
				<input  type=' text'  name='empresa'  size=' 20'  value='".$fila[1]."'> 
				<BR>Nombre <BR>
				<input  type=' text' name='nom'size=' 20'  value='".$fila[2]."'>
				<BR>Apellido Paterno<BR>
				<input  type=' text' name='apeP' size=' 20' value='".$fila[3]."'>
				<BR>Apellido Materno <BR>
				<input  type=' text' name='apM' size=' 20'  value='".$fila[4]."'>
				<BR>Telefono<BR>
				<input  type=' text' name='Tel' size=' 20'  value='".$fila[5]."'>
				<BR>Correo <BR>
				<input  type=' text'  name='corr'size=' 20'  value='".$fila[6]."'>
				<BR>Direccion Fisica <BR>
				<input  type=' text'  name='DirFi' size=' 20'  value='".$fila[7]."'>
				<BR>RFC <BR>
				<input  type=' text'  name='RFC' size=' 20'  value='".$fila[8]."'>
		
				<br><BR>


				<button type=' submit' size=' 20'  name=' Guardar' > Actualizar</button >
			
			</form>
			<form action='../Proveedores.php'  method='post'>
				<br><button type=' submit' size=' 20'  name=' Cancelar' > Cancelar </button >
				</form>
					
					<form action='eliminarProveedor.php'  method='post'>
				<input  type=' text'  name=' id'  size=' 7' style='visibility:hidden' value='".$id =$fila[0]."'>
				<br><button type=' submit' size='0' name='eliminar'>Eliminar</button >
				</form>				

		</th>  
	<table>

</center>
	<br><BR>"
;}else{echo "Correo no encontrado";}}

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