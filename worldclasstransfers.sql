-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2020 at 02:22 PM
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
-- Database: `worldclasstransfers`
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='blog post';

--
-- Dumping data for table `gk_blog`
--

INSERT INTO `gk_blog` (`blog_id`, `blog_title`, `blog_category_id`, `blog_content`, `blog_author`, `blog_visibility`, `blog_cover_data`, `blog_image_url`, `blog_view_count`, `blog_written_on`) VALUES
(1, 'Fort Jesus', 7, '', 'Worldclass transfers', 0, '{\"upload_data\":{\"file_name\":\"fort_jesus.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/wamp64\\/www\\/ComfortPlusToursandTravels\\/uploads\\/blog\\/\",\"full_path\":\"C:\\/wamp64\\/www\\/ComfortPlusToursandTravels\\/uploads\\/blog\\/fort_jesus.jpg\",\"raw_name\":\"fort_jesus\",\"orig_name\":\"fort_jesus.jpg\",\"client_name\":\"fort_jesus.jpg\",\"file_ext\":\".jpg\",\"file_size\":117.33,\"is_image\":true,\"image_width\":660,\"image_height\":440,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"660\\\" height=\\\"440\\\"\"}}', 'C:/wamp64/www/ComfortPlusToursandTravels/uploads/blog/fort_jesus.jpg', NULL, '2020-01-31 08:18:06'),
(2, 'Where are you spending this summer?', 7, '', 'Worldclass transfers', 0, '{\"upload_data\":{\"file_name\":\"ft-4.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/wamp64\\/www\\/ComfortPlusToursandTravels\\/uploads\\/blog\\/\",\"full_path\":\"C:\\/wamp64\\/www\\/ComfortPlusToursandTravels\\/uploads\\/blog\\/ft-4.jpg\",\"raw_name\":\"ft-4\",\"orig_name\":\"ft-4.jpg\",\"client_name\":\"ft-4.jpg\",\"file_ext\":\".jpg\",\"file_size\":210.67,\"is_image\":true,\"image_width\":999,\"image_height\":647,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"999\\\" height=\\\"647\\\"\"}}', 'C:/wamp64/www/ComfortPlusToursandTravels/uploads/blog/ft-4.jpg', NULL, '2020-01-31 08:52:14'),
(3, 'Tsavo east National Park. Savannah', 7, '', 'Worldclass transfers', 0, '{\"upload_data\":{\"file_name\":\"ts.jpg\",\"file_type\":\"image\\/jpeg\",\"file_path\":\"C:\\/wamp64\\/www\\/ComfortPlusToursandTravels\\/uploads\\/blog\\/\",\"full_path\":\"C:\\/wamp64\\/www\\/ComfortPlusToursandTravels\\/uploads\\/blog\\/ts.jpg\",\"raw_name\":\"ts\",\"orig_name\":\"ts.jpg\",\"client_name\":\"ts.jpg\",\"file_ext\":\".jpg\",\"file_size\":5395.46,\"is_image\":true,\"image_width\":4392,\"image_height\":2183,\"image_type\":\"jpeg\",\"image_size_str\":\"width=\\\"4392\\\" height=\\\"2183\\\"\"}}', 'C:/wamp64/www/ComfortPlusToursandTravels/uploads/blog/ts.jpg', NULL, '2020-01-31 16:14:23');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gk_blog_categories`
--

INSERT INTO `gk_blog_categories` (`blog_cat_id`, `cat_title`, `cat_reg`) VALUES
(2, 'PHP controversies', '2019-12-01 18:00:56'),
(3, 'Angular Js', '2019-12-21 20:00:26'),
(4, 'Software', '2019-12-27 12:36:43'),
(5, 'Places to visit', '2020-01-31 08:14:40'),
(6, 'transfers', '2020-01-31 08:15:11'),
(7, 'excursion tips', '2020-01-31 08:15:35');

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

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
(14, 'Newton', 'dany@gmail.com', 'type a message', '07589047', '2020-01-29 11:54:38', 1, 0),
(15, 'Jama Kingstone', 'stellexy@gmail.com', 'test', '07589047', '2020-01-31 16:59:52', 0, 0);

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
(1, 'rf0jgjf5jdg8uk8r6e0ba7rrkfd2m3hr', 'demo', '$2y$10$OvprunjvKOOhM1h9bzMPs.vuwGIsOqZbw88rzSyGCTJTcE61g5WXi', 'demo@demo.com', 1, 0, 7, 0, NULL, 1422205178, NULL, 1422209189, 0, NULL, NULL, NULL, NULL, 'DEFAULT'),
(2, NULL, 'demo2', '$2y$10$OvprunjvKOOhM1h9bzMPs.vuwGIsOqZbw88rzSyGCTJTcE61g5WXi', 'demo2@demo.com', 1, 0, 1, 0, NULL, 1422205178, NULL, 1422209189, 0, NULL, NULL, NULL, NULL, 'DEFAULT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
