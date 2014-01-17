<?php
        
      //Transacciones   
        include'./realizar_transaccion.php';
        
        

    function proc_apuesta ($id_juego,$resultado){   
                                         //resultado es el equipo que gano estos valores son 0 ó 1
      
     //Busca el juego   
       $sqlogros= mysql_query("SELECT * FROM Juegos WHERE Id='$id_juego' "); 
     
     //Asigna los logros a su correspondiente variable  
       $arreglo_logros=mysql_fetch_array($sqlogros); 
       $logro1= $arreglo_logros['logro1'];
       $logro2= $arreglo_logros['logro2'];
        
      //Busca las apuestas con el id del juego dado
        $sel0=mysql_query("SELECT * FROM Apuestas WHERE Id_juego='$id_juego' ");
       
    //Verifica la busqueda de las apuesta   
      if(!$sel0){    echo 'Error al buscar apuestas';}
       else  {
       
          while ( $arreglo=mysql_fetch_array($sel0) ) { //Bucle para usar todos los registros
             $id_user= $arreglo['Id_user']; //datos del campo id_user
             $equipo= $arreglo['Equipo']; //datos del campo equipo
             $monto_apostado= $arreglo['Monto']; //datos del campo monto
           //  $grupo= $arreglo['Grupo']; //datos del campo grupo
           
             if ( $equipo == $resultado ) {
                 sendnotify($id_user,0,$id_juego);       //notifica al usuario que gano
                  
                  $monto_pagar= calcular_monto($monto_apostado,$logro1,$logro2);   //calcula el monto a pagar
                  
                  getChangeSaldo($id_user,"Premio",$monto_pagar);     //realiza las transaccion del premio
               
             } else {
                sendnotify ($id_user,1,$id_juego);
               }
          }
         echo 'Apuestas Completamente procesadas'; 
       }  
    }       
    
  //Funcion encargada de mandar las notificaciones a los usuarios acerca del resultado de la apuesta
    function sendnotify ($ci,$resp,$id_juego){
      
      if ($resp==0) {
          $mensaje="Felicidades por haber ganado la apuesta del juego ".$id_juego.". "
                  . " El Dinero del premio a sido depositado a su cuenta. " ;
          
      } else { 
          $mensaje="La Apuesta del juego ".$id_juego." no la gano, pero no se desanime y siga intentado";
        }
       
      //Busca el saldo del cliente  
        $sql_msg_user = mysql_query("INSERT INTO Alertas (Ci, Mensaje)
                  VALUES ('$ci','$mensaje')"); 
         
      //Verifica el envio de los mensajes   
        if(!$sql_msg_user) {echo 'Error al mandar el mensaje usuario con la ci = '."$ci";}
    }
    
    
    
  //Funcion encargada de calcular los pagos de las apuestas segun los logros de los equipos  
    function calcular_monto ($monto_apostado,$logro1,$logro2){
        
        if ($logro1<0) {
            $pago= $monto_apostado * ( 1 + ( $monto_apostado / ($logro1*(-1))) ) * (1 + ($logro2 / $monto_apostado) );
       
        } else {
            $pago= $monto_apostado * ( 1 + ( $monto_apostado / ($logro2*(-1))) ) * (1 + ($logro1 / $monto_apostado) ); 
          }
        
      return $pago;  
    } 
?>        