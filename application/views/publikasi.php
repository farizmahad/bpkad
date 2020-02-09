<?php
/**
 * Created by PhpStorm.
 * User: RANI
 * Date: 12/26/2018
 * Time: 3:08 PM
 */

?>
<div data-bs-parallax-bg="true" class="para-visi-misi p-5">
	<div class="text-center text-white p-5">
		<h1 class="text-center heading-laporan_bpkad"><strong>LAPORAN BPKAD KOTA CIMAHI</strong><br></h1>
	</div>
</div>
<section>
	<div class="container">
		<div class="row">
			<div>
				<ol class="breadcrumb bg-white" style="font-size: 12px;">
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Beranda</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Publikasi</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark"><strong>Laporan</strong></span></a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div></div>
		</div>
	</div>
</section>
<section class="mt-5 mb-xl-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div>
					<div class="row justify-content-center">
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 p-2">
							<div class="border rounded-0">
								<div class="row">
									<div class="col">
										<div class="text-center p-3">
											<div class="row mb-3">
												<div class="col">
													<div><a class="link-aplikasi" href="<?php echo base_url(); ?>diagram/"><i class="far fa-building text-primary icon-aplikasi"></i></a></div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div>
														<a href="<?php echo base_url(); ?>diagram/">
															<h6 class="text-dark heading-sub-laporan">VISUALISASI APBD</h6>
														</a>
													</div>
												</div>
											</div>
											<div class="row mt-2">
												<div class="col">
													<div><a class="btn-primary btn-lg text-link-sub-laporan" href="<?php echo base_url(); ?>diagram/">Selengkapnya</a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 p-2">
							<div class="border rounded-0">
								<div class="row">
									<div class="col">
										<div class="text-center p-3">
											<div class="row mb-3">
												<div class="col">
													<div><a class="link-aplikasi" href="#"><i class="far fa-building text-primary icon-aplikasi"></i></a></div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div>
														<a href="#">
															<h6 class="text-dark heading-sub-laporan">SOP</h6>
														</a>
													</div>
												</div>
											</div>
											<div class="row mt-2">
												<div class="col">
													<div><a class="btn-primary btn-lg text-link-sub-laporan" href="<?php echo base_url(); ?>sop/">Selengkapnya</a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<?php foreach($laporan as $lap):?>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 p-2">
							<div class="border rounded-0">
								<div class="row">
									<div class="col">
										<div class="text-center p-3">
											<div class="row mb-3">
												<div class="col">
													<div><a class="link-aplikasi" href="#"><i class="far fa-building text-primary icon-aplikasi"></i></a></div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div>
														<a href="<?php echo base_url(); ?>front_publikasi/detail_laporan/<?php echo $lap->url; ?>">
															<h6 class="text-dark heading-sub-laporan text-uppercase"><?php echo $lap->nama_laporan; ?></h6>
														</a>
													</div>
												</div>
											</div>
											<div class="row mt-2">
												<div class="col">
													<div><a class="btn-primary btn-lg text-link-sub-laporan" href="<?php echo base_url(); ?>front_publikasi/detail_laporan/<?php echo $lap->url; ?>">Selengkapnya</a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
