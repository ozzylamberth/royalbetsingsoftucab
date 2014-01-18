<?php

      //Transacciones   
        include'./realizar_transaccion.php';
        require_once('../modulos/navbar.php');

      //Parametros pasados por editar_saldo.php
        $cedula         = $_POST['cedula'];
        $monto    	= $_POST['monto'];
        $transaccion	= $_POST['transaccion'];
        $ciAdmin        = $_SESSION['ci'];
        
        
        
      //La   
        if ($transaccion == "Retiro") {
           $monto=$monto*(-1); 
        }
       
      //La Funcion para procesar las transacciones procesa deposito como monto positivo
      //  y retiro como monto negativo por lo que no lee realmente si es un deposito o un retiro 
     $resp=getChangeSaldo($cedula,$transaccion,$monto);     
         
      switch ($resp) {
    case 0:
        $mensaje='No se encontro al usuario en la base de datos' ;
        break;
    case 1:
        $mensaje='El Monto que se desea retirar es superior a su saldo actual' ;
        break;
    case 2:
        $mensaje='No se pudo realizar la transaccion por un error en la BD' ;
        break;
    case 3:
        $mensaje='La Trasaccion por un monto de '."$monto".' fue realizada exitosamente';
        break;
}  
       
      //Manda el mensaje al  
        $sql_msg_user = mysql_query("INSERT INTO Alertas (Ci, Mensaje)
                  VALUES ('$ciAdmin','$mensaje')"); 
         
      //Verifica el envio de los mensajes   
        if(!$sql_msg_user) {echo 'Error al mandar el mensaje usuario con la ci = '."$ciAdmin";}
      
      header("Location: ../../cuenta.php");  
        
?>        