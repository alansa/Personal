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
	Echo "Busqueda por Folio";

	$NuevaConexion->Consulta("SELECT * FROM arreglo WHERE idArreglo = '$buscar' ");
	$Resultado = $NuevaConexion->getResultado();
	if($fila = mysql_fetch_row($Resultado)){
		$idBorrar = $fila[0];
			echo "
<center>
	<table bordercolor='#0E69AE' >  
		<th>  
			<form action='editarArreglo.php'  method='post' >
		<BR>FOLIO <BR>
			<input type='text' name='id' size='7' value='".$fila[0]."'>
			<BR>Nombre del Arreglo<BR>
			<input type='text' name='nombreArreglo' size='20' value='".$fila[1]."'>
			<br>Categoria<br>
			<select name='Categoria'>
			<option>".$fila[2]."</option>
			<option>10 Mayo</option>
			<option>14 Febrero</option>
			<option>Cumpleaños</option>
			<option>Fiestas</option>
			<option>Velorio</option>

			</select>
		
	
			<br>Cantidad <br>
			<input type='text' name='CantidadFlores' size='5' value='".$fila[4]."'>
			<BR>Forma<BR>  

			<select name='Forma'>
			<option>".$fila[5]."</option>
			<option>Corazon</option>
			<option>Osito</option>
			<option>Estrella</option>
			<option>Sin forma</option>
			</select>";
			
			$nuevoAdorno = $fila[6];

			echo "<BR>Precio <BR>
			<input type='text' name='costo' size='20' value='".$fila[7]."'>
			<BR>¿Cuantos arreglos agregara?<BR>
			<input type='text' name='CantidadArreglo' size='20' value='".$fila[8]."'>


			<BR>¿Desea Activarlo en las listas? <BR>
				<select name='activo'>
				<option>".$fila[10]."</option>
				<option>si</option>
				<option>no</option>
			</select>
			<BR>¿Desea que aparesca en el TOP? <BR>
				<select name='top'>
				<option>".$fila[11]."</option>
				<option>si</option>
				<option>no</option>
			</select>";
			

			echo "	<BR>Flores<BR> ";
$nueva = $fila[3];
			$Nueva = new BD;
			$Nueva->Conexion(); 
			$Nueva->Consulta("SELECT idProducto,nombreProducto FROM producto WHERE tipoProducto = 'Flores' order by nombreProducto asc");
			$Resultado = $Nueva->getResultado();
			$Nueva->cerrarConexion();
	echo "<select name = 'flores'>";
	echo "<option>".$nuevoAdorno."</option>";
	echo "<option>".$nueva."</option>";
while ($fila = mysql_fetch_row($Resultado)){

	echo "<option value='".$fila['1']."'>".$fila['1']."</option>";

}
			
	


		echo " </select>";

		echo "<BR>Adorno<BR> ";
			
			

			
		
			$Nueva->Conexion(); 
			$Nueva->Consulta("SELECT idProducto,nombreProducto FROM producto WHERE tipoProducto = 'Adorno' order by nombreProducto asc");
			$Resultado = $Nueva->getResultado();
			$Nueva->cerrarConexion();
	echo "<select name = 'adorno'>";
while ($fila = mysql_fetch_row($Resultado)){

	echo "<option value='".$fila['1']."'>".$fila['1']."</option>";

}
			

 

			echo " </select>";
echo "
				<br><br><button type=' submit' size=' 20'  name=' Guardar' > Actualizar</button >
			
			</form>
			<form action='../productos.php'  method='post'>
				<br><button type=' submit' size=' 20'  name=' Cancelar' > Cancelar </button >
				</form>
									
					<form action='eliminarArreglo.php'  method='post'>
				<input  type=' text'  name=' id'  size=' 7' style='visibility:hidden' value='".$id =$idBorrar."'>
				<br><button type=' submit' size='0' name='eliminar'>Eliminar</button >
				</form>
		</th>  
	<table>

</center>
	<br><BR>"
;}else{echo "<br><br>Folio no encontrado";}
}else if($busqueda == "Nombre"){

	Echo "Busqueda Nombre de arreglo";

	$NuevaConexion->Consulta("SELECT * FROM arreglo WHERE nombreArreglo = '$buscar' ");
	$Resultado = $NuevaConexion->getResultado();
	if($fila = mysql_fetch_row($Resultado)){
			echo "
<center>
	<table bordercolor='#0E69AE' >  
		<th>  
			<form action='editarArreglo.php'  method='post' >
		<BR>FOLIO <BR>
			<input type='text' name='id' size='7' value='".$fila[0]."'>
			<BR>Nombre del Arreglo<BR>
			<input type='text' name='nombreArreglo' size='20' value='".$fila[1]."'>
			<br>Categoria<br>
			<select name='Categoria'>
			<option>".$fila[2]."</option>
			<option>10 Mayo</option>
			<option>14 Febrero</option>
			<option>Cumpleaños</option>
			<option>Fiestas</option>
			<option>Velorio</option>

			</select>
			<BR><BR>Descripcion <BR>
			
			<BR>Flores<BR> 
			
			<select name='Flores'>
			<option>".$fila[3]."</option>
			<option>Rosas</option>
			<option>Bugambilia</option>
			<option>Girasol</option>
			<option>Carnivora</option>
			</select>
			<br>Cantidad <br>
			<input type='text' name='CantidadFlores' size='5' value='".$fila[4]."'>
			<BR>Forma<BR>  
			<select name='Forma'>
			<option>".$fila[5]."</option>
			<option>Corazon</option>
			<option>Osito</option>
			<option>Estrella</option>
			<option>Sin forma</option>
			</select>
			<BR>Adorno<BR> 
			<select name='Adorno'>
			<option>".$fila[6]."</option>
			<option>Moño azul</option>
			<option>Moño naranja</option>
			<option>Sin moño</option>
			</select>
			<BR>Precio <BR>
			<input type='text' name='costo' size='20' value='".$fila[7]."'>
			<BR>¿Cuantos arreglos agregara?<BR>
			<input type='text' name='CantidadArreglo' size='20' value='".$fila[8]."'>
			

			<br><br><button type=' submit' size=' 20'  name=' Guardar' > Actualizar</button >
			
			</form>
			<form action='../productos.php'  method='post'>
				<br><button type=' submit' size=' 20'  name=' Cancelar' > Cancelar </button >
				</form>
									
	<form action='eliminarArreglo.php'  method='post'>
				<input  type=' text'  name=' id'  size=' 7' style='visibility:hidden' value='".$id =$fila[0]."'>
				<br><button type=' submit' size='0' name='eliminar'>Eliminar</button >
				</form>
		</th>  
	<table>

</center>
	<br><BR>"
;}else{echo "<br><br>Arreglo no encontrado";}
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