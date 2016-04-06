<html>
<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <link href="seccionPago/seccionPago.css" rel="stylesheet" type="text/css" />
</head>


<form action="seccionPago/compraExitosa.php"  method="post">
<section id="sectionleft">

	<?php
	$precioTotal= $_GET['op'];

	?>
		
				<h1 id="tituloh1">1. Datos Personales</h1>
				<br>
				<label>Nombre *</label>
				<input type="text" name="nombreC" size="20" placeholder="Ingresa tu nombre  " />
				<br></br>
				<label>Apellido(s)*</label>
				<input type="text" name="apellidosC" size="40" placeholder="Ingresa tu apellido Paterno  " />
				<br></br>
				<label>Telefono</label>
				<input type="text" name="telefonoC"size="10" placeholder="Ingresa tu telefono  " />
				<br></br>
				<label>E-mail *</label>
				<input type="text" name="emailC" size="20" placeholder="Ingresa tu e-mail  " />
				<br></br>



				<h1 id="tituloh1">2. Descripcion de pedido</h1>
				<?php include("seccionPago/mostrarCompra.php") ?>
				<br></br>


				<h1 id="tituloh1">3. Forma de pago</h1>
				<br>
				<label>Nombre en la tarjeta *</label>
				<input type="text" name="nombreT" size="10" placeholder="Ingresa el nombre que aparece en la tarjeta " />
				<br></br>
				<label>Tipo de Tarjeta*</label>
				<select name="tipoT">
						<option>Credito</option>
						<option>Debito</option>
				</select>			
				<br></br>
				<label>Numero de la tarjeta</label>
				<input type="num" name="numeroT" size="10"placeholder="Ingresa el numero " />
				<br></br>
				<label>Vigencia</label>
					<input type="month" name="vigenciaT">
				<br></br>
				<label>Numero de verificacion de la tarjeta</label>
				<input type="num" name="numeroVerT" placeholder="Ingresa el numero de verificacion " />
				<br></br>
				<br></br>

				<h1 id="tituloh1">4. Datos de envio</h1>
				<br>
				<label>Nombre *</label>
				<input type="text" name="nombreE" size="20"placeholder="Ingresa tu nombre  " />
				<br></br>
				<label>Apellidos *</label>
				<input type="text" name="apellidosE" size="40" placeholder="Ingresa tu apellido Paterno  " />
				<br></br>
				<label>Direccion *</label>
				<input type="text" name="direccionE"size="60" placeholder="Ingresa tu direccion  " />
				<br></br>
				<label>Telefono </label>


				<input type="text" name="telefonoE"size="10" placeholder="Ingresa tu telefono  " />
				<br></br>
				<label>Fecha de Entrega</label>
					<input type="date" name="fechaE">
				<br></br>
				<br></br>

				<?php 
				echo"
				<input  type=' text'  name='total'  size=' 7' style='visibility:hidden'
				 value=''.total =$precioTotal.'>
				<br>"?>
				<button type='submit' name='Pagar'> Pagar </button >			
				<br></br>

				<form action="index.php">
					<button type="submit" name="Cancelar"> Cancelar</button >
				</form>

	</section>
</form>	
</html>