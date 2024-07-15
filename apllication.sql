-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2019 at 03:30 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apllication`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `msg` varchar(1000) NOT NULL,
  `to` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `img1` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=185 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `msg`, `to`, `from`, `date`, `img1`) VALUES
(28, 'hii sagar', '155', '116', '', ''),
(30, 'hii....sagar', '107', '102', '', ''),
(91, 'Ok bhau', '116', '127', '', ''),
(93, 'Ok bhau', '116', '127', '', ''),
(131, 'hiiiiiiii', '107', '127', '', '1.docx'),
(135, 'hiiiiiiii', '120', '112', '', 'bootstrap.css'),
(153, 'kay khuthay', '120', '112', '', ''),
(154, 'hiiiiiiiii...vishal', '112', '102', '', ''),
(158, 'Good Morning ', '120', '102', '', ''),
(159, 'Kare', '112', '120', '', ''),
(160, 'Gm', '102', '120', '', ''),
(161, 'kay re', '102', '112', '', ''),
(162, 'hiiiiiiii', '102', '112', '', ''),
(166, 'Hii', ' 102', '116', '', ''),
(167, 'Hello ', '116', '102', '', ''),
(169, 'hiiiiiiiii...vishal', ' 102', '112', '', 'PicsArt_03-03-07.07.16.jpg'),
(171, 'palllll', '102', '112', '', ''),
(174, 'Barr', '112', '102', '', ''),
(176, 'palllll', '102', '112', '', ''),
(178, 'kay re', '102', '112', '', ''),
(180, 'J1 zal ka', '112', '102', '', ''),
(182, 'mala sarani project dila ahe tumcha nemka kay ahe te mala sang lavkar karan mala submit karaycha ahe tu ek kam kar mala tujhi project copy seend kar lavkar tas asel tar sang mala karam mi pahilech tayar rahil', ' 120', '112', '', ''),
(184, 'hiiiiii', ' 102', '112', '', 'sanjivani.html');

-- --------------------------------------------------------

--
-- Table structure for table `reg_info`
--

CREATE TABLE IF NOT EXISTS `reg_info` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `img` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_info`
--

INSERT INTO `reg_info` (`id`, `name`, `email`, `mobileno`, `DOB`, `gender`, `img`, `uname`, `pass`) VALUES
(120, 'Shivam Girme', 'shivamgirme2001@gmail.com', '8605953056', '21-02-2001', 'male', 'IMG_9657.JPG', 'shivam', 'shivam'),
(102, 'Autade Sujit ', 'sujit99700@gmail.com', '9970069355', '08-06-1996', 'male', 'IMG-20190622-WA0004.jpg', 'sujit', 'sujit99700'),
(112, 'Dharam Vishal ', 'dharamvishal2022@gmail.com', '8766799489', '27-07-2000', 'male', 'vishal.JPG', 'vishal', 'vishal1'),
(116, 'Galande Akash', 'galandeakash3108@gmail.com', '9922969015', '08-04-2000', 'male', '20190402_024844.jpg', 'akash', 'akash3100'),
(155, 'Bhavar swaraj', 'bhavarswaraj@gmail.com', '9518763155', '16-10-2000', 'male', 'Penguins.jpg', 'swaraj', 'sai'),
(107, 'Bhavar Sagar', 'sagarbhavar3110@gmail.com', '8390648463', '13-08-2000', 'male', 'PicsArt_07-23-05.38.20.jpg', 'sagar', 'sagar'),
(111, 'vaishali dhanwate', 'dhanwate09042000@gmil.com', '6666666', '09-04-2000', 'female', 'Lighthouse.jpg', 'vaishali', 'vaishali1'),
(117, 'Garud Aniket', 'aniket@gmail.com', '9878485865', '21-02-2001', 'male', 'IMG_E8793.JPG', 'ani', 'ani'),
(127, 'Dinesh karde ', 'dineshkarde52@gmail.com ', '7743891068', '01-05-2000', 'male', '20190611_075730.jpg', 'Dinesh', '11111');
