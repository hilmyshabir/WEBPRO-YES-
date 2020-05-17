-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 02:18 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `konsul`
--

CREATE TABLE `konsul` (
  `id` int(10) NOT NULL,
  `nama_balita` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tgl_konsul` date NOT NULL,
  `waktu_konsul` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsul`
--

INSERT INTO `konsul` (`id`, `nama_balita`, `nama_ibu`, `tgl_konsul`, `waktu_konsul`) VALUES
(2, 'Joni', 'bob', '2020-04-16', '09:00:00'),
(3, 'anis', 'kia', '2020-02-06', '09:30:00'),
(4, 'Ryan', 'bob', '2020-04-17', '08:30:00'),
(5, 'hilmy', 'Aria Sky', '2019-06-12', '08:00:00'),
(6, 'Joni', 'Aria Sky', '2020-04-20', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_balita`
--

CREATE TABLE `tb_balita` (
  `id` int(10) NOT NULL,
  `nama_balita` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk_balita` varchar(100) NOT NULL,
  `panjang_bdn` varchar(100) NOT NULL,
  `berat_bdn` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_balita`
--

INSERT INTO `tb_balita` (`id`, `nama_balita`, `tgl_lahir`, `jk_balita`, `panjang_bdn`, `berat_bdn`, `nama_ibu`) VALUES
(1, 'Hafsah', '2020-04-04', 'Laki-laki', '170 cm', '50 kg', 'Ester'),
(8, 'Dani JIdat', '2020-04-05', 'Laki-laki', '123', '23', 'bob'),
(10, 'Husin', '2020-04-30', 'Perempuan', '12', '12', 'Siti'),
(16, 'ler', '1959-06-26', 'Laki-laki', '210', '17', 'ajeng'),
(20, 'Budiman', '2020-04-04', 'Laki-laki', '17', '12', 'Inem'),
(21, 'Jondri', '2020-04-02', 'Laki-laki', '123', '12', 'jojon'),
(22, 'Kekeyi', '2020-04-03', 'Perempuan', '1', '1', 'Prati Hutari Gani'),
(23, 'Tetot', '2020-04-10', 'Laki-laki', '1', '1', 'Telolet'),
(24, 'tegar', '2020-04-28', 'Perempuan', '10', '14', 'hafsoh'),
(25, 'Rotroti', '2020-05-12', 'Perempuan', '12', '1', 'Tortor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bumil`
--

CREATE TABLE `tb_bumil` (
  `id` int(10) NOT NULL,
  `id_bumil` varchar(100) NOT NULL,
  `nama_bumil` varchar(100) NOT NULL,
  `tgl_pelayanan` date NOT NULL,
  `umur_kehamilan` varchar(100) NOT NULL,
  `resiko_kehamilan` varchar(500) NOT NULL,
  `hasil_penimbangan` varchar(100) NOT NULL,
  `imunisasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bumil`
--

INSERT INTO `tb_bumil` (`id`, `id_bumil`, `nama_bumil`, `tgl_pelayanan`, `umur_kehamilan`, `resiko_kehamilan`, `hasil_penimbangan`, `imunisasi`) VALUES
(4, '02ABC', 'Pia', '2020-04-23', '14', 'gendut', '97', 'mager');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'hilmy', 'hilmyshabir10@gmail.com', 'default.jpg', '$2y$10$R/reYJXtB5gcc9hWkGQrZOEdG5rbDZkN4KibJmKhKTVNv8QrJXose', 1, 1, 1587405136),
(5, 'mas roy', 'masroy@gmail.com', 'default.jpg', '$2y$10$HSBpP0MHkik09C54cMi4k.1jahQqjvZ2SeXCUIDC01XE3y7EKTLvG', 1, 1, 1587418409),
(6, 'lary', 'akulary@gmail.com', 'default.jpg', '$2y$10$QfQSc8L1hkpgPoJozAqAhOZwHa7Z0OjlEfGrZgDC3lReOwzxxV4rC', 2, 1, 1587517775),
(7, 'budi', 'budi@ganteng.com', 'default.jpg', '$2y$10$DAHB5CAP5Xsm3SAgBFshAOphw9jAe8lU9MQwDRrrZ9dw8pDq7baUW', 2, 1, 1587627793),
(8, 'bang Habib', 'habib@gmail.com', 'default.jpg', '$2y$10$qMQNvFnzfAAC/2m2IKup3OlCLjpd65IYK3sweaVXPD2wp53Ict3qy', 2, 1, 1588042788);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsul`
--
ALTER TABLE `konsul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_balita`
--
ALTER TABLE `tb_balita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bumil`
--
ALTER TABLE `tb_bumil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsul`
--
ALTER TABLE `konsul`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_balita`
--
ALTER TABLE `tb_balita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_bumil`
--
ALTER TABLE `tb_bumil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
