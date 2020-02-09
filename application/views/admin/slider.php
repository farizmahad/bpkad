<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/admin/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Revolution Slider - Home</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
           <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                    <div class="panel-body">
                    <form action="<?php echo base_url();?>admin/Slider/do_upload" class="dropzone" id="dropzoneForm" enctype="multipart/form-data">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form> 
              <br><?php echo $this->session->flashdata('message');?><br>
              <a href="<?php echo base_url(); ?>admin/slider"> <button type="button" class="btn btn-block  btn-info"><b>Refresh</b></button></a>
              <br><br>
 <div class="input-group">
                            
                                           <div class="input-group-addon"><i class="fa fa-search"></i></div>

              <select name="kategori" class="chosen-select form-control target">


                        <option value="">Cari Slider berdasarkan judul </option>
                        <?php
                     foreach($slider_all as $tow): ?>
                                            <option value="<?php echo $tow->id; ?>"><?php echo $tow->judul; ?></option>

                                        <?php endforeach;?>      
                                            </select>  

</div>
                                            <br><br>
                      <table id="example2" class="table table-bordered table-hover" width="80%">
                        <thead>
                          <tbody>
                            <?php
                            $non=$this->uri->segment('4') + 1;
                            foreach($slider_home  as $row): ?>
                            <tr>
                                <td align="center" rowspan="3" width="10%">
                                <br><h2><b><?php echo $non++; ?></b></h2></td>

                                <td rowspan="3">
                                <input type="text" name="judul" value="<?php echo $row->judul; ?>" class="form-control" data-id="<?php echo $row->id;?>" onchange="myFunction_urutan(this,this.value)" placeholder="Isi Judul Slider di sini"></td>
                                <td rowspan="3" width="20%"><?php  echo $row->gambar;?></td>
                                <td rowspan="3" width="20%" align="center"><img src="<?php echo base_url(); ?>assets/img_slider/<?php echo $row->gambar; ?>" width="140" height="120"></td>
                                <td align="center" width="15%">
                                    <button type="button" class="btn btn-danger btn-sm edit_button" 
                                    data-toggle="modal" data-target="#EditModal"
                                    data-id="<?php echo $row->id; ?>"
                                    data-gambar="<?php echo $row->gambar; ?>"
                                    data-url="<?php echo $row->url; ?>"
                                    data-status="<?php echo $row->status; ?>"
                                    data-deskripsi="<?php echo $row->deskripsi; ?>
                                    "><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                                    </button>
                                </td>  
                            </tr>
                            <tr>
                                 <td align="center"><a href="#" data-url="<?php echo site_url('admin/Slider/delete_slider/'.$row->id);?>" class="btn btn-sm btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hapus&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
                            </tr>
                            <tr>
                                 <td align="center">  
                                  <?php if($row->status==0) { ?>
                                    <a href="<?php echo base_url(); ?>admin/slider/update_status_aktif?id=<?php echo $row->id; ?>&status=1" class="btn btn-sm btn-warning btn-sm confirm_aktif"><i class="fa fa-toggle-off"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nonaktif&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                  <?php }else{ ?>
                                      <a href="<?php echo base_url(); ?>admin/slider/update_status_aktif?id=<?php echo $row->id; ?>&status=0" class="btn btn-sm btn-warning btn-sm confirm_nonaktif"><i class="fa fa-toggle-on"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aktif&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                  <?php } ?>
                                 </td>
                            </tr>
                            <?php endforeach; ?> 
                        </tbody>
                        <tfoot>
                                <tr>
                                    <td colspan="7" align="center">
                                        <?php if($link){
                                           echo  $link; 
                                            }
                                          ?>    
                                    </td>
                                </tr>
                        </tfoot>
                      </table>  
                     </div>       
                    </div>
                </div>
            </div>
       </div>



<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content animated fadeIn">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Slider</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>Admin/Slider/edit_slider" enctype="multipart/form-data">
         <div class="form-group">
          <label>Gambar (Isi jika ingin diubah)</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Pilih Gambar</span><span class="fileinput-exists">Change</span><input type="file" name="filefoto"></span>
                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
         </div>
          <div class="form-group">
            <label><input type="checkbox" name="aktifkan" value="1" id="2step"> Aktifkan Link</label>
            <input type="text" class="form-control url" url="true" name="url" placeholder="URL">
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
            
 

    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/mode/xml/xml.js"></script>


<script>
$(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
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
</script>

    <script src="<?php echo base_url(); ?>assets/template/js/plugins/dropzone/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/mode/xml/xml.js"></script>


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



    $(document).on( "click", '.edit_button',function(e) {
    var id = $(this).data('id');
    var gambar = $(this).data('gambar');
    var url = $(this).data('url');
    var status = $(this).data('status');
    var deskripsi = $(this).data('deskripsi');
    

    $(".id").val(id);
    $(".gambar").val(gambar);
    $(".url").val(url);
    $(".status").val(status);
    $(".deskripsi").val(deskripsi);
    
});


$(function () {
    $('#2step').change(function () {
        $("input[url='true']").toggle(this.checked);   
    }).change();
});


function myFunction_urutan(obj,val) {
      var id = obj.getAttribute('data-id');
      
   $.ajax({
   type: "POST",
   url: "<?php echo base_url() ?>admin/slider/update_judul",
   data:{id,val},
   success: function(msg){
       window.location.reload();
   }
})
}


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
<script>
$( ".target" ).change(function() {
      val = this.value;
      
   $.ajax({
   type: "get",
   url: "<?php echo base_url() ?>admin/Slider?val="+val,
   data:{},
   success: function(msg){
       window.location = "<?php echo base_url() ?>admin/Slider?val="+val;
   }
})
})

</script>




   