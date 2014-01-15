<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "redirecting...";

$tam = count($_REQUEST);
//echo $tam;
$i = 0;
$pendiente= 0;
require_once("../conexion.php");
$sql="SELECT * from `Apuestas` WHERE `Estado`='$pendiente'";
$datos = mysql_query($sql);
        if (!$datos)
            echo "no entro bien x.x";
        
while ($renglonConsulta = mysql_fetch_assoc($datos)){
    $id = $renglonConsulta['Id'];
    $Ci = $renglonConsulta['Id_user'];
    $sqlSaldo = "SELECT Id,Saldo FROM `Transacciones` WHERE `Ci`='$Ci' ORDER BY Id DESC";
    $datosSaldo = mysql_query($sqlSaldo);
    if (!$datosSaldo)
            echo "no entro bien x.x con el saldo";
    
    $Array = mysql_fetch_assoc($datosSaldo);
    echo $Array['Saldo'];
    //echo $saldo."epale";
    if (isset($_REQUEST[$renglonConsulta['Id']]) and ($Array['Saldo'] >= $renglonConsulta['Monto']))
        $Estado = 1;
    else
        $Estado = -1;
    
    $sql = "UPDATE `Apuestas` SET `Estado`='$Estado' WHERE `Id`=$id";
    mysql_query($sql);
}

mysql_close();

header("Location: ../../admin/validarApuestas.php");
/*if (isset($_REQUEST['']))
  {
    $suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:".$suma."<br>";
  }
  if (isset($_REQUEST['check2']))
  {
    $resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
    echo "La resta es:".$resta;
  }*/
?>

 