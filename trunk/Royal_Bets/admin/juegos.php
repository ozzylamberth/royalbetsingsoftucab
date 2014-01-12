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

               
            
         <div class="table-responsive">   
          
          
             <table class="table table-bordered" >
                 
                 

<div class="datagrid">
    
    <table id="tablepaging" class="table table-bordered" align="center">
   
            <thead>
                        <tr>
                                
                                <th>Equipo 1</th>
                                <th>Equipo 2</th>
                                <th>Logro 1</th>
                                <th>Logro 2</th>
                                <th>resul</th>
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

                 ?>
               
    
                        <tr>
                                <td data-title="Equipo 1"> <?php echo $array [2]; ?>  </td>
                                <td data-title="Equipo 2"><?php echo $array [3]; ?></td>
                                <td data-title="Logro 1" class="numeric"><?php  echo $array [4]; ?></td>
                                <td data-title="Logro 2" class="numeric"><?php echo $array [5]; ?></td>
                                <td data-title="resul" class="date"> <div align="center"> <a href ="juegos.php?array=<?php echo $array[6]; ?>"  class="btn btn-primary"> Entrar </a> </div> </td>                                
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

