<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Berita  <a href="<?php echo base_url(); ?>admin/Berita/tambah_berita">  <button type="button" class="btn btn-sm btn-white"><i class="fa fa-plus"></i> Tambah</button></a></h2>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
           <div class="row">

                <div class="col-lg-12">

                    <div class="tabs-container">
                     <div class="tab-content">
                          <div class="form-group">

             
                 <label>Filter berdasarkan :</label>
                <form method="get" action="<?php echo base_url();?>admin/Berita">
                  <div class="form-group">

                                          
                             

                      <input class="form-control" type="text" name="daterange" placeholder="Tanggal Post">



                              
                              

                            </div>
                      
                        
<div class="form-group">

                                          
                             

                      <select name="kategori" class="chosen-select form-control" id="tahun">
                      <option value="">Kategori</option>
<?php
foreach($kategori_berita  as $kat): ?>

<option value="<?php echo $kat->id_kategori_berita; ?>"><?php echo $kat->kategori; ?></option>
<?php endforeach; ?>
</select>       




                              
                              

                            </div>
                      
                          
               
                <div class="input-group">
                      


                       <input class="form-control" type="text" name="title" placeholder="Title Post" id="title">

                  <span class="input-group-btn">
                      <button type="submit" class="btn btn-sm btn-info"> <i class="fa fa-search"></i></button>
                    </span>
                </div>

                </form>

               

                
                <!-- /.input group -->


              </div>
              <br>
                    <div class="panel-body">
                                        

                       <?php echo $this->session->flashdata('message');?><br>
                     <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
            <tr>
              <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
              <th style="background:#AFEEEE">Title</th>
              <th style="background:#AFEEEE">Author</th>
                <th style="background:#AFEEEE">Status</th>
              <th style="background:#AFEEEE">Kategori</th>
              <th style="background:#AFEEEE" width="11%">Tgl Post</th>
              <th style="background:#AFEEEE" width="11%">Jumlah Komentar</th>
              <th style="text-align:center;background:#AFEEEE" width="23%">Aksi</th>
            </tr>
          </thead>
          <tbody>
 
<?php
                            $non=$this->uri->segment('4') + 1;
                            foreach($berita  as $row): ?>
                                <tr>
                                    <td align="center"><?php echo $non++; ?></td>
                                <td><a href="<?php echo base_url(); ?>admin/Berita/tambah_berita?id_berita=<?php echo $row->id_berita; ?>">

<?php
$sub_kalimat = substr($row->title,0,20);

?>


                                    <?php echo $sub_kalimat; ?> .. </a></td>
                                    <td><?php echo $row->first_name;echo ' '; echo $row->last_name;  ?></td>
                                    <td><?php if($row->status_publish==0){ ?>
                                          <a href="<?php echo base_url(); ?>admin/Berita/update_status_publish?id=<?php echo $row->id_berita; ?>&status=1"  class="btn btn-sm btn-outline btn-primary confirm_publish"><i class="fa fa-archive"></i>&nbsp;&nbsp;Draft&nbsp;&nbsp;</a>
                                      
                                     <?php }else{ ?>
<a href="<?php echo base_url(); ?>admin/Berita/update_status_publish?id=<?php echo $row->id_berita; ?>&status=0"  class="btn btn-sm btn-outline btn-warning confirm_draft"><i class="fa fa-camera"></i>&nbsp;&nbsp;Publish&nbsp;&nbsp;</a>
                                        
                                     <?php   } ?></td>
                                    <td>
                                      <?php 
                                            $id_b=$row->id_berita;
                                            $am=$this->Berita_model->select_kategori_per_id($id_b);
                                           foreach($am as $a){

                                            echo $a->kategori; echo ",";
                                           }
                                      ?>
                                    </td>
                                    <td><?php echo $row->tanggal_post; ?></td>
                                    <td align="center">
                                      <?php
                                          $select_komentar=$this->Berita_model->select_komentar($id_b);

                                        
                                       ?>

                                        <a href="<?php echo base_url(); ?>admin/Berita/select_komentar?id_berita=<?php echo $row->id_berita; ?>"> <?php echo count($select_komentar);?></a>

                                    </td>
                                    <td align="center">


                        <a href="<?php echo base_url(); ?>admin/Berita/tambah_berita?id_berita=<?php echo $row->id_berita; ?>"  class="btn btn-sm btn-danger btn-sm"><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;</a>


                                     
                                    <a href="#" data-url="<?php echo site_url('admin/Berita/delete_berita/'.$row->id_berita);?>" class="btn btn-sm btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Hapus&nbsp;&nbsp;&nbsp;</a>

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
              </div>

       




    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/mode/xml/xml.js"></script>


<script>
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

 $(document).ready(function(){
            $( "#title" ).autocomplete({
              source: "<?php echo site_url('Admin/Berita/get_autocomplete_private/?');?>"
            });
        });


 
</script>

<script>
        $(document).ready(function(){
  $('.confirm_draft').on('click', function(){
    var delete_url = $(this).attr('href');
    swal({
      title: "Draft?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya!",
      cancelButtonText: "Batalkan",
      closeOnConfirm: false     
    }, function(){
      window.location.href = delete_url;
    });

    return false;
  });
});


              $(document).ready(function(){
  $('.confirm_publish').on('click', function(){
    var delete_url = $(this).attr('href');
    swal({
      title: "Publish?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya!",
      cancelButtonText: "Batalkan",
      closeOnConfirm: false     
    }, function(){
      window.location.href = delete_url;
    });

    return false;
  });
});

    </script>

    
   