<?php require_once('../BD/admin/extJuegos.php'); ?>
e<?php require_once('./modulos/header.php'); ?> 


   
<?php require_once('./modulos/navbar.php'); ?> 

     
 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Administracion de juegos</h1>
        <p> hola administrador</p>
        <!--<p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>-->
      </div>
    </div>
<br>
  
  <div class="container">
      <!-- Example row of columns -->
       <div class="row">
           
           
                 <div class="col-lg-8">

               
            
         <div class="table-responsive" align="center">   
          
          
             <table class="table table-bordered" align="center" >
                 
                 

<div class="datagrid">
    
    <table id="tablepaging" class="table table-bordered" align="center">
   
            <thead>
                        <tr>
                                
                                <th>Logro</th>
                                <th>Informacion</th>
                                <th> Logro</th>   
                                <th>Resultado</th>  
                                <th>Estado</th>   
                                <th>equis</th>
                        </tr>
                        
                </thead>

               
<tbody>
    
    <?php      
               
             
                  while ($registro= mysql_fetch_row($datos)){
                      
                        $contador=0;
                        
                        $i=0;
                                foreach ($registro as $clave){

                                 $array[$contador]= $clave;  
                                 $contador ++;                        
                                } 
                                $vari = "vs";

                 ?>
               
    
                        <tr>
                                 <td data-title="Logro" class="numeric"> <div align="center"> <?php echo $array [4]; ?></td>
                                 <td data-title="Informacion"> <div align="center"> <?php echo $array [2]; echo " ";  echo $vari; echo " ";  echo $array [3]; ?>  </td>
                                <td data-title=" Logro" class="numeric"> <div align="center"> <?php  echo $array [5]; ?></td>
                                <td data-title="Resultado" class="numeric"> <div align="center"> <?php echo $array [6]; echo " "; echo "-"; echo ""; echo $array[7]; ?></td>
                                <td data-title="Estado" class="numeric"> <div align="center"> <?php echo $array [12]; ?></td>
                                <td data-title="equis" class="date"> <div align="center"> <a href ="juegos.php?array=<?php echo $array[6]; ?>"  class="btn btn-primary"> Entrar </a> </div> </td>                                
                        </tr>         
    
            <?php $i++; } ?>

</tbody>



    </table>

    
    <div id="pageNavPosition" style="padding-top: 20px" align="center">
</div>
                                
<script type="text/javascript">
    var pager = new Pager('tablepaging', 5);
    pager.init();
    pager.showPageNav('pager', 'pageNavPosition');
    pager.showPage(1);
</script>



    
</div>

           
      <div class="btn-group">
  <a  class="btn btn-default" href="./agregar_juego.php">Nuevo Juego</a>   
</div>
                 
     </div>  
           
           
           
         
      
     
       
                  
        
 <?php require_once('../modulos/sidebar.php'); ?>          
          
      </div>

      <hr>


<?php require_once('../modulos/footer.php'); ?>       
      
    </div> <!-- /container -->
    
<?php require_once('../modulos/scriptjs.php'); ?>     
    
    </body>
</html>
<?php

