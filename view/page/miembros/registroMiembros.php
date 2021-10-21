<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <h5 class="header-title">Registro de nueva comision</h5>
            <hr class="mt-3 mb-3">
            <div class="tab-content">
               <div class="tab-pane show active" id="datos-generales">
                  <div class="row">
                     <div class="col-md-12">
                        <form class="row" method="POST">
                           <div class="row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="header-title">Periodo de duracion</h5>
                                       <ul class="nav nav-tabs nav-bordered mb-3">
                                          <li class="nav-item">
                                             <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active" class="header-title">
                                                Seleccione Periodo
                                             </a>
                                          </li>
                                       </ul>
                                       <div class="col-md-3 mb-3 position-relative" id="Fecha_Inicio">
                                          <label class="form-label">Fecha de Inicio</label>
                                          <input type="text" class="form-control" data-provide="datepicker" required
                                             data-date-container="#Fecha_Inicio" name="Fecha_Inicio">
                                       </div>
                                       <div class="col-md-3 mb-3 position-relative" id="Fecha_Final">
                                          <label class="form-label">Fecha Final</label>
                                          <input type="text" class="form-control" data-provide="datepicker" required
                                             data-date-container="#Fecha_Final" name="Fecha_Final">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="header-title">Datos del primer miembro</h5>
                                       <ul class="nav nav-tabs nav-bordered mb-3">
                                          <li class="nav-item">
                                             <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active" class="header-title">
                                                Seleccione Cargo
                                             </a>
                                          </li>
                                       </ul>
                                       <div class="tab-content">
                                          <div class="tab-pane show active" id="Especialidad">
                                             <div class="row">
                                                <div class="col-lg-4">
                                                   <p class="mb-1 fw-bold text-muted">Seleccione cargo</p>
                                                   <select class="select2 form-control select2-multiple"
                                                      data-toggle="select2" name="Cargos1">
                                                      <option value="Admi">Seleccione...</option>
                                                      <optgroup label="Cargos">
                                                         <?php foreach($selectCargo as $cargos) :?>
                                                         <option value="<?php echo $cargos->idCargos  ?>">
                                                            <?php echo $cargos->TipoCargo?></option>
                                                         <?php endforeach?>
                                                      </optgroup>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr class="mt-3 mb-3">
                                       <ul class="nav nav-tabs nav-bordered mb-3">
                                          <li class="nav-item">
                                             <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active">
                                                Datos
                                             </a>
                                          </li>
                                       </ul>
                                       <p class="mb-1 fw-bold text-muted">Seleccione docente</p>
                                       <select class="select2 form-control select2-multiple" data-toggle="select2"
                                          name="ID1">
                                          <option value="Admi">Seleccione...</option>
                                          <optgroup label="ID">
                                             <?php foreach($selectDocente as $cargas) :?>
                                             <option value="<?php echo $cargas->idDocentes  ?>">
                                                <?php echo $cargas->nombresc?></option>
                                             <?php endforeach?>
                                          </optgroup>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="header-title">Datos del Segundo miembro</h5>
                                       <ul class="nav nav-tabs nav-bordered mb-3">
                                          <li class="nav-item">
                                             <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active" class="header-title">
                                                Seleccione Cargo
                                             </a>
                                          </li>
                                       </ul>
                                       <div class="tab-content">
                                          <div class="tab-pane show active" id="Especialidad">
                                             <div class="row">

                                                <div class="col-lg-4">
                                                   <p class="mb-1 fw-bold text-muted">Seleccione cargo</p>
                                                   <select class="select2 form-control select2-multiple"
                                                      data-toggle="select2" name="Cargos2">
                                                      <option value="Admi">Seleccione...</option>
                                                      <optgroup label="Cargos">
                                                         <?php foreach($selectCargo as $cargos) :?>
                                                         <option value="<?php echo $cargos->idCargos  ?>">
                                                            <?php echo $cargos->TipoCargo?></option>
                                                         <?php endforeach?>
                                                      </optgroup>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr class="mt-3 mb-3">
                                       <ul class="nav nav-tabs nav-bordered mb-3">
                                          <li class="nav-item">
                                             <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active">
                                                Datos
                                             </a>
                                          </li>
                                       </ul>
                                       <p class="mb-1 fw-bold text-muted">Seleccione docente</p>
                                       <select class="select2 form-control select2-multiple" data-toggle="select2"
                                          name="ID2">
                                          <option value="Admi">Seleccione...</option>
                                          <optgroup label="ID">
                                             <?php foreach($selectDocente as $cargas) :?>
                                             <option value="<?php echo $cargas->idDocentes  ?>">
                                                <?php echo $cargas->nombresc?></option>
                                             <?php endforeach?>
                                          </optgroup>
                                       </select>
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="header-title">Datos del Tercer miembro</h5>
                                       <ul class="nav nav-tabs nav-bordered mb-3">
                                          <li class="nav-item">
                                             <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active" class="header-title">
                                                Seleccione Cargo
                                             </a>
                                          </li>
                                       </ul>
                                       <div class="tab-content">
                                          <div class="tab-pane show active" id="Especialidad">
                                             <div class="row">

                                                <div class="col-lg-4">
                                                   <p class="mb-1 fw-bold text-muted">Seleccione cargo</p>
                                                   <select class="select2 form-control select2-multiple"
                                                      data-toggle="select2" name="Cargos3">
                                                      <option value="Admi">Seleccione...</option>
                                                      <optgroup label="Cargos">
                                                         <?php foreach($selectCargo as $cargos) :?>
                                                         <option value="<?php echo $cargos->idCargos  ?>">
                                                            <?php echo $cargos->TipoCargo?></option>
                                                         <?php endforeach?>
                                                      </optgroup>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr class="mt-3 mb-3">
                                       <ul class="nav nav-tabs nav-bordered mb-3">
                                          <li class="nav-item">
                                             <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active">
                                                Datos
                                             </a>
                                          </li>
                                       </ul>
                                       <p class="mb-1 fw-bold text-muted">Seleccione docente</p>
                                       <select class="select2 form-control select2-multiple" data-toggle="select2"
                                          name="ID3">
                                          <option value="Admi">Seleccione...</option>
                                          <optgroup label="ID">
                                             <?php foreach($selectDocente as $cargas) :?>
                                             <option value="<?php echo $cargas->idDocentes  ?>">
                                                <?php echo $cargas->nombresc?></option>
                                             <?php endforeach?>
                                          </optgroup>
                                       </select>
                                    </div>
                                 </div>

                              </div>
                           </div>
                           <div class="col-md-6">
                              <input type="submit" class="btn btn-success btn-rounded" value="Guardar"></input>
                              <a href="?controlador=miembros&accion=inicio" class="btn btn-danger btn-rounded"
                                 value="Cancelar">Cancelar</a>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>