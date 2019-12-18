-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Waktu pembuatan: 18 Des 2019 pada 15.30
-- Versi server: 10.4.7-MariaDB-1:10.4.7+maria~bionic
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kamar`
--

CREATE TABLE `data_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `biaya` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kamar`
--

INSERT INTO `data_kamar` (`id_kamar`, `nama`, `biaya`) VALUES
(2, 'Python', 200000),
(3, 'Golang', 20000),
(4, 'Javascript', 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `reg` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `umur` varchar(200) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_kamar` int(50) DEFAULT NULL,
  `type_rawat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pasien`
--

INSERT INTO `data_pasien` (`id_pasien`, `nama`, `alamat`, `telepon`, `pendidikan`, `reg`, `pekerjaan`, `umur`, `id_dokter`, `id_kamar`, `type_rawat`) VALUES
(22, 'asd', 'asd', '', '', 'REG-001', '', 'asd', 1, 3, 'inap'),
(23, 'asd', 'asd', 'asd', 'asd', 'REG-002', 'asd', 'asd', 2, NULL, 'jalan'),
(24, 'rahma', 'villa 1', '1234546', '', 'REG-003', '', '21', 2, NULL, 'jalan'),
(27, 'Rifki', 'vila', '0987654', '', 'REG-004', '', '21', 2, 3, 'inap'),
(29, 'icah', 'hwjdhgqqoi', '56789', '', 'REG-005', '', '21', 1, NULL, 'jalan'),
(30, 'agung', 'hgsfhga', '8765', '', 'REG-006', '', '21', 2, NULL, 'jalan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `poli` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `telepon`, `poli`) VALUES
(1, 'Anton', '089364662576', 'Umum'),
(2, 'Yeni', '085472645635', 'Poli Mata'),
(3, 'Nia ', '082647366476', 'THT'),
(4, 'Rio', '087564626527', 'Poli Jantung'),
(5, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medrek`
--

CREATE TABLE `medrek` (
  `id_medrek` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `reg` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `umur` varchar(200) NOT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `type_rawat` varchar(200) NOT NULL,
  `diagnosa` varchar(300) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `medrek`
--

INSERT INTO `medrek` (`id_medrek`, `nama`, `alamat`, `telepon`, `pendidikan`, `reg`, `pekerjaan`, `umur`, `id_dokter`, `id_kamar`, `type_rawat`, `diagnosa`, `tgl_masuk`, `tgl_keluar`) VALUES
(11, 'asd', '', '', '', 'REG-001', '', 'asd', 1, 3, 'inap', 'cacar', '0000-00-00', '0000-00-00'),
(12, 'asd', 'asd', 'asd', 'asd', 'REG-002', 'asd', 'asd', 2, NULL, 'jalan', 'tbc', '0000-00-00', '0000-00-00'),
(13, 'rahma', 'villa 1', '1234546', '', 'REG-003', '', '21', 2, NULL, 'jalan', '', '0000-00-00', '0000-00-00'),
(14, 'Rifki', 'vila', '0987654', '', 'REG-004', '', '21', 2, 3, 'inap', '', '0000-00-00', '0000-00-00'),
(15, 'icah', 'hwjdhgqqoi', '56789', '', 'REG-005', '', '21', 1, NULL, 'jalan', '', '0000-00-00', '0000-00-00'),
(16, 'agung', 'hgsfhga', '8765', '', 'REG-006', '', '21', 2, NULL, 'jalan', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('operator','admin','office') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'office', '202cb962ac59075b964b07152d234b70', 'office'),
(3, 'operator', '202cb962ac59075b964b07152d234b70', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kamar`
--
ALTER TABLE `data_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `medrek`
--
ALTER TABLE `medrek`
  ADD PRIMARY KEY (`id_medrek`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kamar`
--
ALTER TABLE `data_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `medrek`
--
ALTER TABLE `medrek`
  MODIFY `id_medrek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD CONSTRAINT `data_pasien_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `data_pasien_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `data_kamar` (`id_kamar`);

--
-- Ketidakleluasaan untuk tabel `medrek`
--
ALTER TABLE `medrek`
  ADD CONSTRAINT `medrek_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `medrek_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `data_kamar` (`id_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
