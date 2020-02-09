<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Informasi Keuangan
                       <button type="button" class="btn btn-sm btn-white" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
                 <a href="<?php echo base_url(); ?>admin/APBD/informasi_keuangan"><button type="button" class="btn btn-sm btn-white" data-toggle="modal"><i class="fa fa-refresh"></i> Refresh</button></a>
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


                        <form method="get" action="<?php echo base_url();?>admin/apbd/informasi_keuangan">
                            <div class="form-group">
                                <div class="form-horizontal">
                                    <div class="input-group"></div>
                                    <select name="tahun" class="form-control">
                                        <option value="">Pilih Tahun</option>
                                        <?php
                                        for($i=date(Y); $i>=date(‘Y’)-32; $i-=1){ ?>
                                        <option value=<?php echo $i; ?>><?php echo $i; ?> </option>”;
                                        }
                                        <?PHP }   ?>
                                    </select>
                                    <br>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="keterangan" placeholder="Cari berdasarkan nama file">
                                        <span class="input-group-btn">
                      <input type="submit" class="btn btn-info btn-flat" value='Go!'>
                  </span>
                                    </div>
                        </form>
                        <br>

                       <?php echo $this->session->flashdata('message');?><br>
                     <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
            <tr>
              <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
              
              <th style="background:#AFEEEE" width="15%">Tahun</th>
                <th style="background:#AFEEEE">Nama File</th>
                <th style="background:#AFEEEE;text-align:center;">Hapus</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $jumlah_rows=count($informasi_keuangan);
          if($jumlah_rows > 0) {
          ?>
 
<?php
$non=$this->uri->segment('4') + 1;
foreach($informasi_keuangan as $pro):?>


<tr>

    <td align="center"><?php echo $non++; ?></td>
    <td><?php echo $pro->tahun; ?></td>

    <td><?php echo $pro->nama_file; ?></td>
<td align="center">
    <a href="#" data-url="<?php echo site_url('admin/APBD/delete_info_keuangan/'.$pro->id_info);?>" class="btn btn-sm btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Hapus&nbsp;&nbsp;&nbsp;</a>
</td>
</tr>

<?php endforeach; ?>
          <?php }else{ ?>
          <tr>
              <td colspan="5" align="center">Tidak ada data!</td>
          </tr>



          <?php } ?>
          

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
        <h4 class="modal-title" id="myModalLabel">Tambah Informasi Keuangan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/APBD/save_info_keuangan"  enctype="multipart/form-data">
          <div class="form-group">
            <label>Tahun</label>
            <select class="form-control" name="tahun">
                <option>
                    Pilih Tahun
                </option>
                <?php
                for($i=date(Y); $i>=date(‘Y’)-32; $i-=1){ ?>
                    <option value=<?php echo $i; ?>><?php echo $i; ?> </option>”;
}
             <?PHP }   ?>
            </select>
          </div>



            <div class="form-group">
                <label>Upload file</label>
                <input type='file' name='foto'>


                </textarea>
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
        <h4 class="modal-title" id="myModalLabel">Form Edit Kategori</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/APBD/save_info_keuangan">
          <div class="form-group">
            <label>Kategori</label>
            <input type="text" class="form-control kategori" name="nama_kategori" placeholder="Kategori Berita" required oninvalid="this.setCustomValidity('Kategori Berita harus diisi')" oninput="setCustomValidity('')">
          </div>
          
           <input class="form-control kategori_id" type="hidden" name="id">
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
   url: "<?php echo base_url() ?>admin/Produk_hukum?val="+val,
   data:{},
   success: function(msg){
       window.location = "<?php echo base_url() ?>admin/Produk_hukum?val="+val;
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
    var id_produk_hukum = $(this).data('id_produk_hukum');
    var nama_produk_hukum = $(this).data('nama_produk_hukum');



    $(".produk_hukum_id").val(id);
    $(".id_produk_hukum").val(id_produk_hukum);
    $(".nama_produk_hukum").val(nama_produk_hukum);
  
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

    <script src="<?php echo base_url(); ?>assets/template/js/plugins/dropzone/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/mode/xml/xml.js"></script>


    
   