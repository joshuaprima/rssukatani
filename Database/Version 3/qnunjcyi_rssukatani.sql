-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 04:27 AM
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
('98813670-274e-4052-a6b8-50de865f1161', 'Syringe', 'ChemicalValve', 85, 'Pcs', ' 15 ml syringe & 2 mm caps, ', 10000, '2020-03-20', '2020-04-19', '2025-03-21', 'BMHP'),
('a35a97c2-7153-49c5-aede-8ff91e6fd0fc', 'Component Sample A', 'PT. Narawarna', 100, 'Pcs', '89a7s6sad', 10000, '2020-05-27', '2020-05-27', '2025-05-10', 'Reagen Lab'),
('c2912341-9a7f-4049-9dd7-927af608d1cc', 'Component Sample B', 'Nagawina JT', 100, 'Pcs', 'MAMAMAMAMAMA', 10000, '2020-05-27', '2020-05-27', '2025-05-10', 'Bahan Gigi'),
('c7a7bf63-f1eb-4cf9-897d-63f79fb7635e', 'asdasd', 'asdasd', 7, 'Pcs', 'sdas', 100, '2020-03-25', '2020-03-18', '2020-03-19', 'Reagen Lab'),
('e9f36b34-d16c-4448-820e-2b4b7a9cb4ef', 'asdasdasd', 'asdasdasdasd', 10000, 'Pack', 'asdasdasd', 1000, '2020-03-31', '2020-03-31', '2025-03-21', 'ATK');

-- --------------------------------------------------------

--
-- Table structure for table `itemlog`
--

CREATE TABLE `itemlog` (
  `idperubahan` int(11) NOT NULL,
  `idpegawai` varchar(36) CHARACTER SET latin1 NOT NULL,
  `idbarang` varchar(36) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tgl_perubahan` datetime NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, '1f5f6842-f2ba-414d-b0ab-f94897efd54a', 'c7a7bf63-f1eb-4cf9-897d-63f79fb7635e', 1, 'asd', '2020-04-22 00:00:00', 'Accepted'),
(5, '1', '98813670-274e-4052-a6b8-50de865f1161', 10, 'Syringe Item', '2020-05-11 18:26:26', 'Accepted'),
(6, '1', '98813670-274e-4052-a6b8-50de865f1161', 5, 'Syringe item 2', '2020-05-11 18:29:22', 'Waiting');

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
(1, '1', 1, '2020-05-11 00:00:00', 2),
(2, '1', 5, '2020-05-11 18:30:06', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `itemlog`
--
ALTER TABLE `itemlog`
  ADD PRIMARY KEY (`idperubahan`),
  ADD KEY `idpegawai` (`idpegawai`),
  ADD KEY `idbarang` (`idbarang`);

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
  ADD KEY `idpegawai` (`idpegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemlog`
--
ALTER TABLE `itemlog`
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
  MODIFY `idpermintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itemlog`
--
ALTER TABLE `itemlog`
  ADD CONSTRAINT `itemlog_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`),
  ADD CONSTRAINT `itemlog_ibfk_2` FOREIGN KEY (`idpegawai`) REFERENCES `pegawai` (`idpegawai`);

--
-- Constraints for table `logdata`
--
ALTER TABLE `logdata`
  ADD CONSTRAINT `logdata_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`);

--
-- Constraints for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD CONSTRAINT `permintaan_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`),
  ADD CONSTRAINT `permintaan_ibfk_2` FOREIGN KEY (`idpegawai`) REFERENCES `pegawai` (`idpegawai`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `pegawai` (`idpegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
