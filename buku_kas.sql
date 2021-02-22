-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 05:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(6, '1612584869_c775adf3497aca1d165d0db15ce6bbe4.jpg', 'Nida Nanda Silvi', NULL, NULL),
(7, '1612584889_cfa53140faeef59d50bc54f99a23c50d.jpg', 'Widyawati Nur Sholikhah', NULL, NULL),
(8, '1612584909_8b407e44e802b430c3b3395028f60529.jpg', 'Nurul Nabila', NULL, NULL),
(9, '1612584931_88bb168c15757d48c08cc3ede047908e.jpg', 'Regita Cahyani Daniastiningrum Samodra', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` int(40) NOT NULL,
  `pegawai_nama` varchar(255) NOT NULL,
  `pegawai_jabatan` varchar(255) NOT NULL,
  `pegawai_umur` int(40) NOT NULL,
  `pegawai_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `pegawai_nama`, `pegawai_jabatan`, `pegawai_umur`, `pegawai_alamat`) VALUES
(4, 'likha', 'bendahara', 20, 'gresik'),
(7, 'suparjo', 'staf', 33, 'surabaya'),
(8, 'Bila', 'mahasiswa', 21, 'gresik'),
(9, 'regita', 'mahasiswa', 22, 'makassar'),
(10, 'nida', 'mahasiswa', 21, 'gresik');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `pemasukan_id` int(40) NOT NULL,
  `sumber_pemasukan` int(40) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`pemasukan_id`, `sumber_pemasukan`, `nominal`, `tanggal`, `keterangan`) VALUES
(4, 765530, 2000000, '2021-02-01 00:00:00', 'simpan buat lebaran'),
(5, 765532, 3000000, '2021-02-04 00:00:00', 'simpan buat masa depan');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `pengeluaran_id` int(40) NOT NULL,
  `sumber_pengeluaran` int(40) NOT NULL,
  `nominal` int(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`pengeluaran_id`, `sumber_pengeluaran`, `nominal`, `tanggal`, `keterangan`) VALUES
(4, 765527, 1000000, '2021-02-02 00:00:00', 'pinjam bayar sesuatu'),
(5, 765531, 1500000, '2021-02-05 00:00:00', 'pinjam buat nonton');

-- --------------------------------------------------------

--
-- Table structure for table `sumber`
--

CREATE TABLE `sumber` (
  `id` int(40) NOT NULL,
  `nama` varchar(115) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sumber`
--

INSERT INTO `sumber` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(765527, 'widyawati nur sholikhah', '2020-07-11 22:30:53', '2020-07-12 04:54:38'),
(765530, 'Nurul Nabila', '2021-02-05 21:04:11', '2021-02-05 21:04:11'),
(765531, 'Nida Nanda Silvi', '2021-02-05 21:04:48', '2021-02-05 21:04:48'),
(765532, 'Regita Cahyani Daniastiningrum Samodra', '2021-02-05 21:05:12', '2021-02-05 21:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remeber_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remeber_token`, `updated_at`, `created_at`) VALUES
(1, 'likha', 'likha@gmail.com', 'likha', NULL, NULL, NULL),
(2, 'admin', 'admin@gmail.com', '$2y$10$OoASeDt0fEqsrKfFoS5pGOEcnP6ZSanlulPhIq/ayP0vGd3BBj90G', NULL, '2020-07-12 18:39:40', '2020-07-12 18:39:40'),
(3, 'widyalikha', 'widyalikha@gmail.com', '$2y$10$NzWiQP.JqGn45hAXTiFGH.0hFO4nDoG9KEq5pAW31gedIbdYaFfem', NULL, '2021-02-05 20:15:59', '2021-02-05 20:15:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`pemasukan_id`),
  ADD KEY `pemasukan_sumber_pemasukan` (`sumber_pemasukan`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`pengeluaran_id`),
  ADD KEY `pengeluaran_sumber_pengeluaran` (`sumber_pengeluaran`);

--
-- Indexes for table `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `pemasukan_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `pengeluaran_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sumber`
--
ALTER TABLE `sumber`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=765533;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `pemasukan_sumber_pemasukan` FOREIGN KEY (`sumber_pemasukan`) REFERENCES `sumber` (`id`);

--
-- Constraints for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_sumber_pengeluaran` FOREIGN KEY (`sumber_pengeluaran`) REFERENCES `sumber` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
