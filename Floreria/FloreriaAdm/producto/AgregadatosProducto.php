<?php 





			
$id		= $_POST['id'];
$nombreProducto = $_POST['nombreProducto'];
$tipoProducto= $_POST['descripcion'];
$descripcion = $_POST['descripcion'];
$proveedor = $_POST['proveedor'];
$costo = $_POST['costo'];
$cantidad = $_POST['cantidad'];

echo "Alta de Producto con Exito <br> <br>";
echo "Folio: " . $id . '<br>';
echo "Producto: " . $nombreProducto . '<br>';
echo "Tipo: " .$tipoProducto . '<br>';
echo "Descripcion: " .$descripcion . '<br>';
echo "Proveedor: " .$proveedor . '<br>';
echo "Costo de compra $ ".$costo. " Pesos<br> ";
echo "Modifico cantidad: ". $cantidad;
//echo $SegundaContra . '<br>';
echo ' <br> <br>         <form action="../productos.php"  method="post">
	<button type="submit" name="Regresar"> Regresar</button > 
		</form>';



 ?>

 