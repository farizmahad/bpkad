<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>SOP</h2><br>
                <form method="post" class="form-inline" action="<?php echo base_url()?>admin/Berita/upload_file_sop" enctype="multipart/form-data">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Unggah file di sini</span><span class="fileinput-exists">Change</span><input type="file" name="foto" required oninvalid="this.setCustomValidity('File tidak boleh kosong')" oninput="setCustomValidity('')"></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                    </div>



                    <input type="submit" class="btn btn-primary" value="Unggah">
                </form>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
           <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                     <div class="tab-content">
                          <div class="form-group">
                          </div>









                <!-- /.input group -->


              </div>
              <br>
                    <div class="panel-body">
                    <div class="input-group">
                            


                                            </div>
                                            <br>

                       <?php echo $this->session->flashdata('message');?><br>
                     <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
            <tr>
              <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
              
              <th style="background:#AFEEEE">File</th>

                <th style="background:#AFEEEE;">Judul</th>
                <th style="background:#AFEEEE;text-align: center;">Hapus</th>
            </tr>
          </thead>
          <tbody>
          <?php $jumlah_data=count($sop);

          if($jumlah_data > 0) {
          ?>
 <?php


 $no=1;
 foreach($sop as $so):?>
          <tr>
              <td align="center"><?php echo $no++; ?></td>
              <td><?php echo $so->nama_file; ?></td>
              <td><?php echo $so->judul_file; ?></td>
              <td align="center">
                  <a href="#" data-url="<?php echo site_url('admin/APBD/delete_sop/'.$so->id_sop);?>" class="btn btn-sm btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Hapus&nbsp;&nbsp;&nbsp;</a>
              </td>
          </tr>



          <?php endforeach;?>
<?php }else{ ?>

<td colspan="3" align="center">Tidak ada data</td>
          <?php } ?>

          </tbody>  
          <tfoot>

                        </tfoot>
      </table>

                     </div>       
                    </div>
                </div>
                </div>
                </div>
                
               

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Laporan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Kategori_berita/save_laporan">
          <div class="form-group">
            <label>Nama Laporan</label>
            <input type="text" class="form-control" name="nama_laporan" id="text_1" placeholder="Kategori" required oninvalid="this.setCustomValidity('Kategori Berita harus diisi')" oninput="setCustomValidity('')">
          </div>
            <div class="form-group">
                <label>URL</label>
                <input type="text" class="form-control" name="url" id="text_2" placeholder="Kategori" required oninvalid="this.setCustomValidity('Kategori Berita harus diisi')" oninput="setCustomValidity('')">
            </div>


      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"> <i class="fa fa-close"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tutup&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ubah Laporan</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url();?>admin/Kategori_berita/save_laporan">
                    <div class="form-group">
                        <label>Nama Laporan</label>
                        <input type="text" class="form-control nama_laporan" name="nama_laporan" id="text_3" placeholder="Kategori" required oninvalid="this.setCustomValidity('Kategori Berita harus diisi')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" class="form-control url" name="url" id="text_4" placeholder="Kategori" required oninvalid="this.setCustomValidity('Kategori Berita harus diisi')" oninput="setCustomValidity('')">

                        <input type="hidden" class="form-control laporan_id" name="id"  placeholder="Kategori" required oninvalid="this.setCustomValidity('Kategori Berita harus diisi')" oninput="setCustomValidity('')">
                    </div>


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
$( ".target" ).change(function() {
      val = this.value;
      
   $.ajax({
   type: "get",
   url: "<?php echo base_url() ?>admin/Kategori_berita?val="+val,
   data:{},
   success: function(msg){
       window.location = "<?php echo base_url() ?>admin/Kategori_berita?val="+val;
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




$(document).on( "click", '.edit_button',function(e) {
    var id = $(this).data('id');
    var nama_laporan = $(this).data('nama_laporan');
    var url = $(this).data('url');

    $(".laporan_id").val(id);
    $(".nama_laporan").val(nama_laporan);
    $(".url").val(url);
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
<script>

    $("#text_1").keyup(function() {
        $("#text_2").val($("#text_1").val());
        var x = document.getElementById("text_2");
        x.value = x.value.toLowerCase();
    })


    $("#text_3").keyup(function() {
        $("#text_4").val($("#text_3").val());
        var x = document.getElementById("text_4");
        x.value = x.value.toLowerCase();
    })
</script>

    <script src="<?php echo base_url(); ?>assets/template/js/plugins/dropzone/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/mode/xml/xml.js"></script>


    
   