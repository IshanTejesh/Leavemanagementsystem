-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2018 at 03:47 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leaveproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `fl_id` int(11) NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fl_id`, `USERNAME`, `PASSWORD`) VALUES
(1, 'SUPERADMIN', 'SUPERADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE IF NOT EXISTS `hod` (
  `DEPARTMENT` varchar(100) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`DEPARTMENT`, `USERNAME`, `PASSWORD`) VALUES
('CIVIL', 'CIVIL', 'CIVIL'),
('COMM.SKILLS', 'COMM.SKILLS', 'COMM.SKILLS'),
('CSE', 'CSE', 'CSE'),
('E&I', 'E&I', 'E&I'),
('EEE', 'EEE', 'EEE'),
('ENGG.CHEMISTRY', 'ENGG.CHEMISTRY', 'ENGG.CHEMISTRY'),
('ENGG.MATHEMATICS', 'ENGG.MATHEMATICS', 'ENGG.MATHEMATICS'),
('ENGG.PHYSICS', 'ENGG.PHYSICS', 'ENGG.PHYSICS'),
('ETC', 'ETC', 'ETC'),
('IT', 'IT', 'IT'),
('MECH', 'MECH', 'MECH'),
('MEX', 'MEX', 'MEX'),
('PRCELL', 'PRCELL', 'PRCELL'),
('TPO', 'TPO', 'TPO');

-- --------------------------------------------------------

--
-- Table structure for table `leave1`
--

CREATE TABLE IF NOT EXISTS `leave1` (
  `id` int(11) NOT NULL,
  `USERNAME` varchar(80) NOT NULL,
  `CATEGORIESOFLEAVE` varchar(40) NOT NULL,
  `LEAVEDATE` varchar(60) NOT NULL,
  `NOOFDAYS` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave1`
--

INSERT INTO `leave1` (`id`, `USERNAME`, `CATEGORIESOFLEAVE`, `LEAVEDATE`, `NOOFDAYS`) VALUES
(3, 'triloksahu', 'CL', '2016-10-05', '3'),
(4, 'triloksahu', 'EL', '2016-10-05', '3'),
(5, 'triloksahu', 'SL', '2016-10-05', '4'),
(6, 'triloksahu', 'OL', '2016-10-05', '5'),
(7, 'triloksahu', 'DL', '2016-10-05', '5'),
(13, 'SONIYA', 'CL', '2016-10-05', '5'),
(14, 'SONIYA', 'EL', '2016-10-05', '5'),
(15, 'SONIYA', 'SL', '2016-10-04', '3'),
(16, 'SONIYA', 'CL', '2016-10-04', '3'),
(17, 'VinayBhardawaj', 'CL', '2016-10-06', '5'),
(18, 'VinayBhardawaj', 'CL', '2016-10-05', '3'),
(19, 'PrashantRichhariya', 'EL', '2016-10-14', '4'),
(20, 'SONIYA', 'CL', '2016-10-06', '3'),
(21, 'SONIYA', 'EL', '2016-10-07', '3'),
(22, 'Ishan', 'CL', '2016-10-06', '3'),
(23, 'Ishan', 'EL', '2016-10-06', '3'),
(24, 'Ishan', 'SL', '2016-10-06', '3'),
(25, 'Ishan', 'OL', '2016-10-06', '3'),
(26, 'Ishan', 'DL', '2016-10-06', '3'),
(27, 'SONIYA', 'CL', '2016-10-05', '3'),
(28, 'SONIYA', 'EL', '2016-10-05', '3'),
(29, 'PRAVEENSHINDE', 'CL', '2016-10-12', '4'),
(30, 'triloksahu', 'DL', '2016-10-22', '2'),
(31, 'triloksahu', 'CL', '2016-10-22', '0.5'),
(32, 'tl', 'SL', '2016-10-25', '4'),
(33, 'leena', 'CL', '2016-12-15', '4'),
(34, 'PrashantRichhariya', 'EL', '2018-01-12', '3');

-- --------------------------------------------------------

--
-- Table structure for table `leaveform`
--

CREATE TABLE IF NOT EXISTS `leaveform` (
  `fl_id` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `DEPARTMENT` varchar(50) NOT NULL,
  `DESIGNATION` varchar(50) NOT NULL,
  `LEAVEPURPOSE` varchar(400) NOT NULL,
  `CATEGORIZES` varchar(30) NOT NULL,
  `LEAVEDATE` varchar(40) NOT NULL,
  `LEAVEDATESTART` varchar(40) NOT NULL,
  `LEAVEDATEEND` varchar(40) NOT NULL,
  `NOOFDAYS` varchar(40) NOT NULL,
  `ENGAGEDETAILS` varchar(50) NOT NULL,
  `PHONENO` bigint(20) NOT NULL,
  `HREMARKS` varchar(140) NOT NULL,
  `HDATE` date NOT NULL,
  `HSEEN` int(11) NOT NULL,
  `SREMARKS` varchar(50) NOT NULL,
  `SSEEN` int(11) NOT NULL,
  `PAPPROVAL` varchar(30) NOT NULL,
  `PREMARKS` varchar(150) NOT NULL,
  `PSEEN` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaveform`
--

INSERT INTO `leaveform` (`fl_id`, `USERNAME`, `DEPARTMENT`, `DESIGNATION`, `LEAVEPURPOSE`, `CATEGORIZES`, `LEAVEDATE`, `LEAVEDATESTART`, `LEAVEDATEEND`, `NOOFDAYS`, `ENGAGEDETAILS`, `PHONENO`, `HREMARKS`, `HDATE`, `HSEEN`, `SREMARKS`, `SSEEN`, `PAPPROVAL`, `PREMARKS`, `PSEEN`) VALUES
(2, 'VinayBhardawaj', 'CSE', 'Assistant Professor', 'Out of station', 'CL', '0', '2016-09-24', '2016-09-26', '3', '', 2345678, 'RECOMENDED', '2016-10-04', 1, 'RECOMENDED', 1, 'ACCEPT', 'kkk', 1),
(3, 'KHOMLALSINHA', 'CSE', 'SR.ASST.PROF.', 'personal', 'CL', '0', '2016-09-14', '2016-09-17', '4', '', 8787656745, 'RECOMENDED', '2008-11-24', 1, 'RECOMENDED', 1, 'ACCEPT', 'KK', 1),
(4, 'SHASHIKANTAGRAWAL', 'ETC', 'SR.ASST.PROF.', 'PERSONAL', 'EL', '0', '2016-09-01', '2016-09-03', '3', '', 7687654567, 'PERMITTED', '2008-11-24', 0, 'NOT PERMITTED', 0, '', '', 0),
(6, 'PRAVEENSHINDE', 'IT', 'ASST.PROF.', 'marriage', 'OL', '0', '2016-09-21', '2016-09-30', '10', '', 8796754323, 'RECOMENDED', '2008-11-24', 1, 'RECOMENDED', 1, 'ACCEPT', 'KKKK', 1),
(7, 'KUSHALTIWARI', 'EEE', 'ASST.PROF.', 'personal', 'Other', '0', '2016-09-14', '2016-09-16', '2', '', 98765432312, 'PERMITTED', '2008-11-24', 0, 'PERMITTED', 0, '', '', 0),
(8, 'OMPRAKASHYADAV', 'E&I', 'SR.ASST.PROF.', 'PERSONAL', 'EL', '0', '2016-09-08', '2016-09-10', '3', '', 7898675643, 'PERMITTED', '2008-11-24', 0, 'PERMITTED', 0, '', '', 0),
(9, 'SONIYALALWANI', 'CIVIL', 'TECH.ASST.', 'marriage', 'CL', '0', '2016-09-14', '2016-09-16', '3', '', 8976785456, 'PERMITTED', '2008-11-24', 0, 'PERMITTED', 0, '', '', 0),
(10, 'CHANDRASHEKHARSHARMA', 'COMM.SKILLS', 'ASST.PROF.', 'personal', 'SL', '0', '2016-09-16', '2016-09-18', '3', '', 9876564532, 'PERMITTED', '2008-11-24', 0, 'PERMITTED', 0, '', '', 0),
(11, 'ADITIMISHRA', 'TPO', 'ASSO.PROF.', 'personal', 'Other', '0', '2016-09-01', '2016-09-10', '10', '', 9878965456, 'PERMITTED', '2008-11-24', 0, 'PERMITTED', 0, '', '', 0),
(12, 'NISHANTSHUKLA', 'MECH', 'ASST.PROF.', 'TOUR', 'EL', '0', '2016-09-22', '2016-09-25', '4', '', 0, 'PERMITTED', '2008-11-24', 0, 'NOT PERMITTED', 0, '', '', 0),
(14, 'BHUPESHDEWANGAN', 'MECH', 'SR.ASST.PROF.', 'FAMILY HOLIDAY', 'Other', '0', '2016-09-23', '2016-09-29', '7', '', 1234567890, 'PERMITTED', '2016-09-25', 0, 'PERMITTED', 0, '', '', 0),
(18, 'PrashantRichhariya', 'CSE', 'Associate Professor', 'MARRAIGE PURPOSE', 'CL', '0', '2016-09-14', '2016-09-30', '5', '', 8109966442, 'RECOMENDED', '2008-11-24', 1, 'RECOMENDED', 1, 'ACCEPT', 'GOOD', 1),
(19, 'SAGARSAHU', 'MEX', 'LABASST.', 'STUDY LEAVE', 'CL', '0', '2016-09-14', '2016-09-21', '5', '', 7566784548, 'PERMITTED', '2008-11-24', 0, 'PERMITTED', 0, '', '', 0),
(24, 'triloksahu', 'CSE', 'LABASST.', 'personal', 'CL', '2016-10-05', '2016-10-07', '2016-10-09', '3', 'rakesh', 9876543456, 'RECOMENDED', '2016-10-06', 1, 'RECOMENDED', 1, 'ACCEPT', 'kk', 1),
(25, 'tttt', 'CSE', 'PROF.', 'marrigage', 'CL', '2016-10-06', '2016-10-20', '2016-10-14', '3', 'YES', 98765345678, 'RECOMENDED', '2016-10-04', 1, 'RECOMENDED', 1, 'REJECT', 'OKK', 1),
(26, 'leenasingh', 'CSE', 'ASSO.PROF.', 'personal', 'CL', '2016-10-06', '2016-10-08', '2016-10-10', '3', 'YES', 1234567890, 'RECOMENDED', '2016-10-06', 1, 'RECOMENDED', 1, 'REJECT', 'GOOD', 1),
(27, 'triloksahu', 'CSE', 'LABASST.', 'marriage', 'EL', '2016-10-05', '2016-10-14', '2016-10-16', '2', 'YES', 987896545, 'RECOMENDED', '2016-10-14', 1, 'RECOMENDED', 1, 'REJECT', 'GOOD', 1),
(35, 'triloksahu', 'CSE', 'LABASST.', 'personal', 'CL', '2016-10-05', '2016-10-07', '2016-10-09', '3', 'YES', 9876567854, 'RECOMENDED', '2016-10-15', 1, 'RECOMENDED', 1, 'REJECT', 'doo', 1),
(36, 'triloksahu', 'CSE', 'LABASST.', 'personal', 'EL', '2016-10-05', '2016-10-06', '2016-10-09', '3', 'YES', 9876567854, 'RECOMENDED', '0000-00-00', 1, 'RECOMENDED', 1, 'ACCEPT', 'kk', 1),
(37, 'triloksahu', 'CSE', 'LABASST.', 'personal', 'SL', '2016-10-05', '2016-10-06', '2016-10-09', '4', 'YES', 9876567854, 'RECOMENDED', '0000-00-00', 1, 'RECOMENDED', 1, 'REJECT', 'bad', 1),
(38, 'triloksahu', 'CSE', 'LABASST.', 'personal', 'OL', '2016-10-05', '2016-10-06', '2016-10-09', '5', 'YES', 9876567854, 'RECOMENDED', '2016-10-25', 1, 'RECOMENDED', 1, 'ACCEPT', 'fdsfa', 1),
(39, 'triloksahu', 'CSE', 'LABASST.', 'personal', 'DL', '2016-10-05', '2016-10-06', '2016-10-09', '5', 'YES', 9876567854, 'RECOMENDED', '2016-10-26', 1, 'RECOMENDED', 1, '', '', 0),
(49, 'VinayBhardawaj', 'CSE', 'Assistant Professor', 'marriage', 'CL', '2016-10-06', '2016-10-08', '2016-10-13', '5', 'YES', 9876564543, 'RECOMENDED', '2016-10-07', 1, 'RECOMENDED', 1, 'ACCEPT', 'CONGRATS', 1),
(50, 'VinayBhardawaj', 'CSE', 'Assistant Professor', 'marrigae', 'CL', '2016-10-05', '2016-10-07', '2016-10-10', '3', 'YES', 9876787654, 'RECOMENDED', '2016-10-15', 1, 'RECOMENDED', 1, 'ACCEPT', 'kk', 1),
(51, 'PrashantRichhariya', 'CSE', 'Associate Professor', 'marrigae', 'EL', '2016-10-14', '2016-10-15', '2016-10-19', '4', 'YES', 87987675467, 'RECOMENDED', '2016-10-15', 1, 'RECOMENDED', 1, 'REJECT', 'doo', 1),
(54, 'Ishan', 'CSE', 'PROF.', 'm', 'CL', '2016-10-06', '2016-10-07', '2016-10-10', '3', 'YES', 9878656753, 'RECOMENDED', '2016-10-15', 1, 'RECOMENDED', 1, 'ACCEPT', 'aa', 1),
(55, 'Ishan', 'CSE', 'PROF.', 'm', 'EL', '2016-10-06', '2016-10-07', '2016-10-10', '3', 'YES', 9878656753, 'RECOMENDED', '2016-10-15', 1, 'RECOMENDED', 1, 'REJECT', 'bb', 1),
(56, 'Ishan', 'CSE', 'PROF.', 'm', 'SL', '2016-10-06', '2016-10-07', '2016-10-10', '3', 'YES', 9878656753, 'RECOMENDED', '2016-10-15', 1, 'RECOMENDED', 1, 'ACCEPT', 'cc', 1),
(57, 'Ishan', 'CSE', 'PROF.', 'm', 'OL', '2016-10-06', '2016-10-07', '2016-10-10', '3', 'YES', 9878656753, 'RECOMENDED', '2016-10-15', 1, 'RECOMENDED', 1, 'ACCEPT', 'dd', 1),
(58, 'Ishan', 'CSE', 'PROF.', 'm', 'DL', '2016-10-06', '2016-10-07', '2016-10-10', '3', 'YES', 9878656753, 'RECOMENDED', '2016-10-15', 1, 'RECOMENDED', 1, 'REJECT', 'ee', 1),
(59, 'SONIYA', 'CSE', 'PROF.', 'marrigae', 'CL', '2016-10-05', '2016-10-07', '2016-10-10', '3', 'YES', 8976879876, 'RECOMENDED', '2016-10-16', 1, 'RECOMENDED', 1, 'ACCEPT', 'GOOD', 1),
(60, 'SONIYA', 'CSE', 'PROF.', 'marrigae', 'EL', '2016-10-05', '2016-10-07', '2016-10-10', '3', 'YES', 8976879876, 'RECOMENDED', '2016-10-16', 1, 'RECOMENDED', 1, 'ACCEPT', 'WELLLLL', 1),
(61, 'PRAVEENSHINDE', 'IT', 'ASST.PROF.', 'marriage', 'CL', '2016-10-12', '2016-10-15', '2016-10-19', '4', 'YES', 9878656743, 'RECOMENDED', '2016-10-16', 1, 'RECOMENDED', 1, 'ACCEPT', 'PRAVEEN', 1),
(62, 'triloksahu', 'CSE', 'LABASST.', 'duty', 'DL', '2016-10-22', '2016-10-23', '2016-10-25', '2', 'YES', 9897865453, 'RECOMENDED', '2016-10-20', 1, 'RECOMENDED', 1, '', '', 0),
(63, 'triloksahu', 'CSE', 'LABASST.', 'qwr', 'CL', '2016-10-22', '2016-10-23', '2016-10-23', '0.5', 'YES', 8978656754, 'RECOMENDED', '2016-10-22', 1, 'RECOMENDED', 1, 'ACCEPT', 'GOOD', 1),
(64, 'tl', 'CSE', 'PROF.', 'marriage', 'SL', '2016-10-25', '2016-10-26', '2016-10-31', '4', 'YES', 8797675463, 'RECOMENDED', '2016-10-25', 1, 'RECOMENDED', 1, 'ACCEPT', 'kkk', 1),
(65, 'leena', 'CSE', 'PROF.', 'marriage', 'CL', '2016-12-15', '2016-12-17', '2016-12-21', '4', 'YES', 9876543432, 'RECOMENDED', '2016-12-16', 1, 'RECOMENDED', 1, 'ACCEPT', 'good', 1),
(66, 'PrashantRichhariya', 'CSE', 'Associate Professor', 'marrigae', 'EL', '2018-01-12', '2018-01-13', '2018-01-17', '3', 'YES', 98786532435, 'RECOMENDED', '2018-01-11', 1, '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `principle`
--

CREATE TABLE IF NOT EXISTS `principle` (
  `fl_id` int(11) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principle`
--

INSERT INTO `principle` (`fl_id`, `USERNAME`, `PASSWORD`) VALUES
(1, 'principal', 'principal');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `ID` int(11) NOT NULL,
  `FIRST` varchar(50) NOT NULL,
  `LAST` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `GENDER` varchar(30) NOT NULL,
  `COLLEGE` varchar(50) NOT NULL,
  `DEPARTMENT` varchar(50) NOT NULL,
  `DESIGNATION` varchar(50) NOT NULL,
  `TYPE` varchar(80) NOT NULL,
  `DOJ` varchar(30) NOT NULL,
  `MOBILENO` bigint(20) NOT NULL,
  `ADDRESS` varchar(300) NOT NULL,
  `CL` float NOT NULL,
  `EL` int(11) NOT NULL,
  `SL` int(11) NOT NULL,
  `OL` int(11) NOT NULL,
  `DL` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `FIRST`, `LAST`, `USERNAME`, `PASSWORD`, `GENDER`, `COLLEGE`, `DEPARTMENT`, `DESIGNATION`, `TYPE`, `DOJ`, `MOBILENO`, `ADDRESS`, `CL`, `EL`, `SL`, `OL`, `DL`) VALUES
(7, 'SHASHIKANT', 'AGRAWAL', 'SHASHIKANTAGRAWAL', '55555', 'male', 'CSIT', 'ETC', 'SR.ASST.PROF.', '', '05-05-85', 3456789, 'DURG', 0, 0, 0, 0, 0),
(6, 'KHOMLAL', 'SINHA', 'KHOMLALSINHA', '44444', 'male', 'CSIT', 'CSE', 'SR.ASST.PROF.', '', '04-04-84', 23456789, 'DURG', 22, 24, 42, 14, 32),
(1, 'Prashant', 'Richhariya', 'PrashantRichhariya', '123456', 'male', 'CSIT DURG', 'CSE', 'Associate Professor', '', '12-02-88', 8305030444, 'Qt-7/E Stret-52 Zone-2 khursipar', 12, 14, 32, 4, 22),
(2, 'Vinay', 'Bhardawaj', 'VinayBhardawaj', '123456', 'male', 'CSIT', 'CSE', 'Assistant Professor', '', '14-05-89', 12345678, 'Near R.K.Fitness', 5, 12, 30, 2, 20),
(8, 'NISHANT', 'SHUKLA', 'NISHANTSHUKLA', '22222', 'male', 'CSIT', 'MECH', 'ASST.PROF.', '', '02-02-82', 111111111, 'DURG', 2, 2, 2, 2, 2),
(9, 'PRAVEEN', 'SHINDE', 'PRAVEENSHINDE', '11111', 'male', 'CSIT', 'IT', 'ASST.PROF.', '', '01-01-81', 123456, 'DURG', 8, 12, 12, 12, 12),
(10, 'KUSHAL', 'TIWARI', 'KUSHALTIWARI', '12222', 'male', 'CSIT', 'EEE', 'ASST.PROF.', '', '12-03-83', 1244444, 'DURG', 0, 0, 0, 0, 0),
(11, 'OMPRAKASH', 'YADAV', 'OMPRAKASHYADAV', '13333', 'male', 'CSIT', 'E&I', 'SR.ASST.PROF.', '', '13-12-82', 3333333333, 'DURG', 0, 0, 0, 0, 0),
(12, 'SONIYA', 'LALWANI', 'SONIYALALWANI', '14444', 'female', 'CSIT', 'CIVIL', 'TECH.ASST.', '', '13-04-82', 22222222, 'DURG', 0, 0, 0, 0, 0),
(13, 'SANJAY', 'PARGHANIYA', 'SANJAYPARGHANIYA', '15555', 'female', 'CSIT', 'ENGG.PHYSICS', 'TECH.ASST.', '', '02-01-81', 333334567, 'DURG', 0, 0, 0, 0, 0),
(14, 'SHAILENDRA', 'KHUSHWAHA', 'SHAILENDRAKHUSHWAHA', '45555', 'male', 'CSIT', 'ENGG.CHEMISTRY', 'TECH.ASST.', '', '09-09-89', 7896543, 'DURG', 0, 0, 0, 0, 0),
(15, 'OMKAR', 'YADAV', 'OMKARYADAV', '34444', 'male', 'CSIT', 'ENGG.MATHEMATICS', 'ASST.PROF.', '', '18-09-82', 34567892, 'DURG', 0, 0, 0, 0, 0),
(16, 'CHANDRASHEKHAR', 'SHARMA', 'CHANDRASHEKHARSHARMA', '34567', 'male', 'CSIT', 'COMM.SKILLS', 'ASST.PROF.', '', '15-02-80', 45678932, 'DURG', 0, 0, 0, 0, 0),
(17, 'ADITI', 'MISHRA', 'ADITIMISHRA', '24444', 'female', 'CSIT', 'TPO', 'ASSO.PROF.', '', '11-11-81', 99999, 'DURG', 0, 0, 0, 0, 0),
(18, 'AVINASH', 'DEWANGAN', 'AVINASHDEWANGAN', '77777', 'male', 'CSIT', 'PR CELL', 'SR.ASST.PROF.', '', '08-08-88', 11111111111, 'DURG', 0, 0, 0, 0, 0),
(26, 'Ishan', 'Ishan', 'Ishan', 'ishan', 'male', 'CSIT', 'CSE', 'PROF.', '', '2016-09-07', 9876785432, 'csit durg', 97, 99, 117, 89, 107),
(21, 'BHUPESH', 'DEWANGAN', 'BHUPESHDEWANGAN', '123456', 'male', 'CSIT', 'CSE', 'SR.ASST.PROF.', '', '17/08/1995', 1234567890, 'KOHK BHILAI', 0, 0, 0, 0, 0),
(22, 'AKANKSHA', 'SAHU', 'AKANKSHASAHU', '123456', 'female', 'CSIT', 'EEE', 'PROF.', '', '12/11/1997', 7566618557, 'KOHKA BHILAI', 0, 0, 0, 0, 0),
(23, 'UJJWAL', 'SAHU', 'UJJWALSAHU', '123456', 'female', 'CSIT', 'MECH', 'PROF.', '', '12/11/1997', 7566618557, 'KOHKA BHILAI', 0, 0, 0, 0, 0),
(24, 'SAGAR', 'SA0', 'SAGARSAHU', '123456', 'female', 'CSIT', 'MEX', 'LABASST.', '', '12/11/1997', 7566618557, 'KOHKA BHILAI', 0, 0, 0, 0, 0),
(27, 'trilok', 'sahu', 'triloksahu', '123456', 'male', 'CSIT', 'CSE', 'LABASST.', '', '2016-04-15', 8109966442, 'csit durg\r\n', 3.5, 9, 26, 2, 13),
(28, 'tt', 'tt', 'tttt', 'tttt', 'male', 'CSIT', 'CSE', 'PROF.', '', '2016-10-07', 9876545678, 'csit', 7, 12, 30, 2, 20),
(29, 'leena', 'singh', 'leenasingh', '123456', 'female', 'CSIT', 'CSE', 'ASSO.PROF.', '', '2016-10-06', 1234567890, 'durg', 7, 12, 30, 2, 20),
(30, 'SONIYA', 'SINGH', 'SONIYA', 'SONIYA', 'female', 'CSIT', 'CSE', 'PROF.', '', '2016-10-07', 8305030445, 'CSIT DURG', 16, 21, 47, 22, 40),
(32, 'ram', 'shyam', 'ramshyam', 'ramshyam', 'male', 'CSIT', 'CSE', 'LABASST.', 'NON-TEACHING', '2016-10-22', 9878656754, 'csit durg', 10, 12, 30, 2, 0),
(33, 'ram', 'shyam', 'ramshyam', 'ramshyam', 'male', 'CSIT', 'CSE', 'PROF.', 'TEACHING', '2016-10-22', 9878656754, 'csit durg', 10, 12, 30, 2, 20),
(40, 'pp', 'pp', 'pppp', 'pppp', 'male', 'csit', 'CSE', 'PROF.', 'TEACHING', '2016-10-22', 9898786754, 'csit durg', 10, 12, 30, 2, 20),
(41, 'pp', 'pp', 'pppp', 'pppp', 'male', 'csit', 'CSE', 'PROF.', 'NON-TEACHING', '2016-10-22', 9898786754, 'csit durg', 10, 12, 30, 2, 0),
(42, 't', 'l', 'tl', 'tl', 'male', 'CSIT', 'CSE', 'PROF.', 'TEACHING', '2016-10-25', 9878657654, 'csit durg', 10, 12, 26, 2, 20),
(43, 'leenasingh', 'singh', 'leena', 'leena', 'female', 'CSIT', 'CSE', 'PROF.', 'TEACHING', '2016-12-01', 9898989765, 'khursipar', 6, 12, 30, 2, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`fl_id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`DEPARTMENT`);

--
-- Indexes for table `leave1`
--
ALTER TABLE `leave1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaveform`
--
ALTER TABLE `leaveform`
  ADD PRIMARY KEY (`fl_id`);

--
-- Indexes for table `principle`
--
ALTER TABLE `principle`
  ADD PRIMARY KEY (`fl_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `fl_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `leave1`
--
ALTER TABLE `leave1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `leaveform`
--
ALTER TABLE `leaveform`
  MODIFY `fl_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `principle`
--
ALTER TABLE `principle`
  MODIFY `fl_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
