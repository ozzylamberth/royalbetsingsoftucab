<script src="js/main.js"></script>
<?php   
        // Conexion
        include '../conexion.php';

	// Recibe las Variables
	$firstname	= $_POST['firstname'];
	$lastname	= $_POST['lastname'];
        $cedula         = $_POST['cedula'];
        $emailaddress	= $_POST['emailaddress'];
        $password	= $_POST['password'];
        $password2	= $_POST['password2'];
        $sex    	= $_POST['sex'];
        $nacimiento	= $_POST['nacimiento'];
        $country	= $_POST['country'];
        $city   	= $_POST['city'];
        $telefono	= $_POST['telefono'];
        $direccion	= $_POST['direccion'];
        
        // Nacimiento del usuario
        list($diaU, $mesU, $anioU)=explode('/',$nacimiento);
        // Fecha Actual
        $fecha = date("d/m/Y");
        list($dia, $mes, $anio)=explode('/',$fecha);
        // Hora Actual
        $datos_tiempo = date("g-i-A"); 
        list($hour, $minuto, $ampm)=explode('-',$datos_tiempo);
        $hora = $hour.":".$minuto." ".$ampm;        // Hora actual
        
        // Verifica si la Ci ingresada existe en la base de datos
        $queryCI = mysql_num_rows(mysql_query("SELECT * FROM Usuarios WHERE Ci='$cedula'"));
        
        if($queryCI > 0){    // Si la Ci existe
            header("Location:../../registro.php?errorCode=8&errorType=1");
        }else{      // Si la Ci no existe
            
            if (($anio-$anioU)<18){     // Si es menor a 18 
                header("Location:../../registro.php?errorCode=7&errorType=1");
            }else{      // Si es mayor a 18

                if (!$firstname || !$lastname || !$cedula || !$emailaddress || !$password || !$password2 || !$sex || !$nacimiento || !$country || !$city || !$telefono || !$direccion){
                    header("Location:../../registro.php?errorCode=5&errorType=4");
                }else{      // Si todos los campos estan llenos
                    if($password == $password2){   

                        // SQL
                        $query = mysql_query("INSERT INTO Usuarios
                                                    (
                                                    Ci,Nombre,Apellido,Fecha_de_nacimiento,Telefono,Pais,Direccion,Sexo,Password,Correo,Ciudad
                                                    )
                                                    VALUES
                                                    (
                                                    '$cedula','$firstname','$lastname','$nacimiento','$telefono','$country','$direccion','$sex','$password','$emailaddress','$city'
                                                    )
                                            ");

                        if(!$query){
                            echo 'Error al insertar un usuario';
                        }else
                            echo 'Guardo Usuario Correctamente';

                        $queryt =  mysql_query("INSERT INTO Transacciones
                                                    (
                                                    Ci,Tipo_de_transaccion,Monto,Saldo,Fecha,Hora
                                                    )
                                                    VALUES
                                                    (
                                                    '$cedula','Iniciar','0','0','$fecha','$hora'
                                                    )
                                              ");

                        if(!$queryt){
                            echo 'Error al crear Transaccion';
                        }else
                            echo 'Guardo Transaccion Correctamente';

                        // Redireccion
                        header("Location:../../registro.php?errorCode=5&errorType=3");	
                    }else{
                        header("Location:../../registro.php");
                    }
                }
            }
        }
?>
