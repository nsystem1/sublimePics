-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2014 at 02:06 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pickdpic`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pic_owner` varchar(25) NOT NULL,
  `pic_name` varchar(25) NOT NULL,
  `comment_by` varchar(25) NOT NULL,
  `comment_by_company` varchar(25) NOT NULL,
  `comment` varchar(80) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `pic_owner`, `pic_name`, `comment_by`, `comment_by_company`, `comment`, `date_time`) VALUES
(1, 'abhijit_padhy', '6_11.jpg', 'saurabh_sahu', 'Sublime Photography', 'This is awesome!', '0000-00-00 00:00:00'),
(2, 'abhijit_padhy', '11_10.jpg', 'saurabh_sahu', 'Sublime Photography', 'This is awesome again!', '0000-00-00 00:00:00'),
(3, 'saurabh_sahu', '4_3.jpg', 'abhijit_padhy', 'Abhijit''s Photography', 'Amazing!!', '0000-00-00 00:00:00'),
(4, 'abhijit_padhy', '12_6.jpg', 'saurabh_sahu', 'Sublime Photgraphy', 'Perfect!!', '0000-00-00 00:00:00'),
(5, 'saurabh_sahu', '4_3.jpg', 'saurabh_sahu', 'Sublime Photgraphy', 'Perfect!!', '0000-00-00 00:00:00'),
(6, 'saurabh_sahu', '4_3.jpg', 'saurabh_sahu', 'Sublime Photgraphy', 'Perfect again!!', '0000-00-00 00:00:00'),
(7, 'saurabh_sahu', '4_3.jpg', 'abhijit_padhy', 'Abhijit''s Photography', 'Perfect again!!', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pic_owner` varchar(30) NOT NULL,
  `pic_name` varchar(30) NOT NULL,
  `liked_by` varchar(30) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `pic_owner`, `pic_name`, `liked_by`, `date_time`) VALUES
(1, 'abhijit_padhy', 'abhijit_padhy/12_6.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(2, 'abhijit_padhy', 'abhijit_padhy/12_6.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(3, 'abhijit_padhy', 'abhijit_padhy/6_11.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(4, 'abhijit_padhy', 'abhijit_padhy/6_11.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(5, 'abhijit_padhy', '12_6.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(6, 'manabesh_mahapatro', '6_2.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(7, 'abhijit_padhy', '6_11.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(8, 'manabesh_mahapatro', '7_16.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(9, 'abhijit_padhy', '8_16.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(10, 'abhijit_padhy', '12_6.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(11, 'abhijit_padhy', '12_6.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(12, 'abhijit_padhy', '11_10.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(13, 'abhijit_padhy', '11_10.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(14, 'abhijit_padhy', '12_6.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(15, 'abhijit_padhy', '6_11.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(16, 'abhijit_padhy', '6_11.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(17, 'abhijit_padhy', '12_6.jpg', 'saurabh_sahu', '0000-00-00 00:00:00'),
(18, 'abhijit_padhy', '12_6.jpg', 'saurabh_sahu', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `caption` varchar(35) NOT NULL,
  `date_time` datetime NOT NULL,
  `votes` int(10) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`no`, `name`, `username`, `caption`, `date_time`, `votes`, `company_name`) VALUES
(1, '1_1.jpg', 'saurabh_sahu', '', '0000-00-00 00:00:00', 17, 'Sublime Photography'),
(2, '2_12.jpg', 'saurabh_sahu', 'The Sound of Silence', '0000-00-00 00:00:00', 19, 'Sublime Photography'),
(3, '3_2.jpg', 'saurabh_sahu', 'Awesome', '0000-00-00 00:00:00', 20, 'Sublime Photography'),
(4, '4_3.jpg', 'saurabh_sahu', 'Love ..!', '0000-00-00 00:00:00', 21, 'Sublime Photography'),
(5, '1_4.jpg', 'abhijit_padhy', 'Boat', '0000-00-00 00:00:00', 23, 'Abhijit''s Photography'),
(6, '2_3.jpg', 'abhijit_padhy', 'Fashion Male', '0000-00-00 00:00:00', 24, 'Abhijit''s Photography'),
(7, '3_4.jpg', 'abhijit_padhy', 'Rain', '0000-00-00 00:00:00', 22, 'Abhijit''s Photography'),
(8, '4_19.jpg', 'abhijit_padhy', 'All Alone', '0000-00-00 00:00:00', 6, 'Abhijit''s Photography'),
(9, '5_20.jpg', 'abhijit_padhy', 'Time Wrap', '0000-00-00 00:00:00', 25, 'Abhijit''s Photography'),
(10, '6_11.jpg', 'abhijit_padhy', 'Mother', '0000-00-00 00:00:00', 31, 'Abhijit''s Photography'),
(11, '1_4.jpg', 'manabesh_mahapatro', 'Bird', '0000-00-00 00:00:00', 5, 'Manabesh''s Photography'),
(12, '2_1.jpg', 'manabesh_mahapatro', 'Aim Hign', '0000-00-00 00:00:00', 9, 'Manabesh''s Photography'),
(13, '3_11.jpg', 'manabesh_mahapatro', 'Road to the end', '0000-00-00 00:00:00', 10, 'Manabesh''s Photography'),
(14, '4_9.jpg', 'manabesh_mahapatro', 'Attitude', '0000-00-00 00:00:00', 11, 'Manabesh''s Photography'),
(15, '5_3.jpg', 'manabesh_mahapatro', '', '0000-00-00 00:00:00', 12, 'Manabesh''s Photography'),
(16, '6_2.jpg', 'manabesh_mahapatro', 'Style', '0000-00-00 00:00:00', 14, 'Manabesh''s Photography'),
(17, '7_16.jpg', 'manabesh_mahapatro', 'People going for work', '0000-00-00 00:00:00', 15, 'Manabesh''s Photography'),
(18, '8_16.jpg', 'abhijit_padhy', 'People going for work', '0000-00-00 00:00:00', 16, 'Abhijit''s Photography'),
(19, '9_7.jpg', 'abhijit_padhy', 'The Truth', '0000-00-00 00:00:00', 16, 'Abhijit''s Photography'),
(20, '10_9.jpg', 'abhijit_padhy', 'Against all odds', '0000-00-00 00:00:00', 18, 'Abhijit''s Photography'),
(21, '11_10.jpg', 'abhijit_padhy', 'Summer', '0000-00-00 00:00:00', 28, 'Abhijit''s Photography'),
(22, '12_6.jpg', 'abhijit_padhy', 'Beauty', '2014-06-03 10:26:27', 34, 'Abhijit''s Photography'),
(23, '13_1.jpg', 'abhijit_padhy', 'dsfds', '0000-00-00 00:00:00', 1, 'Abhijit''s Photography'),
(24, '5_1.jpg', 'saurabh_sahu', 'Puri Beach', '0000-00-00 00:00:00', 7, 'Sublime Photography'),
(25, '6_1.jpg', 'saurabh_sahu', 'Puri Beach', '0000-00-00 00:00:00', 8, 'Sublime Photography'),
(26, '7_1.jpg', 'saurabh_sahu', 'fsadf', '0000-00-00 00:00:00', 2, 'Sublime Photography'),
(27, '8_2.jpg', 'saurabh_sahu', 'Konartk', '0000-00-00 00:00:00', 3, 'Sublime Photography'),
(28, '9_2.jpg', 'saurabh_sahu', 'koanark', '0000-00-00 00:00:00', 4, 'Sublime Photography'),
(29, '10_5.jpg', 'manabesh_mahapatro', 'lion', '0000-00-00 00:00:00', 1, 'Manabesh''s Photography');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `company_name`, `email`, `contact`, `city`, `state`, `website`, `date_time`) VALUES
(1, 'Saurabh', 'Sublime Photography', 'saurabhsahu474@gmail.com', '8763907594', 'berhampur', 'Odisha', 'www.pickdpic.in', '2014-06-19 18:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contact_no1` varchar(15) NOT NULL,
  `contact_no2` varchar(15) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `no_of_pics` int(5) NOT NULL,
  `profile_pic` varchar(20) NOT NULL,
  `cover_pic` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `about` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `company_name` (`company_name`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `company_name`, `first_name`, `last_name`, `email`, `password`, `contact_no1`, `contact_no2`, `city`, `state`, `website`, `date_time`, `no_of_pics`, `profile_pic`, `cover_pic`, `address`, `about`) VALUES
(1, 'saurabh_sahu', 'Sublime Photography', 'Saurabh', 'Sahu', 'saurabhsahu.nitr@gmail.com', '133057facf49cbe6520b15a4d96ee395', '8763907594', '9040364545', 'berhampur', 'odisha', 'www.pickdpic.in', '2014-05-13 07:20:23', 120, 'profile_pro.JPG', 'cover_Hydrangeas.jpg', ' ffsdasda', ' fsdafsadfsdf'),
(2, 'john_mathew', 'John''s Photography', 'john', 'mathew', 'saurabhsahu.nitr@gmail.com', '133057facf49cbe6520b15a4d96ee395', '8763907594', '9040364545', 'berhampur', 'odisha', 'jhonphotography.com', '0000-00-00 00:00:00', 0, '. $_FILES["profile"]', '. $_FILES["cover"]["', '.$address.', '. $about.'),
(3, 'abhijit_padhy', 'Abhijit''s Photography', 'Abhijit', 'Padhy', 'abhijitpadhy@gmail.com', '4ce26a583724d5689bf9333af8431483', '8763907594', '9040364545', 'berhampur', 'Odisha', 'abhijitphotography.com', '0000-00-00 00:00:00', 12, 'profile_pic.jpg', 'cover_5.jpg', ' fdsasf', ' '),
(10, 'manabesh_mahapatro', 'Manabesh''s Photography', 'Manabesh', 'Mahapatro', 'saurabhsahu474@gmail', '133057facf49cbe6520b15a4d96ee395', '9040364545', '', 'Rourkela', 'Odisha', 'www.pickdpic.in', '0000-00-00 00:00:00', 10, 'profile_3.jpg', 'cover_6.jpg', ' gfsdf', ' gfdgsdfg'),
(11, 'naresh', 'Naresh"s Photography', 'Naresh', 'Kumar', 'naresh@gmail.com', '7cb4ffbb2635356600af00166decc3', '9040364545', '', 'Rourkela', 'Odisha', 'www.pickdpic.in', '0000-00-00 00:00:00', 0, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
