<?php   
        // Conexion
        include '../conexion.php';

	// Recibe las Variables
	$firstname	= $_POST['firstname'];
	$lastname	= $_POST['lastname'];
        $cedula         = $_POST['cedula'];
        $emailaddress	= $_POST['emailaddress'];
        $password	= $_POST['password'];
        $sex    	= $_POST['sex'];
        $nacimiento	= $_POST['nacimiento'];
        $country	= $_POST['country'];
        $city   	= $_POST['city'];
        $telefono	= $_POST['telefono'];
        $direccion	= $_POST['direccion'];
        
        if (!$firstname || !$lastname || !$cedula || !$emailaddress || !$password || !$sex || !$nacimiento || !$country || !$city || !$telefono || !$direccion){
            header('location:index.php');            
        }else{
        
            echo "Nombre: $firstname <br/>";
            echo "Apellido: $lastname <br/>";
            echo "Cedula: $cedula<br/>";
            echo "Email: $emailaddress<br/>";
            echo "password: $password<br/>";
            echo "fecha de nacimento: $nacimiento<br/>";
            echo "pais: $country<br/>";
            echo "telefono: $telefono<br/>";
            echo "direccion: $direccion<br/>";

            // SQL
            $query = mysql_query("INSERT INTO usuarios
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
                echo 'Guardo Correctamente';

            // Redireccion
            header('location:./index.php');	
            header($string)
        }
?>
