<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">

    <title> Berita Desa Pliken</title>
    <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<!-- Custom CSS -->
	   <link  href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

	<!-- Animate.css -->
	   <link href="<?php echo base_url('assets/css/animate.css'); ?>"  rel="stylesheet" media="all" type="text/css">

	<!-- Custom Fonts -->
      <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

	<!-- Owl Carousel Assets -->
    <link href="<?php echo base_url ('assets/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->



	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="sub-page">
<div class="wrap-body">

	<!--////////////////////////////////////Header-->
	<header>
		<!---Main Header--->
		<div class="main-header">

			<!--Navigation-->


			<!-- Static Header -->

		</div>
	</header>
	<!-- /Section: intro -->

	<!-- /////////////////////////////////////////Content -->


	<div id="page-content">
    <nav id="menu" class="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
          <a class="navbar-brand" href="<?php echo base_url();?>index.php">
            <img src="<?php echo base_url('assets/images/pliken.png'); ?>" width="80px">
          </a>
        </div>

        <div style="margin-left:"class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>index.php">Home</a></li>
            <li><a href="#">Profil</a></li>
            <li class="active"><a href="<?php echo base_url()?>index.php/berita/beritapliken">Berita</a></li>
            <li><a href="<?php echo base_url();?>index.php/pelayanan/menu">Pelyanan</a></li>
            <li><a href="<?php echo base_url()?>index.php/album/albumdesapliken">Album</a></li>

            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Lainnya<i class="fa fa-chevron-down"></i></a>
              <div class="dropdown-menu" style="margin-left: -203.625px;">
                <div class="dropdown-inner">
                  <ul class="list-unstyled">
                    <li><a href="<?php echo base_url()?>index.php/kkn/tim2016">TIM KKN UGM 2016</a></li>
                    <li><a href="<?php echo base_url()?>index.php/kkn/tim2017">TIM KKN UGM 2017</a></li>
                  </ul>
                  <ul class="list-unstyled">
                    <li><a href="<?php echo base_url()?>index.php/kkn/tim2018">TIM KKN UGM 2018</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

		<div class="box-content">
			<div class="container">
				<!-----------------Content-------------------->
				<article class="single-post">
          <?php
          $id= abs(intval( $_GET['id']));
          $id=  $_GET['id'];
          $result=mysqli_query($db, "SELECT * FROM artikel WHERE id='$id' LIMIT 1");
          $row=mysqli_fetch_array($result);
          ?>

					<div class="wrap-post"><!--Start Box-->
						<div class="entry-header text-center">
							<h1 class="entry-title"> <?php echo $row['judul'];?>
              </h1>
              <span class="entry-meta">
                <ul class="list-inline link">
                  <li><a href="#">Diposting Oleh Admin Desa Pliken </a></li>

                </ul>
              </span>
						</div>
						<div class="post-thumbnail-wrap">
							<div class="portfolio-box zoom-effect">
            	<img src="<?php echo base_url('assets/image/'), $row['image'] ;?>" alt="">
							</div>
						</div>
						<div style="margin-top:-20px"class="entry-content">
							<div style="line-height:30px;"><p><?php echo $row['artikel'];?></p></div>
							<div class="note">
							  <div class="clear"></div>
							</div>
					  </div>
					</div>

				</article>

			</div>
		</div>
	</div>

	<!--////////////////////////////////////Footer-->
  <footer style="margin-left:0px" id="footer">
    <div class="container">
      <div class="wrap-footer">
        <div class="row">
          <div class="col-md-7">
            <div class="footer-contact-form">
              <h2 class="footer-title">Titipkan Pesan</h2>
              <form name="" method="post" action="#">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control input-lg" name="name" id="name" placeholder="Nama" required="required" />
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control input-lg" name="email" id="email" placeholder="Email" required="required" />
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subjek" required="required" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" placeholder="Pesan" style="height: 190px;"></textarea>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-skin" name="submitcontact" id="submitcontact">Kirim</button>
              </form>
            </div>
          </div>
          <div class="col-md-5">
            <div class="footer-contact-info">
              <div class="contact-info-item">
                <div class="row">
                  <div class="col-md-1">
                    <div class="contact-info-icon">
                      <i class="fa fa-map-marker"></i>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <h3>Alamat</h3>
                    <p>Jl. Letkol Sosro Sudiro RT 04 RW 07 Kec. Kembaran, Kab. Banyumas</p>
                  </div>
                </div>
              </div>
              <div class="contact-info-item">
                <div class="row">
                  <div class="col-md-1">
                    <div class="contact-info-icon">
                      <i class="fa fa-phone"></i>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <h3>Telepon</h3>
                    <p>081903511580</p>
                  </div>
                </div>
              </div>
              <div class="contact-info-item">
                <div class="row">
                  <div class="col-md-1">
                    <div class="contact-info-icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                  </div>
                  <div class="col-md-10">
                    <h3>Email</h3>
                    <p> desapliken1@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-footer">
        <ul class="list-inline footer-link link">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">You Tube</a></li>

        </ul>
        <div class="copyright">
          <span>Copyright ©Desa Pliken 2018 - Powered By : KKN UGM 2018</span>
        </div>
      </div>
    </div>
  </footer>
	<!-- Footer -->
  <div  id="page-top"><a href="#page-top" class="btn btn-toTop"><i style="font-size: :20px"class="fa fa-angle-up"></i></a></div>

  <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.localScroll.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/SmoothScroll.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>

	<!-- Owl Carousel JS -->
	<script src="<?php echo base_url ('assets/owl-carousel/owl.carousel.js'); ?>"></script>

	<!-- Definity JS -->
	<script src="<?php echo base_url ('assets/js/main.js'); ?>"></script>

</div>
</body>
</html>
