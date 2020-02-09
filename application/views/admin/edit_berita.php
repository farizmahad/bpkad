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
                        <div class="file-manager">
                       
                       

                          
                          <?php foreach($berita_id as $row):?>
                            
                        <form action="<?php echo base_url(); ?>admin/Berita/update_berita" method="POST"  enctype="multipart/form-data">
                           
                            <?php if($status_edit) { ?>
                            <select class="btn btn-block btn-primary compose-mail" name="status_publish">
                              <option value="0" <?php if ($row->status_publish=="0"){echo "selected";}?>><center>Draft</center></option>
                              <option value="1" <?php if ($row->status_publish=="1"){echo "selected";}?>><center>Publish</center></option>
                            </select>
                            
                            <?php } ?>
                            <div class="space-25"></div>
                            <h5>Publish</h5>
                            <ul class="folder-list m-b-md" style="padding: 0">
                                <li> <i class="fa fa-pencil"></i> Status 
                                 
                                <span class="label label-warning pull-right"><?php if($row->status_publish=="0"){echo "Draft";}else{echo "Publish";} ?></span> </li>
                               
                                <li> <i class="fa fa-calendar"></i>Tanggal Publish <span class="label label-warning pull-right"> <?php echo date('Y-m-d H:i:s'); ?></span></li>
                                <?php
                                $post_date  = date('Y-m-d H:i:s');
                                ?>
          <input class="form-control" type="hidden" value="<?php echo $post_date; ?>" name="tgl_post">

          <input class="form-control" type="hidden" value="<?php echo $row->id_berita; ?>" name="id_berita">
                            </ul>
                            <h5>Kategori</h5>
                            <ul class="category-list" style="padding: 0">
                             <?php 
                                foreach($kategori_berita  as $kat): ?>
                                <p>   <label class="checkbox">
              <?php
                  
                  $checked = null;
                  $item = null;
                  foreach($kategori_berita_id as $grp) {

                      if ($grp->id_kategori_berita == $kat->id_kategori_berita) {
                          $checked= ' checked="checked"';
                      break;
                      
                  }
                }
              ?>
              </p>
                                <li><input type="checkbox" name="checkbox[]" class="i-checks"/ value="<?php echo $kat->id_kategori_berita; ?>" <?php echo $checked;?>>  <?php echo $kat->kategori; ?> </li>
                                <br>
                                </label>
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
        <input type="file" name="filefoto" placeholder="Pilih File">
    </span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div> 


<input type="hidden" name="filelama" class="form-control" value="<?php echo $row->featured_image;?>">

                           <a href="<?php echo base_url(); ?>assets/featured_image/<?php echo $row->featured_image; ?>"  title="<?php echo $row->featured_image; ?>" data-gallery=""><img src="<?php echo base_url() ?>assets/featured_image/<?php echo $row->featured_image; ?>" width="200" height="200"></a> 
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 animated fadeInRight">
            <div class="mail-box-header">
                <div class="pull-right tooltip-demo">
                    
                </div>
                                      <input type="text" placeholder="Tulis Judul disini" name="title" class="form-control input-lg" value="<?php echo $row->title; ?>">
            </div>
                <div class="mail-box">


                <div class="mail-body">

                    

                </div>

                    <div class="mail-text h-200">

                        <div class="summernote">
                            <textarea id="editor1" rows="20" cols="10" name='isi'><?php echo $row->isi;?></textarea>

                        </div>
<div class="clearfix"></div>
                        </div>
                        <div class="mail-body text-right tooltip-demo">
                       <input type="submit" class="btn btn-primary" value="Simpan">
                        
                    </div>

                     
                     </form>
                    <div class="clearfix"></div>

 <?php endforeach;?>

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

    


    
   