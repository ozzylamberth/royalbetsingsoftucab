<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#"><img src=" ../img/roya100.png">RoyalBets</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
          <li><a href="#">Menu 1</a></li>
          <li><a href="#">Menu 2</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestión<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Mesas</a></li>
            <li><a href="juegos.php#">Juegos</a></li>            
            <li><a href="#">Apuestas</a></li>
            <li><a href="">Consumos</a></li>
            <li><a href="#">Moneda virtual</a></li>     
          </ul>
        </li>
      </ul>
        
        
        <?php 
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();

            }
            
            if(isset($_SESSION['username'])){
        ?> 
        
                    <!-- <form class="navbar-form navbar-right">
                        
                        <div class="form-group">
                            <h4>Bienvenido </h4>
                        </div>
                        <div class="form-group">
                          <a href="cuenta.php" > </a>
                        </div>
                        
                        
                        
                    </form>   -->  
                    
                    <p class="navbar-text navbar-right">Bienvenid@ <a href="cuenta.php" class="navbar-link"><?php echo $_SESSION['nombre']; echo' '; echo $_SESSION['apellido'];?></a>
                        
                      
                        <a class="btn btn-xs btn-danger" href="scripts/usuarios/cerrarsesion.php" role="button">Cerrar sesión</a>
                    
                    </p>
                        
        <?php 
            }else{
                
        ?>        
                    <form class="navbar-form navbar-right" action="scripts/usuarios/login.php" method="POST">
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control" required/>
                        </div>
                        <div class="form-group">
                          <input type="password" placeholder="Contraseña" name="pass" class="form-control" required/>
                        </div>
                        <button type="submit" class="btn btn-warning" >Entrar</button>
                        <a href="registro.php" class="btn btn-success">Registrar</a>
                    </form>                
        <?php 
            }
                
        ?>    
        

        
        
    </div><!--/.navbar-collapse -->
  </div>
</div>

<!-- Button trigger modal 
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>-->

<!-- Modal 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>
-->