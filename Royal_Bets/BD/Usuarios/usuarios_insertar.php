<?php
        echo 'entro <br/>';
        
        // Conexion
        include '../conexion.php';
        echo 'se conecto <br/>';

	// Recibe las Variables
	$firstname	= $_POST['firstname'];
	$lastname	= $_POST['lastname'];
        $cedula         = $_POST['cedula'];
        $emailaddress	= $_POST['emailaddress'];
        $password	= $_POST['password'];
        $sex    	= $_POST['sex'];
        $nacimiento	= $_POST['nacimiento'];
        $country	= $_POST['country'];
        //$city   	= $_POST['city'];
        $telefono	= $_POST['telefono'];
        $direccion	= $_POST['direccion'];
        echo "Nombre: $firstname <br/>";
        echo "Apellido: $lastname <br/>";
        echo "Cedula: $cedula<br/>";
        echo "Cedula: $emailaddress<br/>";
        echo "password: $password<br/>";
        echo "fecha de nacimento: $nacimiento<br/>";
        echo "pais: $country<br/>";
        echo "telefono: $telefono<br/>";
        echo "direccion: $direccion<br/>";
	// SQL
	$query = mysql_query("INSERT INTO usuarios
                                    (
                                    Ci,Nombre,Apellido,Correo,Password,Sexo,Fecha_de_nacimiento,Pais,Telefono,Direccion
                                    )
                                    VALUES
                                    (
                                    '$cedula','$firstname','$lastname','$emailaddress','$password','$sex','$nacimiento','$country','$telefono','$direccion'
                                    )
                            ");
        if(!$query){
            echo 'Error al insertar un usuario';
        }else
            echo 'guardo';
	// Redireccion
	//header('location:index.php');	

?>