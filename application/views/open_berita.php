<section>
        <div class="container">
            <div class="row">
                <div>
                    <ol class="breadcrumb bg-white" style="font-size: 12px;">
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark">Beranda</span></a></li>
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark">Publikasi</span></a></li>
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark">Berita</span></a></li>
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark"><strong>Detail Berita</strong></span></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-3">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div>
						<?php foreach($detail_berita as $det):?>
                        <div class="row">
                            <div class="col-12">
                                <a class="text-dark" href="#">
                                    <h5><strong><?php echo $det->title; ?></strong><br></h5>
                                </a>
                            </div>
                            <div class="col-12">
                                <div><img class="img-fluid" src="<?php echo base_url(); ?>assets/featured_image/<?php echo $det->featured_image; ?>"></div>
                            </div>
                            <div class="col-12 mt-3">
                                <div><button class="btn btn-primary" type="button">Artikel</button>
                                    <p><?php echo date('d F Y', strtotime(DATE($det->tanggal_post))); ?>&nbsp;| &nbsp;<?php echo $det->first_name; ?> <?php echo $det->last_name; ?><br></p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div>
                                    <p class="text-justify"><?php echo $det->isi; ?><br></p>
                                </div>
                            </div>
                        </div>
						<?php endforeach; ?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-primary"><strong>Berita Lainnya</strong></h5>
                            </div>
                        </div>
                        <div class="row">
							<?php foreach($berita_random as $ran):?>
                            <div class="col-6 col-sm-6 col-md-12 col-lg-12 col-xl-12 mb-3">
                                <div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div><img class="img-fluid" src="<?php echo base_url(); ?>assets/featured_image/<?php echo $ran->featured_image; ?>"></div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                            <div>
                                                <h6 class="text-size-head-other-news"><strong><?php echo $ran->title; ?></strong><br></h6>
                                            </div>
                                            <div>
                                                <p class="text-size"><?php echo date('d F Y', strtotime(DATE($ran->tanggal_post))); ?> |&nbsp; | <?php echo $ran->first_name;?> <?php echo $ran->last_name; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php endforeach;?>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="text-right"><a class="text-dark" href="#" style="font-size: 12px;">Berita Lainnya &gt;&gt;</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3">
        <div class="container">
            <div class="row p-2">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div>
                        <h3>Komentar</h3>
                    </div>
                    <div></div>
                </div>
				<?php
					$id=$det->id_berita;
					$select_komentar=$this->Front_berita_model->select_komentar($id); ?>

					<?php
					   $count_komentar=count($select_komentar);
					   if($count_komentar > 0) { ?>
						<?php foreach ($select_komentar as $sel) :?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 mt-3">
                    <div>
                        <div class="media"><img class="img-fluid mr-3" src="assets/img/male_dummy.png" style="width: 65px;">
                            <div class="media-body">
                                <h5><?php echo $sel->nama; ?></h5>
                                <p><?php echo $sel->komentar; ?></p>
                                <!--
								<div class="media"><img class="img-fluid mr-3" src="assets/img/male_dummy.png" style="width: 65px;">
                                    <div class="media-body">
                                        <h5>Media Heading</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    </div>
                                </div>
								-->
                            </div>
                        </div>
                    </div>
                </div>
				<?php endforeach;?>
				<?php }else{ ?>
					<p style="font-size:12px;">Komentar Kosong</p>
				<?php } ?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div>
                        <h5>Masukan Komentar</h5>
                    </div>
                    <div></div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div>
                        <form method="POST" action="<?php echo base_url(); ?>Front_publikasi/simpan_komentar">
                            <div class="form-row">
                                <div class="col-12">
                                    <div>
                                        <div class="form-group"><input class="form-control form-control-sm" type="text" placeholder="Isi Nama..." name="nama"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <div class="form-group"><input class="form-control form-control-sm" type="email" placeholder="Isi Email..." name="email"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <div class="form-group"><textarea class="form-control form-control-sm" placeholder="Isi Komentar..." name="komentar"></textarea>


                                            <input class="form-control form-control-sm invisible" type="text" name="id_berita" value="<?php echo $id_berita; ?>"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <div class="form-group"><button class="btn btn-primary" type="submit">Kirim</button></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	