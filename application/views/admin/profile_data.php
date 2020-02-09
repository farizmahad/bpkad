<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Profile Perusahaan</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">

            <div class="row">
            
            <?php 
            foreach($profile  as $rowi): ?>
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="ibox">
                        <h4 class="text-center m">
                            
                        </h4>

                        <div class="slick_demo_1">

                            <div>
                                <div class="ibox-content">
                                    <h2>Identitas Singkat</h2>
                                    <hr color="#ff0000" size="10px">
                                    <p>
                                    <form action="<?php echo base_url(); ?>admin/Profile/update_profile" method="POST"  enctype="multipart/form-data">
                                        <textarea id="editor1" rows="20" cols="10"  name='profile_singkat'><?php echo $rowi->profile; ?></textarea>
                                        <input type="hidden" class="form-control"  name="id_profile" value="<?php echo $rowi->id;?>">
<br>
                                         <button type="submit" class="btn btn-block  btn-info">Update Data Identitas Singkat</button>

                                        </form>

                                    </p>
                                </div>
                            </div>
                            <div>
                             
                                <div class="ibox-content">
                                    <h2>Visi</h2>
                                     <hr color="#ff0000">
                                    <p>
                                    <form action="<?php echo base_url(); ?>admin/Profile/update_profile" method="POST"  enctype="multipart/form-data">
                                        <textarea id="editor2" rows="20" cols="10" name='visi'><?php echo $rowi->visi; ?></textarea>
                                    <input type="hidden" class="form-control"  name="id_profile" value="<?php echo $rowi->id;?>">
<br>
                                         <button type="submit" class="btn btn-block  btn-success">Update Data Visi</button>

                                        </form>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="ibox-content">
                                    <h2>Misi</h2>
                                     <hr color="#ff0000">
                                    <p>
                                    <form action="<?php echo base_url(); ?>admin/Profile/update_profile" method="POST"  enctype="multipart/form-data">
                                         <textarea id="editor3" rows="20" cols="10" name='misi'><?php echo $rowi->misi; ?></textarea>
                                         <input type="hidden" class="form-control"  name="id_profile" value="<?php echo $rowi->id;?>">
<br>
                                         <button type="submit" class="btn btn-block  btn-primary">Update Data Misi</button>

                                        </form>
                                    </p>
                                </div>
                            </div>
                              <?php endforeach; ?> 

                        </div>

                         

                       
                        
                    </div>
                </div>
            </div>



            
            

            <style>
        .slick_demo_2 .ibox-content {
            margin: 0 10px;
        }
    </style>

    <script>
$(function() { //keep tab
 // for bootstrap 3 use 'shown.bs.tab', for bootstrap 2 use 'shown' in the next line
 $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
 // save the latest tab; use cookies if you like 'em better:
 localStorage.setItem('lastTab', $(this).attr('href'));
 });
 
// go to the latest tab, if it exists:
 var lastTab = localStorage.getItem('lastTab');
 if (lastTab) {
 $('[href="' + lastTab + '"]').tab('show');
 }
});



        $(document).ready(function(){


            $('.slick_demo_1').slick({
                dots: true
            });

            $('.slick_demo_2').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.slick_demo_3').slick({
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                adaptiveHeight: true
            });
        });



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
        CKEDITOR.replace('editor2');
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


function myFunction_urutan(obj,val) {
      var id = obj.getAttribute('data-id');
      
   $.ajax({
   type: "POST",
   url: "<?php echo base_url() ?>admin/slider/update_judul",
   data:{id,val},
   success: function(msg){
       window.location.reload();
   }
})
}
    </script>
