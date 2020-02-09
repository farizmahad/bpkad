<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> <?php foreach($video as $sow){

                           echo $sow->judul;
                        } ?></h2>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">

                            <h5>Video </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>

                         <?php foreach($video as $row):?>

                             <?php
                             $video=$row->url;
                             $tanggal = explode("=",$video);
      $dari = $tanggal[0];
      $sampai = $tanggal[1];

     
                             ?>
                        <div class="ibox-content">
                            <figure>
                                <iframe width="600" height="400" src="https://www.youtube.com/embed/<?php echo $sampai; ?>" frameborder="0" allowfullscreen></iframe>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Deskripsi Video</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content profile-content">
                        <form method="post" action="<?php echo base_url();?>admin/video/save_video">
                        <label>URL / Link </label>
                             <input type="text" class="form-control" name="url" placeholder="URL / Link Video (Ambil dari Youtube)" value="<?php echo $row->url; ?>" required oninvalid="this.setCustomValidity('URL Youtube  wajib diisi')" oninput="setCustomValidity('')">     
                        <br>
                        <label>Judul </label>
                            <input type="text" class="form-control" name="judul" placeholder="Judul Video"  value="<?php echo $row->judul;?>" required oninvalid="this.setCustomValidity('Judul Video  wajib diisi')" oninput="setCustomValidity('')">
                            <input type="hidden" class="form-control" name="id_video" placeholder="Judul Video"  value="<?php echo $row->id_video;?>">
                        <br>
                        <label>Tanggal Unggah</label>
                        <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        <input type="text" class="form-control" data-mask="9999-99-99" name='tanggal' id="resi" placeholder="Tanggal Unggah" value="<?php echo $row->tanggal; ?>">
                       </div>
                       <br>
                       <label>Deskripsi</label><br>      
                        <textarea  rows="5" cols="84" name='deskripsi' placeholder="Deskripsi Video"><?php echo $row->deskripsi; ?></textarea>
                       <br><br>
              <button type="submit" class="btn btn-block  btn-info"> <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
              </form>
          <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<script>
var today = new Date();
$('#resi').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    todayHighlight: true,
    endDate: "today",
});

</script>