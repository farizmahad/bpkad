<div data-bs-parallax-bg="true" class="para-visi-misi p-5">
	<div class="text-center text-white p-5">
		<h1 class="text-center heading-struktur"><strong>SOP</strong><br></h1>
	</div>
</div>
<section>
	<div class="container">
		<div class="row">
			<div>
				<ol class="breadcrumb bg-white" style="font-size: 12px;">
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Beranda</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Publikasi</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Laporan</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark"><strong>SOP</strong></span></a></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div></div>
		</div>
	</div>
</section>
<section class="mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div>
					<h5 class="text-center text-sm-left text-md-left text-lg-left text-xl-left">SOP BPKAD KOTA CIMAHI</h5>
				</div>
			</div>
			<div class="col-12">
				<div>
					<h5><span class="mr-2"><i class="far fa-file-pdf"></i></span><strong>SOP</strong></h5>
				</div>
			</div>
			<div class="col-12">
				<div>
					<div class="table-responsive">
						<table class="table">
							<tbody>
							<?php foreach($sop as $file):?>
								<tr>
									<!--<td class="text-center">2008</td>-->
									<td><?php echo $file->judul_file; ?><br></td>
									<td><a class="btn-primary btn-sm" href="<?php echo base_url(); ?>files/sop/<?php echo $file->nama_file; ?>" download = "<?php echo base_url(); ?>files/laporan/<?php echo $file->nama_file; ?>" data-toggle="tooltip" title="Unduh"><span><i class="fas fa-download"></i></span></a></td>
								</tr>
							<?php endforeach;?>	
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>