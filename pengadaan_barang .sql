-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2018 pada 12.38
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
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `hak_akses` varchar(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`hak_akses`, `username`, `password`) VALUES
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
('vendor', 'kurus.jpg', 'baba', 'baba', '061-54', '', 'baba', '21661093e56e24cd60b1'),
('vendor', 'angry7.jpg', 'contoh', 'contoh', '099', '', 'contoh', 'contoh'),
('vendor', 'bayar.jpg', 'meka', 'medan', '0`', 'aaa', 'meka', '32e7eb369de74f424e5f91684a735fec'),
('vendor', 'good.jpg', 'nini', 'nini', 'nini', '', 'nini', 'db5cee64d8879581f189d71178dcb055'),
('vendor', 'cry.jpg', 'Olympic', 'Bandung', '081', '', 'Olym', '827ccb0eea8a706c4c34'),
('vendor', 'ac1.JPG', 'tata', 'tata', '061', 'aaa', 'tata', '49d02d55ad10973b7b9d0dc9eba7fdf0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
