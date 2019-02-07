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

  <h4 style="text-align:center"><u>SURAT KETERANGAN DOMISILI USAHA</u></h4>
    <p style="margin-top:-15px;margin-bottom: 30px;text-align:center">Nomor:......../......../......../......../........</p>
<div class="col-md-10">
	<p style="margin-bottom: 25px;line-height: 20px"class="paragraf">
    Kepala Desa Pliken Kecematan Kembaran Kabupaten Banyumas, dengan ini menerangkan bahwa warga Desa Pliken :
  </p>
  <?php

  $nik= abs(intval( $_GET['nik']));
  $nik=  $_GET['nik'];
  $result=mysqli_query($db, "SELECT * FROM warga WHERE nik='$nik' LIMIT 1");
  $row=mysqli_fetch_array($result);
  ?>

  <p class="paragraf" style="margin-top:-20px" >
    &ensp; Nama &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $row['nama']?>
  </p>

  <p class="paragraf" style="margin-top:-20px">
   &ensp; Jenis Kelamin &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;: <?php echo $row['kelamin']?>,&nbsp;<?php echo $row['tgl_lahir']?>
  </p>

  <p class="paragraf" style="margin-top:-20px">
    &ensp; Tempat/tanggal lahir &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['tmp_lahir']?>,&nbsp;<?php echo $row['tgl_lahir']?>
  </p>

  <p class="paragraf" style="margin-top:-20px">
    &ensp; Kewarganegaraan &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: WNI
  </p>
  <p class="paragraf" style="margin-top:-20px">
    &ensp; No. KTP/NIK &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;: <?php echo $row['nik']?>
  </p>
    <p class="paragraf" style="margin-top:-20px">
      &ensp; Pekerjaan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['pekerjaan']?>
    </p>

  <p  class="paragraf" style="margin-top:-20px">
    &ensp; Alamat &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['alamat']?>,  RT  <?php echo $row['rt']?>,  RW <?php echo $row['rw']?>
  </p>

  <p style="margin-top:-20px" class="paragraf">
    &ensp; Maksud Keramaian &emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;: <?php echo $row['nm_perusahaan']?>
  </p>

  <p class="paragraf"style="margin-top:-20px">
    &ensp; Tanggal Penyelenggaraan &emsp;&emsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['pemilik']?>
  </p>

  <p class="paragraf" style="margin-top:-20px">
    &ensp; Waktu Penyelenggaraan &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['alm_perusahaan']?>
    </p>

  <p class="paragraf" style="margin-top:-20px">
    &ensp; Jenis Hiburan   &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;: <?php echo $row['j_usaha']?>
  </p>
  <p class="paragraf" style="margin-top:-20px">
    &ensp; Jumlah Undangan  &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['sts_usaha']?>
  </p>
    <p class="paragraf" style="margin-top:-20px">
      &ensp; Tempat Penyelenggaraan &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['jml_kar']?>
    </p>



  <p style="line-height:20px" class="paragraf">
    Berdasarkan Surat Pernyataan dari Ketua RT Nomor Tanggal ,
  maka dengan ini menerangkan atas permohonan yang bersangkutan dapat dilaksanakan dengan ketentuan sebagai berikut :
  </p>

<ul>
<li style="line-height:20px;margin-left:50px;margin-bottom:5px;">Pada waktu dilaksanakan keramaian harus disertai dengan ketentraman dan ketertiban dalam lingkungan, baik hubungan dengan tetangga,
  menghargai waktu-waktu ibadah dalam menciptakan kerukunan umat beragama maupun kebersihan lingkungan setelah selesai.</li>

<li style="line-height:20px;margin-left:50px;margin-bottom:5px;">Pada waktu dilaksanakan keramaian tidak dibenarkan/dilarang melakukan hal-hal yang bertentangan dengan ketentuan yang berlaku dan adat-istiadat bangsa.</li>

<li style="line-height:20px;margin-left:50px;margin-bottom:5px;">Bilamana akan mempergunakan jalan umum, terlebih dahulu harus Ijin dari DLLAJ dan Kepolisian atau Instansi terkait.</li>
</ul>

<p style="margin-top:20px;margin-left:230px" class="paragraf">
  NO.Reg : ______________________
</p>

<p style="margin-top: 40px;margin-left:100px;"class="paragraf">
  Pemohon
</p>
<p style="margin-left:100px;margin-top:80px" class="paragraf">
  <?php echo $row['nama']?>
</p>

<p style="margin-top: -155px;margin-left:300px;"class="paragraf">
  <?php echo $row['pengesah_1']?>
</p>
<p style="margin-top: -150px;margin-left:300px;margin-top:80px" class="paragraf">
  <?php echo $row['nmpengesah_1']?>
</p>

<p style="margin-left:550px;margin-top:-180px;margin-bottom:95px" class="paragraf">
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
