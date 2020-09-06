-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 03:48 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkuc_ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_password_retreive`
--

CREATE TABLE `lecturer_password_retreive` (
  `id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Role` varchar(40) NOT NULL,
  `confirmation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_retrieve`
--

CREATE TABLE `password_retrieve` (
  `id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Role` varchar(40) NOT NULL,
  `confirmation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registred_lecturers`
--

CREATE TABLE `registred_lecturers` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `faculty` varchar(40) NOT NULL,
  `entry_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registred_lecturers`
--

INSERT INTO `registred_lecturers` (`id`, `username`, `email`, `pass`, `image`, `role`, `faculty`, `entry_date`) VALUES
(1, 'Aqib Ullah', 'aqibullah3312@gmail.com', '$2y$10$Qa1g40j6j3w83Ln93TXjX.x4i9eM8R0wFw3lofLJN6iregjxC3fiu', 'lecturers images/teacher.jpg', 'Manager', 'Science', '13-07-2020'),
(3, 'Lecturer', 'lecturer@gmail.com', '$2y$10$Qa1g40j6j3w83Ln93TXjX.x4i9eM8R0wFw3lofLJN6iregjxC3fiu', 'lecturers images/teacher.jpg', 'Cordinator', 'Arts', '14-07-2020'),
(4, 'malik khan', 'malik@gmail.com', '$2y$10$Qa1g40j6j3w83Ln93TXjX.x4i9eM8R0wFw3lofLJN6iregjxC3fiu', '0', 'Teacher', 'Science', '14-07-2020');

-- --------------------------------------------------------

--
-- Table structure for table `registred_students`
--

CREATE TABLE `registred_students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `d_o_b` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `psswrd` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `img` blob NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `faculty` varchar(40) NOT NULL,
  `department` varchar(50) NOT NULL,
  `registry_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registred_students`
--

INSERT INTO `registred_students` (`id`, `first_name`, `last_name`, `d_o_b`, `email`, `type`, `psswrd`, `phone`, `address`, `img`, `batch_no`, `session`, `faculty`, `department`, `registry_date`) VALUES
(1, 'MR.', 'Nisar Khan', '03-08-4294', 'nisar@gmail.com', 'Student', '$2y$10$XfqcP2IsIhCarMIziIRrEO1uKuEbxo7wy1Z8tPiYlB2JaF9pWm7Ii', '02340832498', 'Akbarpura', '', '12', '2020', 'Science', 'English', '13-07-2020'),
(2, 'joker', 'joe', '03-08-4294', 'joker@gmail.com', 'Student', '$2y$10$XfqcP2IsIhCarMIziIRrEO1uKuEbxo7wy1Z8tPiYlB2JaF9pWm7Ii', '02340832498', 'Akbarpura', '', '12', '2020', 'Science', 'English', '13-07-2020'),
(3, 'Aqib', 'Ullah', '05-10-1998', 'aqibullah3312@gmail.com', 'Student', '$2y$10$XfqcP2IsIhCarMIziIRrEO1uKuEbxo7wy1Z8tPiYlB2JaF9pWm7Ii', '03069097501', 'Akbarpura', 0x73747564656e7420696d616765732f576861747341707020496d61676520323032302d30342d323520617420322e32342e343920504d2e6a706567, '12', '2020', 'Science', 'IT', '02-08-2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_lectureres`
--

CREATE TABLE `tbl_request_lectureres` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `faculty` varchar(40) NOT NULL,
  `entry_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students_requests`
--

CREATE TABLE `tbl_students_requests` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `d_o_b` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psswrd` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `img` varchar(255) NOT NULL,
  `batch_no` varchar(30) NOT NULL,
  `session` varchar(20) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `department` varchar(40) NOT NULL,
  `message` varchar(255) NOT NULL,
  `entry_date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_super_admin`
--

CREATE TABLE `tbl_super_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `entry_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_super_admin`
--

INSERT INTO `tbl_super_admin` (`id`, `username`, `email`, `pass`, `img`, `role`, `faculty`, `entry_date`) VALUES
(7, 'Sabir Shah', 'sabirshah@gmail.com', '$2y$10$GBGAoGM4DxFHBc4cnyErEu9aVN2JcHh71v2wosE4ZxtWgABYTT0uK', 'admin image/admin.jpg', 'Science', 'Admin', '10-07-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecturer_password_retreive`
--
ALTER TABLE `lecturer_password_retreive`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `password_retrieve`
--
ALTER TABLE `password_retrieve`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `registred_lecturers`
--
ALTER TABLE `registred_lecturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `registred_students`
--
ALTER TABLE `registred_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_request_lectureres`
--
ALTER TABLE `tbl_request_lectureres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emai` (`email`);

--
-- Indexes for table `tbl_students_requests`
--
ALTER TABLE `tbl_students_requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_super_admin`
--
ALTER TABLE `tbl_super_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecturer_password_retreive`
--
ALTER TABLE `lecturer_password_retreive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_retrieve`
--
ALTER TABLE `password_retrieve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registred_lecturers`
--
ALTER TABLE `registred_lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registred_students`
--
ALTER TABLE `registred_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_request_lectureres`
--
ALTER TABLE `tbl_request_lectureres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_students_requests`
--
ALTER TABLE `tbl_students_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_super_admin`
--
ALTER TABLE `tbl_super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
