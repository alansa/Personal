<?php 


$id		= $_POST['id'];
$nombreArreglo = $_POST['nombreArreglo'];
$categoria= $_POST['Categoria'];
$flores = $_POST['flores'];
$cantidadFlores = $_POST['CantidadFlores'];
$forma = $_POST['Forma'];
$adorno = $_POST['adorno'];
$costo = $_POST['costo'];
$existencia= $_POST['CantidadArreglo'];
$activo = $_POST['activo'];
$top = $_POST['top'];



echo "Actualizacion de Arreglo con Exito <br> <br>";
echo "Folio: " . $id . '<br>';
echo "Producto: " . $nombreArreglo . '<br>';
echo "Categoria: " .$categoria . '<br>';
echo "<br>Descripcion<br>";
echo "Usted dio de alta un arreglo para " .$categoria 
	." con " .$cantidadFlores ." ".$flores 
	. " En forma de ".$forma ." con un " . $adorno;
echo "<br><br>Costo por pieza: $" .$costo. ' pesos<br>';
echo "<br><br>Existencia: " .$existencia. ' <br>';
echo "<br> Top: ".$top.'<br>';
echo "<br> Activo: ".$activo.'<br>';



//echo $SegundaContra . '<br>';
echo ' <br> <br>         <form action="../productos.php"  method="post">
	<button type="submit" name="Regresar"> Regresar</button > 
		</form>';

			
include("../bd/conexion.php");
$Nueva = new BD;
$Nueva->Conexion(); 

$Nueva->Consulta(
	"UPDATE arreglo
 SET 
 idArreglo='$id ',
 nombreArreglo='$nombreArreglo ',
categoriaArreglo='$categoria',
 floresArreglo='$flores' ,
cantidadFlores='$cantidadFlores' ,
 formaArreglo='$forma',
  adornoArreglo='$adorno ',
   precioArreglo='$costo ',
    existenciaArreglo='$existencia ',
    top = '$top',
    activo = '$activo'

   WHERE idArreglo= '$id' ");



$Nueva->cerrarConexion();




 ?>
