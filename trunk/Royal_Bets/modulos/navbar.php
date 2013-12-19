<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="index.php"><img src=" img/roya100.png">RoyalBets</a>
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
        
        
        <?php 
            session_start();
            
            if(isset($_SESSION['username'])){
                
        ?> 
        
                    <form class="navbar-form navbar-right">
                        
                        <div class="form-group">
                            <h4>Bienvenido </h4>
                        </div>
                        <div class="form-group">
                          <a href="registro.php" ><?php echo $_SESSION['nombre']; echo' '; echo $_SESSION['apellido'];?></a>
                        </div>
                        <a class="btn btn-xs btn-warning" href="scripts/usuarios/cerrarsesion.php" role="button">Cerrar sesión</a>
                    </form>            
        <?php 
            }else{
                
        ?>        
                    <form class="navbar-form navbar-right" action="scripts/usuarios/login.php" method="POST">
                        <div class="form-group">
                            <input type="text" placeholder="Email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                          <input type="password" placeholder="Contraseña" name="pass" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-warning">Entrar</button>
                        <a href="registro.php" class="btn btn-success">Registrar</a>
                    </form>                
        <?php 
            }
                
        ?>    
        

        
        
    </div><!--/.navbar-collapse -->
  </div>
</div>
