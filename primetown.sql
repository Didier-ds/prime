-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 09:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primetown`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `applicant_job_title` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `day_phone` varchar(255) NOT NULL,
  `even_phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `employment_desired` varchar(255) NOT NULL,
  `hours_desired` varchar(255) NOT NULL,
  `registration_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `applicant_id`, `applicant_job_title`, `firstname`, `lastname`, `middlename`, `address`, `city`, `state`, `zipcode`, `day_phone`, `even_phone`, `email`, `language`, `employment_desired`, `hours_desired`, `registration_number`) VALUES
(5, '615ff2f04250c', 'qrwtdgfhdd', 'didier', '2333jdjd33', 'erhdtyjtdrs', '+1 6313618667', '+1 6313618667', 'didiersenou64@gmail.com', 'English', '7 Grandview Lane', 'smithtown', 'New York', '11787', 'Part Time', '2 - 4 hours', '4546uterhyegagfdhyji9po;ugiulgtfdury'),
(6, '615ff5c15a89c', 'qrwtdgfhdd', 'didier', '2333jdjd33', 'erhdtyjtdrs', '+1 6313618667', '+1 6313618667', 'didiersenou64@gmail.com', 'English', '7 Grandview Lane', 'smithtown', 'New York', '11787', 'Part Time', '2 - 4 hours', '4546uterhyegagfdhyji9po;ugiulgtfdury');

-- --------------------------------------------------------

--
-- Table structure for table `confidentiality`
--

CREATE TABLE `confidentiality` (
  `id` int(11) NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `investigation` varchar(255) NOT NULL,
  `process` varchar(255) NOT NULL,
  `termination` varchar(255) NOT NULL,
  `rules` varchar(255) NOT NULL,
  `valid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confidentiality`
--

INSERT INTO `confidentiality` (`id`, `applicant_id`, `investigation`, `process`, `termination`, `rules`, `valid`) VALUES
(9, '615ff2f04250c', 'didier', 'didier', 'didier', 'didier', 'didier'),
(10, '615ff5c15a89c', 'didier', 'didier', 'didier', 'didier', 'didier');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'susan frank', 'didiersenou64@gmail.com', '6313618667', 'Domain purchase', 'gdjjytdyfjfkjfkutffr');

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `id` int(11) NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `convicted_misdeanor` varchar(255) NOT NULL,
  `convicted_felony` varchar(255) NOT NULL,
  `fingerprints` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`id`, `applicant_id`, `convicted_misdeanor`, `convicted_felony`, `fingerprints`) VALUES
(6, '615ff2f04250c', 'No', 'No', 'No'),
(7, '615ff5c15a89c', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_location` varchar(255) NOT NULL,
  `is_a_schoolGraduate` varchar(255) NOT NULL,
  `collegeName` varchar(255) NOT NULL,
  `collegeLocation` varchar(255) NOT NULL,
  `is_a_collegeGraduate` varchar(255) NOT NULL,
  `college_degree` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `applicant_id`, `school_name`, `school_location`, `is_a_schoolGraduate`, `collegeName`, `collegeLocation`, `is_a_collegeGraduate`, `college_degree`, `others`) VALUES
(4, '615ff2f04250c', ',sflohdhbenpohy', 'Nebraska', 'Yes', 'zdseryti78uo0', 'New York', 'No', 'fghgtru8ti8uy', 'trsuy09-7r6e544w5'),
(5, '615ff5c15a89c', ',sflohdhbenpohy', 'Nebraska', 'Yes', 'zdseryti78uo0', 'New York', 'No', 'fghgtru8ti8uy', 'trsuy09-7r6e544w5');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(11) NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `day_phone` varchar(255) NOT NULL,
  `even_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `applicant_id`, `name`, `relationship`, `day_phone`, `even_phone`) VALUES
(15, '615ff2f04250c', 'didier 2333jdjd33', 'erytuiy809-0098yt76', '+1 6313618667', '+1 6313618667'),
(16, '615ff2f04250c', 'susan frank', 'dskyuil;op9-09876', '+1 6313618667', '+1 6313618667'),
(17, '615ff5c15a89c', 'didier 2333jdjd33', 'erytuiy809-0098yt76', '+1 6313618667', '+1 6313618667'),
(18, '615ff5c15a89c', 'susan frank', 'dskyuil;op9-09876', '+1 6313618667', '+1 6313618667');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `employer_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `employed_from` varchar(255) NOT NULL,
  `employed_to` varchar(255) NOT NULL,
  `hours_perWeek` varchar(255) NOT NULL,
  `salary_perWeek` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `describe_work` varchar(255) NOT NULL,
  `reason_leaving` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `applicant_id`, `employer_name`, `location`, `employed_from`, `employed_to`, `hours_perWeek`, `salary_perWeek`, `job_title`, `supervisor`, `number`, `describe_work`, `reason_leaving`) VALUES
(15, '615ff2f04250c', 'kdfrtrihi', 'evgvrkyhtry', '10/03/2021', '10/14/2021', '2hrs', '3000', 'eftgryhyjukoiyt', 'evhjyknumio;p[', 'cdstjkyuliop', 'wadsgfhjokp[p\\\r\nlpipiyetrwqerwetrytiup9=p[[-i08up76uyet', 'sadtriyuop[uyertwqrreyiupouytersawASFGHKJ;LHUYTU5R76809'),
(16, '615ff2f04250c', 'ertyuio', 'dfghjkl', '10/10/2021', '10/22/2021', '3456789', 'rtyuio5678', 'dfgthjukilortyui', '4567890567890', '567890-34567890', 'SRDTRYTIU[OPUYTERTWRQERT[P\r\nOIUERYTWQREPOI', 'SEDRFYUHKPO]JOUGIYDTESARWEDRSIUP[IUOIYTRDS'),
(17, '615ff2f04250c', 'ertyuiop', 'dfghjkl;', '10/15/2021', '10/13/2021', '4567890ghjuk', '34567890-', 'fghjklghjkl;', 'dfghjkl;\'cfvghjkl;', '4567890-=', 'SDRTIY8UOIP9O[0PIOUTYREWQERETOUP[]O\\POIHGUFIYTUDRTSEARSTIYOUIPO', 'TER6789[0-I[U9OITEasrtyuip[][p[]oi[ytrfadsASRTFUIOUPHIPHOGUTREARASYUIOP[KOJPIOUYTUYDRTTTTTTTTTTTTTTTTTTTTF'),
(18, '615ff5c15a89c', 'kdfrtrihi', 'evgvrkyhtry', '10/03/2021', '10/14/2021', '2hrs', '3000', 'eftgryhyjukoiyt', 'evhjyknumio;p[', 'cdstjkyuliop', 'wadsgfhjokp[p\\\r\nlpipiyetrwqerwetrytiup9=p[[-i08up76uyet', 'sadtriyuop[uyertwqrreyiupouytersawASFGHKJ;LHUYTU5R76809'),
(19, '615ff5c15a89c', 'ertyuio', 'dfghjkl', '10/10/2021', '10/22/2021', '3456789', 'rtyuio5678', 'dfgthjukilortyui', '4567890567890', '567890-34567890', 'SRDTRYTIU[OPUYTERTWRQERT[P\r\nOIUERYTWQREPOI', 'SEDRFYUHKPO]JOUGIYDTESARWEDRSIUP[IUOIYTRDS'),
(20, '615ff5c15a89c', 'ertyuiop', 'dfghjkl;', '10/15/2021', '10/13/2021', '4567890ghjuk', '34567890-', 'fghjklghjkl;', 'dfghjkl;\'cfvghjkl;', '4567890-=', 'SDRTIY8UOIP9O[0PIOUTYREWQERETOUP[]O\\POIHGUFIYTUDRTSEARSTIYOUIPO', 'TER6789[0-I[U9OITEasrtyuip[][p[]oi[ytrfadsASRTFUIOUPHIPHOGUTREARASYUIOP[KOJPIOUYTUYDRTTTTTTTTTTTTTTTTTTTTF');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `id` int(11) NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `lift_lbs` varchar(100) NOT NULL,
  `mental_limit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `applicant_id`, `lift_lbs`, `mental_limit`) VALUES
(7, '615ff2f04250c', 'Yes', 'No'),
(8, '615ff5c15a89c', 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `day_phone` varchar(255) NOT NULL,
  `even_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `applicant_id`, `name`, `relationship`, `day_phone`, `even_phone`) VALUES
(12, '615ff2f04250c', 'susan frank', 'idfidstogveqy3rchr', '+1 6313618667', '+1 6313618667'),
(13, '615ff2f04250c', 'susan frank', 'rwwhe6tqretq', '+1 6313618667', '+1 6313618667'),
(14, '615ff2f04250c', 'didier 2333jdjd33', '4t3qfgretrhysawrge4qf', '+1 6313618667', '+1 6313618667'),
(15, '615ff5c15a89c', 'susan frank', 'idfidstogveqy3rchr', '+1 6313618667', '+1 6313618667'),
(16, '615ff5c15a89c', 'susan frank', 'rwwhe6tqretq', '+1 6313618667', '+1 6313618667'),
(17, '615ff5c15a89c', 'didier 2333jdjd33', '4t3qfgretrhysawrge4qf', '+1 6313618667', '+1 6313618667');

-- --------------------------------------------------------

--
-- Table structure for table `signature`
--

CREATE TABLE `signature` (
  `id` int(11) NOT NULL,
  `applicant_id` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signature`
--

INSERT INTO `signature` (`id`, `applicant_id`, `signature`, `date`) VALUES
(5, '615ff2f04250c', 'Senou', ''),
(6, '615ff5c15a89c', 'Senou', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `registered_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `registered_on`) VALUES
(1, 'susan frank', 'didiersenou64@gmail.com', '$2y$10$7jyG6xBVnZ/yncFURGtR3uZ7EifBHTup0g8MC.nUZFnoxwRHbdthy', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confidentiality`
--
ALTER TABLE `confidentiality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signature`
--
ALTER TABLE `signature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `confidentiality`
--
ALTER TABLE `confidentiality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `signature`
--
ALTER TABLE `signature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
