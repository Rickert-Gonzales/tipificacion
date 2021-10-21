<?php
include_once('./model/modelDashboard.php');
include_once('./model/miembros/modelMiembros.php');
include_once('./conexio.php');
BDConexion::crearInstancia();

class ControladorMiembros{
   // Metodos
   public function inicio() {
      $pagina = isset($_GET['pagina'])?(int)$_GET['pagina']:1;
      $datoPorPagina = 3;
      $inicio = ($pagina > 1) ? ($pagina * $datoPorPagina -$datoPorPagina):0;
      $miembros = Miembros::consulta($inicio,$datoPorPagina);
      $numComicion = Dashboard::numComicino();
      $numeroPaginacion= ceil($numComicion / $datoPorPagina);
      include_once("./view/page/miembros/lista-miembros.php");
   
   }

   public function registro_comision() {
      
      if($_POST){
         print_r($_POST);
         
        // $Fecha_Inicio = date('Y-m-D',$_POST['Fecha_Inicio']);
         //$Fecha_Final = date('Y-m-D',$_POST['Fecha_Final']);
         $f = explode('/',$_POST['Fecha_Inicio']);
         $Fecha_Inicio = $f[2]."-".$f[0]."-".$f[1];
         $f = explode('/',$_POST['Fecha_Final']);
         $Fecha_Final = $f[2]."-".$f[0]."-".$f[1];
         $ID1 = $_POST['ID1'];
         $Cargos1 = $_POST['Cargos1'];
         $ID2 = $_POST['ID2'];
         $Cargos2 = $_POST['Cargos2'];
         $ID3 = $_POST['ID3'];
         $Cargos3 = $_POST['Cargos3'];
         Comisiones::crear($Fecha_Inicio,$Fecha_Final,$Cargos1,$ID1,$Cargos2,$ID2,$Cargos3,$ID3);
         // header('Location: ./?controlador=empleados&accion=inicio');
      }
     
      $selectCargo= SelecCargo::selectCargo();
      $selectColegio = SelecColegio::selectColegio();
      $selectEspecialidad = SelecEspecialidad::selectEspecialidad();
      $selectDocente = SelecDocente::selectDocente();
      include_once("./view/page/miembros/registroMiembros.php");
   }


   // public function registro_docentes() {
   //    if($_POST){
   //       print_r($_POST);
   //       $idDocentes = $_POST['idDocentes'];
   //       $DNI = $_POST['DNI'];
   //       $Nombres = $_POST['Nombres'];
   //       $ApelliPater = $_POST['ApelliPater'];
   //       $ApellidoMater = $_POST['ApellidoMater'];
   //       $Telefono = $_POST['Telefono'];
   //       $Correo = $_POST['Correo'];
   //       $Direccion = $_POST['Direccion'];
   //       $fki_dColegios_Profes = $_POST['fki_dColegios_Profes'];
   //       $fk_idEspecialidad = $_POST['fk_idEspecialidad'];
   //       Docentes::crear($idDocentes,$nombre,$apellidop,$apellidom,$telefono,$direcion,$detcategoria);
   //       // header('Location: ./?controlador=empleados&accion=inicio');
   //    }
   //    $selectCargo= SelecCargo::selectCargo();
   //    $selectColegio = SelecColegio::selectColegio();
   //    $selectEspecialidad = SelecEspecialidad::selectEspecialidad();
   //    //include_once("./view/page/docentes/nueva-reserva.php");
   // }
     
   
}
?>