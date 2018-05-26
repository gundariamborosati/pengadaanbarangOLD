-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 11:26 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengadaan_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` varchar(20) NOT NULL,
  `namabarang` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `gambar`, `jenis`, `username`) VALUES
('1', 'buku', 'bayar.jpg', 'peralatan kantor', 'media'),
('23', 'kursi', 'bayar1.jpg', 'peralatan kantor', 'media'),
('BARANG-0024', 'jj', 'warna1.jpg', 'peralatan kantor', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `hak_akses` varchar(8) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`hak_akses`, `npwp`, `nama_perusahaan`, `alamat_perusahaan`, `contact`, `email`, `username`, `password`, `status`) VALUES
('customer', 'warna14.jpg', 'do', 'do1', '111', 'do@s.com', 'do', '03c7c0ace395d80182db07ae2c30f034', 'aktif'),
('customer', 'warna15.jpg', 'exo', 'exo', '111', 'exo@aaa.com', 'exo', '64fea43893b845d96ac6cb974b3a5d23', 'aktif'),
('customer', 'warna16.jpg', 'sd', 'sd', '12345', 'sd@d.com', 'sd', '6226f7cbe59e99a90b5cef6f94f966fd', 'aktif'),
('customer', 'warna17.jpg', 'sehun', 'sehun', '12345', 'sehun@gmai.com', 'sehun', '64fea43893b845d96ac6cb974b3a5d23', 'aktif'),
('customer', 'warna11.jpg', 'sm', 'sm', '12345', 'shinee@gmail.com', 'shinee', '03c7c0ace395d80182db07ae2c30f034', ''),
('customer', 'Main.jpg', 'suju', 'suju', '1213', 'suju@Gmail.com', 'suju', '0870ee638d51d09f8f299e7356a48f36', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `direktur`
--

CREATE TABLE `direktur` (
  `hak_akses` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direktur`
--

INSERT INTO `direktur` (`hak_akses`, `username`, `password`) VALUES
('direktur', 'direktur', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `logistik`
--

CREATE TABLE `logistik` (
  `hak_akses` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logistik`
--

INSERT INTO `logistik` (`hak_akses`, `username`, `password`) VALUES
('logistik', 'destayana', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `progress_pengadaan`
--

CREATE TABLE `progress_pengadaan` (
  `tanggal` date NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `nama_vendor` varchar(30) NOT NULL,
  `progress` varchar(100) NOT NULL,
  `kendala` varchar(500) NOT NULL,
  `id_progress` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress_pengadaan`
--

INSERT INTO `progress_pengadaan` (`tanggal`, `nama_customer`, `nama_vendor`, `progress`, `kendala`, `id_progress`) VALUES
('2001-01-01', 'sm', 'yg', 'sudah dikirim spph', 'tidak ada', 'PROGRESS-0003'),
('2020-01-01', '1', 'a', 'a', 'ok', 'PROGRESS-0004');

-- --------------------------------------------------------

--
-- Table structure for table `status_pesanan`
--

CREATE TABLE `status_pesanan` (
  `no_pesanan` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pesanan`
--

INSERT INTO `status_pesanan` (`no_pesanan`, `username`, `tanggal`, `status`, `catatan`) VALUES
('PESANAN-0001', 'exo', '2019-09-09', 'finish', '      ok'),
('PESANAN-0002', 'exo', '2019-01-01', 'progress', '   abc');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `file` varchar(200) NOT NULL,
  `status_approve` varchar(30) NOT NULL,
  `penanggung_jawab` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat`, `username`, `jenis_surat`, `no_surat`, `tgl_surat`, `pesan`, `tujuan`, `file`, `status_approve`, `penanggung_jawab`, `no_hp`) VALUES
(42, 'exo', 'SPH', 'a', '1200-10-01', '', 'destayana', 'DA082DOUAAAfKMo8.jpg', '', '', ''),
(45, 'exo', 'SPK', '1/a/b/11', '2001-01-01', '', 'destayana', 'header-13.png', '', '', ''),
(48, 'exo', 'SPK', '01012/102', '2002-01-01', '', 'destayana', 'Image_3a93d574.jpg', '', 'taemin', '09121312'),
(50, 'exo', 'SPPH', '01012/102', '2002-01-01', '', 'direktur', 'warna18.jpg', 'YA', 'minho', ''),
(51, 'sd', 'SPPH', '01/20/2011', '2001-01-01', '', 'direktur', 'warna19.jpg', 'YA', 'call', '123');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `dari_vendor` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `id_ulasan` int(11) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `rating` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`dari_vendor`, `tanggal`, `id_ulasan`, `komentar`, `username`, `rating`) VALUES
('s', '0000-00-00', 1, 's', 'exo', ''),
('ss', '0000-00-00', 3, 'ss', 'exo', ''),
('d', '0000-00-00', 4, 'd', 'exo', ''),
('sm', '0000-00-00', 5, 'sm', 'sd', ''),
('sm', '2383-01-23', 6, 'b', 'exo', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `hak_akses` varchar(6) NOT NULL,
  `akte_pendiri` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`hak_akses`, `akte_pendiri`, `nama_perusahaan`, `alamat_perusahaan`, `contact`, `email`, `username`, `password`, `status`) VALUES
('vendor', 'warna.jpg', 'as', 'as', '3', 'asa@c.com', 'as', 'b1bd5d407c76e58bb22b340548816c3d', 'aktif'),
('vendor', 'acak2.JPG', 'hyundai', 'soeta', '123', 'hyundai@', 'hyundai', 'df98d265fc651a91faa09d4e82f096cc', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `direktur`
--
ALTER TABLE `direktur`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `logistik`
--
ALTER TABLE `logistik`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `progress_pengadaan`
--
ALTER TABLE `progress_pengadaan`
  ADD PRIMARY KEY (`id_progress`);

--
-- Indexes for table `status_pesanan`
--
ALTER TABLE `status_pesanan`
  ADD PRIMARY KEY (`no_pesanan`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `status_pesanan`
--
ALTER TABLE `status_pesanan`
  ADD CONSTRAINT `status_pesanan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`);

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
