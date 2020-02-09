
  <!-- <p> ======================================== AREA SLIDER HOME ====================================================== </p> -->
    <div data-aos="fade-up" data-aos-duration="500" class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($slider_home as $sli) : ?>
                <div class="swiper-slide" style="background-image:url(&quot;assets/img_slider/<?php echo $sli->gambar;  ?>&quot;);">
                    <div class="div-slider-tengah"><a class="text-monospace text-white d-flex justify-content-center link-slider-tengah" href="<?php echo $sli->url; ?>" style="font-family:Montserrat, sans-serif;"><?php echo $sli->judul; ?></a>
                        <p class="desc-link-tengah"><br><?php echo $sli->deskripsi; ?><br><br></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
  <!-- <p> ========================================== SELESAI AREA SLIDER HOME============================================= </p> -->





<!-- <p> =========================================== AREA PROFILE SINGKAT ================================================= </p> -->
   <?php foreach ($profile_singkat as $pri) : ?>
    <div data-aos="fade-up" data-aos-duration="500" class="highlight-phone">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2 data-aos="fade-up" data-aos-duration="500">Badan Pengawasan Keuangan &amp; Aset Daerah Kota Cimahi</h2>
                        <p data-aos="fade-up" data-aos-duration="500"><?php echo $pri->profile; ?></p>
                    </div>
                </div>
                <div class="col-sm-4" data-aos="fade-up" data-aos-duration="500">
                    <div class="d-none d-md-block iphone-mockup"><img src="assets/img/iphone.svg" class="device">
                        <div class="screen"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>


<!-- <p> =========================================== SELESAI PROFILE SINGKAT ============================================= </p> -->



<!-- <p> ============================================== AREA VIDEO ======================================================== </p> -->
   
    <section data-aos="fade-up" data-aos-duration="500" id="video_section" class="video_section">
        <div class="container">
            <div class="well">
                <div class="row">

                 <?php foreach($video_utama as $do ):?>

                     <?php
                            $video=$do->url;
                            $tanggal = explode("=",$video);
                            $dari = $tanggal[0];
                            $sampai = $tanggal[1];
                    ?>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-4by3"><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/<?php echo $sampai; ?>" class="embed-responsive-item"></iframe></div>
                    </div>
                <?php endforeach; ?>
                
                    <div class="col-md-3">
                        <div class="embed-responsive embed-responsive-4by3"><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/_kSyq78-Tgs"></iframe></div>
                        <div class="embed-responsive embed-responsive-4by3 m16"><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/MAvsxZPS6dc"></iframe></div>
                    </div>
                    <div class="col-md-3">
                        <div class="embed-responsive embed-responsive-4by3"><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/MAvsxZPS6dc"></iframe></div>
                        <div class="embed-responsive embed-responsive-4by3 m16"><iframe width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/fY6wA1nTEO8"></iframe></div>
                    </div>



                </div>
            </div>
        </div>
    </section>

<!-- <p> =========================================== SELESAI AREA VIDEO ================================================= </p> -->


    <main id="main-coba">
        <div class="container">
            <div class="intro">
                <h3 class="text-center" data-aos="fade-up" data-aos-duration="500" id="berita-heading">Berita Terbaru</h3>
                <p class="text-center para-berita" data-aos="fade-up" data-aos-duration="500">Dapatkan berita terbaru dari BPKAD Kota Cimahi disini.</p>
            </div>
            <div class="row">
                <div class="col-md-8" style="height:100%;">
                    <div class="category-section">
                        <div class="article-title header_purple">
                            <h2 class="text-dark"><a href="#">Berita Terbaru</a></h2>
                        </div>
                    </div>
                    <div class="category_article_wrapper">
                        <div class="row" data-aos="fade-up" data-aos-delay="500">
                            <div class="col-md-6">
                                <div class="top_article_img"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                            </div>
                            <div class="col-md-6"><span class="tag purple">Kategori</span>
                                <div class="category_article_title">
                                    <h2><a href="#">Airbnb launches photo-centric app for iPads and Android<br>                        tablets.</a></h2>
                                </div>
                                <div class="category_article_date"><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></div>
                                <div class="category_article_content">
                                    <p style="color:rgb(0,0,0);">ParagrCollaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate<br> B2C users after installed base benefits. Dramatically visualize customer directed convergence<br> without
                                        revolutionary ROI.aph</p>
                                </div>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-up" data-aos-delay="600">
                            <div class="col-md-6">
                                <div class="top_article_img"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                            </div>
                            <div class="col-md-6"><span class="tag purple">Kategori</span>
                                <div class="category_article_title">
                                    <h2><a href="#">Airbnb launches photo-centric app for iPads and Android<br>                        tablets.</a></h2>
                                </div>
                                <div class="category_article_date"><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></div>
                                <div class="category_article_content">
                                    <p style="color:rgb(0,0,0);">ParagrCollaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate<br> B2C users after installed base benefits. Dramatically visualize customer directed convergence<br> without
                                        revolutionary ROI.aph</p>
                                </div>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-up" data-aos-delay="700">
                            <div class="col-md-6">
                                <div class="top_article_img"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
                            </div>
                            <div class="col-md-6"><span class="tag purple">Kategori</span>
                                <div class="category_article_title">
                                    <h2><a href="#">Airbnb launches photo-centric app for iPads and Android<br>                        tablets.</a></h2>
                                </div>
                                <div class="category_article_date"><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></div>
                                <div class="category_article_content">
                                    <p style="color:rgb(0,0,0);">ParagrCollaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate<br> B2C users after installed base benefits. Dramatically visualize customer directed convergence<br> without
                                        revolutionary ROI.aph</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <div class="widget_title widget_black">
                            <h2><a href="#">Berita Lainnya</a></h2>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="500" class="media">
                            <div class="media-left"><a href="#"><img class="img-fluid media-object" src="assets/img/desk.jpg" width="100%" style="width:150px;"></a></div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Judul Berita</a><span class="media-date"><br><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></span></h3>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="600" class="media">
                            <div class="media-left"><a href="#"><img class="img-fluid media-object" src="assets/img/desk.jpg" width="100%" style="width:150px;"></a></div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Judul Berita</a><span class="media-date"><br><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></span></h3>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="700" class="media">
                            <div class="media-left"><a href="#"><img class="img-fluid media-object" src="assets/img/desk.jpg" width="100%" style="width:150px;"></a></div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Judul Berita</a><span class="media-date"><br><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></span></h3>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="800" class="media">
                            <div class="media-left"><a href="#"><img class="img-fluid media-object" src="assets/img/desk.jpg" width="100%" style="width:150px;"></a></div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Judul Berita</a><span class="media-date"><br><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></span></h3>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="900" class="media">
                            <div class="media-left"><a href="#"><img class="img-fluid media-object" src="assets/img/desk.jpg" width="100%" style="width:150px;"></a></div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Judul Berita</a><span class="media-date"><br><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></span></h3>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="1000" class="media">
                            <div class="media-left"><a href="#"><img class="img-fluid media-object" src="assets/img/desk.jpg" width="100%" style="width:150px;"></a></div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Judul Berita</a><span class="media-date"><br><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></span></h3>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="1100" class="media">
                            <div class="media-left"><a href="#"><img class="img-fluid media-object" src="assets/img/desk.jpg" width="100%" style="width:150px;"></a></div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Judul Berita</a><span class="media-date"><br><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></span></h3>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="1200" class="media">
                            <div class="media-left"><a href="#"><img class="img-fluid media-object" src="assets/img/desk.jpg" width="100%" style="width:150px;"></a></div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Judul Berita</a><span class="media-date"><br><a href="#" style="font-size:12px;">10 Agustus 2018 |&nbsp;</a><a href="#" style="font-size:13px;">Penulis</a></span></h3>
                            </div>
                        </div>
                        <p data-aos="fade-up" data-aos-delay="1200" class="widget_divider">Paragraph<a href="#">Berita Lainnya</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="features-blue">
        <div class="container">
            <div class="intro">
                <h3 class="text-center" style="font-weight:bold;padding-top:40px;margin-bottom:40px;font-family:Montserrat, sans-serif;">Fasilitas BPKAD Cimahi</h3>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-flag icon"></i>
                    <h3 class="name">Profil BPKAD</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-pencil-square-o icon"></i>
                    <h3 class="name">Tupoksi</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-handshake-o icon"></i>
                    <h3 class="name">Pelayanan</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-money icon"></i>
                    <h3 class="name">Informasi Keuangan</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-photo icon"></i>
                    <h3 class="name">Galeri</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Kontak</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="photo-gallery">
        <div class="container">
            <div class="intro">
                <h4 class="text-center judul-gallery" data-aos="fade-up" data-aos-duration="500">GALERI</h4>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600"><a href="assets/img/desk.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/desk.jpg"><p>Kegiatan A&nbsp;<br>1 Januari 2018<br></p></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"><p>Kegiatan B<br>2 Januari 2018<br></p></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800"><a href="assets/img/loft.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/loft.jpg"><p>Kegiatan C&nbsp;<br>3 Januari 2018<br></p></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="900"><a href="assets/img/building.jpg" data-lightbox="photos"><img class="img-fluid" src="assets/img/building.jpg"><p>Kegiatan D&nbsp;<br>4 Januari 2018<br></p></a></div>
            </div>
            <div class="row no-gutters button-foto">
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="900" style="margin:0 auto;"><button class="btn btn-primary photos-button" type="button">Selengkapnya</button></div>
            </div>
        </div>
    </div>
    
   
</body>

</html>