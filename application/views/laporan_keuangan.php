<section>
    <div class="container">
        <ol class="breadcrumb laporan_keuangan">
            <li class="breadcrumb-item"><a><span><a href="<?php echo base_url(); ?>">beranda</a></span>
                </a>
            </li>
            <li class="breadcrumb-item"><a><span><a href="#">publikasi</a></span>
                </a>
            </li>
            <li class="breadcrumb-item"><a><span><a href="<?php echo base_url(); ?>laporan">laporan</a></span>
                </a>
            </li>
            <li class="breadcrumb-item"><a><span><a href="<?php echo base_url(); ?>diagram">apbd kota cimahi</a></span>
                </a>
            </li>
        </ol>
        <h2>Laporan Keuangan Kota Cimahi</h2>
        <div class="row" style="padding-bottom:50px;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-color:#f9f7f7;">
                <div class="table-responsive table-borderless">
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <thead>
                        <tr>
                            <th><i class="fa fa-file-pdf-o" style="font-size:75px;"></i></th>
                            <th style="padding-bottom:30px;">SOP</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($sop as $file):?>
                        <tr>
                            <td style="margin:0px;"></td>
                            <td><?php echo $file->judul_file; ?></td>
                            <td><a href="<?php echo base_url(); ?>files/sop/<?php echo $file->nama_file; ?>" download = "<?php echo base_url(); ?>files/laporan/<?php echo $file->nama_file; ?>"><button class="btn btn-primary" type="button">Lihat</button></a></td>
                        </tr>
                        <?php endforeach;?>


                        <tr></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>