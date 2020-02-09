<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/admin/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>

                     <?php if($status) {echo "Edit";}else{
                        echo "Tambah";
                     }
                     ?> Tugas dan Fungsi </h2>
                    
                </div>
               
            </div>



            <div class="wrapper wrapper-content">
                 <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                       
                
                        <div class="ibox-content">
                         

                            <form  class="form-horizontal" action="<?php echo base_url(); ?>admin/Profile/save_fungsi" method="POST">
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Jabatan</label>
                                    <div class="col-sm-10">
                                    <select class="form-control m-b" name="id_jabatan" <?php if($status) { ?>  disabled <?php } ?>>
                                        <option value="">Pilih Jabatan</option>
                                        <?php foreach($option_tugas as $tus) : ?>
                                           
                                         
<option value="<?php echo $tus->id_jabatan; ?>" <?php if($id_jabatan==$tus->id_jabatan) { ?> selected <?php } ?>><?php echo $tus->jabatan; ?></option>





                                        <?php endforeach; ?>
    
                                    </select></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                

                                 <div class="form-group"><label class="col-sm-2 control-label">Tugas</label>
                                    <div class="col-sm-10">
                                        <textarea   class="form-control" rows="3" id="comment" name="tugas" required placeholder="Tugas"><?php if($tugass){ echo $tugass;} ?></textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Fungsi</label>
                                    <div class="col-sm-10">
                                       <textarea id="editor1" class="form-control" rows="5" id="comment" name="fungsi" required placeholder="Tugas"><?php if($fungsi){echo $fungsi;}?></textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Uraian</label>
                                    <div class="col-sm-10">
                                       <textarea id="editor2" class="form-control" rows="5" id="comment" name="uraian" required placeholder="Tugas"><?php if($uraian){echo $uraian;}?></textarea>
                                   <input type="hidden" name="id" value="<?php echo $id_fungsi; ?>">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                 
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                      <button class="btn btn-info" type="reset"><i class="fa fa-share"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reset&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Simpan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                    </div>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>

            </div>

    
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
</script>

    
   