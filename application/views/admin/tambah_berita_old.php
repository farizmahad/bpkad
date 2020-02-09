<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>
                <?php if($status_edit){
                  echo "Edit Berita";
                }else{
                echo "Tambah Berita";  
              } ?>
            </div>
        </div>

        <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content mailbox-content">
                        <div class="file-manager"></div>




                        <form action="<?php echo base_url(); ?>admin/Berita/save_berita" method="POST"  enctype="multipart/form-data">
                           
                            <?php if($status_edit) { ?>
                            <a class="btn btn-block btn-primary compose-mail" href="mail_compose.html">Publish</a>
                            <?php } ?>
                            <div class="space-25"></div>
                            <h5>Publish</h5>
                            <ul class="folder-list m-b-md" style="padding: 0">
                                <li> <i class="fa fa-pencil"></i> Status 
                                 
                                <span class="label label-warning pull-right">Draft</span> </li>
                               
                                <li> <i class="fa fa-calendar"></i>Tanggal Publish <span class="label label-warning pull-right"> <?php echo date('Y-m-d H:i:s'); ?></span></li>
                                <?php
                                date_default_timezone_set('Asia/Jakarta');
                                $post_date  = date('Y-m-d H:i:s');
                                ?>
          <input class="form-control" type="hidden" value="<?php echo $post_date; ?>" name="tgl_post">
                            </ul>
                            <h5>Kategori</h5>
                            <ul class="category-list" style="padding: 0">
                             <?php 
                                foreach($kategori_berita  as $kat): ?>
                                <li><input type="checkbox" name="checkbox[]" class="i-checks"/ value="<?php echo $kat->id_kategori_berita; ?>">  <?php echo $kat->kategori; ?> </li>
                                <br>
                             <?php endforeach; ?> 

                            </ul>

                            <h5 class="tag-title">Featured Image</h5>
                           
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
    <div class="form-control" data-trigger="fileinput">
        <i class="glyphicon glyphicon-file fileinput-exists"></i>
    <span class="fileinput-filename"></span>
    </div>
    <span class="input-group-addon btn btn-default btn-file">
        <span class="fileinput-new">Select file</span>
        <span class="fileinput-exists">Change</span>
        <input type="file" name="foto" placeholder="Pilih File" required oninvalid="this.setCustomValidity('Featured Gambar harus diisi')" oninput="setCustomValidity('')">
    </span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div> 
                           
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 animated fadeInRight">
            <div class="mail-box-header">
                <div class="pull-right tooltip-demo">

                </div>
                                      <input type="text" placeholder="Tulis Judul Berita disini" name="title" class="form-control input-lg" required oninvalid="this.setCustomValidity('Judul berita harus diisi')" oninput="setCustomValidity('')">
            </div>
                <div class="mail-box">


                <div class="mail-body">

                    

                </div>

                    <div class="mail-text h-200">

                        <div class="summernote">
                            <textarea id="editor1" rows="20" cols="10" name='isi'></textarea>

                        </div>
<div class="clearfix"></div>
                        </div>
                        <div class="mail-body text-right tooltip-demo">
                       <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        
                    </div>

                     
                     </form>
                    <div class="clearfix"></div>

 

                </div>
            </div>
        </div>
        </div>




 
<script src="<?php echo base_url(); ?>assets/template/js/plugins/dropzone/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/mode/xml/xml.js"></script>


<script>
 Dropzone.options.dropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            dictDefaultMessage: "<strong>Geser atau klik disini untuk mengunggah gambar <br><i class='fa fa-upload'></i></strong></br>"
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


 $(function() {
    $('input[name="daterange"]').daterangepicker({
       format: 'YYYY/MM/DD'
    });
});


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


 $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });


 $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });
</script>

    <script src="<?php echo base_url(); ?>assets/template/js/plugins/dropzone/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/mode/xml/xml.js"></script>


    
   