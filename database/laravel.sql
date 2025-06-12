-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2025 at 10:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsips`
--

CREATE TABLE `arsips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nomor_sop` varchar(255) DEFAULT NULL,
  `file_surat` varchar(255) NOT NULL,
  `waktu_arsip` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tanggal_pembuatan` date DEFAULT NULL,
  `tanggal_revisi` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new_column` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arsips`
--

INSERT INTO `arsips` (`id`, `nomor_surat`, `kategori_id`, `judul`, `nomor_sop`, `file_surat`, `waktu_arsip`, `tanggal_pembuatan`, `tanggal_revisi`, `created_at`, `updated_at`, `new_column`) VALUES
(1, 'I.1', 2, 'Front Office/Penerima Tamu', 'I.1/OT.225/H.12.7/01/2024', 'Surat20250612054418.pdf', '2025-06-12 05:44:18', '2025-01-12', '2025-06-12', '2025-06-11 22:41:02', '2025-06-11 22:44:18', NULL),
(2, 'I.2', 2, 'Pengagendaan Surat Masuk', 'I.2/OT.225/H.12.7/01/2024', 'Surat20250612063244.pdf', '2025-06-12 06:32:44', '2025-01-12', '2025-06-12', '2025-06-11 22:42:00', '2025-06-11 23:32:44', NULL),
(3, 'I.3', 2, 'Pengagendaan Surat Keluar', 'I.13/OT.225/H.12.7/01/2024', 'Surat20250612063437.pdf', '2025-06-12 06:34:37', '2025-01-12', '2025-06-12', '2025-06-11 22:43:43', '2025-06-11 23:34:37', NULL),
(4, 'I.4', 2, 'Kebersihan Kantor', 'I.4/OT.225/H.12.7/01/2024', 'Surat20250612063414.pdf', '2025-06-12 06:34:14', '2024-01-12', '2025-06-12', '2025-06-11 23:34:14', '2025-06-11 23:34:14', NULL),
(5, 'I.5', 2, 'Keamanan Kantor', 'I.5/OT.225/H.12.7/01/2024', 'Surat20250612063541.pdf', '2025-06-12 06:35:41', '2024-01-12', '2025-06-12', '2025-06-11 23:35:41', '2025-06-11 23:35:41', NULL),
(6, 'I.6', 2, 'Pemeliharaan Gedung Kantor', 'I.6/OT.225/H.12.7/01/2024', 'Surat20250612063617.pdf', '2025-06-12 06:36:17', '2024-01-12', '2025-06-12', '2025-06-11 23:36:17', '2025-06-11 23:36:17', NULL),
(7, 'I.7', 2, 'Pemeliharaan Halaman Gedung Kantor', 'I.7/OT.225/H.12.7/01/2024', 'Surat20250612063816.pdf', '2025-06-12 06:38:16', '2024-01-12', '2025-06-12', '2025-06-11 23:38:16', '2025-06-11 23:38:16', NULL),
(8, 'I.8', 2, 'Pemeliharaan Jaringan (Listrik, Telepon, Internet, PDAM, Intercom)', 'I.8/OT.225/H.12.7/01/2024', 'Surat20250612064400.pdf', '2025-06-12 06:44:00', '2024-01-12', '2025-06-12', '2025-06-11 23:44:00', '2025-06-11 23:44:00', NULL),
(9, 'I.9', 2, 'Peminjaman Ruang Rapat', 'I.9/OT.225/H.12.7/01/2024', 'Surat20250612070802.pdf', '2025-06-12 07:08:02', '2024-01-12', '2025-06-12', '2025-06-12 00:08:02', '2025-06-12 00:08:02', NULL),
(10, 'I.10', 2, 'Peminjaman Kendaraan Dinas', 'I.9/OT.225/H.12.7/01/2024', 'Surat20250612070844.pdf', '2025-06-12 07:08:44', '2024-01-12', '2025-06-12', '2025-06-12 00:08:44', '2025-06-12 00:08:44', NULL),
(11, 'I.11', 1, 'Sistem Penyampaian Informasi dan Komunikasi Intern Balai', 'I.11/OT.225/H.12.7/01/2024', 'Surat20250612071015.pdf', '2025-06-12 07:10:15', '2024-01-12', '2025-06-12', '2025-06-12 00:10:15', '2025-06-12 00:10:15', NULL),
(12, 'I.12', 1, 'Sistem Pengendalian Intern', 'I.12/OT.225/H.12.7/01/2024', 'Surat20250612071234.pdf', '2025-06-12 07:12:34', '2024-01-12', '2025-06-12', '2025-06-12 00:12:34', '2025-06-12 00:12:34', NULL),
(13, 'I.13', 2, 'Pengusulan Penetapan Rumah Negara', 'I.13/OT.225/H.12.7/01/2024', 'Surat20250612071648.pdf', '2025-06-12 07:16:48', '2024-01-12', '2025-06-12', '2025-06-12 00:16:48', '2025-06-12 00:16:48', NULL),
(14, 'I.14', 2, 'Tindak Lanjut Hasil Pemeriksaan (LHP)', 'I.14/OT.225/H.12.7/01/2024', 'Surat20250612071820.pdf', '2025-06-12 07:18:20', '2024-01-12', '2025-06-12', '2025-06-12 00:18:20', '2025-06-12 00:18:20', NULL),
(15, 'I.15', 2, 'Pemantauan dan Evaluasi Resiko', 'I.15/OT.225/H.12.7/01/2024', 'Surat20250612071907.pdf', '2025-06-12 07:19:07', '2024-01-12', '2025-06-12', '2025-06-12 00:19:07', '2025-06-12 00:19:07', NULL),
(16, 'I.16', 2, 'Penyusunan SIMAK BMN', 'I.16/OT.225/H.12.7/01/2024', 'Surat20250612072012.pdf', '2025-06-12 07:20:12', '2024-01-12', '2025-06-12', '2025-06-12 00:20:12', '2025-06-12 00:20:12', NULL),
(17, 'I.17', 2, 'Peminjaman Barang Milik Negara', 'I.17/OT.225/H.12.7/01/2024', 'Surat20250612072143.pdf', '2025-06-12 07:21:44', '2024-01-12', '2025-06-12', '2025-06-12 00:21:44', '2025-06-12 00:21:44', NULL),
(18, 'I.18', 2, 'Penatausahaan Barang', 'I.18/OT.225/H.12.7/01/2024', 'Surat20250612072242.pdf', '2025-06-12 07:22:42', '2024-01-12', '2025-06-12', '2025-06-12 00:22:42', '2025-06-12 00:22:42', NULL),
(19, 'I.19', 2, 'Pengajuan Surat Permintaan Pembayaran Langsung (LS)', 'I.19/OT.225/H.12.7/01/2024', 'Surat20250612072439.pdf', '2025-06-12 07:24:39', '2024-01-12', '2025-06-12', '2025-06-12 00:24:39', '2025-06-12 00:24:39', NULL),
(20, 'I.20', 2, 'Verifikasi Pengajuan Dana', 'I.20/OT.225/H.12.7/01/2024', 'Surat20250612072527.pdf', '2025-06-12 07:25:27', '2024-01-12', '2025-06-12', '2025-06-12 00:25:27', '2025-06-12 00:25:27', NULL),
(21, 'I.21', 2, 'Pembuatan Daftar Gaji', 'I.21/OT.225/H.12.7/01/2024', 'Surat20250612072633.pdf', '2025-06-12 07:26:33', '2024-01-12', '2025-06-12', '2025-06-12 00:26:33', '2025-06-12 00:26:33', NULL),
(22, 'I.22', 2, 'Pengajuan Surat Permintaan Pembayaran Ganti Uang (GU/GUP)', 'I.22/OT.225/H.12.7/01/2024', 'Surat20250612072738.pdf', '2025-06-12 07:27:38', '2024-01-12', '2025-06-12', '2025-06-12 00:27:38', '2025-06-12 00:27:38', NULL),
(23, 'I.23', 2, 'Pembayaran Juru Bayar/PUM', 'I.23/OT.225/H.12.7/01/2024', 'Surat20250612072829.pdf', '2025-06-12 07:28:29', '2024-01-12', '2025-06-12', '2025-06-12 00:28:29', '2025-06-12 00:28:29', NULL),
(24, 'I.24', 2, 'Pembukuan Pajak', 'I.24/OT.225/H.12.7/01/2024', 'Surat20250612072904.pdf', '2025-06-12 07:29:04', '2024-01-12', '2025-06-12', '2025-06-12 00:29:04', '2025-06-12 00:29:04', NULL),
(25, 'I.25', 2, 'Pembuatan Impasing Gaji Pegawai', 'I.25/OT.225/H.12.7/01/2024', 'Surat20250612073011.pdf', '2025-06-12 07:30:11', '2024-01-12', '2025-06-12', '2025-06-12 00:30:11', '2025-06-12 00:30:11', NULL),
(26, 'I.26', 2, 'Permintaan dan Pertanggungjawaban Uang Muka Kerja', 'I.26/OT.225/H.12.7/01/2024', 'Surat20250612073158.pdf', '2025-06-12 07:31:58', '2024-01-12', '2025-06-12', '2025-06-12 00:31:58', '2025-06-12 00:31:58', NULL),
(27, 'I.27', 2, 'Permintaan dan Pertanggungjawaban Uang Muka Perjalanan Dinas', 'I.27/OT.225/H.12.7/01/2024', 'Surat20250612073321.pdf', '2025-06-12 07:33:21', '2024-01-12', '2025-06-12', '2025-06-12 00:33:21', '2025-06-12 00:33:21', NULL),
(28, 'I.28', 2, 'Kegiatan Pengelolaan PNBP', 'I.28/OT.225/H.12.7/01/2024', 'Surat20250612074436.pdf', '2025-06-12 07:44:36', '2024-01-12', '2025-06-12', '2025-06-12 00:43:42', '2025-06-12 00:44:36', NULL),
(29, 'I.29', 2, 'Pengadaan Langsung Barang dan Jasa < 200 Juta', 'I.29/OT.225/H.12.7/01/2024', 'Surat20250612074616.pdf', '2025-06-12 07:46:16', '2024-01-12', '2025-06-12', '2025-06-12 00:46:16', '2025-06-12 00:46:16', NULL),
(30, 'I.30', 2, 'Pengadaan Bahan', 'I.30/OT.225/H.12.7/01/2024', 'Surat20250612074733.pdf', '2025-06-12 07:47:33', '2024-01-12', '2025-06-12', '2025-06-12 00:47:33', '2025-06-12 00:47:33', NULL),
(31, 'I.31', 2, 'Permintaan dan Penggunaan Barang Persediaan', 'I.31/OT.225/H.12.7/01/2024', 'Surat20250612074931.pdf', '2025-06-12 07:49:31', '2024-01-12', '2025-06-12', '2025-06-12 00:49:31', '2025-06-12 00:49:31', NULL),
(32, 'I.32', 2, 'Pembuatan Daftar Nominatif dan Daftar Urut Kepangkatan (DUK) Pegawai/SIMASN', 'I.32/OT.225/H.12.7/01/2024', 'Surat20250612075115.pdf', '2025-06-12 07:51:15', '2024-01-12', '2025-06-12', '2025-06-12 00:51:15', '2025-06-12 00:51:15', NULL),
(33, 'I.33', 2, 'Penugasan Diklat Prajabatan', 'I.33/OT.225/H.12.7/01/2024', 'Surat20250612075219.pdf', '2025-06-12 07:52:19', '2024-01-12', '2025-06-12', '2025-06-12 00:52:19', '2025-06-12 00:52:19', NULL),
(34, 'I.34', 2, 'Pengajuan Cuti Pegawai', 'I.34/OT.225/H.12.7/01/2024', 'Surat20250612075346.pdf', '2025-06-12 07:53:46', '2024-01-12', '2025-06-12', '2025-06-12 00:53:46', '2025-06-12 00:53:46', NULL),
(35, 'I.35', 2, 'Pengusulan Formasi Pegawai Baru', 'I.35/OT.225/H.12.7/01/2024', 'Surat20250612075425.pdf', '2025-06-12 07:54:25', '2024-01-12', '2025-06-12', '2025-06-12 00:54:25', '2025-06-12 00:54:25', NULL),
(36, 'I.36', 2, 'Pengangkatan CPNS Menjadi PNS', 'I.36/OT.225/H.12.7/01/2024', 'Surat20250612075601.pdf', '2025-06-12 07:56:02', '2024-01-12', '2025-06-12', '2025-06-12 00:56:02', '2025-06-12 00:56:02', NULL),
(37, 'I.37', 2, 'Pengusulan Kenaikan Pangkat PNS', 'I.37/OT.225/H.12.7/01/2024', 'Surat20250612075930.pdf', '2025-06-12 07:59:30', '2024-01-12', '2025-06-12', '2025-06-12 00:59:30', '2025-06-12 00:59:30', NULL),
(38, 'I.38', 1, 'Penetapan SK Berkala PNS', 'I.38/OT.225/H.12.7/01/2024', 'Surat20250612080018.pdf', '2025-06-12 08:00:18', '2024-01-12', '2025-06-12', '2025-06-12 01:00:18', '2025-06-12 01:00:18', NULL),
(39, 'I.44', 2, 'Pelaksanaan Verifikasi Laporan Keuangan Konsolidasi Tingkat Wilayah', 'I.44/OT.225/H.12.7/01/2024', 'Surat20250612080206.pdf', '2025-06-12 08:02:06', '2024-01-12', '2025-06-12', '2025-06-12 01:02:06', '2025-06-12 01:02:06', NULL),
(40, 'I.45', 2, 'Penetapan Tim Zona Integritas', 'I.45/OT.225/H.12.7/01/2024', 'Surat20250612080314.pdf', '2025-06-12 08:03:14', '2024-01-12', '2025-06-12', '2025-06-12 01:03:14', '2025-06-12 01:03:14', NULL),
(41, 'I.46', 2, 'Pemberian Reward dan Punishment Kinerja', 'I.46/OT.225/H.12.7/01/2024', 'Surat20250612080349.pdf', '2025-06-12 08:03:49', '2024-01-12', '2025-06-12', '2025-06-12 01:03:49', '2025-06-12 01:03:49', NULL),
(42, 'I.47', 1, 'Pengadaan Langsung Barang dan Jasa 2-200 Juta', 'I.47/OT.225/H.12.7/01/2024', 'Surat20250612080445.pdf', '2025-06-12 08:04:45', '2024-01-12', '2025-06-12', '2025-06-12 01:04:45', '2025-06-12 01:04:45', NULL),
(43, 'I.48', 2, 'Pengadaan Langsung Barang dan Jasa 2-200 Juta Dengan UP', 'I.48/OT.225/H.12.7/01/2024', 'Surat20250612080545.pdf', '2025-06-12 08:05:45', '2024-01-12', '2025-06-12', '2025-06-12 01:05:45', '2025-06-12 01:05:45', NULL),
(44, 'I.49', 2, 'Mutasi Pegawai', 'I.49/OT.225/H.12.7/01/2024', 'Surat20250612080730.pdf', '2025-06-12 08:07:30', '2024-01-12', '2025-06-12', '2025-06-12 01:07:30', '2025-06-12 01:07:30', NULL),
(45, 'II.1', 2, 'Penyusunan Bahan Analisis Umpan Balik Pengkajian', 'II.1/OT.225/H.12.7/01/2024', 'Surat20250612080927.pdf', '2025-06-12 08:09:27', '2024-01-12', '2025-06-12', '2025-06-12 01:09:27', '2025-06-12 01:09:27', NULL),
(46, 'II.2', 2, 'Identifikasi Hasil Pengkajian Untuk Komunikasi Kepada Pengguna', 'II.2/OT.225/H.12.7/01/2024', 'Surat20250612081744.pdf', '2025-06-12 08:17:44', '2024-01-12', '2025-06-12', '2025-06-12 01:17:44', '2025-06-12 01:17:44', NULL),
(47, 'II.3', 2, 'Penyusunan Laporan Tahunan', 'II.3/OT.225/H.12.7/01/2024', 'Surat20250612082053.pdf', '2025-06-12 08:20:53', '2024-01-12', '2025-06-12', '2025-06-12 01:20:53', '2025-06-12 01:20:53', NULL),
(48, 'II.4', 2, 'Pelayanan Informasi Dan Dokumentasi (PID)', 'II.4/OT.225/H.12.7/01/2024', 'Surat20250612082436.pdf', '2025-06-12 08:24:36', '2024-01-12', '2025-06-12', '2025-06-12 01:24:36', '2025-06-12 01:24:36', NULL),
(49, 'II.5', 2, 'Entry Data Perpustakaan', 'II.5/OT.225/H.12.7/01/2024', 'Surat20250612082716.pdf', '2025-06-12 08:27:16', '2024-01-12', '2025-06-12', '2025-06-12 01:27:16', '2025-06-12 01:27:16', NULL),
(50, 'II.6', 2, 'Penerimaan Koleksi Buku Perpustakaan', 'II.6/OT.225/H.12.7/01/2024', 'Surat20250612082859.pdf', '2025-06-12 08:28:59', '2024-01-12', '2025-06-12', '2025-06-12 01:28:59', '2025-06-12 01:28:59', NULL),
(51, 'II.7', 2, 'Pelayanan Peminjaman Buku Perpustakaan', 'II.7/OT.225/H.12.7/01/2024', 'Surat20250612083323.pdf', '2025-06-12 08:33:23', '2024-01-12', '2025-06-12', '2025-06-12 01:33:23', '2025-06-12 01:33:23', NULL),
(52, 'II.8', 2, 'Pelayanan Pengembalian Buku Perpustakaan', 'II.8/OT.225/H.12.7/01/2024', 'Surat20250612083600.pdf', '2025-06-12 08:36:00', '2024-01-12', '2025-06-12', '2025-06-12 01:36:00', '2025-06-12 01:36:00', NULL),
(53, 'II.9', 2, 'Updating Website', 'II.9/OT.225/H.12.7/01/2024', 'Surat20250612083710.pdf', '2025-06-12 08:37:10', '2024-01-12', '2025-06-12', '2025-06-12 01:37:10', '2025-06-12 01:37:10', NULL),
(54, 'II.10', 2, 'Updating Website', 'II.10/OT.225/H.12.7/01/2024', 'Surat20250612083758.pdf', '2025-06-12 08:37:58', '2024-01-12', '2025-06-12', '2025-06-12 01:37:58', '2025-06-12 01:37:58', NULL),
(55, 'III.1', 1, 'Penyiapan Matrik Kegiatan BPSIP', 'III.1/OT.225/H.12.7/01/2024', 'Surat20250612083914.pdf', '2025-06-12 08:39:14', '2024-01-12', '2025-06-12', '2025-06-12 01:39:14', '2025-06-12 01:39:14', NULL),
(56, 'III.2', 1, 'Penyusunan Proposal BPSIP', 'III.2/OT.225/H.12.7/01/2024', 'Surat20250612084302.pdf', '2025-06-12 08:43:03', '2024-01-12', '2025-06-12', '2025-06-12 01:43:03', '2025-06-12 01:43:03', NULL),
(57, 'III.3', 2, 'Pengusulan/Penyusunan Anggaran BPSIP', 'III.3/OT.225/H.12.7/01/2024', 'Surat20250612085237.pdf', '2025-06-12 08:52:37', '2024-01-12', '2025-06-12', '2025-06-12 01:48:42', '2025-06-12 01:52:37', NULL),
(58, 'III.4', 2, 'Penyusunan Laporan I-Prog', 'III.4/OT.225/H.12.7/01/2024', 'Surat20250612085003.pdf', '2025-06-12 08:50:03', '2024-01-12', '2025-06-12', '2025-06-12 01:50:03', '2025-06-12 01:50:03', NULL),
(59, 'III.5', 2, 'Penyusunan Laporan I-Monev', 'III.5/OT.225/H.12.7/01/2024', 'Surat20250612085640.pdf', '2025-06-12 08:56:40', '2024-01-12', '2025-06-12', '2025-06-12 01:55:52', '2025-06-12 01:56:40', NULL),
(60, 'III.6', 2, 'Monitoring dan Evaluasi', 'III.6/OT.225/H.12.7/01/2024', 'Surat20250612085832.pdf', '2025-06-12 08:58:32', '2024-01-12', '2025-06-12', '2025-06-12 01:58:32', '2025-06-12 01:58:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'SOP Makro', 'SOP Makro', '2025-06-11 22:35:51', '2025-06-11 22:35:51'),
(2, 'SOP Mikro', 'SOP Mikro', '2025-06-11 22:36:01', '2025-06-11 22:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_13_132225_buat_tabel_kategori', 1),
(6, '2023_11_13_152228_buat_tabel_arsips', 1),
(7, '2025_03_14_045614_add_tanggal_pembuatan_revisi_to_arsips_table', 1),
(8, '2025_04_09_005858_add_role_to_users_table', 1),
(9, '2025_04_09_031745_update_arsips_table', 1),
(10, '2025_04_21_041034_add_nomor_sop_to_arsips_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'pegawai',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `role`, `email_verified_at`, `password`, `address`, `city`, `country`, `postal`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', 'admin@argon.com', 'admin', NULL, '$2y$10$LpPrcqiN1pZa14wocMOkZuRaPJs9vzHJx4TThIjqnM9IEr66/CQ0q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsips`
--
ALTER TABLE `arsips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arsips_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsips`
--
ALTER TABLE `arsips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsips`
--
ALTER TABLE `arsips`
  ADD CONSTRAINT `arsips_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
