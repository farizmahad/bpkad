 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Gallery Foto</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">
                                      


                        <div class="lightBoxGallery">
                           <?php foreach ($galeri as $row):?>
                            <a href="<?php echo base_url() ?>assets/img_gallery/<?php echo $row->gambar; ?>"  title="<?php echo $row->gambar; ?>" data-gallery=""><img src="<?php echo base_url() ?>assets/img_gallery/<?php echo $row->gambar; ?>" width="100" height="100"></a>
                            
                            <?php endforeach;?>


                            <!-- The Gallery as lightbox dialog, should be a child element of the document body -->


<br>

 <div class="hr-line-dashed"></div>
                            <div class="text-center">
                                 <?php if($link){
                                           echo  $link; 
                                            }
                                          ?> 
                            </div>
                       
                           
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            </div>
        </div>


<script>
      Dropzone.options.dropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            dictDefaultMessage: "<strong>Geser atau klik disini untuk mengunggah satu/ beberapa gambar <br><i class='fa fa-upload'></i></strong></br>"
        };

        $(document).ready(function(){

            var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code3"), {
                lineNumbers: true,
                matchBrackets: true
            });

       });

</script>