<html>

<body>
<?php 
include("../bd/conexion.php");
$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 

$dell= $_POST['id'];

$NuevaConexion->Consulta("DELETE FROM usuarios WHERE id = '$dell' ");
$NuevaConexion->cerrarConexion();

echo "<script>";
echo "alert('Datos eliminados con exito');";


header('location: ../usuarios.php');
echo "</script>";



 ?>



</html>

