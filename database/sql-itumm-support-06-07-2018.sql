-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: itummqa-db.ckyv9jz8srx5.us-east-1.rds.amazonaws.com    Database: itumm_support
-- ------------------------------------------------------
-- Server version	5.6.37-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ost__search`
--

DROP TABLE IF EXISTS `ost__search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost__search` (
  `object_type` varchar(8) NOT NULL,
  `object_id` int(11) unsigned NOT NULL,
  `title` text,
  `content` text,
  PRIMARY KEY (`object_type`,`object_id`),
  FULLTEXT KEY `search` (`title`,`content`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost__search`
--

LOCK TABLES `ost__search` WRITE;
/*!40000 ALTER TABLE `ost__search` DISABLE KEYS */;
INSERT INTO `ost__search` VALUES ('H',1,'osTicket Installed!','Thank you for choosing osTicket. Please make sure you join the osTicket forums and our mailing list to stay up to date on the latest news, security alerts and updates. The osTicket forums are also a great place to get assistance, guidance, tips, and help from other osTicket users. In addition to the forums, the osTicket wiki provides a useful collection of educational materials, documentation, and notes from the community. We welcome your contributions to the osTicket community. If you are looking for a greater level of support, we provide professional services and commercial support with guaranteed response times, and access to the core development team. We can also help customize osTicket or even add new features to the system to meet your unique needs. If the idea of managing and upgrading this osTicket installation is daunting, you can try osTicket as a hosted service at http://www.supportsystem.com/ -- no installation required and we can import your data! With SupportSystem\'s turnkey infrastructure, you get osTicket at its best, leaving you free to focus on your customers without the burden of making sure the application is stable, maintained, and secure. Cheers, - osTicket Team http://osticket.com/ PS. Don\'t just make customers happy, make happy customers!'),('O',1,'osTicket','420 Desoto Street Alexandria, LA 71301\n(318) 290-3674\nhttp://osticket.com\nNot only do we develop the software, we also use it to manage support for osTicket. Let us help you quickly implement and leverage the full potential of osTicket\'s features and functionality. Contact us for professional support or visit our website for documentation and community support.'),('T',1,'212295 osTicket Installed!','osTicket Installed!'),('T',2,'366163 Feedback','Feedback'),('T',3,'693905 Feedback','Feedback'),('T',4,'903714 General Inquiry','General Inquiry'),('T',5,'440812 General Inquiry','General Inquiry'),('U',1,'osTicket Support','support@osticket.com\nsupport@osticket.com\nosTicket Support'),('U',2,'',' '),('U',3,'',' '),('U',4,'',' '),('U',5,'',' ');
/*!40000 ALTER TABLE `ost__search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_api_key`
--

DROP TABLE IF EXISTS `ost_api_key`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_api_key` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `ipaddr` varchar(64) NOT NULL,
  `apikey` varchar(255) NOT NULL,
  `can_create_tickets` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `can_exec_cron` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `notes` text,
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `apikey` (`apikey`),
  KEY `ipaddr` (`ipaddr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_api_key`
--

LOCK TABLES `ost_api_key` WRITE;
/*!40000 ALTER TABLE `ost_api_key` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_api_key` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_attachment`
--

DROP TABLE IF EXISTS `ost_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `object_id` int(11) unsigned NOT NULL,
  `type` char(1) NOT NULL,
  `file_id` int(11) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `inline` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lang` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `file-type` (`object_id`,`file_id`,`type`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_attachment`
--

LOCK TABLES `ost_attachment` WRITE;
/*!40000 ALTER TABLE `ost_attachment` DISABLE KEYS */;
INSERT INTO `ost_attachment` VALUES (1,1,'C',2,NULL,0,NULL),(2,8,'T',1,NULL,1,NULL),(3,9,'T',1,NULL,1,NULL),(4,10,'T',1,NULL,1,NULL),(5,11,'T',1,NULL,1,NULL),(6,12,'T',1,NULL,1,NULL),(7,13,'T',1,NULL,1,NULL),(8,14,'T',1,NULL,1,NULL),(9,16,'T',1,NULL,1,NULL),(10,17,'T',1,NULL,1,NULL),(11,18,'T',1,NULL,1,NULL),(12,19,'T',1,NULL,1,NULL);
/*!40000 ALTER TABLE `ost_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_canned_response`
--

DROP TABLE IF EXISTS `ost_canned_response`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_canned_response` (
  `canned_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `isenabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL DEFAULT '',
  `response` text NOT NULL,
  `lang` varchar(16) NOT NULL DEFAULT 'en_US',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`canned_id`),
  UNIQUE KEY `title` (`title`),
  KEY `dept_id` (`dept_id`),
  KEY `active` (`isenabled`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_canned_response`
--

LOCK TABLES `ost_canned_response` WRITE;
/*!40000 ALTER TABLE `ost_canned_response` DISABLE KEYS */;
INSERT INTO `ost_canned_response` VALUES (1,0,1,'What is osTicket (sample)?','osTicket is a widely-used open source support ticket system, an\nattractive alternative to higher-cost and complex customer support\nsystems - simple, lightweight, reliable, open source, web-based and easy\nto setup and use.','en_US',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(2,0,1,'Sample (with variables)','Hi %{ticket.name.first},\n<br>\n<br>\nYour ticket #%{ticket.number} created on %{ticket.create_date} is in\n%{ticket.dept.name} department.','en_US',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_canned_response` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_config`
--

DROP TABLE IF EXISTS `ost_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_config` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(64) NOT NULL,
  `key` varchar(64) NOT NULL,
  `value` text NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `namespace` (`namespace`,`key`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_config`
--

LOCK TABLES `ost_config` WRITE;
/*!40000 ALTER TABLE `ost_config` DISABLE KEYS */;
INSERT INTO `ost_config` VALUES (1,'core','admin_email','kirans@inducosolutions.com','2018-05-16 12:16:04'),(2,'core','helpdesk_url','http://qa.itumm.com/support/','2018-05-16 12:16:04'),(3,'core','helpdesk_title','itumm','2018-05-16 12:16:04'),(4,'core','schema_signature','98ad7d550c26ac44340350912296e673','2018-05-16 12:16:04'),(5,'core','time_format','hh:mm a','2018-05-16 12:16:03'),(6,'core','date_format','MM/dd/y','2018-05-16 12:16:03'),(7,'core','datetime_format','MM/dd/y h:mm a','2018-05-16 12:16:03'),(8,'core','daydatetime_format','EEE, MMM d y h:mm a','2018-05-16 12:16:03'),(9,'core','default_priority_id','2','2018-05-16 12:16:03'),(10,'core','enable_daylight_saving','','2018-05-16 12:16:03'),(11,'core','reply_separator','-- reply above this line --','2018-05-16 12:16:03'),(12,'core','isonline','1','2018-05-16 12:16:03'),(13,'core','staff_ip_binding','','2018-05-16 12:16:03'),(14,'core','staff_max_logins','4','2018-05-16 12:16:03'),(15,'core','staff_login_timeout','2','2018-05-16 12:16:03'),(16,'core','staff_session_timeout','30','2018-05-16 12:16:03'),(17,'core','passwd_reset_period','','2018-05-16 12:16:03'),(18,'core','client_max_logins','4','2018-05-16 12:16:03'),(19,'core','client_login_timeout','2','2018-05-16 12:16:03'),(20,'core','client_session_timeout','30','2018-05-16 12:16:03'),(21,'core','max_page_size','25','2018-05-16 12:16:03'),(22,'core','max_open_tickets','','2018-05-16 12:16:03'),(23,'core','autolock_minutes','3','2018-05-16 12:16:03'),(24,'core','default_smtp_id','','2018-05-16 12:16:03'),(25,'core','use_email_priority','','2018-05-16 12:16:03'),(26,'core','enable_kb','','2018-05-16 12:16:03'),(27,'core','enable_premade','1','2018-05-16 12:16:03'),(28,'core','enable_captcha','','2018-05-16 12:16:03'),(29,'core','enable_auto_cron','','2018-05-16 12:16:03'),(30,'core','enable_mail_polling','','2018-05-16 12:16:03'),(31,'core','send_sys_errors','1','2018-05-16 12:16:03'),(32,'core','send_sql_errors','1','2018-05-16 12:16:03'),(33,'core','send_login_errors','1','2018-05-16 12:16:03'),(34,'core','save_email_headers','1','2018-05-16 12:16:03'),(35,'core','strip_quoted_reply','1','2018-05-16 12:16:03'),(36,'core','ticket_autoresponder','','2018-05-16 12:16:03'),(37,'core','message_autoresponder','','2018-05-16 12:16:03'),(38,'core','ticket_notice_active','1','2018-05-16 12:16:03'),(39,'core','ticket_alert_active','1','2018-05-16 12:16:03'),(40,'core','ticket_alert_admin','1','2018-05-16 12:16:03'),(41,'core','ticket_alert_dept_manager','1','2018-05-16 12:16:03'),(42,'core','ticket_alert_dept_members','','2018-05-16 12:16:03'),(43,'core','message_alert_active','1','2018-05-16 12:16:03'),(44,'core','message_alert_laststaff','1','2018-05-16 12:16:03'),(45,'core','message_alert_assigned','1','2018-05-16 12:16:03'),(46,'core','message_alert_dept_manager','','2018-05-16 12:16:03'),(47,'core','note_alert_active','','2018-05-16 12:16:03'),(48,'core','note_alert_laststaff','1','2018-05-16 12:16:03'),(49,'core','note_alert_assigned','1','2018-05-16 12:16:03'),(50,'core','note_alert_dept_manager','','2018-05-16 12:16:03'),(51,'core','transfer_alert_active','','2018-05-16 12:16:03'),(52,'core','transfer_alert_assigned','','2018-05-16 12:16:03'),(53,'core','transfer_alert_dept_manager','1','2018-05-16 12:16:03'),(54,'core','transfer_alert_dept_members','','2018-05-16 12:16:03'),(55,'core','overdue_alert_active','1','2018-05-16 12:16:03'),(56,'core','overdue_alert_assigned','1','2018-05-16 12:16:03'),(57,'core','overdue_alert_dept_manager','1','2018-05-16 12:16:03'),(58,'core','overdue_alert_dept_members','','2018-05-16 12:16:03'),(59,'core','assigned_alert_active','1','2018-05-16 12:16:03'),(60,'core','assigned_alert_staff','1','2018-05-16 12:16:03'),(61,'core','assigned_alert_team_lead','','2018-05-16 12:16:03'),(62,'core','assigned_alert_team_members','','2018-05-16 12:16:03'),(63,'core','auto_claim_tickets','1','2018-05-16 12:16:03'),(64,'core','show_related_tickets','1','2018-05-16 12:16:03'),(65,'core','show_assigned_tickets','1','2018-05-16 12:16:03'),(66,'core','show_answered_tickets','','2018-05-16 12:16:03'),(67,'core','hide_staff_name','','2018-05-16 12:16:03'),(68,'core','overlimit_notice_active','','2018-05-16 12:16:03'),(69,'core','email_attachments','1','2018-05-16 12:16:03'),(70,'core','ticket_number_format','######','2018-05-16 12:16:03'),(71,'core','ticket_sequence_id','','2018-05-16 12:16:03'),(72,'core','task_number_format','#','2018-05-16 12:16:03'),(73,'core','task_sequence_id','2','2018-05-16 12:16:03'),(74,'core','log_level','2','2018-05-16 12:16:03'),(75,'core','log_graceperiod','12','2018-05-16 12:16:03'),(76,'core','client_registration','public','2018-05-16 12:16:03'),(77,'core','max_file_size','17179869184','2018-05-16 12:16:03'),(78,'core','landing_page_id','1','2018-05-16 12:16:03'),(79,'core','thank-you_page_id','2','2018-05-16 12:16:03'),(80,'core','offline_page_id','3','2018-05-16 12:16:03'),(81,'core','system_language','en_US','2018-05-16 12:16:03'),(82,'mysqlsearch','reindex','0','2018-06-27 12:32:00'),(83,'core','default_email_id','1','2018-05-16 12:16:04'),(84,'core','alert_email_id','2','2018-05-16 12:16:04'),(85,'core','default_dept_id','1','2018-05-16 12:16:04'),(86,'core','default_sla_id','1','2018-05-16 12:16:04'),(87,'core','default_template_id','1','2018-05-16 12:16:04'),(88,'core','default_timezone','Asia/Kolkata','2018-05-16 12:16:04'),(89,'core','clients_only','1','2018-06-27 12:33:25'),(90,'core','client_verify_email','1','2018-06-27 12:33:25'),(91,'core','allow_auth_tokens','1','2018-06-27 12:33:25'),(92,'core','client_name_format','original','2018-06-27 12:33:25'),(93,'core','client_avatar','gravatar.mm','2018-06-27 12:33:25');
/*!40000 ALTER TABLE `ost_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_content`
--

DROP TABLE IF EXISTS `ost_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `type` varchar(32) NOT NULL DEFAULT 'other',
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_content`
--

LOCK TABLES `ost_content` WRITE;
/*!40000 ALTER TABLE `ost_content` DISABLE KEYS */;
INSERT INTO `ost_content` VALUES (1,1,'landing','Landing','<h1>Welcome to the Support Center</h1> <p> In order to streamline support requests and better serve you, we utilize a support ticket system. Every support request is assigned a unique ticket number which you can use to track the progress and responses online. For your reference we provide complete archives and history of all your support requests. A valid email address is required to submit a ticket. </p>','The Landing Page refers to the content of the Customer Portal\'s initial view. The template modifies the content seen above the two links <strong>Open a New Ticket</strong> and <strong>Check Ticket Status</strong>.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(2,1,'thank-you','Thank You','<div>%{ticket.name},\n<br>\n<br>\nThank you for contacting us.\n<br>\n<br>\nA support ticket request has been created and a representative will be\ngetting back to you shortly if necessary.</p>\n<br>\n<br>\nSupport Team\n</div>','This template defines the content displayed on the Thank-You page after a\nClient submits a new ticket in the Client Portal.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(3,1,'offline','Offline','<div><h1>\n<span style=\"font-size: medium\">Support Ticket System Offline</span>\n</h1>\n<p>Thank you for your interest in contacting us.</p>\n<p>Our helpdesk is offline at the moment, please check back at a later\ntime.</p>\n</div>','The Offline Page appears in the Customer Portal when the Help Desk is offline.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(4,1,'registration-staff','Welcome to osTicket','<h3><strong>Hi %{recipient.name.first},</strong></h3> <div> We\'ve created an account for you at our help desk at %{url}.<br /> <br /> Please follow the link below to confirm your account and gain access to your tickets.<br /> <br /> <a href=\"%{link}\">%{link}</a><br /> <br /> <em style=\"font-size: small\">Your friendly Customer Support System<br /> %{company.name}</em> </div>','This template defines the initial email (optional) sent to Agents when an account is created on their behalf.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(5,1,'pwreset-staff','osTicket Staff Password Reset','<h3><strong>Hi %{staff.name.first},</strong></h3> <div> A password reset request has been submitted on your behalf for the helpdesk at %{url}.<br /> <br /> If you feel that this has been done in error, delete and disregard this email. Your account is still secure and no one has been given access to it. It is not locked and your password has not been reset. Someone could have mistakenly entered your email address.<br /> <br /> Follow the link below to login to the help desk and change your password.<br /> <br /> <a href=\"%{link}\">%{link}</a><br /> <br /> <em style=\"font-size: small\">Your friendly Customer Support System</em> <br /> <img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width: 126px\" /> </div>','This template defines the email sent to Staff who select the <strong>Forgot My Password</strong> link on the Staff Control Panel Log In page.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(6,1,'banner-staff','Authentication Required','','This is the initial message and banner shown on the Staff Log In page. The first input field refers to the red-formatted text that appears at the top. The latter textarea is for the banner content which should serve as a disclaimer.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(7,1,'registration-client','Welcome to %{company.name}','<h3><strong>Hi %{recipient.name.first},</strong></h3> <div> We\'ve created an account for you at our help desk at %{url}.<br /> <br /> Please follow the link below to confirm your account and gain access to your tickets.<br /> <br /> <a href=\"%{link}\">%{link}</a><br /> <br /> <em style=\"font-size: small\">Your friendly Customer Support System <br /> %{company.name}</em> </div>','This template defines the email sent to Clients when their account has been created in the Client Portal or by an Agent on their behalf. This email serves as an email address verification. Please use %{link} somewhere in the body.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(8,1,'pwreset-client','%{company.name} Help Desk Access','<h3><strong>Hi %{user.name.first},</strong></h3> <div> A password reset request has been submitted on your behalf for the helpdesk at %{url}.<br /> <br /> If you feel that this has been done in error, delete and disregard this email. Your account is still secure and no one has been given access to it. It is not locked and your password has not been reset. Someone could have mistakenly entered your email address.<br /> <br /> Follow the link below to login to the help desk and change your password.<br /> <br /> <a href=\"%{link}\">%{link}</a><br /> <br /> <em style=\"font-size: small\">Your friendly Customer Support System <br /> %{company.name}</em> </div>','This template defines the email sent to Clients who select the <strong>Forgot My Password</strong> link on the Client Log In page.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(9,1,'banner-client','Sign in to %{company.name}','To better serve you, we encourage our Clients to register for an account.','This composes the header on the Client Log In page. It can be useful to inform your Clients about your log in and registration policies.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(10,1,'registration-confirm','Account registration','<div><strong>Thanks for registering for an account.</strong><br/> <br /> We\'ve just sent you an email to the address you entered. Please follow the link in the email to confirm your account and gain access to your tickets. </div>','This templates defines the page shown to Clients after completing the registration form. The template should mention that the system is sending them an email confirmation link and what is the next step in the registration process.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(11,1,'registration-thanks','Account Confirmed!','<div> <strong>Thanks for registering for an account.</strong><br /> <br /> You\'ve confirmed your email address and successfully activated your account. You may proceed to open a new ticket or manage existing tickets.<br /> <br /> <em>Your friendly support center</em><br /> %{company.name} </div>','This template defines the content displayed after Clients successfully register by confirming their account. This page should inform the user that registration is complete and that the Client can now submit a ticket or access existing tickets.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(12,1,'access-link','Ticket [#%{ticket.number}] Access Link','<h3><strong>Hi %{recipient.name.first},</strong></h3> <div> An access link request for ticket #%{ticket.number} has been submitted on your behalf for the helpdesk at %{url}.<br /> <br /> Follow the link below to check the status of the ticket #%{ticket.number}.<br /> <br /> <a href=\"%{recipient.ticket_link}\">%{recipient.ticket_link}</a><br /> <br /> If you <strong>did not</strong> make the request, please delete and disregard this email. Your account is still secure and no one has been given access to the ticket. Someone could have mistakenly entered your email address.<br /> <br /> --<br /> %{company.name} </div>','This template defines the notification for Clients that an access link was sent to their email. The ticket number and email address trigger the access link.','2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_department`
--

DROP TABLE IF EXISTS `ost_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_department` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned DEFAULT NULL,
  `tpl_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sla_id` int(10) unsigned NOT NULL DEFAULT '0',
  `email_id` int(10) unsigned NOT NULL DEFAULT '0',
  `autoresp_email_id` int(10) unsigned NOT NULL DEFAULT '0',
  `manager_id` int(10) unsigned NOT NULL DEFAULT '0',
  `flags` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `signature` text NOT NULL,
  `ispublic` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `group_membership` tinyint(1) NOT NULL DEFAULT '0',
  `ticket_auto_response` tinyint(1) NOT NULL DEFAULT '1',
  `message_auto_response` tinyint(1) NOT NULL DEFAULT '0',
  `path` varchar(128) NOT NULL DEFAULT '/',
  `updated` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`pid`),
  KEY `manager_id` (`manager_id`),
  KEY `autoresp_email_id` (`autoresp_email_id`),
  KEY `tpl_id` (`tpl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_department`
--

LOCK TABLES `ost_department` WRITE;
/*!40000 ALTER TABLE `ost_department` DISABLE KEYS */;
INSERT INTO `ost_department` VALUES (1,NULL,0,0,0,0,0,0,'Support','Support Department',1,1,1,1,'/1/','2018-05-16 12:16:03','2018-05-16 12:16:03'),(2,NULL,0,1,0,0,0,0,'Sales','Sales and Customer Retention',1,1,1,1,'/2/','2018-05-16 12:16:03','2018-05-16 12:16:03'),(3,NULL,0,0,0,0,0,0,'Maintenance','Maintenance Department',1,0,1,1,'/3/','2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_draft`
--

DROP TABLE IF EXISTS `ost_draft`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_draft` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) unsigned NOT NULL,
  `namespace` varchar(32) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `extra` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_draft`
--

LOCK TABLES `ost_draft` WRITE;
/*!40000 ALTER TABLE `ost_draft` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_draft` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_email`
--

DROP TABLE IF EXISTS `ost_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_email` (
  `email_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `noautoresp` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `priority_id` tinyint(3) unsigned NOT NULL DEFAULT '2',
  `dept_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(11) unsigned NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `userid` varchar(255) NOT NULL,
  `userpass` varchar(255) CHARACTER SET ascii NOT NULL,
  `mail_active` tinyint(1) NOT NULL DEFAULT '0',
  `mail_host` varchar(255) NOT NULL,
  `mail_protocol` enum('POP','IMAP') NOT NULL DEFAULT 'POP',
  `mail_encryption` enum('NONE','SSL') NOT NULL,
  `mail_port` int(6) DEFAULT NULL,
  `mail_fetchfreq` tinyint(3) NOT NULL DEFAULT '5',
  `mail_fetchmax` tinyint(4) NOT NULL DEFAULT '30',
  `mail_archivefolder` varchar(255) DEFAULT NULL,
  `mail_delete` tinyint(1) NOT NULL DEFAULT '0',
  `mail_errors` tinyint(3) NOT NULL DEFAULT '0',
  `mail_lasterror` datetime DEFAULT NULL,
  `mail_lastfetch` datetime DEFAULT NULL,
  `smtp_active` tinyint(1) DEFAULT '0',
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` int(6) DEFAULT NULL,
  `smtp_secure` tinyint(1) NOT NULL DEFAULT '1',
  `smtp_auth` tinyint(1) NOT NULL DEFAULT '1',
  `smtp_spoofing` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`email_id`),
  UNIQUE KEY `email` (`email`),
  KEY `priority_id` (`priority_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_email`
--

LOCK TABLES `ost_email` WRITE;
/*!40000 ALTER TABLE `ost_email` DISABLE KEYS */;
INSERT INTO `ost_email` VALUES (1,0,2,1,0,'itummindia@gmail.com','Support','','',0,'','POP','NONE',NULL,5,30,NULL,0,0,NULL,NULL,0,'',NULL,1,1,0,NULL,'2018-05-16 12:16:04','2018-05-16 12:16:04'),(2,0,2,1,0,'alerts@gmail.com','osTicket Alerts','','',0,'','POP','NONE',NULL,5,30,NULL,0,0,NULL,NULL,0,'',NULL,1,1,0,NULL,'2018-05-16 12:16:04','2018-05-16 12:16:04'),(3,0,2,1,0,'noreply@gmail.com','','','',0,'','POP','NONE',NULL,5,30,NULL,0,0,NULL,NULL,0,'',NULL,1,1,0,NULL,'2018-05-16 12:16:04','2018-05-16 12:16:04');
/*!40000 ALTER TABLE `ost_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_email_account`
--

DROP TABLE IF EXISTS `ost_email_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_email_account` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `protocol` varchar(64) NOT NULL DEFAULT '',
  `host` varchar(128) NOT NULL DEFAULT '',
  `port` int(11) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `options` varchar(512) DEFAULT NULL,
  `errors` int(11) unsigned DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `lastconnect` timestamp NULL DEFAULT NULL,
  `lasterror` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_email_account`
--

LOCK TABLES `ost_email_account` WRITE;
/*!40000 ALTER TABLE `ost_email_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_email_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_email_template`
--

DROP TABLE IF EXISTS `ost_email_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_email_template` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tpl_id` int(11) unsigned NOT NULL,
  `code_name` varchar(32) NOT NULL,
  `subject` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `template_lookup` (`tpl_id`,`code_name`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_email_template`
--

LOCK TABLES `ost_email_template` WRITE;
/*!40000 ALTER TABLE `ost_email_template` DISABLE KEYS */;
INSERT INTO `ost_email_template` VALUES (1,1,'ticket.autoresp','Support Ticket Opened [#%{ticket.number}]',' <h3><strong>Dear %{recipient.name.first},</strong></h3> <p> A request for support has been created and assigned #%{ticket.number}. A representative will follow-up with you as soon as possible. You can <a href=\"%%7Brecipient.ticket_link%7D\">view this ticket\'s progress online</a>. </p> <br /><div style=\"color:rgb(127, 127, 127)\"> Your %{company.name} Team, <br /> %{signature} </div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small\"><em>If you wish to provide additional comments or information regarding the issue, please reply to this email or <a href=\"%%7Brecipient.ticket_link%7D\"><span style=\"color:rgb(84, 141, 212)\">login to your account</span></a> for a complete archive of your support requests.</em></div> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(2,1,'ticket.autoreply','Re: %{ticket.subject} [#%{ticket.number}]',' <h3><strong>Dear %{recipient.name.first},</strong></h3> A request for support has been created and assigned ticket <a href=\"%%7Brecipient.ticket_link%7D\">#%{ticket.number}</a> with the following automatic reply <br /><br /> Topic: <strong>%{ticket.topic.name}</strong> <br /> Subject: <strong>%{ticket.subject}</strong> <br /><br /> %{response} <br /><br /><div style=\"color:rgb(127, 127, 127)\">Your %{company.name} Team,<br /> %{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small\"><em>We hope this response has sufficiently answered your questions. If you wish to provide additional comments or informatione, please reply to this email or <a href=\"%%7Brecipient.ticket_link%7D\"><span style=\"color:rgb(84, 141, 212)\">login to your account</span></a> for a complete archive of your support requests.</em></div> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(3,1,'message.autoresp','Message Confirmation',' <h3><strong>Dear %{recipient.name.first},</strong></h3> Your reply to support request <a href=\"%%7Brecipient.ticket_link%7D\">#%{ticket.number}</a> has been noted <br /><br /><div style=\"color:rgb(127, 127, 127)\"> Your %{company.name} Team,<br /> %{signature} </div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small;text-align:center\"> <em>You can view the support request progress <a href=\"%%7Brecipient.ticket_link%7D\">online here</a></em> </div> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(4,1,'ticket.notice','%{ticket.subject} [#%{ticket.number}]',' <h3><strong>Dear %{recipient.name.first},</strong></h3> Our customer care team has created a ticket, <a href=\"%%7Brecipient.ticket_link%7D\">#%{ticket.number}</a> on your behalf, with the following details and summary: <br /><br /> Topic: <strong>%{ticket.topic.name}</strong> <br /> Subject: <strong>%{ticket.subject}</strong> <br /><br /> %{message} <br /><br /> If need be, a representative will follow-up with you as soon as possible. You can also <a href=\"%%7Brecipient.ticket_link%7D\">view this ticket\'s progress online</a>. <br /><br /><div style=\"color:rgb(127, 127, 127)\"> Your %{company.name} Team,<br /> %{signature}</div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small\"><em>If you wish to provide additional comments or information regarding the issue, please reply to this email or <a href=\"%%7Brecipient.ticket_link%7D\"><span style=\"color:rgb(84, 141, 212)\">login to your account</span></a> for a complete archive of your support requests.</em></div> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(5,1,'ticket.overlimit','Open Tickets Limit Reached',' <h3><strong>Dear %{ticket.name.first},</strong></h3> You have reached the maximum number of open tickets allowed. To be able to open another ticket, one of your pending tickets must be closed. To update or add comments to an open ticket simply <a href=\"%%7Burl%7D/tickets.php?e=%%7Bticket.email%7D\">login to our helpdesk</a>. <br /><br /> Thank you,<br /> Support Ticket System',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(6,1,'ticket.reply','Re: %{ticket.subject} [#%{ticket.number}]',' <h3><strong>Dear %{recipient.name},</strong></h3> %{response} <br /><br /><div style=\"color:rgb(127, 127, 127)\"> Your %{company.name} Team,<br /> %{signature} </div> <hr /> <div style=\"color:rgb(127, 127, 127);font-size:small;text-align:center\"><em>We hope this response has sufficiently answered your questions. If not, please do not send another email. Instead, reply to this email or <a href=\"%%7Brecipient.ticket_link%7D\" style=\"color:rgb(84, 141, 212)\">login to your account</a> for a complete archive of all your support requests and responses.</em></div> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(7,1,'ticket.activity.notice','Re: %{ticket.subject} [#%{ticket.number}]',' <h3><strong>Dear %{recipient.name.first},</strong></h3> <div> <em>%{poster.name}</em> just logged a message to a ticket in which you participate. </div> <br /> %{message} <br /><br /><hr /> <div style=\"color:rgb(127, 127, 127);font-size:small;text-align:center\"> <em>You\'re getting this email because you are a collaborator on ticket <a href=\"%%7Brecipient.ticket_link%7D\" style=\"color:rgb(84, 141, 212)\">#%{ticket.number}</a>. To participate, simply reply to this email or <a href=\"%%7Brecipient.ticket_link%7D\" style=\"color:rgb(84, 141, 212)\">click here</a> for a complete archive of the ticket thread.</em> </div> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(8,1,'ticket.alert','New Ticket Alert',' <h2>Hi %{recipient.name},</h2> New ticket #%{ticket.number} created <br /><br /><table><tbody> <tr> <td> <strong>From</strong>: </td> <td> %{ticket.name} </td> </tr> <tr> <td> <strong>Department</strong>: </td> <td> %{ticket.dept.name} </td> </tr> </tbody></table> <br /> %{message} <br /><br /><hr /> <div>To view or respond to the ticket, please <a href=\"%%7Bticket.staff_link%7D\">login</a> to the support ticket system</div> <em style=\"font-size:small\">Your friendly Customer Support System</em> <br /><a href=\"http://osticket.com/\"><img width=\"126\" height=\"19\" style=\"width:126px\" alt=\"Powered By osTicket\" src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" /></a> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(9,1,'message.alert','New Message Alert',' <h3><strong>Hi %{recipient.name},</strong></h3> New message appended to ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> <br /><br /><table><tbody> <tr> <td> <strong>From</strong>: </td> <td> %{ticket.name} </td> </tr> <tr> <td> <strong>Department</strong>: </td> <td> %{ticket.dept.name} </td> </tr> </tbody></table> <br /> %{message} <br /><br /><hr /> <div>To view or respond to the ticket, please <a href=\"%%7Bticket.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">login</span></a> to the support ticket system</div> <em style=\"color:rgb(127,127,127);font-size:small\">Your friendly Customer Support System</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(10,1,'note.alert','New Internal Activity Alert',' <h3><strong>Hi %{recipient.name},</strong></h3> An agent has logged activity on ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> <br /><br /><table><tbody> <tr> <td> <strong>From</strong>: </td> <td> %{note.poster} </td> </tr> <tr> <td> <strong>Title</strong>: </td> <td> %{note.title} </td> </tr> </tbody></table> <br /> %{note.message} <br /><br /><hr /> To view/respond to the ticket, please <a href=\"%%7Bticket.staff_link%7D\">login</a> to the support ticket system <br /><br /><em style=\"font-size:small\">Your friendly Customer Support System</em> <br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(11,1,'assigned.alert','Ticket Assigned to you',' <h3><strong>Hi %{assignee.name.first},</strong></h3> Ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> has been assigned to you by %{assigner.name.short} <br /><br /><table><tbody> <tr> <td> <strong>From</strong>: </td> <td> %{ticket.name} </td> </tr> <tr> <td> <strong>Subject</strong>: </td> <td> %{ticket.subject} </td> </tr> </tbody></table> <br /> %{comments} <br /><br /><hr /> <div>To view/respond to the ticket, please <a href=\"%%7Bticket.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">login</span></a> to the support ticket system</div> <em style=\"font-size:small\">Your friendly Customer Support System</em> <br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(12,1,'transfer.alert','Ticket #%{ticket.number} transfer - %{ticket.dept.name}',' <h3>Hi %{recipient.name},</h3> Ticket <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> has been transferred to the %{ticket.dept.name} department by <strong>%{staff.name.short}</strong> <br /><br /><blockquote> %{comments} </blockquote> <hr /> <div>To view or respond to the ticket, please <a href=\"%%7Bticket.staff_link%7D\">login</a> to the support ticket system. </div> <em style=\"font-size:small\">Your friendly Customer Support System</em> <br /><a href=\"http://osticket.com/\"><img width=\"126\" height=\"19\" alt=\"Powered By osTicket\" style=\"width:126px\" src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" /></a> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(13,1,'ticket.overdue','Stale Ticket Alert',' <h3> <strong>Hi %{recipient.name}</strong>,</h3> A ticket, <a href=\"%%7Bticket.staff_link%7D\">#%{ticket.number}</a> is seriously overdue. <br /><br /> We should all work hard to guarantee that all tickets are being addressed in a timely manner. <br /><br /> Signed,<br /> %{ticket.dept.manager.name} <hr /> <div>To view or respond to the ticket, please <a href=\"%%7Bticket.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">login</span></a> to the support ticket system. You\'re receiving this notice because the ticket is assigned directly to you or to a team or department of which you\'re a member.</div> <em style=\"font-size:small\">Your friendly <span style=\"font-size:smaller\">(although with limited patience)</span> Customer Support System</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" height=\"19\" alt=\"Powered by osTicket\" width=\"126\" style=\"width:126px\" /> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(14,1,'task.alert','New Task Alert',' <h2>Hi %{recipient.name},</h2> New task <a href=\"%%7Btask.staff_link%7D\">#%{task.number}</a> created <br /><br /><table><tbody><tr> <td> <strong>Department</strong>: </td> <td> %{task.dept.name} </td> </tr></tbody></table> <br /> %{task.description} <br /><br /><hr /> <div>To view or respond to the ticket, please <a href=\"%%7Btask.staff_link%7D\">login</a> to the support system</div> <em style=\"font-size:small\">Your friendly Customer Support System</em> <br /><a href=\"http://osticket.com/\"><img width=\"126\" height=\"19\" style=\"width:126px\" alt=\"Powered By osTicket\" src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" /></a> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(15,1,'task.activity.notice','Re: %{task.title} [#%{task.number}]',' <h3><strong>Dear %{recipient.name.first},</strong></h3> <div> <em>%{poster.name}</em> just logged a message to a task in which you participate. </div> <br /> %{message} <br /><br /><hr /> <div style=\"color:rgb(127, 127, 127);font-size:small;text-align:center\"> <em>You\'re getting this email because you are a collaborator on task #%{task.number}. To participate, simply reply to this email.</em> </div> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(16,1,'task.activity.alert','Task Activity [#%{task.number}] - %{activity.title}',' <h3><strong>Hi %{recipient.name},</strong></h3> Task <a href=\"%%7Btask.staff_link%7D\">#%{task.number}</a> updated: %{activity.description} <br /><br /> %{message} <br /><br /><hr /> <div>To view or respond to the task, please <a href=\"%%7Btask.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">login</span></a> to the support system</div> <em style=\"color:rgb(127,127,127);font-size:small\">Your friendly Customer Support System</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(17,1,'task.assignment.alert','Task Assigned to you',' <h3><strong>Hi %{assignee.name.first},</strong></h3> Task <a href=\"%%7Btask.staff_link%7D\">#%{task.number}</a> has been assigned to you by %{assigner.name.short} <br /><br /> %{comments} <br /><br /><hr /> <div>To view/respond to the task, please <a href=\"%%7Btask.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">login</span></a> to the support system</div> <em style=\"font-size:small\">Your friendly Customer Support System</em> <br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width:126px\" /> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(18,1,'task.transfer.alert','Task #%{task.number} transfer - %{task.dept.name}',' <h3>Hi %{recipient.name},</h3> Task <a href=\"%%7Btask.staff_link%7D\">#%{task.number}</a> has been transferred to the %{task.dept.name} department by <strong>%{staff.name.short}</strong> <br /><br /><blockquote> %{comments} </blockquote> <hr /> <div>To view or respond to the task, please <a href=\"%%7Btask.staff_link%7D\">login</a> to the support system. </div> <em style=\"font-size:small\">Your friendly Customer Support System</em> <br /><a href=\"http://osticket.com/\"><img width=\"126\" height=\"19\" alt=\"Powered By osTicket\" style=\"width:126px\" src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" /></a> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(19,1,'task.overdue.alert','Stale Task Alert',' <h3> <strong>Hi %{recipient.name}</strong>,</h3> A task, <a href=\"%%7Btask.staff_link%7D\">#%{task.number}</a> is seriously overdue. <br /><br /> We should all work hard to guarantee that all tasks are being addressed in a timely manner. <br /><br /> Signed,<br /> %{task.dept.manager.name} <hr /> <div>To view or respond to the task, please <a href=\"%%7Btask.staff_link%7D\"><span style=\"color:rgb(84, 141, 212)\">login</span></a> to the support system. You\'re receiving this notice because the task is assigned directly to you or to a team or department of which you\'re a member.</div> <em style=\"font-size:small\">Your friendly <span style=\"font-size:smaller\">(although with limited patience)</span> Customer Support System</em><br /><img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" height=\"19\" alt=\"Powered by osTicket\" width=\"126\" style=\"width:126px\" /> ',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_email_template_group`
--

DROP TABLE IF EXISTS `ost_email_template_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_email_template_group` (
  `tpl_id` int(11) NOT NULL AUTO_INCREMENT,
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `lang` varchar(16) NOT NULL DEFAULT 'en_US',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` timestamp NOT NULL,
  PRIMARY KEY (`tpl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_email_template_group`
--

LOCK TABLES `ost_email_template_group` WRITE;
/*!40000 ALTER TABLE `ost_email_template_group` DISABLE KEYS */;
INSERT INTO `ost_email_template_group` VALUES (1,1,'osTicket Default Template (HTML)','en_US','Default osTicket templates','2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_email_template_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_faq`
--

DROP TABLE IF EXISTS `ost_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_faq` (
  `faq_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ispublished` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `keywords` tinytext,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`faq_id`),
  UNIQUE KEY `question` (`question`),
  KEY `category_id` (`category_id`),
  KEY `ispublished` (`ispublished`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_faq`
--

LOCK TABLES `ost_faq` WRITE;
/*!40000 ALTER TABLE `ost_faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_faq_category`
--

DROP TABLE IF EXISTS `ost_faq_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_faq_category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ispublic` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `name` varchar(125) DEFAULT NULL,
  `description` text NOT NULL,
  `notes` tinytext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `ispublic` (`ispublic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_faq_category`
--

LOCK TABLES `ost_faq_category` WRITE;
/*!40000 ALTER TABLE `ost_faq_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_faq_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_faq_topic`
--

DROP TABLE IF EXISTS `ost_faq_topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_faq_topic` (
  `faq_id` int(10) unsigned NOT NULL,
  `topic_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`faq_id`,`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_faq_topic`
--

LOCK TABLES `ost_faq_topic` WRITE;
/*!40000 ALTER TABLE `ost_faq_topic` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_faq_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_file`
--

DROP TABLE IF EXISTS `ost_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ft` char(1) NOT NULL DEFAULT 'T',
  `bk` char(1) NOT NULL DEFAULT 'D',
  `type` varchar(255) CHARACTER SET ascii NOT NULL DEFAULT '',
  `size` bigint(20) unsigned NOT NULL DEFAULT '0',
  `key` varchar(86) CHARACTER SET ascii NOT NULL,
  `signature` varchar(86) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `attrs` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ft` (`ft`),
  KEY `key` (`key`),
  KEY `signature` (`signature`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_file`
--

LOCK TABLES `ost_file` WRITE;
/*!40000 ALTER TABLE `ost_file` DISABLE KEYS */;
INSERT INTO `ost_file` VALUES (1,'T','D','image/png',9452,'b56944cb4722cc5cda9d1e23a3ea7fbc','gjMyblHhAxCQvzLfPBW3EjMUY1AmQQmz','powered-by-osticket.png',NULL,'2018-05-16 12:16:03'),(2,'T','D','text/plain',24,'y2U93MWtx86n3ccfeGGNagoRoTDtol7o','MWtx86n3ccfeGGNafaacpitTxmJ4h3Ls','osTicket.txt',NULL,'2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_file_chunk`
--

DROP TABLE IF EXISTS `ost_file_chunk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_file_chunk` (
  `file_id` int(11) NOT NULL,
  `chunk_id` int(11) NOT NULL,
  `filedata` longblob NOT NULL,
  PRIMARY KEY (`file_id`,`chunk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_file_chunk`
--

LOCK TABLES `ost_file_chunk` WRITE;
/*!40000 ALTER TABLE `ost_file_chunk` DISABLE KEYS */;
INSERT INTO `ost_file_chunk` VALUES (1,0,'�PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0\�\0\0\0(\0\0\0�G\�\�\0\0\nCiCCPICC profile\0\0xڝSwX��>\��eVB\��l�\0\"#�\�Y��\0a�@Ņ�\nV�HUĂ\�\nH��\�(�gA��Z�U\\8\�ܧ�}z\�\�\��\���\�\��\�y\��&�\�j\09R�<:\��OH\�ɽ�H\� \�\�\�g\�\0\0�yx~t�?��o\0\0p\�.$\�\����P&W\0 �\0\�\"\��R\0\�.T\�\0\�\0�S�d\n\0�\0\0ly|B\"\0�\r\0\��I>\0ة�\�\0آ�\0�\0�(G$@�\0`U�R,�\�\0��@\".���Y�2G��\0v�X�@`\0��B,\�\0 8\0C\� L�0ҿ\�_p��H\0�˕͗K\�3��\�\Zw��\�\�!\�\�l�Ba)f	\�\"���#H\�L\�\0\0\Z�\���8?�\�\�\�\�\�f\�l\��Ţ�k�o\">!�\����\0N\�\�\�_\�\�\�p\��u�k�[\0\�V\0h\��]3\�	�Z\n\�z��y8�@��P\�<\n\�%b��0\�>�3\�o\��~��@�\�z�\0q�@������qanv�R�\�\�B1n�\�#�ǅ��)\�\�4�\\,��X��P\"M\�y�R�D!ɕ\�\�2���	�w\r\0��O�N��\�l�~\��X\�v\0@~�-�\Z�\0g42y�\0\0����@+\0͗�\�\0\0�\�\\��L\�\0\0D��*�A�������aD@$�<B\�\n��AT�:\���\Z��\���18\r\�\�\\�\�p`�\���	A\�a!:�b�\�\"\���\"aH4��� \�Q\"\�\�r��Bj�]H#�-r9�\\@��\�\� 2����G1���Q\�u@��\Z�Ơs\�t4]���k\�\Z�=����\�K\�ut\0}��c�\�1f�\�a\\��E`�X\Z&\�c\�X5V�5cX7v��a\�$��\�^�\�l���GXLXC�%\�#��W	��1\�\'\"��O�%z�\�xb:��XF�&\�!!�%^\'_�H$ɒ\�N\n!%�2IIkH\�H-�S�>\�i�L&\�m\�\�\���� �����O��\�\�\�:ň\�L	�$R��J5e?\���2B���Qͩ�\���:�ZIm�vP/S��4u�%͛Cˤ-�\�Кigi�h/\�t�	݃E�З\�k\�\�\�\��w\r�\r�\�Hb(k{��/�L�ӗ�\�T0\�2�g��oUX*�*|�\��:�V�~�\�TUsU?\�y�T�U�^V}�FU�P\�	\��թU��6�\�RwR�P\�Q_��_���c\r���F��H�Tc�\��!\�2e�XB\�rV\�,k�Mb[��\�Lv�v/{LSCs�f�f�f�\�q\�Ʊ\��9ٜJ\�!\�\r\�{--?-�\�j�f�~�7\�zھ\�b\�r\�\�\�\�\�up�@�,��:m:�u	�6�Q���\�u\�\�>\�c\�y\�	�\��\�\�\�G�m���\�\�\�\�\�7046�l18c�̐c\�k�i�\���\�\�h��\�h�\�I�\'�&\�g\�5x>f�ob�4\�e\�k<abi2ۤĤ\�\�)͔k�f�Ѵ\�t\�\�\�,ܬج\�\�9՜k�a�ټ\�����E�\�J�6�ǖږ|\��M����V>VyV�V׬I\�\\\�,\�m\�WlPW��:�˶����\�v�m\�\��)\�)�Sn\�1\��\�\n\�\�\�9�a�%�m�\�\�\�;t;|rtu\�vlp�\�\�4éĩ\�\�Wgg�s��5�K�\��v�Sm���n�z˕\�\Z\�ҵ\������ܭ\�m\�\�\�=\�}��M.�\�]\�=\�A���X\�q\�㝧��\��\�/^v^Y^��O��&�\�0m\�\�\�[\�\�{`:>=e�\�\�>\�>�z�����\"\�=�#~\�~�~���;�\�����\�y��N`�\���\Z��k��5��/>B	\rYr�o���c3\�g,�\�\��Z�0\�&L\���\�\�~o��L\�̶�\�Gl��i��})*2�.\�Q�Stqt�,֬\�Y�g��񏩌�;\�j�rvg�jlRlc웸�����x��E�t$	\�\�\�\�\�=�\�s\�l�3�\�T�tc�\�ܢ�\�\�\�˞w<Y5Y�|8����?\� BP/O\�nM򄛅OE����Q���J<�\�V��8\�;}C�h�OFu\�3	OR+y���#�MVD\�ެ\�\�q\�-9�����R\ri��+\�0�(�Of++�\r\�y\�m\���\��\�#�s�\�l�Lѣ�R�PL/�+x[[x�H�HZ\�3\�f�\��#�|���P���ظxY�\�\"�E�#�Sw.1]R�dxi�\�}\�h˲��P\�XRU�jy\��R�ҥ�C+�W4���\�\�n��Z�ca�dU\�j�\�[V*�_�p�����F�\�\�WN_\�|�ym\�\�\�J�\�\�\�H\�\�n��Y��J�jA\�І�\r��\�_mJ\�t�zj��ʹ\�\�\�5a5\�[̶�\��6��z�]\�V�����\�&\�ֿ\�w{��;\�\�켵+xWk�E}�n\�\�ݏ\Zb��\�~ݸGwOŞ�{�{�E\�\�jtolܯ���	mR6�H:p囀oڛ\�w�pZ*\�A\��\'ߦ|{\�P\�\�\�\�\�\�ߙ��\�Hy+\�:�u�-�m�=��\�茣�^G���~\�1\�cu\�5�W���(=��䂓\�d���N?=ԙ\�y�L��k]Q]�gCϞ?t\�L�_�\��\�\�]�p�\"�b\�%�K�=�=G~p�\�H�[o\�e�\�\�W<�t�M\�;\�\�\��j�\�s\��\�.]�y�\�\�\��n&\��%���v�\�w\n\�L\�]z�x���\��\��\����e�m\��`�`\�\�Y\�	�����Ӈ\�\�G\�G\�#F#���\r\Z��dΓ᧲�\�\�~V�y\�s�\�\��\��K\�X�\����Ͽ�y��r﫩�:\�#\��\�y=���\�\�}\�\�\�ǽ�(�@�P�\��cǧ\�O�>\�|��/�����9%\0\0\0tEXtSoftware\0Adobe ImageReadyq\�e<\0\0(iTXtXML:com.adobe.xmp\0\0\0\0\0<?xpacket begin=\"﻿\" id=\"W5M0MpCehiHzreSzNTczkc9d\"?> <x:xmpmeta xmlns:x=\"adobe:ns:meta/\" x:xmptk=\"Adobe XMP Core 5.6-c014 79.156797, 2014/08/20-09:53:02        \"> <rdf:RDF xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\"> <rdf:Description rdf:about=\"\" xmlns:xmp=\"http://ns.adobe.com/xap/1.0/\" xmlns:xmpMM=\"http://ns.adobe.com/xap/1.0/mm/\" xmlns:stRef=\"http://ns.adobe.com/xap/1.0/sType/ResourceRef#\" xmp:CreatorTool=\"Adobe Photoshop CC 2014 (Macintosh)\" xmpMM:InstanceID=\"xmp.iid:6E2C95DEA67311E4BDCDDF91FAF94DA5\" xmpMM:DocumentID=\"xmp.did:6E2C95DFA67311E4BDCDDF91FAF94DA5\"> <xmpMM:DerivedFrom stRef:instanceID=\"xmp.iid:CFA74E4FA67111E4BDCDDF91FAF94DA5\" stRef:documentID=\"xmp.did:CFA74E50A67111E4BDCDDF91FAF94DA5\"/> </rdf:Description> </rdf:RDF> </x:xmpmeta> <?xpacket end=\"r\"?>���\�\0\0IDATx\�\�]	�S\�\�?/{2\�df�aq�]67\�ϭ(*�-\n��.�+\�օ� n�J���S�R�\�:VDT�,e\�2�l����\�3\�\�L���ݛ�os\�N�\�Pq\���$���\���\���s\�1�NY96�\�t\�\�\�\�S�/Q\��]k~K���\�z�\�\�>�%4ߤ\�5���<�\�,�\�clmY�\�\����\'�\�B�h���B�LZ�\�M?���\0]s�G\�>�\�\�Z(4W�]h\r\"Ҿ&F4�]���?JKD$�F>Yd-}Q�ZY�e\�)���*t�\�ӄ�\�\�$��\r	=(t�\�\�Bg	=���\��_���єQ\0m\�V\�+�S�va�D�W\�g�����B���B�e��\�B��L\�H�\��#t�B\�	�mFW�\0;t\� _�\�\�@�\�њ�x�\�.t!�[\�!#\�\\��\�|\�\�W��:�\�\rG��I��9\�\�*ʍ6ˁ\���Jk�S��A\�qG�N��\09���EB\�M�~-4?홝\�~\�I�}\�&�y\�eY\�\��\��o\n\�u�\�{.r��Bk�\�iv?���LG��є�j\�-+\��Q散\02%>\�|�\�\�(^\���\�\n\�X\�\�r�\�T\�\�R\�\�-�*����-\�\�R�˅V��\�BI\�:G\�T\�#�\�5i�\ZE\"F��lD;\�\\_\�p��sj\�d��B\"t�\�B)�2\�w\�\�\�ϊ��`�\��Ф�^��\�MnA!�\�<�Y\�>�������\n�kt�M\�Jw%���<.�\�\�\�B�U\\G�BI?禓]\0\�o\�\��\�^����eF�&.��\�a�\�a5\�͚��#ңo>��=L^�\��]F��\�\�J�N\0�G��ㅾV�\Z��!q#!\��\�\��6=X\�9�\\T2\�ﲨ{��c\�捳,Ў)zak�l��@1�\�\�{���^��MF��_b\�\�(7�9����+\'J�\�{h�n\��[\\�hi��Gc41\'\'�M\��1���\�>;k\�ǐL���\�\�݋��\�$\�|\�~�,��ݕ�x\� �l\�\�(4W.\�\ZAjՈ\�r�\�\�sr\�W��\�M\�W�r\�\"z�h��>�\�;��Y�窊E,�0ތ\\�\\1\�b\���\�\"\�\'����x\��\�u\�LY\�ȣx9\�)��^[\0�P�XV\��NX\�ͻ�T(\"Y���u�\�W�e�v�݈RU\�C55A�\�C�\�GY6?���@\�\�1k�VS|�9�\�I\�X\�\�\�*�rD\�\"��L���Ύ=*@4\�=N\�wZj�9�%p\��\�%a\��~�\�yBe��������\r�\�\�K\�;HT\�o\�+�)�Q\�_Ÿt�\�\��cI\�U�ȱB\"�Vڪ\�Vg>L\�vW�S\�1�|�X��\�pѰ\�y��Zx�rR�\�\'�#��)�\�W�H�[ ԍ�\���	\�(#�=B2��C�۲@\�JL,H$\�ݵ(��N)2���\'��䘮\Z�\�/*\��\'rZ�KD\��V�((\�\�g	��ś{�\�P�]aY\� �jߊ=B��\n\"4~n�VnwR���X�F�U�rQsΐJd\�\�\Zz��7\"\�y�7e�cV����\���\�\�\�\�\�%�B�T`\��S�O\�;]NNy�X\�z7\�s�\�}��\�~j/�߬\rn���\�F\�z\�\�\�*�\�f�ۉ洌5)\�\�E�\�EK|�\�j�4\��4\rI.��x�\�\�\�.�j�6��GJ�G_��Ә�Zz1`Nx\�P�\�<8�^�\�$6�v\�hUY�\n\�G�\��jrެ/^\�D����a\�S��ۚIm·L��\Z�^ f��Z\��A36�ck�\�{,\Z9�Rܱ@W�Q%��Z\�d�\�\�Wm��o��\'rK�\�J���U0\�7YާD~&*�\��\����1~�\�&=PH:	\�\�e�ְȁ~��|\�d4ş:\�҇\�\�\n\�\�{�\�ţTǹ+h�,�\�9ww�\�z\��X\0���\�\�-�K�\�N/R\��\�\�\�\�\r\�3-H��h+�apymv+\�\�gɧ�7��E#�:\�\�*��\�\�Z;x�\�΁w\�*��Kq�8W\�Q�\��ȶ<�{X�&�ң�xPTR\�;Pđ �#�����%·\'\�\�H/�d���&A�y��?����\�Ljȇ6\�=\"�9�t9\Z_��2I$\��\0\�K\�,\�-\"\�h���g.\��v��8߼\�a�=�ٞ]MV*D-z�c0:�z7y\�ɣGϯ(/y=�|ҧ^[�Ӻ�ca\�q�>ѺQj�\�\�)�bD��\�ky��J@\��\�c�\�K�����leh\rK�\�\�)�\�Axn�v�F8\r�J��Bww*%Gl^͖̋*�D�LV\���� �)Q\�x�\�1\�NT�7o\�\�.\�|\�e�S�V\�>^�\�\��\�B/�\Z�ҽ\�\�qSE\��\�>;-\�\�41�t����iD\�瓍8U�}\'\�\"�OB\�z��#�\�\�\�w���v8;��\�I�F>\�:Թ�㰀\�O4D\�\�r��\�\�\�S\�m�.��F!%�8䊛I��y\"������\�e\�*H\�NE\�f�t5\�\�K#��L��B\�\�\�E�3\�\�6P��\��$�V72�\�;\�\�P\"1�Óȹ��\��\��ڹ�\�\\y�\� \�(�r�\"�W�>����\�z�S�}�\�|?A�\�6N���y΋p9H��\0���\�6\�1�6ʧP\�Z}i\�\"���R7\�%�\�O\�\�č�\�ыkCU!j/@61\�z	\�\'�[�~�\�wף�7V\0q_�+�}\�o^e4\"6����¨�s����!\�\�\\r\�\�k�JN�T�$@�Q�N���S\����\�\�\�$yZ(_�:\�{\��\�W,��\r�/��u�\Zs\�x�\�Ѱqh\�\�\�\�\�.�\�}	���\�g(�b[\Z\�s�L7\��RF�\�+�%�(�\�G\�8\"�4�r�\�)\�5V\��6I�\�F�\r:\� XR>9�\�Q;G)ڴ\�\���^�\�LȰR\�#�\�\�.c\�/ ��5/d\�Izf9�,\�\�}Og+>{8���xq\�*\�\��k��^\�Z`5�\�r�u�\�u��ʠ�\�\"�I�\�E[uT�\\�\n\�q�\�\�f\�-\�ϵ\�ͺ/I4%8�{0\�7\"W+k���T��Ga_\�dC:���2\�\�\�\�v\0\�Y\��\�-��\�{���0ǟN\�6V��\�\��!1��y��\0@�LF�y\�@:�:x\�:�/+E�îu.^f=0	�W\�V\"b��K\�5�3G�\�ht�#�+��>?�\�ǽ=���0�}0�\�t�ɼ\��u\r�V��\�9�)�ftѼ~;��W�9Xt\�tƊ#)\n6Ex�9r��\�8��\�_K�\��g\���\�D���\����+	ȸ�\n�\�\�Z���u�\�-@\�G�\�L\��\�M\Z\�\�`\��^N�\r�^F�ȫ	\�\�\�\�\�` #�\�bL\�FD\�~�x֎@7��\�:\�\��!l�1�l\Z��\'�9@p)�b\�PbN\�UP��q�\����t�\�8��\"�\'�\r\\&!ª��\�&OGGׂb\�nf`]\�0\�\�N=m?�\�k�\�\�\�X\�F$?��2�bP\n��ؕp�0�\�{�EAoh��|�\�d�Y\�E,\�qjQe�0\�\�T`\�\�K|4bf.\�D\�f����\�o�\�N\�D�Á�\��=l,uف1�\\����v\�U���\�P��w�B�G_�)1�\0�N�o������C\�\�\�\�\�&ҁ�\�痁\�<Pq~�6����cmZ���\�b>\�	�\\�U�����\' �y�>!ܶF�\�G�,\�G\��\�MO\�f \�uQ\�\��\�\��nx�����H�rL<\�4�?f/\��qR��\�Jʿ�ɤ%e\"��\�2�s!֧�!��\'�~\�\�p\r#Je\�+R=u�\��m�^J��U�|��\�F\�op�C���(h_oI3�\�]puB4�+�q.�\�C���I[\�IM�gTm(��F�F�g/\"\�X���A��]��\03#��)I\�5\�r\���cӨ}ʪ\�G\���@�@Q�|\0�\�E(�N��\�w�\�̥�uD\�K\0��h\�*\�Y�C�.�1\�\�UrX4<�y�\�̐;�\��_B�@�D1p~mx\�V\�ޯ\�g�5Ze�+x\�\�\�H�\�\'\�P\rD龬�\�lw����P\�\�d�x\�>]h���B���\�G��\�G���R�|\�\�`��\�Q\�\�v��\�Ӡ�B��C,ERO�g*��/6��9�p�8!ĭ�\�씯�q\"BZ45xH2Ţ-G:��I83%��\�$�|��aY\�\0<ܴ�Z�\�W��\�0\�&�\�\�\�aTn\�\�U�\�â\�Zt���ep�\Z\�\�i#E���F�6\��\�*\�\�\\\��o��&H\'	�=\�c6�m\"Ķ6�W\�\�\�JVQSq*겨b���,�Q����d��{\�4\��{r��\�u!Ʋ\�\�F�n��-赒\��7a�\�L����\�7i@\�{P�L閮%$�\�(\��\'q��c��\�w`��`@��5	�e���\�\�\Z��\��9�fգ���V%������M(�ë�q\�a��\�s�\��Q�\�w^\��w\�\nRZ0ǲ�E\�O\�tn`Ň\�藸eY=\�m.���\'2_��CN`Ʈ�(!�k\��M\�č�4u���%�4)��H�[�\�/�;��}\\��8�*\�X��\�=Mwh\r\Zt\n\�\\\'\"\�\nƄ\�Z~M3��-9\�8\�R8��g�_@uWN�\�4��ꓚϹ�5b5\��T^RcSVh�b\�>b\0#\�\�5:�,�w\�cT��Pma�\�����\'� �E	e0\�XԎBI�Fx\\y���U\��\"�8�r�\��[��E\�r:!5�dIA�\�h\�\'Z4Wt�����g\�4醲�v\�<\�Q�]�-��\\\�\�A(5`m,�	皌�V�\Z�Xd�\�*�\�Pb��<�B%+�#c.V*�\�\�P���,Vՙy(:�\0�F#\"|Fu7����l+\0(���\�ŀ�b����\�`xڗPR�7՝*)�.^U(\�\\�Μ��;��脫PЙ\0�y�\Z��\�\��\��\0�j\�\�8���\Z\�\��\�\�y\�d�Q\�e���Z�	\�EO���\�h\�u)�\�\�h�3�!�[SU\�\'�\�_��q���\�(.��RO�B\�b�W�Ѷh\�ԋG\r\�N�\��)�\�\�\�|V�F�h��&D]\��\�E4 k�y6hw\���=\�\�\�?D��\'����u�b-\�Ts��G���y�y��`8��\�\�<�\na+V\�\rh�2	�x��1\�іMA��y�)l\�k$����H�\�y�7��t\r��j\�H�/6-\�J�u&<}\"�Qĕn@{�j�K\Z�.`-N�Bچ\�ӫh�M/^���\\߀1vS\�/GJP�!�6#���9�:Cb�����\�DčR\�_\�9���C\r��SU]SE4;��\�B�o�\"�(���Px)\'�\�̵pʲ\�	ޝӜ{�P\�4	�\�0,@:\�L���\\j\�_��g�08�0\�c�\"!\�\�,x77��\Z\n��d�\"~�h\��\�\��\�~P�9I��,FS\�\�;km@F2?\n%�5z|:��5h\�D\�\�C\�tG\�TET�\�}-�\�qz\�{\n��iI\�Q�3�#\�\�dt�-\�!\�DWD\�#w#e&��\Z��QND�w���ݔj\�q��\�{p��k���+܏{gZǫrХl��\"�l�m$l\�p$I?�1�`<\��\�:$�\�\�Bi\�b�B��c]�\�݀k8q��v�C�d�W�\�xU\�\'�y�������Q�\�.�=o��3��V�� %��|F�\�=�V\�+��$�E\'^9O�7K\�\�L��轲Z�\�ȫ�I\�4x��a�\�\�A�\�>\�\�g�Џ����\0`_c:\Z��\rF�(D\�~@3ѷ3)��S:�\� _?𵀓\\�M)\�\�8\�~x/\�\��\�F!\�Pn\�p/ؽ\�\�%h[p݋Xes,ھđ�\nie�L\��\�D��JKKr�\�u�A�)J�w\"�d����x^�\�\�W\��\np\�\�\�$�\�\0D�(�-�]�]�\�:�hk��\�i��d3�����+�\�;\�\�Un�4\nKɶP(P\�h�\�\�\n;^�Ʋ�,]|��X�˫�Tw	V�\�\�v\0�u���ྞbS(�\�ٖZ?=g`x�\�ѡ5�MY9\Z��\\S�l3�e:Y	j\�Bn�v�J5�s�z\��S\�\�.\'\�\�%�jh̜�\0Z=_�\Z���h`oe[�\�\�)�#�2�i�\���M\�7י�bV����N@t�S�_]�\���wfHu͙He�\�m\�\��\�Hk Z�D۽�\�\'(�����NT�\�|_;\�\"�\�VJL�ɔi���\�/�Bh�����8\�\"�\�/\�!w\���\��\�\�F5\��vT!+Q��/A�FOҘ\�\�4�C�\Zp0jC�\nJ\�\'6��Q�~\�7vD3/\�B5��\�@\�Z p\�\�\��_�\0�௘s]J�\0\0\0\0IEND�B`�'),(2,0,'Canned Attachments Rock!');
/*!40000 ALTER TABLE `ost_file_chunk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_filter`
--

DROP TABLE IF EXISTS `ost_filter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_filter` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `execorder` int(10) unsigned NOT NULL DEFAULT '99',
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `status` int(11) unsigned NOT NULL DEFAULT '0',
  `match_all_rules` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `stop_onmatch` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `target` enum('Any','Web','Email','API') NOT NULL DEFAULT 'Any',
  `email_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(32) NOT NULL DEFAULT '',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `target` (`target`),
  KEY `email_id` (`email_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_filter`
--

LOCK TABLES `ost_filter` WRITE;
/*!40000 ALTER TABLE `ost_filter` DISABLE KEYS */;
INSERT INTO `ost_filter` VALUES (1,99,1,0,0,0,'Email',0,'SYSTEM BAN LIST','Internal list for email banning. Do not remove','2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_filter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_filter_action`
--

DROP TABLE IF EXISTS `ost_filter_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_filter_action` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filter_id` int(10) unsigned NOT NULL,
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(24) NOT NULL,
  `configuration` text,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `filter_id` (`filter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_filter_action`
--

LOCK TABLES `ost_filter_action` WRITE;
/*!40000 ALTER TABLE `ost_filter_action` DISABLE KEYS */;
INSERT INTO `ost_filter_action` VALUES (1,1,1,'reject','[]','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_filter_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_filter_rule`
--

DROP TABLE IF EXISTS `ost_filter_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_filter_rule` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filter_id` int(10) unsigned NOT NULL DEFAULT '0',
  `what` varchar(32) NOT NULL,
  `how` enum('equal','not_equal','contains','dn_contain','starts','ends','match','not_match') NOT NULL,
  `val` varchar(255) NOT NULL,
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `notes` tinytext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filter` (`filter_id`,`what`,`how`,`val`),
  KEY `filter_id` (`filter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_filter_rule`
--

LOCK TABLES `ost_filter_rule` WRITE;
/*!40000 ALTER TABLE `ost_filter_rule` DISABLE KEYS */;
INSERT INTO `ost_filter_rule` VALUES (1,1,'email','equal','test@example.com',1,'','2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_filter_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_form`
--

DROP TABLE IF EXISTS `ost_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_form` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned DEFAULT NULL,
  `type` varchar(8) NOT NULL DEFAULT 'G',
  `flags` int(10) unsigned NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `instructions` varchar(512) DEFAULT NULL,
  `name` varchar(64) NOT NULL DEFAULT '',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_form`
--

LOCK TABLES `ost_form` WRITE;
/*!40000 ALTER TABLE `ost_form` DISABLE KEYS */;
INSERT INTO `ost_form` VALUES (1,NULL,'U',1,'Contact Information',NULL,'',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(2,NULL,'T',1,'Ticket Details','Please Describe Your Issue','','This form will be attached to every ticket, regardless of its source.\nYou can add any fields to this form and they will be available to all\ntickets, and will be searchable with advanced search and filterable.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(3,NULL,'C',1,'Company Information','Details available in email templates','',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(4,NULL,'O',1,'Organization Information','Details on user organization','',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(5,NULL,'A',1,'Task Details','Please Describe The Issue','','This form is used to create a task.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(6,NULL,'L1',1,'Ticket Status Properties','Properties that can be set on a ticket status.','',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_form_entry`
--

DROP TABLE IF EXISTS `ost_form_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_form_entry` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` int(11) unsigned NOT NULL,
  `object_id` int(11) unsigned DEFAULT NULL,
  `object_type` char(1) NOT NULL DEFAULT 'T',
  `sort` int(11) unsigned NOT NULL DEFAULT '1',
  `extra` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `entry_lookup` (`object_type`,`object_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_form_entry`
--

LOCK TABLES `ost_form_entry` WRITE;
/*!40000 ALTER TABLE `ost_form_entry` DISABLE KEYS */;
INSERT INTO `ost_form_entry` VALUES (1,4,1,'O',1,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(2,3,NULL,'C',1,NULL,'2018-05-16 12:16:04','2018-05-16 12:16:04'),(3,1,1,'U',1,NULL,'2018-05-16 12:16:04','2018-05-16 12:16:04'),(4,2,1,'T',0,'{\"disable\":[]}','2018-05-16 12:16:04','2018-05-16 12:16:04'),(5,1,2,'U',1,NULL,'2018-05-18 09:47:22','2018-05-18 09:47:22'),(6,2,2,'T',0,'{\"disable\":[]}','2018-05-18 09:47:23','2018-05-18 09:47:23'),(7,1,3,'U',1,NULL,'2018-06-21 16:55:30','2018-06-21 16:55:30'),(8,2,3,'T',0,'{\"disable\":[]}','2018-06-21 16:55:30','2018-06-21 16:55:30'),(9,1,4,'U',1,NULL,'2018-06-22 14:54:19','2018-06-22 14:54:19'),(10,2,4,'T',0,'{\"disable\":[]}','2018-06-22 14:54:19','2018-06-22 14:54:19'),(11,1,5,'U',1,NULL,'2018-06-27 12:29:54','2018-06-27 12:29:54'),(12,2,5,'T',0,'{\"disable\":[]}','2018-06-27 12:29:55','2018-06-27 12:29:55');
/*!40000 ALTER TABLE `ost_form_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_form_entry_values`
--

DROP TABLE IF EXISTS `ost_form_entry_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_form_entry_values` (
  `entry_id` int(11) unsigned NOT NULL,
  `field_id` int(11) unsigned NOT NULL,
  `value` text,
  `value_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`entry_id`,`field_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_form_entry_values`
--

LOCK TABLES `ost_form_entry_values` WRITE;
/*!40000 ALTER TABLE `ost_form_entry_values` DISABLE KEYS */;
INSERT INTO `ost_form_entry_values` VALUES (1,27,NULL,NULL),(1,28,'420 Desoto Street\nAlexandria, LA 71301',NULL),(1,29,'3182903674',NULL),(1,30,'http://osticket.com',NULL),(1,31,'Not only do we develop the software, we also use it to manage support for osTicket. Let us help you quickly implement and leverage the full potential of osTicket\'s features and functionality. Contact us for professional support or visit our website for documentation and community support.',NULL),(2,23,'itumm',NULL),(2,24,NULL,NULL),(2,25,NULL,NULL),(2,26,NULL,NULL),(3,1,'support@osticket.com',NULL),(3,2,'osTicket Support',NULL),(3,3,NULL,NULL),(3,4,NULL,NULL),(4,20,'osTicket Installed!',NULL),(4,22,'Normal',2),(5,1,NULL,NULL),(5,2,NULL,NULL),(5,3,NULL,NULL),(5,4,NULL,NULL),(6,20,'Feedback',NULL),(6,22,'Low',1),(7,1,NULL,NULL),(7,2,NULL,NULL),(7,3,NULL,NULL),(7,4,NULL,NULL),(8,20,'Feedback',NULL),(8,22,'Low',1),(9,1,NULL,NULL),(9,2,NULL,NULL),(9,3,NULL,NULL),(9,4,NULL,NULL),(10,20,'General Inquiry',NULL),(10,22,'Normal',2),(11,1,NULL,NULL),(11,2,NULL,NULL),(11,3,NULL,NULL),(11,4,NULL,NULL),(12,20,'General Inquiry',NULL),(12,22,'Normal',2);
/*!40000 ALTER TABLE `ost_form_entry_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_form_field`
--

DROP TABLE IF EXISTS `ost_form_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_form_field` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` int(11) unsigned NOT NULL,
  `flags` int(10) unsigned DEFAULT '1',
  `type` varchar(255) NOT NULL DEFAULT 'text',
  `label` varchar(255) NOT NULL,
  `name` varchar(64) NOT NULL,
  `configuration` text,
  `sort` int(11) unsigned NOT NULL,
  `hint` varchar(512) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_form_field`
--

LOCK TABLES `ost_form_field` WRITE;
/*!40000 ALTER TABLE `ost_form_field` DISABLE KEYS */;
INSERT INTO `ost_form_field` VALUES (1,1,30465,'text','Email Address','email','{\"size\":\"40\",\"length\":\"64\",\"validator\":\"email\",\"regex\":\"\",\"validator-error\":\"\",\"placeholder\":\"\"}',1,NULL,'2018-05-16 12:16:03','2018-06-27 12:34:29'),(2,1,30465,'text','Full Name','name','{\"size\":\"40\",\"length\":\"64\",\"validator\":\"\",\"regex\":\"\",\"validator-error\":\"\",\"placeholder\":\"\"}',2,NULL,'2018-05-16 12:16:03','2018-06-27 12:34:41'),(3,1,0,'phone','Phone Number','phone','{\"ext\":true,\"digits\":\"7\",\"format\":\"us\"}',3,NULL,'2018-05-16 12:16:03','2018-06-27 12:35:31'),(4,1,0,'memo','Internal Notes','notes','{\"cols\":\"40\",\"rows\":\"4\",\"length\":\"\",\"html\":true,\"placeholder\":\"\"}',4,NULL,'2018-05-16 12:16:03','2018-06-27 12:35:41'),(20,2,0,'text','Issue Summary','subject','{\"size\":40,\"length\":50}',1,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(21,2,0,'thread','Issue Details','message',NULL,2,'Details on the reason(s) for opening the ticket.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(22,2,0,'priority','Priority Level','priority',NULL,3,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(23,3,0,'text','Company Name','name','{\"size\":40,\"length\":64}',1,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(24,3,0,'text','Website','website','{\"size\":40,\"length\":64}',2,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(25,3,0,'phone','Phone Number','phone','{\"ext\":false}',3,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(26,3,0,'memo','Address','address','{\"rows\":2,\"cols\":40,\"html\":false,\"length\":100}',4,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(27,4,0,'text','Name','name','{\"size\":40,\"length\":64}',1,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(28,4,0,'memo','Address','address','{\"rows\":2,\"cols\":40,\"length\":100,\"html\":false}',2,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(29,4,0,'phone','Phone','phone',NULL,3,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(30,4,0,'text','Website','website','{\"size\":40,\"length\":0}',4,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(31,4,0,'memo','Internal Notes','notes','{\"rows\":4,\"cols\":40}',5,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(32,5,0,'text','Title','title','{\"size\":40,\"length\":50}',1,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(33,5,0,'thread','Description','description',NULL,2,'Details on the reason(s) for creating the task.','2018-05-16 12:16:03','2018-05-16 12:16:03'),(34,6,0,'state','State','state','{\"prompt\":\"State of a ticket\"}',1,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03'),(35,6,0,'memo','Description','description','{\"rows\":2,\"cols\":40,\"html\":false,\"length\":100}',3,NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_form_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_group`
--

DROP TABLE IF EXISTS `ost_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) unsigned NOT NULL,
  `flags` int(11) unsigned NOT NULL DEFAULT '1',
  `name` varchar(120) NOT NULL DEFAULT '',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_group`
--

LOCK TABLES `ost_group` WRITE;
/*!40000 ALTER TABLE `ost_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_help_topic`
--

DROP TABLE IF EXISTS `ost_help_topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_help_topic` (
  `topic_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `topic_pid` int(10) unsigned NOT NULL DEFAULT '0',
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ispublic` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `noautoresp` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `flags` int(10) unsigned DEFAULT '0',
  `status_id` int(10) unsigned NOT NULL DEFAULT '0',
  `priority_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(10) unsigned NOT NULL DEFAULT '0',
  `team_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sla_id` int(10) unsigned NOT NULL DEFAULT '0',
  `page_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sequence_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `topic` varchar(32) NOT NULL DEFAULT '',
  `number_format` varchar(32) DEFAULT NULL,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`topic_id`),
  UNIQUE KEY `topic` (`topic`,`topic_pid`),
  KEY `topic_pid` (`topic_pid`),
  KEY `priority_id` (`priority_id`),
  KEY `dept_id` (`dept_id`),
  KEY `staff_id` (`staff_id`,`team_id`),
  KEY `sla_id` (`sla_id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_help_topic`
--

LOCK TABLES `ost_help_topic` WRITE;
/*!40000 ALTER TABLE `ost_help_topic` DISABLE KEYS */;
INSERT INTO `ost_help_topic` VALUES (1,0,1,1,0,0,0,2,0,0,0,0,0,0,1,'General Inquiry',NULL,'Questions about products or services','2018-05-16 12:16:03','2018-05-16 12:16:03'),(2,0,1,1,0,0,0,1,0,0,0,0,0,0,0,'Feedback',NULL,'Tickets that primarily concern the sales and billing departments','2018-05-16 12:16:03','2018-05-16 12:16:03'),(10,0,1,1,0,0,0,2,3,0,0,0,0,0,0,'Report a Problem',NULL,'Product, service, or equipment related issues','2018-05-16 12:16:03','2018-05-16 12:16:03'),(11,10,1,1,0,0,0,3,0,0,0,1,0,0,1,'Access Issue',NULL,'Report an inability access a physical or virtual asset','2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_help_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_help_topic_form`
--

DROP TABLE IF EXISTS `ost_help_topic_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_help_topic_form` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) unsigned NOT NULL DEFAULT '0',
  `form_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '1',
  `extra` text,
  PRIMARY KEY (`id`),
  KEY `topic-form` (`topic_id`,`form_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_help_topic_form`
--

LOCK TABLES `ost_help_topic_form` WRITE;
/*!40000 ALTER TABLE `ost_help_topic_form` DISABLE KEYS */;
INSERT INTO `ost_help_topic_form` VALUES (1,1,2,1,'{\"disable\":[]}'),(2,2,2,1,'{\"disable\":[]}'),(3,10,2,1,'{\"disable\":[]}'),(4,11,2,1,'{\"disable\":[]}');
/*!40000 ALTER TABLE `ost_help_topic_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_list`
--

DROP TABLE IF EXISTS `ost_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_list` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_plural` varchar(255) DEFAULT NULL,
  `sort_mode` enum('Alpha','-Alpha','SortCol') NOT NULL DEFAULT 'Alpha',
  `masks` int(11) unsigned NOT NULL DEFAULT '0',
  `type` varchar(16) DEFAULT NULL,
  `configuration` text NOT NULL,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_list`
--

LOCK TABLES `ost_list` WRITE;
/*!40000 ALTER TABLE `ost_list` DISABLE KEYS */;
INSERT INTO `ost_list` VALUES (1,'Ticket Status','Ticket Statuses','SortCol',13,'ticket-status','{\"handler\":\"TicketStatusList\"}','Ticket statuses','2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_list_items`
--

DROP TABLE IF EXISTS `ost_list_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_list_items` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `list_id` int(11) DEFAULT NULL,
  `status` int(11) unsigned NOT NULL DEFAULT '1',
  `value` varchar(255) NOT NULL,
  `extra` varchar(255) DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT '1',
  `properties` text,
  PRIMARY KEY (`id`),
  KEY `list_item_lookup` (`list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_list_items`
--

LOCK TABLES `ost_list_items` WRITE;
/*!40000 ALTER TABLE `ost_list_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_list_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_lock`
--

DROP TABLE IF EXISTS `ost_lock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_lock` (
  `lock_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` int(10) unsigned NOT NULL DEFAULT '0',
  `expire` datetime DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`lock_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_lock`
--

LOCK TABLES `ost_lock` WRITE;
/*!40000 ALTER TABLE `ost_lock` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_lock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_note`
--

DROP TABLE IF EXISTS `ost_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_note` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned DEFAULT NULL,
  `staff_id` int(11) unsigned NOT NULL DEFAULT '0',
  `ext_id` varchar(10) DEFAULT NULL,
  `body` text,
  `status` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ext_id` (`ext_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_note`
--

LOCK TABLES `ost_note` WRITE;
/*!40000 ALTER TABLE `ost_note` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_organization`
--

DROP TABLE IF EXISTS `ost_organization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_organization` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL DEFAULT '',
  `manager` varchar(16) NOT NULL DEFAULT '',
  `status` int(11) unsigned NOT NULL DEFAULT '0',
  `domain` varchar(256) NOT NULL DEFAULT '',
  `extra` text,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_organization`
--

LOCK TABLES `ost_organization` WRITE;
/*!40000 ALTER TABLE `ost_organization` DISABLE KEYS */;
INSERT INTO `ost_organization` VALUES (1,'osTicket','',8,'',NULL,'2018-05-16 12:16:03',NULL);
/*!40000 ALTER TABLE `ost_organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_plugin`
--

DROP TABLE IF EXISTS `ost_plugin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_plugin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `install_path` varchar(60) NOT NULL,
  `isphar` tinyint(1) NOT NULL DEFAULT '0',
  `isactive` tinyint(1) NOT NULL DEFAULT '0',
  `version` varchar(64) DEFAULT NULL,
  `installed` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_plugin`
--

LOCK TABLES `ost_plugin` WRITE;
/*!40000 ALTER TABLE `ost_plugin` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_plugin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_queue`
--

DROP TABLE IF EXISTS `ost_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_queue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `flags` int(11) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(60) DEFAULT NULL,
  `config` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_queue`
--

LOCK TABLES `ost_queue` WRITE;
/*!40000 ALTER TABLE `ost_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_role`
--

DROP TABLE IF EXISTS `ost_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `flags` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(64) DEFAULT NULL,
  `permissions` text,
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_role`
--

LOCK TABLES `ost_role` WRITE;
/*!40000 ALTER TABLE `ost_role` DISABLE KEYS */;
INSERT INTO `ost_role` VALUES (1,1,'All Access','{\"ticket.create\":1,\"ticket.edit\":1,\"ticket.assign\":1,\"ticket.transfer\":1,\"ticket.reply\":1,\"ticket.close\":1,\"ticket.delete\":1,\"thread.edit\":1,\"task.create\":1,\"task.edit\":1,\"task.assign\":1,\"task.transfer\":1,\"task.reply\":1,\"task.close\":1,\"task.delete\":1,\"canned.manage\":1}','Role with unlimited access','2018-05-16 12:16:03','2018-05-16 12:16:03'),(2,1,'Expanded Access','{\"ticket.create\":1,\"ticket.edit\":1,\"ticket.assign\":1,\"ticket.transfer\":1,\"ticket.reply\":1,\"ticket.close\":1,\"task.create\":1,\"task.edit\":1,\"task.assign\":1,\"task.transfer\":1,\"task.reply\":1,\"task.close\":1,\"canned.manage\":1}','Role with expanded access','2018-05-16 12:16:03','2018-05-16 12:16:03'),(3,1,'Limited Access','{\"ticket.create\":1,\"ticket.assign\":1,\"ticket.transfer\":1,\"task.assign\":1,\"task.transfer\":1,\"task.reply\":1}','Role with limited access','2018-05-16 12:16:03','2018-05-16 12:16:03'),(4,1,'View only',NULL,'Simple role with no permissions','2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_sequence`
--

DROP TABLE IF EXISTS `ost_sequence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_sequence` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `flags` int(10) unsigned DEFAULT NULL,
  `next` bigint(20) unsigned NOT NULL DEFAULT '1',
  `increment` int(11) DEFAULT '1',
  `padding` char(1) DEFAULT '0',
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_sequence`
--

LOCK TABLES `ost_sequence` WRITE;
/*!40000 ALTER TABLE `ost_sequence` DISABLE KEYS */;
INSERT INTO `ost_sequence` VALUES (1,'General Tickets',1,1,1,'0','0000-00-00 00:00:00'),(2,'Tasks Sequence',1,1,1,'0','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ost_sequence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_session`
--

DROP TABLE IF EXISTS `ost_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_session` (
  `session_id` varchar(255) CHARACTER SET ascii NOT NULL DEFAULT '',
  `session_data` blob,
  `session_expire` datetime DEFAULT NULL,
  `session_updated` datetime DEFAULT NULL,
  `user_id` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'osTicket staff/client ID',
  `user_ip` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `updated` (`session_updated`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_session`
--

LOCK TABLES `ost_session` WRITE;
/*!40000 ALTER TABLE `ost_session` DISABLE KEYS */;
INSERT INTO `ost_session` VALUES ('10tkps3dfvs83767geepmc8ja6','csrf|a:2:{s:5:\"token\";s:40:\"54a1f8591cf3f0698e3e6b20c528f4528d9c98c4\";s:4:\"time\";i:1526474129;}_auth|a:1:{s:4:\"user\";N;}','2018-05-17 12:35:29',NULL,'0','162.158.167.208','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:61.0) Gecko/20100101 Firefox/61.0'),('2p42raprr2itlv8cgudp40cnv7','csrf|a:2:{s:5:\"token\";s:40:\"01622bfbfdb19b41be03840d9de3c51c4ec52c7e\";s:4:\"time\";i:1528899772;}','2018-06-14 14:22:52',NULL,'0','172.68.146.30','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36'),('3s7ts1mk8k0vn1nrjkrdoio7k2','csrf|a:2:{s:5:\"token\";s:40:\"116eec969249fd936a657b9da169445a662f2bea\";s:4:\"time\";i:1528899782;}_auth|a:1:{s:4:\"user\";N;}','2018-06-14 14:23:02',NULL,'0','162.158.165.158','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.79 Safari/537.36'),('42gaqstf0pt4fp4it33r1p7di1','csrf|a:2:{s:5:\"token\";s:40:\"0ed1ba14c47674494c28a490dddd3f2512c38a6c\";s:4:\"time\";i:1529586752;}','2018-06-22 13:12:32',NULL,'0','172.31.79.158','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0'),('4g9bugaiqetrpve3s8ej6n7np7','csrf|a:2:{s:5:\"token\";s:40:\"af29211d843e9432590fb18d0f5d0c4d1358625e\";s:4:\"time\";i:1529652530;}','2018-06-23 07:28:50',NULL,'0','172.31.79.158','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36'),('4jmb48d3luddg6upfnb8asmvu5','csrf|a:2:{s:5:\"token\";s:40:\"de4b6d666ac392c5a27c1e34d8ee4ad84fcfef68\";s:4:\"time\";i:1529652963;}','2018-06-23 07:36:03',NULL,'0','172.31.79.158','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0'),('54h09qda0v7qudjc59vvllabq6','csrf|a:2:{s:5:\"token\";s:40:\"c405fcc15a0b1af96eaf11dc25e66e692c46e6d5\";s:4:\"time\";i:1530102735;}_auth|a:1:{s:5:\"staff\";a:2:{s:2:\"id\";i:1;s:3:\"key\";s:11:\"local:itumm\";}}:token|a:1:{s:5:\"staff\";s:76:\"d3869e10a0074e8418e78763bd4f0339:1530102734:b2650aad1fd0ef053a35ac8da7298884\";}::Q:T|s:0:\"\";:QT:open:sort|a:2:{i:0;s:16:\"priority,updated\";i:1;i:0;}:Q:tickets|C:8:\"QuerySet\":4895:{a:16:{s:5:\"model\";s:11:\"TicketModel\";s:11:\"constraints\";a:1:{i:0;C:1:\"Q\":1009:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:13:\"ticket_id__in\";C:8:\"QuerySet\":935:{a:16:{s:5:\"model\";s:11:\"TicketModel\";s:11:\"constraints\";a:3:{i:0;C:1:\"Q\":54:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:10:\"isanswered\";i:0;}}}i:1;C:1:\"Q\":64:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:13:\"status__state\";s:4:\"open\";}}}i:2;C:1:\"Q\":269:{a:3:{i:0;i:0;i:1;i:2;i:2;a:1:{i:0;C:1:\"Q\":219:{a:3:{i:0;i:0;i:1;i:2;i:2;a:2:{i:0;C:1:\"Q\":132:{a:3:{i:0;i:0;i:1;i:0;i:2;a:2:{s:13:\"status__state\";s:4:\"open\";i:0;C:1:\"Q\":51:{a:3:{i:0;i:0;i:1;i:2;i:2;a:1:{s:8:\"staff_id\";i:1;}}}}}}s:11:\"dept_id__in\";a:1:{i:0;s:1:\"1\";}}}}}}}}s:16:\"path_constraints\";a:0:{}s:8:\"ordering\";a:2:{i:0;a:2:{i:0;s:34:\"cdata__:priority__priority_urgency\";i:1;s:3:\"ASC\";}i:1;a:2:{i:0;s:10:\"lastupdate\";i:1;s:4:\"DESC\";}}s:7:\"related\";b:0;s:6:\"values\";a:1:{i:0;s:9:\"ticket_id\";}s:5:\"defer\";a:0:{}s:10:\"aggregated\";b:0;s:11:\"annotations\";a:0:{}s:5:\"extra\";a:0:{}s:8:\"distinct\";a:0:{}s:4:\"lock\";b:0;s:5:\"chain\";a:0:{}s:7:\"options\";a:0:{}s:4:\"iter\";i:3;s:8:\"compiler\";s:13:\"MySqlCompiler\";}}}}}}s:16:\"path_constraints\";a:1:{s:4:\"lock\";a:1:{i:0;C:1:\"Q\":131:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:16:\"lock__expire__gt\";O:11:\"SqlFunction\":3:{s:5:\"alias\";N;s:4:\"func\";s:3:\"NOW\";s:4:\"args\";a:0:{}}}}}}}s:8:\"ordering\";a:2:{i:0;a:2:{i:0;s:34:\"cdata__:priority__priority_urgency\";i:1;s:3:\"ASC\";}i:1;a:2:{i:0;s:10:\"lastupdate\";i:1;s:4:\"DESC\";}}s:7:\"related\";b:0;s:6:\"values\";a:22:{s:14:\"lock__staff_id\";s:14:\"lock__staff_id\";s:8:\"staff_id\";s:8:\"staff_id\";s:9:\"isoverdue\";s:9:\"isoverdue\";s:7:\"team_id\";s:7:\"team_id\";s:9:\"ticket_id\";s:9:\"ticket_id\";s:6:\"number\";s:6:\"number\";s:14:\"cdata__subject\";s:14:\"cdata__subject\";s:28:\"user__default_email__address\";s:28:\"user__default_email__address\";s:6:\"source\";s:6:\"source\";s:32:\"cdata__:priority__priority_color\";s:32:\"cdata__:priority__priority_color\";s:31:\"cdata__:priority__priority_desc\";s:31:\"cdata__:priority__priority_desc\";s:9:\"status_id\";s:9:\"status_id\";s:12:\"status__name\";s:12:\"status__name\";s:13:\"status__state\";s:13:\"status__state\";s:7:\"dept_id\";s:7:\"dept_id\";s:10:\"dept__name\";s:10:\"dept__name\";s:10:\"user__name\";s:10:\"user__name\";s:10:\"lastupdate\";s:10:\"lastupdate\";s:10:\"isanswered\";s:10:\"isanswered\";s:16:\"staff__firstname\";s:16:\"staff__firstname\";s:15:\"staff__lastname\";s:15:\"staff__lastname\";s:10:\"team__name\";s:10:\"team__name\";}s:5:\"defer\";a:0:{}s:10:\"aggregated\";b:0;s:11:\"annotations\";a:3:{s:12:\"collab_count\";C:8:\"QuerySet\":672:{a:16:{s:5:\"model\";s:12:\"TicketThread\";s:11:\"constraints\";a:1:{i:0;C:1:\"Q\":134:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:17:\"ticket__ticket_id\";O:8:\"SqlField\":3:{s:5:\"level\";i:1;s:5:\"alias\";N;s:5:\"field\";s:9:\"ticket_id\";}}}}}s:16:\"path_constraints\";a:0:{}s:8:\"ordering\";a:0:{}s:7:\"related\";b:0;s:6:\"values\";a:0:{}s:5:\"defer\";a:0:{}s:10:\"aggregated\";b:1;s:11:\"annotations\";a:1:{s:5:\"count\";O:12:\"SqlAggregate\":5:{s:4:\"func\";s:5:\"COUNT\";s:4:\"expr\";s:17:\"collaborators__id\";s:8:\"distinct\";b:0;s:10:\"constraint\";b:0;s:5:\"alias\";s:5:\"count\";}}s:5:\"extra\";a:0:{}s:8:\"distinct\";a:0:{}s:4:\"lock\";b:0;s:5:\"chain\";a:0:{}s:7:\"options\";a:0:{}s:4:\"iter\";i:2;s:8:\"compiler\";s:13:\"MySqlCompiler\";}}s:16:\"attachment_count\";C:8:\"QuerySet\":768:{a:16:{s:5:\"model\";s:12:\"TicketThread\";s:11:\"constraints\";a:2:{i:0;C:1:\"Q\":134:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:17:\"ticket__ticket_id\";O:8:\"SqlField\":3:{s:5:\"level\";i:1;s:5:\"alias\";N;s:5:\"field\";s:9:\"ticket_id\";}}}}i:1;C:1:\"Q\":72:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:28:\"entries__attachments__inline\";i:0;}}}}s:16:\"path_constraints\";a:0:{}s:8:\"ordering\";a:0:{}s:7:\"related\";b:0;s:6:\"values\";a:0:{}s:5:\"defer\";a:0:{}s:10:\"aggregated\";b:1;s:11:\"annotations\";a:1:{s:5:\"count\";O:12:\"SqlAggregate\":5:{s:4:\"func\";s:5:\"COUNT\";s:4:\"expr\";s:24:\"entries__attachments__id\";s:8:\"distinct\";b:0;s:10:\"constraint\";b:0;s:5:\"alias\";s:5:\"count\";}}s:5:\"extra\";a:0:{}s:8:\"distinct\";a:0:{}s:4:\"lock\";b:0;s:5:\"chain\";a:0:{}s:7:\"options\";a:0:{}s:4:\"iter\";i:2;s:8:\"compiler\";s:13:\"MySqlCompiler\";}}s:12:\"thread_count\";C:8:\"QuerySet\":749:{a:16:{s:5:\"model\";s:12:\"TicketThread\";s:11:\"constraints\";a:2:{i:0;C:1:\"Q\":134:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:17:\"ticket__ticket_id\";O:8:\"SqlField\":3:{s:5:\"level\";i:1;s:5:\"alias\";N;s:5:\"field\";s:9:\"ticket_id\";}}}}i:1;C:1:\"Q\":66:{a:3:{i:0;i:1;i:1;i:0;i:2;a:1:{s:22:\"entries__flags__hasbit\";i:4;}}}}s:16:\"path_constraints\";a:0:{}s:8:\"ordering\";a:0:{}s:7:\"related\";b:0;s:6:\"values\";a:0:{}s:5:\"defer\";a:0:{}s:10:\"aggregated\";b:1;s:11:\"annotations\";a:1:{s:5:\"count\";O:12:\"SqlAggregate\":5:{s:4:\"func\";s:5:\"COUNT\";s:4:\"expr\";s:11:\"entries__id\";s:8:\"distinct\";b:0;s:10:\"constraint\";b:0;s:5:\"alias\";s:5:\"count\";}}s:5:\"extra\";a:0:{}s:8:\"distinct\";a:0:{}s:4:\"lock\";b:0;s:5:\"chain\";a:0:{}s:7:\"options\";a:0:{}s:4:\"iter\";i:2;s:8:\"compiler\";s:13:\"MySqlCompiler\";}}}s:5:\"extra\";a:0:{}s:8:\"distinct\";a:0:{}s:4:\"lock\";b:0;s:5:\"chain\";a:0:{}s:7:\"options\";a:0:{}s:4:\"iter\";i:2;s:8:\"compiler\";s:13:\"MySqlCompiler\";}}cfg:core|a:1:{s:11:\"db_timezone\";s:3:\"UTC\";}lastcroncall|i:1530102680;','2018-06-28 12:32:15',NULL,'1','172.31.23.115','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36'),('6cg7epec74qeq5c7j5qpk78lg4','csrf|a:2:{s:5:\"token\";s:40:\"5090ff3fc6b3b7198e66af22f1c0e7ffb914e25b\";s:4:\"time\";i:1526472976;}','2018-05-17 12:16:16',NULL,'0','172.68.144.41','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0'),('7aa37i2pltmg9b7r6jl3ckd6b4','csrf|a:2:{s:5:\"token\";s:40:\"757545be181d8bf6bf63e97bef2bee4fef38ffd2\";s:4:\"time\";i:1526636868;}_auth|a:1:{s:4:\"user\";a:1:{s:7:\"strikes\";i:1;}}','2018-05-19 09:47:48',NULL,'0','162.158.167.208','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36'),('8im0bnpn2o94i4v31bgs068544','csrf|a:2:{s:5:\"token\";s:40:\"0495c5d34118f3c9c1fd2b4dde10eb04ff0142b0\";s:4:\"time\";i:1527834884;}','2018-06-02 06:34:44',NULL,'0','172.31.69.139','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0'),('97pb1hj5tfsmjgosh0ajkggut5','csrf|a:2:{s:5:\"token\";s:40:\"31935325aebdf01641b0bc271feed9da96f494e2\";s:4:\"time\";i:1529586764;}','2018-06-22 13:12:44',NULL,'0','172.31.23.115','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0'),('ak19hb08nbe41rgoc2f5pq58q4','csrf|a:2:{s:5:\"token\";s:40:\"e286080f9fc0aaf9992a0d0fcbbdbdda740c3dce\";s:4:\"time\";i:1529679270;}','2018-06-23 14:54:30',NULL,'0','172.31.23.115','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36'),('d0l9c6khjv27n0u9jkbhplh356','csrf|a:2:{s:5:\"token\";s:40:\"ecdcb7a404ebbd01bb8daa395be708b7c2201452\";s:4:\"time\";i:1526550112;}','2018-05-18 09:41:52',NULL,'0','172.31.73.12','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0'),('dhbebntv8vbk3e1ts9rbvfnel7','csrf|a:2:{s:5:\"token\";s:40:\"9369fa636e376ba31904468fcbc4ac9e7b4281ee\";s:4:\"time\";i:1526473012;}','2018-05-17 12:16:52',NULL,'0','162.158.167.226','Mozilla/5.0 (Windows NT 6.1; WOW64) SkypeUriPreview Preview/0.5'),('f4vro8sm89edrbkks9gm9knse2','csrf|a:2:{s:5:\"token\";s:40:\"e5237921049c5387af21fd1c69ba20692cf5cab4\";s:4:\"time\";i:1528899779;}','2018-06-14 14:22:59',NULL,'0','172.68.146.30','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0'),('h49tiorhpcrce45fb1nf0b7go7','csrf|a:2:{s:5:\"token\";s:40:\"ea4807f5199061470f222acbe00d7673f7387617\";s:4:\"time\";i:1529587081;}','2018-06-22 13:18:01',NULL,'0','172.31.23.115','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) HeadlessChrome/67.0.3372.0 Safari/537.36'),('i3ronvlo05qf9lmpbi2tgk5ck2','csrf|a:2:{s:5:\"token\";s:40:\"dbc56399cfef36cc7663ef495f1f2a719c6ffbc0\";s:4:\"time\";i:1529762284;}','2018-06-24 13:58:04',NULL,'0','172.31.79.158','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0'),('igfu7g0o8q5dnu4oumgeuds595','csrf|a:2:{s:5:\"token\";s:40:\"5a150eaeb7fa1f31252202efa59e0eaf14a65b7d\";s:4:\"time\";i:1529647899;}','2018-06-23 06:11:39',NULL,'0','172.31.23.115','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0'),('jqlhbp6qi910oh74oojuum1je0','csrf|a:2:{s:5:\"token\";s:40:\"6cc1284affe017970f34f288afd90712ffc5e8b8\";s:4:\"time\";i:1526473076;}','2018-05-17 12:17:57',NULL,'0','172.68.253.231','Mozilla/5.0 (Windows NT 6.1; WOW64) SkypeUriPreview Preview/0.5'),('mvequjajmok2etadhvlu5h3131','csrf|a:2:{s:5:\"token\";s:40:\"a8fd669dc7cde8aedb1aa5b50e11df7d56aaa3ea\";s:4:\"time\";i:1529680458;}','2018-06-23 15:14:18',NULL,'0','172.31.23.115','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:61.0) Gecko/20100101 Firefox/61.0'),('n55vug925sddq189i9r4ka2gn0','csrf|a:2:{s:5:\"token\";s:40:\"08713efceb86a804923c46f8aa759cfaef403323\";s:4:\"time\";i:1529304016;}','2018-06-19 06:40:17',NULL,'0','172.68.146.30','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36'),('penh8k1m5eifs7og1o5j6vu3m4','csrf|a:2:{s:5:\"token\";s:40:\"c9155995d7205f80fc4c67a37beb204e9eb192a4\";s:4:\"time\";i:1530102958;}_auth|a:2:{s:4:\"user\";N;s:5:\"staff\";a:2:{s:2:\"id\";i:1;s:3:\"key\";s:11:\"local:itumm\";}}_staff|a:1:{s:4:\"auth\";a:2:{s:4:\"dest\";s:13:\"/support/scp/\";s:3:\"msg\";s:23:\"Authentication Required\";}}:token|a:1:{s:5:\"staff\";s:76:\"737b965e8ba1710e09faaaa46887201c:1530102931:55e132190c7f887700864af4d58074a5\";}::Q:T|s:0:\"\";:QT:open:sort|a:2:{i:0;s:16:\"priority,updated\";i:1;i:0;}:Q:tickets|C:8:\"QuerySet\":4895:{a:16:{s:5:\"model\";s:11:\"TicketModel\";s:11:\"constraints\";a:1:{i:0;C:1:\"Q\":1009:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:13:\"ticket_id__in\";C:8:\"QuerySet\":935:{a:16:{s:5:\"model\";s:11:\"TicketModel\";s:11:\"constraints\";a:3:{i:0;C:1:\"Q\":54:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:10:\"isanswered\";i:0;}}}i:1;C:1:\"Q\":64:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:13:\"status__state\";s:4:\"open\";}}}i:2;C:1:\"Q\":269:{a:3:{i:0;i:0;i:1;i:2;i:2;a:1:{i:0;C:1:\"Q\":219:{a:3:{i:0;i:0;i:1;i:2;i:2;a:2:{i:0;C:1:\"Q\":132:{a:3:{i:0;i:0;i:1;i:0;i:2;a:2:{s:13:\"status__state\";s:4:\"open\";i:0;C:1:\"Q\":51:{a:3:{i:0;i:0;i:1;i:2;i:2;a:1:{s:8:\"staff_id\";i:1;}}}}}}s:11:\"dept_id__in\";a:1:{i:0;s:1:\"1\";}}}}}}}}s:16:\"path_constraints\";a:0:{}s:8:\"ordering\";a:2:{i:0;a:2:{i:0;s:34:\"cdata__:priority__priority_urgency\";i:1;s:3:\"ASC\";}i:1;a:2:{i:0;s:10:\"lastupdate\";i:1;s:4:\"DESC\";}}s:7:\"related\";b:0;s:6:\"values\";a:1:{i:0;s:9:\"ticket_id\";}s:5:\"defer\";a:0:{}s:10:\"aggregated\";b:0;s:11:\"annotations\";a:0:{}s:5:\"extra\";a:0:{}s:8:\"distinct\";a:0:{}s:4:\"lock\";b:0;s:5:\"chain\";a:0:{}s:7:\"options\";a:0:{}s:4:\"iter\";i:3;s:8:\"compiler\";s:13:\"MySqlCompiler\";}}}}}}s:16:\"path_constraints\";a:1:{s:4:\"lock\";a:1:{i:0;C:1:\"Q\":131:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:16:\"lock__expire__gt\";O:11:\"SqlFunction\":3:{s:5:\"alias\";N;s:4:\"func\";s:3:\"NOW\";s:4:\"args\";a:0:{}}}}}}}s:8:\"ordering\";a:2:{i:0;a:2:{i:0;s:34:\"cdata__:priority__priority_urgency\";i:1;s:3:\"ASC\";}i:1;a:2:{i:0;s:10:\"lastupdate\";i:1;s:4:\"DESC\";}}s:7:\"related\";b:0;s:6:\"values\";a:22:{s:14:\"lock__staff_id\";s:14:\"lock__staff_id\";s:8:\"staff_id\";s:8:\"staff_id\";s:9:\"isoverdue\";s:9:\"isoverdue\";s:7:\"team_id\";s:7:\"team_id\";s:9:\"ticket_id\";s:9:\"ticket_id\";s:6:\"number\";s:6:\"number\";s:14:\"cdata__subject\";s:14:\"cdata__subject\";s:28:\"user__default_email__address\";s:28:\"user__default_email__address\";s:6:\"source\";s:6:\"source\";s:32:\"cdata__:priority__priority_color\";s:32:\"cdata__:priority__priority_color\";s:31:\"cdata__:priority__priority_desc\";s:31:\"cdata__:priority__priority_desc\";s:9:\"status_id\";s:9:\"status_id\";s:12:\"status__name\";s:12:\"status__name\";s:13:\"status__state\";s:13:\"status__state\";s:7:\"dept_id\";s:7:\"dept_id\";s:10:\"dept__name\";s:10:\"dept__name\";s:10:\"user__name\";s:10:\"user__name\";s:10:\"lastupdate\";s:10:\"lastupdate\";s:10:\"isanswered\";s:10:\"isanswered\";s:16:\"staff__firstname\";s:16:\"staff__firstname\";s:15:\"staff__lastname\";s:15:\"staff__lastname\";s:10:\"team__name\";s:10:\"team__name\";}s:5:\"defer\";a:0:{}s:10:\"aggregated\";b:0;s:11:\"annotations\";a:3:{s:12:\"collab_count\";C:8:\"QuerySet\":672:{a:16:{s:5:\"model\";s:12:\"TicketThread\";s:11:\"constraints\";a:1:{i:0;C:1:\"Q\":134:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:17:\"ticket__ticket_id\";O:8:\"SqlField\":3:{s:5:\"level\";i:1;s:5:\"alias\";N;s:5:\"field\";s:9:\"ticket_id\";}}}}}s:16:\"path_constraints\";a:0:{}s:8:\"ordering\";a:0:{}s:7:\"related\";b:0;s:6:\"values\";a:0:{}s:5:\"defer\";a:0:{}s:10:\"aggregated\";b:1;s:11:\"annotations\";a:1:{s:5:\"count\";O:12:\"SqlAggregate\":5:{s:4:\"func\";s:5:\"COUNT\";s:4:\"expr\";s:17:\"collaborators__id\";s:8:\"distinct\";b:0;s:10:\"constraint\";b:0;s:5:\"alias\";s:5:\"count\";}}s:5:\"extra\";a:0:{}s:8:\"distinct\";a:0:{}s:4:\"lock\";b:0;s:5:\"chain\";a:0:{}s:7:\"options\";a:0:{}s:4:\"iter\";i:2;s:8:\"compiler\";s:13:\"MySqlCompiler\";}}s:16:\"attachment_count\";C:8:\"QuerySet\":768:{a:16:{s:5:\"model\";s:12:\"TicketThread\";s:11:\"constraints\";a:2:{i:0;C:1:\"Q\":134:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:17:\"ticket__ticket_id\";O:8:\"SqlField\":3:{s:5:\"level\";i:1;s:5:\"alias\";N;s:5:\"field\";s:9:\"ticket_id\";}}}}i:1;C:1:\"Q\":72:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:28:\"entries__attachments__inline\";i:0;}}}}s:16:\"path_constraints\";a:0:{}s:8:\"ordering\";a:0:{}s:7:\"related\";b:0;s:6:\"values\";a:0:{}s:5:\"defer\";a:0:{}s:10:\"aggregated\";b:1;s:11:\"annotations\";a:1:{s:5:\"count\";O:12:\"SqlAggregate\":5:{s:4:\"func\";s:5:\"COUNT\";s:4:\"expr\";s:24:\"entries__attachments__id\";s:8:\"distinct\";b:0;s:10:\"constraint\";b:0;s:5:\"alias\";s:5:\"count\";}}s:5:\"extra\";a:0:{}s:8:\"distinct\";a:0:{}s:4:\"lock\";b:0;s:5:\"chain\";a:0:{}s:7:\"options\";a:0:{}s:4:\"iter\";i:2;s:8:\"compiler\";s:13:\"MySqlCompiler\";}}s:12:\"thread_count\";C:8:\"QuerySet\":749:{a:16:{s:5:\"model\";s:12:\"TicketThread\";s:11:\"constraints\";a:2:{i:0;C:1:\"Q\":134:{a:3:{i:0;i:0;i:1;i:0;i:2;a:1:{s:17:\"ticket__ticket_id\";O:8:\"SqlField\":3:{s:5:\"level\";i:1;s:5:\"alias\";N;s:5:\"field\";s:9:\"ticket_id\";}}}}i:1;C:1:\"Q\":66:{a:3:{i:0;i:1;i:1;i:0;i:2;a:1:{s:22:\"entries__flags__hasbit\";i:4;}}}}s:16:\"path_constraints\";a:0:{}s:8:\"ordering\";a:0:{}s:7:\"related\";b:0;s:6:\"values\";a:0:{}s:5:\"defer\";a:0:{}s:10:\"aggregated\";b:1;s:11:\"annotations\";a:1:{s:5:\"count\";O:12:\"SqlAggregate\":5:{s:4:\"func\";s:5:\"COUNT\";s:4:\"expr\";s:11:\"entries__id\";s:8:\"distinct\";b:0;s:10:\"constraint\";b:0;s:5:\"alias\";s:5:\"count\";}}s:5:\"extra\";a:0:{}s:8:\"distinct\";a:0:{}s:4:\"lock\";b:0;s:5:\"chain\";a:0:{}s:7:\"options\";a:0:{}s:4:\"iter\";i:2;s:8:\"compiler\";s:13:\"MySqlCompiler\";}}}s:5:\"extra\";a:0:{}s:8:\"distinct\";a:0:{}s:4:\"lock\";b:0;s:5:\"chain\";a:0:{}s:7:\"options\";a:0:{}s:4:\"iter\";i:2;s:8:\"compiler\";s:13:\"MySqlCompiler\";}}cfg:core|a:1:{s:11:\"db_timezone\";s:3:\"UTC\";}lastcroncall|i:1530102916;','2018-06-28 12:35:58',NULL,'0','172.31.79.158','Mozilla/5.0 (Windows NT 10.0; WOW64; rv:62.0) Gecko/20100101 Firefox/62.0'),('puuldcro79a01b14bjk5totvj6','csrf|a:2:{s:5:\"token\";s:40:\"d2ca428d790feaf5a7d0eebcca751eccf0dfb263\";s:4:\"time\";i:1530103711;}_auth|a:1:{s:5:\"staff\";N;}','2018-06-28 12:48:31',NULL,'0','172.31.79.158','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:60.0) Gecko/20100101 Firefox/60.0');
/*!40000 ALTER TABLE `ost_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_sla`
--

DROP TABLE IF EXISTS `ost_sla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_sla` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `flags` int(10) unsigned NOT NULL DEFAULT '3',
  `grace_period` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(64) NOT NULL DEFAULT '',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_sla`
--

LOCK TABLES `ost_sla` WRITE;
/*!40000 ALTER TABLE `ost_sla` DISABLE KEYS */;
INSERT INTO `ost_sla` VALUES (1,3,48,'Default SLA',NULL,'2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_sla` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_staff`
--

DROP TABLE IF EXISTS `ost_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_staff` (
  `staff_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `role_id` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(32) NOT NULL DEFAULT '',
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `passwd` varchar(128) DEFAULT NULL,
  `backend` varchar(32) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(24) NOT NULL DEFAULT '',
  `phone_ext` varchar(6) DEFAULT NULL,
  `mobile` varchar(24) NOT NULL DEFAULT '',
  `signature` text NOT NULL,
  `lang` varchar(16) DEFAULT NULL,
  `timezone` varchar(64) DEFAULT NULL,
  `locale` varchar(16) DEFAULT NULL,
  `notes` text,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `isvisible` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `onvacation` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `assigned_only` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `show_assigned_tickets` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `change_passwd` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `max_page_size` int(11) unsigned NOT NULL DEFAULT '0',
  `auto_refresh_rate` int(10) unsigned NOT NULL DEFAULT '0',
  `default_signature_type` enum('none','mine','dept') NOT NULL DEFAULT 'none',
  `default_paper_size` enum('Letter','Legal','Ledger','A4','A3') NOT NULL DEFAULT 'Letter',
  `extra` text,
  `permissions` text,
  `created` datetime NOT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `passwdreset` datetime DEFAULT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`staff_id`),
  UNIQUE KEY `username` (`username`),
  KEY `dept_id` (`dept_id`),
  KEY `issuperuser` (`isadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_staff`
--

LOCK TABLES `ost_staff` WRITE;
/*!40000 ALTER TABLE `ost_staff` DISABLE KEYS */;
INSERT INTO `ost_staff` VALUES (1,1,1,'itumm','itumm','india','$2a$08$PNn9q7dIaHh7i6qeO6NGWOvT0CnCygxRFTSs4JNOoEf4EwesVEhCi',NULL,'kirans@inducosolutions.com','',NULL,'','',NULL,NULL,NULL,NULL,1,1,1,0,0,0,0,25,0,'none','Letter','{\"browser_lang\":\"en_US\"}','{\"user.create\":1,\"user.edit\":1,\"user.delete\":1,\"user.manage\":1,\"user.dir\":1,\"org.create\":1,\"org.edit\":1,\"org.delete\":1,\"faq.manage\":1,\"emails.banlist\":1}','2018-05-16 12:16:04','2018-06-27 12:48:09','2018-05-16 12:16:04','2018-06-27 12:48:09');
/*!40000 ALTER TABLE `ost_staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_staff_dept_access`
--

DROP TABLE IF EXISTS `ost_staff_dept_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_staff_dept_access` (
  `staff_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `role_id` int(10) unsigned NOT NULL DEFAULT '0',
  `flags` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`staff_id`,`dept_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_staff_dept_access`
--

LOCK TABLES `ost_staff_dept_access` WRITE;
/*!40000 ALTER TABLE `ost_staff_dept_access` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_staff_dept_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_syslog`
--

DROP TABLE IF EXISTS `ost_syslog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_syslog` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_type` enum('Debug','Warning','Error') NOT NULL,
  `title` varchar(255) NOT NULL,
  `log` text NOT NULL,
  `logger` varchar(64) NOT NULL,
  `ip_address` varchar(64) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `log_type` (`log_type`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_syslog`
--

LOCK TABLES `ost_syslog` WRITE;
/*!40000 ALTER TABLE `ost_syslog` DISABLE KEYS */;
INSERT INTO `ost_syslog` VALUES (1,'Debug','osTicket installed!','Congratulations osTicket basic installation completed!\n\nThank you for choosing osTicket!','','172.68.144.41','2018-05-16 12:16:04','2018-05-16 12:16:04'),(2,'Warning','Failed agent login attempt (support@osticket.com)','Username: support@osticket.com IP: 172.31.79.158 Time: Jun 27, 2018, 12:26 pm UTC Attempts: 3','','172.31.79.158','2018-06-27 12:26:54','2018-06-27 12:26:54'),(3,'Warning','Failed login attempt (user)','Username: support@osticket.com IP: 172.31.79.158 Time: Jun 27, 2018, 12:27 pm UTC Attempts: 3','','172.31.79.158','2018-06-27 12:27:21','2018-06-27 12:27:21'),(4,'Error','Excessive login attempts (user)','Excessive login attempts by a user. Username: itummindia@gmail.com IP: 172.31.23.115 Time: Jun 27, 2018, 12:29 pm UTC Attempts: 5','','172.31.23.115','2018-06-27 12:29:09','2018-06-27 12:29:09'),(5,'Warning','Excessive login attempts (itummindia@gmail.com)','Excessive login attempts by an agent? Username: itummindia@gmail.com IP: 172.31.23.115 Time: Jun 27, 2018, 12:29 pm UTC Attempts: 5 Timeout: 2 minutes ','','172.31.23.115','2018-06-27 12:29:31','2018-06-27 12:29:31'),(6,'Warning','Excessive login attempts (itummindia@gmail.com)','Excessive login attempts by an agent? Username: itummindia@gmail.com IP: 172.31.23.115 Time: Jun 27, 2018, 12:29 pm UTC Attempts: 6 Timeout: 2 minutes ','','172.31.23.115','2018-06-27 12:29:35','2018-06-27 12:29:35'),(7,'Warning','Excessive login attempts (kirans@inducosolutions.com)','Excessive login attempts by an agent? Username: kirans@inducosolutions.com IP: 172.31.79.158 Time: Jun 27, 2018, 12:30 pm UTC Attempts: 7 Timeout: 2 minutes ','','172.31.79.158','2018-06-27 12:30:03','2018-06-27 12:30:03'),(8,'Warning','Excessive login attempts (kirans@inducosolutions.com)','Excessive login attempts by an agent? Username: kirans@inducosolutions.com IP: 172.31.23.115 Time: Jun 27, 2018, 12:30 pm UTC Attempts: 8 Timeout: 2 minutes ','','172.31.23.115','2018-06-27 12:30:12','2018-06-27 12:30:12'),(9,'Warning','Failed agent login attempt (kirans@inducosolutions.com)','Username: kirans@inducosolutions.com IP: 172.31.79.158 Time: Jun 27, 2018, 12:31 pm UTC Attempts: 3','','172.31.79.158','2018-06-27 12:31:47','2018-06-27 12:31:47'),(10,'Warning','Invalid CSRF Token __CSRFToken__','Invalid CSRF token [1ce5ed1908b794364b22f62c484fd40961bde50b] on http://qa.itumm.com/support/scp/login.php','','172.31.23.115','2018-06-27 12:44:36','2018-06-27 12:44:36');
/*!40000 ALTER TABLE `ost_syslog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_task`
--

DROP TABLE IF EXISTS `ost_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_task` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL DEFAULT '0',
  `object_type` char(1) NOT NULL,
  `number` varchar(20) DEFAULT NULL,
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(10) unsigned NOT NULL DEFAULT '0',
  `team_id` int(10) unsigned NOT NULL DEFAULT '0',
  `lock_id` int(11) unsigned NOT NULL DEFAULT '0',
  `flags` int(10) unsigned NOT NULL DEFAULT '0',
  `duedate` datetime DEFAULT NULL,
  `closed` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dept_id` (`dept_id`),
  KEY `staff_id` (`staff_id`),
  KEY `team_id` (`team_id`),
  KEY `created` (`created`),
  KEY `object` (`object_id`,`object_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_task`
--

LOCK TABLES `ost_task` WRITE;
/*!40000 ALTER TABLE `ost_task` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_task__cdata`
--

DROP TABLE IF EXISTS `ost_task__cdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_task__cdata` (
  `task_id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` mediumtext,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_task__cdata`
--

LOCK TABLES `ost_task__cdata` WRITE;
/*!40000 ALTER TABLE `ost_task__cdata` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_task__cdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_team`
--

DROP TABLE IF EXISTS `ost_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_team` (
  `team_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lead_id` int(10) unsigned NOT NULL DEFAULT '0',
  `flags` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(125) NOT NULL DEFAULT '',
  `notes` text,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`team_id`),
  UNIQUE KEY `name` (`name`),
  KEY `lead_id` (`lead_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_team`
--

LOCK TABLES `ost_team` WRITE;
/*!40000 ALTER TABLE `ost_team` DISABLE KEYS */;
INSERT INTO `ost_team` VALUES (1,0,0,'Level I Support','Tier 1 support, responsible for the initial iteraction with customers','2018-05-16 12:16:03','2018-05-16 12:16:03');
/*!40000 ALTER TABLE `ost_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_team_member`
--

DROP TABLE IF EXISTS `ost_team_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_team_member` (
  `team_id` int(10) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(10) unsigned NOT NULL,
  `flags` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`team_id`,`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_team_member`
--

LOCK TABLES `ost_team_member` WRITE;
/*!40000 ALTER TABLE `ost_team_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_team_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_thread`
--

DROP TABLE IF EXISTS `ost_thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_thread` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `object_id` int(11) unsigned NOT NULL,
  `object_type` char(1) NOT NULL,
  `extra` text,
  `lastresponse` datetime DEFAULT NULL,
  `lastmessage` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `object_id` (`object_id`),
  KEY `object_type` (`object_type`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_thread`
--

LOCK TABLES `ost_thread` WRITE;
/*!40000 ALTER TABLE `ost_thread` DISABLE KEYS */;
INSERT INTO `ost_thread` VALUES (1,1,'T',NULL,NULL,'2018-05-16 12:16:04','2018-05-16 12:16:04'),(2,2,'T',NULL,NULL,NULL,'2018-05-18 09:47:23'),(3,3,'T',NULL,NULL,NULL,'2018-06-21 16:55:30'),(4,4,'T',NULL,NULL,NULL,'2018-06-22 14:54:19'),(5,5,'T',NULL,NULL,NULL,'2018-06-27 12:29:55');
/*!40000 ALTER TABLE `ost_thread` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_thread_collaborator`
--

DROP TABLE IF EXISTS `ost_thread_collaborator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_thread_collaborator` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `thread_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `role` char(1) NOT NULL DEFAULT 'M',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `collab` (`thread_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_thread_collaborator`
--

LOCK TABLES `ost_thread_collaborator` WRITE;
/*!40000 ALTER TABLE `ost_thread_collaborator` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_thread_collaborator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_thread_entry`
--

DROP TABLE IF EXISTS `ost_thread_entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_thread_entry` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL DEFAULT '0',
  `thread_id` int(11) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `type` char(1) NOT NULL DEFAULT '',
  `flags` int(11) unsigned NOT NULL DEFAULT '0',
  `poster` varchar(128) NOT NULL DEFAULT '',
  `editor` int(10) unsigned DEFAULT NULL,
  `editor_type` char(1) DEFAULT NULL,
  `source` varchar(32) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `format` varchar(16) NOT NULL DEFAULT 'html',
  `ip_address` varchar(64) NOT NULL DEFAULT '',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `thread_id` (`thread_id`),
  KEY `staff_id` (`staff_id`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_thread_entry`
--

LOCK TABLES `ost_thread_entry` WRITE;
/*!40000 ALTER TABLE `ost_thread_entry` DISABLE KEYS */;
INSERT INTO `ost_thread_entry` VALUES (1,0,1,0,1,'M',65,'osTicket Support',NULL,NULL,'Web','osTicket Installed!',' <p> Thank you for choosing osTicket. </p> <p> Please make sure you join the <a href=\"http://osticket.com/forums\">osTicket forums</a> and our <a href=\"http://osticket.com/updates\">mailing list</a> to stay up to date on the latest news, security alerts and updates. The osTicket forums are also a great place to get assistance, guidance, tips, and help from other osTicket users. In addition to the forums, the osTicket wiki provides a useful collection of educational materials, documentation, and notes from the community. We welcome your contributions to the osTicket community. </p> <p> If you are looking for a greater level of support, we provide professional services and commercial support with guaranteed response times, and access to the core development team. We can also help customize osTicket or even add new features to the system to meet your unique needs. </p> <p> If the idea of managing and upgrading this osTicket installation is daunting, you can try osTicket as a hosted service at <a href=\"http://www.supportsystem.com\">http://www.supportsystem.com/</a> -- no installation required and we can import your data! With SupportSystem\'s turnkey infrastructure, you get osTicket at its best, leaving you free to focus on your customers without the burden of making sure the application is stable, maintained, and secure. </p> <p> Cheers, </p> <p> -<br /> osTicket Team http://osticket.com/ </p> <p> <strong>PS.</strong> Don\'t just make customers happy, make happy customers! </p> ','html','172.68.144.41','2018-05-16 12:16:04','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ost_thread_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_thread_entry_email`
--

DROP TABLE IF EXISTS `ost_thread_entry_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_thread_entry_email` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `thread_entry_id` int(11) unsigned NOT NULL,
  `mid` varchar(255) NOT NULL,
  `headers` text,
  PRIMARY KEY (`id`),
  KEY `thread_entry_id` (`thread_entry_id`),
  KEY `mid` (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_thread_entry_email`
--

LOCK TABLES `ost_thread_entry_email` WRITE;
/*!40000 ALTER TABLE `ost_thread_entry_email` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_thread_entry_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_thread_event`
--

DROP TABLE IF EXISTS `ost_thread_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_thread_event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(11) unsigned NOT NULL,
  `team_id` int(11) unsigned NOT NULL,
  `dept_id` int(11) unsigned NOT NULL,
  `topic_id` int(11) unsigned NOT NULL,
  `state` enum('created','closed','reopened','assigned','transferred','overdue','edited','viewed','error','collab','resent') NOT NULL,
  `data` varchar(1024) DEFAULT NULL COMMENT 'Encoded differences',
  `username` varchar(128) NOT NULL DEFAULT 'SYSTEM',
  `uid` int(11) unsigned DEFAULT NULL,
  `uid_type` char(1) NOT NULL DEFAULT 'S',
  `annulled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ticket_state` (`thread_id`,`state`,`timestamp`),
  KEY `ticket_stats` (`timestamp`,`state`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_thread_event`
--

LOCK TABLES `ost_thread_event` WRITE;
/*!40000 ALTER TABLE `ost_thread_event` DISABLE KEYS */;
INSERT INTO `ost_thread_event` VALUES (1,1,0,0,1,1,'created',NULL,'SYSTEM',1,'U',0,'2018-05-16 12:16:04'),(2,2,0,0,1,2,'created',NULL,'SYSTEM',2,'U',0,'2018-05-18 09:47:23'),(3,3,0,0,1,2,'created',NULL,'SYSTEM',3,'U',0,'2018-06-21 16:55:30'),(4,4,0,0,1,1,'created',NULL,'SYSTEM',4,'U',0,'2018-06-22 14:54:19'),(5,5,0,0,1,1,'created',NULL,'SYSTEM',5,'U',0,'2018-06-27 12:29:55'),(6,1,0,0,1,1,'overdue',NULL,'SYSTEM',NULL,'S',0,'2018-06-27 12:31:20'),(7,2,0,0,1,2,'overdue',NULL,'SYSTEM',NULL,'S',0,'2018-06-27 12:31:20'),(8,3,0,0,1,2,'overdue',NULL,'SYSTEM',NULL,'S',0,'2018-06-27 12:31:20'),(9,4,0,0,1,1,'overdue',NULL,'SYSTEM',NULL,'S',0,'2018-06-27 12:31:20');
/*!40000 ALTER TABLE `ost_thread_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket`
--

DROP TABLE IF EXISTS `ost_ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket` (
  `ticket_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(20) DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_email_id` int(11) unsigned NOT NULL DEFAULT '0',
  `status_id` int(10) unsigned NOT NULL DEFAULT '0',
  `dept_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sla_id` int(10) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  `staff_id` int(10) unsigned NOT NULL DEFAULT '0',
  `team_id` int(10) unsigned NOT NULL DEFAULT '0',
  `email_id` int(11) unsigned NOT NULL DEFAULT '0',
  `lock_id` int(11) unsigned NOT NULL DEFAULT '0',
  `flags` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(64) NOT NULL DEFAULT '',
  `source` enum('Web','Email','Phone','API','Other') NOT NULL DEFAULT 'Other',
  `source_extra` varchar(40) DEFAULT NULL,
  `isoverdue` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isanswered` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `duedate` datetime DEFAULT NULL,
  `est_duedate` datetime DEFAULT NULL,
  `reopened` datetime DEFAULT NULL,
  `closed` datetime DEFAULT NULL,
  `lastupdate` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`ticket_id`),
  KEY `user_id` (`user_id`),
  KEY `dept_id` (`dept_id`),
  KEY `staff_id` (`staff_id`),
  KEY `team_id` (`team_id`),
  KEY `status_id` (`status_id`),
  KEY `created` (`created`),
  KEY `closed` (`closed`),
  KEY `duedate` (`duedate`),
  KEY `topic_id` (`topic_id`),
  KEY `sla_id` (`sla_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket`
--

LOCK TABLES `ost_ticket` WRITE;
/*!40000 ALTER TABLE `ost_ticket` DISABLE KEYS */;
INSERT INTO `ost_ticket` VALUES (1,'212295',1,0,1,1,1,1,0,0,0,0,0,'172.68.144.41','Web',NULL,1,0,NULL,'2018-05-18 12:16:04',NULL,NULL,'2018-05-16 12:16:04','2018-05-16 12:16:04','2018-06-27 12:31:20'),(2,'366163',2,0,1,1,1,2,0,0,0,0,0,'162.158.167.208','Web',NULL,1,0,NULL,'2018-05-20 09:47:23',NULL,NULL,'2018-05-18 09:47:23','2018-05-18 09:47:23','2018-06-27 12:31:20'),(3,'693905',3,0,1,1,1,2,0,0,0,0,0,'172.31.23.115','Web',NULL,1,0,NULL,'2018-06-23 16:55:30',NULL,NULL,'2018-06-21 16:55:30','2018-06-21 16:55:30','2018-06-27 12:31:20'),(4,'903714',4,0,1,1,1,1,0,0,0,0,0,'172.31.79.158','Web',NULL,1,0,NULL,'2018-06-24 14:54:19',NULL,NULL,'2018-06-22 14:54:19','2018-06-22 14:54:19','2018-06-27 12:31:20'),(5,'440812',5,0,1,1,1,1,0,0,0,0,0,'172.31.23.115','Web',NULL,0,0,NULL,'2018-06-29 12:29:54',NULL,NULL,'2018-06-27 12:29:54','2018-06-27 12:29:54','2018-06-27 12:29:55');
/*!40000 ALTER TABLE `ost_ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket__cdata`
--

DROP TABLE IF EXISTS `ost_ticket__cdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket__cdata` (
  `ticket_id` int(11) unsigned NOT NULL DEFAULT '0',
  `subject` mediumtext,
  `priority` mediumtext,
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket__cdata`
--

LOCK TABLES `ost_ticket__cdata` WRITE;
/*!40000 ALTER TABLE `ost_ticket__cdata` DISABLE KEYS */;
INSERT INTO `ost_ticket__cdata` VALUES (1,'osTicket Installed!','2'),(2,'Feedback','1'),(3,'Feedback','1'),(4,'General Inquiry','2'),(5,'General Inquiry','2');
/*!40000 ALTER TABLE `ost_ticket__cdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket_priority`
--

DROP TABLE IF EXISTS `ost_ticket_priority`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket_priority` (
  `priority_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `priority` varchar(60) NOT NULL DEFAULT '',
  `priority_desc` varchar(30) NOT NULL DEFAULT '',
  `priority_color` varchar(7) NOT NULL DEFAULT '',
  `priority_urgency` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ispublic` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`priority_id`),
  UNIQUE KEY `priority` (`priority`),
  KEY `priority_urgency` (`priority_urgency`),
  KEY `ispublic` (`ispublic`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket_priority`
--

LOCK TABLES `ost_ticket_priority` WRITE;
/*!40000 ALTER TABLE `ost_ticket_priority` DISABLE KEYS */;
INSERT INTO `ost_ticket_priority` VALUES (1,'low','Low','#DDFFDD',4,1),(2,'normal','Normal','#FFFFF0',3,1),(3,'high','High','#FEE7E7',2,1),(4,'emergency','Emergency','#FEE7E7',1,1);
/*!40000 ALTER TABLE `ost_ticket_priority` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_ticket_status`
--

DROP TABLE IF EXISTS `ost_ticket_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_ticket_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL DEFAULT '',
  `state` varchar(16) DEFAULT NULL,
  `mode` int(11) unsigned NOT NULL DEFAULT '0',
  `flags` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `properties` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `state` (`state`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_ticket_status`
--

LOCK TABLES `ost_ticket_status` WRITE;
/*!40000 ALTER TABLE `ost_ticket_status` DISABLE KEYS */;
INSERT INTO `ost_ticket_status` VALUES (1,'Open','open',3,0,1,'{\"description\":\"Open tickets.\"}','2018-05-16 12:16:03','0000-00-00 00:00:00'),(2,'Resolved','closed',1,0,2,'{\"allowreopen\":true,\"reopenstatus\":0,\"description\":\"Resolved tickets\"}','2018-05-16 12:16:03','0000-00-00 00:00:00'),(3,'Closed','closed',3,0,3,'{\"allowreopen\":true,\"reopenstatus\":0,\"description\":\"Closed tickets. Tickets will still be accessible on client and staff panels.\"}','2018-05-16 12:16:03','0000-00-00 00:00:00'),(4,'Archived','archived',3,0,4,'{\"description\":\"Tickets only adminstratively available but no longer accessible on ticket queues and client panel.\"}','2018-05-16 12:16:03','0000-00-00 00:00:00'),(5,'Deleted','deleted',3,0,5,'{\"description\":\"Tickets queued for deletion. Not accessible on ticket queues.\"}','2018-05-16 12:16:03','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ost_ticket_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_translation`
--

DROP TABLE IF EXISTS `ost_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_translation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `object_hash` char(16) CHARACTER SET ascii DEFAULT NULL,
  `type` enum('phrase','article','override') DEFAULT NULL,
  `flags` int(10) unsigned NOT NULL DEFAULT '0',
  `revision` int(11) unsigned DEFAULT NULL,
  `agent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `lang` varchar(16) NOT NULL DEFAULT '',
  `text` mediumtext NOT NULL,
  `source_text` text,
  `updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `type` (`type`,`lang`),
  KEY `object_hash` (`object_hash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_translation`
--

LOCK TABLES `ost_translation` WRITE;
/*!40000 ALTER TABLE `ost_translation` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_user`
--

DROP TABLE IF EXISTS `ost_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `org_id` int(10) unsigned NOT NULL,
  `default_email_id` int(10) NOT NULL,
  `status` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_user`
--

LOCK TABLES `ost_user` WRITE;
/*!40000 ALTER TABLE `ost_user` DISABLE KEYS */;
INSERT INTO `ost_user` VALUES (1,1,1,0,'osTicket Support','2018-05-16 12:16:04','2018-05-16 12:16:04'),(2,0,0,0,'','2018-05-18 09:47:22','2018-05-18 09:47:22'),(3,0,0,0,'','2018-06-21 16:55:30','2018-06-21 16:55:30'),(4,0,0,0,'','2018-06-22 14:54:19','2018-06-22 14:54:19'),(5,0,0,0,'','2018-06-27 12:29:54','2018-06-27 12:29:54');
/*!40000 ALTER TABLE `ost_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_user__cdata`
--

DROP TABLE IF EXISTS `ost_user__cdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_user__cdata` (
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `email` mediumtext,
  `name` mediumtext,
  `phone` mediumtext,
  `notes` mediumtext,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_user__cdata`
--

LOCK TABLES `ost_user__cdata` WRITE;
/*!40000 ALTER TABLE `ost_user__cdata` DISABLE KEYS */;
INSERT INTO `ost_user__cdata` VALUES (1,'support@osticket.com','osTicket Support',NULL,NULL),(2,NULL,NULL,NULL,NULL),(3,NULL,NULL,NULL,NULL),(4,NULL,NULL,NULL,NULL),(5,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `ost_user__cdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_user_account`
--

DROP TABLE IF EXISTS `ost_user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_user_account` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `status` int(11) unsigned NOT NULL DEFAULT '0',
  `timezone` varchar(64) DEFAULT NULL,
  `lang` varchar(16) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `passwd` varchar(128) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `backend` varchar(32) DEFAULT NULL,
  `extra` text,
  `registered` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_user_account`
--

LOCK TABLES `ost_user_account` WRITE;
/*!40000 ALTER TABLE `ost_user_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `ost_user_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ost_user_email`
--

DROP TABLE IF EXISTS `ost_user_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ost_user_email` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `flags` int(10) unsigned NOT NULL DEFAULT '0',
  `address` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `address` (`address`),
  KEY `user_email_lookup` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ost_user_email`
--

LOCK TABLES `ost_user_email` WRITE;
/*!40000 ALTER TABLE `ost_user_email` DISABLE KEYS */;
INSERT INTO `ost_user_email` VALUES (1,1,0,'support@osticket.com');
/*!40000 ALTER TABLE `ost_user_email` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-06  9:20:07
