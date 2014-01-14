<?php
 
    
include(dirname(dirname(__FILE__)).'/conexion.php');
 if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
  $juegos=0;
  $carrito=array();
  for($i=0;$i<10;$i++){ 
      $carrito[$i]=array(); 
  }    
 $_SESSION['carrito'] = $carrito; 
 $_SESSION['juegos'] = $juegos;
  
  
  
  
 // header("Location:../../juegos.php?array=$cantidad");    




 
?>
