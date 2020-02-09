<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/admin/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>APBD</h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
           <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                    <div class="panel-body">
                    <form action="<?php echo base_url();?>admin/APBD/upload" class="dropzone" id="dropzoneForm" enctype="multipart/form-data">
                                            <div class="fallback">
                                                <input name="file" type="file">
                                            </div>
                                        </form> 
              <br><?php echo $this->session->flashdata('message');?><br>
              <a href="<?php echo base_url(); ?>admin/apbd"> <button type="button" class="btn btn-block  btn-info"><b>Refresh</b></button></a>
              <br><br>
                        <div class="table-responsive">
                            <form method="get" action="<?php echo base_url();?>admin/apbd">
                                <div class="form-group">
                                    <div class="form-horizontal">
                                        <div class="input-group"></div>
                                        <select name="tahun" class="form-control">
                                            <option value="">Pilih Tahun</option>
                                            <?php foreach($tahun as $tah):?>
                                            <option value="<?php echo $tah->tahun; ?>"><?php echo $tah->tahun; ?></option>

                                            <?php endforeach;?>
                                        </select>
                                        <br>
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="keterangan" placeholder="Cari berdasarkan Uraian/Jumlah">
                                            <span class="input-group-btn">
                      <input type="submit" class="btn btn-info btn-flat" value='Go!'>
                  </span>
                                        </div>
                            </form>
                            <br>

                        <table class="table table-striped table-bordered table-hover" id="example2">
                            <thead>
                            <tr>
                                <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>

                                <th style="background:#AFEEEE">No Urut</th>



                                <th style="background:#AFEEEE">Uraian</th>


                                <th style="background:#AFEEEE">Jumlah</th>
                                <th style="background:#AFEEEE">Tahun</th>
                                <th style="background:#AFEEEE">Status</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $non=$this->uri->segment('4') + 1;
                            foreach($apbd as $per) : ?>

                            <tr>
                                <td align="center"><?php echo $non++; ?></td>
                                <td><?php echo $per->nomor_urut; ?></td>
                                <td><?php echo $per->uraian; ?></td>
                                <td><?php echo $per->jumlah; ?></td>
                                <td><?php echo $per->tahun; ?></td>
                                <td><?php echo $per->status; ?></td>

                            </tr>


                            <?php endforeach;?>


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
            dictDefaultMessage: "<strong>Upload File Excel di sini <br><i class='fa fa-upload'></i></strong></br>"
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




   