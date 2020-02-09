 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Timeline</h2>
                    <button type="button" class="btn btn-sm btn-white" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Agenda</button>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>
                        <?php $today=date('Y-m-d'); ?>
                        Timeline tanggal <?php echo $today; ?></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            
                            
                            
                        </div>
                    </div>

 <div class="ibox-content">
                            <div class="row">
                              <div class="col-sm-1 m-b-xs">
                                     <a href="<?php echo base_url(); ?>admin/Back_agenda"><button type="button" class="btn btn-sm btn-white" data-toggle="modal"><i class="fa fa-refresh"></i> Refresh</button></a>
                                </div>

                                <form method="get" action="<?php echo base_url();?>admin/Back_agenda">
                                <div class="col-sm-4 m-b-xs">

                                <input type="text" placeholder="Pilih Tanggal" class="input-sm form-control" name="daterange">
                                </div>
                              
                                <div class="col-sm-7">
                                    <div class="input-group"><input type="text" name="filter" placeholder="Cari berdasarkan Agenda" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                </div>
                                </form>
                            </div>
                    <div class="ibox-content inspinia-timeline">


                         <?php foreach($select_agenda as $ow) :?>
                        <div class="timeline-item">
                            <div class="row">
                            <div class="col-xs-1">

 <a href="#" data-url="<?php echo site_url('admin/Back_agenda/delete_agenda/'.$ow->id);?>" class="btn btn-white btn-sm confirm_delete"><i class="fa fa-trash"></i></a>
<?php
$tanggal = explode(" ",$ow->tanggal_event);
            $dara = $tanggal[0];
            $sampai = $tanggal[1];


?>
                                <?php
                                //tanggal event
                                $tangga = explode(" ",$ow->tanggal_event);
                                $tanggal_ev = $tangga[0];
                                $time = $tangga[1];

                                //sampai tanggal event

                                $sampai = explode(" ",$ow->sampai_tanggal);
                                $tanggal_sampai = $sampai[0];
                                $time_sampai = $sampai[1];
                                 ?>


                                    <button type="button" class="btn btn-white btn-sm edit_button" 
                                data-toggle="modal" data-target="#EditModal"
                                data-id="<?php echo $ow->id; ?>"
                                data-tanggal_event="<?php echo $tanggal_ev;?>"
 data-agenda="<?php echo $ow->agenda;?>"
  data-jam_mulai="<?php echo $time;?>"
  data-tanggal_selesai="<?php echo $tanggal_sampai;?>"
                                            data-jam_selesai="<?php echo $time_sampai;?>"
  data-keterangan="<?php echo $ow->keterangan;?>"

                                >
        <i class="fa fa-pencil"></i>
                                
                                </button>  
                            </div>
                                <div class="col-xs-6 date">
                                
                                    <i class="fa fa-briefcase"></i>
                                    
                                    <?php
                                     //tanggal event
                                    $tangga = explode(" ",$ow->tanggal_event);
                                    $tanggal_ev = $tangga[0];
                                    $time = $tangga[1];

                                      //sampai tanggal event

                                    $sampai = explode(" ",$ow->sampai_tanggal);
                                    $tanggal_sampai = $sampai[0];
                                    $time_sampai = $sampai[1];
                                    echo $time; ?> - <?php echo $time_sampai; ?>

                                    <br/>


                                </div>


                                <div class="col-xs-5 content no-top-border">
                                    <p class="m-b-xs"><strong>

                                      <?php echo $ow->agenda; ?></strong></p>

                                    <p><?php echo $ow->keterangan; ?></p>

                                    
                                </div>
                            </div>
                        </div>
                        
<?php endforeach; ?>
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
        <h4 class="modal-title" id="myModalLabel">Tambah Agenda</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Back_agenda/save_agenda">
          

          <div class="form-group">
            <label>Agenda</label>
            <input type="text"  class="form-control" name="agenda" placeholder="Isi Agenda" required oninvalid="this.setCustomValidity('Agenda harus diisi')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
              <div class="col-md-6">
            <label>Tanggal Mulai</label>

              <input type="date"  class="form-control" name="tanggal" placeholder="Tanggal Mulai">
              </div>
              <div class="col-md-6">
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                  <input type="time"  class="form-control" name="jam_mulai" placeholder="Jam Mulai">
              </div>
          </div>
            <input type="hidden"  class="form-control" name="asolole" placeholder="Tanggal Mulai">
                <br><br>
          <div class="form-group">
              <div class="col-md-6">
                  <label>Tanggal Mulai</label>

                  <input type="date"  class="form-control" name="sampai_tanggal" placeholder="Tanggal Mulai">
              </div>
              <div class="col-md-6">
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                  <input type="time"  class="form-control" name="jam_selesai" placeholder="Jam Selesai">
              </div>
          </div>


          <div class="form-group">
            <label>Keterangan</label>
            <br>
            <textarea name="keterangan" cols="73" rows="3">
                

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

            <?php
            /*
            ?>
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Edit Kategori</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Back_agenda/save_agenda">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date"  class="form-control tanggal_event" name="tanggal" placeholder="Kategori">
          </div>

          <div class="form-group">
            <label>Agenda</label>
            <input type="text"  class="form-control agenda" name="agenda" placeholder="Kategori">
          </div>


          <div class="form-group">
            <label>Keterangan</label>
            <br>
            <textarea name="keterangan" cols="10" rows="3" class="keterangan">
                

            </textarea>

            <div class="form-group">
            <label>Jam mulai</label>
            <input type="time"  class="form-control jam_mulai" name="jam_mulai" placeholder="Kategori">
          </div>


           <div class="form-group">
            <label>Jam Selesai</label>
            <input type="time"  class="form-control jam_selesai" name="jam_selesai" placeholder="Kategori">

            <input type="hidden"  class="form-control id" name="id" placeholder="Kategori">
          </div>
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
            */
            ?>


            <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Agenda</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo base_url();?>admin/Back_agenda/save_agenda">


                                <div class="form-group">
                                    <label>Agenda</label>
                                    <input type="text"  class="form-control agenda" name="agenda" placeholder="Isi Agenda" required oninvalid="this.setCustomValidity('Agenda harus diisi')" oninput="setCustomValidity('')">
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label>Tanggal Mulai</label>

                                        <input type="date"  class="form-control tanggal_event" name="tanggal" placeholder="Tanggal Mulai">
                                    </div>
                                    <div class="col-md-6">
                                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                        <input type="time"  class="form-control jam_mulai" name="jam_mulai" placeholder="Jam Mulai">
                                    </div>
                                </div>
                                <input type="hidden"  class="form-control id" name="id" placeholder="Tanggal Mulai">
                                <br><br>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label>Tanggal Selesai</label>

                                        <input type="date"  class="form-control tanggal_selesai" name="sampai_tanggal" placeholder="Tanggal Mulai">
                                    </div>
                                    <div class="col-md-6">
                                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                        <input type="time"  class="form-control jam_selesai" name="jam_selesai" placeholder="Jam Selesai">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <br>
                                    <textarea name="keterangan" cols="73" rows="3" class="keterangan">

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
<script>
var today = new Date();
$('#resi').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    todayHighlight: true,
    endDate: "today",
   
});


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


$(document).on( "click", '.edit_button',function(e) {
    var id = $(this).data('id');
    var tanggal_event = $(this).data('tanggal_event');
    var agenda = $(this).data('agenda');
   var jam_mulai = $(this).data('jam_mulai');
    var tanggal_selesai = $(this).data('tanggal_selesai');
var jam_selesai = $(this).data('jam_selesai');
var keterangan = $(this).data('keterangan');


    $(".id").val(id);
    $(".tanggal_event").val(tanggal_event);
    $(".agenda").val(agenda);
    $(".tanggal_selesai").val(tanggal_selesai);
 $(".jam_mulai").val(jam_mulai);
 $(".jam_selesai").val(jam_selesai);
  $(".keterangan").val(keterangan);

  
});
</script>
