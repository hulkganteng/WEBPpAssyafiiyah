-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2024 pada 04.45
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assyafiiyah_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `amaliyah`
--

CREATE TABLE `amaliyah` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `amaliyah`
--

INSERT INTO `amaliyah` (`id`, `judul`, `deskripsi`, `created_at`) VALUES
(1, 'Amaliyah Harian', 'Deskripsi Amaliyah...', '2024-07-01 16:36:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `created_at`, `gambar`) VALUES
(3, 'Kegiatan Masa Ta\'aruf Pesantren', 'santri Assyafiiyah aktfi', '2024-07-27 05:45:35', 'WhatsApp Image 2024-07-27 at 10.25.48_5c2e8ffe.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biografi_pemangku`
--

CREATE TABLE `biografi_pemangku` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `biografi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biografi_pemangku`
--

INSERT INTO `biografi_pemangku` (`id`, `nama`, `biografi`, `created_at`) VALUES
(1, 'Pemangku Pesantren', 'Biografi Pemangku...', '2024-07-01 16:36:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biografi_pendiri`
--

CREATE TABLE `biografi_pendiri` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `biografi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biografi_pendiri`
--

INSERT INTO `biografi_pendiri` (`id`, `nama`, `biografi`, `created_at`) VALUES
(1, 'Pendiri Pesantren\r\n\r\nKyai Muhammad Nasih Ali', 'beliau dilahirkan di desa Wangen', '2024-07-01 16:36:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`) VALUES
(4, 'Kegiatan Diniyah', 'kegiatan Diniyah', 'yidin.jpg', '2024-07-30 04:17:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `alamat`, `program_studi`, `status`, `created_at`) VALUES
(1, 'Santri 1', 'Alamat Santri 1', 'Program Studi 1', 'Aktif', '2024-07-01 16:36:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_pesantren`
--

CREATE TABLE `profil_pesantren` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `visi_misi` text NOT NULL,
  `moto` text NOT NULL,
  `ekstrakurikuler` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profil_pesantren`
--

INSERT INTO `profil_pesantren` (`id`, `deskripsi`, `created_at`, `visi_misi`, `moto`, `ekstrakurikuler`) VALUES
(1, 'Pondok Pesantren Assyafiiyah adalah ...', '2024-07-01 16:36:08', '', '', ''),
(2, 'Pondok Pesantren Assyafiiyah adalah ...', '2024-07-01 16:55:22', 'Visi dan Misi Pesantren...', 'Moto Pesantren...', 'Ekstrakurikuler Pesantren...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ustad`
--

CREATE TABLE `ustad` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ustad`
--

INSERT INTO `ustad` (`id`, `nama`, `alamat`, `jabatan`, `created_at`, `gambar`) VALUES
(2, 'Muhammad Lukman al khakim', 'Gresik', 'TU', '2024-07-27 03:10:52', 'afgn.jpg'),
(3, 'Ust Sjafari', 'Bungah Gresik', 'Guru', '2024-07-27 06:07:33', '1714902430051.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `amaliyah`
--
ALTER TABLE `amaliyah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biografi_pemangku`
--
ALTER TABLE `biografi_pemangku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biografi_pendiri`
--
ALTER TABLE `biografi_pendiri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_pesantren`
--
ALTER TABLE `profil_pesantren`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ustad`
--
ALTER TABLE `ustad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `amaliyah`
--
ALTER TABLE `amaliyah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `biografi_pemangku`
--
ALTER TABLE `biografi_pemangku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biografi_pendiri`
--
ALTER TABLE `biografi_pendiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profil_pesantren`
--
ALTER TABLE `profil_pesantren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ustad`
--
ALTER TABLE `ustad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
