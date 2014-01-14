<?php
include(dirname(dirname(__FILE__)).'/conexion.php');

if(!isset($_SESSION['username'])){        
    $idmesa = $_GET['array'];  
    $consultajuegos= "SELECT * FROM juegos WHERE id_mesa='$idmesa'";
    $datosjuegos= mysql_query($consultajuegos,$conex) or die ("<p> No se ha podido ejecutar"
        . "la consulta, compurebe que la sintaxis sea correcta. <p>");
}else{
    echo "El ID de mesa es incorrecto, deje de modificarlo por el url";
}
mysql_close();




