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

    <div class="jumbotron">
      <div class="container" >
        <h1>Consumos </h1>
        <p>Esta área es permite añadir los consumos del cliente. Es necesario rellenar los siguientes campos:</p>
      </div>
    </div> 
    
<div class="row">  
    <div class="panel-default">
        <div class="panel-heading">
          <h3 class="panel-title" align="center">Formulario</h3>
        </div>
        <div class="panel-body">
            <?php require_once('../scripts/alertas.php'); ?>
            
            <form role="form" method="POST" action="../BD/admin/agregarConsumo.php">           
                <div class="form-group">
                  <label for="id_usr" class="col-md-2">
                    C.I de Usuario:
                  </label>
                  <div class="col-md-5">
                      <input title="Introduzca la cédula" type="text" class="form-control" name="id_usr" id="id_usr" placeholder="V-12345678" required>
                  </div><br/><br/>
                </div>

                <div class="form-group">
                  <label for="producto" class="col-md-2">
                    Producto:
                  </label>
                  <div class="col-md-5">
                      <input title="Introduzca el identificador del producto" type="text" class="form-control" name="producto" id="producto" placeholder="123456" required>
                  </div><br/><br/>
                </div>
                
                <div class="form-group">
                  <label for="monto" class="col-md-2">
                    Monto:
                  </label>
                  <div class="col-md-5">
                      <input title="Monto del producto" type="text" class="form-control" name="monto" id="monto" placeholder="Moneda virtual" required>
                  </div><br/><br/>
                </div>
          
        </div>
    </div>
</div>
    
    
<div class="row">
  <div class="col-md-2">
  </div>                  
  <div class="col-md-3">
      <button type="submit" name="cargar" class="btn btn-info" onclick="">
      Cargar
      </button>
  </div>
</div>
