-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2012 at 10:08 AM
-- Server version: 5.5.19
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_dev_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--


CREATE TABLE IF NOT EXISTS `accounts` (
  `id` char(36) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `date_entered` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `description` text,
  `deleted` tinyint(1) DEFAULT '0',
  `assigned_user_id` char(36) DEFAULT NULL,
  `account_type` varchar(50) DEFAULT NULL,
  `industry` varchar(50) DEFAULT NULL,
  `annual_revenue` varchar(100) DEFAULT NULL,
  `phone_fax` varchar(100) DEFAULT NULL,
  `billing_address_street` varchar(150) DEFAULT NULL,
  `billing_address_city` varchar(100) DEFAULT NULL,
  `billing_address_state` varchar(100) DEFAULT NULL,
  `billing_address_postalcode` varchar(20) DEFAULT NULL,
  `billing_address_country` varchar(255) DEFAULT NULL,
  `rating` varchar(100) DEFAULT NULL,
  `phone_office` varchar(100) DEFAULT NULL,
  `phone_alternate` varchar(100) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `ownership` varchar(100) DEFAULT NULL,
  `employees` varchar(10) DEFAULT NULL,
  `ticker_symbol` varchar(10) DEFAULT NULL,
  `shipping_address_street` varchar(150) DEFAULT NULL,
  `shipping_address_city` varchar(100) DEFAULT NULL,
  `shipping_address_state` varchar(100) DEFAULT NULL,
  `shipping_address_postalcode` varchar(20) DEFAULT NULL,
  `shipping_address_country` varchar(255) DEFAULT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `sic_code` varchar(10) DEFAULT NULL,
  `campaign_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_accnt_id_del` (`id`,`deleted`),
  KEY `idx_accnt_name_del` (`name`,`deleted`),
  KEY `idx_accnt_assigned_del` (`deleted`,`assigned_user_id`),
  KEY `idx_accnt_parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--


-- --------------------------------------------------------

--
-- Table structure for table `accounts_agents`
--


CREATE TABLE IF NOT EXISTS `accounts_agents` (
  `id` char(36) NOT NULL,
  `id_a` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `patronymic` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `office_address` text NOT NULL,
  `modified_user_id` char(36) DEFAULT NULL,
  `created_by` char(36) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_id_a` (`id_a`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts_agents`
--


-- --------------------------------------------------------

--
-- Table structure for table `accounts_agents_bean_rel`
--


CREATE TABLE IF NOT EXISTS `accounts_agents_bean_rel` (
  `id` char(36) NOT NULL,
  `id_aa` char(36) NOT NULL,
  `bean_id` char(36) NOT NULL,
  `bean_module` varchar(25) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_aa` (`id_aa`),
  KEY `idx_bean_id` (`bean_id`,`bean_module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts_agents_bean_rel`
--


-- --------------------------------------------------------

--
-- Table structure for table `accounts_cstm`
--

DROP TABLE IF EXISTS `accounts_cstm`;
CREATE TABLE IF NOT EXISTS `accounts_cstm` (
  `id_c` char(36) NOT NULL,
  `phone1_c` varchar(20) DEFAULT NULL,
  `phone2_c` varchar(20) DEFAULT NULL,
  `identification_c` text,
  `country_c` varchar(100) DEFAULT NULL,
  `region_c` varchar(100) DEFAULT NULL,
  `city_c` varchar(100) DEFAULT NULL,
  `category_c` varchar(100) DEFAULT 'provider',
  `patronymic_c` varchar(20) DEFAULT NULL,
  `firstname_c` varchar(20) DEFAULT NULL,
  `lastname_c` varchar(20) DEFAULT NULL,
  `position_c` varchar(20) DEFAULT NULL,
  `birthday_c` date DEFAULT NULL,
  `office_address_c` text,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts_cstm`
--

-- --------------------------------------------------------

--
-- Table structure for table `relationships`
--

CREATE TABLE IF NOT EXISTS `relationships` (
  `id` char(36) NOT NULL,
  `relationship_name` varchar(150) DEFAULT NULL,
  `lhs_module` varchar(100) DEFAULT NULL,
  `lhs_table` varchar(64) DEFAULT NULL,
  `lhs_key` varchar(64) DEFAULT NULL,
  `rhs_module` varchar(100) DEFAULT NULL,
  `rhs_table` varchar(64) DEFAULT NULL,
  `rhs_key` varchar(64) DEFAULT NULL,
  `join_table` varchar(64) DEFAULT NULL,
  `join_key_lhs` varchar(64) DEFAULT NULL,
  `join_key_rhs` varchar(64) DEFAULT NULL,
  `relationship_type` varchar(64) DEFAULT NULL,
  `relationship_role_column` varchar(64) DEFAULT NULL,
  `relationship_role_column_value` varchar(50) DEFAULT NULL,
  `reverse` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_rel_name` (`relationship_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `relationships`
--

REPLACE INTO `relationships` (`id`, `relationship_name`, `lhs_module`, `lhs_table`, `lhs_key`, `rhs_module`, `rhs_table`, `rhs_key`, `join_table`, `join_key_lhs`, `join_key_rhs`, `relationship_type`, `relationship_role_column`, `relationship_role_column_value`, `reverse`, `deleted`) VALUES
('147edb72-1010-7b90-83fd-4fffb9917635', 'accounts_bugs', 'Accounts', 'accounts', 'id', 'Bugs', 'bugs', 'id', 'accounts_bugs', 'account_id', 'bug_id', 'many-to-many', NULL, NULL, 0, 0),
('14c52ced-74ee-d77d-2c06-4fffb9dbaa19', 'accounts_contacts', 'Accounts', 'accounts', 'id', 'Contacts', 'contacts', 'id', 'accounts_contacts', 'account_id', 'contact_id', 'many-to-many', NULL, NULL, 0, 0),
('150982d9-c5b6-8c4b-76a1-4fffb9642219', 'accounts_opportunities', 'Accounts', 'accounts', 'id', 'Opportunities', 'opportunities', 'id', 'accounts_opportunities', 'account_id', 'opportunity_id', 'many-to-many', NULL, NULL, 0, 0),
('1736e88c-eba3-15a6-d9c6-4fffb93ee24a', 'emails_accounts_rel', 'Emails', 'emails', 'id', 'Accounts', 'accounts', 'id', 'emails_beans', 'email_id', 'bean_id', 'many-to-many', 'bean_module', 'Accounts', 0, 0),
('1c91e77c-97a8-afd7-efcf-4fffb9199b34', 'prospect_list_accounts', 'ProspectLists', 'prospect_lists', 'id', 'Accounts', 'accounts', 'id', 'prospect_lists_prospects', 'prospect_list_id', 'related_id', 'many-to-many', 'related_type', 'Accounts', 0, 0),
('1dafbcf4-5747-1168-3e46-4fffb937a70a', 'projects_accounts', 'Project', 'project', 'id', 'Accounts', 'accounts', 'id', 'projects_accounts', 'project_id', 'account_id', 'many-to-many', NULL, NULL, 0, 0),
('20b62c07-6e09-23a1-59ce-4fffb9280571', 'accounts_activities_calls', 'Accounts', 'accounts', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('21939362-5084-1dec-420e-4fffb91f20df', 'accounts_activities_meetings', 'Accounts', 'accounts', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('2262541c-cd2f-a943-72ea-4fffb9a57c7c', 'accounts_cosib_queries', 'Accounts', 'accounts', 'id', 'cosib_queries', 'cosib_queries', 'id', 'accounts_cosib_queries_c', 'accounts_c3c3bccounts_ida', 'accounts_c5a9fqueries_idb', 'many-to-many', NULL, NULL, 0, 0),
('22ee960d-d3bc-cbe1-8424-4fffb9791fd6', 'accounts_activities_notes', 'Accounts', 'accounts', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('27a2bb7e-84e3-bb03-4ca2-4fffb98582bf', 'accounts_sphr_object', 'Accounts', 'accounts', 'id', 'sphr_Object', 'sphr_object', 'id', 'accounts_sphr_object_c', 'accounts_sfb36ccounts_ida', 'accounts_s40ad_object_idb', 'many-to-many', NULL, NULL, 0, 0),
('282bfa0c-d8de-1b5e-d8bd-4fffb9559a2f', 'accounts_sphr_client', 'Accounts', 'accounts', 'id', 'sphr_Client', 'sphr_client', 'id', 'accounts_sphr_client_c', 'accounts_s160fccounts_ida', 'accounts_sde91_client_idb', 'many-to-many', NULL, NULL, 0, 0),
('2e1ddbe9-24ce-dd84-493c-4fffb9d5e05e', 'accounts_activities_tasks', 'Accounts', 'accounts', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('2ed3be36-758b-615d-0040-4fffb99b88f7', 'accounts_documents', 'Accounts', 'accounts', 'id', 'Documents', 'documents', 'id', 'accounts_documents_c', 'accounts_d13e2ccounts_ida', 'accounts_d009acuments_idb', 'many-to-many', NULL, NULL, 0, 0),
('30b27f3e-723b-fa03-bc57-4fffb947629e', 'accounts_activities_emails', 'Accounts', 'accounts', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('abb4760f-0aad-a451-861d-4fffb97e36ab', 'campaign_accounts', 'Campaigns', 'campaigns', 'id', 'Accounts', 'accounts', 'campaign_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('dc292b42-d13b-7f61-1972-4fffb9a2abdd', 'accounts_modified_user', 'Users', 'users', 'id', 'Accounts', 'accounts', 'modified_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('dc7f38c4-1dc5-ed1f-49f1-4fffb9a9234e', 'accounts_created_by', 'Users', 'users', 'id', 'Accounts', 'accounts', 'created_by', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('dccf1613-f00a-9c89-ac80-4fffb9ac0488', 'accounts_assigned_user', 'Users', 'users', 'id', 'Accounts', 'accounts', 'assigned_user_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('dd231079-89f8-cd70-02e5-4fffb9770720', 'accounts_email_addresses', 'Accounts', 'accounts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'bean_module', 'Accounts', 0, 0),
('dd7f4186-1590-604e-d37a-4fffb989b0ad', 'accounts_email_addresses_primary', 'Accounts', 'accounts', 'id', 'EmailAddresses', 'email_addresses', 'id', 'email_addr_bean_rel', 'bean_id', 'email_address_id', 'many-to-many', 'primary_address', '1', 0, 0),
('ddda8d1c-02d6-1f8e-dcab-4fffb9013335', 'member_accounts', 'Accounts', 'accounts', 'id', 'Accounts', 'accounts', 'parent_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('de3556e7-c385-2f7d-1067-4fffb94fff00', 'account_cases', 'Accounts', 'accounts', 'id', 'Cases', 'cases', 'account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0),
('de832488-a587-6d31-bc23-4fffb915fd36', 'account_tasks', 'Accounts', 'accounts', 'id', 'Tasks', 'tasks', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('ded46eb3-deaa-bc11-0d93-4fffb96272e7', 'account_notes', 'Accounts', 'accounts', 'id', 'Notes', 'notes', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('df27431e-6949-ab0a-3bcc-4fffb996f3d9', 'account_meetings', 'Accounts', 'accounts', 'id', 'Meetings', 'meetings', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('df773d62-1be2-03fe-7a43-4fffb9c95bd3', 'account_calls', 'Accounts', 'accounts', 'id', 'Calls', 'calls', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('dfc97e65-ef67-6d59-df25-4fffb97c74e5', 'account_emails', 'Accounts', 'accounts', 'id', 'Emails', 'emails', 'parent_id', NULL, NULL, NULL, 'one-to-many', 'parent_type', 'Accounts', 0, 0),
('e01ddaae-5756-f04f-d11a-4fffb99c13f5', 'account_leads', 'Accounts', 'accounts', 'id', 'Leads', 'leads', 'account_id', NULL, NULL, NULL, 'one-to-many', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fields_meta_data`
--

CREATE TABLE IF NOT EXISTS `fields_meta_data` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `vname` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `help` varchar(255) DEFAULT NULL,
  `custom_module` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `len` int(11) DEFAULT NULL,
  `required` tinyint(1) DEFAULT '0',
  `default_value` varchar(255) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `audited` tinyint(1) DEFAULT '0',
  `massupdate` tinyint(1) DEFAULT '0',
  `duplicate_merge` smallint(6) DEFAULT '0',
  `reportable` tinyint(1) DEFAULT '1',
  `importable` varchar(255) DEFAULT NULL,
  `ext1` varchar(255) DEFAULT NULL,
  `ext2` varchar(255) DEFAULT NULL,
  `ext3` varchar(255) DEFAULT NULL,
  `ext4` text,
  PRIMARY KEY (`id`),
  KEY `idx_meta_id_del` (`id`,`deleted`),
  KEY `idx_meta_cm_del` (`custom_module`,`deleted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fields_meta_data`
--

REPLACE INTO `fields_meta_data` (`id`, `name`, `vname`, `comments`, `help`, `custom_module`, `type`, `len`, `required`, `default_value`, `date_modified`, `deleted`, `audited`, `massupdate`, `duplicate_merge`, `reportable`, `importable`, `ext1`, `ext2`, `ext3`, `ext4`) VALUES
('Accountsphone1_c', 'phone1_c', 'LBL_PHONE1', NULL, NULL, 'Accounts', 'varchar', 20, 0, NULL, '2012-05-31 13:04:06', 0, 1, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsphone2_c', 'phone2_c', 'LBL_PHONE2', NULL, NULL, 'Accounts', 'varchar', 20, 0, NULL, '2012-05-31 12:16:23', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsidentification_c', 'identification_c', 'LBL_IDENTIFICATION', 'Для физлица – паспортные данные, для юрлица - реквизиты', 'Для физлица – паспортные данные, для юрлица - реквизиты', 'Accounts', 'text', NULL, 1, NULL, '2012-06-14 13:26:31', 0, 0, 0, 0, 1, 'true', NULL, '10', '20', NULL),
('Accountscountry_c', 'country_c', 'LBL_COUNTRY', NULL, NULL, 'Accounts', 'enum', 100, 0, NULL, '2012-07-10 05:17:41', 0, 0, 0, 0, 1, 'true', 'cosib_country_list', NULL, NULL, NULL),
('Accountsregion_c', 'region_c', 'LBL_REGION', NULL, NULL, 'Accounts', 'enum', 100, 0, NULL, '2012-07-10 05:19:32', 0, 0, 0, 0, 1, 'true', 'cosib_province_country_def_list', NULL, NULL, NULL),
('Accountscity_c', 'city_c', 'LBL_CITY', NULL, NULL, 'Accounts', 'enum', 100, 0, NULL, '2012-07-10 05:18:30', 0, 0, 0, 0, 1, 'true', 'cosib_province_country__pr_def_list', NULL, NULL, NULL),
('Accountscategory_c', 'category_c', 'LBL_CATEGORY', NULL, NULL, 'Accounts', 'enum', 100, 0, 'provider', '2012-05-31 13:03:27', 0, 1, 0, 0, 1, 'true', 'counteragents_category_list', NULL, NULL, NULL),
('Accountspatronymic_c', 'patronymic_c', 'LBL_PATRONYMIC', NULL, NULL, 'Accounts', 'varchar', 20, 0, NULL, '2012-05-31 12:55:07', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsfirstname_c', 'firstname_c', 'LBL_FIRSTNAME', NULL, NULL, 'Accounts', 'varchar', 20, 1, NULL, '2012-05-31 12:56:25', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountslastname_c', 'lastname_c', 'LBL_LASTNAME', NULL, NULL, 'Accounts', 'varchar', 20, 0, NULL, '2012-05-31 12:57:10', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsposition_c', 'position_c', 'LBL_POSITION', NULL, NULL, 'Accounts', 'varchar', 20, 0, NULL, '2012-05-31 12:58:40', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsbirthday_c', 'birthday_c', 'LBL_BIRTHDAY', NULL, NULL, 'Accounts', 'date', NULL, 0, NULL, '2012-05-31 13:00:10', 0, 0, 0, 0, 1, 'true', NULL, NULL, NULL, NULL),
('Accountsoffice_address_c', 'office_address_c', 'LBL_OFFICE_ADDRESS', NULL, NULL, 'Accounts', 'text', NULL, 0, NULL, '2012-05-31 13:02:02', 0, 0, 0, 0, 1, 'true', NULL, '10', '100', NULL);



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
