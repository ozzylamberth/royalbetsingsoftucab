<script>
    window.alert("hol1a");
</script>

<?php
    
  
    header("Location:../../login.php");
    $hola = $_POST["equipo"];
    
    if(isset($_SESSION['username'])){
        header("Location:../../login.php");
    }else{
        header("Location:../../login.php");}
        
        echo "hola";
        ?>

	
