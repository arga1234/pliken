<?php
include 'koneksi.php';
?>
<?php
 // Connect to database
  // Initialize message variable
  $msg = "";

  // ambil data inputan dari text

  $art =  mysqli_real_escape_string($db, $_POST['artikel']);
  $jdl =  mysqli_real_escape_string($db, $_POST['judul']);
  // untuk mendapatkan nama, ukuran dan tmp dari gpambar yang diuplaod
  $image = $_FILES['image']['name'];
  $size=$_FILES['image']['size'];
  $tmp_file=$_FILES['image']['tmp_name'];
  //ekstensi yang diijinkan
  $allow_extension=array('png','jpg', 'PNG', 'JPG', 'jpeg', 'JPEG');
  $x = explode ('.', $image); //
  $ekstensi = strtolower(end($x));
  //target untuk menempatkan gambar atau file yang telah  disimapn
  $target = 'assets/image/'.basename($image);

  if (in_array($ekstensi, $allow_extension)==true){
    if ($size<1000000){
      move_uploaded_file($tmp_file, $target);
      $sql=mysqli_query($db, "INSERT INTO artikel (judul,image, artikel) VALUES ('$jdl', '$image', '$art')");
      if ($sql){
        echo 'FILE BERHASIL DI UPLAOD';
      }
      else{
        echo 'GAGAL MENGUPLOAD GAMBAR ';
      }
    }else {
      echo 'UKURAN FILE TERLALU BESAR';
      }
  }else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DIPERBOLEHKAN';
  }
?>
