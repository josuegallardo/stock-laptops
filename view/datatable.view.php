<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jquery-3.3.1.js"></script>
    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTADO LAPTOPS
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div  class="table-responsive">
                              
                                <table id="tblData" class="table table-bordered table-striped table-hover dataTable ">
                                    <!--<table id="tblData" class="table table-bordered table-striped table-hover dataTable js-exportable">-->
                                    <thead>
                                        <tr>
                                            <th>ID Laptop</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>SO</th>
                                            <th>RAM</th>
                                            <th>Disco Duro</th>
                                            <th>Procesador</th>
                                            <th>Empresa</th>
                                            <th>Estado</th>
                                            <th>Último Usuario</th>
                                            <th>Observación</th>
                                            <th>Serie</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Laptop</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>SO</th>
                                            <th>RAM</th>
                                            <th>Disco Duro</th>
                                            <th>Procesador</th>
                                            <th>Empresa</th>
                                            <th>Estado</th>
                                            <th>Último Usuario</th>
                                            <th>Observación</th>
                                            <th>Serie</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="datos">
                                        
                                            <?php foreach ($laptops as $laptop): ?>
                    <tr>
                    <td><i name="id_laptop"class="editar fa fa-edit" onclick="enviaid.submit()">&nbsp;<?php echo $laptop['id_laptop']; ?></td>
                    <td><?php echo $laptop['nombre_marca']; ?></td>
                    <td><?php echo $laptop['modelo_laptop']; ?></td>
                    <td><?php echo $laptop['nombre_so']; ?></td>
                    <td><?php echo $laptop['cantidad_ram'] . ' ' . $laptop['nombre_tecnologiaram']; ?></td>
                    <td><?php echo $laptop['capacidad_dd']; ?></td>
                    <td><?php echo $laptop['nombre_procesador']; ?></td>
                    <td><?php echo $laptop['nombre_empresa']; ?></td>
                    <td><?php echo $laptop['nombre_estado']; ?></td>
                    <td><?php echo $laptop['nombre_usuario']; ?></td>
                    <td><?php echo $laptop['obs_laptop']; ?></td>
                    <td><?php echo $laptop['numserie_laptop']; ?></td>
                    </tr>
                <?php endforeach; ?>
                

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
<script>
$(document).ready(function() {
    $('#tblData').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
    <script>
        $(document).ready(function() {
            $(".editar").mouseover(function(e) {
                $(this).css("cursor", "pointer");
            });
            $(".editar").click(function(e) {
                var clickedCell = $(e.target).closest("td");
                alert (clickedCell.text());
                window.location.href = "editar.php?codigolaptop=" +clickedCell.text().trim();
            });
        });

    </script>