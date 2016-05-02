-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2016 at 01:09 AM
-- Server version: 5.5.46
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emma`
--

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `queryid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `location` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `audio` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `assignedto` int(11) DEFAULT NULL,
  `answertime` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`queryid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`queryid`, `userid`, `time`, `location`, `content`, `audio`, `image`, `answer`, `assignedto`, `answertime`, `status`) VALUES
(1, 6, '2016-04-11 09:00:00', '-33.7687822,150.904814', 'how tall is michael jordan', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', '1.98m', 1, '2016-04-11 09:10:20', 2),
(2, 6, '2016-04-11 09:05:01', '-33.7687822,150.904815', 'how tall is barack obama', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', '1.85m', 1, '2016-04-11 09:10:21', 2),
(3, 6, '2016-04-11 09:10:02', '-33.7687822,150.904816', 'how old is hillary clinton', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', '68 years', 1, '2016-04-11 09:10:22', 2),
(4, 6, '2016-04-11 09:10:03', '-33.7687822,150.904814', 'how tall is napolean bonaparte', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', '1.69m', 1, '2016-04-11 09:10:23', 2),
(5, 6, '2016-04-11 09:10:04', '-33.7687822,150.904814', 'how tall is buzz aldrin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(6, 6, '2016-04-11 09:10:05', '-33.7687822,150.904814', 'how tall is adolf hitler', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(7, 6, '2016-04-11 09:10:06', '-33.7687822,150.904814', 'how tall is stalin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(8, 6, '2016-04-11 09:10:07', '-33.7687822,150.904814', 'how tall is shaquille oneal', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(9, 6, '2016-04-11 09:10:08', '-33.7687822,150.904814', 'how tall is bill clinton', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(10, 6, '2016-04-11 09:10:09', '-33.7687822,150.904814', 'how tall is michelle obama', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(11, 6, '2016-04-11 09:10:10', '-33.7687822,150.904814', 'How far is my closest train station?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(12, 6, '2016-04-11 09:10:11', '-33.7687822,150.904814', 'When does the next train to the city come?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(13, 6, '2016-04-11 09:10:12', '-33.7687822,150.904814', 'How long will it take me to walk there?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(14, 6, '2016-04-11 09:10:13', '-33.7687822,150.904814', 'What time does the train get to Melbourne Central?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(15, 6, '2016-04-11 09:10:14', '-33.7687822,150.904814', 'Are there any screenings of Batman vs Superman tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(16, 6, '2016-04-11 09:10:15', '-33.7687822,150.904814', 'Can you please book 2 tickets for me?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(17, 6, '2016-04-11 09:10:16', '-33.7687822,150.904814', 'Where is a good place to have Japanese food for dinner nearby?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(18, 6, '2016-04-11 09:10:17', '-33.7687822,150.904814', 'Can you make a reservation for me before the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(19, 6, '2016-04-11 09:10:18', '-33.7687822,150.904814', 'What time does Myer close tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(20, 6, '2016-04-11 09:10:19', '-33.7687822,150.904814', 'Should I bring an umbrella?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(21, 6, '2016-04-11 09:10:20', '-33.7687822,150.904814', 'Anything else to do in the city after the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(23, 7, '2016-04-11 08:10:04', '-33.7687822,150.904814', 'how tall is buzz aldrin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(24, 7, '2016-04-11 08:10:05', '-33.7687822,150.904814', 'how tall is adolf hitler', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(25, 7, '2016-04-11 08:10:06', '-33.7687822,150.904814', 'how tall is stalin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(26, 7, '2016-04-11 08:10:07', '-33.7687822,150.904814', 'how tall is shaquille oneal', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(27, 7, '2016-04-11 08:10:08', '-33.7687822,150.904814', 'how tall is bill clinton', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(28, 7, '2016-04-11 08:10:09', '-33.7687822,150.904814', 'how tall is michelle obama', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(30, 8, '2016-04-11 07:10:10', '-33.7687822,150.904814', 'How far is my closest train station?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(31, 8, '2016-04-11 07:10:11', '-33.7687822,150.904814', 'When does the next train to the city come?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(32, 8, '2016-04-11 07:10:12', '-33.7687822,150.904814', 'How long will it take me to walk there?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(33, 8, '2016-04-11 07:10:13', '-33.7687822,150.904814', 'What time does the train get to Melbourne Central?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(34, 8, '2016-04-11 07:10:14', '-33.7687822,150.904814', 'Are there any screenings of Batman vs Superman tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(35, 8, '2016-04-11 07:10:15', '-33.7687822,150.904814', 'Can you please book 2 tickets for me?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(37, 9, '2016-04-11 06:10:16', '-33.7687822,150.904814', 'Where is a good place to have Japanese food for dinner nearby?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(38, 9, '2016-04-11 06:10:17', '-33.7687822,150.904814', 'Can you make a reservation for me before the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(39, 9, '2016-04-11 06:10:18', '-33.7687822,150.904814', 'What time does Myer close tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(40, 9, '2016-04-11 06:10:19', '-33.7687822,150.904814', 'Should I bring an umbrella?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(41, 9, '2016-04-11 06:10:20', '-33.7687822,150.904814', 'Anything else to do in the city after the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) DEFAULT NULL,
  `regid` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `datejoined` date DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
(12, NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS6', 'John', NULL, '0498745638', NULL, 1, '2016-04-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
