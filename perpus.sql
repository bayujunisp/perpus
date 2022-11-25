-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 08. Januari 2016 jam 13:37
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `judul` varchar(1000) NOT NULL,
  `pengarang` varchar(1000) NOT NULL,
  `penerbit` varchar(1000) NOT NULL,
  `kategori` int(10) NOT NULL,
  `deskripsi` text,
  `picture` varchar(30000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `kategori`, `deskripsi`, `picture`) VALUES
(1, 'Marmut Merah Jambu', 'Raditya Dika', 'Bukune', 2, 'Marmut Merah Jambu adalah buku karya Raditya Dika kelima yang diterbitkan pada tahun 2010. Masih berkonsepkan cerita komedi yang ditulis berdasarkan kisah sang penulis seperti dalam buku-buku sebelumnya. Garis besar buku ini menceritakan kisah asmara penulis mapun orang terdekatnya, termasuk saat menjalin kasih dengan penyanyi Indonesia, Sherina Munaf. Buku ini berisi 222 halaman.', 'http://localhost/PHP/sekolah/perpus/assets/marmut.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(2) NOT NULL,
  `kategori` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Roman'),
(2, 'Komedi'),
(3, 'Horror'),
(4, 'Edukasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(1000) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `mulaipinjam` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nis` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `level` int(99) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nis`, `password`, `name`, `level`) VALUES
('1013004771', '21232f297a57a5a743894a0e4a801fc3', 'Ino', 1),
('1013004774', '21232f297a57a5a743894a0e4a801fc3', 'M. Guruh Ajinugroho', 1),
('14045', '21232f297a57a5a743894a0e4a801fc3', 'Pandawa', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
