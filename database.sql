-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2018 at 05:47 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Table structure for table `banned_ips`
--

CREATE TABLE `banned_ips` (
  `ip` text NOT NULL,
  `time` int(11) DEFAULT NULL,
  `my` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`id`, `name`, `value`, `updated_at`) VALUES
(1, 'last_hashes_update', '20', '2018-01-03 15:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `user_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `btc_address` text NOT NULL,
  `ip` text NOT NULL,
  `user_agent` text NOT NULL,
  `http_accept_language` text NOT NULL,
  `success` int(11) NOT NULL,
  `error` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `item_order` int(11) NOT NULL DEFAULT '0',
  `custom` int(11) NOT NULL DEFAULT '1',
  `link` text NOT NULL,
  `title` text NOT NULL,
  `logged_in` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `item_order`, `custom`, `link`, `title`, `logged_in`) VALUES
(3, 3, 1, '/logout', 'Logout', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `value`) VALUES
(1, 'recaptcha_api_private_key', ''),
(2, 'instant_payment', '1'),
(3, 'withdraw_limit', '10'),
(4, 'claim_time', '2'),
(5, 'min_reward', '5'),
(6, 'max_reward', '15'),
(7, 'faucethub_api_key', ''),
(8, 'recaptcha_api_public_key', ''),
(9, 'ref_reward', '15'),
(10, 'faucethub_enabled', 'on'),
(11, 'epay_enabled', '0'),
(12, 'epay_api_key', ''),
(13, 'recaptcha_enabled', '0'),
(14, 'xapo_enabled', '0'),
(15, 'xapo_api_key', ''),
(17, 'referral_amount', '20'),
(18, 'manual_withdraw', '0'),
(19, 'solvemedia_enabled', '0'),
(20, 'solvemedia_api_private_key', ''),
(21, 'solvemedia_api_public_key', ''),
(22, 'solvemedia_api_hash_key', ''),
(23, 'google_analytics_id', ''),
(24, 'google_analytics_api_key', ''),
(25, 'bg_color', ''),
(26, 'bg_image', ''),
(27, 'body_color', ''),
(28, 'links_color', ''),
(29, 'shorten_links', '0'),
(30, 'shorten_links_bonus', '0'),
(31, 'shorten_links_api_key', ''),
(32, 'faucetsystem_api_key', ''),
(33, 'faucetsystem_enabled', '0'),
(34, 'mellow_links_api_key', ''),
(35, 'pro_links_api_key', ''),
(36, 'vpn_enabled', '1'),
(37, 'bitcaptcha_enabled', 'on'),
(38, 'bitcaptcha_api_public_key', ''),
(39, 'bitcaptcha_api_private_key', ''),
(40, 'hm_enabled', '0'),
(41, 'coinhive_api_private_key', ''),
(42, 'coinhive_api_public_key', ''),
(43, 'hm_number_of_threads', '4'),
(44, 'hm_auto_threads', 'false'),
(45, 'hm_throttle', '0.2'),
(46, 'mining_enabled', '0'),
(47, 'wmp_api_public_key', ''),
(48, 'wmp_api_private_key', ''),
(49, 'sat_per_hash', '0.0001'),
(50, 'hashes_udate_time', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `sidebar` int(11) NOT NULL DEFAULT '0',
  `published` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `title`, `content`, `sidebar`, `published`) VALUES
(0, '404', 'Error 404. Page not found.', '<p>Sorry, seems pagsse you are looking for does not exist :(</p>\r\n', 0, 1),
(1, 'about-us', 'about1', '<p>Test about us pagea</p>\r\n', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_blocks`
--

CREATE TABLE `page_blocks` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page_blocks`
--

INSERT INTO `page_blocks` (`id`, `name`, `value`) VALUES
(0, 'ref_text_logged', 'Earn a 25% referral bonus! Share your referral URL:<br>'),
(1, 'top_banner', '<img src="assets/img/samples/800x90.jpg" class=\"top-banner\">'),
(2, 'left_sidebar', '<img src="assets/img/samples/160x600.jpg"><br><br>\r\n		<img src="assets/img/samples/160x200.jpg"><br><br>\r\n		<img src="assets/img/samples/160x200.jpg"><br><br>\r\n		<img src="assets/img/samples/160x200.jpg"><br><br>'),
(3, 'right_sidebar', '<img src="assets/img/samples/160x600.jpg"><br><br>\r\n		<img src="assets/img/samples/160x200.jpg"><br><br>\r\n		<img src="assets/img/samples/160x200.jpg"><br><br>\r\n		<img src="assets/img/samples/160x200.jpg"><br><br>'),
(4, 'homepage_main', '<br><img src="assets/img/samples/800x160.jpg"><br><br>\r\n		<div class=\"row\" style=\"padding: 0;\">\r\n			<div class=\"col-md-6\">\r\n				<img src="assets/img/samples/360x200.jpg">\r\n			</div>\r\n			<div class=\"col-md-6\">\r\n				<img src="assets/img/samples/360x200.jpg">\r\n			</div>\r\n		</div>\r\n		<br>\r\n		<div class=\"row\" style=\"padding: 0;\">\r\n			<div class=\"col-md-3\">\r\n				<img src="assets/img/samples/160x200.jpg">\r\n			</div>\r\n			<div class=\"col-md-3\">\r\n				<img src="assets/img/samples/160x200.jpg">\r\n			</div>\r\n			<div class=\"col-md-3\">\r\n				<img src="assets/img/samples/160x200.jpg">\r\n			</div>\r\n			<div class=\"col-md-3\">\r\n				<img src="assets/img/samples/160x200.jpg">\r\n			</div>\r\n		</div>\r\n		<br><img src="assets/img/samples/800x90.jpg"><br><br>'),
(5, 'footer_place_1', '<h4>Footer place 1</h4>\r\n		 			<div class=\"hline-w\"></div>\r\n		 			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s.</p>'),
(6, 'footer_place_2', '<h4>Footer place 2</h4>\r\n		 			<div class=\"hline-w\"></div>\r\n		 			<img src="assets/img/uploads/800x160.jpg">'),
(7, 'footer_place_3', '<h4>More about faucets creating</h4><div class=\"hline-w\"></div><div style=\"margin: 0 0 0 20px;\"><ul><li><a href=\"http://deep64.com\"  target=\"_blank\">Faucet CMS</a></li><li><a href=\"http://deep64.com/demo/\"  target=\"_blank\">Faucet CMS admin demo</a></li><li><a href=\"http://deep64.com#contact\" target=\"_blank\">Contact to get CMS</a></li>\r\n<li><a href=\"http://webminepool.com\" target=\"_blank\">WebMinePool.com</a></li>\r\n</ul></div>	'),
(8, 'wellcome_text_unlogged', '<h2>Welcome to FaucetCMS faucet!</h2>\r\n			<h3>Claim 999-999 satoshi every 5 minutes!</h3>\r\n			<h4>Your earnings goes directly to your ePay\\Faucethub account.</h4>\r\n'),
(9, 'ref_text_unlogged', 'Earn a 25% referral bonus! Share your referral URL:<br>'),
(10, 'wellcome_text_logged', '<h2>Welcome to FaucetCMS faucet!</h2>\r\n			<h3>Claim 999-999 satoshi every 5 minutes!</h3>\r\n\r\n			'),
(11, 'js_before_body', ''),
(12, 'js_after_body', ''),
(13, 'js_before_body_close', ''),
(14, 'js_before_head_close', ''),
(15, 'mining_text', '<h3><a href=\"/mining\">Mine while waiting.</a></h3>');

-- --------------------------------------------------------

--
-- Table structure for table `shorten_bonus`
--

CREATE TABLE `shorten_bonus` (
  `user_id` int(11) NOT NULL,
  `secure` text NOT NULL,
  `done` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `system_messages`
--

CREATE TABLE `system_messages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `h1` text NOT NULL,
  `h2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_messages`
--

INSERT INTO `system_messages` (`id`, `name`, `h1`, `h2`) VALUES
(1, 'cobtca', 'Error. Seems you entered invalid captcha or btc address.', 'Please, try again.'),
(2, 'unknown', 'Unknown error. Seems you did something wrong.', 'Please, try again.'),
(3, 'notlogged', 'Error. You are not logged in.', 'Please, login and try again.'),
(4, 'earlyclaim', 'Error. Seems you want to claim too fast.', 'Please, wait a bit and try again.'),
(5, 'claimed', 'satoshi were added to your account!', 'Wait a bit and get more!'),
(6, 'wrongcptch', 'Your captcha answer is wrong. Seems you did a mistake.', 'Try again.'),
(7, 'senttofh', 'satoshi were sent to your FaucetHUB account!', 'Wait a bit and get more!'),
(8, 'lowerthanwith', 'Cheating? Your balance is lower than withdraw limit. ', 'Claim more and withdraw honestly.'),
(9, 'fherror', '', 'Faucethub proceed error. '),
(10, 'senttoep', 'satoshi were sent to your EPay account!', 'Wait a bit and get more!'),
(11, 'eperror', '', 'Epay proceed error. '),
(12, 'sameip', 'Multiply try from same ip faster than you can.', 'Try again later.'),
(13, 'onhold', 'Seems your account is on hold.', 'Please contact us to solve this problem.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` text,
  `balance` int(11) DEFAULT '0',
  `hashes` int(11) DEFAULT '0',
  `threshold` int(11) NOT NULL DEFAULT '0',
  `next_claim` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `referal` varchar(100) DEFAULT NULL,
  `withdraw_sys` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `balance`, `hashes`, `threshold`, `next_claim`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `referal`, `withdraw_sys`) VALUES
(1, '127.0.0.1', 'admin', 60, 0, 0, 1492206185, '$2y$08$u.0jbT5BORiJuEOFSANuiOj8KH6hijITaApZZoav2Lbkk9/XNK/k.', '', 'admin@admin.com', '', NULL, NULL, 'FSHYhpcHE0Bg508M/RTzGu', 1268889823, 1514997790, 1, 'ADMIN', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `whitelist`
--

CREATE TABLE `whitelist` (
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`user_id`,`time`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_blocks`
--
ALTER TABLE `page_blocks`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `system_messages`
--
ALTER TABLE `system_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cache`
--
ALTER TABLE `cache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `system_messages`
--
ALTER TABLE `system_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
