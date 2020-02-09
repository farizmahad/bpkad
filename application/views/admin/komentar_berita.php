<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>

                    <?php

                      foreach($komentar as $as){

                          echo $as->title;
                      }
                    ?>
                </h2>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
           <div class="row">

                <div class="col-lg-12">

                    <div class="tabs-container">
                     <div class="tab-content">
                          <div class="form-group">

             


                


              </div>
              <br>
                    <div class="panel-body">
                                        

                       <?php echo $this->session->flashdata('message');?><br>
                     <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
            <tr>
              <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
                <th  style="text-align:center;background:#AFEEEE;">Tanggal</th>
              <th style="background:#AFEEEE">Nama</th>
              <th style="background:#AFEEEE">Email</th>
              <th style="background:#AFEEEE" >Status</th>
              <th style="background:#AFEEEE;text-align: center">Aksi</th>

            </tr>
          </thead>
          <tbody>
 
<?php
$no=1;
foreach($komentar as $kom ) : ?>
<tr>

    <td align="center"><?php echo $no++; ?></td>
    <td><?php echo date('d F Y', strtotime(DATE($kom->tanggal))); ?></td>
    <td><?php echo $kom->nama; ?></td>
    <td><?php echo $kom->email; ?></td>
    <td><?php if($kom->status_dibalas==1){?>

    Belum dibalas
    <?php }else{ ?>
        Sudah dibalas
        <?php } ?>

    </td>
    <td align="center">
        <a href="#" data-url="<?php echo site_url('admin/Berita/delete_komentar_berita/'.$kom->id_komentar);?>" class="btn btn-sm btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i>&nbsp;&nbsp;&nbsp;Hapus&nbsp;&nbsp;&nbsp;</a>
        <button type="button" class="btn btn-danger btn-sm edit_button"
                data-toggle="modal" data-target="#EditModal"
                data-id_komentar="<?php echo $kom->id_komentar; ?>"
                data-id_berita="<?php echo $kom->id_berita; ?>"
                >
            <i class="fa fa-reply"></i>
            &nbsp;&nbsp;&nbsp;&nbsp;Balas&nbsp;
        </button>
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
              </div>


<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Form Balas Komentar</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url();?>admin/Berita/save_komentar">
                    <div class="form-group">
                        <label>Balasan Komentar</label>
                        <br>
                        <textarea name="balasan_komentar" placeholder="Balas Pesan anda disini" rows="10" cols="70">


                        </textarea>
                    </div>

                    <input class="form-control id_komentar" type="hidden" name="id_komentar">

            </div><input class="form-control id_berita" type="hidden" name="id_berita">
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

 $(document).on( "click", '.edit_button',function(e) {
     var id_komentar = $(this).data('id_komentar');
     var id_berita = $(this).data('id_berita');

     $(".id_komentar").val(id_komentar);
     $(".id_berita").val(id_berita);

 });

 
</script>


   