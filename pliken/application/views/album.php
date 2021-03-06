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

    <title>Album Desa Pliken</title>
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

    <!--CSS Album-->

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- //custom-theme -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsalbum/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsalbum/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsalbum/easing.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsalbum/jquery.cm-overlay.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsalbum/jquery.mobile.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsalbum/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsalbum/responsiveslides.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsalbum/SmoothScroll.min.js"></script>

    <!-- stylesheet -->
    <link href="<?php echo base_url()?>assets/cssalbum/bootstrapalbum.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url()?>assets/cssalbum/stylealbum.css" rel="stylesheet" type="text/css" media="all" />

    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome-icons -->
    <link href="<?php echo base_url()?>assets/cssalbum/font-awesome.css" type="text/css" rel="stylesheet">
    <!-- //font-awesome-icons -->




	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="sub-page">
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

        <div  style="margin-left:"class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>index.php">Home</a></li>
            <li><a href="#">Profil</a></li>
            <li ><a href="<?php echo base_url()?>index.php/berita/beritapliken">Berita</a></li>
            <li><a href="<?php echo base_url();?>index.php/pelayanan/menu">Pelyanan</a></li>
            <li class="active"><a href="<?php echo base_url()?>index.php/album/albumdesapliken">Album</a></li>

            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Lainnya<i class="fa fa-chevron-down"></i></a>
              <div class="dropdown-menu" style="margin-left: -203.625px;">
                <div class="dropdown-inner">
                  <ul class="list-unstyled">
                    <li><a href="archive.html">KKN UGM</a></li>
                  </ul>
                  <ul class="list-unstyled">
                    <li><a href="archive.html">Link Dinas</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="agileits_main">
    <!-- header -->
    <div class="w3_agile_logo">
    	<h1 class="text-center"><a href="index.html">Album</a></h1>
    </div>
    <!-- banner -->
    <div class="w3_banner">
    	<div class="container">
    		<div class="slider">
    			<div class="callbacks_container">
    			   <ul class="rslides callbacks callbacks1" id="slider4">
    					<li>
    						<div class="banner_text_w3layouts">
    							<h3> Pliken Senyum</h3>
    							<span> </span>
    							<p>Desa Wisata Industri</p>
    						</div>
    					</li>
    				</ul>
    			</div>
    		  <script src="<?php echo base_url()?>assets/jsalbum/responsiveslides.min.js"></script>
    		  <script>
    			// You can also use "$(window).load(function() {"
    			$(function () {
    			  // Slideshow 4
    			  $("#slider4").responsiveSlides({
    				auto: true,
    				pager:true,
    				nav:true,
    				speed: 500,
    				namespace: "callbacks",
    				before: function () {
    				  $('.events').append("<li>before event fired.</li>");
    				},
    				after: function () {
    				  $('.events').append("<li>after event fired.</li>");
    				}
    			  });

    			});
    		 </script>
    	   </div>
    	</div>
    </div>
      </div>

<div class="home_ w3layouts">
 <div class="home_grids_w3">
  <div class="home_main">
	   <div class="col-md-7 col-sm-7 col-xs-7 img1 img-grid">
		   <div class="img_text_w3ls text-center">
				<h4>Ikan Gurame</h4>
				<span> </span>
				<p>Di Sentra Gurame</p>
			</div>
		</div>
		<div class="col-md-5 img2 col-sm-5 col-xs-5 img-grid">
		    <div class="img_text_w3ls text-center">
				<h4>Keripik Tempe </h4>
				<span> </span>
				<p>Hasil Pengrajin Tempe   </p>
			  </div>
		</div>
		<div class="clearfix"></div>
	</div>
  <div class="home_main">
	   <div class="col-md-5 col-sm-5 col-xs-5 img3 img-grid ">
		    <div class="img_text_w3ls text-center">
				<h4>Batu Bata</h4>
				<span> </span>
				<p>Di Daerah Ledhug</p>
			  </div>
		</div>
	  <div class="col-md-7 col-sm-7 col-xs-7 img4 img-grid">
		    <div class="img_text_w3ls text-center">
				<h4>Mendoan</h4>
				<span> </span>
				<p> Makanan Khas Desa Pliken </p>
			</div>
	 </div>
	<div class="clearfix"></div>
  </div>
   <div class="home_main">
	   <div class="col-md-7 col-sm-7 col-xs-7 img-grid  img5">
		  <div class="img_text_w3ls text-center">
				<h4>Bunga Refugia</h4>
				<span> </span>
				<p> Keindahan Desa Pliken </p>
		  </div>
		 </div>
		<div class="col-md-5 col-sm-5 col-xs-5 img-grid img6">
		  <div class="img_text_w3ls text-center">
				<h4>Nopia & Mino</h4>
				<span> </span>
				<p>Salah Satu Makanan Khas Pliken</p>
		  </div>
		 </div>
		<div class="clearfix"></div>
  </div>
</div>
</div>

<div class="gallery_wthree" id="gallery">
 <div class="container">
      <h3 class="title">gallery</h3>
	  <div class="gallery_grid agileits_w3layouts">
	    <div class="col-md-6  col-sm-6 col-xs-6 grid_w3">
			<div class="grid-1">
				<a class="cm-overlay" href="<?php echo base_url()?>assets/images/album/2e.jpg">
					<img src="<?php echo base_url()?>assets/images/album/2e.jpg" alt=" " class="img-responsive-album" />
					 <div class="w3agile-text w3agile-text-smal1">
						<h5>Cenil Khas Pliken</h5>
					</div>
				</a>
			</div>
			 <div class="sub_grid gallery_w3l">
				   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
						<a class="cm-overlay" href="<?php echo base_url()?>assets/images/album/14e.jpg">
							<img src="<?php echo base_url()?>assets/images/album/12ex.jpg" alt=" " class="img-responsive-album" />
							<div class="w3agile-text w3agile-text-small">
								<h5>Pembibitan</h5>
					        </div>
						</a>
					</div>
				   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-b grid_w3l">
					 	<a class="cm-overlay" href="<?php echo base_url()?>assets/images/album/13e.jpg">
							<img src="<?php echo base_url()?>assets/images/album/13e.jpg" alt=" " class="img-responsive-album" />
							<div class="w3agile-text w3agile-text-smal1">
								<h5>Selfie Deck</h5>
							</div>
						</a>
					</div>
				   <div class="clearfix"></div>
			 </div>
        </div>
		<div class="col-md-6 col-sm-6 col-xs-6 grid_w3">
		   <div class="sub_grid">
			   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
          			<a class="cm-overlay" href="<?php echo base_url()?>assets/images/album/15e.jpg">
						<img src="<?php echo base_url()?>assets/images/album/15e.jpg" alt=" " class="img-responsive-album" />
						<div class="w3agile-text w3agile-text-small">
							<h5>Lopis Khas Pliken</h5>
						</div>
					</a>
			   </div>
			   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-d grid_w3l">
					<a class="cm-overlay" href="<?php echo base_url()?>assets/images/album/16e.jpg">
						<img src="<?php echo base_url()?>assets/images/album/16e.jpg" alt=" " class="img-responsive-album" />
						<div class="w3agile-text w3agile-text-smal1">
							<h5>Klepon Khas Pliken</h5>
						</div>
					</a>
				</div>
				 <div class="clearfix"></div>
			   </div>
		    <div class="grid-1 grid-2">
				<a class="cm-overlay" href="<?php echo base_url()?>assets/images/album/7e.jpg">
					<img src="<?php echo base_url()?>assets/images/album/7e.jpg" alt=" " class="img-responsive-album" />
					<div class="w3agile-text w3agile-text-smal1">
							<h5>Selfie Deck</h5>
					</div>
				</a>
		    </div>
		   <div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	  </div>
</div>
</div>

	</div>

	<!--////////////////////////////////////Footer-->
  <footer style="margin-left: 0px" id="footer">
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
	<div id="page-top"><a href="#page-top" class="btn btn-toTop"><i style="font-size: :20px"class="fa fa-angle-up"></i></a></div>

	<!-- ========== Scripts ========== -->
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
