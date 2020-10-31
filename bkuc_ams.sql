-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 07:35 PM
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
-- Table structure for table `attach_evidences`
--

CREATE TABLE `attach_evidences` (
  `id` int(11) NOT NULL,
  `assigment` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `creat_assigment`
--

CREATE TABLE `creat_assigment` (
  `id` int(11) NOT NULL,
  `faculty` varchar(70) NOT NULL,
  `department` varchar(70) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `class` varchar(50) NOT NULL,
  `ass_name` varchar(255) NOT NULL,
  `ass_marks` varchar(255) NOT NULL,
  `session` varchar(30) NOT NULL,
  `time_duration` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_on` varchar(30) NOT NULL,
  `created_by` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creat_assigment`
--

INSERT INTO `creat_assigment` (`id`, `faculty`, `department`, `semester`, `class`, `ass_name`, `ass_marks`, `session`, `time_duration`, `message`, `created_on`, `created_by`) VALUES
(40, 'Social Science', 'English', 'Semester 3rd', '1', 'parts of  speech', '70', '2020', '09/20/2020 12:00 AM - 09/24/2020 11:59 PM', 'new assigment is cerated', '20/09/2020', 'Anila khan'),
(41, 'Management Science', 'Computer Science', 'Semester 3rd', 'MCS', 'Networking', '100', '2020', '10/27/2020 12:00 AM - 10/31/2020 11:59 PM', 'done', '10/27/2020 11:11 PM', 'Masoom Shah');

-- --------------------------------------------------------

--
-- Table structure for table `creat_assigment_attachments`
--

CREATE TABLE `creat_assigment_attachments` (
  `fk` int(11) NOT NULL,
  `assigment` varchar(255) NOT NULL,
  `attachments` varchar(255) NOT NULL,
  `pk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creat_assigment_attachments`
--

INSERT INTO `creat_assigment_attachments` (`fk`, `assigment`, `attachments`, `pk`) VALUES
(40, 'parts of  speech', 'assigment_images_pdf/software_testing.png', 28),
(40, 'parts of  speech', 'assigment_images_pdf/software-project-management-context-diagram.png', 29),
(41, 'Networking', 'assigment_images_pdf/WhatsApp Image 2020-04-25 at 2.24.51 PM.jpeg', 30);

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
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `role` varchar(30) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `faculty` varchar(40) NOT NULL,
  `department` varchar(255) NOT NULL,
  `entry_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registred_lecturers`
--

INSERT INTO `registred_lecturers` (`id`, `username`, `email`, `address`, `phone`, `dob`, `pass`, `image`, `gender`, `role`, `skills`, `faculty`, `department`, `entry_date`) VALUES
(1, 'Aqib Ullah', 'aqibullah3312@gmail.com', 'akbarpura', '(0306) (8097501)', '05-10-1998', '$2y$10$GK3QdeFOmXmfFgSuqxmOQe.fB7O.2UcV7dO.27OcO/3BBnEcXvsYC', 'lecturers images/user8-128x128.jpg', 'Male', 'Manager', 'php programming', 'Science', 'Computer Science', '13-07-2020'),
(3, 'Masoom Shah', 'lecturer@gmail.com', 'Mansehra', '(0349) (0234920)', '03-04-1990', '$2y$10$Qa1g40j6j3w83Ln93TXjX.x4i9eM8R0wFw3lofLJN6iregjxC3fiu', 'lecturers images/WhatsApp Image 2020-04-25 at 2.24.51 PM.jpeg', 'Male', 'Cordinator', 'AI', 'Management Science', 'Computer Science', '14-07-2020'),
(4, 'malik khan', 'malik@gmail.com', 'peshawar', '(0348) (2394823)', '10-11-1985', '$2y$10$Qa1g40j6j3w83Ln93TXjX.x4i9eM8R0wFw3lofLJN6iregjxC3fiu', 'lecturers images/IMG-20200205-WA0024.jpg', 'Male', 'Teacher', 'Botany expert', 'Science', 'Agriculture', '14-07-2020'),
(5, 'yasir shah', 'yasir@gmail.com', 'charsadda', '(0423) (4534958)', '04-03-1989', '$2y$10$v.AcaXP5GI4mU0xTQTMiAOmbcN2paWuRdOwtp9LFu.09O4x9K6IU.', 'lecturers images/user1-128x128.jpg', 'Male', 'Teacher', 'php programming', 'Science', 'Computer Science', '31-08-2020'),
(6, 'Anila khan', '123@gmail.com', 'mardan', '(0349) (3294829)', '01-10-1993', '$2y$10$QwjX.OfCmzkcR0b.RKc5jOVp0ZaLvVJtnkMURxn.d0YDn7AcbTXEa', 'lecturers images/user4-128x128.jpg', 'Female', 'Teacher', 'Lecturer', 'Arts', 'English', '08-09-2020'),
(7, 'hamza khan', 'hamza@gmail.com', 'Akbarpura', '(0234) (9032843)', '02-09-1999', '$2y$10$HcD6j8H/RqnhEpXY7OS8nOR2JuS9185GA4hXDvBa.zHvab4ASYMZm', 'lecturers images/IMG-20200205-WA0061.jpg', 'Male', 'Lecturer', '', 'Management Science', 'Computer Science', '14-09-2020'),
(11, 'uzair khan', '00000@gmail.com', '', '', '', '$2y$10$Ww25.uidsvhD1JovuGZdTO7u2STz6xt426lKeytdUg4bkYki3yalW', 'lecturers images/teach_1.jpg', '', 'Lecturer', '', 'Arts', '', 'Mon / 21 / September / 2020 , 11:18:AM'),
(12, 'Aqib Ullah', 'new_teacher@gmail.com', 'akbarpura', '12342432', '', '$2y$10$Bj68/JFuUHCYMP7vCy3j0ODBY3P5IpM0HNAa.YUIbHMuEQaqI1V1u', 'lecturers images/A  (2).jpeg', 'Male', 'Assignment Creator', '', 'Management Science', '', 'Tue / 27 / October / 2020 , 22:44:PM');

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
  `img` varchar(255) NOT NULL,
  `class` varchar(100) NOT NULL,
  `faculty` varchar(40) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `registry_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registred_students`
--

INSERT INTO `registred_students` (`id`, `first_name`, `last_name`, `d_o_b`, `email`, `type`, `psswrd`, `phone`, `address`, `img`, `class`, `faculty`, `department`, `semester`, `registry_date`) VALUES
(15, 'Zakir', 'Safi', '10-02-1999', 'zakir@gmail.com', 'Student', '$2y$10$IDa60GraRB0rxV6tZbanc.NcpGmhXtzn/mOu1PtMmsZLXWqx4e4q2', '(0343) (5450349)', 'chakdarra swat', 'student images/user2-160x160.jpg', '1', 'Management Science', 'Computer Science', 'Semester 3rd', '20-09-2020'),
(16, 'Aqib', 'Lodhi', '02-09-4238', 'aqibullah3312@gmail.com', 'Student', '$2y$10$olcpnJs0pJNrJN9O31fjkeOWQB1HrhH4qw6WgsR/sTsCjAvAZ75Ne', '(0123) (9483248)', 'Akbarpura', 'student images/WhatsApp Image 2020-04-25 at 2.24.50 PM.jpeg', 'MCS', 'Management Science', 'Computer Science', 'Semester 3rd', '21-09-2020'),
(17, 'musaddiq', 'khan', '12-02-1999', 'musaddiq334@gmail.com', 'Student', '$2y$10$AqXvLSISbiDqFjK5cWi6h./i9/wlwN3wtrh0gA2sORwquyHCk1od6', '03003284932', 'Akbarpura', 'student images/Capture.PNG', '1', 'Management Science', 'Computer Science', '', '22-09-2020');

-- --------------------------------------------------------

--
-- Table structure for table `response_feedback`
--

CREATE TABLE `response_feedback` (
  `id` int(11) NOT NULL,
  `response` varchar(255) NOT NULL,
  `response_by` varchar(50) NOT NULL,
  `responser_img` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `responser_email` varchar(60) NOT NULL,
  `to_name` varchar(50) NOT NULL,
  `to_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response_feedback`
--

INSERT INTO `response_feedback` (`id`, `response`, `response_by`, `responser_img`, `date`, `responser_email`, `to_name`, `to_email`) VALUES
(1, 'hello aqib', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/20/2020 20:44 PM', 'admin@gmail.com', 'Aqib ullah', 'aqibullah3312@gmail.com'),
(2, 'whats goin on', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/20/2020 20:45 PM', 'admin@gmail.com', 'Aqib ullah', 'aqibullah3312@gmail.com'),
(3, 'hi uzair', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/20/2020 20:50 PM', 'admin@gmail.com', 'uzair', 'uzai3434@gmail.com'),
(4, 'how can i help u ?', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/20/2020 20:51 PM', 'admin@gmail.com', 'uzair', 'uzai3434@gmail.com'),
(5, 'tell me something', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/20/2020 20:51 PM', 'admin@gmail.com', 'uzair', 'uzai3434@gmail.com'),
(6, 'assalm u alikum zakir ', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/20/2020 21:00 PM', 'admin@gmail.com', 'zakir safi', 'zakir@gmail.com'),
(7, 'how could i help u', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/20/2020 21:00 PM', 'admin@gmail.com', 'zakir safi', 'zakir@gmail.com'),
(8, 'hi student', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/20/2020 21:04 PM', 'admin@gmail.com', 'student', 'shiplu@gmail.com'),
(9, 'are u like this bkuc ams', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/20/2020 21:05 PM', 'admin@gmail.com', 'student', 'shiplu@gmail.com'),
(10, 'tell me your problem', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/20/2020 21:07 PM', 'admin@gmail.com', 'student', 'aqiblodhi.muhammad@yahoo.com'),
(11, 'good morning', 'AMS ADMIN', 'admin image/user6-128x128.jpg', '09/21/2020 03:34 AM', 'admin@gmail.com', 'Asim shehzad', 'shiplu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `re_submitted_attachments`
--

CREATE TABLE `re_submitted_attachments` (
  `f_k` int(11) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL,
  `p_k` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `re_submit_assignments`
--

CREATE TABLE `re_submit_assignments` (
  `f_k` int(11) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `re_submiited_on` varchar(255) NOT NULL,
  `submitted_to` varchar(255) NOT NULL,
  `p_k` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students_assigment_accepted`
--

CREATE TABLE `students_assigment_accepted` (
  `id` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `std_mob` varchar(20) NOT NULL,
  `std_img` varchar(255) NOT NULL,
  `asssigment` varchar(255) NOT NULL,
  `marks` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `due_date` varchar(30) NOT NULL,
  `submition_date` varchar(30) NOT NULL,
  `confirmation` varchar(30) NOT NULL,
  `confirm_by` varchar(50) NOT NULL,
  `lec_email` varchar(50) NOT NULL,
  `confirm_on` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_assigment_accepted`
--

INSERT INTO `students_assigment_accepted` (`id`, `std_name`, `std_email`, `std_mob`, `std_img`, `asssigment`, `marks`, `title`, `description`, `due_date`, `submition_date`, `confirmation`, `confirm_by`, `lec_email`, `confirm_on`) VALUES
(2, 'zakir safi', 'zakirullah.cs@gmail.com', '03240087324', 'student images/20200220_124832(1).jpg', 'new assigment', '80 / 100', 'complete', 'sir i have done', '09/19/2020 11:59 PM', '09/18/2020 04:37 PM', 'Accepted', 'Masoom Shah', 'lecturer@gmail.com', '09/18/2020 04:42:32 PM'),
(3, 'Zakir Safi', 'zakir@gmail.com', '(0343) (5450349)', 'student images/user2-160x160.jpg', 'parts of  speech', '34 / 70', 'complete', 'assigment has been completed', '09/24/2020 11:59 PM', '09/20/2020 12:03 PM', 'Accepted', 'Anila khan', '123@gmail.com', '09/20/2020 12:04:55 PM'),
(7, 'Aqib Lodhi', 'aqibullah3312@gmail.com', '(0123) (9483248)', 'student images/WhatsApp Image 2020-04-25 at 2.24.50 PM.jpeg', 'parts of  speech', '55', 'assigment complete', 'agian submitted', '09/24/2020 11:59 PM', '09/23/2020 09:10 AM', 'Accepted', 'Anila khan', '123@gmail.com', '09/23/2020 09:10:28 AM'),
(8, 'Aqib Lodhi', 'aqibullah3312@gmail.com', '(0123) (9483248)', 'student images/WhatsApp Image 2020-04-25 at 2.24.50 PM.jpeg', 'Networking', '40', 'ok', 'done', '10/31/2020 11:59 PM', '10/27/2020 11:33 PM', 'Accepted', 'Masoom Shah', 'lecturer@gmail.com', '10/27/2020 11:34:33 PM');

-- --------------------------------------------------------

--
-- Table structure for table `students_assigment_rejected`
--

CREATE TABLE `students_assigment_rejected` (
  `id` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `std_mob` varchar(20) NOT NULL,
  `std_img` varchar(255) NOT NULL,
  `asssigment` varchar(255) NOT NULL,
  `marks` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `due_date` varchar(20) NOT NULL,
  `submition_date` varchar(30) NOT NULL,
  `confirmation` varchar(30) NOT NULL,
  `reject_reason` varchar(255) NOT NULL,
  `confirm_by` varchar(50) NOT NULL,
  `lec_email` varchar(50) NOT NULL,
  `confirm_on` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_assigment_rejected`
--

INSERT INTO `students_assigment_rejected` (`id`, `std_name`, `std_email`, `std_mob`, `std_img`, `asssigment`, `marks`, `title`, `description`, `due_date`, `submition_date`, `confirmation`, `reject_reason`, `confirm_by`, `lec_email`, `confirm_on`) VALUES
(1, 'uzair Ihsan', 'uxairking225@gmail.com', '(0341) (8585756)', 'student images/uz  (83).jpeg', 'active and passive voice', '0 / 60', 'complete', 'i have done sir', '09/17/2020 11:59 PM', '09/17/2020 07:41 PM', 'Rejected', '', 'Masoom Shah', 'lecturer@gmail.com', '09/17/2020 07:42:15 ');

-- --------------------------------------------------------

--
-- Table structure for table `student_whose_submitted`
--

CREATE TABLE `student_whose_submitted` (
  `id` int(11) NOT NULL,
  `std_name` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `semester` varchar(60) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `std_img` varchar(255) NOT NULL,
  `submitted_date` varchar(40) NOT NULL,
  `assigment_created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_whose_submitted`
--

INSERT INTO `student_whose_submitted` (`id`, `std_name`, `email`, `department`, `semester`, `faculty`, `std_img`, `submitted_date`, `assigment_created_by`) VALUES
(8, 'Zakir Safi', 'zakir@gmail.com', 'Computer Science', 'Semester 3rd', 'Management Science', 'student images/user2-160x160.jpg', '09/20/2020 12:03 PM', 'Anila khan'),
(10, 'Aqib Lodhi', 'aqibullah3312@gmail.com', 'Computer Science', 'Semester 3rd', 'Management Science', 'student images/WhatsApp Image 2020-04-25 at 2.24.50 PM.jpeg', '09/23/2020 08:09 AM', 'Anila khan');

-- --------------------------------------------------------

--
-- Table structure for table `submit_assigments`
--

CREATE TABLE `submit_assigments` (
  `std_id` int(11) NOT NULL,
  `assigment` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `submitted_on` varchar(50) NOT NULL,
  `assigment_was_created_by` varchar(100) NOT NULL,
  `primary_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_lectureres`
--

CREATE TABLE `tbl_request_lectureres` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `faculty` varchar(40) NOT NULL,
  `entry_date` varchar(50) NOT NULL
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
  `class` varchar(50) NOT NULL,
  `semester` varchar(100) NOT NULL,
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
  `phone` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `entry_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_super_admin`
--

INSERT INTO `tbl_super_admin` (`id`, `username`, `email`, `phone`, `pass`, `img`, `gender`, `address`, `role`, `entry_date`) VALUES
(7, 'AMS ADMIN', 'admin@gmail.com', '03003952849', '$2y$10$a/RgJ6h5iBHb/WPMOuaa/OAI7L7zflsRbTCr/ZFYDl9ePtRoD6s72', 'admin image/user6-128x128.jpg', 'Male', 'charsadda', 'User Admin', '10-07-2020');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attach_evidences`
--
ALTER TABLE `attach_evidences`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `creat_assigment`
--
ALTER TABLE `creat_assigment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ass_name` (`ass_name`);

--
-- Indexes for table `creat_assigment_attachments`
--
ALTER TABLE `creat_assigment_attachments`
  ADD PRIMARY KEY (`pk`),
  ADD KEY `fk` (`fk`);

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
-- Indexes for table `response_feedback`
--
ALTER TABLE `response_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `re_submitted_attachments`
--
ALTER TABLE `re_submitted_attachments`
  ADD PRIMARY KEY (`p_k`),
  ADD KEY `f_k` (`f_k`);

--
-- Indexes for table `re_submit_assignments`
--
ALTER TABLE `re_submit_assignments`
  ADD PRIMARY KEY (`p_k`),
  ADD KEY `f_k` (`f_k`);

--
-- Indexes for table `students_assigment_accepted`
--
ALTER TABLE `students_assigment_accepted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_assigment_rejected`
--
ALTER TABLE `students_assigment_rejected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_whose_submitted`
--
ALTER TABLE `student_whose_submitted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_assigments`
--
ALTER TABLE `submit_assigments`
  ADD PRIMARY KEY (`primary_key`),
  ADD KEY `std_id` (`std_id`);

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
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attach_evidences`
--
ALTER TABLE `attach_evidences`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `creat_assigment`
--
ALTER TABLE `creat_assigment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `creat_assigment_attachments`
--
ALTER TABLE `creat_assigment_attachments`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registred_students`
--
ALTER TABLE `registred_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `response_feedback`
--
ALTER TABLE `response_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `re_submitted_attachments`
--
ALTER TABLE `re_submitted_attachments`
  MODIFY `p_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `re_submit_assignments`
--
ALTER TABLE `re_submit_assignments`
  MODIFY `p_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students_assigment_accepted`
--
ALTER TABLE `students_assigment_accepted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students_assigment_rejected`
--
ALTER TABLE `students_assigment_rejected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_whose_submitted`
--
ALTER TABLE `student_whose_submitted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `submit_assigments`
--
ALTER TABLE `submit_assigments`
  MODIFY `primary_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_request_lectureres`
--
ALTER TABLE `tbl_request_lectureres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `creat_assigment_attachments`
--
ALTER TABLE `creat_assigment_attachments`
  ADD CONSTRAINT `creat_assigment_attachments_ibfk_1` FOREIGN KEY (`fk`) REFERENCES `creat_assigment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `re_submit_assignments`
--
ALTER TABLE `re_submit_assignments`
  ADD CONSTRAINT `re_submit_assignments_ibfk_1` FOREIGN KEY (`f_k`) REFERENCES `student_whose_submitted` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submit_assigments`
--
ALTER TABLE `submit_assigments`
  ADD CONSTRAINT `submit_assigments_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `student_whose_submitted` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
