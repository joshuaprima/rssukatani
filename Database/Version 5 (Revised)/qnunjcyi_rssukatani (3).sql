-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 06:14 AM
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
('0413e2a6-bcc2-416d-9098-baca9b9ee883', 'Ballpoint Warna Hitam ', 'NONE', 65, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('055e1345-1d1c-4ba4-bfa9-5a286908b111', 'Plastik Sampah Hitam sedang', 'NONE', 35, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('07613ad4-92e4-41e3-87fa-def32cb0623a', 'Tempat Sampah Injak sedang', 'NONE', 0, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('0963fffa-fa05-4079-b0a9-4fdc123c2e05', 'formulir disposisi', 'NONE', 0, 'Buku', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('099bae84-7e66-4b1d-a1ab-65f52f97b596', 'Arit', 'NONE', 1, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('0a51a087-1c87-4572-abc9-6d929221510a', 'Lembar PIS-PK 1', 'NONE', 0, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('0b934f50-b992-478b-a153-36dd27481fc6', 'Rekam Medik Lembar data pasien', 'NONE', 0, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('0db63b01-e08e-4f11-89e2-d9465ea6e15a', 'Kertas A4 70 gr', 'NONE', 1, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('0f93e422-dbb4-4f48-933a-997a4be9a832', 'Box File Ukuran Folio', 'NONE', 46, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('1375e0c9-6f10-4b5f-9895-a4be4e609cb2', 'Post-it Mark and Note', 'NONE', 9, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('13bed3e5-979c-4e49-9a43-e46fc7658883', 'Tinta Print Color RGB/ Epson L 310', 'NONE', 5, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('1e09bddb-ee97-49b4-b775-74dadee01e05', 'Map PIS-PK', 'NONE', 0, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('224b0cda-afb4-41d9-b7e0-3a9f544d6d61', 'Lembar PIS-PK 3', 'NONE', 0, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('2363b5ea-5506-45e3-829b-8aaf1907a112', 'format rujukan internal', 'NONE', 0, 'Buku', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('237e5efe-0ab8-449d-93c2-210f06fd7390', 'Karbol Wangi', 'NONE', 17, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('23ea8315-040a-4e34-851d-0a156afeb35f', 'Kertas F4 80 gr', 'NONE', 9, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('27951f8d-df00-45d4-b28d-da053c9850f0', 'surat keterangan sakit', 'NONE', 0, 'Buku', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('28d9ed97-ab4d-435a-addd-f9f9b9dce1cc', 'Stabilo aneka warna', 'NONE', 1, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('2dfa5b8e-8121-493c-902b-e6c244581d1c', 'Sabun Cuci Piring Sunlight 1ltr', 'NONE', 20, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('3116dcf9-8bc6-4cbc-b0ff-c99febd00dda', 'Binder Clip no.111', 'NONE', 8, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('360cdd99-fcd1-4ffa-94d4-837d33fcc64f', 'kartu pasien', 'NONE', 0, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('36801877-6b40-4157-a947-a501b1e1c579', 'Pembersih Kaca', 'NONE', 10, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('3700a24a-218c-4871-abb3-db431085bb1e', 'Sikat Biasa', 'NONE', 6, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('3a8a21a1-f4c2-4aaf-9f9a-071bbf825e19', 'Gunting Rumput', 'NONE', 1, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('3de515b5-8d9c-4147-beee-3d9e92a89181', 'Pembersih Lantai', 'NONE', 5, 'Derigen', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('3f5719b6-f2a3-47db-af2d-8286b00cc093', 'Kamper Bola', 'NONE', 6, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('3fd6db7d-83d2-466d-99ef-428be13e9e5d', 'Plastik Sampah Kuning Besar', 'NONE', 0, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('4028ab20-467f-459d-8fc5-c05d53f9f580', 'Sapu Langit', 'NONE', 3, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('40f398bd-ebd5-4421-8071-4b12b5d1ea85', 'Ember Tutup Sedang', 'NONE', 4, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('415a44a3-c344-4b0d-8958-0bcef850fc09', 'Hand Soap', 'NONE', 3, 'Derigen', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('44555036-5282-4611-92a1-d153bdedf863', 'Sapu Nilon', 'NONE', 1, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('45e6c3ce-0e3d-447c-b918-09ce8b4b3dfd', 'Map Kertas', 'NONE', 16, 'Box', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('4a23e40c-53da-422e-96ad-fc61acfdcef1', 'permintaan rongen', 'NONE', 0, 'Buku', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('4a7ef2ca-f41f-44b5-977c-409dde196794', 'Lembar PIS-PK 5', 'NONE', 0, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('503b0f02-6f99-491c-ae7e-dfab542435f0', 'Kertas A4 80 gr', 'NONE', 0, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('522f3273-8eac-4b09-a206-f3267eb915b4', 'Lakban Bening', 'NONE', 4, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('52a8d39c-155e-4661-96b8-5a2d2a3e290a', 'Serokan Air', 'NONE', 5, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('54b8e3f7-35da-4196-9c56-0bcba3453171', 'map rekam midis', 'NONE', 0, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('553df186-2925-4112-99df-d1cdf2fb82f4', 'Spon Kawat', 'NONE', 5, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('561e5c1a-9ffd-491f-bca2-8f2c57d08780', 'Kwitansi besar', 'NONE', 38, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('56580511-d01d-4a91-9ace-be020221b29d', 'Busines file/ada pembolong', 'NONE', 10, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('56b094cc-79e5-40b0-a7be-3a77959b5b4c', 'Tempelan tom jerry A4', 'NONE', 1, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('56f727c7-e02f-4e5a-912b-b094e207551a', 'Lakban Coklat', 'NONE', 5, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('57ba8f1c-ec12-40b0-8a32-e969b8159ece', 'Tempat Sampah Sedang', 'NONE', 0, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('580edea5-4828-4d9c-b159-bf4ebf275c71', 'Pembersih Porselin /Protek', 'NONE', 9, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('59a60ccc-7fcf-41d5-808b-5a33ad4e2406', 'Tinta Print Color RGB / Epson L360', 'NONE', 5, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('5b17275b-ac29-43a7-bc95-cff9b803d688', 'Garpu Tanah Sedang', 'NONE', 1, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('60142c89-0f82-4da1-95a6-548e54c922e0', 'Binder Clip no.105', 'NONE', 9, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('605623b1-5a37-4c10-8167-50e7fa451a38', 'Kertas F4 & gr Biru', 'NONE', 1, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('60ee76ba-0cd4-4408-9897-c1415e6dc1e7', 'Pengharum Ruangan gantung Stela', 'NONE', 5, 'Box', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('63566cbb-73f6-40cf-8c55-82bd2e91f7dc', 'Tisue roll toilet', 'NONE', 2, 'Roll', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('63eadaac-cac2-4691-9897-98f46df0f767', 'Binder Clip no.155', 'NONE', 9, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('6499d5c0-223e-4edb-83be-734c539d9029', 'Keset Besar', 'NONE', 11, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('64a6a158-5a45-4241-8ee3-7bf8d0dc2443', 'Sabun Cuci Piring', 'NONE', 0, 'Derigen', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('661730f9-76e5-41e4-b6e7-b1ac2bd7d716', 'Spidol nonPermanen Warna Hitam', 'NONE', 2, 'Pack', 'isi 12 buah', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('6992603c-be66-4fe1-9b66-52f3c1b9f90f', 'Kertas F4 70 gr', 'NONE', 40, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('6aaf9850-a4c0-47b6-a459-b7ae61448705', 'Tipe Ex Kertas ( Bukan yang cair )', 'NONE', 5, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('743bd913-2333-40c0-a09f-1ee13326f3ca', 'Paper Clip no.3', 'NONE', 40, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('7583a893-694b-4139-8dad-bbfd8f78b826', 'Form permintaan lab', 'NONE', 4, 'Buku', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('769b3a81-3f1f-43bb-8ef8-50e10128f798', 'Spon cuci Piring', 'NONE', 10, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('7d8e048b-8999-4e88-a962-e454ec2c727d', 'Paper Roll', 'NONE', 20, 'Roll', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('7ef2e533-f9fd-4f12-bc23-5b9b4691b1d3', 'Alat Pel', 'NONE', 6, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('7f3ce41c-0fea-43e1-9c37-5fdd35ef79ad', 'Pisau Cutter besar', 'NONE', 1, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('8092e10d-71d9-4cbe-8371-6c0aa7e787e0', 'Baterai Ukuran D', 'NONE', 1, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('845afdf2-e97e-4ffa-a920-ecf47852c2ea', 'Sarung Tangan Karet ', 'NONE', 1, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('88588544-4547-48a2-9dad-4a3d4603cc33', 'Isi Hecter Besar', 'NONE', 2, 'Box', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('890af32f-09e1-41a5-9d42-a5366a64764a', 'Kanebo', 'NONE', 7, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('8958dd65-fedf-4850-9f41-bea172307bd3', 'Tinta Print Black / Epson L360', 'NONE', 9, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('897be4d8-2266-4b96-9204-d410420fe438', 'Baterai Ukuran AA isi 2', 'NONE', 60, 'Set', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('8c02f7b1-2a8b-4d24-b5d4-9235b0f19180', 'Tempelan tom jerry', 'NONE', 3, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('8c5f33de-721e-44a7-8358-26f7e3b500b3', 'Stiker PIS-PK', 'NONE', 0, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('8c8be602-a1f5-410d-863e-4e3313d9d1e8', 'buku folio kecil', 'NONE', 15, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('91705adf-c71d-4453-970d-da1f4a773d99', 'Buku Ekpedisi isi 200lb', 'NONE', 6, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('9315524e-9fb1-4dfc-a2ba-75612847fb6b', 'Keset Kecil', 'NONE', 6, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('970a1963-e4cb-4919-9a59-69d4df8e0b81', 'Pengki / Serokan Sampah', 'NONE', 4, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('98be021b-13e6-4913-a6ea-02ed1222d720', 'Kantong Plastik ( hitam )', 'NONE', 35, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('998f53a4-e057-4aec-ac55-2a13466b474e', 'Detergen 1,8 ltr', 'NONE', 5, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('a1763b19-69f5-409c-8686-81230f2140b8', 'Kemoceng', 'NONE', 9, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('a229f210-e54e-4d7a-9aab-7c75a0ae02ad', 'Lembar PIS-PK 6', 'NONE', 2, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('a2a11b51-224c-4b1d-8e4a-7817cfd1ca7e', 'Bak Stempel', 'NONE', 5, 'Pcs', ' None ', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('a8a4fdd5-7762-43d6-8e40-db3fbc150173', 'Pembasmi Serangga', 'NONE', 3, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('aa5098a5-ead7-4a3a-9326-e629b7447568', 'Binder Clip no.107', 'NONE', 8, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('acf61ead-b4d5-4466-a898-d02a63d97d25', 'Gunting Kertas Sedang', 'NONE', 5, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('ad1cdf7e-fffb-4121-9e60-3e5c176a335e', 'Pemberih Kaca', 'NONE', 1, 'Derigen', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('ad7272c6-1b7b-413f-af60-ea31751d8bff', 'Rekam Medik Lembar tengah', 'NONE', 0, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('b10398ea-87eb-46d3-a5e3-6054e86f092b', 'Tisue kotak', 'NONE', 14, 'Box', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('b1798e56-e5fe-4da3-8458-7aadc0451f6e', 'surat keterangan sehat', 'NONE', 0, 'Buku', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('b1b9d522-1a00-43c6-83e3-b66491035282', 'Serbet', 'NONE', 12, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('b5b8f60b-05c4-4048-b454-fe815268d882', 'Persetujuan tindakan medik', 'NONE', 0, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('b6727792-b90d-4b1e-9e79-ce39925ca1fd', 'Lembar PIS-PK 2', 'NONE', 0, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('b87f41d2-93c2-4c55-9068-6da9186f24bb', 'Sapu Ijuk', 'NONE', 10, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('b8d5a1c9-c046-4017-8d15-2c4934c53002', 'Rujukan Umum', 'NONE', 0, 'Buku', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('ba1f22f5-3008-4a82-95c8-9f96c0583cf1', 'Buku Folio Besar', 'NONE', 13, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('bb5bbd91-0f62-405f-82ff-1d6f28d5eafc', 'Tempat Sampah Pilah', 'NONE', 0, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('bb7e206c-ad95-45b9-8fcd-e126e7344585', 'Sikat Toilet', 'NONE', 1, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('bd768808-c170-4002-b15d-ceb948d89f25', 'Hecter Ukuran Bwesar', 'NONE', 3, 'pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('c8c76100-e1d2-48ec-b69f-39ad858d3908', 'Tinta Stempel Elektrik', 'NONE', 11, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('c9aebd06-be61-4c8d-b199-50fbb3f2f50e', 'Hecter Ukuran 8 gr', 'NONE', 6, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('cdccdbeb-efaf-4a81-a632-0effa2aac419', 'Gayung Plastik', 'NONE', 6, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('dab26a05-2e0a-475b-937f-18bbec11ed9d', 'Paper Clip no.5', 'NONE', 2, 'Pack', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('db921df9-5818-47b3-a9f7-3bd7e1242c38', 'Kertas F4 & gr Kuning', 'NONE', 1, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('de50e6fd-692c-4478-80cb-50a5be9d4df7', 'Sapu Lidi Tongkat Kayu', 'NONE', 8, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('e0e6a1aa-7635-46bb-94cc-3c9b24c3677f', 'Plastik Sampah Kuning Sedang', 'NONE', 35, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('e5f5f2fb-4d52-413f-bf4f-b349fdccd2fb', 'Form ontogram', 'NONE', 0, 'Buku', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('e751b5a3-b029-4995-8e3d-4fd0ee9b5bc2', 'kartu stok barang', 'NONE', 0, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('ea19bbd7-51dc-4c04-93fe-916dea2c3d87', 'Sabun Colek', 'NONE', 3, 'Derigen', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('ea4b2c23-79c3-471a-aedc-6b99c6db6e2c', 'Pembersih Lantai Lisol', 'NONE', 20, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('eac4ac9e-b7f8-4dcd-97f4-c76dd89cf699', 'Ballpoint FC', 'NONE', 1, 'Pack', 'isi 12 buah', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('ef7a1ccc-3fb6-4d0b-82e5-cfa48e4fbe09', 'Spidol Permanen Warna Hitam', 'NONE', 19, 'Pack', 'isi 12 buah', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('f2854de4-0965-4613-b88d-a79874710b53', 'Baterai Ukuran AAA isi 2 Isi 2', 'NONE', 44, 'Set', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('f3a29aa6-3241-4461-95f8-44767b7bd532', 'Cangkul', 'NONE', 1, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('f50ce468-7777-45a0-a322-700ed66e86d9', 'Lembar PIS-PK 4', 'NONE', 0, 'Rim', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan'),
('f526bbfb-dbec-4f8a-8fe3-8eeb8c0b825c', 'Tinta Print Black/ Epson L 310', 'NONE', 10, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'ATK'),
('fc266729-c7bf-4051-912f-393ff4e9aa78', 'Lap Tangan Gantung', 'NONE', 5, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Kebersihan'),
('fc5db95c-b98d-41c7-89d4-510680ddfd85', 'Buku Resep Dokter', 'NONE', 10, 'Pcs', 'None', 0, '2019-12-29', '2025-01-01', '2025-01-01', 'Cetakan');

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
(30, 'a2a11b51-224c-4b1d-8e4a-7817cfd1ca7e', '1', 5, 'EDIT', 'Bak Stempel BLUD 2019-12-29. Edited as Bak Stempel 5 Pcs. BLUD 2019-12-29 In inventory ATK', '2020-08-05 08:27:10'),
(31, '0963fffa-fa05-4079-b0a9-4fdc123c2e05', '1', 0, 'EDIT', 'formulir diposisi BLUD 2019-12-29. Edited as   . BLUD  In inventory ', '2020-08-06 07:52:07'),
(32, '0963fffa-fa05-4079-b0a9-4fdc123c2e05', '1', 0, 'EDIT', ' BLUD 0000-00-00. Edited as   . BLUD  In inventory ', '2020-08-06 07:52:17'),
(33, '0963fffa-fa05-4079-b0a9-4fdc123c2e05', '1', 0, 'EDIT', ' BLUD 0000-00-00. Edited as   . BLUD  In inventory ', '2020-08-06 07:52:33'),
(34, '0963fffa-fa05-4079-b0a9-4fdc123c2e05', '1', 0, 'EDIT', ' BLUD 0000-00-00. Edited as formulir disposisi 0 Buku. BLUD 2019-12-29 In inventory Cetakan', '2020-08-06 07:55:51');

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
  MODIFY `idperubahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `logdata`
--
ALTER TABLE `logdata`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT;

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
