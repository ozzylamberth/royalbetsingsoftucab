<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../conexion.php';

$m = $_GET['mesa'];

$inactivo= 0;

$sql="UPDATE `Mesas` SET `Estado`='$inactivo' WHERE `Mesa`='$m'";
mysql_query($sql);
echo $m;
mysql_close();
header("Location:../../gestionmesas.php");
?>