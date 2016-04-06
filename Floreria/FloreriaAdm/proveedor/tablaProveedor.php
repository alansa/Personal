<?php  
//tomamos los datos del archivo conexion.php  
include("bd/conexion.php");  
$NuevaConexion = new BD;


$NuevaConexion->Conexion(); 

$NuevaConexion->Consulta("SELECT * FROM proveedor");
$Resultado = $NuevaConexion->getResultado();

$NuevaConexion->cerrarConexion();

echo "Lista de Proveedores <br><br>";
echo "<div style='text-align:center;'>";
echo "<table width='100%' border='1' bordercolor='#0E69AE' >";  
echo "<tr>";  
echo "<th>Folio</th>";  
echo "<th>Empresa</th>";  
echo "<th>Nombre</th>";  
echo "<th>Paterno</th>";  
echo "<th>Materno</th>";  
echo "<th>Telefono</th>";  
echo "<th>Correo</th>";  
echo "<th>Direccion Fiscal</th>"; 
echo "<th>RFC</th>";  
echo "</tr>";  
while ($row = mysql_fetch_row($Resultado)){   
    echo "<tr>";  
    echo "<td>$row[0]</td>";  
    echo "<td>$row[1]</td>";  
    echo "<td>$row[2]</td>";  
    echo "<td>$row[3]</td>";  
    echo "<td>$row[4]</td>";  
    echo "<td>$row[5]</td>";
    echo "<td>$row[6] </td>";
	echo "<td>$row[7] </td>";
	echo "<td>$row[8] </td>";
    echo "</tr>";  
}  
echo "</table>";  
echo "</div>"; 

echo "<br><br><br>"
?> 
