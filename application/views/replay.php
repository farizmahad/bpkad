
<link href="<?php echo base_url(); ?>assets/admin/css/plugins/c3/c3.min.css" rel="stylesheet">

<section class="section-info-keuangan">
    <div class="container">
        <div class="div-heading-info-keuangan" style="margin-top:50px;">
            <?php if(($jumlah_4 > 0) or ($jumlah_5 > 0) or ($jumlah_6 > 0)) {?>
            <h2 class="text-center">VISUALISASI APBD BPKAD KOTA CIMAHI TAHUN <?php echo $tahun; ?> <?php echo strtoupper($type); ?></h2>
            <?php }else{ ?>

             <h2 class="text-center">TIDAK ADA DATA!</h2>
            <?php } ?>
        </div>
        <div class="row" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">
                <div id="pie"></div>

                <div class="btn-heading">
                    <?php if($jumlah_4 > 0) {?>
                    <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($jumlah_4); ?></h6>
                    <?php } ?>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="300" style="padding-top:47px;">
                <div id="pie2"></div>
                <div class="btn-heading">
                    <?php if($jumlah_5 >0) {?>
                    <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($jumlah_5); ?></h6>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="400" style="padding-top:47px;">
                <div id="pie3"></div>
                <div class="btn-heading">
                    <?php if($jumlah_6 >0) {?>
                    <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($jumlah_6); ?></h6>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-info-keuangan">
    <div class="container">
        <div class="div-heading-info-keuangan" style="margin-top:50px;">
            <?php if ($count_41>0 or $count_42>0 or $count_43>0){ ?>
            <h2 class="text-center">VISUALISASI PENDAPATAN APBD BPKAD KOTA CIMAHI TAHUN <?php echo $tahun; ?> <?php echo strtoupper($type); ?></h2>
            <?php }else{ ?>
                <h2 CLASS="text-center">TIDAK ADA DATA!</h2>
            <?php } ?>
        </div>
        <div class="row" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">

                <div id="pie4"></div>
                <div class="btn-heading">
                    <?php

                    $total_p=0;
                    foreach($pen41 as $p){
                       $total_p +=$p->jumlah;
                    }
                   if($total_p >0 ){
                    ?>



                    <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($total_p); ?> </h6>
                    <?php } ?>

                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="300" style="padding-top:47px;">
                <div id="pie5"></div>
                <div class="btn-heading">
                    <?php
                    $total_p42=0;
                    foreach($pen42 as $pp42){
                        $total_p42 +=$pp42->jumlah;


                    }
                    if($total_p42 >0 ){
                        ?>

                        <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($total_p42); ?></h6>
                    <?php } ?>

                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="400" style="padding-top:47px;">
                <div id="pie17"></div>
                <div class="btn-heading">
                    <?php
                    $total_p43=0;
                    foreach($pen43 as $pp43){
                        $total_p43 +=$pp43->jumlah;


                    }
                    if($total_p43 >0 ){
                        ?>

                        <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($total_p43); ?></h6>
                    <?php } ?>




                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-info-keuangan">
    <div class="container">
        <div class="div-heading-info-keuangan" style="margin-top:50px;">
            <?php if($count_51 > 0 or $count_52>0){?>
            <h2 class="text-center">VISUALISASI BELANJA APBD BPKAD KOTA CIMAHI TAHUN <?php echo $tahun; ?> <?php echo strtoupper($type); ?></h2>
            <?php }else{ ?>
            <h2 class="text-center">TIDAK ADA DATA!</h2>
            <?php } ?>
        </div>
        <div class="row" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">
                <div id="pie7"></div>
                <div class="btn-heading">
                    <?php
                    $total_b51=0;
                    foreach($bel51 as $bb51){
                        $total_b51 +=$bb51->jumlah;


                    }
                    if($total_b51 >0 ){
                        ?>

                        <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($total_b51); ?></h6>
                    <?php } ?>

                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-up" data-aos-delay="300" style="padding-top:47px;">
                <div id="pie8"></div>
                <div class="btn-heading">
                    <?php
                    $total_b52=0;
                    foreach($bel52 as $bb52){
                        $total_b52 +=$bb52->jumlah;


                    }
                    if($total_b52 >0 ){
                        ?>

                        <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($total_b52); ?></h6>
                    <?php } ?>
                </div>
            </div>
            <!--
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="400" style="padding-top:47px;">
                <div id="pie9"></div>
                <div class="btn-heading">
                    <?php
            /*
                    $total_p61=0;
                    foreach($pem61 as $pp61){
                        $total_p61 +=$pp61->jumlah;


                    }
                    if($total_p61 >0 ){
                        ?>

                        <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($total_p61); ?></h6>
                    <?php } */?>

                </div>
            </div>
            -->
        </div>
    </div>
</section>








<section class="section-info-keuangan">
    <div class="container">
        <div class="div-heading-info-keuangan" style="margin-top:50px;">
            <?php if($count_61 > 0 or $count_62>0){?>
            <h2 class="text-center">VISUALISASI PEMBIAYAAN APBD BPKAD KOTA CIMAHI TAHUN <?php echo $tahun; ?> <?php echo strtoupper($type); ?></h2>
            <?php }else{ ?>
            <h2 class="text-center">TIDAK ADA DATA!</h2>
            <?php } ?>
        </div>
        <div class="row" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">
                <div id="pie9"></div>
                <div class="btn-heading">

                    <?php
                    $total_p61=0;
                    foreach($pem61 as $pp61){
                        $total_p61 +=$pp61->jumlah;


                    }
                    if($total_p61 >0 ){
                        ?>

                        <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($total_p61); ?></h6>
                    <?php } ?>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-up" data-aos-delay="400" style="padding-top:47px;">
                <div id="pie10"></div>
                <div class="btn-heading">
                    <?php
                    $total_p62=0;
                    foreach($pem62 as $pp62){
                        $total_p62 +=$pp62->jumlah;


                    }
                    if($total_p62 >0 ){
                        ?>

                        <h6 class="text-center">Total Rp.&nbsp;<?php echo number_format($total_p62); ?></h6>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>




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
                ['4.1 Pendapatan Asli Daerah', <?php echo $persen41; ?>],
                ['4.2 Dana Perimbangan', <?php echo $persen42; ?>],
                ['4.3 Lain-lain pendapatan yang sah', <?php echo $persen43; ?>]
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
                ['5.1 Belanja Tidak Langsung', <?php echo $persen51; ?>],
                ['5.2 Belanja Langsung', <?php echo $persen52; ?>],

            ],
            total:['Rp'],
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
                ['6.1 Penerimaan Pembiayaan Daerah', <?php echo $persen61; ?>],
                ['6.2 Pengeluaran Pembiayaan Daerah', <?php echo $persen62; ?>],

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
                $total_jumlah=0;
                foreach($pen41 as $p411){?>
                         <?php


                $dalam_persen41=round(($p411->jumlah/$jumlah_41*100),2);

                         ?>



                <?php

                ?>
                ['<?php echo $p411->nomor_urut; ?> <?php echo $p411->uraian; ?>', <?php echo $dalam_persen41; ?>],
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
                <?php


                $dalam_persen42=round(($p42->jumlah/$jumlah_42*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $p42->nomor_urut; ?> <?php echo $p42->uraian; ?>', <?php echo $dalam_persen42; ?>],
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
        bindto: '#pie7',


        data:{

            columns: [

                <?php
                $no=0;
                foreach($bel51 as $b51){?>
                <?php


                $dalam_persen51=round(($b51->jumlah/$jumlah_51*100),1);

                ?>



                <?php

                ?>
                ['<?php echo $b51->nomor_urut; ?> <?php echo $b51->uraian; ?>', <?php echo $dalam_persen51; ?>],
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
                <?php


                $dalam_persen61=round(($p61->jumlah/$jumlah_61*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $p61->nomor_urut; ?> <?php echo $p61->uraian; ?>', <?php echo $dalam_persen61; ?>],
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
                <?php


                $dalam_persen62=round(($p62->jumlah/$jumlah_62*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $p62->nomor_urut; ?> <?php echo $p62->uraian; ?>', <?php echo $dalam_persen62; ?>],
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
                <?php


                $dalam_persen52=round(($b52->jumlah/$jumlah_52*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $b52->nomor_urut; ?> <?php echo $b52->uraian; ?>', <?php echo $dalam_persen52; ?>],
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


    c3.generate({
        bindto: '#pie11',


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
                ['<?php echo $b52->nomor_urut; ?> <?php echo $b52->uraian; ?>', <?php echo $dalam_persen52; ?>],
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
<script>

    c3.generate({
        bindto: '#pie17',


        data:{

            columns: [

                <?php
                $no=0;
                foreach($pen43 as $p43){?>
                <?php


                $dalam_persen43=round(($p43->jumlah/$jumlah_43*100),2);

                ?>



                <?php

                ?>
                ['<?php echo $p43->nomor_urut; ?> <?php echo $p43->uraian; ?>', <?php echo $dalam_persen43; ?>],
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

</script>

</body>
</html>

