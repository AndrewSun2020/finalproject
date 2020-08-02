/*
 Navicat Premium Data Transfer

 Source Server         : data
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : localhost:8889
 Source Schema         : data

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 01/08/2020 00:58:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for projectdata
-- ----------------------------
DROP TABLE IF EXISTS `projectdata`;
CREATE TABLE `projectdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `createtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of projectdata
-- ----------------------------
BEGIN;
INSERT INTO `projectdata` VALUES (11, 'Iron Man', 'MarvelIronman@marvel.com', 1596214439);
INSERT INTO `projectdata` VALUES (12, 'Doctor Strange', '+4407273227719', 1596214494);
INSERT INTO `projectdata` VALUES (13, 'Master Ancient One', '+1993877434229', 1596214525);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
