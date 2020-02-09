 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Hubungi Kami</h2>
                    
                   
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">

                    <div class="ibox">
                        
                        <div class="ibox-content">
                            <div class="row">
                              <div class="col-sm-1 m-b-xs">
                                     <a href="<?php echo base_url(); ?>admin/Kontak"><button type="button" class="btn btn-sm btn-white" data-toggle="modal"><i class="fa fa-refresh"></i> Refresh</button></a>
                                </div>

                                <form method="get" action="<?php echo base_url();?>admin/Kontak">
                                <div class="col-sm-4 m-b-xs">

                                <input type="text" placeholder="Pilih Tanggal" class="input-sm form-control" name="daterange">
                                </div>
                              
                                <div class="col-sm-7">
                                    <div class="input-group"><input type="text" name="filter" placeholder="Cari berdasarkan nama / email/ Judul Pesan" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                </div>
                                </form>
                            </div>
                            

                            <div class="project-list">

                                <table class="table table-hover">
                                    <tbody>
                                   
                                    <?php if(count($kontak)>0){?>

                                    <?php foreach($kontak as $us): ?>
                                    <tr>
                                        <td class="project-status">
                                        <?php if($us->status_dibalas=="1"){ ?>
                                            <span class="label label-primary">Belum dibalas  
                                    </span>
                                            <?php }else{ ?>
 <span class="label label-danger">Sudah dibalas</span>

                                            <?php } ?>
                                        </td>
                                        <td class="project-title">
                                            <a href="<?php echo base_url(); ?>admin/Kontak/detail_kontak?id_kontak=<?php echo $us->id; ?>"><?php echo $us->judul; ?></a>
                                            <br/>
                                            <small><?php echo $us->tanggal; ?></small>
                                        </td>
                                        <td class="project-completion">
                                                <small><?php echo $us->nama; ?></small>
                                                
                                        </td>
                                        <td class="project-people">
                                           
                                            <?php echo $us->email; ?>
                                        </td>
                                        <td class="project-actions">
                                            <a href="<?php echo base_url(); ?>admin/Kontak/detail_kontak?id_kontak=<?php echo $us->id; ?>" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" data-url="<?php echo site_url('admin/Kontak/delete_kontak/'.$us->id);?>" class="btn btn-white btn-sm confirm_delete"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>

                                    <?php endforeach; ?>
<?php }else{ ?>
<tr>
    <td colspan="5" align="center">Tidak ada data</td>
</tr>

<?php } ?>

                                  
                                    </tbody>
                                   
                                </table>

<center>
                                 <?php if($link){
    echo  $link; 
    }
   ?>    


   </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
 </script>