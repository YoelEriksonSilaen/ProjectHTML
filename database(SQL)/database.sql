-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2020 pada 15.31
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `feedback`) VALUES
('Yoel Erikson', 'yoel.silaen@binus.ac.id', 'asfasf'),
('asfasfa', 'apolahyo93@gmail.com', 'safasfasfs'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `nama` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`nama`, `username`, `password`, `gender`, `email`) VALUES
('safasf', 'asfasfas', 'safasfa', 'male', 'apolahyo93@gmail.com'),
('asfasfa', 'fsafafsa', 'asfaf', 'male', 'apolahyo93@gmail.com'),
('safas', 'safasf', 'asfasf', 'm', 'yoel.silaen@gmail.com'),
('safas', '', '', 'asfas', ''),
('safas', 'safasf', 'asfasf', 'm', 'yoel.silaen@gmail.com'),
('safas', 'safasf', 'asfasf', 'm', 'yoel.silaen@gmail.com'),
('asfasf', 'asfsaf', 'asfasf', 'm', 'yoel.silaen@gmail.com'),
('asfasf', 'asfsaf', 'asfasf', 'm', 'yoel.silaen@gmail.com'),
('asfasfas', 'asfsaf', 'safasf', 'm', 'apolahyo7@gmail.com'),
('asfasfas', 'asfsaf', 'safasf', 'm', 'apolahyo7@gmail.com'),
('asfasfas', 'asfsaf', 'safasf', 'm', 'apolahyo7@gmail.com'),
('Yoel Erikson', 'yoelerikson26', 'asfafa', 'm', 'yoel.silaen@gmail.com'),
('safsaf', 'safafa', 'safsa', 'm', 'apolahyo7@gmail.com'),
('safsaf', 'safafa', 'safsa', 'm', 'apolahyo7@gmail.com'),
('safsaf', 'safafa', 'safsa', 'm', 'apolahyo7@gmail.com'),
('safsaf', 'safafa', 'safsa', 'm', 'apolahyo7@gmail.com'),
('asfasf', 'asfasf', 'asfsaf', 'm', 'yoel.silaen@gmail.com'),
('asfasf', 'asfasf', 'asfsaf', 'm', 'yoel.silaen@gmail.com'),
('asfasf', 'asfasf', 'asfsaf', 'm', 'yoel.silaen@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
