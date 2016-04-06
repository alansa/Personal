<?php 

$id= $_POST['id'];
$nombreArreglo = $_POST['nombreArreglo'];
$categoria= $_POST['Categoria'];
$flores = $_POST['flores'];
$cantidadFlores = $_POST['CantidadFlores'];
$forma = $_POST['Forma'];
$adorno = $_POST['adorno'];
$costo = $_POST['costo'];
$existencia = $_POST['existencia'];
$activo = $_POST['activo'];
$top = $_POST['top'];



$ruta = "fotosArreglos";
$archivoTemporal = $_FILES['imagen']['tmp_name'];
$archivo = $_FILES['imagen']['name'];
move_uploaded_file($archivoTemporal,$ruta."/".$archivo);
$ruta = $ruta."/".$archivo;

echo "Alta de Adorno con Exito <br> <br>";
echo "Folio: " . $id . '<br>';
echo "Producto: " . $nombreArreglo . '<br>';
echo "Categoria: " .$categoria . '<br>';
echo "<br>Descripcion<br>";
echo "Usted dio de alta un arreglo para " .$categoria 
	." con " .$cantidadFlores ." ".$flores 
	. " En forma de ".$forma ." con un " . $adorno;
echo "<br><br>Costo por pieza: $" .$costo. ' pesos<br>';
echo "Activo en listas: " .$activo . '<br>';
echo "Aparecera en el top: " .$top . '<br>';
echo "<img src='$ruta'>";
//echo $SegundaContra . '<br>';
echo ' <br> <br>         <form action="../productos.php"  method="post">
	<button type="submit" name="Regresar"> Regresar</button > 
		</form>';
include("../bd/conexion.php");
$Nueva = new BD;
$Nueva->Conexion(); 



$Nueva->Consulta("INSERT INTO 
			arreglo(idArreglo,
				 nombreArreglo,
	  			 categoriaArreglo,
	             floresArreglo, 
	             cantidadFlores,
	             formaArreglo,
	             adornoArreglo,
	             precioArreglo,
	             existenciaArreglo,
	             activo,
	             top,
	             rutaImagen
	             ) 
		VALUES ('$id',
				'$nombreArreglo',
				'$categoria',
				'$flores',
				'$cantidadFlores',
				'$forma',
				'$adorno',
				'$costo',
				'$existencia',
				'$activo',
				'$top',
				'$ruta')");

$Nueva->cerrarConexion();


 ?>

 