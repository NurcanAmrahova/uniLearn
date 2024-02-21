-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table unilearn.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- Dumping data for table unilearn.admins: ~1 rows (approximately)
INSERT INTO `admins` (`id`, `username`, `password`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- Dumping structure for table unilearn.appeals
CREATE TABLE IF NOT EXISTS `appeals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `phone` varchar(50) NOT NULL DEFAULT '0',
  `comment` varchar(500) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- Dumping data for table unilearn.appeals: ~0 rows (approximately)

-- Dumping structure for table unilearn.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- Dumping data for table unilearn.contact: ~1 rows (approximately)
INSERT INTO `contact` (`street`, `city`, `country`, `email`, `phone`, `instagram`, `twitter`, `facebook`) VALUES
	('Azadliq prospect 16/21', 'Baku City', 'Azerbaijan Republic', 'info@adnsu.edu.az', '+994509709585', 'adnsu_official', 'ADNSU1', 'Azii1920.ADNSU');

-- Dumping structure for table unilearn.counter
CREATE TABLE IF NOT EXISTS `counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT 0,
  `icon` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- Dumping data for table unilearn.counter: ~4 rows (approximately)
INSERT INTO `counter` (`id`, `name`, `count`, `icon`) VALUES
	(1, 'Course', 6, 'book'),
	(2, 'Students', 100, 'users'),
	(3, 'Lections', 33, 'pen'),
	(4, 'Events', 52, 'calendar-days');

-- Dumping structure for table unilearn.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `teacher` varchar(50) NOT NULL DEFAULT '0',
  `about` varchar(500) NOT NULL DEFAULT '0',
  `price` varchar(50) NOT NULL DEFAULT '0',
  `image` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- Dumping data for table unilearn.courses: ~6 rows (approximately)
INSERT INTO `courses` (`id`, `name`, `teacher`, `about`, `price`, `image`) VALUES
	(1, 'Cyber Security Course', 'Jenny Doe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, natus!', '300', 'course1.jpg'),
	(2, 'Front-End Course', 'John Doe', 'HTML, CSS , BOOTSTRAP , SASS, JS , REACT.JS , NEXT.JS', '200', 'course2.jpg'),
	(3, 'Back-End Course', 'James Doe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, natus!', '200', 'course3.jpg'),
	(4, 'Help Desk Course', 'Jade Doe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, natus!', '200', 'course4.jpg'),
	(5, 'Data Analytic Course', 'Lucy Doe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, natus!', '200', 'course5.jpg'),
	(6, 'Graphic Design Course', 'Jenny Doe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, natus!', '350', 'course6.jpg');

-- Dumping structure for table unilearn.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- Dumping data for table unilearn.messages: ~0 rows (approximately)

-- Dumping structure for table unilearn.subscribers
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- Dumping data for table unilearn.subscribers: ~0 rows (approximately)

-- Dumping structure for table unilearn.teachers
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `job` varchar(100) NOT NULL DEFAULT '0',
  `about` varchar(100) NOT NULL DEFAULT '0',
  `instagram` varchar(100) NOT NULL DEFAULT '0',
  `facebook` varchar(100) NOT NULL DEFAULT '0',
  `twitter` varchar(100) NOT NULL DEFAULT '0',
  `image` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- Dumping data for table unilearn.teachers: ~6 rows (approximately)
INSERT INTO `teachers` (`id`, `name`, `job`, `about`, `instagram`, `facebook`, `twitter`, `image`, `color`) VALUES
	(1, 'Jenny Doe', 'Cyber Security Specialist', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, iste!', '', '', '', '2550-teacher1.jpg', 'F27C66'),
	(2, 'John Doe', 'Front-End Developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, iste! s', '', '', '', 'teacher2.jpg', 'eeb973'),
	(3, 'James Doe', 'Back-end Developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, iste!', '', '', '', 'teacher3.jpg', '18bb7c'),
	(4, 'Jade Doe', 'Help Desk Specialist', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, iste!', '', '', '', 'teacher4.jpg', '2d3339e7'),
	(5, 'Lucy Doe', 'Data Analytic Specialist', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, iste!', '', '', '', 'teacher5.jpg', 'b0b0b0'),
	(6, 'Max Doe', 'Graphic designer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, iste!', '', '', '', 'teacher6.jpg', '4bb4bc');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
