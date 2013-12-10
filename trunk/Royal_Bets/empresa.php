<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
    <style>
    #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 17,
    center: new google.maps.LatLng(8.297143, -62.712194)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
         <div class="navbar-header">
             <a class="navbar-brand" href="index.php"><img src=" img/roya100.png">RoyalBets</a>       
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
         <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="jugar.php">Jugar</a></li>
              <li><a href="cuenta.php">Cuenta</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Información<b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="informacion.php">¿Cómo jugar?</a></li>
                  <li><a href="informacion.php">¿Cómo apostar?</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">La Empresa</li>
                <li><a href="empresa.php">Quiénes somos</a></li>
                <li><a href="empresa.php">Contacto</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Contraseña" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Entrar</button>
            <button type="button" class="btn btn-success">Registrar</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Royal Bets</h1>
        <p>Es una empresa fundada 2013 por un grupo de jóvenes desarrolladores en el área de informática.<br> 
            Nuestra misión es ofrecerle confianza, seguridad y transparencia al cliente al momento de realizar sus transacciones.
        </p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-8">
            <h2>¿Quiénes somos?</h2>
          <p>
              Estudiantes de Ingeniería Informática.<br> 
              Universidad Católica Andrés Bello Extensión Guayana.
          </p>   
        </div>
        <div class="col-lg-8">
            <h2>Contacto</h2>
            <p>Email: royalbetsca@gmail.com<br>Teléfono: 0286-9235588<br><br> 
              <br>
              <div id="map-canvas" style="width: 100%; height: 400px;"></div>
          </p>
          
        </div>          
        <div class="col-lg-4">  
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Twitter</h3>
                </div>
                <div class="panel-body">
                  Aqui va Twitter
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Facebook</h3>
                </div>
                <div class="panel-body">
                  Aqui va facebook
                </div>
            </div>            
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Royal Bets | Diseño: HTML5</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>