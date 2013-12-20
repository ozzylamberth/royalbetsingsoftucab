<?php
$errortype = $_GET['error'];
if($errortype){
    

    switch ($errortype) {
        case 1:
            $error = "Usuario incorrecto";
            break;
        case 2:
            $error = "Password incorrecto";
            break;
    }

?>

    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Error!</strong> <?php echo $error; ?>  
    </div>

<?php
}
?>