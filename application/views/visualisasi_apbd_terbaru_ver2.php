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
                <h2 class="text-center">VISUALISASI APBD BPKAD KOTA CIMAHI <?php if($tahun_awal) {
                 echo $tahun_awal; 
                
                ?> - <?php echo $tahun_akhirr; ?> <?php } ?> 

              <?php echo $jenis; ?>
            </h2>
            </div>
            <div class="row">
                <div class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-2">
                    <div class="div-input-tahun">
                        <form method="POST" action="<?php echo base_url(); ?>diagram">
                            <div class="form-group"><input class="form-control form-control-sm text-tahun" type="text" placeholder="Dari tahun..." name="tahun_search" required="" oninvalid="this.setCustomValidity('Kotak pencarian tidak boleh kosong')" oninput="setCustomValidity('')"></div>
                        
                    </div>
                </div>
                <div class="col-7 col-sm-5 col-md-3 col-lg-2 col-xl-2"><button class="btn btn-primary btn-block" type="submit" style="margin-top:11px;">Cari</button>
                      </form>
                </div>
            </div>
            
           <div id="diagram">
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
            
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <div class="div-left-murni"><button class="btn btn-primary status" type="button" id="btn-utama-visual-murni" data-jenis="Murni" data-tahun_search="<?php echo $tahun_search; ?>"
                        >Murni</button></div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="div-right-murni"><button class="btn btn-success status" type="button" id="btn-utama-visual-perubahan" data-jenis="Perubahan" data-tahun_search="<?php echo $tahun_search; ?>">Perubahan</button></div>
                </div>
            </div>
             
            <div class="row">
                <?php 
                $no=0;
                foreach($perubahan as $per):
                
                ?>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200" style="padding-top:47PX;">
                    <div>
                           <canvas id="doughnutChart<?php echo $no++; ?>" width="350" height="350" style="margin: 18px auto 0"></canvas>
                    </div>
                    <br><br>
                    <div class="btn-grafik"><button class="btn btn-primary edit_button" data-id="<?php echo $per->tahun; ?>"
                      data-jenis="<?php echo $jenis; ?>"

                     type="button">TAHUN <?php echo $per->tahun; ?></button></div>
                </div>
                <?php endforeach; ?>
        </div>
    </section>
</div>
    <!--
    <section class="section-info-keuangan">
        <div class="container">
            <div class="div-heading-info-keuangan" style="margin-top:50px;">
                <h2 class="text-center">VISUALISASI APBD BPKAD KOTA CIMAHI TAHUN ---</h2>
            </div>
            <div class="row" style="padding-bottom:30px;">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="300" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="400" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                </div>
            </div>
        </div>
    </section>

-->
<!--
    <section class="section-info-keuangan">
        <div class="container">
            <div class="div-heading-info-keuangan" style="margin-top:50px;">
                <h2 class="text-center">VISUALISASI PENDAPATAN APBD BPKAD KOTA CIMAHI TAHUN ---</h2>
            </div>
            <div class="row" style="padding-bottom:30px;">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-heading">
                        <h6 class="text-center">Total Rp.&nbsp;</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="300" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-heading">
                        <h6 class="text-center">Total Rp.&nbsp;</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="400" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-heading">
                        <h6 class="text-center">Total Rp.&nbsp;</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
<!--
    <section class="section-info-keuangan">
        <div class="container">
            <div class="div-heading-info-keuangan" style="margin-top:50px;">
                <h2 class="text-center">VISUALISASI BELANJA APBD BPKAD KOTA CIMAHI TAHUN ---</h2>
            </div>
            <div class="row" style="padding-bottom:30px;">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-heading">
                        <h6 class="text-center">Total Rp.&nbsp;</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="300" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-heading">
                        <h6 class="text-center">Total Rp.&nbsp;</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="400" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-heading">
                        <h6 class="text-center">Total Rp.&nbsp;</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->

<!--
    <section class="section-info-keuangan">
        <div class="container">
            <div class="div-heading-info-keuangan" style="margin-top:50px;">
                <h2 class="text-center">VISUALISASI PEMBIAYAAN APBD BPKAD KOTA CIMAHI TAHUN ---</h2>
            </div>
            <div class="row" style="padding-bottom:30px;">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-heading">
                        <h6 class="text-center">Total Rp.&nbsp;</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="300" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-heading">
                        <h6 class="text-center">Total Rp.&nbsp;</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="400" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-heading">
                        <h6 class="text-center">Total Rp.&nbsp;</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
<br>
<div id="result">
</div>
<script src="<?php echo base_url(); ?>assets/admin/js/jquery-3.1.1.min.js"></script>
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
<script>
$(document).on("click", ".status", function () {
        var jenis = $(this).data('jenis');
        var tahun_search = $(this).data('tahun_search');
        $.ajax({
            type: 'POST',
            url: 'http://localhost/bpkd_cimahi_3/Front_profile/diagram',
            data: { jenis:jenis,tahun_search:tahun_search},
            success: function(response) {
                $('#diagram').html(response);
            }
        });
    });


 $(document).on("click", ".edit_button", function () {
        var myId = $(this).data('id');
        var jenis = $(this).data('jenis');

        $.ajax({
            type: 'POST',
            url: 'http://localhost/bpkd_cimahi_3/Front_agenda/replay2',
            data: { ids: myId ,jenis: jenis},
            success: function(response) {
                $('#result').html(response);
            }
        });
    });
</script>

<script>
 <?php 
                $nom=0;
                foreach($perubahan as $peri):
                $tahun=$peri->tahun;
        $select_sum_all=$this->Berita_model->select_sum_all($tahun);
            foreach($select_sum_all as $all){
                $jumlah_keseluruhan=$all->jumlah;
            }
        $select_sum_pendapatan=$this->Berita_model->select_sum_pendapatan($tahun);
         foreach($select_sum_pendapatan as $p4){
                $jumlah_pendapatan=$p4->jumlah;
        }

         $select_sum_belanja=$this->Berita_model->select_sum_belanja($tahun);
         foreach($select_sum_belanja as $b5){
                $jumlah_belanja=$b5->jumlah;
        }

        $select_sum_pembiayaan=$this->Berita_model->select_sum_pembiayaan($tahun);
         foreach($select_sum_pembiayaan as $p6){
                $jumlah_pembiayaan=$p6->jumlah;
        }

        $persen_pendapatan=round(($jumlah_pendapatan/$jumlah_keseluruhan*100),2);
        $persen_belanja=round(($jumlah_belanja/$jumlah_keseluruhan*100),2);
        $persen_pembiayaan=round(($jumlah_pembiayaan/$jumlah_keseluruhan*100),2);
                ?>

 var doughnutData = {
            labels: ["Pendapatan (%)","Belanja (%)","Pembiayaan (%)" ],
            datasets: [{
                data: [<?php echo $persen_pendapatan; ?>,<?php echo $persen_belanja; ?> ,<?php echo $persen_pembiayaan; ?>],
                backgroundColor: ["#6495ED","#FF7F50","#D3D3D3"],

            }]
        } ;
        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };

        var ctx4 = document.getElementById("doughnutChart<?php echo $nom++; ?>").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});
<?php endforeach; ?>
</script>
    