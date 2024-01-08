/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - db_proyek_dishub
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_proyek_dishub` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_proyek_dishub`;

/*Table structure for table `channels` */

DROP TABLE IF EXISTS `channels`;

CREATE TABLE `channels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255) NOT NULL,
  `DESCRIPTION` text DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `content_type` varchar(255) NOT NULL,
  `suscribe` int(11) DEFAULT NULL,
  `followers` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `channels` */

insert  into `channels`(`id`,`NAME`,`DESCRIPTION`,`city`,`country`,`gender`,`content_type`,`suscribe`,`followers`,`created_at`,`updated_at`) values
(1,'Tech Explorers','Exploring the latest in technology','San Francisco','USA','Mixed','Technology',5000,20000,'2024-01-04 15:51:57','2024-01-04 15:51:57'),
(2,'Travel Adventures','Discovering new places around the world','Paris','France','Mixed','Travel',3000,15000,'2024-01-04 15:51:57','2024-01-04 15:51:57'),
(3,'Foodies Delight','A journey through delicious cuisines','New York','USA','Mixed','Food',7000,25000,'2024-01-04 15:51:57','2024-01-04 15:51:57'),
(4,'Fitness Freaks','Get fit and stay healthy','London','UK','Mixed','Fitness',4000,18000,'2024-01-04 15:51:57','2024-01-04 15:51:57'),
(5,'Music Mania','Exploring the world of music','Los Angeles','USA','Mixed','Music',6000,22000,'2024-01-04 15:51:57','2024-01-04 15:51:57'),
(6,'Fashion Forward','The latest trends in fashion','Milan','Italy','Mixed','Fashion',4500,19000,'2024-01-04 15:51:57','2024-01-04 15:51:57'),
(7,'Gaming Gurus','Mastering the gaming universe','Tokyo','Japan','Mixed','Gaming',5500,21000,'2024-01-04 15:51:57','2024-01-04 15:51:57'),
(8,'Science Explained','Unraveling the mysteries of science','Berlin','Germany','Mixed','Science',3500,17000,'2024-01-04 15:51:57','2024-01-04 15:51:57'),
(9,'Artistic Vibes','Celebrating creativity in all its forms','Barcelona','Spain','Mixed','Art',5000,20000,'2024-01-04 15:51:57','2024-01-04 15:51:57'),
(10,'Nature Lovers','Connecting with the beauty of nature','Sydney','Australia','Mixed','Nature',6500,23000,'2024-01-04 15:51:57','2024-01-04 15:51:57'),
(11,'Tech Explorers','Exploring the latest in technology','San Francisco','USA','Mixed','Technology',5000,20000,'2024-01-04 15:52:36','2024-01-04 15:52:36'),
(12,'Travel Adventures','Discovering new places around the world','Paris','France','Mixed','Travel',3000,15000,'2024-01-04 15:52:36','2024-01-04 15:52:36'),
(13,'Foodies Delight','A journey through delicious cuisines','New York','USA','Mixed','Food',7000,25000,'2024-01-04 15:52:36','2024-01-04 15:52:36'),
(14,'Fitness Freaks','Get fit and stay healthy','London','UK','Mixed','Fitness',4000,18000,'2024-01-04 15:52:36','2024-01-04 15:52:36'),
(15,'Music Mania','Exploring the world of music','Los Angeles','USA','Mixed','Music',6000,22000,'2024-01-04 15:52:36','2024-01-04 15:52:36'),
(16,'Fashion Forward','The latest trends in fashion','Milan','Italy','Mixed','Fashion',4500,19000,'2024-01-04 15:52:36','2024-01-04 15:52:36'),
(17,'Gaming Gurus','Mastering the gaming universe','Tokyo','Japan','Mixed','Gaming',5500,21000,'2024-01-04 15:52:36','2024-01-04 15:52:36'),
(18,'Science Explained','Unraveling the mysteries of science','Berlin','Germany','Mixed','Science',3500,17000,'2024-01-04 15:52:36','2024-01-04 15:52:36'),
(19,'Artistic Vibes','Celebrating creativity in all its forms','Barcelona','Spain','Mixed','Art',5000,20000,'2024-01-04 15:52:36','2024-01-04 15:52:36'),
(20,'Nature Lovers','Connecting with the beauty of nature','Sydney','Australia','Mixed','Nature',6500,23000,'2024-01-04 15:52:36','2024-01-04 15:52:36'),
(21,'Tech Explorers','Exploring the latest in technology','San Francisco','USA','Mixed','Technology',5000,20000,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(22,'Travel Adventures','Discovering new places around the world','Paris','France','Mixed','Travel',3000,15000,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(23,'Foodies Delight','A journey through delicious cuisines','New York','USA','Mixed','Food',7000,25000,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(24,'Fitness Freaks','Get fit and stay healthy','London','UK','Mixed','Fitness',4000,18000,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(25,'Music Mania','Exploring the world of music','Los Angeles','USA','Mixed','Music',6000,22000,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(26,'Fashion Forward','The latest trends in fashion','Milan','Italy','Mixed','Fashion',4500,19000,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(27,'Gaming Gurus','Mastering the gaming universe','Tokyo','Japan','Mixed','Gaming',5500,21000,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(28,'Science Explained','Unraveling the mysteries of science','Berlin','Germany','Mixed','Science',3500,17000,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(29,'Artistic Vibes','Celebrating creativity in all its forms','Barcelona','Spain','Mixed','Art',5000,20000,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(30,'Nature Lovers','Connecting with the beauty of nature','Sydney','Australia','Mixed','Nature',6500,23000,'2024-01-04 15:53:07','2024-01-04 15:53:07');

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `COMMENT` varchar(1000) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `content_id` (`content_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `comments` */

insert  into `comments`(`id`,`COMMENT`,`STATUS`,`created_at`,`updated_at`,`user_id`,`content_id`) values
(1,'Great tutorial! Very informative.','Approved','2024-01-04 15:53:07','2024-01-04 15:53:07',1,1),
(2,'I love Paris! Such a beautiful city.','Pending','2024-01-04 15:53:07','2024-01-04 15:53:07',2,2),
(3,'These recipes are making me hungry!','Approved','2024-01-04 15:53:07','2024-01-04 15:53:07',3,3),
(4,'Awesome workout routine. Feeling the burn!','Approved','2024-01-04 15:53:07','2024-01-04 15:53:07',4,4),
(5,'The music theory lecture was mind-blowing!','Pending','2024-01-04 15:53:07','2024-01-04 15:53:07',5,5),
(6,'Fashion trends are always changing. Love it!','Approved','2024-01-04 15:53:07','2024-01-04 15:53:07',6,6),
(7,'Top video games list is on point!','Pending','2024-01-04 15:53:07','2024-01-04 15:53:07',7,7),
(8,'Quantum physics is so fascinating!','Approved','2024-01-04 15:53:07','2024-01-04 15:53:07',8,8),
(9,'Abstract art workshop is inspiring!','Pending','2024-01-04 15:53:07','2024-01-04 15:53:07',9,9),
(10,'Australia has such unique wildlife. Amazing!','Approved','2024-01-04 15:53:07','2024-01-04 15:53:07',10,10);

/*Table structure for table `contents` */

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `DESCRIPTION` text DEFAULT NULL,
  `channel_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`),
  CONSTRAINT `contents_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `contents` */

insert  into `contents`(`id`,`title`,`DESCRIPTION`,`channel_id`,`user_id`,`created_at`,`updated_at`) values
(1,'Introduction to Artificial Intelligence','Learn the basics of AI and its applications',1,1,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(2,'Paris: The City of Lights','Explore the enchanting streets and landmarks of Paris',2,2,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(3,'Delicious Pasta Recipes','Discover mouthwatering pasta dishes from around the world',3,3,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(4,'Full Body Workout Routine','Achieve your fitness goals with this comprehensive workout',4,4,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(5,'Music Theory 101','Unlock the fundamentals of music theory for beginners',5,5,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(6,'Fashion Trends 2023','Stay stylish with the latest fashion trends and tips',6,6,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(7,'Top 10 Must-Play Video Games','Explore the most exciting video games of the year',7,7,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(8,'The Wonders of Quantum Physics','Dive into the mind-bending world of quantum physics',8,8,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(9,'Expressive Abstract Art Techniques','Create stunning abstract artworks with these techniques',9,9,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(10,'Discovering Australias Wildlife','Explore the diverse wildlife of Australia',10,10,'2024-01-04 15:53:07','2024-01-04 15:53:07');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `play_list` */

DROP TABLE IF EXISTS `play_list`;

CREATE TABLE `play_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `content_id` (`content_id`),
  CONSTRAINT `play_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `play_list_ibfk_2` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `play_list` */

insert  into `play_list`(`id`,`title`,`user_id`,`content_id`,`created_at`,`updated_at`) values
(1,'My AI Favorites',1,1,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(2,'Travel Adventure Playlist',2,2,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(3,'Cooking Delights',3,3,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(4,'Fitness Motivation',4,4,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(5,'Melodic Vibes',5,5,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(6,'Fashionista Picks',6,6,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(7,'Gaming Extravaganza',7,7,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(8,'Science Wonders',8,8,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(9,'Artistic Inspirations',9,9,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(10,'Nature Escapes',10,10,'2024-01-04 15:53:07','2024-01-04 15:53:07');

/*Table structure for table `suscribes` */

DROP TABLE IF EXISTS `suscribes`;

CREATE TABLE `suscribes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `content_id` (`content_id`),
  CONSTRAINT `suscribes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `suscribes_ibfk_2` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `suscribes` */

insert  into `suscribes`(`id`,`title`,`user_id`,`content_id`,`created_at`,`updated_at`) values
(1,'AI Enthusiasts',1,1,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(2,'Travel Enthusiasts',2,2,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(3,'Foodies Club',3,3,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(4,'Fitness Enthusiasts',4,4,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(5,'Music Lovers',5,5,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(6,'Fashion Enthusiasts',6,6,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(7,'Gaming Community',7,7,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(8,'Science Geeks',8,8,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(9,'Art Lovers',9,9,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(10,'Nature Explorers',10,10,'2024-01-04 15:53:07','2024-01-04 15:53:07');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`,`role`) values
(1,'obert','obert@gmail.com',NULL,'$2y$12$F.MxlAYcClls2WdIiJ.j8O706XxmUOlOaP6/lwqLglJa7M8AvwM0i',NULL,'2024-01-04 08:35:51','2024-01-04 08:35:51','user'),
(2,'julian','julian@gmail.com',NULL,'$2y$12$nvEOlX.8Ls5KkW8vvt3hyecEShCSZT/vNVfft3u0aMdiffUz3C2Ra',NULL,'2024-01-04 08:42:40','2024-01-04 08:42:40','user'),
(3,'ryan','ryan@gmail.com',NULL,'$2y$12$RLJSILyidGQWD2Vz3104U.sQcI84BpvvdGlPBXrxjiwa3OBjifTZG',NULL,'2024-01-04 08:43:03','2024-01-04 08:43:03','user'),
(4,'yosedie','yosedie@gmail.com',NULL,'$2y$12$mVFv7klCyQ3K3HXFbAwB0e0kgMfvb45aNxD.HOhwAwme0jh9ZPduK',NULL,'2024-01-04 08:43:28','2024-01-04 08:43:28','user'),
(5,'yosua','yosua@gmail.com',NULL,'$2y$12$3xsD06pNJnnyuzzenBsM.uaHulF3xyY9PPzgstWCUn1lT1M/EswBC',NULL,'2024-01-04 08:43:57','2024-01-04 08:43:57','user'),
(6,'christian','christian@gmail.com',NULL,'$2y$12$nADiFVq3Nr8QSvdLPk1AKegUySfxkxxyCJ3K15OcrzMEZZLF/a7Nq',NULL,'2024-01-04 08:44:50','2024-01-04 08:44:50','user'),
(7,'steven','steven@gmail.com',NULL,'$2y$12$ExLygWtTC60gvHsRvtsss.Bk7LXtUtKmi6FJ2vvVgmLbXMI/UQx2W',NULL,'2024-01-04 08:45:22','2024-01-04 08:45:22','user'),
(8,'sean','sean@gmail.com',NULL,'$2y$12$nC0f85f91UB.QaQyUI7RBeeZ6l9Q3FG3IropZtt.EIB56st/VB3Yy',NULL,'2024-01-04 08:45:53','2024-01-04 08:45:53','user'),
(9,'michael','michael@gmail.com',NULL,'$2y$12$moDydK85TBxiis69a4juQepsVLV.n6Oix5VKLY3es79r5Gkmplkim',NULL,'2024-01-04 08:47:24','2024-01-04 08:47:24','user'),
(10,'richard','richard@gmail.com',NULL,'$2y$12$PLolOYTybrapsF4WTTIX4exUXZr0br/3/fS3AnoeP30ytm1hR/tPK',NULL,'2024-01-04 08:48:43','2024-01-04 08:48:43','user'),
(11,'rafer','rafer@gmail.com',NULL,'$2y$12$DEUnjt68L1FFg3.enes6O.TzplnBidHjsT2Mh0XCBZZUUJKNhCaWW',NULL,'2024-01-04 08:49:12','2024-01-04 08:49:12','admin');

/*Table structure for table `watch_later` */

DROP TABLE IF EXISTS `watch_later`;

CREATE TABLE `watch_later` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAMES` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `content_id` (`content_id`),
  CONSTRAINT `watch_later_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `watch_later_ibfk_2` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `watch_later` */

insert  into `watch_later`(`id`,`NAMES`,`user_id`,`content_id`,`created_at`,`updated_at`) values
(1,'AI Basics Tutorial',1,1,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(2,'Paris Travel Documentary',2,2,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(3,'Delicious Pasta Cooking Class',3,3,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(4,'Full Body Workout Session',4,4,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(5,'Music Theory Lecture',5,5,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(6,'Fashion Trends Recap',6,6,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(7,'Top Video Games Countdown',7,7,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(8,'Quantum Physics Lecture',8,8,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(9,'Abstract Art Workshop',9,9,'2024-01-04 15:53:07','2024-01-04 15:53:07'),
(10,'Australian Wildlife Documentary',10,10,'2024-01-04 15:53:07','2024-01-04 15:53:07');

DROP TABLE IF EXISTS `content_visits`;

-- Dumping structure for table db_proyek_dishub.content_visits
CREATE TABLE IF NOT EXISTS `content_visits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `content_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`),
  KEY `FK_user` (`user_id`),
  KEY `FK_content` (`content_id`),
  CONSTRAINT `FK_content` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`),
  CONSTRAINT `FK_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
