-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 09:16 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `role` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'A=Admin S=Student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123', 'A'),
(2, 'Sibasankar', 'sibasankar.bhoi2k@gmail.com', '', 'S'),
(3, 'sibasankar', 'sibasankar@globussoft.in', '', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `qestions`
--

CREATE TABLE `qestions` (
  `Q_no` int(10) NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optn_A` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optn_B` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optn_C` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optn_D` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diff_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `set_details`
--

CREATE TABLE `set_details` (
  `Q_no` int(10) NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optn_A` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optn_B` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optn_C` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optn_D` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diff_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `set_details`
--

INSERT INTO `set_details` (`Q_no`, `question`, `optn_A`, `optn_B`, `optn_C`, `optn_D`, `answer`, `diff_level`) VALUES
(1, 'Capital of india.', 'Delhi', 'Mumbai', 'kolkata', 'Bihar', 'Delhi', 'VeryEassy'),
(2, 'Virat Kohli Related to which Sports?', 'Chess', 'Badminton', 'Cricket', 'Hockey', 'Cricket', 'Eassy'),
(3, 'PM of Japan.', 'Shinzo Abe', 'Shin Abe', 'Li Keqiang', 'Lee Nak-yeon', 'Shinzo Abe', 'Medium'),
(4, 'Unit of flux', 'Hertz', 'weber', 'tesla', 'farad', 'weber', 'Hard'),
(5, 'Chlorophyll is a naturally occurring chelate compound in which central metal is', 'copper', 'magnesium', 'iron', 'calcium', 'magnesium', 'Medium'),
(6, 'Brass gets discoloured in air because of the presence of which of the following gases in air?', 'Oxygen', 'Hydrogen sulphide', 'Carbon dioxide', 'Nitrogen', 'Hydrogen sulphide', 'Hard'),
(7, 'Which of the following is a non metal that remains liquid at room temperature?', 'Phosphorous', 'Bromine', 'Chlorine', 'Helium', 'Bromine', 'Eassy'),
(8, 'Which of the following is used in pencils?', 'Graphite', 'Silicon', 'Charcoal', 'Phosphorous', 'Graphite', 'Medium'),
(9, 'Which of the following metals forms an amalgam with other metals?', 'Tin', 'Mercury', 'Lead', 'Zinc', 'Mercury', 'VeryEassy'),
(10, 'The Battle of Plassey was fought in', '1757', '1782', '1748', '1748', '1757', 'Eassy'),
(11, 'The territory of Porus who offered strong resistance to Alexander was situated between the rivers of', 'Sutlej and Beas', 'Jhelum and Chenab', 'Ravi and Chenab', 'Ganga and Yamuna', 'Jhelum and Chenab', 'Hard'),
(12, 'Under Akbar, the Mir Bakshi was required to look after', 'military affairs', 'the state treasury', 'the royal household', 'the land revenue system', 'military affairs', 'Eassy'),
(13, 'Tripitakas are sacred books of', 'Buddhists', 'Hindus', 'Jains', 'None of the above', 'Buddhists', 'Medium'),
(14, 'The trident-shaped symbol of Buddhism does not represent', 'Nirvana', 'Sangha', 'Buddha', 'Dhamma', 'Nirvana', 'Medium'),
(15, 'The theory of economic drain of India during British imperialism was propounded by', 'Jawaharlal Nehru', 'Dadabhai Naoroji', 'R.C. Dutt', 'M.K. Gandhi', 'Dadabhai Naoroji', 'Hard'),
(16, 'The treaty of Srirangapatna was signed between Tipu Sultan and', 'Robert Clive', 'Cornwallis', 'Dalhousie', 'Warren Hastings', 'Cornwallis', 'Eassy'),
(17, 'Through which one of the following, the king exercised his control over villages in the Vijayanagar Empire?', 'Dannayaka', 'Sumanta', 'Nayaka', 'Mahanayakacharya', 'Mahanayakacharya', 'Eassy'),
(18, 'To which of the following dynasties did King Bhoja, a great patron of literature and art, belong?', 'Karkota', 'Utpala', 'Paramara', 'Gurjara Pratihara', 'Paramara', 'VeryEassy'),
(19, 'Radiocarbon is produced in the atmosphere as a result of', 'collision between fast neutrons and nitrogen nuclei present in the atmosphere', 'action of ultraviolet light from the sun on atmospheric oxygen', 'action of solar radiations particularly cosmic rays on carbon dioxide present in the atmosphere', 'lightning discharge in atmosphere', 'collision between fast neutrons and nitrogen nuclei present in the atmosphere', 'Hard'),
(20, 'The absorption of ink by blotting paper involves', 'viscosity of ink', 'capillary action phenomenon', 'diffusion of ink through the blotting', 'siphon action', 'capillary action phenomenon', 'Medium'),
(21, 'Large transformers, when used for some time, become very hot and are cooled by circulating oil. The heating of the transformer is due to', 'the heating effect of current alone', 'hysteresis loss alone', 'both the heating effect of current and hysteresis loss', 'intense sunlight at noon', 'both the heating effect of current and hysteresis loss', 'Hard'),
(22, 'Nuclear sizes are expressed in a unit named', 'Fermi', 'angstrom', 'newton', 'tesla', 'Fermi', 'VeryEassy'),
(23, 'Mirage is due to', 'unequal heating of different parts of the atmosphere', 'magnetic disturbances in the atmosphere', 'depletion of ozone layer in the atmosphere', 'equal heating of different parts of the atmosphere', 'unequal heating of different parts of the atmosphere', 'Hard'),
(24, 'Stars appears to move from east to west because', 'all stars move from east to west', 'the earth rotates from west to east', 'the earth rotates from east to west', 'the background of the stars moves from west to east', 'the earth rotates from west to east', 'Medium'),
(25, 'First indian visited moon', 'Rakesh Sharma', 'A.P.J.Abdul Kalam', 'Niel Armstrong', 'Manmoham Singh', 'Rakesh Sharma', 'Medium'),
(26, 'Who is the president of INDIA ?', 'N.modi', 'Ram Nath Kovind', 'Nitesh Kumar', 'A.Kejriwal', 'Kovind', 'VeryEassy'),
(27, 'Who scored first double hundred in ODI\'s ?', 'V.Sehwag', 'Rohit Sharma', 'Sachin Tendulkar', 'C.Gayl', 'Sachin Tendulkar', 'Eassy'),
(28, 'First person to score 400+ run in test match', 'S.N.Chandrapaul', 'V.Sehwag', 'R.Pointing', 'B.C.Lara', 'B.C.Lara', 'Medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qestions`
--
ALTER TABLE `qestions`
  ADD PRIMARY KEY (`Q_no`);

--
-- Indexes for table `set_details`
--
ALTER TABLE `set_details`
  ADD PRIMARY KEY (`Q_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qestions`
--
ALTER TABLE `qestions`
  MODIFY `Q_no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `set_details`
--
ALTER TABLE `set_details`
  MODIFY `Q_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
