<div class="carousel slide d-block" data-ride="carousel" id="carousel-1" style="height:100%;width:100%;">
    <div class="carousel-inner" role="listbox">

         <?php
         $no=0;
         foreach($slider_home as $sli) :
             $no++?>
        <div class="carousel-item <?php if($no==1){ ?>
            active
      <?php  } ?>" style="background-image:url(&quot;assets/img_slider/<?php echo $sli->gambar;  ?>&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;height:705px;">
            <div class="div-slider-tengah">
                <h1 class="text-center text-white"><a class="text-monospace text-white d-flex justify-content-center link-slider-tengah" href="#" style="font-family:Montserrat, sans-serif;">Selamat Datang di Website BPKAD Kota Cimahi</a></h1>
                <p class="desc-link-tengah"><br>Dapatkan&nbsp;informasi terbaru BPKAD Kota Cimahi Di Sini<br><br></p>
            </div>
        </div>
       <?php endforeach; ?>




    </div>
    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
    <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
    </ol>
</div>



<div id="highlight" class="highlight-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="bukusaku"></div>
            </div>
        </div>
    </div>
</div>

<!-- <p> ============================================== BERITA AGAIN ======================================================== </p> -->

<section style="width:100%;">
    <div class="row no-gutters">

        <?php
        $no=00;
        foreach($berita_random_atas as $ak):

            $no++;?>


        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500" style="background-image:url(&quot;assets/featured_image/<?php echo $ak->featured_image; ?>&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;height:400px;">
            <div class="d-flex section-head-berita">
                <h1 class="text-white"><a class="text-white" href=""<?php echo base_url(); ?>detail-berita/<?php echo $ak->id_berita; ?>><?php echo $ak->title; ?> <?php echo $no++; ?> &nbsp;<br></a></h1><button class="btn btn-primary" type="button">

                    <?php
                    $kat=$this->Front_Home_model->detail_kategori($ak->id_berita);




                    foreach($kat as $ka):
                        ?>

                        <?php echo $ka->kategori; ?>

                    <?php endforeach; ?>
                </button></div>
        </div>
        <?php endforeach; ?>

    </div>
</section>



<!-- <p> ============================================== AREA VIDEO ======================================================== </p> -->

<section data-aos="fade-up" data-aos-duration="500" id="video_section" class="video_section">
    <div class="container">
        <div class="well" style="background-color:rgb(238,244,247);">
            <div class="row">

                <?php foreach($video_utama as $do){

                    $video=$do->url;
                    $tanggal = explode("=",$video);
                    $dari = $tanggal[0];
                    $sampai = $tanggal[1];

                    ?>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3"><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/<?php echo $sampai; ?>" class="embed-responsive-item"></iframe></div>
                </div>
                <?php } ?>



<?php
$jumlah=count($video_next);
$div1=$jumlah/2;

$aman=ceil($div1);

?>

<?php/*
    for ($i= 1; $i <= $aman; $i++)
    { */?>



                <div class="col-md-3">
<?php
$n=0;
foreach($video_next as $vid){

    $n++;

$videoo=$vid->url;
$tanggall = explode("=",$videoo);
$darii = $tanggall[0];
$sampaii = $tanggall[1];


?>
    <?php
    if($n==1){
    ?>

                    <div class="embed-responsive embed-responsive-4by3"><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/<?php echo $sampaii; ?>"></iframe></div>
<?php }elseif($n==2){?>
        <div class="embed-responsive embed-responsive-4by3 m16"><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/<?php echo $sampaii; ?>"></iframe></div>
        </div>
    <?php }elseif($n==3 or $n==4){ ?>
                <div class="col-md-3">
                    <?php if($n==3){ ?>
                    <div class="embed-responsive embed-responsive-4by3"><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/<?php echo $sampaii; ?>"></iframe></div>
                <?php }elseif($n==4){?>
                        <div class="embed-responsive embed-responsive-4by3 m16"><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/<?php echo $sampaii; ?>"></iframe></div>
                    <?php } ?>
            </div>


        <?php } ?>
        <?php } ?>



       <?php /*}*/
        ?>






            </div>
        </div>
    </div>
</section>

<!--
<div class="projects-horizontal" style="background-color:rgb(238,244,247);">
    <div class="container">
        <div class="intro" style="padding-bottom:0px;margin-bottom:-45px;">
            <h2 class="text-center">Aplikasi</h2>
        </div>
        <div class="row projects">
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
                    <div class="col">
                        <h3 class="name"><a href="#">Hibah Bansos</a></h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5 d-flex justify-content-center align-self-center"><a href="#"><i class="fa fa-bar-chart" style="font-size:100px;"></i></a></div>
                    <div class="col">
                        <h3 class="name"><a href="<?php echo base_url(); ?>diagram" target="_blank">Visualisasi APBD</a></h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<div class="projects-horizontal">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" id="berita-heading">Aplikasi</h2>
			<p class="text-center para-berita" data-aos="fade-up" data-aos-duration="500">Dapatkan informasi dari aplikasi BPKAD Kota Cimahi disini.</p>
        </div>
        <div class="row justify-content-center projects">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5 d-flex justify-content-center"><a href="#"><i class="fa fa-handshake-o"></i></a></div>
                    <div class="col">
                        <h3 class="name"><a href="<?php echo base_url(); ?>akunpedia" target="_blank">Akunpedia</a></h3>
                        <p class="description">Dapatkan informasi terbaru dari Akunpedia&nbsp;<a href="#" class="link-aplikasi">disini</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5 d-flex justify-content-center align-self-center"><a href="#"><i class="fa fa-signal"></i></a></div>
                    <div class="col">
                        <h3 class="name"><a href="<?php echo base_url(); ?>diagram">Visualisasi APBD</a></h3>
                        <p class="description">Dapatkan informasi terbaru dari APBD Pemerintah Kota Cimahi <a href="#">disini</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5 d-flex justify-content-center align-self-center"><a href="#"><i class="fa fa-bar-chart"></i></a></div>
                    <div class="col">
                        <h3 class="name"><a href="<?php echo base_url(); ?>trend-apbd">Trend APBD</a></h3>
                        <p class="description">Dapatkan informasi terbaru dari APBD Pemerintah Kota Cimahi <a href="#">disini</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<main id="main-coba">
    <div class="container">
        <div class="intro" style="padding-top:0px;">
            <h3 class="text-center" data-aos="fade-up" data-aos-duration="500" id="berita-heading" style="padding-top:0px;">Berita Terbaru</h3>
            <p class="text-center para-berita" data-aos="fade-up" data-aos-duration="500">Dapatkan berita terbaru dari BPKAD Kota Cimahi disini.</p>
        </div>
        <div class="row" style="margin-top:55px;">
            <div class="col-md-8" style="height:100%;">
                <div class="category-section">
                    <div class="article-title header_purple">
                        <h2 class="text-dark"><a href="#">Berita Terbaru</a></h2>
                    </div>
                </div>
                <div class="category_article_wrapper">
                    <!-- <p> ============================================== AREA BERITA ======================================================== </p> -->
                    <?php foreach($berita_utama as $ber):?>
                    <div class="row" data-aos="fade-up" data-aos-delay="500">
                        <div class="col-md-6">
                            <div class="top_article_img"><a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/featured_image/<?php echo $ber->featured_image; ?>"></a></div>
                        </div>
                        <div class="col-md-6"><span class="tag purple">
                                <?php 
									$kat=$this->Front_Home_model->detail_kategori($ber->id_berita);
									foreach($kat as $ka):
                                ?>

                                <?php echo $ka->kategori; ?>

								<?php endforeach; ?>
                            </span>
                            <div class="category_article_title"><a href="<?php echo base_url(); ?>detail-berita/<?php echo $ber->id_berita; ?>"><?php echo $ber->title; ?></a></div>
                            <div class="category_article_date"><a href="#"><?php echo date('d F Y', strtotime(DATE($ber->tanggal_post))); ?> &nbsp; |&nbsp;</a><a href="#"><?php echo $ber->first_name; ?> <?php echo $ber->last_name; ?></a></div>
                            <div class="category_article_content">
                                <p class="text-justify">
                                    <?php $potongan_isi=substr($ber->isi,0,100); ?>

                                    <?php echo $potongan_isi; ?> ...selengkapnya</p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                </div>
            </div>



            <!-- <p> ============================================== AREA BERITA lainya ======================================================== </p> -->


            <div class="col-md-4">
                <div class="widget">
                    <div class="widget_title widget_black">
                        <h2><a href="#">Berita Lainnya</a></h2>
                    </div>
                   <?php foreach($berita_lainya as $ow) :?>
                    <div data-aos="fade-up" data-aos-delay="500" class="media">
                        <div class="media-left"><a href="#"><img class="img-fluid media-object" src="<?php echo base_url(); ?>assets/featured_image/<?php echo $ow->featured_image; ?>" width="100%"></a></div>
                        <div class="media-body">
                            <h2 class="text-left media-heading-berita-lainnya"><a href="<?php echo base_url(); ?>detail-berita/<?php echo $ow->id_berita; ?>"><?php echo $ow->title; ?></a><span class="media-date-berita-lainnya"><br><a href="#"><?php echo date('d F Y', strtotime(DATE($ow->tanggal_post))); ?> &nbsp; |&nbsp;</a> |&nbsp;</a><a href="#"><?php echo $ow->first_name; ?> <?php echo $ow->last_name; ?></span></h2>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <p data-aos="fade-up" data-aos-delay="1200" class="widget_divider"><a href="<?php echo base_url(); ?>berita">Berita Lainnya &gt;&gt;</a></p>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="features-boxed">
    <div class="container">
        <div class="row justify-content-center features">
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-newspaper-o icon"></i>
                    <h3 class="name-menu"><a href="<?php echo base_url(); ?>berita"><strong>Berita Terbaru</strong><br></a></h3>
                    <p class="description"></p><a href="#" class="learn-more"></a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-cog icon"></i>
                    <h3 class="name-menu"><a href="<?php echo base_url(); ?>peraturan-pemerintah-pusat">Peraturan Terbaru</a></h3>
                    <p class="description"></p><a href="#" class="learn-more"></a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name-menu"><a href="<?php echo base_url(); ?>standar-pelayanan"><strong>Standar Pelayanan</strong><br></a></h3>
                    <p class="description"></p><a href="#" class="learn-more"></a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-building-o icon"></i>
                    <h3 class="name-menu"><a href="<?php echo base_url(); ?>diagram"><strong>APBD Kota Cimahi</strong><br></a></h3>
                    <p class="description"></p><a href="#" class="learn-more"></a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-tasks icon"></i>
                    <h3 class="name-menu"><a href="<?php echo base_url(); ?>sop">SOP</a></h3>
                    <p class="description"></p><a href="#" class="learn-more"></a></div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-calendar icon"></i>
                    <h3 class="name-menu"><a href="<?php echo base_url(); ?>penyusunan-apbd-murni">Agenda BPKAD Kota Cimahi</a></h3>
                    <p class="description"></p><a href="#" class="learn-more"></a></div>
            </div>
        </div>
    </div>
</div>
