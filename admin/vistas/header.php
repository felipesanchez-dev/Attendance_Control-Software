 <?php 
if (strlen(session_id())<1) 
  session_start();
  ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>CONTROL DE USUARIOS | ADMIN</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

  </head>

<body class="hold-transition skin-blue sidebar-mini">
<div id="fb-root"></div>

<div class="fb-customerchat"
  attribution
  page_id="280144326139427"
  theme_color="#0084ff"
  logged_in_greeting="Sistema de control DE ASISTENCIA  CUN"
  logged_out_greeting="Sistema de control DE ASISTENCIA  CUN">
</div>
<div class="wrapper">

  <header class="main-header">
    <a href="escritorio.php" class="logo">
      <span class="logo-mini"><b>MODO</b> ADMINISTADOR</span>
      <span class="logo-lg"><b>MODO</b> ADMIN</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nombre'].' '.$_SESSION['departamento']; ?>
                  <small>ADMINISTRADOR</small>
                </p>
              </li>
              <li class="user-footer">
                >
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
<div class="user-panel">
        <div class="pull-left image">
          <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" style="width: 50px; height: 50px;" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombre']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">BARRA DE NAVEGACION RAPIDA</li>


      <li><a href="escritorio.php"><i class="fa  fa-dashboard (alias)"></i> <span>INICIO</span></a></li>

<?php if ($_SESSION['tipousuario']=='Administrador') {
?>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>CONTROL GENERAL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="usuario.php"><i class="fa fa-circle-o"></i> Usuarios Existentes</a></li>
            <li><a href="tipousuario.php"><i class="fa fa-circle-o"></i> Tipos Usuario</a></li>
            <li><a href="departamento.php"><i class="fa fa-circle-o"></i> Sede CUN</a></li>
          </ul>
      </li>

      <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>SEDES CUN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="departamento.php"><i class="fa fa-circle-o"></i>Sedes CUN</a></li>            
          </ul>
      </li>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>CONTROL DE ASISTENCIA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="asistencia.php"><i class="fa fa-circle-o"></i> Asistencia General</a></li>
            <li><a href="rptasistencia.php"><i class="fa fa-circle-o"></i> Asistencia por Usuario</a></li>
            <li><a href="rptasistenciau.php"><i class="fa fa-circle-o"></i> Asistencia por Fecha</a></li>
          </ul>
      </li>
<?php } ?>
<?php if ($_SESSION['tipousuario']!='Administrador') {
?>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Mis Asistencias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="asistenciau.php"><i class="fa fa-circle-o"></i> Asistencia</a></li>
            <li><a href="rptasistenciau.php"><i class="fa fa-circle-o"></i> Reportes</a></li>
           
          </ul>
      </li>
<?php } ?>
  
<li><a href="#" id="downloadLink"><i class="fa fa-question-circle"></i> <span>Ayuda</span><small class="label pull-right bg-yellow">PDF</small></a></li>
      </ul>
    </section>
  </aside>
  <script>
      var downloadLink = document.getElementById('downloadLink');

downloadLink.addEventListener('click', function(event) {
    event.preventDefault();

    var link = document.createElement('a');
    link.href = 'Manual de usuario Aplicativo asistencia CUN.pdf';
    link.download = 'Manual de Usuario'; 
    document.body.appendChild(link);
    link.click();

    document.body.removeChild(link);
});
  </script>