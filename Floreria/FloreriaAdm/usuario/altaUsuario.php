<html>
<head>
	<title></title>
</head>
<body>	

	<form action="usuario/muestraDatosUsuario.php"  method="post">
		
				
			ALTA DE USUARIO<BR>

			<BR>Folio <BR>
			<input type="text" name="id" size="7" value="">
			<BR>Nombre<BR>
			<input type="text" name="nombre" size="20" value=""> 
			<BR>Apellido Paterno <BR>
			<input type="text" name="apePaterno" size="20" value="">
			<BR>Apellido Materno <BR>
			<input type="text" name="apeMaterno" size="20" value="">
			<BR>Tipo de usuario <BR>
			<select name="tipoUsuario">
			<option>Administrador</option>
			<option>Ventas</option>
			<option>Repartidor</option>
			</select>
			<BR>Nombre de usuario<BR>
			<input type="text" name="nombreUsuario" size="20" value="">
			<BR>Contraseña <BR>
			<input type="text" name="contrasenia" size="20" value="">
			<BR>Repita su contraseña <BR>
			<input type="text" name="pruebaContrasenia" size="20" value="">
			
			
		<br><BR>

			<button type="submit" name="Alta"> Enviar</button >
				<button type="submit" name="Cancelar"> Cancelar</button >
				<br><BR><br><BR>

					</form>

</body>
</html>