<script src="js/main.js"></script>
<?php   
        // Conexion
        include '../conexion.php';

	// Recibe las Variables
        $re1         = $_POST['equipo1']; 
        $re2	= $_POST['equipo2'];
     
        
         
       
	
        
       
        
        if (!id || !producto || !monto ){
            header("Location:../../admin/juegos.php");   
            echo'entra todo';
        }else{
           

               // SQL
	$query = mysql_query("UPDATE usuarios
						SET
							login 		= '$login',
							password	= '$password'
						WHERE
							login 		='$id_original'
						");
	
                if(!$query){
                    echo 'Error al insertar un producto';
                }else{
                    echo 'Guardo Correctamente';
                }
                
                
                // Redireccion
                header("Location:../../admin/juegos.php?errorCode=5&errorType=3");	
              
                
            }
        
?>


