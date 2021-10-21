<?php
$usuario = $_GET['usuario'];
?>
<div class="row">
   <div class="col-xl-6 col-lg-12">
      <div class="row">
         <div class="col-lg-6">
            <div class="card widget-flat">
               <div class="card-body">
                  <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Número de
                     Libros
                  </h5>
                  <h3 class="mt-3 mb-3"><?php echo $numLibros ?></h3>
                  <p class="mb-0 text-muted">
                     <i class="uil uil-file-bookmark-alt fs-2"></i>
                  </p>
               </div>
            </div>
         </div>

         <div class="col-lg-6">
            <div class="card widget-flat">
               <div class="card-body">
                  <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Número de
                     Guias</h5>
                  <h3 class="mt-3 mb-3"><?php echo $numGuias ?></h3>
                  <p class="mb-0 text-muted">
                     <i class="uil uil-file-bookmark-alt fs-2"></i>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="col-xl-6 col-lg-12">
      <div class="row">
         <div class="col-lg-6">
            <div class="card widget-flat">
               <div class="card-body">
                  <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Número de
                     Ensayos</h5>
                  <h3 class="mt-3 mb-3"><?php echo $numEnsayos ?></h3>
                  <p class="mb-0 text-muted">
                     <i class="uil uil-file-bookmark-alt fs-2"></i>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="card widget-flat">
               <div class="card-body">
                  <h5 class="text-muted fw-normal mt-0" title="Growth">Número Manuales
                  </h5>
                  <h3 class="mt-3 mb-3"><?php echo $numManuales ?></h3>
                  <p class="mb-0 text-muted">
                     <i class="uil uil-file-bookmark-alt fs-2"></i>
                  </p>
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
            <h4 class="header-title mt-2 mb-3">Comisión</h4>

            <div class="table-responsive">
               <table id="state-saving-datatable" class="table activate-select dt-responsive nowrap">
                  <thead>
                     <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Ape. Paterno</th>
                        <th>Ape. Materno</th>
                        <th>Teléfeno</th>
                        <th>Comisión</th>
                        <th>Especialidad</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach( $listaMiembros as $miembro): ?>
                     <tr>
                        <td scope="row"><?php echo $miembro->DNI ?></td>
                        <td><?php echo $miembro->Nombres ?></td>
                        <td><?php echo $miembro->ApelliPater ?></td>
                        <td><?php echo $miembro->ApellidoMater ?></td>
                        <td><?php echo $miembro->Telefono ?></td>
                        <td><?php echo $miembro->TipoCargo ?></td>
                        <td><?php echo $miembro->idComisiones ?></td>
                        <td><?php echo $miembro->Nombre_Especia ?></td>
                     </tr>
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
                        href="?controlador=dashboard&accion=dashboard&usuario=<?php $usuario?>&pagina=<?php echo $pagina - 1 ?>"
                        aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                     </a>
                  </li>
                  <?php endif ?>
                  <!-- Paginas -->
                  <?php for ($i = 1; $i <= $numeroPaginacion; $i++){
                     if ($pagina == $i) {
                        echo "<li class='active page-item'><a class='page-link' href='?controlador=dashboard&accion=dashboard&usuario=$usuario&pagina=$i'>$i</a></li>";
                     } else {
                        echo "<li class='page-item'><a class='page-link' href='?controlador=dashboard&accion=dashboard&usuario=$usuario&pagina=$i'>$i</a></li>";
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
                        href="?controlador=dashboard&accion=dashboard&usuario=<?php $usuario?>&pagina=<?php echo $pagina + 1 ?>"
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