-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Sep 2020 pada 12.10
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
-- Database: `db_pai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `id_kelas` varchar(6) NOT NULL,
  `id_mahasiswa` varchar(20) NOT NULL,
  `pertemuan_1` varchar(1) NOT NULL,
  `pertemuan_2` varchar(1) NOT NULL,
  `pertemuan_3` varchar(1) NOT NULL,
  `pertemuan_4` varchar(1) NOT NULL,
  `pertemuan_5` varchar(1) NOT NULL,
  `pertemuan_6` varchar(1) NOT NULL,
  `pertemuan_7` varchar(1) NOT NULL,
  `pertemuan_8` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id`, `id_kelas`, `id_mahasiswa`, `pertemuan_1`, `pertemuan_2`, `pertemuan_3`, `pertemuan_4`, `pertemuan_5`, `pertemuan_6`, `pertemuan_7`, `pertemuan_8`) VALUES
(1, '7', '3', '1', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `amalan_yaumiyah`
--

CREATE TABLE `amalan_yaumiyah` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` varchar(50) NOT NULL,
  `id_kelas` varchar(7) NOT NULL,
  `shalatWajib` int(1) NOT NULL,
  `shalatDhuha` int(1) NOT NULL,
  `tilawah` int(1) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_kelas`
--

CREATE TABLE `anggota_kelas` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` varchar(30) NOT NULL,
  `id_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_kelas`
--

INSERT INTO `anggota_kelas` (`id`, `id_mahasiswa`, `id_kelas`) VALUES
(1, '3', '7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama_fakultas`) VALUES
(1, 'Fakultas Ekonomi dan Bisnis'),
(2, 'Fakultas Ilmu Sosial dan Politik'),
(3, 'Fakultas Pertanian'),
(4, 'Fakultas Kehutanan'),
(5, 'Fakultas Keguruan dan Ilmu Pendidikan (Base)'),
(6, 'Fakultas Perikanan dan Ilmu Kelautan'),
(7, 'Fakultas Hukum'),
(8, 'Fakultas Matematika dan Ilmu Pengetahuan Alam'),
(9, 'Fakultas Teknik'),
(10, 'Fakultas Kedokteran'),
(11, 'Fakultas Kesehatan Masyarakat'),
(12, 'Fakultas Farmasi'),
(13, 'Fakultas Ilmu Budaya'),
(14, 'Fakultas Keguruan dan Ilmu Pendidikan (Pahwlawan)'),
(15, 'Fakultas Keguruan dan Ilmu Pendidikan (Banggeris)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `email_pengajar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kode_kelas`, `nama_kelas`, `desc`, `email_pengajar`) VALUES
(6, 'hw2WiV', 'TPAI Kel-12 Fakultas Teknik', 'Kelompok 12 ', 'eric@gmail.com'),
(7, '9svCVB', 'TPAI 12 Teknik', 'Rabu 12.00 - 14.00', 'renaldi@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `id_fakultas` varchar(80) NOT NULL,
  `prodi` varchar(80) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `role_nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `email`, `nim`, `id_fakultas`, `prodi`, `angkatan`, `ttl`, `alamat`, `no_telp`, `password`, `role_id`, `is_active`, `role_nama`) VALUES
(2, 'Renaldi Panji Wibowo', 'renaaldi@gmail.com', '1915016223', '1', '', '', '', '', '', '$2y$10$YwemXFFCsimli63VxOc6POcuBegQRas.UENA3uNT/Yt6mkNy.o6pS', 3, 1, 'pelajar'),
(3, 'Renaldi Panji Wibowo', 's@gmail.com', '1815025077', '12', '', '', '', '', '', '$2y$10$/pLy3xPPWbWFON3QzUJ9b./fOt9lDsYHEcZdapYVgTwRojsJSTiBK', 3, 1, 'pelajar'),
(4, 'Surya Saputra', 'surya@gmail.com', '1815025099', '9', '', '', '', '', '', '$2y$10$jQuIB9jB7yazF1C2h77UW.xp9n..nzfVkbeMZQXsROhxiXR2sAAF6', 3, 1, 'pelajar'),
(5, 'Renaldi Panji Wibowo', 'r1815025078@gmail.com', '1815025079', '1', '', '', '', '', '', '$2y$10$kYsg1Ip3ughe8Wc1Jps0..afCeS.16IG0XDjBRRYgXDMbkmSROoaO', 3, 1, 'pelajar'),
(6, 'dd', 'a@gmail.com', '1815025076', '1', '', '', '', '', '', '$2y$10$CMJxExd/QWsamczjmLNw1e8L64j9AdQisS0Jd4PbmwI7Yhw04NKEe', 3, 1, 'pelajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` varchar(20) NOT NULL,
  `id_kelas` varchar(6) NOT NULL,
  `id_fakultas` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `id_mahasiswa`, `id_kelas`, `id_fakultas`) VALUES
(1, '3', '7', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `email_pengajar` varchar(100) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `pertemuan_ke` int(2) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_expired` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `email_pengajar`, `id_kelas`, `jenis`, `pertemuan_ke`, `deskripsi`, `link`, `date`, `date_expired`) VALUES
(1, 'renaldi@gmail.com', 7, 'pertemuan', 1, 'Silahkan', 'https://us04web.zoom.us/j/73680340188?pwd=NVVENHNia3h2UUVNOG1JUkJoR1gwdz09', '2020-09-17 02:33:00', '2020-09-17 02:46:00'),
(2, 'renaldi@gmail.com', 7, 'tugas', 2, 'Silahkan', 'https://us04web.zoom.us/j/73680340188?pwd=NVVENHNia3h2UUVNOG1JUkJoR1gwdz09', '2020-09-17 02:42:00', '2020-09-17 02:59:00');

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
(3, 'Pelajar'),
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
  `nim_pengajar` varchar(12) NOT NULL,
  `id_fakultas` varchar(80) NOT NULL,
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

INSERT INTO `user` (`id`, `name`, `email`, `nim_pengajar`, `id_fakultas`, `image`, `password`, `role_id`, `is_active`, `date_created`, `role_nama`) VALUES
(6, 'Renaldi Panji Wibowo', 'r1815025079@gmail.com', '', '', 'default1.png', '$2y$10$/uagjHZdKwTW96xWlytFKu1Gf8xnd/EDPHK.FiGOEizHcpFEp7Vki', 2, 1, 1575935004, 'pengajar'),
(8, 'Surya Saputra', 'renaldi@gmail.com', '', '', 'default1.png', '$2y$10$SfSDjtuw9jGDPgWddPdaK.sXsubiGUvnSwfLbbjcVerQXqljqDjtm', 1, 1, 1596264624, 'Admin'),
(9, 'Friska Nabila Oktavian', 'renaldi@gmail.comd', '', '', 'default1.png', '$2y$10$.TvwZDWp4gFLnzv2747...6Sg/9svQFcl69Xf9lVNZEnGp3g5HT9q', 2, 1, 1596275470, 'pengajar'),
(10, 'renald', 'r@gmail.com', '', '', 'default1.png', '$2y$10$vhmqxuhWEr1i17eGEnFEX.a/J0Art3C4e9f3Rqjadr.CeGZ64oAgK', 3, 1, 1596348040, 'pelajar'),
(12, 'eric contena', 'eric@gmail.com', '', '', 'default1.png', '$2y$10$Wqr7zA.Rj6q0w5t/ODCGpe/uHVdze.mKhOabBhcgqweN1ijPtAqum', 2, 1, 1596348653, 'pengajar'),
(13, 'Friska Nabila Oktavian', 'ahmad@gmail.com', '', '15', 'default1.png', '$2y$10$QoFj1TaeIiGwGDdU5lFXnOVVPMZAxTZRtIftRO/Sk.kVemEqEPfPa', 2, 1, 1600335523, 'pengajar');

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
(3, 2, 4),
(13, 3, 4),
(19, 1, 6),
(20, 1, 5),
(26, 1, 4),
(28, 3, 2),
(29, 2, 2),
(31, 2, 3),
(32, 3, 3),
(33, 3, 0),
(34, 2, 0),
(35, 1, 8),
(36, 1, 3),
(37, 1, 0);

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
(0, 'Kelompok'),
(1, 'admin_login'),
(3, 'Pengumuman'),
(4, 'User'),
(5, 'Menu'),
(6, 'Data User');

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
(3, 'Pelajar'),
(4, 'Ketua TPAI FT');

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
(2, 4, 'My Profile', 'user/myprofile', 'fas fa-fw fa-user', 1),
(3, 4, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 5, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 5, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'admin_login/role', 'fas fa-fw fa-user-tie', 1),
(7, 4, 'Change Password', 'user/changepassword', 'fas fa-key', 1),
(8, 6, 'Lihat Data User', 'data/user', 'fas fa-user-friends', 1),
(10, 8, 'Agenda', 'agenda/taklim', 'fas fa-user-tie', 1),
(12, 3, 'Pengumuman', 'pengumuman', 'fas fa-bullhorn', 1),
(13, 0, 'Daftar Kelompok', 'kelompok', 'fas fa-users', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indeks untuk tabel `amalan_yaumiyah`
--
ALTER TABLE `amalan_yaumiyah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota_kelas`
--
ALTER TABLE `anggota_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_kelas` (`kode_kelas`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`nim`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `amalan_yaumiyah`
--
ALTER TABLE `amalan_yaumiyah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `anggota_kelas`
--
ALTER TABLE `anggota_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
