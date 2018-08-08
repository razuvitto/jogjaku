<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data id yang dikirim oleh galeri.php melalui URL
$id = $_GET['id'];
// Query untuk menampilkan data galeri berdasarkan id yang dikirim
$query = "SELECT * FROM galeri WHERE id='".$id."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
// Cek apakah file fotonya ada di folder images/foto
if(is_file("images/foto".$data['foto'])) // Jika foto ada
  unlink("images/foto".$data['foto']); // Hapus foto yang telah diupload dari folder images/foto
// Query untuk menghapus data galeri berdasarkan id yang dikirim
$query2 = "DELETE FROM galeri WHERE id='".$id."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: galeri.php"); // Redirect ke halaman galeri.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='galeri.php'>Kembali</a>";
}
?>