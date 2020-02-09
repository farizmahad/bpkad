<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPKAD Cimahi | Login</title>
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-bold"><center>Badan Pengelola Keuangan dan Aset Daerah (BPKAD) <br>Kota Cimahi</center></h2>
                <br>
                <p>
                <small>
                    Jln. Raden Demang Hardjakusumah Komplek Perkantoran Pemkot Cimahi
                    Blok Jati, Cihanjuang, Cimahi
                    bpkad@cimahikota.go.id
                    </small>
                </p>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                <p align="center">

                    <img src="<?php echo base_url(); ?>assets/admin/img/logo-pemkot-cimahi.jpg" width="75" height="75">
                </p>
                       <?php echo form_open("admin/auth/login");?>

                    <?php
                    echo $this->session->flashdata('action_status');
                    echo validation_errors();
                    ?>


                    <br>

                    <?php if(!empty($message)){ echo $message; }?>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required name="identity">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required name="password">
                        </div>
                        <button type="submit" class="btn btn-danger block full-width m-b">Login</button>
                        <?php echo form_close();?>
                    <?php
                    /*
                    ?>
                        <a href="<?php echo base_url(); ?>admin/auth/forgot_password">
                            <small>Forgot password?</small>
                        </a>
                    */
                    ?>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright BPKAD - Kota Cimahi
            </div>
            <div class="col-md-6 text-right">
               <small>© 2018</small>
            </div>
        </div>
    </div>
</body>
</html>
