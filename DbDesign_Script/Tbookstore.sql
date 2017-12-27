-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 12:43 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authorid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorid`, `name`, `image`) VALUES
(1, 'Humayun Ahmed', '../../img/author/humayun.jpg'),
(2, 'Muhammed Zafar Iqbal', '../../img/author/zafar.jpg'),
(3, 'J.K. Rowling', '../../img/author/jk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `discount` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `categoryid` int(10) NOT NULL,
  `authorid` int(10) NOT NULL,
  `publicationid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `name`, `price`, `discount`, `image`, `type`, `status`, `language`, `categoryid`, `authorid`, `publicationid`) VALUES
(1, 'Harry Potter and the Philosophers Stone ', '718.00', 0, '../../img/book/h1.jpg', 'Regular', 'New', 'English', 1, 3, 1),
(2, 'Harry Potter and the Chamber of Secrets', '718.00', 0, '../../img/book/h2.jpg', 'Regular', 'New', 'English', 1, 3, 1),
(3, 'Harry Potter and the Prisoner of Azkaban ', '898.00', 10, '../../img/book/h3.jpg', 'Regular', 'New', 'English', 1, 3, 1),
(4, 'Harry Potter and the Deathly Hallows', '1258.00', 15, '../../img/book/h7.jpg', 'Regular', 'New', 'English', 1, 3, 1),
(5, 'Harry Potter And The Order Of The Phoenix', '1438.00', 50, '../../img/book/h5.jpg', 'Regular', 'Used', 'English', 1, 3, 1),
(6, 'Harry Potter and the Half-Blood Prince', '1258.00', 60, '../../img/book/h6.jpg', 'Regular', 'Used', 'English', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `name`) VALUES
(1, 'Thriller and Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `publicationid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`publicationid`, `name`, `image`) VALUES
(1, 'Bloomsbury Publishing', '../../img/publication/bloom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `useraccountid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `isdelete` varchar(50) NOT NULL,
  `userdetailsid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`useraccountid`, `username`, `email`, `password`, `role`, `isdelete`, `userdetailsid`) VALUES
(1, 'tuser', 'tsheikh21@live.com', '123456', 'Admin', 'No', 1),
(2, 'razu', 'razu@gmail.com', '123456', 'User', 'No', 6);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userdetailsid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`userdetailsid`, `name`, `gender`, `birthday`, `image`) VALUES
(1, 'Md Tuser Sheikh', 'Male', '1992-09-12', '../../img/user/tuser.jpg'),
(6, 'Razu Ahmed', 'Male', '1993-01-21', '../../img/user/razu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorid`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `authorid` (`authorid`),
  ADD KEY `categoryid` (`categoryid`),
  ADD KEY `publicationid` (`publicationid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`publicationid`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`useraccountid`),
  ADD KEY `isdelete` (`isdelete`),
  ADD KEY `userdetailsid` (`userdetailsid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`userdetailsid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `authorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `publicationid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `useraccountid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `userdetailsid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`authorid`) REFERENCES `author` (`authorid`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`),
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`publicationid`) REFERENCES `publication` (`publicationid`);

--
-- Constraints for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `useraccount_ibfk_1` FOREIGN KEY (`userdetailsid`) REFERENCES `userdetails` (`userdetailsid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
