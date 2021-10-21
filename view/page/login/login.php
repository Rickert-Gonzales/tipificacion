<div class="auth-fluid">
   <!--Auth fluid left content -->
   <div class="auth-fluid-form-box">
      <div class="align-items-center d-flex h-100">
         <div class="card-body">
            <!-- title-->
            <h4 class="mt-0">Inicie seción</h4>
            <p class="text-muted mb-4">Ingrese su dirección de correo y su contraseña para acceder.</p>

            <!-- form -->
            <form action="" method="POST" name="login">
               <div class="mb-3">
                  <label for="usuario" class="form-label">Usuario</label>
                  <input class="form-control" type="text" id="usuario" required="" name="usuario"
                     placeholder="Ingrese su usuario">
               </div>
               <div class="mb-3">
                  <a href="?controlador=login&accion=recuperar_contraseña" class="text-muted float-end"><small>Olvido su
                        contraseña?</small></a>
                  <label for="contrasenia" class="form-label">Contraseña</label>
                  <input class="form-control" name="contrasenia" type="password" required="" id="contrasenia"
                     placeholder="Ingrese su contraseña">
               </div>
               <div class="d-grid mb-0 text-center">
                  <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i>
                     Ingresar</button>
               </div>
               <?php if(!empty($errorSesion)): ?>
               <div class="d-grid mb-0 text-center mt-3">
                  <div class="alert alert-danger" role="alert">
                     <i class="dripicons-wrong me-2"></i><?php echo $errorSesion ?>
                  </div>
               </div>
               <?php endif; ?>
            </form>
            <footer class="footer footer-alt">
               <p class="text-muted">No tiene una cuenta? <a href="?controlador=login&accion=registro"
                     class="text-muted ms-1"><b>Registrese</b></a></p>
            </footer>
         </div> <!-- end .card-body -->
      </div> <!-- end .align-items-center.d-flex.h-100-->
   </div>
   <!-- end auth-fluid-form-box-->
</div>