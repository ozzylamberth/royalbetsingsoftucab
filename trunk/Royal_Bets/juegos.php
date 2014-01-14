<?php require_once('./modulos/header.php'); ?>
<?php require_once('./BD/Mesa/juegos_extraer.php'); ?> 
<?php //require_once('./BD/Mesa/carrito.php'); ?>
<?php //require_once('./BD/Mesa/actualizarcarrito.php')?>
    <body>

                   <?php  if (session_status() !== PHP_SESSION_ACTIVE) {
                        session_start();
                        }
                    ?>
         <script type='text/javascript'>
            <?php
                $php_array = array('abc','def','ghi');
                $js_array = json_encode($_SESSION['carrito']);
                $js_juegos = json_encode($_SESSION['juegos']);
                        echo "var javascript_array = ". $js_array . ";";
                        echo "var juegos = ". $js_juegos . ";";
            ?>
                
                var lineaTexto="";
                var array;
                lineaTexto = javascript_array.toString();
                
                array = lineaTexto.split(",");
                
            </script>     
        <script>
            var arreglobd=[2];
            for(i=0;i<2;i++){
                arreglobd[i]=[];
            }
            
            for(i=0,cont=0;i<juegos;i++){
                for(j=0;j<2;j++,cont++){
                    arreglobd[j][i] = array[cont];                   
                }
            }
            
            function actualizar(){
                var monto=0;
                document.getElementById('total').value =  "";
                document.getElementById('montoTA').value = "";
                document.getElementById('equiposTA').value = ""; 
                for (i=0; i<juegos; i++){
                    document.getElementById('equiposTA').value += arreglobd[0][i] + '\r\n';
                    document.getElementById('montoTA').value += arreglobd[1][i] + " Bs." + '\r\n';
                    monto += parseFloat(arreglobd[1][i]);
                    document.getElementById('total').value =  monto.toString();  
                }
            }
            
       
        function seleccion(cantidad){
                var txt="";
                var txt2="";
                var total=0;
                for(cont=1; cont <= cantidad ;cont++){
                    var id_L="L"+cont;
                    var id_V="V"+cont; 
                    var id_C="C"+cont; 
                    if ((document.getElementById(id_L).checked) || (document.getElementById(id_V).checked)){
                            if (document.getElementById(id_L).checked) {
                                arreglobd[0][juegos]=document.getElementById(id_L).value; 
                                arreglobd[1][juegos]=document.getElementById(id_C).value;
                                txt += arreglobd[0][juegos] + '\r\n'; 
                                txt2 += arreglobd[1][juegos] + " Bs." + '\r\n';
                                total += parseFloat(arreglobd[1][juegos]);                               
                                $.ajax ({
                                        type: "POST",
                                        url: "./BD/Mesa/actualizarcarrito.php" ,
                                        data: { equipo: arreglobd[0][juegos], costo: arreglobd[1][juegos]}

                                    }).done(function(msg){      });
                                    juegos++;
                            }else{ 
                                arreglobd[0][juegos]=document.getElementById(id_V).value; 
                                arreglobd[1][juegos]=document.getElementById(id_C).value; 
                                txt += arreglobd[0][juegos] + '\r\n'; 
                                txt2 += arreglobd[1][juegos] + " Bs." + '\r\n';
                                total += parseFloat(arreglobd[1][juegos]); 
                                $.ajax ({
                                        type: "POST",
                                        url: "./BD/Mesa/actualizarcarrito.php" ,
                                        data: { equipo: arreglobd[0][juegos], costo: arreglobd[1][juegos]}

                                    }).done(function(msg){      });
                                juegos++;
                            }         
                     }
                 } 
                    actualizar();
            }
        </script>

<?php 
    require_once('./modulos/navbar.php');
?>         

        
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Jugar!! </h1> <?php echo $_SESSION['juegos']; ?> 
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div> <!-- CHIKIIIITOOOOOO!!!! -->
    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-8"> 
         <div class="table-responsive"> 
             <!--<form>-->
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
                    <?php } ?>                 
                        <tr>
                                <td>
                                    <input type="radio" name="<?php echo $cont; ?>" id="L<?php echo $cont; ?>" value="<?php echo $array1[2]; ?>" required>
                                </td>
                                <td data-title="Local"><?php echo $array1[2]; ?></td>
                                <td><strong>vs.</strong></td>
                                <td data-title="Visitante" class="numeric"><?php echo $array1[3]; ?></td>
                                <td>
                                    <input type="radio" name="<?php echo $cont; ?>" id="V<?php echo $cont; ?>" value="<?php echo $array1[3]; ?>" required>
                                </td>
                                <td>
                                    <input type="numeric" id="C<?php echo $cont; ?>" placeholder="Bs." required>
                                </td>                                  
                        </tr> 
                         
                    <?php }if($cont!=0){ ?>      
                </tbody>         
            </table>            
            <div align="right">
                <button type="submit" class="btn btn-warning"  onclick="seleccion(<?php echo $cont ?>)">  Agregar al Carrito </button>                 
            </div>
            <!--</form>-->
     
                         <?php }else{  ?>
                 <div align='center'> <?php echo "NO HAY JUEGOS DISPONIBLES";?> </div> </table> <?php }?>  
            </div>
            <br>
            <div>
                <ul id="texto-alineado">
                    <li><strong>Equipos </strong></li>
                    <li><strong>Monto De Apuesta </strong></li>
                    <li><strong>TOTAL</strong></li>
                    <textarea id="equiposTA" cols="80" rows="4" disabled="disabled"></textarea>
                    <textarea id="montoTA" cols="80" rows="4" disabled="disabled"></textarea>
                    <textarea id="total" cols="80" rows="4" disabled="disabled"></textarea>
                </ul> 
            </div> 
        </div>

          <script>
              actualizar();
             

          </script>

<?php require_once('./modulos/sidebar.php'); ?>           
          
      </div>

      <hr>

<?php require_once('./modulos/footer.php'); ?> 
      
      
    </div> <!-- /container -->
<?php require_once('./modulos/scriptjs.php'); ?> 
    
    </body>
</html>
