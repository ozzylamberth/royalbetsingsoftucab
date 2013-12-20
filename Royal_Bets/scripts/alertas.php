<?php
if(isset($_GET['errorCode']) && isset($_GET['errorType'])){
    $nroError=$_GET['errorCode'];
    $tipoError=$_GET['errorType'];

    
    //Agregar en el switch los errores que hagan falta
    
    
    switch ($nroError) {
        case 1:
            $error = "Usuario incorrecto";
            break;
        case 2:
            $error = "Password incorrecto";
            break;
        case 3:
            $error = "Login error, intentelo mas tarde";
            break;
    }
    
    
    
?>

<?php

    //NO TOCA DE AQUI PARA ABAJO!

    switch ($tipoError) {
        case 1: //Danger         
?>
            <div class="alert alert-danger alert-dismissable">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <strong>Error!</strong> <?php echo $error; ?>  
            </div>
<?php
            break;
        case 2: //info
?>
            <div class="alert alert-info alert-dismissable">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <strong>Error!</strong> <?php echo $error; ?>  
            </div>
<?php
            break;
        case 3: //Success
?>
            <div class="alert alert-success alert-dismissable">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <strong>Error!</strong> <?php echo $error; ?>  
            </div>
<?php
            break;
        case 4: //Warning
?>
            <div class="alert alert-warning alert-dismissable">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <strong>Error!</strong> <?php echo $error; ?>  
            </div>
<?php
            break;        
    }   
}
?>