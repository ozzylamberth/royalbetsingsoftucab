<?php
    function getChangeSaldo($ci,$tran_type,$monto,$fecha,$hora){
        
        // Conexion
        include(__DIR__.'/conexion.php');
        
        //$ci=$_SESSION['ci'];
        
        
      //Busca el saldo del cliente  
        $sel0=mysql_query("SELECT Saldo FROM Transacciones WHERE Ci='$ci' ORDER BY Id DESC LIMIT 1 ",$conex);
       
    //Verifica busqueda de saldo    
      if(!$sel0){    echo 'Error al buscar cliente';}
       else  {
                  
         $arreglo=mysql_fetch_array($sel0);
        
     //Comprueb a que el monto a operar no sea mayor que el saldo en caso de un cobro o retiro    
        if ( $arreglo['Saldo'] <= ($monto*(-1)) ) { echo 'El Saldo del cliente no es suficiente para realizar esta operacion';}
         else {
         
           $saldo=$arreglo['Saldo']+$monto;
          
         //inserta la nueva fila de transacciones   
           $sql = "INSERT INTO Transacciones "."(Ci, Tipo_de_transaccion, Monto, Saldo, Fecha, Hora) ".
                  "VALUES " . "('$ci','$tran_type','$monto','$saldo','$fecha','$hora')";  
        
            $sel= mysql_query($sql, $conex);
         
          //Ultimo Comprobante para verificar que se halla realizado la transaccion correctamente  
            if(!$sel){    echo 'Error al procesar la Transaccion';}
             else  {echo 'Transaccion procesada correctamente';}
         }
       }  
    }        
?>        