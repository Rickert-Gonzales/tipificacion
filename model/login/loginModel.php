<?php
class Login {
   public $usuario;
   public $contrasenia;

   // Constructor
   public function __construct($usuario,$contrasenia)
   {
      // Instanciamos los parametros
      $this->usuario = $usuario;
      $this->contrasenia = $contrasenia;
   }
   // Funcion de consulta
   public static function consula($usuario,$contrasenia) {
      $errorSesion= '';
      $conexionBD = BDConexion::crearInstancia();
      $sql = $conexionBD->prepare("SELECT * FROM usuarios WHERE usuario = ? AND passwordd = ?");
      $sql->execute(array($usuario,$contrasenia));
      $usuarioData=$sql->fetch();

      if($usuarioData !== false){
         $_SESSION['usuario'] = $usuario;
         header("Location:./?controlador=dashboard&accion=dashboard&usuario=".$usuario);
      } else {
         $errorSesion .= 'Usuario o Contraseña incorrectos';
         require('./view/page/login/login.php');
      }
   }
}

class Registro{
   public $nombre; public $apellidoP;
   public $apellidoM; public $dni;

   public static function crear($nombre,$apellidoP,$apellidoM,$dni){
      $conexion = BDConexion::crearInstancia();
      $sql = $conexion->prepare("call p_AddEmpleado1('Mesero',?,?,?,?,'default','default')");
      $sql->execute(array($dni,$nombre,$apellidoP,$apellidoM));
      header("Location:./?controlador=dashboard&accion=dashboard&usuario=".$nombre);
   }
}
?>