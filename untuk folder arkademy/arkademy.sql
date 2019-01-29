-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `categories` (`person_id`, `name`) VALUES
(1,	'nurhadi'),
(2,	'aldo'),
(3,	'dodi');

DROP TABLE IF EXISTS `hobbies`;
CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`),
  CONSTRAINT `hobbies_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `categories` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `hobbies` (`id`, `person_id`, `name`) VALUES
(1,	1,	'Bird watching'),
(2,	1,	'Martial arts'),
(3,	1,	'Archery'),
(4,	2,	'Hiking'),
(5,	2,	'Beekeeping'),
(6,	3,	'Book restoration');

-- 2019-01-29 08:36:09
