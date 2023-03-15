-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 03:20 PM
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
(14, '12233333', 'jll@gmail.co'),
(15, '3434223423', 'johnysins@gmail.com'),
(17, '3434223423', 'jll@gmail.com'),
(18, '3434223423', 'jll@gmail.com'),
(20, '3434223423', 'jll@gmail.com'),
(24, '3434223423', 'jll@gmail.com'),
(27, '0998642345', 'jedlesterjose@gmail.com'),
(28, '0998642345', 'jedlesterjose@gmail.com'),
(29, '0998642345', 'jedlesterjose@gmail.com'),
(31, '09923223', 'lester@gmail.com'),
(32, '0998642345', 'jedlesterjose@gmail.com'),
(33, '09986423451', 'jedlesterjose@gmail.com'),
(34, '1122333', 'john@gmail.com'),
(35, '1223345657', 'tr@gmail.coms'),
(36, '09564190289', 'jedjose2000@gmail.com'),
(37, '09564190289', 'johnlester@gmail.com');

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
(22, 'BHEID-0023', 0, 0, 'No', '', 36, 35, 'Doctor'),
(23, 'BHEID-002', 0, 0, 'No', '', 37, 36, 'Guard');

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
(6, '001', 'Dr Javier', '2023-03-16 09:30:00', 'Kidney Stones', 33, 32),
(7, '002', 'Javie', '2023-03-19 21:25:00', 'Tumor', 34, 33),
(8, '003', 'Javier', '2023-03-23 21:44:00', 'Stone', 35, 34);

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
(13, 123213, 12121, '269 Barlan St.', '1', 'Cavite', 'Cavite', '', '4100', '13324535343', '2344323422342', 'Filipino', 'Single'),
(14, 11, 11, '269 Barlan St.', '21', 'Cavite', 'Cavite', '', '4100', '13324535343', '2344323422342', 'Filipino', 'Widowed'),
(16, 12121, 1221, '269 Barlan St.', '21', 'Cavite', 'Cavite', '', '4100', '13324535343', '2344323422342', 'Filipino', 'Single'),
(17, 123, 12121, '269 Barlan St.', '21', 'Cavite', 'Cavite', '', '4100', '13324535343', '4124232421422', 'Filipino', 'Single'),
(19, 111111000, 12121, '269 Barlan St.', '21', 'Cavite', 'Cavite', '', '5333', '13324535343', '2344323422342', 'Filipino', 'Single'),
(23, 11, 11, '322323', '121', 'Cavite', 'Cavite', '', '4100', '232312323', '232323232443', 'wwea', 'Single'),
(26, 222, 111, '212 Barlan', '22', 'Cavite City', 'Cavite', '', '4100', '12345678', '12345678', 'Filipino', 'Widowed'),
(27, 222, 111, '212 Barlan', '22', 'Cavite City', 'Cavite', '', '4100', '12345678', '12345678', 'Filipino', 'Widowed'),
(30, 1212, 111, '212 Barlan', '534', 'Noveleta', 'Cavite', '', '5555', '1234567823', '21213212132323', 'Filipino', 'Single'),
(32, 12345, 111, '769 Barlan', '212', 'Kawit', 'Cavite', '', '4991', '2121121121', '213212312312', 'Filipino', 'Single'),
(33, 22, 111, '122222 Barlan', '9', 'Negros Occ', 'Negros Occidental', '', '1111', '123456789', '123456789011', 'Filipino', 'Single'),
(34, 212121, 111, '111 Neogsd', '22', 'Noveleta', 'Negros Occidental', '', '4100', '123456782', '1234567822222', 'Filipino', 'Single'),
(35, 11, 11, '269 Barlan St. C.C.C.', '221', 'fvccv', 'Cavite', '', '4100', '1231233321', '23231324324534', 'Filipino', 'Single'),
(36, 11, 11, '269 Barlan St. C.C.C.', '22', 'Cavite City', 'Cavite', '', '4100', '353254311', '43234234232432', 'Filipino', 'Single');

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
(27, 'Ako', 'ay', 'Pasyente', '2023-03-15', 'Female', 27, 'O-'),
(28, 'Ako', 'ay', 'Pasyente', '2023-03-15', 'Female', 28, 'O-'),
(33, 'Ako', 'ay', 'Pasyente', '2023-03-16', 'Male', 33, 'A+'),
(34, 'Pasyenteba', 'Talaga', 'Ako', '2023-03-24', 'Male', 34, 'A+'),
(35, 'Check', '', 'Ko', '2023-01-09', 'Male', 35, 'B-'),
(36, 'dsadas', 'dasads', 'dsasda', '2023-03-16', 'Male', 36, 'A+'),
(37, 'John Lester', 'dsadas', 'dsa', '2023-03-22', 'Male', 37, 'A+');

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
  ADD PRIMARY KEY (`patientID`),
  ADD KEY `tblPatientCascade` (`personID`);

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
  MODIFY `contactInfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `departmentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblemployeeinfo`
--
ALTER TABLE `tblemployeeinfo`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `patientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpersonalinfo`
--
ALTER TABLE `tblpersonalinfo`
  MODIFY `personalInfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tblpersons`
--
ALTER TABLE `tblpersons`
  MODIFY `personID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

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
-- Constraints for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD CONSTRAINT `tblPatientCascade` FOREIGN KEY (`personID`) REFERENCES `tblpersons` (`personID`) ON DELETE CASCADE;

--
-- Constraints for table `tblpersons`
--
ALTER TABLE `tblpersons`
  ADD CONSTRAINT `ContactInfoID` FOREIGN KEY (`contactInformationID`) REFERENCES `tblcontactinformation` (`contactInfoID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
