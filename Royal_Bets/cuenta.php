<?php require_once('./scripts/solicitarLogin.php'); ?> 

<?php require_once('./modulos/header.php'); ?> 

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
<?php require_once('./modulos/navbar.php'); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!--<div class="jumbotron">
      <div class="container">
        <h1>Cuenta!!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div> 
    </div>-->

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <br/><br/>
      <div class="col-lg-8">
        <?php require_once('./scripts/alertas.php'); ?>   
        <div class="col-lg-8">
            <h2>Historiales</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#saldo" data-toggle="tab">Red</a></li>
                            <li><a href="#alertas" data-toggle="tab">Alertas <span class="badge"><?php echo getNroMensajes($tablaMensajes,$_SESSION['ci']); ?></span></a></li>
                            <li><a href="#transacciones" data-toggle="tab">Transacciones</a></li>
                            <li><a href="#apuestas" data-toggle="tab">Apuestas</a></li>
                        </ul>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="saldo">
                                <h3>Saldo</h3>
                                <span class="label label-success"><?php echo getSaldo(); ?>   Bsf</span>
                            </div>
                            <div class="tab-pane" id="alertas">
                                <h3>Alertas</h3>
                                <p>orange orange orange orange orange</p>
                                
<div class="table-responsive">                                
<table id="tablepaging" class="table table-bordered" align="center">
    <thead>
        <tr> 
            <th>Name </th>
            <th>Major </th>
            <th>Sex </th>
            <th>English </th>
            <th>Tamil </th>
            <th>Calculus </th>
            <th>Geometry </th>
        </tr>
    </thead>
<tbody>
    <tr>
        <td>Student01 </td>
        <td>Languages </td>
        <td>M </td>
        <td>80 </td>
        <td>70 </td>
        <td>75 </td>
        <td>80 </td>
    </tr> 
    <tr>
        <td>Student02 </td>
        <td>Languages </td>
        <td>M </td>
        <td>80 </td>
        <td>70 </td>
        <td>75 </td>
        <td>80 </td> 
    </tr>

    <tr>
    <td>Student01 </td>
    <td>Languages </td>
    <td>M </td>
    <td>80 </td>
    <td>70 </td>
    <td>75 </td>
    <td>80 </td>
    </tr> 
    <tr>

    <td>Student02 </td>
    <td>Languages </td>
    <td>M </td>
    <td>80 </td>
    <td>70 </td>
    <td>75 </td>
    <td>80 </td> 
    </tr>

    <tr>
    <td>Student01 </td>
    <td>Languages </td>
    <td>M </td>
    <td>80 </td>
    <td>70 </td>
    <td>75 </td>
    <td>80 </td>
    </tr> 
    <tr>

    <td>Student02 </td>
    <td>Languages </td>
    <td>M </td>
    <td>80 </td>
    <td>70 </td>
    <td>75 </td>
    <td>80 </td> 
    </tr>

    <tr>
    <td>Student01 </td>
    <td>Languages </td>
    <td>M </td>
    <td>80 </td>
    <td>70 </td>
    <td>75 </td>
    <td>80 </td>
    </tr> 
    <tr>

    <td>Student02 </td>
    <td>Languages </td>
    <td>M </td>
    <td>80 </td>
    <td>70 </td>
    <td>75 </td>
    <td>80 </td> 
    </tr>

    <tr>
    <td>Student01 </td>
    <td>Languages </td>
    <td>M </td>
    <td>80 </td>
    <td>70 </td>
    <td>75 </td>
    <td>80 </td>
    </tr> 
    <tr>

    <td>Student02 </td>
    <td>Languages </td>
    <td>M </td>
    <td>80 </td>
    <td>70 </td>
    <td>75 </td>
    <td>80 </td> 
    </tr>

    <tr>
    <td>Student01 </td>
    <td>Languages </td>
    <td>M </td>
    <td>80 </td>
    <td>70 </td>
    <td>75 </td>
    <td>80 </td>
    </tr> 
    <tr>

    <td>Student02 </td>
    <td>Languages </td>
    <td>M </td>
    <td>80 </td>
    <td>70 </td>
    <td>75 </td>
    <td>80 </td> 
    </tr>


</tbody> 
</table> 
    
</div>
                                
<div id="pageNavPosition" style="padding-top: 20px" align="center">
</div>
                                
<script type="text/javascript">
    var pager = new Pager('tablepaging', 5);
    pager.init();
    pager.showPageNav('pager', 'pageNavPosition');
    pager.showPage(1);
</script>
                                
                            </div>
                            <div class="tab-pane" id="transacciones">
                                <h3>Historial de transacciones</h3>
                                <p>orange orange orange orange orange</p>
                            </div>
                            <div class="tab-pane" id="apuestas">
                                <h3>Historial de apuestas</h3>
                                <p>orange orange orange orange orange</p>
                            </div>            
                        </div>
                </div>
            </div>        
        </div>
        <div class="col-lg-8">
            
          <h2>Configuración</h2>
          <p><a href="#" data-toggle="modal" data-target="#modalClave">Cambio de clave</a></p>
      

<!-- Modal cambio de clave -->
<div class="modal fade" id="modalClave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Cambio de clave</h4>
      </div>
      <div class="modal-body">          
          
        <form role="form" method="POST" action="scripts/usuarios/cambioClave.php"> 
            <div class="form-group">
              <label for="claveActual" class="col-md-2">
                Clave actual:
              </label>
              <div class="col-md-10">
                  <input title="Clave actual" type="password" class="form-control" name="claveActual" id="firstname" placeholder="Clave Actual" required>
              </div><br/><br/>
            </div>
            
            <div class="form-group">
              <label for="claveNueva" class="col-md-2">
                Clave nueva:
              </label>
              <div class="col-md-10">
                  <input title="Clave nueva" type="password" class="form-control" name="claveNueva" id="firstname" placeholder="Clave nueva" required>
              </div><br/><br/>
            </div>
            
            <div class="form-group">
              <label for="claveNueva2" class="col-md-2">
                Confirme su clave nueva:
              </label>
              <div class="col-md-10">
                  <input title="Clave nueva" type="password" class="form-control" name="claveNueva2" id="firstname" placeholder="Clave nueva" required>
              </div><br/><br/>
            </div>  
            
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
        </form> 
        
        
        
      </div>

    </div>
  </div>
</div>
          
        </div>
          

   
          
      </div>      
          
<?php require_once('./modulos/sidebar.php'); ?>           
          
          
      </div>

      <hr>

<?php require_once('./modulos/footer.php'); ?> 
      
      
    </div> <!-- /container -->        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<?php require_once('./modulos/scriptjs.php'); ?>     
    
    </body>
</html>
