e<?php require_once('./modulos/header.php'); ?> 

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <?php require_once('../modulos/scriptjs.php'); ?> 
<?php require_once('./modulos/navbar.php'); ?> 
        
        

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        
        
   <div class="container">
        <h1>Area administrativa</h1>
        <p>Bienvenido al área administrativa, este sitio solo puede ser visualizado por el personal autorizado por el administrador.  </p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-3">
          <h2>Inicio del sitio</h2>
          <p>En este momento está ubicado en el área administrativa, si desea volver a la parte visible por los usuarios, presione "Salir" en el menú superior.</p>
          <img src=" ../img/guia.png">
        </div>  
          <h2>Herramientas</h2>
        <div class="col-lg-9">     
            
            <div class="col-lg-3">
              <h4>Gestión de Mesas</h4>
              <img src=" ../img/mesa.png">
              <p><br><?php  echo "<a class='btn btn-default' href='gestionmesas.php'> Ir &raquo; </a>"; ?></p>
            </div>
            <div class="col-lg-3">
              <h4>Gestión de Juegos</h4>
              <img src=" ../img/juegos.png">
              <p><br><?php echo "<a class='btn btn-default' href='juegos.php'> Ir &raquo; </a>"; ?></p>
            </div>
             <div class="col-lg-3">
              <h4>Gestión de Apuestas</h4>
              <img src=" ../img/apuesta.png">
              <p><br><?php echo "<a class='btn btn-default' href='validarApuestas.php'> Ir &raquo; </a>"; ?></p>
            </div>
            <div class="col-lg-3">
              <h4>Gestión de Moneda V.</h4>
              <img src=" ../img/moneda.png">
              <p><br><?php echo "<a class='btn btn-default' href='editar_saldo.php'> Ir &raquo; </a>"; ?></p>
            </div>
        </div>
      </div><!--

      --><hr>

<footer align="center">
     <!--<img src="img/boot.png">-->
   <div class="col-md-8">
    <img src="../img/foobar.png" align="center">
    </div>
</footer>
      
      
    </div> <!-- /container -->

    
    
    </body>
</html>
