<div data-bs-parallax-bg="true" class="para-visi-misi p-5">
        <div class="text-center text-white p-4">
            <h1 class="text-center heading-tugas_fungsi"><strong>TUGAS &amp; FUNGSI</strong><br><strong>BPKAD KOTA CIMAHI</strong></h1>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div>
                    <ol class="breadcrumb bg-white" style="font-size: 12px;">
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark">Beranda</span></a></li>
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark">Profil</span></a></li>
                        <li class="breadcrumb-item"><a href="#"><span class="text-dark"><strong>Tugas &amp; Fungsi</strong></span></a></li>
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
			<?php 
			$no=1;
			foreach($fungsi as $dow) : ?>
            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="text-left"><strong><?php echo $dow->jabatan; ?></strong></h4>
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <div class="table-responsive" style="font-size: 14px;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Komponen</th>
                                        <th>Uraian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php  echo $no++;?></td>
                                        <td>Tugas</td>
                                        <td><?php echo $dow->tugas; ?><br></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Fungsi</td>
                                        <td>
                                            <?php echo $dow->fungsi; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Uraian Tugas</td>
                                        <td>
                                            <?php echo $dow->uraian; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
			
			<?php endforeach; ?>  
        </div>
    </section>
	