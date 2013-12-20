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
          <p>Saldo actual: 0.00</p>
          <p>Historial de apuestas</p>
          <p>Historial de transacciones</p>
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
