-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 03:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectalloc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `name`, `password`) VALUES
('admin@nirmauni.ac.in', 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `choice_filling`
--

CREATE TABLE `choice_filling` (
  `choice_id` int(6) NOT NULL,
  `roll_no` varchar(8) NOT NULL,
  `partner_roll_no` varchar(8) NOT NULL,
  `title` varchar(100) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `tim` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice_filling`
--

INSERT INTO `choice_filling` (`choice_id`, `roll_no`, `partner_roll_no`, `title`, `faculty`, `tim`) VALUES
(133, '17bce062', '-', 'ABC', 'Faculty1', '2020/05/25 11:48:35'),
(134, '17bce062', '-', 'ABC', 'Faculty1', '2020/05/25 11:48:35'),
(135, '17bce062', '-', 'ABC', 'Faculty1', '2020/05/25 11:48:35'),
(136, '17bce062', '-', 'ABC', 'Faculty1', '2020/05/25 11:48:35'),
(137, '17bce062', '-', 'ABC', 'Faculty1', '2020/05/25 11:48:35'),
(138, '17bce062', '-', 'ABC', 'Faculty1', '2020/05/25 11:48:35'),
(139, '17bce062', '-', 'ABC', 'Faculty1', '2020/05/25 11:48:35'),
(140, '17bce062', '-', 'ABC', 'Faculty1', '2020/05/25 11:48:35'),
(141, '17bce062', '-', 'ABC', 'Faculty1', '2020/05/25 11:48:35'),
(142, '17bce062', '-', 'ABC', 'Faculty1', '2020/05/25 11:48:35'),
(143, '17bce001', '-', 'ABC', 'Faculty1', '2020/05/25 11:52:00'),
(144, '17bce001', '-', 'ABC', 'Faculty1', '2020/05/25 11:52:00'),
(145, '17bce001', '-', 'ABC', 'Faculty1', '2020/05/25 11:52:00'),
(146, '17bce001', '-', 'ABC', 'Faculty1', '2020/05/25 11:52:00'),
(147, '17bce001', '-', 'ABC', 'Faculty1', '2020/05/25 11:52:00'),
(148, '17bce001', '-', 'ABC', 'Faculty1', '2020/05/25 11:52:00'),
(149, '17bce001', '-', 'ABC', 'Faculty1', '2020/05/25 11:52:00'),
(150, '17bce001', '-', 'ABC', 'Faculty1', '2020/05/25 11:52:00'),
(151, '17bce001', '-', 'ABC', 'Faculty1', '2020/05/25 11:52:00'),
(152, '17bce001', '-', 'ABC', 'Faculty1', '2020/05/25 11:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `flag`) VALUES
(1, 'Title Collection', 1),
(2, 'Choice Filling By Students', 0),
(3, 'Title Allocation', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '4cb9c8a8048fd02294477fcb1a41191a',
  `name` varchar(50) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `email`, `password`, `name`, `flag`) VALUES
(1, 'faculty1@nirmauni.ac.in', '202cb962ac59075b964b07152d234b70', 'Faculty1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_titles`
--

CREATE TABLE `project_titles` (
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `domain` varchar(100) NOT NULL DEFAULT 'Other',
  `type` varchar(64) DEFAULT 'Application',
  `students` int(11) NOT NULL,
  `faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `project_titles`
--

INSERT INTO `project_titles` (`title`, `description`, `domain`, `type`, `students`, `faculty`) VALUES
('ABC', 'agakgawawwhdh', 'Other', 'Application', 2, 'Faculty1'),
('jijil', 'jjljjl', 'jljljkj', 'lkjlj', 3, 'Faculty1'),
('gygjg', 'jhggjhhjg', 'ghjgjhg', 'gjhgj', 2, 'Faculty1'),
('jigiu', 'gkgjg', 'gkjgj', 'jgkg', 2, 'Faculty1');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '4cb9c8a8048fd02294477fcb1a41191a'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`email`, `password`) VALUES
('17bce001@nirmauni.ac.in', '202cb962ac59075b964b07152d234b70'),
('17bce062@nirmauni.ac.in', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `choice_filling`
--
ALTER TABLE `choice_filling`
  ADD PRIMARY KEY (`choice_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choice_filling`
--
ALTER TABLE `choice_filling`
  MODIFY `choice_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
