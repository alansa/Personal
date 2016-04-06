<html> 
<head>
		<link href="contacto/contacto.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="horizontal">

<div>
	<section id="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.559004174934!2d-99.04635478652827!3d19.474571344386895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fb1ac3be8c3d%3A0x5e6fdfca3dee5dd0!2sUNAM+Facultad+de+Estudios+Superiores+Arag%C3%B3n!5e0!3m2!1ses!2smx!4v1448759776047" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>
	<div id="info">
		<p align="center">
			<br>
			Si requieres atención personalizada
			<br> <br>
			Llama a nuestros números 
			<br>
			Te atenderemos con gusto
			<br><br>
			(01 800) 4234523
			<br>
			59 36 18 91
			<br>
			 59 36 18 92
			<br><br>
			O bien a nuestro correo 
			<br><br>
			laflorfeliz@floreria.com
			<br><br>
		</p>
	</div>

</div>


<FORM METHOD="POST" ACTION="">

<section id="formulario">
	<h1 id="letra" align="center"> DEJE UN MENSAJE EN EL SIGUIENTE FORMULARIO Y EN BREVE
	 NOS PONDREMOS EN CONTACTO CON USTED</h1>
	 <br></br>
	<label>Nombre Completo</label>
	<INPUT type="text"  name="nombreComp" size="15" placeholder="Ingresa tu nombre  ">
	<br></br><br>
	<label>Correo Electronico</label>
	<INPUT type="text" name="email" size="20" placeholder="E-mail  ">
	<br></br><br>
	<label>Telefono</label>
	<INPUT type="text"  name="telefono"size="10" placeholder="Ingresa tu telefono  ">
	<br></br><br>
	<label>Asunto</label>
	<br>
	<INPUT type="text"  name="nombreComp" size="15" placeholder="Ingresa tu nombre  ">
	<br></br>
	<label>MENSAJE </label>
	<textarea cols="50" rows="10" placeholder="Escriba su mensaje aquí "></textarea>
	<br></br>
	<div align="center">
			<button id="boton"  type='submit' name='Enviar' onclick="mensaje()"=> Enviar</button >			
	</div>
	
	<script type="text/javascript">

		function mensaje(){
			alert("Su mensaje se ha enviado con exito. Gracias!!")
		}

	</script>
</section>
</FORM>


</div>	

</body>
</html>