/*
 Navicat Premium Data Transfer

 Source Server         : jingjing
 Source Server Type    : MySQL
 Source Server Version : 100126
 Source Host           : 10.112.66.2:3306
 Source Schema         : jcweb

 Target Server Type    : MySQL
 Target Server Version : 100126
 File Encoding         : 65001

 Date: 18/03/2019 09:30:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for aboutus
-- ----------------------------
DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE `aboutus`  (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `save_time` datetime(0) NULL DEFAULT NULL,
  `type` int(4) NULL DEFAULT NULL COMMENT '1代表公司图，2代表资质图片',
  `thumb_path` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_path` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '原图地址',
  `sortby` tinyint(1) NULL DEFAULT NULL COMMENT '1是横排，2是竖排',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of aboutus
-- ----------------------------
INSERT INTO `aboutus` VALUES (1, '<p style=\"margin-top: 10px; margin-bottom: 10px; text-align: left; line-height: 2em;\"><span style=\"font-family: Arial; font-size: 18px;\"></span></p><p style=\"margin-left: 28px; text-align: left; line-height: 2em;\"><span style=\"color: rgb(0, 0, 0); font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-size: 18px; font-family: 楷体, 楷体_GB2312, SimKai;\">愿景：成为中国高端化合物半导体材料与光电器件的领军企业</span></span></p><p style=\"margin-left: 28px; text-align: left; line-height: 2em;\"><span style=\"color: rgb(0, 0, 0); font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-size: 18px; font-family: 楷体, 楷体_GB2312, SimKai;\">使命：引领材料方向、服务智能创造</span></span></p><p style=\"margin-left: 28px; text-align: left; line-height: 2em;\"><span style=\"color: rgb(0, 0, 0); font-size: 18px;\"><span style=\"color: rgb(0, 0, 0); font-size: 18px; font-family: 楷体, 楷体_GB2312, SimKai;\">核心价值观：求实 进取 创新 协同</span></span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"color: rgb(0, 0, 0); font-size: 18px; font-family: 宋体, SimSun;\">超晶科技（北京）有限公司（简称：超晶科技）是成立于2015年，由国家千人计划特聘专家、业内多名科学家和行业专家组成国际化的技术团队，专注于为用户提供自主研制高性能化合物半导体材料和半导体光电器件。</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"color: rgb(0, 0, 0); font-size: 18px; font-family: 宋体, SimSun;\">2017年，公司投资建设了千余平米的超净间，构建了材料外延、器件工艺、电路设计和封装测试的完整技术链，打造了全球一流水平的半导体材料、化合物芯片与光电器件的生产线，为提升我国在本领域的技术能力与产品水平作出应有的贡献。</span></p>', '2018-06-25 10:56:50', 1, '/Public/attached/2018-06-25/1529895408_thumb.png', '/Public/attached/2018-06-25/1529895408.png', 0);
INSERT INTO `aboutus` VALUES (16, NULL, '2018-06-14 17:36:31', 2, '/Public/attached/2018-06-14/1528968989_thumb.png', '/Public/attached/2018-06-14/1528968989.png', 2);
INSERT INTO `aboutus` VALUES (22, NULL, '2018-06-27 16:16:43', 2, '/Public/attached/2018-06-27/1530087399_thumb.jpg', '/Public/attached/2018-06-27/1530087399.jpg', 2);

-- ----------------------------
-- Table structure for authenticity_query
-- ----------------------------
DROP TABLE IF EXISTS `authenticity_query`;
CREATE TABLE `authenticity_query`  (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `organization` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '受检单位',
  `number` int(32) NULL DEFAULT NULL COMMENT '中心编号',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of authenticity_query
-- ----------------------------
INSERT INTO `authenticity_query` VALUES (1, '北京', 123456);

-- ----------------------------
-- Table structure for center_introduction
-- ----------------------------
DROP TABLE IF EXISTS `center_introduction`;
CREATE TABLE `center_introduction`  (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `type` tinyint(2) NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `save_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of center_introduction
-- ----------------------------
INSERT INTO `center_introduction` VALUES (1, '质量监督检测测试中心', 1, '<text>建筑材料工业干混砂浆产品质量监督检验测试中心（以下简称干混砂浆质检中心）于2007年批准成立，并通过国家计量认证/审查认可评审，获得了中国国家认证认可监督管理委员会、中国建筑材料联合会颁发的计量认证证书（CMA）、授权证书（CAL）。本质检中心具备国家法律法规规定的条件和能力，可在中华人民共和国境内向全社会出具具有证明作用的数据和结果。</text>', '2019-03-13 10:28:57');
INSERT INTO `center_introduction` VALUES (2, NULL, 2, '<p>机构设置啊啊&nbsp; 啊啊啊</p>', '2019-03-13 10:29:31');
INSERT INTO `center_introduction` VALUES (3, NULL, 3, '<p>资质证书啊啊啊啊啊啊啊</p>', '2019-03-13 10:29:56');

-- ----------------------------
-- Table structure for common_admin_nav
-- ----------------------------
DROP TABLE IF EXISTS `common_admin_nav`;
CREATE TABLE `common_admin_nav`  (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '导航名称',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '状态 1开启 0关闭',
  `pid` mediumint(8) NOT NULL DEFAULT 0 COMMENT '父级id',
  `addtime` datetime(0) NOT NULL COMMENT '添加时间',
  `disorder` smallint(6) NOT NULL DEFAULT 0,
  `url` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'url地址',
  `url_type` tinyint(4) UNSIGNED NOT NULL DEFAULT 1 COMMENT '是否是本站的地址 1是 0 不是',
  `collapsed` tinyint(4) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否收缩，默认0 不收缩',
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0' COMMENT 'id直接字符串结合',
  `icon` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 137 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of common_admin_nav
-- ----------------------------
INSERT INTO `common_admin_nav` VALUES (1, '左侧导航管理', 1, 0, '2017-09-16 12:03:38', 0, '', 1, 0, '0', NULL);
INSERT INTO `common_admin_nav` VALUES (94, '角色权限管理', 1, 1, '2017-09-20 18:21:29', 42, '#', 1, 0, '0-1', 'glyphicon glyphicon-baby-formula');
INSERT INTO `common_admin_nav` VALUES (95, '导航列表', 1, 94, '2017-09-20 18:22:11', 0, 'auth/navlist', 1, 0, '0-1-94', NULL);
INSERT INTO `common_admin_nav` VALUES (96, '角色组', 1, 94, '2017-09-20 18:22:46', 1, 'auth/group', 1, 0, '0-1-94', NULL);
INSERT INTO `common_admin_nav` VALUES (97, '管理员列表', 1, 94, '2017-09-20 18:23:16', 2, 'auth/admins', 1, 0, '0-1-94', NULL);
INSERT INTO `common_admin_nav` VALUES (109, '密码管理', 1, 1, '2018-05-30 19:02:25', 10, '', 1, 0, '0-1', 'glyphicon glyphicon-cog');
INSERT INTO `common_admin_nav` VALUES (110, '修改密码', 1, 109, '2018-05-30 19:04:34', 1, 'password/updatepassword', 1, 0, '0-1-109-0-1', NULL);
INSERT INTO `common_admin_nav` VALUES (127, '网站管理', 1, 1, '2019-03-05 19:26:04', 43, '', 1, 0, '0-1', '');
INSERT INTO `common_admin_nav` VALUES (128, '地方收样处', 1, 1, '2019-03-05 20:36:27', 44, '', 1, 0, '0-1', '');
INSERT INTO `common_admin_nav` VALUES (129, '中央收样处', 1, 1, '2019-03-05 20:36:50', 45, '', 1, 0, '0-1-0', NULL);
INSERT INTO `common_admin_nav` VALUES (130, '主页管理', 1, 127, '2019-03-05 20:42:38', 1, 'main/lunbo', 1, 0, '0-1-127', '');
INSERT INTO `common_admin_nav` VALUES (131, '中心简介', 1, 127, '2019-03-05 20:43:35', 2, 'edit/aboutus', 1, 0, '0-1-127', '');
INSERT INTO `common_admin_nav` VALUES (132, '新闻中心', 1, 127, '2019-03-05 20:44:19', 3, 'edit/news', 1, 0, '0-1-127', '');
INSERT INTO `common_admin_nav` VALUES (133, '质检服务', 1, 127, '2019-03-05 20:44:52', 4, 'edit/inspection', 1, 0, '0-1-127', '');
INSERT INTO `common_admin_nav` VALUES (134, '标准化工作', 1, 127, '2019-03-05 20:45:28', 5, '', 1, 0, '0-1-127', '');
INSERT INTO `common_admin_nav` VALUES (135, '资料下载', 1, 127, '2019-03-05 20:46:00', 6, 'edit/fileDownload', 1, 0, '0-1-127', '');
INSERT INTO `common_admin_nav` VALUES (136, '联系我们', 1, 127, '2019-03-05 20:46:18', 7, 'edit/contactus', 1, 0, '0-1-127', '');

-- ----------------------------
-- Table structure for common_role
-- ----------------------------
DROP TABLE IF EXISTS `common_role`;
CREATE TABLE `common_role`  (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rolename` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '角色名称',
  `addtime` datetime(0) NOT NULL COMMENT '添加日期',
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '状态',
  `perm` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '对应的权限',
  `power` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '对应的权限',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of common_role
-- ----------------------------
INSERT INTO `common_role` VALUES (3, '测试', '2017-09-19 18:51:55', 1, NULL, 'a:21:{i:0;s:1:\"1\";i:1;s:2:\"22\";i:2;s:2:\"25\";i:3;s:2:\"26\";i:4;s:2:\"27\";i:5;s:2:\"28\";i:6;s:2:\"29\";i:7;s:2:\"30\";i:8;s:2:\"31\";i:9;s:2:\"32\";i:10;s:2:\"33\";i:11;s:2:\"34\";i:12;s:2:\"35\";i:13;s:2:\"36\";i:14;s:2:\"56\";i:15;s:2:\"57\";i:16;s:2:\"58\";i:17;s:2:\"67\";i:18;s:2:\"68\";i:19;s:2:\"89\";i:20;s:2:\"90\";}');
INSERT INTO `common_role` VALUES (2, '超级管理员', '2017-09-16 14:57:30', 1, NULL, 'a:73:{i:0;s:1:\"1\";i:1;s:2:\"21\";i:2;s:2:\"38\";i:3;s:2:\"23\";i:4;s:2:\"24\";i:5;s:2:\"22\";i:6;s:2:\"25\";i:7;s:2:\"26\";i:8;s:2:\"27\";i:9;s:2:\"28\";i:10;s:2:\"29\";i:11;s:2:\"30\";i:12;s:2:\"31\";i:13;s:2:\"32\";i:14;s:2:\"33\";i:15;s:2:\"34\";i:16;s:2:\"35\";i:17;s:2:\"36\";i:18;s:2:\"39\";i:19;s:2:\"40\";i:20;s:2:\"41\";i:21;s:2:\"42\";i:22;s:2:\"43\";i:23;s:2:\"44\";i:24;s:2:\"45\";i:25;s:2:\"46\";i:26;s:2:\"47\";i:27;s:2:\"48\";i:28;s:2:\"49\";i:29;s:2:\"50\";i:30;s:2:\"51\";i:31;s:2:\"52\";i:32;s:2:\"53\";i:33;s:2:\"54\";i:34;s:2:\"55\";i:35;s:2:\"56\";i:36;s:2:\"57\";i:37;s:2:\"58\";i:38;s:2:\"59\";i:39;s:2:\"60\";i:40;s:2:\"61\";i:41;s:2:\"62\";i:42;s:2:\"63\";i:43;s:2:\"64\";i:44;s:2:\"65\";i:45;s:2:\"66\";i:46;s:2:\"67\";i:47;s:2:\"68\";i:48;s:2:\"69\";i:49;s:2:\"70\";i:50;s:2:\"71\";i:51;s:2:\"72\";i:52;s:2:\"73\";i:53;s:2:\"74\";i:54;s:2:\"75\";i:55;s:2:\"76\";i:56;s:2:\"77\";i:57;s:2:\"78\";i:58;s:2:\"79\";i:59;s:2:\"80\";i:60;s:2:\"81\";i:61;s:2:\"82\";i:62;s:2:\"83\";i:63;s:2:\"84\";i:64;s:2:\"85\";i:65;s:2:\"86\";i:66;s:2:\"87\";i:67;s:2:\"88\";i:68;s:2:\"89\";i:69;s:2:\"90\";i:70;s:2:\"91\";i:71;s:2:\"92\";i:72;s:2:\"93\";}');
INSERT INTO `common_role` VALUES (4, '运营', '2017-09-20 11:24:51', 1, NULL, 'a:17:{i:0;s:1:\"1\";i:1;s:2:\"21\";i:2;s:2:\"38\";i:3;s:2:\"79\";i:4;s:2:\"80\";i:5;s:2:\"81\";i:6;s:2:\"82\";i:7;s:2:\"83\";i:8;s:2:\"84\";i:9;s:2:\"85\";i:10;s:2:\"86\";i:11;s:2:\"87\";i:12;s:2:\"88\";i:13;s:2:\"89\";i:14;s:2:\"90\";i:15;s:2:\"94\";i:16;s:2:\"97\";}');
INSERT INTO `common_role` VALUES (5, 'hh', '2019-01-22 12:49:03', 1, NULL, NULL);

-- ----------------------------
-- Table structure for common_system_user
-- ----------------------------
DROP TABLE IF EXISTS `common_system_user`;
CREATE TABLE `common_system_user`  (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` char(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '后台管理的用户名',
  `passwd` char(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '状态',
  `gid` smallint(8) UNSIGNED NOT NULL DEFAULT 0 COMMENT '属于哪个群组',
  `addtime` datetime(0) NOT NULL COMMENT '添加日期',
  `super_admin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '是否是超级管理员 1是有一切权限 0不是需要配置权限',
  `perm` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户的其他权限',
  `login_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of common_system_user
-- ----------------------------
INSERT INTO `common_system_user` VALUES (1, 'admin', 'dd6e5e5918e94d997c686fcebc56922f', 1, 0, '2017-09-20 12:05:13', 1, NULL, '2019-03-15 10:40:08');

-- ----------------------------
-- Table structure for constitute_certificate
-- ----------------------------
DROP TABLE IF EXISTS `constitute_certificate`;
CREATE TABLE `constitute_certificate`  (
  `id` mediumint(8) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `type` tinyint(2) NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `savetime` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of constitute_certificate
-- ----------------------------
INSERT INTO `constitute_certificate` VALUES (1, '资质证书', NULL, '<text>资质证书内容</text>', '2019-02-12 16:14:04');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `id` int(11) NOT NULL DEFAULT 1,
  `words1` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '欢迎语第一行',
  `words2` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '欢迎语第二行',
  `company_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '公司地址',
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '地址',
  `telephone` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '邮箱',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (1, '联系我们', '欢迎您的到来', '超晶科技公司', 'dmtc2007@163.com', '010-8610 53859976', '010-51164718');

-- ----------------------------
-- Table structure for contact_us
-- ----------------------------
DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE `contact_us`  (
  `postal_code` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phonenumber` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `
fax` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `consult_phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '真伪查询电话',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id` mediumint(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contact_us
-- ----------------------------
INSERT INTO `contact_us` VALUES ('copyright © 2009-2013 建筑材料工业干混砂浆产品质量监督检验测试中心', '北京市朝阳区管庄东里中国建材院内北楼', '010-51164723 010-51164718', '', '010-51164716', 'dmtc2007@163.com', 1);

-- ----------------------------
-- Table structure for file_download
-- ----------------------------
DROP TABLE IF EXISTS `file_download`;
CREATE TABLE `file_download`  (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `filename` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '文件名',
  `save_path` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` tinyint(2) NULL DEFAULT NULL COMMENT '0为资料下载，1为标准下载',
  `savetime` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of file_download
-- ----------------------------
INSERT INTO `file_download` VALUES (1, '资料1', '/Public/file/data/data1.docx', 0, NULL);
INSERT INTO `file_download` VALUES (2, '资料2', '/Public/file/data/data2.docx', 0, NULL);
INSERT INTO `file_download` VALUES (3, '资料3', '/Public/file/data/data3.docx', 0, NULL);
INSERT INTO `file_download` VALUES (4, '资料4', '/Public/file/data/data4.docx', 0, NULL);
INSERT INTO `file_download` VALUES (5, '资料5', '/Public/file/data/data5.docx', 0, NULL);
INSERT INTO `file_download` VALUES (6, '标准1', '/Public/file/standard/standard1.docx', 1, NULL);
INSERT INTO `file_download` VALUES (7, '标准2', '/Public/file/standard/standard2.docx', 1, NULL);
INSERT INTO `file_download` VALUES (8, '标准3', '/Public/file/standard/standard3.docx', 1, NULL);
INSERT INTO `file_download` VALUES (9, '标准4', '/Public/file/standard/standard4.docx', 1, NULL);
INSERT INTO `file_download` VALUES (10, '标准5', '/Public/file/standard/standard5.docx', 1, NULL);

-- ----------------------------
-- Table structure for footer
-- ----------------------------
DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer`  (
  `title` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'copyright和公司名称',
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `record` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telephone` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telephone2` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`title`(20)) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of footer
-- ----------------------------
INSERT INTO `footer` VALUES ('copyright © 2009-2013 建筑材料工业干混砂浆产品质量监督检验测试中心', 'dmtc2007@163.com', '京ICP备06067340号-2', '北京市朝阳区管庄东里中国建材院内北楼', '010-51164723', '010-51164718');

-- ----------------------------
-- Table structure for head_image
-- ----------------------------
DROP TABLE IF EXISTS `head_image`;
CREATE TABLE `head_image`  (
  `id` mediumint(4) NOT NULL AUTO_INCREMENT,
  `type` mediumint(4) NULL DEFAULT NULL,
  `pic_path` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `information_pic_path` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'NULL',
  `title` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `save_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of head_image
-- ----------------------------
INSERT INTO `head_image` VALUES (1, 1, '/Public/attached/2019-03-12/1552395846.jpg', '/Public/attached/2019-03-12/1552395846_thumb.jpg', NULL, '2019-03-12 21:04:07');
INSERT INTO `head_image` VALUES (2, 2, '/Public/attached/2019-03-13/1552445275.jpg', '/Public/attached/2019-03-13/1552445275_thumb.jpg', NULL, '2019-03-13 10:47:56');
INSERT INTO `head_image` VALUES (3, 3, '/Public/attached/2019-03-13/1552461624.jpg', '/Public/attached/2019-03-13/1552461624_thumb.jpg', NULL, '2019-03-13 15:20:25');
INSERT INTO `head_image` VALUES (4, 6, '/Public/attached/2019-03-14/1552540808.jpg', '/Public/attached/2019-03-14/1552540808_thumb.jpg', NULL, '2019-03-14 13:20:09');

-- ----------------------------
-- Table structure for home_image
-- ----------------------------
DROP TABLE IF EXISTS `home_image`;
CREATE TABLE `home_image`  (
  `id` mediumint(4) NOT NULL AUTO_INCREMENT,
  `picture` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `picture_name` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `type` mediumint(4) NULL DEFAULT NULL COMMENT '0为主页大图，其余为其他页面的滚动大图',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home_image
-- ----------------------------
INSERT INTO `home_image` VALUES (1, '/Public/attached/2018-06-25/1529890578.png', NULL, NULL);
INSERT INTO `home_image` VALUES (2, '/Public/attached/2018-06-25/1529890591.png', NULL, NULL);
INSERT INTO `home_image` VALUES (3, '/Public/attached/2018-06-25/1529890599.png', NULL, NULL);

-- ----------------------------
-- Table structure for information
-- ----------------------------
DROP TABLE IF EXISTS `information`;
CREATE TABLE `information`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `information_images_path` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '缩略图地址',
  `picture_path` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '原图地址',
  `type` int(11) NULL DEFAULT NULL COMMENT '1是超晶资讯；2是行业动态',
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `save_time` datetime(0) NULL DEFAULT NULL,
  `if_special` tinyint(1) NULL DEFAULT 0 COMMENT '是否设为展板，1是',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES (20, '/Public/attached/2018-07-05/1530789342_thumb.jpeg', '/Public/attached/2018-07-05/1530789342.jpeg', 1, '超晶诺迪克光电产业研究院正式成立', '<p style=\"text-indent: 32px; text-align: left; line-height: 1.75em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">为了夯实超晶科技的研发链条，由王庶民教授领衔的宁波诺迪克光电产业研究院在宁波余姚落地注册。世界分子束外延之父、美国最高科学奖和技术奖获得者、美国科学院院士、中国科学院外籍院士卓以和先生出任该研究院名誉院长。</span></p><p><br/></p>', '2018-06-13 10:09:29', 0);
INSERT INTO `information` VALUES (21, '/Public/attached/2018-06-13/1528855467_thumb.png', '/Public/attached/2018-06-13/1528855467.png', 1, '超晶科技王庶民：化合物半导体芯片前景令人鼓舞', '<p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">【来源：投中网 作者：陶辉东】</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-size: 20px; font-family: &quot;Adobe Song Std L&quot;, serif; color: rgb(0, 0, 0);\">2018年4月23-25日，由投中信息、投中网主办，投中资本协办的“第十二届中国投资年会·年度峰会”在上海金茂君悦酒店举办。本次会议主题为“价值的力量”，来自国内外上百家私募股权机构汇聚一堂，对当前行业热门话题展开讨论。</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">此次峰会上，超晶科技首席科学家王庶民在主题为“化合物半导体芯片的应用与机遇”演讲中表示，虽然化合物芯片现在与硅比还是“小个儿”，但是它的市场潜力很大。英特尔做了一个预言，到2030年化合物半导体将占据整个半导体芯片市场的60%，这个数据是非常惊人的。</span></p><p style=\"text-align:center\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; color: rgb(0, 0, 0);\"><img src=\"/Uploads/ueditor/image/20180613/5b207b2fea595.png\" title=\"5b207b2fea595.png\" alt=\"图片 2.png\"/></span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">王庶民表示，在国防层面，西方国家，在化合物半导体的材料、器件上都对中国是禁运，在民品领域，西方对一些高端的化合物半导体材料和器件也实现了垄断和禁运。国内除了第三代的照明用氮化镓，在化合物半导体领域，目前还没有一个企业能够为客户提供定制的材料。而超晶希望未来成为亚洲最大的化合物半导体材料的供应商。</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-size: 20px; color: rgb(0, 0, 0);\"><strong><span style=\"color: rgb(0, 0, 0); font-size: 20px; font-family: &quot;Adobe Song Std L&quot;, serif;\">以下为王庶民在“第十二届中国投资年会”精彩演讲实录，投中网整理。</span></strong></span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">王庶民：感谢投中给这样一个机会跟大家分享，分享化合物半导体芯片，同时也为超晶科技做宣传。</span></p><p style=\"margin-left: 60px; text-align: left; line-height: 2em;\"><span style=\"font-size: 20px; color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 0); font-size: 20px; font-family: Wingdings;\">l<span style=\"color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 9px; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp; </span></span><span style=\"color: rgb(0, 0, 0); font-size: 20px; font-family: &quot;Adobe Song Std L&quot;, serif;\">摩尔定律终结，化合物半导体登场</span></span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">首先给大家稍微科普一下化合物半导体芯片。可能在座的大部分是搞投资的。这位是2000年的诺贝尔物理奖获得者。根据他的观点，上个世纪人类有三大发明，第一个发明是1942年的核反应堆，这解决了当今社会的能源问题。第二个就是美国贝尔实验室的晶体管，这给我们带来了现在的电子时代。第三个也是在美国，就是60年代的激光器，给我们带来了现在的信息社会。</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">现在我们处于信息时代，很多大家谈的是软条件，包括程序、物联网等，构成这些物联网或者是所有通信最根本的硬件、基石是两个，第一个就是所谓的集成电路，第二个就是叫半导体的异质结，由于集成电路和异质结，2000年三位专家获得了诺贝尔物理奖。</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">大家知道集成电路里面有一个摩尔定律。也就是集成电路的芯片的数量是每18个月翻一番，随着数量越来越多，它一定在某个时期达到极限，这个极限就是2016年，2016年摩尔定律正式宣告终止。就在前夕，美国的英特尔公司它首先开发了14纳米的芯片，也就是说在我们像手指这么大的一个尺寸里面，一共包含了13亿个晶体管，就相当于中国全国人口的数量。所以当摩尔定律终结以后，如何再继续发展集成电路，一个必然的趋势就是找新的材料，就是叫化合物半导体材料。</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">化合物半导体材料，跟传统意义上的硅材料有较大的区别，简而言之的话我们可以这样理解，就是构成集成电路的硅材料，他里面的电子运行速度是慢的，运行速度有限，但是化合物半导体速度快得多，一般来说可以快几倍和几十倍，再有就是硅材料是几乎不能发光的，我们现在进入光通讯的时代，而半导体化合物是非常好的光源，这两点决定了在新的材料方面，硅材料迟早有一天被半导体化合物材料取代。</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">另外一个是异质结结构，这是一种人造的晶体材料，每一层的晶体都是原子级的，也就是纳米科学。要控制这样一种的话，就是很关键的外延集结技术，其中一种是分子束外延技术，这个开创者就是美国的卓以和新生（音）。大家听说过化合物半导体，特别是第三代，以GaN（氮化镓）为代表，除了GaN以外，还有砷化镓、磷化铟等，有照明，红外成像、激光切割、光纤通讯、射频器等。化合物半导体里面我举个例子就是垂直腔面发射激光器，像iPhone的手机里面已经大量使用，另外是在高速通信，也就是未来的5G里面会用到这样新型的激光器。</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">化合物芯片与硅比现在还是小个儿，但是它的市场是有潜力的。现在已经有460亿美元以上的市场。英特尔做了一个预言，它预言到2030年，化合物半导体将占据整个半导体芯片市场的60%，这个数据是非常惊人的，也就是化合物半导体它的未来前途是非常光明的。</span></p><p style=\"margin-left: 60px; text-align: left; line-height: 2em;\"><span style=\"font-size: 20px; color: rgb(0, 0, 0);\"><span style=\"color: rgb(0, 0, 0); font-size: 20px; font-family: Wingdings;\">l<span style=\"color: rgb(0, 0, 0); font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 9px; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp; </span></span><span style=\"color: rgb(0, 0, 0); font-size: 20px; font-family: &quot;Adobe Song Std L&quot;, serif;\">打破西方技术垄断</span></span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">另外是它的战略意义，大家知道最近中美贸易战，大家把半导体芯片提到了一个日常的话题。同样的话对于化合物半导体它有两个层面，第一个层面是在国防层面，也就是说西方的话，特别是美国，对于中国的化合物材料、器件都是禁运的。第二个从国家军口的角度来讲需求量非常大，也就是中间的缺口很大。另外是我们国家的水平和境外相比也是差距很大。</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">第二个层面就是在民品领域，西方对于一些高端的化合物材料和器件也是实现了垄断和禁运。国内除了第三代的照明氮化镓，因为这个大家投资了很多，除此以外，在化合物半导体，目前还没有一个企业是可以为客户提供定制的化合物半导体材料。而超晶是希望未来成为亚洲最大的化合物半导体材料的供应商。</span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">最后借这个机会也跟大家作一个宣传，关于超晶科技，我们希望在材料领域，化合物半导体的材料领域成为中国乃至亚洲的一个领先的企业。同时在高端化合物芯片方面，我们也希望成为国内的供应商。最后我们希望能够保持人才与技术的先进性，能够成为国内企业里面的一个创新基地。谢谢！</span></p><p><br/></p>', '2018-06-13 10:09:04', 1);
INSERT INTO `information` VALUES (22, '/Public/attached/2018-06-13/1528855678_thumb.png', '/Public/attached/2018-06-13/1528855678.png', 1, '半导体材料和光电子器件论坛在宁波成功举办', '<p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-size: 20px; font-family: &quot;Adobe Song Std L&quot;, serif; color: rgb(0, 0, 0);\">2018 年 5 月 11 日，由诺迪克光电产业研究院主办，超晶科技 (北京)有限公司承办的“半导体材料和光电子器件论坛”在浙江省委党校四明山分校举办。论坛由诺迪克光电产业研究院院长，超晶科技首席科学家王庶民教授主持。</span><span style=\"font-size: 20px; font-family: &quot;Adobe Song Std L&quot;, serif;\"> </span></p><p style=\"text-align:center\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px;\"><img src=\"/Uploads/ueditor/image/20180613/5b207c43299e8.png\" title=\"5b207c43299e8.png\" alt=\"图片 3.png\"/></span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">本论坛邀请了五位重量级嘉宾参会，包括国家“千人计划”专家、中科院苏州纳米所徐科教授，国家“千人计划”专家、西南技术物理研究所宋海智教授，中科院半导体所杰青牛智川教授，清华大学杰青罗毅教授，苏州长光华芯光电技术有限公司总经理廖新胜博士等。五位专家的报告涵盖了半导体激光器的发展及趋势、红外探测器的研发现状及前景、智能驾驶领域的热门技术-激光雷达、第二代半导体 GaN 的高质量单晶研发等从材料到器件的多维度领域，现场气氛积极热烈。 </span></p><p style=\"text-indent: 32px; text-align: left; line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">超晶科技首席科学家王庶民教授做了题为:VCSEL 的研发现状及趋势的报告。主要讲解了 VCSEL 的基本概念、本领域知名专家、 VCSEL 在人工智能、高速通信领域的发展前景，重点讲解了国际上 VCSEL 的研发指标，分析了我国当前技术发展与国际上技术的差距。</span></p><p style=\"line-height: 2em;\"><span style=\"font-family: &quot;Adobe Song Std L&quot;, serif; font-size: 20px; color: rgb(0, 0, 0);\">本次论坛不仅增强了超晶科技与光电材料与器件领域的科学家和企业家的互动，加深了彼此的了解，也为多方开展深层次的合作奠定了良好的基础。</span></p><p><br/></p>', '2018-06-13 10:07:46', 0);
INSERT INTO `information` VALUES (23, NULL, NULL, NULL, '', '<p>这里是通知公共1</p>', '2019-03-11 16:51:50', 0);

-- ----------------------------
-- Table structure for inspection_process
-- ----------------------------
DROP TABLE IF EXISTS `inspection_process`;
CREATE TABLE `inspection_process`  (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `type` tinyint(2) NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `save_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inspection_process
-- ----------------------------
INSERT INTO `inspection_process` VALUES (1, '质检流程', 1, '<text>此处为质检流程hhhh</text>', '2019-03-13 16:21:05');

-- ----------------------------
-- Table structure for inspection_scope
-- ----------------------------
DROP TABLE IF EXISTS `inspection_scope`;
CREATE TABLE `inspection_scope`  (
  `id` mediumint(20) NOT NULL AUTO_INCREMENT,
  `information_pic_path` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_path` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `type` tinyint(2) NULL DEFAULT NULL COMMENT '0为通知公告，1为行业新闻',
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `save_time` datetime(0) NULL DEFAULT NULL,
  `if_special` tinyint(1) NULL DEFAULT NULL COMMENT '是否设为展板，1是',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inspection_scope
-- ----------------------------
INSERT INTO `inspection_scope` VALUES (1, NULL, NULL, NULL, '<text>质检范围1内容</text>', '质检范围1', '2019-02-03 10:08:58', NULL);
INSERT INTO `inspection_scope` VALUES (2, NULL, NULL, NULL, '<text>质检范围2内容</text>', '质检范围2', '2019-02-14 15:57:53', NULL);
INSERT INTO `inspection_scope` VALUES (3, NULL, NULL, NULL, '<text>质检范围3内容</text>', '质检范围3', '2019-02-14 15:58:23', NULL);
INSERT INTO `inspection_scope` VALUES (4, NULL, NULL, NULL, '<text>质检范围4内容</text>', '质检范围4', '2019-02-14 15:58:44', NULL);
INSERT INTO `inspection_scope` VALUES (5, NULL, NULL, NULL, '<text>质检范围5内容hhh</text>', '质检范围5', '2019-03-13 16:24:38', NULL);

-- ----------------------------
-- Table structure for lab_image
-- ----------------------------
DROP TABLE IF EXISTS `lab_image`;
CREATE TABLE `lab_image`  (
  `id` mediumint(4) NOT NULL AUTO_INCREMENT,
  `pic_path` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `information_pic_path` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lab_image
-- ----------------------------
INSERT INTO `lab_image` VALUES (1, '/Public/picture/lab_image/1549161859(1).jpg', NULL, '设备1');
INSERT INTO `lab_image` VALUES (2, '/Public/picture/lab_image/1549161903(1).jpg', NULL, '设备2');
INSERT INTO `lab_image` VALUES (3, '/Public/picture/lab_image/20130301082708_76145.jpg', NULL, '设备3');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` mediumint(20) NOT NULL AUTO_INCREMENT,
  `information_pic_path` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pic_path` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `type` tinyint(2) NULL DEFAULT NULL COMMENT '0为通知公告，1为行业新闻',
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `save_time` datetime(0) NULL DEFAULT NULL,
  `if_special` tinyint(1) NULL DEFAULT NULL COMMENT '是否设为展板，1是',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, NULL, NULL, 0, '<text>通知公告1内容</text>', '通知公告1', '2019-02-11 17:48:00', 0);
INSERT INTO `news` VALUES (2, '/Public/attached/2019-03-11/1552308491_thumb.jpg', '/Public/attached/2019-03-11/1552308491.jpg', 1, '<text>行业新闻1内容</text>', '行业新闻1', '2019-03-12 10:00:39', 0);
INSERT INTO `news` VALUES (3, NULL, NULL, 0, '<text>通知公告2内容</text>', '通知公告2', '2019-02-12 16:45:17', 0);
INSERT INTO `news` VALUES (4, NULL, NULL, 0, '<text>通知公告3内容</text>', '通知公告3', '2019-02-12 16:45:45', 0);
INSERT INTO `news` VALUES (5, NULL, NULL, 0, '<text>质检范围5内容hhh</text>', '质检范围5', '2019-03-13 16:21:28', 0);
INSERT INTO `news` VALUES (6, NULL, NULL, 0, '<text>通知公告5内容</text>', '通知公告5', '2019-02-12 16:46:37', 0);
INSERT INTO `news` VALUES (7, NULL, NULL, 1, '<text>行业新闻2内容</text>', '行业新闻2', '2019-02-12 16:47:52', 0);
INSERT INTO `news` VALUES (8, NULL, NULL, 1, '<text>行业新闻3内容</text>', '行业新闻3', '2019-02-12 16:48:18', 0);
INSERT INTO `news` VALUES (9, NULL, NULL, 1, '<text>行业新闻4内容</text>', '行业新闻4', '2019-02-12 16:48:46', 0);
INSERT INTO `news` VALUES (10, NULL, NULL, 1, '<text>行业新闻5内容</text>', '行业新闻5', '2019-02-12 16:49:04', 0);
INSERT INTO `news` VALUES (11, NULL, NULL, 1, '<p>这里是行业新闻<br/></p>', '行业新闻111', '2019-03-11 17:27:21', NULL);
INSERT INTO `news` VALUES (12, NULL, NULL, 1, '<p>这里是行业新闻222</p>', '行业新闻222', '2019-03-11 18:36:37', NULL);

-- ----------------------------
-- Table structure for org_structure
-- ----------------------------
DROP TABLE IF EXISTS `org_structure`;
CREATE TABLE `org_structure`  (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `type` tinyint(2) NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `savetime` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of org_structure
-- ----------------------------
INSERT INTO `org_structure` VALUES (1, '机构设置', NULL, '<text>机构设置内容</text>', '2019-02-12 14:35:36');

SET FOREIGN_KEY_CHECKS = 1;
