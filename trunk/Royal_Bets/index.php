<!DOCTYPE html>
<html lang="es">
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
        <link rel="stylesheet" href="css/carousel.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src=" img/roya100.png">RoyalBets</a>       
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
    
<!--    
    <div class="jumbotron">
      <div class="container">
        <h1>Royal Bets</h1>
        <p>Alguna info...</p>
        <p><a class="btn btn-primary btn-lg">Apostar, Ahora! &raquo;</a></p>
      </div>
    </div>
-->
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
            <img src="img/vanp3.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Bienvenido/a!</h1>
              <p>apostar ahora es más rápido, confiable y sencillo...</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/money.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Juega Ahora!</h1>
              <p>vive, disfruta y gana...</p>
              <p><a class="btn btn-lg btn-warning" href="#" role="button">Apostar</a></p>
            </div>
          </div>
        </div>
        <div class="item">
            <img src="img/f1.jpg" alt="Third slide">-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Conoce tus resultados</h1>
              <p>Sé el primero...</p>
              <p><a class="btn btn-lg btn-warning" href="#" role="button">Resultados</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    
    <!-- /.carousel -->

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
          <div class="col-lg-8">
            <div class="col-lg-4">
              <h2>Fútbol</h2>
              <img src=" img/futbol3.jpg">
              <p><br><a class="btn btn-default" href="#">Apostar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <h2>Beísbol</h2>
              <img src=" img/beisbol.jpg">
              <p><br><a class="btn btn-default" href="#">Apostar &raquo;</a></p>
           </div>
            <div class="col-lg-4">
              <h2>Baloncesto</h2>
              <img src=" img/nba.jpg">
              <p><br><a class="btn btn-default" href="#">Apostar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <h2>NHL</h2>
              <img src=" img/nfl.jpg">
              <p><br><a class="btn btn-default" href="#">Apostar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
              <h2>Tenis</h2>
              <img src=" img/tenis.jpg">
              <p><br><a class="btn btn-default" href="#">Apostar &raquo;</a></p>
           </div>
            <div class="col-lg-4">
              <h2>GP</h2>
              <img src=" img/gp.jpg">
              <p><br><a class="btn btn-default" href="#">Apostar &raquo;</a></p>
           </div>              
              
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
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.js"><\/script>')</script>

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
