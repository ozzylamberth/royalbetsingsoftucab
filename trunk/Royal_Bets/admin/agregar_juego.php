e<?php require_once('./modulos/header.php'); ?> 

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
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
       <div class="col-lg-8">
                
                    
           
           <form role="form" method="POST" action="../BD/admin/nuevojuego.php">  
               
                <div class="form-group">
                    
                  <label for="equipo1" class="col-md-2">
                    Primer equipo:
                  </label>  
                     <div class="col-md-10">
                  
                        <input title="Introduzca el nombre del primer equipo" type="text" class="form-control" name="equipo1" id="equipo1" placeholder="Equipo" required>
                      </div>
                    
                        <label for="logro1" class="col-md-2">
                    Logro:
                  </label>   
                     <div class="col-md-3">
                      <input title="Valor del equipo" type="text" class="form-control" name="logro1" id="logro1" placeholder="#" required>
                    </div>
                     </div><br/><br/>
              

               
                <div class="form-group">
                     <div class="col-md-10">
                  <label for="equipo2" class="col-md-2">                     
                    Segundo equipo:
                  </label>
                      <input title="Introduzca el nombre del segundo equipo" type="text" class="form-control" name="equipo2" id="equipo2" placeholder="Equipo" required>
                 <label for="logro2" class="col-md-2">
                    Logro:
                  </label>   
                      <input title="Valor del equipo" type="text" class="form-control" name="logro2" id="logro2" placeholder="#" required>
                
                     
                     </div><br/><br/>
                </div> 
                     
                     
                     
              
                
               
                <div class="form-group">
                  <div class="col-md-10">
                  <label for="fechaini" class="col-md-2">
                    Fecha de inicio:
                  </label>
                      <input title="Introduzca la fecha de inicio" type="date" class="form-control" name="fechaini" id="fechaini" required>
                  </div><br/><br/>
                </div>               
                
                <div class="form-group">
                  <div class="col-md-10">
                  <label for="fechafin" class="col-md-2">
                    Fecha de final:
                  </label>
                 
                      <input title="Introduzca la fecha de finalizacion" type="date" class="form-control" name="fechafin" id="fechafin" required>
                  </div><br/><br/>
                </div>
          
          

                <div class="form-group">
                   <div class="col-md-10">
                  <label for="horaini" class="col-md-2">
                    Hora de inicio:
                  </label>
                 
                      <input title="Introduzca la hora de inicio" type="time" class="form-control" name="horaini" id="horaini" placeholder="Time" required>             
                  </div><br/><br/>
                </div>
                
            
                <div class="form-group">
                      <div class="col-md-10">
                  <label for="horafin" class="col-md-2">
                    Hora de fin:
                  </label>
              
                      <input title="Introduzca la hora de finalizacion" type="time" class="form-control" name="horafin" id="horafin" placeholder="Time" required>                  
                  </div><br/><br/>
                </div>
                     
                       <div class="form-group">
                     <div class="col-md-10">
                  <label for="min" class="col-md-2">                     
                    Monto Minimo:
                  </label>
                      <input title="Monto minimo a apostar" type="text" class="form-control" name="min" id="min" placeholder="$" required>
                 <label for="max" class="col-md-2">
                    Monto Maximo:
                  </label>   
                      <input title="Monto Maximo a apostar" type="text" class="form-control" name="max" id="max" placeholder="$" required>
                
                     
                     </div><br/><br/>
                </div> 
                
               <div class="form-group">
                               
                    <div class="col-md-10">
                      <label for="sex" class="col-md-2">
                        Estado:
                    </label>
                        <label class="radio">
                            <input type="radio" name="estado" id="Estado" value="dis" required>
                            Disponible
                        </label>
                        <label class="radio">
                            <input type="radio" name="estado" id="Estado" value="esp" required>
                            En Espera
                        </label>
                    </div><br /><br />
                </div>    
           
                 <div class="form-group">
               <div class="col-md-10">                                     
                  <div class="col-md-2">
                      <button type="submit" name="registrar" class="btn btn-info">
                      Crear
                      </button>
                  </div>
                </div>
               </div>
              </form> 
             
      

     
       
                  
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



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

