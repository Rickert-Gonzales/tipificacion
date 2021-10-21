<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h4 class="header-title">Registro de Docentes</h4>
            <ul class="nav nav-tabs nav-bordered mb-3">
               <li class="nav-item">
                  <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false" class="nav-link active" class="header-title"> 
                     Seleccione Cargo
                  </a>
               </li>
            </ul> <!-- end nav-->
            <div class="tab-content">
               <div class="tab-pane show active" id="datos-generales">
                  <div class="row">
                     <div class="col-md-12">
                        <form class="row" method="POST">
                           <div class="tab-content">
                              <div class="tab-pane show active" id="Especialidad">
                                 <div class="row">
                                    <div class="col-lg-4">
                                       <p class="mb-1 fw-bold text-muted">Seleccione Especialidad</p>
                                      
                                       <select class="select2 form-control select2-multiple" data-toggle="select2"
                                          name="fk_idEspecialidad">
                                          <option value="Admi">Seleccione...</option>
                                          <optgroup label="Especialidad">
                                             <?php foreach($selectEspecialidad as $especialidades) :?>
                                             <option value="<?php echo $especialidades->Nombre_Especia  ?>">
                                                <?php echo $especialidades->Nombre_Especia?></option>
                                             <?php endforeach?>
                                          </optgroup>
                                       </select>
                                    </div> <!-- end col -->
                                    <div class="col-lg-4">
                                       <p class="mb-1 fw-bold text-muted">Seleccione Colegio Profesional</p>
                                       
                                       <select class="select2 form-control select2-multiple" data-toggle="select2"
                                          name="fki_dColegios_Profes">
                                          <option value="Admi">Seleccione...</option>
                                          <optgroup label="Colegios">
                                             <?php foreach($selectColegio as $colegios) :?>
                                             <option value="<?php echo $colegios->Descripcion  ?>">
                                                <?php echo $colegios->Descripcion?></option>
                                             <?php endforeach?>
                                          </optgroup>
                                       </select>
                                    </div> <!-- end col -->
                                  
                                 </div> <!-- end row-->
                              </div> <!-- end preview-->
                           </div> <!-- end tab-content-->
                           <hr class="mt-3 mb-3">
                           <!-- Fin Select Cargo -->
                           <ul class="nav nav-tabs nav-bordered mb-3">
                              <li class="nav-item">
                                 <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false"
                                    class="nav-link active">
                                    Datos del docente
                                 </a>
                              </li>
                           </ul>
                           <div class="col-md-6 mb-3">
                              <label class="form-label">Código</label>
                              <input type="text" class="form-control" name="idDocentes" required placeholder="Código">
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label">DNI</label>
                              <input type="number" class="form-control" name="DNI" required placeholder="DNI">
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label">Nombres</label>
                              <input type="text" class="form-control" name="Nombres" required placeholder="Nombre">
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label">Apellido Paterno</label>
                              <input type="text" class="form-control" name="ApelliPater" required placeholder="Ap. Paterno">
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label">Apellido Materno</label>
                              <input type="text" class="form-control" name="ApellidoMater" required placeholder="Ap. Materno">
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label">Teléfono</label>
                              <input type="text" class="form-control" data-toggle="input-mask" name="Telefono" required placeholder="Teléfono">
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label">Correo</label>
                              <input type="email" class="form-control" name="Correo" required placeholder="Correo">
                           </div>
                           <div class="col-md-6 mb-3">
                              <label class="form-label">Dirección</label>
                              <input type="text" class="form-control" data-toggle="input-mask" name="Direccion" required placeholder="Dirección">
                           </div>
                           <div class="col-md-6">
                              <input type="submit" class="btn btn-success btn-rounded" value="Guardar"></input>
                              <a href="?controlador=miembros&accion=inicio" class="btn btn-danger btn-rounded"
                                 value="Cancelar">Cancelar</a>
                           </div>
                        </form>
                     </div> <!-- end col -->
                  </div>
                  <!-- end row -->
               </div> <!-- end preview-->
            </div> <!-- end card-body -->
         </div> <!-- end card -->
      </div> <!-- end col -->
   </div> <!-- end row -->
</div> <!-- container -->