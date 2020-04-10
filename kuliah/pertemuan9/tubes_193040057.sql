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
-- Database: `tubes_193040057`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `nama`, `asal`, `jenis`, `harga`, `gambar`) VALUES
(1, 'Rendang', 'Sumatera Barat', 'Makanan', 'Rp. 12.000', 'rendang.jpg'),
(2, 'Mie Aceh', 'Aceh', 'Makanan', 'Rp. 14.000', 'mie.jpg'),
(3, 'Bika Ambon', 'Sumatera Utara', 'Makanan', 'Rp. 12.000', 'bika.jpg'),
(4, 'Bajigur', 'Jawa Barat', 'Minuman', 'Rp. 8.000', 'bajigur.jpg'),
(5, 'Es Cendol', 'Jawa Barat', 'Minuman', 'Rp. 10.000', 'cendol.jpg'),
(6, 'Bir Pletok', 'Jakarta', 'Minuman', 'Rp. 10.000', 'pletok.jpg'),
(7, 'Seblak', 'Jawa Barat', 'Makanan', 'Rp. 13.000', 'seblak.jpg'),
(8, 'Ayam Betutu', 'Bali', 'Makanan', 'Rp. 15.000', 'betutu.jpg'),
(9, 'Es Teler', 'Jakarta', 'Minuman', 'Rp. 10.000', 'teler.jpg'),
(10, 'Kerak Telor', 'Jakarta', 'Makanan', 'Rp. 12.000', 'kerak.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
