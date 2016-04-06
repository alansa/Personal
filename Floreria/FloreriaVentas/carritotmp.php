<html >
  <head>
  <script src="carrito/jquery.min.js"></script>
  <META HTTP-EQUIV="REFRESH" CONTENT="0.6;URL=carrito.php">
</head>

<body>
	<div id="contenedor"></div>
</body>
</html>

<script>

	$( document ).ready(function (){

		pila = JSON.parse(localStorage['loStPila']);
		if (!(pila[0] == -1)) {		$("#contenedor").load("carrito/tablaCarrito.php",{pilaPhp:pila});		}
	});

</script>