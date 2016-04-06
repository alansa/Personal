<html>

<body>
<?php 
include("../bd/conexion.php");
$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 

$dell= $_POST['id'];

$NuevaConexion->Consulta("DELETE FROM carrito WHERE idArreglo= '$dell' ");
$NuevaConexion->cerrarConexion();

echo "<script>";
echo "alert('Arreglo eliminado con exito');";
header('location: ../carrito.php');
echo "</script>";



 ?>



</html>