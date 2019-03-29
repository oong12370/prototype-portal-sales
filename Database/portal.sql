-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mar 2019 pada 22.21
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `partnumber` varchar(100) NOT NULL,
  `nm_barang` varchar(40) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`partnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`partnumber`, `nm_barang`, `unit`, `qty`) VALUES
('BACBCBBHKJGGKJ', 'Oring', 'ea', 1),
('NAS089879879', 'Packing', 'ea', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase_order`
--

CREATE TABLE IF NOT EXISTS `purchase_order` (
  `no_po` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`no_po`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'gmftm', '$2a$06$VOi.SX2lF4UE3IvAivHHYO9eqyyiPnaLu4RDN3DNYpvZG3Jk3q.NS', 'staf'),
(2, 'admin', '$2a$06$VOi.SX2lF4UE3IvAivHHYO9eqyyiPnaLu4RDN3DNYpvZG3Jk3q.NS', 'admin'),
(3, 'purchaser', '$2a$06$VOi.SX2lF4UE3IvAivHHYO9eqyyiPnaLu4RDN3DNYpvZG3Jk3q.NS', 'purchaser');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
