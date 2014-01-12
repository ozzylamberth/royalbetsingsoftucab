<?php require_once('./modulos/header.php'); ?>
<?php require_once('./BD/Mesa/juegos_extraer.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <script> window.alert("<?php echo $GLOBALS['cont']; ?>");  </script>       
<?php 
    require_once('./modulos/navbar.php');
?>         
    
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
            <table class="table table-bordered">                
                <tbody align="center">
                <div align="center"><strong>Descripción De Los Juegos</strong></div>
                        <tr>
                                <td>
                                    <script>
                                        function activar()
                                        {
                                            if (!document.boton_activar.team1.disabled){
                                               document.money.money2.disabled = false;
                                            }else{
                                               document.money.money2.disabled = true; 
                                            } 
                                        }
                                    </script>
                                    <form name="boton_activar">
                                            <input type="radio"  name="team1" id="team1" onclick="activar()">
                                    </form>    
                                </td>
                                <td>Barcelona vs Real Madrid</td>
                                <td>
                                    <input type="radio" name="<?php echo $array1[0]; ?>" id="V<?php echo $array1[0]; ?>" value="<?php echo $array1[3]; ?>" > </input>
                                </td>
                                <td>Venezuela vs Colombia</td>
                                <td>
                                    <input type="numeric" id="C<?php echo $array1[0]; ?>"> </input>
                                </td>
                        </tr>
                </tbody>               
            </table>  
        </div> 

            <div class="table-responsive">   
                <table id="tabla2" class="table table-bordered">
                <div align="center"><strong>Apuestas Actuales</strong></div>
                    <tr> 
                        <th>Tipo De Juego</th>
                        <th>Descripción</th>
                        <th>Monto</th>
                    </tr> 
                <tbody>
                        <tr>
                                <td data-title="Code"> Parley </td>
                                <td data-title="Company">Barcelona vs. Madrid</td>
                                <td data-title="Price">                
                                    <div class="form-group">
                                        <div class="col-md-11">
                                            <form name="money">
                                                <input class="form-control" placeholder="Bs." name="money2" disabled> 
                                            </form>
                                        </div>
                                    </div>
                                </td>
                        </tr>
                        <tr>
                                <td> Directa </td>
                                <td>Manchester vs. Liverpool</td> 
                                <td>
                                    <div class="form-group">
                                        <div class="col-md-11">
                                            <input class="form-control" placeholder="Bs."> 
                                        </div>
                                    </div>
                                </td>    
                        </tr>
                        <tr>
                            <td></td>
                            <td data-title="Company"><strong>Total</strong></td>
                            <td data-title="Price"> Aquí el total </td>
                        </tr>
                </tbody>
                
            </table>            
            <textarea id="carrito" cols="80" rows="4" disabled="disabled">  </textarea> 
                         <?php }else{  ?>
                 <div align='center'> <?php echo "NO HAY JUEGOS DISPONIBLES";?> </div> </table> <?php }?>
            <div align="right">
                <button type="submit" class="btn btn-warning" onclick="seleccion(<?php echo $cont ?>)">Agregar al Carrito</button>                 
            </div>
         
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
