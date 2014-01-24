<?php require_once('./BD/Usuarios/consultar_saldo.php'); ?>
<?php 

    require_once('./BD/Usuarios/cuenta.php'); 
    
?>


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
          <li><a href="mesas.php">Jugar</a></li>
          <li><a href="cuenta.php">Cuenta</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Información<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="dropdown-header">La Empresa</li>
            <li><a href="empresa.php">Quiénes somos</a></li>
            <li><a href="empresa.php">Contacto</a></li>
          </ul>
        </li>
      </ul>
        
        
        <?php 
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
            
            if(isset($_SESSION['username'])){
                $tablaMensajes=getTablaMensajes($_SESSION['ci']);
        ?> 
        
                    <!-- <form class="navbar-form navbar-right">
                        
                        <div class="form-group">
                            <h4>Bienvenido </h4>
                        </div>
                        <div class="form-group">
                          <a href="cuenta.php" > </a>
                        </div>
                        -->  
                        
                        
                    </form>     
                    
                    <p class="navbar-text navbar-right">Bienvenido <a href="cuenta.php" class="navbar-link"><?php echo $_SESSION['nombre']; echo' '; echo $_SESSION['apellido'];?></a>
                        
                        
                        <a class="btn btn-xs btn-success" href="./cuenta.php" role="button">Alertas <span class="badge"><?php echo $nroMensajes=getNroMensajes($tablaMensajes); ?></span></a>
                        <span class="label label-success">Saldo: <span class="badge"><?php echo getSaldo(); ?> Bsf</span></span>
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
