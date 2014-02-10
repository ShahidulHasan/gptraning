-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2014 at 10:28 AM
-- Server version: 5.5.35
-- PHP Version: 5.5.8-3+sury.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gpit_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_que`
--

CREATE TABLE IF NOT EXISTS `exam_que` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `types` int(2) NOT NULL,
  `exam_no` int(3) NOT NULL,
  `ans` varchar(150) NOT NULL,
  `que_nu` int(3) NOT NULL,
  `que` varchar(200) NOT NULL,
  `ans_one` varchar(150) NOT NULL,
  `ans_two` varchar(150) NOT NULL,
  `ans_three` varchar(150) NOT NULL,
  `ans_four` varchar(150) NOT NULL,
  `photo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `exam_que`
--

INSERT INTO `exam_que` (`id`, `types`, `exam_no`, `ans`, `que_nu`, `que`, `ans_one`, `ans_two`, `ans_three`, `ans_four`, `photo`) VALUES
(54, 1, 1, 'a', 1, 'how?', 'a', 'b', 'c', 'd', '1'),
(53, 1, 1, 'a', 2, 'what?', 'a', 'b', 'c', 'd', '1'),
(52, 1, 1, 'a', 3, 'how?', 'a', 'b', 'c', 'd', '1'),
(51, 1, 1, 'a', 4, 'what?', 'a', 'b', 'c', 'd', '1'),
(50, 1, 1, 'a', 5, 'who?', 'a', 'b', 'c', 'd', 'question/50642953bafaa.png'),
(67, 1, 1, 'a', 6, 'what?', 'a', 'b', 'c', 'd', '1'),
(66, 1, 1, 'a', 7, 'php what?', 'a', 'b', 'c', 'd', 'question/50642953bafaa.png'),
(65, 1, 1, 'a', 8, 'php what?', 'a', 'b', 'c', 'd', 'question/5062ea2a6bd3e.png'),
(68, 1, 1, 'a', 9, 'how?', 'a', 'b', 'c', 'd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE IF NOT EXISTS `tbadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `username`, `active`) VALUES
(1, 'shanto', 1),
(2, 'hasan', 2),
(14, 'a_saleheen', 3),
(13, 'z_kabir', 3),
(12, 'sgias', 3),
(11, 'a_latif', 3),
(10, 'aninda', 3),
(3, 'shahidul', 3),
(15, 'istiaque', 3),
(16, 'sadnan', 3),
(17, 'nazmul.hassan', 3),
(18, 'sm.abdullah', 3),
(19, 'akhtaruzzaman', 3),
(20, 'mmanjurul', 3),
(21, 'mahbub', 3),
(22, 'mashuk', 3),
(23, 'sayed.yousuf', 3),
(24, 'ma_farid', 3),
(25, 'kawsarul.islam', 3),
(26, 'shakhawath.hossain', 3),
(27, 'amkabir', 3),
(28, 'mashowrov', 3),
(29, 'irfan', 3),
(30, 'skaich', 3),
(31, 'moinul.islam', 3),
(32, 'mdfaruk', 3),
(33, 'r.haque', 3),
(34, 'ponkaj', 3),
(35, 'ahusen', 3),
(36, 'rezaul.islam', 3),
(37, 'arakesh', 3),
(38, 'iqbal.mahmud', 3),
(39, 'shakil_alam', 3),
(40, 'm_mrahman', 3),
(41, 'ariful_huq', 3),
(42, 'rahatuzzaman', 3),
(43, 'shahidul.h', 3),
(44, 'shoumen', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbadminpass`
--

CREATE TABLE IF NOT EXISTS `tbadminpass` (
  `id` int(11) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadminpass`
--

INSERT INTO `tbadminpass` (`id`, `password`) VALUES
(1, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(11, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(10, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(12, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(13, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(14, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(15, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(16, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(17, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(18, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(19, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(20, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(21, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(22, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(23, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(24, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(25, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(26, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(27, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(28, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(29, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(30, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(31, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(32, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(33, 'cc6d0be9ceabbdba660b3550ea464a41b1d159de'),
(34, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(35, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(36, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(37, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(38, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(39, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(40, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(41, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(42, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(43, '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(44, '642bbbf6cbb2203650c8b91b7d08490d13e6213e');

-- --------------------------------------------------------

--
-- Table structure for table `tbbook`
--

CREATE TABLE IF NOT EXISTS `tbbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `types` int(11) NOT NULL,
  `ext` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `tbbook`
--

INSERT INTO `tbbook` (`id`, `file_path`, `title`, `types`, `ext`) VALUES
(36, 'book/book-5059906a3c41d.pdf', 'php programming', 1, '.pdf'),
(35, 'book/book-505987192ad80.pdf', 'begining php mysql', 1, '.pdf'),
(37, 'book/book-5066c7279e13b.pdf', 'begin', 1, '.pdf'),
(42, 'book/book-50681f023cd11.swf', 'hasan', 1, '.swf');

-- --------------------------------------------------------

--
-- Table structure for table `tbregistration`
--

CREATE TABLE IF NOT EXISTS `tbregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `regdate` varchar(10) NOT NULL,
  `regtime` varchar(8) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `tbregistration`
--

INSERT INTO `tbregistration` (`id`, `fullname`, `email`, `regno`, `regdate`, `regtime`, `active`) VALUES
(1, 'shahidul hasan', 'shanto_646596@yahoo.com', '845011', '04/09/2012', '13:12:09', 1),
(2, 'shahidul hasan', 'shanto_646596@yahoo.com', '109942', '13/09/2012', '17:48:10', 2),
(3, 'shahidul hasan', 'shanto_646596@yahoo.com', '109943', '14/09/2012', '17:48:10', 3),
(10, 'Aninda Nath', 'aninda@gpit.com', '745172', '18/09/2012', '14:35:24', 3),
(11, 'Md. Abdullah Ibne Latif', 'a_latif@gpit.com', '759702', '18/09/2012', '14:36:26', 3),
(12, 'Sazzad Gias Uddin', 'sgias@gpit.com', '866846', '18/09/2012', '14:37:05', 3),
(13, 'Mohammad Zahirul Kabir', 'z_kabir@gpit.com', '100247', '18/09/2012', '14:37:40', 3),
(14, 'Md. Ashfaq-Us-Saleheen', 'a_saleheen@gpit.com', '901947', '18/09/2012', '14:38:10', 3),
(15, 'Istiaque Majumder', 'istiaque@gpit.com', '129415', '18/09/2012', '14:38:43', 3),
(16, 'Muhammad Sohel Adnan', 'sadnan@gpit.com', '239004', '18/09/2012', '14:40:26', 3),
(17, 'Md. Nazmul Hassan Shovon', 'nazmul.hassan@gpit.com', '876789', '18/09/2012', '14:41:12', 3),
(18, 'S.M. Abdullah Al Mamun', 'sm.abdullah@gpit.com', '818369', '18/09/2012', '14:41:57', 3),
(19, 'Md. Akhtaruzzaman', 'akhtaruzzaman@gpit.com', '624048', '18/09/2012', '14:42:27', 3),
(20, 'M. M. Manjurul Islam', 'mmanjurul@gpit.com', '747782', '18/09/2012', '14:42:59', 3),
(21, 'Mohammad Mahbub Hossain', 'mahbub@gpit.com', '945673', '18/09/2012', '14:43:26', 3),
(22, 'Masuk Ahmed', 'mashuk@gpit.com', '508005', '18/09/2012', '14:43:55', 3),
(23, 'Sayed Yousuf Ali', 'sayed.yousuf@gpit.com', '471942', '18/09/2012', '14:55:35', 3),
(24, 'Md. Abdullahel Farid', 'ma_farid@gpit.com', '358948', '18/09/2012', '15:04:20', 3),
(25, 'Md. Kawsar Ul Islam', 'kawsarul.islam@gpit.com', '933121', '18/09/2012', '15:04:55', 3),
(26, 'Shakhawath Hossain', 'shakhawath.hossain@gpit.com', '503912', '18/09/2012', '15:05:24', 3),
(27, 'Md. Ahsanul Kabir', 'amkabir@gpit.com', '787387', '18/09/2012', '15:05:56', 3),
(28, 'S.M. Mahabubul Alam', 'mashowrov@gpit.com', '509570', '18/09/2012', '15:06:33', 3),
(29, 'Mohammad Irfan Hossain', 'irfan@gpit.com', '982230', '18/09/2012', '15:07:07', 3),
(30, 'Shoumen Kumar Aich', 'skaich@gpit.com', '963031', '18/09/2012', '15:07:36', 3),
(31, 'Md. Moinul Islam', 'moinul.islam@gpit.com', '712570', '18/09/2012', '15:08:02', 3),
(32, 'Md. Faruk Ahmed', 'mdfaruk@gpit.com', '510779', '18/09/2012', '15:08:32', 3),
(33, 'Rezaul Haque Rajon', 'r.haque@gpit.com', '945206', '18/09/2012', '15:08:58', 3),
(34, 'Ponkaj Kumer Biswas', 'ponkaj@gpit.com', '133673', '18/09/2012', '15:09:24', 3),
(35, 'Md. Azaz Husen Chowdhury', 'ahusen@gpit.com', '593808', '18/09/2012', '15:09:59', 3),
(36, 'Md. Rezaul Islam', 'rezaul.islam@gpit.com', '221948', '18/09/2012', '15:10:27', 3),
(37, 'Ali Imtiaz Md. Rakesh Rawshan', 'arakesh@gpit.com', '793924', '18/09/2012', '15:10:59', 3),
(38, 'Iqbal Mahmud Zaman', 'iqbal.mahmud@gpit.com', '350213', '18/09/2012', '15:11:30', 3),
(39, 'Shakil Alam', 'shakil_alam@gpit.com', '177975', '18/09/2012', '15:12:01', 3),
(40, 'Md. Mahbubur Rahman', 'm_mrahman@gpit.com', '852454', '18/09/2012', '15:12:33', 3),
(41, 'Ariful Md. Huq', 'ariful_huq@gpit.com', '950260', '18/09/2012', '15:12:59', 3),
(42, 'Rahat-uz-Zaman', 'rahatuzzaman@gpit.com', '797028', '18/09/2012', '15:13:33', 3),
(43, 'Shahidul Hasan', 'shanto_646596@yahoo.com', '973359', '25/09/2012', '10:07:05', 3),
(44, 'shoumen', 'skaich@gpit.com', '285394', '02/10/2012', '15:22:40', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbtype`
--

CREATE TABLE IF NOT EXISTS `tbtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbtype`
--

INSERT INTO `tbtype` (`id`, `type`) VALUES
(1, 'php'),
(2, 'asp'),
(3, '.net'),
(4, 'java'),
(5, 'jsp'),
(6, 'networking');

-- --------------------------------------------------------

--
-- Table structure for table `tbuserinfo`
--

CREATE TABLE IF NOT EXISTS `tbuserinfo` (
  `id` int(11) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `comp` varchar(30) NOT NULL,
  `post` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuserinfo`
--

INSERT INTO `tbuserinfo` (`id`, `mob`, `comp`, `post`, `address`, `photo`, `img`) VALUES
(3, '01915646596', 'gpit', 'nai', 'chittagong,\r\nchittagong,\r\nchittagong.', 'photo/505eb223da3cd.gif', 'photo/505eb223da3cd1.gif'),
(1, '01915646596', 'gpit', 'nai', 'dhaka.', 'photo/505eb8e935c5b.jpg', 'photo/505eb8e935c5b1.jpg'),
(40, '1711506900', 'gpit', 'Head of Regional Operations', 'Dhaka.', 'photo/505ffaabeec1b.jpg', 'photo/505ffaabeec1b1.jpg'),
(39, '1711506474', 'gpit', 'Head of Dhaka Region', 'Dhaka.', 'photo/505ffb22495c7.png', 'photo/505ffb22495c71.png'),
(37, '1711507458', 'gpit', 'Head of Rajshahi Region', 'Rajshahi.', 'photo/505ffba86630a.jpg', 'photo/505ffba86630a1.jpg'),
(38, '1711507469', 'gpit', 'Head of Chittagong Region', 'Chittagong.', 'photo/505ffc0d7a8f7.jpg', 'photo/505ffc0d7a8f71.jpg'),
(30, '1711081511', 'gpit', 'System Engineer', 'Dhaka.', 'photo/505ffe5988163.jpg', 'photo/505ffe59881631.jpg'),
(17, '1711080355', 'gpit', 'Specialist', 'Dhaka.', 'photo/5060020a2f6f3.jpg', 'photo/5060020a2f6f31.jpg'),
(27, '1711081457', 'gpit', 'System Engineer', 'Chittagong.', 'photo/506002cec6318.jpg', 'photo/506002cec63181.jpg'),
(26, '1711081462', 'gpit', 'System Engineer', 'Chittagong.', 'photo/50600391d0d3d.jpg', 'photo/50600391d0d3d1.jpg'),
(33, '1711507300', 'GPIT', 'System Engineer', 'Rezaul Haque Rajon\r\nSystem Engineer\r\nGramaeenphone Ltd\r\nDelwar Bhaban, 104 Agrabad C/A\r\nChittagong-4100, Bangladesh\r\n', 'photo/50619a28bb8b8.jpg', 'photo/50619a28bb8b81.jpg'),
(34, '1711501012', 'gpit', 'Head of Khulna Region', 'Khulna.', 'photo/5060050f430eb.jpg', 'photo/5060050f430eb1.jpg'),
(35, '1711507677', 'gpit', 'Head of Sylhet Region', 'Sylhet.', 'photo/5060056a8e7b5.jpg', 'photo/5060056a8e7b51.jpg'),
(36, '1711505391', 'gpit', 'Head of Barishal Region', 'Barishal.', 'photo/506005cb42252.jpg', 'photo/506005cb422521.jpg'),
(31, '1711082591', 'gpit', 'System Engineer', 'Chittagong', 'photo/506011bf93a9a.jpg', 'photo/506011bf93a9a1.jpg'),
(20, '1711081460', 'gpit', 'System Engineer', 'Chittagong.', 'photo/50601252487eb.jpg', 'photo/50601252487eb1.jpg'),
(10, '1711507508', 'gpit', 'Specialist', 'Chittagong.', 'photo/506012c9e7ed5.jpg', 'photo/506012c9e7ed51.jpg'),
(16, '01711504520 ', 'gpit', 'Specialist', 'Dhaka.', 'photo/5060137619431.jpg', 'photo/50601376194311.jpg'),
(28, '01711082716 ', 'gpit', 'System Engineer', 'Dhaka.', 'photo/506013fd4c936.jpg', 'photo/506013fd4c9361.jpg'),
(29, '01711081455', 'gpit', 'System Engineer', 'Dhaka.', 'photo/5060145f41b7d.jpg', 'photo/5060145f41b7d1.jpg'),
(14, '1711505990', 'gpit', 'Specialist', 'Rajshahi.', 'photo/506014e40a657.jpg', 'photo/506014e40a6571.jpg'),
(15, '01711507694', 'gpit', 'Specialist', 'Rajshahi.', 'photo/50601596460f8.jpg', 'photo/50601596460f81.jpg'),
(24, '01711081520', 'gpit', 'System Engineer', 'Rajshahi.', 'photo/506016046079e.jpg', 'photo/506016046079e1.jpg'),
(32, '01711082253', 'gpit', 'System Engineer', 'Rajshahi.', 'photo/5060167250f17.jpg', 'photo/5060167250f171.jpg'),
(18, '01711081522', 'gpit', 'System Engineer', 'Khulna.', 'photo/506016e0ed053.jpg', 'photo/506016e0ed0531.jpg'),
(19, '01711082583', 'gpit', 'System Engineer', 'Khulna.', 'photo/50601738838ab.jpg', 'photo/50601738838ab1.jpg'),
(41, '1711083896', 'gpit', 'System Engineer', 'Khulna.', 'photo/5060179f152c3.jpg', 'photo/5060179f152c31.jpg'),
(12, '01711504109', 'gpit', 'Specialist', 'Sylhet.', 'photo/5060182c24541.jpg', 'photo/5060182c245411.jpg'),
(25, '01711081521', 'gpit', 'System Engineer', 'Sylhet.', 'photo/506018a0c7b47.jpg', 'photo/506018a0c7b471.jpg'),
(11, '01711080112 ', 'gpit', 'Specialist', 'Sylhet.', 'photo/5060190928b9a.jpg', 'photo/5060190928b9a1.jpg'),
(21, '01711081459', 'gpit', 'System Engineer', 'Sylhet.', 'photo/5060197180dd6.jpg', 'photo/5060197180dd61.jpg'),
(13, '01711507261', 'gpit', 'Specialist', 'Barishal.', 'photo/50601a12c1bf7.jpg', 'photo/50601a12c1bf71.jpg'),
(22, '1711081458', 'gpit', 'System Engineer', 'Barisal.', 'photo/50601a7ada596.jpg', 'photo/50601a7ada5961.jpg'),
(23, '1711082546', 'gpit', 'System Engineer', 'Barisal.', 'photo/50601ae05b605.jpg', 'photo/50601ae05b6051.jpg'),
(43, '01915646596', 'gpit', 'nai', 'Chittagong.', 'photo/5062ca1501537.jpg', 'photo/5062ca15015371.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_certified`
--

CREATE TABLE IF NOT EXISTS `tb_certified` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(150) NOT NULL,
  `certified` varchar(200) NOT NULL,
  `types` int(2) NOT NULL,
  `exam_no` int(3) NOT NULL,
  `exam_date` varchar(10) NOT NULL,
  `exam_time` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_certified`
--

INSERT INTO `tb_certified` (`id`, `uid`, `certified`, `types`, `exam_no`, `exam_date`, `exam_time`) VALUES
(3, 'shahidul', '506A834FBF835', 1, 1, '2012-10-02', '12:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_exam_permission`
--

CREATE TABLE IF NOT EXISTS `tb_exam_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(150) NOT NULL,
  `certified` varchar(200) NOT NULL,
  `types` int(2) NOT NULL,
  `exam_no` int(3) NOT NULL,
  `exam_date` varchar(10) NOT NULL,
  `exam_time` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `tb_exam_permission`
--

INSERT INTO `tb_exam_permission` (`id`, `uid`, `certified`, `types`, `exam_no`, `exam_date`, `exam_time`) VALUES
(127, 'shahidul', '506A834FBF835', 1, 1, '2012-10-02', '12:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_result`
--

CREATE TABLE IF NOT EXISTS `tb_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(150) NOT NULL,
  `types` int(3) NOT NULL,
  `exam_no` int(3) NOT NULL,
  `rightans` int(3) NOT NULL,
  `wrongans` int(3) NOT NULL,
  `blankans` int(3) NOT NULL,
  `que_no` int(3) NOT NULL,
  `que_nu` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=406 ;

--
-- Dumping data for table `tb_result`
--

INSERT INTO `tb_result` (`id`, `uid`, `types`, `exam_no`, `rightans`, `wrongans`, `blankans`, `que_no`, `que_nu`) VALUES
(405, 'shahidul', 1, 1, 0, 1, 0, 9, 9),
(404, 'shahidul', 1, 1, 0, 1, 0, 9, 8),
(403, 'shahidul', 1, 1, 0, 0, 1, 9, 7),
(402, 'shahidul', 1, 1, 1, 0, 0, 9, 6),
(401, 'shahidul', 1, 1, 1, 0, 0, 9, 5),
(400, 'shahidul', 1, 1, 1, 0, 0, 9, 4),
(399, 'shahidul', 1, 1, 1, 0, 0, 9, 3),
(398, 'shahidul', 1, 1, 1, 0, 0, 9, 2),
(397, 'shahidul', 1, 1, 1, 0, 0, 9, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
