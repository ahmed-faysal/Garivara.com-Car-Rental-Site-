-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 02:40 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garivara`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(6) NOT NULL,
  `c_name` varchar(32) NOT NULL,
  `c_type` varchar(24) NOT NULL,
  `capacity` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(24) NOT NULL,
  `hire_cost` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `c_name`, `c_type`, `capacity`, `image`, `status`, `hire_cost`) VALUES
(1, 'Toyota Allion', 'Car', 4, 'toyota-allion.jpg', 'Available', 8000),
(3, 'Toyota Premio', 'Car', 4, 'premio.jpg', 'Available', 10000),
(6, 'HiAce', 'Microbus', 12, 'hiace.jpg', 'Available', 7000),
(10, 'Mitsubishi Lancer X', 'Car', 4, 'Lancer.jpg', 'Available', 25000),
(11, 'TaTa Nano', 'Car', 4, 'download.jpg', 'Available', 3000),
(12, 'Toyota Echo', 'Car', 3, 'images (1).jpg', 'Available', 4000),
(13, 'Toyota Rav4', 'Jeep', 10, 'brochure_rav4.jpg', 'Available', 35000),
(14, 'Maruti Suzuki Celerio', 'Car', 6, 'maruti-suzuki-celerio-cross_827x510_61506502952.jpg', 'Available', 8000),
(15, 'TaTa Safari', 'Jeep', 10, 'download (1).jpg', 'Available', 30000),
(16, 'Toyota Wigo', 'Car', 4, 'Wigo.jpg', 'Available', 9000),
(17, 'Wolswagon CE 13', 'Micro Bus', 15, 'microbus-gear-patrol-vw-microbus-1960.jpg', 'Available', 33000),
(18, 'Toyota Richo', 'Car', 4, 'USB10TOC041B0101.jpg', 'Available', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(6) NOT NULL,
  `fullname` varchar(32) NOT NULL,
  `username` varchar(24) NOT NULL,
  `email` varchar(24) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin', 'admin@garivara.com', 'admin'),
(2, 'kamlesh', 'kamla9', 'kamlesh@gucci.com', 'kksnr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
