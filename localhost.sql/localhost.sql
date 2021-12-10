-- Adminer 4.8.1 MySQL 8.0.26-0ubuntu0.20.04.3 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `property_santa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `property_santa`;

DROP TABLE IF EXISTS `booking_calls`;
CREATE TABLE `booking_calls` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_time` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

INSERT INTO `booking_calls` (`id`, `date_time`, `updated_at`, `created_at`) VALUES
(1,	'2021-09-23 19:24',	'2021-09-13 10:03:27',	'2021-09-13 10:03:27'),
(2,	'2021-09-15 17:38',	'2021-09-13 10:07:45',	'2021-09-13 10:07:45'),
(3,	'2021-09-15 17:38',	'2021-09-13 10:07:53',	'2021-09-13 10:07:53'),
(4,	'2021-09-15 17:38',	'2021-09-13 10:08:38',	'2021-09-13 10:08:38'),
(5,	'2021-09-15 17:38',	'2021-09-13 10:08:41',	'2021-09-13 10:08:41'),
(6,	'2021-09-15 17:38',	'2021-09-13 10:09:11',	'2021-09-13 10:09:11'),
(7,	'2021-09-14 17:00',	'2021-09-13 10:47:09',	'2021-09-13 10:47:09'),
(8,	'2021-09-13 16:08',	'2021-09-13 11:08:39',	'2021-09-13 11:08:39'),
(9,	'2021-10-14 01:06',	'2021-10-12 20:05:00',	'2021-10-12 20:05:00'),
(10,	'2021-10-24 22:08',	'2021-10-14 15:37:46',	'2021-10-14 15:37:46'),
(11,	'2021-10-20 00:15',	'2021-10-18 19:15:26',	'2021-10-18 19:15:26');

DROP TABLE IF EXISTS `inquiryees`;
CREATE TABLE `inquiryees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `step_1` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `step_2` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `step_3` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_Ip` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_rate` decimal(10,0) NOT NULL,
  `user_address` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin_price` decimal(10,0) DEFAULT NULL,
  `admin_status` int NOT NULL DEFAULT '0',
  `notification_status` int NOT NULL DEFAULT '0',
  `user_status` int NOT NULL DEFAULT '0',
  `locked_status` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

INSERT INTO `inquiryees` (`id`, `step_1`, `step_2`, `step_3`, `user_Ip`, `user_rate`, `user_address`, `admin_price`, `admin_status`, `notification_status`, `user_status`, `locked_status`, `updated_at`, `created_at`) VALUES
(179,	'Residential Rental',	'Townhome',	'6 Month',	'49.36.230.183',	4000,	'Oxford Properties, 342 Wincolmlee, HULL',	4000,	1,	1,	0,	1,	'2021-12-05 17:17:58',	'2021-12-05 17:17:47');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `question_vactional_homes`;
CREATE TABLE `question_vactional_homes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  `questions` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rate` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tittle` text CHARACTER SET utf8 COLLATE utf8_bin,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

INSERT INTO `question_vactional_homes` (`id`, `updated_at`, `created_at`, `questions`, `rate`, `tittle`, `description`) VALUES
(1,	'2021-10-23 11:31:40',	'2021-08-25 17:42:44',	'Would you like to benefit from the unlimited emergency services, while your home is listed with us',	'28',	'Unlimited emergency services',	NULL),
(2,	'2021-10-23 11:28:59',	'2021-08-14 20:09:38',	'Would you need our unlimited guest check-in and check-out services per month.',	'85',	'Unlimited cleaning service',	'Unlimited cleaning service.\r\nWe prepare the home to your standard every time and you can rest assured about no missed dates or surprises when that guest shows up and the house is not clean!'),
(3,	'2021-09-11 12:13:58',	'2021-08-24 18:34:42',	'Great decisions so far. Now, let\'s determine a little about your monthly property maintenance goals, for exterior and interiors of your home.',	'75',	'Unlimited Property Maintenance coordination and digital copy of every visit',	'Our flat fees for this service include unlimited changing all your filters (HVAC, Pool) and take over scheduled maintenance of coordinating HVAC techs, water heater techs, landscapers, irrigation techs to perform periodic maintenance. All you would do is let us know the dates and we coordinate and present you with a digital copy of the services performed. You are responsible for all parts and labor by the 3rd party and we coordinate the best techs in our network or work with your preferred tech for no additional fees.'),
(4,	'2021-09-11 12:13:47',	'2021-08-24 18:35:21',	'Are you worried about guests not leaving your home and you need to get eviction lawyers involved',	'30',	'Eviction and Rent protection',	'We can help!\r\nWe safeguard you for up to 3 months in lost rent and eviction protection and in court filing fees of up to 5000$.'),
(5,	'2021-09-11 12:12:56',	'2021-08-24 18:35:40',	'Why depend on fixing appliances when we can help you with a replacement of a new appliance for minimal disruption to your guest',	'135',	'Appliance Break Down',	'We will replace appliances on an emergency basis only and with in-stock options of the\r\nstandard appliances to match the decor (e.g. stainless steel will be replaced by stainless\r\nsteel). If you need appliances from the same manufacturer (e.g. we replace them with LG and\r\nyou have a Bosch), you will be responsible to pay the difference and also the delay for the\r\nnon-stocked items. We will cover (Microwave, Ovens, Refrigerators, Washer & Dryer,\r\nHVAC under 3 Ton)'),
(6,	'2021-09-11 12:17:33',	'2021-08-24 18:35:59',	'Let us cover your system failures in Plumbing, HVAC, Electrical and any major upgrade needed while contracting with us.',	'82',	'System Failure Management and coordination',	'We will manage any major breakdown by bringing in vetted contractors to perform the job, work with the state or county for licenses to perform the work, and get you a digital copy of all the transactions without you visiting the site. If the property is tenants/guest occupied while the system broke down, you are responsible for finding accommodation for the guest.'),
(7,	'2021-09-11 13:29:16',	'2021-08-24 18:36:06',	'Do you want to Replace Your Appliances?',	'3',	'Replace Your Appliances',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

DROP TABLE IF EXISTS `questionfurnishedrentals`;
CREATE TABLE `questionfurnishedrentals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  `questions` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rate` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tittle` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

INSERT INTO `questionfurnishedrentals` (`id`, `updated_at`, `created_at`, `questions`, `rate`, `tittle`) VALUES
(1,	'2021-11-02 16:49:10',	'2021-08-25 17:42:44',	'Do you want a Professional Photography of your house?',	'3.1',	'Professional Photography'),
(2,	'2021-09-01 10:06:21',	'2021-08-14 20:09:38',	'Do you want Unlimited Visits (Get a digital  copy of every visit)?',	'2',	'Unlimted Visits'),
(3,	'2021-09-01 14:31:32',	'2021-08-24 18:34:42',	'Do you want Unlimited Emergency and Fixing?',	'2',	'Unlimited Emergency Services'),
(4,	'2021-09-01 14:31:39',	'2021-08-24 18:35:21',	'Do you want a Moving-in Clean-up?',	'3',	'Moving-in Clean-up'),
(5,	'2021-09-01 14:31:46',	'2021-08-24 18:35:40',	'Do you want to Protect Your Home from Eviction?',	'3',	'Eviction'),
(6,	'2021-09-01 14:31:52',	'2021-08-24 18:35:59',	'Do you want Appliances Repair Services?',	'3',	'Repair services'),
(7,	'2021-09-01 14:31:58',	'2021-08-24 18:36:06',	'Do you want to Replace Your Appliances?',	'3',	'Replace Your Appliances?');

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `questions` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rate` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tittle` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

INSERT INTO `questions` (`id`, `updated_at`, `created_at`, `questions`, `rate`, `tittle`) VALUES
(1,	'2021-11-02 11:27:35',	'2021-11-02 11:27:35',	'Let us get some Professional Photographs/3D tour for your listing',	'1.0',	'Professional Photography/ 3D Tour'),
(2,	'2021-11-18 17:18:04',	'2021-11-18 17:18:04',	'Do you want Unlimited Visits (Get a digital  copy of every visit)?',	'2',	'Unlimted Visits'),
(3,	'2021-11-29 16:30:03',	'2021-11-29 16:30:03',	'Do you want Unlimited Emergency and Fixing?',	'4',	'Unlimited Emergency Services'),
(4,	'2021-12-02 17:00:45',	'2021-12-02 17:00:45',	'Do you want a Moving-in Clean-up?',	'3',	'Moving-in Clean-up'),
(5,	'2021-08-24 18:35:40',	'0000-00-00 00:00:00',	'Do you want to Protect Your Home from Eviction?',	'1',	'Eviction'),
(6,	'2021-08-24 18:35:59',	'0000-00-00 00:00:00',	'Do you want Appliances Repair Services?',	'1',	'Repair services'),
(7,	'2021-08-24 18:36:06',	'0000-00-00 00:00:00',	'Do you want to Replace Your Appliances?',	'1',	'Replace Your Appliances?');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `userType` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `userType`) VALUES
(1,	'',	'admin@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	NULL,	NULL,	'Admin'),
(3,	'test',	'test@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	NULL,	NULL,	'forntend'),
(40,	NULL,	'jhdss@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-09-11 13:08:07',	'2021-09-11 13:08:07',	'forntend'),
(39,	NULL,	'laura.jeanus@gmail.com',	NULL,	'e10adc39x49ba59abbe56e057f20f883e',	NULL,	'2021-10-11 07:42:50',	'2021-10-11 07:42:50',	'forntend'),
(38,	NULL,	'sdhfhidasfi@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-22 14:56:30',	'2021-08-22 14:56:30',	'forntend'),
(37,	NULL,	'momenma@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-22 12:04:46',	'2021-08-22 12:04:46',	'forntend'),
(36,	NULL,	'fgbhfdsbrg@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 15:17:58',	'2021-08-21 15:17:58',	'forntend'),
(35,	NULL,	'dgszdbdrgaer@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 15:15:53',	'2021-08-21 15:15:53',	'forntend'),
(34,	NULL,	'MOMENKIUN@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 15:10:00',	'2021-08-21 15:10:00',	'forntend'),
(33,	NULL,	'asdasfj@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 14:55:58',	'2021-08-21 14:55:58',	'forntend'),
(32,	NULL,	'sadfhoasf@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 14:55:24',	'2021-08-21 14:55:24',	'forntend'),
(31,	NULL,	'Enteryourname@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 14:54:41',	'2021-08-21 14:54:41',	'forntend'),
(30,	NULL,	'ggggg@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 14:53:16',	'2021-08-21 14:53:16',	'forntend'),
(29,	NULL,	'ggg@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 14:37:11',	'2021-08-21 14:37:11',	'forntend'),
(28,	NULL,	'gg@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 14:35:49',	'2021-08-21 14:35:49',	'forntend'),
(27,	NULL,	'devroot@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 14:22:25',	'2021-08-21 14:22:25',	'forntend'),
(26,	NULL,	'admin67@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 14:18:56',	'2021-08-21 14:18:56',	'forntend'),
(25,	NULL,	'test123456@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-08-21 14:18:08',	'2021-08-21 14:18:08',	'forntend'),
(41,	NULL,	'mohittt@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-10-22 12:31:01',	'2021-10-22 12:31:01',	'forntend'),
(42,	NULL,	'mohityyy@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-10-22 15:33:13',	'2021-10-22 15:33:13',	'forntend'),
(43,	NULL,	'hsdjkf@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-10-22 15:33:41',	'2021-10-22 15:33:41',	'forntend'),
(44,	NULL,	'kumar@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-10-23 11:09:28',	'2021-10-23 11:09:28',	'forntend'),
(45,	NULL,	'mohitttt@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-10-23 11:10:19',	'2021-10-23 11:10:19',	'forntend'),
(46,	NULL,	'test8989@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-10-26 17:54:35',	'2021-10-26 17:54:35',	'forntend'),
(47,	NULL,	'dgdfgdfg@gmil.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-10-27 05:20:02',	'2021-10-27 05:20:02',	'forntend'),
(48,	NULL,	'admin89@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-10-29 17:38:05',	'2021-10-29 17:38:05',	'forntend'),
(49,	NULL,	'admin8988@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-10-29 17:42:33',	'2021-10-29 17:42:33',	'forntend'),
(50,	NULL,	'admin@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-11-01 16:48:22',	'2021-11-01 16:48:22',	'forntend'),
(51,	NULL,	'alok.mazumdar@gmail.com',	NULL,	'088c9755bfaaef01981d86d93d5610ab',	NULL,	'2021-11-02 11:10:19',	'2021-11-02 11:10:19',	'forntend'),
(52,	NULL,	'adminui@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-11-02 11:40:05',	'2021-11-02 11:40:05',	'forntend'),
(53,	NULL,	'test455555@gmail.com',	NULL,	'e10adc3949ba59abbe56e057f20f883e',	NULL,	'2021-11-02 11:43:19',	'2021-11-02 11:43:19',	'forntend');

-- 2021-12-06 18:54:26
