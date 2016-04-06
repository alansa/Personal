<?php 


$id		= $_POST['id'];
$nombre = $_POST['nombre'];
$ape_pat = $_POST['apePaterno'];
$ape_mat = $_POST['apeMaterno'];
$tipoUsuario = $_POST['tipoUsuario'];
$nombreUsuario = $_POST['nombreUsuario'];
$contra = $_POST['contrasenia'];
$SegundaContra = $_POST['pruebaContrasenia'];

if($contra == $SegundaContra){
echo "Alta de usuario con Exito <br> <br>";
echo "Folio: " . $id . '<br>';
echo "Nombre: " . $nombre . '<br>';
echo "Nombre: " . $nombre . '<br>';
echo "Paterno: " .$ape_pat . '<br>';
echo "Materno: " .$ape_mat . '<br>';
echo "Tipo de usuario: " .$tipoUsuario . '<br>';
echo "Nombre de usuario: " .$nombreUsuario . '<br>';
echo "Contraseña: " .$contra . '<br>';
//echo $SegundaContra . '<br>';
echo ' <br> <br>         <form action="../usuarios.php"  method="post">
	<button type="submit" name="Regresar"> Regresar</button > 
		</form>';

			
include("../bd/conexion.php");
$Nueva = new BD;
$Nueva->Conexion(); 

$Nueva->Consulta(
	"INSERT INTO usuarios(id, nombre, apPaterno, apMaterno, tipoUsuario,nombreUsuario,pass) 
		VALUES ('$id','$nombre','$ape_pat','$ape_mat','$tipoUsuario','$nombreUsuario','$contra')");
$Nueva->cerrarConexion();

}else{

	echo "Contraseñas diferentes favor de verificarlas";
	echo ' <br> <br>         <form action="../usuarios.php"  method="post">
	<button type="submit" name="Regresar"> Regresar</button > 
		</form>';
}



 ?>

 