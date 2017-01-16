-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 10:09 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admini`
--

CREATE TABLE `admini` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admini`
--

INSERT INTO `admini` (`id`, `username`, `password`) VALUES
(1, 'administrator', 'alen1996'),
(2, 'administrator1', 'alen19961');

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

CREATE TABLE `clanovi` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Nadgleda_admin` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`id`, `username`, `password`, `Nadgleda_admin`) VALUES
(1, 'trueteller', 'haknpuc', 2),
(2, 'arsenal4an', 'emirates', 2),
(3, 'rtruth', 'hasoseckati', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nekretnine`
--

CREATE TABLE `nekretnine` (
  `id` int(6) UNSIGNED NOT NULL,
  `naziv` varchar(60) NOT NULL,
  `cijena` varchar(30) NOT NULL,
  `ikona` varchar(30) NOT NULL,
  `Brine_admin` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nekretnine`
--

INSERT INTO `nekretnine` (`id`, `naziv`, `cijena`, `ikona`, `Brine_admin`) VALUES
(2, 'Full apartman u centru grada ', '1500.00', '\r\nstan2.jpg', 1),
(3, 'Dvosoban opremljen stan', '1500.00', '\r\nstan3.jpg', 1),
(4, 'Jednoiposoban stan u centru grada', '500.00', '\r\nstan7.jpg', 1),
(5, 'Luksuzni apartman u Scu', '700.00', '\r\nstan5.jpg', 1),
(6, 'Trosobni stan full oprema,novogradnja ', '300000.00', '\r\nstan6.jpg', 1),
(7, 'Luksuzni apartman u Sc', '1000 KM', 'stan1.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clanovi`
--
ALTER TABLE `clanovi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Nadgleda_admin` (`Nadgleda_admin`);

--
-- Indexes for table `nekretnine`
--
ALTER TABLE `nekretnine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nekretnine_ibfk_1` (`Brine_admin`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clanovi`
--
ALTER TABLE `clanovi`
  ADD CONSTRAINT `clanovi_ibfk_1` FOREIGN KEY (`Nadgleda_admin`) REFERENCES `admini` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nekretnine`
--
ALTER TABLE `nekretnine`
  ADD CONSTRAINT `nekretnine_ibfk_1` FOREIGN KEY (`Brine_admin`) REFERENCES `admini` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
