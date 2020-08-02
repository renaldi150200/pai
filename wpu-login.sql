-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2020 pada 06.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu-login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `kd_agenda` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jenkel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id`, `kd_agenda`, `nim`, `jenkel`) VALUES
(1, 1, '1915016222', 'i'),
(2, 1, '1915016183', 'i'),
(3, 2, '1915016222', 'i'),
(4, 2, '1915016181', 'i'),
(5, 2, '1915016192', 'i'),
(6, 2, '1915016190', 'i'),
(7, 1, '1915016190', 'i'),
(8, 1, '1815025055', 'a'),
(10, 2, '1915016201', 'i'),
(12, 1, '1915016200', 'i');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `kd_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(50) NOT NULL,
  `tema` varchar(70) NOT NULL,
  `tanggal_agenda` varchar(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `peserta_akhwat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `kd_agenda`, `nama_agenda`, `tema`, `tanggal_agenda`, `kode`, `jumlah_peserta`, `peserta_akhwat`) VALUES
(1, 1, 'Ta\'lim Pengurus', 'Liburan Iya Futur Jangan !', '26/12/2019', '', 4, 1),
(2, 2, 'Taklim syiar', 'den', '2020-01-16', '5d627f', 5, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda_bantu`
--

CREATE TABLE `agenda_bantu` (
  `id` int(11) NOT NULL,
  `kd_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(50) NOT NULL,
  `tema` varchar(70) NOT NULL,
  `tanggal_agenda` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(11) NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `role_id` int(5) NOT NULL,
  `is_active` int(1) NOT NULL,
  `departemen` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `koin_aljazari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `email`, `nama`, `ttl`, `jenkel`, `password`, `alamat`, `role_id`, `is_active`, `departemen`, `status`, `angkatan`, `prodi`, `koin_aljazari`) VALUES
(1, '1915025054@gmail.com', 'Bahar Septian Noor', '11/09/2001', 'i', 'loa', 'Jalan Juanda', 2, 1, 'MSI', 'AKTIF', '2019', 'Ilkom', 0),
(2, '1915016192', 'Ramalidiansyah', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(3, '1915016181', 'Fadhil Hutomo', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(5, '1915016182', 'Jauhari Fadli', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(6, '1915016183', 'Rizki Fitrarijal', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(7, '1815025049', 'Muhammad Riski', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2018', '', 0),
(8, '1915016184', 'Ade Akhmad Ridwan', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(9, '1915016185', 'Argrya Fathurendra', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(10, '1915016186', 'Rahmat', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(11, '1915016187', 'Hardilla', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(12, '1915016188', 'Akhmad Syaukani Akbar', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(13, '1915016189', 'Irvan Deviano Koswara', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(14, '1915016190', 'Niken Prasna Elvares', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(15, '1915016191', 'Naufal Najib', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(17, '1915016193', 'Fariz Fahrian', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(18, '1915016194', 'Indra Wijaya', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(19, '1915016195', 'Ari Hidayat', '', 'i', '', '', 0, 0, 'MSI', 'AKTIF', '2019', '', 0),
(20, '1915016196', 'Riki Aprilianto', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(21, '1915016197', 'M. Ihsan Nur Rahman', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(22, '1915016198', 'Feriansyah', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(23, '1915016199', 'Said Saleh Ali Idrus', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(24, '1915016200', 'Syahrul Ramadhan', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(25, '1915016201', 'Taufikurrahman', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(26, '1915016223', 'Ari Samudra Putra Nugraha', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(27, '1915016204', 'Muhammad Arman', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(28, '1915016205', 'Rupi Masini', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(29, '1915016206', 'Maulana Yusuf', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(30, '1915016207', 'Salas Sepkardianto', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(31, '1915016208', 'Asrofi Aprizaldi', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(32, '1915016209', 'Turmudi', '', 'i', '', '', 0, 0, 'KPSDM', 'AKTIF', '2019', '', 0),
(33, '1815025064', 'Afwan Argiza Setiawan', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(34, '1915016210', 'Syahril', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(35, '1915016211', 'Muhammad Risqi Maulana', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(36, '1915016212', 'Muhammad Fauzan', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(37, '1915016213', 'Irfan Fadilah', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(38, '1915016214', 'Muhammad Iqbal Zamzami', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(39, '1915016215', 'Aidil Saputra', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(40, '1915016216', 'Sulthon Mutakim Rahmatullah', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(41, '1915016217', 'Muhammad Azroi', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(42, '1915016218', 'Yuvanda Ramadani', '', 'i', '', '', 0, 0, 'SPK', 'AKTIF', '2019', '', 0),
(43, '1915016220', 'Reza Aryawijaya', '', 'i', '', '', 0, 0, 'BUD', 'AKTIF', '2019', '', 0),
(44, '1915016221', 'Aad Aries Suntara', '', 'i', '', '', 0, 0, 'BUD', 'AKTIF', '2019', '', 0),
(45, '1915016222', 'Ramli', '', 'i', '', '', 0, 0, 'BUD', 'AKTIF', '2019', '', 0),
(47, '1915016224', 'Sendi R.', '', 'i', '', '', 0, 0, 'BUD', 'AKTIF', '2019', '', 0),
(48, '1915016225', 'Naufal Zharfran A.', '', 'i', '', '', 0, 0, 'BUD', 'AKTIF', '2019', '', 0),
(49, '1815025054', 'Lilis Andriani', '', 'a', '', '', 0, 0, 'KEMUS', 'AKTIF', '2018', 'ILKOM', 0),
(50, '1815025055', 'Sa\'diah', '', 'a', '', '', 0, 0, 'MSI', 'AKTIF', '2018', 'ILKOM', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `role_id` int(1) NOT NULL,
  `nama_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`role_id`, `nama_role`) VALUES
(3, 'Ketua Umum'),
(2, 'Pengajar'),
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `role_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `role_nama`) VALUES
(5, 'Ahmad Zulkifli', 'akhmadhusaini140699@gmail.com', 'default1.png', '$2y$10$obyHJceYkuC/14NDNpmgXudzppr/Ed1jlsyN.3/ZbpVasKWsejtiy', 1, 1, 1575842194, 'Admin'),
(6, 'Renaldi Panji Wibowo', 'r1815025079@gmail.com', 'default1.png', '$2y$10$/uagjHZdKwTW96xWlytFKu1Gf8xnd/EDPHK.FiGOEizHcpFEp7Vki', 2, 1, 1575935004, 'SPK'),
(7, 'Ahmad Zulkifli', 'mltama1308@gmail.com', 'default1.png', '$2y$10$2/azLRHlHLA.7eVSNVizeOsi24oax4BoXvEnGKetF5CQB/jdJfJMu', 3, 1, 1577266717, 'Ketua Umum'),
(8, 'Renaldi Panji Wibowo', 'renaldi@gmail.com', 'default1.png', '$2y$10$s3QodVt1lLvKx9kKcM8EzeP5VoTy075T7tWGkWUOxMUrzdHPrVkyy', 1, 1, 1596264624, 'Admin'),
(9, 'Friska Nabila Oktavian', 'renaldi@gmail.comd', 'default1.png', '$2y$10$.TvwZDWp4gFLnzv2747...6Sg/9svQFcl69Xf9lVNZEnGp3g5HT9q', 2, 1, 1596275470, 'pengajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(13, 3, 2),
(15, 3, 6),
(16, 3, 7),
(18, 1, 7),
(19, 1, 6),
(20, 1, 3),
(21, 2, 7),
(22, 1, 8),
(23, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id_menu`, `menu`) VALUES
(1, 'admin_login'),
(2, 'User'),
(3, 'Menu'),
(6, 'Data User'),
(7, 'Data Anggota'),
(8, 'Agenda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pengajar'),
(3, 'Ketua Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin_login/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user/myprofile', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu/menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'admin_login/role', 'fas fa-fw fa-user-tie', 1),
(7, 2, 'Change Password', 'user/changepassword', 'fas fa-key', 1),
(8, 6, 'Lihat Data User', 'data/user', 'fas fa-fw fa-user-tie', 1),
(9, 7, 'Lihat Data Anggota', 'data/anggota', 'fas fa-user', 1),
(10, 8, 'Agenda', 'agenda/taklim', 'fas fa-user-tie', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `agenda_bantu`
--
ALTER TABLE `agenda_bantu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`email`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
