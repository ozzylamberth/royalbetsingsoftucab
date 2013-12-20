<?php require_once('./modulos/header.php'); ?> 

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
<?php require_once('./modulos/navbar.php'); ?> 

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Únete a la comunidad</h1>
        <p>Para jugar con nosotros es necesario que crees una cuenta con nosotros primero. Por favor rellena los siguientes campos, lee los términos y condiciones, haz click en registrar y estarás listo para jugar en RoyalBets.com</p>
        <!--<p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>-->
      </div>
    </div>

<br>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-8">
            
            <form role="form" method="POST" action="BD/Usuarios/usuarios_insertar.php">
                <div class="form-group">
                  <label for="firstname" class="col-md-2">
                    Nombre:
                  </label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Nombre">
                  </div><br/><br/>
                </div>

                <div class="form-group">
                  <label for="lastname" class="col-md-2">
                    Apellido:
                  </label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellido">
                  </div><br/><br/>
                </div> 
                
                <div class="form-group">
                  <label for="cedula" class="col-md-2">
                    Cedula de identidad:
                  </label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="cedula" id="cedula" placeholder="V-12345678">
                  </div><br/><br/>
                </div>                
                
                <div class="form-group">
                  <label for="emailaddress" class="col-md-2">
                    Correo electrónico:
                  </label>
                  <div class="col-md-10">
                      <input type="email" class="form-control" name="emailaddress" id="emailaddress" placeholder="tunombre@tudominio.com">
                  </div><br/><br/>
                </div>

                <div class="form-group">
                  <label for="password" class="col-md-2">
                    Password:
                  </label>
                  <div class="col-md-10">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <p class="help-block">
                      Min: 6 caracteres (Solo alfanumerico)
                    </p>
                  </div><br/><br/>
                </div>
                
                <div class="form-group">
                                        <br/><br/>
                  <label for="password2" class="col-md-2">
                    Confirmar contraseña:
                  </label>
                  <div class="col-md-10">
                      <input type="password" class="form-control" name="password2" id="password2" placeholder="Password">

                  </div><br/><br/>
                </div>  
                
                <div class="form-group">
                    <label for="sex" class="col-md-2">
                        Sexo:
                    </label>
                    <div class="col-md-10">
                        <label class="radio">
                            <input type="radio" name="sex" id="sex" value="male" checked>
                            Hombre
                        </label>
                        <label class="radio">
                            <input type="radio" name="sex" id="sex" value="female">
                            Mujer
                        </label>
                    </div><br /><br />
                </div>    
                     
                <div class="form-group">
                  <br/><br/>
                  <label for="nacimiento" class="col-md-2">
                    Fecha de Nacimiento:
                  </label>
                  <div class="col-md-10">
                      <input type="date" class="form-control" name="nacimiento" id="nacimiento">
                  </div><br/>
                </div>
                
                <div class="form-group">
                  <br/><br/>
                  <label for="country" class="col-md-2">
                    País:
                  </label>
                  <div class="col-md-10">
                      <?php require_once('./modulos/paises-ciudades/paises.php'); ?>
                  </div><br/><br/>
                </div>
                
<!--
                <div class="form-group">
                  <label for="uploadimage" class="col-md-2">
                    Upload Image:
                  </label>
                  <div class="col-md-10">
                    <input type="file" name="uploadimage" id="uploadimage">
                    <p class="help-block">
                      Allowed formats: jpeg, jpg, gif, png
                    </p>
                  </div><br/><br/>
                </div>
-->
                <div class="form-group">
                  <label for="city" class="col-md-2">
                    Ciudad:
                  </label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" id="city" name="city" placeholder="Ciudad">
                  </div><br/><br/>
                </div>


                <div class="form-group">
                  <label for="direccion" class="col-md-2">
                    Dirección:
                  </label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                  </div><br/><br/>
                </div>


                <div class="form-group">

                  <label for="telefono" class="col-md-2">
                    Telefono:
                  </label>
                  <div class="col-md-10">
                      <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                  </div><br/><br/>
                </div>



                <div class="checkbox">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-10">
                    <label>
                        <input type="checkbox"><a href="./img/terminosycondiciones.pdf" target="_blank">Acepto los términos y condiciones</a></label>
                  </div><br/><br/>
                </div>

                <div class="row">
                  <div class="col-md-2">
                  </div>                  
                  <div class="col-md-3">
                      <button type="submit" name="registrar" class="btn btn-info">
                      Registrar
                    </button>
                  </div>
                    <br>
                    <br>
                </div>
              </form> 
        </div>

<?php require_once('./modulos/sidebar.php'); ?>           
          
      </div>

      <hr>


<?php require_once('./modulos/footer.php'); ?>       
      
    </div> <!-- /container -->
    
<?php require_once('./modulos/scriptjs.php'); ?>     
    
    </body>
</html>
