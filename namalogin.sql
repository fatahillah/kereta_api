-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 04. Juni 2015 jam 20:36
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `namalogin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gabungkereta`
--

CREATE TABLE IF NOT EXISTS `gabungkereta` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `idkereta` int(5) NOT NULL,
  `id_kereta` int(5) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `gabungkereta`
--

INSERT INTO `gabungkereta` (`no`, `idkereta`, `id_kereta`) VALUES
(6, 102, 1003),
(11, 103, 1001),
(3, 101, 1003),
(2, 101, 1002),
(1, 101, 1001),
(7, 102, 1002),
(8, 102, 1001),
(5, 103, 1002),
(10, 105, 1001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kereta`
--

CREATE TABLE IF NOT EXISTS `kereta` (
  `id_kereta` int(4) NOT NULL AUTO_INCREMENT,
  `berangkat` datetime NOT NULL,
  `tiba` datetime NOT NULL,
  `asal` varchar(45) NOT NULL,
  `tujuan` varchar(45) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `harga` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kereta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1011 ;

--
-- Dumping data untuk tabel `kereta`
--

INSERT INTO `kereta` (`id_kereta`, `berangkat`, `tiba`, `asal`, `tujuan`, `kelas`, `harga`) VALUES
(1001, '2015-06-04 06:30:00', '2015-06-04 08:30:00', 'Jember', 'Banyuwangi', 'ekonomi', '8.000'),
(1002, '2015-06-04 06:30:00', '2015-06-04 08:30:00', 'Jember', 'Banyuwangi', 'bisnis', '15.000'),
(1003, '2015-06-04 06:30:00', '2015-06-04 08:30:00', 'Jember', 'Banyuwangi', 'eksekutif', '20.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `alamat`, `username`, `password`, `level`) VALUES
(6, 'viberoptik', 'unmuh jember', 'viberoptik', 'b67e6749a7', 'admin'),
(10, 'Viberoptik group', 'UNMUHJEMBER', 'viber', '8934a03621', 'admin'),
(11, 'a', 'a', 'a', '74b8733745', 'admin'),
(13, 'klompok viber', 'UNMUHJEMBER', 'viber5', '8934a03621', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `namakereta`
--

CREATE TABLE IF NOT EXISTS `namakereta` (
  `idkereta` int(5) NOT NULL AUTO_INCREMENT,
  `kereta` varchar(20) NOT NULL,
  PRIMARY KEY (`idkereta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data untuk tabel `namakereta`
--

INSERT INTO `namakereta` (`idkereta`, `kereta`) VALUES
(101, 'Bhayangkara'),
(102, 'Fast'),
(103, 'Chanel'),
(104, 'Tembaru'),
(105, 'Soshu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `id_pembeli` int(5) NOT NULL AUTO_INCREMENT,
  `namapembeli` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` int(20) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `id_kereta` int(5) NOT NULL,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10005 ;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `namapembeli`, `alamat`, `notelp`, `jumlah`, `id_kereta`) VALUES
(10001, 'Abdul fatahillah', 'Jenewa-Jember', 2147483647, 2, 1001),
(10002, 'Saadillah Razaqi', 'Kaliwates-Jember', 2147483647, 2, 1002),
(10003, 'Resa Marettanto', 'Bondowoso', 2147483647, 3, 1003),
(10004, '', 'situbondo', 85345678, 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
