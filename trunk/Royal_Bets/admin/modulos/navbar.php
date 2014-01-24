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
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestión<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="gestionmesas.php">Mesas</a></li>
            <li><a href="juegos.php?filter=Todos">Juegos</a></li>            
            <li><a href="validarApuestas.php">Apuestas</a></li>
            <li><a href="Consumos.php">Consumos</a></li>
            <li><a href="editar_saldo.php">Moneda virtual</a></li>  
            <li><a href="permisosUsuarios.php">Permisos</a></li>
          </ul>
        </li>
      </ul>
        
        
        <?php 
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();

            }
            
            if(isset($_SESSION['username']) && $_SESSION['permisos']==255){
        ?> 
                    
                    <p class="navbar-text navbar-right">Bienvenido <a href="../cuenta.php" role="button"><?php echo $_SESSION['nombre']; echo' '; echo $_SESSION['apellido'];?></a>
                        
                      
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
