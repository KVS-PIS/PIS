/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL DB
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : pis_active_db

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 03/02/2020 11:40:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ci_roles
-- ----------------------------
DROP TABLE IF EXISTS `ci_roles`;
CREATE TABLE `ci_roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `label` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `permissions` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `dept_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_roles
-- ----------------------------
INSERT INTO `ci_roles` VALUES (1, 'Super Admin', 'Super Admin', 'Super Admin', '[\"menu-dashboard\",\"menu-profile\",\"menu-transfer\",\"menu-master\",\"menu-user\",\"menu-role\",\"menu-mis-report\",\"menu-notify\",\"admin\\/dashboard\",\"dashboard/index\",\"profile\\/profilelist\",\"profile\\/index\",\"swap/transfer_history\",\"vacancy\\/index\",\"reports\\/index\",\"reports\\/vacancy\",\"users\\/index\",\"users\\/get_users\",\"users\\/change_status\",\"users\\/admin_reset_password\",\"users\\/details\",\"users\\/activities_logs\",\"users\\/get_activities_logs\",\"users\\/add\",\"users\\/edit\",\"users\\/check_unique_username\",\"users\\/cheque_unique_email\",\"users\\/cheque_unique_username\",\"users\\/cheque_uniqueness\",\"users\\/delete\",\"users\\/get_region\",\"users\\/get_roles\",\"users\\/get_school\",\"users\\/get_section\",\"users\\/get_schoolcode\",\"users\\/get_zone\",\"users\\/get_designationcat\",\"roles\\/index\",\"admin\\/roles\",\"admin\\/users\",\"master\\/designation_category\",\"master\\/designation\",\"master\\/category\",\"master/region\",\"master\\/school\",\"master\\/subject\",\"master\\/level_range\",\"admin/notification\"]', 1, '2019-05-15 00:00:00', '2020-02-03 11:36:32', NULL);
INSERT INTO `ci_roles` VALUES (2, 'KVS HQ', 'KVS HQ', 'KVS Head Quater', '[\"menu-dashboard\",\"menu-employee\",\"menu-profile\",\"menu-transfer\",\"menu-mis-report\",\"menu-com-report\",\"menu-notify\",\"admin\\/dashboard\",\"dashboard/index\",\"employee\\/index\",\"employee\\/personal_details\",\"employee\\/academic_details\",\"employee\\/family_details\",\"employee\\/service_details\",\"employee/payscale_section\",\"employee\\/award_section\",\"employee\\/training_section\",\"employee\\/performance_section\",\"employee\\/promotion\",\"employee/teacher_exchange\",\"employee\\/foreign_visit\",\"profile\\/profilelist\",\"swap\\/index\",\"swap\\/pending_for_approval\",\"swap\\/pending_for_resolution\",\"swap/transfer_history\",\"vacancy\\/index\",\"reports\\/index\",\"reports\\/vacancy\",\"compliance\\/index\",\"compliance\\/compliance_report\",\"admin/notification\",\"swap\\/index\",\"swap\\/initiate_request\",\"swap\\/initiate_request_success\",\"swap\\/pending_for_approval\",\"swap\\/pending_for_Resolution\",\"swap\\/process_pending_for_approval\",\"swap\\/approved_request_success\",\"swap\\/forwarded_to_hq_success\",\"swap\\/resolution_details\",\"swap\\/transfer_history\"]', 1, '0000-00-00 00:00:00', '2020-02-03 10:28:30', NULL);
INSERT INTO `ci_roles` VALUES (3, 'Regional Office', 'RO', 'Regional Office', '[\"menu-dashboard\",\"menu-employee\",\"menu-profile\",\"menu-transfer\",\"menu-mis-report\",\"menu-com-report\",\"menu-notify\",\"admin\\/dashboard\",\"dashboard/index\",\"employee\\/index\",\"employee\\/personal_details\",\"employee\\/academic_details\",\"employee\\/family_details\",\"employee\\/service_details\",\"employee/payscale_section\",\"employee\\/award_section\",\"employee\\/training_section\",\"employee\\/performance_section\",\"employee\\/promotion\",\"employee/teacher_exchange\",\"employee\\/foreign_visit\",\"profile\\/profilelist\",\"swap\\/index\",\"swap\\/pending_for_approval\",\"swap\\/pending_for_resolution\",\"swap/transfer_history\",\"vacancy\\/index\",\"reports\\/index\",\"reports\\/vacancy\",\"compliance\\/index\",\"compliance\\/compliance_report\",\"admin/notification\",\"swap\\/index\",\"swap\\/initiate_request\",\"swap\\/initiate_request_success\",\"swap\\/pending_for_approval\",\"swap\\/pending_for_Resolution\",\"swap\\/process_pending_for_approval\",\"swap\\/approved_request_success\",\"swap\\/forwarded_to_hq_success\",\"swap\\/resolution_details\",\"swap\\/transfer_history\"]', 1, '0000-00-00 00:00:00', '2020-02-03 10:28:34', NULL);
INSERT INTO `ci_roles` VALUES (4, 'ZIET', 'ZIET', 'ZIET', '[\"menu-dashboard\",\"menu-employee\",\"menu-profile\",\"menu-transfer\",\"menu-mis-report\",\"menu-com-report\",\"menu-notify\",\"admin\\/dashboard\",\"dashboard/index\",\"employee\\/index\",\"employee\\/personal_details\",\"employee\\/academic_details\",\"employee\\/family_details\",\"employee\\/service_details\",\"employee/payscale_section\",\"employee\\/award_section\",\"employee\\/training_section\",\"employee\\/performance_section\",\"employee\\/promotion\",\"employee/teacher_exchange\",\"employee\\/foreign_visit\",\"profile\\/profilelist\",\"swap\\/index\",\"swap\\/pending_for_approval\",\"swap\\/pending_for_resolution\",\"swap/transfer_history\",\"vacancy\\/index\",\"reports\\/index\",\"reports\\/vacancy\",\"compliance\\/index\",\"compliance\\/compliance_report\",\"admin/notification\",\"swap\\/index\",\"swap\\/initiate_request\",\"swap\\/initiate_request_success\",\"swap\\/pending_for_approval\",\"swap\\/pending_for_Resolution\",\"swap\\/process_pending_for_approval\",\"swap\\/approved_request_success\",\"swap\\/forwarded_to_hq_success\",\"swap\\/resolution_details\",\"swap\\/transfer_history\"]', 1, '0000-00-00 00:00:00', '2020-02-03 10:28:47', NULL);
INSERT INTO `ci_roles` VALUES (5, 'Kendriya Vidyalaya', 'Kendriya Vidyalaya', 'Kendriya Vidyalaya', '[\"menu-dashboard\",\"menu-employee\",\"menu-profile\",\"menu-transfer\",\"menu-mis-report\",\"menu-com-report\",\"menu-notify\",\"admin\\/dashboard\",\"dashboard/index\",\"employee\\/index\",\"employee\\/personal_details\",\"employee\\/academic_details\",\"employee\\/family_details\",\"employee\\/service_details\",\"employee/payscale_section\",\"employee\\/award_section\",\"employee\\/training_section\",\"employee\\/performance_section\",\"employee\\/promotion\",\"employee/teacher_exchange\",\"employee\\/foreign_visit\",\"profile\\/profilelist\",\"swap\\/index\",\"swap\\/pending_for_approval\",\"swap\\/pending_for_resolution\",\"swap/transfer_history\",\"vacancy\\/index\",\"reports\\/index\",\"reports\\/vacancy\",\"compliance\\/index\",\"compliance\\/compliance_report\",\"admin/notification\",\"swap\\/index\",\"swap\\/initiate_request\",\"swap\\/initiate_request_success\",\"swap\\/pending_for_approval\",\"swap\\/pending_for_Resolution\",\"swap\\/process_pending_for_approval\",\"swap\\/approved_request_success\",\"swap\\/forwarded_to_hq_success\",\"swap\\/resolution_details\",\"swap\\/transfer_history\"]', 1, '0000-00-00 00:00:00', '2020-02-03 10:28:56', NULL);
INSERT INTO `ci_roles` VALUES (6, 'Employee', 'Employee', 'Employee', '[\"menu-dashboard\",\"menu-myprofile\",\"menu-notify\",\"admin\\/dashboard\",\"dashboard/index\",\"compliance\\/index\",\"profile\\/index\",\"admin/notification\"]', 1, '0000-00-00 00:00:00', '2020-01-31 15:44:07', NULL);
INSERT INTO `ci_roles` VALUES (7, 'Abroad KV', 'Abroad KV', 'Abroad KV', '[\"menu-dashboard\",\"menu-employee\",\"menu-profile\",\"menu-transfer\",\"menu-mis-report\",\"menu-com-report\",\"menu-notify\",\"admin\\/dashboard\",\"dashboard/index\",\"employee\\/index\",\"employee\\/personal_details\",\"employee\\/academic_details\",\"employee\\/family_details\",\"employee\\/service_details\",\"employee/payscale_section\",\"employee\\/award_section\",\"employee\\/training_section\",\"employee\\/performance_section\",\"employee\\/promotion\",\"employee/teacher_exchange\",\"employee\\/foreign_visit\",\"profile\\/profilelist\",\"swap\\/index\",\"swap\\/pending_for_approval\",\"swap\\/pending_for_resolution\",\"swap/transfer_history\",\"vacancy\\/index\",\"reports\\/index\",\"reports\\/vacancy\",\"compliance\\/index\",\"compliance\\/compliance_report\",\"admin/notification\",\"swap\\/index\",\"swap\\/initiate_request\",\"swap\\/initiate_request_success\",\"swap\\/pending_for_approval\",\"swap\\/pending_for_Resolution\",\"swap\\/process_pending_for_approval\",\"swap\\/approved_request_success\",\"swap\\/forwarded_to_hq_success\",\"swap\\/resolution_details\",\"swap\\/transfer_history\"]', 1, '0000-00-00 00:00:00', '2020-02-03 10:29:03', NULL);

SET FOREIGN_KEY_CHECKS = 1;
