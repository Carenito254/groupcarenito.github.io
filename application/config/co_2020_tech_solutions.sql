-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2020 at 03:46 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `co_2020_tech_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `gk_blog`
--

DROP TABLE IF EXISTS `gk_blog`;
CREATE TABLE IF NOT EXISTS `gk_blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_category_id` int(11) DEFAULT NULL,
  `blog_content` longtext,
  `blog_author` varchar(255) DEFAULT NULL,
  `blog_visibility` int(11) DEFAULT NULL,
  `blog_cover_data` longtext,
  `blog_image_url` varchar(255) DEFAULT NULL,
  `blog_view_count` int(11) DEFAULT NULL,
  `blog_written_on` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='blog post';

--
-- Dumping data for table `gk_blog`
--

INSERT INTO `gk_blog` (`blog_id`, `blog_title`, `blog_category_id`, `blog_content`, `blog_author`, `blog_visibility`, `blog_cover_data`, `blog_image_url`, `blog_view_count`, `blog_written_on`) VALUES
(4, 'Point Of Sale', 2, '<p>&lt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'AK', 0, '{\"upload_data\":{\"file_name\":\"IMG_20190324_0915051.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/wamp64\\/www\\/infomx\\/uploads\\/blog\\/\",\"full_path\":\"C:\\/wamp64\\/www\\/infomx\\/uploads\\/blog\\/IMG_20190324_0915051.jpg\",\"raw_name\":\"IMG_20190324_0915051\",\"orig_name\":\"IMG_20190324_091505.jpg\",\"client_name\":\"IMG_20190324_091505.jpg\",\"file_ext\":\".jpg\",\"file_size\":3499.54,\"is_image\":true,\"image_width\":3120,\"image_height\":4160,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"3120\\\" height=\\\"4160\\\"\"}}', 'C:/wamp64/www/infomx/uploads/blog/digital_training.png', NULL, '2019-12-27 12:43:11'),
(5, 'Refiner Query Builder', 4, '<p>&lt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p><p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p><p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p><p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p><p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'GK', 0, '{\"upload_data\":{\"file_name\":\"IMG_20190501_081603.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/wamp64\\/www\\/infomx\\/uploads\\/blog\\/\",\"full_path\":\"C:\\/wamp64\\/www\\/infomx\\/uploads\\/blog\\/IMG_20190501_081603.jpg\",\"raw_name\":\"IMG_20190501_081603\",\"orig_name\":\"IMG_20190501_081603.jpg\",\"client_name\":\"IMG_20190501_081603.jpg\",\"file_ext\":\".jpg\",\"file_size\":2022.17,\"is_image\":true,\"image_width\":1920,\"image_height\":2560,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"1920\\\" height=\\\"2560\\\"\"}}', 'C:/wamp64/www/infomx/uploads/blog/IMG_20190501_081603.jpg', NULL, '2019-12-27 12:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `gk_blog_categories`
--

DROP TABLE IF EXISTS `gk_blog_categories`;
CREATE TABLE IF NOT EXISTS `gk_blog_categories` (
  `blog_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) DEFAULT NULL,
  `cat_reg` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`blog_cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gk_blog_categories`
--

INSERT INTO `gk_blog_categories` (`blog_cat_id`, `cat_title`, `cat_reg`) VALUES
(2, 'PHP controversies', '2019-12-01 18:00:56'),
(3, 'Angular Js', '2019-12-21 20:00:26'),
(4, 'Software', '2019-12-27 12:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `gk_message`
--

DROP TABLE IF EXISTS `gk_message`;
CREATE TABLE IF NOT EXISTS `gk_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `phone` varchar(155) DEFAULT NULL,
  `send_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `mark_as_read` int(11) DEFAULT '0',
  `replied_to` int(11) DEFAULT '0',
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gk_message`
--

INSERT INTO `gk_message` (`message_id`, `sender_name`, `email`, `message`, `phone`, `send_on`, `mark_as_read`, `replied_to`) VALUES
(1, 'Alex Kekee Muthangya', 'stellexy@gmail.com', '07589047', '07589047', '2019-12-26 09:54:02', 1, 0),
(2, 'Alex Kekee Muthangya', 'stellexy@gmail.com', 'after sacrificing himself to preserve the human race, michael Gabriel is imprisoned in torturous,purgatory', '07589047', '2019-12-26 10:33:11', 1, 0),
(3, 'Jama Kingstone', 'kekeealex.m@gmail.com', 'Vince Lyne Kill short propaganda was spread throughout the kingdom of pontive, bythen King Balshabar, the Lord Afrodite had bethrowed princes Cleopatra who by then ....', '068948828', '2019-12-26 11:18:16', 1, 0),
(4, 'Dan Brown', 'dany@gmail.com', 'Best Selling Aurthor of the Da vinci code', '487584783', '2019-12-26 11:30:12', 1, 0),
(5, 'Alex Kekee Muthangya', 'stellexy@gmail.com', 'You can have a multi account ', '07589047', '2019-12-26 11:38:22', 0, 0),
(6, 'Joginyo', 'jogin@gmail', 'Sixteen', '458484758', '2019-12-26 11:39:03', 1, 0),
(7, 'David Bodanis', 'david@bodanis.com', 'The anique of bledashin was so much a spectacle to behold, it hidden under the eye of the 7 rivers of kinsley', '949289874', '2019-12-27 10:21:06', 1, 0),
(8, 'Alex Kekee Muthangya', 'kekeealex.m@gmail.com', 'cxxfxfgcgfhyghyguhuhuhyuhyuhy', '949289874', '2019-12-31 20:40:17', 1, 0),
(9, 'Jama Kingstone', '0715358400', 'Hello', '07589047', '2020-01-10 18:47:06', 0, 0),
(10, 'Alex Kekee Muthangya', 'stellexy@gmail.com', 'here can be a nice text', '07589047', '2020-01-10 19:16:03', 0, 0),
(11, 'Alex Kekee Muthangya', 'stellexy@gmail.com', 'here can be a nice text', '07589047', '2020-01-10 19:17:01', 0, 0),
(12, 'Alex Kekee Muthangya', 'stellexy@gmail.com', 'here can be a nice text', '07589047', '2020-01-10 19:17:26', 1, 0),
(13, 'Karanj', 'stellexy@gmail.com', 'I want to cry', '949289874', '2020-01-29 09:33:28', 1, 0),
(14, 'Newton', 'dany@gmail.com', 'type a message', '07589047', '2020-01-29 11:54:38', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gk_services`
--

DROP TABLE IF EXISTS `gk_services`;
CREATE TABLE IF NOT EXISTS `gk_services` (
  `ser_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_name` varchar(255) DEFAULT NULL,
  `ser_content` longtext,
  `ser_visibility` int(11) DEFAULT '1',
  `ser_registered_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `provide_as` int(11) DEFAULT NULL,
  `ser_settings` text,
  `ser_icon_url` text,
  PRIMARY KEY (`ser_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COMMENT='services table';

--
-- Dumping data for table `gk_services`
--

INSERT INTO `gk_services` (`ser_id`, `ser_name`, `ser_content`, `ser_visibility`, `ser_registered_on`, `provide_as`, `ser_settings`, `ser_icon_url`) VALUES
(1, 'Android Application', '<p>abacadafagahaja</p>', 1, '2019-12-31 20:00:30', 4, NULL, 'C:/wamp64/www/infomx/uploads/services/android_logo.png'),
(2, 'Angular Application', '<p>A ba ca da fa ga ha ja wa ya za</p>', 1, '2019-12-31 20:07:04', 4, NULL, 'C:/wamp64/www/infomx/uploads/services/IMG_20190324_091511.jpg'),
(3, 'Digital Traning', '<p>Insert description about digital training</p>', 1, '2019-12-31 20:14:01', 0, NULL, 'C:/wamp64/www/infomx/uploads/services/digital_training.png'),
(4, 'Terms and conditions', '<p>provide terms and conditions</p>', 1, '2019-12-31 20:15:58', 2, NULL, 'C:/wamp64/www/infomx/uploads/services/IMG_20190324_0915461.jpg'),
(5, 'Other', '<p>Application : any other category</p>', 1, '2019-12-31 20:18:17', 4, NULL, 'C:/wamp64/www/infomx/uploads/services/IMG_20190324_091548.jpg'),
(6, 'Web design and Web Application Development', '<p>Write an Article about this service</p>', 1, '2020-01-03 10:32:51', 0, NULL, 'C:/wamp64/www/infomx/uploads/services/ux-789162_640.jpg'),
(7, 'Cyber Security', '<p>Write an article about Cyber Security</p>', 1, '2020-01-03 11:43:13', 0, NULL, 'C:/wamp64/www/infomx/uploads/services/phishing-3390518_640.jpg'),
(11, 'PHP Application (core )', '<p>Write something about PHP Application (core)</p>', 1, '2020-01-10 11:50:43', 4, NULL, 'C:/wamp64/www/infomx/uploads/services/php-logo.png'),
(12, 'PHP Application (Laravel )', '<p>write something about&nbsp;PHP Application (Laravel )</p>', 1, '2020-01-10 11:52:46', 4, NULL, 'C:/wamp64/www/infomx/uploads/services/laravel-logo.png'),
(9, 'Networking', '<p>Write an article about Networking</p>', 1, '2020-01-03 11:46:39', 0, NULL, 'C:/wamp64/www/infomx/uploads/services/network-197300_1920.jpg'),
(10, 'Computer hardware & Repair', '<p>Write an article about computer hardware &amp; repair</p>', 1, '2020-01-03 11:48:09', 0, NULL, 'C:/wamp64/www/infomx/uploads/services/hardware-3509898_640.jpg'),
(13, 'PHP Application (CodeIgnitor)', '<p>write something about&nbsp;PHP Application (CodeIgnitor)</p>', 1, '2020-01-10 11:54:23', 4, NULL, 'C:/wamp64/www/infomx/uploads/services/codeignitor-logo.jpg'),
(14, 'PHP Application (Yii)', '<p>write somathing about yii</p>', 1, '2020-01-10 11:56:24', 4, NULL, 'C:/wamp64/www/infomx/uploads/services/yii-logo.jpg'),
(15, 'Wordpress (installation and customization) ', '<p>write something about WordPress</p>', 1, '2020-01-10 11:59:04', 4, NULL, 'C:/wamp64/www/infomx/uploads/services/wordpress.jpg'),
(16, 'Desktop Application (Kotlin)', '<p>wirte</p>', 1, '2020-01-10 12:01:23', 4, NULL, 'C:/wamp64/www/infomx/uploads/services/kotlin.png');

-- --------------------------------------------------------

--
-- Table structure for table `gk_soft_application`
--

DROP TABLE IF EXISTS `gk_soft_application`;
CREATE TABLE IF NOT EXISTS `gk_soft_application` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_name` varchar(255) DEFAULT NULL,
  `applicant_name` varchar(255) DEFAULT NULL,
  `applicant_email` varchar(255) DEFAULT NULL,
  `applicant_phone_no` varchar(64) DEFAULT NULL,
  `app_type` int(11) DEFAULT NULL,
  `app_description` longtext,
  `applied_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `mark_as_read` int(11) DEFAULT '0',
  `resolved` int(11) DEFAULT '0',
  PRIMARY KEY (`app_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gk_soft_application`
--

INSERT INTO `gk_soft_application` (`app_id`, `app_name`, `applicant_name`, `applicant_email`, `applicant_phone_no`, `app_type`, `app_description`, `applied_on`, `mark_as_read`, `resolved`) VALUES
(1, 'Records Management System', 'Alex Kekee', 'stellexy@gmail.com', '07896789', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-01-12 11:01:28', 0, 0),
(2, 'BloodBank Management System', 'John DEmathew', 'detMat@gmail.com', '8497987', 13, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-01-12 11:02:34', 0, 0),
(3, 'Chat Api', 'Pllesdent Kingston', 'plkigs@yahoo.com', '849798774', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-01-12 11:03:29', 0, 0),
(4, 'Chat Api', 'Karanja', 'ka@example.com', '43798704w', 11, 'i want bla bla bla', '2020-01-29 09:30:59', 0, 0),
(5, 'Records Management System', 'Newton', 'nest@example.com', '7468734682', 1, 'jdskhksjdkjkskj', '2020-01-29 11:51:21', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `session_id` varchar(48) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'stores session cookie id to prevent session concurrency',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(254) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `user_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s activation status',
  `user_deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s deletion status',
  `user_account_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'user''s account type (basic, premium, etc)',
  `user_has_avatar` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 if user has a local avatar, 0 if not',
  `user_remember_me_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s remember-me cookie token',
  `user_creation_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the creation of user''s account',
  `user_suspension_timestamp` bigint(20) DEFAULT NULL COMMENT 'Timestamp till the end of a user suspension',
  `user_last_login_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of user''s last login',
  `user_failed_logins` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s failed login attempts',
  `user_last_failed_login` int(10) DEFAULT NULL COMMENT 'unix timestamp of last failed login attempt',
  `user_activation_hash` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s email verification hash string',
  `user_password_reset_hash` char(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password reset code',
  `user_password_reset_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the password reset request',
  `user_provider_type` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `session_id`, `user_name`, `user_password_hash`, `user_email`, `user_active`, `user_deleted`, `user_account_type`, `user_has_avatar`, `user_remember_me_token`, `user_creation_timestamp`, `user_suspension_timestamp`, `user_last_login_timestamp`, `user_failed_logins`, `user_last_failed_login`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_provider_type`) VALUES
(1, '4a8e6mq0qqgu43r3hdqkn73qmbk2pjjk', 'demo', '$2y$10$OvprunjvKOOhM1h9bzMPs.vuwGIsOqZbw88rzSyGCTJTcE61g5WXi', 'demo@demo.com', 1, 0, 7, 0, NULL, 1422205178, NULL, 1422209189, 0, NULL, NULL, NULL, NULL, 'DEFAULT'),
(2, NULL, 'demo2', '$2y$10$OvprunjvKOOhM1h9bzMPs.vuwGIsOqZbw88rzSyGCTJTcE61g5WXi', 'demo2@demo.com', 1, 0, 1, 0, NULL, 1422205178, NULL, 1422209189, 0, NULL, NULL, NULL, NULL, 'DEFAULT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
