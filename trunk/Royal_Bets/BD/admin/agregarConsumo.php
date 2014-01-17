<?php
    include '../conexion.php';
    
        $id_usr = $_POST['id_usr'];
        $producto = $_POST['producto'];
        $monto = $_POST['monto'];

         if (!$id_usr || !$producto || !$monto){
            header("Location:../../consumo.php");   
            echo'Error';
         }
         else{
              $queryCI = mysql_num_rows(mysql_query("SELECT * FROM Usuarios WHERE Ci='$cedula'"));
        
             /* if($queryCI > 0){    // Si la Ci existe
                    header("Location:../../consumo.php?errorCode=8&errorType=1");
              }else{      // Si la Ci no existe
                    if (($anio-$anioU)<18){     // Si es menor a 18 
                        header("Location:../../consumo.php?errorCode=7&errorType=1");*/
             
                    //Consumo realizado
                     // SQL
                        $query = mysql_query("INSERT INTO Consumos
                                                    (
                                                    Id_User,Producto,Monto
                                                    )
                                                    VALUES
                                                    (
                                                    '$id_usr','$producto','$monto'
                                                    )
                                            ");

                        if(!$query){
                            echo 'Error al insertar un producto';
                        }else{
                            echo 'Guardo Correctamente';
                        }


                        // Redireccion
                //    header("Location:../../admin/consumos.php?errorCode=6&errorType=1");  
               }	
             // }

     //    }
    
 ?>
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

