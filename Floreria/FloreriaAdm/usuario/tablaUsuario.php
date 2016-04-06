<?php  
//tomamos los datos del archivo conexion.php  
include("bd/conexion.php");  
$NuevaConexion = new BD;
$NuevaConexion->Conexion(); 

$NuevaConexion->Consulta("SELECT * FROM usuarios");
$Resultado = $NuevaConexion->getResultado();

$NuevaConexion->cerrarConexion();

echo "Lista de usuarios <br><br>";
echo "<div style='text-align:center;'>";
echo "<table width='100%' border='1' bordercolor='#0E69AE' >";  
echo "<tr>";  
echo "<th>ID</th>";  
echo "<th>NOMBRE</th>";  
echo "<th>PATERNO</th>";  
echo "<th>MATERNO</th>";  
echo "<th>TIPO</th>";  
echo "<th>USUARIO</th>";  
echo "<th>CONTRASEÑA</th>"; 
echo "</tr>";  

while($row = mysql_fetch_row($Resultado)){ 
   
    echo "<tr>";  
    echo "<td>$row[0] </td>"; 

    echo "<td>$row[1]
$row[2]</td>";  

    echo "<td>$row[2]
    </td>";  
    echo "<td>$row[3]</td>";  
    echo "<td>$row[4]</td>";  
    echo "<td>$row[5]</td>";
    echo "<td>$row[6] </td>";
    echo "</tr>";  
} 

echo "</table>";  
echo "</div>"; 

echo "<br><br><br>";
echo 
    "<script language='JavaScript'>

    
        function hacer_click(id)

	    {

	        alert(' Agregaste al carrito el producto ' + id);

	    }

    </script>";
    
?> 