<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Produk Hukum
 
                       <button type="button" class="btn btn-sm btn-white" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
                 <a href="<?php echo base_url(); ?>admin/Produk_hukum"><button type="button" class="btn btn-sm btn-white" data-toggle="modal"><i class="fa fa-refresh"></i> Refresh</button></a>
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
                            
                                           <div class="input-group-addon"><i class="fa fa-search"></i></div>
                      <select name="kategori" class="chosen-select form-control target">

                        <option value="">Cari berdasarkan nama produk hukum</option>
                      <?php foreach($produkhukum as $ros) : ?>
                                            <option value="<?php echo $ros->id_detail; ?>"><?php echo $ros->nama_produk_hukum; ?></option>

                                              <?php endforeach ?> 
                                            </select>  
                                            </div>
                                            <br>                 

                       <?php echo $this->session->flashdata('message');?><br>
                     <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
            <tr>
              <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
              
              <th style="background:#AFEEEE" width="15%">Jenis</th>
                <th style="background:#AFEEEE" width="55%">Produk Hukum</th>
                <th style="background:#AFEEEE">Nama File</th>
                <th style="background:#AFEEEE;text-align:center;">Hapus</th>
            </tr>
          </thead>
          <tbody>
 
<?php
$no=1;
foreach($produk_hukum as $pro):?>


<tr>

    <td align="center"><?php echo $no++; ?></td>
    <td><?php echo $pro->nama; ?></td>
    <td><?php echo $pro->nama_produk_hukum; ?></td>
    <td><?php echo $pro->nama_file; ?></td>
<td align="center">
<!--
   <button type="button" class="btn btn-danger btn-sm edit_button" 
                                data-toggle="modal" data-target="#EditModal"
                                data-id_detail="<?php echo $pro->id_detail; ?>"
                                data-id_produk_hukum="<?php echo $pro->id_produk_hukum;?>"
                                data-nama_produk_hukum="<?php echo $pro->nama_produk_hukum;?>"
                                
                                >
        <i class="fa fa-pencil"></i>
                                &nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>  
                              -->


    <a href="#" data-url="<?php echo site_url('admin/Produk_hukum/delete_detail_produk/'.$pro->id_detail);?>" class="btn btn-sm btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Hapus&nbsp;&nbsp;&nbsp;</a>
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
        <h4 class="modal-title" id="myModalLabel">Tambah Produk Hukum</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Produk_hukum/save_detail"  enctype="multipart/form-data">
          <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="id_produk_hukum">
                <option>
                    Pilih Jenis
                </option>
                <?php foreach($master_produk_hukum as $mas):?>

                <option value="<?php echo $mas->id_produk_hukum; ?>"><?php echo $mas->nama; ?></option>
                <?php endforeach;?>
            </select>
          </div>

            <div class="form-group">
                <label>Produk Hukum</label>
                <textarea class="form-control" name="produk_hukum" cols="5" rows="5">


                </textarea>
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
        <form method="post" action="<?php echo base_url();?>admin/Kategori_berita/save_kategori">
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


    
   