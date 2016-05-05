-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 02:07 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emma`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `multiuserholder`
--
DROP VIEW IF EXISTS `multiuserholder`;
CREATE TABLE IF NOT EXISTS `multiuserholder` (
`assignedto` varchar(50)
,`noofassigneduser` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
CREATE TABLE IF NOT EXISTS `query` (
  `queryid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `location` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `audio` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `assignedto` varchar(50) DEFAULT NULL,
  `answertime` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`queryid`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`queryid`, `userid`, `time`, `location`, `content`, `audio`, `image`, `answer`, `assignedto`, `answertime`, `status`) VALUES
(1, 9, '2016-04-11 09:00:00', '-33.7687822,150.904814', 'how tall is michael jordan', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(2, 9, '2016-04-11 09:05:01', '-33.7687822,150.904815', 'how tall is barack obama', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(3, 9, '2016-04-11 09:10:02', '-33.7687822,150.904816', 'how old is hillary clinton', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(4, 9, '2016-04-11 09:10:03', '-33.7687822,150.904814', 'how tall is napolean bonaparte', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(5, 9, '2016-04-11 09:10:04', '-33.7687822,150.904814', 'how tall is buzz aldrin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(6, 9, '2016-04-11 09:10:05', '-33.7687822,150.904814', 'how tall is adolf hitler', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(7, 9, '2016-04-11 09:10:06', '-33.7687822,150.904814', 'how tall is stalin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(8, 9, '2016-04-11 09:10:07', '-33.7687822,150.904814', 'how tall is shaquille oneal', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(9, 9, '2016-04-11 09:10:08', '-33.7687822,150.904814', 'how tall is bill clinton', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(10, 9, '2016-04-11 09:10:09', '-33.7687822,150.904814', 'how tall is michelle obama', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(11, 9, '2016-04-11 09:10:10', '-33.7687822,150.904814', 'How far is my closest train station?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(12, 9, '2016-04-11 09:10:11', '-33.7687822,150.904814', 'When does the next train to the city come?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(13, 0, '2016-04-11 09:10:12', '-33.7687822,150.904814', 'How long will it take me to walk there?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(14, 9, '2016-04-11 09:10:13', '-33.7687822,150.904814', 'What time does the train get to Melbourne Central?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(15, 9, '2016-04-11 09:10:14', '-33.7687822,150.904814', 'Are there any screenings of Batman vs Superman tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(16, 9, '2016-04-11 09:10:15', '-33.7687822,150.904814', 'Can you please book 2 tickets for me?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(17, 9, '2016-04-11 09:10:16', '-33.7687822,150.904814', 'Where is a good place to have Japanese food for dinner nearby?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(18, 9, '2016-04-11 09:10:17', '-33.7687822,150.904814', 'Can you make a reservation for me before the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(19, 9, '2016-04-11 09:10:18', '-33.7687822,150.904814', 'What time does Myer close tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(20, 9, '2016-04-11 09:10:19', '-33.7687822,150.904814', 'Should I bring an umbrella?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(21, 9, '2016-04-11 09:10:20', '-33.7687822,150.904814', 'Anything else to do in the city after the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(23, 10, '2016-04-11 08:10:04', '-33.7687822,150.904814', 'how tall is buzz aldrin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(24, 10, '2016-04-11 08:10:05', '-33.7687822,150.904814', 'how tall is adolf hitler', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(25, 10, '2016-04-11 08:10:06', '-33.7687822,150.904814', 'how tall is stalin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(26, 10, '2016-04-11 08:10:07', '-33.7687822,150.904814', 'how tall is shaquille oneal', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(27, 10, '2016-04-11 08:10:08', '-33.7687822,150.904814', 'how tall is bill clinton', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(28, 10, '2016-04-11 08:10:09', '-33.7687822,150.904814', 'how tall is michelle obama', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(30, 11, '2016-04-11 07:10:10', '-33.7687822,150.904814', 'How far is my closest train station?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(31, 11, '2016-04-11 07:10:11', '-33.7687822,150.904814', 'When does the next train to the city come?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(32, 11, '2016-04-11 07:10:12', '-33.7687822,150.904814', 'How long will it take me to walk there?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(33, 11, '2016-04-11 07:10:13', '-33.7687822,150.904814', 'What time does the train get to Melbourne Central?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(34, 11, '2016-04-11 07:10:14', '-33.7687822,150.904814', 'Are there any screenings of Batman vs Superman tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(35, 11, '2016-04-11 07:10:15', '-33.7687822,150.904814', 'Can you please book 2 tickets for me?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(37, 12, '2016-04-11 06:10:16', '-33.7687822,150.904814', 'Where is a good place to have Japanese food for dinner nearby?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(38, 12, '2016-04-11 06:10:17', '-33.7687822,150.904814', 'Can you make a reservation for me before the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(39, 12, '2016-04-11 06:10:18', '-33.7687822,150.904814', 'What time does Myer close tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(40, 12, '2016-04-11 06:10:19', '-33.7687822,150.904814', 'Should I bring an umbrella?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(41, 12, '2016-04-11 06:10:20', '-33.7687822,150.904814', 'Anything else to do in the city after the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(42, 7, '2016-04-11 09:00:00', '-33.7687822,150.904814', 'how tall is michael jordan', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `releaserequest`
--

DROP TABLE IF EXISTS `releaserequest`;
CREATE TABLE IF NOT EXISTS `releaserequest` (
  `agentid` varchar(7) NOT NULL,
  `requestsentby` varchar(7) NOT NULL,
  `requestdate` datetime NOT NULL,
  PRIMARY KEY (`agentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(255) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) DEFAULT NULL,
  `regid` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `datejoined` date DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `password`, `regid`, `name`, `email`, `phone`, `dob`, `role`, `datejoined`) VALUES
(1, 'tester', NULL, 'Sanjeev', 'sanjeev@sanjeev.com', NULL, NULL, 0, '2016-04-01'),
(2, 'tester', NULL, 'Albert', 'albert@albert.com', NULL, NULL, 0, '2016-04-01'),
(3, 'tester', NULL, 'Amos', 'amos@amos.com', NULL, NULL, 0, '2016-04-02'),
(4, 'tester', NULL, 'Ryan', 'ryan@ryan.com', NULL, NULL, 0, '2016-04-03'),
(5, 'tester', NULL, 'Ken', 'ken@ken.com', NULL, NULL, 0, '2016-04-04'),
(6, NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzSu', 'Amos', NULL, '0498745632', NULL, 1, '2016-04-09'),
(7, NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS1', 'Josh', NULL, '0498745633', NULL, 1, '2016-04-10'),
(8, NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS2', 'Mary', NULL, '0498745634', NULL, 1, '2016-04-11'),
(9, NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS3', 'Bob', NULL, '0498745635', NULL, 1, '2016-04-12'),
(10, NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS4', 'Jack', NULL, '0498745636', NULL, 1, '2016-04-13'),
(11, NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS5', 'Juliet', NULL, '0498745637', NULL, 1, '2016-04-14'),
(12, NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS6', 'John', NULL, '0498745638', NULL, 1, '2016-04-01'),
(13, 'tester', NULL, 'Tester', 'tester@tester.com', NULL, NULL, 0, '2016-04-04');

-- --------------------------------------------------------

--
-- Stand-in structure for view `woptable`
--
DROP VIEW IF EXISTS `woptable`;
CREATE TABLE IF NOT EXISTS `woptable` (
`userid` int(11)
,`assignedto` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `multiuserholder`
--
DROP TABLE IF EXISTS `multiuserholder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `multiuserholder`  AS  select `woptable`.`assignedto` AS `assignedto`,count(`woptable`.`assignedto`) AS `noofassigneduser` from `woptable` group by `woptable`.`assignedto` having (`noofassigneduser` > 1) ;

-- --------------------------------------------------------

--
-- Structure for view `woptable`
--
DROP TABLE IF EXISTS `woptable`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `woptable`  AS  select distinct `query`.`userid` AS `userid`,`query`.`assignedto` AS `assignedto` from `query` where (`query`.`status` = 1) ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
