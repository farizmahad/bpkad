 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Estimasi Pendapatan Daerah </h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Jenis Estimasi Pendapatan Daerah  </h5>               &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  <button type="button" class="btn btn-sm btn-outline btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></button>

<a href="<?php echo base_url(); ?>admin/Kategori_berita"><button type="button" class="btn btn-sm btn-outline btn-success" data-toggle="modal"><i class="fa fa-refresh"></i></button></a>
                        

                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            
                           
                            
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
                                <th style="background:#AFEEEE;">Jenis</th>
                                <th style="text-align:center;background:#AFEEEE;">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                                <?php 
$no=1;
foreach ($epd as $kow) : ?>

<tr>


<td align="center">
  <?php echo $no++; ?>

</td>
<td><?php echo $kow->alokasi; ?></td>
<td align="center"><button type="button" class="btn btn-sm btn-outline btn-info btn-sm edit_button" 
                                data-toggle="modal" data-target="#EditModal"
                                data-id="<?php echo $kow->id; ?>"
                                data-alokasi="<?php echo $kow->alokasi;?>">
        <i class="fa fa-pencil"></i>
                           
                                </button>  

                        

                                     
                                    <a href="#" data-url="<?php echo site_url('admin/Keuangan/delete_jenis_epd/'.$kow->id);?>" class="btn btn-sm btn-outline btn-success btn-sm confirm_delete"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>

                       
                            </tr>
                          <?php endforeach; ?>
                            
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Estimasi Pendapatan Daerah</h5>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  <button type="button" class="btn btn-sm btn-outline btn-info" data-toggle="modal" data-target="#myModal1"><i class="fa fa-plus"></i></button>

<a href="<?php echo base_url(); ?>admin/Keuangan"><button type="button" class="btn btn-sm btn-outline btn-success" data-toggle="modal"><i class="fa fa-refresh"></i></button></a>
                        
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th width='5%' style="text-align:center;background:#AFEEEE;">No</th>
                                <th style="background:#AFEEEE;">Tahun</th>
                                <th style="background:#AFEEEE;">Jenis</th>
                                <th style="background:#AFEEEE;">Jumlah (Miliar)</th>
                                <th style="text-align:center;background:#AFEEEE;">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                              $no=1;
                            foreach($estimasi as $suw): ?>
                            <tr>
                               <td align="center"><?php echo $no++; ?></td>
                               <td><?php echo $suw->tahun;?></td>
                               <td><?php echo $suw->alokasi;?></td>
                               <td><?php echo $suw->jumlah;?></td>
                               <td align="center">
                                 <button type="button" class="btn btn-sm btn-outline btn-info btn-sm edit_button1" 
                                data-toggle="modal" data-target="#EditModal1"
                                data-id="<?php echo $suw->id; ?>"
                                data-tahun="<?php echo $suw->tahun;?>"
data-jumlah="<?php echo $suw->jumlah;?>"
data-id_alokasi="<?php echo $suw->id_alokasi;?>"
                                >
        <i class="fa fa-pencil"></i>
                           
                                </button>  

                        

                                     
                                    <a href="#" data-url="<?php echo site_url('admin/Keuangan/delete_epd/'.$suw->id);?>" class="btn btn-sm btn-outline btn-success btn-sm confirm_delete1"><i class="glyphicon glyphicon-trash"></i></a>
                               </td>
                            </tr>
                          <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Stacked bar chart</h5>
                        </div>
                        <div class="ibox-content">
                            <div id="ct-chart3" class="ct-perfect-fourth"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Horizontal bar chart </h5>
                        </div>
                        <div class="ibox-content">
                            <div id="ct-chart4" class="ct-perfect-fourth"></div>
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
        <h4 class="modal-title" id="myModalLabel">Tambah Jenis</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Keuangan/save_jenis_epd">
          <div class="form-group">
            <label>Jenis sumber </label>
            <input type="text" class="form-control" name="jenis_sumber" placeholder="Jenis Sumber Estimasi Pendapatan Daerah" required oninvalid="this.setCustomValidity('Kategori Berita harus diisi')" oninput="setCustomValidity('')">
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



<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Estimasi Pendapatan Daerah</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Keuangan/save_epd">
        <div class="form-group">
            <label>Tahun </label>
           <select name="tahun" class="form-control">
           <option value="">Tahun</option>
             <?php
for($i=date('Y'); $i>=date('Y')-32; $i-=1){
  ?>
<option value="<?php echo $i; ?>"> <?php echo $i; ?></option>';
<?php }
?>

           </select>
          </div>


          <div class="form-group">
            <label>Jenis  </label>
            <select name="id_alokasi" class="form-control">
           <option value="">Jenis</option>
             <?php foreach($epd as $mow) : ?>

               <option value="<?php echo $mow->id ?>"><?php echo $mow->alokasi; ?></option>
             <?php endforeach; ?>

           </option>
             

           </select>


          </div>

<div class="form-group">
<label>Jumlah Pendapatan</label>
            
 <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Estimasi (dalam miliar)" required oninvalid="this.setCustomValidity('Jumlah Estimasi harus diisi')" oninput="setCustomValidity('')">

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
        <h4 class="modal-title" id="myModalLabel">Form Edit Jenis</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Keuangan/save_jenis_epd">
          <div class="form-group">
            <label>Jenis Sumber</label>
            <input type="text" class="form-control alokasi" name="jenis_sumber" placeholder="Jenis Estimasi Daerah" required oninvalid="this.setCustomValidity('Jenis Estimasi  harus diisi')" oninput="setCustomValidity('')">
          </div>
          
           <input class="form-control id" type="hidden" name="id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"> <i class="fa fa-close"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tutup&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="EditModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Edit Estimasi Pendapatan Daerah</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url();?>admin/Keuangan/save_epd">
        <div class="form-group">
            <label>Tahun </label>
           <select name="tahun" class="form-control tahun">
           <option value="">Tahun</option>
             <?php
for($i=date('Y'); $i>=date('Y')-32; $i-=1){
  ?>
<option value="<?php echo $i; ?>"> <?php echo $i; ?></option>';
<?php }
?>

           </select>
          </div>


          <div class="form-group">
            <label>Jenis  </label>
            <select name="id_alokasi" class="form-control id_alokasi">
           <option value="">Jenis</option>
             <?php foreach($epd as $mow) : ?>

               <option value="<?php echo $mow->id ?>"><?php echo $mow->alokasi; ?></option>
             <?php endforeach; ?>

           </option>
             

           </select>


          </div>

<div class="form-group">
<label>Jumlah Pendapatan</label>
            
 <input type="text" class="form-control jumlah" name="jumlah" placeholder="Jumlah Estimasi (dalam miliar)" required oninvalid="this.setCustomValidity('Jumlah Estimasi harus diisi')" oninput="setCustomValidity('')">
<input class="form-control id" type="hidden" name="id">
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
  $('.confirm_delete1').on('click', function(){
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
    var alokasi = $(this).data('alokasi');


    $(".id").val(id);
    $(".alokasi").val(alokasi);
  
});



$(document).on( "click", '.edit_button1',function(e) {
    var id = $(this).data('id');
    var tahun = $(this).data('tahun');
    var jumlah = $(this).data('jumlah');
    var id_alokasi = $(this).data('id_alokasi');



    $(".id").val(id);
    $(".tahun").val(tahun);
    $(".jumlah").val(jumlah);
    $(".id_alokasi").val(id_alokasi);
  
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

   <script>
        $(document).ready(function(){


            // Simple line

            new Chartist.Line('#ct-chart1', {
                labels: ['2014', '2015', '2016'],
                series: [
                    [12, 9, 7],
                    [2, 1, 3.5],
                    [1, 3, 4]
                ]
            }, {
                fullWidth: true,
                chartPadding: {
                    right: 40
                }
            });


            // Line scatter diagram

            var times = function(n) {
                return Array.apply(null, new Array(n));
            };

            var data = times(26).map(Math.random).reduce(function(data, rnd, index) {
                data.labels.push(index + 1);
                data.series.forEach(function(series) {
                    series.push(Math.random() * 100)
                });

                return data;
            }, {
                labels: [],
                series: times(4).map(function() { return new Array() })
            });

            var options = {
                showLine: false,
                axisX: {
                    labelInterpolationFnc: function(value, index) {
                        return index % 13 === 0 ? 'W' + value : null;
                    }
                }
            };

            new Chartist.Line('#ct-chart2', data, options);


            // Stocked bar chart

            new Chartist.Bar('#ct-chart3', {
                labels: ['2014', '2015', '2016'],
                series: [
                    [1.5, 6.5, 3.5],
                    [3.2, 6.4, 8.4],
                    [2.25, 241.5, 107.6]
                ]
            }, {
                stackBars: true,
                axisY: {
                    labelInterpolationFnc: function(value) {
                        return (value/100);
                    }
                }
            }).on('draw', function(data) {
                        if(data.type === 'bar') {
                            data.element.attr({
                                style: 'stroke-width: 30px'
                            });
                        }
                    });


            // Stocked horizontal bar

            new Chartist.Bar('#ct-chart4', {
                labels: ['2014', '2015', '2016'],
                series: [
                    [5, 4, 3],
                    [3, 2, 9],
                    [3, 2, 9]
                ]
            }, {
                seriesBarDistance: 10,
                reverseData: true,
                horizontalBars: true,
                axisY: {
                    offset: 70
                }
            });


            // Simple pie chart

            var data = {
                series: [5, 3, 4]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart5', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });

            // Gauge chart

            new Chartist.Pie('#ct-chart6', {
                series: [20, 10, 30, 40]
            }, {
                donut: true,
                donutWidth: 60,
                startAngle: 270,
                total: 200,
                showLabel: false
            });

        });
    </script>

    
   