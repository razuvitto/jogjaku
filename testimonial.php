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
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
       <?php 
                        if(!isset($_SESSION['admin'])){
                    ?>
                    <h6>TESTIMONIAL</h6>
                     <p>Bagaimana pengalaman & pendapat mereka yang telah menjadi pelanggan dan senantiasa menggunakan layanan dari kami ? Biarlah pelanggan kami yang berbicara & berbagi cerita dengan Anda</p>
                    <br>
                    </li>
                    <?php }else{?>
                    <h6>TESTIMONIAL</h6>
                    <br>
                    </li>
      <?php }?>
    </div>
  </div>
</section>
<!-- intro section --> 
<!-- services section --> 
<!-- work section -->
<!-- work section --> 
<!-- our team section -->

<!-- Show Testimonial -->

<section id="teams" class="section teams">
  <div class="container">
    <div class="row">
      
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM testi"; // Query untuk menampilkan semua data testi
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>

    <div class="col-md-3 col-sm-6">
        <div class="person">
          <div class="person-content">

            <h4><?php echo "".$data['nama_user']."";?></h4>
            <p><?php echo "".$data['saran']."";?></p>
          </div>
        </div>
      </div>
 
  <?php
  }
  ?>

    </div>
  </div>
</section>



<!-- Add Testi section --> 
 <?php 
          if(!isset($_SESSION['user_biasa'])){
    ?>
<?php }else{?>
<section id="contact" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">
      <h5>Tambahkan Testimonial</h5>
        <p>Kami sangat mengharapkan saran maupun masukan dari Anda agar website ini bisa semakin baik</p> 
        <div id="message"></div>
        <form method="post" action="proses_simpan_testi.php">
         <!--  <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Tulis saran maupun masukan..." > -->
          <!-- <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." > -->
          <!-- <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Project Details..."></textarea> -->
          <input type="hidden" name="nama_user" value="<?php echo "".$_SESSION['namauser']."";?>" />
          <input type="text" name="saran" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Tulis saran maupun masukan...">
          <!-- <input type="submit" id="submit" name="send" class="btn btn-large" value="Submit"> -->
          <input type="submit" class="btn btn-large" value="Simpan">
        </form>
      </div>
    </div>
  </div>
</section>
<?php }?>


<!-- Testimonial Data Control -->

<section id="teams" class="section teams">
  <div class="container">

              <?php 
                        if(!isset($_SESSION['admin'])){
                    ?>
                    <br>
                    </li>
                    <?php }else{?>
                    <br>
                      <h6 align="center">Data Testimonial</h6>
                      <br>
                      <br>
              <table border="2" width="80%" align="center">
                    <tr>
                    <th>Nama User</th>
                    <th>Saran</th>
                    <th>Aksi</th>
                    </tr>
                <?php
                // Load file koneksi.php
                include "koneksi.php";
  
                      $query = "SELECT * FROM testi"; // Query untuk menampilkan semua data galeri
                      $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                      echo "<tr>";
                      echo "<td>".$data['nama_user']."</td>";
                      echo "<td>".$data['saran']."</td>";
                      echo "<td><a href='proses_hapus_testi.php?id=".$data['id']."'>Hapus</a></td>";
                      echo "</tr>";
                  }
                ?>
              </table>                    
      <?php }?>
</div>
</section>
<!-- Testimonials section -->
<!-- Testimonials section --> 
<!-- contact section -->
<!-- contact section --> 
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