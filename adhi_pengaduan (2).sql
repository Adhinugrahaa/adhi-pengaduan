-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 09:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adhi_pengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(4, 'lingkungan'),
(6, 'kebersihan'),
(8, 'kehutanan');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `nik` char(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `active` enum('active','suspended') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nik`, `nama`, `username`, `password`, `telepon`, `active`) VALUES
(31, '543554', 'adhi', 'adhi', '$2y$10$h5eCdscqhWGDlrH5c/STMe0Y4ZoNSHJrYNKKkWePvf7WfWiRv4Gye', '0875654454', 'active'),
(32, '54535555', 'novi', 'novi', '$2y$10$L.nU1TIlmSWZoIoeL7iZmuoj2bOglxvIYejr93D6XY37V0Hm7/xTu', '0864353', 'active'),
(33, '87654321', 'nopai', 'nopay', '$2y$10$obdhW3uJgu.3eJWkeanv2OvAcoFl.7VfF14jH/Ne82KABq5U1S6PO', '0896746545343', 'active'),
(34, '574759667', 'nopnop', 'nopnop', '$2y$10$23f7KZs5NHADIiICgH3b/.1WLBHFlUq8IZq0Mga5/1eFVSLPxZpJO', '08968675654', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `subkategori` varchar(128) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `id_pengaduan`, `tanggal_pengaduan`, `nik`, `kategori`, `subkategori`, `isi_laporan`, `foto`, `status`) VALUES
(5, 21, '2023-02-27', '64645', '4', '5', ' pembuangan sampah di pinggir jalan', '', 'proses'),
(6, 25, '2023-02-27', '5353454', '9', '8', ' dimas iqto klitih di jalan parangtritis membawa clurit bermotiv kacok', '', 'selesai'),
(7, 26, '2023-02-27', '7366363737', '6', '5', ' pembuangan sampah sembarangan ', '', 'selesai'),
(8, 28, '2023-02-28', '3546457568', '6', '5', ' sampah menumpuk di pinggir jalan', '', 'selesai'),
(9, 32, '2023-03-14', '54535555', '4', '5', ' samoah', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  `active` enum('active','suspended') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `id_petugas`, `nama_petugas`, `username`, `password`, `telepon`, `level`, `active`) VALUES
(9, 0, 'heri', 'heri', '$2y$10$tVpKZK3viPNPJnHvj8JKL.S3cIa8NihygsDVOo8Q8M.TA1v9Bs2/a', '088867567', 'admin', 'active'),
(10, 0, 'firman', 'firman', '$2y$10$BXkZXfSHPeEq6nmz68neOu5NR6.LaLtr2KnnTFNhTCaPjECs5pUwy', '08667867574', 'admin', 'active'),
(11, 0, 'novi', 'novi', '$2y$10$4AgSLrmGt9NzhhM/GoHFUOWGufTL3rgEw1x7v9Ku6GzLglYlIPOsi', '08595848443', 'admin', 'active'),
(12, 0, 'didik', 'didik', '$2y$10$lGFtaxsAKxwO9mig.VHInuhGNef3fRTyBsVHraN33To/j.ezXYxPa', '0886756567', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subkategori`
--

CREATE TABLE `subkategori` (
  `subkategori_id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `subkategori` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkategori`
--

INSERT INTO `subkategori` (`subkategori_id`, `id_kategori`, `subkategori`) VALUES
(5, 3, 'sampah'),
(7, 8, 'penebangan '),
(8, 9, 'tawuran '),
(9, 6, 'sampah'),
(10, 4, 'longsor');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id` int(11) NOT NULL,
  `id_tanggapan` int(128) NOT NULL,
  `id_pengaduan` int(128) NOT NULL,
  `id_petugas` int(128) NOT NULL,
  `tanggal_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id`, `id_tanggapan`, `id_pengaduan`, `id_petugas`, `tanggal_tanggapan`, `tanggapan`) VALUES
(1, 0, 22, 0, '2023-02-27', 'akan segera dilakukan tindakan'),
(2, 0, 23, 0, '2023-02-27', 'sudah dilakukan tindakan'),
(3, 0, 21, 0, '2023-02-27', 'akan segera dilakukan tindakan'),
(4, 0, 25, 0, '2023-02-27', 'okeee'),
(5, 0, 26, 0, '2023-02-28', 'akan segera dilakukan tindakan'),
(6, 0, 28, 0, '2023-02-28', 'sudah dilakukan tindakan'),
(7, 0, 32, 0, '2023-03-14', 'akan segera dilakukan tindakan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`subkategori_id`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `subkategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
