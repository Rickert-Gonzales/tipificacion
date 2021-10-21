<?php session_start();
$usuario = $_GET['usuario'];
?>
<!DOCTYPE html>
<html lang="es-PE">

<head>
   <meta charset="utf-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="assets/images/flaticon.png">
   <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
   <!-- Css -->
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
   <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
   <title>Dashboard Tipificación</title>
</head>

<body>
   <div class="wrapper">
      <!-- ========== Menu de la Izquierda ========== -->
      <div class="leftside-menu">
         <a href="index.html" class="logo text-center logo-light">
            <span class="logo-lg">
               <img src="assets/images/logo.png" alt="" height="16">
            </span>
            <span class="logo-sm">
               <img src="assets/images/logo_sm.png" alt="" height="16">
            </span>
         </a>
         <div class="h-100" id="leftside-menu-container" data-simplebar="">
            <ul class="side-nav">
               <li class="side-nav-title side-nav-item">Dashboard</li>
               <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                     aria-controls="sidebarDashboards" class="side-nav-link">
                     <i class="uil-home-alt"></i>
                     <span> Dashboards </span>
                  </a>
                  <div class="collapse" id="sidebarDashboards">
                     <ul class="side-nav-second-level">
                        <li>
                           <a
                              href="?controlador=dashboard&accion=dashboard&usuario=<?php echo $_GET['usuario']?>">Inicio</a>
                        </li>
                     </ul>
                  </div>
               </li>
               <?php if($_GET['usuario']=="vega@dc.edu"):?>
               <!-- <p>Usuario Vega</p> -->
               <li class="side-nav-title side-nav-item">Miembros de la comisión</li>
               <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarEmpleados" aria-expanded="false"
                     aria-controls="sidebarEmpleados" class="side-nav-link">
                     <i class="uil-layer-group"></i>
                     <span>Miembros</span>
                  </a>
                  <div class="collapse" id="sidebarEmpleados">
                     <ul class="side-nav-second-level">
                        <li>
                           <a
                              href="?controlador=miembros&accion=inicio&usuario=<?php echo $_GET['usuario']?>">Comisión</a>
                        </li>
                        <li>
                           <a
                              href="?controlador=miembros&accion=registro_comision&usuario=<?php echo $_GET['usuario']?>">Registro
                              de comisión</a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="side-nav-title side-nav-item">Docuemntos Publicados</li>
               <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarPlatos" aria-expanded="false" aria-controls="sidebarPlatos"
                     class="side-nav-link">
                     <i class="uil-box"></i>
                     <span>Documentos</span>
                  </a>
                  <div class="collapse" id="sidebarPlatos">
                     <ul class="side-nav-second-level">
                        <li>
                           <a href="?controlador=publicaciones&accion=inicio&usuario=<?php echo $_GET['usuario']?>">Lista
                              de Publicación</a>
                        </li>
                        <li>
                           <a href="?controlador=publicaciones&accion=registro&usuario=<?php echo $_GET['usuario']?>">Registrar
                              de Publicación
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="side-nav-title side-nav-item">Docentes</li>
               <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarClientes" aria-expanded="false"
                     aria-controls="sidebarClientes" class="side-nav-link">
                     <i class="uil-box"></i>
                     <span>Docentes</span>
                  </a>
                  <div class="collapse" id="sidebarClientes">
                     <ul class="side-nav-second-level">
                        <li>
                           <a
                              href="?controlador=docentes&accion=inicio&usuario=<?php echo $_GET['usuario']?>">Docentes</a>
                           <a href="?controlador=docentes&accion=docentes_pub&usuario=<?php echo $_GET['usuario']?>">Docentes
                              Autores</a>
                           <a
                              href="?controlador=docentes&accion=registro_docentes&usuario=<?php echo $_GET['usuario']?>">Registar
                              Docente</a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="side-nav-title side-nav-item"></li>
               <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                     aria-controls="sidebarEcommerce" class="side-nav-link">
                     <span></span>
                  </a>
               </li>
               <?php elseif($_GET['usuario']=="jhan@dc.edu"):?>
               <!-- <p>Usuario Jhan</p> -->
               <li class="side-nav-title side-nav-item">Docuemntos Publicados</li>
               <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarPlatos" aria-expanded="false" aria-controls="sidebarPlatos"
                     class="side-nav-link">
                     <i class="uil-box"></i>
                     <span>Documentos</span>
                  </a>
                  <div class="collapse" id="sidebarPlatos">
                     <ul class="side-nav-second-level">
                        <li>
                           <a href="?controlador=publicaciones&accion=inicio&usuario=<?php echo $_GET['usuario']?>">Lista
                              de Publicación</a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="side-nav-title side-nav-item">Docentes</li>
               <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarClientes" aria-expanded="false"
                     aria-controls="sidebarClientes" class="side-nav-link">
                     <i class="uil-box"></i>
                     <span>Docentes</span>
                  </a>
                  <div class="collapse" id="sidebarClientes">
                     <ul class="side-nav-second-level">
                        <li>
                           <a
                              href="?controlador=docentes&accion=inicio&usuario=<?php echo $_GET['usuario']?>">Docentes</a>
                           <a href="?controlador=docentes&accion=docentes_pub&usuario=<?php echo $_GET['usuario']?>">Docentes
                              Autores</a>
                        </li>
                     </ul>
                  </div>
               </li>
               <?php endif?>
            </ul>
         </div>
      </div>
      <!-- ============================================================== -->
      <!-- Inicio de las paginas -->
      <!-- ============================================================== -->
      <div class="content-page">
         <div class="content">
            <div class="navbar-custom">
               <button class="button-menu-mobile open-left">
                  <i class="mdi mdi-menu"></i>
               </button>
            </div>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="page-title-box">
                        <h4 class="page-title">Sistema de Tipificación</h4>
                     </div>
                  </div>
               </div>
               <?php include_once("./ruteador.view.php")?>
            </div>
         </div>
      </div>
   </div>
   <footer class="footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               UNASAM - 2021
            </div>
            <div class="col-md-6">
               <div class="text-md-end footer-links d-none d-md-block">
                  <a href="javascript: void(0);">Gerald</a>
                  <a href="javascript: void(0);">Jhon</a>
                  <a href="javascript: void(0);">Jhan</a>
                  <a href="javascript: void(0);">Cristian</a>
                  <a href="javascript: void(0);">Rickert</a>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- Scripts -->
   <script src="assets/js/vendor.min.js"></script>
   <script src="assets/js/app.min.js"></script>
   <script src="assets/js/vendor/apexcharts.min.js"></script>
   <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
   <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
   <script src="assets/js/pages/demo.dashboard.js"></script>
</body>

</html>