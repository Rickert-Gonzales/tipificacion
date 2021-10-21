<?php
include_once('./model/publicaciones/modelPublicaciones.php');
include_once('./conexio.php');
BDConexion::crearInstancia();

class ControladorPublicaciones{
   // Metodos
   public function inicio() {
      $pagina = isset($_GET['pagina'])?(int)$_GET['pagina']:1;
      $datoPorPagina = 5;
      $inicio = ($pagina > 1) ? ($pagina * $datoPorPagina -$datoPorPagina):0;
      if(isset($_POST['filtrar'])){
         // print_r($_REQUEST);
         $tipo = $_REQUEST['tipo'];
         $estado = $_REQUEST['estado'];
         $listaPublicaciones = Publicaciones::filtrar($tipo,$estado);
         print_r($listaPublicaciones);
         $numDocs = Publicaciones::numDocsFiltrar($tipo,$estado);
         $numeroPaginacion= ceil($numDocs / $datoPorPagina);
      } else if(isset($_POST['validar'])) {
         print_r($_POST);
         date_default_timezone_set("America/Lima");
         $fecha = date("Y-m-d");
         $idValidacion = $_POST['validar'];
         Publicaciones::validar($idValidacion,$fecha);
         $listaPublicaciones = Publicaciones::consulta($inicio,$datoPorPagina);
         $numPublicaciones = Publicaciones::numPublicaciones();
         $numeroPaginacion= ceil($numPublicaciones / $datoPorPagina);
      } else if(isset($_POST['editar'])){
         print_r($_POST);
         $idPubli = $_POST['idPubli'];
         $titulo = $_POST['titulo'];
         // $autor = $_POST['autor'];
         $tipo = $_POST['tipo'];
         $edicion = $_POST['edicion'];
         $numPaginas = $_POST['numPaginas'];
         $editorial = $_POST['editorial'];
         $fechPubli = $_POST['fechPubli'];
         Publicaciones::editar($idPubli,$titulo,$fechPubli,$numPaginas,$editorial,$edicion);
      }else{
         $listaPublicaciones = Publicaciones::consulta($inicio,$datoPorPagina);
         $numPublicaciones = Publicaciones::numPublicaciones();
         $numeroPaginacion= ceil($numPublicaciones / $datoPorPagina);
      }
      include_once("./view/page/publicaciones/lista-publicaciones.php");
   }
   // Llamado a la vista registro de empleados
   public function registro() {
      if($_POST){
         // print_r($_POST);
         $docente = $_POST['docente'];
         $tTrabajo = $_POST['tTrabajo'];
         $titulo = $_POST['titulo'];
         $numPaginas = $_POST['numPaginas'];
         $editorial = $_POST['editorial'];
         $edicion = $_POST['edicion'];
         date_default_timezone_set("America/Lima");
         $fecha = date("Y-m-d");
         Publicaciones::crear($titulo,$fecha,$numPaginas,$editorial,$edicion,$docente,$tTrabajo);
      }
      $listaDocentes = Docente::consulta();
      $listaTrabajos = TipoTrabajo::trabajos();
      include_once("./view/page/publicaciones/registroPublicacion.php");
   }
}
?>