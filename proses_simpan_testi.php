<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$nama_user = $_POST['nama_user'];
$saran = $_POST['saran'];

  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload
  // Proses simpan ke Database
  $query = "INSERT INTO `testi`(`nama_user`,`saran`) VALUES ('".$nama_user."','".$saran."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: testimonial.php"); // Redirect ke halaman testimonial.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='testimonial.php'>Kembali Ke Form Pengisian</a>";
  }