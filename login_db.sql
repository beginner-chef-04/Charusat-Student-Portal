-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 07:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `details_tb`
--

CREATE TABLE `details_tb` (
  `user` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ph_no` bigint(13) NOT NULL,
  `blood` varchar(6) NOT NULL,
  `atd_wt` int(3) NOT NULL,
  `atd_dbms` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details_tb`
--

INSERT INTO `details_tb` (`user`, `name`, `ph_no`, `blood`, `atd_wt`, `atd_dbms`) VALUES
('18DCS084', 'Vraj R Patel', 7574844386, 'O+ve', 56, 84),
('18DCS083', 'Vedant D Patel', 7359564572, 'B+ve', 91, 76);

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `user` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`user`, `pwd`) VALUES
('18DCS083', '101200'),
('18DCS084', '111200');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` int(4) NOT NULL,
  `title` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `title`, `url`, `description`, `keywords`) VALUES
(1, 'reddit , the front page of the internet', 'https://www.reddit.com', 'Reddit is an American social news aggregation, web content rating, and discussion website. Reddit is registered community members can submit content such as text posts or direct links.', 'reddit, Reddit, boost, Boost'),
(2, 'Arch Linux - ArchWiki', 'https://wiki.archlinux.org', 'A simple, lightweight distribution. You have reached the website for Arch Linux, a lightweight and flexible Linux distribution that tries to Keep It Simple.', 'Arch linux, Arch Distro, arch, arch great'),
(3, 'CodeChef', 'https://www.codechef.com', 'CodeChef is a non-profit educational initiative of Directi. It is a global competitive programming platform which supports over 50 programming languages and has a large community of programmers that helps students and professionals test and improve their coding skills.', 'codechef, CodeChef, Codechef'),
(4, 'Facebook - Log In or Sign Up', 'https://www.facebook.com', 'Facebook is an American for-profit corporation and an online social media and social networking service based in Menlo Park, California.', 'fb, facebook, FB, Fb'),
(5, 'Udemy Online Courses - Learn Anything, On Your Schedule', 'https://www.udemy.com', 'Udemy.com is an online learning platform. It is aimed at professional adults who want to add new skills to their resumes, or explore their passions.', 'Udemy, udemy, Udemy Courses'),
(6, 'Code and Improve your skills', 'http://codeforces.com/', 'An opportunity for all coders to become a better programmer.\r\n', 'Coding, Programming,code'),
(7, 'Code Editor', 'http://ideone.com/', 'A great Editor for all programming languages. Includes C, C++, Python, AWK, PHP, Jquery.', 'Code,code, Editor, Prograaming'),
(8, 'CodeChef - Wikipedia', 'https://en.wikipedia.org/wiki/CodeChef', 'CodeChef is a competitive programming website. It is a non-profit educational initiative of Directi, aimed at providing a platform for students, young software ...', 'Codechef'),
(9, 'CodeChef - YouTube', 'https://www.youtube.com/user/codechefofficial', 'An initiative by Directi, CodeChef for Schools aims to bring up a programming culture in high schools, to help school kids evolve as programmers. To know more ...', 'code,codechef,Codechef'),
(10, 'CodeChef | LinkedIn', 'https://www.linkedin.com/company/codechef', 'CodeChef was created as a platform to help programmers make it big in the world of algorithms, computer programming and programming contests. At CodeChef, ...', 'codechef,Codechef,code'),
(11, 'Online IT & Software Courses | Udemy', 'https://www.udemy.com/courses/it-and-software/', 'The ultimate online IT and software courses. Prepare for certification exams or ...', 'udemy,Udemy,udem'),
(12, 'Udemy Free Resource Center: Find Free Online Courses ...', 'https://www.udemy.com/courses/free/', 'Free courses from Udemy to help you make the most of your time, from working ...', 'udemy,Udemy,udem'),
(13, 'Teach Online - Share your knowledge with millions of ... - Udemy', 'https://www.udemy.com/teaching/', 'Create, host and sell courses in 5 simple steps on the worlds largest learning ...\r\n', 'udemy,Udemy,udem');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
