    <section></section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pr-0 pl-0">
                    <div>
                        <div class="carousel slide" data-ride="carousel" data-pause="false" id="carousel-1">
                            <div class="carousel-inner carousel-clas" role="listbox">
                                <!--
                                <div class="carousel-item active"><img class="img-fluid w-100 d-block" src="assets/img/Untitled2.png" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="img-fluid w-100 d-block" src="assets/img/Untitled.png" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="img-fluid w-100 d-block" src="assets/img/tugu-cimahi.jpg" alt="Slide Image"></div>
                            -->
                            <?php
         $no=0;
         foreach($slider_home as $sli) :
             $no++?>
                                <div class="carousel-item <?php if($no==1){ ?>
            active
      <?php  } ?>"><img class="img-fluid w-100 d-block" src="<?php echo base_url(); ?>assets/img_slider/<?php echo $sli->gambar;?>" alt="Slide Image"></div>
         <?php endforeach; ?>

                            </div>
                            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev" style="height: 0px;"></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next" style="height: 0px;"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3 section-landscape">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center"><img class="img-fluid" src="assets/img/BUKU_SAKU_01.png"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3 section-portrait">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center"><img class="img-fluid" src="assets/img/BUKU_SAKU_04.png"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="container-fluid">
            <div class="row">
				<?php
				$no=00;
				foreach($berita_random_atas as $ak):

				$no++;?>
				
                <div class="col-6 col-lg-6 col-xl-6">
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-lg-7 col-xl-7 pl-0 pr-0">
                                <div><img class="img-fluid" src="assets/img/Untitled2.png"></div>
                            </div>
                            <div class="col-lg-5 col-xl-5">
                                <div class="mt-xl-0 mt-lg-0 mt-md-2 mt-sm-2 mt-1">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="mt-xl-0 mt-lg-0 mt-md-2 mt-sm-2 mt-1">
                                                <h6 class="heading-berita-highlight"><a href="<?php echo base_url(); ?>detail-berita/<?php echo $ak->id_berita; ?>"><?php echo $ak->title; ?> <?php echo $no++; ?> &nbsp;<br></a></h6>
                                            </div>
                                        </div>
										<?php
											$kat=$this->Front_Home_model->detail_kategori($ak->id_berita);
											
											foreach($kat as $ka):?>
											
                                        <div class="col-6 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <div><button class="btn btn-primary btn-block btn-sm text-size" type="button"><?php echo $ka->kategori; ?></button></div>
                                        </div>
										 <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="bg-dark mt-4 pt-4 pb-4 mb-xl-4 mb-4">
        <div class="container-fluid">
            <div class="row justify-content-center">

                  <?php foreach($video_utama as $do){

                    $video=$do->url;
                    $tanggal = explode("=",$video);
                    $dari = $tanggal[0];
                    $sampai = $tanggal[1];

                    ?>

                <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7 mb-2">
					<div class="embed-responsive embed-responsive-16by9"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/<?php echo $sampai; ?>" class="embed-responsive-item" width="560" height="315"></iframe></div>
				</div>
                  <?php } ?>

                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <div>

<?php
$n=0;
foreach($video_next as $vid){

    $n++;

$videoo=$vid->url;
$tanggall = explode("=",$videoo);
$darii = $tanggall[0];
$sampaii = $tanggall[1];


?>

                        <div class="row mb-2">
                            <div class="col-lg-12 col-xl-12">
                                <div class="embed-responsive embed-responsive-16by9"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/<?php echo $sampaii; ?>" class="embed-responsive-item" width="350" height="315"></iframe></div>
                            </div>
                        </div>

                    <?php } ?>
<!--
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="embed-responsive embed-responsive-16by9"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/r7i1AKoDGf4" class="embed-responsive-item" width="350" height="315"></iframe></div>
                            </div>
                        </div>
                    -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-xl-0 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center mt-5">
                        <h4>Aplikasi</h4>
                    </div>
                    <div class="text-center mt-2">
                        <h6>Dapatkan informasi dari aplikasi BPKAD Kota Cimahi</h6>
                    </div>
                    <div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-4 col-xl-4">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div><a class="link-aplikasi" href="<?php echo base_url(); ?>akunpedia"><i class="fas fa-book-open text-info icon-aplikasi"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <a href="<?php echo base_url(); ?>akunpedia">
                                                                <h6 class="text-info heading-icon-aplikasi">AKUNPEDIA</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-xl-4">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div><a class="link-aplikasi" href="<?php echo base_url(); ?>diagram"><i class="fas fa-signal text-info icon-aplikasi"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <a href="<?php echo base_url(); ?>diagram">
                                                                <h6 class="text-info heading-icon-aplikasi">VISUALISASI APBD</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-xl-4">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div><a class="link-aplikasi" href="<?php echo base_url(); ?>trend-apbd"><i class="far fa-chart-bar text-info icon-aplikasi"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <a href="<?php echo base_url(); ?>trend-apbd">
                                                                <h6 class="text-info heading-icon-aplikasi">TREND APBD</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-xl-5 mt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <h4>Berita Terbaru</h4>
                    </div>
                    <div class="text-center">
                        <h6>Dapatkan berita terbaru dari BPKAD Kota Cimahi di sini</h6>
                    </div>
                </div>
            </div>
            <div class="row mt-xl-4 bg-white">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div>
                        <div class="row">
                            <div class="col-5 col-xl-3">
                                <div>
                                    <h5 class="heading-berita-terbaru"><strong>Berita Terbaru</strong></h5>
                                </div>
                            </div>
                            <div class="col-7 col-xl-3">
                                <div>
                                    <hr class="bg-primary" style="height: 3px;">
                                </div>
                            </div>
                        </div>
						<?php foreach($berita_utama as $ber):?>
                        <div class="row mb-xl-3">
                            <div class="col-6 col-sm-5 col-md-5 col-lg-5 col-xl-6">
                                <div><img class="img-fluid" src="assets/img/Untitled2.png"></div>
                            </div>
                            <div class="col-6 col-sm-7 col-md-6 col-lg-6 col-xl-6 p-0">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-xl-0 mt-lg-0 mt-md-0 mt-sm-0 mt-0">
                                                <h6 class="heading-judul-berita-terbaru"><a class="text-dark" href="<?php echo base_url(); ?>detail-berita/<?php echo $ber->id_berita; ?>"><strong><?php echo $ber->title; ?></strong></a><br></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-3">
											<?php 
												$kat=$this->Front_Home_model->detail_kategori($ber->id_berita);
												foreach($kat as $ka):
											?>
                                            <div><span class="text-center bg-primary text-white p-2 text-size d-block"><strong><?php echo $ka->kategori; ?></strong></span></div>
											<?php endforeach; ?>
										</div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <p class="text-size"><a class="text-dark" href="#"> <?php echo date('d F Y', strtotime(DATE($ber->tanggal_post))); ?> &nbsp; | &nbsp;</a><a class="text-dark" href="#"><?php echo $ber->first_name; ?> <?php echo $ber->last_name; ?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div>
                                                <p class="text-size">
													<!--
													<?php $potongan_isi=substr($ber->isi,0,100); ?>
													<?php echo $potongan_isi; ?>...selengkapnya
													-->
												</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php endforeach;?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div>
                        <div class="row">
                            <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-6">
                                <div>
                                    <h5 class="heading-berita-lainnya"><strong>Berita Lainnya</strong></h5>
                                </div>
                            </div>
                            <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-6">
                                <div>
                                    <hr class="bg-primary" style="height: 3px;">
                                </div>
                            </div>
                        </div>
						<?php foreach($berita_lainya as $ow) :?>
                        <div class="row mb-xl-2">
                            <div class="col-5 col-xl-5">
                                <div><a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/featured_image/<?php echo $ow->featured_image; ?>"></a></div>
                            </div>
                            <div class="col-7 col-xl-7">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-12 p-xl-0">
                                            <div>
                                                <h6 class="text-size-head-other-news"><a class="text-dark" href="<?php echo base_url(); ?>detail-berita/<?php echo $ow->id_berita; ?>"><strong><?php echo $ow->title; ?></strong></a><br></h6>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 p-xl-0">
                                            <div>
                                                <p class="text-size"><a class="text-dark" href="#"><?php echo date('d F Y', strtotime(DATE($ow->tanggal_post))); ?></a> | <a class="text-dark" href="#"><?php echo $ow->first_name; ?> <?php echo $ow->last_name; ?> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-4 col-xl-4 mb-xl-4 py-5">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div><a class="link-aplikasi" href="<?php echo base_url(); ?>berita"><i class="fas fa-newspaper text-info icon-aplikasi"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <a href="<?php echo base_url(); ?>berita">
                                                                <h6 class="text-info heading-icon-aplikasi">BERITA TERBARU</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-xl-4 mb-xl-4 py-5">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div><a class="link-aplikasi" href="<?php echo base_url(); ?>peraturan-pemerintah-pusat"><i class="fas fa-cog text-info icon-aplikasi"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <a href="<?php echo base_url(); ?>peraturan-pemerintah-pusat">
                                                                <h6 class="text-info heading-icon-aplikasi">PERATURAN TERBARU</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-xl-4 mb-xl-4 py-5">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div><a class="link-aplikasi" href="<?php echo base_url(); ?>standar-pelayanan"><i class="far fa-list-alt text-info icon-aplikasi"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <a href="<?php echo base_url(); ?>standar-pelayanan">
                                                                <h6 class="text-info heading-icon-aplikasi">STANDAR PELAYANAN</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-xl-4 mb-xl-4 py-5">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div><a class="link-aplikasi" href="<?php echo base_url(); ?>diagram"><i class="far fa-building text-info icon-aplikasi"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <a href="<?php echo base_url(); ?>diagram">
                                                                <h6 class="text-info heading-icon-aplikasi">APBD KOTA CIMAHI</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-xl-4 mb-xl-4 py-5">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div><a class="link-aplikasi" href="<?php echo base_url(); ?>sop"><i class="fas fa-sliders-h text-info icon-aplikasi"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <a href="<?php echo base_url(); ?>sop">
                                                                <h6 class="text-info heading-icon-aplikasi">SOP</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-xl-4 mb-xl-4 py-5">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <div><a class="link-aplikasi" href="<?php echo base_url(); ?>penyusunan-apbd-murni"><i class="far fa-calendar-alt text-info icon-aplikasi"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div>
                                                            <a href="<?php echo base_url(); ?>penyusunan-apbd-murni">
                                                                <h6 class="text-info heading-icon-aplikasi">AGENDA BPKAD KOTA CIMAHI</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>