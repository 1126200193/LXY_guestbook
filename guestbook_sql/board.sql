/*
 Navicat Premium Data Transfer

 Source Server         : root
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : board

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 20/11/2019 20:36:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages`  (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `customname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `umail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `umsg` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uua` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `utime` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`uid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES (1, '1', '1', '1', 'Windows NT 10.0,64位', '127.0.0.1', '1572966792');
INSERT INTO `messages` VALUES (2, '张三', '1126200193@qq.com', '测试数据', 'Windows NT 10.0,64位', '127.0.0.1', '1572966845');
INSERT INTO `messages` VALUES (3, '李四', '1126@qq.com', '水费太贵了', 'Windows NT 10.0,64位', '::1', '1572967859');
INSERT INTO `messages` VALUES (4, '黄五', '1126@qq.com', '电费太贵了', 'Windows NT 10.0,64位', '::1', '1573019102');
INSERT INTO `messages` VALUES (43, '张三', '测试中', '测试中', 'Windows NT 10.0,64位', '::1', '1574163666');
INSERT INTO `messages` VALUES (44, '张三', '123', '哈哈哈哈', 'Windows NT 10.0,64位', '::1', '1574165590');
INSERT INTO `messages` VALUES (45, '张三', '123', '测试', 'Windows NT 10.0,64位', '::1', '1574165670');
INSERT INTO `messages` VALUES (46, '张三', '123', '测试分页技术是否成功', 'Windows NT 10.0,64位', '::1', '1574167182');
INSERT INTO `messages` VALUES (47, '张三', '123', '分页成功，通过php处理数据库数据，前端请求', 'Windows NT 10.0,64位', '::1', '1574167393');
INSERT INTO `messages` VALUES (48, '张三', '123', '写v-loading进行加载', 'Windows NT 10.0,64位', '::1', '1574167461');
INSERT INTO `messages` VALUES (49, '张三', '123', '正在开发中', 'Windows NT 10.0,64位', '::1', '1574167476');
INSERT INTO `messages` VALUES (50, '张三', '123', '123', 'Windows NT 10.0,64位', '::1', '1574176068');

-- ----------------------------
-- Table structure for userlist
-- ----------------------------
DROP TABLE IF EXISTS `userlist`;
CREATE TABLE `userlist`  (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `customname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`userid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of userlist
-- ----------------------------
INSERT INTO `userlist` VALUES (1, '张三', '123', '123');
INSERT INTO `userlist` VALUES (2, '李小龙', '1', '1');
INSERT INTO `userlist` VALUES (3, '苹果手机', '2', '2');
INSERT INTO `userlist` VALUES (4, 'ceshi', '3', '3');
INSERT INTO `userlist` VALUES (5, '张五', '4', '4');
INSERT INTO `userlist` VALUES (6, '张武', '5', '5');
INSERT INTO `userlist` VALUES (7, '黄五', '6', '6');
INSERT INTO `userlist` VALUES (8, '李小龙', '7', '7');
INSERT INTO `userlist` VALUES (9, '李小龙', '8', '8');
INSERT INTO `userlist` VALUES (10, '张三丰', '123456789', '123456789');
INSERT INTO `userlist` VALUES (11, '黄真人', '123987', '123987');
INSERT INTO `userlist` VALUES (12, '张飒', '123456', '123456');

SET FOREIGN_KEY_CHECKS = 1;
