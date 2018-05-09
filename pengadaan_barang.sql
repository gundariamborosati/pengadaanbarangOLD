-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 10:42 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pengadaan_barang`
--
CREATE DATABASE IF NOT EXISTS `pengadaan_barang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pengadaan_barang`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `idbarang` varchar(20) NOT NULL,
  `namabarang` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`idbarang`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `gambar`, `jenis`, `username`) VALUES
('1', 'buku', 'bayar.jpg', 'peralatan kantor', 'media'),
('23', 'kursi', 'bayar1.jpg', 'peralatan kantor', 'media');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `hak_akses` varchar(8) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`hak_akses`, `npwp`, `nama_perusahaan`, `alamat_perusahaan`, `contact`, `email`, `username`, `password`, `status`) VALUES
('customer', 'warna14.jpg', 'do', 'do1', '111', 'do@s.com', 'do', '03c7c0ace395d80182db07ae2c30f034', 'aktif'),
('customer', 'warna15.jpg', 'exo', 'exo', '111', 'exo@aaa.com', 'exo', '64fea43893b845d96ac6cb974b3a5d23', 'aktif'),
('customer', 'warna16.jpg', 'sd', 'sd', '12345', 'sd@d.com', 'sd', '6226f7cbe59e99a90b5cef6f94f966fd', 'aktif'),
('customer', 'warna17.jpg', 'sehun', 'sehun', '12345', 'sehun@gmai.com', 'sehun', '931b5a46ca4727cb3dc6261b0122fd49', 'aktif'),
('customer', 'warna11.jpg', 'sm', 'sm', '12345', 'shinee@gmail.com', 'shinee', '03c7c0ace395d80182db07ae2c30f034', ''),
('customer', 'Main.jpg', 'suju', 'suju', '1213', 'suju@Gmail.com', 'suju', '0870ee638d51d09f8f299e7356a48f36', 'aktif'),
('customer', 'B12742.png', 'yg', 'yg', '111', 'yg@tt.com', 'yg', '2bd3b10a9bb1ae7613231ed98232f149', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `direktur`
--

CREATE TABLE IF NOT EXISTS `direktur` (
  `hak_akses` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direktur`
--

INSERT INTO `direktur` (`hak_akses`, `username`, `password`) VALUES
('direktur', 'asd', '123'),
('direktur', 'direktur', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `logistik`
--

CREATE TABLE IF NOT EXISTS `logistik` (
  `hak_akses` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL,
  PRIMARY KEY (`username`)
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

CREATE TABLE IF NOT EXISTS `progress_pengadaan` (
  `tanggal` date NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `nama_vendor` varchar(30) NOT NULL,
  `status` varchar(25) NOT NULL,
  `kendala` varchar(500) NOT NULL,
  `id_progress` varchar(30) NOT NULL,
  PRIMARY KEY (`id_progress`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress_pengadaan`
--

INSERT INTO `progress_pengadaan` (`tanggal`, `nama_customer`, `nama_vendor`, `status`, `kendala`, `id_progress`) VALUES
('0102-01-01', 's', 'sm', 'sss', 'd', 'PROGRESS-0001'),
('2001-01-01', 'wah', 'exol', '1', 'asas\r\na\r\nsa\r\nd\r\nad\r\n\r\nad\r\n', 'PROGRESS-0002');

-- --------------------------------------------------------

--
-- Table structure for table `status_pesanan`
--

CREATE TABLE IF NOT EXISTS `status_pesanan` (
  `no_pesanan` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  PRIMARY KEY (`no_pesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pesanan`
--

INSERT INTO `status_pesanan` (`no_pesanan`, `username`, `tanggal`, `status`, `catatan`) VALUES
('PESANAN-0011', 'do', '0000-00-00', 'finish', ' a'),
('PESANAN-0012', 'exo', '0000-00-00', 'waiting', ''),
('PESANAN-0013', 'exo', '0000-00-00', 'finish', ''),
('PESANAN-0014', 'exo', '0000-00-00', 'progress', '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `file` varchar(200) NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat`, `username`, `jenis_surat`, `no_surat`, `tgl_surat`, `pesan`, `tujuan`, `file`) VALUES
(16, 'sehun', 'SPPH', '01/sss/2/p', '2001-02-20', 'yups', 'direktur', 'warna13.jpg'),
(17, 'sehun', 'SPH', '02/sde/12', '2010-02-19', 'qa', 'destayana', 'warna14.jpg'),
(18, 'destayana', 'SPH', '0203/2s', '0222-01-01', '', 'sehun', 'warna15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `templete_sph`
--

CREATE TABLE IF NOT EXISTS `templete_sph` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nomor` varchar(50) NOT NULL,
  `lampiran` varchar(40) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `kepada` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `templete_sph`
--

INSERT INTO `templete_sph` (`id`, `nomor`, `lampiran`, `tgl_surat`, `perihal`, `kepada`) VALUES
(7, '1', '1', '0000-00-00', '2gggggggggggggggggggggg', 's');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE IF NOT EXISTS `ulasan` (
  `dari_vendor` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `id_ulasan` int(11) NOT NULL AUTO_INCREMENT,
  `komentar` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `rating` varchar(20) NOT NULL,
  PRIMARY KEY (`id_ulasan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`dari_vendor`, `tanggal`, `id_ulasan`, `komentar`, `username`, `rating`) VALUES
('s', '0000-00-00', 1, 's', 'exo', ''),
('ss', '0000-00-00', 3, 'ss', 'exo', ''),
('d', '0000-00-00', 4, 'd', 'exo', ''),
('sm', '0000-00-00', 5, 'sm', 'sd', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `hak_akses` varchar(6) NOT NULL,
  `akte_pendiri` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`hak_akses`, `akte_pendiri`, `nama_perusahaan`, `alamat_perusahaan`, `contact`, `email`, `username`, `password`, `status`) VALUES
('vendor', 'warna.jpg', 'as', 'as', '3', 'asa@c.com', 'as', 'f970e2767d0cfe75876ea857f92e319b', 'aktif'),
('vendor', 'acak2.JPG', 'hyundai', 'soeta', '123', 'hyundai@', 'hyundai', 'df98d265fc651a91faa09d4e82f096cc', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
