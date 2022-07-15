-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 07:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE IF NOT EXISTS `admin_master` (
  `user_id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`user_id`, `username`, `password`, `email_id`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artical`
--

CREATE TABLE IF NOT EXISTS `artical` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `author` varchar(50) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `date1` varchar(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `artical`
--

INSERT INTO `artical` (`ID`, `title`, `author`, `details`, `date1`, `image`) VALUES
(1, 'The Importance of Physical Fitness', ' Fitday Editor', 'The importance of physical fitness cannot be emphasized enough. In todays society that is moving towards a more sedentary lifestyle there is a greater need than ever to increase the daily activity level to maintain both cardiovascular fitness and body weight.', '24-11-2017', 's4.jpg'),
(2, 'Static group classes and functional programs help clients make lasting lifestyle change.', 'Lisa Quigley, MFA', 'Camp 4 at Mountain Challenge in Maryville, Tennessee, is an outdoor fitness facility inspired by Yosemite and created to counteract the obesity and inactivity epidemic. Once a week, Mountain Challengeâ€™s backyard is open for recreational exercise and includes access to climbing, bouldering, group fitness classes and a yoga deck, as well as resistance bands and kettlebells for customized workouts. Student interns from the local collegeâ€™s exercise science and physical education departments oversee the activities and help design programs. belliconÂ® Bounce at bellicon Studio in Chicago incorporates high-quality mini-trampolines called bellicons. The trampolines (powered in part by bungee cords) offer a low-impact workout that combines cardio and strength interval training. The exercises boost cardio endurance while also toning the lower body, upper body and core. An upbeat soundtrack adds a high-energy boost in this intermediate class for participants who have some experience with rebo', '09-01-2018', 'artical1.jpg'),
(3, 'Real People Real Sotries', 'Rahul Yadav', ' To create before and now after time for three months workout in Fitness World Gym', '10-12-2019', 'real_story.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_equipment`
--

CREATE TABLE IF NOT EXISTS `book_equipment` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `equipment_id` int(5) NOT NULL,
  `member_id` int(5) NOT NULL,
  `pure_date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `book_equipment`
--

INSERT INTO `book_equipment` (`ID`, `equipment_id`, `member_id`, `pure_date`) VALUES
(1, 1, 3, '2019-05-04'),
(2, 1, 1, '2019-07-23'),
(3, 6, 2, '2019-01-20'),
(4, 6, 6, '2019-01-20'),
(5, 6, 7, '2019-01-20'),
(6, 5, 4, '2025-01-20'),
(7, 6, 4, '2028-01-20'),
(8, 9, 5, '2020-01-31'),
(9, 1, 4, '2020-03-02'),
(10, 5, 4, '2020-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `book_package_type`
--

CREATE TABLE IF NOT EXISTS `book_package_type` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `class_type_id` int(5) NOT NULL,
  `member_id` int(5) NOT NULL,
  `trainer_id` int(5) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `book_package_type`
--

INSERT INTO `book_package_type` (`ID`, `class_type_id`, `member_id`, `trainer_id`, `start_date`, `end_date`) VALUES
(1, 1, 1, 3, '2016-01-13', '2016-03-13'),
(2, 2, 2, 2, '2018-07-28', '2019-04-28'),
(3, 3, 3, 3, '2018-09-22', '2019-03-22'),
(4, 4, 5, 3, '2019-04-07', '2020-04-07'),
(5, 5, 6, 4, '2019-08-11', '2021-08-11'),
(6, 5, 8, 4, '2019-12-31', '2021-12-31'),
(7, 4, 7, 2, '2019-10-27', '2020-10-27'),
(8, 3, 9, 1, '2019-12-27', '2020-06-27'),
(9, 2, 10, 9, '2020-01-01', '2020-09-01'),
(10, 1, 11, 3, '2020-01-01', '2020-03-01'),
(11, 2, 4, 9, '2020-09-29', '2021-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `stock` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`ID`, `name`, `details`, `image`, `stock`, `price`) VALUES
(1, 'DOMYOS 100 ADULT SKIPPING ROPE BLACK', '     BEARING QUALITY\r\nSkipping rope without bearings for learning to skip at lower speeds.	\r\nERGONOMIC GRIP\r\nThin, slightly textured plastic handles for good grip.\r\nABRASION RESISTANCE\r\nPVC rope for indoor use on tiles or wood.\r\nADJUSTABLE\r\n3-metre rope with a height adjustment system.', 'classic_4e6f89df-bce0-4d24-9039-9c24710dfc7e.jpg', 2, 299),
(2, 'Cardio Machine', ' 1.5 HP DC Motor, Speed Range of 1 to 12 km/h with Includes MP3 & USB Input with High Quality Speakers\r\nLow-noise DC motor and PWM motor speed controller with unique silica gel damping\r\nDouble layer running board with Adjusting Speed Function, heart rate Function by griping and Safety Stop, Folding and slow release, and auto lock Function.\r\nFoldable, Maximum user weight capacity of 100 kg and 1-year motor Warranty, and 1-Year parts & Labor Warranty.\r\nFoldable with 4 Different kinds of direct speed key to chose and the manual function to adjust.', 'cardio.jpg', 8, 5000),
(3, 'Raber Loop', 'Low-noise DC motor and PWM motor speed controller with unique silica gel damping\r\nDouble layer running board with Adjusting Speed Function, heart rate Function by griping and Safety Stop, Folding and slow release, and auto lock Function.\r\nFoldable, Maximum user weight capacity of 100 kg and 1-year motor Warranty, and 1-Year parts & Labor Warranty.\r\nFoldable with 4 Different kinds of direct speed key to chose and the manual function to adjust. ', 'ruber.jpg', 10, 1500),
(4, 'Ab Rollers', '     Type: Roller/Wheel, \r\nMaximum Load Capacity: 100 Kg, \r\nMaterial:-Steel, \r\nColor:-Blue', 'Ab Rollers-4.jpg', 3, 189),
(5, 'Dumb Bells 10 Kg', '  Best quality, Highly durable and long lasting. Ideal for professional muscle builder. Cockatoo logo printed.', 'Dumb Bell-2.jpg', -3, 4999),
(6, 'Bench Press', ' Max loading weight capacity 180kg and Max user weight body 120kg.   Brand:-kobo, Manufacturer:-kobo, Length:-20 Centimeters, Width:-25 Centimeters, Weight:-21 Kilograms.', 'Bench Press-5.jpg', 2, 7999),
(7, 'Barbells Bars', 'Brand:- Viva Power, Material:- Stainless Steel And Rubber, Weight:- 10kg, We are providing  an extensive series of 10 kg Viva Power Rubber Coated Fixed Barbells Bars which are available in varied specification that meet on client demand.', 'Barbells-1.jpg', 3, 6499),
(8, 'Dipping Bar', ' Brand:-Viva Fitness, Color:- Black, Manufacturer:-Viva Fitness, Weight:-6.85 Kg. Fitness Equaliser Dipping Stand Metal Construction: Viva Fitness Dip Bar is tested to support up to 180 KG of user body weight. ', 'Dipping Bars-4.jpg', 2, 4360),
(9, 'Elliptical Machine ', ' Brand:- Cockatoo, Color:- Black & Wight, Manufacturer:- Cockatoo, Display-Type:-LCD, Included Components:-One Exercise Bike, Weight:-30 Kilograms, Material-Type:-Steel.  Maximum User Weight & Height accommodation: 100 Kg / 160-195cm', 'Elliptical Machine-6.jpg', 2, 14999);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Feedback` varchar(1000) NOT NULL,
  `date1` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Feedback`, `date1`) VALUES
(1, 'pradhumn', 'This Fitness World is great. It is very important for our body to maintains. I am speechless about this gym. The tools of in this Fitness World is very good...', '22/12/2019'),
(2, 'Shukla raj', 'Hello Fitness World, Fitness World is one of the best center to maintain our fitness. Thank you so much.', '22/12/2019'),
(3, 'Shukla raj', 'Hello Fitness World, Fitness World is one of the best center to maintain our fitness. Thank you so much.', '22/12/2019'),
(4, 'Prajapaty Kavya', 'Hello Fitness World, Fitness World is one of the best center to maintain our fitness. Thank you so much.', '17/01/2020');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `name`, `image`) VALUES
(1, 'image1', '105065.jpg'),
(4, 'image4', 'images (1).jpeg'),
(2, 'image2', 'download.jpeg'),
(3, 'image3', 'download (1).jpeg'),
(5, 'image5', 'images.jpeg'),
(6, 'image6', 'p6.jpg'),
(9, 'image8', 'A-3.jpg'),
(10, 'image9', 'A-10.jpg'),
(11, 'image10', 'A-8.jpg'),
(12, 'image11', 'A-4.jpg'),
(13, 'image12', 'A-7.jpg'),
(14, 'image14', 'A-2.jpg'),
(15, 'image13', 'A-5.jpg'),
(16, 'image15', 'A-11.jpg'),
(17, 'image16', 'A-12.jpg'),
(18, 'image17', 'A-14.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Email_id1` varchar(50) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Answer` varchar(1000) NOT NULL,
  `q_date` varchar(10) NOT NULL,
  `a_date` varchar(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`ID`, `Name`, `Email_id1`, `Question`, `Answer`, `q_date`, `a_date`) VALUES
(1, 'pradhumn', 'pradhumn@gmail.com', 'How many trainer available ??', '4', '22/08/2019', '10/01/2020'),
(2, 'Shukla raj', 'raj@gmail.com', 'Any new batch for yoga class', 'Yes', '22/12/2019', '07/01/2020'),
(3, 'Prajapaty Kavya', 'kavya@gmail.com', 'What personal training available or Not.', 'a b', '17/01/2020', '31/01/2020'),
(4, 'shukla raj', 'akashh7700@gmail.com', 'How are you fitness world.', 'good', '18/01/2020', '28/09/2020');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `join_date` varchar(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `contact_no` bigint(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `join_date`, `username`, `password`, `first_name`, `middle_name`, `age`, `contact_no`, `address`, `gender`, `image`) VALUES
(1, '2018-02-15', 'rahul@gmail.com', 'rahul123', 'Rahul', 'Patel', 37, 6789000344, 'B-20, shiva society, new ranip, ahmedabad, gujarat-123456', 'male', 'P-1.jfif'),
(2, '2018-07-19', 'pooja@gmail.com', 'pooja123', 'Patel', 'pooja', 26, 9876543210, 'Laldrvaja, ahmedabad, Gujarat-123456.', 'female', 'logo.png'),
(3, '2018-11-08', 'abc123@gmail.com', 'abc123', 'abc', 'patel', 24, 6789003303, 'ahmedabad, gujarat-123456', 'male', '217s.jpg'),
(4, '2019-04-25', 'raj@gmail.com', 'raj123', 'Raj', 'Shukla', 20, 8020304050, 'B-250, Surya society, near nirman complex, newranip, ahmedabad, gujarat.-123456', 'male', 'RR.png'),
(5, '2019-06-20', 'aditya@gmail.com', 'aditya123', 'Aditya', 'shah', 27, 9876542565, 'c-23, Jain Society, Near Real Garden, sola bhagavat, ahmedabad.-145634. ', 'male', 'P-3.webp'),
(6, '2019-08-11', 'Kavya@gmail.com', 'kavya123', 'Prajapaty', 'Kavya', 29, 9874632100, 'B-635, Shwarn Bhawan, Near Metro Station, Vastral, Ahmedabad-635325,', 'female', 'G-2.jpg'),
(7, '2019-10-27', 'tanya@gmail.com', 'tanya123', 'Tanya', 'Mishra', 32, 9845236320, '39, Syamrung Society, Near tag place hotel, gurgav, ahmedabad-262622', 'female', 'G-4.jpg'),
(8, '2019-12-31', 'rohit@gmail.com', 'rohit123', 'Pandey', 'Rohit', 34, 8752302655, 'N-344, Suryavansh flate, Opp. river front, ashram rode, ahmedabad-685636', 'male', 'P-4.jpg'),
(9, '2019-12-27', 'deepak@gmail.com', 'deepak123', 'Pathak', 'Deepak', 36, 9876543456, '22, Shivamkora society, neer compera hospital, jodhpur, ahmedabad, gujarat.', 'male', 'P-5.jpg'),
(10, '2019-12-27', 'vishal@gmail.com', 'vishal123', 'Vishal', 'Panchal', 46, 8774322374, 'BB-22, Lokmany complex, asram rode, ahmedabad, gujarat.', 'male', 'P-6.jpg'),
(11, '2020-01-01', 'neha@gmail.com', 'neha123', 'Lavaniya', 'Neha', 41, 9783732332, 'c-2992, Hariom society, opp kavariya complex, naroda, ahmedabad, gujarat.', 'female', 'G-3.jpg'),
(12, '2020-01-01', 'varsha@gmail.com', 'varsha123', 'Soni', 'Varsha', 39, 6773279873, 'G-789, Kartik apartment, nandanavan-2, vashna, ahmedabad, gujarat.', 'female', 'G-1.jpg'),
(13, '2020-01-01', 'shivani@gmail.com', 'shivani123', 'Borana', 'shivani', 43, 9878755555, 'O/-233, DD apartment, near ganesh school, batakpur, ahmedabad, gujarat.', 'female', 'G-5.jpg'),
(14, '2020-02-01', 'Gayatri@gmail.com', 'gayatri123', 'Thakar', 'Gayatri', 47, 8789557585, '224, Gaj apartment flat, opp nn medical, raypur, ahmedabad, guajarat.', 'female', 'G-6.jpg'),
(15, '2020-03-02', 'karan@gmail.com', 'karan123', 'Jethwa', 'karan', 33, 7878783680, 'GG-94, iskon complex, near nandanpur, ahmedabad, guajarat.', 'male', 'P10.jpg'),
(16, '2020-04-09', 'diya@gmail.com', 'diya123', 'Vora', 'Diya', 65, 7877373787, '93.4, Patel nivash, near HM hospital, jaypur, ahmedabad, gujarat.', 'female', 'G-12.jpg'),
(17, '2020-09-29', 'qw@gmail.com', 'qw', 'qw', 'qw', 110, 8776667777, 'dcadsjkcadj d  dsda', 'male', 'P-1.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `class` int(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`ID`, `class`) VALUES
(1, 9),
(2, 6),
(3, 3),
(4, 12),
(5, 24);

-- --------------------------------------------------------

--
-- Table structure for table `package_type`
--

CREATE TABLE IF NOT EXISTS `package_type` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `class` int(30) NOT NULL,
  `class_type` varchar(30) NOT NULL,
  `Details` varchar(1500) NOT NULL,
  `time_duration` varchar(50) NOT NULL,
  `fees` bigint(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `package_type`
--

INSERT INTO `package_type` (`ID`, `class`, `class_type`, `Details`, `time_duration`, `fees`) VALUES
(1, 3, 'Ballistic stretching', 'Ballistic stretching uses the momentum of a moving body or a limb in an attempt to force it beyond its normal range of motion. This is stretching, or "warming up", by bouncing into (or out of) a stretched position, using the stretched muscles as a spring which pulls you out of the stretched position. (e.g. bouncing down repeatedly to touch your toes.) This type of stretching is not considered useful and can lead to injury. It does not allow your muscles to adjust to, and relax in, the stretched position. It may instead cause them to tighten up by repeatedly activating the stretch reflex (see section The Stretch Reflex).', '3 Month', 6999),
(2, 1, 'Dynamic Stretching', 'Dynamic stretching, according to Kurz, "involves moving parts of your body and gradually increasing reach, speed of movement, or both." Do not confuse dynamic stretching with ballistic stretching! Dynamic stretching consists of controlled leg and arm swings that take you (gently!) to the limits of your range of motion. Ballistic stretches involve trying to force a part of the body beyond its range of motion. In dynamic stretches, there are no bounces or "jerky" movements. An example of dynamic stretching would be slow, controlled leg swings, arm swings, or torso twists.', '9 Month', 14999),
(3, 2, 'Personal Training ', 'Get 6 Months Package, We will introduce you to all our gym equipment with free 1-on-1 Personal training to make sure your exercising correctly and using everything to your full potential. \r\nNote:- There will be no joining after January.', '6 Month', 12999),
(4, 4, 'Yoga', 'Whether you want to lose weight, improve your strength, boost your sporting performance or discover a new way to relax, Yoga Gym has something for you - Natural Health. Yoga Gym provides you with a new way to work out.', '1 Year', 7999),
(5, 5, 'Group Fitness', 'Whether your a beginner at the gym or you just dont have much fitness knowledge, Group Fitness may be your solution. Joining a package can help build a foundation and structure that you can use to fuel your personal health journey for years to come. ', '2 year', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `class` int(5) NOT NULL,
  `class_type` int(5) NOT NULL,
  `day1` varchar(10) NOT NULL,
  `from` varchar(12) NOT NULL DEFAULT '00:00:00',
  `to` varchar(12) NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`ID`, `class`, `class_type`, `day1`, `from`, `to`) VALUES
(1, 4, 4, 'Everyday', '05:00:00 am', '06:00:00 am'),
(2, 5, 5, 'Everyday', '06:00:00 am', '07:00:00 am'),
(3, 2, 3, 'Everyday', '07:00:00 am', '08:00:00 am'),
(4, 1, 2, 'Everyday', '06:00:00 am', '07:00:00 am'),
(5, 2, 1, 'Everyday', '07:00:00 am', '08:00:00 am'),
(6, 5, 5, 'Monday', '04:00:00 pm', '05:00:00 pm'),
(7, 5, 5, 'Tuesday', '04:00:00 pm', '05:00:00 pm'),
(8, 5, 5, 'Wednesday', '04:00:00 pm', '05:00:00 pm'),
(9, 5, 5, 'Thursday', '04:00:00 pm', '05:00:00 pm'),
(10, 5, 5, 'Friday', '04:00:00 pm', '05:00:00 pm'),
(11, 2, 3, 'Monday', '05:00:00 pm', '06:00:00 pm'),
(12, 2, 3, 'Tuesday', '05:00:00 pm', '06:00:00 pm'),
(13, 2, 3, 'Wednesday', '05:00:00 pm', '06:00:00 pm'),
(14, 2, 3, 'Thursday', '05:00:00 pm', '06:00:00 pm'),
(15, 2, 3, 'Friday', '05:00:00 pm', '06:00:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `age` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `doj` varchar(10) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `class_ID` int(5) NOT NULL,
  `class_type_ID` int(5) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`ID`, `name`, `address`, `gender`, `dob`, `age`, `email`, `contact`, `doj`, `degree`, `class_ID`, `class_type_ID`, `image`) VALUES
(1, 'John Prajapati', 'balk statdium\r\nnew cornar\r\nnew delhi', 'male', '1994-06-23', 25, 'john@gmail.com', 8585968545, '2017-07-22', 'Kinesiology & Sports Science + Certificate', 2, 3, 't4.jpg'),
(4, 'Akshay', '	B-250, Surya society, near nirman complex, newranip, bangluru, karnatka.-123456', 'male', '1992-07-22', 26, 'akshytrainer@gmail.com', 7551543235, '2018-01-22', 'Biomechanics & Sports Science + Certificate ', 5, 5, 't2.jpg'),
(2, 'Omina', 'new hedrabad\r\nnear coloni\r\nby sector 25', 'femal', '1992-02-15', 26, 'omina@gmail.com', 9585965685, '2015-12-20', 'BSC', 4, 4, 't1.jpg'),
(3, 'Ayesha', 'new colony road\r\nnear by malad\r\nnew mumbai', 'femal', '1990-05-20', 30, 'ayesha@gmail.com', 8545962565, '2014-08-05', 'Exercise & Sports Science ', 3, 1, 't3.jpg'),
(9, 'Pooja Patel', 'C-234, Jawahar Vyapar Bhawan, HC Methur Lane, New Delhi, Delhi-110001.', 'femal', '1992-12-05', 28, 'poojatrainer@gmail.com', 9151530232, '2019-12-11', 'Exercise & Sports Science', 1, 2, 'Pooja Trainer.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
