-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for php_crud
CREATE DATABASE IF NOT EXISTS `php_crud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `php_crud`;

-- Dumping structure for table php_crud.crud
CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table php_crud.crud: ~4 rows (approximately)
/*!40000 ALTER TABLE `crud` DISABLE KEYS */;
INSERT INTO `crud` (`id`, `first_name`, `last_name`, `gender`, `age`, `email_id`) VALUES
	(1, 'Shamsul', 'Huda', 'male', '23', 'huda@d.com'),
	(5, 'Abdullah-al', 'Kafi', 'male', '24', 'kafi@d.com'),
	(6, 'Robiul', 'Islam', 'male', '25', 'robi@gmail.com'),
	(7, 'Dola', 'Rani', 'female', '22', 'dola@yahoo.com');
/*!40000 ALTER TABLE `crud` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
