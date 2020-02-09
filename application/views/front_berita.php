<div data-bs-parallax-bg="true" class="para-visi-misi p-5">
	<div class="text-center text-white p-5">
		<h1 class="text-center heading-struktur"><strong>BERITA</strong><br></h1>
	</div>
</div>
<section>
	<div class="container">
		<div class="row">
			<div>
				<ol class="breadcrumb bg-white" style="font-size: 12px;">
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Beranda</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Publikasi</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark"><strong>Berita</strong></span></a></li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12 col-xl-12">
				<div>
					<h4 class="text-primary"><strong>Indeks Berita</strong></h4>
				</div>
			</div>
		</div>
		
		<div class="row mt-3">
			<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
				<div>
					<?php
						$no=0;
						foreach($berita as $ber):
						$no++;
						?>
						<?php if($no==1){ ?>
					<div class="row">
						<div class="col-12">
							<a class="text-dark" href="<?php echo base_url(); ?>detail-berita/<?php echo $ber->id_berita; ?>">
								<h5><strong><?php echo $ber->title; ?></strong><br></h5>
							</a>
						</div>
						<div class="col-12">
							<div><img class="img-fluid" src="<?php echo base_url(); ?>assets/featured_image/<?php echo $ber->featured_image; ?>"></div>
						</div>
						<div class="col-12 mt-3">
							<div><button class="btn btn-primary" type="button">Artikel</button>
								<p><?php echo $ber->tanggal_post; ?> | <?php echo $ber->first_name; ?> <?php echo $ber->last_name; ?><br></p>
							</div>
						</div>
						<div class="col-12">
							<div>
								<?php $tampil=substr($ber->isi,0,200); ?>
								<p><?php echo $tampil; ?> .. <br></p>
							</div>
						</div>
					</div>
					<?php } ?>
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
					<?php
                        foreach($berita as $be): ?>
					<div class="row">
						<div class="col-6 col-sm-6 col-md-12 col-lg-12 col-xl-12 mb-3">
							<div>
								<div class="row">
									<div class="col-12 col-md-6 col-lg-6 col-xl-6">
										<div><a href="<?php echo base_url(); ?>detail-berita/<?php echo $be->id_berita; ?>"><img class="img-fluid" src="assets/img/Untitled2.png"></a></div>
									</div>
									<div class="col-12 col-md-6 col-lg-6 col-xl-6">
										<div>
											<h6 class="text-size-head-other-news"><a class="text-dark" href="<?php echo base_url(); ?>detail-berita/<?php echo $be->id_berita; ?>"><strong><?php echo $be->title; ?></strong></a><br></h6>
										</div>
										<div>
											<p class="text-size"><?php echo date('d F Y', strtotime(DATE($be->tanggal_post))); ?> | <?php echo $be->first_name; ?> <?php echo $be->last_name; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>
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