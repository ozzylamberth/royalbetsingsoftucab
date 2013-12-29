<?php require_once('./modulos/header.php'); ?>
<?php require_once('./BD/Mesa/juegos_extraer.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

       
<?php 
    require_once('./modulos/navbar.php');
?>         
    
        
        
        
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Jugar!! <?php echo $idmesa; ?> </h1>
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
                <div align="center" id="titulo"><strong>Descripción De Los Juegos</strong></div>
                <tbody align="center">
                      
               <?php 
                  while ($registro1= mysql_fetch_row($datosjuegos)){
                            $contador1=0;
                                foreach ($registro1 as $clave1){
                                 $array1[$contador1]= $clave1;  
                                 $contador1++;
                                }
                                
                 ?>
                        <tr>
                            <form>
                                <td> 
                                    <input type="radio" name="<?php echo $array1[0]; ?>" id="<?php echo $array1[0]; ?>">
                                </td>
                                <td data-title="Descripcion"><?php echo $array1[2]; ?></td>
                                <td><strong>vs.</strong></td>
                                <td data-title="Deporte" class="numeric"><?php echo $array1[3]; ?></td>
                                <td>
                                    <input type="radio" name="<?php echo $array1[0]; ?>" id="<?php echo $array1[0]; ?>">
                                </td>
                            </form>                                   
                        </tr>                                                                                                       
                    <?php } ?>                                                                               
                        
                </tbody>         
            </table>
             <div align="right"> <a class="btn btn-warning">Apostar</a> </div>
         
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
