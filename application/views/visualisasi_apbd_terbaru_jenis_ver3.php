
<div class="row justify-content-center mt-3">
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-3 col-sm-6 col-md-5 col-lg-3 col-xl-3">
                                <div class="div-warna-belanja d-block"></div>
                            </div>
                            <div class="col-3 col-sm-6 col-md-5 col-lg-2 col-xl-2 p-0">
                                <div>
                                    <p>Belanja</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-3 col-sm-6 col-md-5 col-lg-3 col-xl-3">
                                <div class="div-warna-pendapatan d-block"></div>
                            </div>
                            <div class="col-3 col-sm-6 col-md-5 col-lg-2 col-xl-2 p-0">
                                <div>
                                    <p>Pendapatan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-3 col-sm-6 col-md-5 col-lg-3 col-xl-3">
                                <div class="div-warna-pembiayaan d-block"></div>
                            </div>
                            <div class="col-3 col-sm-6 col-md-5 col-lg-2 col-xl-2 p-0">
                                <div>
                                    <p>Pendapatan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-6 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                    <div class="text-center"><button class="btn btn-primary btn-block btn-sm status" type="button" id="btn-utama-visual-murni" data-jenis="Murni" data-tahun_search="<?php echo $tahun_search; ?>">Murni</button></div>
                </div>
                <div class="col-6 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                    <div class="text-center"><button class="btn btn-success btn-block btn-sm status" type="button" id="btn-utama-visual-perubahan" data-jenis="Perubahan" data-tahun_search="<?php echo $tahun_search; ?>">Perubahan</button></div>
                </div>
            </div>

           <div id="diagram">
            <div class="row justify-content-center mt-3">
                <?php 
                $no=0;
                foreach($perubahan as $per):
                ?>

                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-12">
                               <canvas id="doughnutChart<?php echo $no++; ?>" width="350" height="350" style="margin: 18px auto 0"></canvas>
                            </div>
                            <div class="col-12">
                                <div class="text-center">
                                    <br><button class="btn btn-primary btn-block btn-sm edit_button" data-id="<?php echo $per->tahun; ?>"
                      data-jenis="<?php echo $jenis; ?>" type="button">TAHUN <?php echo $per->tahun; ?></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
               
            </div>
        </div>
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
(document).on("click", ".status", function () {
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
// selesai perulangan
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
    