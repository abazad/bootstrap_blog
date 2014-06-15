# ************************************************************
# Sequel Pro SQL dump
# Версия 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Адрес: 127.0.0.1 (MySQL 5.5.9)
# Схема: blog
# Время создания: 2012-10-15 21:16:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы comment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `entry_id` (`entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;

INSERT INTO `comment` (`id`, `entry_id`, `date`, `author`, `content`)
VALUES
	(5,3,1339450249,'youROCK','Other test comment');

/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы entry
# ------------------------------------------------------------

DROP TABLE IF EXISTS `entry`;

CREATE TABLE `entry` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `entry` WRITE;
/*!40000 ALTER TABLE `entry` DISABLE KEYS */;

INSERT INTO `entry` (`id`, `author`, `date`, `header`, `content`)
VALUES
	(3,'youROCK',1339449804,'Test 1','Привет мир! 111\r\n<b>Привет ляляля!</b>\r\n\r\n\r\nОчень даже неплохо хехехехее\r\nОлоло!!!'),
	(4,'youROCK',1350334157,'Изучаем git','Пока что мы изучили команды git add, git commit, git push. Очень интересно :)!'),
	(5,'Test',1350334199,'Теоретический культ личности: предпосылки и развитие','Политическое учение Августина, на первый взгляд, представляет собой политический процесс в современной России, последнее особенно ярко выражено в ранних работах В.И.Ленина. Вопреки распространенным утверждениям, структура политической науки очевидна не для всех. Правовое государство определяет плюралистический континентально-европейский тип политической культуры, если взять за основу только формально-юридический аспект. Культ личности важно формирует англо-американский тип политической культуры, хотя на первый взгляд, российские власти тут ни при чем. Континентально-европейский тип политической культуры неравномерен. Правовое государство, с другой стороны, отражает субъект власти, впрочем, это несколько расходится с концепцией Истона.');

/*!40000 ALTER TABLE `entry` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;