<html>
<head>
	<title></title>
</head>
<body>	

	<form action="producto/muestraDatosProducto.php"  method="post">
		
				
			ALTA DE PRODUCTO<BR>

			<BR>FOLIO <BR>
			<input type="text" name="id" size="7" value="">
			<BR>Nombre del producto<BR>
			<input type="text" name="nombreProducto" size="20" value="">
			<BR>Tipo de producto<BR>
			<select name="tipoProducto">
			<option>Flores</option>
			<option>Adorno</option>
			</select><br>
			<BR>Costo de compra <BR>
			<input type="text" name="costo" size="20" value="">
			<BR>Existencia<BR>
			<input type="text" name="existencia" size="20" value="">
		
			
			
		<br><BR>

			<button type="submit" name="Alta"> Enviar</button >
				<button type="submit" name="Cancelar"> Cancelar</button >
				<br><BR><br><BR>

					</form>

</body>
</html>