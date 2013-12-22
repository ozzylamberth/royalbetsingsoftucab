<?php
include('../Usuarios/conexion.php');

$consultajuegos= "SELECT FROM * juegos";

$datosjuegos= mysql_query($consultajuegos,$conex) or die ("<p> No se ha podido ejecutar"
        . "la consulta, compurebe que la sintaxis sea correcta. <p>");

mysql_close();




