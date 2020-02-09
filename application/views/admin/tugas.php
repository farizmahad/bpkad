<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Tugas dan Fungsi</h2>
 
                       <button type="button" class="btn btn-sm btn-white" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Jabatan</button>
<a href="<?php echo base_url(); ?>admin/profile/tambah_fungsi"><button type="button" class="btn btn-sm btn-white" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Tugas dan Fungsi</button></a>
                                        <a href="<?php echo base_url(); ?>admin/profile/tugas"><button type="button" class="btn btn-sm btn-white" data-toggle="modal"><i class="fa fa-refresh"></i> Refresh</button></a>
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

                        <option value="">Cari berdasarkan nama tugas</option>


                                          <?php    
foreach($tugas as $tus) :?>
<option value="<?php echo $tus->id_jabatan; ?>"><?php echo $tus->jabatan; ?></option>



<?php endforeach; ?>
                     
                                            </select>  
                                            </div>
                                            <br>                 

                       <?php echo $this->session->flashdata('message');?><br>
                     <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
            <tr>
              <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
              
              <th style="background:#AFEEEE">Jabatan</th>
  
              <th style="text-align:center;background:#AFEEEE" width="23%">Aksi</th>
            </tr>
          </thead>
          <tbody>
 
<?php 
$no=1;
foreach($tugas as $tu) :?>
  
              <tr>
                

                <td align="center"><?php echo $no++; ?></td>
                <td>

<a href="#EditModal" data-toggle="modal" data-id_jabatan="<?php echo $tu->id_jabatan; ?>" data-jabatan="<?php echo $tu->jabatan; ?>" class="edit_button">

                <?php echo $tu->jabatan; ?></a></td>
                <td align="center">
                  

<a href="<?php echo base_url(); ?>admin/profile/tambah_fungsi?id_fungsi=<?php echo $tu->id_fungsi; ?>">
                              <button type="button" class="btn btn-danger btn-sm">
        <i class="fa fa-pencil"></i>
                                &nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>  

                        </a>

                                     
                                    <a href="#" data-url="<?php echo site_url('admin/Profile/delete_tugas/'.$tu->id_jabatan);?>" class="btn btn-sm btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Hapus&nbsp;&nbsp;&nbsp;</a>
                </td>
              </tr>

  <?php endforeach; ?>
                            

          </tbody>  
          <tfoot>
                                <tr>
                                    <td colspan="7" align="center">
                                       
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
        <h4 class="modal-title" id="myModalLabel">Tambah Jabatan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/profile/save_tugas">
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" name="tugas" placeholder="Tulis nama jabatan disini" required oninvalid="this.setCustomValidity('Jabatan harus diisi')" oninput="setCustomValidity('')">
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
        <h4 class="modal-title" id="myModalLabel">Form Edit Jabatan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/profile/save_tugas">
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control jabatan" name="tugas" placeholder="Kategori Berita" required oninvalid="this.setCustomValidity('Kategori Berita harus diisi')" oninput="setCustomValidity('')">
          </div>
          
           <input class="form-control id_jabatan" type="hidden" name="id_jabatan">
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
    var id_jabatan = $(this).data('id_jabatan');
    var jabatan = $(this).data('jabatan');


    $(".id_jabatan").val(id_jabatan);
    $(".jabatan").val(jabatan);
  
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


    
   