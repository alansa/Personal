<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header >
		<div class="container" >
		<?php 


		include("cssmenu/menu.php"); 

		$recibo_campo=$_GET['op'];
		
		echo"	<h1> Bienvenido $recibo_campo</h1> 	"; ?>

		
			<!--<h3>Menu Principal</h3>-->


		</div>
	</header>
	
	<div class='container'>
		<div class='main row'>
			<article class='col-xs-12 col-sm-8 col-md-9 col-lg-9'>
				<p>
	<nav align="center">
		<button id="letra"  onclick="mision()">Misión</button>
		<button id="letra" onclick="vision()">Visión</button>
		<button id="letra" onclick="valores()">Valores</button>	
</nav>

<p id="letra" align="center"><br>Nuestra misión es que nuestros clientes tengan la<br>posibilidad de estar presentes de una manera<br>original y sorprendente en aquellos acontecimientos<br>importantes de la vida de sus seres queridos<br>obsequiando el mejor regalo de la naturaleza<br>que son las flores.<br><br></p>
<br><br>

<script type="text/javascript">


	function mision(){
		document.getElementById("texto").innerHTML = "<br>Nuestra misión es que nuestros clientes tengan la<br>posibilidad de estar presentes de una manera<br>original y sorprendente en aquellos acontecimientos<br>importantes de la vida de sus seres queridos<br>obsequiando el mejor regalo de la naturaleza<br>que son las flores.<br><br>";
	}

	function vision(){
		document.getElementById("texto").innerHTML = "<br>Lograr ser una florería que se distinga de las demás<br>en el diseño de arreglos florales y decoración de<br>eventos, siendo nuestro principal objetivo la<br>satisfacción de nuestros clientes. Asegurándose de<br>que las flores sean entregadas en el momento y<br>lugar exactos.<br><br>Queremos ser una empresa líder en los diseños <br>florales, y tener una gran presencia en el mercado<br>online.<br><br>";
	}

	function valores(){
		document.getElementById("texto").innerHTML = "<br>Puntualidad: Listos para entregar a tiempo, la Puntualidad es una regla de oro.<br><br>Calidad: Frescura y duración como símbolo de Calidad.<br><br>Responsabilidad: Equipo de trabajo para atenderle siempre con calidad y calidez.<br><br>Originalidad: Diseños únicos, creados por floristas profesionales.<br><br>Servicio: actitud para lograr la satisfacción de nuestros clientes.<br><br>Honestidad: Ofrecemos un trato Honesto, cumpliendo nuestras promesas.<br><br>Respeto al medio ambiente, apoyando su conservación.<br><br>";
	}

</script>
					
		
				

 


	

			</article>
		
			<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				
			</aside>
		</div>

		<div class="row">
			
			</div>

		

			<div class="col-xs-12 col-sm-6 col-md-3">
				
		
			</div>
		</div>
	</div>

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
	<script src="js/jquery-latest.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>