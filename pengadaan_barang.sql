-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2018 pada 04.03
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `pengadaan_barang`
--
CREATE DATABASE IF NOT EXISTS `pengadaan_barang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pengadaan_barang`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
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
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`hak_akses`, `npwp`, `nama_perusahaan`, `alamat_perusahaan`, `contact`, `email`, `username`, `password`) VALUES
('customer', 'angry.jpg', 'Telkom University', 'bojongsoang', '123', 'tel@', 'telu', 'e57a85988269f041485c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `direktur`
--

CREATE TABLE IF NOT EXISTS `direktur` (
  `hak_akses` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `direktur`
--

INSERT INTO `direktur` (`hak_akses`, `username`, `password`) VALUES
('direktur', 'direktur', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logistik`
--

CREATE TABLE IF NOT EXISTS `logistik` (
  `hak_akses` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logistik`
--

INSERT INTO `logistik` (`hak_akses`, `username`, `password`) VALUES
('logistik', 'destayana', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendor`
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
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vendor`
--

INSERT INTO `vendor` (`hak_akses`, `akte_pendiri`, `nama_perusahaan`, `alamat_perusahaan`, `contact`, `email`, `username`, `password`) VALUES
('vendor', 'angry8.jpg', 'csm', 'sukapura', '0891', 'csm@', 'csm', 'b4f8b027877dd73de5654b8def971c04'),
('vendor', 'acak2.JPG', 'hyundai', 'soeta', '123', 'hyundai@', 'hyundai', 'df98d265fc651a91faa09d4e82f096cc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
