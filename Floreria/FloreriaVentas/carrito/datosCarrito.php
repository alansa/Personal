<html> 	
<?php $titulo = "Mi carrito";	?>

	<div id="derecha">
		<h1>Productos seleccionados</h1>
	<div class='text-border'>

<?php

	$ext = array();
	$row = array();
	$sumTotal = array();
	$pilaTotal = array();
	$x = 0;
//CONEXIÓN A BD 
	
	include("bd/conexion.php");


	$NuevaConexion = new BD;
	$NuevaConexion->Conexion(); 
	$NuevaConexion->Consulta("SELECT * FROM carrito");
	$Resultado = $NuevaConexion->getResultado();

//MOSTRAR CARRITO
	echo "<br></br>";
	echo "<table border=0 cellspacing=0 cellpadding=0 width='800'>";
	echo "<tr>";
	echo "<th align='left'>Nombre del producto</th>";
	echo "<th align='left'>Cantidad</th>";
	echo "<th align='left'>Precio Unitario</th>";
	echo "<th align='left'>SubTotal</th>";

	while ($row = mysql_fetch_row($Resultado)){

		$ext=$row;
		//$row[1]=1;
		echo "<tr>";   
    	echo "<td align='center'>$row[3]</td>";  
    	echo "<td align='center'>$row[1]";
		echo "<td align='center'>$row[2]";

		$pilaTotal[] = ($row[1]*$row[2]);

		echo "<td align='center'> $pilaTotal[$x]"; $x++;
		echo "<td>
		      <form align='center' action='carrito/eliminarArreglo.php'
    		   method='post'>
			  <input  type=' text'  name=' id'  size=' 7' 
			   style='visibility:hidden' value='".$id =$row[0]."'>
			  <br><button  type=' submit' size='0' name='eliminar' onclick='vaciar_carrito()'>Eliminar</button >
			  </form>
			  </td>";
    	echo "</tr>";
    }


    $sumTotal = array_sum($pilaTotal);

    echo "</tr>";
	echo "<td colspan='5'><hr></td>";
	echo "<tr></tr>";
	echo "<tr>";
	echo "<td align='right' colspan='4'><br><br>Total = $sumTotal </b></td>";
	echo "</tr>";


//VALIDAMOS DATOS EN TABLA CARRITO
	if ($ext==NULL) {
//BOTON COMPRAR
		echo "<tr>";
		echo "<td align='right' colspan='6'>
		      <button type='submit' name='pagar' onclick='pagar()'>Pagar</button>
			  </td>";
		echo "</tr>";
	}
//SI NO ESTA VACIA, NOS PERMITIRÁ EL INGRESO A SECCIONPAGO
	 
	 else{
//BOTON COMPRAR
	 	echo "<tr>";
		echo "<td align='right' colspan='4'>
		      <a href='seccionPago.php?op=". $sumTotal."'><input type='button' value='Pagar' /></a>

			  </td>";
		echo "</tr>";
	}
	
		echo "</table>";


//METODO ONCLICK SE EJECUTARÁ SOLO CUANDO LA TABLA ESTE VACIA
		echo "<script language='JavaScript'>

				function pagar(){
					alert('Usted no ha agregado ningun arreglo a carrito');
				}

			  </script>";

?>

<script src="inicio/tabla.js"></script>

</div> <!-- Cierro text-border -->
</div> <!-- Cierro derecha -->


</html>