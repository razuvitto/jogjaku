<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JOGJAKU</title>
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/jogjakublack.png">
<style>
.intro {
  background-color: #333333;
}
.btn {
  background-color: gray;
  color: #FA4;
  font-size: 13px;
  font-weight: 600;
  border: 0;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  display: inline-block;
  text-transform: uppercase;
  opacity:0.8;
}
  </style>
</head>

<body>
<section  class="section intro">
  <h6 align="center">Ubah data Gambar</h6>
  
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data id yang dikirim oleh artikel.php melalui URL
  $id = isset($_GET['id'])?$_GET['id']:"";
  
  // Query untuk menampilkan data artikel berdasarkan id yang dikirim
  $query = "SELECT * FROM artikel WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="proses_ubah_artikel.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
  <table cellpadding="8" align="center">
  <tr>
    <td>Judul</td>
  <td><p><textarea name="judul"><?php echo $data['judul']; ?></textarea></p></td>
  </tr>
  <tr>
    <td>Keterangan</td>
  <td><p><textarea name="keterangan"><?php echo $data['keterangan']; ?></textarea></p></td>
  </tr>
   <tr>
    <td>Alamat URL</td>
  <td><p><textarea name="url"><?php echo $data['url']; ?></textarea></p></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td>
      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
      <input type="file" name="foto">
    </td>
  </tr>
  <td><input type="submit" value="Ubah"></td>
  <td><a href="artikel.php"><input type="button" value="Batal"></a></td>
  </table>
  </form>
    <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </section>
</body>
</html>