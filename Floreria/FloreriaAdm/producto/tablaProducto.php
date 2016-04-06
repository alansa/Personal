<?php  
//tomamos los datos del archivo conexion.php  

$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 

$NuevaConexion->Consulta("SELECT * FROM producto");
$Resultado = $NuevaConexion->getResultado();



echo "Lista de Productos<br><br>";
echo "<div style='text-align:center;'>";
echo "<table width='100%' border='1' bordercolor='#0E69AE' >";  
echo "<tr>";  
echo "<th>Folio</th>";  
echo "<th>Producto</th>";  
echo "<th>Tipo de Producto</th>";  
echo "<th>Costo de compra</th>";  
echo "<th>Existencia</th>";   

echo "</tr>";  
while ($row = mysql_fetch_row($Resultado)){   
    echo "<tr>";  
    echo "<td>$row[0]</td>";  
    echo "<td>$row[1]</td>";  
    echo "<td>$row[2]</td>";  
    echo "<td>$row[3]</td>";  
    echo "<td>$row[4]</td>";


    echo "</tr>";  
}  
echo "</table>";  
echo "</div>"; 

echo "<br><br><br>";


$NuevaConexion->Consulta("SELECT * FROM arreglo");
$Resultado = $NuevaConexion->getResultado();

$NuevaConexion->cerrarConexion();


echo "Lista de Arreglos<br><br>";
echo "<div style='text-align:center;'>";
echo "<table width='100%' border='1' bordercolor='#0E69AE' >";  
echo "<tr>";  
echo "<th>Folio</th>";  
echo "<th>Arreglo</th>";  
echo "<th>Categoria</th>";  
echo "<th>Descripcion</th>";    
echo "<th>Precio</th>";   
echo "<th>Existencia</th>";   
echo "<th>Activo</th>";  
echo "<th>Top</th>"; 
echo "<th>Imagen</th>"; 
echo "</tr>";  
while ($row = mysql_fetch_row($Resultado)){   
    echo "<tr>";  
    echo "<td>$row[0]</td>";  
    echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";  

    echo "<td>El arreglo tiene forma de $row[5] contiene $row[4] $row[3] y tiene $row[6]</td>";
    echo "<td>$row[7]</td>";  
    echo "<td>$row[8]</td>";
        echo "<td>$row[10]</td>";  
    echo "<td>$row[11]</td>";
      echo "<td><img src='producto/$row[9]'width='150' height ='150' ></td>";

   


    echo "</tr>";  


}  
echo "</table>";  
echo "</div>"; 

echo "<br><br><br>"
?> 
