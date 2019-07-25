-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 04:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uploadf`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ansid` int(11) NOT NULL,
  `answer` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uid` int(11) NOT NULL,
  `qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `aid` int(11) NOT NULL,
  `posted` varchar(45) NOT NULL,
  `head` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `uid` int(11) NOT NULL,
  `category` varchar(56) NOT NULL,
  `articleimg` varchar(400) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`aid`, `posted`, `head`, `description`, `uid`, `category`, `articleimg`, `date`) VALUES
(1, 'admin', 'HELLO USER', 'Lorem Ipsum	Tinc is a Virtual Private Network (VPN) daemon that uses tunnelling and encryption to create a secure private network between hosts on the Internet. A few of the features that Tinc has that makes it useful include encryption, optional compression, automatic mesh routing and easy expansion.\r\n	Tinc is a Virtual Private Network (VPN) daemon that uses tunnelling and encryption to create a secure private network between hosts on the Internet. A few of the features that Tinc has that makes it useful include encryption, optional compression, automatic mesh routing and easy expansion.\r\n	Tinc is a Virtual Private Network (VPN) daemon that uses tunnelling and encryption to create a secure private network between hosts on the Internet. A few of the features that Tinc has that makes it useful include encryption, optional compression, automatic mesh routing and easy expansion.\r\n', 17, 'ComputerScience', 'images/bgimg.png', '0000-00-00 00:00:00'),
(2, 'admin', 'What is Machine Learning? A definition', 'Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it learn for themselves.\r\n\r\nThe process of learning begins with observations or data, such as examples, direct experience, or instruction, in order to look for patterns in data and make better decisions in the future based on the examples that we provide. The primary aim is to allow the computers learn automatically without human intervention or assistance and adjust actions accordingly.\r\n\r\nSome machine learning methods\r\nMachine learning algorithms are often categorized as supervised or unsupervised.\r\n\r\nSupervised machine learning algorithms can apply what has been learned in the past to new data using labeled examples to predict future events. Starting from the analysis of a known training dataset, the learning algorithm produces an inferred function to make predictions about the output values. The system is able to provide targets for any new input after sufficient training. The learning algorithm can also compare its output with the correct, intended output and find errors in order to modify the model accordingly.', 17, 'ComputerScience', 'images/ml.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `comment`, `aid`) VALUES
(27, 17, 'HELLO', 1),
(28, 17, 'HELLO', 1),
(29, 17, 'USER', 1),
(30, 17, 'dd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq_comments`
--

CREATE TABLE `faq_comments` (
  `fid` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `answer` varchar(2000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq_comments`
--

INSERT INTO `faq_comments` (`fid`, `qid`, `uid`, `answer`, `date`) VALUES
(1, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0000-00-00 00:00:00'),
(2, 1, 2, 'fdfdfdfdfdfdfdf', '0000-00-00 00:00:00'),
(3, 1, 1, 'Hey i know it....', '2019-07-19 14:19:22'),
(5, 7, 2, 'Robotics is a branch of science.....', '2019-07-19 14:19:26'),
(6, 10, 1, 'An ssds is a ssds', '2019-07-19 14:19:30'),
(8, 6, 2, 'Hi', '2019-07-19 14:19:35'),
(9, 10, 1, 'What the heck!', '2019-07-19 14:19:38'),
(10, 1, 2, 'You need  materials', '2019-07-19 14:19:41'),
(11, 1, 1, 'yes you need materials', '2019-07-19 14:19:44'),
(12, 7, 2, 'Robotics means robo', '2019-07-19 14:19:48'),
(13, 1, 1, 'what bro u dont know it??', '2019-07-19 14:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` varchar(44) NOT NULL,
  `uid` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `ys` varchar(99) NOT NULL,
  `branch` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `date`, `type`, `uid`, `category`, `ys`, `branch`) VALUES
(9, 'images/DAA-Unit-II.ppt', '2019-07-10 09:42:42', 'ppt', 1, 'studymaterial', '', ''),
(10, 'images/cr.jpg', '2019-07-10 09:46:41', 'jpg', 1, 'notes', '', ''),
(11, 'images/CustomFileInputs.zip', '2019-07-10 09:52:40', 'zip', 1, 'assignment', '', ''),
(12, 'images/paul-thomas-sXVHwO3PpAk-unsplash.jpg', '2019-07-10 17:20:33', 'jpg', 1, 'Select Category', '', ''),
(13, 'images/0_resume cs.pdf', '2019-07-11 08:36:02', 'pdf', 1, 'studymaterial', '', ''),
(14, 'images/gulpfile.js', '2019-07-11 08:37:57', 'js', 1, 'studymaterial', '', ''),
(15, 'images/LICENSE', '2019-07-11 11:36:40', '', 1, '', '', ''),
(16, 'images/package.json', '2019-07-11 11:37:52', 'json', 1, '', '', ''),
(17, 'images/composer.json', '2019-07-12 05:44:19', 'json', 1, '', '', 'cse'),
(18, 'images/composer.json', '2019-07-12 05:45:33', 'json', 1, '', '', 'cse'),
(19, 'images/VERSION', '2019-07-12 05:46:19', '', 1, 'studymaterial', '2-1', 'it'),
(20, 'images/Daily Work Report Infochord - Hyderabad Internship 2019.docx', '2019-07-12 05:52:21', 'docx', 1, 'Select Category type', 'Select year and sem', 'Select Branch'),
(21, 'images/Daily Work Report Infochord - Hyderabad Internship 2019.docx', '2019-07-12 05:54:01', 'docx', 1, 'Select Category type', 'Select year and sem', 'Select Branch'),
(22, 'images/', '2019-07-12 07:50:21', '', 1, 'Select Category type', 'Select year and sem', 'Select Branch'),
(23, 'images/', '2019-07-12 07:56:20', '', 1, 'Select Category type', 'Select year and sem', 'Select Branch'),
(24, 'images/', '2019-07-12 07:56:49', '', 1, 'Select Category type', 'Select year and sem', 'Select Branch'),
(25, 'images/', '2019-07-12 07:57:53', '', 1, 'Select Category type', 'Select year and sem', 'Select Branch'),
(26, 'images/', '2019-07-12 07:59:35', '', 1, 'Select Category type', 'Select year and sem', 'Select Branch'),
(27, 'images/', '2019-07-12 08:01:04', '', 1, 'Select Category type', 'Select year and sem', 'Select Branch'),
(28, 'images/', '2019-07-12 13:20:19', '', 1, '0', '0', 'Select Branch'),
(29, 'images/', '2019-07-12 13:20:41', '', 1, '0', '0', 'Select Branch'),
(30, 'images/', '2019-07-12 13:20:52', '', 1, '0', '0', 'Select Branch'),
(31, 'images/', '2019-07-12 13:24:19', '', 1, '0', '0', 'Select Branch'),
(32, 'images/', '2019-07-12 13:25:32', '', 1, '0', '0', 'Select Branch'),
(33, 'images/', '2019-07-12 13:25:39', '', 1, '0', '0', 'Select Branch'),
(34, 'images/', '2019-07-13 05:32:02', '', 1, '0', '0', 'Select Branch'),
(35, 'images/', '2019-07-13 05:32:25', '', 1, '0', '0', 'Select Branch'),
(36, 'images/', '2019-07-13 07:21:07', '', 1, '0', '0', 'Select Branch'),
(37, 'images/', '2019-07-13 09:07:24', '', 1, '0', '0', 'Select Branch'),
(38, 'images/', '2019-07-19 14:39:54', '', 1, '0', '0', 'Select Branch'),
(39, 'images/', '2019-07-19 14:40:00', '', 1, '0', '0', 'Select Branch');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mid` int(30) NOT NULL,
  `from_email` varchar(200) NOT NULL,
  `to_email` varchar(300) NOT NULL,
  `subject` varchar(700) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `questionedby` varchar(30) NOT NULL,
  `qcat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `questionedby`, `qcat`) VALUES
(1, 'How to build an Auto?', 'Akshay6890', 'Robotics'),
(4, 'hello', 'hello', 'computer'),
(5, 'hello', 'hello', 'mechanics'),
(6, 'hello', 'hello', 'civil'),
(7, 'What is robotics?', 'hello', 'Robotics'),
(8, 'What is science?', 'hello', 'Science'),
(9, 'sddsd', 'hello', 'maths'),
(10, 'ssdssds', 'hello', 'civil');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `qid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `reply_id` int(100) NOT NULL,
  `reply_uid` int(11) NOT NULL,
  `reply` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`qid`, `uid`, `reply_id`, `reply_uid`, `reply`) VALUES
(1, 1, 1, 10, 'this is good!'),
(1, 1, 2, 10, 'this is good!'),
(7, 10, 3, 10, 'Yeah!!!'),
(10, 10, 4, 10, 'you are right bro'),
(1, 10, 5, 10, 'Yes bro');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(100) NOT NULL,
  `profile_image` varchar(50) NOT NULL DEFAULT 'images/user.png',
  `isverified` int(2) NOT NULL DEFAULT '0',
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `mobile`, `password`, `role`, `profile_image`, `isverified`, `token`) VALUES
(1, 'Akshay', 'akshaypendyala@gmail.com', '1234567890', '123456', 'admin', 'images/user.png', 1, 'h21qsa'),
(2, 'Vamsi Mudaliar', 'summersunshine360@gmail.com', '1234', '1234', 'teacher', 'images/user.png', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ansid`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `faq_comments`
--
ALTER TABLE `faq_comments`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ansid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `faq_comments`
--
ALTER TABLE `faq_comments`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mid` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
