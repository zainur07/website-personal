-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2023 pada 08.09
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
-- Database: `sambat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(25) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nik`, `nama`, `username`, `password`, `telp`, `email`) VALUES
(1, '1234567890098', 'Muhammad Arifulloh', 'arif', 'arif', '0897923534', 'arifgarpal12@gmail.com'),
(2, '234567890098', 'Dimas', 'dimas', 'dimas', '08979235341', 'dimas@gmail.com'),
(3, '21234567890098', 'Alep', 'alep', 'alep', '08979235342', 'alep@gmail.com'),
(4, '134567890098', 'Alwi', 'alwi', 'alwi', '08979235343', 'alwi@gmail.com'),
(5, '9834567890098', 'Anwar', 'anwar', 'anwar', '08979235344', 'anwar@gmail.com'),
(6, '4567890098', 'Muhammad', 'muhammad', 'muhammad', '08979235345', 'muhammad@gmail.com'),
(7, '0934567890098', 'Jamal', 'jamal', 'jamal', '08979235346', 'jamal@yahoo.com'),
(8, '7864567890098', 'Abdul', 'abdul', 'abdul', '08979235347', 'abdul@gmail.com'),
(9, '52344567890098', 'Adul', 'adul', 'adul', '08979235348', 'adul@gmail.com'),
(11, '21256464', 'zainur', 'rohman', 'zainur1', '+62865726418', 'zainurrohman5000@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(25) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `judul`, `isi_laporan`, `foto`, `status`) VALUES
(1, '2023-06-14', '1234567890098', 'kehilangan motor', 'motor beat dengan plat nomor DK2190KM pada siang hari ', 'foto/jln-rusak.jpeg', 'proses'),
(2, '2023-07-03', '234567890098', 'jalan rusak ', 'terdapat kerusakan jalan yang sangat parah di desa paleran tercinta', 'foto/5a1e253a4290c-jalan-alternatif-bantul-kabupaten-gunung-kidul-rusak-diterjang-banjir_665_374.jpg', '0'),
(3, '2023-07-10', '21234567890098', 'jalan berlubang', 'jalan berlubang diderah paleran jalan raya menuju jalan kepasar membuat pengendara bermotor resah', 'foto/jalan.jpg', '0'),
(4, '2023-07-11', '9834567890098', 'jembatan', 'didaerah deket  perempatan jalan menuju balai desa a ada jembatan rusak mohon untu ditindak lanjuti', 'foto/jembatan.jpeg', 'selesai'),
(5, '2023-07-09', '4567890098', 'banyak ubur ubur di pantai', 'ada banyak ubur ubur di pantai parangtritis, dimohon untuk dihimbaukan epada pengunjung untuk tida bermain di pantai', 'foto/Jellyfish.jpg', '0'),
(6, '2023-07-10', '0934567890098', 'jalan berlubang', 'ada jalan berlubang', 'foto/jalan.jpg', 'proses'),
(7, '2023-07-10', '52344567890098', 'kehilangan ktp', 'ktp saya hilang, gimana dong', 'foto/123.jpg', '0'),
(8, '2023-07-10', '7774567890098', 'kehilangan ktp', 'ktp saya hilang di jalan', 'foto/123.jpg', 'selesai'),
(9, '2023-07-11', '7864567890098', 'kehilangan motor', 'hilang di jallan', 'foto/jln-rusak.jpeg', 'proses'),
(10, '2023-07-11', '7864567890098', 'kehilangan ktp', 'hilang gk tau dimana', 'foto/123.jpg', 'selesai'),
(11, '2023-07-24', '1234567890098', 'kbdafaejgidzifgbsiub', 'gfnbgoigeopi', 'foto/Laptop - Dibuat dengan PosterMyWall.png', 'selesai'),
(12, '2023-07-24', '21256464', 'kehilangan', 'aku kehilangan seseorang', 'foto/images.jpg', 'proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(25) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'Steven', 'steven', 'stev', '32454566723', 'petugas'),
(2, 'Zainur Rohman', 'admin', 'admin', '324545667213', 'petugas'),
(3, 'Riyan', 'riyan', 'riyan', '232454566723', 'petugas'),
(4, 'Gerard', 'gerard', 'gerard', '432454566723', 'petugas'),
(5, 'Abdullah', 'abdul', 'abdul1', '532454566723', 'petugas'),
(6, 'Harith', 'harith', 'harith', '732454566723', 'petugas'),
(7, 'Gerry', 'gerry', 'gerry123', '932454566723', 'petugas'),
(9, 'Soekarno', 'soekarno', 'soekarno', '382454566723', 'petugas'),
(10, 'Moch Hattd', 'hatta', 'hatta', '362454566723', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(25) NOT NULL,
  `id_pengaduan` int(25) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` varchar(225) NOT NULL,
  `id_petugas` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(4, 1, '2023-07-26', 'yaaa', 2),
(7, 3, '2023-07-26', 'kami akan proses pengaduan anda', 2),
(8, 4, '2023-06-12', 'kami akan memprosesnya', 2),
(9, 5, '2023-04-13', 'terimakasih telah melakukan pengaduan akan kami proses', 2),
(10, 10, '2023-06-26', 'takon pitek', 2),
(11, 11, '2023-07-24', 'raimu', 2),
(12, 12, '2023-07-24', 'golek neh', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
