<html>

<body>
<?php 
include("../bd/conexion.php");
$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 

$dell= $_POST['id'];

$NuevaConexion->Consulta("DELETE FROM proveedor WHERE idProveedor = '$dell' ");
$NuevaConexion->cerrarConexion();

echo "<script>";
echo "alert('Datos eliminados con exito');";


header('location: ../Proveedores.php');
echo "</script>";



 ?>



</html>

