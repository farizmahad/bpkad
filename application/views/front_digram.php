



<!-- Toastr style -->


<!-- Gritter -->
<link href="<?php echo base_url(); ?>assets/admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/admin/css/animate.css" rel="stylesheet">


<div class="row  border-bottom white-bg dashboard-header">


    <div class="col-md-12">
        <div class="statistic-box">
            <h5>
                <center> Diagram APBD Kota Cimahi</center>
            </h5>
<br>
            <div class="row text-center">
                <div class="col-lg-4">
                    <canvas id="doughnutChart2" width="350" height="350" style="margin: 18px auto 0"></canvas>
                    <h5 >APBD 2016</h5>
                </div>
                <div class="col-lg-4">
                    <canvas id="doughnutChart" width="350" height="350" style="margin: 18px auto 0"></canvas>
                    <h5 >APBD 2015</h5>
                </div>

                <div class="col-lg-4">
                    <canvas id="doughnutChart3" width="350" height="350" style="margin: 18px auto 0"></canvas>
                    <h5 >APBD 2014</h5>
                </div>
            </div>
        </div>
    </div>

</div>





<!-- Mainly scripts -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url(); ?>assets/admin/js/inspinia.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="<?php echo base_url(); ?>assets/admin/js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/toastr/toastr.min.js"></script>


<script>
    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };


        }, 1300);


        var data1 = [
            [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
        ];
        var data2 = [
            [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
        ];
        $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
            {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#d5d5d5'
                },
                colors: ["#1ab394", "#1C84C6"],
                xaxis:{
                },
                yaxis: {
                    ticks: 4
                },
                tooltip: false
            }
        );

        var doughnutData = {
            labels: ["Pendapatan","Belanja","Pembiayaan" ],
            datasets: [{
                data: [<?php echo $apbd2015; ?>,<?php echo $belanja2015; ?>,<?php echo $pembiayaan2015; ?>],
                backgroundColor: ["#6495ED","#FF7F50","#D3D3D3"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        var doughnutData = {
            labels: ["Pendapatan","Belanja","Pembiayaan" ],
            datasets: [{
                data: [


                    <?php echo $apbd; ?>,<?php echo $belanja; ?>,<?php echo $pembiayaan; ?>

                ],
                backgroundColor: ["#6495ED","#FF7F50","#D3D3D3"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});




        var doughnutData = {
            labels: ["Pendapatan","Belanja","Pembiayaan" ],
            datasets: [{
                data: [


                    <?php echo $apbd2014; ?>,<?php echo $belanja2014; ?>,<?php echo $pembiayaan2014; ?>

                ],
                backgroundColor: ["#6495ED","#FF7F50","#D3D3D3"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart3").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    });
</script>
</body>
</html>
