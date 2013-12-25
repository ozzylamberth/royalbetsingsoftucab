<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../conexion.php';

$m = $_GET['mesa'];

$sql="DELETE FROM Mesas WHERE Mesa='$m'";
mysql_query($sql);


header("Location:../../gestionmesas.php");
?>