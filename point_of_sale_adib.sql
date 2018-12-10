-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 10 Des 2018 pada 09.17
-- Versi Server: 5.7.11-0ubuntu6
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `point_of_sale`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Makanan'),
(2, 'Minuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id`, `category_id`, `name`, `price`, `status`) VALUES
(1, 1, 'Mie Ayam', 8000, 1),
(2, 2, 'Jasjus', 8000, 1),
(3, 1, 'Sate Madura', 15000, 1),
(4, 1, 'Es Krim', 2500, 1),
(5, 2, 'Es Teh', 2500, 1),
(6, 2, 'Es Kopi', 4500, 1),
(7, 1, 'Soto Lamongan', 7500, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ordered`
--

CREATE TABLE `ordered` (
  `id` int(11) NOT NULL,
  `table_name` varchar(10) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `discount` varchar(5) NOT NULL,
  `after_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ordered`
--

INSERT INTO `ordered` (`id`, `table_name`, `item_id`, `qty`, `total`, `discount`, `after_discount`) VALUES
(1, 'A01', 1, 31, 248000, '20%', 198400),
(2, 'B01', 3, 35, 525000, '20%', 420000),
(3, 'A01', 5, 3, 7500, '-', 7500),
(4, 'A01', 3, 1, 15000, '-', 15000),
(5, 'A03', 1, 167, 1336000, '20%', 1068800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
