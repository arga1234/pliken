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

    <title>Desa Pliken </title>

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
<body id="page-top" class="index-page">
<div class="wrap-body">

	<!--////////////////////////////////////Header-->
	<header>
		<!---Main Header--->

		<div class="main-header">
			<!--Navigation-->

      <nav id="menu" class="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
            <a class="navbar-brand" href="<?php echo base_url();?>index.php">
              <img src="<?php echo base_url('assets/images/pliken.png'); ?>" width="80px">
            </a>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url();?>index.php">Home</a></li>
              <li><a href="#">Profil</a></li>

              <li><a href="<?php echo base_url()?>index.php/berita/beritapliken">Berita</a></li>
              <li ><a href="<?php echo base_url();?>index.php/pelayanan/menu">Pelayanan</a></li>
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


			<!-- Static Header -->
			<div style="margin-top:70px" class="header-text wow fadeInUp" data-wow-delay=".2s" data-wow-duration="2s">
					<h1 >Desa Pliken</h1>
					<p>Selamat Datang di Desa Pliken Senyum</p>

            <div style="margin-top:20px"class="col-md-12">
              <a href="#more"class="btn btn-reguler">
                                <i class="fa fa-rocket"></i> More
                              </a>
                              <a href="https://www.youtube.com/watch?v=eJ-EfQ2j4CU" target="_blank" style="margin-left:10px;"class="btn btn-skin">
                                <i class="fa fa-play"></i> Play
                              </a>
            </div>
	         </div>
         </div>


       </header>
	<!-- /Section: intro -->



	<!--////////////////////////////////////Container-->
	<section id="page-content" class="index-page">



<!-- macam-macam sentra -->

<section id="more" class="box-content">

  <div class="container">
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-3 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="2s">
        <div class="box-item">
        <img src="<?php echo base_url ('assets/images/tempe.png'); ?>" class=" img-responsive" >
        </div>
      </div>
      <div class="col-md-8">
        <div class="box-item sentra wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="2s">
          <h3 >Sentra Tempe</h3>
          <p style="text-align: justify">Di desa Pliken terdapat kurang lebih 600se pengrajin tempe dengan volume produksi setiap hari sekitar 20 ton yang berbahan dasar kedelai sebesar 13 ton.</p>
          <a href="<?php echo base_url()?>index.php/album/sentra_tempe"class="btn btnsentra-reguler">
           More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="box-content box-style-1">
  <div class="container">
    <div class="row">
      <div class="col-md-3 bata-1">
        <div class="box-item wow fadeInRight" data-wow-delay=".2s" data-wow-duration="2s">
        <img src="<?php echo base_url ('assets/images/bata.png'); ?>" class="img-responsive">
        </div>
      </div>
      <div class="col-md-8">
        <div class="box-item sentra wow fadeInRight" data-wow-delay=".2s" data-wow-duration="2s">
          <h3 >Sentra Batu Bata</h3>
          <p style="margin-right:50px;text-align: justify;">Sebagian masyarakat Desa Pliken memiliki mata pencaharian sebagai pengrajin batu bata. Sentra batu bata dapat ditemukan di sepanjang jalan Pliken-Ledug, Sokaraja-kembaran dan wilayah jurig </p>
          <a href="<?php echo base_url()?>index.php/album/sentra_batu_bata"class="btn btnsentra-reguler">More</a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box-item wow fadeInRight" data-wow-delay=".2s" data-wow-duration="2s">
        <img src="<?php echo base_url ('assets/images/bata.png'); ?>" class="img-responsive bata">
        </div>
      </div>
      <div class="col-md-1">
      </div>
    </div>
  </div>
</section>

<section class="box-content">
  <div class="container">
    <div class="row">
      <div class="col-md-4 utama-1 ">
        <div class="box-item  wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="2s" >
            <p class="utama-1-i"><i style="font-size:30px"class="fas fa-fish"></i></p>
            <p class="utama-1-p"><a href="<?php echo base_url()?>index.php/album/sentra_gurame">Sentra Gurame</a></p>
        </div>
      </div>

      <div class="col-md-4 utama-2 ">
        <div class="box-item  wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="2s" >
          <p class="utama-2-i"><i style="font-size:30px"class="fas fa-spa"></i></p>
          <p class="utama-2-p"><a href="<?php echo base_url()?>index.php/album/taman">Taman Bunga</a></p>
        </div>
      </div>

      <div class="col-md-4 utama-3 ">
        <div class="box-item  wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="2s">
          <p class="utama-3-i"><i style="font-size:30px"class="fas fa-camera-retro"></i></p>
          <p class="utama-3-p"><a href="<?php echo base_url()?>index.php/album/selfiedeck">Selfie Deck</a></p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="box-content">
<div class="container">
<div class="row">
  <div style="margin-bottom:100px"class="col-md-12 header-text-2 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="2s">
    <h1>Berita Pliken</h1>
    <p>Berita Seputar Kegiatan dan Pelayanan Desa Pliken Ada di Sini </p>

    <div style="margin-top:20px;margin-bottom:-20px"class="col-md-12">
      <a href="<?php echo base_url()?>index.php/berita/beritapliken"class="btn btn-reguler">
                        <i class="fa fa-rocket"></i> More
                      </a>

    </div>
  </div>

  <div class="col-md-1">
  </div>

<!-- kolom percobaan membuat artikel-->
<div class="wow fadeInUpBig" data-wow-delay="0.5s">
<?php

$result = mysqli_query($db, "SELECT * FROM artikel ORDER BY id DESC LIMIT 2");
while ($row = mysqli_fetch_array($result)) {
  echo "<div class= col-md-5>";
  echo "<div class= single-blog-post >";
  echo "<div class=post-thumbnail>";
  echo "<img src=assets/image/".$row['image']." >";
  echo "</div>";
  echo "<div class=post-content>";
  echo "<a href=index.php/artikel/artikellkp?id=".$row['id']." class=headline>";
  echo "<h5>$row[judul]</h5>";
  echo "</a>";
  echo "<p>";
  echo substr($row['artikel'], 0, 100);
  echo "... <br/> <hr/><a href=index.php/artikel/artikellkp?id=".$row['id'].">Read More</a>  ";

  echo "</p>";

  echo "</div>";
  echo "</div>";
  echo "</div>";
}
?>
</div>
<div class="col-md-1">
</div>
</div>
</div>
</section>

<section class="box-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12 header-text-layanan wow fadeInDown" data-wow-delay=".2s" data-wow-duration="2s">
        <h1>Pelayanan Desa Pliken</h1>
        <p>Mengurus KK, KTP, Surat Keterangan, dll </p>

        <div style="margin-top:20px;margin-bottom:-20px"class="col-md-12">
          <a href="<?php echo base_url()?>index.php/pelayanan/menu"class="btn btn-reguler">
                            <i class="fa fa-rocket"></i> More
                          </a>

        </div>
      </div>

<div style="margin-top:20px"class="col-md-3"></div>
      <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="2s">
        <img src="<?php echo base_url('assets/images/homepage2.jpg'); ?>" class="img-layanan">
      </div>
    </div>
  </div>
</section>

</section>

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
