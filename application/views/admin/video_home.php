<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Video Youtube <button type="button" class="btn btn-sm btn-white" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>

                    <a href="<?php echo base_url(); ?>admin/video"><button type="button" class="btn btn-sm btn-white" data-toggle="modal"><i class="fa fa-refresh"></i> Refresh</button></a>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
<div class="panel-body">
                 
                  

          <div class="input-group">
                            
                                           <div class="input-group-addon"><i class="fa fa-search"></i></div>          
  <select name="kategori" class="chosen-select form-control target">

                        <option value="">Cari berdasarkan judul video</option>
                       <?php foreach($youtube as $yow): ?>
                                            <option value="<?php echo $yow->id_video; ?>"><?php echo $yow->judul; ?></option>
<?php endforeach; ?>
                                          
                                            </select>  
                     
           
                </div>
                </div>
                

                 
                        <?php foreach($video as $now): ?>
            <br><div class="col-lg-6">
                <div class="contact-box">
                    <a href="profile.html">
                    <div class="col-sm-10">
                        <div class="text-center">
                            <?php
                             $video=$now->url;
                             $tanggal = explode("=",$video);
      $dari = $tanggal[0];
      $sampai = $tanggal[1];

     
                             ?>
                            <iframe width="330" height="150" src="https://www.youtube.com/embed/<?php echo $sampai; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="m-t-xs font-bold"><a href="<?php echo base_url(); ?>admin/video/detail_video?id=<?php echo $now->id_video; ?>"><?php echo $now->judul; ?></a></div>
                        
                        </div>

                    </div>
                     <div class="col-sm-2">
                        
                        <address>
                            <center><a href="#" data-url="<?php echo site_url('admin/Video/delete_video/'.$now->id_video);?>" class="btn btn-sm btn-outline btn-info confirm_delete"><i class="glyphicon glyphicon-trash"></i></a><center>
                            
                           

                        </address>
                           <address>
<center>
                            <?php if($now->status=="1"){ ?>
                            <a href="<?php echo base_url(); ?>admin/Video/update_status_aktif?id=<?php echo $now->id_video; ?>&status=0" class="btn btn-sm btn-outline btn-warning confirm_aktif"><i class="fa fa-toggle-off"></i></a>
                            <?php }elseif($now->status=="0"){ ?>
<a href="<?php echo base_url(); ?>admin/Video/update_status_aktif?id=<?php echo $now->id_video; ?>&status=1" class="btn btn-sm btn-outline btn-primary confirm_nonaktif"><i class="fa fa-toggle-on"></i></a>

                            <?php } ?>
                           </center>
                           </address>
                    </div>
                   
                    <div class="clearfix"></div>
                        </a>
                </div>
            </div>

            
<?php endforeach; ?>


            </div>
        </div>
        <div class="hr-line-dashed"></div>
                            <div class="text-center">
                                <div class="btn-group">
                                    <?php if($link){
                                           echo  $link; 
                                            }
                                          ?>   
                                </div>
                            </div>
           
       


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Video</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Video/simpan_video">
          <div class="form-group">
            <label>URL</label>
            <input type="text" class="form-control required" name="url" placeholder="URL (Wajib diisi)" required oninvalid="this.setCustomValidity('URL Youtube  wajib diisi')" oninput="setCustomValidity('')">
          </div>

           <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control required" name="judul" placeholder="Judul (Tidak Wajib diisi)" required oninvalid="this.setCustomValidity('Judul Video  wajib diisi')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
            <label>Tanggal Unggah</label>
            <input type="text" class="form-control" data-mask="9999-99-99" name='tanggal' id="resi" placeholder="Tanggal Unggah">
          </div>

          <div class="form-group">
            <label>Deskripsi</label>
            <br>
            <textarea name="deskripsi" placeholder="Deskripsi (Tidak Wajib diisi)" cols="73" rows="5"> </textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;&nbsp;&nbsp;&nbsp; Close &nbsp;&nbsp;&nbsp;&nbsp;</button>
  <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script>
$( ".target" ).change(function() {
      val = this.value;
      
   $.ajax({
   type: "get",
   url: "<?php echo base_url() ?>admin/Video?val="+val,
   data:{},
   success: function(msg){
       window.location = "<?php echo base_url() ?>admin/Video?val="+val;
   }
})
})


$(document).ready(function(){
  $('.confirm_delete').on('click', function(){
    var delete_url = $(this).attr('data-url');
    swal({
      title: "Hapus ?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Hapus !",
      cancelButtonText: "Batalkan",
      closeOnConfirm: false     
    }, function(){
      window.location.href = delete_url;
    });

    return false;
  });
});



$(document).ready(function(){
  $('.confirm_aktif').on('click', function(){
    var delete_url = $(this).attr('href');
    swal({
      title: "Aktifkan ?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Aktifkan !",
      cancelButtonText: "Batalkan",
      closeOnConfirm: false     
    }, function(){
      window.location.href = delete_url;
    });
    return false;
  });
}); 


$(document).ready(function(){
  $('.confirm_nonaktif').on('click', function(){
    var delete_url = $(this).attr('href');
    swal({
      title: "Non Aktifkan ?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Non aktifkan !",
      cancelButtonText: "Batalkan",
      closeOnConfirm: false     
    }, function(){
      window.location.href = delete_url;
    });
    return false;
  });
}); 

var today = new Date();
$('#resi').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    todayHighlight: true,
    endDate: "today",
});


$('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });


$('.chosen-select').chosen({width: "100%"});
    $("#ionrange_1").ionRangeSlider({
    min: 0,
    max: 5000,
    type: 'double',
    prefix: "$",
    maxPostfix: "+",
    prettify: false,
    hasGrid: true
});
</script>
