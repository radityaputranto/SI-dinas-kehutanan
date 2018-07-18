-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 09:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kehutanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `ID_ABSEN` int(11) NOT NULL,
  `NIP_EMP` varchar(200) DEFAULT NULL,
  `SCAN_KELUAR` time DEFAULT NULL,
  `SCAN_LEMBUR` time DEFAULT NULL,
  `SCAN_PUL_CPT` time DEFAULT NULL,
  `SCAN_TELAT` time DEFAULT NULL,
  `SCAN_MASUK` time DEFAULT NULL,
  `TGL_ABSEN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `ID_DEPT` int(11) NOT NULL,
  `NIP_MANAGER` int(11) DEFAULT NULL,
  `JUM_EMP` varchar(100) DEFAULT NULL,
  `NAMA_DEPT` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`ID_DEPT`, `NIP_MANAGER`, `JUM_EMP`, `NAMA_DEPT`) VALUES
(1, NULL, NULL, 'SKR'),
(2, NULL, NULL, 'Plano'),
(3, NULL, NULL, 'PHPL'),
(4, NULL, NULL, 'PKHKA'),
(5, NULL, NULL, 'RLPS');

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id_lembur` int(11) NOT NULL,
  `eselon` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `nominal` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id_lembur`, `eselon`, `golongan`, `nominal`, `created_at`, `updated_at`) VALUES
(1, 'Staf', 'I', 50000, '2018-05-29 08:23:08', '2018-05-29 08:25:18'),
(2, 'Staf', 'II', 35000, '2018-05-30 00:56:21', '2018-05-30 00:56:21'),
(3, 'Staf', 'III', 45000, '2018-05-30 00:56:36', '2018-05-30 00:56:36'),
(4, 'Staf', 'IV', 50000, '2018-05-30 00:57:13', '2018-05-30 00:57:13'),
(5, 'Eselon III', 'IV', 70000, '2018-05-30 00:57:45', '2018-05-30 00:57:45'),
(6, 'Eselon III', 'III', 65000, '2018-05-30 00:58:01', '2018-05-30 00:58:01'),
(7, 'Eselon IV', 'IV', 60000, '2018-05-30 00:58:23', '2018-05-30 00:58:23'),
(8, 'Eselon IV', 'III', 65000, '2018-05-30 00:58:38', '2018-05-30 00:58:38'),
(9, 'I', '', 80000, '2018-05-30 07:59:51', '0000-00-00 00:00:00'),
(10, 'II', '', 75000, '2018-05-30 07:59:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `NIP_MANAGER` int(11) NOT NULL,
  `ID_DEPT` int(11) DEFAULT NULL,
  `TGL_MENJABAT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pajak`
--

CREATE TABLE `pajak` (
  `ID_PAJAK` int(11) NOT NULL,
  `PJK_UANG_MKN` double DEFAULT NULL,
  `PPH_DAERAH` double DEFAULT NULL,
  `PPH_PRESTASI` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP_EMP` varchar(200) NOT NULL,
  `ID_DEPT` int(11) DEFAULT NULL,
  `NIP_MANAGER` int(11) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `ALAMAT_EMP` varchar(200) DEFAULT NULL,
  `GENDER` varchar(100) DEFAULT NULL,
  `GOLONGAN_EMP` varchar(200) DEFAULT NULL,
  `ESELON_EMP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `NAMA_EMP` varchar(200) DEFAULT NULL,
  `NOTELP_EMP` varchar(200) DEFAULT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DELETED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `REMEMBER_TOKEN` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP_EMP`, `ID_DEPT`, `NIP_MANAGER`, `admin`, `ALAMAT_EMP`, `GENDER`, `GOLONGAN_EMP`, `ESELON_EMP`, `NAMA_EMP`, `NOTELP_EMP`, `CREATED_AT`, `UPDATED_AT`, `DELETED_AT`, `REMEMBER_TOKEN`, `password`, `email`) VALUES
('196006271986102001', 1, NULL, 0, NULL, 'pria', 'I A', 'Staf', 'Ir. DEWI J. PUTRIATNI, MSc', '87703219', '2018-05-31 08:23:14', '2018-05-31 01:23:14', '2018-05-30 09:19:49', NULL, '$2y$10$C843d3jWAdes20RvPJO9FOOdpg0r4/OqwNeYQQU21GBayv91jaauG', 'dewi_skr@kehutanan.com'),
('196012161989031005', 1, NULL, 0, NULL, 'pria', 'I A', 'Staf', 'Ir. PUTUT ADJI SURJANTO, MM', NULL, '2018-05-30 02:20:26', '2018-05-30 02:20:26', '2018-05-30 09:20:26', NULL, '$2y$10$mJxPGwWSZbOSM5/PoXTqheojTHkjWkKi1o3IwdUrDxh8WR2DrCriO', 'putut_skr@kehutanan.com'),
('196306251986032005', 1, NULL, 0, NULL, 'wanita', 'IV A', 'Eselon IV', 'WIWIK NURHAYATI, SH, MM', NULL, '2018-05-30 02:21:14', '2018-05-30 02:21:14', '2018-05-30 09:21:14', NULL, '$2y$10$0cPBVecAJdNjZZNZWBzuy.epVH2ReJXnUKZg1iWmP4yBfvQbFW09y', 'wiwik_skr@kehutanan.com'),
('196507211994031009', 2, NULL, 0, NULL, 'pria', 'IV B', 'Eselon III', 'Ir. TOAT TRIDJONO, M.Si', NULL, '2018-05-30 02:24:20', '2018-05-30 02:24:20', '2018-05-30 09:24:20', NULL, '$2y$10$Q6WxCzTWKVYv4sl/h9PCo.voGD3QuVByD9ErCbOBxM1AvZSPr5AjG', 'toat_plano@kehutanan.com'),
('197310081999032008', 2, NULL, 0, NULL, 'wanita', 'IV A', 'Eselon IV', 'DYAH WARDIYANTI, SP, MSi', NULL, '2018-05-30 02:25:26', '2018-05-30 02:25:26', '2018-05-30 09:25:26', NULL, '$2y$10$7zqBzQO9VMvEOVLlqobd.eHt1uhDmyyqB6xQi1hUh4jaTiBecuXSC', 'dyah_plano@kehutanan.com'),
('197609022000031002', 1, NULL, 0, NULL, 'pria', 'IV A', 'Eselon IV', 'SAPTO YUWONO, S.Hut, MM', NULL, '2018-05-30 02:23:21', '2018-05-30 02:23:21', '2018-05-30 09:23:21', NULL, '$2y$10$XUoCC/Wdm.eZ57HWAN3/rev7jkWL.mDepFRHM7Mv60TZ5uddqGgI2', 'sapto_skr@kehutanan.com'),
('197703302000032002', 1, NULL, 0, NULL, 'wanita', 'IV A', 'Eselon IV', 'ANIS MUFIDAH, S.Hut, MM', NULL, '2018-05-30 02:22:10', '2018-05-30 02:22:10', '2018-05-30 09:22:10', NULL, '$2y$10$cNRs/.hA96P7Ff0tnb609eStEaUsTzgj12QWcL6A/7GrtqdBoQTV6', 'anis_skr@kehutanan.com'),
('2103151060', 2, NULL, 0, NULL, NULL, NULL, '', 'radit', NULL, '2018-05-23 07:35:16', '2018-05-14 02:34:21', '0000-00-00 00:00:00', 'QkfcU4BLa1WvM0LQ2rkAm7OUHSSgdhwrtxNqPc27NDVo0jhQhawrCshNTw76', '$2y$10$hhx/bkjMrCYIhUf0P5G1xOYHdGqCZ19hBtKkdy5LlAOX16NXPdWby', 'radit@tess.com'),
('2103151062', 5, NULL, 1, NULL, NULL, NULL, '', 'didit', NULL, '2018-05-23 07:33:33', '2018-05-14 02:36:52', '0000-00-00 00:00:00', 'TIVQWAP2vJowX1zXN0c8ZUbZo7617rlfCCdLSs6zgjHfjEfca84cGAm61ccp', '$2y$10$fVysEM30cgGvvUOdg4ScD.rrcvvrElRGgjInFO0CmKKvwkJxcoKj2', 'radit2@tess.com');

-- --------------------------------------------------------

--
-- Table structure for table `potongan_tunjangan`
--

CREATE TABLE `potongan_tunjangan` (
  `id_potongan` int(11) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `eselon` varchar(255) NOT NULL,
  `tidak_masuk_tk` float DEFAULT NULL,
  `tidak_masuk_dk` float DEFAULT NULL,
  `telat_psw_1` float DEFAULT NULL,
  `telat_psw_2` float DEFAULT NULL,
  `telat_psw_3` float DEFAULT NULL,
  `telat_psw_4` float DEFAULT NULL,
  `tdk_absen` float DEFAULT NULL,
  `telat_senam` float DEFAULT NULL,
  `tdk_senam` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potongan_tunjangan`
--

INSERT INTO `potongan_tunjangan` (`id_potongan`, `golongan`, `eselon`, `tidak_masuk_tk`, `tidak_masuk_dk`, `telat_psw_1`, `telat_psw_2`, `telat_psw_3`, `telat_psw_4`, `tdk_absen`, `telat_senam`, `tdk_senam`, `created_at`, `updated_at`) VALUES
(1, 'I', 'Staf', 28000, 14000, 2000, 4000, 7000, 9000, 12000, 75000, 100000, '2018-05-29 20:37:31', '2018-05-29 21:37:10'),
(2, 'II', 'Staf', 32000, 16000, 2500, 5000, 8000, 11000, 13000, 75000, 100000, '2018-05-29 20:49:26', '2018-05-29 20:49:26'),
(3, 'III', 'Staf', 40000, 20000, 3000, 6000, 9000, 12000, 15000, 75000, 100000, '2018-05-30 01:02:32', '2018-05-30 01:02:32'),
(4, 'IV', 'Staf', 48000, 24000, 3500, 7000, 11000, 15000, 18000, 75000, 100000, '2018-05-30 01:03:35', '2018-05-30 01:03:35'),
(5, 'III', 'Eselon IV', 60000, 30000, 4500, 9000, 14000, 18000, 23000, 75000, 100000, '2018-05-30 01:04:18', '2018-05-30 01:04:18'),
(6, 'IV', 'Eselon IV', 68000, 34000, 5000, 10000, 16000, 21000, 27000, 75000, 100000, '2018-05-30 01:05:05', '2018-05-30 01:05:05'),
(7, 'III', 'Eselon III', 80000, 40000, 6000, 12000, 19000, 25000, 31000, 75000, 100000, '2018-05-30 01:05:48', '2018-05-30 01:05:48'),
(8, 'IV', 'Eselon III', 100000, 50000, 7000, 15000, 23000, 31000, 39000, 75000, 100000, '2018-05-30 01:06:32', '2018-05-30 01:06:32'),
(9, 'IV', 'Eselon II', 152, 76000, 11000, 23000, 35000, 47000, 59000, 75000, 100000, '2018-05-30 01:07:19', '2018-05-30 01:07:19'),
(10, '', 'I', 288000, 144000, 22000, 45000, 68000, 90000, 113000, 75000, 100000, '2018-05-30 08:08:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `ID_RULE` int(11) NOT NULL,
  `INTERVAL_WAKTU` date DEFAULT NULL,
  `KETERANGAN_ABSENSI` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan`
--

CREATE TABLE `tunjangan` (
  `id_tunjangan` int(11) NOT NULL,
  `eselon` varchar(200) NOT NULL,
  `golongan` varchar(200) NOT NULL,
  `tun_daerah` double NOT NULL,
  `tun_prestasi` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunjangan`
--

INSERT INTO `tunjangan` (`id_tunjangan`, `eselon`, `golongan`, `tun_daerah`, `tun_prestasi`, `created_at`, `updated_at`) VALUES
(1, 'Staf', 'I A', 412000, 1919000, '2018-05-24 21:14:41', '2018-05-28 08:29:10'),
(2, 'Staf', 'I B', 447000, 1985000, '2018-05-25 00:03:27', '2018-05-25 00:03:27'),
(3, 'Staf', 'I C', 481000, 2051000, '2018-05-25 00:06:38', '2018-05-25 00:06:38'),
(4, 'Staf', 'I D', 515000, 2117000, '2018-05-25 00:07:01', '2018-05-25 00:07:01'),
(5, 'Staf', 'II A', 585000, 2139000, '2018-05-25 00:07:24', '2018-05-25 00:07:24'),
(6, 'Staf', 'II B', 619000, 2205000, '2018-05-25 00:08:08', '2018-05-25 00:08:08'),
(7, 'Staf', 'II C', 653000, 2271000, '2018-05-25 00:08:27', '2018-05-25 00:08:27'),
(9, 'Staf', 'II D', 688000, 2337000, '2018-05-25 00:11:28', '2018-05-25 00:11:28'),
(10, 'Staf', 'III A', 801000, 2588000, '2018-05-25 00:11:59', '2018-05-25 00:11:59'),
(11, 'Staf', 'III B', 838000, 2658000, '2018-05-25 00:12:19', '2018-05-25 00:12:19'),
(12, 'Staf', 'III C', 875000, 2727000, '2018-05-25 00:12:51', '2018-05-25 00:12:51'),
(13, 'Staf', 'III D', 911000, 2798000, '2018-05-25 00:13:07', '2018-05-25 00:13:07'),
(14, 'Staf', 'IV A', 1095000, 3457000, '2018-05-25 00:13:32', '2018-05-25 00:13:32'),
(15, 'Staf', 'IV B', 1136000, 3535000, '2018-05-25 00:13:53', '2018-05-25 00:13:53'),
(16, 'Staf', 'IV C', 1623000, 3613000, '2018-05-25 00:14:30', '2018-05-25 00:14:30'),
(17, 'Staf', 'IV D', 1217000, 3691000, '2018-05-25 00:14:57', '2018-05-25 00:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_emp`
--

CREATE TABLE `tunjangan_emp` (
  `ID_TUNJANGAN_EMP` int(11) NOT NULL,
  `NIP_EMP` varchar(200) DEFAULT NULL,
  `TUNJANGAN_DAERAH` double DEFAULT NULL,
  `TUNJANGAN_PRESTASI` double DEFAULT NULL,
  `UANG_MKN` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `NAME`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'radit', 'radit@tes.com', '$2y$10$kPsmrkRgxfDUeDXUkJ/1/OaTlAH/384uhqaObQyckawEXo0pviFUC', 'AuBodfoQIJuLpQ9h7IJkvGPlipD77moZqFGAH1Mvkgt3wDJGZVFHNDUOET1v', '2018-04-08 20:58:13', '2018-04-08 20:58:13', 1),
(2, 'admin radit', 'admin@tes.com', '$2y$10$AvCh5oJ2KKNZ3wKki/snB.wXg0ynL9KVgr/JLzG/efnDTT29dFLc2', 'D4zB1WEehUJlQA03YoVz4PnaCWYJIUWyIHuZwaenL5ZVaRNIyXsIiMwE0VU9', '2018-04-08 21:39:19', '2018-04-08 21:39:19', 1),
(3, 'admin123', 'admin@admin.com', '$2y$10$mQGEvtEX4n5dhvDqudm6zOeUk6Sabnkxnim9kKXKdArWEsK5Q10si', 'jgetrUFYWyjWqK0CoKDLG7cbMojZDC6CKRBanSe7skh3wnIEFmaBdsx5zsxm', '2018-04-17 06:12:57', '2018-04-17 06:12:57', 1),
(4, 'radit', 'radit@bejan.com', '$2y$10$1cuRXsmCt1iUWLO/okbSg.E.gLKEaOoISTEi5WEVHVNkdhq18DINi', NULL, '2018-04-29 18:44:23', '2018-04-29 18:44:23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`ID_ABSEN`),
  ADD KEY `FK_ABSENSI_KERJA_PEGAWAI` (`NIP_EMP`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`ID_DEPT`),
  ADD KEY `FK_MANAGER_DI_DEPARTMENT` (`NIP_MANAGER`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id_lembur`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`NIP_MANAGER`),
  ADD KEY `FK_MANAGER_DI_DEPARTMENT2` (`ID_DEPT`);

--
-- Indexes for table `pajak`
--
ALTER TABLE `pajak`
  ADD PRIMARY KEY (`ID_PAJAK`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP_EMP`),
  ADD KEY `FK_ATASAN_PER_DEPARTEMEN` (`NIP_MANAGER`),
  ADD KEY `FK_PEGAWAI_BEKERJA_DI_DEPARTMENT` (`ID_DEPT`);

--
-- Indexes for table `potongan_tunjangan`
--
ALTER TABLE `potongan_tunjangan`
  ADD PRIMARY KEY (`id_potongan`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`ID_RULE`);

--
-- Indexes for table `tunjangan`
--
ALTER TABLE `tunjangan`
  ADD PRIMARY KEY (`id_tunjangan`);

--
-- Indexes for table `tunjangan_emp`
--
ALTER TABLE `tunjangan_emp`
  ADD PRIMARY KEY (`ID_TUNJANGAN_EMP`),
  ADD KEY `FK_TUNJANGAN_PEGAWAI` (`NIP_EMP`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lembur`
--
ALTER TABLE `lembur`
  MODIFY `id_lembur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `potongan_tunjangan`
--
ALTER TABLE `potongan_tunjangan`
  MODIFY `id_potongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tunjangan`
--
ALTER TABLE `tunjangan`
  MODIFY `id_tunjangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `FK_ABSENSI_KERJA_PEGAWAI` FOREIGN KEY (`NIP_EMP`) REFERENCES `pegawai` (`NIP_EMP`);

--
-- Constraints for table `departemen`
--
ALTER TABLE `departemen`
  ADD CONSTRAINT `FK_MANAGER_DI_DEPARTMENT` FOREIGN KEY (`NIP_MANAGER`) REFERENCES `manager` (`NIP_MANAGER`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `FK_MANAGER_DI_DEPARTMENT2` FOREIGN KEY (`ID_DEPT`) REFERENCES `departemen` (`ID_DEPT`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `FK_ATASAN_PER_DEPARTEMEN` FOREIGN KEY (`NIP_MANAGER`) REFERENCES `manager` (`NIP_MANAGER`),
  ADD CONSTRAINT `FK_PEGAWAI_BEKERJA_DI_DEPARTMENT` FOREIGN KEY (`ID_DEPT`) REFERENCES `departemen` (`ID_DEPT`);

--
-- Constraints for table `tunjangan_emp`
--
ALTER TABLE `tunjangan_emp`
  ADD CONSTRAINT `FK_TUNJANGAN_PEGAWAI` FOREIGN KEY (`NIP_EMP`) REFERENCES `pegawai` (`NIP_EMP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
