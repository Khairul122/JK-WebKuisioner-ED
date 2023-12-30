-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2023 pada 07.49
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penilaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `nilai` float NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `log` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `log`, `date`) VALUES
(1, 'Admin Login', '2018-06-04 19:22:22'),
(2, 'Admin Logout', '2018-06-04 19:27:07'),
(3, 'Admin Login', '2018-06-04 19:27:18'),
(4, 'Admin Logout', '2018-06-04 19:28:53'),
(5, '15090070 Login', '2018-06-04 19:29:52'),
(6, '15090070 Logout', '2018-06-04 19:32:13'),
(7, '16090088 Login', '2018-06-04 19:33:16'),
(8, '16090088 memberikan penilaian terhadap dosen yang ber id 1', '2018-06-04 19:33:52'),
(9, '16090088 Logout', '2018-06-04 19:34:09'),
(10, 'Admin Login', '2018-06-04 19:34:16'),
(11, 'Admin menambahkan user dengan nim16090003dari prodi Teknik Informatika', '2018-06-04 19:37:29'),
(12, 'Admin menambahkan user dengan nim 16090077 dari prodi Teknik Informatika', '2018-06-04 19:38:34'),
(13, 'Admin menghapus user dengan id9', '2018-06-04 19:41:08'),
(14, 'Admin Logout', '2018-06-04 19:44:58'),
(15, '16090077 Login', '2018-06-04 19:47:04'),
(16, '16090077 Logout', '2018-06-04 19:47:06'),
(17, '16090077 Login', '2018-06-04 19:48:03'),
(18, '16090077 Logout', '2018-06-04 19:48:08'),
(19, 'Admin Login', '2018-06-04 19:50:24'),
(20, 'Admin Logout', '2018-06-04 19:50:38'),
(21, 'Admin Login', '2023-12-19 00:54:02'),
(22, 'Admin Logout', '2023-12-19 00:55:08'),
(23, '15090070 Login', '2023-12-19 00:55:12'),
(24, '15090070 Logout', '2023-12-19 00:55:37'),
(25, 'Admin Login', '2023-12-19 00:55:40'),
(26, 'Admin Logout', '2023-12-19 00:55:58'),
(27, '15090079 Login', '2023-12-19 00:56:05'),
(28, '15090079 Logout', '2023-12-19 00:56:33'),
(29, 'Admin Login', '2023-12-19 00:56:37'),
(30, 'Admin menambahkan user dengan kode  dari bidang Lapangan', '2023-12-19 01:15:54'),
(31, 'Admin menambahkan user dengan kode 25521 dari bidang Lapangan', '2023-12-19 01:17:56'),
(32, 'Admin mengedit data user dengan id 11 ', '2023-12-19 01:20:12'),
(33, 'Admin menghapus user dengan id 1', '2023-12-19 01:20:17'),
(34, 'Admin menghapus user dengan id 12', '2023-12-19 01:20:18'),
(35, 'Admin menghapus user dengan id 11', '2023-12-19 01:20:19'),
(36, 'Admin menambahkan user dengan kode 25521 dari bidang Lapangan', '2023-12-19 01:21:10'),
(37, 'Admin menambahkan user dengan kode 12 dari bidang Lapangan', '2023-12-19 01:24:35'),
(38, 'Admin Logout', '2023-12-19 01:24:45'),
(39, ' Login', '2023-12-19 01:27:11'),
(40, ' Logout', '2023-12-19 01:30:00'),
(41, 'Admin Login', '2023-12-19 01:30:04'),
(42, 'Admin Logout', '2023-12-19 01:31:17'),
(43, ' Login', '2023-12-19 01:31:19'),
(44, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:32:53'),
(45, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:33:56'),
(46, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:34:10'),
(47, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:34:36'),
(48, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:34:37'),
(49, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:34:38'),
(50, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:34:39'),
(51, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:34:40'),
(52, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:34:40'),
(53, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:36:17'),
(54, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 01:37:16'),
(55, ' Logout', '2023-12-19 01:38:24'),
(56, 'Admin Login', '2023-12-19 01:38:30'),
(57, 'Admin Logout', '2023-12-19 02:19:06'),
(58, ' Login', '2023-12-19 02:19:09'),
(59, '12 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 02:19:23'),
(60, ' Logout', '2023-12-19 02:19:27'),
(61, 'Admin Login', '2023-12-19 02:19:30'),
(62, 'Admin menghapus user dengan id 13', '2023-12-19 02:19:38'),
(63, 'Admin menambahkan user dengan kode U001 dari bidang Lapangan', '2023-12-19 02:25:53'),
(64, 'Admin Logout', '2023-12-19 02:26:01'),
(65, ' Login', '2023-12-19 02:26:05'),
(66, '15090070 Logout', '2023-12-19 02:28:20'),
(67, 'Admin Logout', '2023-12-19 02:28:34'),
(68, 'Admin Login', '2023-12-19 02:28:38'),
(69, 'Admin Logout', '2023-12-19 02:28:40'),
(70, ' Login', '2023-12-19 02:29:18'),
(71, ' Logout', '2023-12-19 02:45:00'),
(72, 'Admin Login', '2023-12-19 02:45:05'),
(73, 'Admin Logout', '2023-12-19 02:46:26'),
(74, ' Login', '2023-12-19 02:46:31'),
(75, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-19 02:46:45'),
(76, ' Logout', '2023-12-19 02:46:47'),
(77, 'Admin Login', '2023-12-19 02:46:50'),
(78, 'Admin Login', '2023-12-22 07:48:13'),
(79, 'Admin Logout', '2023-12-22 07:54:48'),
(80, ' Login', '2023-12-22 07:54:58'),
(81, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-22 07:55:16'),
(82, ' Logout', '2023-12-22 07:55:52'),
(83, 'Admin Login', '2023-12-22 07:55:55'),
(84, 'Admin Logout', '2023-12-22 07:56:04'),
(85, ' Login', '2023-12-22 07:56:09'),
(86, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-22 07:58:52'),
(87, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-22 07:59:10'),
(88, ' Logout', '2023-12-22 07:59:19'),
(89, 'Admin Login', '2023-12-22 07:59:23'),
(90, 'Admin Login', '2023-12-30 06:25:51'),
(91, 'Admin Logout', '2023-12-30 06:25:59'),
(92, 'Admin Login', '2023-12-30 06:26:07'),
(93, 'Admin Logout', '2023-12-30 06:26:16'),
(94, ' Login', '2023-12-30 06:26:21'),
(95, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-30 06:43:34'),
(96, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-30 06:44:53'),
(97, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-30 06:44:56'),
(98, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-30 06:45:30'),
(99, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-30 06:46:24'),
(100, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-30 06:48:21'),
(101, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-30 06:48:53'),
(102, 'U001 memberikan penilaian terhadap dosen yang ber id ', '2023-12-30 06:49:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(10) NOT NULL,
  `pertanyaan` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`) VALUES
(1, 'Apakah kamu tidak punya cukup waktu untuk menyelesaikan semua pekerjaan di Perusahaan  PT PLN Krueng Geukueh? '),
(2, 'Apakah beban tugas pekerjaan kamu terlalu berat ? '),
(3, 'Apakah kamu harus bekerja super cepat dalam menyelesaikan pekerjaan kamu?'),
(4, 'Apakah kamu memiliki beban kerja yang berlebihan?'),
(5, 'Apakah kamu diharuskan menghadiri rapat yang jumlahnya sangat banyak?'),
(6, 'Apakah target dan tuntutan tugas terlalu tinggi sehingga memberatkan tugas-tugas kamu?'),
(7, 'Apakah pekerjaan kamu jarang membahayakan fisik kamu? '),
(8, 'Apakah pekerjaan kamu sering menempatkan kamu dalam kondisi tidak sehat?'),
(9, 'Kecelakaan kerja apa yang sering kali terjadi dalam Perusahaan PT PLN Krueng Geukueh? '),
(10, 'Kamu mengalami kesulitan berkomunikasi dengan rekan kerja di PT PLN Krueng Geukueh?'),
(11, ' Kamu tidak memiliki ruang kantor yang cukup luas untuk menjalankan pekerjaan ?'),
(12, ' Apakah kamu memperoleh peralatan kantor yang memadai untuk bekerja di PT PLN Krueng \r\nGeukueh? '),
(13, 'Apakah kamu mendapatkan dukungan layanan yang cukup untuk melaksanakan pekerjaan di \r\npersahaan?'),
(14, ' Apakah kamu mengalami kesulitan memperoleh bahan-bahan habis pakai(seperti \r\nkertas,klip,bolpoin)yang saya butuhkan di PT PLN Krueng Geukueh? '),
(15, 'Apakah ada alat-alat kantor yang kamu butuhkan untuk menjalankan pekerjaan sering kali \r\nrusak atau tidak berfungsi '),
(16, 'Apakah pekerjaan kamu mempunyai jumlah konflik yang besar dan banyak menuntut kamu? '),
(17, ' Apakah kamu tidak tahu apa yang menjadi tanggungjawab pekerjaan yang kamu jalankan di \r\nPerusahaan? '),
(18, 'Apakah kamu tidak tahu pasti apa yang diharapkan Perusahaan dari kamu sehubungan \r\ndengan posisi pekerjaan yang kamu terima? '),
(19, 'Seberapa sering kamu mengalami konflik dalam menjalankan berbagai tugas yang diberikan \r\natasan-atasan kamu didalam PT PLN Krueng Geukueh? '),
(20, 'Apakah kamu merasakan konflik dari tugas pekerjaan yang dibebankan atasan langsung ke \r\nkamu?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `kode` varchar(9) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `level` int(1) NOT NULL DEFAULT 0,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `kode`, `nama`, `bidang`, `password`, `jabatan`, `status`, `level`, `deleted`) VALUES
(5, 'admin', '', 'admin', 'admin', 'ad', 0, 1, 0),
(15, 'U001', 'User', 'Lapangan', 'U001', 'User', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
