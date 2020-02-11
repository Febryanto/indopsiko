-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2020 at 08:56 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_indopsiko`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(30) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `judul` text,
  `subjudul` text,
  `isi` text,
  `status` enum('0','1') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) DEFAULT NULL,
  `updated_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id_klien` int(30) NOT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `logo` varchar(255) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telp` varchar(30) DEFAULT NULL,
  `alamat` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) DEFAULT NULL,
  `updated_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id_klien`, `nama_perusahaan`, `deskripsi`, `logo`, `website`, `email`, `telp`, `alamat`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Lazada Express', 'Lazada adalah Situs Jualan & Belanja Online Produk Elektronik', '21234.jpg', 'www.lazada.co.id', 'hrd@lazada.co.id', '021-987287', 'Jl. Mh Thamrin Jakarta Pusat', NULL, '2020-01-13 11:32:00', NULL, 'ANDI FEBRIANTO'),
(2, 'PT. Yamaha', NULL, 'logo_yamaha.png', 'www.yamaha.com', NULL, NULL, NULL, NULL, '2020-01-17 00:03:41', NULL, 'admin'),
(3, 'PT. Mayora', NULL, 'logo_mayora.png', NULL, NULL, NULL, NULL, NULL, '2020-01-13 18:21:25', NULL, NULL),
(4, 'PT. Kimia Farma', NULL, 'logo_kimia_farma.png', NULL, NULL, NULL, NULL, NULL, '2020-01-13 18:22:00', NULL, NULL),
(5, 'PT. BlueScope Building Indonesia', 'PT.BlueScope Building Indonesia', '85823.jpg', NULL, 'hrd@bluescope.com', NULL, 'JL.', NULL, '2020-01-20 20:55:33', 'admin', 'admin'),
(6, 'PT. Dua Berlian', '.', '26724.jpg', 'www.duaberlian.com', 'duber@duaberlian.com', NULL, 'PT. Dua Berlian\r\nKawasan Industri Pulogadung Jalan Rawa Sumur 2 Blok BB Kav. 8A - 8B Pulogadung, RT.5/RW.9, Jatinegara, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13260', NULL, NULL, 'admin', NULL),
(7, 'PT. Fajar Surya Wisesa', '.', '35047.jpg', 'www.fajarpaper.com', NULL, '021 344 1316', 'Jln. Abdul Muis 30, Jakarta Pusat 10160, Indonesia.', NULL, NULL, 'admin', NULL),
(8, 'PT Citra Mitra Nusantara', '.', '56103.png', 'www.cmn.co.id', NULL, '081999102888', 'Jl. Sunburst Lot II No. 3\r\nBumi Serpong Damai (BSD),\r\nSerpong - Tangerang Selatan', NULL, NULL, 'admin', NULL),
(9, 'PT. Angkasa Pura Kargo', '.', '99667.png', 'www.angkasapurakargo.co.id', 'corsec@angkasapurakargo.co.id', '(021) 2921 5821', 'Komplek Gedung 528, Terminal Kargo Bandara Soekarno-Hatta, Tangerang 19120', NULL, '2020-01-20 21:13:00', 'admin', 'admin'),
(10, 'PT. Inbisco Niagatama Semesta (Mayora Group)', '.', '60911.png', NULL, 'cnstla.aos@mayora.co.id', '(021) 89321299', 'Jl. Sultan Hasanudin No.190 RT 002/001, Setiadarma, Kec. Tambun Sel., Bekasi, Jawa Barat 17510', NULL, '2020-01-21 02:11:27', 'admin', 'admin'),
(11, 'PT. K & D ELECTRONICS', '.', '29892.png', 'www.kandd-id.com', 'info@kandd.co.jp', '(+62-21) 8983-6158', 'Jl. Industri Selatan 1 Blok PP 2 D Kawasan Industri\r\nJababeka 2 Cikarang Selatan Bekasi 17550, Indonesia', NULL, '2020-01-20 21:24:02', 'admin', 'admin'),
(12, 'PT. Makindo Perdana', '.', '17212.png', 'www.makindo-ct.com', 'marketing@makindo-securities.com', '(62-21) 572-2111', 'Wisma GKBI\r\nJl. Jenderal Sudirman No.28 Jakarta 10210', NULL, NULL, 'admin', NULL),
(13, 'PT. Masura Graha Trikencana', '.', '67840.png', 'www.masuya.co.id', 'japanese@masuya.co.id', '021 6509130', 'Jl. Agung Karya IV Blok B. No.22. Sunter Agung Podomoro, Jakarta', NULL, NULL, 'admin', NULL),
(14, 'PT. Lastana Express Indonesia', '.', '76105.jpg', 'www.lazada.co.id', NULL, '021-60891974', 'Jl. H.R. Rasuna Said X-2 No. 1, Jakarta , 12950, Indonesia', NULL, NULL, 'admin', NULL),
(15, 'PT. Digital Truk Indonesia', '.', '74496.png', 'www.ritase.com', 'sales@ritase.com', '(021) 5082 0876', 'Kawasan Mega Kuningan Lot E4-7,\r\nKuningan Timur, Jakarta Selatan, DKI Jakarta 12950', NULL, NULL, 'admin', NULL),
(16, 'PT. MU And SC Trading', '.', '83323.png', NULL, NULL, NULL, 'Jl. Infinia Park, RT.1/RW.7, Manggarai, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12850', NULL, NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(30) NOT NULL,
  `id_klien` int(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `dibuka` date DEFAULT NULL,
  `ditutup` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) DEFAULT NULL,
  `updated_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `id_klien`, `jabatan`, `status`, `deskripsi`, `dibuka`, `ditutup`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 1, 'Sales', '1', '<p>Kualifikasi Umum :</p>\r\n\r\n<ol>\r\n	<li>Minimal SMA Sederajat</li>\r\n	<li>Fresh Graduate</li>\r\n	<li>Berpenampilan Menarik</li>\r\n</ol>', NULL, NULL, NULL, '2020-01-23 17:27:04', NULL, 'ANDI FEBRIANTO'),
(3, 2, 'driver', '1', '<p>Kualifikasi Umum :</p>\r\n\r\n<ol>\r\n	<li>Pendidikan Min SMA sederajat</li>\r\n	<li>Usia Max 35</li>\r\n	<li>Pengalaman minimal 1 tahun</li>\r\n	<li>Mampu Mengendarai Mobil Matic mewah lebih diutamakan</li>\r\n	<li>Berpenampilan Rapi dan Bersih</li>\r\n</ol>', '2020-01-01', '2020-01-31', NULL, '2020-01-23 17:03:58', NULL, 'ANDI FEBRIANTO'),
(4, 3, 'IT Staff', '1', '<p>Kualifikasi Umum</p>\r\n\r\n<ol>\r\n	<li>Pendidikan S1 Teknik Informatika ;</li>\r\n	<li>Menguasai Jaringan ;</li>\r\n	<li>Menguasai Server ;</li>\r\n	<li>Menguasai Storage ;</li>\r\n	<li>Jujur, displin dan bertanggung Jawab.</li>\r\n</ol>', '2020-01-01', '2020-01-31', NULL, '2020-01-24 07:02:14', NULL, 'admin'),
(6, 11, 'Manager', '1', '<p>Kualifikasi Umum :</p>\r\n\r\n<ol>\r\n	<li>Pendidikan S3</li>\r\n	<li>Usia Max 35</li>\r\n	<li>Pengalaman minimal 1 tahun</li>\r\n	<li>Mampu Mengendarai Mobil Matic mewah lebih diutamakan</li>\r\n	<li>Berpenampilan Menarik</li>\r\n	<li>Jujur, displin, dan bertanggung Jawab</li>\r\n</ol>', NULL, NULL, NULL, '2020-01-24 07:00:17', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` int(255) NOT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `pendidikan` enum('SD','SMP','SMA','S1','S2','S3') NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(30) DEFAULT NULL,
  `sim` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `nama_ibu_kandung` varchar(100) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `alamat` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) DEFAULT NULL,
  `updated_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `posisi`, `nama_lengkap`, `nik`, `npwp`, `pendidikan`, `email`, `no_hp`, `sim`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ibu_kandung`, `cv`, `alamat`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(23, 'IT NETWORKS', 'Ferry Fernando', '3276162536353736', '8263573363836', 'S1', 'ferry.unas@gmail.com', '081283323946', '25363537464846', 'Jakarta', '2001-09-17', 'L', 'TES', 'Ferry Fernando13273.pdf', 'Jalan Menuju rumah anda rt/rw dan no rumah.', NULL, NULL, 'Ferry Fernando', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(30) NOT NULL,
  `judul` text,
  `subjudul` text,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) DEFAULT NULL,
  `updated_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `subjudul`, `isi`, `foto`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(9, 'TESTING', 'TESTING', '<p>TES BUAT PENGUMUMAN, Konten ini berisikan info loker dan lain sebagainya.</p>', '48764.jpg', '1', NULL, '2020-01-23 08:11:37', 'admin', 'admin'),
(10, 'TESTING-1', 'TESTING-1', '<p>tes buat pengumuman, konten ini berisikan info loker dan lain sebagainya.</p>', '64954.jpg', '1', NULL, '2020-01-23 08:11:55', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `proper`
--

CREATE TABLE `proper` (
  `id_profil` int(30) NOT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `motto` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telp` varchar(30) DEFAULT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(30) DEFAULT NULL,
  `updated_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proper`
--

INSERT INTO `proper` (`id_profil`, `nama_perusahaan`, `motto`, `logo`, `website`, `email`, `telp`, `alamat`, `foto`, `deskripsi`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'PT. Indopsiko Indonesia', 'Pembangunan Manusia Seutuhnya', '38644.jpeg', 'www.indopsiko.com', 'hrd@indopsiko.com', '(021) 861-5604', 'Jl. Raya Pahlawan Revolusi No. 59 Jakarta Timur', NULL, NULL, '2020-01-23 08:06:10', '2020-01-23 01:06:10', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `created_at`, `updated_at`, `created_by`, `updated_by`, `desc`) VALUES
(5, '14351.jpg', NULL, NULL, 'admin', NULL, NULL),
(10, '58473.jpeg', NULL, NULL, 'admin', NULL, NULL),
(11, '92443.jpeg', NULL, NULL, 'admin', NULL, NULL),
(12, '62958.jpeg', NULL, NULL, 'admin', NULL, NULL),
(17, '75441.jpg', NULL, NULL, 'admin', NULL, NULL),
(18, '35101.jpeg', NULL, NULL, 'admin', NULL, NULL),
(21, '94799.jpg', NULL, NULL, 'admin', NULL, NULL),
(23, '19587.jpg', NULL, NULL, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `jabatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ANDI FEBRIANTO', 'snowden', 'andy29febryanto@gmail.com', NULL, '$2y$10$36U8CK7YiTxjocAzO7zlyeRhuTWLg6HjptSMn7JDJrsBcE/fVmzdW', 'ADMIN', NULL, '2019-12-29 10:31:32', '2019-12-29 10:31:32'),
(2, 'admin', 'admin', 'hrd@indopsiko.com', NULL, '$2y$10$5BKo.9X23w5QpMWnQYiDqeKp.DK4LhJCNpaApZbWMzC/xB0wkbDWi', 'ADMIN', NULL, '2020-01-05 22:32:01', '2020-01-05 22:32:01'),
(3, 'Tes', 'Tes', 'tes.123@gmail.com', NULL, '$2y$10$KGKNsnuzXhmZ6ew3tBYQveN.QNfFF4aoDNMEeBeodhk9vgR3a0KWm', 'ADMIN', NULL, '2020-01-06 21:26:26', '2020-01-06 21:26:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id_klien`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `proper`
--
ALTER TABLE `proper`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id_klien` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_pelamar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `proper`
--
ALTER TABLE `proper`
  MODIFY `id_profil` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
