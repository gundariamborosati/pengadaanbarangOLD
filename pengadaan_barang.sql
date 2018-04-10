-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2018 pada 08.36
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
-- Struktur dari tabel `barang`
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
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `gambar`, `jenis`, `username`) VALUES
('1', 'buku', 'bayar.jpg', 'peralatan kantor', 'media'),
('23', 'kursi', 'bayar1.jpg', 'peralatan kantor', 'media');

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
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`hak_akses`, `npwp`, `nama_perusahaan`, `alamat_perusahaan`, `contact`, `email`, `username`, `password`, `status`) VALUES
('customer', 'Capture.JPG', 'smile', 'bandung', '123', 'smile@gmail.com', 'smile', '3ddaeb82fbba964fb3461d4e4f1342eb', 'aktif'),
('customer', 'abs.JPG', 'smktelkom', 'medan', '12345', 'smk@gmail.com', 'smk', '3e671ea34dcac32e7e9e7c67ee8cfc0b', 'tidak aktif'),
('customer', 'acak.JPG', 'Telkom University', 'bojongsoang', '123', 'telu@', 'telu', 'e57a85988269f041485c870baac915c6', 'tidak aktif');

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
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vendor`
--

INSERT INTO `vendor` (`hak_akses`, `akte_pendiri`, `nama_perusahaan`, `alamat_perusahaan`, `contact`, `email`, `username`, `password`, `status`) VALUES
('vendor', 'acak3.JPG', 'media', 'bandung', '190', 'media@gmail.com', 'media', '62933a2951ef01f4eafd9bdf4d3cd2f0', 'aktif'),
('vendor', 'angry10.jpg', 'paytren', 'bandung', '1234', 'paytren@gmail.com', 'paytren', 'a18315a270a8bb795e7d47268f5a0cbd', 'aktif');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`username`) REFERENCES `vendor` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
