<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bkpd</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue-1.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/timeline.css">
</head>

<body>
    <section class="section-info-keuangan">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a><span>beranda</span></a></li>
                <li class="breadcrumb-item"><a><span>visualisasi apbd</span></a></li>
            </ol>
            <div class="div-heading-info-keuangan" style="margin-top:50px;">
                <h2 class="text-center">VISUALISASI APBD BPKAD KOTA CIMAHI</h2>
            </div>
            <div class="row">
                <div class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-2">
                    <div class="div-input-tahun">
                        <form>
                            <div class="form-group"><input class="form-control form-control-sm text-tahun" type="text" placeholder="Dari tahun..."></div>
                        </form>
                    </div>
                </div>
                <div class="col-7 col-sm-5 col-md-3 col-lg-2 col-xl-2"><button class="btn btn-primary btn-block" type="button" style="margin-top:11px;">Cari</button></div>
            </div>
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
                    <div class="div-left-murni"><button class="btn btn-primary" type="button" id="btn-utama-visual-murni">Murni</button></div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="div-right-murni"><button class="btn btn-success" type="button" id="btn-utama-visual-perubahan">Perubahan</button></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="200" style="padding-top:47PX;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-grafik"><button class="btn btn-primary btn-utama-visual" type="button">TAHUN ...</button></div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="300" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-grafik"><button class="btn btn-primary btn-utama-visual" type="button">TAHUN ...</button></div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-delay="400" style="padding-top:47px;">
                    <div><img class="img-fluid" src="assets/img/Rencana Belanja Daerah.png"></div>
                    <div class="btn-grafik"><button class="btn btn-primary btn-utama-visual" type="button">TAHUN ...</button></div>
                </div>
            </div>
        </div>
    </section>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="assets/js/Calendar-JavaScript-Can-only-see-in-browser-preview-mode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>