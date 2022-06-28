-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2022 pada 06.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('alsahayasha21@gmail.com', '$2y$10$oS47rlOCSv5Az3.rPqhkc.KLBWnLNyvddAZyoAWcR6hsNcSO9gTce', '2022-06-27 21:34:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(20) NOT NULL,
  `about_img` varchar(255) DEFAULT NULL,
  `about_judul` varchar(255) DEFAULT NULL,
  `about_judul2` varchar(255) DEFAULT NULL,
  `about_isi` varchar(255) DEFAULT NULL,
  `about_isi2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `about_img`, `about_judul`, `about_judul2`, `about_isi`, `about_isi2`) VALUES
(1, 'portfolio-2.jpg', 'OUR SERVICE', 'OUR PRODUCT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi voluptatem delectus laborum deleniti. Autem, provident quae nulla distinctio asperiores omnis tempore ducimus accusamus odio quia odit nisi tempora. Voluptate, unde!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi voluptatem delectus laborum deleniti. Autem, provident quae nulla distinctio asperiores omnis tempore ducimus accusamus odio quia odit nisi tempora. Voluptate, unde!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(20) NOT NULL,
  `artikel_img` varchar(255) DEFAULT NULL,
  `artikel_judul` varchar(255) DEFAULT NULL,
  `artikel_isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `artikel_img`, `artikel_judul`, `artikel_isi`) VALUES
(1, 'portfolio-8.jpg', 'JUDUL ARTIKEL', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel2`
--

CREATE TABLE `tbl_artikel2` (
  `id_artikel2` int(20) NOT NULL,
  `artikel_img2` varchar(255) DEFAULT NULL,
  `artikel_judul2` varchar(255) DEFAULT NULL,
  `artikel_isi2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel2`
--

INSERT INTO `tbl_artikel2` (`id_artikel2`, `artikel_img2`, `artikel_judul2`, `artikel_isi2`) VALUES
(1, 'portfolio-8.jpg', 'JUDUL ARTIKEL 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel3`
--

CREATE TABLE `tbl_artikel3` (
  `id_artikel3` int(20) NOT NULL,
  `artikel_img3` varchar(255) DEFAULT NULL,
  `artikel_judul3` varchar(255) DEFAULT NULL,
  `artikel_isi3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel3`
--

INSERT INTO `tbl_artikel3` (`id_artikel3`, `artikel_img3`, `artikel_judul3`, `artikel_isi3`) VALUES
(1, 'portfolio-8.jpg', 'JUDUL ARTIKEL 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_beranda`
--

CREATE TABLE `tbl_beranda` (
  `id_beranda` int(20) NOT NULL,
  `id_about` int(20) DEFAULT NULL,
  `id_service` int(20) DEFAULT NULL,
  `id_project` int(20) DEFAULT NULL,
  `id_imgproject` int(20) DEFAULT NULL,
  `id_imgproject2` int(20) DEFAULT NULL,
  `id_imgproject3` int(20) DEFAULT NULL,
  `id_imgproject4` int(20) DEFAULT NULL,
  `id_imgproject5` int(20) DEFAULT NULL,
  `id_imgproject6` int(20) DEFAULT NULL,
  `id_imgproject7` int(20) DEFAULT NULL,
  `id_imgproject8` int(20) DEFAULT NULL,
  `id_imgproject9` int(20) DEFAULT NULL,
  `id_artikel` int(20) DEFAULT NULL,
  `id_artikel2` int(20) DEFAULT NULL,
  `id_artikel3` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_beranda`
--

INSERT INTO `tbl_beranda` (`id_beranda`, `id_about`, `id_service`, `id_project`, `id_imgproject`, `id_imgproject2`, `id_imgproject3`, `id_imgproject4`, `id_imgproject5`, `id_imgproject6`, `id_imgproject7`, `id_imgproject8`, `id_imgproject9`, `id_artikel`, `id_artikel2`, `id_artikel3`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imgproject`
--

CREATE TABLE `tbl_imgproject` (
  `id_imgproject` int(20) NOT NULL,
  `img_project` varchar(255) DEFAULT NULL,
  `img_judul` varchar(255) DEFAULT NULL,
  `img_isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_imgproject`
--

INSERT INTO `tbl_imgproject` (`id_imgproject`, `img_project`, `img_judul`, `img_isi`) VALUES
(1, 'PRODUCT 1.jpg', 'PRODUCT 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imgproject2`
--

CREATE TABLE `tbl_imgproject2` (
  `id_imgproject2` int(20) NOT NULL,
  `img_project2` varchar(255) DEFAULT NULL,
  `img_judul2` varchar(255) DEFAULT NULL,
  `img_isi2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_imgproject2`
--

INSERT INTO `tbl_imgproject2` (`id_imgproject2`, `img_project2`, `img_judul2`, `img_isi2`) VALUES
(1, 'portfolio-7.jpg', 'PRODUCT 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imgproject3`
--

CREATE TABLE `tbl_imgproject3` (
  `id_imgproject3` int(20) NOT NULL,
  `img_project3` varchar(255) DEFAULT NULL,
  `img_judul3` varchar(255) DEFAULT NULL,
  `img_isi3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_imgproject3`
--

INSERT INTO `tbl_imgproject3` (`id_imgproject3`, `img_project3`, `img_judul3`, `img_isi3`) VALUES
(1, 'portfolio-7.jpg', 'PRODUCT 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imgproject4`
--

CREATE TABLE `tbl_imgproject4` (
  `id_imgproject4` int(20) NOT NULL,
  `img_project4` varchar(255) DEFAULT NULL,
  `img_judul4` varchar(255) DEFAULT NULL,
  `img_isi4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_imgproject4`
--

INSERT INTO `tbl_imgproject4` (`id_imgproject4`, `img_project4`, `img_judul4`, `img_isi4`) VALUES
(1, 'portfolio-7.jpg', 'PRODUCT 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imgproject5`
--

CREATE TABLE `tbl_imgproject5` (
  `id_imgproject5` int(20) NOT NULL,
  `img_project5` varchar(255) DEFAULT NULL,
  `img_judul5` varchar(255) DEFAULT NULL,
  `img_isi5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_imgproject5`
--

INSERT INTO `tbl_imgproject5` (`id_imgproject5`, `img_project5`, `img_judul5`, `img_isi5`) VALUES
(1, 'portfolio-7.jpg', 'PRODUCT 5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imgproject6`
--

CREATE TABLE `tbl_imgproject6` (
  `id_imgproject6` int(20) NOT NULL,
  `img_project6` varchar(255) DEFAULT NULL,
  `img_judul6` varchar(255) DEFAULT NULL,
  `img_isi6` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_imgproject6`
--

INSERT INTO `tbl_imgproject6` (`id_imgproject6`, `img_project6`, `img_judul6`, `img_isi6`) VALUES
(1, 'portfolio-7.jpg', 'PRODUCT 6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id_project` int(20) NOT NULL,
  `project_img` varchar(255) DEFAULT NULL,
  `project_judul` varchar(255) DEFAULT NULL,
  `project_judul2` varchar(255) DEFAULT NULL,
  `project_isi` varchar(255) DEFAULT NULL,
  `id_imgproject` int(20) DEFAULT NULL,
  `id_imgproject2` int(20) DEFAULT NULL,
  `id_imgproject3` int(20) DEFAULT NULL,
  `id_imgproject4` int(20) DEFAULT NULL,
  `id_imgproject5` int(20) DEFAULT NULL,
  `id_imgproject6` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `project_img`, `project_judul`, `project_judul2`, `project_isi`, `id_imgproject`, `id_imgproject2`, `id_imgproject3`, `id_imgproject4`, `id_imgproject5`, `id_imgproject6`) VALUES
(1, 'portfolio-3.jpg', 'OUR', 'PROJECT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id_service` int(20) NOT NULL,
  `service_img` varchar(255) DEFAULT NULL,
  `service_judul` varchar(255) DEFAULT NULL,
  `service_judul2` varchar(255) DEFAULT NULL,
  `service_isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_service`
--

INSERT INTO `tbl_service` (`id_service`, `service_img`, `service_judul`, `service_judul2`, `service_isi`) VALUES
(1, 'portfolio-7.jpg', 'OUR', 'SERVICE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alsah Ayasha', 'alsahayasha21@gmail.com', NULL, '$2y$10$XXc6foXHd3eEx0NCS08u6evT2OAZmmVOzOn5TAQQD.6CDEAVwxDby', NULL, '2022-06-26 19:03:01', '2022-06-26 19:03:01'),
(2, 'quasistellar@gmail.com', 'quasar_user@gmail.com', NULL, '$2y$10$7roDdAnZYqdXxVl0K0aHKuhRWdVR4byConwXFTQGwPxf8aIAWao02', NULL, '2022-06-27 03:07:13', '2022-06-27 03:07:13'),
(3, 'quasistellar2@gmail.com', 'quasar_user2@gmail.com', NULL, '$2y$10$Evx8d/3BUyZ4ZHZowhMGJeahhGOKb0OJuAqQFCWjg5nEAk8l7WjmK', NULL, '2022-06-27 03:33:25', '2022-06-27 03:33:25'),
(4, 'quasar 3', 'quasar_user3@gmail.com', NULL, '$2y$10$gJHe01NuYEz/pjmzNdQXJearXbj7J7u8NKUnpn848VNLwkixrrOB.', NULL, '2022-06-27 03:39:42', '2022-06-27 03:39:42'),
(5, 'Alsah Ayasha1', 'user21@gmail.com', NULL, '$2y$10$7u0bG5g.g2KZlmjx07vthOKKbMmtJoZuGf0TdXbbW3wpwId2hIgOK', NULL, '2022-06-27 04:24:35', '2022-06-27 04:24:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tbl_artikel2`
--
ALTER TABLE `tbl_artikel2`
  ADD PRIMARY KEY (`id_artikel2`);

--
-- Indeks untuk tabel `tbl_artikel3`
--
ALTER TABLE `tbl_artikel3`
  ADD PRIMARY KEY (`id_artikel3`);

--
-- Indeks untuk tabel `tbl_beranda`
--
ALTER TABLE `tbl_beranda`
  ADD PRIMARY KEY (`id_beranda`);

--
-- Indeks untuk tabel `tbl_imgproject`
--
ALTER TABLE `tbl_imgproject`
  ADD PRIMARY KEY (`id_imgproject`);

--
-- Indeks untuk tabel `tbl_imgproject2`
--
ALTER TABLE `tbl_imgproject2`
  ADD PRIMARY KEY (`id_imgproject2`);

--
-- Indeks untuk tabel `tbl_imgproject3`
--
ALTER TABLE `tbl_imgproject3`
  ADD PRIMARY KEY (`id_imgproject3`);

--
-- Indeks untuk tabel `tbl_imgproject4`
--
ALTER TABLE `tbl_imgproject4`
  ADD PRIMARY KEY (`id_imgproject4`);

--
-- Indeks untuk tabel `tbl_imgproject5`
--
ALTER TABLE `tbl_imgproject5`
  ADD PRIMARY KEY (`id_imgproject5`);

--
-- Indeks untuk tabel `tbl_imgproject6`
--
ALTER TABLE `tbl_imgproject6`
  ADD PRIMARY KEY (`id_imgproject6`);

--
-- Indeks untuk tabel `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indeks untuk tabel `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id_service`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel2`
--
ALTER TABLE `tbl_artikel2`
  MODIFY `id_artikel2` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel3`
--
ALTER TABLE `tbl_artikel3`
  MODIFY `id_artikel3` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_beranda`
--
ALTER TABLE `tbl_beranda`
  MODIFY `id_beranda` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_imgproject`
--
ALTER TABLE `tbl_imgproject`
  MODIFY `id_imgproject` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_imgproject2`
--
ALTER TABLE `tbl_imgproject2`
  MODIFY `id_imgproject2` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_imgproject3`
--
ALTER TABLE `tbl_imgproject3`
  MODIFY `id_imgproject3` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_imgproject4`
--
ALTER TABLE `tbl_imgproject4`
  MODIFY `id_imgproject4` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_imgproject5`
--
ALTER TABLE `tbl_imgproject5`
  MODIFY `id_imgproject5` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_imgproject6`
--
ALTER TABLE `tbl_imgproject6`
  MODIFY `id_imgproject6` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id_project` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id_service` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
