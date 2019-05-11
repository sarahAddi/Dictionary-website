-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2019 at 07:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dictionary`
--

-- --------------------------------------------------------

--
-- Table structure for table `dictionary`
--

CREATE TABLE `dictionary` (
  `id` int(11) NOT NULL,
  `term` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `definition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dictionary`
--

INSERT INTO `dictionary` (`id`, `term`, `type`, `definition`) VALUES
(1, 'ability ', 'Noun', 'the physical or mental power or skill needed to do something'),
(2, 'able', ' adjective', 'to have the necessary physical strength, mental power, skill, time, money, or opportunity to do something'),
(3, 'about', 'preposition ', 'on the subject of, or connected with'),
(4, 'above', 'adverb, preposition', 'in or to a higher position than something else'),
(5, 'asynchronous', 'adjective', 'Not existing or occurring at the same time.'),
(6, 'access', 'noun', 'The means or opportunity to approach or enter '),
(7, 'await', 'verb', 'to wait for or be waiting for something'),
(8, 'around', 'preposition, adverb', 'in a position or direction surrounding, or in a direction going along the edge of or from one part to another (of)'),
(9, 'administration', 'noun', ' The act or process of administering, especially the management of a government or large institution.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dictionary`
--
ALTER TABLE `dictionary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dictionary`
--
ALTER TABLE `dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
