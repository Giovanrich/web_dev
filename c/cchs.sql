/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : cchs

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2016-11-15 09:26:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `adminstrator`
-- ----------------------------
DROP TABLE IF EXISTS `adminstrator`;
CREATE TABLE `adminstrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adminstrator
-- ----------------------------
INSERT INTO `adminstrator` VALUES ('8', 'head', 'head', 'head', 'head');
INSERT INTO `adminstrator` VALUES ('10', 'nhasi', 'dsfhsdfkj.kdasfb,mdsnbfkj,sdfm,ksfdj', '', '');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) NOT NULL,
  `news_description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('15', 'sports', 'on the tenth of nhasi will hold nhasi competition');

-- ----------------------------
-- Table structure for `subscribers`
-- ----------------------------
DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subname` varchar(100) NOT NULL,
  `subscribeBtn` varchar(100) NOT NULL,
  `subscribeDate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of subscribers
-- ----------------------------
INSERT INTO `subscribers` VALUES ('4', 'nhaso nhasi', 'serewe@gmail.com', '2016-11-02 11:24:50');
INSERT INTO `subscribers` VALUES ('5', 'xzc', 'seremwe@gmail.com', '2016-11-15 09:25:09');
