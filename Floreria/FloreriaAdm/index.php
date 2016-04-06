<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>La flor feliz</title>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon" >
	<link rel="stylesheet" type="text/css" href="css/disenoDeIndex.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<script type="text/javascript" src="js/titulo.js"></script>
</head>
<body>
<video autoplay loop muted>
	<source src="video/video1.mp4" type="video/mp4">
</video>
<div id="fondoOpaco"></div>

<section>
	<h1>La flor feliz </h1>
	<form action="bd/validarUsuario.php" method="post">

		<div>
		<input type="text" placeholder="Nombre" name="usuario" required />
		<input type="password" placeholder="Contraseña" name="pass" required />
		<input type="submit" value="Entrar" name="Entrar" />
		</div>
	</form>

	<?php 



$actualizo=$_GET['op'];




if ($actualizo=="default" )
		Echo "<meta http-equiv='Refresh'content='120;URL=index.php?op="."default"."'/>";
else if ($actualizo=="false" )
		Echo "<meta http-equiv='Refresh'content='120;URL=index.php?op="."default"."'/>";
else if ($actualizo!="default" )
		Echo "<meta http-equiv='Refresh'content='0;URL=index.php?op="."default"."'/>";


			
					
		if($actualizo == "false")
			echo "<br><div align='center'>Usuario o contraseña invalida favor de verificarla</div align='center'>";
				else if($actualizo== "true"){

					echo "<br><div align='center'> Usuario valido </div align='center'>";
					Echo " <meta http-equiv='Refresh' content='1;URL=inicio.php'/>";

				}else if($actualizo == "default"){
					echo" ";
				}

?>
</section>
<footer>
	&copy;2015
</footer>
</body>
</html>