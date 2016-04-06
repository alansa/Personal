<?php  
//tomamos los datos del archivo conexion.php  

include("bd/conexion.php"); 

				
$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 

$NuevaConexion->Consulta("SELECT * FROM carrito");
$Resultado = $NuevaConexion->getResultado();

$NuevaConexion->cerrarConexion();

$i=0;

while ($row = mysql_fetch_row($Resultado)){ 
	$i++; 
	$arregloId[$i]=$row[0];

    }  

for ($j=0; $j<=$i; $j++) { 

	

}

$NuevaConexion->Conexion(); 


for ($k=1; $k < $j ; $k++) { 

	$ConsultaNueva = ("SELECT rutaImagen 
	FROM Arreglo WHERE idArreglo='$arregloId[$k]'");
	$NuevaConexion->Consulta($ConsultaNueva);
	$Resultado = $NuevaConexion->getResultado();

	echo "<br>";

	while ($row = mysql_fetch_row($Resultado)){ 
	
	$arregloDireccion[$k]=$row[0];

 }
}

for ($h=1; $h < $k ; $h++) { 
	
		echo "<td><img src='../FloreriaAdm/producto/$arregloDireccion[$h]'width='150' height ='150' ></td>";


}

$NuevaConexion->cerrarConexion();



				$NuevaConexion = new BD;
				$NuevaConexion->Conexion(); 
				$NuevaConexion->Consulta("SELECT * FROM carrito");
				$Resultado = $NuevaConexion->getResultado();
				$arreglo=$Resultado;
				$NuevaConexion->cerrarConexion();


		echo  '<table id="tabla">  ';
   		//echo "<th colspan='5'>Su pedido es el siguiente</th>";
		echo "<tr id=info >";		

	while ($arreglo = mysql_fetch_row($Resultado)) 
			{				
					echo "<td>";
					echo "<br>$arreglo[2]";
					echo "<br>$arreglo[3]";
					echo "</td>";				
			}
		echo"</tr>";			
		echo '</table>';



?> 