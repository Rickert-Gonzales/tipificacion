<?php

class Dashboard{
   public $numLibros;
   public $numGuias;
   public $numEnsayos;
   public $numManuales;

   public static function numLibros(){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM trab_publicaciones WHERE fk_idTiposdeTrabajo = 5;");
      $numLibros = $sql->rowCount();
      return $numLibros;
   }
   public static function numGuias(){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM trab_publicaciones WHERE fk_idTiposdeTrabajo = 2;");
      $numGuias = $sql->rowCount();
      return $numGuias;
   }
   public static function numEnsayos(){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM trab_publicaciones WHERE fk_idTiposdeTrabajo = 3;");
      $numEnsayos = $sql->rowCount();
      return $numEnsayos;
   }
   public static function numManuales(){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM trab_publicaciones WHERE fk_idTiposdeTrabajo = 4;");
      $numManuales = $sql->rowCount();
      return $numManuales;
   }
   public static function numComicino(){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion -> query("SELECT * FROM v_comisiones_web");
      $numComicion = $sql->rowCount();
      return $numComicion;
   }
}
?>