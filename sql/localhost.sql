-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2017 at 06:07 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bonafide`
--
CREATE DATABASE IF NOT EXISTS `bonafide` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bonafide`;

-- --------------------------------------------------------

--
-- Table structure for table `year09`
--

CREATE TABLE IF NOT EXISTS `year09` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `class` varchar(200) NOT NULL,
  `period` varchar(12) NOT NULL,
  `purpose` varchar(75) NOT NULL,
  `bywhom` varchar(15) NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year10`
--

CREATE TABLE IF NOT EXISTS `year10` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `class` varchar(200) NOT NULL,
  `period` varchar(12) NOT NULL,
  `purpose` varchar(75) NOT NULL,
  `bywhom` varchar(15) NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year11`
--

CREATE TABLE IF NOT EXISTS `year11` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `class` varchar(200) NOT NULL,
  `period` varchar(12) NOT NULL,
  `purpose` varchar(75) NOT NULL,
  `bywhom` varchar(15) NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year12`
--

CREATE TABLE IF NOT EXISTS `year12` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `class` varchar(200) NOT NULL,
  `period` varchar(12) NOT NULL,
  `purpose` varchar(75) NOT NULL,
  `bywhom` varchar(15) NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year13`
--

CREATE TABLE IF NOT EXISTS `year13` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `class` varchar(200) NOT NULL,
  `period` varchar(12) NOT NULL,
  `purpose` varchar(75) NOT NULL,
  `bywhom` varchar(15) NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year14`
--

CREATE TABLE IF NOT EXISTS `year14` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `class` varchar(200) NOT NULL,
  `period` varchar(12) NOT NULL,
  `purpose` varchar(75) NOT NULL,
  `bywhom` varchar(15) NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year15`
--

CREATE TABLE IF NOT EXISTS `year15` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `class` varchar(200) NOT NULL,
  `period` varchar(12) NOT NULL,
  `purpose` varchar(75) NOT NULL,
  `bywhom` varchar(15) NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year16`
--

CREATE TABLE IF NOT EXISTS `year16` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `class` varchar(200) NOT NULL,
  `period` varchar(12) NOT NULL,
  `purpose` varchar(75) NOT NULL,
  `bywhom` varchar(15) NOT NULL,
  `updatedon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `maindb`
--
CREATE DATABASE IF NOT EXISTS `maindb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `maindb`;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `username` varchar(45) NOT NULL,
  `password` varbinary(45) NOT NULL,
  `privilege` varchar(10) NOT NULL,
  `updateddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`username`, `password`, `privilege`, `updateddate`) VALUES
('generator', 'generator', 'generator', '2016-12-25 01:55:57'),
('admin', 'administrator', 'admin', '2016-12-25 01:55:57');
--
-- Database: `st_details`
--
CREATE DATABASE IF NOT EXISTS `st_details` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `st_details`;

-- --------------------------------------------------------

--
-- Table structure for table `coursenames`
--

CREATE TABLE IF NOT EXISTS `coursenames` (
  `shortname` varchar(15) NOT NULL,
  `longname` varchar(60) NOT NULL,
  `coursecodes` varchar(2) NOT NULL,
  PRIMARY KEY (`shortname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursenames`
--

INSERT INTO `coursenames` (`shortname`, `longname`, `coursecodes`) VALUES
('btech', 'B.Tech', 'A'),
('mba', 'MBA', 'E'),
('mca', 'MCA', 'F'),
('mtech', 'M.Tech', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `purpose`
--

CREATE TABLE IF NOT EXISTS `purpose` (
  `reason` varchar(45) NOT NULL,
  `whom` varchar(15) NOT NULL,
  `updatedon` varchar(15) NOT NULL,
  UNIQUE KEY `reason` (`reason`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purpose`
--

INSERT INTO `purpose` (`reason`, `whom`, `updatedon`) VALUES
('Driving Licence', 'admin', '2016-12-25 23:40:09'),
('Scholarship', 'admin', '2016-12-25 23:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE IF NOT EXISTS `specializations` (
  `spec_code` varchar(3) NOT NULL,
  `cr_code` varchar(6) NOT NULL,
  `spec` varchar(60) NOT NULL,
  `specname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`spec_code`, `cr_code`, `spec`, `specname`) VALUES
('01', 'A', 'CIVIL ENGINEERING', 'CE'),
('13', 'A', 'ELECTRONICS & CONTROL ENGINEERING', 'E.Con.E'),
('03', 'A', 'MECHANICAL ENGINEERING', 'ME'),
('04', 'A', 'ELECTRONICS & COMMUNICATION ENGINEERING', 'ECE'),
('05', 'A', 'COMPUTER SCIENCE & ENGINEERING', 'CSE'),
('02', 'A', 'ELECTRICAL & ELECTRONICS ENGINEERING', 'EEE'),
('10', 'A', 'ELECTRONICS & INSTRUMENTATION ENGG.', 'EIE'),
('12', 'A', 'INFORMATION TECHNOLOGY', 'IT'),
('21', 'A', 'AERONAUTICAL ENGINEERING', 'AE'),
('23', 'A', 'BIO-TECHNOLOGY', 'BT'),
('15', 'A', 'COMPUTER SCIENCE & SYSTEM ENGG.', 'CSSE'),
('19', 'A', 'ELECTRONICS & COMPUTER ENGINEERING', 'ECM'),
('0', 'R', ' - ', ''),
('14', 'A', 'MECHATRONICS ENGINEERING', 'MECHA.E'),
('08', 'A', 'CHEMICAL ENGINEERING', 'CE'),
('03', 'D', 'BIO TECHNOLOGY', 'BT'),
('04', 'D', 'CAD/CAM', 'CAD/CAM'),
('05', 'D', 'COMPUTER SCIENCE', 'CS'),
('06', 'D', 'DIGITAL SYSTEMS & COMPUTER ELECTRONICS', 'DSCE'),
('07', 'D', 'ELECTRICAL POWER SYSTEMS', 'EPS'),
('08', 'D', 'COMPUTER NETWORKS', 'CN'),
('09', 'D', 'COMMUNICATION & SIGNAL PROCESSING', 'CSP'),
('10', 'D', 'ENERGY SYSTEMS', 'ES'),
('11', 'D', 'THERMAL SCIENCE & ENERGY SYSTEMS', 'TSES'),
('12', 'D', 'GEO TECHNICAL ENGINEERING', 'GE'),
('15', 'D', 'MACHINE DESIGN', 'MD'),
('17', 'D', 'REFRIGERATION & AIR CONDITIONING', 'RAC'),
('20', 'D', 'STRUCTURAL ENGINEERING', 'SE'),
('24', 'D', 'WATER RESOURCES ENGINEERING', 'WRE'),
('25', 'D', 'SOFTWARE ENGINEERING', 'SE'),
('35', 'D', 'COMPUTER AIDED STRUCTURAL ENGINEERING', 'CASE'),
('42', 'D', 'POWER AND INDUSTRIAL DRIVES', 'PID'),
('43', 'D', 'POWER ELECTRONICS', 'PE'),
('49', 'D', 'ELECTRICAL POWER ENGINEERING', 'EPE'),
('38', 'D', 'DIGITAL ELECTRONICS & COMMUNICATION SYSTEMS', 'DECS'),
('51', 'D', 'CHEMICAL ENGINEERING', 'CE'),
('54', 'D', 'POWER ELECTRONICS & ELECTRICAL DRIVES', 'PEED'),
('55', 'D', 'EMBEDDED SYSTEMS', 'ES'),
('57', 'D', 'VLSI SYSTEM DESIGN', 'VLSI'),
('58', 'D', 'COMPUTER SCIENCE & ENGINEERING', 'CSE'),
('61', 'D', 'COMMUNICATION SYSTEMS', 'CS'),
('70', 'D', 'ELECTRONICS & COMMUNICATION ENGINEERING', 'ECE'),
('75', 'D', 'CONTROL SYSTEMS', 'CS'),
('79', 'D', 'ADVANCED INTERNAL COMBUSTION ENGINES', 'AICE'),
('80', 'D', 'PRODUCT DESIGN', 'PD'),
('81', 'D', 'RELIABILITY ENGINEERING', 'RE'),
('01', 'S', 'PHARMACOLOGY', 'P'),
('02', 'S', 'PHARMACEUTICAL CHEMISTRY', 'PC'),
('03', 'S', 'PHARMACEUTICS', 'P'),
('11', 'S', 'PHARMACEUTICS & DRUG REGULATORY AFFAIRS', 'PDRA'),
('05', 'S', 'HOSPITAL & CLINICAL PHARMACY', 'HCP'),
('07', 'S', 'PHARMACEUTICAL ANALYSIS', 'PA'),
('17', 'G', 'ORGANIC CHEMISTRY', 'OR'),
('21', 'G', 'PHYSICS', 'P'),
('06', 'S', 'PHARMACOGNOSY', 'P'),
('08', 'S', 'INDUSTRIAL PHARMACY', 'IP'),
('09', 'S', 'PHARMACY PRACTICE', 'PP'),
('10', 'S', 'PHARMACEUTICAL TECHNOLOGY', 'PT'),
('04', 'S', 'PHARMACEUTICAL ANALYSIS & QUALITY ASSURANCE', 'PAQA'),
('13', 'G', 'FOOD TECHNOLOGY', 'FT'),
('18', 'G', 'BIOCHEMISTRY', 'B'),
('12', 'S', 'PHARMACEUTICAL ANALYSIS & QUALITY CONTROL', 'PAQC'),
('93', 'D', 'HIGHWAY ENGINEERING', 'HE'),
('82', 'D', 'POWER SYSTEMS', 'PS'),
('21', 'D', 'CONSTRUCTION PLANNING AND MANAGEMENT', 'CPM'),
('22', 'D', 'ARTIFICIAL INTELLIGENCE', 'AI'),
('63', 'D', 'COMPUTER NETWORKS AND INFORMATION SECURITY', 'CNIS'),
('66', 'D', 'NANOTECHNOLOGY', 'NT'),
('68', 'D', 'VLSI AND EMBEDDED SYSTEMS', 'VLSIES'),
('83', 'D', 'POWER ELECTRONICS AND DRIVES', 'PED'),
('84', 'D', 'EMBEDDED SYSTEM & VLSI', 'ESVLSI'),
('85', 'D', 'VLSI & EMBEDDED SYSTEMS DESIGN', 'VLSIESD'),
('86', 'D', 'MICRO & NANO ELECTRONICS', 'MNE'),
('87', 'D', 'ADVANCED MANUFACTURING SYSTEMS', 'AMS'),
('88', 'D', 'THERMAL ENGINEERING', 'TE'),
('94', 'D', 'PRODUCTION ENGINEERING', 'PE'),
('95', 'D', 'SOLAR POWER SYSTEMS', 'SPS'),
('89', 'D', 'THERMAL SCIENCE & ENERGY SYSTEMS', 'TSES'),
('90', 'D', 'PRODUCTION ENGINEERING & ENGINEERING DESIGN', 'PEED'),
('91', 'D', 'STRUCTURAL ENGINEERING & CONSTRUCTION MANAGEMENT', 'SECM'),
('92', 'D', 'COMPUTER AIDED STRUCTURAL ENGINEERING', 'CASE'),
('01', 'J', 'VLSI SYSTEM DESIGN', 'VLSISD'),
('02', 'J', 'EMBEDDED SYSTEMS', 'ES');

-- --------------------------------------------------------

--
-- Table structure for table `year09`
--

CREATE TABLE IF NOT EXISTS `year09` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `updatedon` datetime NOT NULL,
  UNIQUE KEY `htno` (`htno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year10`
--

CREATE TABLE IF NOT EXISTS `year10` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `updatedon` datetime NOT NULL,
  UNIQUE KEY `htno` (`htno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `year11`
--

CREATE TABLE IF NOT EXISTS `year11` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `updatedon` datetime NOT NULL,
  UNIQUE KEY `htno` (`htno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year12`
--

CREATE TABLE IF NOT EXISTS `year12` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `updatedon` datetime NOT NULL,
  UNIQUE KEY `htno` (`htno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year13`
--

CREATE TABLE IF NOT EXISTS `year13` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `updatedon` datetime NOT NULL,
  UNIQUE KEY `htno` (`htno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year14`
--

CREATE TABLE IF NOT EXISTS `year14` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `updatedon` datetime NOT NULL,
  UNIQUE KEY `htno` (`htno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year15`
--

CREATE TABLE IF NOT EXISTS `year15` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `updatedon` datetime NOT NULL,
  UNIQUE KEY `htno` (`htno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year16`
--

CREATE TABLE IF NOT EXISTS `year16` (
  `htno` varchar(11) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `updatedon` datetime NOT NULL,
  UNIQUE KEY `htno` (`htno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
