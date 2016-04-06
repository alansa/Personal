<html>

<body>
<?php 
include("../bd/conexion.php");
$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 

$dell= $_POST['id'];

$NuevaConexion->Consulta("DELETE FROM producto WHERE idProducto= '$dell' ");
$NuevaConexion->cerrarConexion();

echo "<script>";
echo "alert('Datos eliminados con exito');";


header('location: ../Productos.php');
echo "</script>";



 ?>



</html>

