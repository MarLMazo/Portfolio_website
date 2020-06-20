-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 08:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `port_messages`
--

CREATE TABLE `port_messages` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `port_projects`
--

CREATE TABLE `port_projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `main_img_path` varchar(100) DEFAULT NULL,
  `url_path` varchar(100) DEFAULT NULL,
  `url_description` varchar(50) NOT NULL,
  `user_role` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `port_projects`
--

INSERT INTO `port_projects` (`id`, `title`, `description`, `img_path`, `main_img_path`, `url_path`, `url_description`, `user_role`, `date`) VALUES
(1, 'Soundly', '<p><span>Description:</span>  A music web application where users can listen to the list of music. A user can also create an account and log in so that he/she can create a playlist where he/she can listen to.\r\n</p>\r\n\r\n<p>This project is one of my biggest achievements in web development as it was a music web application and I was the one who makes sure that this project works as I was assigned to do the music functionality. </p>\r\n\r\n \r\n\r\n<p><span>Client-Side:</span> I build three features in this project. A music library, a player, and the FAQ. The music library will show all the list of music in the database including a button that will let the user play the music. Once the user clicks any of the music, it will lead to the player bar where user can see the title of the music, the album image, the artist and have the ability to manipulate the list of songs by pausing, going next, going back, shuffling the playlist or repeating the same song. Also, another feature I did on this project is the F.A.Q. The FAQ feature I made is a search bar where the application helps users to auto-complete the questions that they are looking for. \r\n</p>\r\n \r\n\r\n \r\n<p><span>\r\nAdmin Side:</span> All the music player and FAQ has a built-in admin panel where user can add, update, delete, or view music, artist, and FAQs. This admin feature will be used to manage the web application properly.</p>\r\n\r\n \r\n<p><span>\r\nChallenges: </span>This web application can play music, pause music, shuffle the music list, repeat the same song, and go back and go next to songs. This mainly focuses on JavaScript and jQuery. I studied the basic functionality as to how a music player works on web technology. It took me a while to get to it and I was pressured as I was doing the main functionality of our group work. If I never can do this functionality, it won\'t be called a music application as it won\'t be able to do as what it intended to do. I did a lot of research and still, I’m having a hard time understanding how the application should work and it turns out that I only need to create one music element and just change the sources every time I click a music functionality.</p>', 'http://wordpress.mdmazo.com/wp-content/uploads/2020/06/Soundly-mainpage-e1591959676893.png', 'http://wordpress.mdmazo.com/wp-content/uploads/2020/06/soundly-e1591959703912.png', 'http://soundly.mdmazo.com/', 'See the Website &gt; &gt; &gt;', 'Team Member', '2020-04-01'),
(2, 'Game Project', '<p><span>Description:</span>A website mini-game where the user should click the monsters randomly creating chaos so that he/she can maintain peace in the village. The Page focus mainly on CSS3 animation to showcase my ability in doing CSS3 animation.</p>\r\n<p>The pure CSS animation Project. I worked on this to create a CSS animation game. I only use JavaScript in order to move some elements randomly and keep track of the scores of the monster he/she clicked. This is pure CSS animation.</p>', 'http://wordpress.mdmazo.com/wp-content/uploads/2020/06/cssanimation-e1591959692406.png', NULL, 'http://cssanimation.mdmazo.com/', 'See the Website &gt; &gt; &gt;', 'Creator', '2019-12-01'),
(3, 'Baked Explosion', '<p><span>Description: </span>A restaurant website where user can see the menu of the restaurant. It also has a function to book user to a desired restaurant location on a specific time and a game where user can interact and play.</p>\r\n<p>I worked on creating a Booking Feature where user can book a Table or catering for the restaurant. This feature will also gather its user information and will send an email about the confirmation of the reservation</p>\r\n', 'http://wordpress.mdmazo.com/wp-content/uploads/2020/06/restaurantProject-e1591959662645.png', NULL, 'http://restaurant.mdmazo.com/', 'See the Website &gt; &gt; &gt;', '', '2019-12-01'),
(4, 'E-commerce MERN Stack', '<p><span>Description: </span>A Web Application that the user will be able to rent/buy clothes in the store</p>\r\n<p>This is the current project that Im working with. Right now Im in the middle of creating a flow in the front-end login and registration feature.</p>\r\n<p>As you can see in the image that I was able to implement the backend request with password hash for users.</p>', 'http://wordpress.mdmazo.com/wp-content/uploads/2020/06/Insomia-e1592013363920.png', 'http://wordpress.mdmazo.com/wp-content/uploads/2020/06/Rentrend-e1592013336418.png', NULL, 'Not Yet Deployed', NULL, '2020-06-01'),
(5, 'Hospital Project', '<p><span>Description</span>A Hospital Project that is based on ASP.net and C# with all basic CRUD functionality for each feature </p>\r\n<p>Using Entity Framework to create a web application for hospital staff. I mainly focus on creating Volunteering Feature and News and Publication. I was able to create the CRUD elements for each features</p>', 'http://wordpress.mdmazo.com/wp-content/uploads/2020/06/volunteer_hospital-e1591967044344.png', NULL, 'https://github.com/AnshukAggarwal/HumberAreaHospital', 'See the Git Repository &gt; &gt; &gt;', 'Assistant Team Lead', '2020-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `port_technologies`
--

CREATE TABLE `port_technologies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `port_technologies`
--

INSERT INTO `port_technologies` (`id`, `name`, `icon_path`) VALUES
(1, 'HTML', 'images/icons/html5.png'),
(2, 'CSS', 'images/icons/css3.png'),
(3, 'JavaScript', 'images/icons/javascript.png'),
(4, 'JQuery', 'images/icons/jquery.png'),
(5, 'PHP', 'images/icons/php.png'),
(6, 'Photoshop', 'images/icons/photoshop.png'),
(7, 'C-Sharp', 'images/icons/c-sharp.png'),
(8, 'MySQL', 'images/icons/mysql.png'),
(9, 'XML', 'images/icons/xml.png'),
(10, 'React', 'images/icons/react.png'),
(11, 'Redux', 'images/icons/redux.png'),
(12, 'MongoDB', 'images/icons/mongodb.png'),
(13, 'Express', NULL),
(14, 'Node-JS', NULL),
(15, 'ASP', NULL),
(16, 'Entity-Framework', NULL),
(17, 'MERN', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projectxtechnology`
--

CREATE TABLE `projectxtechnology` (
  `id` int(10) NOT NULL,
  `port_technology_id` int(10) NOT NULL,
  `port_project_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectxtechnology`
--

INSERT INTO `projectxtechnology` (`id`, `port_technology_id`, `port_project_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 1, 2),
(7, 2, 2),
(8, 3, 2),
(9, 1, 3),
(10, 2, 3),
(11, 3, 3),
(12, 12, 4),
(13, 13, 4),
(14, 14, 4),
(15, 10, 4),
(16, 1, 5),
(17, 2, 5),
(18, 3, 5),
(19, 7, 5),
(20, 15, 5),
(21, 16, 5),
(22, 17, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`) VALUES
(1, 'MarL Mazo', 'me@mdmazo.com', '6479970108');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `port_messages`
--
ALTER TABLE `port_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port_projects`
--
ALTER TABLE `port_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port_technologies`
--
ALTER TABLE `port_technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectxtechnology`
--
ALTER TABLE `projectxtechnology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `port_messages`
--
ALTER TABLE `port_messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `port_projects`
--
ALTER TABLE `port_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `port_technologies`
--
ALTER TABLE `port_technologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `projectxtechnology`
--
ALTER TABLE `projectxtechnology`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
