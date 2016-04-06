<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<div class="container">
		<?php 
		include("cssmenu/menu.php"); ?>

		
		
		<h1> Productos </h1>
			<!--<h3>Menu Principal</h3>-->

		</div>
	</header>
	
	<div class='container'>
		<div class='main row'>
			<article class='col-xs-12 col-sm-8 col-md-9 col-lg-9'>
			

<center>
	<table width="100%" >
<tr>
 

	<td valign="top"> 
  			<?php 
  	 			include("producto/altaProducto.php"); 
 				include("producto/busquedaProducto.php"); 

 			 ?>
	</td>
  		   &nbsp; &nbsp; &nbsp; &nbsp;
  	
   <td valign="top"> 
   			<?php 
   			 include("producto/altaArreglo.php"); 
   			 include("producto/busquedaArreglo.php"); 
   	
   				echo "<br><br>";
   			?>
   	</td>
  
</tr>

</table>
</center>


			<?php 
   			 include("producto/tablaProducto.php"); 

   	
   				echo "<br><br>";
   			?>
		

 


	

			</article>
		
			<aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				<p>
					
				</p>
			</aside>
		</div>

		<div class="row">
			<div class="color1 col-xs-12 col-sm-6 col-md-3">
				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
			
			</div>

			<div class="color1 col-xs-12 col-sm-6 col-md-3">
				
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