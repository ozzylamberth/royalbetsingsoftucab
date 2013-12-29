<?php
$host	= "localhost";
	$db	= "royalbetsbd";
	$user	= "root";
	$password = "";

	// Abrir la Conexión
	$conex=@mysql_connect("$host","$user","$password");

	if(!$conex)
	{
		echo "Error al Intentar Conectarse con la Base de Datos";
		exit();
	}

	// Elegir una Base de Datos
	if(!@mysql_select_db("$db",$conex))
	{
		echo "No se pudo conectar correctamente con la Base de datos";
		exit();
	}
if(!isset($_SESSION['username'])){        
    $idmesa = $_GET['array'];
    
    
    
    $consultajuegos= "SELECT * FROM juegos WHERE $idmesa";
    $datosjuegos= mysql_query($consultajuegos,$conex) or die ("<p> No se ha podido ejecutar"
        . "la consulta, compurebe que la sintaxis sea correcta. <p>");
}else{
    echo "El ID de mesa es incorrecto, deje de modificarlo por el url";
}

mysql_close();




