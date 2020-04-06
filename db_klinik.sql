-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 02:29 PM
-- Server version: 5.5.20-log
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id` int(7) NOT NULL,
  `id_pasien` varchar(6) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `noHP` varchar(12) NOT NULL,
  `tglmasuk` date NOT NULL,
  `penyakit` varchar(25) NOT NULL,
  `dokter` varchar(25) NOT NULL,
  `obat` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `id_pasien`, `nama`, `alamat`, `noHP`, `tglmasuk`, `penyakit`, `dokter`, `obat`) VALUES
(10, 'PSN001', 'Heri Fredianto', 'cimahi', '089823423411', '2020-04-02', 'Tidak ada ', 'Natasya', 'Buyungupi'),
(12, 'PSN002', 'irvan  tanjung', 'sukabumi', '085311617256', '2020-04-05', 'Gatal-gatal', 'Natasya', 'Paramex'),
(14, 'PSN003', 'Meimei', 'bandung', '087657459912', '2020-07-03', 'Demam', 'saepudin', 'Panadol'),
(16, 'PSN004', 'Meidiana', 'Cipatat', '088923123000', '2020-04-02', 'Cacar', 'Natasya', 'Salep'),
(32, 'PSN005', 'Alifia', 'Padalarang', '089553234220', '2020-04-03', 'Sesak Nafas', 'Natasya', 'Parasetamol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
