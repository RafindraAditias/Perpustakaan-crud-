-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2023 pada 08.17
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `book-library`
--

CREATE TABLE `book-library` (
  `id` int(11) NOT NULL,
  `JUDUL BUKU` varchar(70) NOT NULL,
  `PENULIS` varchar(50) NOT NULL,
  `PENERBIT` varchar(50) NOT NULL,
  `TAHUN TERBIT` varchar(10) NOT NULL,
  `GAMBAR` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `book-library`
--

INSERT INTO `book-library` (`id`, `JUDUL BUKU`, `PENULIS`, `PENERBIT`, `TAHUN TERBIT`, `GAMBAR`) VALUES
(38, 'CINTA ITU LUKA', 'EKA KURNIAWAN', 'Elex Media Komputindo', '2002', 'b1.jpg'),
(39, 'KITA PERGI HARI INI', 'ZIGGY ZEZSYA', 'Gramedia Pustaka Utama', '2021', 'b3.jpg'),
(40, 'THE STAR & I', 'ILANA TAN', 'Gramedia Pustaka Utama', '2021', 'b4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `book-library`
--
ALTER TABLE `book-library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `book-library`
--
ALTER TABLE `book-library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
