<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url('assets/admin/images/favicon_1.ico'); ?>">

        <title>Ubold - Responsive Admin Dashboard Template</title>

        <!--Morris Chart CSS -->
		    <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/morris/morris.css'); ?>">
        <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/admin/css/core.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url ('assets/admin/css/components.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url ('assets/admin/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url ('assets/admin/css/pages.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url ('assets/admin/css/responsive.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url('assets/js-admin/modernizr.min.js'); ?>"></script>

    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div style="margin-top:10px;"class="text-center">
                      <img src="<?php echo base_url('assets/images/pliken1.png'); ?>" width="70px">
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>




                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                        <li class="list-group slimscroll-noti notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o noti-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus noti-pink"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                            <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url('assets/admin/images/users/admin.png'); ?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>

                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigasi</li>
                          <li style="margin-bottom:10px"  class="has_sub">
                              <a href="<?php echo base_url();?>index.php/admin/index" class="waves-effect active"><i class="ti-home"></i> <span> Dashboard </span> </a>
                          </li>
                          <li style="margin-bottom:10px" class="has_sub">
                              <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Artikel </span> <span class="menu-arrow"></span></a>
                              <ul class="list-unstyled">
                                  <li><a class="waves-effect " href="<?php echo base_url();?>index.php/admin/tulisartikel">Tulis Artikel</a></li>
                                  <li><a  class="waves-effect "href="javascript:void(0)">Semua Artikel</a></li>
                              </ul>
                          </li>
                          <li class="text-muted menu-title">Surat</li>
                          <li style="margin-bottom:10px" class="has_sub">
                              <a href="javascript:void(0);" class="waves-effect"><i class=" icon-wallet"></i><span class="label label-primary pull-right">5</span><span>Surat Keterangan </span> </span></a>
                              <ul class="list-unstyled">
                                  <li><a class="waves-effect " href="<?php echo base_url();?>">Umum</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Tidak Mampu</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Usaha</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Domisili Usaha</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Domisili Tempat Tinggal</a></li>
                              </ul>
                          </li>

                          <li style="margin-bottom:10px" class="has_sub">
                                <a  href="javascript:void(0);" class="waves-effect"><i class="icon-envelope-open"></i><span>Surat Pengantar </span> <span class="menu-arrow"></span></a>
                              <ul class="list-unstyled">
                                  <li><a class="waves-effect " href="<?php echo base_url();?>">Umum</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Catatan Kepolisian/SKCK</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Izin Keramaian</a></li>
                              </ul>
                          </li>

                          <li style="margin-bottom:10px" class="has_sub">
                              <a href="javascript:void(0);" class="waves-effect"><i class="icon-notebook"></i><span>Surat Pernyataan  </span> <span class="menu-arrow"></span></a>
                              <ul class="list-unstyled">
                                  <li><a class="waves-effect " href="<?php echo base_url();?>">Umum</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Ahli Waris</a></li>
                              </ul>
                          </li>

                          <li style="margin-bottom:10px" class="has_sub">
                              <a href="javascript:void(0);" class="waves-effect"><i class=" icon-folder-alt"></i><span class="label label-pink pull-right">7</span><span>Surat Model N </span></a>
                              <ul class="list-unstyled">
                                  <li><a class="waves-effect " href="<?php echo base_url();?>">Surat Keterangan Untuk Nikah</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Surat Keterangan Untuk Asal-usul</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Surat Persetujuan Mempelai</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Surat Keterangan Tentang Ortu</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Surat Izin Ortu</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Surat Keterangan Kematian Suami/Istri</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Surat Pemberitahuan Kehendak Nikah</a></li>
                              </ul>
                          </li>
                       <li class="text-muted menu-title">Pencatatan</li>
                          <li style="margin-bottom:10px" class="has_sub">
                              <a href="javascript:void(0);" class="waves-effect"><i class="icon-people"></i><span>P. Penduduk</span> <span class="menu-arrow"></span></a>
                              <ul class="list-unstyled">
                                  <li><a class="waves-effect " href="<?php echo base_url();?>">Permohonan KK</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Perubahan KK</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Permohonan KTP </a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Permohonan Pindah</a></li>
                              </ul>
                          </li>

                          <li style="margin-bottom:10px"class="has_sub">
                              <a href="javascript:void(0);" class="waves-effect"><i class=" icon-book-open"></i><span>Pencatatan Sipil</span> <span class="label label-success pull-right">5</span></a>
                              <ul class="list-unstyled">
                                  <li><a class="waves-effect " href="<?php echo base_url();?>">Surat Keterangan Kelahiran</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Surat Keterangan Kematian</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Surat Pelaporan Kematian</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Surat Keterangan Lahir Mati</a></li>
                                  <li><a  class="waves-effect "href="<?php echo base_url();?>">Surat Pelaporan Lahir Mati</a></li>
                              </ul>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">


                                <h4 class="page-title">Dashboard</h4>
                                <p class="text-muted page-title-alt">Selamat Datang Admin Desa Pliken</p>
                            </div>
                        </div>

                        <div class="row">



                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-info pull-left">
                                        <i class="md  md-face-unlock text-info"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">
                                          <?php

                                          $result = mysqli_query($db, "SELECT * FROM warga WHERE kelamin='Perempuan'");
                                          $count = mysqli_num_rows($result);
                                          echo "$count";
                                          ?>
                                        </b></h3>
                                        <p class="text-muted"> Perempuan</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                        <i class="md  md-person text-pink"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">
                                          3880</b></h3>
                                        <p class="text-muted">Laki-laki</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                        <i class="md  md-perm-contact-cal text-purple"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">
                                          <?php

                                          $result = mysqli_query($db, "SELECT * FROM warga WHERE hubungan='Kepala Keluarga'");
                                          $count = mysqli_num_rows($result);
                                          echo "$count";
                                          ?></b></h3>
                                        <p class="text-muted">Kepala Keluarga</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box">
                                    <div class="bg-icon bg-icon-success pull-left">
                                        <i class="md md-equalizer text-success"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">
                                        8230</b></h3>
                                        <p class="text-muted">Inputan Data</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
            							<div class="col-sm-12">
            								<div class="card-box widget-inline">
            									<div class="row">
            										<div class="col-lg-3 col-sm-6">
            											<div class="widget-inline-box text-center">
            												<h3><i class="text-primary md  md-highlight-remove"></i> <b data-plugin="counterup"><?php

                                    $result = mysqli_query($db, "SELECT * FROM warga WHERE pendidikan='Tidak/Belum Sekolah'");
                                    $count = mysqli_num_rows($result);
                                    echo "$count";
                                    ?></b></h3>
            												<h4 class="text-muted">Tidak Sekolah</h4>
            											</div>
            										</div>

            										<div class="col-lg-3 col-sm-6">
            											<div class="widget-inline-box text-center">
            												<h3><i class="text-custom md  md-account-balance"></i> <b data-plugin="counterup"><?php

                                    $result = mysqli_query($db, "SELECT * FROM warga WHERE pendidikan='SLTA/Sederajat'");
                                    $count = mysqli_num_rows($result);
                                    echo "$count";
                                    ?></b></h3>
            												<h4 class="text-muted">Lulusan SMA</h4>
            											</div>
            										</div>

            										<div class="col-lg-3 col-sm-6">
            											<div class="widget-inline-box text-center">
            												<h3><i class="text-pink md md-account-child"></i> <b data-plugin="counterup"><?php

                                    $result = mysqli_query($db, "SELECT * FROM warga WHERE pendidikan='SLTP/Sederajat'");
                                    $count = mysqli_num_rows($result);
                                    echo "$count";
                                    ?></b></h3>
            												<h4 class="text-muted">Lulusan SMP</h4>
            											</div>
            										</div>

            										<div class="col-lg-3 col-sm-6">
            											<div class="widget-inline-box text-center b-0">
            												<h3><i class="text-purple md  md-person"></i> <b data-plugin="counterup">  <?php

                                      $result = mysqli_query($db, "SELECT * FROM warga WHERE pendidikan='Tamat SD/Sederajat'");
                                      $count = mysqli_num_rows($result);
                                      echo "$count";
                                      ?></b></h3>
            												<h4 class="text-muted">Lulusan SD</h4>
            											</div>
            										</div>

            									</div>
            								</div>
            							</div>
            						</div>


                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="widget-panel widget-style-2 bg-white">
                                                            <i class="md  md-thumb-up text-primary"></i>
                                                            <h2 class="m-0 text-dark counter font-600">8230</h2>
                                                            <div class="text-muted m-t-5">Islam</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="widget-panel widget-style-2 bg-white">
                                                            <i class="md  md-wallet-giftcard

 text-pink"></i>
                                                            <h2 class="m-0 text-dark counter font-600"><?php

                                                              $result = mysqli_query($db, "SELECT * FROM warga WHERE agama='Kristen'");
                                                              $count = mysqli_num_rows($result);
                                                              echo "$count";
                                                              ?></h2>
                                                            <div class="text-muted m-t-5">Kristen</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="widget-panel widget-style-2 bg-white">
                                                            <i class="md  md-cloud text-info"></i>
                                                            <h2 class="m-0 text-dark counter font-600"><?php

                                                              $result = mysqli_query($db, "SELECT * FROM warga WHERE agama='HIndu'");
                                                              $count = mysqli_num_rows($result);
                                                              echo "$count";
                                                              ?></h2>
                                                            <div class="text-muted m-t-5">Hindu</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6">
                                                        <div class="widget-panel widget-style-2 bg-white">
                                                            <i class="md md-account-child text-custom"></i>
                                                            <h2 class="m-0 text-dark counter font-600"><?php

                                                              $result = mysqli_query($db, "SELECT * FROM warga WHERE agama='Budha'");
                                                              $count = mysqli_num_rows($result);
                                                              echo "$count";
                                                              ?></h2>
                                                            <div class="text-muted m-t-5">Budha</div>
                                                        </div>
                                                    </div>
                                                </div>




                </div> <!-- content -->

                <footer class="footer text-right">
                    © PLIKEN 2018, Powered By KKN PPM UGM 2018
                  </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script type="text/javascript"  src="<?php echo base_url('assets/admin/js/jquery.min.js'); ?>"></script>
        <script  type="text/javascript" src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
        <script  type="text/javascript" src="<?php echo base_url('assets/admin/js/detect.js'); ?>"></script>
        <script  type="text/javascript" src="<?php echo base_url('assets/admin/js/fastclick.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery.slimscroll.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery.blockUI.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/waves.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/wow.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery.nicescroll.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/jquery.scrollTo.min.js'); ?>"></script>

        <script type="text/javascript" src="<?php echo base_url('assets/admin/plugins/peity/jquery.peity.min.js'); ?>"></script>

        <!-- jQuery  -->
        <script  type="text/javascript" src="<?php echo base_url('assets/admin/plugins/waypoints/lib/jquery.waypoints.js'); ?>"></script>
        <script  type="text/javascript" src="<?php echo base_url('assets/admin/plugins/counterup/jquery.counterup.min.js'); ?>"></script>



        <script type="text/javascript" src="<?php echo base_url('assets/admin/plugins/morris/morris.min.js'); ?>"></script>
        <script type="text/javascript"src="<?php echo base_url('assets/admin/plugins/raphael/raphael-min.js'); ?>"></script>

        <script type="text/javascript"type="text/javascript"src="<?php echo base_url('assets/admin/plugins/jquery-knob/jquery.knob.js'); ?>"></script>

        <script type="text/javascript"src="<?php echo base_url('assets/admin/pages/jquery.dashboard.js'); ?>"></script>
        <script type="text/javascript"src="<?php echo base_url('assets/admin/js/jquery.core.js'); ?>"></script>
        <script type="text/javascript"src="<?php echo base_url('assets/admin/js/jquery.app.js'); ?>"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>




    </body>
</html>
