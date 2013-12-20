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

                <thead>
                        <tr>
                                
                                <th>Mesa</th>
                                <th>Descripción</th>
                                <th>Deporte</th>
                                <th class="numeric">Capacidad</th>
                        </tr>
                </thead>
                
                <tbody>
                        <tr>
                                <td data-title="Code"> Premium </td>
                                <td data-title="Company">Esta la mesa es para futbol</td>
                                <td data-title="Price" class="numeric">Real Madrid vs Barcelona</td>
                                <td data-title="Change" class="numeric">1/100</td>
                        </tr>
                        <tr>
                                <td data-title="Code"> Platinum </td>
                                <td data-title="Company">Esta la mesa es para tenis</td>
                                <td data-title="Price" class="numeric">Federer vs Nadal</td>
                                <td data-title="Change" class="numeric">2/100</td>
                        </tr>
                </tbody>
                
            </table>
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
