<?php
include_once('./model/docentes/modelDocentes.php');
include_once('./model/publicaciones/modelPublicaciones.php');
include_once('./conexio.php');
BDConexion::crearInstancia();

class ControladorDocentes{
   // Metodos
   public function inicio() {
      //if($_POST){
         if(isset($_POST['eliminarDoc'])){
            $eliminarDocente = $_POST['eliminarDoc'];
            Docentes::eliminar($eliminarDocente);
      }else if(isset($_POST['EditarDocen'])){
         print_r($_POST);
         $idDocentes = $_POST['idDocentes'];
         $DNI = $_POST['DNI'];
         $Nombres = $_POST['Nombres'];
         $ApelliPater = $_POST['ApelliPater'];
         $ApellidoMater = $_POST['ApellidoMater'];
         $Telefono = $_POST['Telefono'];
         $Correo = $_POST['Correo'];
         $Direccion = $_POST['Direccion'];
         $fk_idEspecialidad = $_POST['fk_idEspecialidad'];
         $fki_dColegios_Profes = $_POST['fki_dColegios_Profes'];
         Docentes::editar($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Telefono,$Correo,$Direccion,$fk_idEspecialidad,$fki_dColegios_Profes);
      }
      $pagina = isset($_GET['pagina'])?(int)$_GET['pagina']:1;
      $datoPorPagina = 5;
      $inicio = ($pagina > 1) ? ($pagina * $datoPorPagina -$datoPorPagina):0;
      $docentes = Docentes::consulta($inicio,$datoPorPagina);
      $numDocentes = Docentes::numDocentes();
      $numeroPaginacion = ceil($numDocentes / $datoPorPagina);
      include_once("./view/page/docentes/docentesV.php");
   }

   public function borrar() {}

   // Llamado a la vista registro de empleados
   public function registro_docentes() {
      if($_POST){
         print_r($_POST);
         $idDocentes = $_POST['idDocentes'];
         $DNI = $_POST['DNI'];
         $Nombres = $_POST['Nombres'];
         $ApelliPater = $_POST['ApelliPater'];
         $ApellidoMater = $_POST['ApellidoMater'];
         $Telefono = $_POST['Telefono'];
         $Correo = $_POST['Correo'];
         $Direccion = $_POST['Direccion'];
         $fki_dColegios_Profes = $_POST['fki_dColegios_Profes'];
         $fk_idEspecialidad = $_POST['fk_idEspecialidad'];
         
         
         Docentes::crear($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Telefono,$Correo,$Direccion,$fki_dColegios_Profes,$fk_idEspecialidad);
      }
      $selectColegio = SelecColegio::selectColegio();
      $selectEspecialidad = SelecEspecialidad::selectEspecialidad();
      include_once("./view/page/docentes/nueva-reserva.php");
   }

   public function docentes_pub(){
      if($_POST){
         if(isset($_POST['eliminarDocP'])){
            $eliminarDocente = $_POST['eliminarDoc'];
            Docentes::eliminar($eliminarDocente);
      }else{
         print_r($_POST);
         $idDocentes = $_POST['idDocentes'];
         $DNI = $_POST['DNI'];
         $Nombres = $_POST['Nombres'];
         $ApelliPater = $_POST['ApelliPater'];
         $ApellidoMater = $_POST['ApellidoMater'];
         $Telefono = $_POST['Telefono'];
         $Correo = $_POST['Correo'];
         $Direccion = $_POST['Direccion'];
         $fk_idEspecialidad = $_POST['fk_idEspecialidad'];
         $fki_dColegios_Profes = $_POST['fki_dColegios_Profes'];
         Docentes::editar($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Telefono,$Correo,$Direccion,$fk_idEspecialidad,$fki_dColegios_Profes);
      }
   }
   $pagina = isset($_GET['pagina'])?(int)$_GET['pagina']:1;
   $datoPorPagina = 5;
   $inicio = ($pagina > 1) ? ($pagina * $datoPorPagina -$datoPorPagina):0;
   $docentes = DocentesPublicaciones::consulta($inicio,$datoPorPagina);
   $numDocentesP = Docentes::numDocentes();
   $numeroPaginacion = ceil($numDocentesP / $datoPorPagina);
   include_once("./view/page/docentes/docentes.php");
   }
}
?>