<?php
include_once('./conexio.php');
BDConexion::crearInstancia();
class ControladorPaginas{
   // Metodos
   public function inicio() {
      include_once("./view/public/web.html");
      // include_once("./view/page/inicio.php");
   }
   public function error() {
      include_once("./view/public/pages-404.php");
   }
}
?>