
<?php 
 class BD{

	var $conectar;
	var $resultado;
	var $query;
	var $NombreUsuario;

function getResultado()
    {
        return $this->resultado;
    }

function getNombre(){

	return $this->NombreUsuario;
}

function Conexion(){
//Conexion para servidor local
 // /*
	$nombreHost = "localhost";
	$nombreUsuario = "root";
	$pass = "";
  $nombreBD = "adminserviweb";
//*/


//conexion para conexion en linea
  /*
  $nombreHost = "db4free.net:3306";
  $nombreUsuario = "adminserviweb";
  $pass = "ingenet2015";
  $nombreBD = "adminserviweb";
  */

		if(!($this->conectar = mysql_connect($nombreHost,$nombreUsuario, $pass))) 
   			 die("Error: Posibles problemas en su conexion con la BD " .mysql_error());

 		 // Selecciona la base de datos 
 	    if(!mysql_select_db($nombreBD, $this->conectar)) 
   			 die("Error: No existe la base de datos".mysql_error());
}

function Consulta($consulta){
	 $this->query = $consulta;

	  // Sentencia SQL: muestra todo el contenido de la tabla 
 	
  // Ejecuta la sentencia SQL 
  	 $this->resultado = mysql_query($this->query, $this->conectar); 
  		if(!$this->resultado) 
    		die("Error: no se pudo realizar la consulta".mysql_error()." ");



}



 function setNombre(){

 	 while($fila = mysql_fetch_assoc($this->resultado))
$this->NombreUsuario = $fila['nombre'];

  	

  	// Libera la memoria del resultado
  	//mysql_free_result($this->resultado);
 }
function liberaMemoria(){
	mysql_free_result($this->resultado);
}
 function cerrarConexion(){

  // Cierra la conexión con la base de datos 
  	mysql_close($this->conectar);
 
}









}


  ini_set("error_reporting", E_ALL & ~E_DEPRECATED); 

	
 ?>
