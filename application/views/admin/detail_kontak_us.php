 <div class="wrapper wrapper-content">
        <div class="row">
            
            <div class="col-lg-12 animated fadeInRight">
            <div class="mail-box-header">
                <div class="pull-right tooltip-demo">
                    <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Print email"><i class="fa fa-print"></i> </a>
                    <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </a>
                </div>
                <h2>
                    Detail Pesan
                </h2>
                <?php foreach($detail_kontak as $det) :?>
                <div class="mail-tools tooltip-demo m-t-md">


                    <h3>
                        <span class="font-normal">Subject: </span> <?php echo $det->judul; ?>
                    </h3>
                    <h5>
                        <span class="pull-right font-normal"><?php echo $det->tanggal; ?></span>
                        <span class="font-normal">From: </span><?php echo $det->nama; ?>
                    </h5>
                </div>
            </div>
                <div class="mail-box">


                <div class="mail-body">
                    <p>
                       <?php echo $det->pesan; ?>
                    </p>
                </div>
                    <div class="mail-attachment">
                        <p>
                           
                           <form action="<?php echo base_url(); ?>admin/Kontak/simpan_balasan" method="POST">


<input type="hidden" class="form-control" name="id_kontak" value="<?php echo $det->id; ?>">
<input type="hidden" class="form-control" name="email" value="<?php echo $det->email; ?>">
<input type="hidden" class="form-control" name="nama" value="<?php echo $det->nama; ?>">


<br>
<textarea class="summernote" name="balasan" placeholder="Tulis Balasan disini" rows="10"></textarea>
<br><br>

                           

                        
                        </p>

                       
                        <div class="mail-body text-right tooltip-demo">
                                <button type="submit" class="btn btn-sm btn-white"><i class="fa fa-reply"></i> Balas </a></button>
                              
                        </div>


                        </form>
                        <div class="clearfix"></div>

<?php endforeach; ?>
                </div>
            </div>
        </div>
        </div>


<script>
  $(document).ready(function(){

            $('.summernote').summernote();

        });


</script>