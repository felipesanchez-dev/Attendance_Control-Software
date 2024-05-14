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
  <h1 class="box-title">REPORTE GENERAL DE USUARIOS</h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>Opciones</th>
      <th>Código</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Sede</th>
      <th>Fecha Hora</th>
      <th>Estado</th>
      <th>Fecha Reporte</th>
    </thead>
    <tbody>
    </tbody>
    <tfoot>
      <th>Opciones</th>
      <th>Código</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Sede</th>
      <th>Fecha Hora</th>
      <th>Estado</th>
      <th>Fecha Reporte</th>
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
