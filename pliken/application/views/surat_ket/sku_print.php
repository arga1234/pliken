<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .border {
        border-color: #000;
        border-style: solid;
        border-top-width: 1px;
    }

    .paragraf{
      line-height: 30px;
      margin-left: 60px;
      margin-right: 50px;
      margin-top: -15px;

    }
    .paragraf-1{
      line-height: 30px;
      margin-left: 90px;
      margin-right: 50px;
      margin-top: -20px;

    }
 </style>
	<title>Pelayanan Online</title>
</head>
<body>
<div style="margin-left:30px"class="col-md-3">
    <img style="width:100px"src="<?php echo base_url()?>assets/images/logo.png">
</div>

<div style="margin-top:-110px"class="col-md-5">
  <h3 style="margin-bottom:-10px;text-align:center">PEMERINTAH KABUPATEN BANYUMAS</h3>
  <h3 style="margin-bottom:-10px;text-align:center">KECAMATAN KEMBARAN</h3>
  <h3 style="text-align:center">DESA PLIKEN</h3>
  <p style="margin-top:-15px;margin-bottom:-15px;text-align:center">
    Jl. Letkol Sosro Sudiro RT 04  RW 07 Kode Pos 53182 Tlp.(0281)6445270
  </p>

</div>

<div style="margin-top:30px;"class="border">
</div>

	<p style="margin-left: 20px;margin-top:20px">
    Kode desa : 3302202002
	</p>

  <h4 style="text-align:center"><u>SURAT KETERANGAN UMUM</u></h4>
    <p style="margin-top:-15px;margin-bottom: 30px;text-align:center">Nomor:......../......../......../......../........</p>
<div class="col-md-10">
	<p class="paragraf">
    &emsp; &ensp;Yang bertanda tangan di bawah ini kami Kepala Desa Pliken Kecamatan Kembaran Kabupaten Banyumas Provinsi Jawa Tengah, menerangkan bahwa :
  </p>
  <?php

  $nik= abs(intval( $_GET['nik']));
  $nik=  $_GET['nik'];
  $result=mysqli_query($db, "SELECT * FROM warga WHERE nik='$nik' LIMIT 1");
  $row=mysqli_fetch_array($result);
  ?>

  <p class="paragraf">
    1. &ensp; Nama &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $row['nama']?>
  </p>

  <p class="paragraf">
    2. &ensp; Tempat dan tanggal lahir &nbsp;&nbsp;: <?php echo $row['tmp_lahir']?>,&nbsp;<?php echo $row['tgl_lahir']?>
  </p>

  <p class="paragraf">
    3. &ensp; Warganegara &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: WNI
  </p>

  <p class="paragraf">
    4. &ensp; Agama &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: <?php echo $row['agama']?>
  </p>

  <p class="paragraf">
    5. &ensp; Pekerjaan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: <?php echo $row['pekerjaan']?>
  </p>

  <p class="paragraf">
    6. &ensp; Tempat tinggal &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: <?php echo $row['rt']?>&nbsp;/&nbsp;<?php echo $row['rw']?>
  </p>

  <p class="paragraf">
    7. &ensp; Surat bukti diri &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
  </p>
  <p style="margin-left: 90px;"class="paragraf-1">
    NKK  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $row['nkk']?>  </p>
  <p style="margin-left: 90px;"class="paragraf-1">
    NIK  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;:&nbsp;<?php echo $row['nik']?></p>
  <p class="paragraf">
    8. &ensp; Keperluan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :
  </p>
  <p style="margin-left: 265px;margin-top:-45px;margin-bottom: -50px;"class="paragraf-1">
    <?php echo $row['keperluan']?>
  </p>

  <p style="margin-top:50px" class="paragraf">
    9. &ensp; Berlaku &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: <?php echo $row['tgl_masuk']?>&nbsp;s/d &nbsp;<?php echo $row['berlaku']?></p>
  </p>
  <p  class="paragraf">
    10. &nbsp; Keterangan lain &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:
  </p>
  <p style="margin-left: 265px;margin-top:-45px;margin-bottom: -50px;"class="paragraf-1">
  <?php echo $row['keterangan']?>
  </p>

  <p style="margin-top:50px" class="paragraf">
    Demikian untuk menjadikan maklum bagi yang berkepentingan.
  </p>

  <p style="margin-top:50px" class="paragraf">
    Mengetahui
  </p>
  <p style="" class="paragraf">
    <?php echo $row['pengesah_1']?>
  </p>
  <p style="margin-top:80px" class="paragraf">
    <?php echo $row['nmpengesah_1']?>
  </p>

  <p style="margin-left:550px;margin-top:-185px;margin-bottom:95px" class="paragraf">
    Pliken, <?php echo $row['tgl_masuk']?>
  </p>
  <p style="margin-left:550px;margin-top:-100px;margin-bottom:95px" class="paragraf">
    <?php echo $row['pengesah_2']?>
  </p>

  <p style="margin-left:550px;" class="paragraf">
    <?php echo $row['nmpengesah_2']?>
  </p>

</div>

	<script>
		window.print();
	</script>

</body>
</html>
