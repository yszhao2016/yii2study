/*
Navicat MySQL Data Transfer

Source Server         : 192.168.1.223
Source Server Version : 50718
Source Host           : 192.168.1.223:3306
Source Database       : hello

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-11-02 11:26:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fund_data
-- ----------------------------
DROP TABLE IF EXISTS `fund_data`;
CREATE TABLE `fund_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(11) CHARACTER SET utf8 NOT NULL,
  `data` float NOT NULL,
  `date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `num` (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of fund_data
-- ----------------------------
INSERT INTO `fund_data` VALUES ('1', '002196', '0', '2017-10-13', '0');

-- ----------------------------
-- Table structure for fund_daydata
-- ----------------------------
DROP TABLE IF EXISTS `fund_daydata`;
CREATE TABLE `fund_daydata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(11) NOT NULL,
  `near_value` float(255,4) NOT NULL,
  `real_value` float(255,4) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `num` (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fund_daydata
-- ----------------------------
INSERT INTO `fund_daydata` VALUES ('71', '001557', '-0.6600', '0.0000', '2017-11-02');
INSERT INTO `fund_daydata` VALUES ('72', '001951', '-0.3400', '0.0000', '2017-11-02');
INSERT INTO `fund_daydata` VALUES ('73', '002196', '-0.3500', '0.0000', '2017-11-02');
INSERT INTO `fund_daydata` VALUES ('74', '110029', '-0.0500', '0.0000', '2017-11-02');
INSERT INTO `fund_daydata` VALUES ('75', '400011', '-0.3300', '0.0000', '2017-11-02');
INSERT INTO `fund_daydata` VALUES ('76', '690008', '0.1500', '0.0000', '2017-11-02');

-- ----------------------------
-- Table structure for fund_info
-- ----------------------------
DROP TABLE IF EXISTS `fund_info`;
CREATE TABLE `fund_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL COMMENT '基金经理',
  `company` varchar(255) NOT NULL COMMENT '基金公司',
  `share` varchar(255) NOT NULL COMMENT '资产份额',
  `founddate` date NOT NULL COMMENT '创立日期',
  `status` tinyint(4) NOT NULL,
  `creat_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `num` (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fund_info
-- ----------------------------
INSERT INTO `fund_info` VALUES ('1', '690008', '', '', '', '', '0000-00-00', '0', '2017-10-13 17:14:39');
INSERT INTO `fund_info` VALUES ('2', '001951', '', '', '', '', '0000-00-00', '0', '2017-10-13 17:14:43');
INSERT INTO `fund_info` VALUES ('3', '400011', '', '', '', '', '0000-00-00', '0', '2017-10-13 17:14:46');
INSERT INTO `fund_info` VALUES ('4', '002196', '', '', '', '', '0000-00-00', '0', '2017-10-13 17:14:48');
INSERT INTO `fund_info` VALUES ('5', '110029', '', '', '', '', '0000-00-00', '0', '2017-10-13 17:14:52');
INSERT INTO `fund_info` VALUES ('6', '001557', '', '', '', '', '0000-00-00', '0', '2017-10-13 17:14:55');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1506593444');
INSERT INTO `migration` VALUES ('m170928_100700_create_status_table', '1506593831');

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `permissions` smallint(6) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of status
-- ----------------------------
