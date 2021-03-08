-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2021 pada 04.53
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datatrack`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_scan`
--

CREATE TABLE `hasil_scan` (
  `id_scan` int(250) NOT NULL,
  `id_tempat` varchar(255) NOT NULL,
  `id_petugas` varchar(255) NOT NULL,
  `qrcode` varchar(500) NOT NULL,
  `tanggal` datetime NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_scan`
--

INSERT INTO `hasil_scan` (`id_scan`, `id_tempat`, `id_petugas`, `qrcode`, `tanggal`, `hasil`) VALUES
(47, 'ind', 'mjd1', 'dimas.21', '2021-02-14 09:47:49', 'Negatif'),
(48, 'ind', 'mjd1', 'darwin.41', '2021-02-14 08:49:32', 'Negatif'),
(49, 'ind', 'mjd1', 'dimas.21', '2021-02-14 06:53:16', 'Negatif'),
(50, 'ind', 'mjd1', 'darwin.41', '2021-02-14 11:48:25', 'Positif'),
(51, 'ind', 'mjd1', 'darwin.41', '2021-02-14 12:02:56', 'Positif'),
(52, 'ind', 'mjd1', 'dimas.21', '2021-02-14 12:03:35', 'Negatif'),
(53, 'ind', 'mjd1', 'dimas.21', '2021-02-14 12:22:10', 'Negatif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu_admin`
--

CREATE TABLE `tamu_admin` (
  `idtamu_admin` int(255) NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu_admin`
--

INSERT INTO `tamu_admin` (`idtamu_admin`, `name_admin`, `tanggal`) VALUES
(1, 'pimpinan', '2021-02-14'),
(2, 'admin', '2021-02-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu_petugas`
--

CREATE TABLE `tamu_petugas` (
  `idtamu_tugas` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu_petugas`
--

INSERT INTO `tamu_petugas` (`idtamu_tugas`, `username`, `tanggal`) VALUES
(1, 'supra', '2021-02-14'),
(2, 'supra', '2021-02-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `name_admin`, `password`) VALUES
(1, 'admin', '', 'admin'),
(3, 'admin1', '', 'admin1'),
(5, 'admin', '', 'admin'),
(6, 'admin', '', 'admin'),
(7, 'admin1', '', 'admin1'),
(8, 'admin', '', 'admin'),
(9, 'admin', '', 'admin'),
(10, 'admin', '', 'admin'),
(11, '1234', '123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` varchar(255) NOT NULL,
  `username_tugas` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `tempat_tugas` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `username_tugas`, `nama_petugas`, `tempat_tugas`, `password`) VALUES
('mjd1', 'supra', 'Supra', 'Masjid', '123'),
('psr', 'supri', 'Supri', 'Pasar', '123'),
('tmn1', 'wahyu', 'Wahyu', 'Taman', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pimpinan`
--

CREATE TABLE `tbl_pimpinan` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pimpinan`
--

INSERT INTO `tbl_pimpinan` (`id`, `username`, `password`) VALUES
(1, 'pimpinan', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tempat`
--

CREATE TABLE `tbl_tempat` (
  `id_tempat` varchar(255) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `inisial_tempat` varchar(11) NOT NULL,
  `peng_jwb_tempat` varchar(255) NOT NULL,
  `alamat_tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tempat`
--

INSERT INTO `tbl_tempat` (`id_tempat`, `nama_tempat`, `inisial_tempat`, `peng_jwb_tempat`, `alamat_tempat`) VALUES
('ind', 'Masjid', 'mjd', 'Karman', 'Jl. Ace'),
('ind1', 'Pasar', 'psr', 'Paman', 'Jl. Ace'),
('ind2', 'Taman', 'tmn', 'Rudi', 'Jl. Ace');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `file_hasil` varchar(250) NOT NULL,
  `waktu_rapid` date NOT NULL,
  `alamat_rapid` varchar(255) NOT NULL,
  `hasil_rapid` varchar(255) NOT NULL,
  `waktufile` date NOT NULL,
  `umur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `qrlink` text NOT NULL,
  `qrimage` varchar(255) NOT NULL,
  `aesfile` text NOT NULL,
  `aesqr` text NOT NULL,
  `tgl` date NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `nama`, `email`, `telp`, `file_hasil`, `waktu_rapid`, `alamat_rapid`, `hasil_rapid`, `waktufile`, `umur`, `alamat`, `kota`, `qrlink`, `qrimage`, `aesfile`, `aesqr`, `tgl`, `password`) VALUES
(1, 'dimas.21', 'Dimas Wahyu Notonagoro', 'dimas@mail.com', '08222222222', 'Rapid Test.pdf', '2021-02-11', 'Puskesmas Semarang Barat', 'Negatif', '2021-03-14', '21', 'Jl. Ace', 'Semarang', 'localhost/qrcode-image-database/temp/dimas.png', 'dimas.png', '6wIizBqNKGAqOCo0G7D2Nmsh/0KZc/jQ12V5KhXeUn8/JyRDBZU3LNY725R89DcynHHN5hqe2zkR5G3PH6tKgVvCeNkXuCNcPGM/uA==', '6wIBrRqNKGDF2uxKqBmZqg==', '2021-02-14', '123'),
(2, 'darwin.41', 'Darwin Surpriyadi', 'darwin@rocketmail.co', '08127657236', 'Rapid Test.pdf', '2021-02-08', 'Puskesmas Semarang Selatan', 'Positif', '2021-03-14', '41', 'Jl. Ace', 'Semarang', 'localhost/qrcode-image-database/temp/darwin.png', 'darwin.png', '4gHdjoyPKGCto4ElDHWR0iYMYh3ToLFebjtvy6IRyb3RYMxH7uNgQqZLlt9svt50G0bFMnr1QQqr28wY94dY7MuSWLU6XSbi4k8Fzg==', '4gEjU4yPKGCnAWEGNYwPncQ=', '2021-02-14', '123'),
(4, 'wahyu.20', 'Wahyu Agung', 'wahyu@mail.com', '08127657236', 'Rapid Test.pdf', '2021-02-12', 'Puskesmas Semarang Barat', 'Positif', '2021-03-14', '20', 'Jl. Ace', 'Semarang', 'localhost/qrcode-image-database/temp/wahyu.png', 'wahyu.png', 'zwA5zVatKGDkmpshXwbNifxHhVGlu8EyhxDgswXYy1ADKBQjA99PSJq2YxbzLoLeE82V66XNGBDfmZozKCcclCfhZeTBdahpOofj4g==', 'zgA3dlatKGAbtuTwExDXhg==', '2021-02-14', '123'),
(5, 'fandi.20', 'Fandi Jaya', 'fandi@mail.com', '08222222222', 'Rapid Test.pdf', '2021-02-11', 'Puskesmas Semarang Barat', 'Positif', '2021-03-14', '20', 'Jl. Ace', 'Semarang', 'localhost/qrcode-image-database/temp/fandi.png', 'fandi.png', 'eQJGTwWyKGD0FM/16akBHSniJA/u7cPa5HquYZ6eXczI2dUC9t8HrkRCQ9DUjxGjNqFTays/dijQgOjimJ8Lig9jRD6WOftzbtV51Q==', 'dwJblgWyKGCTels2CxXpdQ==', '2021-02-14', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_scan`
--
ALTER TABLE `hasil_scan`
  ADD PRIMARY KEY (`id_scan`);

--
-- Indeks untuk tabel `tamu_admin`
--
ALTER TABLE `tamu_admin`
  ADD PRIMARY KEY (`idtamu_admin`);

--
-- Indeks untuk tabel `tamu_petugas`
--
ALTER TABLE `tamu_petugas`
  ADD PRIMARY KEY (`idtamu_tugas`);

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tbl_pimpinan`
--
ALTER TABLE `tbl_pimpinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tempat`
--
ALTER TABLE `tbl_tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_scan`
--
ALTER TABLE `hasil_scan`
  MODIFY `id_scan` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tamu_admin`
--
ALTER TABLE `tamu_admin`
  MODIFY `idtamu_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tamu_petugas`
--
ALTER TABLE `tamu_petugas`
  MODIFY `idtamu_tugas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_pimpinan`
--
ALTER TABLE `tbl_pimpinan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
