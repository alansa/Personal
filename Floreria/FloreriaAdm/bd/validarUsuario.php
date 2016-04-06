<?php 
 echo "<link rel='stylesheet' href='estilos.css'>";
 ECHO "<body>";

	include("conexion.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['pass'];



$NuevaConexion = new BD;


$NuevaConexion->Conexion(); 

$NuevaConexion->Consulta("SELECT * FROM usuarios WHERE nombreUsuario = '$usuario' AND pass = '$contraseña'");
$Resultado = $NuevaConexion->getResultado();
$NuevaConexion->setNombre();
$nombre = $NuevaConexion->getNombre();


$NuevaConexion->cerrarConexion();


echo '<br><br><div align="center"> <img src="cargando.gif"> </div align="center">';



	$count=mysql_num_rows($Resultado);
		
if($usuario == "ADMIN" && $contraseña == "ADMIN"){
		Echo "
			<meta http-equiv='Refresh' content='1;URL=../inicio.php?op="."Ingresaste como SUPER USUARIO"."'/>";

	}else if($count==1){
		Echo "
			<meta http-equiv='Refresh' content='1;URL=../inicio.php?op=". $nombre."'/>";

	/*		Echo "
			<meta http-equiv='Refresh' content='1;URL=inicio.php?op=".$NombreUsuario."'/>";
			//header("location:uno.php"); //Damos Acceso al usuario*/
		}else {

			Echo "
			<meta http-equiv='Refresh' content='1;URL=../index.php?op="."false"."'/>";



}

ECHO "</body>";

 ?>