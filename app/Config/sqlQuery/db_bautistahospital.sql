-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 04:33 AM
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
(3, '3546757876', 'ajj@gmail.com'),
(13, '3434223423', 'jll@gmail.com'),
(14, '3434223423', 'jll@gmail.com'),
(15, '3434223423', 'johnysins@gmail.com'),
(17, '3434223423', 'jll@gmail.com'),
(18, '3434223423', 'jll@gmail.com'),
(20, '3434223423', 'jll@gmail.com'),
(24, '3434223423', 'jll@gmail.com'),
(26, '09564190289', 'kylie@gmail.com'),
(27, '0998642345', 'jedlesterjose@gmail.com'),
(28, '0998642345', 'jedlesterjose@gmail.com'),
(29, '0998642345', 'jedlesterjose@gmail.com');

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
  `isNurse` varchar(255) NOT NULL,
  `nurseLicenseNumber` varchar(255) NOT NULL,
  `personID` int(11) NOT NULL,
  `personalInfoID` int(11) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemployeeinfo`
--

INSERT INTO `tblemployeeinfo` (`employeeID`, `employeeNumber`, `isPositive`, `isArchived`, `isNurse`, `nurseLicenseNumber`, `personID`, `personalInfoID`, `position`) VALUES
(12, '1122112', 0, 0, 'No', '', 14, 13, 'Doctor'),
(15, '1111', 0, 0, 'No', '', 20, 19, 'Guard'),
(19, '001', 0, 0, 'Yes', '132123', 24, 23, 'Nurse'),
(21, '003', 0, 0, 'No', '', 26, 25, 'Nurse');

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
(31, 'Bautista Hospitalsssssss'),
(33, 'Bautista Hospitalsh'),
(35, 'Bautista Hospital2222ddd'),
(36, 'Bautista Hospital');

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
  `physician` varchar(255) NOT NULL,
  `nextConsultation` datetime NOT NULL,
  `diagnoses` varchar(255) NOT NULL,
  `personID` int(11) NOT NULL,
  `personalInformationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`patientID`, `patientNumber`, `physician`, `nextConsultation`, `diagnoses`, `personID`, `personalInformationID`) VALUES
(2, '001', 'Dr. Javier', '2023-03-23 14:30:00', 'Sakit sa puso', 29, 28);

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
  `philHealthNumber` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `maritalStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpersonalinfo`
--

INSERT INTO `tblpersonalinfo` (`personalInfoID`, `weight`, `height`, `address`, `barangay`, `city`, `province`, `country`, `zipcode`, `sssNumber`, `philHealthNumber`, `citizenship`, `maritalStatus`) VALUES
(12, 123213, 12121, '269 Barlan St.', '21', 'Cavite', 'Cavite', '', '4100', '13324535343', '2344323422342', 'Filipino', 'Single'),
(13, 123213, 12121, '269 Barlan St.', '21', 'Cavite', 'Cavite', '', '4100', '13324535343', '2344323422342', 'Filipino', 'Single'),
(14, 11, 11, '269 Barlan St.', '21', 'Cavite', 'Cavite', '', '4100', '13324535343', '2344323422342', 'Filipino', 'Widowed'),
(16, 12121, 1221, '269 Barlan St.', '21', 'Cavite', 'Cavite', '', '4100', '13324535343', '2344323422342', 'Filipino', 'Single'),
(17, 123, 12121, '269 Barlan St.', '21', 'Cavite', 'Cavite', '', '4100', '13324535343', '4124232421422', 'Filipino', 'Single'),
(19, 123213, 12121, '269 Barlan St.', '21', 'Cavite', 'Cavite', '', '5333', '13324535343', '2344323422342', 'Filipino', 'Single'),
(23, 11, 11, '322323', '121', 'Cavite', 'Cavite', '', '4100', '232312323', '232323232443', 'wwea', 'Single'),
(25, 122, 121, '269 Barlan St. C.C.C.', '21', 'Cavite City', 'Cavite', '', '4100', '353254321', '2132122112121', 'Filipino', 'Single'),
(26, 222, 111, '212 Barlan', '22', 'Cavite City', 'Cavite', '', '4100', '12345678', '12345678', 'Filipino', 'Widowed'),
(27, 222, 111, '212 Barlan', '22', 'Cavite City', 'Cavite', '', '4100', '12345678', '12345678', 'Filipino', 'Widowed'),
(28, 222, 111, '212 Barlan', '22', 'Cavite City', 'Cavite', '', '4100', '12345678', '12345678', 'Filipino', 'Widowed');

-- --------------------------------------------------------

--
-- Table structure for table `tblpersons`
--

CREATE TABLE `tblpersons` (
  `personID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `birthDate` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `contactInformationID` int(11) NOT NULL,
  `bloodType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpersons`
--

INSERT INTO `tblpersons` (`personID`, `firstName`, `middleName`, `lastName`, `birthDate`, `sex`, `contactInformationID`, `bloodType`) VALUES
(13, 'Jed Lester', 'Paras', 'Jose', '2023-03-03', 'Male', 13, 'A+'),
(14, 'Jed Lester', '', 'Jose', '2023-03-03', 'Male', 14, 'A+'),
(15, 'sdfsdf', 'dfs', 'sdfsdf', '2023-03-10', 'Male', 15, 'A+'),
(17, 'Jed Lester', 'Paras', 'Jose', '2023-03-01', 'Male', 17, 'A+'),
(18, 'Jed Lester', 'Paras', 'Jose', '2023-03-01', 'Male', 18, 'A+'),
(20, 'Jed Lestersssss', 'Paras', 'Jose', '2023-03-30', 'Male', 20, 'A+'),
(24, 'sdsd', 'sddsd', 'sdsdddd', '2023-03-08', 'Male', 24, 'A+'),
(26, 'Kylie', '', 'Rojas', '2023-03-23', 'Female', 26, 'AB+'),
(27, 'Ako', 'ay', 'Pasyente', '2023-03-15', 'Female', 27, 'O-'),
(28, 'Ako', 'ay', 'Pasyente', '2023-03-15', 'Female', 28, 'O-'),
(29, 'Ako', 'ay', 'Pasyente', '2023-03-15', 'Female', 29, 'O-');

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
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `PersonIDDelete` (`personID`);

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
  ADD PRIMARY KEY (`personID`),
  ADD KEY `ContactInfoID` (`contactInformationID`);

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
  MODIFY `contactInfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `departmentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblemployeeinfo`
--
ALTER TABLE `tblemployeeinfo`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblhealthdeclaration`
--
ALTER TABLE `tblhealthdeclaration`
  MODIFY `healthDeclarationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbllocations`
--
ALTER TABLE `tbllocations`
  MODIFY `locationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tblnurse`
--
ALTER TABLE `tblnurse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `patientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpersonalinfo`
--
ALTER TABLE `tblpersonalinfo`
  MODIFY `personalInfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblpersons`
--
ALTER TABLE `tblpersons`
  MODIFY `personID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblemployeeinfo`
--
ALTER TABLE `tblemployeeinfo`
  ADD CONSTRAINT `PersonIDDelete` FOREIGN KEY (`personID`) REFERENCES `tblpersons` (`personID`) ON DELETE CASCADE;

--
-- Constraints for table `tblpersons`
--
ALTER TABLE `tblpersons`
  ADD CONSTRAINT `ContactInfoID` FOREIGN KEY (`contactInformationID`) REFERENCES `tblcontactinformation` (`contactInfoID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
