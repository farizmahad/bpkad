<?php
/**
 * Created by PhpStorm.
 * User: RANI
 * Date: 12/26/2018
 * Time: 3:05 PM
 */

?>
<div data-bs-parallax-bg="true" class="para-visi-misi p-5">
        <div class="text-center text-white p-5">
            <h1 class="text-center heading-perpu"><strong>PERATURAN PEMERINTAH DAERAH</strong></h1>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div>
                    <ol class="breadcrumb bg-white" style="font-size: 12px;">
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark">Beranda</span></a></li>
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark">Produk Hukum<br></span></a></li>
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark"><strong>Peraturan Pemerintah Daerah</strong><br></span></a></li>
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
                        <ol class="text-dark">
							<?php foreach($produk_hukum as $huk):?>
								<li><a class="text-dark" href="<?php echo base_url(); ?>files/produk_hukum/<?php echo $huk->nama_file; ?>" download = "<?php echo base_url(); ?>files/produk_hukum/<?php echo $huk->nama_file; ?>"><?php echo $huk->nama_produk_hukum; ?><br></a></li>
							<?php endforeach;?>
						</ol>
                    </div>
                </div>
            </div>
        </div>
    </section>