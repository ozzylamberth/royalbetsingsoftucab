<?php require_once('./modulos/header.php'); ?>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
       
<?php require_once('./modulos/navbar.php'); ?>         

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Jugar!!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-8">

            
         <div class="table-responsive">   
            <table class="table table-bordered">                
                <tbody align="center">
                <div align="center"><strong>Descripción De Los Juegos</strong></div>
                        <tr>
                                <td>
                                    <label>
                                        <input type="radio" name="team1" id="team1" value="local">
                                    </label>
                                </td>
                                <td>Barcelona vs Real Madrid</td>
                                <td>
                                    <label>
                                        <input type="radio" name="team1" id="team1" value="visitante">
                                    </label>
                                </td>
                        </tr>
                        <tr>
                                <td>                        
                                    <label>
                                        <input type="radio" name="team2" id="team2" value="local">
                                    </label>
                                </td>
                                <td>Venezuela vs Colombia</td>
                                <td>
                                    <label>
                                        <input type="radio" name="team2" id="team2" value="visitante">
                                    </label>
                                </td>
                        </tr>
                </tbody>               
            </table>
             
            <div class="table-responsive">   
            <table class="table table-bordered">

                <thead>
                    <div align="left"><strong>Apuestas Actuales</strong></div>
                        <tr> 
                            <th style="width: 20%;">Tipo De Juego</th>
                                <th style="width: 40%;">Descripción</th>
                                <th style="width: 25%;">Monto</th>
                        </tr>
                </thead>
                
                <tbody>
                        <tr>
                                <td data-title="Code"> Parley </td>
                                <td data-title="Company">Barcelona vs. Madrid</td>
                                <td data-title="Price">                
                                    <div class="form-group">
                                        <div class="col-md-11">
                                            <input class="form-control" placeholder="Bs."> 
                                        </div>
                                    </div>
                                </td>
                        </tr>
                        <tr>
                                <td data-title="Code"> Directa </td>
                                <td data-title="Company">Manchester vs. Liverpool</td>
                                <td data-title="Price">                
                                    <div class="form-group">
                                        <div class="col-md-11">
                                            <input class="form-control" placeholder="Bs."> 
                                        </div>
                                    </div>
                                </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td data-title="Company"><strong>Total</strong></td>
                            <td data-title="Price"> Aquí el total </td>
                        </tr>
                </tbody>
                
            </table>
        </div>
             <div align="right"> <a class="btn btn-warning"> Apostar </a> </div>
        </div>
        </div>

<?php require_once('./modulos/sidebar.php'); ?>           
          
      </div>

      <hr>

<?php require_once('./modulos/footer.php'); ?> 
      
      
    </div> <!-- /container -->

<?php require_once('./modulos/scriptjs.php'); ?> 
    
    </body>
</html>
