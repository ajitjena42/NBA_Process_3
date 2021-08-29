-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 10:01 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, '2020-2021', 'Information Technology', 'Sixth', 'IF6IA', 'MAD', 'VP123IF', 0),
(2, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'MGT', 'VP123IF', 0),
(3, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'WBP', 'VP5IF', 0),
(6, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'MAD', 'VP1234IF', 0),
(7, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'MAD', 'VP12345IF', 0),
(8, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'WBP', 'VP123IF', 0);

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
(1, 2, 25, 1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25),
(2, 3, 25, 1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15),
(3, 4, 25, 1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15);

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
(16, 2, 1, 1, 2, 1, 2, 1, 1, 2, 3, 2),
(17, 3, 1, 2, 3, 2, 1, 3, 1, 2, 3, 1),
(18, 4, 1, 2, 3, 1, 1, 2, 3, 1, 1, 2),
(19, 1, 1, 2, 2, 2, 2, 2, 3, 1, 1, 1);

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
(7, 2, 4, 4, 6, 5, 5, 4, 4, 4, 6, 5),
(8, 1, 5, 5, 5, 5, 6, 6, 4, 4, 4, 4),
(9, 4, 4, 5, 5, 5, 6, 4, 5, 5, 4, 4);

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
(50, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'PT1', 'MAD', 'VP123IF', '3', '1', '2', '-', '-', '-'),
(52, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'PT2', 'MAD', 'VP123IF', '-', '-', '-', '2', '3', '2'),
(66, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'PT1', 'MAD', 'VP1234IF', '0', '0', '0', '0', '0', '0'),
(67, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'Practical', 'MAD', 'VP1234IF', '0', '0', '0', '0', '0', '0'),
(68, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'ESE', 'MAD', 'VP1234IF', '0', '0', '0', '0', '0', '0'),
(69, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'PT2', 'MAD', 'VP1234IF', '0', '0', '0', '0', '0', '0'),
(70, '2019-2020', 'Information Technology', 'Sixth', 'IF6IB', 'Microproject', 'MAD', 'VP1234IF', '0', '0', '0', '0', '0', '0'),
(72, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'ESE', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(73, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'Practical', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(75, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'ESE', 'MAD', 'VP12345IF', '2', '2', '2', '2', '2', '2'),
(76, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'Microproject', 'MAD', 'VP123IF', '3', '3', '3', '3', '3', '3'),
(87, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'PT1', 'MAD', 'VP12345IF', '2', '3', '0', '0', '0', '0'),
(88, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'PT2', 'MAD', 'VP12345IF', '0', '0', '0', '1', '3', '1'),
(90, '2019-2020', 'Information Technology', 'Sixth', 'IF6IC', 'Practical', 'MAD', 'VP12345IF', '3', '3', '3', '3', '3', '3'),
(91, '2019-2020', 'Information Technology', 'Sixth', 'IF6IA', 'PT1', 'ETI', 'VP123IF', '3', '2', '0', '0', '0', '0');

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
(11, '2019-2020', 'Information Technology', 'Sixth', 22617, 'MAD', '17202A0017', 2, 'Effhvery good teaching staff', 'signatures/5e4654c7bad08.png', '2020-02-15 05:26:28'),
(15, '2019-2020', 'Information Technology', 'Sixth', 22617, 'MAD', '17202A0042', 2.17, 'good', 'signatures/5e477e3944efe.png', '2020-02-15 05:14:33'),
(22, '2019-2020', 'Information Technology', 'Sixth', 22617, 'MAD', '17202A0010', 2.17, '', 'signatures/5e4a8af663a6f.png', '2020-02-17 12:45:42'),
(23, '2019-2020', 'Information Technology', 'Sixth', 22617, 'MAD', '17202A0036', 3, '', 'signatures/5e58de52c645f.png', '2020-02-28 09:33:06'),
(24, '2019-2020', 'Information Technology', 'Sixth', 22618, 'ETI', '17202A0042', 0, '', 'signatures/5e5cd854e6f63.png', '2020-03-02 09:56:36'),
(25, '2019-2020', 'Information Technology', 'Sixth', 22509, 'MGT', '17202A0042', 0, '', 'signatures/5e67aef4cca30.png', '2020-03-10 15:15:00');

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
(2, 2, '1.62', '2.43', '2.68', '2.27', '2.27', '2.03', '2.43', '-', '2.11', '1.87', '1.30', '2.03');

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
(93, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1579879165, '17202B0001', 'Bharat Chopra', '39', '15'),
(94, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1579579865, '17202B0002', 'Omkar Gaikwad', '40', '12'),
(95, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1575878165, '17202B0003', 'pooja Borade', '37', '23'),
(96, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1575879165, '17202B0004', 'Shreyas Shah', '47', '22'),
(97, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1579875165, '17202B0005', 'Manohran naidu', '21', '19'),
(98, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1705680234, '17202B0042', 'Raju Singh', '29', '17'),
(105, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680202, '17202A0010', 'Tanishk Shah', '50', '25'),
(106, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680203, '17202A0015', 'Balakrishna Udaiyar', '56', '20'),
(107, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680204, '17202A0017', 'Shabista Idrisi', '40', '20'),
(108, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680205, '17202A0022', 'Rohit Kakade', '60', '25'),
(109, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680206, '17202A0023', 'Omkar Dighe', '50', '20'),
(110, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680207, '17202A0028', 'Sheetal Gupta', '59', '25'),
(111, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680208, '17202A0036', 'Sushant Yelurkar', '70', '25'),
(112, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680210, '17202A0040', 'Bhavesh Satpute', '50', '25'),
(113, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680229, '17202A0042', 'Ajit Jena', '70', '25'),
(114, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680232, '17202A0061', 'Shivshankar Sahu', '0', '0'),
(115, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680110, '17202C0001', 'Neha Modhave', '52', '20'),
(116, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680111, '17202C0002', 'hkjakcj ve', '26', '25'),
(117, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680121, '17202C0003', 'hkjakcj ve', '26', '22'),
(118, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680151, '17202C0004', 'hkjakcj ve', '51', '25'),
(119, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680114, '17202C0005', 'hkjackcj ve', '70', '24'),
(120, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680119, '17202C0008', 'hkjakcj ve', '46', '20');

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
(1, 1, 2.80),
(2, 6, 2.50),
(3, 7, 2.00);

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
('HOD123CO', 'Computer Engineering', 'computer', 9465456465, 'computer@gmail.com', 'Computer Engineering'),
('HOD123EJ', 'Electronics Engineering', 'electronic', 9786456132, 'electronic@gmail.com', 'Electronics Engineering'),
('HOD123IF', 'Yogita Jore', '46ff90e8e3c3c1cb6cae3a539082ffc9', 9786456132, 'yogita.khandagale@vpt.edu.in', 'Information Technology');

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
(103, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '1579879165', '17202B0001', 'Bharat Chopra', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11),
(104, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '1579579865', '17202B0002', 'Omkar Gaikwad', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11),
(105, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '1575878165', '17202B0003', 'pooja Borade', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11),
(106, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '1575879165', '17202B0004', 'Shreyas Shah', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11),
(107, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '1579875165', '17202B0005', 'Manohran naidu', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11),
(108, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '1705680234', '17202B0042', 'Raju Singh', 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11),
(109, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680202', '17202A0010', 'Tanishk Shah', 25, 22, 22, 22, 22, 22, 25, 24, 24, 23, 22, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 11),
(110, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680203', '17202A0015', 'Balakrishna Udaiyar', 25, 25, 25, 25, 25, 24, 25, 24, 25, 24, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(111, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680204', '17202A0017', 'Shabista Idrisi', 25, 20, 20, 20, 20, 20, 20, 20, 15, 15, 15, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 11),
(112, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680205', '17202A0022', 'Rohit Kakade', 25, 25, 25, 25, 25, 23, 23, 25, 24, 23, 23, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(113, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680206', '17202A0023', 'Omkar Dighe', 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 11),
(114, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680207', '17202A0028', 'Sheetal Gupta', 25, 25, 23, 25, 24, 25, 21, 25, 22, 23, 24, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 11),
(115, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680208', '17202A0036', 'Sushant Yelurkar', 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25, 11),
(116, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680210', '17202A0040', 'Bhavesh Satpute', 25, 24, 24, 24, 24, 24, 24, 24, 24, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(117, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680229', '17202A0042', 'Ajit Jena', 25, 25, 25, 25, 25, 25, 25, 24, 25, 21, 22, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11),
(118, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '1705680232', '17202A0061', 'Shivshankar Sahu', 25, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11),
(119, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '1705680110', '17202C0001', 'Neha Modhave', 25, 25, 25, 25, 25, 25, 25, 24, 22, 23, 21, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 23, 11),
(120, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '1705680111', '17202C0002', 'hkjakcj ve', 25, 25, 25, 25, 22, 20, 20, 20, 20, 20, 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 11),
(121, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '1705680121', '17202C0003', 'hkjakcj ve', 25, 21, 21, 12, 12, 13, 15, 22, 24, 20, 20, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 11),
(122, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '1705680151', '17202C0004', 'hkjakcj ve', 25, 20, 20, 20, 20, 20, 20, 20, 22, 22, 22, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 11),
(123, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '1705680114', '17202C0005', 'hkjackcj ve', 25, 21, 21, 21, 21, 21, 21, 21, 21, 12, 12, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 11),
(124, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '1705680119', '17202C0008', 'hkjakcj ve', 25, 25, 25, 24, 24, 24, 24, 23, 25, 25, 25, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 24, 11);

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
(80, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1579879165, '17202B0001', 'Bharat Chopra', '0'),
(81, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1579579865, '17202B0002', 'Omkar Gaikwad', '0'),
(82, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1575878165, '17202B0003', 'pooja Borade', '0'),
(83, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1575879165, '17202B0004', 'Shreyas Shah', '0'),
(84, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1579875165, '17202B0005', 'Manohran naidu', '0'),
(85, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', 1705680234, '17202B0042', 'Raju Singh', '0'),
(95, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680202, '17202A0010', 'Tanishk Shah', ''),
(96, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680203, '17202A0015', 'Balakrishna Udaiyar', ''),
(97, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680204, '17202A0017', 'Shabista Idrisi', ''),
(98, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680205, '17202A0022', 'Rohit Kakade', ''),
(99, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680206, '17202A0023', 'Omkar Dighe', ''),
(100, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680207, '17202A0028', 'Sheetal Gupta', ''),
(101, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680208, '17202A0036', 'Sushant Yelurkar', ''),
(102, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680210, '17202A0040', 'Bhavesh Satpute', ''),
(103, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680229, '17202A0042', 'Ajit Jena', ''),
(104, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', 1705680232, '17202A0061', 'Shivshankar Sahu', ''),
(105, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680110, '17202C0001', 'Neha Modhave', '10'),
(106, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680111, '17202C0002', 'hkjakcj ve', '10'),
(107, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680121, '17202C0003', 'hkjakcj ve', '10'),
(108, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680151, '17202C0004', 'hkjakcj ve', '10'),
(109, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680114, '17202C0005', 'hkjackcj ve', '10'),
(110, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', 1705680119, '17202C0008', 'hkjakcj ve', '10');

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
(1, 'INFORMATION TECHNOLOGY', 22617, 'MAD', '2.0', '3.0', '3.3', '2.8', '2.8', '2.5', '3.0', '-', '2.6', '2.3', '1.6', '2.5'),
(3, 'INFORMATION TECHNOLOGY', 22509, 'MGT', '-', '1.5', '2.6', '2.5', '1.6', '1.0', '1.0', '1.7', '3.0', '3.0', '2.0', '2.0');

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
(109, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO1', 22617, 'MAD', '2', '3', '3', '3', '3', '3', '3', '-', '3', '1', '1', '3'),
(110, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO2', 22617, 'MAD', '1', '3', '3', '3', '3', '3', '3', '-', '3', '3', '1', '2'),
(111, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO3', 22617, 'MAD', '0', '3', '3', '3', '3', '3', '3', '-', '3', '3', '1', '3'),
(112, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO4', 22617, 'MAD', '3', '3', '3', '2', '3', '2', '3', '-', '3', '3', '1', '1'),
(113, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO5', 22617, 'MAD', '3', '3', '3', '3', '3', '3', '3', '-', '3', '1', '3', '3'),
(114, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO6', 22617, 'MAD', '3', '3', '5', '3', '2', '1', '3', '-', '1', '3', '3', '3'),
(115, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO1', 22509, 'MGT', '1', '', '2', '3', '1', '', '1', '2', '', '3', '1', ''),
(116, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO2', 22509, 'MGT', '2', '', '', '', '', '1', '', '', '', '', '', '2'),
(117, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO3', 22509, 'MGT', '', '1', '', '', '', '1', '', '1', '', '', '', ''),
(118, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO4', 22509, 'MGT', '1', '2', '3', '', '1', '', '', '1', '', '3', '3', ''),
(119, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO5', 22509, 'MGT', '3', '', '', '', '', '1', '', '', '', '3', '', ''),
(120, 'INFORMATION TECHNOLOGY', 'Sixth', 'CO6', 22509, 'MGT', '3', '', '3', '2', '2', '', '', '3', '3', '', '', '');

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
(517, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0010', 'Tanishk Shah', '2', '2', '1', '2', '1', '-', '4', '0', '4', '-', 15, 0),
(518, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0015', 'Balakrishna Udaiyar', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(519, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0017', 'Shabista Idrisi', '2', '2', '-', '-', '2', '1', '-', '2', '-', '4', 13, 0),
(520, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0022', 'Rohit Kakade', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(521, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0023', 'Omkar Dighe', '2', '2', '2', '-', '1', '-', '4', '2', '4', '2', 17, 0),
(522, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0028', 'Sheetal Gupta', '2', '2', '2', '2', '2', '-', '3', '3', '4', '3', 18, 0),
(523, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0036', 'Sushant Yelurkar', '2', '2', '-', '1', '2', '2', '-', '4', '1', '2', 15, 0),
(524, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0040', 'Bhavesh Satpute', '2', '2', '2', '-', '2', '2', '4', '4', '4', '4', 20, 0),
(525, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0042', 'Ajit Jena', '2', '2', '2', '0', '1', '2', '4', '3', '0', '4', 19, 0),
(526, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0061', 'Shivshankar Sahu', '2', '2', '2', '-', '2', '2', '4', '3', '4', '-', 19, 0),
(527, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0001', 'Bharat Chopra', '2', '2', '-', '2', '1', '-', '-', '-', '-', '-', 7, 0),
(528, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0002', 'Omkar Gaikwad', '1', '1', '1', '-', '2', '-', '1', '-', '1', '-', 7, 0),
(529, '2019-2020', 'IF6B', 'MAD', 'VP1234IF', '17202B0003', 'pooja Borade', '2', '2', '2', '-', '2', '2', '-', '4', '4', '4', 20, 0),
(530, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0004', 'Shreyas Shah', '2', '2', '2', '-', '2', '2', '-', '4', '4', '-', 16, 0),
(531, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0005', 'Manohran naidu', '2', '2', '-', '0', '2', '0', '4', '-', '1', '-', 11, 0),
(532, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0042', 'Raju Singh', '2', '2', '2', '2', '2', '-', '2', '2', '3', '-', 15, 0),
(551, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0001', 'Neha Modhave', '2', '-', '-', '-', '-', '2', '4', '4', '3', '-', 15, 0),
(552, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0002', 'hkjakcj ve', '2', '2', '2', '2', '1', '1', '3', '3', '0', '3', 17, 0),
(553, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0003', 'hkjakcj ve', '2', '2', '2', '2', '2', '2', '2', '2', '2', '3', 15, 0),
(554, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0004', 'hkjakcj ve', '2', '2', '1', '1', '1', '1', '3', '1', '2', '4', 15, 0),
(555, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0005', 'hkjackcj ve', '0', '0', '0', '0', '-', '2', '3', '3', '0', '-', 8, 0),
(556, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0008', 'hkjakcj ve', '2', '2', '2', '0', '0', '-', '3', '3', '4', '-', 16, 0),
(557, '2019-2020', 'IF6IA', 'ETI', 'VP123IF', '17202A0010', 'Tanishk Shah', '2', '1', '1', '2', '2', '1', '4', '-', '2', '4', 17, 0),
(558, '2019-2020', 'IF6IA', 'ETI', 'VP123IF', '17202A0015', 'Balakrishna Udaiyar', '2', '2', '2', '1', '1', '1', '-', '4', '2', '2', 15, 0),
(559, '2019-2020', 'IF6IA', 'ETI', 'VP123IF', '17202A0017', 'Shabista Idrisi', '2', '2', '2', '2', '2', '2', '4', '3', '3', '3', 18, 0),
(560, '2019-2020', 'IF6IA', 'ETI', 'VP123IF', '17202A0022', 'Rohit Kakade', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(561, '2019-2020', 'IF6IA', 'ETI', 'VP123IF', '17202A0023', 'Omkar Dighe', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 1),
(562, '2019-2020', 'IF6IA', 'ETI', 'VP123IF', '17202A0028', 'Sheetal Gupta', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(563, '2019-2020', 'IF6IA', 'ETI', 'VP123IF', '17202A0036', 'Sushant Yelurkar', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(564, '2019-2020', 'IF6IA', 'ETI', 'VP123IF', '17202A0040', 'Bhavesh Satpute', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(565, '2019-2020', 'IF6IA', 'ETI', 'VP123IF', '17202A0042', 'Ajit Jena', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0),
(566, '2019-2020', 'IF6IA', 'ETI', 'VP123IF', '17202A0061', 'Shivshankar Sahu', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 0, 0);

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
(105, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0010', 'Tanishk Shah', '0', '1', '1', '0', '-', '-', '-', '1', '2', '-', 5, 0),
(106, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0015', 'Balakrishna Udaiyar', '-', '2', '2', '2', '0', '-', '3', '3', '4', '-', 16, 0),
(107, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0017', 'Shabista Idrisi', '0', '2', '2', '2', '1', '-', '4', '0', '4', '-', 15, 0),
(108, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0022', 'Rohit Kakade', '0', '1', '1', '0', '1', '-', '-', '2', '1', '2', 8, 0),
(109, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0023', 'Omkar Dighe', '0', '2', '2', '-', '1', '1', '3', '3', '2', '1', 14, 0),
(110, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0028', 'Sheetal Gupta', '0', '2', '2', '0', '1', '-', '4', '3', '2', '-', 14, 0),
(111, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0036', 'Sushant Yelurkar', '0', '0', '2', '1', '0', '2', '1', '1', '1', '-', 8, 0),
(112, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0040', 'Bhavesh Satpute', '-', '2', '2', '2', '2', '2', '4', '4', '4', '-', 20, 0),
(113, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0042', 'Ajit Jena', '2', '2', '-', '2', '1', '-', '3', '2', '0', '-', 12, 0),
(114, '2019-2020', 'IF6IA', 'MAD', 'VP123IF', '17202A0061', 'Shivshankar Sahu', '0', '2', '2', '2', '2', '-', '0', '-', '4', '-', 15, 0),
(115, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0001', 'Bharat Chopra', '2', '2', '0', '-', '2', '2', '1', '-', '-', '-', 9, 0),
(116, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0002', 'Omkar Gaikwad', '-', '2', '2', '-', '1', '0', '-', '1', '1', '-', 7, 0),
(117, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0003', 'pooja Borade', '2', '2', '-', '-', '1', '-', '3', '3', '-', '-', 11, 0),
(118, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0004', 'Shreyas Shah', '2', '2', '2', '2', '2', '0', '4', '4', '-', '-', 16, 0),
(119, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0005', 'Manohran naidu', '2', '2', '2', '2', '2', '-', '3', '-', '3', '-', 14, 0),
(120, '2019-2020', 'IF6IB', 'MAD', 'VP1234IF', '17202B0042', 'Raju Singh', '-', '2', '2', '2', '2', '-', '4', '4', '1', '2', 18, 0),
(133, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0001', 'Neha Modhave', '2', '2', '2', '2', '1', '1', '3', '3', '3', '3', 17, 0),
(134, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0002', 'hkjakcj ve', '2', '2', '2', '-', '2', '2', '2', '3', '3', '4', 18, 0),
(135, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0003', 'hkjakcj ve', '2', '2', '-', '2', '2', '2', '2', '2', '2', '2', 14, 0),
(136, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0004', 'hkjakcj ve', '2', '2', '2', '2', '-', '2', '2', '2', '2', '2', 14, 0),
(137, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0005', 'hkjackcj ve', '1', '1', '1', '2', '-', '2', '3', '3', '3', '0', 15, 0),
(138, '2019-2020', 'IF6IC', 'MAD', 'VP12345IF', '17202C0008', 'hkjakcj ve', '0', '0', '0', '0', '2', '2', '4', '4', '-', '-', 12, 0);

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
('2019-2020', 1505680263, '15202A0044', 'HOTA VIKRAM BHAGWAN', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1605680225, '16202A0014', 'PATIL SAYLEE SUNIL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1605680273, '16202A0063', 'ADSUL ANJALI RAJESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
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
('2019-2020', 1700030035, '18202A2001', 'KATKE SHUBHAM SURESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1700030038, '18202A2002', 'JASHRAJ KASHYAP PATEL', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1700030039, '18202A2003', 'SAMEER VIJAY UGALE', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1700030036, '18202A2004', 'OWHAL NIMISH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1800030002, '18202A2005', 'YASA MAHESH RAMESH', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology'),
('2019-2020', 1800030005, '18202A2006', 'GUNTAKA GANESH REDDY GOPAL CHI', 'e10adc3949ba59abbe56e057f20f883e', 9326590372, 'abcdemoqwe@gmail.com', 'IF6IA', 'Information Technology');

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
(1, 22509, 'MGT', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 1, 0, '2020-02-07 13:10:12', '', 1, 0, 0, 1, 1),
(2, 22617, 'MAD', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 1, 1, '2020-02-07 13:10:12', '', 1, 0, 0, 1, 1),
(3, 22618, 'ETI', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 0, 1, '2020-02-07 13:10:12', '', 0, 0, 0, 1, 1),
(4, 22619, 'WBP', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 1, 1, '2020-02-07 13:10:12', '', 0, 0, 0, 1, 1),
(5, 22622, 'WMN', '2019-2020', 'INFORMATION TECHNOLOGY', 'Sixth', '', 0, 1, '2020-02-07 13:10:12', '07-02-2020 06:44:49 PM', 0, 0, 0, 0, 0);

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
('VP12345IF', 'Madhura Mam', 9326590372, 'madhura@gmail.com', '46ff90e8e3c3c1cb6cae3a539082ffc9'),
('VP1234IF', 'Shama Mam', 9326590372, 'shama@gmail.com', '46ff90e8e3c3c1cb6cae3a539082ffc9'),
('VP123IF', 'Archana Gopnarayan', 9326590372, 'ajitjena123456@gmail.com', '46ff90e8e3c3c1cb6cae3a539082ffc9'),
('VP4IF', 'Kalyani Mam', 9326590372, 'kalyani@gmail.com', '28b0ac7cbdd5c786e7074225e96ccce7'),
('VP5IF', 'Yogita Mam', 9326590372, 'yogita@gmail.com', '93368315ccc34d6cea4a9b9c505f368f');

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

--
-- Dumping data for table `th_pa`
--

INSERT INTO `th_pa` (`th_pa_id`, `roll_no`, `ciaan_id`, `div_id`, `course_id`, `pt1Q1a`, `pt1Q1b`, `pt1Q1c`, `pt1Q1d`, `pt1Q1e`, `pt1Q1f`, `pt1Q2a`, `pt1Q2b`, `pt1Q2c`, `pt1Q2d`, `pt1`, `pt2Q1a`, `pt2Q1b`, `pt2Q1c`, `pt2Q1d`, `pt2Q1e`, `pt2Q1f`, `pt2Q2a`, `pt2Q2b`, `pt2Q2c`, `pt2Q2d`, `pt2`, `ptavg`, `mpga`, `moidv`, `obtained`, `verifed`) VALUES
(1, '17203C0002', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '11', '', '', '', '', '', '', '', '', '', '', '10', '', '5.8', '2.5', '', ''),
(2, '17203C0003', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '10', '', '5.2', '3.5', '', ''),
(3, '17203C0004', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', '', '', '', '', '', '10', '', '4', '2', '', ''),
(4, '17203C0006', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '10', '', '6', '2', '', ''),
(5, '17203C0008', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '', '', '', '', '', '', '', '10', '', '6', '4', '', ''),
(6, '17203C0013', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '6', '', '', '', '', '', '', '', '', '', '', '10', '', '5', '4', '', ''),
(7, '17203C0014', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '7', '', '', '', '', '', '', '', '', '', '', '10', '', '4', '4', '', ''),
(8, '17203C0017', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '8', '', '', '', '', '', '', '', '', '', '', '10', '', '5', '3', '', ''),
(9, '17203C0018', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '', '', '10', '', '4', '2', '', ''),
(10, '17203C0019', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '10', '', '', '', '', '', '', '', '', '', '', '10', '', '5', '2', '', ''),
(11, '17203C0020', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '20', '', '', '', '', '', '', '', '', '', '', '10', '', '5', '2', '', ''),
(12, '17203C0022', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '12', '', '', '', '', '', '', '', '', '', '', '10', '', '5', '3', '', ''),
(13, '17203C0024', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '13', '', '', '', '', '', '', '', '', '', '', '10', '', '6', '4', '', ''),
(14, '17203C0025', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '14', '', '', '', '', '', '', '', '', '', '', '10', '', '5', '4', '', ''),
(15, '17203C0031', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '15', '', '', '', '', '', '', '', '', '', '', '10', '', '6', '3', '', ''),
(16, '17203C0035', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '16', '', '', '', '', '', '', '', '', '', '', '10', '', '4', '4', '', ''),
(17, '17203C0036', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '17', '', '', '', '', '', '', '', '', '', '', '10', '', '5', '2', '', ''),
(18, '17203C0039', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '18', '', '', '', '', '', '', '', '', '', '', '10', '', '4', '4', '', ''),
(19, '17203C0042', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '19', '', '', '', '', '', '', '', '', '', '', '10', '', '4', '4', '', ''),
(20, '17203C0043', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '20', '', '', '', '', '', '', '', '', '', '', '10', '', '5', '4', '', ''),
(21, '17203C0045', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '11', '', '', '', '', '', '', '', '', '', '', '10', '', '6', '4', '', ''),
(22, '17203C0048', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '10', '', '6', '4', '', ''),
(23, '17203C0049', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', '', '', '', '', '', '10', '', '4', '2', '', ''),
(24, '17203C0051', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '10', '', '5', '4', '', ''),
(25, '17203C0053', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '', '', '', '', '', '', '', '20', '', '4', '3', '', ''),
(26, '17203C0054', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '6', '', '', '', '', '', '', '', '', '', '', '20', '', '6', '3', '', ''),
(27, '18203C1002', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '7', '', '', '', '', '', '', '', '', '', '', '20', '', '5', '2', '', ''),
(28, '18203C1010', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '8', '', '', '', '', '', '', '', '', '', '', '20', '', '6', '4', '', ''),
(29, '18203C1012', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '', '', '20', '', '6', '3', '', ''),
(30, '18203C1013', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '10', '', '', '', '', '', '', '', '', '', '', '20', '', '5', '2', '', ''),
(31, '18203C1014', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '11', '', '', '', '', '', '', '', '', '', '', '20', '', '6', '2', '', ''),
(32, '18203C1015', '1', '3', '1', '', '', '', '', '', '', '', '', '', '', '20', '', '', '', '', '', '', '', '', '', '', '18', '', '6', '4', '', '');

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
  MODIFY `assign_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comap_prac`
--
ALTER TABLE `comap_prac`
  MODIFY `comap_prac_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comap_pt1`
--
ALTER TABLE `comap_pt1`
  MODIFY `comap_pt1_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comap_pt2`
--
ALTER TABLE `comap_pt2`
  MODIFY `comap_pt2_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cos`
--
ALTER TABLE `cos`
  MODIFY `cos_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `cosfull`
--
ALTER TABLE `cosfull`
  MODIFY `cosf_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `course_exit_form`
--
ALTER TABLE `course_exit_form`
  MODIFY `coexformid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `direct_attain_pos_psos`
--
ALTER TABLE `direct_attain_pos_psos`
  MODIFY `direct_attain_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ese`
--
ALTER TABLE `ese`
  MODIFY `ese_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `final_attainment`
--
ALTER TABLE `final_attainment`
  MODIFY `final_attain_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `lab_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `microproject`
--
ALTER TABLE `microproject`
  MODIFY `micro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

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
  MODIFY `pt1_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=567;

--
-- AUTO_INCREMENT for table `pt2`
--
ALTER TABLE `pt2`
  MODIFY `pt2_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
