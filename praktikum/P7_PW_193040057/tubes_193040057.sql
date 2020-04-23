-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2020 pada 07.08
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
-- Database: `tubes_193040057`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `gambar`, `nama`, `asal`, `jenis`, `harga`) VALUES
(1, 'rendang.jpg', 'Rendang Nih!!!', 'Sumatera Barat', 'Makanan', 'Rp. 12.000'),
(2, 'mie.jpg', 'Mie Aceh', 'Aceh', 'Makanan', 'Rp. 14.000'),
(3, 'bika.jpg', 'Bika Ambon', 'Sumatera Utara', 'Makanan', 'Rp. 12.000'),
(4, 'bajigur.jpg', 'Bajigur', 'Jawa Barat', 'Minuman', 'Rp. 8.000'),
(5, 'cendol.jpg', 'Es Cendol', 'Jawa Barat', 'Minuman', 'Rp. 10.000'),
(6, 'pletok.jpg', 'Bir Pletok', 'Jakarta', 'Minuman', 'Rp. 10.000'),
(7, 'seblak.jpg', 'Seblak', 'Jawa Barat', 'Makanan', 'Rp. 13.000'),
(8, 'betutu.jpg', 'Ayam Betutu', 'Bali', 'Makanan', 'Rp. 15.000'),
(9, 'teler.jpg', 'Es Teler', 'Jakarta', 'Minuman', 'Rp. 10.000'),
(10, 'kerak.jpg', 'Kerak Telor', 'Jakarta', 'Makanan', 'Rp. 12.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'rio', '$2y$10$F2JNZMm22q7zuL5xQjXjeOtPf73NWsq/a/pzR5vk1Ym.5JyAuT2kC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
