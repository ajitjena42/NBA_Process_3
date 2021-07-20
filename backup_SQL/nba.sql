-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 08:58 PM
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
  `teacher_id` varchar(20) NOT NULL,
  `exitform_enable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignsubject`
--

INSERT INTO `assignsubject` (`assign_id`, `years`, `dept_name`, `sem`, `class_name`, `sub_name`, `teacher_id`, `exitform_enable`) VALUES
(10, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'MAD', 'VP123IF', 0),
(11, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'ETI', 'VP123IF', 1),
(12, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'MGT', 'VP1IF', 0),
(13, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'WBP', 'VP2IF', 0),
(14, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'WMN', 'VP3IF', 0),
(15, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'MAD', 'VP123IF', 0),
(16, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'WMN', 'VP3IF', 0),
(17, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'MAD', 'VP123IF', 0);

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
(18, 'EJ6IA', 'Sixth', 'Electronics Engineering'),
(19, 'IF6IB', '', ''),
(20, 'IF6IC', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comap_prac`
--

CREATE TABLE `comap_prac` (
  `comap_prac_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `outof` int(3) NOT NULL,
  `p1` int(2) NOT NULL,
  `p2` int(2) NOT NULL,
  `p3` int(2) NOT NULL,
  `p4` int(2) NOT NULL,
  `p5` int(2) NOT NULL,
  `p6` int(2) NOT NULL,
  `p7` int(2) NOT NULL,
  `p8` int(2) NOT NULL,
  `p9` int(2) NOT NULL,
  `p10` int(2) NOT NULL,
  `p11` int(2) NOT NULL,
  `p12` int(2) NOT NULL,
  `p13` int(2) NOT NULL,
  `p14` int(2) NOT NULL,
  `p15` int(2) NOT NULL,
  `p16` int(2) NOT NULL,
  `p17` int(2) NOT NULL,
  `p18` int(2) NOT NULL,
  `p19` int(2) NOT NULL,
  `p20` int(2) NOT NULL,
  `p21` int(2) NOT NULL,
  `p22` int(2) NOT NULL,
  `p23` int(2) NOT NULL,
  `p24` int(2) NOT NULL,
  `p25` int(2) NOT NULL,
  `p26` int(2) NOT NULL,
  `p27` int(2) NOT NULL,
  `p28` int(2) NOT NULL,
  `p29` int(2) NOT NULL,
  `p30` int(2) NOT NULL,
  `p31` int(2) NOT NULL,
  `p32` int(2) NOT NULL,
  `p33` int(2) NOT NULL,
  `p34` int(2) NOT NULL,
  `p35` int(2) NOT NULL,
  `nofprac` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comap_prac`
--

INSERT INTO `comap_prac` (`comap_prac_id`, `sub_id`, `outof`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `nofprac`) VALUES
(4, 16, 25, 1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `comap_pt1`
--

CREATE TABLE `comap_pt1` (
  `comap_pt1_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `1a` int(1) NOT NULL,
  `1b` int(1) NOT NULL,
  `1c` int(1) NOT NULL,
  `1d` int(1) NOT NULL,
  `1e` int(1) NOT NULL,
  `1f` int(1) NOT NULL,
  `2a` int(1) NOT NULL,
  `2b` int(1) NOT NULL,
  `2c` int(1) NOT NULL,
  `2d` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comap_pt1`
--

INSERT INTO `comap_pt1` (`comap_pt1_id`, `sub_id`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `2a`, `2b`, `2c`, `2d`) VALUES
(19, 16, 1, 2, 3, 1, 2, 3, 4, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comap_pt2`
--

CREATE TABLE `comap_pt2` (
  `comap_pt2_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `1a` int(1) NOT NULL,
  `1b` int(1) NOT NULL,
  `1c` int(1) NOT NULL,
  `1d` int(1) NOT NULL,
  `1e` int(1) NOT NULL,
  `1f` int(1) NOT NULL,
  `2a` int(1) NOT NULL,
  `2b` int(1) NOT NULL,
  `2c` int(1) NOT NULL,
  `2d` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comap_pt2`
--

INSERT INTO `comap_pt2` (`comap_pt2_id`, `sub_id`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `2a`, `2b`, `2c`, `2d`) VALUES
(8, 16, 4, 5, 6, 4, 5, 6, 4, 5, 6, 4);

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
  `co1` varchar(2) NOT NULL,
  `co2` varchar(2) NOT NULL,
  `co3` varchar(2) NOT NULL,
  `co4` varchar(2) NOT NULL,
  `co5` varchar(2) NOT NULL,
  `co6` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cos`
--

INSERT INTO `cos` (`cos_id`, `years`, `dept_name`, `sem`, `class_name`, `exam`, `sub_name`, `teacher_id`, `co1`, `co2`, `co3`, `co4`, `co5`, `co6`) VALUES
(95, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'Practical', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(96, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'ESE', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(97, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'PT1', 'MAD', 'VP123IF', '3', '3', '3', '3', '0', '0'),
(98, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'PT2', 'MAD', 'VP123IF', '-', '-', '-', '2', '3', '2'),
(100, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'ESE', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(101, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'PT1', 'MAD', 'VP123IF', '1', '2', '2', '0', '0', '0'),
(102, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'PT2', 'MAD', 'VP123IF', '-', '-', '-', '2', '2', '2'),
(104, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'Practical', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(105, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'ESE', 'MAD', 'VP123IF', '2.', '2.', '2.', '2.', '2.', '2.'),
(106, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'Microproject', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(107, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'Microproject', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(108, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'Microproject', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(109, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'Practical', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(119, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'PT1', 'MAD', 'VP123IF', '3', '3', '3', '3', '-', '-'),
(120, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'PT2', 'MAD', 'VP123IF', '-', '-', '-', '2', '2', '2');

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
(7, 'Sixth', 'Information Technology', 'MAD', 'CO1', 'Interepret features of android operating system'),
(8, 'Sixth', 'Information Technology', 'MAD', 'CO2', 'Configure android environment and development tools'),
(9, 'Sixth', 'Information Technology', 'MAD', 'CO3', 'Develop rich user interface by using layouts and controls'),
(10, 'Sixth', 'Information Technology', 'MAD', 'CO4', 'Use user interface component for android application development'),
(11, 'Sixth', 'Information Technology', 'MAD', 'CO5', 'Create android application using database'),
(12, 'Sixth', 'Information Technology', 'MAD', 'CO6', 'publish android applications'),
(13, 'Sixth', 'Information Technology', 'ETI', 'CO1', 'Interepret IOT Concepts'),
(14, 'Sixth', 'Information Technology', 'ETI', 'CO2', 'Compare module of Digital forensics Environment'),
(15, 'Sixth', 'Information Technology', 'ETI', 'CO3', 'Describe evidence handling'),
(16, 'Sixth', 'Information Technology', 'ETI', 'CO4', 'Describe Ethical Process'),
(17, 'Sixth', 'Information Technology', 'ETI', 'CO5', 'Direct Network Operating System NAd application'),
(18, 'Sixth', 'Information Technology', 'ETI', 'CO6', 'Describe AI, deep Learning and Machine Learning');

-- --------------------------------------------------------

--
-- Table structure for table `course_exit_form`
--

CREATE TABLE `course_exit_form` (
  `coexformid` int(30) NOT NULL,
  `years` varchar(20) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `sub_code` int(10) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `st_id` varchar(20) NOT NULL,
  `totalavg` float NOT NULL,
  `suggestion` varchar(400) NOT NULL,
  `signature` varchar(100) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_exit_form`
--

INSERT INTO `course_exit_form` (`coexformid`, `years`, `dept_name`, `sem`, `sub_code`, `sub_name`, `st_id`, `totalavg`, `suggestion`, `signature`, `time_stamp`) VALUES
(26, '2019-2020', 'Information Technology', 'Sixth', 22617, 'MAD', '17202A0036', 3, 'excellent', 'signatures/5eba01cb764c8.png', '2020-05-12 01:54:19'),
(27, '2019-2020', 'Information Technology', 'Sixth', 22617, 'MAD', '17202A0037', 2.33, 'impressive', 'signatures/5eba01f0dfab3.png', '2020-05-12 01:54:56'),
(28, '2019-2020', 'Information Technology', 'Sixth', 22617, 'MAD', '17202A0038', 2, '', 'signatures/5eba0211bbd71.png', '2020-05-12 01:55:29'),
(29, '2019-2020', 'Information Technology', 'Sixth', 22617, 'MAD', '17202A0039', 3, '', 'signatures/5eba022f5b9a6.png', '2020-05-12 01:55:59'),
(30, '2019-2020', 'Information Technology', 'Sixth', 22617, 'MAD', '17202A0040', 3, '', 'signatures/5eba02718e56d.png', '2020-05-12 01:57:05'),
(31, '2019-2020', 'Information Technology', 'Sixth', 22617, 'MAD', '17202A0042', 3, 'very good teaching', 'signatures/5eba0296cf3d2.png', '2020-05-12 01:57:42');

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
-- Table structure for table `direct_attain_pos_psos`
--

CREATE TABLE `direct_attain_pos_psos` (
  `direct_attain_id` int(20) NOT NULL,
  `sub_id` int(20) NOT NULL,
  `PO1` varchar(4) NOT NULL,
  `PO2` varchar(4) NOT NULL,
  `PO3` varchar(4) NOT NULL,
  `PO4` varchar(4) NOT NULL,
  `PO5` varchar(4) NOT NULL,
  `PO6` varchar(4) NOT NULL,
  `PO7` varchar(4) NOT NULL,
  `PO8` varchar(4) NOT NULL,
  `PO9` varchar(4) NOT NULL,
  `PO10` varchar(4) NOT NULL,
  `PSO1` varchar(4) NOT NULL,
  `PSO2` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `direct_attain_pos_psos`
--

INSERT INTO `direct_attain_pos_psos` (`direct_attain_id`, `sub_id`, `PO1`, `PO2`, `PO3`, `PO4`, `PO5`, `PO6`, `PO7`, `PO8`, `PO9`, `PO10`, `PSO1`, `PSO2`) VALUES
(3, 16, '1.41', '1.59', '1.86', '1.50', '1.33', '2.12', '1.50', '1.24', '1.33', '1.77', '1.77', '1.77');

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
  `esetheory` varchar(3) NOT NULL,
  `esepractical` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ese`
--

INSERT INTO `ese` (`ese_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `enrollment`, `st_id`, `st_name`, `esetheory`, `esepractical`) VALUES
(121, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680223, '17202A0036', 'YELURKAR SUSHANT ERAPPA', '68', '25'),
(122, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680224, '17202A0037', 'DALVI LAVESH BHARAT', '55', '24'),
(123, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680225, '17202A0038', 'SAMREEN ABDULLA KAZI', '61', '23'),
(124, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680226, '17202A0039', 'RAJPUT PREM SURESH', '45', '20'),
(125, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680227, '17202A0040', 'SATPUTE BHAVESH NANA', '62', '25'),
(126, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680229, '17202A0042', 'JENA AJIT ANIRUDHA', '70', '25'),
(127, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680230, '17202A0043', 'BHANDARI PRAVEEN RAJU', '55', '24'),
(128, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680232, '17202A0045', 'SINGH KHUSHI RAJESH', '61', '25'),
(129, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680233, '17202A0046', 'PASI ROSHAN RAMDEEN', '45', '21'),
(130, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680234, '17202A0048', 'SHAIKH MARZIYA MUSHTAQUE', '63', '25'),
(131, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1305680330, '13202B0013', 'LAD SOHAM SATYAWAN', '66', '25'),
(132, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1605680328, '16202B0055', 'RANE ATHARVA CHANDRASHEKHAR', '54', '25'),
(133, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680250, '17202B0001', 'MEHER CHIRAG NARENDRA', '64', '23'),
(134, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680251, '17202B0002', 'DEVALKAR OMKAR DEEPAK', '51', '25'),
(135, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680252, '17202B0003', 'GHEVADE ROSHAN MARUTI', '45', '23'),
(136, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680253, '17202B0004', 'DEVAR SIDDARTH GANESH', '25', '23'),
(137, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680254, '17202B0005', 'KARANIA PRINCE PARESH', '66', '25'),
(138, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680255, '17202B0006', 'SHARMA LAKSHYA RAJESH', '61', '23'),
(139, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680256, '17202B0007', 'MAHADIK SAKSHI NARESH', '61', '25'),
(140, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680257, '17202B0008', 'SHAIKH ABDUL SAALIM ABDUL RAHI', '67', '25'),
(141, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900003, '17202C0002', 'MULANI MOHAMMED ZAIN IQBAL', '66', '25'),
(142, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900004, '17202C0003', 'JADHAV SHREYAS SANTOSH', '65', '24'),
(143, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900005, '17202C0004', 'NAIK PRATIK SAMEER', '45', '21'),
(144, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900007, '17202C0006', 'KHAN FAHMIDA SHAHIDALI', '35', '25'),
(145, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900008, '17202C0007', 'SHAIKH HASIB MOHAMAD HANIF', '20', '20'),
(146, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900009, '17202C0008', 'MOHANTY TANISH NIRANJAN', '66', '24'),
(147, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900010, '17202C0009', 'SHAIKH RAHIL SAMIM', '67', '25'),
(148, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900012, '17202C0011', 'KHUMAN NITESH PRAVIN', '19', '14'),
(149, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900014, '17202C0013', 'MANJREKAR SRITIKA NITIN', '56', '23'),
(150, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900015, '17202C0014', 'PAWAR ANIKET SUDHAKAR', '65', '25');

-- --------------------------------------------------------

--
-- Table structure for table `final_attainment`
--

CREATE TABLE `final_attainment` (
  `final_attain_id` int(20) NOT NULL,
  `assign_id` int(20) NOT NULL,
  `total_attain` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_attainment`
--

INSERT INTO `final_attainment` (`final_attain_id`, `assign_id`, `total_attain`) VALUES
(4, 10, 2.88),
(5, 15, 2.86),
(6, 17, 2.21);

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hod_id` varchar(20) NOT NULL,
  `hod_name` varchar(30) NOT NULL,
  `hod_password` varchar(100) NOT NULL,
  `hod_phone` bigint(10) NOT NULL,
  `hod_email` varchar(50) NOT NULL,
  `dept_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hod_id`, `hod_name`, `hod_password`, `hod_phone`, `hod_email`, `dept_name`) VALUES
('HOD123IF', 'Yogita Mam', '46ff90e8e3c3c1cb6cae3a539082ffc9', 9326590372, 'yogita@gmail.com', 'Information Technology');

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
(125, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680223', '17202A0036', 'YELURKAR SUSHANT ERAPPA', 25, 25, 25, 24, 24, 23, 25, 24, 25, 24, 24, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(126, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680224', '17202A0037', 'DALVI LAVESH BHARAT', 25, 16, 16, 16, 16, 16, 18, 19, 20, 20, 24, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 11),
(127, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680225', '17202A0038', 'SAMREEN ABDULLA KAZI', 25, 25, 25, 25, 21, 23, 22, 25, 25, 24, 23, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 11),
(128, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680226', '17202A0039', 'RAJPUT PREM SURESH', 25, 22, 22, 22, 22, 22, 22, 22, 23, 21, 22, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 11),
(129, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680227', '17202A0040', 'SATPUTE BHAVESH NANA', 25, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(130, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680229', '17202A0042', 'JENA AJIT ANIRUDHA', 25, 24, 25, 23, 21, 24, 25, 23, 24, 25, 25, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 11),
(131, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680230', '17202A0043', 'BHANDARI PRAVEEN RAJU', 25, 15, 15, 15, 15, 12, 13, 16, 16, 14, 18, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 11),
(132, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680232', '17202A0045', 'SINGH KHUSHI RAJESH', 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 11),
(133, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680233', '17202A0046', 'PASI ROSHAN RAMDEEN', 25, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 11),
(134, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680234', '17202A0048', 'SHAIKH MARZIYA MUSHTAQUE', 25, 23, 23, 23, 23, 23, 21, 22, 23, 23, 25, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 11),
(135, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', '1710900003', '17202C0002', 'MULANI MOHAMMED ZAIN IQBAL', 25, 24, 24, 21, 21, 21, 21, 23, 21, 25, 23, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 11),
(136, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', '1710900004', '17202C0003', 'JADHAV SHREYAS SANTOSH', 25, 21, 23, 24, 21, 21, 21, 22, 22, 15, 21, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 11),
(137, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', '1710900005', '17202C0004', 'NAIK PRATIK SAMEER', 25, 21, 21, 21, 21, 21, 21, 22, 23, 23, 23, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 11),
(138, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', '1710900007', '17202C0006', 'KHAN FAHMIDA SHAHIDALI', 25, 16, 16, 16, 16, 16, 16, 15, 14, 18, 19, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 11),
(139, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', '1710900008', '17202C0007', 'SHAIKH HASIB MOHAMAD HANIF', 25, 23, 23, 23, 23, 21, 25, 23, 25, 25, 25, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 11),
(140, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', '1710900009', '17202C0008', 'MOHANTY TANISH NIRANJAN', 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 11),
(141, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', '1710900010', '17202C0009', 'SHAIKH RAHIL SAMIM', 25, 24, 25, 24, 24, 25, 24, 25, 24, 25, 24, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(142, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', '1710900012', '17202C0011', 'KHUMAN NITESH PRAVIN', 25, 23, 23, 23, 23, 25, 24, 25, 24, 25, 24, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(143, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', '1710900014', '17202C0013', 'MANJREKAR SRITIKA NITIN', 25, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 11),
(144, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', '1710900015', '17202C0014', 'PAWAR ANIKET SUDHAKAR', 25, 25, 25, 25, 25, 25, 25, 25, 24, 21, 21, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 11),
(145, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', '1305680330', '13202B0013', 'LAD SOHAM SATYAWAN', 25, 22, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(146, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', '1605680328', '16202B0055', 'RANE ATHARVA CHANDRASHEKHAR', 25, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 11),
(147, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', '1705680250', '17202B0001', 'MEHER CHIRAG NARENDRA', 25, 21, 22, 23, 23, 23, 23, 23, 23, 23, 23, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 11),
(148, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', '1705680251', '17202B0002', 'DEVALKAR OMKAR DEEPAK', 25, 22, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(149, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', '1705680252', '17202B0003', 'GHEVADE ROSHAN MARUTI', 25, 21, 21, 21, 21, 21, 21, 21, 23, 23, 23, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 11),
(150, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', '1705680253', '17202B0004', 'DEVAR SIDDARTH GANESH', 25, 20, 20, 20, 20, 20, 20, 20, 21, 21, 23, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 11),
(151, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', '1705680254', '17202B0005', 'KARANIA PRINCE PARESH', 25, 19, 15, 20, 20, 20, 20, 21, 22, 23, 22, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 11),
(152, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', '1705680255', '17202B0006', 'SHARMA LAKSHYA RAJESH', 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 11),
(153, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', '1705680256', '17202B0007', 'MAHADIK SAKSHI NARESH', 25, 25, 25, 25, 25, 25, 24, 24, 23, 22, 23, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(154, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', '1705680257', '17202B0008', 'SHAIKH ABDUL SAALIM ABDUL RAHI', 25, 21, 21, 21, 21, 25, 23, 23, 25, 24, 22, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 11);

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
  `marks` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `microproject`
--

INSERT INTO `microproject` (`micro_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `enrollment`, `st_id`, `st_name`, `marks`) VALUES
(141, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680223, '17202A0036', 'YELURKAR SUSHANT ERAPPA', '10'),
(142, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680224, '17202A0037', 'DALVI LAVESH BHARAT', '10'),
(143, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680225, '17202A0038', 'SAMREEN ABDULLA KAZI', '10'),
(144, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680226, '17202A0039', 'RAJPUT PREM SURESH', '10'),
(145, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680227, '17202A0040', 'SATPUTE BHAVESH NANA', '10'),
(146, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680229, '17202A0042', 'JENA AJIT ANIRUDHA', '10'),
(147, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680230, '17202A0043', 'BHANDARI PRAVEEN RAJU', '10'),
(148, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680232, '17202A0045', 'SINGH KHUSHI RAJESH', '10'),
(149, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680233, '17202A0046', 'PASI ROSHAN RAMDEEN', '10'),
(150, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680234, '17202A0048', 'SHAIKH MARZIYA MUSHTAQUE', '10'),
(151, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1305680330, '13202B0013', 'LAD SOHAM SATYAWAN', '10'),
(152, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1605680328, '16202B0055', 'RANE ATHARVA CHANDRASHEKHAR', '10'),
(153, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680250, '17202B0001', 'MEHER CHIRAG NARENDRA', '10'),
(154, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680251, '17202B0002', 'DEVALKAR OMKAR DEEPAK', '10'),
(155, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680252, '17202B0003', 'GHEVADE ROSHAN MARUTI', '10'),
(156, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680253, '17202B0004', 'DEVAR SIDDARTH GANESH', '10'),
(157, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680254, '17202B0005', 'KARANIA PRINCE PARESH', '10'),
(158, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680255, '17202B0006', 'SHARMA LAKSHYA RAJESH', '10'),
(159, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680256, '17202B0007', 'MAHADIK SAKSHI NARESH', '10'),
(160, '2019-2020', 'IF6IB', 'MAD', 'VP123IF', 1705680257, '17202B0008', 'SHAIKH ABDUL SAALIM ABDUL RAHI', '10'),
(161, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900003, '17202C0002', 'MULANI MOHAMMED ZAIN IQBAL', '10'),
(162, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900004, '17202C0003', 'JADHAV SHREYAS SANTOSH', '10'),
(163, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900005, '17202C0004', 'NAIK PRATIK SAMEER', '10'),
(164, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900007, '17202C0006', 'KHAN FAHMIDA SHAHIDALI', '10'),
(165, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900008, '17202C0007', 'SHAIKH HASIB MOHAMAD HANIF', '10'),
(166, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900009, '17202C0008', 'MOHANTY TANISH NIRANJAN', '10'),
(167, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900010, '17202C0009', 'SHAIKH RAHIL SAMIM', '10'),
(168, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900012, '17202C0011', 'KHUMAN NITESH PRAVIN', '10'),
(169, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900014, '17202C0013', 'MANJREKAR SRITIKA NITIN', '10'),
(170, '2019-2020', 'IF6IC', 'MAD', 'VP123IF', 1710900015, '17202C0014', 'PAWAR ANIKET SUDHAKAR', '10');

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
-- Table structure for table `pos_mapavg`
--

CREATE TABLE `pos_mapavg` (
  `pos_mapavgid` int(10) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `sub_code` int(10) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `PO1` varchar(3) NOT NULL,
  `PO2` varchar(3) NOT NULL,
  `PO3` varchar(3) NOT NULL,
  `PO4` varchar(3) NOT NULL,
  `PO5` varchar(3) NOT NULL,
  `PO6` varchar(3) NOT NULL,
  `PO7` varchar(3) NOT NULL,
  `PO8` varchar(3) NOT NULL,
  `PO9` varchar(3) NOT NULL,
  `PO10` varchar(3) NOT NULL,
  `PSO1` varchar(3) NOT NULL,
  `PSO2` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos_mapavg`
--

INSERT INTO `pos_mapavg` (`pos_mapavgid`, `dept_name`, `sub_code`, `sub_name`, `PO1`, `PO2`, `PO3`, `PO4`, `PO5`, `PO6`, `PO7`, `PO8`, `PO9`, `PO10`, `PSO1`, `PSO2`) VALUES
(3, 'INFORMATION TECHNOLOGY', 22617, 'MAD', '1.6', '1.8', '2.1', '1.7', '1.5', '2.4', '1.7', '1.4', '1.5', '2.0', '2.0', '2.0');

-- --------------------------------------------------------

--
-- Table structure for table `pos_mapping`
--

CREATE TABLE `pos_mapping` (
  `pos_mapid` int(11) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `cosf_name` varchar(20) NOT NULL,
  `sub_code` int(10) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `PO1` varchar(2) NOT NULL,
  `PO2` varchar(2) NOT NULL,
  `PO3` varchar(2) NOT NULL,
  `PO4` varchar(2) NOT NULL,
  `PO5` varchar(2) NOT NULL,
  `PO6` varchar(2) NOT NULL,
  `PO7` varchar(2) NOT NULL,
  `PO8` varchar(2) NOT NULL,
  `PO9` varchar(2) NOT NULL,
  `PO10` varchar(2) NOT NULL,
  `PSO1` varchar(2) NOT NULL,
  `PSO2` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos_mapping`
--

INSERT INTO `pos_mapping` (`pos_mapid`, `dept_name`, `sem`, `cosf_name`, `sub_code`, `sub_name`, `PO1`, `PO2`, `PO3`, `PO4`, `PO5`, `PO6`, `PO7`, `PO8`, `PO9`, `PO10`, `PSO1`, `PSO2`) VALUES
(115, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO1', 22617, 'MAD', '1', '2', '3', '', '1', '3', '', '2', '1', '2', '2', '2'),
(116, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO2', 22617, 'MAD', '1', '2', '3', '1', '2', '3', '', '1', '3', '2', '1', '2'),
(117, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO3', 22617, 'MAD', '3', '1', '2', '', '1', '2', '2', '1', '', '2', '2', ''),
(118, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO4', 22617, 'MAD', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2'),
(119, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO5', 22617, 'MAD', '1', '2', '1', '2', '1', '3', '1', '2', '1', '2', '3', '3'),
(120, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO6', 22617, 'MAD', '3', '3', '3', '3', '3', '', '3', '', '', '3', '', '1');

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
  `1a` varchar(1) NOT NULL,
  `1b` varchar(1) NOT NULL,
  `1c` varchar(1) NOT NULL,
  `1d` varchar(1) NOT NULL,
  `1e` varchar(1) NOT NULL,
  `1f` varchar(1) NOT NULL,
  `2a` varchar(1) NOT NULL,
  `2b` varchar(1) NOT NULL,
  `2c` varchar(1) NOT NULL,
  `2d` varchar(1) NOT NULL,
  `total` int(5) NOT NULL,
  `absent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pt1`
--

INSERT INTO `pt1` (`pt1_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `st_id`, `st_name`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `2a`, `2b`, `2c`, `2d`, `total`, `absent`) VALUES
(653, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '15202A0044', 'HOTA VIKRAM BHAGWAN', '1', '1', '2', '2', '2', '2', '3', '3', '4', '4', 19, 0),
(654, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '16202A0014', 'PATIL SAYLEE SUNIL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(655, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '16202A0063', 'ADSUL ANJALI RAJESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(656, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0001', 'CHOPRA BHARAT RAVI', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(657, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0002', 'GAIKWAD OMKAR KAMLAKAR', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(658, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0003', 'ALLWYN ALEX STEPHEN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(659, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0004', 'BORADE POOJA MADHUKAR', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(660, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0005', 'SHAH SHREYAS PARESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(661, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0006', 'NALAWADE VAISHNAVI YESHWANT', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(662, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0007', 'JAISHIDDHARTH ESSAKI', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(663, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0009', 'DSOUZA LEON DUMING', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(664, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0010', 'SHAH TANISHK KRISHNAKANT', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(665, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0012', 'SHELAR DIVYESH PRAKASH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(666, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0013', 'ADITYA PARSHURAM KHARATMOL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(667, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0014', 'GOVEKAR NISHANT JAYESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(668, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0015', 'UDAIYAR BALAKRISHNAN RAJU PERU', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(669, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0017', 'IDRISI SHABISHTA MD MOKIM', '2', '2', '2', '2', '2', '2', '4', '4', '4', '2', 20, 0),
(670, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0018', 'SATELKAR YASH SUDHIR', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(671, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0019', 'NAIDU MANOHARAN PRABHAKARAN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(672, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0020', 'KORGAONKAR CHINMAY SATISH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(673, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0022', 'KAKADE ROHIT SUBHASH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(674, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0023', 'DIGHE OMKAR VIJAY', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(675, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0024', 'KAMBLE AYUSH ANIL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(676, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0026', 'KHAN MOHAMMAD MOHANNAD MOHAMMA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(677, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0027', 'CHAVAN SAMRUDDHI LOBHASING', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(678, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0028', 'GUPTA SHEETAL ASHOK', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(679, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0029', 'KUMTHEKAR NIKITA RAJARAM', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(680, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0030', 'MANE MAYURI MANGESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(681, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0031', 'DAKHWAY AMAAN IRFAN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(682, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0032', 'SHINDE JATIN MANOJ', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(683, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0033', 'BAGWE SANKALPA SUNIL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(684, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0036', 'YELURKAR SUSHANT ERAPPA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(685, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0037', 'DALVI LAVESH BHARAT', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(686, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0038', 'SAMREEN ABDULLA KAZI', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(687, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0039', 'RAJPUT PREM SURESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(688, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0040', 'SATPUTE BHAVESH NANA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(689, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0042', 'JENA AJIT ANIRUDHA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(690, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0043', 'BHANDARI PRAVEEN RAJU', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(691, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0045', 'SINGH KHUSHI RAJESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(692, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0046', 'PASI ROSHAN RAMDEEN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(693, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0048', 'SHAIKH MARZIYA MUSHTAQUE', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(694, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0050', 'LAD TEJAS VIJAY', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(695, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0051', 'SHAIKH ALI ASGAR JUNAID', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(696, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0053', 'SINGH KOMAL LAXMAN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(697, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0054', 'GUPTA REENA VINOD', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(698, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0055', 'PAWAR SANSKRUTI RAJENDRA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(699, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0056', 'ANDHE KOMAL ASHOK', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(700, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0060', 'KAPSE APURVA BHARAT', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(701, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0061', 'SAHU SHIVSHANKAR UDAYNATH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(702, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0062', 'KOLGE POORVI SUNIL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(703, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2001', 'KATKE SHUBHAM SURESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(704, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2002', 'JASHRAJ KASHYAP PATEL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(705, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2003', 'SAMEER VIJAY UGALE', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(706, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2004', 'OWHAL NIMISH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(707, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2005', 'YASA MAHESH RAMESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(708, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2006', 'GUNTAKA GANESH REDDY GOPAL CHI', '2', '2', '2', '2', '2', '2', '4', '4', '4', '2', 20, 0);

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
  `1a` varchar(1) NOT NULL,
  `1b` varchar(1) NOT NULL,
  `1c` varchar(1) NOT NULL,
  `1d` varchar(1) NOT NULL,
  `1e` varchar(1) NOT NULL,
  `1f` varchar(1) NOT NULL,
  `2a` varchar(1) NOT NULL,
  `2b` varchar(1) NOT NULL,
  `2c` varchar(1) NOT NULL,
  `2d` varchar(1) NOT NULL,
  `total` int(5) NOT NULL,
  `absent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pt2`
--

INSERT INTO `pt2` (`pt2_id`, `years`, `class_name`, `sub_name`, `teacher_id`, `st_id`, `st_name`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `2a`, `2b`, `2c`, `2d`, `total`, `absent`) VALUES
(617, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '15202A0044', 'HOTA VIKRAM BHAGWAN', '2', '2', '2', '2', '2', '2', '4', '4', '4', '4', 20, 0),
(618, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '16202A0014', 'PATIL SAYLEE SUNIL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(619, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '16202A0063', 'ADSUL ANJALI RAJESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(620, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0001', 'CHOPRA BHARAT RAVI', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(621, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0002', 'GAIKWAD OMKAR KAMLAKAR', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(622, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0003', 'ALLWYN ALEX STEPHEN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(623, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0004', 'BORADE POOJA MADHUKAR', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(624, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0005', 'SHAH SHREYAS PARESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(625, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0006', 'NALAWADE VAISHNAVI YESHWANT', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(626, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0007', 'JAISHIDDHARTH ESSAKI', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(627, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0009', 'DSOUZA LEON DUMING', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(628, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0010', 'SHAH TANISHK KRISHNAKANT', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(629, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0012', 'SHELAR DIVYESH PRAKASH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(630, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0013', 'ADITYA PARSHURAM KHARATMOL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(631, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0014', 'GOVEKAR NISHANT JAYESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(632, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0015', 'UDAIYAR BALAKRISHNAN RAJU PERU', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(633, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0017', 'IDRISI SHABISHTA MD MOKIM', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(634, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0018', 'SATELKAR YASH SUDHIR', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(635, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0019', 'NAIDU MANOHARAN PRABHAKARAN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(636, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0020', 'KORGAONKAR CHINMAY SATISH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(637, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0022', 'KAKADE ROHIT SUBHASH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(638, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0023', 'DIGHE OMKAR VIJAY', '2', '2', '2', '2', '2', '2', '4', '4', '4', '4', 20, 0),
(639, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0024', 'KAMBLE AYUSH ANIL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(640, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0026', 'KHAN MOHAMMAD MOHANNAD MOHAMMA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(641, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0027', 'CHAVAN SAMRUDDHI LOBHASING', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(642, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0028', 'GUPTA SHEETAL ASHOK', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(643, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0029', 'KUMTHEKAR NIKITA RAJARAM', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(644, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0030', 'MANE MAYURI MANGESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(645, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0031', 'DAKHWAY AMAAN IRFAN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(646, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0032', 'SHINDE JATIN MANOJ', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(647, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0033', 'BAGWE SANKALPA SUNIL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(648, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0036', 'YELURKAR SUSHANT ERAPPA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(649, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0037', 'DALVI LAVESH BHARAT', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(650, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0038', 'SAMREEN ABDULLA KAZI', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(651, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0039', 'RAJPUT PREM SURESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(652, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0040', 'SATPUTE BHAVESH NANA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(653, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0042', 'JENA AJIT ANIRUDHA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(654, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0043', 'BHANDARI PRAVEEN RAJU', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(655, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0045', 'SINGH KHUSHI RAJESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(656, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0046', 'PASI ROSHAN RAMDEEN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(657, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0048', 'SHAIKH MARZIYA MUSHTAQUE', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(658, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0050', 'LAD TEJAS VIJAY', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(659, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0051', 'SHAIKH ALI ASGAR JUNAID', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(660, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0053', 'SINGH KOMAL LAXMAN', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(661, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0054', 'GUPTA REENA VINOD', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(662, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0055', 'PAWAR SANSKRUTI RAJENDRA', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(663, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0056', 'ANDHE KOMAL ASHOK', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(664, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0060', 'KAPSE APURVA BHARAT', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(665, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0061', 'SAHU SHIVSHANKAR UDAYNATH', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', 10, 0),
(666, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0062', 'KOLGE POORVI SUNIL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(667, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2001', 'KATKE SHUBHAM SURESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(668, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2002', 'JASHRAJ KASHYAP PATEL', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(669, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2003', 'SAMEER VIJAY UGALE', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(670, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2004', 'OWHAL NIMISH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(671, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2005', 'YASA MAHESH RAMESH', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(672, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '18202A2006', 'GUNTAKA GANESH REDDY GOPAL CHI', '2', '2', '2', '2', '2', '2', '4', '4', '4', '4', 20, 0);

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
('123456', 'admin', '46ff90e8e3c3c1cb6cae3a539082ffc9', 9789789789, 'admin@gmail.com');

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
('2019-2020', 1305680330, '13202B0013', 'LAD SOHAM SATYAWAN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'ajitjena123456@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1505680263, '15202A0044', 'HOTA VIKRAM BHAGWAN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1605680225, '16202A0014', 'PATIL SAYLEE SUNIL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1605680273, '16202A0063', 'ADSUL ANJALI RAJESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1605680328, '16202B0055', 'RANE ATHARVA CHANDRASHEKHAR', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680189, '17202A0001', 'CHOPRA BHARAT RAVI', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680190, '17202A0002', 'GAIKWAD OMKAR KAMLAKAR', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680191, '17202A0003', 'ALLWYN ALEX STEPHEN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680192, '17202A0004', 'BORADE POOJA MADHUKAR', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680193, '17202A0005', 'SHAH SHREYAS PARESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680194, '17202A0006', 'NALAWADE VAISHNAVI YESHWANT', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680195, '17202A0007', 'JAISHIDDHARTH ESSAKI', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680197, '17202A0009', 'DSOUZA LEON DUMING', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680198, '17202A0010', 'SHAH TANISHK KRISHNAKANT', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680200, '17202A0012', 'SHELAR DIVYESH PRAKASH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680201, '17202A0013', 'ADITYA PARSHURAM KHARATMOL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680202, '17202A0014', 'GOVEKAR NISHANT JAYESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680203, '17202A0015', 'UDAIYAR BALAKRISHNAN RAJU PERU', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680205, '17202A0017', 'IDRISI SHABISHTA MD MOKIM', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680206, '17202A0018', 'SATELKAR YASH SUDHIR', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680207, '17202A0019', 'NAIDU MANOHARAN PRABHAKARAN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680208, '17202A0020', 'KORGAONKAR CHINMAY SATISH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680210, '17202A0022', 'KAKADE ROHIT SUBHASH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680211, '17202A0023', 'DIGHE OMKAR VIJAY', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680212, '17202A0024', 'KAMBLE AYUSH ANIL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680214, '17202A0026', 'KHAN MOHAMMAD MOHANNAD MOHAMMA', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680215, '17202A0027', 'CHAVAN SAMRUDDHI LOBHASING', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680216, '17202A0028', 'GUPTA SHEETAL ASHOK', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680217, '17202A0029', 'KUMTHEKAR NIKITA RAJARAM', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680218, '17202A0030', 'MANE MAYURI MANGESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680219, '17202A0031', 'DAKHWAY AMAAN IRFAN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680220, '17202A0032', 'SHINDE JATIN MANOJ', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680221, '17202A0033', 'BAGWE SANKALPA SUNIL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680223, '17202A0036', 'YELURKAR SUSHANT ERAPPA', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'yelurkarsushant@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680224, '17202A0037', 'DALVI LAVESH BHARAT', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680225, '17202A0038', 'SAMREEN ABDULLA KAZI', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680226, '17202A0039', 'RAJPUT PREM SURESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680227, '17202A0040', 'SATPUTE BHAVESH NANA', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680229, '17202A0042', 'JENA AJIT ANIRUDHA', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'ajitjena123456@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680230, '17202A0043', 'BHANDARI PRAVEEN RAJU', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680232, '17202A0045', 'SINGH KHUSHI RAJESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680233, '17202A0046', 'PASI ROSHAN RAMDEEN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680234, '17202A0048', 'SHAIKH MARZIYA MUSHTAQUE', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680235, '17202A0050', 'LAD TEJAS VIJAY', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680236, '17202A0051', 'SHAIKH ALI ASGAR JUNAID', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680238, '17202A0053', 'SINGH KOMAL LAXMAN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680239, '17202A0054', 'GUPTA REENA VINOD', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680240, '17202A0055', 'PAWAR SANSKRUTI RAJENDRA', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680241, '17202A0056', 'ANDHE KOMAL ASHOK', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680245, '17202A0060', 'KAPSE APURVA BHARAT', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680246, '17202A0061', 'SAHU SHIVSHANKAR UDAYNATH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680247, '17202A0062', 'KOLGE POORVI SUNIL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1705680250, '17202B0001', 'MEHER CHIRAG NARENDRA', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680251, '17202B0002', 'DEVALKAR OMKAR DEEPAK', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680252, '17202B0003', 'GHEVADE ROSHAN MARUTI', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680253, '17202B0004', 'DEVAR SIDDARTH GANESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680254, '17202B0005', 'KARANIA PRINCE PARESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680255, '17202B0006', 'SHARMA LAKSHYA RAJESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680256, '17202B0007', 'MAHADIK SAKSHI NARESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680257, '17202B0008', 'SHAIKH ABDUL SAALIM ABDUL RAHI', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680258, '17202B0009', 'MOHOL RUSHIKESH RAMDAS', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680259, '17202B0010', 'SAMUEL SELVAKUMAR', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680261, '17202B0012', 'UBHE YASH CHANDRAKANT', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680262, '17202B0013', 'ANIKHINDI SIDDHESH SUNIL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680263, '17202B0014', 'MANEKIA ALFINA AFJAL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680264, '17202B0015', 'ANSARI IBAN ISHTYAQ', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680265, '17202B0016', 'KHAN HASSAAN MOHD MUSLIM', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680266, '17202B0017', 'KOTHAKONDA SHREYAS PRAKASH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680268, '17202B0019', 'ZARDI ZEESHAN MOHD NADEEM', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'ajitjena123456@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680270, '17202B0021', 'SHUKLA SAKET UPENDRA', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680272, '17202B0023', 'BOMBLE SRUSHTI MUKUND', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680273, '17202B0024', 'SAMPAT JAINIL NILESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680274, '17202B0025', 'KHAN HAMMAD SARFARAZ AHMED', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680276, '17202B0027', 'GUPTA MAHESH MANOJKUMAR', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680278, '17202B0029', 'SHIRODKAR DEVANG SATISH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1705680280, '17202B0031', 'MOTIWALA AAMIR JAVED', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1710900003, '17202C0002', 'MULANI MOHAMMED ZAIN IQBAL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'yelurkarsushant@gmail.com', 'IF6IC', 'Information Technology'),
('2019-2020', 1710900004, '17202C0003', 'JADHAV SHREYAS SANTOSH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '123456@gmail.com', 'IF6IC', 'Information Technology'),
('2019-2020', 1710900005, '17202C0004', 'NAIK PRATIK SAMEER', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '123456@gmail.com', 'IF6IC', 'Information Technology'),
('2019-2020', 1710900007, '17202C0006', 'KHAN FAHMIDA SHAHIDALI', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '123456@gmail.com', 'IF6IC', 'Information Technology'),
('2019-2020', 1710900008, '17202C0007', 'SHAIKH HASIB MOHAMAD HANIF', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '123456@gmail.com', 'IF6IC', 'Information Technology'),
('2019-2020', 1710900009, '17202C0008', 'MOHANTY TANISH NIRANJAN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '123456@gmail.com', 'IF6IC', 'Information Technology'),
('2019-2020', 1710900010, '17202C0009', 'SHAIKH RAHIL SAMIM', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '123456@gmail.com', 'IF6IC', 'Information Technology'),
('2019-2020', 1710900012, '17202C0011', 'KHUMAN NITESH PRAVIN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '123456@gmail.com', 'IF6IC', 'Information Technology'),
('2019-2020', 1710900014, '17202C0013', 'MANJREKAR SRITIKA NITIN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '123456@gmail.com', 'IF6IC', 'Information Technology'),
('2019-2020', 1710900015, '17202C0014', 'PAWAR ANIKET SUDHAKAR', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '123456@gmail.com', 'IF6IC', 'Information Technology'),
('2019-2020', 1700030035, '18202A2001', 'KATKE SHUBHAM SURESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1700030038, '18202A2002', 'JASHRAJ KASHYAP PATEL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1700030039, '18202A2003', 'SAMEER VIJAY UGALE', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1700030036, '18202A2004', 'OWHAL NIMISH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1800030002, '18202A2005', 'YASA MAHESH RAMESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1800030005, '18202A2006', 'GUNTAKA GANESH REDDY GOPAL CHI', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1805680328, '18202B1002', 'GHADGE KAUSTUBH RAJENDRA', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680329, '18202B1003', 'JADHAV UDAY SUNIL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680330, '18202B1004', 'KHAN RIYAZ ALAM MD ALAM', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680331, '18202B1005', 'ARSHEEN ABDULLA KAZI', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680333, '18202B1007', 'CHAVAN RUTUJA SANTOSH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680334, '18202B1008', 'MITAPELLI VAISHNAVI RAVINDRA', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680335, '18202B1009', 'PARATE KRUPA ISHWAR', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680336, '18202B1010', 'DUDHAL HIMAJA GHANASHYAM', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680338, '18202B1012', 'BHOPALKAR SAMRUDDHI DEEPAK', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680339, '18202B1013', 'KALIDOSS SORIMUTHU', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680340, '18202B1014', 'POKHARKAR PRANAY KAILAS', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680341, '18202B1015', 'NABAR HARDIK SANJEEV', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680342, '18202B1016', 'SINGH SAUMITRA SANJAY', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680343, '18202B1017', 'NAIDU SURYA SRINIVASAN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680348, '18202B1022', 'KUMBHAR BASAVARAJ DARYAPPA', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology'),
('2019-2020', 1805680349, '18202B1023', 'NAIKNAVARE YASH VASANT', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, '1@gmail.com', 'IF6IB', 'Information Technology');

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
  `updationdate` varchar(30) NOT NULL,
  `pos_filled` tinyint(1) NOT NULL,
  `feed_form` tinyint(1) NOT NULL,
  `course_exit_form` tinyint(1) NOT NULL,
  `co_pt1` tinyint(1) NOT NULL,
  `co_pt2` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_code`, `sub_name`, `years`, `dept_name`, `sem`, `specialize`, `practical`, `theory`, `creationdate`, `updationdate`, `pos_filled`, `feed_form`, `course_exit_form`, `co_pt1`, `co_pt2`) VALUES
(15, 22509, 'MGT', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 0, 1, '2020-05-12 01:17:26', '', 0, 0, 0, 0, 0),
(16, 22617, 'MAD', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 1, 1, '2020-05-12 01:17:26', '', 1, 0, 0, 1, 1),
(17, 22618, 'ETI', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 0, 1, '2020-05-12 01:17:26', '', 0, 0, 0, 0, 0),
(18, 22619, 'WBP', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 1, 1, '2020-05-12 01:17:26', '', 0, 0, 0, 0, 0),
(19, 22060, 'WMN', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 1, 1, '2020-05-12 01:17:26', '', 0, 0, 0, 0, 0),
(20, 22509, 'MGT', '2019-2020', 'COMPUTER ENGINEERING', 'Fifth', '', 0, 1, '2021-01-28 15:35:13', '', 0, 0, 0, 0, 0),
(21, 22617, 'MAD', '2019-2020', 'COMPUTER ENGINEERING', 'Fifth', '', 0, 0, '2021-01-28 15:35:13', '', 1, 0, 0, 0, 0);

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
('VP123IF', 'Archana Mam', 9326590372, 'ajitjena123456@gmail.com', '46ff90e8e3c3c1cb6cae3a539082ffc9'),
('VP1IF', 'Shama Mam', 9326590372, 'shama@gmail.com', '46ff90e8e3c3c1cb6cae3a539082ffc9'),
('VP2IF', 'Yogita Mam', 9326590372, 'yogita@gmail.com', '46ff90e8e3c3c1cb6cae3a539082ffc9'),
('VP3IF', 'Kalyani Mam', 9326590372, 'kalyani@gmail.com', '46ff90e8e3c3c1cb6cae3a539082ffc9');

-- --------------------------------------------------------

--
-- Table structure for table `th_pa`
--

CREATE TABLE `th_pa` (
  `th_pa_id` int(11) NOT NULL,
  `roll_no` text NOT NULL,
  `ciaan_id` text NOT NULL,
  `div_id` text NOT NULL,
  `course_id` text NOT NULL,
  `pt1Q1a` text NOT NULL,
  `pt1Q1b` text NOT NULL,
  `pt1Q1c` text NOT NULL,
  `pt1Q1d` text NOT NULL,
  `pt1Q1e` text NOT NULL,
  `pt1Q1f` text NOT NULL,
  `pt1Q2a` text NOT NULL,
  `pt1Q2b` text NOT NULL,
  `pt1Q2c` text NOT NULL,
  `pt1Q2d` text NOT NULL,
  `pt1` text NOT NULL,
  `pt2Q1a` text NOT NULL,
  `pt2Q1b` text NOT NULL,
  `pt2Q1c` text NOT NULL,
  `pt2Q1d` text NOT NULL,
  `pt2Q1e` text NOT NULL,
  `pt2Q1f` text NOT NULL,
  `pt2Q2a` text NOT NULL,
  `pt2Q2b` text NOT NULL,
  `pt2Q2c` text NOT NULL,
  `pt2Q2d` text NOT NULL,
  `pt2` text NOT NULL,
  `ptavg` text NOT NULL,
  `mpga` text NOT NULL,
  `moidv` text NOT NULL,
  `obtained` text NOT NULL,
  `verifed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `comap_prac`
--
ALTER TABLE `comap_prac`
  ADD PRIMARY KEY (`comap_prac_id`);

--
-- Indexes for table `comap_pt1`
--
ALTER TABLE `comap_pt1`
  ADD PRIMARY KEY (`comap_pt1_id`);

--
-- Indexes for table `comap_pt2`
--
ALTER TABLE `comap_pt2`
  ADD PRIMARY KEY (`comap_pt2_id`);

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
-- Indexes for table `course_exit_form`
--
ALTER TABLE `course_exit_form`
  ADD PRIMARY KEY (`coexformid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `direct_attain_pos_psos`
--
ALTER TABLE `direct_attain_pos_psos`
  ADD PRIMARY KEY (`direct_attain_id`);

--
-- Indexes for table `ese`
--
ALTER TABLE `ese`
  ADD PRIMARY KEY (`ese_id`);

--
-- Indexes for table `final_attainment`
--
ALTER TABLE `final_attainment`
  ADD PRIMARY KEY (`final_attain_id`);

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
-- Indexes for table `pos_mapavg`
--
ALTER TABLE `pos_mapavg`
  ADD PRIMARY KEY (`pos_mapavgid`),
  ADD UNIQUE KEY `sub_code` (`sub_code`,`sub_name`);

--
-- Indexes for table `pos_mapping`
--
ALTER TABLE `pos_mapping`
  ADD PRIMARY KEY (`pos_mapid`);

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
-- Indexes for table `th_pa`
--
ALTER TABLE `th_pa`
  ADD PRIMARY KEY (`th_pa_id`);

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
  MODIFY `assign_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comap_prac`
--
ALTER TABLE `comap_prac`
  MODIFY `comap_prac_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comap_pt1`
--
ALTER TABLE `comap_pt1`
  MODIFY `comap_pt1_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comap_pt2`
--
ALTER TABLE `comap_pt2`
  MODIFY `comap_pt2_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cos`
--
ALTER TABLE `cos`
  MODIFY `cos_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `cosfull`
--
ALTER TABLE `cosfull`
  MODIFY `cosf_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `course_exit_form`
--
ALTER TABLE `course_exit_form`
  MODIFY `coexformid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `direct_attain_pos_psos`
--
ALTER TABLE `direct_attain_pos_psos`
  MODIFY `direct_attain_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ese`
--
ALTER TABLE `ese`
  MODIFY `ese_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `final_attainment`
--
ALTER TABLE `final_attainment`
  MODIFY `final_attain_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `lab_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `microproject`
--
ALTER TABLE `microproject`
  MODIFY `micro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `posf_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pos_mapavg`
--
ALTER TABLE `pos_mapavg`
  MODIFY `pos_mapavgid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pos_mapping`
--
ALTER TABLE `pos_mapping`
  MODIFY `pos_mapid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `pt1`
--
ALTER TABLE `pt1`
  MODIFY `pt1_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=709;

--
-- AUTO_INCREMENT for table `pt2`
--
ALTER TABLE `pt2`
  MODIFY `pt2_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=673;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `th_pa`
--
ALTER TABLE `th_pa`
  MODIFY `th_pa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
