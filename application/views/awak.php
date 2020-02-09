
<link href="<?php echo base_url(); ?>assets/admin/css/plugins/c3/c3.min.css" rel="stylesheet">

<section class="section-info-keuangan">
    <div class="container">
        <div class="div-heading-info-keuangan" style="margin-top:50px;">
            <h2 class="text-center">VISUALISASI APBD BPKAD KOTA CIMAHI TAHUN <?php echo $tahun; ?>  </h2>
        </div>
        <div class="row row-legenda">


            <div class="col">
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
            <div class="col">
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
            <div class="col">
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
        <div class="row" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    <h5>4. Pendapatan</h5>
                </div>
                <div>

                    <div id="pie"></div>
                    <h3 align="center"><b>Total Pendapatan = <?php echo number_format($jumlah_4); ?></b></h3>
                </div>


            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    <h5>5. Belanja</h5>
                </div>
                <div>

                    <div id="pie2"></div>
                    <h3 align="center"><b>Total Belanja = <?php echo number_format($jumlah_5); ?></b></h3>
                </div>


            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    <h5>6. Pembayaran</h5>
                </div>
                <div>

                    <div id="pie3"></div>
                    <h3 align="center"><b>Total Pembayaran = <?php echo number_format($jumlah_6); ?></b></h3>
                </div>


            </div>
        </div>





        <div class="row" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    <h5>4.1 Pendapatan Asli Daerah</h5>
                </div>
                <div>

                    <div id="pie4"></div>

                </div>


            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    <h5>4.2 Dana Perimbangan</h5>
                </div>
                <div>

                    <div id="pie5"></div>

                </div>


            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    <h5>4.3 Lain-lain pendapatan yang sah</h5>
                </div>
                <div>

                    <div id="pie6"></div>

                </div>


            </div>
        </div>


        <div class="row" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    <h5>5.1 Belanja .. </h5>
                </div>
                <div>

                    <div id="pie7"></div>

                </div>


            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    <h5>5.2 Belanja ..</h5>
                </div>
                <div>

                    <div id="pie8"></div>

                </div>


            </div>


        </div>



        <div class="row" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    <h5>6.1 Pembayaran .. </h5>
                </div>
                <div>

                    <div id="pie9"></div>

                </div>


            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="div-heading-trend-apbd">
                    <h5>6.2 Pembayaran ..</h5>
                </div>
                <div>

                    <div id="pie10"></div>

                </div>


            </div>


        </div>

    </div>
</section>

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

<script src="<?php echo base_url(); ?>assets/admin/js/plugins/d3/d3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/c3/c3.min.js"></script>

<script>
    c3.generate({
        bindto: '#pie',
        data:{
            columns: [
                [' (Persatuan Indonesia)', <?php echo $persen41; ?>],
                ['4.2', <?php echo $persen42; ?>],
                ['4.3', <?php echo $persen43; ?>]
            ],
            colors:{
                data1: '#1ab394',
                data2: '#BABABA',
                data3: '#BABABA'
            },
            type : 'pie'
        }
    });

    c3.generate({
        bindto: '#pie2',
        data:{
            columns: [
                ['5.1', <?php echo $persen51; ?>],
                ['5.2', <?php echo $persen52; ?>],

            ],
            colors:{
                data1: '#1ab394',
                data2: '#BABABA',

            },
            type : 'pie'
        }
    });


    c3.generate({
        bindto: '#pie3',
        data:{
            columns: [
                ['6.1', <?php echo $persen61; ?>],
                ['6.2', <?php echo $persen62; ?>],

            ],
            colors:{
                data1: '#1ab394',
                data2: '#BABABA',

            },
            type : 'pie'
        }
    });


    c3.generate({
        bindto: '#pie4',


        data:{

            columns: [

                <?php
                $no=0;
                foreach($pen41 as $p411){?>
                         <?php $total_jumlah +=$p411->jumlah;


                $dalam_persen=round(($p411->jumlah/$total_jumlah*100),2);

                         ?>



                <?php

                ?>
                ['<?php echo $p411->nomor_urut; ?>', <?php echo $dalam_persen; ?>],
<?php } ?>

            ],

            colors:{
               <?php foreach($pen41 as $p41):?>
                data1: '#1ab394',
                <?php endforeach;?>

            },

            type : 'pie'
        }


    });

    c3.generate({
        bindto: '#pie5',


        data:{

            columns: [

                <?php
                $no=0;
                foreach($pen42 as $p42){?>
                <?php $total_jumlahp42 +=$p42->jumlah;


                $dalam_persen=round(($p411->jumlah/$total_jumlahp42*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $p42->nomor_urut; ?>', <?php echo $dalam_persen; ?>],
                <?php } ?>

            ],

            colors:{
                <?php foreach($pen42 as $p42):?>
                data1: '#1ab394',
                <?php endforeach;?>

            },

            type : 'pie'
        }


    });


    c3.generate({
        bindto: '#pie6',


        data:{

            columns: [

                <?php
                $no=0;
                foreach($pen43 as $p43){?>
                <?php $total_jumlahp43 +=$p43->jumlah;


                $dalam_persen43=round(($p43->jumlah/$total_jumlahp43*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $p43->nomor_urut; ?>', <?php echo $dalam_persen43; ?>],
                <?php } ?>

            ],

            colors:{
                <?php foreach($pen43 as $p43):?>
                data1: '#1ab394',
                <?php endforeach;?>

            },

            type : 'pie'
        }


    });






    c3.generate({
        bindto: '#pie7',


        data:{

            columns: [

                <?php
                $no=0;
                foreach($bel51 as $b51){?>
                <?php $total_jumlahp51 +=$b51->jumlah;


                $dalam_persen51=round(($b51->jumlah/$total_jumlahp51*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $b51->nomor_urut; ?>', <?php echo $dalam_persen51; ?>],
                <?php } ?>

            ],

            colors:{
                <?php foreach($bel51 as $b51):?>
                data1: '#1ab394',
                <?php endforeach;?>

            },

            type : 'pie'
        }


    });


    c3.generate({
        bindto: '#pie9',


        data:{

            columns: [

                <?php
                $no=0;
                foreach($pem61 as $p61){?>
                <?php $total_jumlahp61 +=$p61->jumlah;


                $dalam_persen61=round(($p61->jumlah/$total_jumlahp61*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $p61->nomor_urut; ?>', <?php echo $dalam_persen61; ?>],
                <?php } ?>

            ],

            colors:{
                <?php foreach($pem61 as $p61):?>
                data1: '#1ab394',
                <?php endforeach;?>

            },

            type : 'pie'
        }


    });


    c3.generate({
        bindto: '#pie10',


        data:{

            columns: [

                <?php
                $no=0;
                foreach($pem62 as $p62){?>
                <?php $total_jumlahp62 +=$p62->jumlah;


                $dalam_persen62=round(($p62->jumlah/$total_jumlahp62*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $p62->nomor_urut; ?>', <?php echo $dalam_persen62; ?>],
                <?php } ?>

            ],

            colors:{
                <?php foreach($pem62 as $p62):?>
                data1: '#1ab394',
                <?php endforeach;?>

            },

            type : 'pie'
        }


    });





    c3.generate({
        bindto: '#pie8',


        data:{

            columns: [

                <?php
                $no=0;
                foreach($bel52 as $b52){?>
                <?php $total_jumlahb52 +=$b52->jumlah;


                $dalam_persen52=round(($b52->jumlah/$total_jumlahb52*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $b52->nomor_urut; ?>', <?php echo $dalam_persen52; ?>],
                <?php } ?>

            ],

            colors:{
                <?php foreach($bel52 as $b52):?>
                data1: '#1ab394',
                <?php endforeach;?>

            },

            type : 'pie'
        }


    });

    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

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
            labels: ["4.1 (%)","4.2 (%)","4.3 (%)" ],
            datasets: [{
                data: [<?php echo $persen41; ?>,<?php echo $persen42; ?>,<?php echo $persen43; ?>],
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

</body>
</html>

