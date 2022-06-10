-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 08:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_213040018`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(16, 'Konsultasi Online'),
(19, 'Vet Clinic'),
(20, 'Rawat Inap'),
(22, 'Pet Shop');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `id_kategori`, `nama`, `deskripsi`, `gambar`) VALUES
(8, 19, 'Sterilisasi', 'Sterilisasi adalah operasi bedah yang cukup sederhana pada betina dan bahkan lebih sederhana pada kucing jantan. ', 'img1654692051.png'),
(9, 19, 'Vaksinisasi', 'Pemberian vaksin pada hewan untuk membantu sistem imun.', 'img1654692121.png'),
(10, 19, 'Pemeriksaan Darah', 'pengambilan darah untuk mengidentifikasi terhadap suatu penyakit.', 'img1654692246.png'),
(11, 19, 'USG', 'Tes USG bisa dilakukan untuk mengetahui kesiapan hewan menghadapi kehamilan.', 'img1654692331.png'),
(13, 22, 'Adult Instinctive Loaf in Sauce Canned Cat', 'Royal Canin Feline Health Cat Instinctive Loaf in Sauce is canned wet cat food for healthy cats 1-7 years old.', 'img1654694934.jpg'),
(14, 22, 'Digest Sensitive Loaf in Sauce Canned Cat Food', 'DIGEST SENSITIVE thin slices in gravy is for adult cats over 1 year.', 'img1654695016.jpg'),
(15, 22, 'Aging Spayed / Neutered 12+ Dry Cat Food', 'Appetite Control Spayed/Neutered 12+ dry cat food is formulated to help maintain a healthy weight in senior cats.', 'img1654695084.jpg'),
(16, 22, 'Protein Selective Dry', 'Protein Selective dry cat food is designed to satisfy the natural preference of finicky cats As a result.', 'img1654695196.jpg'),
(17, 20, 'Layanan Rawat Inap', 'Kami menyediakan ruang yang difasilitasi dengan peralatan modern dan higienis yang baik untuk penyakit infeksius maupun non infeksius.', 'img1654695410.png'),
(18, 19, 'Microchip', 'A microchip is a tiny, computerized chip that&#039;s placed underneath your cat&#039;s skin, usually around the shoulder area.', 'img1654695742.png'),
(19, 22, 'Renal dry', 'Renal dry is a complete dietetic feed for cats formulated to support renal function.', 'img1654883320.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_admin`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$da4kYj6yco2m/wx.lpapUeoyZ5PdKSsdcCjLZCQIoV3OVVwwlaFSi'),
(3, 'upeh', '$2y$10$kWc4tjN2yjwfKp1lGTueTeb8me677UOTjiCTkED0FvRDbKm8vjpq2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
