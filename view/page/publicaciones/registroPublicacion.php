<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <div class="tab-content">
               <div class="tab-pane show active" id="datos-generales">
                  <div class="col-md-12">
                     <form action="" class="row" method="POST">
                        <div class="card-body">
                           <h4 class="header-title">Datos</h4>
                           <ul class="nav nav-tabs nav-bordered mb-3">
                              <li class="nav-item">
                                 <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false"
                                    class="nav-link active">
                                    Autor
                                 </a>
                              </li>
                           </ul>
                           <div class="row">
                              <div class="col-lg-6">
                                 <p class="mb-1 fw-bold text-muted">Seleccione un docente</p>
                                 <p class="text-muted font-14">Seleccione un docente para registrs su publicaicòn
                                 </p>
                                 <select class="select2 form-control select2-multiple" data-toggle="select2"
                                    name="docente">
                                    <option value="Admi">Seleccione...</option>
                                    <optgroup label="Cargos">
                                       <?php foreach($listaDocentes as $docentes) :?>
                                       <option value="<?php echo $docentes->Docentes_idDocentes ?>">
                                          <?php echo $docentes-> Docentes_idDocentes?></option>
                                       <?php endforeach?>
                                    </optgroup>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <h4 class="header-title">Datos de Publicación</h4>
                           <ul class="nav nav-tabs nav-bordered mb-3">
                              <li class="nav-item">
                                 <a href="#datos-generales" data-bs-toggle="tab" aria-expanded="false"
                                    class="nav-link active" class="header-title">
                                    Ingrese los datos
                                 </a>
                              </li>
                           </ul>
                           <div class="row">
                              <div class="col-lg-6">
                                 <label class="form-label">Seleccione tipo de trabajo</label>
                                 <select class="select2 form-control select2-multiple" data-toggle="select2"
                                    name="tTrabajo">
                                    <option value="tTrabajo">Seleccione...</option>
                                    <optgroup label="Cargos">
                                       <?php foreach($listaTrabajos as $trabajos) :?>
                                       <option value="<?php echo $trabajos->idTiposdeTrabajo ?>">
                                          <?php echo $trabajos->Nom_Tipo?></option>
                                       <?php endforeach?>
                                    </optgroup>
                                 </select>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label class="form-label">Título del trabajo</label>
                                 <input type="text" class="form-control" name="titulo" required placeholder="Título">
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label class="form-label">N° de páginas</label>
                                 <input type="text" class="form-control" name="numPaginas" required
                                    placeholder="N° de páginas">
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label class="form-label">Editorial</label>
                                 <input type="text" class="form-control" name="editorial" required
                                    placeholder="Editorial">
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label class="form-label">Edición</label>
                                 <input type="text" class="form-control" name="edicion" required placeholder="Edición">
                              </div>
                           </div>
                           <br>
                           <div class="col-md-6">
                              <input type="submit" class="btn btn-success btn-rounded" value="Guardar"></input>
                              <a href="?controlador=platos&accion=inicio" class="btn btn-danger btn-rounded"
                                 value="Cancelar">Cancelar</a>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>