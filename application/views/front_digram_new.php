

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>





<section class="section-info-keuangan">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a><span>beranda</span></a></li>
            <li class="breadcrumb-item"><a><span>visualisasi apbd</span></a></li>
        </ol>
        <div class="div-heading-info-keuangan" style="margin-top:50px;">
            <h2 class="text-center">VISUALISASI APBD BPKAD KOTA CIMAHI <?php echo strtoupper($perubahan);?>


            </h2>
        </div>
        <!--
        <div class="row justify-content-center row-legenda">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div>
                    <div class="row">
                        <div class="col-6" id="col-belanja">
                            <div class="div-box-belanja"></div>
                        </div>
                        <div class="col-6">
                            <div class="div-text-belanja">
                                <h6 class="heading-text-belanja">Belanja</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div>
                    <div class="row">
                        <div class="col-6" id="col-pendapatan">
                            <div class="div-box-pendapatan"></div>
                        </div>
                        <div class="col-6">
                            <div>
                                <h6 class="heading-text-pendapatan">Pendapatan</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div>
                    <div class="row">
                        <div class="col-6" id="col-pembiayaan">
                            <div class="div-box-pembiayaan"></div>
                        </div>
                        <div class="col-6">
                            <div>
                                <h6 class="heading-text-pembiayaan">Pembiayaan</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
-->
<br>

        <div class="row text-center" style="padding-bottom:30px;">

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    


                </div>
                
                <?php if($perubahan==""){?>
               <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

                <?php }elseif($perubahan=="Murni"){ ?>

                    <canvas id="doughnutChart9" width="350" height="350" style="margin: 18px auto 0"></canvas>

                <?php } ?>
                <br>

                   <button class="btn btn-primary edit_button" type="button" id="btn-utama-visual-murni" data-id="2016" data-type="Murni">Murni</button>


                    <button class="btn btn-success edit_button" type="button" id="btn-utama-visual-perubahan" data-id="2016"
                            data-type="Perubahan"
                    >Perubahan</button>


            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    
                </div>
                <div id="container2"></div>
                <br>
                <button class="btn btn-primary edit_button" type="button" id="btn-utama-visual-murni" data-id="2015" data-type="Murni">Murni</button>


                <button class="btn btn-success edit_button" type="button" id="btn-utama-visual-perubahan" data-id="2015"
                        data-type="Perubahan"
                >Perubahan</button>

            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    
                </div>
               <div id="container3"></div>
                <h5>

<br>
                    <button class="btn btn-primary edit_button" type="button" id="btn-utama-visual-murni" data-id="2014" data-type="Murni">Murni</button>


                    <button class="btn btn-success edit_button" type="button" id="btn-utama-visual-perubahan" data-id="2014"
                            data-type="Perubahan"
                    >Perubahan</button>

                </h5>
            </div>
        </div>

                </h5>
            </div>




</section>

<div id="result">
</div>








<script src="<?php echo base_url(); ?>assets/admin/js/jquery-3.1.1.min.js"></script>
<!--
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
-->
<!-- Flot -->]
<?php /*
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<!--
<script src="<?php echo base_url(); ?>assets/admin/js/inspinia.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/pace/pace.min.js"></script>
-->

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
*/?>
<script>


    $(document).on("click", ".edit_button", function () {
        var myId = $(this).data('id');
        var type = $(this).data('type');
        $.ajax({
            type: 'POST',
            url: 'http://localhost/bpkd_cimahi_3/Front_agenda/replay2',
            data: { ids: myId ,type:type},
            success: function(response) {
                $('#result').html(response);
            }
        });
    });


    $(document).on("click", ".edito_button", function () {
        var myId =this.value;
        $.ajax({
            type: 'POST',
            url: 'http://localhost/bpkd_cimahi2/Front_agenda/awal',
            data: { ids: myId },
            success: function(response) {
                $('#result2').html(response);
            }
        });
    });

    function reply_click(clicked_id)
    {

        var diskusi_id=clicked_id
        alert(diskusi_id);


    }

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
            labels: ["Pendapatan (%)","Belanja (%)","Pembiayaan (%)" ],
            datasets: [{
                data: [<?php echo $persenapbd2015; ?> ,<?php echo $persenbel2015; ?> ,<?php echo $persenpem2015; ?> ],
                backgroundColor: ["#6495ED","#FF7F50","#D3D3D3"],

            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart7").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        var doughnutData = {
            labels: ["Pendapatan (%)","Belanja (%)","Pembiayaan (%)" ],
            datasets: [{
                data: [


                    <?php echo $persenapbd2016; ?>  ,<?php echo $persenbel2016; ?> ,<?php echo $persenpem2016; ?>

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
            labels: ["Pendapatan (%)","Belanja (%)","Pembiayaan (%)" ],
            datasets: [{
                data: [


                    <?php echo $persenapbd2014; ?>,<?php echo $persenbel2014; ?>,<?php echo $persenpem2014; ?>

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


        var doughnutData = {
            labels: ["Pendapatan","Belanja","Pembiayaan" ],
            datasets: [{
                data: [<?php echo $apbd2017; ?>,<?php echo $belanja2017; ?>,<?php echo $pembiayaan2017; ?>],
                backgroundColor: ["#6495ED","#FF7F50","#D3D3D3"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart9").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    });







</script>

<script>


        var doughnutData = {
            labels: ["App","Software","Laptop" ],
            datasets: [{
                data: [70,27,85],
                backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart5").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    });





</script>
<script>

    $(document).on("click", ".murni_button", function () {
        var myId = $(this).data('id');
        var type = $(this).data('type');
        $.ajax({
            type: 'POST',
            url: 'http://localhost/bpkd_cimahi2/Front_agenda/murni',
            data: { ids: myId ,type:type},
            success: function(response) {
                $('#resultt').html(response);
            }
        });
    });
</script>
<script>

    
// Make monochrome colors

var pieColors = (function () {
    var colors = [],
        base = Highcharts.getOptions().colors[8],
        i;

    for (i = 0; i < 10; i += 1) {
        // Start out with a darkened base color (negative brighten), and end
        // up with a much brighter color
        colors.push(Highcharts.Color(base).brighten((i - 2) / 7).get());
    }
    return colors;
}());






// Build the chart
Highcharts.chart('container', {

    colors: [
            <?php ?>
            '#1ab1e1',
            '#ff8744',
            '#a9c8d2',
            '#64E572',
            '#FF9655',
            '#FFF263',
            '#6AF9C4'
        ],
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '2016'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors: pieColors,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Total (%)',
        data: [

            { name: 'Pendapatan', y: <?php echo $persenapbd2016; ?>},
            { name: 'Belanja', y:<?php echo $persenbel2016; ?> },
            { name: 'Pembiayaan', y: <?php echo $persenpem2016; ?> }
        
        ]
    }]
});
    </script>

    <script>

    
// Make monochrome colors

var pieColors = (function () {
    var colors = [],
        base = Highcharts.getOptions().colors[3],
        i;

    for (i = 0; i < 10; i += 1) {
        // Start out with a darkened base color (negative brighten), and end
        // up with a much brighter color
        colors.push(Highcharts.Color(base).brighten((i - 2) / 7).get());
    }
    return colors;
}());






// Build the chart
Highcharts.chart('container2', {

    colors: [
            <?php ?>
            '#1ab1e1',
            '#ff8744',
            '#a9c8d2',
            '#64E572',
            '#FF9655',
            '#FFF263',
            '#6AF9C4'
        ],
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '2015'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors: pieColors,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Total (%)',
        data: [

            { name: 'Pendapatan', y: <?php echo $persenapbd2015; ?>},
            { name: 'Belanja', y:<?php echo $persenbel2015; ?> },
            { name: 'Pembiayaan', y: <?php echo $persenpem2015; ?> }
        
        ]
    }]
});
    </script>


    <script>

    
// Make monochrome colors

var pieColors = (function () {
    var colors = [],
        base = Highcharts.getOptions().colors[4],
        i;

    for (i = 0; i < 10; i += 1) {
        // Start out with a darkened base color (negative brighten), and end
        // up with a much brighter color
        colors.push(Highcharts.Color(base).brighten((i - 2) / 7).get());
    }
    return colors;
}());






// Build the chart
Highcharts.chart('container3', {

    colors: [
            <?php ?>
            '#1ab1e1',
            '#ff8744',
            '#a9c8d2',
            '#64E572',
            '#FF9655',
            '#FFF263',
            '#6AF9C4'
        ],
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '2014'
    },
    tooltip: {
        pointFormat: '{series.name}:  <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            colors: pieColors,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            }
        }
    },
    series: [{
        name: 'Total (%)',
        data: [

            { name: 'Pendapatan', y: <?php echo $persenapbd2014; ?>},
            { name: 'Belanja', y:<?php echo $persenbel2014; ?> },
            { name: 'Pembiayaan', y: <?php echo $persenpem2014; ?> }
        
        ]
    }]
});
    </script>

    
    

    
    






