 <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Ubah User</h2>
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
                                         <?php echo form_hidden($csrf); ?>                                
                                        <fieldset class="form-horizontal">


                                            
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Nama Depan</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" name="first_name" placeholder="Nama Depan" value="<?php echo $user->first_name;?>"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Nama Belakang</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="last_name" placeholder="Nama Belakang" value="<?php echo $user->last_name;?>">
                                                </div>
                                                </div>

                                               <div class="form-group">
                                                <label class="col-sm-2 control-label">Perusahaan</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="company" placeholder="Perusahaan" value="<?php echo $user->company;?>">
                                          </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">No Telepon</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="phone" placeholder="No Telepon" value="<?php echo $user->phone;?>">
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Gelar</label>
                                                <div class="col-sm-10"><input type="text" class="form-control" name="gelar" placeholder="Gelar" value="<?php echo $user->gelar;?>"></div>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                  <input type="password" class="form-control" name="password" placeholder="Password (Jika ganti password)">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-sm-2 control-label">Konfirmasi Password</label>
                                                <div class="col-sm-10">
                                                  <input type="password" class="form-control" name="password_confirm" placeholder="Konfirmasi Password (Jika ganti password)">
                                                </div>
                                            </div>
                                             
                                           <?php if ($this->ion_auth->is_admin()): ?>
            <div class="form-group">
          <label class="col-sm-2 control-label">Groups</label>
          <div class="col-sm-10">
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>

      <?php endif ?>
      <?php echo form_hidden('id', $user->id);?>
      
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




