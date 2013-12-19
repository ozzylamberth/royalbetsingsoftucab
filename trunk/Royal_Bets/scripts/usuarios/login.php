<?php

    session_start();

    echo 'entro <br/>';

    // Conexion
    include '../../BD/conexion.php';
    echo 'se conecto <br/>';
    
    // Recibe las Variables
    $email	= $_POST['email'];
    $pass	= $_POST['pass'];
    $nombre;
    $apellido;
    
    if(isset($email) && !empty($email) &&
    isset($pass) && !empty($pass)){
        
        $sel=mysql_query("SELECT Correo,Password,Nombre,Apellido FROM Usuarios WHERE Correo='$email' ",$conex);
        if(mysql_num_rows($sel)){
            
            $sesion=mysql_fetch_array($sel);

            if($pass==$sesion['Password']){
                $_SESSION['username']=$email;
                $_SESSION['nombre']=$sesion['Nombre'];
                $_SESSION['apellido']=$sesion['Apellido'];
                echo "correo coincide";
            }else{
                echo "Password incorrecto";
            }
        }else{
            echo "Usuario incorrecto";
        } 
        
    }else{
        echo "Debe llenar ambos campos";
    }
    
    header("Location:../../index.php");

?>