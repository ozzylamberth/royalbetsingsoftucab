<?php require_once('../BD/admin/extJuegos.php'); ?>
 
e<?php require_once('./modulos/header.php'); ?> 


   
<?php require_once('./modulos/navbar.php'); ?> 

<script>
    
    function agregarRE(){
     document.getElementById('agregarRE').style.display = 'block';
}
   

    window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
  
   
 document.getElementById('agregarRE').style.display = 'none';
}
    </script>
 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Gestión de Juegos</h1>
        <p>Cree, consulte, edite y borre los juegos del sistema fácilmente.</p>
        <!--<p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>-->
      </div>
    </div>
<br>
  

      <!-- Example row of columns -->
     
   <div class="row">
       <div class="col-lg-12">
          <div class="row" > 
            <div class="panel-default" >
                <div class="panel-heading">
                    <h3 class="panel-title" align="center">Formulario</h3>
                </div>
                <div class="panel-body" >
               
            
         <div class="table-responsive" align="center">   
          
          
             <table class="table table-bordered" align="center" >
                 
                 

<div class="datagrid">
    
    <table id="tablepaging" class="table table-bordered" align="center">
   
            <thead>
                        <tr>
                                
                                <th>Id</th>
                                <th>Logro</th>
                                <th>Informacion</th>
                                <th>Logro</th>   
                                <th>Resultado</th>  
                                <th>Estado</th>   
                                <th>Fecha Inicio</th> 
                                <th>Hora Inicio/fin</th> 
                               
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
                                $global;

                 ?>
               
    
                        <tr>
                                <td data-title="Id" class="numeric"> <div align="center"> <?php echo $array [0]; ?></td>
                                <td data-title="Logro" class="numeric"> <div align="center"> <?php echo $array [4]; ?></td>
                                <td data-title="Informacion"> <div align="center"> <?php echo $array [2]; echo " ";  echo $vari; echo " ";  echo $array [3]; ?>  </td>
                                <td data-title=" Logro" class="numeric"> <div align="center"> <?php  echo $array [5]; ?></td>              
                                <td data-title="Resultado" class="numeric" > <div align="center"> <?php   echo $array [6]; echo " "; echo "-"; echo ""; echo $array[7];  ?> </td >                 
                                <td data-title="Estado" > <div align="center"> 
                                    <?php 
                                if($array [14]==1){
                                    $global="Activo";                        
                                }else{$global="Terminado";} 
                                echo $global; ?></td>
                                <td data-title="Fecha Inicio" class="date"> <div align="center"> <?php echo $array [8]; ?></td>
                                <td data-title="Hora Inicio/Fin" class="time"> <div align="center"> <?php echo $array [10]; echo "/"; echo $array [11];?></td>
                            <!--    <td data-title="equis" class="date"> <div align="center"> <a href ="juegos.php?array=  <?php  ?> "  class="btn btn-primary"> Entrar </a> </div> </td>            -->                    
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
  <a  class="btn btn-default" onclick="agregarRE()">Resultado</a>  
</div>
                 
     </div>  
           
           
       
         
      
     
       
            
                                    
        
      <div  id="agregarRE" class="container">
       <div class="col-lg-8">       

           <form role="f-orm" method="POST" action="../BD/admin/editarResultados.php?g=<?php echo $global; ?> ">

           <form role="form" method="POST" action="./points/editarResultados.php?errorCode=5&errorType=3&global">

                <div class="form-group">
                      
                    
                      <div class="col-md-20">
                   
                        <input title="Id de Juego" type="text" class="form-control" name="id" id="id" placeholder="Id de Juego" required>
                      </div>
                    
                  <label for="equipo1" class="col-md-20">
                    Resultados:
                  </label> 
                    
                   
                    
                     <div class="col-md-20">
                  
                        <input title="Primer Equipo" type="text" class="form-control" name="resul1" id="resul1" placeholder="Resultado" required>
                      </div>
                    
                      
                     <div class="col-md-20">
                      <input title="Segundo Equipo" type="text" class="form-control" name="resul2" id="resul2" placeholder="Resultado" required>
                    </div>
                     </div><br/><br/> 
                   
                    <div class="form-group">
               <div class="col-md-10">                                     
                  <div class="col-md-2">
                      <button type="submit" name="registrar" class="btn btn-info" >
                      Crear
                      </button>
                  </div>
                </div>
               </div> 
                  </form>    
                 </div> 
          
               </div>       
               </div>       
          
     

    


<?php require_once('../modulos/footer.php'); ?>       
      
    </div> <!-- /container -->
    
<?php require_once('../modulos/scriptjs.php'); ?>     
    
    </body>
</html>
<?php

