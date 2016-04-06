<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<div class="container">
		<?php 
		include("cssmenu/menu.php");  ?>

		
		
		<h1> Usuarios </h1>
			<!--<h3>Menu Principal</h3>-->







		</div>
	</header>
	
	<div class='container'>
		<div class='main row'>
			<article class='col-xs-12 col-sm-8 col-md-9 col-lg-9'>
				<p>
					<h3></h3>
					<h4 class='visible-xs'> </h4>
					<h4 class='visible-sm'> </h4>
					<h4 class='visible-md'></h4>
					<h4 class='visible-lg'></h4> 
<center>	
	<table>

 
<tr>
  <td><br><br> <?php  include("usuario/altaUsuario.php"); ?></td>
  <td>  </td>
  <td>

  			
   </td>
 </tr>

</table>
</center>
<?php  

  			include("usuario/busquedaUsuario.php"); 
	
echo "<br> <br>";
  			include("usuario/tablaUsuario.php"); 
		   
			?>
				


			
		

 


	

			</article>
		
			
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
		<script src="js/bootstrap.min.js"></script></body>
</html>