<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<?php
require_once('bdd.php');


$sql = "SELECT id, title, keterangan, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JOGJAKU</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/jogjakublack.png">
</head>

<body>
<!-- header section -->
<section>
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">JOGJAKU</a>
      <nav class="navigation" role="navigation">
      <ul class="primary-nav">
          <li><a href="index.php">Beranda</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wisata <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a style="color:grey" href="wisataalam.php">Wisata Alam</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatasejarah.php">Wisata Sejarah</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatapendidikan.php">Wisata Pendidikan</a>
                       </li>
                    </ul>
              </li>
          <li><a href="artikel.php">Artikel</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="testimonial.php">Testimonial</a></li>
          <li><a href="tentang.php">Tentang Kami</a></li>
          <?php 
                        if(!isset($_SESSION['is_login'])){
                    ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php }else{?>
                    <li>
                    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser'];?>)</a>
                    </li><?php }?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
</section>
<!-- header section --> 
<!-- services section --> 
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
     <?php 
                        if(!isset($_SESSION['admin'])){
                    ?>
                    <h6>ARTIKEL</h6>
                    <p>Berita terkini seputar objek wisata yang terdapat di daerah Yogyakarta</p>
                    <br>
                    </li>
                    <?php }else{?>
                    <h6>ARTIKEL</h6>
                    <br>
                    </li>
      <?php }?>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- intro section -->
<!-- intro section --> 
<!-- Artikel section -->
<section id="services" class="services service-section">
  <div class="container">
      <div class="container">

        <!-- Marketing Icons Section -->
        </br>
        <div class="row">
            <div class="col-lg-12">
            </div>

            <!--Show Article -->
<?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM artikel"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
     <div class="col-md-4">
     <div class="panel panel-default">
     <div class="panel-heading">
          <h4><?php echo "<td align='center'><img src='images/foto/".$data['foto']."' width='315' height='171' ></td>";?></h4>
          <p> <?php echo "".$data['judul'].""; ?></p>
          </div>
         <div class="panel-body">
         <p> <?php echo "".$data['keterangan'].""; ?></p>
         <a <?php echo "href=".$data['url'].""; ?> class="btn btn-default" >Read More</a>
          </div>
        </div>
        </a>
      </div>

  <?php
}
  ?>
        </div>
  </div>
</section>

<!-- Add Article -->
<section id="services" class="services service-section">
              <?php 
                        if(!isset($_SESSION['admin'])){
                    ?>
                    </li>
                    <?php }else{?>

  <section  class="section intro">
     <h6 align="center">Tambah Artikel</h6>
  <form method="post" action="proses_simpan_artikel.php" enctype="multipart/form-data">
  <table cellpadding="20" align="center">
  <tr>
    <td>Judul</td>
    <td><input type="text" name="judul"></td>
  </tr>
  <br>
  <tr>
    <td>Keterangan</td>
    <td><input type="text" name="keterangan"></td>
  </tr>
  <tr>
    <td>Alamat URL</td>
    <td><input type="text" name="url"></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  
  <td><input type="submit" value="Simpan"></td>
  <td><a href="artikel.php"><input type="button" value="Batal"></a></td>
  </table>
  </form>
  <br>
  <br>
  <br>
  </section> 
<!-- Artikel section --> 
<!-- Article Data Control -->
<br>
<br>
<br>
<br>
                    <br>
                      <h6 align="center">Data Artikel</h6>
                      <br>
                      <br>
              <table border="2" width="90%" align="center">
                    <tr>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Alamat URL</th>
                    <th colspan="2">Aksi</th>
                    </tr>
                <?php
                // Load file koneksi.php
                include "koneksi.php";
  
                      $query = "SELECT * FROM artikel"; // Query untuk menampilkan semua data galeri
                      $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                      echo "<tr>";
                      echo "<td align='center'><img src='images/foto/".$data['foto']."' width='400' height='200' ></td>";
                      echo "<td>".$data['judul']."</td>";
                      echo "<td>".$data['keterangan']."</td>";
                      echo "<td>".$data['url']."</td>";
                      echo "<td><a href='form_ubah_artikel.php?id=".$data['id']."'>Ubah</a></td>";
                      echo "<td><a href='proses_hapus_artikel.php?id=".$data['id']."'>Hapus</a></td>";
                      echo "</tr>";
                  }
                ?>
              </table>                    
      <?php }?>
  </div>
</section>
<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container" align="center">
      <div class="row">
        <a style="padding:20px"; href="#"><i class="fa fa-facebook"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-twitter"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-linkedin"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-google-plus"></i></a>
        <br>
        <br>
      <p>Copyright © 2015 jogjaku.com All Rights Reserved. Made by <a href="index.php">Vitto</a></p>
      </div>
    </div>
  </div>
</footer>
  <!-- footer top --> 
  
</footer>
<!-- Footer section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>