-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 07:01 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `username`, `password`) VALUES
(001, 'Librarian', 'Librarian', 'admin', 'admin'),
(002, 'Lib01', 'TestUser', 'lib01', 'jo82dymvfnm');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_books`
--

CREATE TABLE `borrowed_books` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `borrower_id` varchar(50) NOT NULL,
  `borrowed_date` varchar(50) NOT NULL,
  `due_date` varchar(50) NOT NULL,
  `return_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowed_books`
--

INSERT INTO `borrowed_books` (`id`, `book_id`, `borrower_id`, `borrowed_date`, `due_date`, `return_date`) VALUES
(00002, '00005', '00-02', '2021-03-06 12:54:17', '2021-03-13', 'NULL'),
(00003, '00006', '00-01', '2021-03-11 13:04:12', '2021-03-18', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `preid` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `contactNo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `fname`, `lname`, `preid`, `usertype`, `contactNo`) VALUES
(001, 'Borrower', '01', '00-01', 'Student', '09070407404'),
(002, 'Borrower', '02', '00-02', 'Staff', '09070407404'),
(003, 'Borrower Fname', 'Borrower Lname', '00-03', 'Student', '09070407404');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `bookIsbn` varchar(100) NOT NULL,
  `AccessionNumber` varchar(50) NOT NULL,
  `DateRecieved` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `bookTitle` varchar(100) NOT NULL,
  `bookAuthor` varchar(100) NOT NULL,
  `Edition` varchar(50) NOT NULL,
  `Volume` varchar(50) NOT NULL,
  `Pages` varchar(50) NOT NULL,
  `SourceOfFund` varchar(50) NOT NULL,
  `CostPrice` varchar(50) NOT NULL,
  `pubisherID` varchar(50) NOT NULL,
  `YearBook` varchar(50) NOT NULL,
  `bookCategory` varchar(100) NOT NULL,
  `bookDescription` varchar(100) NOT NULL,
  `book_status` varchar(20) NOT NULL DEFAULT 'Available',
  `Remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`id`, `bookIsbn`, `AccessionNumber`, `DateRecieved`, `Class`, `bookTitle`, `bookAuthor`, `Edition`, `Volume`, `Pages`, `SourceOfFund`, `CostPrice`, `pubisherID`, `YearBook`, `bookCategory`, `bookDescription`, `book_status`, `Remarks`) VALUES
(00006, '9781587132050', '001', '2021-03-11', 'test class', 'Rizal', 'test author', '1', '1', '244', 'sacsa', '123', 'P0002', '1267', 'History', 'Desc', 'Borrowed', ''),
(00007, '9781587132051', '002', '2021-03-11', 'test class', 'Rizal', 'Jose Rizal', '1', '1', '244', 'sacsa', '123', 'P0003', '1267', 'History', 'Updated', 'Available', 'updated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN` (`bookIsbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
