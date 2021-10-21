<?php

class Docentes {
   public $idDocentes; public $DNI;
   public $Nombres; public $ApelliPater;
   public $ApellidoMater;
   // public $Titulo;
   //public $Nom_Tipo; public $estadopubli;
   public $Telefono; public $Correo;
   public $Direccion;
   public $fki_dColegios_Profes;
   public $fk_idEspecialidad;

   public function __construct($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Telefono,$Correo,$Direccion,$fk_idEspecialidad,$fki_dColegios_Profes){
      $this->idDocentes = $idDocentes;
      $this->DNI = $DNI;
      $this->Nombres = $Nombres;
      $this->ApelliPater = $ApelliPater;
      $this->ApellidoMater = $ApellidoMater;
      $this->Telefono = $Telefono;
      $this->Correo = $Correo;
      $this->Direccion = $Direccion;
      $this->fk_idEspecialidad = $fk_idEspecialidad;
      $this->fki_dColegios_Profes = $fki_dColegios_Profes;
   }

   public static function consulta($inicio,$datoPorPagina) {
      $listaDocentes = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT SQL_CALC_FOUND_ROWS * FROM v_Solodocentes LIMIT $inicio, $datoPorPagina");

      foreach($sql->fetchAll() as $docentes){
         $listaDocentes[] = new Docentes(
            $docentes['idDocentes'],
            $docentes['DNI'],
            $docentes['Nombres'],
            $docentes['ApelliPater'],
            $docentes['ApellidoMater'],
            $docentes['Telefono'],
            $docentes['Correo'],
            $docentes['Direccion'],
            $docentes['Nombre_Especia'],
            $docentes['Descripcion']
         );
      }
      return $listaDocentes;
   }

   public static function numDocentes(){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM v_Solodocentes");
      $numDocentes = $sql->rowCount();
      return $numDocentes;
   }

   public static function crear($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Telefono,$Correo,$Direccion,$fki_dColegios_Profes,$fk_idEspecialidad)
   {
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("call p_AddDocente(?,?,?,?,?,?,?,?,?,?)");
      $sql->execute(array($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Telefono,$Correo,$Direccion,$fki_dColegios_Profes,$fk_idEspecialidad));
   }
   public static function editar($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Telefono,$Correo,$Direccion,$fki_dColegios_Profes,$fk_idEspecialidad) {
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("CALL p_UpdateDocente(?,?,?,?,?,?,?,?,?,?)");
      $sql->execute(array($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Telefono,$Correo,$Direccion,$fki_dColegios_Profes,$fk_idEspecialidad));
   }
   public static function eliminar($eliminarDocente){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("CALL p_DeleteDocente(?)");
      $sql->execute(array($eliminarDocente));
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

class DocentesPublicaciones{
   public $idDocentes;
   public $DNI;
   public $Nombres;
   public $ApelliPater;
   public $ApellidoMater;
   public $Titulo;
   public $Nom_Tipo;
   public $TipoEstado;
   public $estadopubli;

   public function __construct($idDocentes,$DNI,$Nombres,$ApelliPater,$ApellidoMater,$Titulo,$Nom_Tipo,$TipoEstado,$estadopubli){
      $this->idDocentes = $idDocentes;
      $this->DNI = $DNI;
      $this->Nombres = $Nombres;
      $this->ApelliPater = $ApelliPater;
      $this->ApellidoMater = $ApellidoMater;
      $this->Titulo = $Titulo;
      $this->Nom_Tipo = $Nom_Tipo;
      $this->TipoEstado = $TipoEstado;
      $this->estadopubli = $estadopubli;
   }

   public static function consulta($inicio,$datoPorPagina) {
      $listaDocentesP = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT SQL_CALC_FOUND_ROWS * FROM v_publicaciondeldocente LIMIT $inicio, $datoPorPagina");

      foreach($sql->fetchAll() as $docentesP){
         $listaDocentesP[] = new DocentesPublicaciones(
            $docentesP['idDocentes'],
            $docentesP['DNI'],
            $docentesP['Nombres'],
            $docentesP['ApelliPater'],
            $docentesP['ApellidoMater'],
            $docentesP['Titulo'],
            $docentesP['Nom_Tipo'],
            $docentesP['TipoEstado'],
            $docentesP['estadopubli']
         );
      }
      return $listaDocentesP;
   }

   public static function numDocentesP(){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM v_publicaciondeldocente");
      $numDocentesP = $sql->rowCount();
      return $numDocentesP;
   }
}