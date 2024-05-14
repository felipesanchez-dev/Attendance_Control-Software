<?php 
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{

require 'header.php';
 ?>
    <div class="content-wrapper">
    <section class="content">

      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="box-header with-border">
  <h1 class="box-title">Usuarios</h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistadou" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>Opciones</th>
      <th>Código</th>
      <th>Nombres</th>
      <th>Sede CUN</th>
      <th>Fecha Hora</th>
      <th>Asistencia</th>
      <th>Fecha</th>
    </thead>
    <tbody>
    </tbody>
    <tfoot>
      <th>Opciones</th>
      <th>Código</th>
      <th>Nombres</th>
      <th>Sede CUN</th>
      <th>Fecha Hora</th>
      <th>Asistencia</th>
      <th>Fecha</th>
    </tfoot>   
  </table>
</div>

      </div>
      </div>

    </section>
  </div>
<?php 

require 'footer.php';
 ?>
 <script src="scripts/asistencia.js"></script>
 <?php 
}

ob_end_flush();
  ?>
