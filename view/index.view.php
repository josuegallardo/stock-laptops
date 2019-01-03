
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
   <section class="content">
        <div class="container-fluid">

            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>RESUMEN DE LAPTOPS</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <canvas id="myChart"></canvas>
                                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
            </div>
        </div>
    </section>

 <script type="text/javascript">
    var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Operativo", "Prestamo", "Baja"],
        datasets: [{
            label: '# of Votes',
            data: [<?php echo $cantidOperativo; ?>,<?php echo $cantidPrestamo; ?>, <?php echo $cantidBaja; ?>],
            backgroundColor: [
                'rgba(136,197,66, 0.2)',
                'rgba(255,214,0, 0.2)',
                'rgba(213,0,0, 0.2)'
            ],
            borderColor: [
                '#88C542',
                '#FFD600',
                '#D50000'
            ],
            borderWidth: 1
        },
    
        
        ]
    },
    options: {
        scales: {
        }
    },
    onClick:function(e){
    /*var activePoints = myChart.getElementsAtEvent(e);
    var selectedIndex = activePoints[0]._index; */
    /* alert(this.data.datasets[0].data[selectedIndex]);
    console.log(this.data.datasets[0].data[selectedIndex]);
    */
    }
});

/* https://github.com/chartjs/Chart.js/issues/2292 */
document.getElementById("myChart").onclick = function (evt) {
        var activePoints = myChart.getElementsAtEventForMode(evt, 'point', myChart.options);
        var firstPoint = activePoints[0];
        var label = myChart.data.labels[firstPoint._index];
        var value = myChart.data.datasets[firstPoint._datasetIndex].data[firstPoint._index];
        window.location.href = "datatable.php?nombre_estado=" +label;
    };
   </script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
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

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
