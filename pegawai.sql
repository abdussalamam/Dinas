-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 03:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `dinas`
--

CREATE TABLE `dinas` (
  `id_dinas` int(11) NOT NULL,
  `nama_dinas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinas`
--

INSERT INTO `dinas` (`id_dinas`, `nama_dinas`) VALUES
(1, 'BADAN KEPEGAWAIAN DAERAH '),
(2, 'SATUAN POLISI PAMONG PRAJA'),
(3, 'DINAS PETERNAKAN DAN KESEHATAN HEWAN'),
(4, 'DINAS PERUMAHAN KAWASAN PERMUKIMAN DAN PERTANAHAN'),
(5, 'DINAS PARIWISATA '),
(6, 'DINAS PERINDUSTRIAN '),
(7, 'BADAN PERENCANAAN PEMBANGUNAN DAERAH'),
(8, 'BADAN PENANGGULANGAN BENCANA '),
(9, 'BADAN PENDAPATAN DAERAH '),
(10, 'BADAN PEMBERDAYAAN SUMBER DAYA MANUSIA PROVINSI RIAU'),
(11, 'DINAS KEBUDAYAAN'),
(12, 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG'),
(13, 'DINAS PERDAGANGAN DAN UMKM'),
(14, 'BIRO PEMBANGUNAN SEKRETARIAT DAERAH'),
(15, 'INSPEKTORAT DAERAH'),
(16, 'DINAS PENDIDIKAN'),
(17, 'SEKRETARIAT DEWAN PERWAKILAN DAERAH '),
(18, 'DINAS TANAMAN PANGAN, HOLTIKUTULTURA DAN PERKEBUNAN '),
(19, 'DINAS PERPUSTAKAAN DAN KEARSIPAN '),
(20, 'DINAS PENANAMAN MODAL PELAYANAN TERPADU SATU PINTU'),
(21, 'BADAN PENELITIAN DAN PENGEMBANGAN DAERAH'),
(22, 'DINAS KETAHANAN PANGAN'),
(23, 'DINAS SOSIAL'),
(24, 'DINAS TENAGA KERJA DAN TRANSMIGRASI '),
(25, 'DINAS ENERGI DAN SUMBERDAYA MINERAL '),
(26, 'DINAS PEMBERDAYAAN PEREMPUAN '),
(27, 'DINAS PEMUDA DAN OLAHRAGA '),
(28, 'DINAS KEPENDUDUKAN PENCATATAN SIPIL DPENGENDALIAN PENDUDUK DAN KB'),
(29, 'BIRO HUMAS PROTOKOL DAN KERJASAMA SEKRETARIAT DAERAH'),
(30, 'BIRO ORGANISASI'),
(31, 'BIRO UMUM SEKRETARIAT DAERAH'),
(32, 'DINAS LINGKUNGAN HIDUP DAN KEHUTANAN '),
(33, 'DINAS KESEHATAN'),
(34, 'BIRO HUKUM SEKRETARIAT DAERAH'),
(35, 'DINAS PERHUBUNGAN'),
(36, 'RUMAH SAKIT UMUM DAERAH ARIFIN ACHMAD'),
(37, 'RUMAH SAKIT JIWA TAMPAN'),
(38, 'RUMAH SAKIT UMUM DAERAH PETALA BUMI'),
(39, 'BADAN PENGHUBUNG'),
(40, 'BADAN PERENCANAAN KEUANGAN DAN ASET DAERAH '),
(41, 'DINAS PEMBERDAYAAN MASYARAKAT DAN DESA '),
(42, 'DINAS KELAUTAN DAN PERIKANAN '),
(43, 'DINAS KOMUNIKASI, INFORMASI DAN STATISTIK');

-- --------------------------------------------------------

--
-- Table structure for table `dns_kominfo`
--

CREATE TABLE `dns_kominfo` (
  `id_kominfo` int(11) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `kebutuhan` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dns_kominfo`
--

INSERT INTO `dns_kominfo` (`id_kominfo`, `pangkat`, `kebutuhan`, `keterangan`) VALUES
(3, '1', 6, '1 Sedang di proses'),
(4, '2', 4, '3 Sedang di proses'),
(5, '3', 4, '4 Sedang di proses'),
(6, '4', 4, '5 Sedang di proses'),
(7, '5', 4, '6 Sedang di proses'),
(8, '6', 4, '7 Sedang di proses'),
(9, '7', 4, '8 Sedang di proses'),
(10, '8', 4, '9 Sedang di proses'),
(11, '9', 4, '10 Sedang di proses'),
(12, '10', 4, '11 Sedang di proses'),
(13, '11', 4, '12 Sedang di proses'),
(14, '12', 4, '13 Sedang di proses'),
(15, '13', 4, '14 Sedang di proses'),
(16, '14', 4, '15 Sedang di proses'),
(17, '15', 4, '16 Sedang di proses'),
(18, '16', 4, '17 Sedang di proses'),
(19, '17', 4, '18 Sedang di proses');

-- --------------------------------------------------------

--
-- Table structure for table `jabfung`
--

CREATE TABLE `jabfung` (
  `id_jabfung` int(11) NOT NULL,
  `nama_jabfung` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabfung`
--

INSERT INTO `jabfung` (`id_jabfung`, `nama_jabfung`) VALUES
(1, 'Analisis Kepegawaian / Madya'),
(2, 'Analisis Kepegawaian / Muda'),
(3, 'Analis Kepegawaian / Pertama'),
(4, 'Analis Kepegawaian / Pelaksana Lanjutan'),
(5, 'Analis Kepegawaian / Pelaksana'),
(6, 'Arsiparis / Muda'),
(7, 'Arsiparis / Pertama'),
(8, 'Arsiparis / Penyelia'),
(9, 'Assessor SDM Aparatur / Utama'),
(10, 'Assessor SDM Aparatur / Madya'),
(11, 'Assessor SDM Aparatur / Muda\r\n'),
(12, 'Assessor SDM Aparatur / Pertama'),
(13, 'Perencana / Muda'),
(14, 'Perencana / Pertama'),
(15, 'Pranata Komputer / Muda'),
(16, 'Pranata Komputer / Pertama'),
(17, 'Pranata Komputer / Pelaksana Lanjutan'),
(18, 'Pranata Komputer / Pelaksana\r\n'),
(37, 'Polisi Pamong Praja / Pertama'),
(38, 'Polisi Pamong Praja / Pelaksana Pemula'),
(39, 'Polisi Pamong Praja / Pelaksana'),
(40, 'Perencana / Madya');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan`
--

CREATE TABLE `kebutuhan` (
  `id_kebutuhan` int(11) NOT NULL,
  `nama_dinas` varchar(100) NOT NULL,
  `id_pangkat` int(11) NOT NULL,
  `kebutuhan_pegawai` int(11) NOT NULL,
  `tersedia` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `nama_pangkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `nama_pangkat`) VALUES
(1, 'I.A / Juru Muda'),
(2, 'I.B / Juru Muda Tingkat 1'),
(3, 'I.C / Juru'),
(4, 'I.D / Juru Tingkat 1'),
(5, 'II.A / Pengatur Muda'),
(6, 'II.B / Pengatur Muda Tingkat 1'),
(7, 'II.C / Pengatur'),
(8, 'II.D / Pengatur Tingkat 1'),
(9, 'III.A / Penata Muda'),
(10, 'III.B / Penata Muda Tingkat 1'),
(11, 'III.C / Penata'),
(12, 'III.D / Penata Tingkat 1'),
(13, 'IV.A / Pembina'),
(14, 'IV.B / Pembina Tingkat 1'),
(15, 'IV.C / Pembina Utama Muda'),
(16, 'IV.D / Pembina Utama Madya'),
(17, 'IV.E / Pembina Utama'),
(18, '');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pangkat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jabfung` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `perpres` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `bagian` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `opd` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jenis_adm` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `perjalanan_berkas` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_sk` date NOT NULL,
  `dinas` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `pangkat`, `jabfung`, `perpres`, `bagian`, `opd`, `jenis_adm`, `perjalanan_berkas`, `tgl_sk`, `dinas`) VALUES
(186, '', '', '18', '40', 'Nomor 17 Tahun 2013', 'Sub Bidang Pensiun Bidang Administrasi Kepegawaian', 'BKD PROV RIAU', 'Kenaikan', '', '1970-01-01', '1'),
(187, 'YULIA RAZILA NINGSIH, S.Si, M.TI', '198207032006042027', '11', '1', 'Nomor 17 Tahun 2013', 'Sub Bidang Kepangkatan Bidang Mutasi', 'BKD PROV RIAU', 'Kenaikan', 'Kpts. 824.3/BKD-MT/1034', '2014-12-30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `jabatan`, `password`, `level`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(21, 'pegawai', 'pegawai@gmail.com', 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dinas`
--
ALTER TABLE `dinas`
  ADD PRIMARY KEY (`id_dinas`);

--
-- Indexes for table `dns_kominfo`
--
ALTER TABLE `dns_kominfo`
  ADD PRIMARY KEY (`id_kominfo`) USING BTREE;

--
-- Indexes for table `jabfung`
--
ALTER TABLE `jabfung`
  ADD PRIMARY KEY (`id_jabfung`);

--
-- Indexes for table `kebutuhan`
--
ALTER TABLE `kebutuhan`
  ADD PRIMARY KEY (`id_kebutuhan`),
  ADD KEY `id_pangkat` (`id_pangkat`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dinas`
--
ALTER TABLE `dinas`
  MODIFY `id_dinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12339;

--
-- AUTO_INCREMENT for table `dns_kominfo`
--
ALTER TABLE `dns_kominfo`
  MODIFY `id_kominfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jabfung`
--
ALTER TABLE `jabfung`
  MODIFY `id_jabfung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kebutuhan`
--
ALTER TABLE `kebutuhan`
  ADD CONSTRAINT `id_pangkat` FOREIGN KEY (`id_pangkat`) REFERENCES `pangkat` (`id_pangkat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
