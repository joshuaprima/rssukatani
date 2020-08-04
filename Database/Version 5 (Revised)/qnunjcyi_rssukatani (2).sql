-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 02:12 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qnunjcyi_rssukatani`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` varchar(36) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 NOT NULL,
  `distributor` varchar(255) CHARACTER SET latin1 NOT NULL,
  `quantity` int(11) NOT NULL,
  `satuan` varchar(255) CHARACTER SET latin1 NOT NULL,
  `deskripsi` varchar(2000) CHARACTER SET latin1 NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `tanggal_blud` date NOT NULL,
  `cust_expired_date` date DEFAULT NULL,
  `expired_date` date NOT NULL,
  `types` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nama`, `distributor`, `quantity`, `satuan`, `deskripsi`, `harga_satuan`, `tanggal_blud`, `cust_expired_date`, `expired_date`, `types`) VALUES
('2244704c-abf8-43a2-b74a-5eca097301be', 'Component Sample TES', 'PT. Narawarna', 1, 'Pcs', ' asd ', 123, '2020-06-24', '2025-06-04', '2025-06-04', 'ATK'),
('3630effc-6501-4faa-bb4a-770d5ff2b250', 'Component Sample BYT', 'PT. Narawarna', 123, 'Pcs', '     asd     ', 11, '2020-06-30', '2025-06-04', '2025-06-04', 'ATK'),
('61013a88-b19e-4313-addb-0a2e24898975', 'Component Sample B', 'asda', 100, 'Pcs', '  asd  ', 100, '2020-05-26', '2021-05-03', '2025-05-29', 'ATK'),
('82c3b9d1-f114-43f0-ba3d-527ddce8e7fa', 'Component Sample C', 'PT. Narawarna', 86, 'Pcs', '1', 11, '2020-05-28', '2020-05-30', '2025-05-25', 'ATK'),
('94bb862f-b17f-4334-91b6-a1fcf818e334', 'Masker (C-019)', 'PT. Narawarna', 105, 'Pcs', 'Test', 1000, '2020-05-15', '2025-07-17', '2025-07-17', 'ATK'),
('98813670-274e-4052-a6b8-50de865f1161', 'Syringe', 'ChemicalValve', 81, 'Pcs', ' 15 ml syringe & 2 mm caps, ', 10000, '2020-03-20', '2020-04-19', '2025-03-21', 'BMHP'),
('acb975ff-d232-440c-955c-8c035cff5420', 'Component Sample S', 'PT. Narawarna', 100, 'Pcs', 'TEST', 1000, '2020-06-25', '2020-06-30', '2025-06-14', 'Bahan Gigi'),
('f62ffd46-8af9-4e27-9e6e-7443525fe037', 'Component Sample J', 'PT. Narawarna', 100, 'Pcs', 'asdasdad', 100, '2020-06-13', '2020-05-30', '2025-05-29', 'ATK');

-- --------------------------------------------------------

--
-- Table structure for table `logbarang`
--

CREATE TABLE `logbarang` (
  `idperubahan` int(11) NOT NULL,
  `idbarang` varchar(200) NOT NULL,
  `idpegawai` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tgl_perubahan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logbarang`
--

INSERT INTO `logbarang` (`idperubahan`, `idbarang`, `idpegawai`, `jumlah`, `status`, `deskripsi`, `tgl_perubahan`) VALUES
(1, '452f8f43-462c-4ab7-b51d-b1ce4359fa03', '1', 100, 'NEW', 'Penambahan item Reagen Lab baru: Component Sample L 100 Pcs. BLUD 2020-06-25', '2020-06-04 09:15:18'),
(2, '61013a88-b19e-4313-addb-0a2e24898975', '1', 100, 'EDIT', 'Component Sample B BLUD 2020-05-26. Edited as Component Sample B 100 Pcs. BLUD 2020-05-26 In inventory ATK', '2020-06-05 12:45:48'),
(3, '61013a88-b19e-4313-addb-0a2e24898975', '1', 100, 'EDIT', 'Component Sample B BLUD 2020-05-26. Edited as Component Sample B 100 Pcs. BLUD 2020-05-26 In inventory ATK', '2020-06-05 12:46:15'),
(4, '2064b174-e675-4cf8-ac88-f83d64176073', '1', 100, 'NEW', 'Penambahan item ATK baru: Component Sample KL 100 Pcs. BLUD 2020-06-01', '2020-06-05 13:01:06'),
(5, '2064b174-e675-4cf8-ac88-f83d64176073', '1', 100, 'EDIT', 'Component Sample KL BLUD 2020-06-01. Edited as Component Sample KL 100 Pcs. BLUD 2020-06-01 In inventory ATK', '2020-06-05 13:19:55'),
(6, '2064b174-e675-4cf8-ac88-f83d64176073', '1', 100, 'EDIT', 'Component Sample KL BLUD 2020-06-01. Edited as Component Sample KL 100 Pcs. BLUD 2020-06-01 In inventory ATK', '2020-06-05 13:32:09'),
(7, 'c3e7f40a-3701-4ad4-a2f2-57763a258f1d', '1', 100, 'NEW', 'Penambahan item ATK baru: Component Sample TES 100 Pcs. BLUD 2020-06-26', '2020-06-05 14:30:08'),
(8, '866e4729-d93a-4aa0-b679-ead0faf96d8a', '1', 100, 'NEW', 'Penambahan item ATK baru: Component Sample TES 100 Pcs. BLUD 2020-06-26', '2020-06-05 14:31:24'),
(9, 'cc80284f-90fb-495e-a058-ccfa745e230e', '1', 100, 'NEW', 'Penambahan item ATK baru: Component Sample TES 100 Pcs. BLUD 2020-06-26', '2020-06-05 14:32:13'),
(10, '27c69feb-6029-475f-917e-811e7ed74515', '1', 10, 'NEW', 'Penambahan item ATK baru: Component Sample Tes 10 Pcs. BLUD 2020-06-25', '2020-06-05 14:34:04'),
(11, '4f3fccdf-2c50-4edb-8737-4f4557f96267', '1', 10, 'NEW', 'Penambahan item ATK baru: Component Sample Tes 10 Pcs. BLUD 2020-06-25', '2020-06-05 14:35:14'),
(12, '10a065b2-7c21-4948-8863-cfc676ad7082', '1', 10, 'NEW', 'Penambahan item ATK baru: Component Sample Tes 10 Pcs. BLUD 2020-06-25', '2020-06-05 14:35:46'),
(13, '08043593-75d4-4cc5-b006-5a3aa43a736a', '1', 1, 'NEW', 'Penambahan item ATK baru: Component Sample TES 1 Pcs. BLUD 2020-06-24', '2020-06-05 14:36:28'),
(14, '9898fdcd-8a4b-4329-a267-aad2ced414cd', '1', 1, 'NEW', 'Penambahan item ATK baru: Component Sample TES 1 Pcs. BLUD 2020-06-24', '2020-06-05 14:37:14'),
(15, '790699e6-7114-487f-a607-d8fefc24c32b', '1', 1, 'NEW', 'Penambahan item ATK baru: Component Sample TES 1 Pcs. BLUD 2020-06-24', '2020-06-05 14:38:37'),
(16, '2244704c-abf8-43a2-b74a-5eca097301be', '1', 1, 'NEW', 'Penambahan item ATK baru: Component Sample TES 1 Pcs. BLUD 2020-06-24', '2020-06-05 14:41:06'),
(17, '2244704c-abf8-43a2-b74a-5eca097301be', '1', 1, 'EDIT', 'Component Sample TES BLUD 2020-06-24. Edited as Component Sample TES 1 Pcs. BLUD 2020-06-24 In inventory ATK', '2020-06-05 14:42:09'),
(18, 'fb555f9e-3e8b-491f-810f-c38958d72926', '1', 123, 'NEW', 'Penambahan item ATK baru: Component Sample BYT 123 Pcs. BLUD 2020-06-30', '2020-06-05 14:49:59'),
(19, '3630effc-6501-4faa-bb4a-770d5ff2b250', '1', 123, 'NEW', 'Penambahan item ATK baru: Component Sample BYT 123 Pcs. BLUD 2020-06-30', '2020-06-05 14:52:23'),
(20, '3630effc-6501-4faa-bb4a-770d5ff2b250', '1', 123, 'EDIT', 'Component Sample BYT BLUD 2020-06-30. Edited as Component Sample BYT 123 Pcs. BLUD 2020-06-30 In inventory ATK', '2020-06-05 14:58:47'),
(21, '3630effc-6501-4faa-bb4a-770d5ff2b250', '1', 123, 'EDIT', 'Component Sample BYT BLUD 2020-06-30. Edited as Component Sample BYT 123 Pcs. BLUD 2020-06-30 In inventory ATK', '2020-06-05 14:59:03'),
(22, '3630effc-6501-4faa-bb4a-770d5ff2b250', '1', 123, 'EDIT', 'Component Sample BYT BLUD 2020-06-30. Edited as Component Sample BYT 123 Pcs. BLUD 2020-06-30 In inventory ATK', '2020-06-05 15:02:07'),
(23, '3630effc-6501-4faa-bb4a-770d5ff2b250', '1', 123, 'EDIT', 'Component Sample BYT BLUD 2020-06-30. Edited as Component Sample BYT 123 Pcs. BLUD 2020-06-30 In inventory ATK', '2020-06-05 15:02:41'),
(24, '3630effc-6501-4faa-bb4a-770d5ff2b250', '1', 123, 'EDIT', 'Component Sample BYT BLUD 2020-06-30. Edited as Component Sample BYT 123 Pcs. BLUD 2020-06-30 In inventory ATK', '2020-06-05 15:02:50'),
(25, 'acb975ff-d232-440c-955c-8c035cff5420', '1', 100, 'NEW', 'Penambahan item Bahan Gigi baru: Component Sample S 100 Pcs. BLUD 2020-06-25', '2020-06-15 01:38:29'),
(26, '31a70223-7955-44a0-956f-4f0d26a07dbb', '1', 100, 'NEW', 'Penambahan item Bahan Gigi baru: Component Sample KLK 100 Pcs. BLUD 2020-06-17', '2020-06-27 14:13:46'),
(27, '31a70223-7955-44a0-956f-4f0d26a07dbb', '1', 100, 'EDIT', 'Component Sample KLK BLUD 2020-06-17. Edited as Component Sample KLX 100 Pcs. BLUD 2020-06-17 In inventory ATK', '2020-06-27 14:14:24'),
(28, '31a70223-7955-44a0-956f-4f0d26a07dbb', '1', 100, 'DELETE', 'Delete Item ATK: Component Sample KLX 100 Pcs. BLUD 2020-06-17', '2020-06-27 14:14:43'),
(29, '94bb862f-b17f-4334-91b6-a1fcf818e334', '1', 120, 'NEW', 'Penambahan item ATK baru: Masker (C-019) 120 Pcs. BLUD 2020-05-15', '2020-07-18 04:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `logdata`
--

CREATE TABLE `logdata` (
  `idlog` int(11) NOT NULL,
  `idbarang` varchar(36) CHARACTER SET latin1 NOT NULL,
  `sisa` int(11) NOT NULL,
  `terpakai` int(11) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idpegawai` varchar(36) CHARACTER SET latin1 NOT NULL,
  `nama_pegawai` varchar(255) CHARACTER SET latin1 NOT NULL,
  `unit` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idpegawai`, `nama_pegawai`, `unit`, `username`, `password`) VALUES
('1', 'Administrator', 'Administrator', 'superuser', '8600e42827c4f6cf5bf393684aa512845fbe400f700e09999b8cfb9bed4758cb'),
('1f5f6842-f2ba-414d-b0ab-f94897efd54a', 'Anandya Nurizah', 'Poli Gigi', 'Anandya21', '36c1af7db37b594b1d841a19c88ddba7eaea6be2f6766375dbf6246688f957c0'),
('2c6d672a-271c-4da4-bb5f-4fd7de19efbd', 'Tevin Dean Ramadhan', 'Farmasi', 'Deantevin', '8600e42827c4f6cf5bf393684aa512845fbe400f700e09999b8cfb9bed4758cb'),
('e2cd47a6-f983-470b-a333-fdaabf2cb49f', 'Kumala Advary', 'Gudang Umum', 'Kuma21', '36c1af7db37b594b1d841a19c88ddba7eaea6be2f6766375dbf6246688f957c0');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `idpermintaan` int(11) NOT NULL,
  `idpegawai` varchar(36) CHARACTER SET latin1 NOT NULL,
  `idbarang` varchar(36) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tgl_permintaan` datetime NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`idpermintaan`, `idpegawai`, `idbarang`, `jumlah`, `deskripsi`, `tgl_permintaan`, `status`) VALUES
(7, 'e2cd47a6-f983-470b-a333-fdaabf2cb49f', '98813670-274e-4052-a6b8-50de865f1161', 3, '10', '2020-05-14 03:34:53', 'Accepted'),
(8, '1', '82c3b9d1-f114-43f0-ba3d-527ddce8e7fa', 3, 'asd', '2020-06-03 00:00:00', 'Accepted'),
(9, '1', '82c3b9d1-f114-43f0-ba3d-527ddce8e7fa', 1, 'asdasd', '2020-04-01 00:00:00', 'Accepted'),
(10, '1', '82c3b9d1-f114-43f0-ba3d-527ddce8e7fa', 4, 'ASD', '2020-05-01 00:00:00', 'Waiting'),
(11, '1', 'f62ffd46-8af9-4e27-9e6e-7443525fe037', 2, 'asdasdasd', '2020-04-03 00:00:00', 'Waiting'),
(12, '1', '82c3b9d1-f114-43f0-ba3d-527ddce8e7fa', 12, 'Component Sample C Request Testing', '2020-06-27 16:15:37', 'Accepted'),
(13, '1', '94bb862f-b17f-4334-91b6-a1fcf818e334', 20, 'Keperluan Masker Untuk Pasien Ruangan 101', '2020-07-18 06:26:02', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `idpegawai` varchar(36) CHARACTER SET latin1 NOT NULL,
  `idpermintaan` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `jumlah_out` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `idpegawai`, `idpermintaan`, `tgl_transaksi`, `jumlah_out`) VALUES
(1, '1', 9, '2020-05-04 09:12:08', 1),
(2, '1', 8, '2020-05-04 09:12:27', 3),
(3, '1', 7, '2020-06-15 03:31:05', 2),
(4, '1', 12, '2020-06-27 16:16:25', 10),
(5, '1', 13, '2020-07-18 06:29:20', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `logbarang`
--
ALTER TABLE `logbarang`
  ADD PRIMARY KEY (`idperubahan`);

--
-- Indexes for table `logdata`
--
ALTER TABLE `logdata`
  ADD PRIMARY KEY (`idlog`),
  ADD KEY `idbarang` (`idbarang`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`idpermintaan`),
  ADD KEY `idpegawai` (`idpegawai`),
  ADD KEY `idbarang` (`idbarang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `transaksi_ibfk_1` (`idpegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbarang`
--
ALTER TABLE `logbarang`
  MODIFY `idperubahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `logdata`
--
ALTER TABLE `logdata`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `idpermintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logdata`
--
ALTER TABLE `logdata`
  ADD CONSTRAINT `logdata_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`);

--
-- Constraints for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD CONSTRAINT `permintaan_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE CASCADE,
  ADD CONSTRAINT `permintaan_ibfk_2` FOREIGN KEY (`idpegawai`) REFERENCES `pegawai` (`idpegawai`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `pegawai` (`idpegawai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
