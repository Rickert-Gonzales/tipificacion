<body class="authentication-bg">
   <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
               <div class="card">
                  <div class="card-body p-4">
                     <div class="text-center w-75 m-auto">
                        <h4 class="text-dark-50 text-center mt-0 fw-bold">Recuperar Contraseña</h4>
                        <p class="text-muted mb-4">Ingrese su correo y le enviaremos las instrucciones para rcuperar su
                           contraseña.</p>
                     </div>

                     <form action="#">
                        <div class="mb-3">
                           <label for="correo" class="form-label">Correo electronico</label>
                           <input class="form-control" type="email" id="correo" name="correo" required=""
                              placeholder="Ingrese correo">
                        </div>

                        <div class="mb-0 text-center">
                           <button class="btn btn-primary" type="submit">Enviar correo</button>
                        </div>
                     </form>
                  </div> <!-- end card-body-->
               </div>
               <!-- end card -->

               <div class="row mt-3">
                  <div class="col-12 text-center">
                     <p class="text-muted">Regresar a <a href="?controlador=login&accion=login"
                           class="text-muted ms-1"><b>Inicio de sesión</b></a></p>
                  </div> <!-- end col -->
               </div>
               <!-- end row -->
            </div> <!-- end col -->
         </div>
         <!-- end row -->
      </div>
      <!-- end container -->
   </div>

</body>