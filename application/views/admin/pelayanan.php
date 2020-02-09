<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Pelayanan
 
                       <button type="button" class="btn btn-sm btn-white" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
                 <a href="<?php echo base_url(); ?>admin/pelayanan"><button type="button" class="btn btn-sm btn-white" data-toggle="modal"><i class="fa fa-refresh"></i> Refresh</button></a>
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

                        <option value="">Cari berdasarkan nama pelayanan</option>
                   <?php   foreach($daftarpelayanan  as $ros): ?>
                                            <option value="<?php echo $ros->id_pelayanan; ?>"><?php echo $ros->pelayanan; ?></option>

                                              <?php endforeach ?> 
                                            </select>  
                                            </div>
                                            <br>                 

                       <?php echo $this->session->flashdata('message');?><br>
                     <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
            <tr>
              <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
              
              <th style="background:#AFEEEE">Judul Pelayanan</th>
               <th style="background:#AFEEEE">Jenis</th>
  
              <th style="text-align:center;background:#AFEEEE" width="23%">Aksi</th>
            </tr>
          </thead>
          <tbody>
 <?php
                            $non=$this->uri->segment('4') + 1;
                            foreach($pelayanan  as $row): ?>
                                <tr>
                                    <td align="center"><?php echo $non++; ?></td>
                                    <td><a href="<?php echo base_url();?>admin/pelayanan/sub_pelayanan?id_pelayanan=<?php echo $row->id_pelayanan; ?>"><?php echo $row->pelayanan; ?></a></td>
                                    <td>
                                      <?php if($row->jenis=="1"){ ?>
                                                  Standar Pelayanan
                                      <?php }elseif($row->jenis=="2"){ ?>

                                                   Standar Pengaduan Masyarakat
                                      <?php } ?>
                                    </td>
                                    
                                    <td align="center">

                                     <button type="button" class="btn btn-danger btn-sm edit_button" 
                                data-toggle="modal" data-target="#EditModal"
                                data-id="<?php echo $row->id_pelayanan; ?>"
                                data-pelayanan="<?php echo $row->pelayanan;?>"
                                data-jenis="<?php echo $row->jenis;?>"
                                 data-desc_pelayanan="<?php echo $row->desc_pelayanan;?>"
                                >
        <i class="fa fa-pencil"></i>
                                &nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>  

                        

                                     
                                    <a href="#" data-url="<?php echo site_url('admin/Pelayanan/delete_pelayanan/'.$row->id_pelayanan);?>" class="btn btn-sm btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Hapus&nbsp;&nbsp;&nbsp;</a>
                                    <?php if($row->status==1){ ?>
                             <a href="<?php echo base_url(); ?>admin/Pelayanan/update_status_pelayanan?id=<?php echo $row->id_pelayanan; ?>&status=0" class="btn btn-sm btn-warning confirm_aktif"><i class="fa fa-toggle-off"></i> Nonaktif</a>
                          <?php  }else { ?>

<a href="<?php echo base_url(); ?>admin/Pelayanan/update_status_pelayanan?id=<?php echo $row->id_pelayanan; ?>&status=1" class="btn btn-sm  btn-warning confirm_nonaktif"><i class="fa fa-toggle-on"></i>&nbsp;&nbsp;&nbsp;&nbsp;Aktif&nbsp;&nbsp;&nbsp;</a>
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
                
               

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Pelayanan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Pelayanan/save_pelayanan">


  <div class="form-group">
 <label>Jenis</label>
 <select class="form-control" name="jenis" required oninvalid="this.setCustomValidity('Jenis harus diisi')" oninput="setCustomValidity('')">
     <option value="1">Standar Pelayanan</option>
       <option value="2">Standar Pengaduan Masyarakat</option>
 </select>
         
   </div>



 <div class="form-group">
 <label>Judul Pelayanan</label>
         <input class="form-control" type="text"  name="judul_pelayanan" placeholder="Judul Pelayanan" required oninvalid="this.setCustomValidity('Judul Pelayanan harus diisi')" oninput="setCustomValidity('')">
   </div>

          <div class="form-group">
            <label>Deskripsi Pelayanan</label>
           <textarea id="editor1" rows="20" cols="10"  name='pelayanan' required></textarea>
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
        <h4 class="modal-title" id="myModalLabel">Edit Pelayanan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Pelayanan/save_pelayanan">
           <div class="form-group">
 <label>Jenis</label>
 <select class="form-control jenis" name="jenis" required oninvalid="this.setCustomValidity('Jenis harus diisi')" oninput="setCustomValidity('')">
     <option value="1">Standar Pelayanan</option>
       <option value="2">Standar Pengaduan Masyarakat</option>
 </select>
         
   </div>


        <div class="form-group">
 <label>Judul Pelayanan</label>
         <input class="form-control pelayanan" type="text"  name="judul_pelayanan" placeholder="Judul Pelayanan" required oninvalid="this.setCustomValidity('Judul Pelayanan harus diisi')" oninput="setCustomValidity('')">
   </div>
          <div class="form-group">
            <label>Deskripsi Pelayanan</label>
             <textarea id="editor3" rows="20" cols="10"  name='pelayanan'></textarea>
          </div>
          
           <input class="form-control pelayanan_id" type="hidden" name="id">
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

$(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor3');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });


$( ".target" ).change(function() {
      val = this.value;
      
   $.ajax({
   type: "get",
   url: "<?php echo base_url() ?>admin/Pelayanan?val="+val,
   data:{},
   success: function(msg){
       window.location = "<?php echo base_url() ?>admin/Pelayanan?val="+val;
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
    var pelayanan = $(this).data('pelayanan');
    var desc_pelayanan = $(this).data('desc_pelayanan');
    var jenis = $(this).data('jenis');

    $(".pelayanan_id").val(id);
    $(".pelayanan").val(pelayanan);
    $(".jenis").val(jenis);
    CKEDITOR.instances.editor3.setData(desc_pelayanan);
  
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

    


    
   