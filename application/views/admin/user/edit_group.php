  <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Ubah Group</h2>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                           
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                    <?php echo form_open(current_url());?>  
                                        <fieldset class="form-horizontal">

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Nama</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" name="group_name"  placeholder="Nama" value="<?php echo $group->name;?>" readonly></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Deskripsi</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="group_description" placeholder="Deskripsi" value="<?php echo $group->description;?>">
                                                </div>
                                                </div>

                                               
                                          
                                            
                                              <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                   <input type="hidden" name="kode" value="">
                                                   <input type="submit" name="submit" value="Simpan" class="btn btn-info" id="submit">
                                                </div>
                                              </div>
                                             
                                        </fieldset>
                                      <?php echo form_close();?>

                                    </div>
                                </div>
                            </div>
             

        </div>  
</div>
    </div>
</div>
