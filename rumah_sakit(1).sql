-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 08:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama`, `password`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'tiknocantik', 'sutikno', '$2y$10$Phd0uYdhpUWke2.4jgR67OTtKjXAQ.bt9qSN1DBSsS64/o.Z5qeR6', '081235', 'Tambak Rejo', '2021-08-12 08:42:22', '2021-08-12 08:42:22'),
(2, 'jonathan123', 'jonathan', '$2y$10$BtD19nl0OILeb0yQGKjhQe4gSEOz.QjqtOnCbNAlyzfALfsnB/F1q', '0812356485', 'Magetan', '2021-08-13 05:37:10', '2021-08-13 05:37:10'),
(3, 'joviannnku', 'joviannn', 'jovianku123', '34123', 'asdsad', NULL, NULL),
(4, 'vianulhag', 'jovianulhag', '$2y$10$vCGuBa906iGv15FQ0SU5SeJvmaFa7Ge4jZtBa7quuJjfWTXDzJpzW', '04735438', 'Tambran', '2021-08-13 07:10:12', '2021-08-13 07:10:12'),
(5, 'jovianulhaq', 'jovian', '$2y$10$MqKLSonpb.8YxN9qcjtvuuTLpeb69kvdiew3.vzEXOZ.jGHbxSwjK', '0812354', 'Magetan', '2021-08-14 19:54:50', '2021-08-14 19:54:50'),
(6, 'agilganteng123', 'Agil', '$2y$10$8MehIlfoXaPghuFEcSoESewc2c4uyDpzM6fTJrVpKHMJ/AO8a1CQu', '081255', 'Tambran', '2021-08-20 01:42:43', '2021-08-20 01:42:43'),
(7, 'adasasda', 'asdasasd', '$2y$10$1qjyn/kqb/hMOP.DcMOhHebtaeYfl.11.GQ9o7fIbuLU/Cp/T4TSy', '13541514', 'sadsada', '2021-08-20 01:47:48', '2021-08-20 01:47:48'),
(8, 'agildanar123', 'Agil Danar Yudistira', '$2y$10$61ABjYXYIIYkNOkQI5gkt.p9HSDfwFYDyvhxD5CgbCTMHZotwRq66', '0823563584', 'TBRNMGT', '2021-08-20 01:52:06', '2021-08-20 01:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antri` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `nomor_antrian` varchar(255) DEFAULT NULL,
  `estimasi_waktu` varchar(255) NOT NULL,
  `tanggal_berobat` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antri`, `nama_pasien`, `nomor_antrian`, `estimasi_waktu`, `tanggal_berobat`, `updated_at`) VALUES
(191, 'Jack', '4', '01:03:13PM', '2021-10-21', '2021-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(100) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `hari_jaga` varchar(255) NOT NULL,
  `pukul_jaga` varchar(255) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nip`, `foto`, `nama_dokter`, `spesialis`, `hari_jaga`, `pukul_jaga`, `updated_at`, `created_at`) VALUES
(9, '35200123', '1629376900_ef49119e99f422865861.jpg', 'Dr. Frisca', 'Kulit dan Kelamin', 'Minggu', '24.00 - 02.00 WIB', '2021-08-19', '2021-08-19'),
(10, '035131', '1629379068_a68cd084f293ac463e8f.jpg', 'Dr. Louis', 'Tumbuh Kembang', 'Sabtu', '12.00 - 14.00 WIB', '2021-08-19', '2021-08-19'),
(12, '35203156', '1629379428_ced18cccf1d2683fe4bf.jpg', 'Dr. Nisa', 'Bedah Disgestif atau Pencernaan', 'Minggu', '2400 - 02.00 WIB', '2021-08-19', '2021-08-19'),
(13, '321516', '1629380274_3b0ba98011ec92b40772.jpg', 'Dr. Angel', 'Hati', 'Sabtu', '07.00 - 12.00 WIB', '2021-08-19', '2021-08-19'),
(14, '3522034', '1629380331_262ffc5518d8ea438bfb.jpg', 'Dr. Hafis', 'Anak', 'Kamis', '14.00 - 15.00 WIB', '2021-08-19', '2021-08-19'),
(15, '351235', '1629380914_0a015f138c3216b1a6dc.jpg', 'Dr. Henry', 'Bedah Umum', 'Kamis - Jumat', '13.00 - 15.00 WIB', '2021-08-19', '2021-08-19'),
(16, '3520.2', '1629441545_b4a1406192bcfc037b09.jpg', 'Dr. Raka', 'Kebidanan', 'Minggu', '24.00 - 01.00 WIB', '2021-08-20', '2021-08-19'),
(17, '0552372', '1629440409_db233ae06182c728f82d.png', 'dr. Harvard', 'Ortopedi', 'senin-selasa', '19.00 - 20.00 WIB', '2021-08-20', '2021-08-20'),
(18, '3562', '1629440666_9504425684f20aa36b47.png', 'dr. Enji', 'Hati', 'selasa-jumat', '14.00 - 23.00 WIB', '2021-08-20', '2021-08-20'),
(19, '13453613631', '1629440760_13a319214121331b847f.png', 'dr. selpi', 'Kebidanan', 'Sabtu-Minggu', '18.00-21.00', '2021-08-20', '2021-08-20'),
(20, '20014', '1634492292_b072776ad51ee252fda3.jpg', 'dr. Rahma', 'Anak', 'Senin - Selasa', '08.00 - 12.00 WIB', '2021-10-17', '2021-10-17'),
(22, '2443124', '1638887741_b78ea3a86d7bd61e2012.jpg', 'asfas', 'Bedah Umum', '12', '08.00 - 12.00 WIB', '2021-12-07', '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kependudukan`
--

CREATE TABLE `kependudukan` (
  `id` int(255) NOT NULL,
  `ktp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kependudukan`
--

INSERT INTO `kependudukan` (`id`, `ktp`) VALUES
(125, '123'),
(126, '456\r\n'),
(127, '789'),
(128, '1112'),
(129, '156'),
(130, '433'),
(131, '151'),
(132, '552'),
(133, '111'),
(134, '666'),
(135, '555'),
(136, '999'),
(137, '696');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1628736350, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(110) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nomor_rm` int(255) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `nomor_bpjs` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `tanggal_berobat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nik`, `nomor_rm`, `nama_pasien`, `jenis_kelamin`, `tanggal_lahir`, `nomor_telepon`, `Alamat`, `nomor_bpjs`, `updated_at`, `tanggal_berobat`) VALUES
(32368, '123', 183, 'Sahari Kurniawan', 'Laki-Laki', '2021-10-05', '081229990721', 'Magetan', '08554568', '2021-10-20 08:41:14', '2021-10-15 01:51:06'),
(32369, '789', 330, 'Sahara Kunawan', 'Laki-Laki', '12/10/2021', '081235648', 'Madiun', NULL, '2021-10-15 01:52:38', '2021-10-15 01:52:38'),
(32370, '156', 2007, 'Saepul', 'Laki-Laki', '07/10/2021', '0898822', 'Magtan', NULL, '2021-10-20 08:16:15', '2021-10-20 08:16:15'),
(32371, '552', 1133, 'James', 'Laki-Laki', '13/10/2021', '08213123', 'Magetan', NULL, '2021-10-20 08:30:10', '2021-10-20 08:30:10'),
(32372, '433', 1479, 'Jackson', 'Perempuan', '05/10/2021', '09213123', 'asdasd', NULL, '2021-10-20 08:55:24', '2021-10-20 08:55:24'),
(32373, '999', 2233, 'John', 'Laki-Laki', '08/10/2021', '0812342', 'Magetan', NULL, '2021-10-20 20:55:40', '2021-10-20 20:55:40'),
(32374, '666', 126, 'Dikson', 'Laki-Laki', '08/10/2021', '081237', 'Magetan', '09877', '2021-10-20 22:50:14', '2021-10-20 22:50:14'),
(32375, '696', 1195, 'Rod', 'Laki-Laki', '16/10/2021', '089772', 'Magetan', NULL, '2021-10-20 23:16:43', '2021-10-20 23:16:43'),
(32376, '111', 2579, 'Jack', 'Laki-Laki', '07/10/2021', '0876555', 'Magetan', NULL, '2021-10-20 23:56:13', '2021-10-20 23:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `pasien_bpjs`
--

CREATE TABLE `pasien_bpjs` (
  `id_pasienbpjs` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `nomor_bpjs` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `tanggal_berobat` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penyakit`
--

CREATE TABLE `riwayat_penyakit` (
  `id_riwayat` int(11) NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `nomor_rm` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `tanggal_berobat` date DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_penyakit`
--

INSERT INTO `riwayat_penyakit` (`id_riwayat`, `riwayat_penyakit`, `nama_pasien`, `nomor_rm`, `spesialis`, `tanggal_berobat`, `updated_at`) VALUES
(219, 'Sakit Perut', 'Sahari Kurniawan', '426', 'Bedah Disgestif atau Pencernaan', '2021-10-15', 2021),
(220, 'Diare', 'Sahari Kurniawan', '426', 'Bedah Disgestif atau Pencernaan', '2021-10-15', 2021),
(221, 'Sakit Mata', 'Sahara Kunawan', '330', 'Anak', '2021-10-15', 2021),
(222, 'Alergi', 'Sahari Kurniawan', '330', 'Kulit dan Kelamin', '2021-10-15', 2021),
(223, 'Perut', 'Saepul', '2007', 'Bedah Umum', '2021-10-20', 2021),
(224, 'Sakit Mata', 'James', '1133', 'Anak', '2021-10-20', 2021),
(225, 'Perut', 'Jackson', '1479', 'Bedah Umum', '2021-10-20', 2021),
(226, 'Diare', 'John', '2233', 'Anak', '2021-10-20', 2021),
(227, 'Perut', 'Dikson', '126', 'Bedah Disgestif atau Pencernaan', '2021-10-20', 2021),
(228, 'Pusing', 'Rod', '1195', 'Ortopedi', '2021-10-20', 2021),
(229, 'Perut', 'Jack', '2579', 'Ortopedi', '2021-10-20', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` int(11) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`, `spesialis`, `updated_at`, `created_at`) VALUES
(9, 'Ortopedi', '2021-08-12 04:43:45', '2021-08-10 03:49:35'),
(12, 'Kebidanan', '2021-08-10 09:10:54', '2021-08-10 09:10:54'),
(13, 'Anak', '2021-08-10 09:11:02', '2021-08-10 09:11:02'),
(14, 'Tumbuh Kembang', '2021-08-10 09:11:16', '2021-08-10 09:11:16'),
(15, 'Bedah Umum', '2021-08-10 09:11:37', '2021-08-10 09:11:37'),
(16, 'Bedah Disgestif atau Pencernaan', '2021-08-19 08:25:35', '2021-08-10 09:12:07'),
(17, 'Bedah Saraf', '2021-08-10 09:12:24', '2021-08-10 09:12:24'),
(18, 'Paru', '2021-08-10 09:12:48', '2021-08-10 09:12:48'),
(20, 'Kulit dan Kelamin', '2021-08-10 09:13:07', '2021-08-10 09:13:07'),
(22, 'Hati', '2021-08-19 08:37:21', '2021-08-19 08:37:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antri`),
  ADD KEY `nama_pasien` (`nama_pasien`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD UNIQUE KEY `nama_dokter` (`nama_dokter`),
  ADD KEY `spesialis` (`spesialis`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `nama_dokter` (`nama_dokter`);

--
-- Indexes for table `kependudukan`
--
ALTER TABLE `kependudukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pasien_bpjs`
--
ALTER TABLE `pasien_bpjs`
  ADD PRIMARY KEY (`id_pasienbpjs`);

--
-- Indexes for table `riwayat_penyakit`
--
ALTER TABLE `riwayat_penyakit`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`),
  ADD UNIQUE KEY `spesialis` (`spesialis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kependudukan`
--
ALTER TABLE `kependudukan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32377;

--
-- AUTO_INCREMENT for table `pasien_bpjs`
--
ALTER TABLE `pasien_bpjs`
  MODIFY `id_pasienbpjs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `riwayat_penyakit`
--
ALTER TABLE `riwayat_penyakit`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`spesialis`) REFERENCES `spesialis` (`spesialis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`nama_dokter`) REFERENCES `dokter` (`nama_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
