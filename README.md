# symfony_todolist
db and mail configuration in  parameters.yml

todolist indexpage route: /data
# crontab works every minute:  
* * * * * php /pathtoyourproj/bin/console app:call-remind 

# sql
/*
 Navicat Premium Data Transfer

 Source Server         : local-db
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : localhost:3306
 Source Schema         : symfony_db

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 09/04/2018 20:31:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `update_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

SET FOREIGN_KEY_CHECKS = 1;


-- ----------------------------
-- Table structure for mail
-- ----------------------------
DROP TABLE IF EXISTS `mail`;
CREATE TABLE `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `create_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `update_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `send_status` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `mail_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `send_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_content_id` (`content_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

SET FOREIGN_KEY_CHECKS = 1;