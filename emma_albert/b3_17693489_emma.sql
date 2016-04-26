-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2016 at 12:11 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b3_17693489_emma`
--

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
CREATE TABLE IF NOT EXISTS `query` (
  `queryid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`queryid`, `userid`, `time`, `location`, `content`, `audio`, `image`, `answer`, `assignedto`, `answertime`, `status`) VALUES
(1, 'user7', '2016-04-11 09:00:00', '-33.7687822,150.904814', 'how tall is michael jordan', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', '1.98m', 'agent1', '2016-04-11 09:10:20', 2),
(2, 'user7', '2016-04-11 09:05:01', '-33.7687822,150.904815', 'how tall is barack obama', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', '1.85m', 'agent1', '2016-04-11 09:10:21', 2),
(3, 'user7', '2016-04-11 09:10:02', '-33.7687822,150.904816', 'how old is hillary clinton', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', '68 years', 'agent1', '2016-04-11 09:10:22', 2),
(4, 'user7', '2016-04-11 09:10:03', '-33.7687822,150.904814', 'how tall is napolean bonaparte', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', '1.69m', 'agent1', '2016-04-11 09:10:23', 2),
(5, 'user7', '2016-04-11 09:10:04', '-33.7687822,150.904814', 'how tall is buzz aldrin?', NULL, NULL, '1.78m', 'agent1', '2016-04-22 10:33:25', 2),
(6, 'user7', '2016-04-11 09:10:05', '-33.7687822,150.904814', 'how tall is adolf hitler?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(7, 'user7', '2016-04-11 09:10:06', '-33.7687822,150.904814', 'how tall is stalin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(8, 'user7', '2016-04-11 09:10:07', '-33.7687822,150.904814', 'how tall is shaquille oneal', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(9, 'user7', '2016-04-11 09:10:08', '-33.7687822,150.904814', 'how tall is bill clinton', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(10, 'user7', '2016-04-11 09:10:09', '-33.7687822,150.904814', 'how tall is michelle obama', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(11, 'user7', '2016-04-11 09:10:10', '-33.7687822,150.904814', 'How far is my closest train station?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(12, 'user7', '2016-04-11 09:10:11', '-33.7687822,150.904814', 'When does the next train to the city come?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(13, 'user7', '2016-04-11 09:10:12', '-33.7687822,150.904814', 'How long will it take me to walk there?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(14, 'user7', '2016-04-11 09:10:13', '-33.7687822,150.904814', 'What time does the train get to Melbourne Central?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(15, 'user7', '2016-04-11 09:10:14', '-33.7687822,150.904814', 'Are there any screenings of Batman vs Superman tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(16, 'user7', '2016-04-11 09:10:15', '-33.7687822,150.904814', 'Can you please book 2 tickets for me?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(17, 'user7', '2016-04-11 09:10:16', '-33.7687822,150.904814', 'Where is a good place to have Japanese food for dinner nearby?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(18, 'user7', '2016-04-11 09:10:17', '-33.7687822,150.904814', 'Can you make a reservation for me before the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(19, 'user7', '2016-04-11 09:10:18', '-33.7687822,150.904814', 'What time does Myer close tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(20, 'user7', '2016-04-11 09:10:19', '-33.7687822,150.904814', 'Should I bring an umbrella?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(21, 'user7', '2016-04-11 09:10:20', '-33.7687822,150.904814', 'Anything else to do in the city after the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(24, 'user1', '2016-04-11 08:10:05', '-33.7687822,150.904814', 'how tall is adolf hitler', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(23, 'user1', '2016-04-11 08:10:04', '-33.7687822,150.904814', 'how tall is buzz aldrin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(25, 'user1', '2016-04-11 08:10:06', '-33.7687822,150.904814', 'how tall is stalin', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(26, 'user1', '2016-04-11 08:10:07', '-33.7687822,150.904814', 'how tall is shaquille oneal', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(27, 'user1', '2016-04-11 08:10:08', '-33.7687822,150.904814', 'how tall is bill clinton', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(28, 'user1', '2016-04-11 08:10:09', '-33.7687822,150.904814', 'how tall is michelle obama', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(30, 'user2', '2016-04-11 07:10:10', '-33.7687822,150.904814', 'How far is my closest train station?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(31, 'user2', '2016-04-11 07:10:11', '-33.7687822,150.904814', 'When does the next train to the city come?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(32, 'user2', '2016-04-11 07:10:12', '-33.7687822,150.904814', 'How long will it take me to walk there?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(33, 'user2', '2016-04-11 07:10:13', '-33.7687822,150.904814', 'What time does the train get to Melbourne Central?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(34, 'user2', '2016-04-11 07:10:14', '-33.7687822,150.904814', 'Are there any screenings of Batman vs Superman tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(35, 'user2', '2016-04-11 07:10:15', '-33.7687822,150.904814', 'Can you please book 2 tickets for me?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(37, 'user3', '2016-04-11 06:10:16', '-33.7687822,150.904814', 'Where is a good place to have Japanese food for dinner nearby?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(38, 'user3', '2016-04-11 06:10:17', '-33.7687822,150.904814', 'Can you make a reservation for me before the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(39, 'user3', '2016-04-11 06:10:18', '-33.7687822,150.904814', 'What time does Myer close tonight?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(40, 'user3', '2016-04-11 06:10:19', '-33.7687822,150.904814', 'Should I bring an umbrella?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0),
(41, 'user3', '2016-04-11 06:10:20', '-33.7687822,150.904814', 'Anything else to do in the city after the movie?', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `regid` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `datejoined` date DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `password`, `regid`, `name`, `email`, `phone`, `dob`, `role`, `datejoined`) VALUES
('agent1', 'tester', NULL, 'Sanjeev', 'me_sanjeev@hotmail.com', NULL, NULL, 0, '2016-04-01'),
('agent2', 'tester', NULL, 'Albert', 'albbui@gmail.com', NULL, NULL, 0, '2016-04-01'),
('agent3', 'tester', NULL, 'Amos', 'amosangyj@gmail.com', NULL, NULL, 0, '2016-04-02'),
('agent4', 'tester', NULL, 'Ryan', 'ryan.arsenna@gmail.com', NULL, NULL, 0, '2016-04-03'),
('agent5', 'tester', NULL, 'Ken', 'kens23@gmail.com', NULL, NULL, 0, '2016-04-04'),
('user1', NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzSu', 'Amos', NULL, '0498745632', NULL, 1, '2016-04-09'),
('user2', NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS1', 'Josh', NULL, '0498745633', NULL, 1, '2016-04-10'),
('user3', NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS2', 'Mary', NULL, '0498745634', NULL, 1, '2016-04-11'),
('user4', NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS3', 'Bob', NULL, '0498745635', NULL, 1, '2016-04-12'),
('user5', NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS4', 'Jack', NULL, '0498745636', NULL, 1, '2016-04-13'),
('user6', NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS5', 'Juliet', NULL, '0498745637', NULL, 1, '2016-04-14'),
('user7', NULL, 'APA91bHUYXD_X2meMxOJ4JkWGyJVwv0Hy6UPvZ-5i42jLDoU3ofdEutPJspCuNDrxg-VutIHtfvDc8WSTziMxIwIh4YIZYzQiORoGG8VcV9R8azPTEXzRUkBMiKvGHXpOBJINljZyzS6', 'John', '', '04987456389', '1953-02-28', 1, '2016-04-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
