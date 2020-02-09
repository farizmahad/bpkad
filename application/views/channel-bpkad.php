	<div data-bs-parallax-bg="true" class="para-visi-misi p-5">
        <div class="text-center text-white p-5">
            <h1 class="text-center heading-struktur"><strong>BPKAD CHANNEL &amp; GALERI</strong></h1>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div>
                    <ol class="breadcrumb bg-white" style="font-size: 12px;">
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark">Beranda</span></a></li>
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark"><strong>Galeri</strong><br></span></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <h6 class="text-left text-sm-left text-md-left text-lg-left text-xl-left"><strong>BPKAD CHANNEL</strong><br></h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-5">
                                    <div class="row">
										<?php foreach($video as $vid):?>
											<?php
											$video=$vid->url;
											$tanggal = explode("=",$video);
											$dari = $tanggal[0];
											$sampai = $tanggal[1];
											?>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3">
                                            <div class="embed-responsive embed-responsive-16by9"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/<?php echo $sampai; ?>" class="embed-responsive-item" height="315" width="560"></iframe></div>
                                        </div>
										
                                        <!--
										<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3">
                                            <div class="embed-responsive embed-responsive-16by9"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/MAvsxZPS6dc" class="embed-responsive-item" height="315" width="560"></iframe></div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3">
                                            <div class="embed-responsive embed-responsive-16by9"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/fY6wA1nTEO8" class="embed-responsive-item" height="315" width="560"></iframe></div>
                                        </div>
										-->
										<?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
	<section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <h6 class="text-left text-sm-left text-md-left text-lg-left text-xl-left"><strong>GALERI BPKAD</strong><br></h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3">
                                            <div></div>
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
	-->
	