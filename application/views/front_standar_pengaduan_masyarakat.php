<div data-bs-parallax-bg="true" class="para-visi-misi p-5">
	<div class="text-center text-white p-5">
		<h1 class="text-center heading-perpu"><strong>STANDAR PENGADUAN MASYARAKAT</strong></h1>
	</div>
</div>
<section>
	<div class="container">
		<div class="row">
			<div>
				<ol class="breadcrumb bg-white" style="font-size: 12px;">
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Beranda</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Pelayanan<br></span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark"><strong>Standar Pengaduan Masyarakat</strong><br></span></a></li>
				</ol>
			</div>
		</div>
	</div>
</section>
<div class="features-clean mt-4">
	<div class="container">
		<div class="row features">
		<?php foreach($select_standar as $do) : ?>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 item"><i class="far fa-handshake icon"></i>
				<h3 class="name"><?php echo $do->pelayanan; ?></h3>
				<p class="description"><?php echo $do->desc_pelayanan; ?><a href="<?php echo site_url('open-pelayanan/'.$do->id_pelayanan);?>"><strong>Pelajari selengkapnya...</strong></a><br></p>
			</div>
			<!--
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 item"><i class="far fa-handshake icon"></i>
				<h3 class="name">Pelayanan Penerbitan Daftar Gaji ASN</h3>
				<p class="description">Gaji adalah pengeluaran untuk kompensasi yang harus dibayarkan kepada pegawai pemerintah berupa gaji poko ditambah dengan tunjangan-tunjangan yang sah yang berhak diterima oleh penerima gaji berdasarkan peraturan dan perundang-undangan
					yang berlaku. Dalam menentukan bersarnya gaji perlu memperhatikan kemampuan keuangan negara, selain itu diperlukan untuk memperhatikan keadaan dimana pegawai negeri tersebut dipekerjakan. Pembarayan gaji diberikan setiap awal bulan
					dan rincian pembayaran gaji dimuat dalam sebuah daftar yang disebut dengan daftar gaji induk/bulanan yang dikeluarkan oleh satuan kerja di mana pegawai tersebut gajinya dibayarkan.<a href="#"><br><strong>Pelajari selengkapnya...</strong></a><br></p>
			</div>
			-->
		<?php endforeach; ?>
		</div>
	</div>
</div>

<!--
<section id="section-bread-pelayanan">
        <div class="container">
            <ol class="breadcrumb brd_crmb_pelayanan">
                <li class="breadcrumb-item"><a><span><a href="index.html">beranda</a></span>
                    </a>
                </li>
                <li class="breadcrumb-item"><a><span><a href="#">pelayanan</a></span>
                    </a>
                </li>
                <li class="breadcrumb-item"><a><span><a href="standar_pelayanan.html">standar pelayanan</a></span>
                    </a>
                </li>
            </ol>
        </div>
    </section>
	
<section id="section_daftar_layanan">
	<div class="container">
		<h1>Standar Pelayanan</h1>

			<?php foreach($select_standar as $do) : ?>
            <div class="row">
                <div class="col">
                    <h1 class="head-sub-layanan"><a href="<?php echo base_url();?>open-pelayanan/<?php echo $do->id_pelayanan; ?>"><br><a href="<?php echo base_url();?>open-pelayanan/<?php echo $do->id_pelayanan; ?>"><?php echo $do->pelayanan; ?><br><br></a></h1>
                    <p class="para-pelayanan"><?php echo $do->desc_pelayanan; ?></p><a href="<?php echo site_url('open-pelayanan/'.$do->id_pelayanan);?>">Pelajari Selengkapnya </a>&gt;&gt;</a></div>
            </div>
			<?php endforeach; ?>
	</div>
</section>
-->    