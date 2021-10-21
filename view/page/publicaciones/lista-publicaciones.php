<?php
$usuario = $_GET['usuario'];
?>
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <div class="tab-content">
               <div class="tab-pane show active" id="datos-generales">
                  <div class="col-md-12">
                     <form action="" class="row" method="POST">
                        <div class="card-body">
                           <h4 class="header-title">Filtrar Publicaciones</h4>
                           <div class="row">
                              <div class="col-lg-5">
                                 <p class="mb-1 fw-bold text-muted">Estado</p>
                                 <p class="text-muted font-14">Seleccione el estado de la publicación
                                 </p>
                                 <div class="row">
                                    <div class="col-md-3">
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="estado" id="estado"
                                             value="Publicado">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                             Publicado
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="estado" id="estado"
                                             value="Espera">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                             Espera
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="estado" id="estado"
                                             value="No Publicado">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                             No Publicado
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-7">
                                 <p class="mb-1 fw-bold text-muted">Tipo</p>
                                 <p class="text-muted font-14">Seleccione el tipo de publicación
                                 </p>
                                 <div class="row">
                                    <div class="col-md-3">
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tipo" id="tipo"
                                             value="Libro">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                             Libro
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tipo" id="tipo"
                                             value="Ensayo">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                             Ensayo
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tipo" id="tipo"
                                             value="Guia">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                             Guia
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tipo" id="tipo"
                                             value="Manual">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                             Manual
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <input href="" type="submit" class="btn btn-success btn-rounded" name="filtrar"
                              value="Filtrar">
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
<div class="row">
   <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
      <div class="card">
         <div class="card-body">
            <a href="" class="btn btn-sm btn-link float-end">Export
               <i class="mdi mdi-download ms-1"></i>
            </a>
            <h4 class="header-title mt-2 mb-3">Lista de Publicaciones</h4>

            <div class="table-responsive">
               <table class="table table-centered table-nowrap table-hover mb-0">
                  <thead>
                     <tr>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Tipo</th>
                        <th>Edición</th>
                        <th>N° Paginas</th>
                        <th>Editorial</th>
                        <th>Fech.Publicación</th>
                        <th>Estado</th>
                        <th>Validar</th>
                        <th>Ver Detalles</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach($listaPublicaciones as $publicacion):?>
                     <tr>
                        <td><?php echo $publicacion->idTrab_Publicaciones ?></td>
                        <td><?php echo $publicacion->Titulo ?></td>
                        <td><?php echo $publicacion->Autor ?></td>
                        <td><?php echo $publicacion->Nom_Tipo ?></td>
                        <td><?php echo $publicacion->Edicion ?></td>
                        <td><?php echo $publicacion->NumPaginas ?></td>
                        <td><?php echo $publicacion->Editorial ?></td>
                        <td><?php echo $publicacion->FechaPublic ?></td>
                        <td><?php echo $publicacion->estadopubli ?></td>
                        <?php if($publicacion->TipoEstado == "No validado"):?>
                        <td>
                           <a href="#" class="btn-link" type="button" data-bs-toggle="modal"
                              data-bs-target="#warning-alert-modal<?php echo $publicacion->idTrab_Publicaciones; echo 'valid' ?>">
                              <p class="text-danger"><?php echo $publicacion->TipoEstado ?></p>
                           </a>
                        </td>
                        <?php elseif($publicacion->TipoEstado == "Espera"):?>
                        <td>
                           <a href="#" class="btn-link" type="button" data-bs-toggle="modal"
                              data-bs-target="#warning-alert-modal<?php echo $publicacion->idTrab_Publicaciones; echo 'valid' ?>">
                              <p class="text-warning"><?php echo $publicacion->TipoEstado ?></p>
                           </a>
                        </td>
                        <?php else: ?>
                        <td>
                           <p class="text-success"><?php echo $publicacion->TipoEstado ?></p>
                        </td>
                        <?php endif ?>
                        <td>
                           <a href="#" class="btn-link" type="button" data-bs-toggle="modal"
                              data-bs-target="#bs-example-modal-lg<?php echo $publicacion->idTrab_Publicaciones; echo 'elmP' ?>">
                              <i class="uil uil-eye fs-4"></i>
                           </a>
                        </td>
                     </tr>
                     <div class="modal fade"
                        id="bs-example-modal-lg<?php echo $publicacion->idTrab_Publicaciones; echo 'elmP' ?>"
                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h4 class="modal-title" id="myLargeModalLabel">Detalles</h4>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form class="ps-3 pe-3" action="" method="POST">
                                    <div class="mb-3 row">
                                       <div class="col-sm-6">
                                          <label for="codigoPlato" class="form-label">ID</label>
                                          <input class="form-control" type="text" id="idPubli" required=""
                                             name="idPubli" placeholder="idPubli"
                                             value="<?php echo $publicacion->idTrab_Publicaciones ?>">
                                       </div>
                                       <div class="col-sm-6">
                                          <label for="titulo" class="form-label">Titulo</label>
                                          <input class="form-control" type="text" id="titulo" required="" name="titulo"
                                             placeholder="Título" value="<?php echo $publicacion->Titulo ?>">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <div class="col-sm-6">
                                          <label for="autor" class="form-label">Autor</label>
                                          <input class="form-control" type="text" id="autor" required="" name="autor"
                                             placeholder="Autor" disabled value="<?php echo $publicacion->Autor ?>">
                                       </div>
                                       <div class="col-sm-6">
                                          <label for="tipo" class="form-label">Tipo</label>
                                          <input class="form-control" type="text" id="tipo" required="" name="tipo"
                                             placeholder="Tipo" value="<?php echo $publicacion->Nom_Tipo ?>">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <div class="col-sm-6">
                                          <label for="edicion" class="form-label">Edición</label>
                                          <input class="form-control" type="text" id="edicion" required=""
                                             name="edicion" placeholder="Edición"
                                             value="<?php echo $publicacion->Edicion ?>">
                                       </div>
                                       <div class="col-sm-6">
                                          <label for="numPaginas" class="form-label">Num. Paginas</label>
                                          <input class="form-control" type="text" id="numPaginas" required=""
                                             name="numPaginas" placeholder="Num. Paginas"
                                             value="<?php echo $publicacion->NumPaginas ?>">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <div class="col-sm-6">
                                          <label for="editorial" class="form-label">Editorial</label>
                                          <input class="form-control" type="text" id="editorial" required=""
                                             name="editorial" placeholder="Editorial"
                                             value="<?php echo $publicacion->Editorial ?>">
                                       </div>
                                       <div class="col-sm-6">
                                          <label for="fechPubli" class="form-label">Fech.Publicación</label>
                                          <input class="form-control" type="deta" id="fechPubli" required=""
                                             name="fechPubli" placeholder="Fech. Publicación"
                                             value="<?php echo $publicacion->FechaPublic ?>">
                                       </div>
                                    </div>
                                    <div class="mb-3 text-center">
                                       <input class="btn btn-primary btn-rounded" name="editar" type="submit"
                                          value="Actualizar">
                                    </div>
                                 </form>
                              </div>
                           </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                     </div>
                     <!-- Modal Validacion -->
                     <div id="warning-alert-modal<?php echo $publicacion->idTrab_Publicaciones; echo 'valid' ?>"
                        class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                           <div class="modal-content">
                              <div class="modal-body p-4">
                                 <form class="ps-3 pe-3" method="POST">
                                    <div class="mb-3">
                                       <i class="dripicons-gear h1 text-warning"></i>
                                       <h4 class="mt-2" class="text-center">Atención</h4>
                                       <p class="mt-3" class="text-center">¿Seguro que quiere validar?</p>
                                       <p class="mt-3">Tipo:</p>
                                       <?php echo $publicacion->Nom_Tipo ?>
                                    </div>
                                    <div class="mb-3 text-center">
                                       <button class="btn btn-primary btn-rounded" type="submit" name="validar"
                                          value="<?php echo $publicacion->idTrab_Publicaciones;?>">Validar</button>
                                    </div>
                                 </form>
                              </div>
                           </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                     </div>
                     <?php endforeach ?>
                  </tbody>
               </table>
            </div>
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
                        href="?controlador=publicaciones&accion=inicio&usuario=<?php $usuario?>&pagina=<?php echo $pagina - 1 ?>"
                        aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                     </a>
                  </li>
                  <?php endif ?>
                  <!-- Paginas -->
                  <?php for ($i = 1; $i <= $numeroPaginacion; $i++){
                     if ($pagina == $i) {
                        echo "<li class='active page-item'><a class='page-link' href='?controlador=publicaciones&accion=inicio&usuario=$usuario&pagina=$i'>$i</a></li>";
                     } else {
                        echo "<li class='page-item'><a class='page-link' href='?controlador=publicaciones&accion=inicio&usuario=$usuario&pagina=$i'>$i</a></li>";
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
                        href="?controlador=publicaciones&accion=inicio&usuario=<?php $usuario?>&pagina=<?php echo $pagina + 1 ?>"
                        aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                     </a>
                  </li>
                  <?php endif ?>
               </ul>
            </nav>
         </div>
      </div>
   </div>
</div>