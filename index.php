<?php

$controlador = 'paginas';
$accion = 'inicio';

if(isset($_GET['controlador']) && isset($_GET['accion'])) {
   if(($_GET['controlador'] != "") && ($_GET['accion'] != "")) {
      $controlador = $_GET['controlador'];
      $accion = $_GET['accion'];
   }
}
if($controlador == "dashboard" || $controlador == "docentes" || $controlador == "miembros" || $controlador == "publicaciones") {
   $accion = $_GET['accion'];
   require_once("./view/page/template.php");
} else if($controlador != "paginas" && $controlador != "dashboard"){
   $accion = $_GET['accion'];
   require_once("./templeate.view.php");
}else{
   require_once("./templete.base.php");
}

?>