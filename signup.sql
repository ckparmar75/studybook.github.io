-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 05:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback`) VALUES
(1, 'ckparmar7595@gmail.com', 'hi i am chirag'),
(2, 'avneet@gmail.com', 'this web is very helpful..I loved it awesome..'),
(3, 'jannat@gmail.com', 'Hi chirag your blog is very helpful for me. I love it . this web provided many gk pdf for free this is awesome\r\n\r\n'),
(4, 'ckparmar7595@gmail.com', 'very good\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `image` varchar(350) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `image`, `password`, `cpassword`) VALUES
(10, 'Chirag Parmar', 'ckparmar7595@gmail.com', '8128507193', 'ck/180 kb.jpg', 'ckparmar', 'ckparmar'),
(11, 'Kaushik', 'kaushik@gmail.com', '8574857485', 'ck/pick.jpg', 'kkk', 'kkk'),
(12, 'Avneet Kaur', 'avneet@gmail.com', '7874759586', 'ck/avneet.jpg', 'avneet', 'avneet'),
(13, 'Siddharth Nigam', 'siddharth@gmail.com', '8128574859', 'ck/sid2.jpg', 'sid', 'sid'),
(14, 'Jannat Zubair', 'jannat@gmail.com', '8128507185', 'ck/images.jpg', 'jannat', 'jannat'),
(15, 'Shey Parmar', 'srey@gmail.com', '7845784596', 'ck/avneet2.jpg', 'aaa', 'aaa'),
(16, 'CK_Parmar', 'ckparmar0705@gmail.com', '08128507193', 'ck/IMG_20180104_100148259.jpg', 'ckparmar', 'ckparmar'),
(17, 'Seema', 'seema@gmail.com', '7898754862', 'ck/seemaghanchi_I_2020_Mar_23_04_15_52.jpg', 'seems', 'seems'),
(18, 'Latta', 'latta@gmail.com', '7748579521', 'ck/1551964117312.jpg', 'latta', 'latta'),
(19, 'Sneha Mehta', 'snehaparmar@gmail.com', '7485962341', 'ck/IMG_20190309_094848.jpg', 'sneha', 'sneha'),
(20, 'Chirag Parmar', 'chirag@gmail.com', '8798787985', 'ck/IMG_20180207_130848119.jpg', 'ckparmar', 'ckparmar'),
(21, 'Varsha Patel', 'varsha@gmail.com', '8789857496', 'ck/IMG-20180929-WA0007.jpg', 'varsha', 'varsha');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
