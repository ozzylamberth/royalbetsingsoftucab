<?php
 require_once('./modulos/header.php'); 

    
        
 require_once('./modulos/navbar.php'); 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 ?>

<div class="page-header">
  <h1>Gestion de Apuestas</h1>
</div>

<?php 
echo "<div class=\"row\">";
echo "<div class=\"col-lg-12\">";
      echo "  <div class=\"col-lg-12\">";

//echo "APROBADAS TODAS LAS APUESTAS";

echo "</div>";
$pendiente= 0;
require_once("../BD/conexion.php");
        $sql="SELECT * from `Apuestas` WHERE `Estado`='$pendiente'";
        $datos = mysql_query($sql);
        if (!$datos)
            echo "no entro bien x.x";
 
        

echo"
<form role=form method=\"POST\" action=\"../BD/admin/actualizarEstadoApuestas.php\">

<b>Seleccione a continuacion las apuestas que desea validar:</b><br>

<table id=Validar class=\"table table-bordered\">";
      echo "<thead>
           <tr>
                                
                 <th>Id Apuesta</th>
                 <th>Id Usuario</th>
                 <th>Id Mesa</th>
                 <th>Id Juego</th>
                 <th>Monto</th>
                 <th>Fecha</th>
                                
                                
           </tr>
           </thead>
           <tbody> ";

while ($renglonConsulta = mysql_fetch_assoc($datos)){
      echo "<tr>";
      echo "<td>". $renglonConsulta['Id']."</td>";
      echo "<td>". $renglonConsulta['Id_user']."</td>";
      echo "<td>". $renglonConsulta['Id_mesa']."</td>";
      echo "<td>". $renglonConsulta['Id_juego']."</td>";
      echo "<td>". $renglonConsulta['Monto']."</td>";
      echo "<td>". $renglonConsulta['Fecha']."</td>";
      echo "<td><input type=checkbox name=". $renglonConsulta['Id']." >". $renglonConsulta['Id_user']."<br></td>"; 
      
      echo "</tr>";
} 
echo "
</tbody>    
</table>

<div class=\"span6\" style=\"text-align:center\">
<input TYPE=submit class=\"btn btn-default\" NAME=OK VALUE=\"Validar\"><BR>
</div>
</FORM>";         
echo "</div>";
echo "</div>";
echo "</div>";
require_once('../modulos/footer.php');       
      
require_once('../modulos/scriptjs.php');  
?>
