<?php
include_once('./model/modelDashboard.php');
include_once('./model/miembros/modelMiembros.php');
include_once('./conexio.php');
BDConexion::crearInstancia();

class ControladorDashboard{
   // Metodos
   public function dashboard() {
      $pagina = isset($_GET['pagina'])?(int)$_GET['pagina']:1;
      $datoPorPagina = 3;
      $inicio = ($pagina > 1) ? ($pagina * $datoPorPagina -$datoPorPagina):0;
      $listaMiembros = Miembros::consulta($inicio,$datoPorPagina);
      $numComicion = Dashboard::numComicino();
      $numeroPaginacion= ceil($numComicion / $datoPorPagina);
      $numLibros = Dashboard::numLibros();
      $numGuias = Dashboard::numGuias();
      $numEnsayos = Dashboard::numEnsayos();
      $numManuales = Dashboard::numManuales();
      include_once("./view/page/inicio.php");
   }
   public function error() {
      include_once("./view/public/pages-404.php");
   }
}
?>