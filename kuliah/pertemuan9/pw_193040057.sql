-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2020 pada 10.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040057`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nrp` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Rio', '193040057', 'rioalifian12@gmail.com', 'TIF', 'poto1.jpg'),
(2, 'Andi', '193040058', 'andi12@gmail.com', 'TIF', 'poto2.jpg'),
(3, 'Toni', '193040059', 'toni@gmail.com', 'TIF', 'poto3.jpg'),
(4, 'Tono', '193040060', 'tono@gmail.com', 'TIF', 'poto4.jpg'),
(5, 'Abdel', '193040061', 'abdel@gmail.com', 'TIF', 'poto5.jpg'),
(6, 'Teguh', '193040062', 'teguh@gmail.com', 'TIF', 'poto6.jpg'),
(7, 'Sendi', '193040063', 'sendi@gmail.com', 'TIF', 'poto7.jpg'),
(8, 'Aman', '193040064', 'aman@gmail.com', 'TIF', 'poto8.jpg'),
(9, 'Tukimin', '193040065', 'tukimin@gmail.com', 'TIF', 'poto9.jpg'),
(10, 'Sela', '193040066', 'sela@gmail.com', 'TIF', 'poto10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
