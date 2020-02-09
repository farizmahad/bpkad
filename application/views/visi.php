<?php foreach($select_profile as $dop): ?>
<div data-bs-parallax-bg="true" class="para-visi-misi p-5">
	<div class="text-center text-white p-5">
		<h1 class="heading-visi-misi"><strong>VISI - MISI</strong></h1>
	</div>
</div>
<section>
	<div class="container">
		<div class="row">
			<div>
				<ol class="breadcrumb bg-white" style="font-size: 12px;">
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Beranda</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Profil</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark"><strong>Visi-Misi</strong></span></a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div></div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div>
					<h3 class="text-center"><strong>VISI DAN MISI</strong></h3>
				</div>
			</div>
			<div class="col-12">
				<!--<div>
					<h4 class="text-center heading-sub-visi"><strong>VISI KOTA CIMAHI 2017 - 2022</strong></h4>
				</div>-->
				<div class="mt-5">
					<h4 class="text-center"><strong><?php echo $dop->visi; ?></strong></h4>
				</div>
			</div>
			<div class="col-12 mt-5">
				<div>
					<h4 class="text-center heading-sub-misi"><strong>MISI KOTA CIMAHI 2017 - 2022</strong></h4>
				</div>
				<div class="mt-5">
					<div class="row justify-content-center">
						<div class="col-sm-10 col-md-8 col-lg-6 col-xl-6">
							<ol style="font-size: 14px;">
								<?php echo $dop->misi; ?>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endforeach; ?>