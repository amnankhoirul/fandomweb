-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Jan 2025 pada 03.57
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fandom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id_data` int NOT NULL,
  `name_data` varchar(150) NOT NULL,
  `type_data` varchar(150) NOT NULL,
  `position_data` varchar(150) NOT NULL,
  `background_data` varchar(150) NOT NULL,
  `intro_data` varchar(150) NOT NULL,
  `va_data` varchar(150) NOT NULL,
  `char_data` varchar(150) NOT NULL,
  `number_data` varchar(150) NOT NULL,
  `profile_data` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_news` int NOT NULL,
  `title_news` varchar(150) NOT NULL,
  `cat_news` enum('Event','Gacha') NOT NULL,
  `status_news` enum('Ongoing','Over') NOT NULL,
  `image_news` varchar(150) NOT NULL,
  `desc_news` text NOT NULL,
  `date_news` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_news`, `title_news`, `cat_news`, `status_news`, `image_news`, `desc_news`, `date_news`) VALUES
(2, 'aaaaa', 'Gacha', 'Ongoing', 'acs.jpg', 'asas', '2024-12-11'),
(3, 'asadwa', 'Gacha', 'Over', 'Gambar_WhatsApp_2024-10-14_pukul_13_15_41_3ff2c3ac1.jpg', 'asasas', '2024-12-09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_news`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_news` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
