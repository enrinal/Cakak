-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 09:49 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakka`
--

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `no` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `waypoint0` varchar(255) NOT NULL,
  `waypoint1` varchar(255) NOT NULL,
  `waypoint2` varchar(255) NOT NULL,
  `waypoint3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`no`, `nama`, `origin`, `destination`, `waypoint0`, `waypoint1`, `waypoint2`, `waypoint3`) VALUES
(1, 'Biru Langit', 'Tj. Karang, Tj. Karang Pusat, Kota Bandar Lampung, Lampung', 'terminal induk raja basa lampung, Rajabasa, Bandar Lampung City, Lampung 35141', 'Jl. Teuku Umar 23, Pasir Gintung, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35121', 'Dunkin Donuts Kedaton', 'Jalan ZA. Pagar Alam No. 156, Gedong Meneng, Rajabasa, Kota Bandar Lampung, Lampung 35145', 'Jl. Terminal Induk Rajabasa, Rajabasa, Kota Bandar Lampung, Lampung 35141'),
(2, 'Kuning Muda', 'Tj. Karang, Tj. Karang Pusat, Kota Bandar Lampung, Lampung', 'Gg. Perintis, Jagabaya II, Way Halim, Kota Bandar Lampung, Lampung 35122', 'JL. Sultan Agung, No. 28/II D, Kedaton, Kota Bandar Lampung, Lampung 35132', 'Gg. Perintis, Jagabaya II, Way Halim, Kota Bandar Lampung, Lampung 35122', 'Gg. Perintis, Jagabaya II, Way Halim, Kota Bandar Lampung, Lampung 35122', 'Gg. Perintis, Jagabaya II, Way Halim, Kota Bandar Lampung, Lampung 35122'),
(3, 'Merah Hati', 'Tj. Karang, Tj. Karang Pusat, Kota Bandar Lampung, Lampung', 'Kemiling, Kota Bandar Lampung, Lampung', 'Jl. H. Agus Salim, Kota Bandar Lampung, Lampung', 'Jl. Sisingamangaraja No.91, Gedong Air, Tj. Karang Bar., Kota Bandar Lampung, Lampung 35151', 'Jl. Imam Bonjol, Lampung', 'Jl. Teuku Cik Ditiro No.9, Sumber Rejo, Kemiling, Kota Bandar Lampung, Lampung 35155'),
(4, 'Merah Hati Biru', 'Tj. Karang, Tj. Karang Pusat, Kota Bandar Lampung, Lampung', 'Jl. Sam Ratulangi, Kota Bandar Lampung, Lampung', 'Jl. Teuku Umar, Kota Bandar Lampung, Lampung', 'Jl. Imam Bonjol No.335, Segala Mider, Tj. Karang Bar., Kota Bandar Lampung, Lampung 35111', 'Jl. Sam Ratulangi, Kota Bandar Lampung, Lampung', 'Jl. Sam Ratulangi, Kota Bandar Lampung, Lampung'),
(5, 'Abu Abu', 'Tj. Karang, Tj. Karang Pusat, Kota Bandar Lampung, Lampung', 'Sukarame, Kota Bandar Lampung, Lampung', 'Jl. Raden Intan, Engal, Kota Bandar Lampung, Lampung', 'Jl. P. Antasari, Kota Bandar Lampung, Lampung', 'Jl. Gajah Mada No.33, Kota Baru, Tj. Karang Tim., Kota Bandar Lampung, Lampung 35128', 'Jl. Gajah Mada No.33, Kota Baru, Tj. Karang Tim., Kota Bandar Lampung, Lampung 35128'),
(6, 'Abu Abu Biru', 'Tj. Karang, Tj. Karang Pusat, Kota Bandar Lampung, Lampung', 'Permata Biru, Pasar Way Halim 1st Floor, JL. Raja Basa 1, Way Halim, Kangkung, Bumi Waras, Kota Bandar Lampung, Lampung', 'Gg. Perintis, Jagabaya II, Way Halim, Kota Bandar Lampung, Lampung 35122', 'Gg. Perintis, Jagabaya II, Way Halim, Kota Bandar Lampung, Lampung 35122', 'Jl. P. Antasari No.13, Tj. Agung Raya, Kedamaian, Kota Bandar Lampung, Lampung 35122', 'Jl. P. Antasari No.13, Tj. Agung Raya, Kedamaian, Kota Bandar Lampung, Lampung 35122'),
(7, 'Putih List Hijau', 'Tj. Karang, Tj. Karang Pusat, Kota Bandar Lampung, Lampung', 'Jl. Insinyur Sutami, Lampung', 'Jl. Hayam Wuruk No.124, Tj. Agung Raya, Kedamaian, Kota Bandar Lampung, Lampung 35128', 'Jl. P. Antasari, Kota Bandar Lampung, Lampung', 'Jl. P. Tirtayasa, Kota Bandar Lampung, Lampung', 'Jl. P. Tirtayasa, Kota Bandar Lampung, Lampung'),
(8, 'Hijau', 'Tj. Karang, Tj. Karang Pusat, Kota Bandar Lampung, Lampung', 'Garuntang, Tlk. Betung Sel., Kota Bandar Lampung, Lampung', 'Jl. Raden Intan, Engal, Kota Bandar Lampung, Lampung', 'Jl. Gatot Subroto, Kota Bandar Lampung, Lampung', 'Jl. Gatot Subroto, Kota Bandar Lampung, Lampung', 'Jl. Gatot Subroto, Kota Bandar Lampung, Lampung'),
(9, 'Ungu', 'Tj. Karang, Tj. Karang Pusat, Kota Bandar Lampung, Lampung', 'Jl. Ikan Layur 27-39, Tlk. Betung, Tlk. Betung Sel., Kota Bandar Lampung, Lampung', 'Jl. Diponegoro, Kota Bandar Lampung, Lampung', 'Jl. Salim Batubara, Tlk. Betung Utara, Kota Bandar Lampung, Lampung', 'Jl. Laks. Malahayati, Kota Bandar Lampung, Lampung', 'Jl. Laks. Malahayati, Kota Bandar Lampung, Lampung'),
(10, 'Hijau Tua', 'Sukaraja, Tlk. Betung Sel., Kota Bandar Lampung, Lampung', 'Panjang, Kota Bandar Lampung, Lampung', 'Panjang, Kota Bandar Lampung, Lampung', 'Panjang, Kota Bandar Lampung, Lampung', 'Panjang, Kota Bandar Lampung, Lampung', 'Panjang, Kota Bandar Lampung, Lampung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
