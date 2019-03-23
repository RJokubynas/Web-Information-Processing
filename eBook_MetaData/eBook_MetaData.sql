-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2019 at 03:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db3`
--

-- --------------------------------------------------------

--
-- Table structure for table `eBook_MetaData`
--

CREATE TABLE `eBook_MetaData` (
  `id` int(11) NOT NULL,
  `creator` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `type` varchar(128) NOT NULL,
  `identifier` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `language` varchar(128) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eBook_MetaData`
--

INSERT INTO `eBook_MetaData` (`id`, `creator`, `title`, `type`, `identifier`, `date`, `language`, `description`) VALUES
(1, 'Douglas Adams', 'The Hitchhiker\'s Guide to the Galaxy', 'Fiction: Sci-Fi', 'ISBN 10: 0345391802', '1995-05-12', 'en-US', 'Join Douglas Adams\'s hapless hero Arthur Dent as he travels the galaxy with his intrepid pal Ford Prefect, getting into horrible messes and generally wreaking hilarious havoc. Dent is grabbed from Earth moments before a cosmic construction team obliterates the planet to build a freeway. You\'ll never read funnier science fiction; Adams is a master of intelligent satire, barbed wit, and comedic dialogue. The Hitchhiker\'s Guide is rich in comedic detail and thought-provoking situations and stands up to multiple reads. Required reading for science fiction fans, this book (and its follow-ups) is also sure to please fans of Monty Python, Terry Pratchett\'s Discworld series, and British sitcoms.'),
(2, 'Richard P. Feynman', '\'Surely You\'re Joking, Mr Feynman!\'', 'Non-Fiction: Education', 'ISBN-13: 978-0613181464 ', '1997-04-01', 'en-US', 'Dr. Feynmanâ€™s delight with life shines through everything--nothing gets him down for long. The reasons for this attitude are his ever-present compulsion to learn and discover, his urge to follow his insatiable curiosity (about everything!) wherever it might lead, his willingness to simply state whatever he thinks when asked, and his refusal to always take life so seriously. It is evident that Dr. Feynman has achieved what many can only dream of--living a meaningful and accomplished life while still being able to find absolute joy and fun in so much of how we spend that life.'),
(3, 'Seamus Deane', 'Reading in the Dark', 'Fiction: Drama', 'ISBN-10: 0375700234', '1998-02-24', 'en-IRE', 'A New York Times Notable Book Winner of the Guardian Fiction Prize Winner of the Irish Times Fiction Award and International Award \"A swift and masterful transformation of family griefs and political violence into something at once rhapsodic and heartbreaking. If Issac Babel had been born in Derry, he might have written this sudden, brilliant book.\"'),
(4, 'Sharon Wegscheider-Cruse ', 'Apprendre Ã  s\'aimer : DÃ©velopper son estime de soi', 'Non-Fiction: Education', 'ISBN-13: 978-2890923201', '2004-01-01', 'fr-CA', 'SHARON WEGSCHEIDER-CRUSE est prÃ©sidente de ONSITE Training and Consulting, Inc. Pour aborder les problÃ¨mes exposÃ©s dans ce livre, elle a dÃ©veloppÃ© deux programmes Ã  temps complet. L\'un consiste en un traitement pour la codÃ©pendance ; l\'autre, en un atelier sur la reconstitution de la famille. Elle a Ã©galement Ã©crit quatre autres ouvrages. De plus, elle est prÃ©sidente du conseil d\'administration et membre fondateur de National Association for Children of Alcoholics (NACoA) (Association nationale pour les enfants d\'alcooliques). '),
(5, 'Jacques Jaffelin', 'Le Promeneur d\'Einstein', 'Non-Fiction: Science', 'ISBN-10: 2204043206', '1991-06-05', 'fr-FR', 'Cet essai invite Ã  tenter l\'expÃ©rience de la Â«spÃ©culation hardieÂ» rÃ©clamÃ©e par Einstein. Mettant en scÃ¨ne N\'Guo van Allen, un physicien prÃ©occupÃ© par la fragmentation des disciplines scientifiques, closes sur elles-mÃªmes et souvent exclusives les unes des autres, l\'auteur prÃ©sente les problÃ¨mes fondamentaux que pose la construction d\'une logique gÃ©nÃ©rale basÃ©e sur la complexification croissante. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eBook_MetaData`
--
ALTER TABLE `eBook_MetaData`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eBook_MetaData`
--
ALTER TABLE `eBook_MetaData`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
