<?php

class Publicaciones {
   public $idTrab_Publicaciones; public $Titulo; public $NumPaginas;
   public $Autor; public $Nom_Tipo; public $Editorial;
   public $Edicion; public $FechaPublic; public $TipoEstado;
   public $estadopubli;

   public function __construct($idTrab_Publicaciones, $Titulo,$NumPaginas,$Autor,$Nom_Tipo,$Editorial,$Edicion,$FechaPublic,$TipoEstado,$estadopubli) {
      $this->idTrab_Publicaciones = $idTrab_Publicaciones;
      $this->Titulo = $Titulo;
      $this->NumPaginas = $NumPaginas;
      $this->Autor = $Autor;
      $this->Nom_Tipo = $Nom_Tipo;
      $this->Editorial = $Editorial;
      $this->Edicion = $Edicion;
      $this->FechaPublic = $FechaPublic;
      $this->TipoEstado = $TipoEstado;
      $this->estadopubli = $estadopubli;
   }

   public static function consulta($inicio,$datoPorPagina) {
      $listaPublicaciones = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT SQL_CALC_FOUND_ROWS * FROM v_trabajosdepublicacion LIMIT $inicio, $datoPorPagina");

      foreach($sql->fetchAll() as $publicaciones){
         $listaPublicaciones[] = new Publicaciones(
            $publicaciones['idTrab_Publicaciones'],
            $publicaciones['Titulo'],
            $publicaciones['NumPaginas'],
            $publicaciones['Autor'],
            $publicaciones['Nom_Tipo'],
            $publicaciones['Editorial'],
            $publicaciones['Edicion'],
            $publicaciones['FechaPublic'],
            $publicaciones['TipoEstado'],
            $publicaciones['estadopubli']
         );
      }
      return $listaPublicaciones;
   }
   public static function numPublicaciones(){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM v_trabajosdepublicacion");
      $numPublicaciones = $sql->rowCount();
      return $numPublicaciones;
   }
   public static function filtrar($tipo,$estado) {
      $listaPublicaciones = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("SELECT * FROM v_trabajosdepublicacion WHERE Nom_Tipo=? AND estadopubli=?");
      $sql->execute(array($tipo,$estado));

      foreach($sql->fetchAll() as $publicaciones){
         $listaPublicaciones[] = new Publicaciones(
            $publicaciones['idTrab_Publicaciones'],
            $publicaciones['Titulo'],
            $publicaciones['NumPaginas'],
            $publicaciones['Autor'],
            $publicaciones['Nom_Tipo'],
            $publicaciones['Editorial'],
            $publicaciones['Edicion'],
            $publicaciones['FechaPublic'],
            $publicaciones['TipoEstado'],
            $publicaciones['estadopubli']
         );
      }
      return $listaPublicaciones;
   }
   public static function numDocsFiltrar($tipo,$estado) {
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> prepare("SELECT * FROM v_trabajosdepublicacion WHERE Nom_Tipo=? AND estadopubli=?");
      $sql->execute(array($tipo,$estado));
      $numDocs = $sql->rowCount();
      return $numDocs;
   }

   public static function crear($titulo,$fecha,$numPaginas,$editorial,$edicion,$docente,$tTrabajo) {
      $conexion = BDConexion::crearInstancia();
      $Autor = $conexion->query("SELECT * FROM autores");
      $sqlAutor = $conexion->query("CALL p_insertAuto(null)");
      $autorFinal = $Autor->rowCount();
      $sqlHasaAutor = $conexion->prepare("CALL p_insertDocenAuto(?,?)");
      $sqlHasaAutor->execute(array($docente,$autorFinal));
      $sql = $conexion->prepare("call p_insert_traba(?,?,?,?,?,?,?,1,?,11,3,null,?,null,3)");
      $sql->execute(array($titulo,$fecha,$numPaginas,$editorial,$edicion,$autorFinal,$tTrabajo,$fecha,$fecha));
   }

   public static function eliminar($eliminarPlato){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("DELETE FROM plato WHERE idplato=?");
      $sql->execute(array($eliminarPlato));
   }

   public static function editar($idPubli,$titulo,$fechPubli,$numPaginas,$editorial,$edicion){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("call p_updatetrabajo(?,?,?,?,?,?)");
      $sql->execute(array($idPubli,$titulo,$fechPubli,$numPaginas,$editorial,$edicion));
   }

   public static function validar($idValidacion,$fecha){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("CALL p_updateVali(?,?,1,1,5)");
      $sql->execute(array($idValidacion,$fecha));
   }
}

class Docente{
   public $Docentes_idDocentes;
   public $Autores_idAutores;

   public function __construct($Docentes_idDocentes, $Autores_idAutores) {
      $this->Docentes_idDocentes = $Docentes_idDocentes;
      $this->Autores_idAutores = $Autores_idAutores;
   }
   public static function consulta() {
      $listaDocentes = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->query("SELECT * FROM docentes_has_autores");
      // $especialidades = $sql->fetch();

      foreach($sql->fetchAll() as $docentes){
         $listaDocentes[] = new Docente(
            $docentes['Docentes_idDocentes'],
            $docentes['Autores_idAutores'],
         );
      }
      return $listaDocentes;
   }
}

class TipoTrabajo{
   public $idTiposdeTrabajo;
   public $Nom_Tipo;

   public function __construct($idTiposdeTrabajo, $Nom_Tipo) {
      $this->idTiposdeTrabajo = $idTiposdeTrabajo;
      $this->Nom_Tipo = $Nom_Tipo;
   }
   public static function trabajos() {
      $listaTrabajos = [];
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->query("SELECT * FROM tiposdetrabajo");
      // $especialidades = $sql->fetch();

      foreach($sql->fetchAll() as $trabajos){
         $listaTrabajos[] = new TipoTrabajo(
            $trabajos['idTiposdeTrabajo'],
            $trabajos['Nom_Tipo'],
         );
      }
      return $listaTrabajos;
   }
}
?>