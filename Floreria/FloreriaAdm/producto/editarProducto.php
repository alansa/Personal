<?php 


$id		= $_POST['id'];
$nombre = $_POST['nombreProducto'];
$tipo = $_POST['tipoProducto'];
$costo= $_POST['costo'];
$cantidad = $_POST['cantidad'];



echo "Actualizacion de Usuario con Exito <br> <br>";
echo "Folio: " . $id . '<br>';
echo "Producto: " . $nombre . '<br>';
echo "Tipo de Producto: " .$tipo . '<br>';
echo "Costo de Compra: " .$costo . '<br>';
echo "Existencia: " .$cantidad . '<br>';

//echo $SegundaContra . '<br>';
echo ' <br> <br>         <form action="../productos.php"  method="post">
	<button type="submit" name="Regresar"> Regresar</button > 
		</form>';

			
include("../bd/conexion.php");
$Nueva = new BD;
$Nueva->Conexion(); 

$Nueva->Consulta(
	"UPDATE producto
 SET 
 idProducto='$id ',
 nombreProducto='$nombre',
 tipoProducto='$tipo ',
 costoCompraProducto='$costo' ,
 existenciaProducto='$cantidad '  WHERE idProducto = '$id' ");



$Nueva->cerrarConexion();




 ?>
