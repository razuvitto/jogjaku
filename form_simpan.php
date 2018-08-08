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
     <h6 align="center">Tambah Foto</h6>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="20" align="center">
  <tr>
    <td>Jenis Wisata</td>
    <td>
    <input type="radio" name="jenis_wisata" value="Wisata Alam"> Wisata Alam
    <input type="radio" name="jenis_wisata" value="Wisata Sejarah"> Wisata Sejarah
    <input type="radio" name="jenis_wisata" value="Wisata Pendidikan"> Wisata Pendidikan
    </td>
  </tr>
  <tr>
    <td>Nama Tempat</td>
    <td><input type="text" name="nama_tempat"></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  
  <td><input type="submit" value="Simpan"></td>
  <td><a href="galeri.php"><input type="button" value="Batal"></a></td>
  </table>
  </form>
  <br>
  <br>
  <br>
</section>  
  
</body>
</head>
</html>