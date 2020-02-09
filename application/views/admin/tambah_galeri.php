 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Pengaturan Galeri Foto</h2>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
        <div class="panel-body">


        <form action="<?php echo base_url();?>admin/Galeri/do_upload" class="dropzone" id="dropzoneForm" enctype="multipart/form-data">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                        <br><br>
                                         <a href="<?php echo base_url(); ?>admin/galeri/tambah_galeri"> <button type="button" class="btn btn-block  btn-info"><b>Refresh</b></button></a>

</div>

<?php foreach($galeri as $qow): ?>
             <div class="col-lg-2">
                <div class="contact-box center-version">
  <div class="lightBoxGallery">
                    <a href="<?php echo base_url() ?>assets/img_gallery/<?php echo $qow->gambar; ?>">

                        <img alt="image" class="img-lg" src="<?php echo base_url() ?>assets/img_gallery/<?php echo $qow->gambar; ?>" width="400" height="400">




                        

                    </a>
                    </div>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">

                         <button type="button" class="btn btn-sm btn-outline btn-danger edit_button" 
                                    data-toggle="modal" data-target="#EditModal"
                                    data-id="<?php echo $qow->id_galeri; ?>"
                                    data-gambar="<?php echo $qow->gambar; ?>"
                                    data-tgl_upload="<?php echo $qow->tgl_upload; ?>"
                                    data-deskripsi_gambar="<?php echo $qow->deskripsi_gambar; ?>"
                                    data-status="<?php echo $qow->status; ?>"
                                    data-judul_gambar="<?php echo $qow->judul_gambar; ?>"
                                    data-url="<?php echo $qow->url; ?>"
                                    
                                    ><i class="fa fa-pencil"></i>
                                    </button>
                          
                            <a href="<?php echo base_url(); ?>admin/Galeri/delete_gambar?id=<?php echo $qow->id_galeri; ?>&gambar=<?php echo $qow->gambar; ?>" class="btn btn-sm btn-outline btn-primary confirm_delete"><i class="fa fa-trash"></i></a>
                            <?php if($qow->status==1){ ?>
                             <a href="<?php echo base_url(); ?>admin/Galeri/update_status_galeri?id=<?php echo $qow->id_galeri; ?>&status=0" class="btn btn-sm btn-outline btn-info confirm_aktif"><i class="fa fa-toggle-off"></i></a>
                          <?php  }else { ?>

<a href="<?php echo base_url(); ?>admin/Galeri/update_status_galeri?id=<?php echo $qow->id_galeri; ?>&status=1" class="btn btn-sm btn-outline btn-info confirm_nonaktif"><i class="fa fa-toggle-on"></i></a>
                          <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            
<?php endforeach; ?>

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
        </div>


<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content animated fadeIn">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Galeri</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>Admin/Galeri/update_galeri" enctype="multipart/form-data">
         <div class="form-group">
          <label>Gambar (Isi jika ingin diubah)</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar</span><span class="fileinput-exists">Change</span><input type="file" name="filefoto"></span>
                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
         </div>
          <div class="form-group">
           <label>URL</label>
            <input type="text" class="form-control url"  name="url" placeholder="URL" readonly="">
          
          </div>

           <div class="form-group">
           <label>Tanggal Upload</label>
            <input type="text" class="form-control tgl_upload"  name="tgl_upload" placeholder="URL" id="resi">
          
          </div>

          <div class="form-group">
           <label>Judul Gambar</label>
            <input type="text" class="form-control judul_gambar"  name="judul_gambar" placeholder="Judul Gambar">
          
          </div>

         <div class="form-group">
          <label>Deskripsi</label>
          <br>
            <textarea class="deskripsi" rows="5" cols="73" name='deskripsi' placeholder="Deskripsi"></textarea>    
         </div>


            <input class="form-control id" type="hidden" name="id">
            <input class="form-control gambar" type="hidden" name="filelama">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"> <i class="fa fa-close"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tutup&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </div>
      </form>
    </div>
  </div>
</div>

        <script>


      Dropzone.options.dropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            dictDefaultMessage: "<strong>Geser atau klik disini untuk mengunggah satu/ beberapa gambar <br><i class='fa fa-upload'></i></strong></br>"
        };

        $(document).ready(function(){

            var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code3"), {
                lineNumbers: true,
                matchBrackets: true
            });

       });





$(document).ready(function(){
  $('.confirm_delete').on('click', function(){
    var delete_url = $(this).attr('href');
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



</script>
<script>

   $(document).on( "click", '.edit_button',function(e) {
    var id = $(this).data('id');
    var gambar = $(this).data('gambar');
    var tgl_upload = $(this).data('tgl_upload');
    var deskripsi_gambar = $(this).data('deskripsi_gambar');
    var judul_gambar = $(this).data('judul_gambar');
    var url = $(this).data('url');
    var status = $(this).data('status');
   
    

    $(".id").val(id);
    $(".gambar").val(gambar);
    $(".tgl_upload").val(tgl_upload);
    $(".url").val(url);
    $(".status").val(status);
    $(".deskripsi").val(deskripsi_gambar);
    $(".judul_gambar").val(judul_gambar);
    
});



$('#resi').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    todayHighlight: true,
    
});


</script>

 