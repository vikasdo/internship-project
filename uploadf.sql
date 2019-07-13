-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 04:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bid` int(11) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `bimage` text NOT NULL,
  `bcategory` varchar(30) NOT NULL,
  `bdesc` text NOT NULL,
  `bdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uid` int(11) NOT NULL,
  `is_verified` int(11) NOT NULL DEFAULT '0',
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `bname`, `bimage`, `bcategory`, `bdesc`, `bdate`, `uid`, `is_verified`, `likes`, `dislikes`) VALUES
(12, 'daily news culture', 'images/b7.jpg', 'politics', ' Promoting Innovation By Investing In StartupsThe most important advantage of investing in startups over the stock markets is this. The core of a startup is innovation whether in product design or marketing or business model or strategizing or problem-solving. Investors get an opportunity to not only promote innovation but also become innovators themselves by providing unique insight, valuable feedback and handholding support to the entrepreneurs. The Timing Of Investment Is Not An IssueWhile investing in stock markets, investors must exercise caution and choose an appropriate time to invest; investing in bearish and bullish markets have implications on returns. But the timing is not an issue with startup investments (non-IPO investments).', '2019-07-03 02:47:22', 66, 1, 11, 0),
(14, 'cricket', 'images/b2.jpg', 'education', '  Nothing could be more demanding and time-consuming than manually running a business. When you keep having to do everything manually, you will often spend lots of time without achieving very much. Social media marketing is no more a need but an essential element for your business.  The primary reason businesses of all kind succeed in social media marketing is that they have all of their tedious tasks systemized with tools. Social media marketing, for example, takes an ample amount of time to produce content, publish, manage and measure it correctly. How can you possibly do all of it manually? You need to constantly sit in front of your computer sharing posts on Twitter, Facebook, Instagram, Pinterest, etc. You also need to be manually monitoring your mentions, comments, managing followers, and so on. How can someone manage Social media efficiently and in less time?', '2019-07-02 13:46:08', 62, 1, 3, 0),
(16, 'vikas', 'images/b8.jpg', 'entertainment', '    wThe gender gap in pay has narrowed since 1980, but it has remained relatively stable over the past 15 years or so. In 2018, women earned 85% of what men earned, according to a Pew Research Center analysis of median hourly earnings of both full- and part-time workers in the United States. Based on this estimate, it would take an extra 39 days of work for women to earn what men did in 2018.  By comparison, the Census Bureau found that, in 2017, full-time, year-round working women earned 80% of what their male counterparts earned.', '2019-07-02 14:29:04', 86, 1, 1, 0),
(17, 'vikas', 'images/cj.png', 'ed', 'qwww', '2019-07-02 14:33:47', 86, 1, 1, 0),
(18, 'vikas', 'images/lo.jpg', 'enetertainment', 'kjjhj', '2019-07-02 14:51:14', 105, 1, 1, 0),
(19, 'shravan', 'images/b4.jpg', 'sports', ' The Government of India has launched many apps until today, and the graph of these apps success is quite unsteady. While some apps such as , GST Rate Finder have worked out fine, but there has been an attempt to develop a similar chatting app in India previously.The app was Kimbho, which was developed by Indiaï¿½s very own FMCG company, Patanjali by Ramdev Baba, and it was officially pitted against Whatsapp. But the reality was that the app didnï¿½t live to see the light of the day, probably owing to the fact that it lacked good performance. The app was taken down from both the Google Play Store and Apple Store. The However, things are different in this case, as the new app will not be made public, and is limited only for the officials and agencies of the government, and considering the resistance that Whatsapp is putting up against the former, the Governmentï¿½s decision to launch a new app that will keep data private seems pretty appropriate.Do you think this decision of developing a new app for communication between Government officials and agencies is necessary? Do let us know in the comments section right below!', '2019-07-02 14:14:50', 62, 1, 3, 0),
(20, 'rana', 'images/b6.jpg', 'politics', 'The Picture You Were Cropped Out Of\r\nOnce you get past the initial insult (how could they!?) itâ€™s time to seek revenge with a caustic comments like â€œwell you cut out the only good part of this picture,â€ or worse â€œGood choice, I looked better than you anyway.â€ Rough.\r\nThe Picture Of Your Boyfriend Or Girlfriend\r\nâ€œYou look great!â€ â€œWow, youâ€™re beautiful.â€ â€œGorgeous, as always.â€ There are no other comments. I donâ€™t care if they look like they havenâ€™t slept in a week and thereâ€™s an entire plate of', '2019-07-02 14:32:58', 62, 1, 1, 0),
(21, 'The 13 Best Smart Home Devices', 'images/a.jpg', 'entertainment', 'In 2019, smart home systems and devices are more impressive and all-encompassing than ever.\r\n\r\nUsing a smart system is no longer just about asking Alexa to tell you the weather or play that new Drake song -- now, you can use smart devices to grill chicken at your next family barbecue, turn the lights off in the living room while youâ€™re watching a movie, or vacuum your floors.\r\n\r\nYour home devices provide a sense of convenience, particularly when theyâ€™re ordering pizza or calling your sister, but in 2018, they can also tackle more serious tasks, like acting as your home security system when youâ€™re out of town. In other words, they arenâ€™t just for fun anymore -- they also fulfill some substantial needs.', '2019-07-02 14:54:43', 62, 1, 1, 0),
(22, '', 'images/d.jpg', 'Select category', '', '2019-07-03 09:31:11', 62, 0, 0, 0),
(23, '', 'images/d.jpg', 'Select category', '', '2019-07-03 09:31:35', 62, 0, 0, 0),
(24, '', 'images/', 'Select category', '', '2019-07-03 09:32:00', 62, 0, 0, 0),
(25, '', 'images/', 'Select category', '', '2019-07-03 09:38:59', 62, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(37, 'images/', '2019-07-13 09:07:24', '', 1, '0', '0', 'Select Branch');

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `token` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `mobile`, `password`, `token`) VALUES
(1, 'hello', 'akshay@gmail.com', '1234567890', '123', ''),
(3, 'vikas', '8466vikas@gmail.com', '8466900948', '1', 'has21q'),
(4, '', '', '', '', '2sq1ha');

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
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

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
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
