<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Laporan Detail </h2>
<br>
                <form method="post" class="form-inline" action="<?php echo base_url()?>admin/Berita/upload_file" enctype="multipart/form-data">
                    <input type="file" name="foto" style="float:left" required oninvalid="this.setCustomValidity('File tidak boleh kosong')" oninput="setCustomValidity('')">
                    <input type="hidden" name="id_laporan" value="<?php echo $id_laporan; ?>">
                    <input type="submit" class="btn btn-primary">
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
                        <form action="<?php echo base_url(); ?>admin/Berita/upload_laporan" method="get">
                            <div class="form-horizontal">
                                <label>Filter berdasarkan nama file</label>
                                <div class="input-group">


                                    <input class="form-control" type="hidden" name="id_laporan" placeholder="Cari bedasarkan nama file" value="<?php echo $id_laporan; ?>">

                                    <input class="form-control" type="text" name="nama_file" placeholder="Cari bedasarkan nama file" required oninvalid="this.setCustomValidity('Kotak pencarian tidak boleh kosong')" oninput="setCustomValidity('')">
                                    <!-- <input type="text" name='daterange' class="form-control pull-right" id="reservation" placeholder="Pencarian Berdasarkan Tanggal"> -->
                                    <span class="input-group-btn">
                                                    <input type="submit" class="btn btn-info btn-flat" value='Go!'>
                                                    </span>

                                </div>
                            </div>
                        </form>
                            


                                            <br>                 

                       <?php echo $this->session->flashdata('message');?><br>
                     <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
            <tr>
              <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
              
              <th style="background:#AFEEEE">File</th>

                <th style="background:#AFEEEE">Judul</th>
                <th style="background:#AFEEEE;text-align:center;">Aksi</th>
            </tr>
          </thead>
          <tbody>
 
            <?php
            $no=1;
            foreach($file_detail as $fil):?>
<tr>
    <td align="center">
<?php echo $no++; ?>
    </td>

    <td>
        <?php echo $fil->nama_file; ?>

    </td> <td>
        <?php echo $fil->judul_file; ?>
    </td>
    <td align="center">

        <a href="<?php echo base_url(); ?>admin/berita/delete_file_laporan?id_file=<?php echo $fil->id_file; ?>&id_laporan=<?php echo $fil->id_laporan; ?>" class="btn btn-sm btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Hapus&nbsp;&nbsp;&nbsp;</a>
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
    /*
$( ".target" ).change(function() {
      val = this.value;
      
   $.ajax({
   type: "get",
   url: "<?php echo base_url() ?>admin/Berita?val="+val,
   data:{},
   success: function(msg){
       window.location = "<?php echo base_url() ?>admin/Kategori_berita?val="+val;
   }
})
})


*/

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


    
   