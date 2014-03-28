<?php

/*

INSERT INTO `wp_terms` VALUES (10, '新居快报', 10, 0);
INSERT INTO `wp_term_taxonomy` VALUES (10, 10, 'category', '', 0, 0);

INSERT INTO `wp_terms` VALUES (20, '首页焦点', '20', 0);
INSERT INTO `wp_term_taxonomy` VALUES (20, 20, 'category', '', 0, 0);

INSERT INTO `wp_terms` VALUES (21, '功能定制', '21', 0);
INSERT INTO `wp_term_taxonomy` VALUES (21, 21, 'category', '', 0, 0);

INSERT INTO `wp_terms` VALUES (22, '特色定制', '22', 0);
INSERT INTO `wp_term_taxonomy` VALUES (22, 22, 'category', '', 0, 0);

INSERT INTO `wp_terms` VALUES (23, '热销定制', '23', 0);
INSERT INTO `wp_term_taxonomy` VALUES (23, 23, 'category', '', 0, 0);

INSERT INTO `wp_terms` VALUES (24, '智能家具', '24', 0);
INSERT INTO `wp_term_taxonomy` VALUES (24, 24, 'category', '', 0, 0);

INSERT INTO `wp_terms` VALUES (25, '百变定制', '25', 0);
INSERT INTO `wp_term_taxonomy` VALUES (25, 25, 'category', '', 0, 0);

INSERT INTO `wp_terms` VALUES (26, '我秀我家', '26', 0);
INSERT INTO `wp_term_taxonomy` VALUES (26, 26, 'category', '', 0, 0);

INSERT INTO `wp_terms` VALUES (27, '视频展示', 'video', 0);
INSERT INTO `wp_term_taxonomy` VALUES (27, 27, 'category', '', 0, 0);


-- 产品大类
INSERT INTO `wp_terms` VALUES (51, '卧房', 'room', 0);
INSERT INTO `wp_term_taxonomy` VALUES (51, 51, 'genre', '', 0, 0);

INSERT INTO `wp_terms` VALUES (52, '书房', 'study', 0);
INSERT INTO `wp_term_taxonomy` VALUES (52, 52, 'genre', '', 0, 0);

INSERT INTO `wp_terms` VALUES (53, '门的世界', 'door', 0);
INSERT INTO `wp_term_taxonomy` VALUES (53, 53, 'genre', '', 0, 0);

INSERT INTO `wp_terms` VALUES (54, '整体衣柜', 'chest', 0);
INSERT INTO `wp_term_taxonomy` VALUES (54, 54, 'genre', '', 0, 0);

INSERT INTO `wp_terms` VALUES (55, '青少年房', 'young', 0);
INSERT INTO `wp_term_taxonomy` VALUES (55, 55, 'genre', '', 0, 0);

-- 运营需求
INSERT INTO `wp_terms` VALUES (76, '经典定制推荐', 'classic', 0);
INSERT INTO `wp_term_taxonomy` VALUES (76, 76, 'genre', '', 0, 0);

INSERT INTO `wp_terms` VALUES (77, '热销排行', 'hot', 0);
INSERT INTO `wp_term_taxonomy` VALUES (77, 77, 'genre', '', 0, 0);

INSERT INTO `wp_terms` VALUES (78, 'DIY推荐', 'top-diy', 0);
INSERT INTO `wp_term_taxonomy` VALUES (78, 78, 'genre', '', 0, 0);

-- DIY 展示
INSERT INTO `wp_terms` VALUES (80, 'DIY展示', '80', 0);
INSERT INTO `wp_term_taxonomy` VALUES (80, 80, 'genre', '', 0, 0);

INSERT INTO `wp_terms` VALUES (81, 'DIY卧房', '81', 0);
INSERT INTO `wp_term_taxonomy` VALUES (81, 81, 'genre', '', 80, 0);

INSERT INTO `wp_terms` VALUES (82, 'DIY书房', '82', 0);
INSERT INTO `wp_term_taxonomy` VALUES (82, 82, 'genre', '', 80, 0);

INSERT INTO `wp_terms` VALUES (83, 'DIY衣柜', '83', 0);
INSERT INTO `wp_term_taxonomy` VALUES (83, 83, 'genre', '', 80, 0);

INSERT INTO `wp_terms` VALUES (84, 'DIY青少年', '84', 0);
INSERT INTO `wp_term_taxonomy` VALUES (84, 84, 'genre', '', 80, 0);

INSERT INTO `wp_terms` VALUES (85, 'DIY门的世界', '85', 0);
INSERT INTO `wp_term_taxonomy` VALUES (85, 85, 'genre', '', 80, 0);

-- 风格
INSERT INTO `wp_terms` VALUES (100, '风格', '100', 0);
INSERT INTO `wp_term_taxonomy` VALUES (100, 100, 'genre', '', 0, 0);
-- -- 米兰剪影
INSERT INTO `wp_terms` VALUES (101, '米兰剪影', '101', 0);
INSERT INTO `wp_term_taxonomy` VALUES (101, 101, 'genre', '', 100, 0);
-- -- 英伦印象
INSERT INTO `wp_terms` VALUES (102, '英伦印象', '102', 0);
INSERT INTO `wp_term_taxonomy` VALUES (102, 102, 'genre', '', 100, 0);
-- -- 北欧阳光
INSERT INTO `wp_terms` VALUES (103, '北欧阳光', '103', 0);
INSERT INTO `wp_term_taxonomy` VALUES (103, 103, 'genre', '', 100, 0);
-- -- 韩式田园
INSERT INTO `wp_terms` VALUES (104, '韩式田园', '104', 0);
INSERT INTO `wp_term_taxonomy` VALUES (104, 104, 'genre', '', 100, 0);
-- -- 北美枫情
INSERT INTO `wp_terms` VALUES (105, '北美枫情', '105', 0);
INSERT INTO `wp_term_taxonomy` VALUES (105, 105, 'genre', '', 100, 0);
-- -- 德国森林
INSERT INTO `wp_terms` VALUES (106, '德国森林', '106', 0);
INSERT INTO `wp_term_taxonomy` VALUES (106, 106, 'genre', '', 100, 0);
-- -- 简约主义
INSERT INTO `wp_terms` VALUES (107, '简约主义', '107', 0);
INSERT INTO `wp_term_taxonomy` VALUES (107, 107, 'genre', '', 100, 0);
-- -- 浪漫主义
INSERT INTO `wp_terms` VALUES (108, '浪漫主义', '108', 0);
INSERT INTO `wp_term_taxonomy` VALUES (108, 108, 'genre', '', 100, 0);
-- -- 挪威月色
INSERT INTO `wp_terms` VALUES (109, '挪威月色', '109', 0);
INSERT INTO `wp_term_taxonomy` VALUES (109, 109, 'genre', '', 100, 0);
-- -- 芭堤雅
INSERT INTO `wp_terms` VALUES (110, '芭堤雅', '110', 0);
INSERT INTO `wp_term_taxonomy` VALUES (110, 110, 'genre', '', 100, 0);
-- -- 加州梦
INSERT INTO `wp_terms` VALUES (111, '加州梦', '111', 0);
INSERT INTO `wp_term_taxonomy` VALUES (111, 111, 'genre', '', 100, 0);
-- -- 新中式主义
INSERT INTO `wp_terms` VALUES (112, '新中式主义', '112', 0);
INSERT INTO `wp_term_taxonomy` VALUES (112, 112, 'genre', '', 100, 0);
-- -- 里昂春天
INSERT INTO `wp_terms` VALUES (113, '里昂春天', '113', 0);
INSERT INTO `wp_term_taxonomy` VALUES (113, 113, 'genre', '', 100, 0);
-- -- 首尔之滨
INSERT INTO `wp_terms` VALUES (114, '首尔之滨', '114', 0);
INSERT INTO `wp_term_taxonomy` VALUES (114, 114, 'genre', '', 100, 0);
-- -- 丹麦本色
INSERT INTO `wp_terms` VALUES (115, '丹麦本色', '115', 0);
INSERT INTO `wp_term_taxonomy` VALUES (115, 115, 'genre', '', 100, 0);
-- -- 卡罗摩卡
INSERT INTO `wp_terms` VALUES (116, '卡罗摩卡', '116', 0);
INSERT INTO `wp_term_taxonomy` VALUES (116, 116, 'genre', '', 100, 0);
-- -- 浩漫红影
INSERT INTO `wp_terms` VALUES (117, '浩漫红影', '117', 0);
INSERT INTO `wp_term_taxonomy` VALUES (117, 117, 'genre', '', 100, 0);
-- -- 男孩的乐趣
INSERT INTO `wp_terms` VALUES (118, '男孩的乐趣', '118', 0);
INSERT INTO `wp_term_taxonomy` VALUES (118, 118, 'genre', '', 100, 0);
-- -- 女孩的乐趣
INSERT INTO `wp_terms` VALUES (119, '女孩的乐趣', '119', 0);
INSERT INTO `wp_term_taxonomy` VALUES (119, 119, 'genre', '', 100, 0);
-- -- 双子座
INSERT INTO `wp_terms` VALUES (120, '双子座', '120', 0);
INSERT INTO `wp_term_taxonomy` VALUES (120, 120, 'genre', '', 100, 0);
-- -- 米奇系列
INSERT INTO `wp_terms` VALUES (121, '米奇系列', '121', 0);
INSERT INTO `wp_term_taxonomy` VALUES (121, 121, 'genre', '', 100, 0);


-- 功能
INSERT INTO `wp_terms` VALUES (200, '功能', '200', 0);
INSERT INTO `wp_term_taxonomy` VALUES (200, 200, 'genre', '', 0, 0);
-- -- 卧房
-- -- 整体衣柜
INSERT INTO `wp_terms` VALUES (201, '整体衣柜', '201', 0);
INSERT INTO `wp_term_taxonomy` VALUES (201, 201, 'genre', '', 200, 0);
-- -- 衣帽间
INSERT INTO `wp_terms` VALUES (202, '衣帽间', '202', 0);
INSERT INTO `wp_term_taxonomy` VALUES (202, 202, 'genre', '', 200, 0);
-- -- 床组合
INSERT INTO `wp_terms` VALUES (203, '床组合', '203', 0);
INSERT INTO `wp_term_taxonomy` VALUES (203, 203, 'genre', '', 200, 0);
-- -- 电视柜组合
INSERT INTO `wp_terms` VALUES (204, '电视柜组合', '204', 0);
INSERT INTO `wp_term_taxonomy` VALUES (204, 204, 'genre', '', 200, 0);
-- -- 飘窗利用
INSERT INTO `wp_terms` VALUES (205, '飘窗组合', '205', 0);
INSERT INTO `wp_term_taxonomy` VALUES (205, 205, 'genre', '', 200, 0);
-- -- 书房
-- -- 书柜组合
INSERT INTO `wp_terms` VALUES (206, '书柜组合', '206', 0);
INSERT INTO `wp_term_taxonomy` VALUES (206, 206, 'genre', '', 200, 0);
-- -- 直角书柜组合
INSERT INTO `wp_terms` VALUES (207, '直角书柜组合', '207', 0);
INSERT INTO `wp_term_taxonomy` VALUES (207, 207, 'genre', '', 200, 0);
-- -- 转角书柜组合
INSERT INTO `wp_terms` VALUES (208, '转角书柜组合', '208', 0);
INSERT INTO `wp_term_taxonomy` VALUES (208, 208, 'genre', '', 200, 0);
-- -- 多功能室组合
INSERT INTO `wp_terms` VALUES (209, '多功能室组合', '209', 0);
INSERT INTO `wp_term_taxonomy` VALUES (209, 209, 'genre', '', 200, 0);
-- -- 门
-- -- 特色平贴系列
INSERT INTO `wp_terms` VALUES (210, '特色平贴系列', '210', 0);
INSERT INTO `wp_term_taxonomy` VALUES (210, 210, 'genre', '', 200, 0);
-- -- 百叶系列
INSERT INTO `wp_terms` VALUES (211, '百叶系列', '211', 0);
INSERT INTO `wp_term_taxonomy` VALUES (211, 211, 'genre', '', 200, 0);
-- -- 玻璃系列
INSERT INTO `wp_terms` VALUES (212, '玻璃系列', '212', 0);
INSERT INTO `wp_term_taxonomy` VALUES (212, 212, 'genre', '', 200, 0);
-- -- 阻尼系列
INSERT INTO `wp_terms` VALUES (213, '阻尼系列', '213', 0);
INSERT INTO `wp_term_taxonomy` VALUES (213, 213, 'genre', '', 200, 0);
-- -- 智能门系列
INSERT INTO `wp_terms` VALUES (214, '智能门系列', '214', 0);
INSERT INTO `wp_term_taxonomy` VALUES (214, 214, 'genre', '', 200, 0);
-- -- 开门系列
INSERT INTO `wp_terms` VALUES (215, '开门系列', '215', 0);
INSERT INTO `wp_term_taxonomy` VALUES (215, 215, 'genre', '', 200, 0);
-- -- 折叠门系列
INSERT INTO `wp_terms` VALUES (216, '折叠门系列', '216', 0);
INSERT INTO `wp_term_taxonomy` VALUES (216, 216, 'genre', '', 200, 0);
-- -- 吊趟门系列
INSERT INTO `wp_terms` VALUES (217, '吊趟门系列', '217', 0);
INSERT INTO `wp_term_taxonomy` VALUES (217, 217, 'genre', '', 200, 0);
-- -- 实木系列
INSERT INTO `wp_terms` VALUES (218, '实木系列', '218', 0);
INSERT INTO `wp_term_taxonomy` VALUES (218, 218, 'genre', '', 200, 0);
-- -- 卧房阳台隔断门
INSERT INTO `wp_terms` VALUES (219, '卧房阳台隔断门', '219', 0);
INSERT INTO `wp_term_taxonomy` VALUES (219, 219, 'genre', '', 200, 0);
-- -- 玄关门
INSERT INTO `wp_terms` VALUES (220, '玄关门', '220', 0);
INSERT INTO `wp_term_taxonomy` VALUES (220, 220, 'genre', '', 200, 0);
-- -- 整体衣柜
-- -- 一字型衣柜
INSERT INTO `wp_terms` VALUES (221, '一字型衣柜', '221', 0);
INSERT INTO `wp_term_taxonomy` VALUES (221, 221, 'genre', '', 200, 0);
-- -- L 型衣柜
INSERT INTO `wp_terms` VALUES (222, 'L 型衣柜', '222', 0);
INSERT INTO `wp_term_taxonomy` VALUES (222, 222, 'genre', '', 200, 0);
-- -- 趟门衣柜
INSERT INTO `wp_terms` VALUES (223, '趟门衣柜', '223', 0);
INSERT INTO `wp_term_taxonomy` VALUES (223, 223, 'genre', '', 200, 0);
-- -- 掩门衣柜
INSERT INTO `wp_terms` VALUES (224, '掩门衣柜', '224', 0);
INSERT INTO `wp_term_taxonomy` VALUES (224, 224, 'genre', '', 200, 0);
-- -- 内嵌电视衣柜
INSERT INTO `wp_terms` VALUES (225, '内嵌电视衣柜', '225', 0);
INSERT INTO `wp_term_taxonomy` VALUES (225, 225, 'genre', '', 200, 0);
-- -- 避梁包柱衣柜
INSERT INTO `wp_terms` VALUES (226, '避梁包柱衣柜', '226', 0);
INSERT INTO `wp_term_taxonomy` VALUES (226, 226, 'genre', '', 200, 0);
-- -- 青少年房
-- -- 书桌组合
INSERT INTO `wp_terms` VALUES (227, '书桌组合', '227', 0);
INSERT INTO `wp_term_taxonomy` VALUES (227, 227, 'genre', '', 200, 0);


-- 价格
INSERT INTO `wp_terms` VALUES (300, '价格', '300', 0);
INSERT INTO `wp_term_taxonomy` VALUES (300, 300, 'genre', '', 0, 0);
-- -- 5000以下
INSERT INTO `wp_terms` VALUES (301, '5000以下', '301', 0);
INSERT INTO `wp_term_taxonomy` VALUES (301, 301, 'genre', '', 300, 0);
-- -- 5000-7000元
INSERT INTO `wp_terms` VALUES (302, '5000-7000元', '302', 0);
INSERT INTO `wp_term_taxonomy` VALUES (302, 302, 'genre', '', 300, 0);
-- -- 7000-8000元
INSERT INTO `wp_terms` VALUES (303, '7000-8000元', '303', 0);
INSERT INTO `wp_term_taxonomy` VALUES (303, 303, 'genre', '', 300, 0);
-- -- 8000-1000元
INSERT INTO `wp_terms` VALUES (304, '8000-10000元', '304', 0);
INSERT INTO `wp_term_taxonomy` VALUES (304, 304, 'genre', '', 300, 0);
-- -- 10000以上
INSERT INTO `wp_terms` VALUES (305, '10000以上', '305', 0);
INSERT INTO `wp_term_taxonomy` VALUES (305, 305, 'genre', '', 300, 0);
-- -- 10000以下
INSERT INTO `wp_terms` VALUES (306, '10000以下', '306', 0);
INSERT INTO `wp_term_taxonomy` VALUES (306, 306, 'genre', '', 300, 0);
-- -- 10000-12000元
INSERT INTO `wp_terms` VALUES (307, '10000-12000元', '307', 0);
INSERT INTO `wp_term_taxonomy` VALUES (307, 307, 'genre', '', 300, 0);
-- -- 12000-15000元
INSERT INTO `wp_terms` VALUES (308, '12000-15000元', '308', 0);
INSERT INTO `wp_term_taxonomy` VALUES (308, 308, 'genre', '', 300, 0);
-- -- 15000-18000元
INSERT INTO `wp_terms` VALUES (309, '15000-18000元', '309', 0);
INSERT INTO `wp_term_taxonomy` VALUES (309, 309, 'genre', '', 300, 0);
-- -- 18000元以上
INSERT INTO `wp_terms` VALUES (310, '18000元以上', '310', 0);
INSERT INTO `wp_term_taxonomy` VALUES (310, 310, 'genre', '', 300, 0);


-- 板材
INSERT INTO `wp_terms` VALUES (400, '板材', '400', 0);
INSERT INTO `wp_term_taxonomy` VALUES (400, 400, 'genre', '', 0, 0);
-- -- 白樱桃
INSERT INTO `wp_terms` VALUES (401, '白樱桃', '401', 0);
INSERT INTO `wp_term_taxonomy` VALUES (401, 401, 'genre', '', 400, 0);
-- -- 摩卡
-- -- INSERT INTO `wp_terms` VALUES (402, '摩卡', '402', 0);
-- -- INSERT INTO `wp_term_taxonomy` VALUES (402, 402, 'genre', '', 400, 0);
-- -- 苹果木
INSERT INTO `wp_terms` VALUES (403, '苹果木', '403', 0);
INSERT INTO `wp_term_taxonomy` VALUES (403, 403, 'genre', '', 400, 0);
-- -- 亚马逊
INSERT INTO `wp_terms` VALUES (404, '亚马逊', '404', 0);
INSERT INTO `wp_term_taxonomy` VALUES (404, 404, 'genre', '', 400, 0);
-- -- 雪梨木
INSERT INTO `wp_terms` VALUES (405, '雪梨木', '405', 0);
INSERT INTO `wp_term_taxonomy` VALUES (405, 405, 'genre', '', 400, 0);
-- -- 土豪金
INSERT INTO `wp_terms` VALUES (406, '土豪金', '406', 0);
INSERT INTO `wp_term_taxonomy` VALUES (406, 406, 'genre', '', 400, 0);
-- -- 慕尼黑
INSERT INTO `wp_terms` VALUES (407, '慕尼黑', '407', 0);
INSERT INTO `wp_term_taxonomy` VALUES (407, 407, 'genre', '', 400, 0);
-- -- 英伦白橡
INSERT INTO `wp_terms` VALUES (408, '英伦白橡', '408', 0);
INSERT INTO `wp_term_taxonomy` VALUES (408, 408, 'genre', '', 400, 0);
-- -- 象牙白
INSERT INTO `wp_terms` VALUES (409, '象牙白', '409', 0);
INSERT INTO `wp_term_taxonomy` VALUES (409, 409, 'genre', '', 400, 0);
-- -- 北欧枫木
INSERT INTO `wp_terms` VALUES (410, '北欧枫木', '410', 0);
INSERT INTO `wp_term_taxonomy` VALUES (410, 410, 'genre', '', 400, 0);
-- -- 北美枫情
INSERT INTO `wp_terms` VALUES (411, '北美枫情', '411', 0);
INSERT INTO `wp_term_taxonomy` VALUES (411, 411, 'genre', '', 400, 0);
-- -- 中国红木
INSERT INTO `wp_terms` VALUES (412, '中国红木', '412', 0);
INSERT INTO `wp_term_taxonomy` VALUES (412, 412, 'genre', '', 400, 0);
-- -- 美国樱桃
INSERT INTO `wp_terms` VALUES (413, '美国樱桃', '413', 0);
INSERT INTO `wp_term_taxonomy` VALUES (413, 413, 'genre', '', 400, 0);
-- -- 泰黄金柚
INSERT INTO `wp_terms` VALUES (414, '泰黄金柚', '414', 0);
INSERT INTO `wp_term_taxonomy` VALUES (414, 414, 'genre', '', 400, 0);
-- -- 挪威胡桃
INSERT INTO `wp_terms` VALUES (415, '挪威胡桃', '415', 0);
INSERT INTO `wp_term_taxonomy` VALUES (415, 415, 'genre', '', 400, 0);
-- -- 米兰灰橡
INSERT INTO `wp_terms` VALUES (416, '米兰灰橡', '416', 0);
INSERT INTO `wp_term_taxonomy` VALUES (416, 416, 'genre', '', 400, 0);
-- -- 铝合金
INSERT INTO `wp_terms` VALUES (417, '铝合金', '417', 0);
INSERT INTO `wp_term_taxonomy` VALUES (417, 417, 'genre', '', 400, 0);
-- -- 实木
INSERT INTO `wp_terms` VALUES (418, '实木', '418', 0);
INSERT INTO `wp_term_taxonomy` VALUES (418, 418, 'genre', '', 400, 0);
-- -- 中纤板
INSERT INTO `wp_terms` VALUES (419, '中纤板', '419', 0);
INSERT INTO `wp_term_taxonomy` VALUES (419, 419, 'genre', '', 400, 0);


-- 墙面
INSERT INTO `wp_terms` VALUES (500, '墙面', '500', 0);
INSERT INTO `wp_term_taxonomy` VALUES (500, 500, 'genre', '', 0, 0);

INSERT INTO `wp_terms` VALUES (501, 'Q-01', '501', 0);
INSERT INTO `wp_term_taxonomy` VALUES (501, 501, 'genre', '', 500, 0);

INSERT INTO `wp_terms` VALUES (502, 'Q-02', '502', 0);
INSERT INTO `wp_term_taxonomy` VALUES (502, 502, 'genre', '', 500, 0);

INSERT INTO `wp_terms` VALUES (503, 'Q-03', '503', 0);
INSERT INTO `wp_term_taxonomy` VALUES (503, 503, 'genre', '', 500, 0);

INSERT INTO `wp_terms` VALUES (504, 'Q-04', '504', 0);
INSERT INTO `wp_term_taxonomy` VALUES (504, 504, 'genre', '', 500, 0);

INSERT INTO `wp_terms` VALUES (505, 'Q-05', '505', 0);
INSERT INTO `wp_term_taxonomy` VALUES (505, 505, 'genre', '', 500, 0);

INSERT INTO `wp_terms` VALUES (506, 'Q-06', '506', 0);
INSERT INTO `wp_term_taxonomy` VALUES (506, 506, 'genre', '', 500, 0);

INSERT INTO `wp_terms` VALUES (507, 'Q-07', '507', 0);
INSERT INTO `wp_term_taxonomy` VALUES (507, 507, 'genre', '', 500, 0);

INSERT INTO `wp_terms` VALUES (508, 'Q-08', '508', 0);
INSERT INTO `wp_term_taxonomy` VALUES (508, 508, 'genre', '', 500, 0);

INSERT INTO `wp_terms` VALUES (509, 'Q-09', '509', 0);
INSERT INTO `wp_term_taxonomy` VALUES (509, 509, 'genre', '', 500, 0);

-- 地面
INSERT INTO `wp_terms` VALUES (600, '墙面', '600', 0);
INSERT INTO `wp_term_taxonomy` VALUES (600, 600, 'genre', '', 0, 0);

INSERT INTO `wp_terms` VALUES (601, 'D-01', '601', 0);
INSERT INTO `wp_term_taxonomy` VALUES (601, 601, 'genre', '', 600, 0);

INSERT INTO `wp_terms` VALUES (602, 'D-02', '602', 0);
INSERT INTO `wp_term_taxonomy` VALUES (602, 602, 'genre', '', 600, 0);

INSERT INTO `wp_terms` VALUES (603, 'D-03', '603', 0);
INSERT INTO `wp_term_taxonomy` VALUES (603, 603, 'genre', '', 600, 0);

INSERT INTO `wp_terms` VALUES (604, 'D-04', '604', 0);
INSERT INTO `wp_term_taxonomy` VALUES (604, 604, 'genre', '', 600, 0);

INSERT INTO `wp_terms` VALUES (605, 'D-05', '605', 0);
INSERT INTO `wp_term_taxonomy` VALUES (605, 605, 'genre', '', 600, 0);

INSERT INTO `wp_terms` VALUES (606, 'D-06', '606', 0);
INSERT INTO `wp_term_taxonomy` VALUES (606, 606, 'genre', '', 600, 0);

INSERT INTO `wp_terms` VALUES (607, 'D-07', '607', 0);
INSERT INTO `wp_term_taxonomy` VALUES (607, 607, 'genre', '', 600, 0);

INSERT INTO `wp_terms` VALUES (608, 'D-08', '608', 0);
INSERT INTO `wp_term_taxonomy` VALUES (608, 608, 'genre', '', 600, 0);

INSERT INTO `wp_terms` VALUES (609, 'D-09', '609', 0);
INSERT INTO `wp_term_taxonomy` VALUES (609, 609, 'genre', '', 600, 0);


*/