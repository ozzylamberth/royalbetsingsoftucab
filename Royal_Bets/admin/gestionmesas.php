<html lang="es">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
<?php require_once('./modulos/header.php'); ?> 
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
     <!--  <p>epale</p>-->
        
<?php require_once('./modulos/navbar.php'); ?> 

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        
        Gestion de Mesas
   <!--   <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div> -->
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-12">
      <!--    <h2>Gestion de Mesas</h2> 
          <p>epaleeee</p> -->
      
      
      <?php
         /*   $filas=2;
            $columnas=4;
            $tipos = array("premium","normal");
            $descripcion = array("Esta la mesa es para futbol","Esta es la mesa para tenis");
            $deporte = array ("Real Madrid vs Barcelona","Federer vs Nadal");
            $capacidad = array ("1/100","2/100");
        
            echo "<div class=\"table-responsive\">";   
            echo "<table class=\"table table-bordered\">"; 
            echo "<thead>
                <tr>
                                
                                <th>Mesa</th>
                                <th>Descripcion</th>
                                <th>Deporte</th>
                                <th >Capacidad</th>
                </tr>
                </thead>";
            
           echo "<tbody>";
            for ($i = 0 ; $i < $filas ; $i++){
                echo "<tr>
                                <td data-title=\"Tipo\"> $tipos[$i] </td>
                                <td data-title=\"descripcion\">$descripcion[$i]</td>
                                <td data-title=\"deporte\"> $deporte[$i]</td>
                                <td data-title=\"capacidad\">$capacidad[$i]</td>
                        </tr>";
            }
             echo" </tbody>
             </table>
        </div>";*/
                
      
        require_once("../BD/conexion.php");
        $sql = "select * from Mesas";
        $datos = mysql_query($sql,$conex);    
        
           // echo "<div >";   
            echo '<table id=tabla class="table table-bordered" border=\"1\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\">';
            echo "<thead>
                <tr>
                                
                                <th>Mesa</th>
                                <th>Descripcion</th>
                                <th>Deporte</th>
                                <th>Capacidad</th>
                                
                                
                </tr>
                </thead>
                <tbody> ";
            
        while( $renglon = mysql_fetch_array($datos)){
          
            
            if ($renglon['Estado']){
                echo "<tr>";
            echo "<td>".$renglon['Mesa']."</td>";
            echo "<td>". $renglon['Descripcion']."</td>";
            echo "<td>". $renglon['Deporte']."</td>";
            echo "<td>". $renglon['Capacidad']."</td>";
           ?>
            <td><a href="editarMesa.php?mesa=<?php echo $renglon['Mesa'] ?>"/>Editar</a>
               &nbsp&nbsp<a href="../BD/Mesa/mesaBorrar.php?mesa=<?php echo $renglon['Mesa'] ?>"/>Borrar</a></td><?php
            echo "</tr>";
            }
           
        }
        echo "</tbody>"
        . " </table>";
        mysql_close();
        ?>
          
        
        
          
    </div>
      </div>
    </div>
      
    
    

      <div class="row">
        <div class="span6" style="text-align:center">
            
            <button type="button" class="btn btn-default" onclick="location.href='crearMesa.php'">Crear</button>
            <button type="button" class="btn btn-default">Editar</button>
            <button type="button" class="btn btn-default">Eliminar</button>
        </div>
      </div>
</div>

<?php require_once('../modulos/footer.php'); ?>
      
      
    </div> <!-- /container -->

<?php require_once('../modulos/scriptjs.php'); ?>     
    
    </body>
</html>

