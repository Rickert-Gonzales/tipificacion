<?php

class Miembros {
   public $DNI; public $Nombres; 
   public $ApelliPater; public $ApellidoMater;
   public $Telefono; public $idComisiones;
   public $TipoCargo; public $Nombre_Especia;
   public $Descripcion;
   

   public function __construct($DNI, $Nombres, $ApelliPater, $ApellidoMater, $Telefono, $idComisiones, $TipoCargo, $Nombre_Especia, $Descripcion) {
      $this->DNI = $DNI;
      $this->Nombres = $Nombres;
      $this->ApelliPater = $ApelliPater;
      $this->ApellidoMater = $ApellidoMater;
      $this->Telefono = $Telefono;
      $this->idComisiones = $idComisiones;
      $this->TipoCargo = $TipoCargo;
      $this->Nombre_Especia = $Nombre_Especia;
      $this->Descripcion = $Descripcion;
   }

   public static function consulta($inicio,$datoPorPagina) {
      $listaMiembros = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT SQL_CALC_FOUND_ROWS * FROM v_comisiones_web LIMIT $inicio, $datoPorPagina");

      foreach($sql->fetchAll() as $miembros){
         $listaMiembros[] = new Miembros(
            $miembros['DNI'],
            $miembros['Nombres'],
            $miembros['ApelliPater'],
            $miembros['ApellidoMater'],
            $miembros['Telefono'],
            $miembros['idComisiones'],
            $miembros['TipoCargo'],
            $miembros['Nombre_Especia'],
            $miembros['Descripcion']
         );
      }
      return $listaMiembros;
   }

   public static function crear($dni,$nombre,$apellidop,$apellidom,$telefono,$direcion,$detcategoria) {
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("call p_AddEmpleado1(?,?,?,?,?,?,?)");
      $sql->execute(array($detcategoria,$dni,$nombre,$apellidop,$apellidom,$direcion,$telefono));
   }

   public static function editar($dni,$nombre,$apellidop,$apellidom,$telefono,$direcion,$detcategoria) {
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("CALL p_UpdateEmpleado(?,?,?,?,?,?,?)");
      $sql->execute(array($detcategoria,$dni,$nombre,$apellidop,$apellidom,$direcion,$telefono));
   }

   public static function eliminar($eliminarEmpleado){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("CALL p_DeleteEmpleado(?)");
      $sql->execute(array($eliminarEmpleado));
   }
}

class SelecEspecialidad {
   public $idEspecialidad ; public $Nombre_Especia;
   public $fk_idDepartamentos ;

   public function __construct($idEspecialidad, $Nombre_Especia,$fk_idDepartamentos) {
      $this->idEspecialidad = $idEspecialidad;
      $this->Nombre_Especia = $Nombre_Especia;
      $this->fk_idDepartamentos = $fk_idDepartamentos;
   }

   public static function selectEspecialidad() {
      $listaEspecialidades = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM especialidades");

      foreach($sql->fetchAll() as $especialidadess){
         $listaEspecialidades[] = new SelecEspecialidad(
            $especialidadess['idEspecialidad'],
            $especialidadess['Nombre_Especia'],
            $especialidadess['fk_idDepartamentos']
         );
      }
      return $listaEspecialidades;
   }
}

class SelecColegio {
   public $idColegios_Profes  ; public $Descripcion;

   public function __construct($idColegios_Profes, $Descripcion) {
      $this->idColegios_Profes = $idColegios_Profes;
      $this->Descripcion = $Descripcion;
   }

   public static function selectColegio() {
      $listaColegios = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM colegios_profes");

         foreach($sql->fetchAll() as $colegios){
            $listaColegios[] = new SelecColegio(
               $colegios['idColegios_Profes'],
               $colegios['Descripcion']
            );
      }
      return $listaColegios;
   }
}


class SelecCargo {
   public $idCargoss   ; public $TipoCargos;

   public function __construct($idCargoss , $TipoCargos) {
      $this->idCargos  = $idCargoss ;
      $this->TipoCargo = $TipoCargos;
   }

   public static function selectCargo() {
      $listaCargos = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM cargos");

      foreach($sql->fetchAll() as $cargos){
         $listaCargos[] = new SelecCargo(
            $cargos['idCargos'],
            $cargos['TipoCargo']
         );
      }
      return $listaCargos;
   }
}



class SelecDocente{
   public $idDocentes   ; public $nombresc;

   public function __construct($idDocentes , $nombresc) {
      $this->idDocentes  = $idDocentes ;
      $this->nombresc = $nombresc;
   }

   public static function selectDocente() {
      $listaDocen = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM v_cargaDocente1");

      foreach($sql->fetchAll() as $cargas){
         $listaDocen[] = new SelecDocente(
            $cargas['idDocentes'],
            $cargas['nombresc']
         );
      }
      return $listaDocen;
   }
}

   class Comisiones{
      public $finicio;
      public $ffin;
      public $idd1;
      public $cargo1;
      public $idd2;
      public $cargo2;
      public $idd3;
      public $cargo3;

      public function __construct($finicio,$ffin,$cargo1,$idd1,$cargo2,$idd2,$cargo3,$idd3){
         $this->Fecha_Inicio = $finicio;
         $this->Fecha_Final = $ffin;
         $this->ID1 = $idd1;
         $this->Cargos1 = $cargo1;
         $this->ID2 = $idd2;
         $this->Cargos2 = $cargo2;
         $this->ID3 = $idd3;
         $this->Cargos3 = $cargo3;
      }

      public static function crear($Fecha_Inicio, $Fecha_Final,$Cargos1,$ID1,$Cargos2,$ID2,$Cargos3,$ID3){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("call p_AddComision(?,?,?,?,?,?,?,?)");
      $sql->execute(array($Fecha_Inicio,$Fecha_Final,$Cargos1,$ID1,$Cargos2,$ID2,$Cargos3,$ID3));
   }


   }


   class Docentes {
   public $idDocentes; public $DNI;
   public $Nombres; public $ApelliPater;
   public $ApellidoMater; public $Titulo;
   public $Nom_Tipo; public $estadopubli;
   public $Telefono; public $Correo;
   public $Direccion; 
   public $fki_dColegios_Profes;
   public $fk_idEspecialidad;

   public function __construct($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Titulo,$Nom_Tipo,$estadopubli,$Telefono,$Correo,$Direccion,$fki_dColegios_Profes,$fk_idEspecialidad){
      $this->idDocentes = $idDocentes;
      $this->DNI = $DNI;
      $this->Nombres = $Nombres;
      $this->ApelliPater = $ApelliPater;
      $this->ApellidoMater = $ApellidoMater;
      $this->Titulo = $Titulo;
      $this->Nom_Tipo = $Nom_Tipo;
      $this->estadopubli = $estadopubli;
      $this->Telefono = $Telefono;
      $this->Correo = $Correo;
      $this->Direccion = $Direccion;
      $this->fki_dColegios_Profes = $fki_dColegios_Profes;
      $this->fk_idEspecialidad = $fk_idEspecialidad;
   }
  
   public static function crear($idDocentes, $DNI,$Nombres,$ApelliPater,$ApellidoMater,$Telefono,$Correo,$Direccion,$fki_dColegios_Profes,$fk_idEspecialidad)
   {
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("call p_AddDocente(?,?,?,?,?,?,?,?,?,?)");
      $sql->execute(array($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Telefono,$Correo,$Direccion,$fki_dColegios_Profes,$fk_idEspecialidad));
   }


}


?>