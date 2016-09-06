/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : sparksite

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2016-09-06 14:24:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `pub_time` datetime DEFAULT NULL,
  `auther` varchar(30) DEFAULT NULL,
  `short_title` varchar(20) DEFAULT NULL,
  `save_path` varchar(100) DEFAULT NULL,
  `belong_class` varchar(30) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', 'hellow  world', 'hellow  world  from sparksite!', '2016-09-04 00:00:00', 'me', 'hew', '1.html', '1', 'hellow');

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `father_class` int(11) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `content` text,
  `keyword` varchar(100) DEFAULT NULL,
  `save_path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1', '测试分类1', '0', 'normal', '', '', 'fenlei1/');
INSERT INTO `class` VALUES ('2', '测试分类2', '0', 'normal', '', 'H110', 'fenlei2/');
INSERT INTO `class` VALUES ('3', '测试分类3', '2', 'normal', '', 'b110', 'fenlei3/');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', 'activeTheme', 'Default', '当前风格');
INSERT INTO `config` VALUES ('2', 'siteName', '我的网站', '站点名称');
INSERT INTO `config` VALUES ('3', 'DefaultAuther', 'admin', '默认作者名称');
