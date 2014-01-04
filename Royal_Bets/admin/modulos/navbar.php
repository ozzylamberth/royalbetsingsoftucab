<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="./index.php"><img src=" ../img/roya100.png">RoyalBets</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
          <li><a href="#">Menu 1</a></li>
          <li><a href="#">Menu 2</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestión<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Mesas</a></li>
            <li><a href="#">Juegos</a></li>            
            <li><a href="#">Apuestas</a></li>
            <li><a href="#">Consumos</a></li>
            <li><a href="#">Moneda virtual</a></li>     
          </ul>
        </li>
      </ul>
        
        
        <?php 
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();

            }
            
            if(isset($_SESSION['username']) && $_SESSION['permisos']==255){
        ?> 
                    
                    <p class="navbar-text navbar-right">Bienvenid@ <a href="cuenta.php" class="navbar-link"><?php echo $_SESSION['nombre']; echo' '; echo $_SESSION['apellido'];?></a>
                        
                      
                        <a class="btn btn-xs btn-danger" href="../scripts/usuarios/cerrarsesion.php" role="button">Cerrar sesión</a>
                        <a class="btn btn-xs btn-warning" href="../index.php" role="button">Salir</a>
                    </p>
                        
        <?php 
            }else{
                header("Location:./restringido.php");
            }   
        ?>        
        

        
        
    </div><!--/.navbar-collapse -->
  </div>
</div>
