-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2024 pada 03.44
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aman`
--

CREATE TABLE `aman` (
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `aman`
--

INSERT INTO `aman` (`no`, `username`, `password`) VALUES
(1, 'yadi031', '255e70e4681be382a278b5aa2a8da7dc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input`
--

CREATE TABLE `input` (
  `no` int(11) NOT NULL,
  `kode` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `kerusakan` varchar(50) NOT NULL,
  `komponen` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `input`
--

INSERT INTO `input` (`no`, `kode`, `nama`, `barang`, `kerusakan`, `komponen`, `tanggal`, `harga`) VALUES
(6, 655345646, 'faisal', 'pc rakitan core i9', 'blue screen', 'ganti RAM corsair ddr5 32gb', '2023-03-01', '1.500.000'),
(10, 5343454, 'yadi     ', 'ram midas ddr3 8 gb     ', 'ga nampil     ', 'di ganti unit     ', '2023-03-08', ' 0  '),
(12, 454354, ' rian', ' pc core i3', 'mati', 'ganti psu infinity500w', '2023-03-03', ' 651.000'),
(13, 545345354, 'dian ', 'pc ', 'mati   ', 'ganti prosesor   ', '2023-03-02', '4.300.000   '),
(35, 2147483647, 'fajar', 'pc rakitan', 'mati   ', 'ganti prosesor   ', '2023-03-09', '5.450.000   '),
(36, 2334555, 'ade rohman', 'pc    ', 'mati total    ', 'ganti ram   ', '2024-02-14', '500.000  ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aman`
--
ALTER TABLE `aman`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aman`
--
ALTER TABLE `aman`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `input`
--
ALTER TABLE `input`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
