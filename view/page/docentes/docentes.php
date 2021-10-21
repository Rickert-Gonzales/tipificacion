<?php
$usuario = $_GET['usuario'];
?>
<div class="container-fluid">
   <div class="row">
      <div class="mb-3 text-start">

      </div>
   </div>
   <div class="row">
      <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
         <div class="card">
            <div class="card-body">
               <h4 class="header-title mt-2 mb-3">Docentes con Trabajos Presentados</h4>

               <div class="table-responsive">
                  <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap">
                     <thead>
                        <tr>
                           <th>Código Docente</th>
                           <th>DNI</th>
                           <th>Nombre</th>
                           <th>Ape. Paterno</th>
                           <th>Ape. Materno</th>x
                           <th>Publicación</th>
                           <th>Tipo</th>
                           <th>Estado</th>
                           <th>Estado P</th>
                           <th>Editar</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach( $docentes as $docentesp): ?>
                        <tr>
                           <td scope="row"><?php echo $docentesp->idDocentes ?></td>
                           <td><?php echo $docentesp->DNI ?></td>
                           <td><?php echo $docentesp->Nombres ?></td>
                           <td><?php echo $docentesp->ApelliPater ?></td>
                           <td><?php echo $docentesp->ApellidoMater ?></td>
                           <td><?php echo $docentesp->Titulo ?></td>
                           <td><?php echo $docentesp->Nom_Tipo ?></td>
                           <td><?php echo $docentesp->TipoEstado ?></td>
                           <td><?php echo $docentesp->estadopubli ?></td>
                           <td>
                              <a href="#" class="btn-link" type="button" data-bs-toggle="modal"
                                 data-bs-target="#signup-modal<?php echo $docentesp->idDocentes ?>">
                                 <i class="uil-pen ms-1 fs-4"></i>
                              </a>
                           </td>
                        </tr>

                        <!-- Modales -->
                        <!-- Modal de edición -->
                        <div id="signup-modal<?php echo $docentesp->idDocentes ?>" class="modal fade" tabindex="-1"
                           role="dialog" aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-body">
                                    <div class="text-center mt-2 mb-2">
                                       <h3 class="text-primary">Editar datos</h3>
                                    </div>
                                    <form class="ps-3 pe-3" action="" method="POST">
                                       <div class="mb-3">
                                          <label for="idDocentes" class="form-label">ID DOCENTE</label>
                                          <input class="form-control" type="text" id="idDocentes" name="idDocentes"
                                             required="" placeholder="Id docente"
                                             value="<?php echo $docentesp->idDocentes ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="Nombres" class="form-label">Nombres</label>
                                          <input class="form-control" type="text" id="Nombres" name="Nombres"
                                             required="" placeholder="Nombres"
                                             value="<?php echo $docentesp->Nombres ?>">
                                       </div>
                                       <div class="mb-3">
                                          <label for="ApelliPater" class="form-label">Apellido Paterno</label>
                                          <input class="form-control" type="text" required="" id="ApelliPater"
                                             name="ApelliPater" placeholder="Apellido P"
                                             value="<?php echo $docentesp->ApelliPater ?>">
                                       </div>

                                       <div class="mb-3">
                                          <label for="ApellidoMater" class="form-label">Apellido Materno</label>
                                          <input class="form-control" type="text" required="" id="ApellidoMater"
                                             name="ApellidoMater" placeholder="Apellido M"
                                             value="<?php echo $docentesp->ApellidoMater ?>">
                                       </div>

                                       <div class="mb-3">
                                          <label for="Titulo" class="form-label">Titulo</label>
                                          <input class="form-control" type="text" id="Titulo" name="Titulo" required=""
                                             placeholder="Titulo" value="<?php echo $docentesp->Titulo ?>">
                                       </div>

                                       <div class="mb-3">
                                          <label for="Nom_Tipo" class="form-label">Tipo</label>
                                          <input class="form-control" type="text" id="Nom_Tipo" name="Nom_Tipo"
                                             required="" placeholder="Tipo" value="<?php echo $docentesp->Nom_Tipo ?>">
                                       </div>

                                       <div class="mb-3">
                                          <label for="TipoEstado" class="form-label">Estado tipo</label>
                                          <input class="form-control" type="text" id="TipoEstado" name="TipoEstado"
                                             required="" placeholder="Estado tipo"
                                             value="<?php echo $docentesp->TipoEstado ?>">
                                       </div>

                                       <div class="mb-3">
                                          <label for="estadopubli" class="form-label">Estado Publicacion</label>
                                          <input class="form-control" type="text" id="estadopubli" name="estadopubli"
                                             required="" placeholder="Estado Publicacion"
                                             value="<?php echo $docentesp->estadopubli ?>">
                                       </div>

                                       <div class="mb-3 text-center">
                                          <input class="btn btn-primary btn-rounded" type="submit" name="buton"
                                             value="Actualizar">
                                       </div>
                                    </form>

                                 </div>
                              </div><!-- /.modal-content -->
                           </div><!-- /.modal-dialog -->
                        </div>

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
                           href="?controlador=docentes&accion=docentes_pub&usuario=<?php $usuario?>&pagina=<?php echo $pagina - 1 ?>"
                           aria-label="Previous">
                           <span aria-hidden="true">&laquo;</span>
                        </a>
                     </li>
                     <?php endif ?>
                     <!-- Paginas -->
                     <?php for ($i = 1; $i <= $numeroPaginacion; $i++){
                     if ($pagina == $i) {
                        echo "<li class='active page-item'><a class='page-link' href='?controlador=docentes&accion=docentes_pub&usuario=$usuario&pagina=$i'>$i</a></li>";
                     } else {
                        echo "<li class='page-item'><a class='page-link' href='?controlador=docentes&accion=docentes_pub&usuario=$usuario&pagina=$i'>$i</a></li>";
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
                           href="?controlador=docentes&accion=docentes_pub&usuario=<?php $usuario?>&pagina=<?php echo $pagina + 1 ?>"
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
</div>