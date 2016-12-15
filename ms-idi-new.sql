-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.1.19-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных ms-idi_new
CREATE DATABASE IF NOT EXISTS `ms-idi_new` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ms-idi_new`;

-- Дамп структуры для таблица ms-idi_new.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы ms-idi_new.categories: ~0 rows (приблизительно)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Partnership', '2016-11-07 19:57:18', '2016-11-07 19:57:18'),
	(2, 'ERP', '2016-11-22 18:55:45', '2016-11-22 18:55:45');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Дамп структуры для таблица ms-idi_new.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы ms-idi_new.migrations: ~0 rows (приблизительно)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица ms-idi_new.pages
DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы ms-idi_new.pages: ~0 rows (приблизительно)
DELETE FROM `pages`;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Дамп структуры для таблица ms-idi_new.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `content` text,
  `image` text,
  `url` text,
  `category_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы ms-idi_new.posts: ~0 rows (приблизительно)
DELETE FROM `posts`;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `name`, `content`, `image`, `url`, `category_id`, `created_at`, `updated_at`) VALUES
	(1, 'Exigen', 'Exigen', '../images/case-studies/opal-transfer.png', 'http://localhost:8000/case-studies/exigen', 1, '2016-11-07 19:57:53', '2016-11-28 19:28:27'),
	(2, 'Opal Bop', 'Opal', '../images/case-studies/opal-transfer.png', 'http://localhost:8000/case-studies/opex-bop', 2, '2016-11-22 18:55:10', '2016-11-28 19:38:22'),
	(3, 'Opal Online', 'Opal Online', '../images/case-studies/opal-transfer.png', 'http://localhost:8000/case-studies/opal-online', NULL, '2016-11-28 19:38:55', '2016-11-28 19:39:19'),
	(4, 'Opal Mobile', 'Opal Mobile', '../images/case-studies/opal-transfer.png', '', NULL, '2016-11-28 19:39:50', '2016-11-28 19:41:27'),
	(5, 'Web site - virtual museum', 'Virtual museum', '../images/case-studies/opal-transfer.png', 'http://localhost/case-studies/future-of-museums', NULL, '2016-11-28 19:42:05', '2016-11-28 19:42:45');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
