<script src="js/main.js"></script>

<?php   
        // Conexion
        
        include './conexion.php';
        
        include './notf_jugadores.php';     

	// Recibe las Variables
        
        
        
        $re1         = $_POST['resul1']; 
        $re2	= $_POST['resul2'];
        $id3= $_POST['id'];
        $e=0;
        
        
       
       if ($re1>$re2) { $resultado=0;} else {$resultado=1;}
	
       proc_apuesta ($id3,$resultado); 
       
        
        if ( !resul1 || !resul2 || !id3 ){
            header("Location:../juegos.php");   
            echo'entra todo';
        }else{
           

               // SQL
	$query = mysql_query("UPDATE Juegos
						SET
							Resultado1 = '$re1',
							Resultado2 = '$re2',
                                                        Estado = '$e'
                                                           
                                                            
						WHERE
							Id 	='$id3'
						");
	
                if(!$query){
                    echo 'Error al insertar un producto';
                }else{
                    echo 'Guardo Correctamente';
                }
                
                
                // Redireccion
                header("Location:../juegos.php?errorCode=5&errorType=3");	
              
                
            }
        
?>


