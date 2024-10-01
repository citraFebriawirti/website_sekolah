-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 10:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal_create` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama_pengirim`, `email`, `judul`, `isi_pesan`, `tanggal_create`) VALUES
(1, 'vv', 'arcinaracitra@gmail.com', 'ss', 'sss', '2024-09-30 09:44:18'),
(2, 'vv', 'arcinaracitra@gmail.com', 'ss', 'sss', '2024-09-30 09:45:46'),
(3, 'vv', 'arcinaracitra@gmail.com', 'ss', 'ss', '2024-09-30 09:46:28'),
(4, 'vv', 'arcinaracitra@gmail.com', 'ss', 'ss', '2024-09-30 09:49:15'),
(5, 'vv', 'arcinaracitra@gmail.com', 'ss', 'sss', '2024-09-30 10:25:54'),
(6, 'ss', 'arcinaracitra@gmail.com', 'ss', 'fff', '2024-09-30 10:31:01'),
(7, 'Citra Febriawirti', 'arcinaracitra@gmail.com', 'Masuk Sekolah', 'apakah masih buka pendaftaran sekolah ?', '2024-09-30 10:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id_about` int(11) NOT NULL,
  `visi_about` text NOT NULL,
  `misi_about` text NOT NULL,
  `deskripsi_about` text NOT NULL,
  `gambar_about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id_about`, `visi_about`, `misi_about`, `deskripsi_about`, `gambar_about`) VALUES
(5, '<p>Menjadi sekolah internasional yang unggul dalam membentuk generasi global yang berintegritas, kreatif, dan inovatif, dengan berlandaskan nilai-nilai kepemimpinan dan keberagaman, untuk menghadapi tantangan dunia yang terus berkembang.</p>', '<ol><li>Memberikan pendidikan berkualitas internasional yang menekankan pada pengembangan karakter, keterampilan berpikir kritis, dan jiwa kepemimpinan.</li><li>Menciptakan lingkungan belajar yang inklusif dan mendukung, di mana setiap siswa dihargai dan diberi ruang untuk mengembangkan potensi terbaik mereka.</li><li>Mengintegrasikan teknologi dan inovasi dalam proses belajar mengajar untuk membekali siswa dengan keterampilan abad ke-21.</li><li>Mendorong siswa untuk memiliki kesadaran global dan memahami berbagai budaya dengan tetap menghargai identitas nasional.</li><li>Menyiapkan lulusan yang siap bersaing di tingkat global dengan kemampuan akademik yang unggul, keterampilan sosial yang baik, dan etika yang kuat.</li></ol>', '<p>Lightmind International School adalah lembaga pendidikan yang berkomitmen untuk memberikan pengalaman belajar berkualitas tinggi dengan pendekatan internasional. Sekolah ini mengintegrasikan kurikulum internasional yang inovatif dengan nilai-nilai lokal, menciptakan lingkungan belajar yang mendukung pengembangan akademis, sosial, dan emosional siswa.</p>', 'DJI_0007-copy-scaled.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `author_berita` varchar(255) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL,
  `gambar_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_kategori`, `judul_berita`, `slug`, `author_berita`, `deskripsi_berita`, `tanggal_berita`, `gambar_berita`) VALUES
(2, 11, 'Sehat Itu penting', 'Sehat-Itu-penting', 'Citra Febriawirti', 'Dengan olahraga membuat tubuh kita segar sehingga saat pembelajaran mata kita tidak mengantuk', '2024-09-23', 'images (5).jpeg'),
(3, 12, 'Acara Hari Guru Nasional dengan Meriah', 'Acara-Hari-Guru-Nasional-dengan-Meriah', 'Anisa', 'menyelenggarakan acara Hari Guru Nasional yang dihadiri oleh seluruh siswa, guru, dan orang tua. Acara yang diadakan di aula sekolah ini menampilkan berbagai pertunjukan seni dari siswa, termasuk paduan suara, tari tradisional,', '2024-09-30', 'images (2).jpeg'),
(5, 12, 'Seminar Kewirausahaan untuk Siswa', 'Seminar-Kewirausahaan-untuk-Siswa', 'Citra Febriawirti', 'Sekolah Ligmind International School akan menyelenggarakan seminar kewirausahaan pada tanggal 22 Oktober 2024. Seminar ini ditujukan untuk memberikan pengetahuan dan keterampilan tentang dunia bisnis kepada siswa. Pembicara tamu, seorang entrepreneur sukses, akan berbagi pengalaman dan tips tentang bagaimana memulai usaha sendiri. Acara ini diharapkan dapat memotivasi siswa untuk berani bermimpi dan mengejar karir dalam dunia bisnis.', '2024-09-16', 'blog_16890522620.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(11, 'Kesehatan'),
(12, 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(50) NOT NULL,
  `tanggal_kegiatan` date DEFAULT NULL,
  `deskripsi_kegiatan` text NOT NULL,
  `gambar_kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `judul_kegiatan`, `tanggal_kegiatan`, `deskripsi_kegiatan`, `gambar_kegiatan`) VALUES
(5, ' Festival Budaya Internasional', '2024-09-12', 'Kegiatan ini mengundang siswa untuk menampilkan budaya dari berbagai negara melalui pameran, pertunjukan seni, makanan, dan tradisi. Setiap kelas atau kelompok siswa dapat memilih negara dan mempresentasikan aspek budaya tersebut.', 'images (3).jpeg'),
(7, 'Program Pertukaran Pelajar', '2024-09-30', 'Mengadakan program pertukaran pelajar dengan sekolah-sekolah di negara lain untuk memberikan pengalaman belajar langsung dalam lingkungan yang berbeda.', 'images (4).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(11) NOT NULL,
  `email_kontak` varchar(255) NOT NULL,
  `facebook_kontak` varchar(255) NOT NULL,
  `instagram_kontak` varchar(255) NOT NULL,
  `telepon_kontak` varchar(255) NOT NULL,
  `alamat_kontak` text NOT NULL,
  `googlemap_link_kontak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `email_kontak`, `facebook_kontak`, `instagram_kontak`, `telepon_kontak`, `alamat_kontak`, `googlemap_link_kontak`) VALUES
(2, 'febriawirticitra@gmail.com', 'func_string_substr.asp', 'citra', '081378238345', 'padang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2666196122977!2d100.38663777364508!3d-0.9528353353498165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b90bd1a8788f%3A0x90288b7bbe595a1a!2sMediatama%20Web%20-%20Kursus%20Komputer%2C%20Pembuatan%20Web%20dan%20Mobile!5e0!3m2!1sid!2sid!4v1725945119904!5m2!1sid!2sid');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `foto`) VALUES
(3, 'admin', '123', 'Citra Febriaa', 'Untitled design (16).png'),
(4, 'admin1', '123', 'admin1', 'Untitled design (6).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
