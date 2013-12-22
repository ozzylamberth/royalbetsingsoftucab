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
        <div class="col-lg-8">
            <h2>Historiales</h2>
            <div class="panel panel-default">
                <div class="panel-body">
                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#saldo" data-toggle="tab">Red</a></li>
                            <li><a href="#alertas" data-toggle="tab">Alertas <span class="badge">42</span></a></li>
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
                                <span class="label label-success"><?php echo getSaldo(); ?>   Bsf</span>
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
          <p>Cambio de clave</p>
          <p>Cambio de correo</p>
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
