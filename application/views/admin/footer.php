 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Footer dan Logo</h2>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-8">
                <div class="panel-body">

                                     


                                     <form  action="create_user" method="post" enctype="multipart/form-data">   
                                        <fieldset class="form-horizontal">
                                        
                                            
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Alamat</label>
                                                <div class="col-sm-10">
                                                 <textarea name="alamat" cols="10" rows="3" class="form-control">
                                                     

                                                 </textarea>

                                               </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">No Telepon</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="last_name" placeholder="Nama Belakang" required oninvalid="this.setCustomValidity('Nama Belakang tidak boleh kosong')" oninput="setCustomValidity('')">
                                                </div>
                                                </div>

                                               <div class="form-group">
                                                <label class="col-sm-2 control-label">No Fax</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="company" placeholder="Perusahaan" required oninvalid="this.setCustomValidity('Perusahaan tidak boleh kosong')" oninput="setCustomValidity('')">
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
            <div class="col-lg-4">
                <div class="contact-box">
                    <a href="profile.html">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img alt="image" class="img-circle m-t-xs img-responsive" src="img/a1.jpg">
                            <div class="m-t-xs font-bold">Logo</div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                       
                    </div>
                    <div class="clearfix"></div>
                        </a>
                </div>
            </div>
          
        </div>
        </div>