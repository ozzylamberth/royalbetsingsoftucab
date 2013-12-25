<?php

include '../conexion.php';

$nombreMesa	= $_POST['nombreMesa'];
$descripcion	= $_POST['descripcion'];
$deporte        = $_POST['deporte'];
$capacidad	= $_POST['capacidad'];

//$id = "SELECT Id FROM Mesas WHERE Mesa='$nombreMesa'";
$query = "SELECT * FROM Mesas WHERE Mesa='$nombreMesa'";
$datos = mysql_query($query,MYSQL_ASSOC);
$renglon = mysql_fetch_row($datos);
$id = $renglon['Id'];

//echo $id;*/

$sql="UPDATE Mesas SET Mesa='$nombreMesa', Descripcion='$descripcion', Deporte='$deporte', Capacidad='$capacidad' WHERE Id='$id'";
mysql_query($sql);


header("Location:../../gestionmesas.php");
?>

?>