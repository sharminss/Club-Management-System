-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 05:09 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `literatute_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `header` text NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`header`, `description`) VALUES
('ABOUT US      ', 'Secure file transfer  ');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `adesc` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `aname`, `adesc`) VALUES
(5, 'Agnibina 2  ', 'ry again later.\r\nCheck your network connection.\r\nIf you are connected but behind a firewall, check that Firefox has permission to access the Web.\r\n       '),
(6, 'Jhankar  ', 'MIST Literature & Cultural Club is one of the leading and prominent student organizations of Military Institution of Science & Technology. All the creative and cultural minded students of the institution bond here. The club was formed in late 2014. Since 2015 the club has been hosting \'Falgun Utsab\' and numerous literature and cultural based events and workshops. Nowadays MIST Literature & Cultural Club is performing through six dedicated teams covering all the sectors of literature and culture. From the very beginning the club is creating various opportunities to practice literature, art and culture.\r\nLiterature and Culture holds the true identity of a civilization or a society. It can drive and inspire an individual to think and make a better change. MIST Literature and Cultural Club believes technology and creativity do not contradict each other â€“rather both of them contribute to proper manifestation of a student. To uphold this belief, MIST Literature and Cultural Club has gloriously threaded its way far by inspiring and involving students of our technological institute.\r\nNow, it has also become a platform for inquisitive individuals to show their latent talent, to shine their knowledge on our culture and literature and excel at better human being.    '),
(8, 'Celluloid    ', 'As a registered student and faculty of MIST, everyone is eligible for the membership in MIST Literature and Cultural Club.\r\n ');

-- --------------------------------------------------------

--
-- Table structure for table `breaking`
--

CREATE TABLE `breaking` (
  `id` int(11) NOT NULL,
  `head` text NOT NULL,
  `bdesc` longtext NOT NULL,
  `linkname` varchar(150) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breaking`
--

INSERT INTO `breaking` (`id`, `head`, `bdesc`, `linkname`, `link`) VALUES
(8, 'Ankur-2018 registration opens at June 21 ', 'MIST Literature & Cultural Club is one of the leading and prominent student organizations of Military Institution of Science & Technology. All the creative and cultural minded students of the institution bond here. The club was formed in late 2014. Since 2015 the club has been hosting \'Falgun Utsab\' and numerous literature and cultural based events and workshops. Nowadays MIST Literature & Cultural Club is performing through six dedicated teams covering all the sectors of literature and culture. From the very beginning the club is creating various opportunities to practice literature, art and culture.\r\nLiterature and Culture holds the true identity of a civilization or a society. It can drive and inspire an individual to think and make a better change. MIST Literature and Cultural Club believes technology and creativity do not contradict each other â€“rather both of them contribute to proper manifestation of a student. To uphold this belief, MIST Literature and Cultural Club has gloriously threaded its way far by inspiring and involving students of our technological institute.\r\nNow, it has also become a platform for inquisitive individuals to show their latent talent, to shine their knowledge on our culture and literature and excel at better human being.\r\n\r\n\r\n', ' ', '  '),
(9, 'bb ', ' kshjh fhjdhf ', ' ', '  '),
(10, 'ghjj ', ' Secure file transfer based upon well-designed file encryption and authorization systems expend considerable effort\r\nto protect passwords and other credentials from being stolen.Transferring and storing passwords in plaintext form leaves\r\nthem at risk of exposure to attackers, eavesdroppers andspyware.  ', ' ', '  ');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `cat`) VALUES
(1, 'About'),
(2, 'Activities'),
(3, 'Breaking News'),
(4, 'EMAIL& PHONE'),
(5, 'Event Link'),
(6, 'Follow Us'),
(7, 'LOCATION'),
(8, 'Message'),
(9, 'Notice'),
(10, 'Previous Events'),
(11, 'ADD A STORY'),
(12, 'Upcoming Event'),
(13, 'Contacts');

-- --------------------------------------------------------

--
-- Table structure for table `email_phone`
--

CREATE TABLE `email_phone` (
  `email` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_phone`
--

INSERT INTO `email_phone` (`email`, `phone`) VALUES
('nishaprincess52@yahoo.come ', ' 0172545688963      ');

-- --------------------------------------------------------

--
-- Table structure for table `event_link`
--

CREATE TABLE `event_link` (
  `ename` text,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_link`
--

INSERT INTO `event_link` (`ename`, `link`) VALUES
('Ankur 2017  ', 'https://mistlcc.com/aunkur/?event_id=2  ');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `fblink` varchar(250) DEFAULT NULL,
  `glink` varchar(250) DEFAULT NULL,
  `tlink` varchar(250) DEFAULT NULL,
  `ylink` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`fblink`, `glink`, `tlink`, `ylink`) VALUES
('https://www.facebook.com/mistlcc/ ', ' https://plus.google.com/+MistLiteratureCulturalClub     ', '    ', 'https://www.youtube.com/channel/UCnmSElRK4LbskYf0D0ycHF   ');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`place`) VALUES
('Mirpur Cantonment, Dhaka-1215 ');

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `id` int(11) NOT NULL,
  `personname` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `messeges` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messeges`
--

INSERT INTO `messeges` (`id`, `personname`, `designation`, `image`, `messeges`) VALUES
(3, 'ARANYA AUMIT  ', ' PRESIDENT  ', 'Capture.PNG', 'MIST Literature & Cultural Club is one of the leading and prominent student organizations of Military Institution of Science & Technology. All the creative and cultural minded students of the institution bond here. The club was formed in late 2014. Since 2015 the club has been hosting \'Falgun Utsab\' and numerous literature and cultural based events and workshops. Nowadays MIST Literature & Cultural Club is performing through six dedicated teams covering all the sectors of literature and culture. From the very beginning the club is creating various opportunities to practice literature, art and culture.\r\nLiterature and Culture holds the true identity of a civilization or a society. It can drive and inspire an individual to think and make a better change. MIST Literature and Cultural Club believes technology and creativity do not contradict each other â€“rather both of them contribute to proper manifestation of a student. To uphold this belief, MIST Literature and Cultural Club has gloriously threaded its way far by inspiring and involving students of our technological institute.\r\n ');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `head` text NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `head`, `body`) VALUES
(23, 'Events details updated for Ankur-2020 ', 'MIST Literature & Cultural Club is one of the leading and prominent student organizations of Military Institution of Science & Technology. All the creative and cultural minded    '),
(24, 'Europe â€˜panickingâ€™ over Indiaâ€™s pharmaceutical export curbs: industry group ', ' India, the world\'s main supplier of generic drugs, has restricted the export of 26 active pharmaceutical ingredients (APIs) and the medicines made from them, in a move seen aimed at tackling possible domestic shortages of medicine during the outbreak.\r\n\r\nOn Wednesday, Dinesh Dua, chairman of the Pharmaceuticals Export Promotion Council of India (Pharmexcil), told Reuters that some of the restricted APIs and medicines were widely exported to Europe and the United States. ');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `medium` text NOT NULL,
  `process` text NOT NULL,
  `creator_id` int(11) NOT NULL,
  `time` text NOT NULL,
  `deg` text NOT NULL,
  `creator_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `medium`, `process`, `creator_id`, `time`, `deg`, `creator_name`) VALUES
(1, 'Welcome Post', 'Hi everyone!! Welcome to Literature Club Family. Hope all are happy.', 1, 'August 12, 2018, 9:26 pm', 'Super Admin', 'Ali Azhar'),
(2, 'Bangladesh', 'I love Bangladesh', 13, 'November 5, 2019, 4:27 pm', 'Member', 'Boltu Chowdhury');

-- --------------------------------------------------------

--
-- Table structure for table `prev_events`
--

CREATE TABLE `prev_events` (
  `id` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `link` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prev_events`
--

INSERT INTO `prev_events` (`id`, `ename`, `link`) VALUES
(2, 'ICCIT 2018  ', 'https://iccit.org.bd/2018        ');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `dept` text NOT NULL,
  `deg` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `start_date` text NOT NULL,
  `end_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `firstname`, `lastname`, `email`, `password`, `dept`, `deg`, `status`, `start_date`, `end_date`) VALUES
(1, 'Almahmud', 'Azhar', 'almahmud@gmail.com', '111111', 'CSE', 1000, 1000, '', ''),
(2, 'Sanjatul', 'Islam', 'sanjatul@gmail.com', '111111', 'CSE', 1, 1, 'August 12, 2018', ''),
(3, 'Roshni', 'Kakkar', 'roshni@gmail.com', '111111', 'EECE', 1, 100, '', ''),
(4, 'Shafia', 'Islam', 'shafia@gmail.com', '111111', 'NSE', 2, 8, 'August 12, 2018', 'August 12, 2018'),
(5, 'Rajshree', 'Majumdar', 'rajs@gmail.com', '111111', 'CSE', 3, 3, 'August 12, 2018', ''),
(6, 'Mahjabin', 'Noor', 'noor@gmail.com', '111111', 'PME', 4, 4, 'August 12, 2018', ''),
(7, 'Ashi', 'Noor', 'ashi@gmail.com', '111111', 'EWCE', 5, 5, 'August 12, 2018', ''),
(8, 'Sharmin', 'sultana', 'sharmin@gmail.com', '111111', 'CSE', 5, 5, 'August 12, 2018', ''),
(9, 'Lucky', 'Islam', 'lucky@gmail.com', '111111', 'PME', 6, 6, 'August 12, 2018', ''),
(10, 'Laila', 'Islam', 'laila@gmail.com', '111111', 'ME', 6, 100, '', ''),
(11, 'Sahal', 'Islam', 'sahal@gmail.com', '111111', 'ME', 5, 9, 'August 12, 2018', 'August 12, 2018'),
(12, 'nnn', 'nm', 'alix@gmail.com', '111111', 'NSE', 2, 100, '', ''),
(13, 'Boltu', 'Chowdhury', 'boltu@gmail.com', '22222', 'CSE', 6, 6, 'November 5, 2019', ''),
(14, 'Kamal', 'Hossain', 'kamal@gmail.com', '111111', 'CSE', 6, 6, 'November 5, 2019', ''),
(15, 'Anwar', 'Hossain', 'anwar@gmail.com', '12345', 'CSE', 6, 6, 'March 4, 2020', ''),
(16, 'ali', 'piku', 'ali@gmail.com', '12345', 'CSE', 1, 1, 'March 4, 2020', '');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `fileextension` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `header`, `filename`, `fileextension`) VALUES
(5, 'Story of Us       ', '2.mp4', 'video/mp4');

-- --------------------------------------------------------

--
-- Table structure for table `up_events`
--

CREATE TABLE `up_events` (
  `id` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `edesc` longtext,
  `link` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_events`
--

INSERT INTO `up_events` (`id`, `ename`, `edesc`, `link`) VALUES
(6, 'Ankur ', 'SMTH       ', 'https://mistlcc.com/aunkur/?event_id=2     ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breaking`
--
ALTER TABLE `breaking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messeges`
--
ALTER TABLE `messeges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prev_events`
--
ALTER TABLE `prev_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_events`
--
ALTER TABLE `up_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `breaking`
--
ALTER TABLE `breaking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messeges`
--
ALTER TABLE `messeges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prev_events`
--
ALTER TABLE `prev_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `up_events`
--
ALTER TABLE `up_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
