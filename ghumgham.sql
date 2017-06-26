-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2017 at 08:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghumgham`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bid` int(50) NOT NULL,
  `btitle` varchar(150) NOT NULL,
  `bkeyword` varchar(100) NOT NULL,
  `bdescription` longtext NOT NULL,
  `bshort` varchar(1000) NOT NULL,
  `bfull` longtext NOT NULL,
  `bdate` date NOT NULL,
  `bstatus` tinyint(4) NOT NULL,
  `mid` tinyint(4) NOT NULL,
  `uid` tinyint(4) NOT NULL,
  `bimage` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `btitle`, `bkeyword`, `bdescription`, `bshort`, `bfull`, `bdate`, `bstatus`, `mid`, `uid`, `bimage`) VALUES
(56, 'chandragiri', 'chandragiri', '        DURATIO 1-2 days       \r\nATTITUDE:   2,425 meters        \r\nGRADE: Easy  \r\n Total day: 1\r\n\r\n               \r\n ', '    Chandragiri Hiking is recently opened route in Nepal. Around Kathmandu valley, there are many places to hike. Among those, Chandragiri hike is one of the best hiking route which is a day hiking around Kathmandu. Chandragiri range is situated to south as evergreen hill.', '    Chandragiri Hiking is recently opened route in Nepal. Around Kathmandu valley, there are many places to hike. Among those, Chandragiri hike is one of the best hiking route which is a day hiking around Kathmandu. Chandragiri range is situated to south as evergreen hill. It follows eastern range to Hattiban Resort and starts from nearby Maataatirtha Hotel Outlook INN itâ€™s altitude is 1650 meters above sea level. From this hotel, you can see the majestic eyeful mountains Manaslu, Ganesh Himal, Langtang ranges, Gaurishankar and even Everest range.\r\n\r\nThis hike takes approximately seven hours if you wish to finish in a day. At first three hour lead steeply ascend to Chhap Bhanjyang with the elevation of 2,275 meters above sea level. While on hike you will get picturesque snow covered scenery range above Kathmandu valley. And about quarter to hour lead to eastern south for Chandragiri hill view point. Most of the people of this region followed Buddhism. The height of Chandragiri hill is 2,475m. We would not be wrong if we say that you can see whole Nepalâ€™s part from top of the hill. Because you can see Mt. Api, Saipal to Everest and Makalu to Kanchanjunga {West to East}', '2017-06-25', 1, 0, 0, 'uploads/chandragiri.jpg'),
(57, 'shivapuri', 'shivapuri', ' Trip Destination Hiking to Shivapuri for a Day â€“ (2563 m)\r\nTotal Duration:1 days\r\nDifficulty:Easy\r\nBest Season:All year Around.\r\nMax. Altitude:2563m.\r\n ', '    Shivapuri is a worldâ€™s closet National park from the Capital city. The Second highest hill near Kathmandu valley and granary of flora and fauna in this region makes a sense to visit to Shivapuri national park.', '    Shivapuri is a worldâ€™s closet National park from the Capital city. The Second highest hill near Kathmandu valley and granary of flora and fauna in this region makes a sense to visit to Shivapuri national park.Hiking to Shivapuri is a short and easy adventure near the capital, Kathmandu. Baghdwar is source of Holy River Bagmati flowing nearby Holy place Pashupatinath, which is suppose to come from mouth of Tiger. After breakfast at the nearby restaurant, we drive for about 20 minutes to Budhanilkantha Temple which is 8 km north of Kathmandu. After watching this temple Budhanilkantha we hike through Shivapuri conservation area exploring over 500 species. The southern boundary of the area  Nepal army check post is located for security of national park. Nagi Gumpa is situated at an altitude of 2330 m north of Kathmandu just above Budhanilkantha Temple. This is only a famous Monastery for those Nuns practice in Buddhism and foreigners visiting for meditation. After lunch and strolling around for capturing the scene of monastery and vegetation around there, we take a short cut down hill trail to Kopan for about two hours and drive back to Kathmandu with joy on our cheerful faces.  Nepal Eco adventure suggests the trail for cycling and for bird watching and Jungle safari', '2017-06-25', 1, 0, 0, 'uploads/IMG_8147.JPG'),
(58, 'Hiking to Ghalegau', 'ghalegau', '   Grade: Moderate\r\n\r\nAverage walking per day: 4 hrs\r\n\r\nMaximum altitude: 1800m\r\n\r\nBest Seasons: February- May, October-November\r\n\r\nType of Trek: Tea house\r\n\r\nDuration: 11 days', '    Ghalegaun trekking trail is situated at the foothill of Lamgung Himal which is in the north central part of Nepal. The main destination of this trial is Ghale gaun and Ghanapokhara. This place is solely dominated by Gurung people. Here you can witness the matchless hospitality of Gurung people and how this trekking trial has significantly uplifted the concept of village tourism.', '    Ghalegaun trekking trail is situated at the foothill of Lamgung Himal which is in the north central part of Nepal. The main destination of this trial is Ghale gaun and Ghanapokhara. This place is solely dominated by Gurung people. Here you can witness the matchless hospitality of Gurung people and how this trekking trial has significantly uplifted the concept of village tourism. The striking beauty of this place and easy trek proposes you the once in a lifetime chance to get pleasure from the Ghale gaun, rural ramble, Gurung culture and beauty the nature have served. In this trekking trail we too can view the panorama of different Himalayas like Buddha Himal, Hiunchuli, and Manaslu in the north east, Mt.  Lamjung, Annapurna III towards north and lastly Machhapuchhare and Annapurna south in south.\r\n\r\nThis place is also the home of legendary (Gurkhas). Storehouse of matchless tribal culture, spectacular and pure natural beauty is one sentence that can define this place.', '2017-06-25', 1, 0, 0, 'uploads/IMG_20170414_154158.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `cid` int(20) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cemail` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `cmessage` varchar(500) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`cid`, `cname`, `cemail`, `phone`, `cmessage`, `cdate`) VALUES
(21, 'basanta', 'basanta@gmail.com', '9843312532', 'hello', '2017-06-14 19:12:49'),
(22, 'subu', 'subu@test.com', '984331232', 'hi', '2017-06-14 19:18:07'),
(25, 'abhash', 'hello@test.com', '6757546788', 'hello !!this  is a test', '2017-06-15 16:00:36'),
(26, 'sanjay', 'sanjay@test.com', '3456655666', 'malai nindra lagyo\r\n', '2017-06-15 16:01:20'),
(27, 'anil', 'anil@test.com', '121452325', 'bhai malai khaja khuwa na', '2017-06-15 16:02:05'),
(28, 'hello this is test', 'test@test.com', '2324325', 'hello thisi is test', '2017-06-25 08:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `gtype` varchar(150) NOT NULL,
  `gtitle` varchar(150) NOT NULL,
  `gdescription` varchar(200) NOT NULL,
  `gimage` varchar(150) NOT NULL,
  `gstatus` tinyint(4) NOT NULL,
  `gdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `gtype`, `gtitle`, `gdescription`, `gimage`, `gstatus`, `gdate`) VALUES
(15, 'rafting', '', '    rafting in trishuli', 'uploads/trisuli-river-rafting.jpg', 1, '2017-06-25'),
(16, 'rafting', '', '    ', 'uploads/raf.jpg', 1, '2017-06-25'),
(17, 'trekking', '', '    ', 'uploads/Annapurna-Base-Camp-Trek.jpg', 1, '2017-06-25'),
(18, 'trekking', '', '    ', 'uploads/a.jpg', 1, '2017-06-25'),
(19, 'bungee', '', '    ', 'uploads/Bungy_Jump_in_Nepal_2.jpg', 1, '2017-06-25'),
(20, 'bungee', '', '    ', 'uploads/b.jpg', 1, '2017-06-25'),
(21, 'hiking', '', '    ', 'uploads/IMG_7994.JPG', 1, '2017-06-25'),
(22, 'hiking', '', '    ', 'uploads/IMG_20170101_130923_HDR.jpg', 1, '2017-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `mid` int(11) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mdescription` text NOT NULL,
  `morder` int(11) NOT NULL,
  `mparent` int(11) NOT NULL,
  `mstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mid`, `mname`, `mdescription`, `morder`, `mparent`, `mstatus`) VALUES
(14, 'about', 'We are committed to offering travel services of the highest quality, combining our energy and enthusiasm, with our years of experience. Our greatest satisfaction comes in serving large numbers of satisfied clients who have experienced the joys and inspiration of travel.\r\n\r\nEver since the company was established, this Agency has concentrated its efforts in producing quality travel, responding to the needs of the times while anticipating the demands of the future.\r\n\r\n', 3, 0, 1),
(15, 'home', '    this is home page', 1, 0, 1),
(16, 'services', '    these are our services', 0, 0, 1),
(17, 'gallery', '    this is our gallery', 0, 0, 1),
(18, 'blog', '     details of our journey', 2, 0, 1),
(19, 'team', '    our team', 4, 0, 1),
(20, 'contact', 'our contact contact', 5, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(50) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `sdescription` text NOT NULL,
  `sfulldescription` text NOT NULL,
  `sstatus` tinyint(1) NOT NULL,
  `scost` int(100) NOT NULL,
  `simage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `sname`, `sdescription`, `sfulldescription`, `sstatus`, `scost`, `simage`) VALUES
(36, 'Rock climbing', '    rock climbing in different location of nepal', ' Nagarjun Forest â€“ 20 minutes drive from Kathmandu\r\nHattiban â€“ 1 hour drive from Kathmandu,\r\nBimal Nagar â€“ 20 minutes drive from Bandipur,\r\nNagarkot â€“ This bolted climbing area is hard to find without a guide.\r\nNamche Bazaar â€“ Bouldering field is 30 minute walk; ask local how to get there', 1, 500, 'uploads/Rock-Climbing.jpg'),
(37, 'Rafting in Trishuli', '    new offer for this summer', '    Location, Transportation and Timetable\r\nThe put-in point for Trisuli River Rafting/Kayaking is located just 3 to 3.5 hour drive west of Kathmandu, making it an excellent choice for short trips, or for those who are en route to Pokhara or Chitwan National Park.\r\nThe Trisuli can be rafted for 1 to 3 days, 15 - 60 km. Most people do the classic two day trip. The return journey to Kathmandu is 5 hours, to Pokhara is approximately 4 hours and to Chitwan is approximately 1 hour.\r\nWhiteWater Nepal arranges private or tourist bus transportation to the put-in point, usually Charaudi. (This may differ for longer/shorter trips and depends on the season). Transportation from the take-out point of Trisuli river trip is also arranged to whatever destination is next for you.\r\n\r\n', 1, 120, 'uploads/t.jpg'),
(40, 'trekking to Annapurna base camp', '    new offer for this summer', '    Trekking with local, experienced and hospitable guides and porters. Our staffs are trained and licensed from the Nepal government.\r\nMaximum flexibility in itinerary, route with personalized services. Guide will accompany you with his professional knowledge to make necessary changes\r\nTrekking with minimum impact in the local environment with choices of lodges using alternate fuel and following proper garbage disposal.\r\nOvernight stays in villages with great views avoiding altitude sickness', 1, 1000, 'uploads/annapurna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `tid` int(100) NOT NULL,
  `tname` varchar(150) NOT NULL,
  `tdegisnation` varchar(200) NOT NULL,
  `timage` varchar(10000) NOT NULL,
  `facebooklink` varchar(200) NOT NULL,
  `twitterlink` varchar(200) NOT NULL,
  `tstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`tid`, `tname`, `tdegisnation`, `timage`, `facebooklink`, `twitterlink`, `tstatus`) VALUES
(16, 'Sandesh Jonchhe', 'designer,developer,guide', 'uploads/18766382_1759601614066984_8457501987319325737_o.jpg', '    https://www.facebook.com/thesjonchhe', '    ', 1),
(17, 'lakpa sherpa', 'developer,guide', 'uploads/19390768_934023460070509_7397955028437044414_o.jpg', '    https://www.facebook.com/Cerpa.lakpa18', '    ', 1),
(20, 'Basanta shahi', 'Designer,Developer', 'uploads/11071508_944366058928479_6728047186121428680_n.jpg', '    https://www.facebook.com/mero99.bato', '    ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` int(11) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `upassword` varchar(40) NOT NULL,
  `uemail` varchar(40) NOT NULL,
  `utype` tinyint(1) NOT NULL,
  `ustatus` tinyint(1) NOT NULL,
  `flink` varchar(150) NOT NULL,
  `tlink` varchar(150) NOT NULL,
  `uimage` varchar(300) NOT NULL,
  `usertype` varchar(200) NOT NULL,
  `aboutme` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`uid`, `uname`, `upassword`, `uemail`, `utype`, `ustatus`, `flink`, `tlink`, `uimage`, `usertype`, `aboutme`) VALUES
(70, 'shahi', 'shahi', 'shahi@gmail.com', 2, 0, 'https://www.facebook.com/mero99.bato', 'test.twitter.com', 'uploads/IMG_20170128_164156_934.jpg', 'normal user', ''),
(71, 'basanta', 'shahithakuri', 'basanta99s@gmail.com', 2, 0, 'https://www.facebook.com/mero99.bato', '/', 'uploads/DSC_0313.JPG', 'admin', 'im just a member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
