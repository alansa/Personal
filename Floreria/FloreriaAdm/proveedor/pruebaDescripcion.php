<?php 





include("../bd/conexion.php");  
$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 
$NuevaConexion->Consulta("SELECT * FROM carrito");
$Resultado = $NuevaConexion->getResultado();
$NuevaConexion->cerrarConexion();
$i = 0;
while ($row = mysql_fetch_row($Resultado)){   
	
	$i++;
	$arregloID[$i] = $row[0];
}  



for ($j = 0; $j <= $i; $j++) {

    echo $arregloID[$j]; 
    echo "<br>"; 
}

$NuevaConexion->Conexion(); 

for($k = 1; $k < $j; $k++ ){

$consultaNueva = "SELECT  rutaImagen FROM arreglo WHERE idArreglo ='$arregloID[$k]'";
$NuevaConexion->Consulta($consultaNueva);
$Resultado = $NuevaConexion->getResultado();

  while ($row = mysql_fetch_row($Resultado)){   

	 echo "<td><img src='../producto/$row[0]'width='150' height ='150' ></td>";
}  


}


$NuevaConexion->cerrarConexion();












 ?>