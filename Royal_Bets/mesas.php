<?php require_once('./modulos/header.php'); ?>
<?php require_once('./BD/Mesa/Mesas_extraer.php'); ?>


    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
       
<?php require_once('./modulos/navbar.php'); ?>         

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Jugar!!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>

    
    
          
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
                                
                                <th>Mesa</th>
                                <th>Descripción</th>
                                <th>Deporte</th>
                                <th>Capacidad</th>
                                <th>Selección</th>
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
                                <td data-title="Mesa"> <?php echo $array [1]; ?>  </td>
                                <td data-title="Descripcion"><?php echo $array [2]; ?></td>
                                <td data-title="Deporte" class="numeric"><?php  echo $array [3]; ?></td>
                                <td data-title="Capacidad" class="numeric"><?php echo $array [4]; ?></td>
                                <td data-title="Capacidad" class="numeric"> <div align="center"> <a href ="juegos.php?array=<?php echo $array[0]; ?>"  class="btn btn-primary"> Entrar </a> </div> </td>                                
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


     </div>       
            
        
          

      
    
      
            
            
            
<?php require_once('./modulos/sidebar.php'); ?>           
          
      </div>

      <hr>

<?php require_once('./modulos/footer.php'); ?> 
      
      
    </div> <!-- /container -->

<?php require_once('./modulos/scriptjs.php'); ?> 
    
    </body>
</html>
