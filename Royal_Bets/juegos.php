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
        <h1>Jugar!! </h1>
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
              <?php
                    $cont=0;
                    while ($registro1= mysql_fetch_row($datosjuegos)){
                              $contador1=0;
                              $cont++;
                              foreach ($registro1 as $clave1){
                                $array1[$contador1]= $clave1;  
                                $contador1++;
                              }
                              if($cont==1){  
                 ?>
              
                <div align="center" id="titulo"><strong>Descripción De Los Juegos</strong></div>
                <tbody align="center">
                    <form role="form" method="POST" action="">    <!-- form del submit boton apostar -->     
                    <?php } ?>                 
                        <tr>
                            <form>
                                <td> 
                                    <input type="radio" name="<?php echo $array1[0]; ?>" id="<?php echo $array1[0]; ?>">
                                </td>
                                <td data-title="Local"><?php echo $array1[2]; ?></td>
                                <td><strong>vs.</strong></td>
                                <td data-title="Visitante" class="numeric"><?php echo $array1[3]; ?></td>
                                <td>
                                    <input type="radio" name="<?php echo $array1[0]; ?>" id="<?php echo $array1[0]; ?>">
                                </td>
                            </form>                                   
                        </tr> 
                         
                    <?php }if($cont!=0){ ?>                                                                                                      
                </tbody>         
            </table>
             <div align="right"> <a type="submit" class="btn btn-warning">Apostar</a> </div>
             </form>
                          <?php }else{  ?>
                          <div align='center'> <?php echo "NO HAY JUEGOS DISPONIBLES";?> </div> </table> <?php }?>
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
