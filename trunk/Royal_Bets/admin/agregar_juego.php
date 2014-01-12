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
                      <input title="Introduzca el nombre del primer equipo" type="text" class="form-control" name="equipo1" id="firstname" placeholder="Equipo" required>
                  </div><br/><br/>
                </div>

                <div class="form-group">
                  <label for="equipo2" class="col-md-2">
                    Segundo equipo:
                  </label>
                  <div class="col-md-10">
                      <input title="Introduzca el nombre del segundo equipo" type="text" class="form-control" name="equipo2" id="lastname" placeholder="Equipo" required>
                  </div><br/><br/>
                </div> 
                
                <div class="form-group">
                  <br/><br/>
                  <label for="fechaini" class="col-md-2">
                    Fecha de inicio:
                  </label>
                  <div class="col-md-10">
                      <input title="Introduzca la fecha de inicio" type="date" class="form-control" name="fechaini" id="nacimiento" required>
                  </div><br/>
                </div>               
                
                <div class="form-group">
                  <br/><br/>
                  <label for="fechafin" class="col-md-2">
                    Fecha de final:
                  </label>
                  <div class="col-md-10">
                      <input title="Introduzca la fecha de finalizacion" type="date" class="form-control" name="fechafin" id="nacimiento" required>
                  </div><br/>
                </div>
          
          

                <div class="form-group">
                    <br/><br/>
                  <label for="horaini" class="col-md-2">
                    Hora de inicio:
                  </label>
                  <div class="col-md-10">
                      <input title="Introduzca la hora de inicio" type="time" class="form-control" name="horaini" id="password" placeholder="Time" required>             
                  </div><br/>
                </div>
                
            
                <div class="form-group">
                    <br/><br/>
                  <label for="horafin" class="col-md-2">
                    Hora de fin:
                  </label>
                  <div class="col-md-10">
                      <input title="Introduzca la hora de finalizacion" type="time" class="form-control" name="horafin" id="password" placeholder="Time" required>                  
                  </div><br/>
                </div>
                
               
           
                
                <div class="row">
                  <div class="col-md-2">
                  </div>                  
                  <div class="col-md-3">
                      <button type="submit" name="registrar" class="btn btn-info">
                      Crear
                      </button>
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

