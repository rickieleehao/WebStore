-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2021 at 06:48 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `fid` varchar(3) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`fid`, `question`, `answer`) VALUES
('F01', 'What payment method do you accept?', 'We accept Visa and MasterCard on our website.\r\n\r\nOur sales staff can also process other payment types manually, including checks and internet banking. To pay using one of these methods, please contact us to place your order.'),
('F02', 'How can I track my shipment?', 'Our staff will be happy to provide you with a tracking number to track your parcel. Please contact us for your tracking number, and then track it on the courier website.'),
('F03', 'What is the warranty period?', 'We guarantee all of our products for a period of five years from date of shipment, provided that the product does not show signs of abuse and has not been used incorrectly.'),
('F04', 'What is your returns policy?', 'We will accept product returns for credit or exchange up to 30 DAYS after the dispatch date, provided that the returned product(s) are unused, and in original condition - complete with original documents and packaging.'),
('F05', 'I\'ve forgotten my password. How do I reset it?', 'You can go to Contact Us by contact us with various way'),
('F06', 'What shipping provider do you use?', 'We use Poslaju,J&T and Gdex');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
