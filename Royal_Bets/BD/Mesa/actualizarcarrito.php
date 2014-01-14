<?php  
      if (session_status() !== PHP_SESSION_ACTIVE) {
                        session_start();
                        }
                   
        $equipo= "".$_POST["equipo"];
        $_SESSION['carrito'][$_SESSION['juegos']][0]=$_POST["equipo"]; 
        $_SESSION['carrito'][$_SESSION['juegos']][1]=$_POST["costo"]; 
         

        echo "equipo: ".$_SESSION['carrito'][$_SESSION['juegos']][0]." costo: ".$_SESSION['carrito'][$_SESSION['juegos']][1];
        $_SESSION['juegos']++;
?>