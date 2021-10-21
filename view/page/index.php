<?php

$controlador = 'dashboard';
$accion = 'inicio';

if(isset($_GET['controlador']) && isset($_GET['accion'])) {
   if(($_GET['controlador'] != "") && ($_GET['accion'] != "")) {
      $controlador = $_GET['controlador'];
      $accion = $_GET['accion'];
   }
}
require_once("template.php");
?>