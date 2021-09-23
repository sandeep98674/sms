-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 04:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `user_name`, `password`) VALUES
(1, 'Bhuwan', 'Paneru', 'admin', 'bhuwan');

-- --------------------------------------------------------

--
-- Table structure for table `inquires`
--

CREATE TABLE `inquires` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquires`
--

INSERT INTO `inquires` (`id`, `date`, `name`, `email`, `number`, `message`) VALUES
(1, '2021-09-16', 'bhuwan', 'b@gmail.com', '348970980', 'alkjsfdljkasfdljksfad');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `heading` varchar(255) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `heading`, `content`, `image`) VALUES
(6, '2021-09-18', 'LockDown News', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has bee', 'IMG-6145abab036a80.71331644.jpg'),
(11, '2021-09-18', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'IMG-6145c7a105cfa9.95617695.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `to_whom` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `postDate` date NOT NULL DEFAULT current_timestamp(),
  `validUpto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `to_whom`, `subject`, `message`, `postDate`, `validUpto`) VALUES
(2, 'all', 'lockdown', 'bhuwan paneru', '2021-09-17', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `contact`, `email`, `courseName`, `user_name`, `password`) VALUES
(14, 'Biplab', 'Baskota', '2345678', 'biplab@gmail.com', 'Bsc.CSIT', 'biplab', 'biplab'),
(15, 'Krishna', 'Pokhrel', '45678', 'krishna@gmail.com', 'Bsc.CSIT', 'krishna', 'krishna'),
(21, 'Sandip', 'Ghimire', '8786778', 'sandio@gmail.com', 'BCA', 'sandip', 'sandip'),
(22, 'Bhuwan', 'Paneru', '43879879', 'bhuwanpaneru96@gmail.com', 'BCA', 'bhuwan', 'bhuwan'),
(23, 'Surendra', 'Kathariya', '4382830', 'surendra@gmail.com', 'BCA', 'surendra', 'surendra'),
(24, 'kamal', 'chataut', '9876543434', 'kamal@gmail.com', 'BBS', 'kamal', 'kamal');

-- --------------------------------------------------------

--
-- Table structure for table `studentinquiry`
--

CREATE TABLE `studentinquiry` (
  `studentId` int(11) NOT NULL,
  `query` varchar(255) DEFAULT NULL,
  `reply` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fname`, `lname`, `contact`, `email`, `courseName`, `user_name`, `password`) VALUES
(16, 'Ramesh', 'Saud', '356789', 'ramesh@gmail.com', 'Bsc.CSIT', 'ramesh', 'ramesh'),
(17, 'Basant', 'Chapagain', '6789767', 'basant@gmail.com', 'BCA', 'basant', 'basant'),
(18, 'Jagadish', 'Bhatta', '45698767', 'jagadish@gmail.com', 'BCA', 'jagadish', 'jagadish'),
(19, 'Bindu', 'Neupane', '4389893', 'bindu@gmail.com', 'Bsc.CSIT', 'bindu', 'bindu'),
(20, 'Sudarsan', 'Sharma', '9876543211', 'ss@gmail.com', 'BCA', 'sudarsan', 'sudarsan'),
(21, 'Sudarsan', 'Sharma', '9876543211', 'ss@gmail.com', 'BCA', 'sudarsan', 'sudarsan');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `check_approval` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `fname`, `lname`, `courseName`, `phone`, `email`, `username`, `password`, `user_type`, `post_date`, `check_approval`) VALUES
(8, 'Surendra', 'Kathariya', 'BCA', '4382830', 'surendra@gmail.com', 'surendra', 'surendra', 'student', '2021-08-18', 1),
(9, 'Bindu', 'Neupane', 'Bsc.CSIT', '4389893', 'bindu@gmail.com', 'bindu', 'bindu', 'teacher', '2021-08-18', 1),
(10, 'Sudarsan', 'Sharma', 'BCA', '9876543211', 'ss@gmail.com', 'sudarsan', 'sudarsan', 'teacher', '2021-09-17', 1),
(11, 'kamal', 'chataut', 'BBS', '9876543434', 'kamal@gmail.com', 'kamal', 'kamal', 'student', '2021-09-17', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquires`
--
ALTER TABLE `inquires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinquiry`
--
ALTER TABLE `studentinquiry`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquires`
--
ALTER TABLE `inquires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentinquiry`
--
ALTER TABLE `studentinquiry`
  ADD CONSTRAINT `studentInquiry_ibfk_1` FOREIGN KEY (`studentId`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
