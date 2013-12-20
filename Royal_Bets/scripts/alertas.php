<?php
if(isset($_GET['errorCode']) && isset($_GET['errorType'])){
    $nroError=$_GET['errorCode'];
    $tipoError=$_GET['errorType'];
    
    //echo "Nro error: ".$nroError ." ";
    //echo "Tipo error: ".$tipoError;

    
    //Agregar en el switch los errores que hagan falta
    
    
    switch ($nroError) {
        case 1:
            $error = "Error: Usuario incorrecto";
            break;
        case 2:
            $error = "Error: Password incorrecto";
            break;
        case 3:
            $error = "Error al logearse, intentelo mas tarde";
            break;
        case 4:
            $error = "Debes iniciar sesión para poder continuar";
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
               <?php echo $error; ?>  
            </div>
<?php
            break;
        case 2: //info
?>
            <div class="alert alert-info alert-dismissable">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <?php echo $error; ?>  
            </div>
<?php
            break;
        case 3: //Success
?>
            <div class="alert alert-success alert-dismissable">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <?php echo $error; ?>  
            </div>
<?php
            break;
        case 4: //Warning
?>
            <div class="alert alert-warning alert-dismissable">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <?php echo $error; ?>  
            </div>
<?php
            break;        
    }   
}
?>