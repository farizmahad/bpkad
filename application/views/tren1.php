<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<style type="text/css">
    .lingkaran1{
        width: 10px;
        height: 10px;
        background: #dac52c;
        border-radius: 100%;
    }
</style>

<section class="section-info-keuangan">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a><span>beranda</span></a></li>
            <li class="breadcrumb-item"><a><span>trend apbd</span></a></li>
        </ol>
        <div class="div-heading-info-keuangan" style="margin-top:50px;">
            <h2 class="text-center">TREND APBD BPKAD KOTA CIMAHI</h2>
        </div>


            <form method="get" action="<?php echo base_url(); ?>trend-apbd">
                <div class="row justify-content-center row-legenda">
                    <div class="col-2 col-sm-3 col-md-2 col-lg-2 col-xl-3" id="col-radio-left">
                        <div>
                            <div class="form-check"><input class="form-check-input" type="radio" required="" checked=""  name="periode" value="3"><label class="form-check-label radio-label" for="formCheck-1" value="3">Per 3 Tahun</label></div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-3 col-md-2 col-lg-2 col-xl-3" id="col-radio-right">
                        <div>
                            <div class="form-check"><input class="form-check-input" type="radio" required=""  name="periode" value="5"><label class="form-check-label radio-label" for="formCheck-1" value="5">Per 5 Tahun</label></div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3 col-lg-4 col-xl-3" id="col-search">
                        <div class="div-input-tahun">

                            <div class="form-group"><input class="form-control form-control-sm text-tahun" name="tahun" type="text" placeholder="Dari tahun..." required oninvalid="this.setCustomValidity('Kolom Dari Tahun tidak boleh kosong')" oninput="setCustomValidity('')"></div>

                        </div>
                    </div>
                    <div class="col-3 col-sm-3 col-md-4 col-lg-4 col-xl-5">
                        <div class="div-button-ex"><button class="btn btn-primary btn-utama" type="submit">Cari</button></div>
                    </div>
            </form>

            <!--
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
            -->
        </div>
    </div>
</section>
<section class="section-info-keuangan">
    <div class="container">
        <div class="div-heading-info-keuangan" style="margin-top:50px;">

        </div>
        <div class="row justify-content-center" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">
                <div id="container"></div>
                <br>
                <div class="btn-heading">
                    <h6 class="text-center">
                        <table class="table table-striped">
                            <thead>
                               <tr>
                                   <th></th>
                                   <th>PENDAPATAN</th>
                                   <th>BELANJA</th>
                                   <th>PEMBIAYAAN</th>
                               </tr>
                            </thead>
                            <tbody>
                            <?php foreach($batang as $bat):

                                $paren=0;?>
                            <tr>
                                <td> <?php echo $bat->tahun; ?></td>
                                <?php $tahun_select=$bat->tahun; ?>
                                <?php $select=$this->Berita_model->select_jumlah_tren($tahun_select,$paren);
                                foreach($select as $se):?>

                                <td><?php echo number_format($se->jumlah); ?></td>
                                <?php endforeach;?>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>

                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-info-keuangan">
    <div class="container">
        <div class="div-heading-info-keuangan" style="margin-top:50px;">

        </div>
        <div class="row justify-content-center" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">
                <div id="container2">

                </div>
<br>

                <div class="btn-heading">
                    <h6 class="text-center">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <?php
foreach($uraian_parent_level2 as $ur):?>

<th><?php echo $ur->uraian; ?></th>
                                <?php endforeach;?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($batang_level2 as $bat_lev2):
                                $paren_lev2=4;?>
                                <tr>
                                    <td><?php echo $bat_lev2->tahun; ?></td>
                                    <?php $tahun_select_lev2=$bat_lev2->tahun; ?>
                                    <?php $select_42=$this->Berita_model->select_jumlah_tren_2($tahun_select_lev2,$paren_lev2);
                                    foreach($select_42 as $se_42):?>
                                        <td><?php echo number_format($se_42->jumlah); ?></td>
                                    <?php endforeach;?>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-info-keuangan">
    <div class="container">
        <div class="div-heading-info-keuangan" style="margin-top:50px;">
            <!--
            <h2 class="text-center"><strong>Grafik Anggaran Pendapatan dan Belanja Daerah Tahun ... - ...</strong><br></h2>
        -->
        </div>
        <div class="row justify-content-center" style="padding-bottom:30px;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" data-aos="fade-up" data-aos-delay="200" style="padding-top:47px;">
                <div id="container3">

                </div>
                <div class="btn-heading">
                    <h6 class="text-center">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <?php
                                foreach($uraian_parent_level_5 as $ur5):?>

                                    <th><?php echo $ur5->uraian; ?></th>
                                <?php endforeach;?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($batang_level2_5 as $bat_lev25):
                                $paren_lev25=5;?>
                                <tr>
                                    <td><?php echo $bat_lev25->tahun; ?></td>
                                    <?php $tahun_select_lev25=$bat_lev25->tahun; ?>
                                    <?php $select_52=$this->Berita_model->select_jumlah_tren_2($tahun_select_lev25,$paren_lev25);
                                    foreach($select_52 as $se_52):?>
                                        <td><?php echo number_format($se_52->jumlah); ?></td>
                                    <?php endforeach;?>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="assets/highcharts/highcharts.js"></script>
<script type="text/javascript" src="assets/highcharts/exporting.js"></script>

<script>
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
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
        title: {
            text: 'GRAFIK ANGGARAN PENDAPATAN DAN BELANJA DAERAH TAHUN <?php

                foreach($batang as $su){

                    $an[]=($su->tahun);

                }
                $max=max($an);
                $min=min($an);
                echo $min; echo "-"; echo $max;
                ?>'
        },
        subtitle: {
            text: 'Sumber: BPKAD Cimahi'
        },
        xAxis: {
            categories: [
                <?php foreach($uraian_parent as $par){ ?>
                '<?php echo $par->uraian; ?>',

                <?php } ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah (Rp)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>Rp. {point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [

            <?php
            // meng include file connection.php

            // melakukan looping

            foreach($batang as $data){
                $parent=0;
            $tahunn=$data->tahun;
            $dataa=$this->Berita_model->select_jumlah_tren($tahunn,$parent);

            ?>


            {name:'<?php echo $data->tahun; ?>',data:[<?php

                    foreach($dataa as $da):?>

                       <?php echo $da->jumlah;?>,

<?php endforeach;?>

                    <?php ?>]

            },



           <?php }
            ?>


        ]
    });
</script>

<script>
    Highcharts.chart('container2', {
        chart: {
            type: 'column'
        },
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
        title: {
            text: 'GRAFIK ANGGARAN PENDAPATAN DAERAH TAHUN <?php

 foreach ($batang_level2 as $su2) {

     $ann[] = ($su2->tahun);
 }
   $maxn = max($ann);
   $minn = min($ann);
  echo $minn; echo "-"; echo $maxn;
  ?>'
        },
        subtitle: {
            text: 'Sumber: BPKAD Cimahi'
        },
        xAxis: {
            categories: [
                <?php foreach($uraian_parent_level2 as $lev2){ ?>
                '<?php echo $lev2->uraian; ?>',

                <?php } ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah (Rp)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>Rp. {point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [

            <?php
            // meng include file connection.php

            // melakukan looping

            foreach($batang_level2 as $data42){
                $parentt=4;
            $tahun42=$data42->tahun;
            $dataa=$this->Berita_model->select_jumlah_tren_2($tahun42,$parentt);

            ?>


            {name:'<?php echo $data42->tahun; ?>',data:[<?php

                    foreach($dataa as $da):?>

                    <?php echo $da->jumlah;?>,

                    <?php endforeach;?>

                    <?php ?>]

            },



            <?php }
            ?>


        ]
    });
</script>

<script>
    Highcharts.chart('container3', {
        chart: {
            type: 'column'
        },
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
        title: {
            text: 'GRAFIK ANGGARAN BELANJA DAERAH TAHUN <?php

foreach ($batang_level2_5 as $su25) {


   $ann2[] = ($su25->tahun);
}
$maxnn = max($ann2);
 $minnn = min($ann2);
  echo $minnn; echo "-"; echo $maxnn;
  ?>'
        },
        subtitle: {
            text: 'Sumber: BPKAD Cimahi'
        },
        xAxis: {
            categories: [
                <?php foreach($uraian_parent_level_5 as $lev5){ ?>
                '<?php echo $lev5->uraian; ?>',

                <?php } ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah (Rp)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>Rp. {point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [

            <?php
            // meng include file connection.php

            // melakukan looping

            foreach($batang_level2_5 as $data52){
            $parentt=5;
            $tahun52=$data52->tahun;
            $dataa52=$this->Berita_model->select_jumlah_tren_2($tahun52,$parentt);

            ?>


            {name:'<?php echo $data52->tahun; ?>',data:[<?php

                    foreach($dataa52 as $da52):?>

                    <?php echo $da52->jumlah;?>,

                    <?php endforeach;?>

                    <?php ?>]

            },



            <?php }
            ?>


        ]
    });
</script>