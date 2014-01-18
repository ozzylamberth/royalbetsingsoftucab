<?php
 require_once('./modulos/header.php'); 
 require_once('./modulos/navbar.php');  
 require_once('../modulos/scriptjs.php'); 
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 ?>

<div class="page-header">
  <h1>Depositar y/o Retirar Dinero  </h1>
</div>

<label for="trans" class="col-lg-3">
       Ingrese todos los datos siguientes:
 </label>


<form role=form method="POST" action="./points/trans_helper.php">
<table id=Validar class="table table-bordered">
</FORM>

<div class="form-group">
                  <br/><br/>
                  <label for="transaccion" class="col-md-2">
                    Tipo de Transaccion:
                  </label>
                  <div class="col-md-4">
                      <select tittle="Seleccione su transaccion" name="transaccion" id="transaccion" class="form-control" required>
                      <?php require_once('./points/transac_type.php'); ?>
                      </select>    
                  </div><br/><br/>
                </div>

<div class="form-group">
                  <label for="cedula" class="col-md-2">
                    Cedula de identidad:
                  </label>
                  <div class="col-md-4">
                      <input title="Introduzca su Cedula" type="text" class="form-control" name="cedula" id="cedula" placeholder="V-12345678 o E-12345678" pattern="[VE]+[-]+[0-9]+" required>
                  </div><br/><br/>
                </div>

<div class="form-group">
                  <label for="monto" class="col-md-2">
                    Monto a Procesar:
                  </label>
                  <div class="col-md-4">
                      <input title="introduzca el monto" type="text" class="form-control" name="monto" id="monto" placeholder="1500 ó 5000" pattern="[0-9]+" required>
                  </div><br/><br/>
                </div>


<div class="form-group">
                  <label for="cedula del Admin" class="col-md-2">
                    Cedula de identidad del Administrador:
                  </label>
                  <div class="col-md-4">
                      <input title="Introduzca su Cedula" type="text" class="form-control" name="ciAdmin" id="ciAdmin" placeholder="V-12345678 o E-12345678" pattern="[VE]+[-]+[0-9]+" required>
                  </div><br/><br/>
                </div>


<div class="row">
                  <div class="col-md-2">
                  </div>                  
                  <div class="span6">
                      <input TYPE=submit class="btn btn-default" NAME=OK VALUE="Continuar"><BR
                  </div>
                </div>

<footer>
  <p>&copy; Royal Bets | Diseño: HTML5</p>
</footer>