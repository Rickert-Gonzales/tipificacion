<?php
session_start();
// Incluimos el modelo y la conexión
include_once('./model/login/loginModel.php');
include_once('./conexio.php');
BDConexion::crearInstancia();

class ControladorLogin{
   // Metodos para el login
   public function login() {
      if($_POST){
         $usuario = filter_var(strtolower( $_POST['usuario']), FILTER_SANITIZE_STRING);
         $contrasenia = $_POST['contrasenia'];
         Login::consula($usuario,$contrasenia);
      }
      include_once("./view/page/login/login.php");
   }
      // Metodos para el recuperar contraseña
   public function recuperar_contraseña() {
      include_once("./view/page/login/recuperar-contrasenia.php");
   }   // Metodos para el registro
   public function registro() {
      if($_POST){
         $nombre = $_POST['nombre'];
         $apellidoP = $_POST['apellidoP'];
         $apellidoM = $_POST['apellidoM'];
         $dni = $_POST['dni'];
         Registro::crear($nombre,$apellidoP,$apellidoM,$dni);
      }
      include_once("./view/page/login/registro.php");
   }
}
?>