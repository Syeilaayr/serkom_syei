-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2024 pada 08.21
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
-- Database: `yangini`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(11) NOT NULL,
  `kd_skema` varchar(255) NOT NULL,
  `nm_peserta` varchar(255) NOT NULL,
  `jekel` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `kd_skema`, `nm_peserta`, `jekel`, `alamat`, `no_hp`) VALUES
(1, 'SKM-001', 'Kim Minji', 'Perempuan', 'Seoul', '081123456780'),
(2, 'SKM-003', 'Kim Chaewon', 'Perempuan', 'Seoul', '089937482988'),
(3, 'SKM-003', 'Choi Beomgyu', 'Laki-Laki', 'Daegu', '088223830462'),
(4, 'SKM-004', 'Dew Jirawat', 'Laki-Laki', 'Bangkok', '089937482987'),
(21, 'SKM-004', 'bami', 'Laki-Laki', 'dihatiku', '089763456777'),
(23, 'SKM-005', 'Kazuha', 'Perempuan', 'Tokyo', '088812345678'),
(27, 'SKM-002', 'Linyi', 'Laki-Laki', 'China', '0123456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skema`
--

CREATE TABLE `tb_skema` (
  `id_skema` int(11) NOT NULL,
  `kd_skema` varchar(255) NOT NULL,
  `nm_skema` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `jml_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_skema`
--

INSERT INTO `tb_skema` (`id_skema`, `kd_skema`, `nm_skema`, `jenis`, `jml_unit`) VALUES
(1, 'SKM-001', 'Junior Web Developer', 'KKNI', 6),
(2, 'SKM-002', 'Digital Marketing', 'Klaster', 10),
(4, 'SKM-003', 'Desainer Multimedia Muda', 'KKNI', 10),
(5, 'SKM-004', 'Network Administrator Muda', 'KKNI', 5),
(10, 'SKM-005', 'Software', 'web', 7),
(17, 'SKM-006', 'Project Manager', 'Project', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `tb_skema`
--
ALTER TABLE `tb_skema`
  ADD PRIMARY KEY (`id_skema`),
  ADD UNIQUE KEY `kd_skema` (`kd_skema`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_skema`
--
ALTER TABLE `tb_skema`
  MODIFY `id_skema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
