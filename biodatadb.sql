-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2019 pada 05.53
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodatadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal_lahir` varchar(128) NOT NULL,
  `berat` varchar(128) NOT NULL,
  `tinggi` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama`, `tanggal_lahir`, `berat`, `tinggi`, `alamat`) VALUES
(3, 'Chila', '09/09/1999', '52kg', '160cm', 'Sidoarjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isi_biodata`
--

CREATE TABLE `isi_biodata` (
  `isi_id` int(11) NOT NULL,
  `namal` varchar(100) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `motto` varchar(200) NOT NULL,
  `sd` varchar(80) NOT NULL,
  `smp` varchar(80) NOT NULL,
  `sma` varchar(80) NOT NULL,
  `universitas` varchar(100) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `linkedin` varchar(30) NOT NULL,
  `github` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indeks untuk tabel `isi_biodata`
--
ALTER TABLE `isi_biodata`
  ADD PRIMARY KEY (`isi_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
