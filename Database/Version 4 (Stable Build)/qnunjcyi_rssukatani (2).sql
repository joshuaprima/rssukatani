-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 11:06 AM
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
  `cust_expired_date` date NOT NULL,
  `expired_date` date NOT NULL,
  `types` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nama`, `distributor`, `quantity`, `satuan`, `deskripsi`, `harga_satuan`, `tanggal_blud`, `cust_expired_date`, `expired_date`, `types`) VALUES
('61013a88-b19e-4313-addb-0a2e24898975', 'Component Sample B', 'asda', 100, 'Pcs', 'asd', 100, '2020-05-26', '2020-05-28', '2025-05-29', 'ATK'),
('82c3b9d1-f114-43f0-ba3d-527ddce8e7fa', 'Component Sample C', 'PT. Narawarna', 96, 'Pcs', '1', 11, '2020-05-28', '2020-05-30', '2025-05-25', 'ATK'),
('98813670-274e-4052-a6b8-50de865f1161', 'Syringe', 'ChemicalValve', 83, 'Pcs', ' 15 ml syringe & 2 mm caps, ', 10000, '2020-03-20', '2020-04-19', '2025-03-21', 'BMHP'),
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
(7, 'e2cd47a6-f983-470b-a333-fdaabf2cb49f', '98813670-274e-4052-a6b8-50de865f1161', 3, '10', '2020-05-14 03:34:53', 'Waiting'),
(8, '1', '82c3b9d1-f114-43f0-ba3d-527ddce8e7fa', 3, 'asd', '2020-06-03 00:00:00', 'Accepted'),
(9, '1', '82c3b9d1-f114-43f0-ba3d-527ddce8e7fa', 1, 'asdasd', '2020-04-01 00:00:00', 'Accepted'),
(10, '1', '82c3b9d1-f114-43f0-ba3d-527ddce8e7fa', 4, 'ASD', '2020-05-01 00:00:00', 'Waiting'),
(11, '1', 'f62ffd46-8af9-4e27-9e6e-7443525fe037', 2, 'asdasdasd', '2020-04-03 00:00:00', 'Waiting');

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
(2, '1', 8, '2020-05-04 09:12:27', 3);

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
  MODIFY `idperubahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logdata`
--
ALTER TABLE `logdata`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `idpermintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
