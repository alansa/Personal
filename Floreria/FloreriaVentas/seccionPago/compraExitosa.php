<?php 


//SE GUARDAN LOS VALORES INGRESADOS POR EL USUARIO
$nombreCliente	= $_POST['nombreC'];
$apellidosCliente = $_POST['apellidosC'];
$telefonoCliente = $_POST['telefonoC'];
$emailCliente = $_POST['emailC'];
$nombreTarjeta = $_POST['nombreT'];
$tipoTarjeta = $_POST['tipoT'];
$numeroTarjeta = $_POST['numeroT'];
$vigenciaTarjeta = $_POST['vigenciaT'];
$verificacionTarjeta = $_POST['numeroVerT'];
$nombreEnvio = $_POST['nombreE'];
$apellidosEnvio = $_POST['apellidosE'];
$direccionEnvio = $_POST['direccionE'];
$telefonoEnvio = $_POST['telefonoE'];
$fechaEnvio = $_POST['fechaE'];
$sTotal = $_POST['total'];

//REPORTE DE LO GUARDADO EN LA BD
echo "Compra Exitosa <br> <br>";
echo "Nombre del Cliente:  " . $nombreCliente .$apellidosCliente .'<br>';
echo "Numero deTelefono: " . $telefonoCliente . '<br>';
echo "Email: " .$emailCliente . '<br>';
//AL ACEPTAR NOS REGRESA A LA PAGINA DE CARRITO Y VACIA TABLA CARRITO Y PILA

echo ' <br> <br>
      <form action="../seccionPago/eliminarCompra.php "  method="post">
				<button type="submit" name="Aceptar" onclick="vaciar_carrito()"> Aceptar</button > 
	  </form>';


//CONECTAMOS CON LA BD, PARA INGRESAR LOS VALORES GUARDADOS

	include("../bd/conexion.php");

//PARA TABLA DATOCLIENTE

$Nueva = new BD;
$Nueva->Conexion(); 

$Nueva->Consulta(

	"INSERT INTO datocliente (nombreCliente, apellidoCliente,
	 telefonoCliente, emailCliente, nombreTarjeta, tipoTarjeta,
	  numeroTarjeta, vigencia, numVerificacionTarjeta, nombreDestino,
	   apellidoDestino, direccionDestino, telefonoDestino) 

	VALUES ('$nombreCliente','$apellidosCliente','$telefonoCliente',
		'$emailCliente','$nombreTarjeta','$tipoTarjeta','$numeroTarjeta',
		'$vigenciaTarjeta','$verificacionTarjeta','$nombreEnvio',
		'$apellidosEnvio','$direccionEnvio','$telefonoEnvio')"
);

$Nueva->cerrarConexion();

?>
<!-- DIRECCION PARA EJECUTAR METODO ONCLICK= VACIARCARRITO()-> CON ESTO ELIMINAMOS PILA -->
 <script src="../inicio/tabla.js"></script>
