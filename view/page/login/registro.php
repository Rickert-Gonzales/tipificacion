<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <title>Registro</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
   <meta content="Coderthemes" name="author" />
   <!-- App favicon -->
   <link rel="shortcut icon" href="../../../assets/images/favicon.ico">

   <!-- App css -->
   <link href="../../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <link href="../../../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
   <link href="../../../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body>

   <div class="auth-fluid">
      <!--Auth fluid left content -->
      <div class="auth-fluid-form-box">
         <div class="align-items-center d-flex h-100">
            <div class="card-body">
               <!-- title-->
               <h4 class="mt-0">Registo</h4>
               <p class="text-muted mb-4">No tienes una cuenta? Crea una ahora</p>
               <!-- form -->
               <form action="" method="POST">
                  <div class="mb-3">
                     <label for="nombre" class="form-label">Ingrese sus nombre</label>
                     <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese sus nombres"
                        required>
                  </div>
                  <div class="mb-3">
                     <label for="apellidoP" class="form-label">Apellido Paterno</label>
                     <input class="form-control" type="text" id="apellidoP" name="apellidoP"
                        placeholder="Ingrese sus apellido" required>
                  </div>
                  <div class="mb-3">
                     <label for="apellidoM" class="form-label">Apellido Materno</label>
                     <input class="form-control" type="text" id="apellidoM" name="apellidoM" required
                        placeholder="Ingrese su segundo apellido">
                  </div>
                  <div class="mb-3">
                     <label for="dni" class="form-label">Contraseña</label>
                     <input class="form-control" type="number" required id="dni" name="dni"
                        placeholder="Ingrese su contraseña">
                  </div>
                  <div class="mb-0 d-grid text-center">
                     <button class="btn btn-primary" type="submit"><i class="mdi mdi-account-circle"></i> Registrarme
                     </button>
                  </div>
               </form>
               <!-- end form-->
               <!-- Footer-->
               <footer class="footer footer-alt">
                  <p class="text-muted">Ya tienes una cuenta? <a href="?controlador=login&accion=login"
                        class="text-muted ms-1"><b>Iniciar Sesión</b></a></p>
               </footer>

            </div> <!-- end .card-body -->
         </div> <!-- end .align-items-center.d-flex.h-100-->
      </div>
      <!-- end auth-fluid-form-box-->
   </div>
   <!-- end auth-fluid-->

   <!-- bundle -->
   <script src="../../../assets/js/vendor.min.js"></script>
   <script src="../../../assets/js/app.min.js"></script>

</body>

</html>