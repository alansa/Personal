<?php  

			include('../bd/Conexion.php');
			$Nueva = new BD;
			$Nueva->Conexion(); 
			$Nueva->Consulta("SELECT idProducto,nombreProducto FROM producto WHERE tipoProducto = 'Flores' order by nombreProducto asc");
			$Resultado = $Nueva->getResultado();
	echo "<select>";
while ($fila = mysql_fetch_row($Resultado)){

	echo "<option value='".$fila['0']."'>".$fila['1']."</option>";

}
			$Nueva->cerrarConexion();
			 "</select>"
		
				
		

 ?>