-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 11:03 AM
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
('e2cd47a6-f983-470b-a333-fdaabf2cb49f', 'Kumala Advari', 'Gudang Umum', 'Kuma21', '36c1af7db37b594b1d841a19c88ddba7eaea6be2f6766375dbf6246688f957c0');

-- --------------------------------------------------------

--
-- Table structure for table `penambahan`
--

CREATE TABLE `penambahan` (
  `idpenambahan` int(11) NOT NULL,
  `idpegawai` varchar(36) CHARACTER SET latin1 NOT NULL,
  `idbarang` varchar(36) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tgl_penambahan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `tgl_permintaan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `idpegawai` varchar(36) CHARACTER SET latin1 NOT NULL,
  `idpermintaan` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `status` varchar(15) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

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
-- Indexes for table `penambahan`
--
ALTER TABLE `penambahan`
  ADD PRIMARY KEY (`idpenambahan`),
  ADD KEY `idpegawai` (`idpegawai`),
  ADD KEY `idbarang` (`idbarang`);

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
-- AUTO_INCREMENT for table `logdata`
--
ALTER TABLE `logdata`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penambahan`
--
ALTER TABLE `penambahan`
  MODIFY `idpenambahan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `idpermintaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logdata`
--
ALTER TABLE `logdata`
  ADD CONSTRAINT `logdata_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`);

--
-- Constraints for table `penambahan`
--
ALTER TABLE `penambahan`
  ADD CONSTRAINT `penambahan_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`),
  ADD CONSTRAINT `penambahan_ibfk_2` FOREIGN KEY (`idpegawai`) REFERENCES `pegawai` (`idpegawai`);

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
