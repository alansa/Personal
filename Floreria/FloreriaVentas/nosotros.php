<html >
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="contacto/nosotros.css" rel="stylesheet" type="text/css" />
  <title>LA FLOR FELIZ</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrap">
<div id="header">
<h1 id="sitename"><a href="index.php">La Flor Feliz</a></h1>
</div>
<div id="page"><div class="inner_copy"></div>
<?php include("menu.php"); ?>

<nav align="center">
		<button  onclick="mision()">Misión</button>
		<button  onclick="vision()">Visión</button>
		<button  onclick="valores()">Valores</button>	
</nav>

<p id="texto" align="center"><br>Nuestra misión es que nuestros clientes tengan la<br>posibilidad de estar presentes de una manera<br>original y sorprendente en aquellos acontecimientos<br>importantes de la vida de sus seres queridos<br>obsequiando el mejor regalo de la naturaleza<br>que son las flores.<br><br></p>
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



</div>
</div>
</body>
</html>
