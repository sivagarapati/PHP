-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 03:29 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vvs_zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile_no`, `email`, `message`) VALUES
(17, 'nknas', '99993', 'asdA@NF.VZS', 'eaklmelk2kl2q3n2k'),
(18, 's', '6756', 'jbjkb@HVBHJ.GHVG', 'gfhtfth'),
(19, 's', '6756', 'jbjkb@HVBHJ.GHVG', 'gfhtfth'),
(21, 'siva', '7665', 'bzb@nn.bcb', 'nsbhnvn'),
(24, 'fwdsd', '', '', ''),
(25, 'kum', '12345', 'nsmd@nnd.cm', 'ndjak2nkjcn0cnskj'),
(26, 'vinay', '12346789', 'vinay@n.vc', 'qwweerasd hello356'),
(27, 's', '123', 'ws@r.t', 'sfg4'),
(28, 'sdd', '544', 'ddd@ff.v', 'dfgbb'),
(29, 'ff', '43', 'vnnc@mv.vm', 'dckjnsjr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
