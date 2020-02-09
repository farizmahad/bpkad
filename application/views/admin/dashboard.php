<div class="row wrapper border-bottom white-bg page-heading">
                
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">




                    <ul class="notes">
                        <?php foreach($komentar_belum_baca as $belum):?>
                        <li>
                            <div>
                                <small><?php echo $belum->tanggal; ?></small>
                                <h4>Belum dibalas</h4>
                                <p>Komentar dari <?php echo $belum->nama; ?>
                                    untuk artikel <?php echo $belum->title; ?>


                                </p>
                                <a href="<?php echo base_url(); ?>admin/Berita/select_komentar?id_berita=<?php echo $belum->id_berita; ?>"><i class="fa fa-eye">Lihat</i></a>
                            </div>
                        </li>
                       <?php endforeach; ?>
                    </ul>


                </div>
            </div>
        </div>
<script>
   Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Statistik Konsultasi'
    },
    subtitle: {
        text: 'Statistik Order Via web Bursasajadah.com 2017'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Jumlah'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Order',
        
        data: [
               
              ]

    }, {
        name: 'Konfirmasi',
        data: [
                    
              ]
    }]
});
</script>
    