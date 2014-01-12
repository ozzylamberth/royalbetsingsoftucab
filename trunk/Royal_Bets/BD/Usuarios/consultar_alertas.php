<?php
    function getTablaMensajes($ci){
        // Conexion
        include(dirname(dirname(__FILE__)).'/conexion.php');
        
        $sel=mysql_query("SELECT Id,Ci,Mensaje,Leido FROM Alertas WHERE Ci='$ci'",$conex);
        //SELECT Saldo from Transacciones where Ci='V-24964467' order by Id desc limit 1
        
        $arreglo=mysql_fetch_array($sel);
        
        return $arreglo;
    } 
    
    function getNroMensajes($tablaMensajes,$Ci){ 
        $nroMensajes=0;
        while ($tablaMensajes){
            if($tablaMensajes['Ci']==$Ci && $tablaMensajes['Leido']==FALSE){
                $nroMensajes++;
            }
        }
        
        return $nroMensajes;
    }     
    
?>     