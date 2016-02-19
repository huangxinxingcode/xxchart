-- ----------------------------
-- Table structure for xx_user
-- ----------------------------
DROP TABLE IF EXISTS `xx_user`;
CREATE TABLE `xx_user` (
  `uid` int(10) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `nickname` varchar(100) NOT NULL DEFAULT '' COMMENT '昵称',
  `phone`  varchar(100)   NOT NULL DEFAULT ''  COMMENT '手机',
  `email`  varchar(100)  NOT NULL DEFAULT ''  COMMENT '邮箱',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '性别',
  `birthday` date NOT NULL DEFAULT '0000-00-00' COMMENT '生日',
  `qq` char(10) NOT NULL DEFAULT '' COMMENT 'qq号',
  `score` mediumint(8) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `login` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '用户状态',
  `public_count` smallint(4) DEFAULT NULL,
  `extra_field` text,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8 COMMENT='用户表';