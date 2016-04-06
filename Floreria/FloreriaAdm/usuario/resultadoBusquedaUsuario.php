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
$id ="";

$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 

if($busqueda == "ID"){
	Echo "Busqueda por ID";

	$NuevaConexion->Consulta("SELECT * FROM usuarios WHERE id= '$buscar' ");
	$Resultado = $NuevaConexion->getResultado();
if($fila = mysql_fetch_row($Resultado)){
			echo "
<center>
	<table bordercolor='#0E69AE' >  
		<th>  
			<form action='editarUsuario.php'  method='post' >
				<BR><br>Folio<BR>
				<input  type=' text'  name=' id'  size=' 7'  value='".$id =$fila[0]."'>
				
				<BR>Nombre<BR>
				<input  type=' text'  name=' nombre'  size=' 20'  value='".$fila[1]."'> 
				<BR>Apellido Paterno <BR>
				<input  type=' text' name='apePaterno'size=' 20'  value='".$fila[2]."'>
				<BR>Apellido Materno <BR>
				<input  type=' text' name='apeMaterno' size=' 20' value='".$fila[3]."'>
				<BR>Tipo de usuario <BR>
				<select name=' tipoUsuario' value= '".$fila[4]."'>
				<option>".$fila[4]."</option>
				<option>Administrador</option>
				<option>Ventas</option>
				<option>Repartidor</option>
				</select>
				<BR>Nombre de usuario<BR>
				<input  type=' text' name='nombreUsuario' size=' 20'  value='".$fila[5]."'>
				<BR>Contraseña <BR>
				<input  type=' text'  name='contrasenia'size=' 20'  value='".$fila[6]."'>
				<BR>Repita su contraseña <BR>
				<input  type=' text'  name='pruebaContrasenia' size=' 20'  value='".$fila[6]."'>
		
				<br><BR>


				<button type=' submit' size=' 20'  name='Guardar' > Actualizar</button >
		
			</form>
				<form action='../usuarios.php'  method='post'>
				<br><button type=' submit' size=' 20'  name='Cancelar' >Cancelar</button >
				</form>

				<form action='eliminarUsuario.php'  method='post'>
				<input  type=' text'  name=' id'  size=' 7' style='visibility:hidden' value='".$id =$fila[0]."'>
				<br><button type=' submit' size='0' name='eliminar'>Eliminar</button >
				</form>
		</th>  
	<table>

</center>
	<br><BR>";}else{echo "<br><br>Folio no encontrado";}
}else if($busqueda == "Usuario"){

	Echo "Busqueda por Usuario";

	$NuevaConexion->Consulta("SELECT * FROM usuarios WHERE nombreUsuario = '$buscar' ");
	$Resultado = $NuevaConexion->getResultado();
	if($fila = mysql_fetch_row($Resultado)){
			echo "
<center>
	<table bordercolor='#0E69AE' >  
		<th>  
			<form action='editarUsuario.php'  method='post' >
				<BR><br>Folio<BR>
				<input  type=' text'  name=' id'  size=' 7'  value='".$id =$fila[0]."'>
				
				<BR>Nombre<BR>
				<input  type=' text'  name=' nombre'  size=' 20'  value='".$fila[1]."'> 
				<BR>Apellido Paterno <BR>
				<input  type=' text' name='apePaterno'size=' 20'  value='".$fila[2]."'>
				<BR>Apellido Materno <BR>
				<input  type=' text' name='apeMaterno' size=' 20' value='".$fila[3]."'>
				<BR>Tipo de usuario <BR>
				<select name=' tipoUsuario' value= '".$fila[4]."'>
				<option>".$fila[4]."</option>
				<option>Administrador</option>
				<option>Ventas</option>
				<option>Repartidor</option>
				</select>
				<BR>Nombre de usuario<BR>
				<input  type=' text' name='nombreUsuario' size=' 20'  value='".$fila[5]."'>
				<BR>Contraseña <BR>
				<input  type=' text'  name='contrasenia'size=' 20'  value='".$fila[6]."'>
				<BR>Repita su contraseña <BR>
				<input  type=' text'  name='pruebaContrasenia' size=' 20'  value='".$fila[6]."'>
		
				<br><BR>


				<button type=' submit' size=' 20'  name=' Guardar' > Actualizar</button >
		
			</form>
				<form action='../usuarios.php'  method='post'>
				<br><button type=' submit' size=' 20'  name=' Cancelar' >Cancelar</button >
				</form>
<form action='eliminarUsuario.php'  method='post'>
				<input  type=' text'  name=' id'  size=' 7' style='visibility:hidden' value='".$id =$fila[0]."'>
				<br><button type=' submit' size='0' name='eliminar'>Eliminar</button >
				</form>
		</th>  
	<table>

</center>
	<br><BR>";}else{echo "<br><br>Usuario no encontrado";}
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