<?php 


			
	
			
$id		= $_POST['id'];
$nombreArreglo = $_POST['nombreArreglo'];
$categoria= $_POST['Categoria'];
$flores = $_POST['Flores'];
$cantidadFlores = $_POST['CantidadFlores'];
$forma = $_POST['Forma'];
$adorno = $_POST['Adorno'];
$costo = $_POST['costo'];
$cantidadArreglo = $_POST['CantidadArreglo'];

echo "Alta de Adorno con Exito <br> <br>";
echo "Folio: " . $id . '<br>';
echo "Producto: " . $nombreArreglo . '<br>';
echo "Categoria: " .$categoria . '<br>';
echo "<br>Descricion<br>";
echo "Usted agrego ".$cantidadArreglo
	." arreglo(s) para ".$categoria 
	." con " .$cantidadFlores ." ".$flores 
	. " En forma de ".$forma ." Con un " . $adorno;
echo "<br><br>Costo por pieza: $" .$costo. ' pesos<br>';

//echo $SegundaContra . '<br>';
echo ' <br> <br>         <form action="../productos.php"  method="post">
	<button type="submit" name="Regresar"> Regresar</button > 
		</form>';



 ?>

 