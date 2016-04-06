<?php 

$id		= $_POST['id'];
$nombreEmpresa = $_POST['nombreEmpresa'];
$nombre= $_POST['nombre'];
$ape_pat = $_POST['apePaterno'];
$ape_mat = $_POST['apeMaterno'];
$tel = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$rfc = $_POST['RFC'];


echo "Alta de Proveedor con Exito <br> <br>";
echo "Folio: " . $id . '<br>';
echo "Empresa: " . $nombreEmpresa . '<br>';
echo "Nombre: " . $nombre . '<br>';
echo "Paterno: " .$ape_pat . '<br>';
echo "Materno: " .$ape_mat . '<br>';
echo "Telefono: " .$tel . '<br>';
echo "Correo: " .$correo. '<br>';
echo "Direccion: " .$direccion. '<br>';
echo "RFC: " .$rfc. '<br>';
//echo $SegundaContra . '<br>';
echo ' <br> <br>         <form action="../proveedores.php"  method="post">
	<button type="submit" name="Regresar"> Regresar</button > 
		</form>';

include("../bd/conexion.php");
$Nueva = new BD;
$Nueva->Conexion(); 

$Nueva->Consulta(
	"INSERT INTO proveedor(idProveedor, nombreEmpresa, nombreProveedor, apPaProveedor, apMaProveedor,telefonoProveedor,correoProveedor,direccionFiscal,rfcProveedor) 
		VALUES ('$id','$nombreEmpresa ','$nombre','$ape_pat','$ape_mat','$tel','$correo','$direccion','$rfc')");
$Nueva->cerrarConexion();



 ?>

 