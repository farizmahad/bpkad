
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
    