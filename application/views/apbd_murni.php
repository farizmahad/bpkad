<?php
/**
 * Created by PhpStorm.
 * User: RANI
 * Date: 12/26/2018
 * Time: 2:55 PM
 */

?>
<div data-bs-parallax-bg="true" class="para-visi-misi p-4">
	<div class="text-center text-white p-5">
		<h1 class="text-center heading-struktur text-uppercase"><strong>tahapan dan jadwal proses penyusunan & perubahan Apbd</strong><br></h1>
	</div>
</div>
<section>
	<div class="container">
		<div class="row">
			<div>
				<ol class="breadcrumb bg-white" style="font-size: 12px;">
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Beranda</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark">Agenda</span></a></li>
					<li class="breadcrumb-item"><a href="#"><span class="text-dark"><strong>Penyusunan & Perubahan APBD Murni</strong></span></a></li>
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
        
        <ul class="list-unstyled timeline">
         <?php foreach($apbd_murni as $ap):?>
            <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title"><?php echo $ap->agenda; ?></h4>
                        <div class="timeline-body">
                            <p><?php echo $ap->keterangan; ?></p>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</section>
