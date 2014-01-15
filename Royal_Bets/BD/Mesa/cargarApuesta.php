<script>           
        function delayer(){
            window.location = "./login.php";
        }
        function validarCarrito(){
                setTimeout('delayer()', 1);          
        }
    validarCarrito();   
</script>

<?php
    include(dirname(dirname(__FILE__)).'/conexion.php');
    
    if(isset($_SESSION['username'])){  //Subimos a la base de datos
        
    }else{  //Logeamos y despues subimos a la base de datos
        
    }
        
    
 ?>

	
