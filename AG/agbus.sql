-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 03, 2021 at 03:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agbus`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `CANCELLATION` (IN `userno` INT, IN `pnr` INT)  NO SQL
DELETE FROM PASSENGERS WHERE userid=userno AND pnrno = pnr$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `userid` int(11) NOT NULL,
  `pincode` int(6) NOT NULL,
  `postaladdress` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`userid`, `pincode`, `postaladdress`, `city`, `state`) VALUES
(1, 560100, 'malleshwaram', 'Bangalore   ', 'Karnataka    '),
(2, 560058, '10 4th b main Malleshwaram', 'Bangalore', 'karnataka'),
(3, 560025, '48 6th main rpclayout', 'bangalore', 'karnataka'),
(4, 560021, '145, 4th main vijaynagar', 'bangalore', 'karnataka'),
(5, 560045, '126 , 5th  a main JAYANAGAR', 'BANGALORE', 'KARNATAKA'),
(6, 560023, '15 4th main jpnagar', 'Bangalore', 'karnataka'),
(7, 560002, 'No.10 4th main 10th cross jaynagar', 'Bangalore', 'Karnataka'),
(8, 560101, '45 4th cross rajajinagar', 'bangalore', 'karnataka'),
(9, 560040, 'rajajinagar', 'BANGALORE ', 'KARNATAKA '),
(10, 560189, '14 4th cross 7th main rajajinagar ', 'bangalore ', 'karnataka '),
(11, 560101, 'rajajinagar', 'bangalore', 'karnataka'),
(12, 560102, 'sakarnagar', 'bangalore', 'karnataka'),
(13, 560017, 'vp nagar', 'BENGALURU', 'KARNATAKA'),
(14, 560008, '167 5TH CROSS GANDHINAGAR ', 'BANGALORE ', 'KARNATAKA ');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `adminpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `adminpassword`) VALUES
(1, 'ANA', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `pnrno` int(11) NOT NULL,
  `totalamount` int(11) NOT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`pnrno`, `totalamount`, `grandtotal`) VALUES
(1, 2600, 2730),
(2, 3000, 3150),
(3, 700, 735),
(4, 650, 683),
(5, 650, 683),
(6, 650, 683),
(7, 400, 420),
(8, 650, 683),
(9, 618, 649),
(10, 650, 683),
(11, 618, 649),
(13, 1203, 1263),
(14, 1203, 1263),
(15, 400, 420),
(16, 650, 683),
(17, 740, 777);

--
-- Triggers `amount`
--
DELIMITER $$
CREATE TRIGGER `GS` BEFORE INSERT ON `amount` FOR EACH ROW SET new.grandtotal = 1.05 * new.totalamount
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `busdetails`
--

CREATE TABLE `busdetails` (
  `busid` int(11) NOT NULL,
  `busno` varchar(50) NOT NULL,
  `busname` varchar(50) NOT NULL,
  `bustype` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `depttime` time NOT NULL,
  `arrivaltime` time NOT NULL,
  `journeydate` date NOT NULL,
  `busfare` int(11) NOT NULL,
  `totalseats` int(11) NOT NULL,
  `availableseats` int(11) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busdetails`
--

INSERT INTO `busdetails` (`busid`, `busno`, `busname`, `bustype`, `source`, `destination`, `depttime`, `arrivaltime`, `journeydate`, `busfare`, `totalseats`, `availableseats`, `adminid`) VALUES
(1, '     KA O1 F 2345     ', '     AG', 'AC    ', 'BANGALORE', 'SRINGERI', '09:45:24', '16:10:00', '2021-02-01', 400, 36, 31, 1),
(2, '     KA O1 F 2211     ', '     AG', 'AC   ', 'BANGALORE', 'MYSORE', '20:30:00', '23:30:00', '2021-02-01', 650, 36, 12, 1),
(3, '        KA O1 F 2000        ', '        AG', 'NON AC        ', 'BANGALORE', 'SRINGERI', '17:15:00', '23:45:00', '2021-01-02', 700, 36, 29, 1),
(4, ' KA O1 F 2342 ', ' AG', 'AC ', 'BANGALORE', 'MYSORE', '10:00:00', '13:00:00', '2021-02-02', 400, 36, 36, 1),
(5, ' KA O1 F 2215 ', ' AG', 'AC ', 'MANGALORE', 'MADIKERI', '10:00:00', '15:00:00', '2021-02-01', 800, 36, 36, 1),
(6, ' KA O1 F 2216 ', ' AG', 'AC ', 'BANGALORE', 'MADIKERI', '23:00:00', '05:00:00', '2021-02-01', 700, 36, 35, 1),
(7, ' KA O1 F 2236 ', ' AG', 'NON AC ', 'MANGALORE', 'MYSORE', '23:00:00', '06:00:00', '2021-02-01', 500, 36, 36, 1),
(8, 'KA O1 F 2345', 'AG', 'NON AC', 'BANGALORE', 'SRINGERI', '09:45:00', '16:00:00', '2021-02-03', 400, 36, 36, 1),
(9, 'KA O1 F 2211', 'AG', 'NON AC', 'BANGALORE', 'MYSORE', '20:30:00', '23:30:00', '2021-02-03', 500, 36, 36, 1),
(10, 'KA O1 F 2216', 'AG', 'AC', 'BANGALORE', 'MADIKERI', '23:00:00', '05:00:00', '2021-02-03', 700, 36, 36, 1),
(11, 'KA O1 F 2215', 'AG', 'AC', 'BANGALORE', 'MADIKERI', '23:00:00', '05:00:00', '2021-02-03', 700, 36, 36, 1),
(12, 'KA O1 F 2348', 'AG', 'AC', 'MANGALORE', 'SRINGERI', '21:14:25', '06:45:00', '2021-02-03', 350, 36, 36, 1),
(13, 'KA O1 F 2344', 'AG', 'AC', 'MANGALORE', 'MYSORE', '14:00:00', '19:00:00', '2021-02-03', 480, 36, 36, 1),
(14, 'KA O1 F 2211', 'AG', 'AC', 'BANGALORE', 'MYSORE', '20:00:00', '23:00:00', '2021-02-04', 450, 36, 36, 1),
(15, 'KA O1 F 2211', 'AG', 'NON AC', 'BANGALORE', 'MYSORE', '20:00:00', '23:00:00', '2021-02-05', 300, 36, 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `tid` int(11) NOT NULL,
  `cardno` bigint(20) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cardtype` varchar(100) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `cvvno` int(3) NOT NULL,
  `cardexpiry` text NOT NULL,
  `totalamount` int(11) NOT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`tid`, `cardno`, `cname`, `cardtype`, `bankname`, `cvvno`, `cardexpiry`, `totalamount`, `grandtotal`) VALUES
(1, 1478925631235469, 'ANA', 'CREDIT CARD', 'SBI', 112, '11/22', 2600, 2730),
(2, 1487896523214569, 'VISW', 'CREDIT CARD', 'SBI', 156, '11//24', 3000, 3150),
(3, 1452569874561233, 'RITA', 'DEBIT CARD', 'SBI', 116, '08/25', 700, 735),
(4, 1478965321456, 'abhishta', 'CREDIT CARD', 'SBI', 112, '11/22', 650, 683),
(5, 1478956231456963, 'AA', 'CREDIT CARD', 'SBI', 112, '11/25', 650, 683),
(6, 147896633300000, 'AA', 'CREDIT CARD', 'hdfc', 158, '11/22', 650, 683),
(7, 14589966666600000, 'AA', 'CREDIT CARD', 'SBI', 112, '11/22', 400, 420),
(8, 1475632147896325, 'RAM', 'CREDIT CARD', 'SBI', 188, '09/21', 650, 683),
(9, 1223459789456321, 'abhishta', 'CREDIT CARD', 'SBI', 179, '11/25', 618, 649),
(10, 1245789632145698, 'AMITH', 'CREDIT CARD', 'SBI', 127, '10/24', 650, 683),
(11, 1478569632145698, 'SUMEDH', 'CREDIT CARD', 'SBI', 165, '12/25', 618, 649),
(12, 1456325698745632, 'yash', 'CREDIT CARD', 'SBI', 149, '11/22', 1203, 1263),
(13, 8529631475489621, 'RAMESH', 'DEBIT CARD', 'SBI', 203, '02/25', 1203, 1263),
(14, 1458756987456218, 'SURESH R', 'CREDIT CARD', 'SYN', 856, '11/26', 400, 420),
(15, 7894545879632145, 'sweta', 'DEBIT CARD', 'SYN', 166, '11/25', 650, 683);

--
-- Triggers `card`
--
DELIMITER $$
CREATE TRIGGER `GST` BEFORE INSERT ON `card` FOR EACH ROW SET  new.grandtotal =1.05 * new.totalamount
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cardnumber` BEFORE INSERT ON `card` FOR EACH ROW IF (SELECT LENGTH(NEW.cardno)<>16) THEN 
SIGNAL SQLSTATE'45000' SET MESSAGE_TEXT='INVALID CARD NUMBER';
END IF
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cvvnumber` BEFORE INSERT ON `card` FOR EACH ROW IF (SELECT LENGTH(NEW.cvvno) <> 3) THEN
SIGNAL SQLSTATE'45000' SET MESSAGE_TEXT='INVALID CVV NUMBER';
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `pid` int(11) NOT NULL,
  `pnrno` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`pid`, `pnrno`, `userid`, `name`, `gender`, `age`) VALUES
(28, 1, 1, 'ANA', 'F', 20),
(29, 1, 1, 'ABHI', 'M', 17),
(30, 1, 1, 'llll', 'F', 50),
(31, 1, 1, 'VISWA', 'M', 59),
(32, 2, 9, 'RAKSHITH', 'M', 29),
(33, 2, 9, 'NISHA', 'F', 21),
(34, 2, 9, 'PAVAN', 'M', 45),
(35, 2, 9, 'PRIYA', 'F', 59),
(37, 4, 10, 'SAHANA', 'F', 24),
(38, 5, 1, 'RAKESH', 'M', 40),
(39, 6, 1, 'KALA', 'F', 78),
(40, 7, 1, 'ANAGHA', 'F', 20),
(41, 8, 8, 'RAM', 'M', 40),
(42, 9, 1, 'Anu', 'F', 60),
(43, 10, 10, 'AMITH', 'M', 25),
(44, 11, 11, 'SUMEDH', 'M', 65),
(45, 13, 1, 'yash', 'M', 65),
(46, 13, 1, 'sinchana', 'F', 40),
(47, 14, 14, 'RAMESH', 'M', 69),
(48, 14, 14, 'SITARA', 'F', 50),
(50, 16, 5, 'sohan', 'M', 40),
(51, 17, 1, 'sa', 'F', 65),
(52, 17, 1, 'rak', 'M', 10);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `pnrno` int(11) NOT NULL,
  `busid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  `bookstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`pnrno`, `busid`, `userid`, `no_of_seats`, `bookstatus`) VALUES
(1, 2, 1, 4, 'booked'),
(2, 3, 9, 4, 'booked'),
(3, 6, 9, 1, 'cancelled'),
(4, 2, 10, 1, 'booked'),
(5, 2, 1, 1, 'booked'),
(6, 2, 1, 1, 'booked'),
(7, 1, 1, 1, 'booked'),
(8, 2, 8, 1, 'booked'),
(9, 2, 1, 1, 'booked'),
(10, 2, 10, 1, 'booked'),
(11, 2, 11, 1, 'booked'),
(13, 2, 1, 2, 'booked'),
(14, 2, 14, 2, 'booked'),
(15, 1, 14, 1, 'cancelled'),
(16, 2, 5, 1, 'booked'),
(17, 1, 1, 2, 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `pnrno` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`pnrno`, `tid`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(13, 12),
(14, 13),
(15, 14),
(16, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `userpassword` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `fullname`, `userpassword`, `email`, `phone`, `pincode`) VALUES
(1, 'anaghav1920     ', 'ANAGHA.V     ', 1221, 'anag@gmail.com     ', 99999999999, 560001),
(2, 'abhishta19', 'Abhishtav', 1525, 'ab@gmail.com', 9999999999, 560058),
(3, 'viswanath1111', 'VISWANATH', 1525, 'vishy@gmail.com', 777777, 560025),
(4, 'leela', 'C.A LEELA', 1516, 'leela@gmail.com', 888888888, 560021),
(5, 'shweta', 'SHWETA.H', 111, 'sweta@gmail.com', 8889456321, 560045),
(6, 'geetha05', 'GEETHA.L', 123, 'geetha@gmail,com', 7894561122, 560023),
(7, 'nisha12', 'NISHA.L', 1155, 'nisha@gmail.com', 8879874561, 560002),
(8, 'priya12', 'PRIYA', 5656, 'priya@gmail.com', 7894561232, 560101),
(9, 'anagha19 ', 'ANA', 1661, 'ana@gmail.com ', 6362968644, 560040),
(10, 'leela32 ', 'leela ', 112, 'lea@gmail.com ', 8975612365, 560189),
(11, 'rk', 'rohith', 122, 'rohith@gmail.com', 8707896532, 560101),
(12, 'kl', 'pavan', 144, 'p@gmail.com', 7802456398, 560102),
(13, 'SINHA', 'KARTHIK', 445, 'k@gmail.com', 8974561234, 560017),
(14, 'RAMYA12', 'RAMYA GOWDA ', 59645, 'ramya12@gmail.com ', 9574861235, 560008);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `phone` BEFORE INSERT ON `user` FOR EACH ROW IF (SELECT LENGTH(NEW.phone) <> 10) THEN
SIGNAL SQLSTATE'45000' SET MESSAGE_TEXT='INVALID PHONE NUMBER';
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `userid` int(11) NOT NULL,
  `busid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`userid`, `busid`) VALUES
(1, 1),
(2, 1),
(5, 1),
(4, 2),
(6, 2),
(8, 2),
(10, 2),
(11, 2),
(14, 2),
(3, 3),
(9, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`pnrno`);

--
-- Indexes for table `busdetails`
--
ALTER TABLE `busdetails`
  ADD PRIMARY KEY (`busid`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `pnrno` (`pnrno`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`pnrno`),
  ADD KEY `userid` (`userid`),
  ADD KEY `reservation_ibfk_1` (`busid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`pnrno`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `views_ibfk_2` (`busid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `pnrno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amount`
--
ALTER TABLE `amount`
  ADD CONSTRAINT `amount_ibfk_1` FOREIGN KEY (`pnrno`) REFERENCES `reservation` (`pnrno`);

--
-- Constraints for table `busdetails`
--
ALTER TABLE `busdetails`
  ADD CONSTRAINT `busdetails_ibfk_1` FOREIGN KEY (`adminid`) REFERENCES `admin` (`adminid`);

--
-- Constraints for table `passengers`
--
ALTER TABLE `passengers`
  ADD CONSTRAINT `passengers_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `passengers_ibfk_3` FOREIGN KEY (`pnrno`) REFERENCES `reservation` (`pnrno`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`busid`) REFERENCES `busdetails` (`busid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`pnrno`) REFERENCES `reservation` (`pnrno`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `card` (`tid`);

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `views_ibfk_2` FOREIGN KEY (`busid`) REFERENCES `busdetails` (`busid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
