e<?php require_once('./modulos/header.php'); ?> 

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
<?php require_once('./modulos/navbar.php'); ?> 
  

  <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-8">
         
            
            <form role="form" method="POST" action="../BD/admin/producto_ingresar.php">           
               
                <div class="form-group">
                  <label for="id" class="col-md-2">
                    Cliente:
                  </label>
                  <div class="col-md-10">
                      <input title="Introduzca la Cedula del cliente" type="text" class="form-control" name="id" id="cedula" placeholder="V-12345678" required>
                  </div><br/><br/>
                </div>                
     
                
                <div class="form-group">
                  <label for="producto" class="col-md-2">
                    Producto:
                  </label>
                  <div class="col-md-10">
                      <input title="Introduzca el nombre del producto" type="text" class="form-control" name="producto" id="firstname" placeholder="Nombre" required>
                  </div><br/><br/>
                </div>

                <div class="form-group">
                  <label for="monto" class="col-md-2">
                    Monto:
                  </label>
                  <div class="col-md-10">
                      <input title="Introduzca el costo del producto" type="text" class="form-control" name="monto" id="lastname" placeholder="$$" required>
                  </div><br/><br/>
                </div> 
                
             
                
                
                <div class="row">
                  <div class="col-md-2">
                  </div>                  
                  <div class="col-md-3">
                      <button type="submit" name="registrar" class="btn btn-info" >
                      Registrar
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