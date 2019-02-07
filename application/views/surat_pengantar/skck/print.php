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

  <h4 style="text-align:center"><u>SURAT KETERANGAN TIDAK MAMPU</u></h4>
    <p style="margin-top:-15px;margin-bottom: 30px;text-align:center">Nomor:......../......../......../......../........</p>
<div class="col-md-10">
	<p class="paragraf">
    &emsp; &ensp;Kepala Desa Pliken Kecematan Kembaran Kabupaten Banyumas, dengan ini menerangkan bahwa warga Desa Pliken :
  </p>
  <?php

  $nik= abs(intval( $_GET['nik']));
  $nik=  $_GET['nik'];
  $result=mysqli_query($db, "SELECT * FROM warga WHERE nik='$nik' LIMIT 1");
  $row=mysqli_fetch_array($result);
  ?>

  <p class="paragraf">
    &ensp; Nama &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $row['nama']?>
  </p>

  <p class="paragraf">
   &ensp; Jenis Kelamin &nbsp;&emsp;&emsp;&emsp;: <?php echo $row['kelamin']?>
  </p>

  <p class="paragraf">
    &ensp; Tempat/tanggal lahir &nbsp;&nbsp;: <?php echo $row['tmp_lahir']?>,&nbsp;<?php echo $row['tgl_lahir']?>
  </p>

  <p class="paragraf">
    &ensp; Warganegara &emsp;&emsp;&emsp;&nbsp;&nbsp;: WNI
  </p>

  <p class="paragraf">
    &ensp; Agama &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['agama']?>
  </p>

  <p class="paragraf">
    &ensp; Status Perkawinan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['status']?>
  </p>

  <p class="paragraf">
    &ensp; No. KTP/NIK &emsp; &emsp;&emsp;: <?php echo $row['nik']?>
  </p>
    <p class="paragraf">
      &ensp; Pekerjaan &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['pekerjaan']?>
    </p>

  <p  class="paragraf">
    &nbsp; Alamat &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['alamat']?>,  RT  <?php echo $row['rt']?>,  RW <?php echo $row['rw']?>
  </p>
  <p class="paragraf">
  &emsp; &ensp;  Berdasarkan Surat Keterangan dari Ketua Rukun Tetangga Nomor  <?php echo $row['ns_rtdanrw']?> Tanggal <?php echo $row['tgl_surat']?>, bahwa yang bersangkutan sampai saat ini belum pernah tersangkut yustisi/urusan kepolisian.
  </p>

  <p class="paragraf">
     &emsp; &ensp; Surat keterangan ini diperlukan untuk <?php echo $row['keperluan']?>.
  </p>

  <p class="paragraf">
    &emsp; &ensp; Demikian Surat Keterangan ini kami buat atas permintaan yang bersangkutan dan dapat dipergunakan sebagaimana mestinya.
  </p>


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
