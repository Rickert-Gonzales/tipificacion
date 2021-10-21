<?php
$usuario = $_GET['usuario'];
?>
<div class="row">
   <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
      <div class="card">
         <div class="card-body">
            <a href="" class="btn btn-sm btn-link float-end">Export
               <i class="mdi mdi-download ms-1"></i>
            </a>
            <h4 class="header-title mt-2 mb-3">Comisión</h4>
            <!-- end table-responsive-->
            <div class="table-responsive">
               <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap">
                  <thead>
                     <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Ape. Paterno</th>
                        <th>Ape. Materno</th>
                        <th>Teléfono</th>
                        <th>N° Comisión</th>
                        <th>Cargo</th>
                        <th>Especialidad</th>
                        <th>Colegio Profesional</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach( $miembros as $miembro): ?>
                     <tr>
                        <td scope="row"><?php echo $miembro->DNI ?></td>
                        <td><?php echo $miembro->Nombres ?></td>
                        <td><?php echo $miembro->ApelliPater ?></td>
                        <td><?php echo $miembro->ApellidoMater ?></td>
                        <td><?php echo $miembro->Telefono ?></td>
                        <td><?php echo $miembro->idComisiones ?></td>
                        <td><?php echo $miembro->TipoCargo ?></td>
                        <td><?php echo $miembro->Nombre_Especia ?></td>
                        <td><?php echo $miembro->Descripcion ?></td>
                        <td>
                           <a href="#" class="btn-link" type="button" data-bs-toggle="modal"
                              data-bs-target="#signup-modal<?php echo $miembro->DNI ?>">
                              <i class="uil-pen ms-1 fs-4"></i>
                           </a>
                        </td>
                        <td>
                           <a href="#" class="btn-link" type="button" data-bs-toggle="modal"
                              data-bs-target="#warning-alert-modal<?php echo $miembro->DNI ?>">
                              <i class="uil-trash-alt ms-1 fs-4"></i>
                           </a>
                        </td>
                     </tr>


                     <!-- Modales -->
                     <!-- Modal de edición -->
                     <div id="signup-modal<?php echo $miembro->DNI ?>" class="modal fade" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <div class="text-center mt-2 mb-2">
                                    <h3 class="text-primary">Editar datos</h3>
                                 </div>
                                 <form class="ps-3 pe-3" action="" method="POST">
                                    <div class="mb-3">
                                       <label for="DNI" class="form-label">DNI</label>
                                       <input class="form-control" type="text" id="DNI" name="DNI" placeholder="DNI"
                                          value="<?php echo $miembro->DNI ?>">
                                    </div>
                                    <div class="mb-3">
                                       <label for="Nombres" class="form-label">Nombre</label>
                                       <input class="form-control" type="text" id="Nombres" name="Nombres" required=""
                                          placeholder="Nombres" value="<?php echo $miembro->Nombres ?>">
                                    </div>
                                    <div class="mb-3">
                                       <label for="ApelliPater" class="form-label">Apellido Paterno</label>
                                       <input class="form-control" type="text" required="" id="ApelliPater"
                                          name="ApelliPater" placeholder="Apellido P"
                                          value="<?php echo $miembro->ApelliPater ?>">
                                    </div>

                                    <div class="mb-3">
                                       <label for="ApellidoMater" class="form-label">Apellido Materno</label>
                                       <input class="form-control" type="text" required="" id="ApellidoMater"
                                          name="ApellidoMater" placeholder="Apellido M"
                                          value="<?php echo $miembro->ApellidoMater ?>">
                                    </div>

                                    <div class="mb-3">
                                       <label for="Telefono" class="form-label">Telefono</label>
                                       <input class="form-control" type="text" id="Telefono" name="Telefono" required=""
                                          placeholder="Telefono" value="<?php echo $miembro->Telefono ?>">
                                    </div>

                                    <div class="mb-3">
                                       <label for="idComisiones" class="form-label">Num. Comision</label>
                                       <input class="form-control" type="text" id="idComisiones" name="idComisiones"
                                          required="" placeholder="ID COMISION"
                                          value="<?php echo $miembro->idComisiones ?>">
                                    </div>

                                    <div class="mb-3">
                                       <label for="TipoCargo" class="form-label">Cargo</label>
                                       <input class="form-control" type="text" id="TipoCargo" name="TipoCargo"
                                          required="" placeholder="Cargo" value="<?php echo $miembro->TipoCargo ?>">
                                    </div>
                                    <!--
                                    <div class="mb-3">
                                       <label for="Nombre_Especia" class="form-label">Especialidad</label>
                                       <input class="form-control" type="text" id="Nombre_Especia" name="Nombre_Especia" required=""
                                          placeholder="Especialidad" value="<?php echo $miembro->Nombre_Especia ?>">
                                    </div>
                                    


                                    <div class="mb-3">
                                       <label for="Descripcion" class="form-label">Colegio</label>
                                       <input class="form-control" type="text" id="Descripcion" name="Descripcion" required=""
                                          placeholder="Colegio" value="<?php echo $miembro->Descripcion ?>">
                                    </div>

                                    -->


                                    <div class="mb-3 text-center">
                                       <input class="btn btn-primary btn-rounded" type="submit" name="buton"
                                          value="Actualizar">
                                    </div>
                                 </form>

                              </div>
                           </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                     </div>
                     <!-- Modal de eliminacion -->
                     <div id="warning-alert-modal<?php echo $miembro->DNI ?>" class="modal fade" tabindex="-1"
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
                                       <button class="btn btn-warning btn-rounded" type="submit" name="eliminarMiem"
                                          value="<?php echo $miembro->DNI ?>">Eliminar</button>
                                    </div>
                                 </form>
                              </div>
                           </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                     </div><!-- /.modal -->
                     <?php endforeach ?>
                  </tbody>
               </table>
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
                           href="?controlador=miembros&accion=inicio&usuario=<?php $usuario?>&pagina=<?php echo $pagina - 1 ?>"
                           aria-label="Previous">
                           <span aria-hidden="true">&laquo;</span>
                        </a>
                     </li>
                     <?php endif ?>
                     <!-- Paginas -->
                     <?php for ($i = 1; $i <= $numeroPaginacion; $i++){
                     if ($pagina == $i) {
                        echo "<li class='active page-item'><a class='page-link' href='?controlador=miembros&accion=inicio&usuario=$usuario&pagina=$i'>$i</a></li>";
                     } else {
                        echo "<li class='page-item'><a class='page-link' href='?controlador=miembros&accion=inicio&usuario=$usuario&pagina=$i'>$i</a></li>";
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
                           href="?controlador=miembros&accion=inicio&usuario=<?php $usuario?>&pagina=<?php echo $pagina + 1 ?>"
                           aria-label="Next">
                           <span aria-hidden="true">&raquo;</span>
                        </a>
                     </li>
                     <?php endif ?>
                  </ul>
               </nav>
            </div> <!-- end table-responsive-->

         </div> <!-- end card-body-->
      </div> <!-- end card-->
   </div>
</div>