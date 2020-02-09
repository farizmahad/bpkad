<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | BPKAD Cimahi</title>
    <link rel="icon" href="<?php echo base_url();?>assets/img/logo.png" type="image/png" sizes="16x16">
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="<?php echo base_url();?>aseets/admin/css/plugins/codemirror/codemirror.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link  href="<?php echo base_url();?>assets/admin/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
     <link href="<?php echo base_url(); ?>assets/css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">

     <link href="<?php echo base_url(); ?>assets/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/plugins/slick/slick.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/plugins/slick/slick-theme.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/admin/css/plugins/chartist/chartist.min.css" rel="stylesheet">

     <link href="<?php echo base_url(); ?>assets/admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
</head>
<body class="fixed-navigation">

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                        
                            <i class="fa fa-user"></i>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"></strong>
                             </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">

                                <li><a href="<?php echo base_url();?>admin/Auth/logout">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li>


<li>
                        <a href="#"><i class="fa fa-hacker-news"></i> <span class="nav-label">Pengaturan Dinamis </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url();?>admin/slider">Revolution Slider</a></li>
<li><a href="<?php echo base_url();?>admin/video">Video Youtube</a></li>




                        </ul>
                    </li>




 
                     <li>
                        <a href="#"><i class="fa fa-hacker-news"></i> <span class="nav-label">Berita </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url();?>admin/Berita/laporan">Laporan</a></li>
                            <li><a href="<?php echo base_url();?>admin/Berita">Semua Berita</a></li>
<li><a href="<?php echo base_url();?>admin/Berita/tambah_berita">Tambah Berita</a></li>
<li><a href="<?php echo base_url();?>admin/Kategori_berita">Kategori Berita</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>admin/Produk_Hukum"><i class="fa fa-th-large"></i> <span class="nav-label">Produk Hukum</span></a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-photo"></i> <span class="nav-label">Gallery </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url();?>admin/Galeri">Semua Foto</a></li>
<li><a href="<?php echo base_url();?>admin/Galeri/tambah_galeri">Tambah Foto Galeri</a></li>


                        </ul>
                    </li>




 <li>
                        
</li>



<li>
                        <a href="#"><i class="fa fa-bank"></i> <span class="nav-label">Profile Perusahaan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                        <a href="<?php echo base_url();?>admin/profile"><i class="fa fa-handshake-o"></i>Visi dan Misi</a>
                    </li>
                    <li>
                       <a href="<?php echo base_url();?>admin/profile/tugas"><i class="fa fa-handshake-o"></i>Tugas dan Fungsi</a>
                    </li>



                        </ul>
                    </li>







                    <li>
                        <a href="<?php echo base_url();?>admin/Pelayanan"><i class="fa fa-handshake-o"></i> <span class="nav-label">Pelayanan</span></a>
                    </li>

                    <?php
                    /*
                    ?>
<li>
                        <a href="#"><i class="fa fa-calculator"></i> <span class="nav-label">Informasi Keuangan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                        <a href="<?php echo base_url();?>admin/Keuangan"><i class="fa fa-handshake-o"></i> Estimasi Pendapatan Daerah</a>
                    </li>
                    <li>
                       <a href="<?php echo base_url();?>admin/Keuangan/rencana_belanja_daerah"><i class="fa fa-handshake-o"></i> Rencana Belanja Daerah</a>
                    </li>

 <li>
                        <a href="<?php echo base_url();?>admin/Keuangan/apbd"><i class="fa fa-handshake-o"></i> APBD</a>
                    </li>


                        </ul>
                    </li>
*/






?>


                    <!--
                    <li>
                        <a href="<?php/* echo base_url();*/?>admin/APBD"><i class="fa fa-file-excel-o"></i> <span class="nav-label">APBD</span></a>
                    </li>
                    -->


                    <li>
                        <a href="#"><i class="fa fa-area-chart"></i> <span class="nav-label">APBD </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url();?>admin/APBD">Visualisasi APBD</a></li>
                            <li><a href="<?php echo base_url();?>admin/APBD/tren_apbd">Trend APBD</a></li>




                        </ul>
                    </li>
                    <!--
                    <li>
                        <a href="<?php echo base_url();?>admin/APBD/diagram"><i class="fa fa-handshake-o"></i> <span class="nav-label">Diagram</span></a>
                    </li>
                    -->

                    <li>
                        <a href="<?php echo base_url();?>admin/APBD/sop"><i class="fa fa-handshake-o"></i> <span class="nav-label">SOP</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>admin/APBD/informasi_keuangan"><i class="fa fa-handshake-o"></i> <span class="nav-label">Informasi Keuangan</span></a>
                    </li>
                    <li>

<li>
                        <a href="<?php echo base_url();?>admin/Back_agenda"><i class="fa fa-calendar"></i> <span class="nav-label">Agenda</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>admin/kontak"><i class="fa fa-address-card"></i> <span class="nav-label">Kontak</span></a>
                    </li>


                    <?php

                    /*
                    <li>
                        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Master </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url();?>admin/user">Manage Admin</a></li>
                        </ul>
                    </li>

*/
                    ?>
                   
  




<li>
                        <a href="<?php echo base_url();?>admin/user"><i class="fa fa-users"></i> <span class="nav-label">Manage User</span></a>
                    </li>
                    
                </ul>

            </div>
        </nav>
          <div id="wrapper">
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
               <li class="dropdown">
                   <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                       <i class="fa fa-envelope"></i>
                       <?php $kontak=$this->Kontak_model->select_kontak_belum_dibalas();
                       if(count($kontak) >0) {
                       ?>

                       <span class="label label-warning">

                             <?php echo count($kontak); ?>

                       </span>
                       <?php } ?>
                   </a>
                   <?php if(count($kontak) >0) { ?>
                   <ul class="dropdown-menu dropdown-alerts">


                       <?php foreach($kontak as $kon) : ?>
                       <li>



                           <a href="<?php echo base_url(); ?>admin/Kontak/detail_kontak?id_kontak=<?php echo $kon->id; ?>">
                               <div>
                                   <i class="fa fa-envelope fa-fw"></i> Pesan dari <?php echo $kon->nama; ?> belum dibalas
                                   <span class="pull-right text-muted small"><?php echo $kon->tanggal; ?></span>
                               </div>
                           </a>
                       </li>
                       <li class="divider"></li>

                        <?php endforeach; ?>

                   </ul>
                </li>
                <?php }  ?>
                <li class="dropdown">

                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo base_url();?>admin/Auth/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
</div>
<!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/dataTables/datatables.min.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/fullcalendar/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

 <script src="<?php echo base_url(); ?>assets/admin/js/plugins/codemirror/codemirror.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/dropzone/dropzone.js"></script>
 <script src="<?php echo base_url();?>assets/admin/js/plugins/codemirror/mode/xml/xml.js"></script>
 <script src="<?php echo base_url();?>assets/admin/js/plugins/jasny/jasny-bootstrap.min.js"></script>
 <script src="<?php echo base_url();?>assets/admin/js/plugins/iCheck/icheck.min.js"></script>

  <script src="<?php echo base_url();?>assets/admin/js/plugins/datapicker/bootstrap-datepicker.js"></script>
   <script src="<?php echo base_url();?>assets/admin/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

   <script src="<?php echo base_url();?>assets/admin/js/plugins/chosen/chosen.jquery.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/demo/chosen/chosen.jquery.js"></script> 
<script src="<?php echo base_url(); ?>assets/admin/js/plugins/typehead/bootstrap3-typeahead.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
 <script src="<?php echo base_url(); ?>assets/admin/js/plugins/slick/slick.min.js"></script>

 <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/admin/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

   <script src="<?php echo base_url();?>assets/admin/js/plugins/chartist/chartist.min.js"></script>


    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/summernote/summernote.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/raphael-2.1.0.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/js/plugins/morris/morris.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/js/demo/morris-demo.js"></script>
 