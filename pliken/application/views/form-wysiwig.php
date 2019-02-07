<?php
$link=mysqli_connect('localhost', 'root', '', 'pliken');

if (!$link){
  die("Koneksi dengan database gagal");
}

$result=mysqli_query($link, "SELECT * FROM artikel" );
if (!$result){
  die("Koneksi dengan database gagal");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url('assets/admin/images/favicon_1.ico'); ?>"/>
        <title>Ubold - Responsive Admin Dashboard Template</title>

        <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/admin/css/core.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url ('assets/admin/css/components.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url ('assets/admin/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url ('assets/admin/css/pages.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url ('assets/admin/css/responsive.css'); ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css"/>

        <!-- Plugins css-->
        <link href="<?php echo base_url('assets/admin/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/admin/plugins/switchery/css/switchery.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/admin/plugins/multiselect/css/multi-select.css');?>"  rel="stylesheet" type="text/css/">
        <link href="<?php echo base_url('assets/admin/plugins/select2/css/select2.min.css');?>" rel="stylesheet" type="text/css/">
        <link href="<?php echo base_url('assets/admin/plugins/bootstrap-select/css/bootstrap-select.min.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/admin/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')?>" rel="stylesheet" />

        <!--Frola Editor css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/froala_editor.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/froala_style.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/code_view.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/colors.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/emoticons.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/image_manager.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/image.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/line_breaker.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/table.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/char_counter.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/video.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/fullscreen.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/quick_insert.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/plugins/file.css'); ?>"/>

        <link rel="stylesheet" href="<?php echo base_url('assets/frola/css/themes/gray.css'); ?>"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css"/>



        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url('assets/admin/js/modernizr.min.js'); ?>"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
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

                            <ul class="nav navbar-nav hidden-xs">
                                <li><a href="#" class="waves-effect waves-light">Files</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="Search..." class="form-control">
			                     <a href=""><i class="fa fa-search"></i></a>
			                </form>


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
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url('assets/admin/images/users/admin.png'); ?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
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

                        	<li class="text-muted menu-title">Navigation</li>

                          <li class="has_sub">
                              <a href="<?php echo base_url();?>index.php/admin/index" class="waves-effect "><i class="ti-home"></i> <span> Dashboard </span> </a>
                          </li>
                          <li class="has_sub">
                              <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Artikel </span> <span class="menu-arrow"></span></a>
                                  <li><a  class="waves-effect active " href="<?php echo base_url();?>index.php/admin/tulisartikel">Tulis Artikel</a></li>
                                  <li><a class="waves-effect " href="javascript:void(0)">Semua Artikel</a></li>
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
                                <div class="btn-group pull-right m-t-15">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                                    <ul class="dropdown-menu drop-menu-right" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                                <h4 class="page-title">Tulis Artikel</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Artikel</a></li>
                                    <li class="active">Tulis Artikel</li>
                                </ol>
                            </div>
                        </div>


                          <form method="POST" action="<?php echo base_url();?>index.php/admin/input" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <input style="margin-bottom:20px" type="text" name="judul" class="form-control" placeholder="Judul Artikel">
	                           <input  type="file" name="image" class="filestyle" data-placeholder="Upload Thumbnail"></br>
                             <textarea name="artikel" type="text" id="edit"></textarea>
                             <button style="margin-top:10px" type="submit" class="btn btn-default waves-effect waves-light btn-md">Submit</button>
                        </form>



                        <!-- End row -->
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2016. All rights reserved.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
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

        <script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="<?php echo base_url()?>assets/admin/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/admin/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/admin/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="<?php echo base_url()?>assets/admin/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="<?php echo base_url()?>assets/admin/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/admin/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/admin/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/admin/pages/autocomplete.js"></script>

        <script type="text/javascript" src="<?php echo base_url()?>assets/admin/pages/jquery.form-advanced.init.js"></script>


        <script type="text/javascript"src="<?php echo base_url('assets/admin/js/jquery.core.js'); ?>"></script>
        <script type="text/javascript"src="<?php echo base_url('assets/admin/js/jquery.app.js'); ?>"></script>

        <!--form validation init-->
        <script src="<?php echo base_url('assets/admin/plugins/tinymce/tinymce.min.js'); ?>"> </script>

        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/froala_editor.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/align.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/code_beautifier.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/code_view.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/colors.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/draggable.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/emoticons.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/font_size.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/font_family.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/image.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/file.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/image_manager.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/line_breaker.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/link.min.js') ?> "></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/lists.min.js')?> "></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/paragraph_format.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/paragraph_style.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/video.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/table.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/url.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/entities.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/char_counter.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/inline_style.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/save.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/fullscreen.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/quick_insert.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/frola/js/plugins/quote.min.js') ?>"></script>


        <script>
          $(function() {
            $('#edit').froalaEditor({
              theme: 'gray'
            })
          });

        </script>

        <script type="text/javascript">
        	$(document).ready(function () {
			    if($("#elm1").length > 0){
			        tinymce.init({
			            selector: "textarea#elm1",
			            theme: "modern",
			            height:300,
			            plugins: [
			                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			                "save table contextmenu directionality emoticons template paste textcolor"
			            ],
			            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
			            style_formats: [
			                 {title: 'Bold text', inline: 'b'},
			                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			                {title: 'Example 1', inline: 'span', classes: 'example1'},
			                {title: 'Example 2', inline: 'span', classes: 'example2'},
			                {title: 'Table styles'},
			                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
			            ]
			        });
			    }
			});
        </script>


	</body>
</html>
