   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


        <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class=" clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="body">
                                <?php echo $cabeceraForm . $idlaptop; ?>
                            </h2>
                            <div class="body" style="color:red;">
                             <?php if($editar == "Si") : ?>
                                   <?php else: ?>
                                    <?php echo "Todos los datos deben se llenados de forma obligatoria"; ?>
                                    <?php endif; ?>                                
                            </div>
                            <br>
                            <!--<div class="body"><?php echo $avisoNuevo; ?></div>-->
                            <form class="formularioLaptop" name="actualizarlaptop" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="body clearfix">
                                    <?php if($editar == "Si") : ?>
                                    <select name="idlaptopPOST" id="idlaptopSelecto" class="form-control">
                                        
                                        <option style="display:none;"><?php echo $idlaptop; ?></option>
                                        
                                        <?php foreach ($idlaptops as $laptop): ?>
                                        <option value=<?php echo $laptop['id_laptop']; ?>><?php echo $laptop['id_laptop']; ?></option>
                                        
                                        <?php endforeach; ?>
                                    </select>
                                    <?php endif; ?>

                            </div>
                            <br>
                            <div class="col-sm-4   clearfix">
                                    <select class="marcaPOST form-control show-tick" name="marcaPOST">
                                        <option style="display:none;" value="<?php echo $id_marca_laptop; ?>"><?php echo $marcaA; ?></option>
                                        
                                        <?php foreach ($marcas as $marca): ?>
                                        <option value="<?php echo $marca['id_marca']; ?>" /><?php echo $marca['nombre_marca']; ?></option>
                                        
                                        <?php endforeach; ?>
                                    </select>
                            </div>
                            <div class="col-sm-4   clearfix">
                                    <div class=" form-group">
                                        <div class="form-line">
                                            <input name="modeloPOST" type="text" class="form-control" placeholder="Modelo" value="<?php echo $modelo_laptop; ?>" />
                                        </div>
                                    </div>
                            </div>
                            <div class="col-sm-4 ">
                                <?php if ($sisop == ""):  ?>
                                    <select class="form-control show-tick" name="sisopPOST">
                                    <option value="<?php echo $id_sisop; ?>" style="display:none;">Sistema operativo</option>
                                    <?php foreach ($so as $s_o): ?>
                                        <option value="<?php echo $s_o['id_so']; ?>"><?php echo $s_o['nombre_so']; ?></option>
                                        <?php endforeach; ?>
                                </select>
                                <?php else: ?>
                                <select class="form-control show-tick" name="sisopPOST">
                                    <option value="<?php echo $id_sisop; ?>" style="display:none;"><?php echo $sisop; ?></option>
                                    <?php foreach ($so as $s_o): ?>
                                        <option value="<?php echo $s_o['id_so']; ?>"><?php echo $s_o['nombre_so']; ?></option>
                                        <?php endforeach; ?>
                                </select>
                            <?php endif; ?>
                            </div>
                                <div class="col-sm-12 body">  
                                    <div class="col-sm-3">
                                        <select name="mramPOST" class="form-control show-tick">
                                            <option value="<?php echo $id_mram; ?>" style="display:none;"><?php echo $mram; ?>
                                        <?php foreach ($memorams as $memoram): ?>
                                            <option value="<?php echo $memoram['id_memoriaram']; ?>"><?php echo $memoram['cantidad_ram']; ?></option>
                                        
                                        <?php endforeach; ?>
                                        </select>
                                     </div>
                                    <div class="col-sm-3">
                                        <select name="tramPOST" class="form-control show-tick">
                                            <option value="<?php echo $id_tram; ?>"style="display:none;"><?php echo $tram; ?>
                                        <?php foreach ($tmemorams as $tmemoram): ?>
                                            <option value="<?php echo $tmemoram['id_tecnologiaram']; ?>"><?php echo $tmemoram['nombre_tecnologiaram']; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                        <div class="col-sm-3">
                                            <select name="ddPOST" class="form-control show-tick">
                                                <option value="<?php echo $id_dd ; ?>"style="display:none;"><?php echo $dd; ?>
                                                <?php foreach ($ddos as $ddo): ?>
                                                <option value="<?php echo $ddo['id_dd']; ?>"><?php echo $ddo['capacidad_dd']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    <div class="col-sm-3">
                                        <select name="procePOST" class="form-control show-tick">
                                            <option value="<?php echo $id_proce; ?>"style="display:none;"><?php echo $proce; ?>
                                            <?php foreach ($pros as $pro): ?>
                                            <option value="<?php echo $pro['id_procesador']; ?>"><?php echo $pro['nombre_procesador']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                            </div>


                               

                                <div class="row clearfix body">
                                <div class="col-sm-2   clearfix">
                                    <select name="empresaPOST" class="form-control show-tick">
                                        <option value="<?php echo $id_empresa; ?>"style="display:none;"><?php echo $empresa; ?>
                                        <?php foreach ($empres as $empre): ?>
                                        <option value="<?php echo $empre['id_empresa']; ?>"><?php echo $empre['nombre_empresa']; ?></option>
                                        
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="input-field" name="userPOST" type="text" class="form-control" placeholder="Usuario" value="<?php echo $user; ?>"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 ">
                                    <select name="estadoPOST" class="form-control show-tick">
                                        <option value="<?php echo $id_estado; ?>"style="display:none;"><?php echo $estado; ?>
                                        <?php foreach ($estas as $esta): ?>
                                        <option value="<?php echo $esta['id_estado']; ?>"><?php echo $esta['nombre_estado']; ?></option>
                                        
                                        <?php endforeach; ?>
                                    </select>
                                    </div>
                                <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input name="seriePOST" type="text" class="form-control" placeholder="Serie" value="<?php echo $serie; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="form-group body">
                                        <div class="form-line body">
                                            <textarea name="obsPOST" rows="4" class="form-control no-resize" placeholder="Observación" value="<?php echo $obs; ?>" ><?php echo $obs; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="body" style="color:red;">
                                        <?php echo $errorForm; ?>
                                    </div>
                                <div id="btn_guardar" class="col-xs-6 col-sm-3 col-md-2 col-lg-2" onclick="actualizarlaptop.submit()">
                                    <button type="button" class="btn bg-red btn-block btn-lg waves-effect"><i class="fas fa-save"></i>&nbsp;&nbsp;GUARDAR</button>
                                </div>
                                </div>
                                
                                    </div>

                            </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--#END# Switch Button -->
        </div>
        </form>
    </section>

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

    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

    <script type="text/javascript">
        
$('#idlaptopSelecto').on('change', function() {
  window.location.href = "editar.php?codigolaptop=" +this.value.trim();
});
//$("#input-field").keyup(function(e) {
  // Our regex
  // a-z => allow all lowercase alphabets
  // A-Z => allow all uppercase alphabets
  // 0-9 => allow all numbers
  // @ => allow @ symbol
//  var regex = /^[a-zA-Z@]+$/;
  // This is will test the value against the regex
  // Will return True if regex satisfied
//  if (regex.test(this.value) !== true)
  //alert if not true
  //alert("Invalid Input");

  // You can replace the invalid characters by:
//    this.value = this.value.replace(/[^a-zA-Z@]+/, '');
//});
    </script>
</body>
</html>
