<?php 
include("../bd/conexion.php");
$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 


$NuevaConexion->Consulta("DELETE FROM carrito WHERE 1");
$NuevaConexion->cerrarConexion();

//se eliminaron las comillas


echo "<script>";

header('location: ../carrito.php');
echo "</script>";

 ?>