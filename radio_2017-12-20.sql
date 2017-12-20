# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.33)
# Database: radio
# Generation Time: 2017-12-20 06:48:54 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table album
# ------------------------------------------------------------

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table config_var
# ------------------------------------------------------------

DROP TABLE IF EXISTS `config_var`;

CREATE TABLE `config_var` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `param` varchar(255) DEFAULT NULL,
  `val` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `config_var` WRITE;
/*!40000 ALTER TABLE `config_var` DISABLE KEYS */;

INSERT INTO `config_var` (`id`, `param`, `val`, `created_at`, `updated_at`)
VALUES
	(1,'visi',NULL,NULL,NULL),
	(2,'status_broadcast',NULL,NULL,NULL),
	(3,'misi',NULL,NULL,NULL),
	(4,'about',NULL,NULL,NULL);

/*!40000 ALTER TABLE `config_var` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table jenis_pesan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jenis_pesan`;

CREATE TABLE `jenis_pesan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `jenis_pesan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table kategori
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  `thumbnail` text,
  `deskripsi` text,
  `hari` varchar(100) DEFAULT NULL,
  `program_start_ina` time DEFAULT NULL,
  `program_end_ina` time DEFAULT NULL,
  `program_start_jpn` time DEFAULT NULL,
  `program_end_jpn` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;

INSERT INTO `kategori` (`id`, `kategori`, `thumbnail`, `deskripsi`, `hari`, `program_start_ina`, `program_end_ina`, `program_start_jpn`, `program_end_jpn`)
VALUES
	(1,'GENKI','program.jpg','Genki','Senin','10:00:00','10:00:00','10:00:00','10:00:00'),
	(2,'GIJUTSU','program-1.jpg','Gijutsu','Selasa','10:00:00','10:00:00','10:00:00','10:00:00');

/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kontak
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `jenis_pesan` int(2) DEFAULT NULL,
  `subject` text,
  `konten` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `kontak` WRITE;
/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;

INSERT INTO `kontak` (`id`, `email`, `jenis_pesan`, `subject`, `konten`, `created_at`)
VALUES
	(1,'bassamtiano',1,'Pesan','Pesan','2017-12-05 00:00:00'),
	(2,'renaufalgi',1,'Pesan','Pesan','2017-12-05 00:00:00'),
	(3,'irnawan',1,'Pesan','Pesan','2017-12-05 00:00:00'),
	(4,'bassamtiano',1,'Pesan','Pesan','2017-12-05 00:00:00'),
	(5,'renaufalgi',1,'Pesan','Pesan','2017-12-05 00:00:00'),
	(6,'bassamtiano',1,'Pesan','Pesan','2017-12-05 00:00:00'),
	(7,'irnawan',1,'Pesan','Pesan','2017-12-05 00:00:00'),
	(8,'bassamtiano',1,'Pesan','Pesan','2017-12-05 00:00:00'),
	(9,'bassamtiano',1,'Pesan','Pesan','2017-12-05 00:00:00'),
	(10,'bassamtiano',1,'Pesan','Pesan','2017-12-05 00:00:00');

/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_sender` int(11) DEFAULT NULL,
  `id_reciever` int(11) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `konten` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;

INSERT INTO `messages` (`id`, `id_sender`, `id_reciever`, `type`, `konten`, `created_at`, `updated_at`)
VALUES
	(1,NULL,NULL,NULL,'Test Broadcast',NULL,NULL);

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table penyiar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `penyiar`;

CREATE TABLE `penyiar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` text,
  `about` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `penyiar` WRITE;
/*!40000 ALTER TABLE `penyiar` DISABLE KEYS */;

INSERT INTO `penyiar` (`id`, `user_id`, `name`, `photo`, `about`, `created_at`, `updated_at`)
VALUES
	(1,'bassamtiano','bassam','photo.jpg',NULL,NULL,NULL),
	(2,'renaufalgi','as','photo-2.jpg',NULL,NULL,NULL);

/*!40000 ALTER TABLE `penyiar` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pictures
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pictures`;

CREATE TABLE `pictures` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `album_id` datetime DEFAULT NULL,
  `url` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table podcast
# ------------------------------------------------------------

DROP TABLE IF EXISTS `podcast`;

CREATE TABLE `podcast` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table program
# ------------------------------------------------------------

DROP TABLE IF EXISTS `program`;

CREATE TABLE `program` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu_start_jpn` time DEFAULT NULL,
  `waktu_end_jpn` time DEFAULT NULL,
  `waktu_start_ina` time DEFAULT NULL,
  `waktu_end_ina` time DEFAULT NULL,
  `thumbnail` text,
  `judul` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `artikel` text,
  `podcast` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `program` WRITE;
/*!40000 ALTER TABLE `program` DISABLE KEYS */;

INSERT INTO `program` (`id`, `id_kategori`, `tanggal`, `waktu_start_jpn`, `waktu_end_jpn`, `waktu_start_ina`, `waktu_end_ina`, `thumbnail`, `judul`, `status`, `artikel`, `podcast`, `created_at`, `updated_at`)
VALUES
	(1,1,'2017-12-10','10:00:00','10:00:00','10:00:00','10:00:00','program-1.jpg','Program 1',1,NULL,NULL,'2017-12-10 16:13:00',NULL),
	(2,2,'2017-12-05','10:00:00','10:00:00','10:00:00','10:00:00','program-1.jpg','Program 2',2,NULL,NULL,NULL,NULL),
	(3,1,'2017-12-04','10:00:00','10:00:00','10:00:00','10:00:00','program-1.jpg','Program 3',1,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `program` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table program_penyiar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `program_penyiar`;

CREATE TABLE `program_penyiar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_program` int(11) DEFAULT NULL,
  `id_penyiar` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `program_penyiar` WRITE;
/*!40000 ALTER TABLE `program_penyiar` DISABLE KEYS */;

INSERT INTO `program_penyiar` (`id`, `id_program`, `id_penyiar`, `created_at`, `updated_at`)
VALUES
	(1,1,1,NULL,NULL),
	(2,1,2,NULL,NULL),
	(3,3,1,NULL,NULL),
	(4,3,1,NULL,NULL),
	(5,2,2,NULL,NULL);

/*!40000 ALTER TABLE `program_penyiar` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
