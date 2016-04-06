<?php 


			
			
	
			
$id		= $_POST['id'];
$nombreProducto = $_POST['nombreProducto'];
$tipoProducto= $_POST['tipoProducto'];
$costo = $_POST['costo'];
$existencia = $_POST['existencia'];



echo "Alta de Producto con Exito <br> <br>";
echo "Folio: " . $id . '<br>';
echo "Producto: " . $nombreProducto . '<br>';
echo "Tipo: " .$tipoProducto . '<br>';
echo "Costo de compra $ ".$costo. " Pesos ";
echo "Existencia  ".$existencia;
//echo $SegundaContra . '<br>';
echo ' <br> <br>         <form action="../productos.php"  method="post">
	<button type="submit" name="Regresar"> Regresar</button > 
		</form>';

include("../bd/conexion.php");
$Nueva = new BD;
$Nueva->Conexion(); 

$Nueva->Consulta(

	"INSERT INTO producto(idProducto,
				 nombreProducto,
	  			 tipoProducto,
	             costoCompraProducto,
	             existenciaProducto) 
		VALUES ('$id',
				'$nombreProducto ',
				'$tipoProducto',
				'$costo',
				'$existencia')");

$Nueva->cerrarConexion();


 ?>

 