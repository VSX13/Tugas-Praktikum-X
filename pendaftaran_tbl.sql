-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2020 pada 17.15
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_tbl`
--

CREATE TABLE `pendaftaran_tbl` (
  `nama` varchar(200) NOT NULL,
  `jklm` varchar(20) NOT NULL,
  `nisn` varchar(200) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `temla` varchar(200) NOT NULL,
  `tangla` varchar(200) NOT NULL,
  `nral` varchar(200) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kwn` varchar(200) NOT NULL,
  `bk` varchar(5) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(200) NOT NULL,
  `lurah` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `pos` varchar(5) NOT NULL,
  `lintang` varchar(200) NOT NULL,
  `bujur` varchar(200) NOT NULL,
  `tt` varchar(200) NOT NULL,
  `mt` varchar(200) NOT NULL,
  `kks` varchar(200) NOT NULL,
  `anak` varchar(3) NOT NULL,
  `penerima` varchar(5) NOT NULL,
  `no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
