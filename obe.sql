-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2021 at 01:37 AM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obe`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch_list`
--

CREATE TABLE `batch_list` (
  `id` int(11) NOT NULL,
  `RP_16` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `RP_17` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `RP_18` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `batch_list`
--

INSERT INTO `batch_list` (`id`, `RP_16`, `RP_17`, `RP_18`) VALUES
(1, 'RP-16-EE-400', 'RP-17-EE-400', 'RP-18-EE-401'),
(2, 'RP-16-EE-403', 'RP-17-EE-401', 'RP-18-EE-402'),
(3, 'RP-16-EE-404', 'RP-17-EE-402', 'RP-18-EE-403'),
(4, 'RP-16-EE-405', 'RP-17-EE-403', 'RP-18-EE-404'),
(5, 'RP-16-EE-406', 'RP-17-EE-404', 'RP-18-EE-405'),
(6, 'RP-16-EE-407', 'RP-17-EE-405', 'RP-18-EE-407'),
(7, 'RP-16-EE-408', 'RP-17-EE-406', 'RP-18-EE-408'),
(8, 'RP-16-EE-409', 'RP-17-EE-407', 'RP-18-EE-409'),
(9, 'RP-16-EE-412', 'RP-17-EE-408', 'RP-18-EE-410'),
(10, 'RP-16-EE-413', 'RP-17-EE-409', 'RP-18-EE-411'),
(11, 'RP-16-EE-414', 'RP-17-EE-410', 'RP-18-EE-412'),
(12, 'RP-16-EE-415', 'RP-17-EE-411', 'RP-18-EE-413'),
(13, 'RP-16-EE-416', 'RP-17-EE-412', 'RP-18-EE-414'),
(14, 'RP-16-EE-417', 'RP-17-EE-413', 'RP-18-EE-415'),
(15, 'RP-16-EE-418', 'RP-17-EE-414', 'RP-18-EE-416'),
(16, 'RP-16-EE-419', 'RP-17-EE-415', 'RP-18-EE-417'),
(17, 'RP-16-EE-420', 'RP-17-EE-416', 'RP-18-EE-418'),
(18, 'RP-16-EE-421', 'RP-17-EE-417', 'RP-18-EE-419'),
(19, 'RP-16-EE-422', 'RP-17-EE-418', 'RP-18-EE-420'),
(20, 'RP-16-EE-423', 'RP-17-EE-419', 'RP-18-EE-421'),
(21, 'RP-16-EE-424', 'RP-17-EE-420', 'RP-18-EE-422'),
(22, 'RP-16-EE-425', 'RP-17-EE-421', 'RP-18-EE-425'),
(23, 'RP-16-EE-426', 'RP-17-EE-422', 'RP-18-EE-426'),
(24, 'RP-16-EE-427', 'RP-17-EE-423', 'RP-18-EE-427'),
(25, 'RP-16-EE-428', 'RP-17-EE-424', 'RP-18-EE-428'),
(26, 'RP-16-EE-429', 'RP-17-EE-425', 'RP-18-EE-429'),
(27, 'RP-16-EE-430', 'RP-17-EE-426', 'RP-18-EE-430'),
(28, 'RP-16-EE-431', 'RP-17-EE-427', 'RP-18-EE-431'),
(29, 'RP-16-EE-432', 'RP-17-EE-428', 'RP-18-EE-432'),
(30, 'RP-16-EE-433', 'RP-17-EE-429', 'RP-18-EE-433'),
(31, 'RP-16-EE-434', 'RP-17-EE-430', 'RP-18-EE-451'),
(32, 'RP-16-EE-435', 'RP-17-EE-431', NULL),
(33, 'RP-16-EE-437', 'RP-17-EE-432', NULL),
(34, 'RP-16-EE-438', 'RP-17-EE-433', NULL),
(35, 'RP-16-EE-439', 'RP-17-EE-434', NULL),
(36, 'RP-16-EE-440', 'RP-17-EE-435', NULL),
(37, 'RP-16-EE-441', 'RP-17-EE-436', NULL),
(38, 'RP-16-EE-442', 'RP-17-EE-437', NULL),
(39, 'RP-16-EE-443', 'RP-17-EE-438', NULL),
(40, 'RP-16-EE-444', 'RP-17-EE-439', NULL),
(41, NULL, 'RP-17-EE-440', NULL),
(42, NULL, 'RP-17-EE-441', NULL),
(43, NULL, 'RP-17-EE-442', NULL),
(44, NULL, 'RP-17-EE-443', NULL),
(45, NULL, 'RP-17-EE-444', NULL),
(46, NULL, 'RP-17-EE-445', NULL),
(47, NULL, NULL, NULL),
(48, NULL, NULL, NULL),
(49, NULL, NULL, NULL),
(50, NULL, NULL, NULL),
(51, NULL, NULL, NULL),
(52, NULL, NULL, NULL),
(53, NULL, NULL, NULL),
(54, NULL, NULL, NULL),
(55, NULL, NULL, NULL),
(56, NULL, NULL, NULL),
(57, NULL, NULL, NULL),
(58, NULL, NULL, NULL),
(59, NULL, NULL, NULL),
(60, NULL, NULL, NULL),
(61, NULL, NULL, NULL),
(62, NULL, NULL, NULL),
(63, NULL, NULL, NULL),
(64, NULL, NULL, NULL),
(65, NULL, NULL, NULL),
(66, NULL, NULL, NULL),
(67, NULL, NULL, NULL),
(68, NULL, NULL, NULL),
(69, NULL, NULL, NULL),
(70, NULL, NULL, NULL),
(71, NULL, NULL, NULL),
(72, NULL, NULL, NULL),
(73, NULL, NULL, NULL),
(74, NULL, NULL, NULL),
(75, NULL, NULL, NULL),
(76, NULL, NULL, NULL),
(77, NULL, NULL, NULL),
(78, NULL, NULL, NULL),
(79, NULL, NULL, NULL),
(80, NULL, NULL, NULL),
(81, NULL, NULL, NULL),
(82, NULL, NULL, NULL),
(83, NULL, NULL, NULL),
(84, NULL, NULL, NULL),
(85, NULL, NULL, NULL),
(86, NULL, NULL, NULL),
(87, NULL, NULL, NULL),
(88, NULL, NULL, NULL),
(89, NULL, NULL, NULL),
(90, NULL, NULL, NULL),
(91, NULL, NULL, NULL),
(92, NULL, NULL, NULL),
(93, NULL, NULL, NULL),
(94, NULL, NULL, NULL),
(95, NULL, NULL, NULL),
(96, NULL, NULL, NULL),
(97, NULL, NULL, NULL),
(98, NULL, NULL, NULL),
(99, NULL, NULL, NULL),
(100, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses_info`
--

CREATE TABLE `courses_info` (
  `serial` int(11) NOT NULL,
  `course_id` varchar(20) COLLATE utf8_bin NOT NULL,
  `course_code` varchar(20) COLLATE utf8_bin NOT NULL,
  `course_title` text COLLATE utf8_bin NOT NULL,
  `term_offer` text COLLATE utf8_bin NOT NULL,
  `course_ended` tinyint(1) NOT NULL,
  `credit_hour` varchar(3) COLLATE utf8_bin NOT NULL,
  `course_type` text COLLATE utf8_bin NOT NULL,
  `instructor` text COLLATE utf8_bin NOT NULL,
  `access_user` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `course_description` text COLLATE utf8_bin,
  `mid_weight` decimal(10,2) NOT NULL,
  `final_weight` decimal(10,2) NOT NULL,
  `quiz_weight` decimal(10,2) NOT NULL,
  `assign_weight` decimal(10,2) NOT NULL,
  `lab_weight` decimal(10,2) NOT NULL,
  `project_weight` decimal(10,2) NOT NULL,
  `viva_weight` decimal(10,2) NOT NULL,
  `presentation_weight` decimal(10,2) NOT NULL,
  `other_weight` decimal(10,2) NOT NULL,
  `atten_weight` decimal(10,2) NOT NULL,
  `CLO_count` int(100) DEFAULT NULL,
  `clo_details` varchar(3000) COLLATE utf8_bin NOT NULL,
  `rubric_set_count` int(100) NOT NULL,
  `rubric_sets` text COLLATE utf8_bin NOT NULL,
  `plos_enabled` varchar(100) COLLATE utf8_bin NOT NULL,
  `PLO1` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO2` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO3` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO4` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO5` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO6` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO7` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO8` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO9` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO10` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO11` varchar(150) COLLATE utf8_bin NOT NULL,
  `PLO12` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `courses_info`
--

INSERT INTO `courses_info` (`serial`, `course_id`, `course_code`, `course_title`, `term_offer`, `course_ended`, `credit_hour`, `course_type`, `instructor`, `access_user`, `course_description`, `mid_weight`, `final_weight`, `quiz_weight`, `assign_weight`, `lab_weight`, `project_weight`, `viva_weight`, `presentation_weight`, `other_weight`, `atten_weight`, `CLO_count`, `clo_details`, `rubric_set_count`, `rubric_sets`, `plos_enabled`, `PLO1`, `PLO2`, `PLO3`, `PLO4`, `PLO5`, `PLO6`, `PLO7`, `PLO8`, `PLO9`, `PLO10`, `PLO11`, `PLO12`) VALUES
(1, 'ns3201_Spring_2019', 'NS-3201', 'Numerical Analysis', 'Spring 2019', 1, '3', 'Theory', 'Muhammad Zulqarnain', 'zulqarnain:\\^\\:admin', 'To study several general and relatively simple ideas that can be used to develop numerical methods and to gain experience of obtaining numerical solutions to selected problems using MATLAB', '35.00', '40.00', '12.50', '12.50', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, 'CLO1:\\^\\:Apply different numerical methods to estimate roots of equation, polynomial expansion using Taylor series, numerical differentiation and integration:\\^\\:C3:\\^\\:CLO2:\\^\\:Solve ordinary differential equations and compute optimal points for curve fitting by using various numerical techniques:\\^\\:C4:\\^\\:CLO3:\\^\\:Apply a MATLAB to implement various numerical methods.:\\^\\:C3', 0, '', '1:\\^\\:5', 'CLO1:\\^\\:100.0:\\^\\:CLO2:\\^\\:100.0', '', '', '', 'CLO3:\\^\\:100.0', '', '', '', '', '', '', ''),
(2, 'ee3206_Spring_2019', 'EE-3206', 'Digital Communication', 'Spring 2019', 1, '3', 'Theory', 'Muhammad Zulqarnain', 'zulqarnain:\\^\\:admin', 'The objective of the course is to prepare students for engineering work and research in the telecommunication industry. The course covers concepts and useful tools for the design and performance analysis of a digital transmitter and receiver at the physical layer of a communication system', '35.00', '40.00', '5.00', '20.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, 'CLO1:\\^\\:Describe signal representation in Bandpass and Baseband and concepts of signal-space analysis :\\^\\:C1:\\^\\:CLO2:\\^\\:Identify types of modulation schemes and compare their performance using signal-space analysis:\\^\\:C3:\\^\\:CLO3:\\^\\:Apply Probabilistic analysis to compare design optimal receiver in an AWGN channel.:\\^\\:C3', 0, '', '1:\\^\\:2', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100', 'CLO3:\\^\\:100', '', '', '', '', '', '', '', '', '', ''),
(3, 'ee3206l_Spring_2019', 'EE-3206L', 'Digital Communication', 'Spring 2019', 1, '3', 'LAB', 'Muhammad Zulqarnain', 'zulqarnain:\\^\\:admin', 'The objective of this LAB is to prepare students for useful tools for the design and performance analysis of a digital transmitter and receiver at the physical layer of a communication system', '15.00', '20.00', '0.00', '0.00', '25.00', '25.00', '0.00', '0.00', '15.00', '0.00', 1, 'CLO1:\\^\\:Use SDR / Lab Trainer boards to validate different digital communication techniques and design a complete discrete-time modem:\\^\\:P4', 4, 'set1:\\^\\:4:\\^\\:Realization of Experiment:\\^\\:Team Work:\\^\\:Computer Use:\\^\\:Conducting Experiment:\\^\\:set2:\\^\\:3:\\^\\:Realization of Experiment:\\^\\:Computer Use:\\^\\:Data Analysis:\\^\\:set3:\\^\\:7:\\^\\:Realization of Experiment:\\^\\:Team Work:\\^\\:Computer Use:\\^\\:Conducting Experiment:\\^\\:Data Analysis:\\^\\:Data Collection:\\^\\:Laboratory Safety Rules:\\^\\:set4:\\^\\:1:\\^\\:Realization of Experiment', '5', '', '', '', '', 'CLO1:\\^\\:100', '', '', '', '', '', '', ''),
(4, 'ns1205_Spring_2019', 'NS-1205', 'Complex Variables & Transforms', 'Spring 2019', 1, '3', 'Theory', 'Dr. Muhammad Kashif Samee', 'kashif.samee:\\^\\:admin', 'Description goes here', '35.00', '40.00', '15.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, 'CLO1:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO3:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO4:\\^\\:CLO Description goes here:\\^\\:C1', 1, 'set1:\\^\\:3:\\^\\:Realization of Experiment:\\^\\:Team Work:\\^\\:Conducting Experiment', '1:\\^\\:2:\\^\\:12', 'CLO1:\\^\\:100.0', 'CLO2:\\^\\:100.0:\\^\\:CLO3:\\^\\:100.0', '', '', '', '', '', '', '', '', '', 'CLO4:\\^\\:100.0'),
(5, 'ee1206_Fall_2019', 'EE-1206', 'Workshop Practice', 'Fall 2019', 1, '1', 'LAB', 'Mr. Kashif Habib', 'kashif.habib:\\^\\:admin', 'Description goes here', '35.00', '40.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '25.00', '0.00', 4, 'CLO1:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO3:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO4:\\^\\:CLO Description goes here:\\^\\:C1', 0, '', '1:\\^\\:2', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100:\\^\\:CLO3:\\^\\:100:\\^\\:CLO4:\\^\\:100', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100:\\^\\:CLO3:\\^\\:100:\\^\\:CLO4:\\^\\:100', '', '', '', '', '', '', '', '', '', ''),
(6, 'ee3206_Spring_2020', 'EE-3206', 'Digital Communication', 'Spring 2020', 0, '3', 'Theory', 'Mr. Muhammad Zulqarnain', 'zulqarnain:\\^\\:admin', 'The objective of the course is to prepare students for engineering work and research in the telecommunication industry. The course covers concepts and useful tools for the design and performance analysis of a digital transmitter and receiver at the physical layer of a communication system', '35.00', '40.00', '5.00', '20.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, 'CLO1:\\^\\: signal representation in Bandpass and Baseband and concepts of signal-space analysis.:\\^\\:C2:\\^\\:CLO2:\\^\\:Identify types of modulation schemes and compare their performance using signal-space analysis.:\\^\\:C4:\\^\\:CLO3:\\^\\:Apply Probabilistic analysis to compare design optimal receiver in an AWGN channel.:\\^\\:C3:\\^\\:CLO4:\\^\\:CLO Description goes here:\\^\\:', 3, 'set1:\\^\\:0:\\^\\:set2:\\^\\:0:\\^\\:set3:\\^\\:3:\\^\\:Team Work:\\^\\:Computer Use:\\^\\:Laboratory Safety Rules', '1:\\^\\:2', 'CLO1:\\^\\:1.0:\\^\\:CLO2:\\^\\:1.0', 'CLO3:\\^\\:1.0', '', '', '', '', '', '', '', '', '', ''),
(7, 'ns2104_Fall_2019', 'NS-2104', 'Linear Algebra', 'Fall 2019', 1, '3', 'Theory', 'Mr. Muhammad Zulqarnain', 'zulqarnain:\\^\\:admin', 'This course provides a basic understanding of system of linear equations and matrices in an n-dimensional space. It provides a working knowledge of matrix algebra, determinants, eigenvectors and eigenvalues, finite-dimensional vector spaces, the four fundamental subspaces, matrix representations of linear transformations and applications of linear algebra', '35.00', '15.00', '6.00', '19.00', '0.00', '0.00', '25.00', '0.00', '0.00', '0.00', 3, 'CLO1:\\^\\:Describe the vector equations and matrices in n-dimensional settings.:\\^\\:C2:\\^\\:CLO2:\\^\\:Analyze and solve system of linear equations, then apply to different engineering applications.:\\^\\:C4:\\^\\:CLO3:\\^\\:Describe the eigen values and eigen vectors by using the characteristic polynomial.:\\^\\:C2', 0, '', '1:\\^\\:2', 'CLO1:\\^\\:1.0:\\^\\:CLO3:\\^\\:1.0', 'CLO2:\\^\\:1.0', '', '', '', '', '', '', '', '', '', ''),
(8, 'ns1203_Spring_2018', 'NS-1203', 'Differential Equations', 'Spring 2018', 1, '3', 'Theory', 'Visitor', 'visitor:\\^\\:admin', '', '35.00', '40.00', '10.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, 'CLO1:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO3:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO4:\\^\\:CLO Description goes here:\\^\\:C1', 0, '', '1:\\^\\:2', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100:\\^\\:CLO3:\\^\\:100:\\^\\:CLO4:\\^\\:100', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100:\\^\\:CLO3:\\^\\:100:\\^\\:CLO4:\\^\\:100', '', '', '', '', '', '', '', '', '', ''),
(9, 'ee1202_Spring_2018', 'EE-1202', 'Electronic Devices and Circuits', 'Spring 2018', 1, '3', 'Theory', 'Visitor', 'visitor:\\^\\:admin', '', '35.00', '40.00', '0.00', '15.00', '0.00', '0.00', '0.00', '0.00', '10.00', '0.00', 4, 'CLO1:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO3:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO4:\\^\\:CLO Description goes here:\\^\\:C1', 0, '', '1:\\^\\:2:\\^\\:4:\\^\\:5', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100:\\^\\:CLO3:\\^\\:100:\\^\\:CLO4:\\^\\:100', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100:\\^\\:CLO3:\\^\\:100:\\^\\:CLO4:\\^\\:100', '', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100:\\^\\:CLO4:\\^\\:100', 'CLO4:\\^\\:100', '', '', '', '', '', '', ''),
(10, 'ee1202l_Spring_2018', 'EE-1202L', 'Electronic Devices and Circuits', 'Spring 2018', 1, '1', 'LAB', 'Visitor', 'visitor:\\^\\:admin', '', '35.00', '40.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '25.00', '0.00', 4, 'CLO1:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO3:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO4:\\^\\:CLO Description goes here:\\^\\:C1', 0, '', '1:\\^\\:2:\\^\\:4:\\^\\:5', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100:\\^\\:CLO3:\\^\\:100:\\^\\:CLO4:\\^\\:100', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100:\\^\\:CLO3:\\^\\:100:\\^\\:CLO4:\\^\\:100', '', 'CLO1:\\^\\:100:\\^\\:CLO2:\\^\\:100:\\^\\:CLO4:\\^\\:100', 'CLO4:\\^\\:100', '', '', '', '', '', '', ''),
(11, 'cs1201_Spring_2018', 'CS-1201', 'Object Oriented Programming', 'Spring 2018', 1, '3', 'Theory', 'Visitor', 'visitor:\\^\\:admin', '', '35.00', '40.00', '20.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 5, 'CLO1:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO3:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO4:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO5:\\^\\:CLO Description goes here:\\^\\:C1', 0, '', '1:\\^\\:2:\\^\\:3:\\^\\:5', 'CLO1:\\^\\:100.0', 'CLO2:\\^\\:100.0:\\^\\:CLO3:\\^\\:100.0', 'CLO2:\\^\\:100.0:\\^\\:CLO3:\\^\\:100.0:\\^\\:CLO4:\\^\\:100.0:\\^\\:CLO5:\\^\\:100.0', '', 'CLO1:\\^\\:100.0:\\^\\:CLO2:\\^\\:100.0:\\^\\:CLO3:\\^\\:100.0:\\^\\:CLO4:\\^\\:100.0:\\^\\:CLO5:\\^\\:100.0', '', '', '', '', '', '', ''),
(12, 'cs1201l_Spring_2018', 'CS-1201L', 'Object Oriented Programming', 'Spring 2018', 1, '1', 'LAB', 'Visitor', 'visitor:\\^\\:admin', '', '35.00', '40.00', '20.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 5, 'CLO1:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO3:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO4:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO5:\\^\\:CLO Description goes here:\\^\\:C1', 0, '', '1:\\^\\:2:\\^\\:3:\\^\\:5', 'CLO1:\\^\\:100.0', 'CLO2:\\^\\:100.0:\\^\\:CLO3:\\^\\:100.0', 'CLO2:\\^\\:100.0:\\^\\:CLO3:\\^\\:100.0:\\^\\:CLO4:\\^\\:100.0:\\^\\:CLO5:\\^\\:100.0', '', 'CLO1:\\^\\:100.0:\\^\\:CLO2:\\^\\:100.0:\\^\\:CLO3:\\^\\:100.0:\\^\\:CLO4:\\^\\:100.0:\\^\\:CLO5:\\^\\:100.0', '', '', '', '', '', '', ''),
(13, 'me1204_Spring_2018', 'ME1204', 'Thermodynamics', 'Spring 2018', 1, '3', 'Theory', 'Visitor', 'visitor:\\^\\:admin', '', '35.00', '40.00', '12.50', '12.50', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, 'CLO1:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO3:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO4:\\^\\:CLO Description goes here:\\^\\:C1', 0, '', '1', 'CLO1:\\^\\:100.0:\\^\\:CLO2:\\^\\:100.0:\\^\\:CLO3:\\^\\:100.0:\\^\\:CLO4:\\^\\:100.0', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'ee2201_Spring_2020', 'EE-2201', 'Signals and Systems', 'Spring 2020', 0, '3', 'Theory', 'Mr. Muhammad Zulqarnain', 'zulqarnain:\\^\\:admin', '', '35.00', '40.00', '12.50', '12.50', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, 'CLO1:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO3:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO4:\\^\\:CLO Description goes here:\\^\\:', 0, '', '1:\\^\\:2:\\^\\:3', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'ee3104_Fall_2019', 'EE-3104', 'Communications System', 'Fall 2019', 0, '3', 'Theory', 'Dr. Muhammad Kashif Samee', 'kashif.samee:\\^\\:admin', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '', 3, 'set1:\\^\\:0:\\^\\:set2:\\^\\:3:\\^\\:Realization of Experiment:\\^\\:Team Work:\\^\\:Conducting Experiment:\\^\\:set3:\\^\\:4:\\^\\:Realization of Experiment:\\^\\:Team Work:\\^\\:Conducting Experiment:\\^\\:Data Analysis', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'ee3104l_Fall_2019', 'EE-3104L', 'Communications System', 'Fall 2019', 0, '1', 'LAB', 'Dr. Muhammad Kashif Samee', 'kashif.samee:\\^\\:admin', '', '0.00', '0.00', '0.00', '0.00', '85.00', '0.00', '0.00', '5.00', '10.00', '0.00', 2, 'CLO1:\\^\\:CLO Description goes here:\\^\\:C1:\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\:C1', 2, 'set1:\\^\\:2:\\^\\:Realization of Experiment:\\^\\:Team Work:\\^\\:set2:\\^\\:3:\\^\\:Computer Use:\\^\\:Conducting Experiment:\\^\\:Data Analysis', '1', 'CLO1:\\^\\:1.0:\\^\\:CLO2:\\^\\:1.0', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'ee2202_Spring_2020', 'EE-2202', 'Electrical Machines', 'Spring 2020', 0, '3', 'Theory', 'Mr. Kashif Habib', 'kashif.habib:\\^\\:admin', '', '35.00', '40.00', '10.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, 'CLO1:\\^\\:Transformer:\\^\\:C1:\\^\\:CLO2:\\^\\:DC Machines:\\^\\:C1:\\^\\:CLO3:\\^\\:Induction Machines:\\^\\:C1:\\^\\:CLO4:\\^\\:Synchronous Machines:\\^\\:C1', 2, 'set1:\\^\\:0:\\^\\:set2:\\^\\:7:\\^\\:Realization of Experiment:\\^\\:Team Work:\\^\\:Computer Use:\\^\\:Conducting Experiment:\\^\\:Data Analysis:\\^\\:Data Collection:\\^\\:Laboratory Safety Rules', '1:\\^\\:2:\\^\\:5', 'CLO1:\\^\\:1.0:\\^\\:CLO4:\\^\\:1.0', 'CLO2:\\^\\:1.0', '', '', 'CLO3:\\^\\:1.0', '', '', '', '', '', '', ''),
(18, 'ee2203_Spring_2020', 'EE-2203', 'Electronic Circuits Design', 'Spring 2020', 0, '3', 'Theory', 'Visitor', 'visitor:\\^\\:admin', NULL, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'ee2201l_Spring_2019', 'EE-2201', 'Signals and Systems', 'Spring 2019', 0, '1', 'LAB', 'Mr. Muhammad Zulqarnain', 'zulqarnain:\\^\\:admin', '', '25.00', '25.00', '1.66', '3.34', '20.00', '0.00', '15.00', '0.00', '10.00', '0.00', 1, 'CLO1:\\^\\:Investigation of discrete and continuous time Signals and Systems in time and frequency domain using MATLAB:\\^\\:P4', 2, 'set1:\\^\\:3:\\^\\:Realization of Experiment:\\^\\:Computer Use:\\^\\:Data Analysis:\\^\\:set2:\\^\\:7:\\^\\:Realization of Experiment:\\^\\:Team Work:\\^\\:Computer Use:\\^\\:Conducting Experiment:\\^\\:Data Analysis:\\^\\:Data Collection:\\^\\:Laboratory Safety Rules', '5', '', '', '', '', 'CLO1:\\^\\:1.0', '', '', '', '', '', '', ''),
(20, 'ee3206l_Spring_2020', 'EE-3206L', 'Digital Communication', 'Spring 2020', 0, '1', 'LAB', 'Mr. Muhammad Zulqarnain', 'zulqarnain:\\^\\:admin', 'The objective of the course is to prepare students for engineering work and research in the telecommunication industry. The course covers concepts and useful tools for the design and performance analysis of a digital transmitter and receiver at the physical layer of a communication system', '20.00', '30.00', '0.00', '0.00', '30.00', '20.00', '0.00', '0.00', '0.00', '0.00', 1, 'CLO1:\\^\\:Investigate digital modulation and demodulation techniques using MATLAB and LAB trainer boards:\\^\\:P4', 3, 'set_ee3206l_Spring_2020_1:\\^\\:LAB Rubrics Software:\\^\\:4:\\^\\:6:\\^\\:Realization of Experiment:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Produced highly unacceptable results/analysis:\\^\\:Did not perform:\\^\\:Conduction Experiment:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Produced highly unacceptable results/analysis:\\^\\:Did not perform:\\^\\:Computer Use:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Produced highly unacceptable results/analysis:\\^\\:Did not perform:\\^\\:Data Analysis:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Produced highly unacceptable results/analysis:\\^\\:Did not perform:\\^\\:set_ee3206l_Spring_2020_2:\\^\\:Q1:\\^\\:3:\\^\\:5:\\^\\:Criterion 1:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform:\\^\\:Criterion 2:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform:\\^\\:Criterion 3:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform:\\^\\:set_ee3206l_Spring_2020_3:\\^\\:Rubric Set 3:\\^\\:5:\\^\\:5:\\^\\:Criterion 1:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform:\\^\\:Criterion 2:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform:\\^\\:Criterion 3:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform:\\^\\:Criterion 4:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform:\\^\\:Criterion 5:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform', '5', '', '', '', '', 'CLO1:\\^\\:1.0', '', '', '', '', '', '', ''),
(21, 'ee2201l_Spring_2020', 'EE-2201L', 'Signals & Systems', 'Spring 2020', 0, '1', 'LAB', 'Mr. Muhammad Zulqarnain', 'zulqarnain:\\^\\:admin', '', '20.00', '20.00', '0.00', '0.00', '30.00', '0.00', '15.00', '0.00', '15.00', '0.00', 1, 'CLO1:\\^\\:Investigation of discrete and continuous time Signals and Systems in time and frequency domain using MATLAB:\\^\\:P4', 2, 'set1:\\^\\:4:\\^\\:Realization of Experiment:\\^\\:Computer Use:\\^\\:Conducting Experiment:\\^\\:Data Analysis:\\^\\:set_ee2201l_Spring_2020_2:\\^\\:Rubric Set 2:\\^\\:3:\\^\\:5:\\^\\:Team Work:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform:\\^\\:Realization of Experiment:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform:\\^\\:Data Collection:\\^\\:Outstanding performance/analysis/results:\\^\\:Produced accurate results/analysis:\\^\\:Produced acceptable results/analysis:\\^\\:Produced results/analysis with some errors:\\^\\:Did not perform', '5', '', '', '', '', 'CLO1:\\^\\:1.0', '', '', '', '', '', '', ''),
(22, 'ee2106l_Fall_2020', 'EE-2106L', 'Computer Aided Engineering Drawing', 'Fall 2020', 0, '1', 'LAB', 'Mr. Osama Majeed Butt', 'osama:\\^\\:admin', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, 'CLO1:\\^\\:CLO Description goes here:\\^\\::\\^\\:CLO2:\\^\\:CLO Description goes here:\\^\\::\\^\\:CLO3:\\^\\:CLO Description goes here:\\^\\:', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs1201l_Spring_2018`
--

CREATE TABLE `cs1201l_Spring_2018` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cs1201l_Spring_2018`
--

INSERT INTO `cs1201l_Spring_2018` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`) VALUES
(1, 'Instrument', 'Midterm', 'Midterm', 'Midterm', 'Final', 'Final', 'Final', 'Quiz', 'Quiz', 'Quiz', 'Quiz', 'Assignment'),
(2, 'Question', '1', '2', '3', '1', '2', '3', '1', '2', '3', '4', '1'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '10', '10', '15', '10', '10', '20', '5', '5', '5', '5', '5'),
(5, 'CLO', '1', '2', '3', '3', '4', '5', '1', '2', '3', '4', '5'),
(6, 'Date', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'cep', '', '', '', '', '', '', '0', '0', '0', '0', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'RP-17-EE-400', '8', '8', '8', '6', '6', '10', '5', '5', '5', '5', '2'),
(16, 'RP-17-EE-401', '8', '8', '10', '8', '8', '16', '5', '5', '4', '4', '3'),
(17, 'RP-17-EE-402', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 'RP-17-EE-403', '9', '9', '10', '9', '9', '18', '5', '5', '5', '3', '3'),
(19, 'RP-17-EE-404', '7', '7', '4', '6', '5', '5', '4', '4', '4', '2', '4'),
(20, 'RP-17-EE-405', '10', '10', '10', '10', '10', '10', '4', '4', '4', '5', '4'),
(21, 'RP-17-EE-406', '8', '8', '10', '9', '9', '16', '4', '4', '4', '5', '4'),
(22, 'RP-17-EE-407', '9', '9', '10', '7', '7', '2', '4', '5', '4', '4', '4'),
(23, 'RP-17-EE-408', '8', '8', '9', '8', '4', '8', '4', '4', '4', '4', '4'),
(24, 'RP-17-EE-409', '9', '7', '5', '9', '9', '14', '5', '5', '4', '4', '4'),
(25, 'RP-17-EE-410', '4', '4', '6', '6', '5', '5', '4', '4', '4', '4', '4'),
(26, 'RP-17-EE-411', '9', '9', '10', '9', '9', '14', '4', '4', '5', '5', '3'),
(27, 'RP-17-EE-412', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 'RP-17-EE-413', '8', '8', '10', '8', '8', '12', '4', '4', '4', '4', '4'),
(29, 'RP-17-EE-414', '8', '8', '10', '8', '8', '4', '4', '4', '4', '4', '4'),
(30, 'RP-17-EE-415', '7', '2', '5', '6', '6', '4', '4', '4', '4', '4', '4'),
(31, 'RP-17-EE-416', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 'RP-17-EE-417', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(33, 'RP-17-EE-418', '9', '9', '12', '8', '8', '4', '4', '4', '4', '4', '4'),
(34, 'RP-17-EE-419', '9', '7', '5', '8', '8', '4', '4', '4', '4', '4', '4'),
(35, 'RP-17-EE-420', '9', '4', '5', '8', '8', '10', '4', '4', '4', '4', '4'),
(36, 'RP-17-EE-421', '8', '8', '8', '6', '6', '6', '4', '4', '4', '4', '4'),
(37, 'RP-17-EE-422', '5', '5', '8', '0', '0', '0', '5', '5', '0', '0', '0'),
(38, 'RP-17-EE-423', '8', '8', '9', '8', '8', '4', '4', '4', '4', '4', '4'),
(39, 'RP-17-EE-424', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(40, 'RP-17-EE-425', '8', '8', '10', '8', '8', '10', '5', '5', '4', '4', '3'),
(41, 'RP-17-EE-426', '9', '9', '12', '9', '9', '14', '5', '5', '5', '5', '3'),
(42, 'RP-17-EE-427', '5', '5', '6', '6', '4', '6', '4', '4', '5', '3', '2'),
(43, 'RP-17-EE-428', '4', '8', '2', '4', '4', '4', '3', '3', '3', '3', '3'),
(44, 'RP-17-EE-429', '4', '4', '3', '4', '4', '4', '3', '3', '3', '3', '3'),
(45, 'RP-17-EE-430', '3', '3', '5', '4', '4', '4', '3', '3', '3', '3', '3'),
(46, 'RP-17-EE-431', '10', '10', '8', '10', '9', '15', '5', '5', '4', '5', '4'),
(47, 'RP-17-EE-432', '5', '5', '6', '10', '5', '5', '4', '4', '4', '3', '3'),
(48, 'RP-17-EE-433', '7', '10', '9', '8', '8', '8', '5', '5', '3', '3', '4'),
(49, 'RP-17-EE-434', '9', '8', '8', '5', '5', '6', '3', '4', '3', '5', '5'),
(50, 'RP-17-EE-435', '5', '5', '4', '7', '8', '9', '3', '5', '4', '3', '3'),
(51, 'RP-17-EE-436', '8', '8', '9', '5', '5', '10', '4', '4', '4', '4', '4'),
(52, 'RP-17-EE-437', '9', '6', '6', '4', '5', '5', '4', '4', '4', '3', '3'),
(53, 'RP-17-EE-438', '9', '10', '7', '8', '8', '8', '4', '4', '4', '4', '4'),
(54, 'RP-17-EE-439', '7', '7', '7', '0', '0', '0', '2', '2', '2', '3', '1'),
(55, 'RP-17-EE-440', '2', '2', '3', '0', '0', '0', '2', '2', '2', '2', '2'),
(56, 'RP-17-EE-441', '6', '5', '5', '4', '4', '4', '3', '3', '3', '3', '3'),
(57, 'RP-17-EE-442', '4', '5', '5', '4', '3', '5', '4', '2', '3', '3', '3'),
(58, 'RP-17-EE-443', '10', '10', '5', '3', '3', '4', '3', '3', '3', '3', '3'),
(59, 'RP-17-EE-444', '0', '0', '0', '4', '2', '2', '2', '2', '2', '2', '2'),
(60, 'RP-17-EE-445', '3', '2', '2', '2', '2', '4', '2', '2', '2', '3', '1'),
(61, 'KKRP-17-EE-446', '5', '5', '6', '3', '3', '4', '3', '3', '3', '4', '2'),
(62, 'KKRP-17-EE-447', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(63, 'KKRP-17-EE-448', '1', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0'),
(64, 'KKRP-17-EE-449', '1', '2', '1', '5', '5', '4', '3', '3', '3', '3', '3'),
(65, 'KKRP-17-EE-450', '8', '5', '5', '4', '4', '4', '3', '3', '3', '3', '3'),
(66, 'KKRP-17-EE-451', '4', '5', '5', '5', '5', '6', '4', '4', '4', '4', '4'),
(67, 'KKRP-17-EE-452', '4', '5', '5', '3', '3', '4', '3', '3', '3', '3', '3'),
(68, 'KKRP-17-EE-453', '5', '5', '6', '8', '8', '8', '3', '4', '3', '4', '4'),
(69, 'KKRP-17-EE-454', '4', '5', '5', '3', '3', '4', '3', '3', '3', '4', '2'),
(70, 'KKRP-17-EE-455', '3', '4', '4', '5', '5', '6', '3', '3', '3', '3', '3'),
(71, 'KKRP-17-EE-456', '4', '5', '5', '6', '6', '8', '4', '3', '3', '4', '4'),
(72, 'KKRP-17-EE-457', '3', '2', '2', '5', '5', '6', '3', '3', '3', '3', '3'),
(73, 'KKRP-17-EE-458', '6', '7', '6', '9', '9', '10', '4', '4', '4', '4', '4'),
(74, 'KKRP-17-EE-459', '0', '0', '0', '2', '3', '3', '2', '2', '2', '2', '2'),
(75, 'KKRP-17-EE-460', '0', '0', '0', '0', '0', '0', '2', '2', '2', '2', '2'),
(76, 'KKRP-17-EE-461', '4', '4', '6', '3', '3', '4', '3', '3', '3', '3', '3'),
(77, 'KKRP-17-EE-462', '1', '1', '1', '7', '8', '9', '3', '3', '3', '3', '3'),
(78, 'KKRP-17-EE-463', '0', '0', '0', '2', '3', '3', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `cs1201_Spring_2018`
--

CREATE TABLE `cs1201_Spring_2018` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cs1201_Spring_2018`
--

INSERT INTO `cs1201_Spring_2018` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`) VALUES
(1, 'Instrument', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Final', 'Final', 'Final', 'Final', 'Quiz', 'Quiz', 'Quiz', 'Quiz', 'Assignment'),
(2, 'Question', '1', '2', '3', '4', '5', '1', '2', '3', '4', '1', '2', '3', '4', '1'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '10', '7', '6', '6', '6', '10', '10', '10', '10', '5', '5', '5', '5', '5'),
(5, 'CLO', '1', '1', '2', '2', '3', '3', '3', '4', '5', '1', '2', '3', '4', '5'),
(6, 'Date', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'cep', '', '', '', '', '', '', '', '', '', '0', '', '0', '0', ''),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'RP-17-EE-400', '7', '4.5', '3', '3.5', '5.5', '8', '8', '8', '6.5', '5', '5', '5', '4', '2'),
(16, 'RP-17-EE-401', '5', '6', '2', '4.5', '3', '8', '8', '8', '7.9', '5', '5', '4', '4', '2'),
(17, 'RP-17-EE-402', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 'RP-17-EE-403', '4', '2', '5', '4.5', '8.5', '8', '8', '8', '7.9', '5', '5', '5', '3', '3'),
(19, 'RP-17-EE-404', '3', '4.5', '4', '4', '2.5', '7', '7', '7', '7.8', '4', '4', '4', '5', '4'),
(20, 'RP-17-EE-405', '5', '5.5', '3.5', '4.5', '4', '8', '8', '8', '9.68', '4', '4', '4', '5', '4'),
(21, 'RP-17-EE-406', '6', '5.5', '5.5', '5.5', '5', '8', '8', '8', '8.9', '4', '4', '4', '5', '4'),
(22, 'RP-17-EE-407', '4', '3', '4', '3', '4.5', '8', '8', '8', '3', '4', '4', '4', '4', '4'),
(23, 'RP-17-EE-408', '4', '2', '3', '4', '3.5', '6', '6', '7', '3.5', '5', '5', '4.5', '4', '4'),
(24, 'RP-17-EE-409', '3', '5.5', '1.5', '4', '3', '7', '7', '7', '7', '4', '4', '4', '4', '4'),
(25, 'RP-17-EE-410', '3', '2', '2.5', '5', '3', '4', '4', '4', '5', '4', '4', '4', '4', '4'),
(26, 'RP-17-EE-411', '9', '6.5', '4.5', '5', '5', '8', '8', '8', '6', '5', '5', '5', '5', '3'),
(27, 'RP-17-EE-412', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 'RP-17-EE-413', '5', '3.5', '4.5', '5', '0.5', '8', '8', '4', '7', '5.5', '5', '4', '4', '4'),
(29, 'RP-17-EE-414', '0', '0', '0', '0', '0', '6', '4', '8', '4.4', '0', '0', '0', '0', '0'),
(30, 'RP-17-EE-415', '4', '2', '2', '3.5', '4', '4', '4', '5', '4', '4', '4', '4', '4', '4'),
(31, 'RP-17-EE-416', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 'RP-17-EE-417', '6', '6.5', '0', '3', '3', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(33, 'RP-17-EE-418', '5', '6', '4.5', '5.5', '3.5', '7', '7', '7', '7', '4', '5', '5', '4', '4'),
(34, 'RP-17-EE-419', '5', '4.5', '3.5', '4', '2', '6', '6', '6', '6.5', '5', '5', '5', '4', '4'),
(35, 'RP-17-EE-420', '3', '6.5', '3', '0', '4', '6', '4', '4', '3.8', '3', '4', '4', '4', '4'),
(36, 'RP-17-EE-421', '5', '6', '3', '4.5', '4.5', '8', '8', '8', '6.5', '5', '4', '4', '4', '4'),
(37, 'RP-17-EE-422', '3', '1', '2', '3.5', '2', '6', '6', '6', '6.9', '4', '4', '4', '4', '4'),
(38, 'RP-17-EE-423', '3', '4', '4', '5', '2', '4', '5', '6', '7.4', '4', '4', '4', '4', '4'),
(39, 'RP-17-EE-424', '3', '0', '0', '1', '1', '0', '0', '0', '0.7', '2', '2', '2', '2', '2'),
(40, 'RP-17-EE-425', '5', '4', '2.5', '4', '5', '7', '7', '8', '8.5', '5', '5', '6', '5', '5'),
(41, 'RP-17-EE-426', '5', '7', '5', '5', '4.5', '7', '7', '7', '7.8', '5', '4', '4', '4', '4'),
(42, 'RP-17-EE-427', '4', '1.5', '1.5', '3.5', '1', '6', '6', '4', '5.4', '4', '4', '4', '4', '4'),
(43, 'RP-17-EE-428', '3', '3', '1.5', '3', '3', '4', '4', '4', '5.8', '4', '4', '4', '4', '5'),
(44, 'RP-17-EE-429', '4', '1.5', '0', '5', '3', '3', '4', '4', '4.4', '4', '4', '4', '4', '5'),
(45, 'RP-17-EE-430', '6', '2', '3', '4', '2', '4', '6', '8', '4', '5', '4', '4', '4', '4'),
(46, 'RP-17-EE-431', '7', '3', '6', '5', '5', '7', '7', '7', '6', '5', '4', '4', '4', '4'),
(47, 'RP-17-EE-432', '4', '3.5', '3', '5.5', '3.5', '6', '6', '6', '5', '4', '4', '4', '4', '4'),
(48, 'RP-17-EE-433', '6', '4', '1', '3', '2.5', '7', '7', '7', '6', '5', '4', '4', '4', '4'),
(49, 'RP-17-EE-434', '4', '2', '1', '2.5', '4', '5', '5', '8', '7.2', '5', '4', '4', '4', '4'),
(50, 'RP-17-EE-435', '2', '2', '2', '4.5', '4', '7', '7', '7', '6', '4', '4', '4', '4', '4'),
(51, 'RP-17-EE-436', '2', '4', '1.5', '3.5', '5', '7', '7', '7', '6', '5', '4', '4', '4', '4'),
(52, 'RP-17-EE-437', '3', '3.5', '0', '2.5', '1.5', '4', '4', '5', '4', '5', '5', '4', '4', '4'),
(53, 'RP-17-EE-438', '5', '2', '4', '3', '4', '7', '7', '7', '7.7', '4', '4', '4', '5', '4'),
(54, 'RP-17-EE-439', '4', '2', '2', '3', '2', '4', '4', '2', '3.6', '5', '4', '4', '4', '4'),
(55, 'RP-17-EE-440', '2', '1', '0', '0', '2', '2', '2', '2', '1.3', '3', '3', '3', '3', '3'),
(56, 'RP-17-EE-441', '3', '1', '2', '3', '4', '5', '5', '5', '5.7', '4', '4', '4', '4', '4'),
(57, 'RP-17-EE-442', '5', '1.5', '2.5', '2.5', '2', '3', '3', '3', '3.6', '5', '5', '5', '4', '4.5'),
(58, 'RP-17-EE-443', '2', '1', '0', '0', '1', '3', '3', '3', '3.2', '4', '4', '4', '4', '2'),
(59, 'RP-17-EE-444', '2', '0', '0', '1', '3', '3', '3', '2', '1.4', '5', '4', '4', '4', '4'),
(60, 'RP-17-EE-445', '5', '0', '1.5', '0', '2', '2', '2', '2', '2.7', '4', '4', '2', '4', '2'),
(61, 'KKRP-17-EE-446', '3', '3', '3', '1', '2', '8', '7', '5', '5.2', '4', '4', '3', '4', '3'),
(62, 'KKRP-17-EE-447', '4', '0', '3.5', '1.5', '1', '2', '2', '2', '2', '3', '3', '3', '3', '3'),
(63, 'KKRP-17-EE-448', '1', '0', '0', '0', '2.5', '2', '4', '6', '3', '4', '4', '2', '4', '2'),
(64, 'KKRP-17-EE-449', '4', '1.5', '1', '1', '3.5', '3', '4.6', '3', '3', '5', '4', '4', '4', '4'),
(65, 'KKRP-17-EE-450', '6', '2', '3', '4', '3', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
(66, 'KKRP-17-EE-451', '2', '1.5', '0', '1', '0', '4', '5.7', '4', '4', '4', '4', '2', '4', '4'),
(67, 'KKRP-17-EE-452', '3', '2.5', '1.5', '0', '1', '4', '4', '4.8', '4', '4', '4', '4', '3', '4'),
(68, 'KKRP-17-EE-453', '4', '2.5', '4', '4', '4', '5', '5', '6.75', '5', '4', '4', '4', '4', '4'),
(69, 'KKRP-17-EE-454', '4', '1', '1', '2.5', '3.5', '6', '6', '5', '6', '4', '4', '4', '4', '4'),
(70, 'KKRP-17-EE-455', '1', '2.5', '0', '2.5', '2', '2', '4.5', '2', '2', '4', '4', '2', '4', '4'),
(71, 'KKRP-17-EE-456', '4', '2', '2', '4', '2', '5', '4.9', '5', '5', '4', '4', '4', '4', '4'),
(72, 'KKRP-17-EE-457', '2', '2', '1', '1', '1.5', '5', '4.2', '5', '5', '5', '5', '5', '5', '2.5'),
(73, 'KKRP-17-EE-458', '5', '3.5', '3', '4', '4.5', '6', '6.9', '6', '6', '4', '4', '5', '4', '4'),
(74, 'KKRP-17-EE-459', '4', '2', '0', '0', '1', '2', '2', '3.8', '2', '4', '3', '2', '3', '4'),
(75, 'KKRP-17-EE-460', '4', '0', '0', '2.5', '2', '3.9', '3', '3', '3', '4', '4', '4', '3', '4'),
(76, 'KKRP-17-EE-461', '3', '1', '0', '4', '1', '4', '2.5', '2', '2', '4', '4', '4', '3', '4'),
(77, 'KKRP-17-EE-462', '4', '0', '0', '4', '1', '3', '4.7', '3', '3', '4', '4', '4', '4', '5'),
(78, 'KKRP-17-EE-463', '4', '2', '1', '0', '1', '4.5', '2', '2', '2', '3', '3', '3', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ee1202l_Spring_2018`
--

CREATE TABLE `ee1202l_Spring_2018` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I15` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I16` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I17` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I18` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I19` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I20` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I21` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I22` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I23` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I24` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee1202l_Spring_2018`
--

INSERT INTO `ee1202l_Spring_2018` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`, `I16`, `I17`, `I18`, `I19`, `I20`, `I21`, `I22`, `I23`, `I24`) VALUES
(1, 'Instrument', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Other', 'Other', 'Other', 'Other'),
(2, 'Question', '1', '2', '3', '4', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '1', '2', '3', '4'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '11', '9', '10', '5', '1', '1', '4', '1', '1', '4', '4', '1', '1', '1', '1', '2', '1', '1', '6', '10', '10', '10', '2.5', '2.5'),
(5, 'CLO', '1', '2', '4', '2', '3', '3', '3', '3', '3', '3', '3', '1', '3', '1', '3', '4', '4', '4', '3', '3', '2', '2', '3', '3'),
(6, 'Date', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'cep', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'RP-17-EE-400', '6', '3', '8', '5', '0', '1', '2', '1', '0', '4', '1', '1', '1', '1', '0', '1', '0', '1', '4', '9', '8', '8', '2.5', '2'),
(16, 'RP-17-EE-401', '9', '2', '8', '5', '1', '1', '4', '0', '1', '3', '4', '1', '1', '0', '0', '0', '1', '1', '6', '9', '9', '9', '2.5', '2'),
(17, 'RP-17-EE-402', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 'RP-17-EE-403', '6', '3', '5', '5', '1', '0', '4', '0', '0', '3', '3', '1', '0', '0', '1', '0', '1', '1', '4', '9', '5', '5', '2.5', '1.25'),
(19, 'RP-17-EE-404', '10', '6', '8', '5', '1', '0', '2', '0', '1', '4', '1', '1', '1', '1', '1', '1', '1', '1', '2', '9', '8', '8', '2.5', '2'),
(20, 'RP-17-EE-405', '5', '4', '10', '5', '0', '0', '4', '0', '1', '4', '4', '1', '1', '1', '1', '0', '0', '1', '6', '9', '9', '9', '2.5', '2.25'),
(21, 'RP-17-EE-406', '8', '6.5', '10', '5', '1', '1', '4', '1', '1', '3', '4', '1', '1', '0', '1', '2', '1', '1', '6', '9', '8', '9', '2.5', '2.25'),
(22, 'RP-17-EE-407', '4', '2', '9', '5', '1', '1', '4', '0', '1', '2', '3', '0', '0', '0', '1', '1', '0', '1', '4', '9', '9', '9', '2.5', '2.25'),
(23, 'RP-17-EE-408', '8', '2', '1', '5', '1', '0', '2', '0', '1', '2', '1', '1', '0', '1', '1', '0', '0', '1', '4', '9', '8', '8', '2.5', '2'),
(24, 'RP-17-EE-409', '5', '1', '6', '5', '1', '0', '2', '1', '1', '3', '1', '1', '0', '1', '0', '0', '1', '1', '4', '9', '6', '7', '2.5', '2.5'),
(25, 'RP-17-EE-410', '6', '1', '7', '5', '1', '1', '2', '0', '1', '3', '1', '1', '1', '0', '1', '1', '0', '1', '4', '9', '6', '6', '2.5', '1.5'),
(26, 'RP-17-EE-411', '9', '5', '9', '5', '1', '1', '4', '0', '1', '4', '4', '1', '0', '1', '1', '0', '1', '1', '5', '9', '9', '9', '2.5', '2.25'),
(27, 'RP-17-EE-412', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 'RP-17-EE-413', '6', '1', '1', '5', '1', '0', '2', '1', '1', '4', '3', '0', '1', '1', '1', '1', '1', '1', '3', '9', '6', '6', '2.5', '1'),
(29, 'RP-17-EE-414', '10', '8', '7', '5', '0', '0', '2', '0', '1', '4', '4', '1', '1', '1', '1', '1', '0', '1', '6', '9', '7', '7', '2.5', '1.75'),
(30, 'RP-17-EE-415', '5', '1', '5', '5', '0', '1', '2', '0', '1', '4', '1', '0', '1', '1', '1', '2', '1', '1', '5', '9', '6', '5', '2.5', '1.25'),
(31, 'RP-17-EE-416', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 'RP-17-EE-417', '3', '0', '1', '5', '0', '0', '2', '0', '0', '2', '1', '0', '0', '0', '0', '0', '0', '1', '2', '0', '0', '0', '2.5', '0'),
(33, 'RP-17-EE-418', '10', '2', '5', '5', '0', '1', '2', '0', '1', '4', '1', '1', '1', '0', '0', '2', '0', '1', '5', '9', '6', '5', '2.5', '1.25'),
(34, 'RP-17-EE-419', '7', '2', '6', '5', '0', '1', '4', '0', '1', '4', '4', '1', '0', '1', '1', '2', '1', '1', '5', '9', '6', '6', '2.5', '1.5'),
(35, 'RP-17-EE-420', '6', '2', '7', '5', '0', '0', '2', '0', '0', '4', '1', '1', '0', '1', '1', '1', '0', '1', '4', '9', '7', '7', '2.5', '1.75'),
(36, 'RP-17-EE-421', '9', '3', '6', '5', '0', '0', '2', '0', '1', '4', '1', '0', '1', '1', '1', '1', '1', '1', '5', '9', '6', '6', '2.5', '1.5'),
(37, 'RP-17-EE-422', '5', '0', '6', '5', '1', '1', '2', '0', '1', '3', '1', '1', '0', '0', '1', '2', '0', '1', '6', '9', '6', '6', '2.5', '1.5'),
(38, 'RP-17-EE-423', '7', '1', '6', '5', '1', '0', '2', '0', '1', '2', '1', '1', '0', '0', '1', '2', '0', '1', '6', '9', '6', '5', '2.5', '1.25'),
(39, 'RP-17-EE-424', '4', '0', '9', '5', '0', '0', '2', '0', '1', '3', '1', '1', '1', '0', '0', '2', '1', '1', '4', '9', '7', '7', '2.5', '1.75'),
(40, 'RP-17-EE-425', '8', '3', '10', '5', '0', '0', '2', '1', '1', '2', '4', '1', '1', '0', '0', '0', '0', '1', '6', '9', '8', '8', '2.5', '2'),
(41, 'RP-17-EE-426', '7', '1', '10', '5', '0', '0', '4', '0', '1', '4', '3', '1', '0', '1', '1', '2', '1', '1', '6', '9', '9', '9', '2.5', '2.25'),
(42, 'RP-17-EE-427', '8', '5', '9', '5', '1', '0', '2', '0', '1', '3', '1', '1', '1', '1', '0', '1', '1', '1', '3', '9', '8', '9', '2.5', '2'),
(43, 'RP-17-EE-428', '6', '0', '8', '5', '1', '1', '2', '0', '1', '3', '1', '1', '0', '0', '1', '2', '0', '1', '5', '9', '7', '7', '2.5', '1.5'),
(44, 'RP-17-EE-429', '8', '1', '6', '5', '1', '1', '2', '0', '1', '3', '1', '1', '1', '0', '1', '1', '0', '1', '4', '9', '5', '5', '2.5', '1.25'),
(45, 'RP-17-EE-430', '5', '2', '5', '5', '0', '0', '2', '0', '0', '3', '1', '0', '0', '0', '1', '1', '1', '1', '6', '9', '6', '6', '2.5', '2'),
(46, 'RP-17-EE-431', '6', '3', '9', '5', '1', '1', '2', '0', '0', '2', '1', '1', '1', '1', '1', '1', '0', '1', '5', '9', '8', '8', '2.5', '2'),
(47, 'RP-17-EE-432', '6', '1', '7', '5', '0', '0', '2', '0', '1', '3', '1', '1', '0', '0', '0', '2', '0', '1', '4', '9', '6', '6', '2.5', '1.5'),
(48, 'RP-17-EE-433', '7', '2', '9', '5', '0', '0', '2', '0', '1', '2', '1', '1', '0', '1', '0', '1', '0', '1', '4', '9', '9', '10', '2.5', '2.25'),
(49, 'RP-17-EE-434', '7', '0', '9', '5', '0', '1', '2', '1', '0', '2', '1', '0', '0', '1', '0', '2', '0', '1', '6', '9', '7', '7', '2.5', '1.75'),
(50, 'RP-17-EE-435', '11', '0', '6', '5', '1', '0', '2', '0', '1', '2', '4', '0', '1', '1', '1', '2', '0', '1', '3', '9', '5', '6', '2.5', '1.25'),
(51, 'RP-17-EE-436', '7', '2', '6', '5', '0', '1', '2', '1', '1', '4', '1', '1', '1', '0', '1', '1', '1', '1', '5', '9', '6', '6', '2.5', '1.5'),
(52, 'RP-17-EE-437', '7', '0', '7', '5', '0', '0', '2', '0', '0', '4', '1', '1', '0', '1', '1', '2', '1', '1', '6', '9', '7', '7', '2.5', '1.75'),
(53, 'RP-17-EE-438', '6', '3', '5', '5', '0', '1', '2', '1', '0', '4', '1', '0', '1', '1', '0', '1', '0', '1', '5', '9', '6', '5', '2.5', '1.25'),
(54, 'RP-17-EE-439', '2', '1', '8', '5', '1', '0', '2', '0', '0', '2', '1', '1', '0', '0', '0', '0', '0', '1', '3', '9', '9', '9', '2.5', '2.5'),
(55, 'RP-17-EE-440', '7', '1', '5', '5', '1', '0', '2', '0', '0', '2', '1', '1', '1', '1', '0', '1', '0', '1', '2', '9', '8', '8', '2.5', '2.5'),
(56, 'RP-17-EE-441', '5', '1', '6', '5', '0', '1', '2', '1', '1', '2', '1', '0', '0', '0', '0', '1', '0', '1', '2', '9', '8', '8', '2.5', '2.5'),
(57, 'RP-17-EE-442', '4', '1', '6', '5', '0', '0', '2', '0', '1', '2', '1', '1', '0', '1', '0', '0', '0', '1', '3', '9', '9', '8', '2.5', '2.5'),
(58, 'RP-17-EE-443', '5', '2', '5', '5', '0', '1', '2', '0', '1', '3', '1', '1', '0', '0', '1', '1', '0', '1', '5', '9', '7', '7', '2.5', '1.5'),
(59, 'RP-17-EE-444', '3', '2', '7', '5', '0', '0', '2', '0', '0', '2', '1', '1', '0', '0', '0', '1', '0', '1', '5', '9', '9', '8', '2.5', '2.5'),
(60, 'RP-17-EE-445', '6', '1', '5', '5', '0', '1', '2', '0', '0', '3', '1', '1', '0', '0', '0', '0', '0', '1', '3', '9', '8', '8', '2.5', '2.5'),
(61, 'KKRP-17-EE-446', '6', '3', '7', '5', '0', '1', '2', '0', '1', '3', '4', '1', '1', '0', '1', '1', '0', '1', '4', '9', '6', '6', '2.5', '1.5'),
(62, 'KKRP-17-EE-447', '4', '0', '5', '5', '0', '0', '2', '0', '1', '2', '1', '1', '1', '0', '1', '1', '0', '1', '5', '9', '8', '9', '2.5', '2'),
(63, 'KKRP-17-EE-448', '4', '0', '7', '5', '1', '1', '2', '0', '1', '2', '1', '1', '1', '0', '1', '1', '0', '1', '4', '9', '7', '8', '2.5', '1.75'),
(64, 'KKRP-17-EE-449', '7', '1', '1', '5', '1', '1', '2', '0', '1', '4', '3', '1', '0', '0', '1', '1', '0', '1', '4', '9', '8', '9', '2.5', '2.5'),
(65, 'KKRP-17-EE-450', '5', '0', '4', '5', '1', '1', '2', '1', '1', '3', '1', '1', '0', '1', '1', '1', '1', '1', '2', '9', '8', '8', '2.5', '2'),
(66, 'KKRP-17-EE-451', '5', '1', '5', '5', '1', '1', '2', '0', '1', '2', '1', '1', '0', '1', '1', '1', '0', '1', '3', '9', '8', '8', '2.5', '1'),
(67, 'KKRP-17-EE-452', '6', '1', '4', '5', '1', '0', '2', '0', '1', '2', '1', '1', '1', '0', '1', '0', '0', '1', '4', '9', '8', '8', '2.5', '2'),
(68, 'KKRP-17-EE-453', '7', '4', '8', '5', '1', '0', '2', '0', '1', '2', '4', '1', '1', '0', '1', '1', '0', '1', '6', '9', '8', '8', '2.5', '2'),
(69, 'KKRP-17-EE-454', '8', '2', '7', '5', '1', '0', '2', '0', '0', '2', '1', '1', '1', '0', '1', '0', '0', '1', '5', '9', '6', '6', '2.5', '1.5'),
(70, 'KKRP-17-EE-455', '5', '0', '8.5', '5', '1', '0', '2', '0', '1', '2', '1', '1', '1', '0', '1', '1', '0', '1', '5', '9', '8', '8', '2.5', '2'),
(71, 'KKRP-17-EE-456', '7', '1', '8', '5', '1', '1', '2', '0', '1', '2', '1', '1', '0', '0', '1', '1', '0', '1', '3', '9', '8', '8', '2.5', '2'),
(72, 'KKRP-17-EE-457', '6', '1', '7', '5', '1', '1', '2', '0', '1', '2', '1', '1', '0', '0', '1', '0', '1', '1', '3', '9', '7', '7', '2.5', '1.5'),
(73, 'KKRP-17-EE-458', '8', '3', '7', '5', '1', '1', '2', '0', '1', '2', '4', '1', '0', '0', '1', '0', '1', '1', '4', '9', '6', '6', '2.5', '1.5'),
(74, 'KKRP-17-EE-459', '4', '0', '7', '5', '1', '0', '2', '0', '0', '3', '1', '1', '1', '0', '1', '0', '0', '1', '2', '9', '9', '9', '2.5', '2.5'),
(75, 'KKRP-17-EE-460', '5', '2', '6', '5', '1', '0', '2', '0', '1', '2', '1', '1', '0', '1', '0', '1', '0', '1', '2', '9', '7', '7', '2.5', '2'),
(76, 'KKRP-17-EE-461', '5', '1', '4', '5', '1', '0', '2', '0', '0', '4', '1', '1', '0', '1', '0', '1', '0', '1', '3', '9', '9', '8', '2.5', '2'),
(77, 'KKRP-17-EE-462', '7', '2', '5', '5', '1', '0', '2', '0', '0', '2', '3', '1', '1', '0', '0', '1', '0', '1', '3', '9', '7', '6', '2.5', '2'),
(78, 'KKRP-17-EE-463', '4', '1', '7', '5', '0', '0', '2', '0', '0', '2', '1', '1', '0', '0', '1', '1', '0', '1', '5', '9', '7', '7', '2.5', '2');

-- --------------------------------------------------------

--
-- Table structure for table `ee1202_Spring_2018`
--

CREATE TABLE `ee1202_Spring_2018` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee1202_Spring_2018`
--

INSERT INTO `ee1202_Spring_2018` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`) VALUES
(1, 'Instrument', 'Midterm', 'Midterm', 'Midterm', 'Final', 'Final', 'Final', 'Final', 'Final', 'Other', 'Other', 'Assignment', 'Assignment', 'Assignment'),
(2, 'Question', '1', '2', '3', '1', '2', '3', '4', '5', '1', '2', '1', '2', '3'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '10', '16', '9', '8', '5', '5', '14', '8', '5', '5', '5', '5', '5'),
(5, 'CLO', '2', '1', '1', '1', '3', '3', '3', '1', '2', '4', '2', '4', '4'),
(6, 'Date', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'cep', '', '', '', '', '', '', '', '', '0', '0', '', '0', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'RP-17-EE-400', '10', '12.3', '8.5', '3', '4.5', '2.75', '14', '7.5', '5', '4', '5', '5', '5'),
(16, 'RP-17-EE-401', '10', '12.75', '9', '8', '5', '3', '14', '8', '5', '4', '5', '5', '5'),
(17, 'RP-17-EE-402', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 'RP-17-EE-403', '5.5', '14', '9', '7', '4', '2.5', '13.5', '6.5', '5', '4', '5', '5', '5'),
(19, 'RP-17-EE-404', '6', '16', '8.5', '8', '4.5', '2', '10', '7.75', '5', '4', '5', '5', '5'),
(20, 'RP-17-EE-405', '9', '13.5', '6', '4.5', '1.5', '3', '6', '7.5', '5', '4', '5', '5', '5'),
(21, 'RP-17-EE-406', '6', '16', '9', '8', '3.5', '2', '11', '8', '5', '4', '5', '5', '5'),
(22, 'RP-17-EE-407', '6.5', '7', '6', '6.5', '5', '4.25', '10', '5.75', '5', '4', '5', '5', '5'),
(23, 'RP-17-EE-408', '10', '12.5', '8.5', '3.5', '3', '0', '7', '5', '5', '4', '5', '5', '5'),
(24, 'RP-17-EE-409', '5', '9.25', '5.25', '8', '2.5', '2', '2', '7.5', '5', '4', '5', '5', '5'),
(25, 'RP-17-EE-410', '4', '8', '7', '7', '5', '1.5', '8.5', '5.5', '5', '4', '5', '5', '5'),
(26, 'RP-17-EE-411', '7.5', '14', '8', '7', '5', '2.5', '11', '2.5', '5', '4', '5', '5', '5'),
(27, 'RP-17-EE-412', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 'RP-17-EE-413', '2', '9', '5.5', '3.5', '3', '2.5', '8', '5', '5', '4', '5', '5', '5'),
(29, 'RP-17-EE-414', '6', '13', '8', '8', '4', '4', '11.5', '5.5', '5', '4', '5', '5', '5'),
(30, 'RP-17-EE-415', '6', '11.5', '8.5', '7', '4.5', '2.75', '6', '4.5', '5', '4.2', '5', '5', '5'),
(31, 'RP-17-EE-416', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 'RP-17-EE-417', '1', '0', '0', '0', '0', '0', '0', '0', '5', '4', '5', '5', '5'),
(33, 'RP-17-EE-418', '5.5', '12.5', '9', '8', '4.5', '2.5', '10.5', '8', '5', '4.5', '5', '5', '5'),
(34, 'RP-17-EE-419', '9.5', '7.5', '8', '8', '4', '2.5', '6.5', '7.5', '5', '4', '5', '5', '5'),
(35, 'RP-17-EE-420', '4', '9.5', '8', '8', '4', '2.5', '10.5', '5.75', '5', '4', '5', '5', '5'),
(36, 'RP-17-EE-421', '6', '12', '9', '8', '2.5', '3', '8', '7.5', '5', '4', '5', '5', '5'),
(37, 'RP-17-EE-422', '8', '14.5', '7.5', '8', '1.5', '2', '13', '5.5', '5', '4', '5', '5', '5'),
(38, 'RP-17-EE-423', '5', '12', '4', '8', '1.5', '1', '7.5', '6.25', '5', '4.7', '5', '5', '5'),
(39, 'RP-17-EE-424', '3.5', '14', '5', '8', '5', '1.25', '7.5', '4.25', '5', '4', '5', '5', '5'),
(40, 'RP-17-EE-425', '10', '15', '7', '4.5', '5', '5', '14', '7.5', '5', '4', '5', '5', '5'),
(41, 'RP-17-EE-426', '7', '14', '9', '7', '2.5', '5', '11', '5', '5', '4.5', '5', '5', '5'),
(42, 'RP-17-EE-427', '3.5', '10', '6.5', '8', '2.5', '2', '14', '7', '5', '4', '5', '5', '5'),
(43, 'RP-17-EE-428', '0', '11.5', '7', '7', '2', '0', '6.5', '5', '5', '4', '5', '5', '5'),
(44, 'RP-17-EE-429', '0', '10', '0', '8', '3', '2.5', '8', '5', '5', '4.5', '5', '5', '5'),
(45, 'RP-17-EE-430', '8', '12.25', '8', '7', '3.5', '1', '12', '5', '5', '4', '5', '5', '5'),
(46, 'RP-17-EE-431', '10', '14', '9', '0.5', '5', '4', '3', '5', '5', '4.5', '5', '5', '5'),
(47, 'RP-17-EE-432', '4.5', '9.5', '9', '7.5', '2', '3', '4', '7.5', '5', '4', '5', '5', '5'),
(48, 'RP-17-EE-433', '10', '11.5', '6', '7', '4.5', '2', '8', '2', '5', '4', '5', '5', '5'),
(49, 'RP-17-EE-434', '0', '11.5', '6', '8', '1', '1', '8', '5.75', '5', '4', '5', '5', '5'),
(50, 'RP-17-EE-435', '6', '15', '8', '8', '5', '2.5', '10.5', '8', '5', '4', '5', '5', '5'),
(51, 'RP-17-EE-436', '10', '7', '9', '3.5', '3', '2', '11', '8', '5', '4', '5', '5', '5'),
(52, 'RP-17-EE-437', '2', '12.5', '4.75', '7', '1.5', '1', '2.5', '5', '5', '4.7', '5', '5', '5'),
(53, 'RP-17-EE-438', '6.5', '14', '9', '7.5', '4', '4', '11.5', '6.25', '5', '4', '5', '5', '5'),
(54, 'RP-17-EE-439', '1', '5', '1.5', '6', '0.5', '0', '3.25', '3.25', '5', '4', '5', '5', '5'),
(55, 'RP-17-EE-440', '0', '3', '0', '1.5', '0', '0', '0', '0', '5', '4', '5', '5', '5'),
(56, 'RP-17-EE-441', '4', '7.5', '7.5', '6', '3', '0', '7.5', '5.75', '5', '4', '5', '5', '5'),
(57, 'RP-17-EE-442', '5', '12.5', '4.5', '7.5', '2', '2.5', '5', '4', '5', '4', '5', '5', '5'),
(58, 'RP-17-EE-443', '3.5', '7.5', '3', '7', '2', '0', '7', '5.5', '5', '4', '5', '5', '5'),
(59, 'RP-17-EE-444', '0', '7.5', '3', '4.5', '0.5', '0.5', '8', '3.5', '5', '4', '5', '5', '5'),
(60, 'RP-17-EE-445', '0', '4.5', '5.5', '8', '0.5', '0', '4', '4', '5', '4', '5', '5', '5'),
(61, 'KKRP-17-EE-446', '9', '14.5', '7', '8', '0.5', '0', '2', '5.5', '5', '4', '5', '5', '5'),
(62, 'KKRP-17-EE-447', '3', '12', '3.5', '8', '4', '2', '7.5', '4.75', '5', '4', '5', '5', '5'),
(63, 'KKRP-17-EE-448', '3', '8', '5', '4.5', '4', '0', '4.5', '5', '5', '4', '5', '5', '5'),
(64, 'KKRP-17-EE-449', '1', '5.5', '8', '4', '0', '1', '1', '4.5', '5', '4', '5', '5', '5'),
(65, 'KKRP-17-EE-450', '3', '4', '0', '2.5', '1', '2', '6', '5.5', '5', '4', '5', '5', '5'),
(66, 'KKRP-17-EE-451', '2', '10.5', '5.5', '8', '3', '0', '5.5', '2', '5', '4.5', '5', '5', '5'),
(67, 'KKRP-17-EE-452', '0', '4.5', '1.5', '2', '1', '0.5', '6', '4.5', '5', '4', '5', '5', '5'),
(68, 'KKRP-17-EE-453', '10', '12.5', '9', '6.5', '2', '1.75', '9', '5.75', '5', '4', '5', '5', '5'),
(69, 'KKRP-17-EE-454', '4', '12', '8', '8', '3.5', '0', '7.5', '3', '5', '4', '5', '5', '5'),
(70, 'KKRP-17-EE-455', '4.5', '5.5', '3', '4.5', '1', '0', '3.5', '5', '5', '4', '5', '5', '5'),
(71, 'KKRP-17-EE-456', '2.5', '11', '9', '7', '2', '0', '1.5', '3.5', '5', '4.5', '5', '5', '5'),
(72, 'KKRP-17-EE-457', '2', '9.5', '2', '2.5', '3', '1.5', '7', '4', '5', '4', '5', '5', '5'),
(73, 'KKRP-17-EE-458', '7.5', '14.5', '9', '6', '4.5', '2', '13.5', '5', '5', '4', '5', '5', '5'),
(74, 'KKRP-17-EE-459', '2.5', '10', '9', '3', '0', '0.5', '1', '2.5', '5', '4', '5', '5', '5'),
(75, 'KKRP-17-EE-460', '5', '10.5', '7.5', '3.5', '1', '1.5', '4.5', '3.5', '5', '4', '5', '5', '5'),
(76, 'KKRP-17-EE-461', '2', '8', '2.5', '7', '1', '1', '3.5', '3', '5', '4', '5', '5', '5'),
(77, 'KKRP-17-EE-462', '4', '10.5', '6.5', '2', '1', '1.5', '6', '4', '5', '4', '5', '5', '5'),
(78, 'KKRP-17-EE-463', '0', '7', '0', '3', '0', '0', '1', '2', '5', '4', '5', '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `ee1206_Fall_2019`
--

CREATE TABLE `ee1206_Fall_2019` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee1206_Fall_2019`
--

INSERT INTO `ee1206_Fall_2019` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`) VALUES
(1, 'Instrument', 'Other', 'Other', 'Other', 'Other', 'Midterm', 'Midterm', 'Final', 'Final'),
(2, 'Question', '1', '2', '3', '4', '1', '2', '1', '2'),
(3, 'QuesPart', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(4, 'MaxMarks', '5', '6', '7', '7', '20', '15', '20', '20'),
(5, 'CLO', '1', '2', '3', '4', '1', '2', '3', '4'),
(15, 'RP-17-EE-400', '3.5', '3.9', '7.65', '7', '14', '13', '19', '18'),
(16, 'RP-17-EE-401', '4.5', '5.6', '7', '7', '14', '12', '20', '20'),
(17, 'RP-17-EE-402', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 'RP-17-EE-403', '5', '5.6', '7', '7', '16', '12', '20', '10'),
(19, 'RP-17-EE-404', '5', '5.9', '7', '7', '16', '13', '20', '20'),
(20, 'RP-17-EE-405', '5', '5.9', '7', '7', '16', '13', '20', '20'),
(21, 'RP-17-EE-406', '4.5', '5.9', '7', '7', '18', '13', '20', '20'),
(22, 'RP-17-EE-407', '4.5', '5.6', '7', '7', '18', '12', '20', '20'),
(23, 'RP-17-EE-408', '0', '0', '0', '0', '0', '0', '0', '0'),
(24, 'RP-17-EE-409', '5', '3.9', '7', '7', '16', '13', '20', '20'),
(25, 'RP-17-EE-410', '4', '4.2', '5.6', '7', '16', '14', '16', '15'),
(26, 'RP-17-EE-411', '4.5', '6.2', '7', '7', '18', '14', '20', '20'),
(27, 'RP-17-EE-412', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 'RP-17-EE-413', '0', '0', '0', '0', '0', '0', '0', '0'),
(29, 'RP-17-EE-414', '4', '5', '5.25', '7', '16', '13', '15', '16'),
(30, 'RP-17-EE-415', '4', '5', '5.25', '7', '16', '13', '15', '16'),
(31, 'RP-17-EE-416', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 'RP-17-EE-417', '0', '0', '0', '0', '0', '0', '0', '0'),
(33, 'RP-17-EE-418', '3.5', '3.9', '7', '7', '14', '13', '20', '20'),
(34, 'RP-17-EE-419', '3.5', '3.6', '5.25', '7', '14', '12', '15', '16'),
(35, 'RP-17-EE-420', '3.5', '3.6', '5.25', '7', '14', '12', '15', '16'),
(36, 'RP-17-EE-421', '4', '5', '5.25', '7', '16', '13', '15', '16'),
(37, 'RP-17-EE-422', '4', '5', '5.25', '7', '16', '13', '15', '16'),
(38, 'RP-17-EE-423', '3.5', '3.9', '5.25', '7', '14', '13', '15', '16'),
(39, 'RP-17-EE-424', '4.5', '5.9', '7', '7', '14', '13', '20', '20'),
(40, 'RP-17-EE-425', '3.5', '5.2', '5.25', '7', '14', '14', '15', '16'),
(41, 'RP-17-EE-426', '4', '4.2', '4.55', '7', '16', '14', '13', '14'),
(42, 'RP-17-EE-427', '3.5', '5', '6.3', '7', '14', '13', '18', '19'),
(43, 'RP-17-EE-428', '3.5', '3.6', '6.3', '7', '14', '12', '18', '19'),
(44, 'RP-17-EE-429', '3.5', '3.6', '3.85', '7', '14', '12', '11', '12'),
(45, 'RP-17-EE-430', '3.5', '3.6', '5.25', '7', '14', '12', '15', '16'),
(46, 'RP-17-EE-431', '4', '3.9', '4.55', '7', '16', '13', '13', '14'),
(47, 'RP-17-EE-432', '5', '5.9', '7', '7', '16', '13', '20', '20'),
(48, 'RP-17-EE-433', '4', '3.9', '6.3', '7', '16', '13', '18', '19'),
(49, 'RP-17-EE-434', '3.5', '3.6', '6.3', '7', '14', '12', '18', '19'),
(50, 'RP-17-EE-435', '5', '4.9', '7', '7', '16', '13', '20', '20'),
(51, 'RP-17-EE-436', '4', '5', '5.25', '7', '16', '13', '15', '16'),
(52, 'RP-17-EE-437', '5', '3.6', '4.55', '7', '16', '12', '13', '14'),
(53, 'RP-17-EE-438', '5', '5.6', '7', '7', '16', '12', '20', '20'),
(54, 'RP-17-EE-439', '5', '3.6', '5.25', '7', '16', '12', '15', '16'),
(55, 'RP-17-EE-440', '3.5', '3.6', '3.5', '7', '14', '12', '10', '9'),
(56, 'RP-17-EE-441', '4.5', '5.9', '7', '7', '14', '13', '20', '20'),
(57, 'RP-17-EE-442', '5', '3.6', '3.85', '7', '16', '12', '11', '12'),
(58, 'RP-17-EE-443', '4.5', '5.6', '7', '7', '14', '12', '20', '20'),
(59, 'RP-17-EE-444', '3.5', '3.3', '6.3', '7', '14', '11', '18', '19'),
(60, 'RP-17-EE-445', '5', '3.6', '3.85', '7', '16', '12', '11', '12'),
(61, 'KKRP-17-EE-446', '3.5', '3.6', '6.3', '7', '14', '12', '18', '19'),
(62, 'KKRP-17-EE-447', '3', '3.3', '3.5', '7', '12', '11', '10', '11'),
(63, 'KKRP-17-EE-448', '3.5', '3.6', '3.5', '7', '14', '12', '10', '11'),
(64, 'KKRP-17-EE-449', '5', '3.6', '4.55', '7', '16', '12', '13', '14'),
(65, 'KKRP-17-EE-450', '3.5', '3.6', '4.55', '7', '14', '12', '13', '14'),
(66, 'KKRP-17-EE-451', '3.5', '3.6', '5.25', '7', '14', '12', '15', '16'),
(67, 'KKRP-17-EE-452', '3.5', '3.6', '4.55', '7', '14', '12', '13', '14'),
(68, 'KKRP-17-EE-453', '4', '3.9', '6.3', '7', '16', '13', '18', '19'),
(69, 'KKRP-17-EE-454', '3.5', '3.6', '5.25', '7', '14', '12', '15', '16'),
(70, 'KKRP-17-EE-455', '3.5', '3.6', '4.55', '7', '14', '12', '13', '14'),
(71, 'KKRP-17-EE-456', '4.5', '5', '4.55', '7', '14', '13', '13', '14'),
(72, 'KKRP-17-EE-457', '3.5', '3.6', '5.25', '7', '14', '12', '15', '16'),
(73, 'KKRP-17-EE-458', '4.5', '5', '4.55', '7', '14', '13', '13', '14'),
(74, 'KKRP-17-EE-459', '3.5', '3.6', '3.85', '7', '14', '12', '11', '12'),
(75, 'KKRP-17-EE-460', '3.5', '3.6', '5.25', '7', '14', '12', '15', '16'),
(76, 'KKRP-17-EE-461', '3.5', '3.6', '4.55', '7', '14', '12', '13', '14'),
(77, 'KKRP-17-EE-462', '3.5', '3.6', '3.85', '7', '14', '12', '11', '12'),
(78, 'KKRP-17-EE-463', '3.5', '3.6', '5.25', '7', '14', '12', '15', '16'),
(6, 'Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'cep', '0', '0', '0', '0', '0', '0', '0', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ee2106l_Fall_2020`
--

CREATE TABLE `ee2106l_Fall_2020` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee2106l_Fall_2020`
--

INSERT INTO `ee2106l_Fall_2020` (`serial`, `data_detail`) VALUES
(1, 'Instrument'),
(2, 'Question'),
(3, 'QuesPart'),
(4, 'MaxMarks'),
(5, 'CLO'),
(6, 'Date'),
(7, 'g_type'),
(8, 'rubric_set_id'),
(9, 'cep'),
(10, 'feature10'),
(11, 'feature11'),
(12, 'feature12'),
(13, 'feature13'),
(14, 'feature14'),
(15, 'RP-19-EE-401'),
(16, 'RP-19-EE-402'),
(17, 'RP-19-EE-403'),
(18, 'RP-19-EE-404'),
(19, 'RP-19-EE-405'),
(20, 'RP-19-EE-406'),
(21, 'RP-19-EE-407'),
(22, 'RP-19-EE-408'),
(23, 'RP-19-EE-409'),
(24, 'RP-19-EE-410'),
(25, 'RP-19-EE-411'),
(26, 'RP-19-EE-412'),
(27, 'RP-19-EE-413'),
(28, 'RP-19-EE-414'),
(29, 'RP-19-EE-415'),
(30, 'RP-19-EE-417'),
(31, 'RP-19-EE-418'),
(32, 'RP-19-EE-419'),
(33, 'RP-19-EE-420'),
(34, 'RP-19-EE-421'),
(35, 'RP-19-EE-422'),
(36, 'RP-19-EE-423'),
(37, 'RP-19-EE-424'),
(38, 'RP-19-EE-425'),
(39, 'RP-19-EE-426'),
(40, 'RP-19-EE-427'),
(41, 'RP-19-EE-428'),
(42, 'RP-19-EE-429'),
(43, 'RP-19-EE-430'),
(44, 'RP-19-EE-431'),
(45, 'RP-19-EE-432'),
(46, 'RP-19-EE-433'),
(47, 'RP-19-EE-434'),
(48, 'RP-19-EE-435'),
(49, 'RP-19-EE-436'),
(50, 'RP-19-EE-437'),
(51, 'RP-19-EE-438'),
(52, 'RP-19-EE-439');

-- --------------------------------------------------------

--
-- Table structure for table `ee2201l_Spring_2019`
--

CREATE TABLE `ee2201l_Spring_2019` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I15` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I16` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I17` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I18` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I19` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I20` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I21` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I22` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I23` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I24` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I25` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I26` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee2201l_Spring_2019`
--

INSERT INTO `ee2201l_Spring_2019` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`, `I16`, `I17`, `I18`, `I19`, `I20`, `I21`, `I22`, `I23`, `I24`, `I25`, `I26`) VALUES
(1, 'Instrument', 'Final', 'Final', 'Final', 'Final', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'Assignment', 'Assignment', 'Quiz', 'Other', 'VIVA'),
(2, 'Question', '1', '2', '3', '4', '1', '2', '3', '4', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '1', '2', '1', '1', '1'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '7', '4', '7', '7', '10', '5', '5', '5', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '40'),
(5, 'CLO', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(6, 'Date', '2019-05-29', '2019-05-29', '2019-05-29', '2019-05-29', '2019-03-20', '2019-03-20', '2019-03-20', '2019-03-20', '2019-01-23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'cep', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'RP-17-EE-400', '5', '1.5', '4', '5', '4', '3', '4', '0', '10', '10', '10', '10', '10', '10', '8', '10', '10', '10', '10', '10', '10', '8', '6', '2', '10', '35'),
(16, 'RP-17-EE-401', '7', '3.5', '7', '7', '5', '4.5', '1.5', '4.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '8', '10', '10', '10', '8', '0', '4.5', '10', '31'),
(17, 'RP-17-EE-402', '0', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 'RP-17-EE-403', '6', '2.5', '7', '5.5', '8', '4.5', '5', '5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '10', '10', '0', '0', '8', '0', '5', '9', '36'),
(19, 'RP-17-EE-404', '5', '2.5', '4.5', '5', '6', '2.5', '0.5', '5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '8', '10', '10', '10', '0', '0', '5', '8', '32'),
(20, 'RP-17-EE-405', '5', '4', '6.5', '7', '7', '5', '5', '4', '10', '10', '0', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '8.5', '10', '38'),
(21, 'RP-17-EE-406', '7', '2.5', '7', '5.5', '7.5', '5', '5', '4', '10', '10', '10', '10', '10', '10', '8', '10', '10', '8', '10', '10', '10', '8', '0', '5.5', '8', '32'),
(22, 'RP-17-EE-407', '4', '1.5', '3.5', '5', '2.5', '2.5', '5', '1.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '0', '0', '10', '10', '0', '0', '1', '8', '31'),
(23, 'RP-17-EE-408', '0', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(24, 'RP-17-EE-409', '5', '1.5', '3', '3', '4', '4', '3', '1.5', '10', '10', '10', '10', '10', '10', '8', '10', '0', '8', '10', '10', '10', '8', '0', '6', '8', '32'),
(25, 'RP-17-EE-410', '5', '0', '1', '1', '5', '1.5', '0.5', '1', '10', '10', '10', '10', '10', '10', '8', '10', '0', '8', '10', '10', '0', '0', '5', '6', '8', '26'),
(26, 'RP-17-EE-411', '5', '2.5', '5.5', '6', '7', '5', '5', '4.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '10', '10', '10', '10', '0', '0', '0', '10', '39'),
(27, 'RP-17-EE-412', '0', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 'RP-17-EE-413', '6', '4', '6.5', '7', '6', '2.5', '5', '1', '10', '10', '8', '10', '10', '10', '8', '10', '10', '4', '0', '10', '10', '0', '7', '0', '10', '37'),
(29, 'RP-17-EE-414', '5', '2', '5.5', '5.5', '6', '4.5', '4', '2.5', '0', '10', '10', '10', '10', '10', '8', '0', '10', '8', '10', '10', '10', '0', '0', '0', '8', '34'),
(30, 'RP-17-EE-415', '4', '1', '5', '4', '3', '2', '1', '1.5', '10', '0', '10', '10', '10', '10', '8', '10', '0', '8', '10', '10', '10', '8', '0', '4', '8', '27'),
(31, 'RP-17-EE-416', '0', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 'RP-17-EE-417', '0', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(33, 'RP-17-EE-418', '5', '3', '6.5', '5', '7', '3.5', '3', '2.5', '10', '0', '10', '10', '10', '10', '8', '10', '0', '8', '0', '10', '0', '0', '0', '5.5', '8', '33'),
(34, 'RP-17-EE-419', '5', '0.5', '3.5', '5', '8', '2', '4', '1.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '8', '10', '10', '10', '0', '8', '4', '9', '28'),
(35, 'RP-17-EE-420', '5', '0', '5', '3.5', '6', '2', '0.5', '3.5', '10', '10', '8', '10', '10', '10', '8', '0', '0', '4', '10', '10', '10', '0', '0', '5', '8', '30'),
(36, 'RP-17-EE-421', '5', '0.5', '4', '2', '7', '4', '3.5', '1.5', '10', '0', '10', '10', '10', '10', '8', '0', '0', '8', '10', '10', '0', '0', '0', '5.5', '8', '26'),
(37, 'RP-17-EE-422', '7', '1', '3', '3', '3', '1', '2', '1.5', '0', '10', '10', '10', '0', '0', '8', '0', '0', '8', '10', '10', '0', '0', '0', '4.5', '0', '0'),
(38, 'RP-17-EE-423', '4', '0', '2', '2', '0', '0', '0', '0', '10', '10', '10', '10', '0', '0', '8', '10', '10', '0', '10', '10', '10', '8', '0', '0', '8', '24'),
(39, 'RP-17-EE-424', '3', '0', '0', '0', '8', '1.5', '0.5', '1.5', '10', '10', '10', '10', '10', '10', '8', '0', '10', '8', '10', '10', '10', '0', '5', '2.5', '8', '25'),
(40, 'RP-17-EE-425', '5', '2.5', '6.5', '7', '4', '4.5', '5', '4.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '10', '10', '10', '10', '8', '0', '4.5', '8', '31'),
(41, 'RP-17-EE-426', '5', '2.5', '6.5', '7', '4', '5', '5', '2.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '10', '10', '10', '10', '0', '0', '6', '9', '34'),
(42, 'RP-17-EE-427', '6', '1.5', '3', '5', '5', '4', '3', '2', '10', '10', '10', '10', '10', '10', '8', '10', '10', '8', '10', '10', '10', '0', '0', '8', '10', '28'),
(43, 'RP-17-EE-428', '3', '1', '2', '2', '5', '1.5', '0.5', '2', '7', '10', '10', '10', '10', '10', '8', '0', '10', '8', '10', '10', '10', '0', '5', '5.5', '9', '27'),
(44, 'RP-17-EE-429', '2', '0', '1', '4', '3', '0', '0.5', '1.5', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(45, 'RP-17-EE-430', '4', '0.5', '3', '1', '2', '0.5', '0.5', '3.5', '0', '10', '10', '10', '0', '0', '0', '0', '10', '0', '0', '10', '0', '0', '0', '0', '8', '25'),
(46, 'RP-17-EE-431', '5', '1.5', '7', '7', '7', '4.5', '5', '4', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '2', '10', '30'),
(47, 'RP-17-EE-432', '4', '1', '4', '3', '5', '3.5', '0.5', '2', '10', '10', '10', '10', '10', '10', '8', '10', '10', '8', '10', '10', '10', '0', '0', '4', '9', '30'),
(48, 'RP-17-EE-433', '4', '1.5', '3', '3', '4', '5', '1', '2', '10', '10', '10', '10', '10', '10', '8', '10', '10', '10', '10', '10', '10', '8', '0', '4', '9', '28'),
(49, 'RP-17-EE-434', '5', '0.5', '0', '7', '5', '1', '0.5', '1.5', '10', '10', '10', '10', '10', '10', '8', '10', '0', '6', '0', '0', '0', '0', '0', '0.5', '8', '25'),
(50, 'RP-17-EE-435', '4', '3', '6.5', '4', '5', '4.5', '0.5', '2', '10', '10', '0', '10', '10', '10', '8', '10', '10', '8', '10', '10', '10', '10', '0', '4', '9', '36'),
(51, 'RP-17-EE-436', '7', '3', '5', '3', '6', '4', '3.5', '3.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '10', '10', '10', '10', '8', '0', '4.5', '9', '28'),
(52, 'RP-17-EE-437', '2', '1', '0.5', '1', '2', '2', '0.5', '1.5', '10', '0', '10', '10', '10', '10', '8', '10', '10', '0', '0', '10', '0', '0', '8', '5', '0', '0'),
(53, 'RP-17-EE-438', '4', '0.5', '3', '2', '6', '4', '1.5', '2', '10', '10', '10', '10', '10', '10', '0', '10', '10', '10', '10', '10', '10', '8', '0', '4', '0', '24'),
(54, 'RP-17-EE-439', '0', NULL, NULL, '0', '2', '1.5', '0', '1.5', '10', '10', '10', '10', '10', '10', '8', '0', '0', '0', '0', '0', '0', '8', '0', '0', '0', '0'),
(55, 'RP-17-EE-440', '4', '0', '2.5', '0', '0', '0', '0', '0', '10', '10', '10', '10', '0', '0', '8', '0', '0', '0', '0', '10', '0', '0', '0', '0', '8', '25'),
(56, 'RP-17-EE-441', '4', '0.5', '0', '2.5', '6', '3.5', '0', '1', '10', '10', '10', '10', '10', '10', '8', '10', '0', '8', '10', '0', '0', '8', '0', '0', '9', '24'),
(57, 'RP-17-EE-442', '4', '0', '0', '0', '3', '1', '0.5', '0', '10', '10', '10', '10', '10', '10', '0', '10', '0', '0', '0', '0', '0', '8', '0', '0', '8', '24'),
(58, 'RP-17-EE-443', '2', '0', '3', '0', '2', '2.5', '0.5', '2.5', '10', '10', '10', '10', '10', '10', '8', '0', '10', '7', '0', '10', '10', '0', '8', '2', '9', '28'),
(59, 'RP-17-EE-444', '4', '0.5', '1', '2', '3', '2', '0', '1.5', '10', '10', '10', '10', '10', '10', '8', '0', '10', '9', '10', '10', '10', '0', '6', '4.5', '8', '28'),
(60, 'RP-17-EE-445', '5', '0.5', '0.5', '0.5', '0', '0', '1.5', '0', '0', '10', '0', '10', '0', '0', '8', '0', '10', '0', '0', '0', '0', '0', '8', '2.5', '9', '18'),
(61, 'KKRP-17-EE-446', '5', '0', '0', '0', '2', '0', '0.5', '0', '10', '10', '0', '10', '10', '10', '0', '10', '10', '0', '0', '10', '0', '0', '0', '4.5', '0', '0'),
(62, 'KKRP-17-EE-447', '5', '0', '0', '0', '0', '0.5', '0', '0', '0', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(63, 'KKRP-17-EE-448', '3', '0', '0', '1.5', '3', '1', '0', '0', '0', '10', '0', '10', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '6', '7.5', '0', '0'),
(64, 'KKRP-17-EE-449', '3', '0', '0.5', '0.5', '4', '0', '0.5', '0', '10', '10', '10', '10', '10', '10', '8', '0', '10', '0', '0', '10', '10', '0', '0', '4', '0', '0'),
(65, 'KKRP-17-EE-450', '5', '1', '2', '4.5', '4', '1', '0.5', '0', '10', '0', '0', '10', '10', '10', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(66, 'KKRP-17-EE-451', '4', '0.5', '1', '0', '2', '2', '1', '1.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '9', '10', '0', '8', '0', '7', '3', '8', '28'),
(67, 'KKRP-17-EE-452', '4', '0', '0.5', '0.5', '1', '0', '0', '1.5', '0', '0', '0', '0', '0', '0', '0', '10', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(68, 'KKRP-17-EE-453', '5', '1.5', '4', '5', '5', '1.5', '1.5', '2', '10', '10', '10', '10', '10', '10', '8', '10', '10', '0', '10', '10', '10', '0', '8', '5', '9', '27'),
(69, 'KKRP-17-EE-454', '4', '0.5', '1.5', '3', '1', '1.5', '1.5', '0.5', '10', '10', '10', '10', '10', '10', '8', '10', '0', '8', '10', '0', '10', '0', '6', '4', '8.5', '26'),
(70, 'KKRP-17-EE-455', '4', '0.5', '2', '3', '2', '0', '0.5', '0.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '0', '10', '10', '10', '0', '5', '5', '7.5', '26'),
(71, 'KKRP-17-EE-456', '3', '1', '3', '3', '6', '1', '1.5', '1.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '8', '10', '10', '10', '0', '5', '4.5', '8.5', '30'),
(72, 'KKRP-17-EE-457', '1', '0', '0.5', '0', '0', '0', '0', '0', '10', '10', '0', '10', '10', '10', '0', '10', '10', '0', '0', '10', '10', '0', '6', '4.5', '8', '25'),
(73, 'KKRP-17-EE-458', '6', '0.5', '3', '4.5', '3', '1.5', '1', '1', '10', '10', '10', '10', '10', '10', '8', '10', '10', '8', '10', '10', '10', '0', '8', '2.5', '8.5', '24'),
(74, 'KKRP-17-EE-459', '2', '0', '0.5', '0.5', '3', '0', '0', '0', '10', '10', '10', '10', '10', '10', '0', '0', '10', '0', '0', '10', '10', '0', '0', '0.5', '9', '24'),
(75, 'KKRP-17-EE-460', '4', '0', '1', '5', '2', '1', '0', '1', '10', '10', '10', '10', '10', '10', '10', '10', '0', '10', '10', '10', '10', '0', '6.5', '2.5', '8', '21'),
(76, 'KKRP-17-EE-461', '5', '0', '1', '0', '1', '1', '0', '0', '10', '10', '10', '10', '10', '10', '0', '0', '10', '0', '0', '0', '0', '0', '0', '2.5', '8', '24'),
(77, 'KKRP-17-EE-462', '5', '1', '3', '2', '0', '0.5', '1.5', '1.5', '10', '10', '10', '10', '10', '10', '8', '10', '10', '8', '8', '10', '10', '0', '8', '6.5', '8', '24'),
(78, 'KKRP-17-EE-463', '0', '0', '2.5', '1', '3', '2.5', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ee2201l_Spring_2020`
--

CREATE TABLE `ee2201l_Spring_2020` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee2201l_Spring_2020`
--

INSERT INTO `ee2201l_Spring_2020` (`serial`, `data_detail`, `I1`) VALUES
(1, 'Instrument', 'LAB'),
(2, 'Question', '1'),
(3, 'QuesPart', NULL),
(4, 'MaxMarks', '90'),
(5, 'CLO', '1'),
(6, 'Date', ''),
(7, 'g_type', 'rubric'),
(8, 'rubric_set_id', '2'),
(9, 'cep', ''),
(10, 'feature10', NULL),
(11, 'feature11', NULL),
(12, 'feature12', NULL),
(13, 'feature13', NULL),
(14, 'feature14', NULL),
(15, 'RP-18-EE-401', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(16, 'RP-18-EE-402', 'Accomplished:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:84'),
(17, 'RP-18-EE-403', 'Exemplary:\\^\\:Developing:\\^\\:Exemplary:\\^\\:78'),
(18, 'RP-18-EE-404', 'Begining:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:66'),
(19, 'RP-18-EE-405', 'Exemplary:\\^\\:Exemplary:\\^\\:Developing:\\^\\:78'),
(20, 'RP-18-EE-407', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(21, 'RP-18-EE-408', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(22, 'RP-18-EE-409', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(23, 'RP-18-EE-410', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(24, 'RP-18-EE-411', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(25, 'RP-18-EE-412', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(26, 'RP-18-EE-413', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(27, 'RP-18-EE-414', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(28, 'RP-18-EE-415', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(29, 'RP-18-EE-416', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(30, 'RP-18-EE-417', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(31, 'RP-18-EE-418', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(32, 'RP-18-EE-419', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(33, 'RP-18-EE-420', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(34, 'RP-18-EE-421', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(35, 'RP-18-EE-422', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(36, 'RP-18-EE-425', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(37, 'RP-18-EE-426', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(38, 'RP-18-EE-427', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(39, 'RP-18-EE-428', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(40, 'RP-18-EE-429', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(41, 'RP-18-EE-430', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(42, 'RP-18-EE-431', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(43, 'RP-18-EE-432', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(44, 'RP-18-EE-433', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(45, 'KKRP-18-EE-436', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(46, 'KKRP-18-EE-437', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(47, 'KKRP-18-EE-438', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(48, 'KKRP-18-EE-439', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(49, 'KKRP-18-EE-440', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(50, 'KKRP-18-EE-441', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(51, 'KKRP-18-EE-442', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(52, 'KKRP-18-EE-443', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(53, 'KKRP-18-EE-444', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(54, 'KKRP-18-EE-445', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(55, 'KKRP-18-EE-446', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(56, 'KKRP-18-EE-447', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(57, 'KKRP-18-EE-448', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(58, 'KKRP-18-EE-449', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(59, 'KKRP-18-EE-450', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90'),
(60, 'RP-18-EE-451', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90');

-- --------------------------------------------------------

--
-- Table structure for table `ee2201_Spring_2020`
--

CREATE TABLE `ee2201_Spring_2020` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I15` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee2201_Spring_2020`
--

INSERT INTO `ee2201_Spring_2020` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`) VALUES
(1, 'Instrument', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance'),
(2, 'Question', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'CLO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Date', '2020-03-24', '2020-03-27', '2020-03-31', '2020-04-03', '2020-04-07', '2020-04-10', '2020-04-14', '2020-04-17', '2020-04-21', '2020-04-24', '2020-04-28', '2020-05-01', '2020-05-05', '2020-05-08', '2020-09-08'),
(7, 'g_type', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'rubric_set_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'cep', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'RP-18-EE-401', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(16, 'RP-18-EE-402', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(17, 'RP-18-EE-403', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(18, 'RP-18-EE-404', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(19, 'RP-18-EE-405', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'A', 'P', NULL, 'P', 'P', 'P', 'A'),
(20, 'RP-18-EE-407', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', NULL, NULL, 'P', 'P'),
(21, 'RP-18-EE-408', 'P', 'P', 'P', 'A', 'P', 'P', 'P', NULL, 'P', 'P', 'P', 'P', 'P', 'P', 'A'),
(22, 'RP-18-EE-409', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', NULL, 'P'),
(23, 'RP-18-EE-410', 'P', 'P', 'A', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', NULL, 'P', NULL, 'P'),
(24, 'RP-18-EE-411', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(25, 'RP-18-EE-412', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P'),
(26, 'RP-18-EE-413', 'A', 'A', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(27, 'RP-18-EE-414', 'A', 'A', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(28, 'RP-18-EE-415', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(29, 'RP-18-EE-416', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', NULL, 'P', 'P'),
(30, 'RP-18-EE-417', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', NULL, 'P', NULL, 'A'),
(31, 'RP-18-EE-418', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', NULL, 'P', 'P', 'P'),
(32, 'RP-18-EE-419', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(33, 'RP-18-EE-420', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', NULL, 'P', 'P', 'P', 'P'),
(34, 'RP-18-EE-421', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(35, 'RP-18-EE-422', 'P', 'P', 'P', 'A', 'P', NULL, 'P', 'P', 'P', 'P', 'P', NULL, 'P', NULL, 'P'),
(36, 'RP-18-EE-425', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(37, 'RP-18-EE-426', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', NULL, 'P'),
(38, 'RP-18-EE-427', 'A', 'P', 'P', 'P', 'P', 'P', 'P', NULL, 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(39, 'RP-18-EE-428', 'P', 'A', 'A', 'P', 'P', NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(40, 'RP-18-EE-429', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P'),
(41, 'RP-18-EE-430', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(42, 'RP-18-EE-431', 'P', 'P', 'A', 'P', 'P', NULL, 'P', NULL, 'P', NULL, 'P', NULL, 'P', NULL, 'P'),
(43, 'RP-18-EE-432', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, 'P'),
(44, 'RP-18-EE-433', 'A', 'A', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(45, 'KKRP-18-EE-436', 'A', 'A', 'A', 'A', 'P', NULL, 'P', 'P', 'P', NULL, NULL, NULL, NULL, NULL, 'A'),
(46, 'KKRP-18-EE-437', 'A', 'A', 'P', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(47, 'KKRP-18-EE-438', 'A', 'P', 'A', 'A', NULL, NULL, 'A', NULL, 'P', NULL, NULL, NULL, NULL, NULL, 'A'),
(48, 'KKRP-18-EE-439', 'P', 'A', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(49, 'KKRP-18-EE-440', 'A', 'A', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(50, 'KKRP-18-EE-441', 'A', 'A', 'A', 'A', NULL, NULL, 'A', NULL, 'P', NULL, NULL, NULL, NULL, NULL, 'A'),
(51, 'KKRP-18-EE-442', 'A', 'A', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(52, 'KKRP-18-EE-443', 'A', 'P', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'P'),
(53, 'KKRP-18-EE-444', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(54, 'KKRP-18-EE-445', 'P', 'P', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'P'),
(55, 'KKRP-18-EE-446', 'A', 'A', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(56, 'KKRP-18-EE-447', 'A', 'A', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(57, 'KKRP-18-EE-448', 'P', 'P', 'A', 'A', NULL, NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(58, 'KKRP-18-EE-449', 'A', 'A', 'A', 'A', 'P', NULL, 'A', NULL, 'A', NULL, NULL, NULL, NULL, NULL, 'A'),
(59, 'KKRP-18-EE-450', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', NULL, 'P', NULL, 'P'),
(60, 'RP-18-EE-451', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `ee2202_Spring_2020`
--

CREATE TABLE `ee2202_Spring_2020` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee2202_Spring_2020`
--

INSERT INTO `ee2202_Spring_2020` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`) VALUES
(1, 'Instrument', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Quiz', 'Attendance', 'Attendance'),
(2, 'Question', NULL, NULL, NULL, NULL, '1', NULL, NULL),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', NULL, NULL, NULL, NULL, '5', NULL, NULL),
(5, 'CLO', NULL, NULL, NULL, NULL, '1', NULL, NULL),
(6, 'Date', '2020-03-24', '2020-03-26', '2020-03-30', '2020-04-02', '2021-07-02', '2021-07-02', '2021-06-29'),
(7, 'g_type', NULL, NULL, NULL, NULL, 'conventional', NULL, NULL),
(8, 'rubric_set_id', NULL, NULL, NULL, NULL, '1', NULL, NULL),
(9, 'cep', NULL, NULL, NULL, NULL, '0', NULL, NULL),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'RP-18-EE-401', 'P', 'P', 'P', 'P', NULL, 'P', NULL),
(16, 'RP-18-EE-402', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(17, 'RP-18-EE-403', 'P', 'P', 'P', 'P', NULL, 'P', 'P'),
(18, 'RP-18-EE-404', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(19, 'RP-18-EE-405', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(20, 'RP-18-EE-407', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(21, 'RP-18-EE-408', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(22, 'RP-18-EE-409', 'P', 'P', 'P', 'A', NULL, NULL, NULL),
(23, 'RP-18-EE-410', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(24, 'RP-18-EE-411', 'P', 'P', 'P', 'A', NULL, NULL, NULL),
(25, 'RP-18-EE-412', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(26, 'RP-18-EE-414', 'A', 'A', 'A', 'A', NULL, NULL, NULL),
(27, 'RP-18-EE-415', 'P', 'P', 'A', 'P', NULL, NULL, NULL),
(28, 'RP-18-EE-416', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(29, 'RP-18-EE-417', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(30, 'RP-18-EE-418', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(31, 'RP-18-EE-419', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(32, 'RP-18-EE-420', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(33, 'RP-18-EE-421', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(34, 'RP-18-EE-422', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(35, 'RP-18-EE-425', 'P', 'P', 'P', 'P', NULL, NULL, 'P'),
(36, 'RP-18-EE-426', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(37, 'RP-18-EE-427', 'A', 'P', 'P', 'P', NULL, NULL, NULL),
(38, 'RP-18-EE-428', 'A', 'P', 'P', 'A', NULL, NULL, NULL),
(39, 'RP-18-EE-429', 'P', 'P', 'A', 'P', NULL, NULL, NULL),
(40, 'RP-18-EE-430', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(41, 'RP-18-EE-431', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(42, 'RP-18-EE-432', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(43, 'RP-18-EE-433', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(44, 'KKRP-18-EE-436', 'A', 'P', 'P', 'A', NULL, NULL, NULL),
(45, 'KKRP-18-EE-437', 'A', 'A', 'A', 'A', NULL, NULL, NULL),
(46, 'KKRP-18-EE-438', 'A', 'A', 'P', 'P', NULL, NULL, NULL),
(47, 'KKRP-18-EE-439', 'P', 'P', 'A', 'A', NULL, NULL, NULL),
(48, 'KKRP-18-EE-440', 'A', 'P', 'A', 'A', NULL, NULL, NULL),
(49, 'KKRP-18-EE-441', 'A', 'A', 'P', 'P', NULL, NULL, NULL),
(50, 'KKRP-18-EE-442', 'P', 'P', 'A', 'A', NULL, NULL, NULL),
(51, 'KKRP-18-EE-443', 'A', 'P', 'P', 'A', NULL, NULL, NULL),
(52, 'KKRP-18-EE-444', 'P', 'P', 'A', 'A', NULL, NULL, NULL),
(53, 'KKRP-18-EE-445', 'P', 'P', 'A', 'A', NULL, NULL, NULL),
(54, 'KKRP-18-EE-446', 'A', 'A', 'A', 'A', NULL, NULL, NULL),
(55, 'KKRP-18-EE-447', 'A', 'P', 'P', 'A', NULL, NULL, NULL),
(56, 'KKRP-18-EE-448', 'A', 'P', 'A', 'A', NULL, NULL, NULL),
(57, 'KKRP-18-EE-449', 'A', 'A', 'A', 'A', NULL, NULL, NULL),
(58, 'KKRP-18-EE-450', 'P', 'A', 'P', 'A', NULL, NULL, NULL),
(59, 'RP-18-EE-451', 'P', 'P', 'P', 'P', NULL, NULL, NULL),
(60, 'RP-17-EE-400', NULL, NULL, NULL, NULL, '9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ee2203_Spring_2020`
--

CREATE TABLE `ee2203_Spring_2020` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee2203_Spring_2020`
--

INSERT INTO `ee2203_Spring_2020` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`) VALUES
(1, 'Instrument', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance'),
(2, 'Question', NULL, NULL, NULL, NULL, NULL),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', NULL, NULL, NULL, NULL, NULL),
(5, 'CLO', NULL, NULL, NULL, NULL, NULL),
(6, 'Date', '2020-03-26', '2020-03-30', '2020-04-02', '2020-04-06', '2020-04-09'),
(7, 'g_type', NULL, NULL, NULL, NULL, NULL),
(8, 'rubric_set_id', NULL, NULL, NULL, NULL, NULL),
(9, 'cep', NULL, NULL, NULL, NULL, NULL),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL),
(15, 'RP-18-EE-401', 'P', 'P', 'P', 'P', 'P'),
(16, 'RP-18-EE-402', 'P', 'P', 'P', 'P', 'P'),
(17, 'RP-18-EE-403', 'P', 'P', 'P', 'P', 'P'),
(18, 'RP-18-EE-404', 'P', 'P', 'P', 'P', 'P'),
(19, 'RP-18-EE-405', 'P', 'P', 'P', 'A', 'A'),
(20, 'RP-18-EE-407', 'P', 'P', 'P', 'P', 'P'),
(21, 'RP-18-EE-408', 'P', 'P', 'P', 'P', 'P'),
(22, 'RP-18-EE-409', 'P', 'P', 'P', 'P', 'A'),
(23, 'RP-18-EE-410', 'P', 'P', 'P', 'A', 'A'),
(24, 'RP-18-EE-411', 'P', 'P', 'P', 'P', 'P'),
(25, 'RP-18-EE-412', 'P', 'P', 'P', 'P', 'P'),
(26, 'RP-18-EE-414', 'A', 'A', 'A', 'A', 'A'),
(27, 'RP-18-EE-415', 'P', 'A', 'P', 'P', 'A'),
(28, 'RP-18-EE-416', 'P', 'P', 'A', 'A', 'A'),
(29, 'RP-18-EE-417', 'P', 'A', 'A', 'A', 'A'),
(30, 'RP-18-EE-418', 'P', 'P', 'P', 'P', 'P'),
(31, 'RP-18-EE-419', 'P', 'P', 'A', 'P', 'P'),
(32, 'RP-18-EE-420', 'P', 'P', 'P', 'P', 'A'),
(33, 'RP-18-EE-421', 'P', 'P', 'P', 'P', 'A'),
(34, 'RP-18-EE-422', 'P', 'P', 'P', 'P', 'P'),
(35, 'RP-18-EE-425', 'P', 'P', 'P', 'P', 'A'),
(36, 'RP-18-EE-426', 'P', 'P', 'P', 'P', 'P'),
(37, 'RP-18-EE-427', 'P', 'A', 'A', 'P', 'P'),
(38, 'RP-18-EE-428', 'P', 'P', 'A', 'A', 'A'),
(39, 'RP-18-EE-429', 'P', 'P', 'P', 'P', 'P'),
(40, 'RP-18-EE-430', 'P', 'P', 'P', 'P', 'P'),
(41, 'RP-18-EE-431', 'P', 'P', 'P', 'P', 'P'),
(42, 'RP-18-EE-432', 'P', 'P', 'P', 'A', 'A'),
(43, 'RP-18-EE-433', 'P', 'P', 'P', 'P', 'A'),
(44, 'KKRP-18-EE-436', 'P', 'A', 'A', 'A', 'P'),
(45, 'KKRP-18-EE-437', 'A', 'A', 'A', 'A', 'A'),
(46, 'KKRP-18-EE-438', 'A', 'P', 'A', 'P', 'A'),
(47, 'KKRP-18-EE-439', 'P', 'A', 'A', 'A', 'A'),
(48, 'KKRP-18-EE-440', 'A', 'A', 'A', 'A', 'A'),
(49, 'KKRP-18-EE-441', 'P', 'P', 'P', 'A', 'A'),
(50, 'KKRP-18-EE-442', 'P', 'P', 'A', 'A', 'A'),
(51, 'KKRP-18-EE-443', 'P', 'P', 'A', 'A', 'A'),
(52, 'KKRP-18-EE-444', 'P', 'P', 'A', 'P', 'A'),
(53, 'KKRP-18-EE-445', 'P', 'A', 'A', 'A', 'A'),
(54, 'KKRP-18-EE-446', 'A', 'A', 'A', 'A', 'A'),
(55, 'KKRP-18-EE-447', 'P', 'A', 'A', 'A', 'A'),
(56, 'KKRP-18-EE-448', 'A', 'A', 'A', 'A', 'A'),
(57, 'KKRP-18-EE-449', 'A', 'A', 'A', 'P', 'P'),
(58, 'KKRP-18-EE-450', 'P', 'A', 'A', 'A', 'P'),
(59, 'RP-18-EE-451', 'P', 'P', 'P', 'P', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `ee3104l_Fall_2019`
--

CREATE TABLE `ee3104l_Fall_2019` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee3104l_Fall_2019`
--

INSERT INTO `ee3104l_Fall_2019` (`serial`, `data_detail`, `I2`, `I1`, `I3`, `I4`, `I5`) VALUES
(1, 'Instrument', 'LAB', 'Other', 'Presentation', 'Other', 'Other'),
(2, 'Question', '2', '1', '1', '3', '2'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '10', '10', '50', '10', '5'),
(5, 'CLO', '1', '2', '2', '1', '2'),
(6, 'Date', '', '', '', '', ''),
(7, 'g_type', 'rubric', 'rubric', 'rubric', 'conventional', 'rubric'),
(8, 'rubric_set_id', '2', '1', '1', '1', '1'),
(9, 'cep', '', '0', '0', '', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL),
(15, 'RP-17-EE-400', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Absent:\\^\\:Absent:\\^\\:0', '10', 'Exemplary:\\^\\:Satisfactory:\\^\\:4.5'),
(16, 'RP-17-EE-401', 'Satisfactory:\\^\\:Unsatisfactory:\\^\\:Unacceptable:\\^\\:4.6666666666667', 'Satisfactory:\\^\\:Exemplary:\\^\\:9', 'Absent:\\^\\:Exemplary:\\^\\:25', '5', 'Developing:\\^\\:Developing:\\^\\:3'),
(17, 'RP-17-EE-402', 'Developing:\\^\\:Developing:\\^\\:Unacceptable:\\^\\:4.6666666666667', 'Exemplary:\\^\\:Absent:\\^\\:5', 'Satisfactory:\\^\\:Unsatisfactory:\\^\\:30', '8', 'Unsatisfactory:\\^\\:Absent:\\^\\:1'),
(18, 'RP-17-EE-403', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '4', 'Unacceptable:\\^\\:Developing:\\^\\:2'),
(19, 'RP-17-EE-404', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '10', 'Developing:\\^\\:Satisfactory:\\^\\:3.5'),
(20, 'RP-17-EE-405', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '8.5', 'Satisfactory:\\^\\:Unsatisfactory:\\^\\:3'),
(21, 'RP-17-EE-406', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '9', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(22, 'RP-17-EE-407', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '4', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(23, 'RP-17-EE-408', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '7', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(24, 'RP-17-EE-409', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '6', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(25, 'RP-17-EE-410', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '5', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(26, 'RP-17-EE-411', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '8', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(27, 'RP-17-EE-412', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '10', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(28, 'RP-17-EE-413', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '9', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(29, 'RP-17-EE-414', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '8', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(30, 'RP-17-EE-415', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '9', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(31, 'RP-17-EE-416', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(32, 'RP-17-EE-417', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(33, 'RP-17-EE-418', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(34, 'RP-17-EE-419', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(35, 'RP-17-EE-420', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(36, 'RP-17-EE-421', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(37, 'RP-17-EE-422', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(38, 'RP-17-EE-423', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(39, 'RP-17-EE-424', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(40, 'RP-17-EE-425', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(41, 'RP-17-EE-426', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(42, 'RP-17-EE-427', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(43, 'RP-17-EE-428', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(44, 'RP-17-EE-429', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(45, 'RP-17-EE-430', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(46, 'RP-17-EE-431', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(47, 'RP-17-EE-432', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(48, 'RP-17-EE-433', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(49, 'RP-17-EE-434', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(50, 'RP-17-EE-435', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(51, 'RP-17-EE-436', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(52, 'RP-17-EE-437', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(53, 'RP-17-EE-438', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(54, 'RP-17-EE-439', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(55, 'RP-17-EE-440', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(56, 'RP-17-EE-441', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(57, 'RP-17-EE-442', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(58, 'RP-17-EE-443', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(59, 'RP-17-EE-444', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5'),
(60, 'RP-17-EE-445', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Unacceptable:\\^\\:Exemplary:\\^\\:6', 'Exemplary:\\^\\:Exemplary:\\^\\:50', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:5');

-- --------------------------------------------------------

--
-- Table structure for table `ee3104_Fall_2019`
--

CREATE TABLE `ee3104_Fall_2019` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee3104_Fall_2019`
--

INSERT INTO `ee3104_Fall_2019` (`serial`, `data_detail`) VALUES
(1, 'Instrument'),
(2, 'Question'),
(3, 'QuesPart'),
(4, 'MaxMarks'),
(5, 'CLO'),
(6, 'Date'),
(7, 'g_type'),
(8, 'rubric_set_id'),
(9, 'cep'),
(10, 'feature10'),
(11, 'feature11'),
(12, 'feature12'),
(13, 'feature13'),
(14, 'feature14'),
(15, 'RP-17-EE-400'),
(16, 'RP-17-EE-401'),
(17, 'RP-17-EE-402'),
(18, 'RP-17-EE-403'),
(19, 'RP-17-EE-404'),
(20, 'RP-17-EE-405'),
(21, 'RP-17-EE-406'),
(22, 'RP-17-EE-407'),
(23, 'RP-17-EE-408'),
(24, 'RP-17-EE-409'),
(25, 'RP-17-EE-410'),
(26, 'RP-17-EE-411'),
(27, 'RP-17-EE-412'),
(28, 'RP-17-EE-413'),
(29, 'RP-17-EE-414'),
(30, 'RP-17-EE-415'),
(31, 'RP-17-EE-416'),
(32, 'RP-17-EE-417'),
(33, 'RP-17-EE-418'),
(34, 'RP-17-EE-419'),
(35, 'RP-17-EE-420'),
(36, 'RP-17-EE-421'),
(37, 'RP-17-EE-422'),
(38, 'RP-17-EE-423'),
(39, 'RP-17-EE-424'),
(40, 'RP-17-EE-425'),
(41, 'RP-17-EE-426'),
(42, 'RP-17-EE-427'),
(43, 'RP-17-EE-428'),
(44, 'RP-17-EE-429'),
(45, 'RP-17-EE-430'),
(46, 'RP-17-EE-431'),
(47, 'RP-17-EE-432'),
(48, 'RP-17-EE-433'),
(49, 'RP-17-EE-434'),
(50, 'RP-17-EE-435'),
(51, 'RP-17-EE-436'),
(52, 'RP-17-EE-437'),
(53, 'RP-17-EE-438'),
(54, 'RP-17-EE-439'),
(55, 'RP-17-EE-440'),
(56, 'RP-17-EE-441'),
(57, 'RP-17-EE-442'),
(58, 'RP-17-EE-443'),
(59, 'RP-17-EE-444'),
(60, 'RP-17-EE-445');

-- --------------------------------------------------------

--
-- Table structure for table `ee3206l_Spring_2019`
--

CREATE TABLE `ee3206l_Spring_2019` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I15` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I16` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I17` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I18` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I19` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I20` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I22` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I23` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee3206l_Spring_2019`
--

INSERT INTO `ee3206l_Spring_2019` (`serial`, `data_detail`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I2`, `I3`, `I4`, `I14`, `I15`, `I16`, `I17`, `I18`, `I19`, `I20`, `I22`, `I1`, `I23`) VALUES
(1, 'Instrument', 'Midterm', 'Midterm', 'Midterm', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'Project', 'LAB', 'Other'),
(2, 'Question', '1', '2', '3', '1', '2', '2', '2', '2', '3', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '1', '1', '1'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, 'a', 'b', 'c', 'd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '10', '5', '5', '5', '2', '2', '2', '4', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '60', '10', '20'),
(5, 'CLO', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(15, 'RP-16-EE-404', '7', '3', '2', '2', '1.5', '0', '0', '2', '10', '9', '9', '9', '10', '10', '9', '9', '10', '10', '10', '55', '9', '20'),
(16, 'RP-16-EE-409', '6', '3', '2', '2', '2', '0', '1', '2', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '55', '10', '20'),
(17, 'RP-16-EE-413', '4', '4', '2', '3', '2', '0', '0', '2', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '57', '10', '20'),
(18, 'RP-16-EE-414', '6', '3', '1', '3', '2', '1.5', '0', '2', '10', '10', '10', '10', '9', '9', '10', '10', '9', '9', '9', '56', '10', '20'),
(19, 'RP-16-EE-416', '7', '3', '2', '4', '2', '0', '0', '3', '9', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '55', '10', '20'),
(20, 'RP-16-EE-418', '5', '2', '2', '2', '2', '0', '0', '1', '9', '10', '10', '10', '9', '9', '10', '10', '9', '9', '9', '56', '10', '20'),
(21, 'RP-16-EE-424', '5', '1', '2', '3', '0.5', '0', '1', '3', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '55', '9', '20'),
(22, 'RP-16-EE-428', '4', '2', '2', '2', '1', '0', '1', '3', '7', '8', '8', '8', '9', '9', '8', '8', '9', '9', '9', '53', '8', '20'),
(6, 'Date', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(9, 'cep', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ee3206l_Spring_2020`
--

CREATE TABLE `ee3206l_Spring_2020` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I15` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I16` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I17` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I18` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I19` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee3206l_Spring_2020`
--

INSERT INTO `ee3206l_Spring_2020` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`, `I16`, `I17`, `I18`, `I19`) VALUES
(1, 'Instrument', 'Midterm', 'Midterm', 'Midterm', 'LAB', 'LAB', 'LAB', 'LAB', 'LAB', 'Project', 'LAB', 'LAB', 'LAB', 'LAB', 'Final', 'Final', 'Final', 'Final', 'LAB', 'LAB'),
(2, 'Question', '1', '2', '3', '1', '2', '3', '4', '5', '1', '6', '7', '8', '9', '1', '1', '1', '2', '20', '19'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'a', 'b', 'c', NULL, NULL, NULL),
(4, 'MaxMarks', '5', '5', '10', '10', '20', '10', '10', '10', '60', '10', '10', '10', '10', '10', '20', '10', '20', '90', '80'),
(5, 'CLO', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(6, 'Date', '2020-03-12', '2020-03-12', '2020-03-12', '', '', '', '', '', '2020-12-05', '', '', '', '', '', '', '', '', '', ''),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'rubric', 'rubric', 'rubric', 'rubric', 'rubric', 'conventional', 'rubric', 'rubric', 'rubric', 'rubric', 'conventional', 'conventional', 'conventional', 'conventional', 'rubric', 'rubric'),
(8, 'rubric_set_id', '', '', '', '1', '2', '1', '1', '2', '1', '2', '2', '2', '2', '1', '1', '1', '1', '1', '3'),
(9, 'cep', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', ''),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'RP-17-EE-400', '2', '1', '2', 'Satisfactory:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:9', 'Exemplary:\\^\\:Developing:\\^\\:Exemplary:\\^\\:14.666666666667', 'Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:9.5', 'Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:9', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '59', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '10', '20', '10', '20', 'Exemplary:\\^\\:Exemplary:\\^\\:Developing:\\^\\:Exemplary:\\^\\:81', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:80'),
(16, 'RP-17-EE-403', '3', '1', '2.5', 'Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:9.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:20', 'Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:9', 'Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:9.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '51', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:9.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:9.5', '0', '0', '0', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:80'),
(17, 'RP-17-EE-405', '3', '2.5', '6.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:20', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:9.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '58', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '9', '19', '10', '20', 'Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:85.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:80'),
(18, 'RP-17-EE-406', '4', '5', '7.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:20', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:9.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '58', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '0', '0', '0', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:80'),
(19, 'RP-17-EE-411', '3', '1', '6.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:20', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:9.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '59', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '10', '15', '8', '15', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:80'),
(20, 'RP-17-EE-413', '5', '5', '3', 'Exemplary:\\^\\:Satisfactory:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:9', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:20', 'Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:9', 'Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:9', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '57', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '10', '20', '10', '20', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:80'),
(21, 'RP-17-EE-414', '5', '1', '5.5', 'Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:9', 'Exemplary:\\^\\:Developing:\\^\\:Exemplary:\\^\\:14.666666666667', 'Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:9.5', 'Satisfactory:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:8.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '57', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Absent:\\^\\:Absent:\\^\\:Absent:\\^\\:Absent:\\^\\:0', '10', '20', '10', '20', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:80'),
(22, 'RP-17-EE-425', '5', '2.5', '5.5', 'Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:9', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:20', 'Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:9.5', 'Satisfactory:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:9', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '59', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '0', '0', '0', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:80'),
(23, 'RP-17-EE-431', '5', '2', '4', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:20', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Satisfactory:\\^\\:Exemplary:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:9', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '58', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:10', '10', '20', '10', '19', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:80'),
(24, 'RP-17-EE-434', '3', '1', '2', 'Satisfactory:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Developing:\\^\\:8.5', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:20', 'Satisfactory:\\^\\:Developing:\\^\\:Satisfactory:\\^\\:Exemplary:\\^\\:8', 'Satisfactory:\\^\\:Developing:\\^\\:Satisfactory:\\^\\:Satisfactory:\\^\\:7.5', 'Absent:\\^\\:Absent:\\^\\:Absent:\\^\\:0', '0', 'Absent:\\^\\:Absent:\\^\\:Absent:\\^\\:0', 'Absent:\\^\\:Absent:\\^\\:Absent:\\^\\:0', 'Absent:\\^\\:Absent:\\^\\:Absent:\\^\\:Absent:\\^\\:0', 'Absent:\\^\\:Absent:\\^\\:Absent:\\^\\:Absent:\\^\\:0', '0', '0', '0', '0', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:90', 'Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:Exemplary:\\^\\:80');

-- --------------------------------------------------------

--
-- Table structure for table `ee3206_Spring_2019`
--

CREATE TABLE `ee3206_Spring_2019` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I15` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I16` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I17` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I18` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I19` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I20` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I21` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I22` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I23` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I24` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I25` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I26` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I27` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I28` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I29` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I30` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I31` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I32` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I33` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I34` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I35` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee3206_Spring_2019`
--

INSERT INTO `ee3206_Spring_2019` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`, `I16`, `I17`, `I18`, `I19`, `I20`, `I21`, `I22`, `I23`, `I24`, `I25`, `I26`, `I27`, `I28`, `I29`, `I30`, `I31`, `I32`, `I33`, `I34`, `I35`) VALUES
(1, 'Instrument', 'Quiz', 'Quiz', 'Assignment', 'Assignment', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final'),
(2, 'Question', '1', '2', '1', '2', '1', '1', '1', '2', '2', '2', '2', '2', '2', '2', '2', '3', '3', '3', '3', '3', '3', '1', '1', '1', '1', '2', '2', '2', '3', '3', '3', '3', '4', '4', '4'),
(3, 'QuesPart', '', '', '', '', 'a', 'b', 'c', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'a', 'b', 'c', 'd', 'e', 'f', 'a', 'b', 'c', 'd', 'a', 'b', 'c', 'a', 'b', 'c', 'd', 'a', 'b', 'c'),
(4, 'MaxMarks', '10', '10', '10', '10', '2', '2', '2', '2', '3', '3', '2', '2', '2', '2', '3', '1', '2', '2', '2', '2', '1', '5', '2', '5', '3', '3', '3', '2', '2', '1', '3', '1', '3', '3', '4'),
(5, 'CLO', '1', '2', '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '2', '2', '2', '2', '2', '3', '3', '3', '3', '2', '2', '3', '2', '2', '3', '2', '2', '2', '2'),
(15, 'RP-16-EE-404', '09', '08', '010', '010', '01.5', '02', '01.5', '01.5', '02.5', '02.5', '01.5', '00', '00', '01.5', '03', '01', '02', '02', '01.5', '02', '01.5', '4.5', '1.5', '4.5', '2.5', '3', '3', '1.5', '2', '1', '3', '0.5', '2.5', '2.5', '3.5'),
(16, 'RP-16-EE-409', '8', '8', '10', '10', '1.5', '1.5', '1.5', '1.5', '2.5', '2.5', '1.5', '1.5', '1', '0', '2', '1', '2', '2', '1.5', '2', '1', '3.5', '1.5', '3.5', '2.5', '2', '2', '1.5', '1.5', '1', '2.5', '1', '2.5', '2.5', '2.5'),
(17, 'RP-16-EE-413', '8', '9', '10', '10', '1.5', '1', '2', '1.5', '2.5', '2.5', '1.5', '1.5', '1', '1', '0', '1', '2', '2', '1', '2', '0.5', '3.5', '1.5', '3.5', '2.5', '2.5', '2.5', '1.5', '1.5', '0.5', '2.5', '1', '2.5', '2.5', '3'),
(18, 'RP-16-EE-414', '6', '7', '10', '10', '1.5', '1.5', '2', '2', '2.5', '2.5', '1.5', '0', '1', '0', '1', '1', '2', '2', '1.5', '1.5', '0.5', '3.5', '1.5', '3.5', '2.5', '2.5', '3', '1', '1.5', '0.5', '2.5', '0', '2.5', '2.5', '2.5'),
(19, 'RP-16-EE-416', '9', '9', '10', '10', '1.5', '2', '2', '2', '2.5', '2.5', '1.5', '1.5', '0.5', '2', '0', '1', '2', '2', '1.5', '1.5', '0.5', '4.5', '1.5', '4.5', '2.5', '3', '3', '0', '1.5', '1', '2.5', '0.5', '2.5', '3', '3.5'),
(20, 'RP-16-EE-418', '6', '6', '10', '10', '1.5', '2', '1', '1.5', '1.5', '0', '0', '0', '0', '0', '0', '1', '2', '2', '1.5', '0', '0', '3.5', '1.5', '3.5', '2', '3', '3', '2', '1', '0.5', '2.5', '0.5', '2.5', '2', '0'),
(21, 'RP-16-EE-424', '9', '8', '10', '10', '1.5', '1', '1.5', '1.5', '2.5', '2.5', '1.5', '0', '1', '1.5', '1', '1', '2', '2', '1.5', '1', '0.5', '3.5', '1.5', '3.5', '2.5', '2.5', '2.5', '1.5', '1', '1', '2.5', '1', '3', '2.5', '3.5'),
(22, 'RP-16-EE-428', '8', '8', '10', '10', '1.5', '2', '1.5', '2', '2.5', '2.5', '1.5', '1.5', '1.5', '1.5', '1.5', '1', '2', '2', '1.5', '2', '1', '0', '0', '0', '0', '2.5', '3', '2', '1.5', '0.5', '2.5', '1', '2.5', '2.5', '3.5'),
(6, 'Date', '2020-03-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'cep', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ee3206_Spring_2020`
--

CREATE TABLE `ee3206_Spring_2020` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I15` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I16` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I17` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I18` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I19` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I20` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I21` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I22` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I23` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I24` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I25` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I26` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I27` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I28` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I29` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I30` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee3206_Spring_2020`
--

INSERT INTO `ee3206_Spring_2020` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`, `I16`, `I17`, `I18`, `I19`, `I20`, `I21`, `I22`, `I23`, `I24`, `I25`, `I26`, `I27`, `I28`, `I29`, `I30`) VALUES
(1, 'Instrument', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Quiz', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Quiz', 'Quiz', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Assignment', 'Assignment', 'Final', 'Final', 'Final', 'Assignment'),
(2, 'Question', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, '1', '2', '1', '2', '3', '4', '5', '1', '2', '1', '2', '3', '3'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, '10', '10', '17', '5', '6', '5', '2', '25', '10', '14.5', '6', '19.5', '30'),
(5, 'CLO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '2', '2', '1', '2', '1', '2', '3', '3'),
(6, 'Date', '2020-01-06', '2020-01-08', '2020-01-15', '2020-01-20', '2020-01-22', '2020-02-03', '2020-02-10', '2020-02-12', '2020-02-17', '2020-02-19', '2020-03-02', '2020-03-04', '2020-03-04', '2020-04-13', '2020-04-15', '2020-04-20', '2020-04-22', '2020-02-10', '2020-02-10', '2020-03-12', '2020-03-12', '2020-03-12', '2020-03-12', '2020-03-12', '2020-03-07', '2020-05-02', '2020-10-30', '2020-10-30', '2020-10-30', '2020-10-12'),
(15, 'RP-17-EE-400', 'P', NULL, 'P', 'P', 'P', 'P', 'P', NULL, 'P', 'P', 'P', NULL, '0', 'P', 'P', 'P', 'P', '5', '7', '14.5', '3.5', '2', '3.5', '2', '25', '9', '12', '4.5', '18', '30'),
(16, 'RP-17-EE-403', 'P', 'P', 'P', NULL, 'P', 'A', 'P', 'P', 'P', 'A', NULL, NULL, '0', 'P', 'P', 'P', 'P', '5', '0', '8', '4', '3.5', '3.5', '2', '25', '9', '8', '4', '14', '30'),
(17, 'RP-17-EE-405', 'P', NULL, 'P', 'P', NULL, 'P', 'P', 'P', 'P', 'P', 'P', 'P', '10', 'P', 'P', 'P', 'P', '9', '10', '16', '5', '4', '4.5', '2', '25', '9', '8.5', '1.5', '13.5', '30'),
(18, 'RP-17-EE-406', 'P', 'P', 'P', 'P', 'P', 'L', 'P', 'P', 'P', 'P', 'P', 'P', '10', 'P', 'P', 'P', 'P', '6', '6', '16', '5', '4.5', '3', '2', '25', '10', '10', '3', '7.5', '30'),
(19, 'RP-17-EE-411', 'P', 'P', 'P', NULL, 'P', 'A', 'A', 'P', 'A', 'A', 'P', 'P', '10', 'P', 'P', 'P', 'P', '0', '0', '15', '5', '3', '4.5', '2', '25', '10', '12', '4.5', '12', '30'),
(20, 'RP-17-EE-413', 'P', NULL, 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '7', 'A', 'P', 'P', 'P', '9', '4', '15', '5', '3', '5', '2', '25', '9', '8', '4.5', '6.5', '30'),
(21, 'RP-17-EE-414', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', NULL, NULL, '0', 'P', 'P', 'P', 'A', '10', '4', '15', '5', '1.5', '4.5', '2', '25', '10', '12', '4.5', '10.5', '30'),
(22, 'RP-17-EE-425', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', NULL, '0', 'P', 'P', 'P', 'P', '5', '6', '15.5', '4', '4', '4.5', '2', '25', '8', '10', '0', '18.5', '30'),
(23, 'RP-17-EE-431', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '10', 'P', 'P', 'P', 'P', '6', '10', '16', '3.5', '5', '5', '2', '25', '10', '12', '5', '13.5', '30'),
(24, 'RP-17-EE-434', 'A', NULL, 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', NULL, '0', 'A', 'A', 'P', 'A', '6', '4', '12', '3', '1.5', '2.5', '2', '0', '0', '0', '0', '0', '0'),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', NULL, NULL, NULL, NULL, 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'cep', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, '0', '0', '', '', '', '', '', '0', '0', '', '', '', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ee5756_Spring_2020`
--

CREATE TABLE `ee5756_Spring_2020` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ee5756_Spring_2020`
--

INSERT INTO `ee5756_Spring_2020` (`serial`, `data_detail`) VALUES
(1, 'Instrument'),
(2, 'Question'),
(3, 'QuesPart'),
(4, 'MaxMarks'),
(5, 'CLO'),
(6, 'Date'),
(7, 'g_type'),
(8, 'rubric_set_id'),
(9, 'cep'),
(10, 'feature10'),
(11, 'feature11'),
(12, 'feature12'),
(13, 'feature13'),
(14, 'feature14'),
(15, 'RP-18-EE-401'),
(16, 'RP-18-EE-402'),
(17, 'RP-18-EE-403'),
(18, 'RP-18-EE-404'),
(19, 'RP-18-EE-405'),
(20, 'RP-18-EE-407'),
(21, 'RP-18-EE-408'),
(22, 'RP-18-EE-409'),
(23, 'RP-18-EE-410'),
(24, 'RP-18-EE-411'),
(25, 'RP-18-EE-412'),
(26, 'RP-18-EE-413'),
(27, 'RP-18-EE-414'),
(28, 'RP-18-EE-415'),
(29, 'RP-18-EE-416'),
(30, 'RP-18-EE-417'),
(31, 'RP-18-EE-418'),
(32, 'RP-18-EE-419'),
(33, 'RP-18-EE-420'),
(34, 'RP-18-EE-421'),
(35, 'RP-18-EE-422'),
(36, 'RP-18-EE-425'),
(37, 'RP-18-EE-426'),
(38, 'RP-18-EE-427'),
(39, 'RP-18-EE-428'),
(40, 'RP-18-EE-429'),
(41, 'RP-18-EE-430'),
(42, 'RP-18-EE-431'),
(43, 'RP-18-EE-432'),
(44, 'RP-18-EE-433'),
(45, 'KKRP-18-EE-436'),
(46, 'KKRP-18-EE-437'),
(47, 'KKRP-18-EE-438'),
(48, 'KKRP-18-EE-439'),
(49, 'KKRP-18-EE-440'),
(50, 'KKRP-18-EE-441'),
(51, 'KKRP-18-EE-442'),
(52, 'KKRP-18-EE-443'),
(53, 'KKRP-18-EE-444'),
(54, 'KKRP-18-EE-445'),
(55, 'KKRP-18-EE-446'),
(56, 'KKRP-18-EE-447'),
(57, 'KKRP-18-EE-448'),
(58, 'KKRP-18-EE-449'),
(59, 'KKRP-18-EE-450'),
(60, 'RP-18-EE-451');

-- --------------------------------------------------------

--
-- Table structure for table `me1204_Spring_2018`
--

CREATE TABLE `me1204_Spring_2018` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `me1204_Spring_2018`
--

INSERT INTO `me1204_Spring_2018` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`) VALUES
(1, 'Instrument', 'Midterm', 'Midterm', 'Midterm', 'Final', 'Final', 'Final', 'Final', 'Quiz', 'Assignment'),
(2, 'Question', '1', '2', '3', '1', '2', '3', '4', '1', '1'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '10', '12', '13', '10', '10', '10', '10', '12.5', '12.5'),
(5, 'CLO', '1', '1', '2', '2', '3', '3', '4', '3', '4'),
(6, 'Date', '', '', '', '', '', '', '', '', ''),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', '', '', '', '', '', '', '', '', ''),
(9, 'cep', '', '', '', '', '', '', '', '0', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'RP-17-EE-400', '8', '10', '13', '10', '7', '10', '9', '11', '11'),
(16, 'RP-17-EE-401', '8', '12', '12', '10', '7', '10', '9', '11', '11'),
(17, 'RP-17-EE-402', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 'RP-17-EE-403', '8', '10', '13', '10', '8', '10', '7', '12', '10'),
(19, 'RP-17-EE-404', '8', '12', '13', '10', '8', '10', '9', '12', '11'),
(20, 'RP-17-EE-405', '10', '12', '12', '8', '8', '8', '9', '11', '11'),
(21, 'RP-17-EE-406', '8', '12', '13', '10', '8', '10', '9', '12', '11'),
(22, 'RP-17-EE-407', '8', '12', '13', '10', '7', '8', '7', '11', '11'),
(23, 'RP-17-EE-408', '6', '12', '13', '10', '6', '10', '9', '11', '11'),
(24, 'RP-17-EE-409', '10', '12', '10', '10', '7', '10', '8', '11', '11'),
(25, 'RP-17-EE-410', '7', '12', '11', '10', '6', '10', '8', '11', '10'),
(26, 'RP-17-EE-411', '10', '11', '13', '10', '7', '8', '8', '11', '11'),
(27, 'RP-17-EE-412', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 'RP-17-EE-413', '5', '12', '0', '10', '1', '10', '0', '7', '10'),
(29, 'RP-17-EE-414', '10', '12', '13', '10', '8', '10', '8', '12', '11'),
(30, 'RP-17-EE-415', '10', '8', '13', '10', '7', '9', '8', '11', '11'),
(31, 'RP-17-EE-416', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 'RP-17-EE-417', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(33, 'RP-17-EE-418', '10', '12', '13', '10', '8', '10', '9', '12', '11'),
(34, 'RP-17-EE-419', '10', '12', '13', '10', '7', '10', '9', '12', '11'),
(35, 'RP-17-EE-420', '10', '11', '12', '10', '6', '10', '8', '11', '11'),
(36, 'RP-17-EE-421', '8', '10', '10', '10', '8', '10', '7', '11', '11'),
(37, 'RP-17-EE-422', '8', '12', '13', '10', '6', '10', '7', '11', '11'),
(38, 'RP-17-EE-423', '7', '12', '13', '10', '7', '10', '7', '11', '11'),
(39, 'RP-17-EE-424', '10', '12', '13', '10', '6', '10', '9', '12', '11'),
(40, 'RP-17-EE-425', '10', '10', '5', '10', '6', '10', '6', '10', '10'),
(41, 'RP-17-EE-426', '7', '11', '12', '10', '8', '10', '9', '11', '11'),
(42, 'RP-17-EE-427', '9', '12', '13', '10', '7', '8', '9', '11', '11'),
(43, 'RP-17-EE-428', '6', '8', '7', '10', '7', '10', '7', '10', '10'),
(44, 'RP-17-EE-429', '8', '10', '11', '10', '2', '10', '5', '10', '10'),
(45, 'RP-17-EE-430', '8', '6', '13', '10', '7', '10', '8', '11', '10'),
(46, 'RP-17-EE-431', '10', '12', '13', '10', '8', '10', '9', '12', '11'),
(47, 'RP-17-EE-432', '8', '11', '13', '10', '7', '6', '7', '11', '10'),
(48, 'RP-17-EE-433', '4', '11', '11', '10', '6', '9', '3', '11', '10'),
(49, 'RP-17-EE-434', '5', '11', '13', '10', '7', '8', '0', '10', '9'),
(50, 'RP-17-EE-435', '4', '12', '12', '10', '6', '9', '7', '11', '10'),
(51, 'RP-17-EE-436', '10', '12', '13', '10', '7', '10', '10', '12', '11'),
(52, 'RP-17-EE-437', '6', '12', '6', '8', '6', '9', '7', '10', '9'),
(53, 'RP-17-EE-438', '8', '12', '7', '10', '7', '10', '8', '11', '10'),
(54, 'RP-17-EE-439', '2', '2', '2', '10', '5', '10', '5', '6', '10'),
(55, 'RP-17-EE-440', '4', '3', '0', '4', '3', '10', '5', '7', '8'),
(56, 'RP-17-EE-441', '8', '10', '13', '10', '5', '8', '8', '11', '10'),
(57, 'RP-17-EE-442', '10', '2', '13', '10', '3', '0', '8', '10', '9'),
(58, 'RP-17-EE-443', '8', '6', '10', '10', '5', '6', '6', '10', '9'),
(59, 'RP-17-EE-444', '4', '5', '0', '10', '1', '0', '5', '10', '8'),
(60, 'RP-17-EE-445', '8', '5', '0', '10', '3', '10', '6', '9', '9'),
(61, 'KKRP-17-EE-446', '6', '12', '13', '10', '7', '10', '8', '11', '11'),
(62, 'KKRP-17-EE-447', '8', '3', '0', '10', '5', '10', '6', '9', '9'),
(63, 'KKRP-17-EE-448', '8', '6', '1', '10', '5', '10', '9', '9', '9'),
(64, 'KKRP-17-EE-449', '6', '9', '5', '10', '7', '10', '5', '10', '9'),
(65, 'KKRP-17-EE-450', '8', '7', '0', '10', '8', '10', '9', '10', '9'),
(66, 'KKRP-17-EE-451', '5', '12', '13', '10', '8', '10', '2', '11', '10'),
(67, 'KKRP-17-EE-452', '4', '6', '0', '10', '2', '10', '5', '8', '8'),
(68, 'KKRP-17-EE-453', '10', '12', '12', '10', '7', '10', '8', '11', '11'),
(69, 'KKRP-17-EE-454', '10', '12', '13', '10', '7', '10', '5', '11', '11'),
(70, 'KKRP-17-EE-455', '10', '12', '13', '10', '6', '8', '7', '11', '11'),
(71, 'KKRP-17-EE-456', '6', '8', '10', '10', '7', '9', '6', '10', '10'),
(72, 'KKRP-17-EE-457', '6', '6', '6', '10', '4', '10', '9', '10', '9'),
(73, 'KKRP-17-EE-458', '8', '12', '9', '10', '7', '10', '8', '11', '10'),
(74, 'KKRP-17-EE-459', '6', '6', '7', '10', '7', '8', '7', '10', '9'),
(75, 'KKRP-17-EE-460', '4', '8', '0', '7', '5', '1', '8', '9', '8'),
(76, 'KKRP-17-EE-461', '7', '7', '10', '10', '5', '9', '6', '10', '9'),
(77, 'KKRP-17-EE-462', '6', '7', '0', '10', '7', '6', '8', '9', '8'),
(78, 'KKRP-17-EE-463', '6', '5', '0', '10', '4', '10', '7', '9', '9'),
(79, 'RP-16-EE-432', '10', '11', '10', '10', '3', '10', '9', '11', '11'),
(80, 'RP-16-EE-438', '8', '8', '0', '10', '3', '10', '3', '9', '9'),
(81, 'RP-16-EE-441', '9', '12', '10', '10', '7', '10', '8', '11', '11');

-- --------------------------------------------------------

--
-- Table structure for table `ns1203_Spring_2018`
--

CREATE TABLE `ns1203_Spring_2018` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I15` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ns1203_Spring_2018`
--

INSERT INTO `ns1203_Spring_2018` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`) VALUES
(1, 'Instrument', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Final', 'Final', 'Final', 'Final', 'Final', 'Final', 'Quiz', 'Quiz', 'Assignment', 'Assignment'),
(2, 'Question', '1', '2', '3', '4', '5', '1', '2', '3', '4', '5', '6', '1', '2', '1', '2'),
(3, 'QuesPart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '5', '6', '5', '11', '8', '12', '6', '6', '6', '5', '5', '5', '5', '10', '5'),
(5, 'CLO', '2', '2', '3', '3', '1', '3', '4', '4', '4', '3', '3', '1', '3', '2', '4'),
(6, 'Date', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'cep', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'RP-17-EE-400', '4', '4', '5', '4', '6', '9', '5', '5', '3', '5', '4', '4', '5', '8', '5'),
(16, 'RP-17-EE-401', '4', '5', '4', '10', '8', '9', '5', '5', '4', '4', '5', '5', '4', '9', '4'),
(17, 'RP-17-EE-402', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 'RP-17-EE-403', '3', '5', '4', '10', '7', '10', '5', '5', '5', '4', '5', '5', '5', '8', '5'),
(19, 'RP-17-EE-404', '4', '5', '5', '10', '8', '11', '5', '6', '5', '5', '5', '4', '5', '9', '4'),
(20, 'RP-17-EE-405', '4', '5', '4', '9', '8', '11', '5', '5', '5', '4', '5', '4', '5', '9', '4'),
(21, 'RP-17-EE-406', '4', '5', '5', '10', '8', '10', '5', '5', '5', '5', '4', '5', '5', '9', '4'),
(22, 'RP-17-EE-407', '2', '5', '5', '10', '7', '10', '5', '5', '5', '4', '4', '5', '4', '9', '5'),
(23, 'RP-17-EE-408', '3', '5', '5', '8', '8', '7', '5', '5', '5', '5', '5', '4', '4', '8', '4'),
(24, 'RP-17-EE-409', '3', '4', '4', '8', '6', '8', '5', '5', '4', '4', '5', '5', '5', '9', '5'),
(25, 'RP-17-EE-410', '3', '4', '4', '8', '7', '8', '5', '5', '3', '4', '4', '4', '5', '8', '4'),
(26, 'RP-17-EE-411', '4', '4', '5', '8', '5', '9', '5', '5', '5', '4', '5', '4', '5', '8', '5'),
(27, 'RP-17-EE-412', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 'RP-17-EE-413', '3', '5', '5', '7', '7', '11', '5', '6', '5', '4', '4', '5', '4', '9', '5'),
(29, 'RP-17-EE-414', '4', '4', '4', '9', '7', '10', '5', '5', '5', '4', '5', '5', '4', '9', '5'),
(30, 'RP-17-EE-415', '0', '5', '4', '7', '6', '10', '4', '5', '4', '5', '4', '5', '5', '8', '4'),
(31, 'RP-17-EE-416', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 'RP-17-EE-417', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(33, 'RP-17-EE-418', '4', '4', '4', '9', '6', '9', '5', '5', '4', '4', '5', '5', '5', '8', '5'),
(34, 'RP-17-EE-419', '4', '5', '4', '9', '8', '10', '5', '5', '5', '4', '4', '4', '5', '9', '5'),
(35, 'RP-17-EE-420', '3', '5', '4', '7', '8', '10', '3', '5', '5', '4', '5', '4', '5', '9', '5'),
(36, 'RP-17-EE-421', '4', '4', '4', '7', '7', '10', '5', '6', '3', '5', '5', '5', '4', '8', '5'),
(37, 'RP-17-EE-422', '3', '5', '4', '9', '7', '9', '5', '6', '5', '4', '4', '4', '5', '8', '4'),
(38, 'RP-17-EE-423', '4', '5', '4', '9', '8', '10', '5', '5', '5', '4', '5', '4', '5', '8', '5'),
(39, 'RP-17-EE-424', '3', '5', '4', '8', '7', '10', '5', '5', '6', '4', '5', '5', '5', '9', '5'),
(40, 'RP-17-EE-425', '4', '5', '4', '9', '7', '9', '5', '4', '5', '4', '5', '5', '5', '9', '5'),
(41, 'RP-17-EE-426', '4', '3', '4', '9', '7', '12', '5', '5', '5', '4', '5', '4', '4', '9', '5'),
(42, 'RP-17-EE-427', '3', '5', '3', '8', '6', '10', '5', '5', '4', '4', '4', '5', '5', '9', '5'),
(43, 'RP-17-EE-428', '4', '5', '4', '7', '8', '9', '5', '5', '5', '4', '4', '5', '5', '8', '4'),
(44, 'RP-17-EE-429', '3', '5', '2', '7', '6', '9', '5', '5', '5', '4', '5', '4', '5', '8', '4'),
(45, 'RP-17-EE-430', '3', '5', '4', '4', '6', '10', '5', '6', '5', '4', '4', '5', '5', '9', '5'),
(46, 'RP-17-EE-431', '4', '5', '4', '10', '8', '11', '5', '5', '5', '5', '4', '4', '5', '8', '5'),
(47, 'RP-17-EE-432', '2', '5', '4', '9', '7', '10', '5', '5', '5', '4', '4', '5', '4', '8', '5'),
(48, 'RP-17-EE-433', '2', '4', '4', '7', '4', '5', '4', '5', '4', '1', '3', '5', '4', '9', '4'),
(49, 'RP-17-EE-434', '0', '5', '3', '6', '7', '8', '5', '6', '4', '3', '5', '5', '5', '9', '4'),
(50, 'RP-17-EE-435', '3', '5', '3', '8', '7', '11', '5', '5', '5', '4', '5', '5', '4', '8', '4'),
(51, 'RP-17-EE-436', '2', '5', '4', '10', '8', '9', '4', '5', '5', '5', '5', '4', '5', '9', '5'),
(52, 'RP-17-EE-437', '4', '4', '4', '7', '8', '9', '5', '5', '3', '4', '5', '5', '4', '9', '4'),
(53, 'RP-17-EE-438', '2', '5', '4', '8', '8', '10', '5', '5', '5', '5', '4', '5', '5', '9', '5'),
(54, 'RP-17-EE-439', '4', '4', '3', '4', '5', '8', '4', '4', '4', '4', '5', '5', '5', '8', '5'),
(55, 'RP-17-EE-440', '4', '5', '4', '8', '6', '9', '5', '5', '5', '4', '5', '4', '4', '9', '5'),
(56, 'RP-17-EE-441', '3', '4', '4', '2', '6', '9', '5', '4', '3', '4', '4', '5', '5', '8', '5'),
(57, 'RP-17-EE-442', '3', '5', '4', '5', '8', '9', '5', '5', '4', '4', '5', '5', '5', '9', '5'),
(58, 'RP-17-EE-443', '3', '4', '3', '2', '8', '8', '5', '3', '3', '4', '4', '4', '5', '9', '5'),
(59, 'RP-17-EE-444', '2', '5', '4', '8', '6', '4', '0', '5', '3', '4', '2', '4', '4', '9', '5'),
(60, 'RP-17-EE-445', '3', '4', '3', '7', '5', '7', '4', '4', '3', '4', '4', '5', '4', '9', '5'),
(61, 'KKRP-17-EE-446', '3', '4', '4', '7', '7', '9', '5', '5', '4', '5', '4', '5', '5', '9', '5'),
(62, 'KKRP-17-EE-447', '4', '5', '3', '7', '6', '11', '5', '6', '3', '5', '4', '4', '4', '9', '5'),
(63, 'KKRP-17-EE-448', '3', '4', '3', '8', '6', '4', '3', '5', '3', '3', '4', '5', '5', '9', '5'),
(64, 'KKRP-17-EE-449', '3', '4', '4', '7', '5', '9', '4', '5', '3', '5', '4', '5', '5', '9', '5'),
(65, 'KKRP-17-EE-450', '4', '5', '3', '6', '4', '10', '5', '5', '3', '4', '4', '5', '4', '9', '5'),
(66, 'KKRP-17-EE-451', '2', '4', '4', '6', '7', '6', '5', '5', '4', '4', '4', '4', '4', '8', '5'),
(67, 'KKRP-17-EE-452', '4', '3', '4', '9', '7', '9', '5', '6', '3', '4', '4', '4', '5', '8', '5'),
(68, 'KKRP-17-EE-453', '4', '5', '5', '9', '7', '10', '5', '5', '5', '4', '5', '4', '5', '8', '5'),
(69, 'KKRP-17-EE-454', '2', '5', '4', '7', '4', '6', '5', '5', '5', '4', '4', '5', '5', '9', '5'),
(70, 'KKRP-17-EE-455', '4', '4', '4', '9', '6', '8', '5', '5', '5', '4', '4', '5', '5', '8', '5'),
(71, 'KKRP-17-EE-456', '2', '4', '3', '7', '6', '9', '5', '6', '4', '4', '4', '5', '4', '8', '5'),
(72, 'KKRP-17-EE-457', '2', '4', '3', '6', '5', '8', '5', '5', '2', '4', '4', '5', '4', '9', '4'),
(73, 'KKRP-17-EE-458', '3', '5', '4', '8', '7', '8', '5', '6', '5', '4', '4', '5', '4', '8', '5'),
(74, 'KKRP-17-EE-459', '4', '5', '4', '7', '7', '6', '5', '5', '4', '4', '4', '5', '4', '8', '4'),
(75, 'KKRP-17-EE-460', '3', '4', '5', '6', '5', '8', '4', '4', '3', '4', '4', '4', '5', '9', '4'),
(76, 'KKRP-17-EE-461', '4', '5', '4', '8', '6', '6', '5', '5', '4', '4', '5', '5', '5', '9', '5'),
(77, 'KKRP-17-EE-462', '3', '4', '4', '8', '7', '8', '4', '5', '4', '3', '4', '5', '4', '9', '5'),
(78, 'KKRP-17-EE-463', '3', '3', '0', '6', '4', '8', '2', '2', '2', '4', '4', '5', '4', '9', '5'),
(79, 'RP-16-EE-432', '2', '4', '4', '7', '4', '7', '4', '5', '3', '3', '2', '5', '4', '8', '4'),
(80, 'RP-16-EE-419', '2', '2', '4', '7', '6', '9', '5', '6', '5', '3', '0', '5', '4', '8', '4'),
(81, 'RP-16-EE-443', '3', '4', '4', '8', '5', '4', '5', '5', '5', '4', '5', '4', '4', '8', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ns1205_Spring_2019`
--

CREATE TABLE `ns1205_Spring_2019` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ns1205_Spring_2019`
--

INSERT INTO `ns1205_Spring_2019` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`) VALUES
(1, 'Instrument', 'Quiz', 'Quiz', 'Quiz', 'Assignment', 'Assignment', 'Midterm', 'Midterm', 'Midterm', 'Final', 'Final', 'Final'),
(2, 'Question', '1', '2', '3', '1', '2', '1', '2', '3', '1', '2', '3'),
(3, 'QuesPart', '', '', '', '', '', 'a', 'a', 'a', 'a', 'a', 'a'),
(4, 'MaxMarks', '5', '5', '5', '5', '5', '14', '16', '5', '14', '20', '6'),
(5, 'CLO', '2', '3', '3', '4', '4', '1', '2', '4', '1', '3', '4'),
(15, 'RP-17-EE-400', '04', '04', '5', '4', '5', '8.0', '12.0', '4.0', '7.5', '013.5', '03'),
(16, 'RP-17-EE-401', '5', '5', '5', '5', '5', '13', '16', '0', '11', '15', '6'),
(17, 'RP-17-EE-402', '0', '', '0', '0', '0', 'A', 'A', 'A', 'A', 'A', 'A'),
(18, 'RP-17-EE-403', '5', '5', '5', '5', '5', '11', '13', '4', '10.5', '17', '5.5'),
(19, 'RP-17-EE-404', '3', '5', '5', '5', '5', '11.5', '12.5', '3', '13', '19', '6'),
(20, 'RP-17-EE-405', '5', '5', '5', '5', '5', '13.5', '14.5', '4', '12', '16', '6'),
(21, 'RP-17-EE-406', '5', '5', '5', '5', '5', '14', '16', '3', '10.5', '19.5', '6'),
(22, 'RP-17-EE-407', '3', '4', '5', '5', '4', '8', '14', '3', '9', '12', '5'),
(23, 'RP-17-EE-408', '2', '2', '4', '5', '0', '11', '7', '3', '5.5', '16', '2.5'),
(24, 'RP-17-EE-409', '4', '4', '5', '5', '5', '13', '9', '2', '6.5', '14', '4.5'),
(25, 'RP-17-EE-410', '5', '4', '5', '4', '4', '10', '11', '3', '6', '12', '6'),
(26, 'RP-17-EE-411', '5', '5', '5', '5', '5', '13', '13', '2', '12.5', '17.5', '6'),
(27, 'RP-17-EE-412', '0', '', '0', '0', '0', 'A', 'A', 'A', 'A', 'A', 'A'),
(28, 'RP-17-EE-413', '3', '5', '2', '4', '4', '13', '4', '2', '9', '12', '4'),
(29, 'RP-17-EE-414', '5', '5', '5', '5', '5', '10.5', '10.5', '3', '10.5', '19.5', '6'),
(30, 'RP-17-EE-415', '5', '4', '3', '5', '5', '8', '8', '3', '6', '12', '6'),
(31, 'RP-17-EE-416', '0', '', '0', '0', '0', 'A', 'A', 'A', 'A', 'A', 'A'),
(32, 'RP-17-EE-417', '0', '', '0', '0', '0', '3', '1', '2', 'A', 'A', 'A'),
(33, 'RP-17-EE-418', '5', '5', '5', '5', '5', '11', '15', '3', '8', '15', '5'),
(34, 'RP-17-EE-419', '4', '5', '5', '5', '5', '11.5', '13.5', '3', '7.5', '15.5', '6'),
(35, 'RP-17-EE-420', '2', '5', '4', '5', '5', '10.5', '11.5', '3', '8', '15', '6'),
(36, 'RP-17-EE-421', '2', '1', '4', '0', '4', '8.5', '13.5', '2', '10.5', '14.5', '3'),
(37, 'RP-17-EE-422', '4', '5', '5', '4', '4', '9', '8', '3', '6.5', '15.5', '6'),
(38, 'RP-17-EE-423', '5', '5', '5', '5', '5', '11', '11', '2', '7', '12', '6'),
(39, 'RP-17-EE-424', '2', '2', '2', '3', '4', '7.5', '5.5', '3', '8', '12', '3'),
(40, 'RP-17-EE-425', '4', '4', '5', '4', '4', '8', '11', '3', '10', '16', '6'),
(41, 'RP-17-EE-426', '4', '5', '5', '5', '5', '13', '14', '3', '11', '15', '3'),
(42, 'RP-17-EE-427', '4', '5', '5', '5', '5', '13', '15', '3', '10.5', '12.5', '3'),
(43, 'RP-17-EE-428', '3', '3', '5', '5', '4', '8', '6', '2', '5', '15', '6'),
(44, 'RP-17-EE-429', '1', '3', '0', '4', '5', '10', '7', '2', '5.5', '10', '2.5'),
(45, 'RP-17-EE-430', '3', '2', '4', '4', '5', '11', '1', '3', '5', '8', '4'),
(46, 'RP-17-EE-431', '5', '5', '5', '5', '4', '13', '9', '4', '10', '15', '6'),
(47, 'RP-17-EE-432', '1', '3', '5', '5', '4', '10', '5', '4', '6.5', '8.5', '3'),
(48, 'RP-17-EE-433', '3', '5', '5', '4', '5', '10', '10', '3', '5', '6', '3'),
(49, 'RP-17-EE-434', '1', '1', '5', '5', '5', '9', '11', '3', '7', '15', '4'),
(50, 'RP-17-EE-435', '3', '1', '4', '5', '5', '7.5', '10.5', '3', '7', '13', '6'),
(51, 'RP-17-EE-436', '4', '5', '5', '5', '5', '11.5', '10.5', '3', '9', '17', '5'),
(52, 'RP-17-EE-437', '4', '4', '5', '5', '5', '5', '8', '1', '11', '12', '3'),
(53, 'RP-17-EE-438', '4', '4', '5', '3', '3', '11', '10', '3', '10.5', '10.5', '6'),
(54, 'RP-17-EE-439', '4', '4', '3', '5', '5', '8', '6', '0', '3', '11', '1'),
(55, 'RP-17-EE-440', '2', '1', '5', '5', '5', '1.5', '0.5', '2', '2', '3', '1'),
(56, 'RP-17-EE-441', '3', '0', '1', '5', '4', '9.5', '7.5', '2', '7.5', '12', '2.5'),
(57, 'RP-17-EE-442', '1', '2', '4', '5', '4', '12', '6', '1', '8', '9', '2'),
(58, 'RP-17-EE-443', '4', '3', '4', '5', '4', '10', '4', '3', '5', '6.5', '2.5'),
(59, 'RP-17-EE-444', '2', '1', '4', '4', '5', '7', '6', '4', '4', '9', '2'),
(60, 'RP-17-EE-445', '3', '2', '2', '4', '4', '5', '0', '1', '4', '3', '2'),
(61, 'KKRP-17-EE-446', '5', '5', '3', '4', '5', '8', '7', '3', '4', '12', '3'),
(62, 'KKRP-17-EE-447', '4', '3', '2', '5', '4', '8.5', '1.5', '2', '4', '12', '4'),
(63, 'KKRP-17-EE-448', '3', '3', '3', '5', '5', '6', '5', '3', '5', '9', '3'),
(64, 'KKRP-17-EE-449', '5', '5', '4', '5', '5', '7.5', '5.5', '0', '7', '7', '3'),
(65, 'KKRP-17-EE-450', '4', '4', '2', '5', '5', '6', '5', '2', '5', '8', '4'),
(66, 'KKRP-17-EE-451', '3', '2', '4', '4', '4', '6', '1', '0', '3', '7', '2'),
(67, 'KKRP-17-EE-452', '5', '5', '3', '5', '5', '7', '7', '2', '4', '5', '2'),
(68, 'KKRP-17-EE-453', '5', '5', '5', '5', '5', '11', '11', '3', '5.5', '16.5', '4'),
(69, 'KKRP-17-EE-454', '2', '3', '4', '4', '5', '7', '6', '2', '7', '8.5', '5.5'),
(70, 'KKRP-17-EE-455', '5', '4', '5', '5', '5', '6', '6', '3', '4.5', '5.5', '1'),
(71, 'KKRP-17-EE-456', '3', '5', '4', '4', '4', '7', '8', '3', '9', '11', '3'),
(72, 'KKRP-17-EE-457', '3', '1', '3', '0', '4', '4', '4', '3', '2', '5', '2'),
(73, 'KKRP-17-EE-458', '5', '5', '5', '5', '5', '8.5', '6.5', '2', '4', '16', '4'),
(74, 'KKRP-17-EE-459', '5', '5', '4', '5', '4', '8.5', '3.5', '1', '7.5', '10.5', '3'),
(75, 'KKRP-17-EE-460', '1', '4', '5', '4', '4', '3.5', '1.5', '1', '4.5', '3.5', '2'),
(76, 'KKRP-17-EE-461', '3', '3', '4', '5', '4', '7', '6', '1', '5', '9', '3'),
(77, 'KKRP-17-EE-462', '5', '5', '5', '5', '5', '6', '5', '2', '3', '6', '3'),
(78, 'KKRP-17-EE-463', '0', '2', '1', '0', '0', '3', '0', '2', '2.5', '1.5', '1'),
(6, 'Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'cep', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ns2104_Fall_2019`
--

CREATE TABLE `ns2104_Fall_2019` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I15` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I16` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I17` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I18` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I19` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I20` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I21` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I22` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I23` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I24` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I25` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I26` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I27` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I28` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I29` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I30` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I31` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I32` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I33` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I34` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I35` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I36` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I37` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I38` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I39` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I40` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I41` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I42` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I43` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I44` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I45` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I46` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I47` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I48` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I49` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I50` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I51` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I52` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ns2104_Fall_2019`
--

INSERT INTO `ns2104_Fall_2019` (`serial`, `data_detail`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`, `I16`, `I17`, `I18`, `I19`, `I20`, `I21`, `I22`, `I23`, `I24`, `I25`, `I26`, `I27`, `I28`, `I29`, `I30`, `I31`, `I32`, `I33`, `I34`, `I35`, `I36`, `I37`, `I38`, `I39`, `I40`, `I41`, `I42`, `I43`, `I44`, `I45`, `I46`, `I47`, `I48`, `I49`, `I50`, `I51`, `I52`) VALUES
(1, 'Instrument', 'Quiz', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Attendance', 'Quiz', 'Assignment', 'Quiz', 'Quiz', 'Quiz', 'Quiz', 'Final', 'Final', 'Final', 'VIVA', 'VIVA', 'VIVA'),
(2, 'Question', '4', '1', '2', '2', '2', '2', '2', '2', '3', '4', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', '1', '3', '2', '5', '1', '1', '2', '3', '1', '2', '3'),
(3, 'QuesPart', '', '', 'a', 'b', 'c', 'd', 'e', 'f', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '10', '6', '2', '2', '2', '1', '2', '1', '10', '3', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '80', '10', '10', '10', '10', '5', '15', '5', '10', '10', '10'),
(5, 'CLO', '2', '1', '1', '1', '1', '1', '2', '1', '1', '2', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '2', '2', '1', '2', '1', '1', '2', '3', '1', '2', '3'),
(15, 'RP-18-EE-401', '0', '6', '2', '0', '1', '0', '1', '0', '0', '3', '6', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'A', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '4', '80', '2.5', '8', '1', '6', '1', '6', '3', '9', '10', '8'),
(16, 'RP-18-EE-402', '1.5', '6', '2', '2', '2', '1', '2', '0', '10', '3', '2', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '0', '80', '4', '0.5', '6', '10', '3', '8', '4', '10', '9.5', '10'),
(17, 'RP-18-EE-403', '0', '5.5', '2', '2', '2', '0', '2', '0', '0', '1', '0', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'A', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'A', 'P', 'A', 'P', 'P', '4', '80', '0', '0', '0', '9', '0', '0', '0', '0', '0', '0'),
(18, 'RP-18-EE-404', '0', '4', '2', '2', '1.5', '1', '2', '1', '0', '1', '6', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '5', '80', '3.5', '9', '6', '10', '3', '8', '4', '9', '10', '9'),
(19, 'RP-18-EE-405', '2', '5.5', '2', '2', '2', '0', '0', '0', '10', '1', '0', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', '0', '80', '3', '0.5', '0', '4', '3', '8', '1', '8', '10', '10'),
(20, 'RP-18-EE-407', '1.5', '6', '2', '2', '2', '1', '2', '0', '0', '1', '4', 'P', 'P', 'P', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', '4', '70', '1.5', '10', '3', '10', '2', '5', '3', '8', '9', '8'),
(21, 'RP-18-EE-408', '4.5', '6', '2', '0', '1', '0', '1', '0', '5', '3', '0', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'A', 'P', 'A', 'P', 'A', 'P', 'A', 'A', 'P', 'A', 'P', 'P', 'P', 'P', 'A', 'P', '4', '80', '4', '8', '0', '10', '4', '7', '4', '10', '8', '9'),
(22, 'RP-18-EE-409', '0', '6', '2', '2', '2', '1', '2', '0', '5', '3', '6', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '4', '80', '4', '3', '6.5', '8', '0', '4', '1', '10', '8', '10'),
(23, 'RP-18-EE-410', '0', '6', '2', '2', '1', '1', '2', '0', '5', '3', '6', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'L', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '4', '80', '1', '10', '4', '6', '3', '5', '2', '3', '0', '0'),
(24, 'RP-18-EE-411', '0', '6', '2', '2', '1', '1', '0', '0', '0', '1', '4', 'P', 'P', 'A', 'A', 'A', 'A', 'P', 'A', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', '4', '73', '2.5', '0.5', '6', '5', '0', '2', '1', '0', '0', '0'),
(25, 'RP-18-EE-412', '3.5', '6', '1.5', '2', '1', '1', '2', '0', '5', '3', '4', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', '7', '80', '3', '4', '3', '10', '5', '11', '5', '10', '10', '10'),
(26, 'RP-18-EE-414', '3.5', '6', '2', '2', '2', '1', '2', '1', '5', '3', '0', 'P', 'P', 'P', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '6', '80', '5', '4.5', '1', '8', '0', '0', '0', '0', '0', '0'),
(27, 'RP-18-EE-415', '2', '6', '2', '2', '2', '0', '1', '0', '10', '3', '2', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', '2', '80', '5', '10', '0', '0', '2', '6', '3', '10', '9.5', '9.5'),
(28, 'RP-18-EE-416', '1.5', '0', '2', '2', '2', '1', '2', '1', '5', '1', '0', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'A', 'A', 'P', 'P', 'A', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'A', 'P', 'A', 'P', 'A', 'P', 'P', 'P', 'P', '9', '80', '1.5', '6', '3', '0', '0', '0', '0', '0', '0', '0'),
(29, 'RP-18-EE-417', '0', '5', '2', '0', '1', '1', '2', '1', '0', '3', '0', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'A', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', '0', '80', '0', '7', '0', '0', '3', '8', '0', '10', '6', '9'),
(30, 'RP-18-EE-418', '1', '0', '2', '2', '1', '0', '2', '1', '5', '0', '0', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '4', '60', '2.5', '5', '0', '0', '4', '7', '3', '9', '10', '10'),
(31, 'RP-18-EE-419', '2', '0', '2', '2', '1', '0', '2', '1', '0', '3', '3.5', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'A', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', '4', '80', '5', '7', '3', '10', '2', '6', '3', '8', '10', '8'),
(32, 'RP-18-EE-420', '0', '6', '2', '2', '2', '0', '2', '1', '10', '3', '4', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'L', 'A', 'P', 'A', 'P', 'P', 'P', 'A', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', '0', '70', '0.5', '0', '0', '5', '3', '9', '3', '0', '7', '7'),
(33, 'RP-18-EE-421', '0', '6', '2', '2', '2', '1', '2', '0', '10', '1', '4.5', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', '5', '80', '3', '10', '0', '7', '4', '9', '4', '10', '10', '10'),
(34, 'RP-18-EE-422', '4', '6', '2', '2', '2', '1', '2', '0', '10', '2.5', '4', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', '2', '80', '6', '10', '0', '10', '3', '10', '5', '10', '8', '8'),
(35, 'RP-18-EE-425', '0', '6', '1.5', '2', '2', '1', '2', '0', '10', '3', '6', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '4', '80', '3', '7', '3', '10', '3', '9', '5', '9', '10', '9'),
(36, 'RP-18-EE-426', '0', '6', '2', '2', '1', '0', '2', '0', '0', '1', '0', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'A', 'P', 'P', 'A', 'P', 'P', 'P', 'A', 'A', 'P', 'A', 'A', 'P', 'P', 'A', 'P', 'P', '4', '80', '2', '3', '0', '10', '0', '0', '0', '0', '0', '0'),
(37, 'RP-18-EE-427', '0', '0', '2', '0', '0.5', '1', '2', '1', '5', '3', '0', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', '4', '75', '2', '4.5', '0', '9', '4', '7', '4', '10', '8', '9'),
(38, 'RP-18-EE-428', '0', '6', '1', '0', '2', '0', '1.5', '1', '10', '1', '0', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', '0', '0', '0', '10', '0', '0', '1', '3', '2', '9', '9', '10'),
(39, 'RP-18-EE-429', '0', '0', '2', '2', '2', '1', '2', '1', '0', '1', '0', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '5', '80', '4', '4.5', '1', '7', '0', '8', '1', '9.5', '10', '8'),
(40, 'RP-18-EE-430', '1.5', '6', '1.5', '0', '0.5', '0', '1.5', '0', '0', '2.5', '4', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', '4', '75', '2', '5', '0', '6.5', '3', '4', '1', '10', '10', '9'),
(41, 'RP-18-EE-431', '1', '6', '1', '0', '0.5', '1', '1', '0.5', '0', '3', '0', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '2', '80', '3', '3', '0', '5', '3', '7', '2', '9.5', '10', '9.5'),
(42, 'RP-18-EE-432', '0', '6', '2', '2', '2', '0', '2', '1', '5', '1', '0', 'P', 'P', 'P', 'P', 'A', 'A', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'A', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '2', '80', '0', '8', '6', '0', '3', '7', '3', '10', '10', '8'),
(43, 'RP-18-EE-433', '1.5', '6', '2', '2', '2', '1', '2', '1', '10', '3', '6', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '5', '70', '3.5', '3.5', '9', '0', '1', '9', '2', '9.5', '9.5', '9.5'),
(44, 'KKRP-18-EE-436', '2', '6', '2', '2', '2', '0', '2', '0', '0', '3', '2', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '5', '70', '3.5', '3.5', '1', '4', '2', '7', '4', '5', '10', '9'),
(45, 'KKRP-18-EE-437', '1.5', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'P', 'A', 'A', 'A', 'P', 'A', 'P', 'P', 'P', 'P', 'A', 'A', 'A', 'A', 'A', 'L', 'A', 'P', 'A', 'A', 'A', 'A', 'P', 'P', 'P', 'A', 'A', 'A', 'P', '0', '0', '0', '0.5', '0', '0', '2', '3', '2', '0', '0', '0'),
(46, 'KKRP-18-EE-438', '1', '0', '0.5', '0', '0', '0', '1', '0', '0', '3', '4', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', '0', '80', '0.5', '3', '0', '3', '1', '6', '2', '7', '8.5', '5'),
(47, 'KKRP-18-EE-439', '3', '0', '0.5', '0.5', '0', '0', '0.5', '0', '0', '0', '0', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'A', 'P', 'P', 'A', 'P', 'P', 'A', 'P', 'A', 'P', 'P', 'P', 'P', 'A', 'A', 'P', 'P', '0', '70', '0', '0', '3', '5', '1', '5', '2', '5', '8', '8'),
(48, 'KKRP-18-EE-440', '0', '0', '2', '2', '2', '0', '0', '1', '0', '1', '0', 'P', 'P', 'A', 'A', 'P', 'A', 'P', 'A', 'A', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', '0', '80', '1', '0.5', '0', '0', '3', '5', '2', '9', '9', '9'),
(49, 'KKRP-18-EE-441', '2', '6', '2', '2', '2', '0', '2', '0.5', '10', '3', '6', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'L', 'L', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', '0', '80', '5', '10', '3', '5', '2', '7', '3', '7', '7', '3'),
(50, 'KKRP-18-EE-442', '0', '0', '0.5', '2', '1', '0', '0.5', '0', '0', '3', '0', 'P', 'A', 'P', 'P', 'P', 'P', 'A', 'A', 'A', 'L', 'L', 'L', 'A', 'P', 'P', 'A', 'A', 'P', 'A', 'P', 'P', 'A', 'P', 'A', 'P', 'A', 'P', 'P', 'P', '0', '75', '0', '0', '2', '0', '1', '7', '3', '8', '6', '8'),
(51, 'KKRP-18-EE-443', '2', '6', '2', '2', '0.5', '0', '0', '0', '0', '2.5', '0', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'A', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', '0', '80', '3', '0', '0', '5', '0', '6', '1', '5', '10', '8'),
(52, 'KKRP-18-EE-444', '0', '0', '0.5', '0', '2', '0', '0', '0', '0', '1', '0', 'P', 'A', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'A', 'A', 'L', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '2', '80', '0.5', '0', '0', '0', '2', '8', '1', '7', '9', '9.5'),
(53, 'KKRP-18-EE-445', '0', '0', '2', '2', '1', '0', '2', '0.5', '0', '3', '0', 'P', 'A', 'A', 'A', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '0', '70', '0', '10', '0', '0', '3', '3', '1', '7', '8.5', '5.5'),
(54, 'KKRP-18-EE-446', '0', '0', '0', '0', '0.5', '0', '0', '0', '0', '1', '0', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', '0', '80', '1', '0', '0', '0', '2', '3', '3', '9.5', '10', '9.5'),
(55, 'KKRP-18-EE-447', '0', '6', '2', '2', '2', '0', '2', '0', '0', '1', '0', 'P', 'A', 'A', 'A', 'P', 'A', 'P', 'A', 'P', 'L', 'L', 'L', 'L', 'A', 'A', 'A', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '3', '80', '1', '0', '3', '0', '3', '9', '0', '9', '7', '7'),
(56, 'KKRP-18-EE-448', '0', '0', '2', '2', '2', '0', '1', '1', '0', '3', '2', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'A', 'P', 'P', 'A', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'A', 'P', 'P', 'P', '3', '50', '0', '0', '0', '0', '2', '6', '3', '10', '10', '8'),
(57, 'KKRP-18-EE-449', '0.5', '0', '2', '2', '0.5', '0', '0', '0', '0', '2', '0', 'P', 'P', 'A', 'A', 'P', 'A', 'P', 'P', 'P', 'A', 'A', 'A', 'A', 'P', 'P', 'L', 'L', 'L', 'L', 'L', 'L', 'A', 'A', 'P', 'A', 'A', 'A', 'A', 'P', '0', '80', '0', '0', '0', '0', '1', '9', '4', '9', '8', '8'),
(58, 'KKRP-18-EE-450', '0', '0', '1', '2', '1.5', '0', '2', '0', '0', '3', '0', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '4', '80', '4.5', '2', '0', '5', '2', '8', '4', '8', '10', '9'),
(59, 'RP-18-EE-451', '0', '6', '2', '0', '1', '0', '2', '0', '0', '1', '0', 'P', 'L', 'L', 'L', 'L', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'A', 'P', 'P', 'P', 'P', 'P', 'A', 'P', '4', '80', '0', '0', '0', '6', '4', '1', '3', '9.5', '10', '9.5'),
(6, 'Date', '', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-13', '2019-10-28', '2019-10-31', '2019-11-04', '2019-11-07', '2019-11-11', '2019-11-14', '2019-11-18', '2019-11-21', '2019-11-25', '2019-11-28', '2019-12-05', '2019-12-09', '2019-12-12', '2019-12-16', '2019-12-19', '2020-01-20', '2020-01-23', '2020-01-27', '2020-01-30', '2020-02-03', '2020-02-06', '2020-02-10', '2020-02-13', '2020-02-17', '2020-02-20', '2020-03-09', '2020-03-05', '2020-03-02', '2020-03-11', '2020-03-11', '2020-01-17', '2020-02-10', '2019-11-28', '2020-03-02', '2019-11-21', '2020-08-18', '2020-08-18', '2020-08-18', '2020-08-27', '2020-08-27', '2020-08-27'),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '', '', '', '', '', '', '', '', '', ''),
(9, 'cep', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '0', '', '0'),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'RP-16-EE-438', '0', '0', '2', '0', '1', '0', '2', '0', '0', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '0', '0', '10', '10', '1', '2', '6', '0', '0', '0', '0'),
(61, 'RP-17-EE-424', '0', '6', '0', '0', '1', '1', '1', '1', '10', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '76', '10', '5', '0', '0', '0', '0', '0', '0', '0', '0'),
(62, 'RP-17-EE-428', '0', '6', '0', '2', '1', '1', '1', '0', '0', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '60', '0', '0', '0', '0', '3', '8', '2', '10', '10', '8'),
(63, 'RP-17-EE-429', '0', '0', '2', '0', '1', '0', '1', '0', '0', '1', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '60', '0', '0', '0', '0', '0', '8', '2', '8.5', '8.5', '7.5'),
(64, 'RP-17-EE-439', '0', '0', '1', '0', '0.5', '0', '0', '0', '0', '3', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', '0', '0', '1', '4', '1', '0', '0', '0'),
(65, 'RP-17-EE-440', '0', '0', '0', '0', '1', '0', '1', '0', '0', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '60', '0', '0', '0', '0', '1', '4', '1', '0', '0', '0'),
(66, 'RP-17-EE-441', '0', '6', '2', '2', '2', '1', '1', '0', '0', '3', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '70', '0', '0', '0', '0', '1', '4', '2', '10', '8', '3'),
(67, 'RP-17-EE-442', '0', '0', '2', '2', '1', '1', '1', '0', '0', '1', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '80', '0', '0', '0', '0', '0', '5', '3', '9', '10', '8'),
(68, 'RP-17-EE-443', '0', '6', '2', '0', '1', '0', '0', '0', '5', '1', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '80', '0', '0', '0', '0', '1', '7', '1', '0', '0', '0'),
(69, 'RP-17-EE-444', '0', '0', '2', '0', '1', '0', '0', '0', '0', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '65', '0', '0', '0', '0', '2', '4', '1', '8', '10', '10'),
(70, 'RP-17-EE-445', '10', '0', '2', '2', '1', '0', '0', '0', '0', '1', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '80', '10', '0', '0', '0', '1', '8', '3', '9', '10', '8');

-- --------------------------------------------------------

--
-- Table structure for table `ns3201_Spring_2019`
--

CREATE TABLE `ns3201_Spring_2019` (
  `serial` int(11) NOT NULL,
  `data_detail` varchar(255) COLLATE utf8_bin NOT NULL,
  `I7` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I8` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I9` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I10` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I11` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I12` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I13` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I14` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I15` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I5` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I6` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I16` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `I17` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ns3201_Spring_2019`
--

INSERT INTO `ns3201_Spring_2019` (`serial`, `data_detail`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`, `I1`, `I2`, `I3`, `I4`, `I5`, `I6`, `I16`, `I17`) VALUES
(1, 'Instrument', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Midterm', 'Final', 'Final', 'Final', 'Final', 'Final', 'Quiz', 'Quiz', 'Quiz', 'Assignment', 'Assignment', 'Assignment', 'Final'),
(2, 'Question', '1', '2', '3', '4', '5', '1', '1', '1', '1', '2', '1', '2', '3', '1', '2', '3', '3'),
(3, 'QuesPart', '', '', '', '', '', 'a', 'b', 'c', 'd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'MaxMarks', '5', '10', '7', '6', '7', '5', '16', '3', '6', '5', '10', '10', '10', '10', '10', '10', '5'),
(5, 'CLO', '1', '1', '1', '1', '1', '2', '2', '2', '3', '1', '1', '1', '2', '3', '3', '3', '2'),
(15, 'RP-16-EE-400', '4', '6.5', '4', '5', '2.5', '3', '5.5', '2', '4', '2.5', '0', '9.5', '0', '0', '10', '10', '1'),
(16, 'RP-16-EE-403', '5', '10', '7', '5', '6', '5', '16', '1.5', '6', '2', '10', '7', '8', '10', '10', '10', '5'),
(17, 'RP-16-EE-404', '5', '7', '7', '5.5', '4.5', '2', '16', '2.5', '5', '2', '9.5', '4', '10', '10', '10', '10', '5'),
(18, 'RP-16-EE-405', '3', '1.5', '6', '5', '4.5', '3', '16', '1.5', '3.5', '1', '9', '0', '6', '10', '10', '10', '5'),
(19, 'RP-16-EE-406', '5', '9', '7', '6', '4.5', '3', '16', '2.5', '5', '4', '8', '7.5', '9', '10', '10', '10', '5'),
(20, 'RP-16-EE-407', '4', '1', '2', '5.5', '1', '2', '13', '1', '0', '1.5', '0', '0', '10', '0', '10', '0', '1.5'),
(21, 'RP-16-EE-408', '5', '1', '2', '5.5', '4', '2', '14', '2.5', '5', '1.5', '8', '0', '7', '0', '10', '0', '5'),
(22, 'RP-16-EE-409', '5', '8', '7', '5.5', '6', '3', '16', '3', '5.5', '2', '8', '7', '10', '0', '10', '10', '5'),
(23, 'RP-16-EE-412', '3.5', '7', '6.5', '5', '4', '1.5', '14.5', '1.5', '3.5', '2', '0', '0', '8', '0', '10', '10', '5'),
(24, 'RP-16-EE-413', '4', '7', '5', '5.5', '4', '3', '15', '1.5', '5', '5', '10', '9.5', '7', '5', '10', '10', '5'),
(25, 'RP-16-EE-414', '5', '2', '6', '5', '4', '4', '13.5', '2', '5', '1', '0', '0', '10', '10', '10', '10', '5'),
(26, 'RP-16-EE-415', '3.5', '10', '6', '6', '5', '1.5', '15.5', '1.5', '5', '2.5', '3', '0', '8.5', '10', '10', '10', '5'),
(27, 'RP-16-EE-416', '5', '6', '7', '5', '4.5', '1.5', '16', '2', '5', '2.5', '2', '8', '7', '10', '10', '10', '5'),
(28, 'RP-16-EE-417', '4', '3', '3', '5', '3', '1', '14', '1.5', '4', '0.5', '0', '0', '6', '0', '10', '0', '5'),
(29, 'RP-16-EE-418', '5', '5', '7', '5.5', '4.5', '3', '16', '2', '6', '1', '0', '0', '5.5', '10', '10', '10', '5'),
(30, 'RP-16-EE-419', '0', '1.5', '2', '3', '4', '0', '14', '1', '3', '1.5', '0', '1', '6', '0', '10', '10', '1'),
(31, 'RP-16-EE-420', '5', '3', '6', '4.5', '2.5', '1.5', '8', '1', '5', '1.5', '9', '1', '5', '10', '10', '10', '1'),
(32, 'RP-16-EE-421', '5', '5.5', '7', '5.5', '5', '2', '14', '2', '4', '2', '10', '0', '7', '5', '10', '10', '5'),
(33, 'RP-16-EE-422', '3', '9', '5.5', '4.5', '3.5', '0', '6', '2', '4', '1.5', '0', '0', '8.5', '0', '10', '10', '2.5'),
(34, 'RP-16-EE-423', '0', '2', '2', '4.5', '4.5', '3', '15', '1.5', '5', '2', '0', '0', '7', '10', '10', '10', '4'),
(35, 'RP-16-EE-424', '4', '6', '7', '5', '4.5', '2', '16', '1.5', '5.5', '5', '8', '7.5', '8', '5', '10', '10', '5'),
(36, 'RP-16-EE-425', '0.5', '9', '5', '3.5', '3', '1', '15', '2', '5', '2.5', '0', '0', '9', '0', '10', '10', '2.5'),
(37, 'RP-16-EE-426', '5', '0.5', '7', '4.5', '4.5', '0', '11', '2', '6', '1.5', '2', '8', '7', '9', '10', '10', '4'),
(38, 'RP-16-EE-427', '4', '6', '3', '4.5', '4', '3', '9.5', '1.5', '4', '3', '0', '0', '0', '0', '8', '10', '2'),
(39, 'RP-16-EE-428', '4', '1', '2.5', '5.5', '4', '2', '16', '1.5', '6', '5', '8', '3', '10', '0', '10', '10', '5'),
(40, 'RP-16-EE-429', '3.5', '7', '3', '4', '4', '2', '13', '1.5', '4', '1', '0', '0', '4.5', '0', '0', '0', '0.5'),
(41, 'RP-16-EE-430', '3.5', '8.5', '1.5', '5', '4', '2', '8.5', '1', '2', '1', '0', '0', '7', '0', '0', '0', '4'),
(42, 'RP-16-EE-431', '0.5', '8.5', '6.5', '5', '5.5', '2', '11', '1.5', '3.5', '3', '2', '3', '7', '10', '10', '10', '5'),
(43, 'RP-16-EE-432', '3.5', '1', '2', '4', '4', '2', '7.5', '1', '0', '0', '0', '0', '4', '0', '10', '0', '1'),
(44, 'RP-16-EE-433', '5', '10', '7', '6', '7', '5', '14', '2', '6', '5', '9', '9.5', '8', '0', '10', '10', '5'),
(45, 'RP-16-EE-434', '4.5', '2', '5.5', '5', '4', '3', '5', '1.5', '4', '5', '9', '8', '10', '10', '8', '10', '1'),
(46, 'RP-16-EE-437', '2', '9.5', '7', '5.5', '3', '1', '10', '2', '5.5', '1', '2', '0', '3', '10', '10', '10', '5'),
(47, 'RP-16-EE-438', '3', '6', '0', '3', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(48, 'RP-16-EE-439', '0', '2', '4.5', '4', '4.5', '2', '12', '1.5', '5.5', '2', '3', '1', '5', '10', '10', '10', '5'),
(49, 'RP-16-EE-440', '0', '4.5', '3', '5', '4', '3', '10', '1.5', '4', '2.5', '3', '5', '0', '10', '10', '10', '1'),
(50, 'RP-16-EE-441', '3.5', '2', '5.5', '4', '2', '2', '8', '1.5', '4', '1', '0', '0', '6', '0', '10', '10', '1'),
(51, 'RP-16-EE-442', '5', '9', '7', '5.5', '6.5', '3', '15.5', '2', '6', '5', '10', '4', '7', '5', '10', '10', '5'),
(52, 'RP-16-EE-443', '3.5', '5', '2', '4.5', '4.5', '2', '8', '1.5', '2.5', '0', '0', '1', '9', '0', '10', '10', '1'),
(53, 'RP-16-EE-444', '3', '7', '2', '4', '4', '2', '11', '2', '4', '1.5', '2', '0', '7', '0', '10', '10', '5'),
(7, 'g_type', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional', 'conventional'),
(8, 'rubric_set_id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(9, 'cep', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '0', ''),
(10, 'feature10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'feature11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'feature12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'feature13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'feature14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `program_info`
--

CREATE TABLE `program_info` (
  `id` int(11) NOT NULL,
  `program_name` text COLLATE utf8_bin NOT NULL,
  `session_list` text COLLATE utf8_bin NOT NULL,
  `dept_name` text COLLATE utf8_bin NOT NULL,
  `dept_vision` text COLLATE utf8_bin NOT NULL,
  `dept_mission` text COLLATE utf8_bin NOT NULL,
  `plo_count` int(10) NOT NULL,
  `plo_data` varchar(1000) COLLATE utf8_bin NOT NULL,
  `peo_count` int(10) NOT NULL,
  `PEO_1` varchar(500) COLLATE utf8_bin NOT NULL,
  `PEO_2` varchar(500) COLLATE utf8_bin NOT NULL,
  `PEO_3` varchar(500) COLLATE utf8_bin NOT NULL,
  `PEO_4` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `program_info`
--

INSERT INTO `program_info` (`id`, `program_name`, `session_list`, `dept_name`, `dept_vision`, `dept_mission`, `plo_count`, `plo_data`, `peo_count`, `PEO_1`, `PEO_2`, `PEO_3`, `PEO_4`) VALUES
(1, 'B.S.c Electrical Engineering', 'RP-16', 'Department of Electrical Engineering', 'We intend to provide the most relevant, cost effective and quality education in the specialized areas of Electrical Engineering to satisfy the requirements of the industrial, commercial, research & educational sectors in the country.', 'The Department of Electrical Engineering has two-fold education mission:\r\n•	The teaching mission is to provide high quality education in the specialized fields of EE\r\n•	The research mission is to advance knowledge in the specialized areas of Electrical Engineering to strengthen Engineering-based economy of the Country\r\n', 12, 'PLO1:\\^\\:Engineering Knowledge:\\^\\:PLO2:\\^\\:Problem Analysis:\\^\\:PLO3:\\^\\:Design/Development of Solution:\\^\\:PLO4:\\^\\:Investigation:\\^\\:PLO5:\\^\\:Modern Tool Usage:\\^\\:PLO6:\\^\\:The Engineer and Society:\\^\\:PLO7:\\^\\:Enviroment and Sustainability:\\^\\:PLO8:\\^\\:Ethics:\\^\\:PLO9:\\^\\:Individual and TeamWork:\\^\\:PLO10:\\^\\:Communication:\\^\\:PLO11:\\^\\:Project Management:\\^\\:PLO12:\\^\\:Lifelong Learning', 4, 'Have strong competence in electrical engineering resulting in successful careers.:\\^\\:PLO1:\\^\\:PLO5', 'Pursuing research and innovation and be able to provide industrial solutions for engineering and technical problems.:\\^\\:PLO2:\\^\\:PLO3:\\^\\:PLO4', 'Leading or participating in efforts to address societal and technical / business challenges.:\\^\\:PLO6:\\^\\:PLO7:\\^\\:PLO9:\\^\\:PLO11', 'Enhancing their professional development and technical knowledge through continuing education.:\\^\\:PLO8:\\^\\:PLO10:\\^\\:PLO12');

-- --------------------------------------------------------

--
-- Table structure for table `student_records`
--

CREATE TABLE `student_records` (
  `stu_id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `rollno` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_records`
--

INSERT INTO `student_records` (`stu_id`, `name`, `rollno`) VALUES
(1, 'Shakil Ahmed', 'RP-16-EE-400'),
(2, 'Muhammad Umer', 'RP-16-EE-403'),
(3, 'Saad Bin Sajid', 'RP-16-EE-404'),
(4, 'Hamza Moazzam', 'RP-16-EE-405'),
(5, 'Adeel', 'RP-16-EE-406'),
(6, 'Hassaam Aziz', 'RP-16-EE-407'),
(7, 'M. AbuBakar', 'RP-16-EE-408'),
(8, 'Iqra Mushtaq', 'RP-16-EE-409'),
(9, 'Hamza Javed Mirza', 'RP-16-EE-412'),
(10, 'Simra Shahbaz Bhatti', 'RP-16-EE-413'),
(11, 'M. Sameer Imran', 'RP-16-EE-414'),
(12, 'Hamza Chaudary', 'RP-16-EE-415'),
(13, 'M. Usama Sharaf', 'RP-16-EE-416'),
(14, 'Rizwan', 'RP-16-EE-417'),
(15, 'Syed Hassan Ahmed', 'RP-16-EE-418'),
(16, 'Muhammad Bilal', 'RP-16-EE-419'),
(17, 'Zeshan Ahmed', 'RP-16-EE-420'),
(18, 'M. Muneeb Zahid', 'RP-16-EE-421'),
(19, 'M. Zubair Arshad', 'RP-16-EE-422'),
(20, 'Fazil Asghar Khan', 'RP-16-EE-423'),
(21, 'Sobia', 'RP-16-EE-424'),
(22, 'Faizan Mansha', 'RP-16-EE-425'),
(23, 'Hafiz Khawar Riaz', 'RP-16-EE-426'),
(24, 'Muhammad Naveed', 'RP-16-EE-427'),
(25, 'Maryam Nawaz', 'RP-16-EE-428'),
(26, 'Ameer Shahzad Alvi', 'RP-16-EE-429'),
(27, 'Kamran Basheer', 'RP-16-EE-430'),
(28, 'Ahsan Karim', 'RP-16-EE-431'),
(29, 'M. Yasir Farooq', 'RP-16-EE-432'),
(30, 'Laiba Zubair', 'RP-16-EE-433'),
(31, 'Saud Bilal', 'RP-16-EE-434'),
(32, 'Salman Amjad', 'RP-16-EE-435'),
(33, 'Saad Zia', 'RP-16-EE-437'),
(34, 'Barkat Ali', 'RP-16-EE-438'),
(35, 'Kamran Ahmed', 'RP-16-EE-439'),
(36, 'Rukhsar Ahmed Khan', 'RP-16-EE-440'),
(37, 'Nihal Ahmed', 'RP-16-EE-441'),
(38, 'Samina Parveen', 'RP-16-EE-442'),
(39, 'Zain Shafique Butt', 'RP-16-EE-443'),
(40, 'Irhas Qamar', 'RP-16-EE-444'),
(41, 'Hareem Siddiqui', 'RP-17-EE-400'),
(42, 'Muhammad Adil', 'RP-17-EE-401'),
(43, 'M. Ahmad Nawaz', 'RP-17-EE-402'),
(44, 'M. Danish Asim', 'RP-17-EE-403'),
(45, 'M. Wajeeh Ud Din Khan', 'RP-17-EE-404'),
(46, 'Iqra Maryyam', 'RP-17-EE-405'),
(47, 'Mubeen Siddiqi', 'RP-17-EE-406'),
(48, 'Ali Raza', 'RP-17-EE-407'),
(49, 'Muhammad Hanif', 'RP-17-EE-408'),
(50, 'Junaid Rasheed', 'RP-17-EE-409'),
(51, 'Abdul Ghafar', 'RP-17-EE-410'),
(52, 'Amnah Haroon', 'RP-17-EE-411'),
(53, 'Hamza Ali', 'RP-17-EE-412'),
(54, 'Muhammad Arslan', 'RP-17-EE-413'),
(55, 'Rao Hanan Akram', 'RP-17-EE-414'),
(56, 'Rana Usama Hafeez', 'RP-17-EE-415'),
(57, 'Abrar Hussain', 'RP-17-EE-416'),
(58, 'Saeed Anwar', 'RP-17-EE-417'),
(59, 'Muhammad Munib', 'RP-17-EE-418'),
(60, 'M. Ramzan Shakeel', 'RP-17-EE-419'),
(61, 'Hafiz Ahmad Ejaz', 'RP-17-EE-420'),
(62, 'Hafiz Umair Javaid', 'RP-17-EE-421'),
(63, 'Asad Hayat', 'RP-17-EE-422'),
(64, 'Hafiz M. Adnan Rafeeq', 'RP-17-EE-423'),
(65, 'Muhammad Umar Khan', 'RP-17-EE-424'),
(66, 'M. Haroon Mazhar', 'RP-17-EE-425'),
(67, 'Saira Faiz', 'RP-17-EE-426'),
(68, 'Salis Hussain', 'RP-17-EE-427'),
(69, 'Abdullah Shahid', 'RP-17-EE-428'),
(70, 'Suleman Khalid', 'RP-17-EE-429'),
(71, 'Asad Sharief', 'RP-17-EE-430'),
(72, 'Areesha Rahim', 'RP-17-EE-431'),
(73, 'Adil Sajjad', 'RP-17-EE-432'),
(74, 'M. Nadeem Anwar', 'RP-17-EE-433'),
(75, 'Hafiz Umer Nadeem', 'RP-17-EE-434'),
(76, 'Hamza Maqsood', 'RP-17-EE-435'),
(77, 'Fahad Naeem', 'RP-17-EE-436'),
(78, 'Abdul Qadeer', 'RP-17-EE-437'),
(79, 'Salman Manzoor', 'RP-17-EE-438'),
(80, 'Abdul Manan', 'RP-17-EE-439'),
(81, 'Zeeshan Abbas', 'RP-17-EE-440'),
(82, 'Hamza Zaman', 'RP-17-EE-441'),
(83, 'Shamoon Aziz', 'RP-17-EE-442'),
(84, 'Binyamin Alam', 'RP-17-EE-443'),
(85, 'Nauman Farooq', 'RP-17-EE-444'),
(86, 'Fawad Asghar', 'RP-17-EE-445'),
(87, 'Ammar Mushtaq', 'KKRP-17-EE-446'),
(88, 'Raja Saad Imtiaz', 'KKRP-17-EE-447'),
(89, 'Raja Usama Bin Khalid', 'KKRP-17-EE-448'),
(90, 'Qurat ul ain Khalid', 'KKRP-17-EE-449'),
(91, 'Raja Fahad Bin Shoukat', 'KKRP-17-EE-450'),
(92, 'Sheikh Raees Zaman', 'KKRP-17-EE-451'),
(93, 'Raja M. Soban Zaffar', 'KKRP-17-EE-452'),
(94, 'Malik Bilal Tariq', 'KKRP-17-EE-453'),
(95, 'Qais Qadeer', 'KKRP-17-EE-454'),
(96, 'Malik Ahtizaz Tariq', 'KKRP-17-EE-455'),
(97, 'Tanzeel ur Rehman', 'KKRP-17-EE-456'),
(98, 'Manzar Kaleem Abbasi', 'KKRP-17-EE-457'),
(99, 'Atif Munsif', 'KKRP-17-EE-458'),
(100, 'Sania Aurangzeb Abbasi', 'KKRP-17-EE-459'),
(101, 'Asam Khalid', 'KKRP-17-EE-460'),
(102, 'Hassam Jhangir', 'KKRP-17-EE-461'),
(103, 'Haider Ali', 'KKRP-17-EE-462'),
(104, 'Syed Sohaib ul Hassan', 'KKRP-17-EE-463'),
(105, 'Nimra Tazeb', 'RP-18-EE-401'),
(106, 'Hiba Rashid', 'RP-18-EE-402'),
(107, 'Umair Butt', 'RP-18-EE-403'),
(108, 'Iqra Asif', 'RP-18-EE-404'),
(109, 'Ahsan Ali', 'RP-18-EE-405'),
(110, 'Tuba Sehar', 'RP-18-EE-407'),
(111, 'Dawood Imtiaz', 'RP-18-EE-408'),
(112, 'Ijaz Ahmad', 'RP-18-EE-409'),
(113, 'Mudasar Shahbaz Gondal', 'RP-18-EE-410'),
(114, 'Ayesha Asif', 'RP-18-EE-411'),
(115, 'Arslan Amjad', 'RP-18-EE-412'),
(116, 'Hassaan Gull', 'RP-18-EE-413'),
(117, 'Ans Moheyudin', 'RP-18-EE-414'),
(118, 'Suhaib Khan', 'RP-18-EE-415'),
(119, 'Gulbaz Khan', 'RP-18-EE-416'),
(120, 'Ahsan Aslam', 'RP-18-EE-417'),
(121, 'Sarah Aimen', 'RP-18-EE-418'),
(122, 'Muhammad Abdul Rehman', 'RP-18-EE-419'),
(123, 'Hammad Munir', 'RP-18-EE-420'),
(124, 'Muhammad Muzammil Naeem', 'RP-18-EE-421'),
(125, 'Muhammad Hasin Butt', 'RP-18-EE-422'),
(126, 'Muhammad Umer', 'RP-18-EE-425'),
(127, 'Muhammad Ahmad Hassan', 'RP-18-EE-426'),
(128, 'Mujahid Hussain', 'RP-18-EE-427'),
(129, 'Mohy ud Din Hamdoon Lakhvi', 'RP-18-EE-428'),
(130, 'Ahmad Ali', 'RP-18-EE-429'),
(131, 'Adeel Naeem', 'RP-18-EE-430'),
(132, 'Hadia Khan', 'RP-18-EE-431'),
(133, 'Muhammad Nouman Khan', 'RP-18-EE-432'),
(134, 'Zumair Hussain', 'RP-18-EE-433'),
(135, 'Malik Muhammad Kashif Iqbal', 'KKRP-18-EE-436'),
(136, 'Haseeb Waqar', 'KKRP-18-EE-437'),
(137, 'Sheikh Atif Ali', 'KKRP-18-EE-438'),
(138, 'Shahbaz Kafeel', 'KKRP-18-EE-439'),
(139, 'Mirza Aneeq Baig', 'KKRP-18-EE-440'),
(140, 'Sheikh Saqib Ali', 'KKRP-18-EE-441'),
(141, 'Sameer Yousaf', 'KKRP-18-EE-442'),
(142, 'Raja Usman Ayaz', 'KKRP-18-EE-443'),
(143, 'Dawood Bin Shabir', 'KKRP-18-EE-444'),
(144, 'Faizan Mustafa', 'KKRP-18-EE-445'),
(145, 'Arslan Aziz', 'KKRP-18-EE-446'),
(146, 'Kashif Rakhim', 'KKRP-18-EE-447'),
(147, 'Taimoor Asim', 'KKRP-18-EE-448'),
(148, 'Irfan Younas Khan', 'KKRP-18-EE-449'),
(149, 'Basharat Nazir', 'KKRP-18-EE-450'),
(150, 'Mehak Agha', 'RP-18-EE-451'),
(151, 'Hasbia wakeel', 'RP-19-EE-401'),
(152, 'Muhammad Qasim', 'RP-19-EE-402'),
(153, 'Muhammad Zubair Nasir', 'RP-19-EE-403'),
(154, 'Muhammad Saqlain', 'RP-19-EE-404'),
(155, 'Muhammd Faizan', 'RP-19-EE-405'),
(156, 'Abu Huraira', 'RP-19-EE-406'),
(157, 'Muhammad Basim', 'RP-19-EE-407'),
(158, 'Syed Haider Abbas', 'RP-19-EE-408'),
(159, 'Syeda Midhat Zahra', 'RP-19-EE-409'),
(160, 'Zunaira Abid', 'RP-19-EE-410'),
(161, 'Irfan Fareed', 'RP-19-EE-411'),
(162, 'Ali Jaan', 'RP-19-EE-412'),
(163, 'Asra Imran', 'RP-19-EE-413'),
(164, 'Ali Rehan', 'RP-19-EE-414'),
(165, 'Hania fatima', 'RP-19-EE-415'),
(166, 'Muhammd Hamza', 'RP-19-EE-417'),
(167, 'Faiza Imdad', 'RP-19-EE-418'),
(168, 'Muhammad Anas Raza ', 'RP-19-EE-419'),
(169, 'Muhammad Zubair', 'RP-19-EE-420'),
(170, 'Salaha Safdar', 'RP-19-EE-421'),
(171, 'Numan Javaid', 'RP-19-EE-422'),
(172, 'Tanawish Imtiaz', 'RP-19-EE-423'),
(173, 'Muhammad Affif Abid', 'RP-19-EE-424'),
(174, 'Muhammad Shaheer uddin Khan', 'RP-19-EE-425'),
(175, 'Faheem Abbas Khan', 'RP-19-EE-426'),
(176, 'Sajeel un Naeem ', 'RP-19-EE-427'),
(177, 'Mehwish Nasrullah', 'RP-19-EE-428'),
(178, 'Muhammad Aftab', 'RP-19-EE-429'),
(179, 'Muhammad Zain ul Abideen', 'RP-19-EE-430'),
(180, 'Ali', 'RP-19-EE-431'),
(181, 'Taimoor Ali', 'RP-19-EE-432'),
(182, 'Haseeb Naveed', 'RP-19-EE-433'),
(183, 'Hussnain Yasin', 'RP-19-EE-434'),
(184, 'Muhammad Waqas', 'RP-19-EE-435'),
(185, 'Imtiaz alam', 'RP-19-EE-436'),
(186, 'Sania Khan', 'RP-19-EE-437'),
(187, 'Raja Arham Qayyum', 'RP-19-EE-438'),
(188, 'Muhammad Haseeb Safdar', 'RP-19-EE-439');

-- --------------------------------------------------------

--
-- Table structure for table `student_records_backup`
--

CREATE TABLE `student_records_backup` (
  `stu_id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `rollno` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_records_backup`
--

INSERT INTO `student_records_backup` (`stu_id`, `name`, `rollno`) VALUES
(1, 'Shakil Ahmed', 'RP-16-EE-400'),
(2, 'Muhammad Umer', 'RP-16-EE-403'),
(3, 'Saad Bin Sajid', 'RP-16-EE-404'),
(4, 'Hamza Moazzam', 'RP-16-EE-405'),
(5, 'Adeel', 'RP-16-EE-406'),
(6, 'Hassaam Aziz', 'RP-16-EE-407'),
(7, 'M. AbuBakar', 'RP-16-EE-408'),
(8, 'Iqra Mushtaq', 'RP-16-EE-409'),
(9, 'Hamza Javed Mirza', 'RP-16-EE-412'),
(10, 'Simra Shahbaz Bhatti', 'RP-16-EE-413'),
(11, 'M. Sameer Imran', 'RP-16-EE-414'),
(12, 'Hamza Chaudary', 'RP-16-EE-415'),
(13, 'M. Usama Sharaf', 'RP-16-EE-416'),
(14, 'Rizwan', 'RP-16-EE-417'),
(15, 'Syed Hassan Ahmed', 'RP-16-EE-418'),
(16, 'Muhammad Bilal', 'RP-16-EE-419'),
(17, 'Zeshan Ahmed', 'RP-16-EE-420'),
(18, 'M. Muneeb Zahid', 'RP-16-EE-421'),
(19, 'M. Zubair Arshad', 'RP-16-EE-422'),
(20, 'Fazil Asghar Khan', 'RP-16-EE-423'),
(21, 'Sobia', 'RP-16-EE-424'),
(22, 'Faizan Mansha', 'RP-16-EE-425'),
(23, 'Hafiz Khawar Riaz', 'RP-16-EE-426'),
(24, 'Muhammad Naveed', 'RP-16-EE-427'),
(25, 'Maryam Nawaz', 'RP-16-EE-428'),
(26, 'Ameer Shahzad Alvi', 'RP-16-EE-429'),
(27, 'Kamran Basheer', 'RP-16-EE-430'),
(28, 'Ahsan Karim', 'RP-16-EE-431'),
(29, 'M. Yasir Farooq', 'RP-16-EE-432'),
(30, 'Laiba Zubair', 'RP-16-EE-433'),
(31, 'Saud Bilal', 'RP-16-EE-434'),
(32, 'Salman Amjad', 'RP-16-EE-435'),
(33, 'Saad Zia', 'RP-16-EE-437'),
(34, 'Barkat Ali', 'RP-16-EE-438'),
(35, 'Kamran Ahmed', 'RP-16-EE-439'),
(36, 'Rukhsar Ahmed Khan', 'RP-16-EE-440'),
(37, 'Nihal Ahmed', 'RP-16-EE-441'),
(38, 'Samina Parveen', 'RP-16-EE-442'),
(39, 'Zain Shafique Butt', 'RP-16-EE-443'),
(40, 'Irhas Qamar', 'RP-16-EE-444'),
(41, 'Hareem Siddiqui', 'RP-17-EE-400'),
(42, 'Muhammad Adil', 'RP-17-EE-401'),
(43, 'M. Ahmad Nawaz', 'RP-17-EE-402'),
(44, 'M. Danish Asim', 'RP-17-EE-403'),
(45, 'M. Wajeeh Ud Din Khan', 'RP-17-EE-404'),
(46, 'Iqra Maryyam', 'RP-17-EE-405'),
(47, 'Mubeen Siddiqi', 'RP-17-EE-406'),
(48, 'Ali Raza', 'RP-17-EE-407'),
(49, 'Muhammad Hanif', 'RP-17-EE-408'),
(50, 'Junaid Rasheed', 'RP-17-EE-409'),
(51, 'Abdul Ghafar', 'RP-17-EE-410'),
(52, 'Amnah Haroon', 'RP-17-EE-411'),
(53, 'Hamza Ali', 'RP-17-EE-412'),
(54, 'Muhammad Arslan', 'RP-17-EE-413'),
(55, 'Rao Hanan Akram', 'RP-17-EE-414'),
(56, 'Rana Usama Hafeez', 'RP-17-EE-415'),
(57, 'Abrar Hussain', 'RP-17-EE-416'),
(58, 'Saeed Anwar', 'RP-17-EE-417'),
(59, 'Muhammad Munib', 'RP-17-EE-418'),
(60, 'M. Ramzan Shakeel', 'RP-17-EE-419'),
(61, 'Hafiz Ahmad Ejaz', 'RP-17-EE-420'),
(62, 'Hafiz Umair Javaid', 'RP-17-EE-421'),
(63, 'Asad Hayat', 'RP-17-EE-422'),
(64, 'Hafiz M. Adnan Rafeeq', 'RP-17-EE-423'),
(65, 'Muhammad Umar Khan', 'RP-17-EE-424'),
(66, 'M. Haroon Mazhar', 'RP-17-EE-425'),
(67, 'Saira Faiz', 'RP-17-EE-426'),
(68, 'Salis Hussain', 'RP-17-EE-427'),
(69, 'Abdullah Shahid', 'RP-17-EE-428'),
(70, 'Suleman Khalid', 'RP-17-EE-429'),
(71, 'Asad Sharief', 'RP-17-EE-430'),
(72, 'Areesha Rahim', 'RP-17-EE-431'),
(73, 'Adil Sajjad', 'RP-17-EE-432'),
(74, 'M. Nadeem Anwar', 'RP-17-EE-433'),
(75, 'Hafiz Umer Nadeem', 'RP-17-EE-434'),
(76, 'Hamza Maqsood', 'RP-17-EE-435'),
(77, 'Fahad Naeem', 'RP-17-EE-436'),
(78, 'Abdul Qadeer', 'RP-17-EE-437'),
(79, 'Salman Manzoor', 'RP-17-EE-438'),
(80, 'Abdul Manan', 'RP-17-EE-439'),
(81, 'Zeeshan Abbas', 'RP-17-EE-440'),
(82, 'Hamza Zaman', 'RP-17-EE-441'),
(83, 'Shamoon Aziz', 'RP-17-EE-442'),
(84, 'Binyamin Alam', 'RP-17-EE-443'),
(85, 'Nauman Farooq', 'RP-17-EE-444'),
(86, 'Fawad Asghar', 'RP-17-EE-445'),
(87, 'Ammar Mushtaq', 'KKRP-17-EE-446'),
(88, 'Raja Saad Imtiaz', 'KKRP-17-EE-447'),
(89, 'Raja Usama Bin Khalid', 'KKRP-17-EE-448'),
(90, 'Qurat ul ain Khalid', 'KKRP-17-EE-449'),
(91, 'Raja Fahad Bin Shoukat', 'KKRP-17-EE-450'),
(92, 'Sheikh Raees Zaman', 'KKRP-17-EE-451'),
(93, 'Raja M. Soban Zaffar', 'KKRP-17-EE-452'),
(94, 'Malik Bilal Tariq', 'KKRP-17-EE-453'),
(95, 'Qais Qadeer', 'KKRP-17-EE-454'),
(96, 'Malik Ahtizaz Tariq', 'KKRP-17-EE-455'),
(97, 'Tanzeel ur Rehman', 'KKRP-17-EE-456'),
(98, 'Manzar Kaleem Abbasi', 'KKRP-17-EE-457'),
(99, 'Atif Munsif', 'KKRP-17-EE-458'),
(100, 'Sania Aurangzeb Abbasi', 'KKRP-17-EE-459'),
(101, 'Asam Khalid', 'KKRP-17-EE-460'),
(102, 'Hassam Jhangir', 'KKRP-17-EE-461'),
(103, 'Haider Ali', 'KKRP-17-EE-462'),
(104, 'Syed Sohaib ul Hassan', 'KKRP-17-EE-463'),
(105, 'Nimra Tazeb', 'RP-18-EE-401'),
(106, 'Hiba Rashid', 'RP-18-EE-402'),
(107, 'Umair Butt', 'RP-18-EE-403'),
(108, 'Iqra Asif', 'RP-18-EE-404'),
(109, 'Ahsan Ali', 'RP-18-EE-405'),
(110, 'Tuba Sehar', 'RP-18-EE-407'),
(111, 'Dawood Imtiaz', 'RP-18-EE-408'),
(112, 'Ijaz Ahmad', 'RP-18-EE-409'),
(113, 'Mudasar Shahbaz Gondal', 'RP-18-EE-410'),
(114, 'Ayesha Asif', 'RP-18-EE-411'),
(115, 'Arslan Amjad', 'RP-18-EE-412'),
(116, 'Hassaan Gull', 'RP-18-EE-413'),
(117, 'Ans Moheyudin', 'RP-18-EE-414'),
(118, 'Suhaib Khan', 'RP-18-EE-415'),
(119, 'Gulbaz Khan', 'RP-18-EE-416'),
(120, 'Ahsan Aslam', 'RP-18-EE-417'),
(121, 'Sarah Aimen', 'RP-18-EE-418'),
(122, 'Muhammad Abdul Rehman', 'RP-18-EE-419'),
(123, 'Hammad Munir', 'RP-18-EE-420'),
(124, 'Muhammad Muzammil Naeem', 'RP-18-EE-421'),
(125, 'Muhammad Hasin Butt', 'RP-18-EE-422'),
(126, 'Muhammad Umer', 'RP-18-EE-425'),
(127, 'Muhammad Ahmad Hassan', 'RP-18-EE-426'),
(128, 'Mujahid Hussain', 'RP-18-EE-427'),
(129, 'Mohy ud Din Hamdoon Lakhvi', 'RP-18-EE-428'),
(130, 'Ahmad Ali', 'RP-18-EE-429'),
(131, 'Adeel Naeem', 'RP-18-EE-430'),
(132, 'Hadia Khan', 'RP-18-EE-431'),
(133, 'Muhammad Nouman Khan', 'RP-18-EE-432'),
(134, 'Zumair Hussain', 'RP-18-EE-433'),
(135, 'Malik Muhammad Kashif Iqbal', 'KKRP-18-EE-436'),
(136, 'Haseeb Waqar', 'KKRP-18-EE-437'),
(137, 'Sheikh Atif Ali', 'KKRP-18-EE-438'),
(138, 'Shahbaz Kafeel', 'KKRP-18-EE-439'),
(139, 'Mirza Aneeq Baig', 'KKRP-18-EE-440'),
(140, 'Sheikh Saqib Ali', 'KKRP-18-EE-441'),
(141, 'Sameer Yousaf', 'KKRP-18-EE-442'),
(142, 'Raja Usman Ayaz', 'KKRP-18-EE-443'),
(143, 'Dawood Bin Shabir', 'KKRP-18-EE-444'),
(144, 'Faizan Mustafa', 'KKRP-18-EE-445'),
(145, 'Arslan Aziz', 'KKRP-18-EE-446'),
(146, 'Kashif Rakhim', 'KKRP-18-EE-447'),
(147, 'Taimoor Asim', 'KKRP-18-EE-448'),
(148, 'Irfan Younas Khan', 'KKRP-18-EE-449'),
(149, 'Basharat Nazir', 'KKRP-18-EE-450'),
(150, 'Mehak Agha', 'RP-18-EE-451');

-- --------------------------------------------------------

--
-- Table structure for table `univ_info`
--

CREATE TABLE `univ_info` (
  `id` int(11) NOT NULL,
  `univ_name` text COLLATE utf8_bin NOT NULL,
  `univ_vision` text COLLATE utf8_bin NOT NULL,
  `univ_mission` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `univ_info`
--

INSERT INTO `univ_info` (`id`, `univ_name`, `univ_vision`, `univ_mission`) VALUES
(1, 'University of the Punjab', 'Punjab University intends to be a leading public university in providing affordable educational opportunities to develop scientific, socio-cultural, economic and political leadership, through learner-centered teaching and research, while strengthening our identity at National and International level.', 'Our mission is to provide a holistic education as such an approach has a twofold benefit. The first is that young people are nurtured to be sensitive, tolerant, humane and capable of thinking in a creative and critical way. The second is, that armed with a sense of history and equipped with knowledge and expertise, the graduates whom we send out into the world are in a better position to develop their leadership potential and make a positive contribution to public life. We hope that understanding as they do, their role in the wider community of human kind and responsible to it, their action and attitudes will reflect their education.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_type` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `avatar` varchar(100) COLLATE utf8_bin NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `name`, `avatar`, `created_at`) VALUES
(1, 'zulqarnain', '$2y$10$H7hNsBrvaTtXPDkx63ogqeOv.q2tky8PGLag6o6sHnlCeGc5jhEPK', 'instructor', 'Mr. Muhammad Zulqarnain', 'w3images/zulqarnain.jpg', '2020-03-18 21:44:12'),
(2, 'admin', '$2y$10$H7hNsBrvaTtXPDkx63ogqeOv.q2tky8PGLag6o6sHnlCeGc5jhEPK', 'admin', 'Administrator', 'w3images/avatar2.png', '2020-03-18 21:44:12'),
(3, 'kashif.samee', '$2y$10$DZcox4smyGOMc2hOeFUOEuDyxd2r2cZXL4DjG1kzMCD3jXrxVgjFW', 'instructor', 'Dr. Muhammad Kashif Samee', 'w3images/avatar2.png', '2020-03-18 21:44:12'),
(4, 'kashif.habib', '$2y$10$bhr2/.a7L0NVOgvyugBYH.7UO5qG6AsIIPeAhl6Lw4eTM9ZbS20Na', 'instructor', 'Mr. Kashif Habib', 'w3images/avatar2.png', '2020-03-23 19:36:28'),
(5, 'visitor', '$2y$10$iTurE0KB4yjkbksLcGTRA.ueho8rDmn3Rxq0zD/WchadIH4bBA29i', 'instructor', 'Visitor', 'w3images/avatar2.png', '2020-03-23 19:37:38'),
(6, 'osama', '$2y$12$gY.NLJueupwwjY7L3LQKLeBSnfsr9c8I5ABIj.8ihpQRUPqqX9fEa', 'instructor', 'Mr. Osama Majeed Butt', 'w3images/avatar2.png', '2020-03-18 21:44:12'),
(7, 'zeeshan.azmat', '$2y$10$H7hNsBrvaTtXPDkx63ogqeOv.q2tky8PGLag6o6sHnlCeGc5jhEPK', 'instructor', 'Dr. Zeeshan Azmat', 'w3images/avatar2.png', '2020-03-18 21:44:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch_list`
--
ALTER TABLE `batch_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_info`
--
ALTER TABLE `courses_info`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `cs1201l_Spring_2018`
--
ALTER TABLE `cs1201l_Spring_2018`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `cs1201_Spring_2018`
--
ALTER TABLE `cs1201_Spring_2018`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee1202l_Spring_2018`
--
ALTER TABLE `ee1202l_Spring_2018`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee1202_Spring_2018`
--
ALTER TABLE `ee1202_Spring_2018`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee1206_Fall_2019`
--
ALTER TABLE `ee1206_Fall_2019`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee2106l_Fall_2020`
--
ALTER TABLE `ee2106l_Fall_2020`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee2201l_Spring_2019`
--
ALTER TABLE `ee2201l_Spring_2019`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee2201l_Spring_2020`
--
ALTER TABLE `ee2201l_Spring_2020`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee2201_Spring_2020`
--
ALTER TABLE `ee2201_Spring_2020`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee2202_Spring_2020`
--
ALTER TABLE `ee2202_Spring_2020`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee2203_Spring_2020`
--
ALTER TABLE `ee2203_Spring_2020`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee3104l_Fall_2019`
--
ALTER TABLE `ee3104l_Fall_2019`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee3104_Fall_2019`
--
ALTER TABLE `ee3104_Fall_2019`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee3206l_Spring_2019`
--
ALTER TABLE `ee3206l_Spring_2019`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee3206l_Spring_2020`
--
ALTER TABLE `ee3206l_Spring_2020`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee3206_Spring_2019`
--
ALTER TABLE `ee3206_Spring_2019`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee3206_Spring_2020`
--
ALTER TABLE `ee3206_Spring_2020`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ee5756_Spring_2020`
--
ALTER TABLE `ee5756_Spring_2020`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `me1204_Spring_2018`
--
ALTER TABLE `me1204_Spring_2018`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ns1203_Spring_2018`
--
ALTER TABLE `ns1203_Spring_2018`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ns1205_Spring_2019`
--
ALTER TABLE `ns1205_Spring_2019`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ns2104_Fall_2019`
--
ALTER TABLE `ns2104_Fall_2019`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `ns3201_Spring_2019`
--
ALTER TABLE `ns3201_Spring_2019`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `program_info`
--
ALTER TABLE `program_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_records`
--
ALTER TABLE `student_records`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `student_records_backup`
--
ALTER TABLE `student_records_backup`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `univ_info`
--
ALTER TABLE `univ_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch_list`
--
ALTER TABLE `batch_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `courses_info`
--
ALTER TABLE `courses_info`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `cs1201l_Spring_2018`
--
ALTER TABLE `cs1201l_Spring_2018`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `cs1201_Spring_2018`
--
ALTER TABLE `cs1201_Spring_2018`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `ee1202l_Spring_2018`
--
ALTER TABLE `ee1202l_Spring_2018`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `ee1202_Spring_2018`
--
ALTER TABLE `ee1202_Spring_2018`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `ee1206_Fall_2019`
--
ALTER TABLE `ee1206_Fall_2019`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `ee2106l_Fall_2020`
--
ALTER TABLE `ee2106l_Fall_2020`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `ee2201l_Spring_2019`
--
ALTER TABLE `ee2201l_Spring_2019`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `ee2201l_Spring_2020`
--
ALTER TABLE `ee2201l_Spring_2020`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `ee2201_Spring_2020`
--
ALTER TABLE `ee2201_Spring_2020`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `ee2202_Spring_2020`
--
ALTER TABLE `ee2202_Spring_2020`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `ee2203_Spring_2020`
--
ALTER TABLE `ee2203_Spring_2020`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `ee3104l_Fall_2019`
--
ALTER TABLE `ee3104l_Fall_2019`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `ee3104_Fall_2019`
--
ALTER TABLE `ee3104_Fall_2019`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `ee3206l_Spring_2019`
--
ALTER TABLE `ee3206l_Spring_2019`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=922;
--
-- AUTO_INCREMENT for table `ee3206l_Spring_2020`
--
ALTER TABLE `ee3206l_Spring_2020`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `ee3206_Spring_2019`
--
ALTER TABLE `ee3206_Spring_2019`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `ee3206_Spring_2020`
--
ALTER TABLE `ee3206_Spring_2020`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `ee5756_Spring_2020`
--
ALTER TABLE `ee5756_Spring_2020`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `me1204_Spring_2018`
--
ALTER TABLE `me1204_Spring_2018`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `ns1203_Spring_2018`
--
ALTER TABLE `ns1203_Spring_2018`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `ns1205_Spring_2019`
--
ALTER TABLE `ns1205_Spring_2019`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `ns2104_Fall_2019`
--
ALTER TABLE `ns2104_Fall_2019`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `ns3201_Spring_2019`
--
ALTER TABLE `ns3201_Spring_2019`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `program_info`
--
ALTER TABLE `program_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_records`
--
ALTER TABLE `student_records`
  MODIFY `stu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
--
-- AUTO_INCREMENT for table `student_records_backup`
--
ALTER TABLE `student_records_backup`
  MODIFY `stu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `univ_info`
--
ALTER TABLE `univ_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
