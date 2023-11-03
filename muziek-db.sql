-- --------------------------------------------------------
-- Host:                         localhost
-- Server versie:                11.1.2-MariaDB-1:11.1.2+maria~ubu2204 - mariadb.org binary distribution
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Versie:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumpen data van tabel musicSingles.singles: ~10 rows (ongeveer)
INSERT INTO `singles` (`id`, `titel`, `artist`, `genre`, `duration`, `releas_date`) VALUES
	(2, 'nummer 2', 'artiest 2', 'genre 2', '00:02:30', '2020-10-20'),
	(3, 'nummer 3', 'artiest 3', 'genre 1', '00:04:30', '2021-10-20'),
	(4, 'nummer 4', 'artiest 1', 'genre 2', '00:03:30', '2020-10-20'),
	(5, 'nummer 5', 'artiest 2', 'genre 1', '00:04:30', '2018-10-20'),
	(6, 'nummer 6', 'artiest 3', 'genre 2', '00:03:30', '2015-09-20'),
	(8, 'nummer 8', 'artiest 2', 'genre 2', '00:03:34', '2021-09-19'),
	(1, 'nummer 1', 'artiest 1', 'genre 1', '00:02:30', '2023-10-20'),
	(9, 'nummer 9', 'artiest 3', 'genre 1', '00:03:26', '2017-05-19'),
	(10, 'nummer 10', 'artiest 1', 'genre 2', '00:06:30', '2019-07-20'),
	(7, 'nummer 7', 'artiest 1', 'genre 1', '00:03:30', '2017-08-18');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
