-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2014 at 06:52 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recharge`
--

-- --------------------------------------------------------

--
-- Table structure for table `circle`
--

CREATE TABLE IF NOT EXISTS `circle` (
  `Circle_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(50) NOT NULL,
  `Circle_Name` varchar(100) NOT NULL,
  PRIMARY KEY (`Circle_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `circle`
--

INSERT INTO `circle` (`Circle_ID`, `Code`, `Circle_Name`) VALUES
(1, '12', 'Gujarat'),
(2, '18', 'Rajasthan'),
(3, '4', 'Mahashtra'),
(4, '13', 'Andhra Pradesh'),
(5, '24', 'Assam'),
(6, '17', 'Bihar'),
(7, '7', 'Chennai'),
(8, '5', 'Delhi & NCR'),
(9, '20', 'Haryana'),
(10, '21', 'Himachal Pradesh'),
(11, '25', 'J & K'),
(12, '9', 'Karnataka'),
(13, '14', 'Kerala'),
(14, '6', 'Kolkata'),
(15, '16', 'Madhya Pradesh'),
(16, '3', 'Mumbai'),
(17, '26', 'North East'),
(18, '23', 'Orissa'),
(19, '1', 'Punjab'),
(20, '8', 'Tamil Nadu'),
(21, '10', 'Uttar Pradesh (East)'),
(22, '11', 'Uttar Pradesh (West)'),
(23, '2', 'West Bengal'),
(24, '27', 'Chattisgarh'),
(25, '22', 'Jharkhand');

-- --------------------------------------------------------

--
-- Table structure for table `details_recharge`
--

CREATE TABLE IF NOT EXISTS `details_recharge` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Mobile_No` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Circle` varchar(50) NOT NULL,
  `Operator` varchar(50) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Balance` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=278 ;

--
-- Dumping data for table `details_recharge`
--

INSERT INTO `details_recharge` (`ID`, `Mobile_No`, `Type`, `Circle`, `Operator`, `Amount`, `userID`, `Date`, `Balance`) VALUES
(258, '982574231', '1', '3', 'BS', '50', '7', '14-07-2014 01:11:48am', '4260'),
(259, 'A12B3C4D', '3', '1', 'ST', '50', '7', '14-07-2014 01:14:58am', '4210'),
(260, '1234567890', '1', '23', 'MTM', '50', '7', '14-07-2014 01:16:03am', '4160'),
(261, '1234567890', '1', '23', 'MTM', '50', '7', '14-07-2014 01:18:07am', '4110'),
(262, '1234567890', '1', '23', 'MTM', '50', '7', '14-07-2014 01:20:29am', '4060'),
(263, '1A2B3C4D', '4', '13', 'MTDD', '20', '7', '14-07-2014 01:20:51am', '4040'),
(264, '1A2B3C4D', '4', '13', 'MTDD', '20', '7', '14-07-2014 01:25:14am', '4020'),
(265, '1472583690', '1', '20', 'TW', '50', '23', '14-07-2014 10:43:24pm', '4600'),
(266, '1472583690', '1', '20', 'TW', '50', '23', '14-07-2014 11:03:48pm', '4450'),
(267, '7418529630', '3', '6', 'ST', '20', '23', '14-07-2014 11:16:10pm', '4430'),
(268, '1472583690', '4', '5', 'MS2', '100', '23', '14-07-2014 11:17:28pm', '4330'),
(269, '1472583690', '4', '25', 'MS1', '100', '23', '14-07-2014 11:19:41pm', '4230'),
(270, '1A2B3C4D', '1', '14', 'T24', '50', '7', '15-07-2014 10:59:11am', '3970'),
(271, '1234567890', '1', '26', 'VRG', '100', '', '15-07-2014 12:51:35pm', ''),
(272, '1234567890', '1', '16', 'TW', '20', '9', '15-07-2014 12:53:44pm', '850'),
(273, '1234567890', '1', '16', 'TW', '20', '9', '15-07-2014 12:54:13pm', '850'),
(274, '7894561230', '2', '5', 'LPOS', '200', '9', '15-07-2014 11:19:11pm', '650'),
(275, '1A2B3C4D', '1', '16', 'ID', '100', '9', '16-07-2014 12:15:04am', '550'),
(276, '1112222333', '3', '14', 'TS', '50', '9', '16-07-2014 11:10:15am', '550'),
(277, '1A2B3C4D5E', '1', '13', 'VRC', '10', '9', '16-07-2014 11:50:40am', '550');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE IF NOT EXISTS `login_info` (
  `Login_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`Login_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `operator_details`
--

CREATE TABLE IF NOT EXISTS `operator_details` (
  `Operator_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE` int(11) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Commission` varchar(50) NOT NULL,
  PRIMARY KEY (`Operator_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `operator_details`
--

INSERT INTO `operator_details` (`Operator_ID`, `TYPE`, `Code`, `Image`, `Name`, `Commission`) VALUES
(3, 1, 'AL', 'upload/aircel.jpg', 'Aircel', '2.6%'),
(4, 1, 'AT', 'upload/airtel.jpg', 'Airtel', '2%'),
(5, 1, 'BS', 'upload/BSNL.jpg', 'BSNL', '2.4%'),
(6, 1, 'ID', 'upload/idea.jpg', 'Idea', '2%'),
(7, 1, 'TW', 'upload/indicom walky.jpg', 'Tata Walky Prepaid', '2.4%'),
(8, 1, 'LM', 'upload/loop mobile.jpg', 'Loop Mobile', '2.6%'),
(9, 1, 'MTD', 'upload/MTNL.jpg', 'MTNL Delhi', '0%'),
(10, 1, 'MTM', 'upload/MTNL.jpg', 'MTNL Mumbai', '0%'),
(11, 1, 'MS', 'upload/MTS.jpg', 'MTS', '2.8%'),
(12, 1, 'RL', 'upload/reliance_cdma.gif', 'Reliance CDMA', '2.2%'),
(13, 1, 'RG', 'upload/RelianceGSM.jpg', 'Reliance GSM', '2.2%'),
(14, 1, 'T24', 'upload/T24.jpg', 'T24', '0%'),
(16, 1, 'TD', 'upload/tatadocomogsm.jpg', 'Tata Docomo GSM', '2.4%'),
(17, 1, 'UN', 'upload/uninor.jpg', 'Uninor', '2.4%'),
(18, 1, 'VD', 'upload/videocon.jpg', 'Videocon', '2.6%'),
(19, 1, 'VRC', 'upload/Virgincdma.jpg', 'Virgin CDMA', '0%'),
(20, 1, 'VRG', 'upload/virgin-GSM.jpg', 'Virgin GSM', '0%'),
(21, 1, 'VF', 'upload/vodafone.jpg', 'Vodafone', '2%'),
(23, 2, 'APOS', 'upload/airtel.jpg', 'Airtel Postpaid', '0%'),
(24, 2, 'BPOS', 'upload/BSNL.jpg', 'BSNL Postpaid', '0%'),
(25, 2, 'IPOS', 'upload/idea.jpg', 'Idea Postpaid', '0%'),
(27, 2, 'LPOS', 'upload/loop mobile.jpg', 'Loop Mobile Postpaid', '0%'),
(31, 2, 'RCPOS', 'upload/reliance_cdma.gif', 'Reliance CDMA Postpaid', '0%'),
(32, 2, 'RGPOS', 'upload/RelianceGSM.jpg', 'Reliance GSM Postpaid', '0%'),
(34, 2, 'DCPOS', 'upload/tatadocomocdma.jpg', 'Tata Docomo CDMA Postpaid', '0%'),
(36, 2, 'DGPOS', 'upload/tatadocomogsm.jpg', 'Tata Docomo GSM Postpaid', '0%'),
(41, 2, 'VPOS', 'upload/vodafone.jpg', 'Vodafone Postpaid', '0%'),
(42, 3, 'AD', 'upload/airtel digital tv.jpg', 'Airtel Digital TV', '2%'),
(43, 3, 'DT', 'upload/Dishtv.jpg', 'Dish TV', '2.3%'),
(44, 3, 'BT', 'upload/Reliancedigitaltv.jpg', 'Reliance Digital TV', '2.8%'),
(45, 3, 'ST', 'upload/Sun Direct.jpg', 'Sun Direct', '0%'),
(46, 3, 'TS', 'upload/Tata Sky.jpg', 'Tata Sky', '2.8%'),
(47, 3, 'VT', 'upload/VideoconD2H.jpg', 'Videocon D2H', '2.8%'),
(48, 4, 'ALD', 'upload/aircel.jpg', 'Aircel', '0%'),
(50, 4, 'BSD', 'upload/BSNL.jpg', 'BSNL', '0%'),
(52, 4, 'MTDD', 'upload/MTNL.jpg', 'MTNL Delhi Datacard', '0%'),
(53, 4, 'MTMD', 'upload/MTNL.jpg', 'MTNL Mumbai Datacard', '0%'),
(54, 4, 'MS1', 'upload/MTS.jpg', 'MTS MBrowse', '0%'),
(55, 4, 'MS2', 'upload/MTS.jpg', 'MTS MBlaze', '0%'),
(56, 4, 'RL1', 'upload/reliance netconnect.jpg', 'Reliance Netconnect 1X', '0%'),
(59, 4, 'TI1', 'upload/Tata Photon.jpg', 'Tata Photon Whiz', '0%'),
(61, 4, 'VFD', 'upload/vodafone.jpg', 'Vodafone Datacard', '0%'),
(62, 1, 'BSS', 'upload/BSNL.jpg', 'BSNL Special', '2.4%'),
(63, 1, 'MTDS', 'upload/MTNL.jpg', 'MTNL Delhi Special', '0%'),
(64, 1, 'MTMS', 'upload/MTNL.jpg', 'MTNL Mumbai Special', '0%'),
(65, 1, 'T24S', 'upload/T24.jpg', 'T24 Special', '0%'),
(66, 1, 'VDS', 'upload/videocon.jpg', 'Videocon Special', '2.6%'),
(67, 1, 'UNS', 'upload/uninor.jpg', 'Uninor Special', '2.4%'),
(68, 1, 'TDS', 'upload/tatadocomogsm.jpg', 'Tata Docomo GSM Special', '2.4%'),
(69, 1, 'TI', 'upload/indicom walky.jpg', 'Tata Indicom (CDMA)', '2.4%'),
(74, 4, 'RL2', 'upload/reliance netconnect.jpg', 'Reliance Netconnect +', '0%'),
(75, 4, 'RL3', 'upload/reliance netconnect.jpg', 'Reliance Netconnect 3G', '0%'),
(76, 4, 'TI2', 'upload/Tata Photon.jpg', 'Tata Photon+', '0%'),
(77, 2, 'ATL', 'upload/airtel.jpg', 'Airtel Landline and Broadband', '0%'),
(78, 2, 'MTDL', 'upload/MTNL.jpg', 'MTNL Delhi', '0%'),
(79, 2, 'RCOM', 'upload/RelianceGSM.jpg', 'Reliance Infocomm', '0%'),
(80, 2, 'TIL', 'upload/tatadocomocdma.jpg', 'Tata Docomo CDMA', '0%');

-- --------------------------------------------------------

--
-- Table structure for table `plan_details`
--

CREATE TABLE IF NOT EXISTS `plan_details` (
  `Scheme_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Amount` varchar(100) NOT NULL,
  `Talktime` varchar(100) NOT NULL,
  `Validity` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `SchemeID` varchar(50) NOT NULL,
  `Operator_ID` int(11) NOT NULL,
  PRIMARY KEY (`Scheme_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `plan_details`
--

INSERT INTO `plan_details` (`Scheme_ID`, `Amount`, `Talktime`, `Validity`, `Description`, `SchemeID`, `Operator_ID`) VALUES
(1, '10', '7.9', '0', 'Airtel Talktime of Rs7.9 on recharge of Rs.10', '1', 4),
(2, '20', '15.8', '0', 'Airtel Talktime of Rs15.8 on recharge of Rs.20', '1', 4),
(3, '50', '46', '0', 'Airtel Talktime of Rs46 on recharge of Rs.50', '1', 4),
(4, '70', '70', '0', 'Airtel Full Talktime  of Rs.70', '1', 4),
(5, '100', '100', '0', 'Airtel Full Talktime  of Rs.100', '1', 4),
(6, '20', '15.8', '0', 'Airtel Talktime of Rs15.8 on recharge of Rs.20', '2', 4),
(7, '70', '70', '0', 'Airtel Full Talktime  of Rs.70', '2', 4),
(8, '100', '100', '0', 'Airtel Full Talktime  of Rs.100', '2', 4);

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE IF NOT EXISTS `problem` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Errorcode` varchar(50) NOT NULL,
  `webmessage` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`ID`, `Errorcode`, `webmessage`) VALUES
(1, '2', 'Invalid Appkey'),
(2, '3', 'System under maintanence'),
(5, '4', 'Empty Jolo API Username'),
(6, '5', 'Empty Jolo API Password'),
(7, '6', 'Empty Operator Code'),
(8, '7', 'Empty Service Number'),
(9, '8', 'Empty Amount value'),
(10, '9', 'Jolo Server Error2'),
(11, '10', 'Invalid Jolo API Username'),
(12, '11', 'Jolo Server Error3'),
(13, '12', 'Invalid Jolo API Password'),
(14, '13', 'Invalid Jolo API Username/Password'),
(15, '14', 'API Access not active on your account'),
(16, '15', 'Your Balance less than 10'),
(17, '16', 'Invalid Service Number'),
(18, '17', 'Your Insufficient Balance'),
(19, '18', 'Invalid Amount value'),
(20, '19', 'Invalid Operator Code'),
(21, '20', 'Amount must be atleast 10 for mobile recharge'),
(22, '21', 'Amount must be atleast 10 for DTH recharge'),
(23, '22', 'Amount must be atleast 10 for Datacard recharge'),
(24, '23', 'Invalid Mobile Number'),
(25, '24', 'Invalid DTH Subscriber ID'),
(26, '30', 'Amount must be atleast 10 for Postpaid'),
(27, '130', 'Duplicate Recharge Request'),
(28, '301', 'Unexpexted Error Occured'),
(29, '302', ' Required Parameters Missing'),
(30, '305', 'Invalid Mobile Number'),
(31, '116', 'Technical error'),
(32, '117', 'Recharge Load Issue'),
(33, '119', 'Vendor Code currently Unavailable'),
(34, '122', 'Invalid Circle Code'),
(35, '128', 'Transaction Internal Error'),
(36, '131', 'Invalid Mobile No'),
(37, '201', ' Required Parameters Missing'),
(38, '202', ' Required Parameters Missing'),
(39, '207', 'Amount must be in the Range 1-9999'),
(40, '208', 'Amount must be in the Range '),
(41, '211', 'Invalid DTH/D2H Subscriber ID'),
(42, '320', 'Try after some time'),
(43, '350', 'Slow Network Error'),
(44, '351', 'Service Failed'),
(45, '352', 'Service Downtime'),
(46, '360', 'Unknown Error'),
(47, '600', 'Failed'),
(48, '111', 'Service Unavailable'),
(49, '113', 'Currently this service is unavailable'),
(50, '306', 'Invalid Operator Code'),
(51, '307', 'Low Balance'),
(52, '308', 'Invalid Amount'),
(53, '309', 'Jolo Technical Error'),
(54, '310', 'Invalid User ID'),
(55, '551', 'Service Failed / Last request in process'),
(56, '221', 'Pending Time Out'),
(57, '222', 'Pending transaction Under Process'),
(58, '223', 'Pending transaction Status is Unknown'),
(59, '225', 'Customer Exceeded daily attempts'),
(60, '226', 'Amount/Denomination barred.Please contactOperato'),
(61, '227', 'Mobile No/Subscriber ID barred.Please contactOpera'),
(62, '228', 'Invalid Amount/Denomination'),
(63, '229', 'Invalid Mobile No/CustomerID/VC number/Subscriber '),
(64, '230', 'Duplicate Transaction Error from operator side'),
(65, '231', 'General Error from operator side'),
(66, '232', 'Internal Error from operator side'),
(67, '233', 'Technical Error from operator side'),
(68, '234', 'Network Error from operator side'),
(69, '235', 'Operator downtime'),
(70, '236', 'General Error '),
(71, '955', 'Invalid IP address access');

-- --------------------------------------------------------

--
-- Table structure for table `recharge_type`
--

CREATE TABLE IF NOT EXISTS `recharge_type` (
  `Type_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE` varchar(500) NOT NULL,
  PRIMARY KEY (`Type_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `recharge_type`
--

INSERT INTO `recharge_type` (`Type_ID`, `TYPE`) VALUES
(1, 'Prepaid Mobile '),
(2, 'Postpaid Mobile'),
(3, 'DTH'),
(4, 'Prepaid DataCard');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE IF NOT EXISTS `schemes` (
  `Scheme_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Scheme_Name` varchar(100) NOT NULL,
  `SchemeID` varchar(50) NOT NULL,
  PRIMARY KEY (`Scheme_TYPE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`Scheme_TYPE_ID`, `Scheme_Name`, `SchemeID`) VALUES
(1, 'Talk Time ', '1'),
(2, 'Top Up ', '2'),
(3, '2G ', '3'),
(4, '3G ', '4'),
(5, 'SMS Pack', '5'),
(6, 'Night Pack', '6'),
(7, 'Local Calls', '7'),
(8, 'STD Calls', '8'),
(9, 'ISD Calls', '9');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Jolo_OrderID` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Operator` varchar(50) NOT NULL,
  `Service` varchar(50) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `WebsiteID` varchar(50) NOT NULL,
  `Errorcode` varchar(50) NOT NULL,
  `OperatorTXNID` varchar(50) NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=208 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ID`, `Jolo_OrderID`, `Status`, `Operator`, `Service`, `Amount`, `WebsiteID`, `Errorcode`, `OperatorTXNID`, `userID`) VALUES
(191, '890604111093', 'SUCCESS', 'BS', '982574231', '50', '258', '0', '0', 7),
(192, '399243886262', 'SUCCESS', 'ST', 'A12B3C4D', '50', '259', '0', '0', 7),
(193, '261263737542', 'SUCCESS', 'MTM', '1234567890', '50', '260', '0', '0', 7),
(194, '104672912287', 'SUCCESS', 'MTM', '1234567890', '50', '261', '0', '0', 7),
(195, '252989819300', 'SUCCESS', 'MTM', '1234567890', '50', '262', '0', '0', 7),
(196, '192506458911', 'SUCCESS', 'MTDD', '1A2B3C4D', '20', '263', '0', '0', 7),
(197, '267234314151', 'SUCCESS', 'MTDD', '1A2B3C4D', '20', '264', '0', '0', 7),
(198, '151648659343', 'SUCCESS', 'TW', '1472583690', '50', '266', '0', '0', 23),
(199, '171824690914', 'SUCCESS', 'ST', '7418529630', '20', '267', '0', '0', 23),
(200, '591656937369', 'SUCCESS', 'MS1', '1472583690', '100', '269', '0', '0', 23),
(201, '272776081473', 'SUCCESS', 'T24', '1A2B3C4D', '50', '270', '0', '0', 7),
(202, '175407397335', 'SUCCESS', 'TW', '1234567890', '20', '272', '0', '0', 9),
(203, '196614366830', 'SUCCESS', 'TW', '1234567890', '20', '273', '0', '0', 9),
(204, '229751917970', 'SUCCESS', 'LPOS', '7894561230', '200', '274', '0', '0', 9),
(205, '979542632127', 'SUCCESS', 'ID', '1A2B3C4D', '100', '275', '0', '0', 9),
(206, '', '', '', '', '', '', '', '', 9),
(207, '', '', '', '', '', '', '', '', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) NOT NULL,
  `Mobile_No` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Balance` varchar(50) NOT NULL,
  `Dealer` varchar(50) NOT NULL,
  `DealerID` int(11) NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_ID`, `Name`, `Mobile_No`, `Email`, `Password`, `Address`, `Gender`, `City`, `Location`, `Balance`, `Dealer`, `DealerID`) VALUES
(6, 'Mohan', '1234567654', 'abcd@gmail.com', 'mohan', ' Ajmer', 'Male', 'Ajmer', 'Rajasthan', '3230', '0', 0),
(7, 'coders20', '1234567890', 'abc@gmail.com', 'wearecoder', 'Chennai', 'Male', '', 'Tamil Nadu', '3970', '1', 0),
(8, 'abc', '1112223334', 'abcde@gmail.com', 'heaven', 'vesu surat', 'female', 'surat', 'Gujarat', '800', '0', 0),
(9, 'Dhrumil_Shah', '7874215616', 'cooldhrumil_1808@yahoo.co.in', 'dwarka', '  vesu', 'male', 'Surat', 'Gujarat', '550', '1', 0),
(13, 'Ramesh', '1234567890', 'dhrml.shah@gmail.com', 'welcome', '', '', '', '', '', '', 0),
(14, 'Suresh', '8888888888', 'nothing@yahoo.com', 'none', '', '', '', '', '', '', 0),
(18, 'Ashish', '7894561230', 'ashish@yahoo.in', 'ashish', '', '', '', '', '', '0', 0),
(20, 'aaab', '8855522220', '1234@gmail.com', '12456', '', '', '', '', '', '0', 0),
(23, 'wxyz', '9878451213', 'wxyz@yahoo.in', '1256', '', '', '', '', '4230', '0', 7),
(24, 'Ronit', '7418529630', 'yoyo@yoyo.in', '1257', '', '', '', '', '', '0', 9),
(26, 'aakash', '0123456789', 'aaaaaaaaaaaaaaaa@gmail.com', '123456', '', '', '', '', '', '', 0),
(27, 'abcdefgh', '7894563210', 'abcdefgh@yahoo.in', '12345678', '', '', '', '', '', '', 0),
(29, 'a1b23c', '9999999998', '123456@gmail.com', '1256', '', '', '', '', '', '0', 9),
(30, 'abcd', '4172583690', '123456@gmail.com', '789456', '', '', '', '', '', '0', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
