-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 04:35 PM
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
  `personalInfoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Bautista Pharmacy'),
(2, 'Bautista Hospital'),
(3, 'Bautista Clinic');

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
  `zipcode` varchar(255) NOT NULL,
  `sssNumber` varchar(255) NOT NULL,
  `philHealthNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `contactInformationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `contactInfoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `departmentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblemployeeinfo`
--
ALTER TABLE `tblemployeeinfo`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblhealthdeclaration`
--
ALTER TABLE `tblhealthdeclaration`
  MODIFY `healthDeclarationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbllocations`
--
ALTER TABLE `tbllocations`
  MODIFY `locationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblnurse`
--
ALTER TABLE `tblnurse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpersonalinfo`
--
ALTER TABLE `tblpersonalinfo`
  MODIFY `personalInfoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpersons`
--
ALTER TABLE `tblpersons`
  MODIFY `personID` int(11) NOT NULL AUTO_INCREMENT;

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
