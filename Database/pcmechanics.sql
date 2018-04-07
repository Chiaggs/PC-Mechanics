-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 11:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcmechanics`
--

-- --------------------------------------------------------

--
-- Table structure for table `specsheet_drive`
--

CREATE TABLE `specsheet_drive` (
  `d_id` int(2) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `form_factor` varchar(10) DEFAULT NULL,
  `cache` varchar(15) DEFAULT NULL,
  `storage` varchar(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specsheet_drive`
--

INSERT INTO `specsheet_drive` (`d_id`, `type`, `form_factor`, `cache`, `storage`, `price`, `name`) VALUES
(1, 'HDD', '3.5" ', '64 MB', '1 TB', 4000, 'Seagate Barracuda'),
(2, 'SSD', '2.5" ', '512 MB', '250 GB', 8000, 'Samsung Evo'),
(3, 'HDD', '3.5" ', '64 MB', '2 TB', 8000, 'Seagate Barracuda'),
(4, 'SSD', '2.5" ', '512 MB', '1 TB', 28000, 'Samsung Evo');

-- --------------------------------------------------------

--
-- Table structure for table `specsheet_gfx`
--

CREATE TABLE `specsheet_gfx` (
  `g_id` int(2) NOT NULL,
  `memory` varchar(30) DEFAULT NULL,
  `base_clock` varchar(10) DEFAULT NULL,
  `pcie` varchar(10) DEFAULT NULL,
  `cores` varchar(15) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specsheet_gfx`
--

INSERT INTO `specsheet_gfx` (`g_id`, `memory`, `base_clock`, `pcie`, `cores`, `price`, `name`) VALUES
(1, '2 GB DDR3 64bit', '954 MHz', 'PCIe 2.0', '192 CUDA cores', 3100, 'Nvidia GT710'),
(2, '2 GB DDR5 64bit', '902 MHz', 'PCIe 2.0', '384 CUDA cores', 5500, 'Nvidia GT730'),
(3, '3 GB GDDR5 192bit', '1506 MHz', 'PCIe 3.0', '1152 CUDA cores', 24000, 'Nvidia GTX1060'),
(4, '8 GB GDDR5 256bit', '1506 MHz', 'PCIe 3.0', '1920 CUDA cores', 40000, 'Nvidia GTX1070'),
(5, '8 GB GDDR5 256bit', '1607 MHz', 'PCIe 3.0', '2560 CUDA cores', 75000, 'Nvidia GTX1080');

-- --------------------------------------------------------

--
-- Table structure for table `specsheet_motherboard`
--

CREATE TABLE `specsheet_motherboard` (
  `m_id` int(2) NOT NULL,
  `socket` varchar(10) DEFAULT NULL,
  `ram_type` varchar(10) DEFAULT NULL,
  `max_ram` varchar(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specsheet_motherboard`
--

INSERT INTO `specsheet_motherboard` (`m_id`, `socket`, `ram_type`, `max_ram`, `price`, `name`) VALUES
(1, 'LGA 1151', 'DDR4', '32 GB', 5600, 'MSI H110M'),
(2, 'LGA 1151', 'DDR4', '64 GB', 8500, 'MSI B150M'),
(3, 'LGA 1151', 'DDR4', '32 GB', 13300, 'MSI B150A'),
(4, 'LGA 1151', 'DDR4', '64 GB', 16500, 'Asus Z170 Pro Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `specsheet_processor`
--

CREATE TABLE `specsheet_processor` (
  `p_id` int(2) NOT NULL,
  `generation` varchar(5) DEFAULT NULL,
  `cores` int(2) DEFAULT NULL,
  `threads` int(2) DEFAULT NULL,
  `clockspeed` varchar(50) DEFAULT NULL,
  `cache` varchar(30) DEFAULT NULL,
  `power` varchar(10) DEFAULT NULL,
  `integrated_graphics` varchar(20) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specsheet_processor`
--

INSERT INTO `specsheet_processor` (`p_id`, `generation`, `cores`, `threads`, `clockspeed`, `cache`, `power`, `integrated_graphics`, `price`, `name`) VALUES
(1, '6th', 2, 2, '3.3 GHz', '3 MB L3', '65W', 'HD Graphics 510', 4800, 'Pentium G4400'),
(2, '6th', 2, 4, '3.6 GHz', '3MB', '54W', 'HD Graphics 510', 8200, 'i3 6098P'),
(3, '6th', 2, 4, '3.7 GHz', '3MB', '51W', 'HD Graphics 530', 9200, 'i3 6100'),
(4, '6th', 2, 4, '3.8 GHz', '4MB', '47W', 'HD Graphics 530', 14000, 'i3 6300'),
(5, '6th', 4, 4, '2.7 GHz (TurboBoost - 3.3GHz)', '6MB', '64W', 'HD Graphics 530', 14000, 'i5 6400'),
(6, '6th', 4, 4, '3.2 GHz (TurboBoost - 3.6 GHz)', '6MB', '65W', 'HD Graphics 530', 16300, 'i5 6500'),
(7, '6th', 4, 4, '3.3 GHz (TurboBoost - 3.9 GHz)', '6MB', '65W', 'HD Graphics 530', 17300, 'i5 6600'),
(8, '6th', 4, 8, '4.0 GHz (TurboBoost - 4.2 GHz)', '8MB', '91W', 'HD Graphics 530', 27500, 'i7 6700K');

-- --------------------------------------------------------

--
-- Table structure for table `specsheet_ram`
--

CREATE TABLE `specsheet_ram` (
  `r_id` int(2) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `frequency` varchar(15) DEFAULT NULL,
  `capacity` varchar(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specsheet_ram`
--

INSERT INTO `specsheet_ram` (`r_id`, `type`, `frequency`, `capacity`, `price`, `name`) VALUES
(1, 'DDR4', '2400 MHz', '4 GB', 1700, 'Corsair Vengeance'),
(2, 'DDR4', '2400 MHz', '8 GB', 3000, 'Corsair Vengeance'),
(3, 'DDR4', '2400 MHz', '16 GB', 6400, 'Corsair Vengeance');

-- --------------------------------------------------------

--
-- Table structure for table `specsheet_smps`
--

CREATE TABLE `specsheet_smps` (
  `s_id` int(2) NOT NULL,
  `power` varchar(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specsheet_smps`
--

INSERT INTO `specsheet_smps` (`s_id`, `power`, `price`, `name`) VALUES
(1, '450 Watts', 2400, 'Corsair VS450'),
(2, '550 Watts', 3600, 'Corsair VS550'),
(3, '650 Watts', 4300, 'Corsair VS650'),
(4, '750 Watts', 9000, 'Corsair CS750m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `specsheet_drive`
--
ALTER TABLE `specsheet_drive`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `specsheet_gfx`
--
ALTER TABLE `specsheet_gfx`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `specsheet_motherboard`
--
ALTER TABLE `specsheet_motherboard`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `specsheet_processor`
--
ALTER TABLE `specsheet_processor`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `specsheet_ram`
--
ALTER TABLE `specsheet_ram`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `specsheet_smps`
--
ALTER TABLE `specsheet_smps`
  ADD PRIMARY KEY (`s_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
