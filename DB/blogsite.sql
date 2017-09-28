-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2017 at 12:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'root', 'root@gmail.com', 'toor', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `post_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `date`, `user_id`, `user_name`, `post_id`) VALUES
(1, 'hello nice', '12/5/2017', 1, 'monir', 4),
(2, 'Good article', '27/05/17', 17, 'Md. Monirul Islam', 4),
(3, 'hello guys\r\n', '27/05/17', 17, 'Md. Monirul Islam', 4);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(5) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `paragraph` text NOT NULL,
  `user_id` int(5) NOT NULL,
  `date` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `hits` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `heading`, `paragraph`, `user_id`, `date`, `category`, `hits`, `user_name`) VALUES
(1, 'Test Heading', 'Test Post hsgdbhfbsdhbhfbhds', 1, '26/05/17', 'IT', 0, ''),
(3, 'asdfdsgfd', 'dsfgdgfhfd', 1, '26/05/17', 'Others', 0, 'test'),
(4, 'This robot arm’s AI thinks like we do about how to grab something', 'Robots are great at doing things they’ve been shown how to do, but when presented with a novel problem, such as an unfamiliar shape that needs to be gripped, they tend to choke. AI is helping there in the form of systems like Dex-Net, which uses deep learning to let a robotic arm improvise an effective grip for objects it’s never seen before.\r\n\r\nThe basic idea behind the system is rather like how we figure out how to pick things up. You see an object, understand its shape and compare it to other objects you’ve picked up in the past, then use that information to choose the best way to grab it.', 17, '26/05/17', 'Books', 0, 'test name'),
(5, 'asfdsf', 'dfdsghfh', 17, '26/05/17', 'Others', 0, ''),
(6, 'as', 'adas', 17, '26/05/17', 'Others', 0, ''),
(7, 'asdfas', 'asfdfa', 17, '26/05/17', 'Others', 0, ''),
(8, 'asfdsfdsg', 'sgdfghgfhgfd', 17, '26/05/17', 'Books', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(40) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `contact_no`, `image`, `address`) VALUES
(1, 'user@gmail.com', 'user', '', 'sad', '', 'Bangladesh'),
(17, 'monir9968@gmail.com', 'monir', 'Md. Monirul Islam', '01782719498', 'user_images/IMG_7373.JPG', 'Sirajganj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
