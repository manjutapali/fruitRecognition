-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2015 at 05:38 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fruit_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit_table`
--

CREATE TABLE IF NOT EXISTS `fruit_table` (
  `Fruit` varchar(11) NOT NULL DEFAULT '',
  `hue_min` int(2) NOT NULL,
  `hue_max` int(2) NOT NULL,
  `energy_min` decimal(10,9) NOT NULL,
  `energy_max` decimal(9,8) NOT NULL,
  `entropy_min` decimal(7,6) NOT NULL,
  `entropy_max` decimal(6,5) NOT NULL,
  `clustertendensity_min` int(5) NOT NULL,
  `clustertendensity_max` int(5) DEFAULT NULL,
  `Homogenity_min` decimal(8,7) DEFAULT NULL,
  `Homogenity_max` decimal(7,6) DEFAULT NULL,
  `correlation_min` decimal(7,6) DEFAULT NULL,
  `correlation_max` decimal(7,6) DEFAULT NULL,
  `prob_min` decimal(9,8) DEFAULT NULL,
  `prob_max` decimal(8,7) DEFAULT NULL,
  `cont_min` int(3) DEFAULT NULL,
  `cont_max` int(3) DEFAULT NULL,
  `nutrition_energy kJ/Kcal` varchar(6) DEFAULT NULL,
  `Water %` int(2) DEFAULT NULL,
  `fibre g` decimal(2,1) DEFAULT NULL,
  `protein g` decimal(2,1) DEFAULT NULL,
  `sugar g` decimal(3,1) DEFAULT NULL,
  `vit A mg` int(3) DEFAULT NULL,
  `vit C mg` int(2) DEFAULT NULL,
  `vit B1 mg` decimal(3,2) DEFAULT NULL,
  `vit B2 mg` decimal(3,2) DEFAULT NULL,
  `vit B6 mg` decimal(3,2) DEFAULT NULL,
  `vit E mg` varchar(4) DEFAULT NULL,
  `fat g` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fruit_table`
--

INSERT INTO `fruit_table` (`Fruit`, `hue_min`, `hue_max`, `energy_min`, `energy_max`, `entropy_min`, `entropy_max`, `clustertendensity_min`, `clustertendensity_max`, `Homogenity_min`, `Homogenity_max`, `correlation_min`, `correlation_max`, `prob_min`, `prob_max`, `cont_min`, `cont_max`, `nutrition_energy kJ/Kcal`, `Water %`, `fibre g`, `protein g`, `sugar g`, `vit A mg`, `vit C mg`, `vit B1 mg`, `vit B2 mg`, `vit B6 mg`, `vit E mg`, `fat g`) VALUES
('Apple', 16, 80, '0.000951372', '0.03315280', '6.319070', '7.60000', 4254, 24220, '0.3489540', '0.500000', '0.990132', '0.995646', '0.00278268', '0.0100000', 42, 77, '207/49', 84, '2.3', '0.4', '11.8', 2, 15, '0.02', '0.01', '0.05', '0.5', 0),
('Grapes', 40, 70, '0.003000000', '0.02000000', '6.700000', '8.50000', 5500, 1200, '0.1300000', '0.410000', '0.850000', '0.990000', '0.00358485', '0.1627380', 75, 300, '274/64', 83, '2.2', '0.6', '15.5', 0, 3, '0.03', '0.01', '0.08', '0.6', 0),
('Lemon', 22, 31, '0.001301120', '0.03814010', '5.500000', '7.40000', 6000, 11800, '0.3500000', '0.640000', '0.980000', '0.995000', '0.07929890', '0.1600000', 20, 35, '51/12', 96, '1.8', '0.0', '3.0', 0, 50, '0.06', '0.02', '0.04', '0.8', 0),
('Mango', 24, 55, '0.001075410', '0.00665992', '6.250000', '7.64521', 6841, 12279, '0.3672360', '0.450710', '0.976812', '0.995495', '0.00500000', '0.0724701', 25, 70, '255/60', 84, '1.0', '0.0', '15.0', 210, 53, '0.05', '0.06', '0.13', '1', 0),
('orange', 14, 23, '0.002000000', '0.00800000', '7.211560', '7.98898', 10000, 18400, '0.2580000', '0.353000', '0.980110', '0.988700', '0.03000000', '0.1000000', 100, 150, '198/47', 87, '1.8', '1.0', '10.6', 2, 49, '0.07', '0.03', '0.03', '0.01', 0),
('pear', 28, 39, '0.006365400', '0.05000000', '6.500110', '8.05000', 6000, 12500, '0.2500000', '0.400000', '0.941347', '0.987101', '0.02000000', '0.1500000', 50, 150, '201/47', 86, '2.1', '0.3', '11.5', 0, 4, '0.01', '0.01', '0.02', '0', 0),
('Pineapple', 31, 45, '0.000182807', '0.00387919', '8.280890', '9.33653', 10000, 22000, '0.0952895', '0.220000', '0.875621', '0.975338', '0.00300000', '0.0566378', 250, 750, '211/50', 84, '1.2', '0.4', '12.0', 20, 25, '0.07', '0.02', '0.09', '0.1', 0),
('pomegranate', 10, 50, '0.001000000', '0.00200000', '7.169590', '8.00000', 10000, 20000, '0.2490000', '0.411752', '0.954400', '0.997063', '0.00347937', '0.1500000', 120, 300, '343/81', 82, '3.4', '1.0', '17.0', 10, 7, '0.05', '0.02', '0.31', 'none', 0),
('tomato', 23, 70, '0.001000000', '0.01000000', '6.930000', '7.50000', 11400, 2200, '0.3104810', '0.488000', '0.981050', '0.989478', '0.01000000', '0.1000000', 80, 140, '48/11', 97, '1.4', '0.9', '1.9', 140, 15, '0.05', '0.02', '0.08', '0.7', 0),
('watermelon', 41, 52, '0.001000000', '0.10000000', '8.132090', '8.68541', 14000, 20000, '0.1759470', '0.280882', '0.935751', '0.983362', '0.01000000', '0.0700000', 117, 260, '122/29', 89, '0.6', '1.0', '8.0', 30, 6, '0.04', '0.05', '0.07', 'none', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit_table`
--
ALTER TABLE `fruit_table`
 ADD PRIMARY KEY (`Fruit`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
