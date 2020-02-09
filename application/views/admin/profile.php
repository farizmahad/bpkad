<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Profile Perusahaan (Home)</h2>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
           <div class="row">

                <div class="col-lg-12">

                    <div class="row m-t-lg">
                <div class="col-lg-12">
                    <div class="tabs-container">
                      <form action="<?php echo base_url(); ?>admin/Profile/update_profile" method="POST"  enctype="multipart/form-data">
                    <?php
foreach($profile  as $rowi): ?>
                        <div class="tabs-left">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-6"><i class="fa fa-user"></i><b>Profile Singkat</b></a></li>
                                <li class=""><a data-toggle="tab" href="#tab-7"><i class="fa fa-globe"></i><b> Visi Perusahaan</b></a></li>
                                <li class=""><a data-toggle="tab" href="#tab-9"><i class="fa fa-globe"></i><b>Misi Verusahaan</b></a></li>
        <br><br>          <br><br>
<li class="">   
                        <button type="submit" class="btn btn-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simpan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>

</li>
                            </ul>
                            
    
            <input type="hidden" class="form-control"  name="id_profile" value="<?php echo $rowi->id;?>">

                            <div class="tab-content ">
                                <div id="tab-6" class="tab-pane active">



                              <div class="panel-body">
            
                                            <textarea id="editor1" rows="20" cols="10" name='profile_singkat'><?php echo $rowi->profile; ?></textarea>
                                    </div>
                                </div>
                                <div id="tab-7" class="tab-pane">
                                    <div class="panel-body">
                                       <textarea id="editor2" rows="20" cols="10" name='visi'><?php echo $rowi->visi; ?></textarea>
                                    </div>
                                </div>

                                <div id="tab-9" class="tab-pane">
                                    <div class="panel-body">
                                         <textarea id="editor3" rows="20" cols="10" name='misi'><?php echo $rowi->misi; ?></textarea>
                                    </div>

                                </div>
                                <br>

                            </div>


                        </div>
<?php endforeach; ?> 
</form>

                                        </div>

                </div>

 

                    </div>
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
</script>

    <script src="<?php echo base_url(); ?>assets/template/js/plugins/dropzone/dropzone.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/template/js/plugins/codemirror/mode/xml/xml.js"></script>


   

   