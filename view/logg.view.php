<section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
            <div class="block-header">
                <h2>LOG DE CAMBIOS</h2>
            </div>
            <?php foreach ($laptops as $laptop): ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $laptop['fechahora']; ?>
                            </h2>
                        </div>
                        <div class="body">
                            <p>- El usuario  <?php echo $laptop['usuario']; ?></p>
                            <p><?php echo $laptop['accion']; ?> la laptop con código <?php echo $laptop['id_laptop']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

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

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
