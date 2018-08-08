-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 08:20 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jogjaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(100) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `url` varchar(250) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `keterangan`, `url`, `foto`) VALUES
(8, '21 TEMPAT WISATA SERU DI YOGYAKARTA YANG TAK PERNAH ANDA BAYANGKAN SEBELUMNYA', 'Sebagai ibu kota negara, Jakarta adalah pusat kekuatan ekonomi dan industri tanah air. Namun Yogyakarta boleh dibilang merupakan jiwa negeri ini, di mana tradisi luhur nenek moyang masih terjaga.', 'https://indonesia.tripcanvas.co/id/jogja/tempat-wisata-seru/', '28102017201028a1.jpg'),
(9, '25 Tempat Wisata di Jogja yang Wajib Dikunjungi', 'Kota Yogyakarta atau akrab disebut Jogja adalah destinasi wisata yang sangat mempesona. Buktinya, kota ini selalu ramai dikunjungi para pelancong dari luar kota, terutama pada masa-masa liburan. Ada banyak magnet yang menjadi daya tarik Kota Jogja.', 'http://anekatempatwisata.com/tempat-wisata-di-jogja/#', '28102017201115b1.jpg'),
(10, '113 REKOMENDASI TEMPAT WISATA DI JOGJA YANG PALING BARU', 'Tak heran jika Jogja menjadi kota dengan pertumbuhan wsiatawan tertinggi di Indonesia. Hal itu disebabkan jogja selalu memunculkan spot spot wisata baru untuk menarik minat para wisatawan.', 'http://wisatabaru.com/7-wisata-terbaru-di-jogja-yang-ngehits-minggu-ini-april-2017/', '28102017201206c1.jpg'),
(11, '10 CANDI Jelajahi Bangunan dari Peradaban yang Hilang di Yogyakarta', 'Sebagai destinasi archaeotourism yang terkenal, Yogyakarta merupakan surga untuk menjelajahi candi-candi kuno dan menemukan reruntuhan dari peradaban yang hilang misterius.', 'https://www.yogyes.com/id/yogyakarta-tourism-object/candi/', '28102017201415a.jpg'),
(12, '7 Candi dengan Panorama Tercantik di Yogyakarta', 'Yogyakarta - Sudah menjadi rahasia umum, kalau Provinsi Daerah Istimewa Yogyakarta punya banyak candi. Tidak hanya sejarahnya bentuk arsitektur candi-candi tersebut sangat memesona. Inilah 7 candi dengan panorama tercantik di Yoyakarta.', 'https://travel.detik.com/destination/d-2033300/7-candi-dengan-panorama-tercantik-di-yogyakarta', '28102017201500wallpaper.jpg'),
(13, '10 Pantai di Gunungkidul, Jogja yang Wajib Dikunjungi', 'Bicara tentang Jogja pasti tak lepas dengan wisata budaya, karena Jogja memiliki banyak bangunan tua bersejarah yang eksotis. Tetapi siapa sangka kota yang menjadi salah satu tujuan wisata favorit turis ini banyak menyimpan banyak misteri', 'http://anekatempatwisata.com/10-pantai-di-gunungkidul-jogja-yang-wajib-dikunjungi/', '28102017201602e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(20) NOT NULL,
  `jenis_wisata` varchar(20) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `jenis_wisata`, `nama_tempat`, `foto`) VALUES
(95, 'Wisata Alam', '', '28102017200701a1.jpg'),
(96, 'Wisata Alam', '', '28102017200715d1.jpg'),
(97, 'Wisata Alam', '', '28102017200723a2.jpg'),
(98, 'Wisata Alam', '', '28102017200730b2.jpg'),
(99, 'Wisata Alam', '', '28102017200737c1.jpg'),
(100, 'Wisata Alam', '', '28102017200751b1.jpg'),
(101, 'Wisata Alam', '', '28102017200803c2.jpg'),
(102, 'Wisata Alam', '', '28102017200823e.jpg'),
(103, 'Wisata Alam', '', '28102017200837d2.jpg'),
(104, 'Wisata Sejarah', '', '28102017200850a.jpg'),
(105, 'Wisata Pendidikan', '', '28102017200905c.jpg'),
(106, 'Wisata Sejarah', '', '28102017200922d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `saran` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `nama_user`, `saran`) VALUES
(55, 'Raju', 'Nice broo'),
(56, 'Simsi', 'Gambar terlalu sedikit :('),
(57, 'User', 'Sangat membantu :)'),
(58, 'Syah', 'Damage Broo !');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_awal` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama_akhir` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dibuat` datetime NOT NULL,
  `diubah` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `role` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'user_biasa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_awal`, `nama_akhir`, `email`, `password`, `telp`, `dibuat`, `diubah`, `status`, `role`) VALUES
(14, 'Admin', 'Jogjaku', 'admin@jogjaku.com', 'afb91ef692fd08c445e8cb1bab2ccf9c', '082362505777', '2017-10-20 00:00:00', '2017-10-20 00:00:00', '1', 'admin'),
(18, 'User', 'Jogjaku', 'user@jogjaku.com', 'ee11cbb19052e40b07aac0ca060c23ee', '8572895728', '2017-10-20 00:00:00', '2017-10-20 00:00:00', '1', 'user_biasa'),
(23, 'Raju', 'Vitto', 'Vitto@jogjaku.com', 'bedce5ae492d1bdc9fb988c4991c2d46', '082362505777', '2017-10-20 16:30:50', '2017-10-20 16:30:50', '1', 'user_biasa'),
(24, 'Simsi', 'Mi', 'Simsi@jogjaku', '257a63d544be379b968351c1ce07a3b6', '052828589240', '2017-10-23 09:02:43', '2017-10-23 09:02:43', '1', 'user_biasa'),
(25, 'Syah', 'Kon', 'Syah@jogjaku.com', '418a0cdf69bde721880aa171d2d79d40', '0826425666', '2017-10-23 09:04:07', '2017-10-23 09:04:07', '1', 'user_biasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
