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

        <link rel="shortcut icon" href="<?php echo base_url('assets/admin/images/pliken.png'); ?>">

        <title>Pelayanan Online</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/magnific-popup/css/magnific-popup.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/jquery-datatables-editable/datatables.css" />
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

<?php
include 'koneksi.php';
?>
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
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url('assets/admin/images/admin.png'); ?>" alt="user-img" class="img-circle"> </a>
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
                              <a href="<?php echo base_url();?>index.php/admin/index" class="waves-effect "><i class="ti-home"></i> <span> Dashboard </span> </a>
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
                                <li><a class="waves-effect " href="<?php echo base_url();?>index.php/admin/sku">Umum</a></li>
                                <li><a  class="waves-effect "href="<?php echo base_url();?>index.php/admin/sktm">Tidak Mampu</a></li>
                                <li><a  class="waves-effect "href="<?php echo base_url();?>index.php/admin/skusaha">Usaha</a></li>
                                <li><a  class="waves-effect "href="<?php echo base_url();?>index.php/admin/skdu">Domisili Usaha</a></li>
                                <li><a  class="waves-effect "href="<?php echo base_url();?>index.php/admin/skdtt">Domisili Tempat Tinggal</a></li>
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


                              <h4 class="page-title">Surat Pengantar Ijin Keramaian</h4>
                              <p class="text-muted page-title-alt">Perhatikan tulisan di bawah ini </p>
                            </div>
                        </div>
                        <div class="row">

                          <div class="col-lg-6">
                            <div class="panel panel-color panel-custom">
                              <div class="panel-heading">
                                <h3 class="panel-title">Cara Penggunaan</h3>
                              </div>
                              <div class="panel-body">
                                <p style="line-height:30px;">
                                Tuliskan nama pada kotak pencarian
                                , setelah ditemukan datanya silahkan  cek kembali kebenarannya sesuai KTP
                                ,  tombol pensil  berfungsi untuk mengubah data, tombol sampah untuk menghapus data, tombol print untuk mencetak surat
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="panel panel-color panel-danger">
                              <div class="panel-heading">
                                <h3 class="panel-title">Perhatian</h3>
                              </div>
                              <div class="panel-body">
                                <p style="line-height:30px;">
                                  Dilarang untuk mengubah data yang berbeda dengan data yang telah tertulis pada KTP orang yang bersangkutan. Developer tidak ikut bertanggung jawab atas perubahan data yang dilakukan secara sengaja dan sepihak
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="panel panel-color panel-primary">
                              <div class="panel-heading">
                                <h3 class="panel-title">Kotak Pencarian Data</h3>
                              </div>
                              <div class="panel-body">
                                <p style="line-height:30px;">
                                  Tuliskan nama dari orang yang bersangkutan, inputan selain itu tidak akan diproses dan ditampilkan oleh sistem
                                </p>
                                <br>
                                <form action="<?php echo base_url()?>index.php/admin/sku" method="get" class="col-md-4 input-group">
                                    <input type="text" id="example-input1-group2" name="cari" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                    <button type="submit" value="Cari" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>
                                    </span>
                                </form>

                                <br>

                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="">
                                          <table class="table table-striped" id="datatable-editable">
                                              <thead>
                                                  <tr>
                                                      <th>NKK</th>
                                                      <th>NIK</th>
                                                      <th>Nama</th>
                                                      <th>Aksi</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php
                                                  if(isset($_GET['cari'])){
                                                      $cari = $_GET['cari'];
                                                        $data = mysqli_query($db,"SELECT * FROM warga WHERE nama like '%".$cari."%'");
                                                       }else{
                                                           $data = mysqli_query($db, "SELECT * FROM warga LIMIT 10");
                                                          }
                                                          while ($row = mysqli_fetch_array($data)) {
                                                   ?>
                                                    <tr class="gradeA">
                                                         <td><?php echo $row['nkk']; ?></td>
                                                         <td><?php echo $row['nik']; ?></td>
                                                         <td><?php echo $row['nama']; ?></td>
                                                         <?php echo "<td class='actions'>";
                                                         echo "<a href= update_spk?nik=".$row['nik']."><i class='fa fa-pencil'></i></a>";
                                                         ?>
                                                      </td>
                                                    </tr>
                                                  <?php } ?>

                                              </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>


                              </div>
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="panel panel-color panel-purple">
                              <div class="panel-heading">
                                <h3 class="panel-title">Buat Data Baru</h3>
                              </div>
                              <div class="panel-body">
                                <p style="line-height:30px;">
                                  Dilarang untuk mengubah data yang berbeda dengan data yang telah tertulis pada KTP orang yang bersangkutan. Developer tidak ikut bertanggung jawab atas perubahan data yang dilakukan secara sengaja dan sepihak.
                                </p>
                              </div>
                            </div>
                          </div>




                        </div>

                     <!-- end Panel -->
                </div> <!-- content -->

                <footer class="footer text-right">
                    © PLIKEN 2018, Powered By KKN PPM UGM 2018
                  </footer>

            </div>
        </div>



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
        <script type="text/javascript"src="<?php echo base_url('assets/admin/js/jquery.core.js'); ?>"></script>
        <script type="text/javascript"src="<?php echo base_url('assets/admin/js/jquery.app.js'); ?>"></script>
        <!-- jQuery  Table-->
        <script src="<?php echo base_url()?>assets/admin/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>

        <script src="<?php echo base_url()?>assets/admin/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
  	    <script src="<?php echo base_url()?>assets/admin/plugins/datatables/dataTables.bootstrap.js"></script>
  	    <script src="<?php echo base_url()?>assets/admin/plugins/tiny-editable/mindmup-editabletable.js"></script>
  	    <script src="<?php echo base_url()?>assets/admin/plugins/tiny-editable/numeric-input-example.js"></script>
        <script src="<?php echo base_url()?>assets/admin/pages/datatables.editable.init.js"></script>

        <script>
  			$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
  		</script>

    </body>
</html>
