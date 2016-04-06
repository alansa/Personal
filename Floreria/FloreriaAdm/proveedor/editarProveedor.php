<?php 


$id		= $_POST['id'];
$nombreEmpresa = $_POST['empresa'];
$nom= $_POST['nom'];
$pat = $_POST['apeP'];
$mat = $_POST['apM'];
$tel = $_POST['Tel'];
$corr = $_POST['corr'];
$Dirfis = $_POST['DirFi'];
$rfc = $_POST['RFC'];

echo "Actualizacion de Proveedor con Exito <br> <br>";
echo "Folio: " . $id . '<br>';
echo "Empresa: " . $nombreEmpresa . '<br>';
echo "Nombre: " . $nom . '<br>';
echo "Paterno: " .$pat . '<br>';
echo "Materno: " .$mat . '<br>';
echo "Telefono: " .$tel . '<br>';
echo "Correo: " .$corr. '<br>';
echo "Direccion: " .$Dirfis. '<br>';
echo "RFC: " .$rfc. '<br>';
//echo $SegundaContra . '<br>';
echo ' <br> <br>         <form action="../proveedores.php"  method="post">
	<button type="submit" name="Regresar"> Regresar</button > 
		</form>';

			
include("../bd/conexion.php");
$Nueva = new BD;
$Nueva->Conexion(); 

$Nueva->Consulta(
	"UPDATE proveedor
 SET 
 nombreEmpresa='$nombreEmpresa  ',
 nombreProveedor='$nom ',
 apPaProveedor='$pat' ,
 apMaProveedor='$mat',
 telefonoProveedor = '$tel',
  correoProveedor = '$corr',
direccionFiscal = '$Dirfis',
 rfcProveedor = '$rfc'   WHERE idProveedor = '$id' ");



$Nueva->cerrarConexion();




 ?>
