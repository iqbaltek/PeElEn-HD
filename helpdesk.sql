/*
Navicat MySQL Data Transfer

Source Server         : koneksi
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : helpdesk

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2015-09-28 05:40:44
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1');
INSERT INTO `user` VALUES ('2', 'manager', '1d0258c2440a8d19e716292b231e3190', '2');
INSERT INTO `user` VALUES ('3', 'supervisor', '09348c20a019be0318387c08df7a783d', '3');
INSERT INTO `user` VALUES ('4', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', '4');
