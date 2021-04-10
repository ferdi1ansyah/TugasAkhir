-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 04:43 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `req-ta-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `nama_lengkap` varchar(75) NOT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `asal_sekolah` varchar(75) NOT NULL,
  `penddikan` varchar(75) DEFAULT NULL,
  `email` varchar(75) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `foto` varchar(60) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_kuis_jawaban`
--

CREATE TABLE `data_kuis_jawaban` (
  `id_kuis_jawaban` int(11) NOT NULL,
  `id_kuis_soal` int(11) NOT NULL,
  `isi` varchar(250) NOT NULL,
  `media_jawaban` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_kuis_soal`
--

CREATE TABLE `data_kuis_soal` (
  `id_kuis_soal` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `soal` text NOT NULL,
  `media` varchar(75) DEFAULT NULL,
  `poin` int(11) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_materi`
--

CREATE TABLE `data_materi` (
  `id_materi` int(11) NOT NULL,
  `id_guru_mapel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `media` varchar(75) DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `materi_status` enum('draft','publish') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_materi_komentar`
--

CREATE TABLE `data_materi_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `komentar` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id_materi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_materi_waktuakses`
--

CREATE TABLE `data_materi_waktuakses` (
  `id_materi_waktuakses` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `waktu` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_rekap_jawaban`
--

CREATE TABLE `data_rekap_jawaban` (
  `id_rekapjawaban` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kuis_soal` int(11) NOT NULL,
  `id_kuis_jawaban` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `media` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `nama_lengkap` varchar(75) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `domisili` varchar(120) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(75) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan_sekarang` enum('SD','SMP','SMA','Universitas','Umum') NOT NULL,
  `asal_sekolah` varchar(75) NOT NULL,
  `foto` varchar(75) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guru_mapel`
--

CREATE TABLE `guru_mapel` (
  `id_guru_mapel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel_kategori` int(11) NOT NULL,
  `id_mapel_subkategori` int(11) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mapel_kategori`
--

CREATE TABLE `mapel_kategori` (
  `id_mapel_kategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mapel_subkategori`
--

CREATE TABLE `mapel_subkategori` (
  `id_mapel_subkategori` int(11) NOT NULL,
  `id_mapel_kategori` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(70) NOT NULL,
  `hak_akses` enum('superadmin','guru','siswa') NOT NULL,
  `status_akun` enum('aktif','nonaktif') NOT NULL,
  `status_2fa` enum('aktif','nonaktif') NOT NULL,
  `code_2fa` varchar(6) DEFAULT NULL,
  `last_logged` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`,`asal_sekolah`),
  ADD KEY `id_profile` (`id_profile`);

--
-- Indexes for table `data_kuis_jawaban`
--
ALTER TABLE `data_kuis_jawaban`
  ADD PRIMARY KEY (`id_kuis_jawaban`),
  ADD KEY `id_kuis_soal` (`id_kuis_soal`);

--
-- Indexes for table `data_kuis_soal`
--
ALTER TABLE `data_kuis_soal`
  ADD PRIMARY KEY (`id_kuis_soal`),
  ADD KEY `id_profile` (`id_profile`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `data_materi`
--
ALTER TABLE `data_materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_guru_mapel` (`id_guru_mapel`);

--
-- Indexes for table `data_materi_komentar`
--
ALTER TABLE `data_materi_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_profile` (`id_profile`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `data_materi_waktuakses`
--
ALTER TABLE `data_materi_waktuakses`
  ADD PRIMARY KEY (`id_materi_waktuakses`),
  ADD KEY `id_materi` (`id_materi`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `waktu` (`waktu`);

--
-- Indexes for table `data_rekap_jawaban`
--
ALTER TABLE `data_rekap_jawaban`
  ADD PRIMARY KEY (`id_rekapjawaban`),
  ADD KEY `id_kuis_soal` (`id_kuis_soal`),
  ADD KEY `id_kuis_jawaban` (`id_kuis_jawaban`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_profile` (`id_profile`);

--
-- Indexes for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
  ADD PRIMARY KEY (`id_guru_mapel`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_mapel_kategori` (`id_mapel_kategori`),
  ADD KEY `id_mapel_subkategori` (`id_mapel_subkategori`);

--
-- Indexes for table `mapel_kategori`
--
ALTER TABLE `mapel_kategori`
  ADD PRIMARY KEY (`id_mapel_kategori`);

--
-- Indexes for table `mapel_subkategori`
--
ALTER TABLE `mapel_subkategori`
  ADD PRIMARY KEY (`id_mapel_subkategori`),
  ADD KEY `id_mapel_kategori` (`id_mapel_kategori`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kuis_jawaban`
--
ALTER TABLE `data_kuis_jawaban`
  MODIFY `id_kuis_jawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kuis_soal`
--
ALTER TABLE `data_kuis_soal`
  MODIFY `id_kuis_soal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_materi`
--
ALTER TABLE `data_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_materi_komentar`
--
ALTER TABLE `data_materi_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_materi_waktuakses`
--
ALTER TABLE `data_materi_waktuakses`
  MODIFY `id_materi_waktuakses` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_rekap_jawaban`
--
ALTER TABLE `data_rekap_jawaban`
  MODIFY `id_rekapjawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
  MODIFY `id_guru_mapel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mapel_kategori`
--
ALTER TABLE `mapel_kategori`
  MODIFY `id_mapel_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mapel_subkategori`
--
ALTER TABLE `mapel_subkategori`
  MODIFY `id_mapel_subkategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD CONSTRAINT `data_guru_ibfk_1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`);

--
-- Constraints for table `data_materi_komentar`
--
ALTER TABLE `data_materi_komentar`
  ADD CONSTRAINT `data_materi_komentar_ibfk_1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`);

--
-- Constraints for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD CONSTRAINT `data_siswa_ibfk_1` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`);

--
-- Constraints for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
  ADD CONSTRAINT `guru_mapel_ibfk_1` FOREIGN KEY (`id_mapel_kategori`) REFERENCES `mapel_kategori` (`id_mapel_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
