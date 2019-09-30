-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2019 pada 14.21
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
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama`, `tanggal_lahir`, `berat`, `tinggi`, `alamat`) VALUES
(10, 'Chilyatun Nisa', '1999-09-09', '52', '161', 'Jabon, Sidoarjo'),
(11, 'Rahayu Prabawati', '1999-03-16', '42', '160', 'Grejeg, Bawean');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isi_biodata`
--

CREATE TABLE `isi_biodata` (
  `isi_id` int(11) NOT NULL,
  `id_identitas` varchar(5) NOT NULL,
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
-- Dumping data untuk tabel `isi_biodata`
--

INSERT INTO `isi_biodata` (`isi_id`, `id_identitas`, `profesi`, `deskripsi`, `hobi`, `motto`, `sd`, `smp`, `sma`, `universitas`, `instagram`, `linkedin`, `github`, `email`) VALUES
(2, '4', 'Student', 'MALESSS', 'MALESSS', 'MALESS', 'SDN Trompoasri', 'SMP Muhammadiyah', 'MAN 1 Pasuruan', 'UPN \"Veteran\" Jawa Timur', '1', '1', '1', 'chilamalssscaNTIk@gmail.com'),
(3, '7', 'Makelar', 'sad', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'rahayuu@gmail.com'),
(4, '10', 'Student', 'Hai namaku Chila! Aku mahasiswa Teknik Informatika semester 5 dan aku tertarik di bidang kecerdasan buatan.', 'Menulis dan bercerita', 'Tumbuhlah bagaimanapun cuacanya', 'SDN Trompoasri', 'SMP Muhammadiyah', 'MAN 1 Pasuruan', 'UPN \"Veteran\" Jawa Timur', 'chilaact', 'chilaact', 'chilaact', 'nchilyatun@gmail.com'),
(5, '11', 'Student', 'Hai namaku Rahayu! Aku mahasiswa Teknik Informatika semester 5 dan aku tertarik di bidang keamanan dan jaringan.', 'Menggambar dan membaca', 'Berusahalah untuk tetap bersyukur bagaimanapun situasinya', 'SDN Grejeg', 'MTs Grejeg', 'MA Amanatul Ummah', 'UPN \"Veteran\" Jawa Timur', 'rahayuairie', 'rahayuairie', 'rahayuairie', 'ameliarahayu964@gmail.com');

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
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `isi_biodata`
--
ALTER TABLE `isi_biodata`
  MODIFY `isi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
