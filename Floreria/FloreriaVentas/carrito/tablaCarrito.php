<?php

//	session_start();
//	$_SESSION['pilaSesion'] = $_REQUEST['pilaPhp'];
//	$pilaTmp = $_SESSION['pilaSesion'];
	$pilaTmp = $_REQUEST['pilaPhp'];


	$a = "";											//Declaramos la variable donde se almacenara el query
	$longitud = count($pilaTmp);						//saco el numero de elementos
	for($i=0; $i<$longitud; $i++) {                     //Recorro todos los elementos
		$a .= "idArreglo= $pilaTmp[$i] or ";           //saco el valor de cada elemento
	}
	$a .= "idArreglo= -1";


	include("../bd/conexion.php");
	$NuevaConexion = new BD;
	$NuevaConexion->Conexion();

	$NuevaConexion->Consulta("SELECT * FROM arreglo WHERE ".$a." ");
	$Resultado = $NuevaConexion->getResultado();
		

	while(($row = mysql_fetch_row($Resultado))){
///*
		$NuevaConexion->Consulta("SELECT idArreglo FROM carrito WHERE idArreglo = ".$row[0]." ");
		$idRepetido = $NuevaConexion->getResultado();
		$repetido = mysql_fetch_row($idRepetido);
//*/
		$NuevaConexion->Consulta("SELECT * FROM carrito ");
		$vacio = $NuevaConexion->getResultado();	
///*
		if (!($row[0] == $repetido[0])) {
			$NuevaConexion->Consulta("INSERT INTO carrito(idArreglo, cantidad, precio, nombreArreglo) 
										   VALUES ('$row[0]','1','$row[7]','$row[1]')");}
//*/
		if ($vacio == null) {
			$NuevaConexion->Consulta("INSERT INTO carrito(idArreglo, cantidad, precio, nombreArreglo) 
										   VALUES ('$row[0]','1','$row[7]','$row[1]')");}
		}

	$NuevaConexion->cerrarConexion();
?>