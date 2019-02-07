<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="<?php echo base_url('assets/admin/images/pliken.png'); ?>">
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

  <h4 style="text-align:center"><u>SURAT PENGANTAR UMUM</u></h4>
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
    6. &ensp; Tempat tinggal &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: <?php echo $row['alamat']?>RT : <?php echo $row['rt']?>&nbsp;/ RW : <?php echo $row['rw']?>
  </p>

  <p class="paragraf">
    7. &ensp; Surat bukti diri &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
  </p>
  <p style="margin-left: 90px;"class="paragraf-1">
    NKK  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $row['nkk']?>  </p>
  <p style="margin-left: 90px;"class="paragraf-1">
    NIK  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;:&nbsp;<?php echo $row['nik']?></p>

  <p  class="paragraf">
    Menyatakan dengan sebenarnya bahwa <?php echo $row['data2']?>
  </p>

  <p class="paragraf">
    Demikian Surat Pernaytaan ini Saya buat dalam keadaan sehat jasmani dan rohani tanpa ada unsur paksaan dari siapapun untuk keperluan <?php echo $row['data1']?>
  </p>

  <p style="margin-left:90px;margin-top:20px"class="paragraf">
    Saksi-saksi : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Pliken,
  </p>

  <p style="margin-left:90px"class="paragraf">
     1 : <?php echo $row['data3']?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Yang Menyatakan,
  </p>

  <p style="margin-left:90px" class="paragraf">
     2 : <?php echo $row['data4']?>
  </p>

  <p style="margin-top: 40px;margin-left:50px;"class="paragraf">
    Nomor : _______________________  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nomor : _______________________
  </p>
  <p style="margin-left:50px;" class="paragraf">
    Ketua RT : <?php echo $row['data5']?> &nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Ketua RW : <?php echo $row['data6']?>
  </p>

  <p style="margin-top: 50px;margin-left:250px;"class="paragraf">
    Nomor : _______________________
  </p>
  <p style="margin-left:250px;" class="paragraf">
    <?php echo $row['pengesah_1']?> : <?php echo $row['nmpengesah_1']?>
  </p>

</div>

	<script>
		window.print();
	</script>

</body>
</html>
