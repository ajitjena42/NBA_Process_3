-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 12:55 PM
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
-- Database: `nba`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignsubject`
--

CREATE TABLE `assignsubject` (
  `assign_id` int(20) NOT NULL,
  `years` varchar(20) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `teacher_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignsubject`
--

INSERT INTO `assignsubject` (`assign_id`, `years`, `dept_name`, `sem`, `class_name`, `sub_name`, `teacher_id`) VALUES
(1, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'MAD', 'VP123IF'),
(2, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'MGT', 'VP2IF'),
(3, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'WBP', 'VP5IF'),
(4, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'ETI', 'VP123IF');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(5) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `dept_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `sem`, `dept_name`) VALUES
(1, 'IF1IA', 'First', 'Information Technology'),
(2, 'IF2IA', 'Second', 'Information Technology'),
(3, 'IF3IA', 'Third', 'Information Technology'),
(4, 'IF4IA', 'Fourth', 'Information Technology'),
(5, 'IF5IA', 'Fifth', 'Information Technology'),
(6, 'IF6IA', 'Sixth', 'Information Technology'),
(7, 'CO1IA', 'First', 'Computer Engineering'),
(8, 'CO2IA', 'Second', 'Computer Engineering'),
(9, 'CO3IA', 'Third', 'Computer Engineering'),
(10, 'CO4IA', 'Fourth', 'Computer Engineering'),
(11, 'CO5IA', 'Fifth', 'Computer Engineering'),
(12, 'CO6IA', 'Sixth', 'Computer Engineering'),
(13, 'EJ1IA', 'First', 'Electronics Engineering'),
(14, 'EJ2IA', 'Second', 'Electronics Engineering'),
(15, 'EJ3IA', 'Third', 'Electronics Engineering'),
(16, 'EJ4IA', 'Fourth', 'Electronics Engineering'),
(17, 'EJ5IA', 'Fifth', 'Electronics Engineering'),
(18, 'EJ6IA', 'Sixth', 'Electronics Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `cos`
--

CREATE TABLE `cos` (
  `cos_id` int(10) NOT NULL,
  `years` varchar(20) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `exam` varchar(20) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `teacher_id` varchar(20) NOT NULL,
  `co1` int(2) NOT NULL,
  `co2` int(2) NOT NULL,
  `co3` int(2) NOT NULL,
  `co4` int(2) NOT NULL,
  `co5` int(2) NOT NULL,
  `co6` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cos`
--

INSERT INTO `cos` (`cos_id`, `years`, `dept_name`, `sem`, `class_name`, `exam`, `sub_name`, `teacher_id`, `co1`, `co2`, `co3`, `co4`, `co5`, `co6`) VALUES
(31, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'PT1', 'MAD', 'VP123IF', 3, 2, 3, 3, 0, 0),
(32, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'PT2', 'MAD', 'VP123IF', 0, 0, 0, 2, 1, 1),
(33, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'Microproject', 'MAD', 'VP123IF', 3, 3, 3, 3, 3, 3),
(34, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'Practical', 'MAD', 'VP123IF', 0, 0, 0, 3, 3, 0),
(35, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'ESE', 'MAD', 'VP123IF', 3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cosfull`
--

CREATE TABLE `cosfull` (
  `cosf_id` int(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `cosf_name` varchar(20) NOT NULL,
  `cosf_full` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cosfull`
--

INSERT INTO `cosfull` (`cosf_id`, `sem`, `dept_name`, `sub_name`, `cosf_name`, `cosf_full`) VALUES
(7, 'Sixth', 'Information Technology', 'MAD', 'CO1', 'jsd gfhasgdf'),
(8, 'Sixth', 'Information Technology', 'MAD', 'CO2', 'jsd gfhasgdf'),
(9, 'Sixth', 'Information Technology', 'MAD', 'CO3', 'jsd gfhasgdf'),
(10, 'Sixth', 'Information Technology', 'MAD', 'CO4', 'jsd gfhasgdf'),
(11, 'Sixth', 'Information Technology', 'MAD', 'CO5', 'jsd gfhasgdf'),
(12, 'Sixth', 'Information Technology', 'MAD', 'CO6', 'jsd gfhasgdf');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(5) NOT NULL,
  `dept_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'Information Technology'),
(2, 'Computer Engineering'),
(3, 'Electronics Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `ese`
--

CREATE TABLE `ese` (
  `ese_id` int(20) NOT NULL,
  `years` varchar(20) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `teacher_id` varchar(20) NOT NULL,
  `enrollment` int(20) NOT NULL,
  `st_id` varchar(20) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `esetheory` int(3) NOT NULL,
  `esepractical` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ese`
--

INSERT INTO `ese` (`ese_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `enrollment`, `st_id`, `st_name`, `esetheory`, `esepractical`) VALUES
(52, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680200, '17202A0001', 'Bharat Chopra', 67, 25),
(53, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680201, '17202A0002', 'Omkar Gaikwad', 0, 0),
(54, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680202, '17202A0010', 'Tanishk Shah', 0, 0),
(55, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680203, '17202A0015', 'Balakrishna Udaiyar', 0, 0),
(56, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680204, '17202A0017', 'Shabista Idrisi', 0, 0),
(57, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680205, '17202A0022', 'Rohit Kakade', 0, 0),
(58, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680206, '17202A0023', 'Omkar Dighe', 0, 0),
(59, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680207, '17202A0028', 'Sheetal Gupta', 0, 0),
(60, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680208, '17202A0036', 'Sushant Yelurkar', 0, 0),
(61, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680209, '17202A0038', 'Samreen Kazi', 0, 0),
(62, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680210, '17202A0040', 'Bhavesh Satpute', 0, 0),
(63, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680211, '17202A0041', 'Viraj Mehta', 0, 0),
(64, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680229, '17202A0042', 'Ajit Jena', 0, 0),
(65, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680230, '17202A0043', 'Praveen Bhandari', 0, 0),
(66, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680231, '17202A0060', 'Apurva Kapse', 0, 0),
(67, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680232, '17202A0061', 'Shivshankar Sahu', 0, 0),
(68, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680233, '17202A0062', 'Poorvi Kolge', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hod_id` varchar(20) NOT NULL,
  `hod_name` varchar(30) NOT NULL,
  `hod_password` varchar(30) NOT NULL,
  `hod_phone` bigint(10) NOT NULL,
  `hod_email` varchar(50) NOT NULL,
  `dept_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hod_id`, `hod_name`, `hod_password`, `hod_phone`, `hod_email`, `dept_name`) VALUES
('HOD123CO', 'Computer Engineering', 'computer', 9465456465, 'computer@gmail.com', 'Computer Engineering'),
('HOD123EJ', 'Electronics Engineering', 'electronic', 9786456132, 'electronic@gmail.com', 'Electronics Engineering'),
('HOD123IF', 'Yogita Jore', 'yogita', 9786456132, 'yogita.khandagale@vpt.edu.in', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `lab_id` int(10) NOT NULL,
  `years` varchar(20) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `teacher_id` varchar(20) NOT NULL,
  `enrollment` varchar(20) NOT NULL,
  `st_id` varchar(20) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `outof` int(3) NOT NULL,
  `p1` int(3) NOT NULL,
  `p2` int(3) NOT NULL,
  `p3` int(3) NOT NULL,
  `p4` int(3) NOT NULL,
  `p5` int(3) NOT NULL,
  `p6` int(3) NOT NULL,
  `p7` int(3) NOT NULL,
  `p8` int(3) NOT NULL,
  `p9` int(3) NOT NULL,
  `p10` int(3) NOT NULL,
  `p11` int(3) NOT NULL,
  `p12` int(3) NOT NULL,
  `p13` int(3) NOT NULL,
  `p14` int(3) NOT NULL,
  `p15` int(3) NOT NULL,
  `p16` int(3) NOT NULL,
  `p17` int(3) NOT NULL,
  `p18` int(3) NOT NULL,
  `p19` int(3) NOT NULL,
  `p20` int(3) NOT NULL,
  `p21` int(3) NOT NULL,
  `p22` int(3) NOT NULL,
  `p23` int(3) NOT NULL,
  `p24` int(3) NOT NULL,
  `p25` int(3) NOT NULL,
  `p26` int(3) NOT NULL,
  `p27` int(3) NOT NULL,
  `p28` int(3) NOT NULL,
  `p29` int(3) NOT NULL,
  `p30` int(3) NOT NULL,
  `p31` int(3) NOT NULL,
  `p32` int(3) NOT NULL,
  `p33` int(3) NOT NULL,
  `p34` int(3) NOT NULL,
  `p35` int(3) NOT NULL,
  `total` int(6) NOT NULL,
  `nofprac` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`lab_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `enrollment`, `st_id`, `st_name`, `outof`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `total`, `nofprac`) VALUES
(18, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680200', '17202A0001', 'Bharat Chopra', 25, 12, 13, 14, 25, 25, 25, 25, 24, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 17),
(19, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680201', '17202A0002', 'Omkar Gaikwad', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(20, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680202', '17202A0010', 'Tanishk Shah', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(21, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680203', '17202A0015', 'Balakrishna Udaiyar', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(22, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680204', '17202A0017', 'Shabista Idrisi', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(23, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680205', '17202A0022', 'Rohit Kakade', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(24, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680206', '17202A0023', 'Omkar Dighe', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(25, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680207', '17202A0028', 'Sheetal Gupta', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(26, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680208', '17202A0036', 'Sushant Yelurkar', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(27, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680209', '17202A0038', 'Samreen Kazi', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(28, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680210', '17202A0040', 'Bhavesh Satpute', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(29, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680211', '17202A0041', 'Viraj Mehta', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(30, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680229', '17202A0042', 'Ajit Jena', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(31, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680230', '17202A0043', 'Praveen Bhandari', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(32, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680231', '17202A0060', 'Apurva Kapse', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(33, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680232', '17202A0061', 'Shivshankar Sahu', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17),
(34, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680233', '17202A0062', 'Poorvi Kolge', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17);

-- --------------------------------------------------------

--
-- Table structure for table `microproject`
--

CREATE TABLE `microproject` (
  `micro_id` int(10) NOT NULL,
  `years` varchar(20) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `teacher_id` varchar(20) NOT NULL,
  `enrollment` int(20) NOT NULL,
  `st_id` varchar(20) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `microproject`
--

INSERT INTO `microproject` (`micro_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `enrollment`, `st_id`, `st_name`, `marks`) VALUES
(52, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680200, '17202A0001', 'Bharat Chopra', 9),
(53, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680201, '17202A0002', 'Omkar Gaikwad', 9),
(54, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680202, '17202A0010', 'Tanishk Shah', 9),
(55, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680203, '17202A0015', 'Balakrishna Udaiyar', 9),
(56, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680204, '17202A0017', 'Shabista Idrisi', 9),
(57, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680205, '17202A0022', 'Rohit Kakade', 9),
(58, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680206, '17202A0023', 'Omkar Dighe', 9),
(59, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680207, '17202A0028', 'Sheetal Gupta', 0),
(60, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680208, '17202A0036', 'Sushant Yelurkar', 0),
(61, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680209, '17202A0038', 'Samreen Kazi', 0),
(62, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680210, '17202A0040', 'Bhavesh Satpute', 0),
(63, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680211, '17202A0041', 'Viraj Mehta', 0),
(64, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680229, '17202A0042', 'Ajit Jena', 0),
(65, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680230, '17202A0043', 'Praveen Bhandari', 0),
(66, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680231, '17202A0060', 'Apurva Kapse', 0),
(67, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680232, '17202A0061', 'Shivshankar Sahu', 0),
(68, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680233, '17202A0062', 'Poorvi Kolge', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `posf_id` int(50) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `posf_name` varchar(20) NOT NULL,
  `posf_full` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pt1`
--

CREATE TABLE `pt1` (
  `pt1_id` int(20) NOT NULL,
  `years` varchar(20) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `teacher_id` varchar(20) NOT NULL,
  `st_id` varchar(20) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `1a` int(1) NOT NULL,
  `1b` int(1) NOT NULL,
  `1c` int(1) NOT NULL,
  `1d` int(1) NOT NULL,
  `1e` int(1) NOT NULL,
  `1f` int(1) NOT NULL,
  `2a` int(1) NOT NULL,
  `2b` int(1) NOT NULL,
  `2c` int(1) NOT NULL,
  `2d` int(1) NOT NULL,
  `total` int(5) NOT NULL,
  `absent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pt1`
--

INSERT INTO `pt1` (`pt1_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `st_id`, `st_name`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `2a`, `2b`, `2c`, `2d`, `total`, `absent`) VALUES
(358, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0001', 'Bharat Chopra', 2, 2, 2, 2, 2, 2, 4, 4, 4, 4, 20, 0),
(359, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0002', 'Omkar Gaikwad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(360, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0010', 'Tanishk Shah', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(361, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0015', 'Balakrishna Udaiyar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(362, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0017', 'Shabista Idrisi', 1, 1, 0, 2, 2, 0, 3, 3, 3, 3, 15, 0),
(363, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0022', 'Rohit Kakade', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(364, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0023', 'Omkar Dighe', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(365, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0028', 'Sheetal Gupta', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(366, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0036', 'Sushant Yelurkar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(367, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0038', 'Samreen Kazi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(368, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0040', 'Bhavesh Satpute', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(369, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0041', 'Viraj Mehta', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(370, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0042', 'Ajit Jena', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(371, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0043', 'Praveen Bhandari', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(372, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0060', 'Apurva Kapse', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(373, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0061', 'Shivshankar Sahu', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(374, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0062', 'Poorvi Kolge', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pt2`
--

CREATE TABLE `pt2` (
  `pt2_id` int(20) NOT NULL,
  `years` varchar(20) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `teacher_id` varchar(20) NOT NULL,
  `st_id` varchar(20) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `1a` int(1) NOT NULL,
  `1b` int(1) NOT NULL,
  `1c` int(1) NOT NULL,
  `1d` int(1) NOT NULL,
  `1e` int(1) NOT NULL,
  `1f` int(1) NOT NULL,
  `2a` int(1) NOT NULL,
  `2b` int(1) NOT NULL,
  `2c` int(1) NOT NULL,
  `2d` int(1) NOT NULL,
  `total` int(5) NOT NULL,
  `absent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pt2`
--

INSERT INTO `pt2` (`pt2_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `st_id`, `st_name`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `2a`, `2b`, `2c`, `2d`, `total`, `absent`) VALUES
(18, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0001', 'Bharat Chopra', 2, 2, 2, 2, 1, 1, 2, 3, 4, 4, 19, 0),
(19, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0002', 'Omkar Gaikwad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0010', 'Tanishk Shah', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0015', 'Balakrishna Udaiyar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0017', 'Shabista Idrisi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0022', 'Rohit Kakade', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0023', 'Omkar Dighe', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0028', 'Sheetal Gupta', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0036', 'Sushant Yelurkar', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0038', 'Samreen Kazi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0040', 'Bhavesh Satpute', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0041', 'Viraj Mehta', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0042', 'Ajit Jena', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0043', 'Praveen Bhandari', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0060', 'Apurva Kapse', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0061', 'Shivshankar Sahu', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0062', 'Poorvi Kolge', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int(5) NOT NULL,
  `sem` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `sem`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third'),
(4, 'Fourth'),
(5, 'Fifth'),
(6, 'Sixth');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(20) NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `staff_password` varchar(100) NOT NULL,
  `staff_phone` bigint(10) NOT NULL,
  `staff_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_password`, `staff_phone`, `staff_email`) VALUES
('123456', 'admin', '0192023a7bbd73250516f069df18b500', 9789789789, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `years` varchar(20) NOT NULL,
  `enrollment` int(10) NOT NULL,
  `st_id` varchar(20) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `st_password` varchar(100) NOT NULL,
  `st_phone` bigint(10) NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `dept_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`years`, `enrollment`, `st_id`, `st_name`, `st_password`, `st_phone`, `st_email`, `class_name`, `dept_name`) VALUES
('2019-2020', 1705680200, '17202A0001', 'Bharat Chopra', '123456', 9326590372, 'bharat@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680201, '17202A0002', 'Omkar Gaikwad', '123456', 9326590372, 'omkarg@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680202, '17202A0010', 'Tanishk Shah', '123456', 9326590372, 'tanishk@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680203, '17202A0015', 'Balakrishna Udaiyar', '123456', 9326590372, 'bala@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680204, '17202A0017', 'Shabista Idrisi', '123456', 9326590372, 'afshaidrisi13155@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680205, '17202A0022', 'Rohit Kakade', '123456', 9326590372, 'rohit@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680206, '17202A0023', 'Omkar Dighe', '123456', 9326590372, 'omkae@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680207, '17202A0028', 'Sheetal Gupta', '123456', 9326590372, 'sheetal@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680208, '17202A0036', 'Sushant Yelurkar', '123456', 9326590372, 'yelurkarsushant@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680209, '17202A0038', 'Samreen Kazi', '123456', 9326590372, 'samreen@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680210, '17202A0040', 'Bhavesh Satpute', '123456', 9326590372, 'bhaveshsatpute2002@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680211, '17202A0041', 'Viraj Mehta', '123456', 9326590372, 'virajmehta@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680229, '17202A0042', 'Ajit Jena', '123456', 9326590372, 'ajitjena123456@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680230, '17202A0043', 'Praveen Bhandari', '123456', 9326590372, 'praveen@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680231, '17202A0060', 'Apurva Kapse', '123456', 9326590372, 'apurva@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680232, '17202A0061', 'Shivshankar Sahu', '123456', 9326590372, 'shiv@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680233, '17202A0062', 'Poorvi Kolge', '123456', 9326590372, 'poorvi@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680234, '17202B0042', 'Raju Singh', '123456', 9326590372, 'rajusingh@gmail.com', 'IF6IB', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(20) NOT NULL,
  `sub_code` int(10) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `years` varchar(20) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `specialize` varchar(30) NOT NULL,
  `practical` tinyint(1) NOT NULL,
  `theory` tinyint(1) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_code`, `sub_name`, `years`, `dept_name`, `sem`, `specialize`, `practical`, `theory`, `creationdate`, `updationdate`) VALUES
(1, 22509, 'MGT', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 1, 0, '2020-02-07 13:10:12', ''),
(2, 22617, 'MAD', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 1, 1, '2020-02-07 13:10:12', ''),
(3, 22618, 'ETI', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 1, 0, '2020-02-07 13:10:12', ''),
(4, 22619, 'WBP', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 1, 1, '2020-02-07 13:10:12', ''),
(5, 22622, 'WMN', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 0, 1, '2020-02-07 13:10:12', '07-02-2020 06:44:49 PM');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(20) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `t_phone` bigint(10) NOT NULL,
  `t_email` varchar(50) NOT NULL,
  `t_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `t_phone`, `t_email`, `t_password`) VALUES
('VP123CO', 'Computer', 9456456456, 'computer@gmail.com', 'computer'),
('VP123IF', 'Archana Gopnarayan', 9564856245, 'archana@gmail.com', '46ff90e8e3c3c1cb6cae3a539082ffc9'),
('VP2IF', 'Shama Mam', 9326590372, 'shama@gmail.com', '05c62ba9ccef5ad58ccf06f765e8d128'),
('VP3IF', 'Madhura Mam', 9326590372, 'madhura@gmail.com', '8d29458625a600c8485db75635982cd6'),
('VP4IF', 'Kalyani Mam', 9326590372, 'kalyani@gmail.com', '28b0ac7cbdd5c786e7074225e96ccce7'),
('VP5IF', 'Yogita Mam', 9326590372, 'yogita@gmail.com', '93368315ccc34d6cea4a9b9c505f368f');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `year_id` int(5) NOT NULL,
  `years` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `years`) VALUES
(1, '2019-2020'),
(2, '2020-2021'),
(3, '2021-2022'),
(4, '2022-2023'),
(5, '2023-2024'),
(6, '2024-2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignsubject`
--
ALTER TABLE `assignsubject`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `cos`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`cos_id`);

--
-- Indexes for table `cosfull`
--
ALTER TABLE `cosfull`
  ADD PRIMARY KEY (`cosf_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `ese`
--
ALTER TABLE `ese`
  ADD PRIMARY KEY (`ese_id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`hod_id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `microproject`
--
ALTER TABLE `microproject`
  ADD PRIMARY KEY (`micro_id`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`posf_id`);

--
-- Indexes for table `pt1`
--
ALTER TABLE `pt1`
  ADD PRIMARY KEY (`pt1_id`);

--
-- Indexes for table `pt2`
--
ALTER TABLE `pt2`
  ADD PRIMARY KEY (`pt2_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`),
  ADD UNIQUE KEY `enrollment` (`enrollment`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`),
  ADD UNIQUE KEY `year` (`years`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignsubject`
--
ALTER TABLE `assignsubject`
  MODIFY `assign_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cos`
--
ALTER TABLE `cos`
  MODIFY `cos_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `cosfull`
--
ALTER TABLE `cosfull`
  MODIFY `cosf_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ese`
--
ALTER TABLE `ese`
  MODIFY `ese_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `lab_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `microproject`
--
ALTER TABLE `microproject`
  MODIFY `micro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `posf_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pt1`
--
ALTER TABLE `pt1`
  MODIFY `pt1_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;

--
-- AUTO_INCREMENT for table `pt2`
--
ALTER TABLE `pt2`
  MODIFY `pt2_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
