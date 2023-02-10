-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 10:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bautistahospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactinformation`
--

CREATE TABLE `tblcontactinformation` (
  `contactInfoID` int(11) NOT NULL,
  `cellphoneNumber` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontactinformation`
--

INSERT INTO `tblcontactinformation` (`contactInfoID`, `cellphoneNumber`, `emailAddress`) VALUES
(1, '09975461468', 'jedjose1999@gmail.com'),
(2, '09456281697', 'johnlemon@gmail.com'),
(9, 'fdsfdsfds', 'fdsfdsfds'),
(10, '09564190289', 'johnlester@gmail.com'),
(11, 'fdfdsfds', 'dfsfdsdfs'),
(12, 'tretre', 'tretre'),
(13, 'rewrewrew', 'erwrew'),
(14, '', ''),
(15, '', ''),
(16, '', ''),
(17, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `departmentID` int(11) NOT NULL,
  `departmentName` varchar(255) NOT NULL,
  `departmentCode` varchar(255) NOT NULL,
  `employeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployeeinfo`
--

CREATE TABLE `tblemployeeinfo` (
  `employeeID` int(11) NOT NULL,
  `employeeNumber` varchar(255) NOT NULL,
  `isPositive` tinyint(1) NOT NULL,
  `isArchived` tinyint(1) NOT NULL,
  `personID` int(11) NOT NULL,
  `personalInfoID` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `isNurse` varchar(255) NOT NULL,
  `nurseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemployeeinfo`
--

INSERT INTO `tblemployeeinfo` (`employeeID`, `employeeNumber`, `isPositive`, `isArchived`, `personID`, `personalInfoID`, `position`, `isNurse`, `nurseID`) VALUES
(1, 'BHEID-001', 0, 0, 1, 1, 'Guard', '', 0),
(8, 'fdfdsfdfds', 0, 0, 14, 7, 'fdsfds', 'No', 0),
(9, 'BHEID-002', 0, 0, 15, 8, 'Guard', 'No', 0),
(10, 'fdsfds', 0, 0, 16, 9, 'fdsfdsfds', 'No', 0),
(11, 'fdsfdsfds', 0, 0, 17, 10, 'fdsfdsfdsfd', 'No', 0),
(12, 'rewerw', 0, 0, 18, 11, 'rewewr', 'No', 0),
(13, 'eeqw', 0, 0, 19, 12, '', 'No', 0),
(14, '', 0, 0, 20, 13, '', 'No', 0),
(15, '', 0, 0, 21, 14, '', 'No', 0),
(16, '', 0, 0, 23, 15, '', 'No', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblhealthdeclaration`
--

CREATE TABLE `tblhealthdeclaration` (
  `healthDeclarationID` int(11) NOT NULL,
  `timeOfConsultation` datetime NOT NULL,
  `natureOfVisit` varchar(255) NOT NULL,
  `bodyTemperature` float NOT NULL,
  `travelHistory` tinyint(1) NOT NULL,
  `countryTravelled` varchar(255) NOT NULL,
  `dateOfArrival` datetime NOT NULL,
  `personalContact` tinyint(1) NOT NULL,
  `fever` tinyint(1) NOT NULL,
  `cold` tinyint(1) NOT NULL,
  `cough` tinyint(1) NOT NULL,
  `sorethroat` tinyint(1) NOT NULL,
  `tiredness` tinyint(1) NOT NULL,
  `musclePain` tinyint(1) NOT NULL,
  `difficultyBreathing` tinyint(1) NOT NULL,
  `lossOfTaste` tinyint(1) NOT NULL,
  `diarrhea` tinyint(1) NOT NULL,
  `physicianID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbllocations`
--

CREATE TABLE `tbllocations` (
  `locationID` int(11) NOT NULL,
  `locationName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbllocations`
--

INSERT INTO `tbllocations` (`locationID`, `locationName`) VALUES
(1, 'fdsfdsfsd'),
(2, 'Bautista Hospital'),
(3, 'Bautista Hospital'),
(4, ''),
(5, 'Bautista Hospital'),
(6, 'fdsfdsfds');

-- --------------------------------------------------------

--
-- Table structure for table `tblnurse`
--

CREATE TABLE `tblnurse` (
  `ID` int(11) NOT NULL,
  `licenseNumber` varchar(255) NOT NULL,
  `employeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `patientID` int(11) NOT NULL,
  `patientNumber` varchar(255) NOT NULL,
  `referredBy` varchar(255) NOT NULL,
  `nextConsultation` datetime NOT NULL,
  `personID` int(11) NOT NULL,
  `personalInformationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`patientID`, `patientNumber`, `referredBy`, `nextConsultation`, `personID`, `personalInformationID`) VALUES
(1, 'BHPID-001', 'Dr. Kayaba Akihiko', '2023-04-29 17:22:22', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblpersonalinfo`
--

CREATE TABLE `tblpersonalinfo` (
  `personalInfoID` int(11) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `address` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `maritalStatus` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `sssNumber` varchar(255) NOT NULL,
  `philHealthNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpersonalinfo`
--

INSERT INTO `tblpersonalinfo` (`personalInfoID`, `weight`, `height`, `address`, `barangay`, `city`, `province`, `country`, `citizenship`, `maritalStatus`, `zipcode`, `sssNumber`, `philHealthNumber`) VALUES
(1, 100, 100, '269 Di Makita', '21 - Lapu', 'Cavite City', 'Cavite', 'Philippines', 'Filipino', 'Single', '4100', '002324328674', '343905327583'),
(2, 112, 55, '134 Lapu-Lapu St. Caridad Cavite City', '25-Ilang-ilang', 'Cavite City', 'Cavite', 'Philippines', 'Filipino', 'Single', '4100', '43534563465346', '35465676796745'),
(3, 0, 0, 'fdfdsfds', 'Barangay 1', 'Cavite City', 'Philippines', '', 'fdsfdsfds', 'Single', '', 'fdsfdsfds', 'fdsfds'),
(4, 0, 0, 'fdsfdsfds', 'Barangay 1', 'Cavite City', 'Philippines', '', 'fdsfds', 'Single', '', 'fdsfdsdfs', ''),
(5, 0, 0, 'fdsfdsfds', 'Barangay 1', 'Cavite City', 'Philippines', '', 'fdsfds', 'Single', '', 'fdsfdsdfs', ''),
(6, 0, 0, 'fdsfdsfds', 'Barangay 1', 'Cavite City', 'Philippines', '', 'fdsfds', 'Single', '', 'fdsfdsdfs', ''),
(7, 0, 0, 'fdsfdsfds', 'Barangay 1', 'Cavite City', 'Philippines', '', 'fdsfds', 'Single', '', 'fdsfdsdfs', ''),
(8, 200, 100, '268 Barlan Cor. Mabini', 'Barangay 3', 'Cavite City', 'Philippines', '', 'Filipino', 'Single', '4100', '2000', '112313'),
(9, 342432, 423243, 'rewrewrrew', 'Barangay 1', 'Cavite City', 'Philippines', '', 'rereer', 'Single', '45343543', 'rewrewrew', 'rewrerew'),
(10, 45435, 564564, 'rtetretre', 'Barangay 1', 'Cavite City', 'Philippines', '', 'trrtetre', 'Single', 'rttertre', 'tretre', 'trrtetre'),
(11, 4343, 34432, 'rewreew', 'Barangay 1', 'Cavite City', 'Philippines', '', 'erwrewrwe', 'Single', '234324', 'rew', 'rewrew'),
(12, 0, 0, '', 'Barangay 1', 'Cavite City', 'Philippines', '', '', 'Single', '', '', ''),
(13, 0, 0, '', 'Barangay 1', 'Cavite City', 'Philippines', '', '', 'Single', '', '', ''),
(14, 0, 0, '', 'Barangay 1', 'Cavite City', 'Philippines', '', '', 'Single', '', '', ''),
(15, 0, 0, '', 'Barangay 1', 'Cavite City', 'Philippines', '', '', 'Single', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblpersons`
--

CREATE TABLE `tblpersons` (
  `personID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `birthDate` datetime NOT NULL,
  `sex` varchar(255) NOT NULL,
  `contactInformationID` varchar(11) NOT NULL,
  `bloodType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpersons`
--

INSERT INTO `tblpersons` (`personID`, `firstName`, `middleName`, `lastName`, `birthDate`, `sex`, `contactInformationID`, `bloodType`) VALUES
(1, 'Jed', 'Lester', 'Jose', '2023-02-01 09:36:05', 'Male', '1', 'A'),
(2, 'John', 'Pascua', 'Lemon', '1995-01-18 17:23:25', 'Male', '2', 'A'),
(9, 'bcvbvcbcv', 'bcv', 'bcvbcvbcvbvc', '2023-02-10 00:00:00', 'Male', '', 'A+'),
(10, 'fdsfds', 'fdsf', 'dsfds', '2023-02-08 00:00:00', 'Male', '', 'A+'),
(11, 'fds', 'fdsfds', 'fdsfds', '2023-02-03 00:00:00', 'Male', '', 'A+'),
(12, 'fds', 'fdsfds', 'fdsfds', '2023-02-03 00:00:00', 'Male', '', 'A+'),
(13, 'fds', 'fdsfds', 'fdsfds', '2023-02-03 00:00:00', 'Male', '', 'A+'),
(14, 'fds', 'fdsfds', 'fdsfds', '2023-02-03 00:00:00', 'Male', '', 'A+'),
(15, 'John Lester', 'Dos', 'Uno', '2023-02-15 00:00:00', 'Male', '', 'B-'),
(16, 'fdsfds', 'fdsfdsfds', 'fdsfdsfds', '2023-02-16 00:00:00', 'Male', '', 'A+'),
(17, 'sfds', 'fdsfds', 'fdsfds', '2023-02-23 00:00:00', 'Male', '', 'A+'),
(18, 'rewrew', 'rewrew', 'rewre', '0000-00-00 00:00:00', 'Male', '', 'A+'),
(19, '', '', '', '0000-00-00 00:00:00', 'Male', '', 'A+'),
(20, '', '', '', '0000-00-00 00:00:00', 'Male', '', 'A+'),
(21, '', '', '', '0000-00-00 00:00:00', 'Male', '', 'A+'),
(22, '', '', '', '0000-00-00 00:00:00', 'Male', '', 'A+'),
(23, '', '', '', '0000-00-00 00:00:00', 'Male', '', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `tblphysicians`
--

CREATE TABLE `tblphysicians` (
  `ID` int(11) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `employeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblvisitlogs`
--

CREATE TABLE `tblvisitlogs` (
  `visitID` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `personID` int(11) NOT NULL,
  `healthDeclarationID` int(11) NOT NULL,
  `locationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcontactinformation`
--
ALTER TABLE `tblcontactinformation`
  ADD PRIMARY KEY (`contactInfoID`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`departmentID`);

--
-- Indexes for table `tblemployeeinfo`
--
ALTER TABLE `tblemployeeinfo`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `tblhealthdeclaration`
--
ALTER TABLE `tblhealthdeclaration`
  ADD PRIMARY KEY (`healthDeclarationID`);

--
-- Indexes for table `tbllocations`
--
ALTER TABLE `tbllocations`
  ADD PRIMARY KEY (`locationID`);

--
-- Indexes for table `tblnurse`
--
ALTER TABLE `tblnurse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`patientID`);

--
-- Indexes for table `tblpersonalinfo`
--
ALTER TABLE `tblpersonalinfo`
  ADD PRIMARY KEY (`personalInfoID`);

--
-- Indexes for table `tblpersons`
--
ALTER TABLE `tblpersons`
  ADD PRIMARY KEY (`personID`);

--
-- Indexes for table `tblphysicians`
--
ALTER TABLE `tblphysicians`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvisitlogs`
--
ALTER TABLE `tblvisitlogs`
  ADD PRIMARY KEY (`visitID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcontactinformation`
--
ALTER TABLE `tblcontactinformation`
  MODIFY `contactInfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `departmentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblemployeeinfo`
--
ALTER TABLE `tblemployeeinfo`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblhealthdeclaration`
--
ALTER TABLE `tblhealthdeclaration`
  MODIFY `healthDeclarationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbllocations`
--
ALTER TABLE `tbllocations`
  MODIFY `locationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblnurse`
--
ALTER TABLE `tblnurse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `patientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpersonalinfo`
--
ALTER TABLE `tblpersonalinfo`
  MODIFY `personalInfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblpersons`
--
ALTER TABLE `tblpersons`
  MODIFY `personID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tblphysicians`
--
ALTER TABLE `tblphysicians`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblvisitlogs`
--
ALTER TABLE `tblvisitlogs`
  MODIFY `visitID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
