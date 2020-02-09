<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2><?php foreach($select_judul as $se){

                     echo $se->pelayanan;
                  } ?>
 
                       <button type="button" class="btn btn-sm btn-white" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
                 <a href="<?php echo base_url(); ?>admin/pelayanan/sub_pelayanan?id_pelayanan=<?php echo $id_pelayanan; ?>"><button type="button" class="btn btn-sm btn-white" data-toggle="modal"><i class="fa fa-refresh"></i> Refresh</button></a>
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

                        <option value="">Cari berdasarkan nama sub pelayanan</option>
                  
                  <?php foreach($daftarsubpelayanan as $dow): ?>
<option value="<?php echo $dow->id_sub; ?>"><?php echo $dow->judul_sub_pelayanan; ?></option>

                  <?php endforeach; ?>
                                            </select>  
                                            </div>
                                            <br>                 

                       <?php echo $this->session->flashdata('message');?><br>
                     <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
            <tr>
              <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
              
              <th style="background:#AFEEEE">Judul Sub Pelayanan</th>
  
              <th style="text-align:center;background:#AFEEEE" width="23%">Aksi</th>
            </tr>
          </thead>
          <tbody>

<?php
$non=$this->uri->segment('4') + 1;
   foreach($subpelayanan as $ow) :?>

 
<tr>
<td align="center"><?php echo $non++; ?></td>
<td><?php echo $ow->judul_sub_pelayanan; ?></td>
<td>
  
  <button type="button" class="btn btn-danger btn-sm edit_button" 
                                data-toggle="modal" data-target="#EditModal"
                                data-id="<?php echo $ow->id_sub; ?>"
                                data-id_pelayanan="<?php echo $ow->id_pelayanan;?>"
                                 data-judul_sub_pelayanan="<?php echo $ow->judul_sub_pelayanan;?>"
                                 data-desc_sub_pelayanan="<?php echo $ow->desc_sub_pelayanan;?>"
                                >
        <i class="fa fa-pencil"></i>
                                &nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>  

                        

                                     
                                    <a href="<?php echo base_url(); ?>admin/Pelayanan/delete_sub_pelayanan?id=<?php echo $ow->id_sub; ?>&id_pelayanan=<?php echo $ow->id_pelayanan; ?>" class="btn btn-sm btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Hapus&nbsp;&nbsp;&nbsp;</a>
                                    <?php if($ow->status==1){ ?>
                             <a href="<?php echo base_url(); ?>admin/Pelayanan/update_status_subpelayanan?id=<?php echo $ow->id_sub; ?>&status=0&id_pelayanan=<?php echo $ow->id_pelayanan; ?>" class="btn btn-sm btn-warning confirm_aktif"><i class="fa fa-toggle-off"></i> Nonaktif</a>
                          <?php  }else { ?>

<a href="<?php echo base_url(); ?>admin/Pelayanan/update_status_subpelayanan?id=<?php echo $ow->id_sub; ?>&status=1&id_pelayanan=<?php echo $ow->id_pelayanan; ?>" class="btn btn-sm  btn-warning confirm_nonaktif"><i class="fa fa-toggle-on"></i>&nbsp;&nbsp;&nbsp;&nbsp;Aktif&nbsp;&nbsp;&nbsp;</a>
                          <?php } ?>
</td>

</tr>

<?php endforeach;?>
 
                                  </tbody>
                                 
                                   
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
        <h4 class="modal-title" id="myModalLabel">Tambah Sub Pelayanan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Pelayanan/save_sub_pelayanan">

 <div class="form-group">
 <label>Judul </label>
         <input class="form-control" type="text"  name="judul_sub_pelayanan" placeholder="Judul Sub Pelayanan" required oninvalid="this.setCustomValidity('Judul Sub Pelayanan harus diisi')" oninput="setCustomValidity('')">

 <input class="form-control" type="hidden"  name="id_pelayanan" placeholder="Judul Sub Pelayanan" value="<?php echo $id_pelayanan; ?>">

   </div>

          <div class="form-group">
            <label>Deskripsi </label>
           <textarea id="editor1" rows="20" cols="10"  name='desc_sub_pelayanan' required></textarea>
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
        <h4 class="modal-title" id="myModalLabel">Edit Sub Pelayanan</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Pelayanan/save_sub_pelayanan">

        <div class="form-group">
 <label>Judul</label>
         <input class="form-control judul_sub_pelayanan" type="text"  name="judul_sub_pelayanan" placeholder="Judul Pelayanan" required oninvalid="this.setCustomValidity('Judul Pelayanan harus diisi')" oninput="setCustomValidity('')">
   </div>


    <div class="form-group">
    <label>Pelayanan</label>
   <select name="id_pelayanan" class="form-control id_pelayanan">

                        <option value="">Cari berdasarkan nama pelayanan</option>
                   <?php   foreach($daftarpelayanan  as $ros): ?>
                                            <option value="<?php echo $ros->id_pelayanan; ?>"><?php echo $ros->pelayanan; ?></option>

                                              <?php endforeach ?> 
                                            </select>  
</div>

          <div class="form-group">
            <label>Deskripsi</label>
             <textarea id="editor3" rows="20" cols="10"  name='desc_sub_pelayanan'></textarea>
          </div>
          
           <input class="form-control id_sub" type="hidden" name="id">
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

var count= <?php echo json_encode($id_pelayanan); ?>;

$( ".target" ).change(function() {
      val = this.value;
      
   $.ajax({
   type: "get",
   url: "<?php echo base_url() ?>admin/Pelayanan/sub_pelayanan?id_pelayanan="+count+"&val="+val,
   data:{},
   success: function(msg){
       window.location = "<?php echo base_url() ?>admin/Pelayanan/sub_pelayanan?id_pelayanan="+count+"&val="+val;
   }
})
})




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
    var id_pelayanan = $(this).data('id_pelayanan');
    var judul_sub_pelayanan = $(this).data('judul_sub_pelayanan');
    var desc_sub_pelayanan = $(this).data('desc_sub_pelayanan');


    $(".id_sub").val(id);
    $(".id_pelayanan").val(id_pelayanan);
 $(".judul_sub_pelayanan").val(judul_sub_pelayanan);

    CKEDITOR.instances.editor3.setData(desc_sub_pelayanan);
  
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

    


    
   