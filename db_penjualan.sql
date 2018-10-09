-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2018 pada 01.36
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_jual` int(20) DEFAULT NULL,
  `stok` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `kategori_id`, `nama_barang`, `harga_jual`, `stok`, `created_at`, `updated_at`, `gambar`) VALUES
(7, 1, 'PC Gaming', 10000000, 5, '2018-07-28 13:11:30', '2018-07-31 11:39:24', 'public/gambar/eZNAxvPN7fb3TptkehaydNjn7PigVLpCYoUTZZNy.jpeg'),
(8, 2, 'Gaming Chair', 2500000, 2, '2018-07-28 13:12:35', '2018-07-31 11:38:43', 'public/gambar/J0bN2igMJBQrZO7WyOULiTnhJ4cd50A2XWnB1aUc.jpeg'),
(9, 2, 'Monitor Gaming', 20000000, 3, '2018-07-28 13:16:37', '2018-07-31 11:39:57', 'public/gambar/eWMej7lkcK3csAbkggEZOAedKLNWqGpet85iV8wP.jpeg'),
(10, 1, 'Prosesor Ryzen 7', 4500000, 4, '2018-07-28 13:18:17', '2018-07-31 11:40:46', 'public/gambar/01AQveBJrZI2igksG25ID7TrhYvElt72PVwNiA2y.jpeg'),
(11, 1, 'VGA gigabyte 1080ti', 10000000, 3, '2018-07-28 14:47:06', '2018-07-31 11:40:54', 'public/gambar/Op13M92jGzADaycfl8JSX8bJotEoqvzoIYCkHw5R.jpeg'),
(12, 1, 'PowerSupply', 500000, 3, '2018-07-28 15:47:15', '2018-07-31 11:40:38', 'public/gambar/GByELvoNl6jEx4JWzZJE8Pz3w06sDwXonKKdqMt0.jpeg'),
(13, 1, 'Motherboard MSIGaming', 4000000, 3, '2018-07-29 06:25:50', '2018-07-29 06:25:50', 'public/gambar/sLqoTiCC3Ccm7DkeoinCK4wT1YB44L8G0hYSXkeZ.jpeg'),
(16, 1, 'Keyboard Gamingpro', 450000, 4, '2018-07-29 12:36:20', '2018-07-31 13:28:55', 'public/gambar/s8eJwPgwX1XAAhzCkv8NCaBdENKajPjSHaOF4XNH.jpeg'),
(17, 1, 'SSD 128Gb kingstone', 800000, 5, '2018-07-30 14:08:53', '2018-07-31 11:40:15', 'public/gambar/M2Z0cKNxDhLU3lXvKMLkq5YakmW6TE9KQ3y4Mms6.jpeg'),
(26, 1, 'VGA gtx 1060 6gb', 4500000, 2, '2018-07-31 13:28:22', '2018-07-31 13:28:22', 'public/gambar/IuNA4m5y1keHEPZkXHWV7URQ1lUOTmtRrtR9EjFq.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`) VALUES
(1, 'Baru'),
(2, 'Bekas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `managers`
--

CREATE TABLE `managers` (
  `id` int(10) NOT NULL,
  `nama_manager` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_tlp` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `managers`
--

INSERT INTO `managers` (`id`, `nama_manager`, `alamat`, `no_tlp`, `email`, `created_at`, `updated_at`) VALUES
(2, 'dinda Triasari', 'Paal Merah', '08464546232', 'dinda@gmail.com', '2018-07-27 00:00:00', '2018-07-29 06:36:37'),
(4, 'Victor Parsaulian', 'Jl. Nonmensen', '08147516161', 'victrprslian@gmail.com', '2018-07-27 07:54:26', '2018-07-29 06:36:10'),
(6, 'ahmad alfandi', 'bukit baling', '0896465433', 'ahmadalfandi@gmail.com', '2018-07-27 10:46:52', '2018-07-28 14:47:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `id` int(10) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawais`
--

INSERT INTO `pegawais` (`id`, `nama_pegawai`, `alamat`, `no_telp`, `email`, `created_at`, `updated_at`) VALUES
(2, 'JexSTU', 'Jelutung', '0802323232', 'jexr@gmail.com', '2018-07-24 00:00:00', '2018-07-29 06:37:34'),
(3, 'Lyola Sari', 'Kasang Pudak', '0896343442', 'Lyola@yahoo.com', '2018-07-19 00:00:00', '2018-07-29 06:38:28'),
(6, 'Juwita', 'kasang', '08232323', 'admin@gmail.com', '2018-07-28 16:30:44', '2018-07-28 16:31:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama`, `alamat`, `no_telp`, `email`, `created_at`, `updated_at`) VALUES
(2, 'EnterKomputer', 'jakarta, jkt', '0809648387', 'enterkomputer@gmail.com', '2018-07-18 00:00:00', '2018-07-29 06:41:24'),
(6, 'Eleven Komputer', 'Jambi, Pasar', '08121213232', 'elvenkomputer@gmail.com', '2018-07-27 10:11:03', '2018-07-29 06:40:39'),
(7, 'Amazon.id', 'Brazil, san pierro', '08921213232', 'amazon@gmail.com', '2018-07-28 15:48:28', '2018-07-31 13:26:19'),
(8, 'Ulasan.id', 'Jakarta', '08912132', 'ulasan_id@gmail.com', '2018-07-30 14:06:36', '2018-07-30 14:06:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(10) NOT NULL,
  `pegawai_id` int(10) NOT NULL,
  `barang_id` int(10) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$aDGk4uMZgpAI.jy7OH4npee5kSxMzDY6AETAFsSJLpyz.TSP9Wl5u', 'XA3hsda7gWl9LuLSrjuL9XZfsou1cfGftJX9qx4vE81zYiUJCPkNaWT20oFX', '2018-07-23 00:23:32', '2018-07-23 00:23:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
