<script src="js/main.js"></script>
<?php   
        // Conexion
        include '../conexion.php';

	// Recibe las Variables
        $equipo1         = $_POST['equipo1']; 
        $equipo2	= $_POST['equipo2'];
        $logro1         = $_POST['logro1'];
        $logro2         = $_POST['logro2'];
	$fechaini	= $_POST['fechaini'];
        $fechafin	= $_POST['fechafin'];
        $horaini	= $_POST['horaini'];
        $horafin	= $_POST['horafin'];
        $estado	        = $_POST['estado'];
        $min      	= $_POST['min'];
        $max            = $_POST['max'];
         
         
        
         
         if($estado=="dis"){
             $aux=1;
         }else{
             $aux=0;
         }
	
        
       
        
        if (!id || !producto || !monto ){
            header("Location:../../admin/agregar_juego.php");   
            echo'entra todo';
        }else{
           

                // SQL
                $query = mysql_query("INSERT INTO Juegos
                                            (
                                            Equipo1,Equipo2,logro1,logro2,Fecha_inicio ,Fecha_de_final ,Hora_de_inicio ,Hora_de_final,,Mini,Maxi,Estado
                                            )
                                            VALUES
                                            (
                                            '$equipo1','$equipo2','$logro1','$logro2','$fechaini','$fechafin','$horaini','$horafin','$min','$max','$aux'
                                            )
                                    ");

                if(!$query){
                    echo 'Error al insertar un producto';
                }else{
                    echo 'Guardo Correctamente';
                }
                
                
                // Redireccion
                header("Location:../../admin/agregar_juego.php?errorCode=5&errorType=3");	
              
                
            }
        
?>


