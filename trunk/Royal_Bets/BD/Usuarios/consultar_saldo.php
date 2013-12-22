<?php   
    function getSaldo(){
        // Conexion
        include '../conexion.php';
        $ci=$_SESSION['ci'];
        
        $sel=mysql_query("SELECT Saldo FROM Transacciones ORDER BY Id DESC WHERE Ci='$ci' ",$conex);
        //SELECT * FROM table ORDER BY Id DESC LIMIT 1;
        
        $arreglo=mysql_fetch_array($sel);
        
        $saldo=$arreglo['Saldo'];
        
        return $saldo;
    }        
?>        