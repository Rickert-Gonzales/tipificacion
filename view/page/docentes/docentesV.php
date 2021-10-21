<?php
$usuario = $_GET['usuario'];
?>
<div class="container-fluid">
   <div class="row">
      <div class="mb-3 text-start">
         <a href="?controlador=docentes&accion=registro_docentes" class="btn btn-primary btn-rounded"
            type="button">Nuevo
            Registro<i class="uil-plus ms-1 fs-4"></i></a>
      </div>
   </div>
   <div class="row">
      <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
         <div class="card">
            <div class="card-body">
               <h4 class="header-title mt-2 mb-3">Docentes Registrados</h4>

               <div class="table-responsive">
                  <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap">
                     <thead>
                        <tr>
                           <th>Código Docente</th>
                           <th>DNI</th>
                           <th>Nombre</th>
                           <th>Ape. Paterno</th>
                           <th>Ape. Materno</th>
                           <th>Telefono</th>
                           <th>Correo</th>
                           <th>Direccion</th>
                           <th>Especialidad</th>
                           <th>Colegio</th>
                           <th>Editar</th>
                           <th>Eliminar</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach( $docentes as $docente): ?>
                        <tr>
                           <td scope="row"><?php echo $docente->idDocentes ?></td>
                           <td><?php echo $docente->DNI ?></td>
                           <td><?php echo $docente->Nombres ?></td>
                           <td><?php echo $docente->ApelliPater ?></td>
                           <td><?php echo $docente->ApellidoMater ?></td>
                           <td><?php echo $docente->Telefono ?></td>
                           <td><?php echo $docente->Correo ?></td>
                           <td><?php echo $docente->Direccion ?></td>
                           <td><?php echo $docente->fk_idEspecialidad ?></td>
                           <td><?php echo $docente->fki_dColegios_Profes ?></td>


                           <td>
                              <a href="#" class="btn-link" type="button" data-bs-toggle="modal"
                                 data-bs-target="#signup-modal<?php echo $docente->idDocentes ?>">
                                 <i class="uil-pen ms-1 fs-4"></i>
                              </a>
                           </td>
                           <td>
                              <a href="#" class="btn btn-sm btn-link" type="button" data-bs-toggle="modal"
                                 data-bs-target="#warning-alert-modal<?php echo $docente->idDocentes ?>"><i
                                    class="uil-trash-alt ms-1 fs-4"></i>
                              </a>
                           </td>
                        </tr>
                        <!-- Modales -->
                        <!-- Modal de edición -->
                        <div id="signup-modal<?php echo $docente->idDocentes ?>" class="modal fade" tabindex="-1"
                           role="dialog" aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-body">
                                    <div class="text-center mt-2 mb-2">
                                       <h3 class="text-primary">Editar datos</h3>
                                    </div>
                                    <form class="ps-3 pe-3" action="" method="POST">
                                       <div class="mb-3">
                                          <label for="idDocentes" class="form-label">ID Docente</label>
                                          <input class="form-control" type="text" id="idDocentes" name="idDocentes"
                                             required="" placeholder="Id docente"
                                             value="<?php echo $docente->idDocentes ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="DNI" class="form-label">DNI</label>
                                          <input class="form-control" type="text" id="DNI" name="DNI" required=""
                                             placeholder="DNI" value="<?php echo $docente->DNI ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="Nombres" class="form-label">Nombre</label>
                                          <input class="form-control" type="text" id="Nombres" name="Nombres"
                                             required="" placeholder="Nombres" value="<?php echo $docente->Nombres ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="ApelliPater" class="form-label">Apellido Paterno</label>
                                          <input class="form-control" type="text" required="" id="ApelliPater"
                                             name="ApelliPater" placeholder="Apellido P"
                                             value="<?php echo $docente->ApelliPater ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="ApellidoMater" class="form-label">Apellido Materno</label>
                                          <input class="form-control" type="text" required="" id="ApellidoMater"
                                             name="ApellidoMater" placeholder="Apellido M"
                                             value="<?php echo $docente->ApellidoMater ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="Telefono" class="form-label">Telefono</label>
                                          <input class="form-control" type="text" id="Telefono" name="Telefono"
                                             required="" placeholder="Telefono"
                                             value="<?php echo $docente->Telefono ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="Correo" class="form-label">Correo</label>
                                          <input class="form-control" type="text" id="Correo" name="Correo" required=""
                                             placeholder="Correo" value="<?php echo $docente->Correo ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="Direccion" class="form-label">Dirección</label>
                                          <input class="form-control" type="text" id="Direccion" name="Direccion"
                                             required="" placeholder="Direccion"
                                             value="<?php echo $docente->Direccion ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="fki_dColegios_Profes" class="form-label">Colegio</label>
                                          <input class="form-control" type="text" id="fki_dColegios_Profes"
                                             name="fki_dColegios_Profes" required="" placeholder="Colegio"
                                             value="<?php echo $docente->fki_dColegios_Profes ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="fk_idEspecialidad" class="form-label">Especialidad</label>
                                          <input class="form-control" type="text" id="fk_idEspecialidad"
                                             name="fk_idEspecialidad" required="" placeholder="Especialidad"
                                             value="<?php echo $docente->fk_idEspecialidad ?>">
                                       </div>
                                       <div class="mb-3 text-center">
                                          <input class="btn btn-primary btn-rounded" type="submit" name="EditarDocen"
                                             value="Actualizar">
                                       </div>
                                    </form>
                                 </div>
                              </div><!-- /.modal-content -->
                           </div><!-- /.modal-dialog -->
                        </div>
                        <!-- Modal de eliminacion -->
                        <div id="warning-alert-modal<?php echo $docente->idDocentes ?>" class="modal fade" tabindex="-1"
                           role="dialog" aria-hidden="true">
                           <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                 <div class="modal-body p-4">
                                    <form class="ps-3 pe-3" action="#" method="POST">
                                       <div class="mb-3">
                                          <i class="dripicons-warning h1 text-warning"></i>
                                          <h4 class="mt-2">Atención</h4>
                                          <p class="mt-3">¿Seguro que quiere eliminar esta información?</p>
                                       </div>
                                       <div class="mb-3 text-center">
                                          <button class="btn btn-warning btn-rounded" type="submit" name="eliminarDoc"
                                             value="<?php echo $docente->idDocentes ?>">Eliminar</button>
                                       </div>
                                    </form>
                                 </div>
                              </div><!-- /.modal-content -->
                           </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <?php endforeach ?>
                     </tbody>
                  </table>
               </div> <!-- end table-responsive-->
               <!-- Paginación -->
               <nav class="card-body d-flex justify-content-end">
                  <ul class="pagination pagination-rounded mb-0">
                     <?php if($pagina == 1 ): ?>
                     <li class="page-item disabled">
                        <a class="page-link" href="" aria-label="Previous">
                           <span aria-hidden="true">&laquo;</span>
                        </a>
                     </li>
                     <?php else: ?>
                     <li class="page-item">
                        <a class="page-link"
                           href="?controlador=docentes&accion=inicio&usuario=<?php $usuario?>&pagina=<?php echo $pagina - 1 ?>"
                           aria-label="Previous">
                           <span aria-hidden="true">&laquo;</span>
                        </a>
                     </li>
                     <?php endif ?>
                     <!-- Paginas -->
                     <?php for ($i = 1; $i <= $numeroPaginacion; $i++){
                     if ($pagina == $i) {
                        echo "<li class='active page-item'><a class='page-link' href='?controlador=docentes&accion=inicio&usuario=$usuario&pagina=$i'>$i</a></li>";
                     } else {
                        echo "<li class='page-item'><a class='page-link' href='?controlador=docentes&accion=inicio&usuario=$usuario&pagina=$i'>$i</a></li>";
                     }
                  }
                  ?>
                     <!-- Flecha -->
                     <?php if($pagina == 1 ): ?>
                     <li class="page-item">
                        <a class="page-link" href="" aria-label="Next">
                           <span aria-hidden="true">&raquo;</span>
                        </a>
                     </li>
                     <?php else: ?>
                     <li class="page-item">
                        <a class="page-link"
                           href="?controlador=docentes&accion=inicio&usuario=<?php $usuario?>&pagina=<?php echo $pagina + 1 ?>"
                           aria-label="Next">
                           <span aria-hidden="true">&raquo;</span>
                        </a>
                     </li>
                     <?php endif ?>
                  </ul>
               </nav>
            </div> <!-- end card-body-->
         </div> <!-- end card-->
      </div>
   </div>