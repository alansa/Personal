<html>
<head>
	<title></title>
</head>
<body>	

	<form action="producto/muestraDatosarreglo.php"  method="post" enctype="multipart/form-data">
		
				
			ALTA DE ARREGLO<BR>

			
			<BR>FOLIO <BR>
			<input type="text" name="id" size="7" value="">
			<BR>Nombre del Arreglo<BR>
			<input type="text" name="nombreArreglo" size="20" value="">
			<br>Categoria<br>
			<select name="Categoria">
			<option>10 Mayo</option>
			<option>14 Febrero</option>
			<option>Cumpleaños</option>
			<option>Fiestas</option>
			<option>Velorio</option>

			</select>
			<BR><BR>Descripcion <BR>
			
			<BR>Flores<BR> 
		<?php
include("bd/conexion.php");  
			
			$Nueva = new BD;
			$Nueva->Conexion(); 
			$Nueva->Consulta("SELECT idProducto,nombreProducto FROM producto WHERE tipoProducto = 'Flores' order by nombreProducto asc");
			$Resultado = $Nueva->getResultado();
			$Nueva->cerrarConexion();
	echo "<select name = 'flores'>";
while ($fila = mysql_fetch_row($Resultado)){

	echo "<option value='".$fila['1']."'>".$fila['1']."</option>";

}
			

 ?>

			 </select>
		
				<br>Cantidad <br>
				<input type="text" name="CantidadFlores" size="5" value="">
				<BR>Forma<BR>  
			<select name="Forma">
				<option>Corazon</option>
				<option>Osito</option>
				<option>Estrella</option>
				<option>Sin forma</option>
			</select>
			
			<BR>Adorno<BR> 
			
			<?php

			
			$Nueva = new BD;
			$Nueva->Conexion(); 
			$Nueva->Consulta("SELECT idProducto,nombreProducto FROM producto WHERE tipoProducto = 'Adorno' order by nombreProducto asc");
			$Resultado = $Nueva->getResultado();
			$Nueva->cerrarConexion();
	echo "<select name = 'adorno'>";
while ($fila = mysql_fetch_row($Resultado)){

	echo "<option value='".$fila['1']."'>".$fila['1']."</option>";

}
			

 ?>

			 </select>
			
			<BR>Precio <BR>
			
				<input type="text" name="costo" size="20" value="">

				<BR>Existencia <BR>
				<input type="text" name="existencia" size="20" value="">
				<BR>¿Desea Activarlo en las listas? <BR>
				<select name="activo">
				<option>si</option>
				<option>no</option>
			</select>
			<BR>¿Desea que aparesca en el TOP? <BR>
				<select name="top">
				<option>si</option>
				<option>no</option>
			</select>
			<BR>Imagen <BR>
				<input type ="file" name = "imagen"/>


			
	
			
			
		<br><BR>

			<button type="submit" name="Alta"> Enviar</button >
				<button type="submit" name="Cancelar"> Cancelar</button >
				
				<br><BR><br><BR>

					</form>

</html>

