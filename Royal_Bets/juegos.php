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
            
            function actualizar(cantidad){          
                for(i=0;i<juegos;i++){      
                    for(cont=1; cont <= cantidad ;cont++){
                    var id_L="L"+cont;
                    var id_V="V"+cont;
                    var id_C="C"+cont;     
                        if(document.getElementById(id_L).value===arreglobd[0][i] || document.getElementById(id_V).value===arreglobd[0][i]){
                            if(document.getElementById(id_L).value===arreglobd[0][i]){
                                document.getElementById(id_L).disabled=true; 
                                document.getElementById(id_V).disabled=true;
                                document.getElementById(id_C).disabled=true;
                            }else{
                                document.getElementById(id_L).disabled=true; 
                                document.getElementById(id_V).disabled=true;
                                document.getElementById(id_C).disabled=true;
                            }
                        }
                    }                                                     
                } 
                calcularTotal();
            }
            
        function Borrar(){            
            for(i=0,remover=-1;i<juegos;i++){
                if(document.getElementById(i).checked){
                    remover = i;
                    for(j=i;j<juegos;j++){
                        for(k=0;k<2;k++){
                            arreglobd[k][j]=arreglobd[k][j+1];
                        }
                    }
                    $.ajax ({
                        type: "POST",
                        url: "./BD/Mesa/removercarrito.php" ,
                        data: { remover:remover }
                    }).done(function(msg){     });
                    
                    juegos--;
                    setTimeout("location.reload(true);",1);;
                }                   
            }
            if(remover===-1){
                window.alert("No existe el equipo");
            }                      
        }
        
        function delayer(){
            window.location = "BD/Mesa/cargarApuesta.php";
        }
        function validarCarrito(){
            if (confirm("¿Está seguro que las apuestas almacenadas en el carrito son correctas?. Si selecciona 'Aceptar' dichas apuestas se cargaran a su cuenta.")){
                setTimeout('delayer()', 1)
                
            }
        }
        
        function calcularTotal(){
            var total=0;
            for (i=0; i<juegos; i++){               
                total += parseFloat(arreglobd[1][i]);               
            } 
            document.getElementById('mTotal').innerHTML = total.toString() + " Bs.";
            
        }
        
        function seleccion(cantidad){
                for(cont=1; cont <= cantidad ;cont++){
                    var id_L="L"+cont;
                    var id_V="V"+cont; 
                    var id_C="C"+cont; 
                    if ((document.getElementById(id_L).checked) || (document.getElementById(id_V).checked) && (document.getElementById(id_C).value>0) && (document.getElementById(id_C).value<=999999)){
                            if (document.getElementById(id_L).checked) {
                                arreglobd[0][juegos]=document.getElementById(id_L).value; 
                                arreglobd[1][juegos]=document.getElementById(id_C).value;
                                    $.ajax ({
                                        type: "POST",
                                        url: "./BD/Mesa/actualizarcarrito.php" ,
                                        data: { equipo: arreglobd[0][juegos], costo: arreglobd[1][juegos]}

                                    }).done(function(msg){      });
                                    juegos++;                               
                            }else{ 
                                arreglobd[0][juegos]=document.getElementById(id_V).value; 
                                arreglobd[1][juegos]=document.getElementById(id_C).value; 
                                    $.ajax ({
                                        type: "POST",
                                        url: "./BD/Mesa/actualizarcarrito.php" ,
                                        data: { equipo: arreglobd[0][juegos], costo: arreglobd[1][juegos]}

                                    }).done(function(msg){      });
                                    juegos++;                                
                            }         
                     }else if (document.getElementById(id_C).value!== ""){
                         if(document.getElementById(id_C).value!==""){
                            window.alert("Ingreso un monto inválido");
                            document.getElementById(id_C).value = "";    
                         }
                    }
                 } 
                    setTimeout("location.reload(true);",1);     
                    
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
    </div> 
    
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
                                <td data-title="Local" ><?php echo $array1[2]; ?></td>
                                <td><strong>vs.</strong></td>
                                <td data-title="Visitante" ><?php echo $array1[3]; ?></td>
                                <td>
                                    <input type="radio" name="<?php echo $cont; ?>" id="V<?php echo $cont; ?>" value="<?php echo $array1[3]; ?>" required>
                                </td>
                                <td>
                                    <input title="Máx. 999999999" type="numeric" id="C<?php echo $cont; ?>" placeholder="Bs." required>
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
         <?php if($_SESSION['juegos']!=0){ ?>
        <div class="table-responsive"> 
             <!--<form>-->
             <table class="table table-bordered" style="width: 400px;"> 
                 <strong style='padding-left: 110px ;'>Equipos</strong>
                 <strong style='padding-left: 125px ;'>Monto</strong> 
              <?php
                    $conta=0;
                    for ($i=0; $i<$_SESSION['juegos']; $i++){
                              $contCa=0;
                              $conta++;                    
                 ?>       
                 <tbody>
                     <tr>
                        <td align="center" style="width: 50px; ">
                            <input id="<?php echo $i; ?>" type="radio" required/>   
                            </td>
                            <td align="center" style="width: 80px; "> <?php echo $_SESSION['carrito'][$i][0]; ?></td>
                            <td align="right" style="width: 50px; "><?php echo $_SESSION['carrito'][$i][1]." Bs."; ?></td>                                 
                        </tr> 
  
                    <?php } ?>   
                 </tbody>       
            </table>            
          </div>
          <strong>Total</strong>
            <div id='mTotal' align='left' style='border: 1px solid #dddddd; width: 150px; height: 25px;'>
                
            </div>
          <br>
          
            <div align="left">               
                <button id="botonApostar"  class="btn btn-warning" onclick="validarCarrito()"> Apostar </button>                                
                <button id="remover"  class="btn btn-warning" onclick="Borrar()"> Remover del Carrito </button>                       
            </div>
          
         <?php }?>   
         </div>
          
          <script> actualizar(<?php echo $cont ?>);  </script>

<?php require_once('./modulos/sidebar.php'); ?>           
          
      </div>

      <hr>

<?php require_once('./modulos/footer.php'); ?> 
      
      
    </div> <!-- /container -->
<?php require_once('./modulos/scriptjs.php'); ?> 
    
    </body>
</html>
