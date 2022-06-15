-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 03:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhinguyenv3`
--

-- --------------------------------------------------------

--
-- Table structure for table `balances`
--

CREATE TABLE `balances` (
  `id` int(11) NOT NULL,
  `credit` double NOT NULL DEFAULT 0,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `balances`
--

INSERT INTO `balances` (`id`, `credit`, `username`) VALUES
(1, 400, 'taiproduaxe'),
(2, 10000, 'nano'),
(3, 0, 'susan');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`, `time`) VALUES
(1, 'nano', 'Server sập cmnr', '2022-06-13 04:29:32'),
(2, 'susan', 'Sao download ko dc v ad??', '2022-06-13 04:31:26'),
(3, 'nano', 'Ai có file skyblock free RPG ko share free với cám ơn nhìu.', '2022-06-13 04:46:22'),
(4, 'nano', 'asd', '2022-06-13 04:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `detail_files`
--

CREATE TABLE `detail_files` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `present_image` varchar(255) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_files`
--

INSERT INTO `detail_files` (`id`, `description`, `link_video`, `present_image`, `file_id`) VALUES
(1, 'File này do mình config thuê cho 1 bạn làm server', 'Không có video có sẵn', 'present_op_skyblock_1.png', 8),
(2, 'Import world dễ dàng.', 'Không có sẵn', 'present.png', 1385280691);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `download_count` int(11) NOT NULL DEFAULT 0,
  `version` varchar(255) NOT NULL,
  `size` double NOT NULL,
  `compress_type` varchar(255) NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` varchar(255) NOT NULL DEFAULT 'Không / chưa có mô tả cho sản phẩm này!',
  `download_link` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 mean file, 1 mean plugin',
  `censored` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 mean uncensored; 1 mean censored'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `price`, `download_count`, `version`, `size`, `compress_type`, `publish_date`, `description`, `download_link`, `author`, `type`, `censored`) VALUES
(8, 'OP SKYBLOCK 1.0', 0, 0, '1.14.4', 166.8, 'Tar', '2022-06-13 05:27:09', '- File đã config + việt hoá 88%\r\n- Chưa cài plugin phụ (như antihack, napthe...vv)\r\n- File chưa chạy thực nghiệm và chưa kiểm thử\r\n- Có hỗ trợ fix bug hoặc lỗi khi chạy file', 'https://uploading.vn/oizugjxr97sq', 'nano', 0, 1),
(9, 'OP SKYBLOCK 2.0', 0, 0, '1.14.4', 958, 'Zip', '2022-06-13 05:30:09', '- File đã config + việt hoá 88%\r\n\r\n- Chưa cài plugin phụ (như antihack, napthe...vv)\r\n\r\n- File chưa chạy thực nghiệm và chưa kiểm thử\r\n\r\n- Được cải tiến từ ver1\r\n\r\n- Có hỗ trợ fix bug hoặc lỗi khi chạy file', 'https://uploading.vn/robmxdmf5010', 'taiproduaxe', 0, 1),
(10, 'SKYBLOCK 7.0', 0, 0, '1.12.2', 130, 'Zip', '2022-06-13 05:31:39', '- File đã config + việt hoá 95%\r\n\r\n- Đã cài các plugin chống hack đơn giản. Chưa cài các plugin phụ như đăng nhập, nạp thẻ, giảm lag...bla\r\n\r\n- Đã chạy thực nghiệm và sữa lỗi\r\n\r\n- Có hỗ trợ fix bug hoặc lỗi khi chạy file', 'https://uploading.vn/o1cl29edhmg3', 'taiproduaxe', 0, 1),
(11, 'SKYBLOCK 7.0 (remake)', 5000, 0, '1.12.2', 83.6, 'Zip', '2022-06-13 05:32:36', '- File đã config + việt hoá 95%\r\n\r\n- Đã cài các plugin chống hack đơn giản. Và các plugin phụ. Các bạn chỉ việc cài lại cấu hình\r\n\r\n- Đã chạy thực nghiệm và sữa lỗi rất nhiều\r\n\r\n- Có hỗ trợ fix bug hoặc lỗi khi chạy file (nếu có)\r\n\r\n- File được cải tiếng ', 'https://uploading.vn/ilvjge5qvvez', 'taiproduaxe', 0, 1),
(12, 'TOWNY DIAMOND 2', 0, 0, '1.12.2', 60.6, 'Zip', '2022-06-13 05:33:24', '- File đã config + việt hoá 90%\r\n\r\n- World tạo ra rãi rác kim cương khắp mọi nơi. Player sinh tồn farm diamond khắp mọi nơi\r\n\r\n- Đã chạy thực nghiệm và sữa lỗi cơ bản\r\n\r\n- Có hỗ trợ fix bug hoặc lỗi khi chạy file', 'https://uploading.vn/ip9j3co0nv3z', 'taiproduaxe', 0, 1),
(13, 'SKYBLOCK HAPPY', 0, 0, '1.11.2', 79.9, 'Zip', '2022-06-13 05:34:45', ' File đã config + việt hoá 100%\r\n\r\n- File được share trên mạng, có giá bán 70.000đ\r\n\r\n- Chưa từng chạy thực nghiệm và chưa từng fix lỗi\r\n\r\n- Không hỗ trợ fix bug, lỗi file, lỗi console...vv\r\n\r\n- File còn lỗi khá nhiều và đơn sơ tuy nhiên mình đánh giá là ', 'https://uploading.vn/epv6ntbm63bv', 'taiproduaxe', 0, 1),
(14, 'SKYBLOCK OUTDATED', 0, 0, '1.11.2', 36.3, 'Zip', '2022-06-13 05:35:38', '- File đã config + việt hoá 98%\r\n\r\n- File cũ phiên bản cũ đã không còn sử dụng lâu rồi nhưng từng huy hoàng vào thời kỳ cũ\r\n\r\n- File giản đơn không cầu kì phức tạp các bạn có thể tải world hoặc lấy các thứ có thể dùng được.\r\n\r\n- Đã từng chạy thực nghiệm v', 'https://uploading.vn/xanypvv194r9', 'taiproduaxe', 0, 1),
(15, 'TOWNY NORMAL 1.12', 0, 0, '1.12.2', 132.5, 'Zip', '2022-06-13 05:36:22', '- File đã config + việt hoá 89%\r\n\r\n- File giản đơn không cầu kì phức tạp các bạn có thể tải world hoặc lấy các thứ có thể dùng được. Đây là file towny cơ bản không còn diamond world như cũ mà là world bình thường.\r\n\r\n- Đã từng chạy thực nghiệm nhưng chưa ', 'https://uploading.vn/o2fdt4117nmx', 'taiproduaxe', 0, 1),
(16, 'OP PRISON REVOLUTION', 0, 0, '1.11.2', 40.3, 'Zip', '2022-06-13 05:37:04', '- File đã config + việt hoá 99%\r\n\r\n- Mình đã làm khá nhiều file prison nhưng không nhớ file này thuộc loại nào chỉ biết nó cải tiếng từ 2 hoặc 3 phiên bản prison trước\r\n\r\n- Đã từng chạy thực nghiệm và từng fix lỗi bug\r\n\r\n- Chưa cài các plugin phụ trợ\r\n\r\n-', 'https://uploading.vn/6m52nv8rtnme', 'taiproduaxe', 0, 1),
(17, 'SKY EGG', 0, 0, '1.11.2', 37.6, 'Zip', '2022-06-13 05:37:45', '- File đã config + việt hoá 90%\r\n\r\n- Là một thể loại game cày cuốc dựa vào vận may đập trứng. Người chơi thu thập trứng và đập hên xui có thể nhận được mãnh hoặc vũ khí tối thượng\r\n\r\n- Đã từng chạy thực nghiệm và từng fix vài lỗi bug nhỏ\r\n\r\n- Chưa cài các', 'https://uploading.vn/k84y0ts3rc6a', 'taiproduaxe', 0, 1),
(18, 'PRISON 1.15', 0, 0, '1.15', 107.3, 'Zip', '2022-06-13 05:38:27', '- File đã config + việt hoá 79%\r\n\r\n- Vẫn là đào đá nhưng lần này là version 1.15\r\n\r\n- Đã từng chạy thực nghiệm và từng fix vài lỗi bug nhỏ\r\n\r\n- Chưa cài các plugin phụ trợ\r\n\r\n- Hỗ trợ fix bug, lỗi file, lỗi console...(nếu có)\r\n\r\n- Map spawn + map warp mạn', 'https://uploading.vn/pxbofymidcmw', 'taiproduaxe', 0, 1),
(19, 'SKYBLOCK VANILLA', 0, 0, '1.12.2', 106.8, 'Zip', '2022-06-13 05:39:06', '- Chơi như chơi skyblock survival (single play)\r\n\r\n- Có thể chơi cùng bạn\r\n\r\n- Cobblestone Generator được tăng tốc\r\n\r\n- Mới vào spawn sẵn trên đảo\r\n\r\n- Chết mất đồ\r\n\r\n- Không sử dụng plugins\r\n\r\n- Hỗ trợ fix bug, lỗi file, lỗi console...(nếu có)', 'https://uploading.vn/07e67i6fqe1a', 'taiproduaxe', 0, 1),
(20, 'SuperTrails', 0, 0, '1.8', 153.2, 'Jar', '2022-06-14 00:43:51', 'Ít gây lag cho server và hiệu ứng cực đẹp. Hỗ trợ 1.8+ -> 1.15', 'https://www.spigotmc.org/resources/supertrails.1879/', 'susan', 1, 1),
(1385280691, 'Multiverse-Core 4.3.1', 0, 0, '1.8', 485, 'Jar', '2022-06-14 09:26:24', 'Import world dễ dàng.', 'https://www.spigotmc.org/resources/multiverse-core.390/', 'nano', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `age` int(11) NOT NULL DEFAULT 12,
  `sex` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 mean boy',
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `first_name`, `last_name`, `address`, `phone_number`, `age`, `sex`, `username`) VALUES
(1, 'Phan Tấn', 'Tài', '60/122 KP8 Phường Tân Chánh Hiệp Q.12', '0338188506', 21, 0, 'taiproduaxe'),
(2, '', '', '', '', 0, 0, 'nano'),
(3, 'Susano', 'Nasus', '50 COLOMBIA, USA STREET 50, Bootstrap 4', '02838837067', 12, 1, 'susan');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `time_triggerred` timestamp NOT NULL DEFAULT current_timestamp(),
  `action` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `time_triggerred`, `action`, `status`, `username`) VALUES
(23, '2022-06-11 14:02:25', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(24, '2022-06-11 14:03:25', 'Đăng cai tệp loại 1', 'waiting for censor', 'taiproduaxe'),
(25, '2022-06-11 14:06:50', 'Login to web', 'success', 'nano'),
(26, '2022-06-11 14:07:09', 'bought file from taiproduaxe', 'success', 'nano'),
(27, '2022-06-12 00:37:06', 'Login to web', 'success', 'taiproduaxe'),
(28, '2022-06-12 04:23:54', 'Login to web', 'success', 'nano'),
(29, '2022-06-12 05:19:39', 'bought file from taiproduaxe', 'success', 'nano'),
(30, '2022-06-12 05:19:52', 'bought file from taiproduaxe', 'success', 'nano'),
(31, '2022-06-12 05:19:54', 'bought file from taiproduaxe', 'success', 'nano'),
(32, '2022-06-12 05:19:55', 'bought file from taiproduaxe', 'success', 'nano'),
(33, '2022-06-12 05:28:01', 'bought file from taiproduaxe', 'success', 'nano'),
(34, '2022-06-12 05:28:03', 'bought file from taiproduaxe', 'success', 'nano'),
(35, '2022-06-12 05:31:28', 'bought file from taiproduaxe', 'success', 'nano'),
(36, '2022-06-12 05:31:56', 'Login to web', 'success', 'taiproduaxe'),
(37, '2022-06-12 10:55:38', 'Login to web', 'success', 'nano'),
(38, '2022-06-12 10:56:03', 'Đăng cai tệp loại 0', 'waiting for censor', 'nano'),
(39, '2022-06-12 10:58:02', 'Login to web', 'success', 'taiproduaxe'),
(40, '2022-06-12 10:58:26', 'bought file from nano', 'success', 'taiproduaxe'),
(41, '2022-06-13 04:46:06', 'Login to web', 'success', 'nano'),
(42, '2022-06-13 05:27:09', 'Đăng cai tệp loại 0', 'waiting for censor', 'nano'),
(43, '2022-06-13 05:27:21', 'Login to web', 'success', 'taiproduaxe'),
(44, '2022-06-13 05:30:09', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(45, '2022-06-13 05:31:39', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(46, '2022-06-13 05:32:36', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(47, '2022-06-13 05:33:24', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(48, '2022-06-13 05:34:45', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(49, '2022-06-13 05:35:38', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(50, '2022-06-13 05:36:22', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(51, '2022-06-13 05:37:04', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(52, '2022-06-13 05:37:45', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(53, '2022-06-13 05:38:27', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(54, '2022-06-13 05:39:06', 'Đăng cai tệp loại 0', 'waiting for censor', 'taiproduaxe'),
(55, '2022-06-13 05:40:00', 'Login to web', 'success', 'susan'),
(56, '2022-06-13 05:40:09', 'bought file from nano', 'success', 'susan'),
(57, '2022-06-13 05:44:03', 'Login to web', 'success', 'susan'),
(58, '2022-06-13 10:34:21', 'Login to web', 'success', 'susan'),
(59, '2022-06-14 00:42:40', 'Login to web', 'success', 'susan'),
(60, '2022-06-14 00:43:51', 'Đăng cai tệp loại 1', 'waiting for censor', 'susan'),
(61, '2022-06-14 00:52:23', 'Login to web', 'failed cause wrong password', 'taiproduaxe'),
(62, '2022-06-14 00:52:27', 'Login to web', 'success', 'taiproduaxe'),
(63, '2022-06-14 00:56:54', 'bought file from susan', 'success', 'taiproduaxe'),
(64, '2022-06-14 08:44:44', 'Login to web', 'success', 'nano'),
(65, '2022-06-14 09:06:30', 'Login to web', 'success', 'nano'),
(66, '2022-06-14 09:26:24', 'Đăng cai tệp loại 1', 'waiting for censor', 'nano'),
(67, '2022-06-14 09:26:37', 'Login to web', 'success', 'taiproduaxe');

-- --------------------------------------------------------

--
-- Table structure for table `mailboxs`
--

CREATE TABLE `mailboxs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL COMMENT 'fk_from_mailboxs_to_users',
  `time_triggerred` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mailboxs`
--

INSERT INTO `mailboxs` (`id`, `title`, `content`, `from`, `to`, `time_triggerred`) VALUES
(2, 'Đăng cai tệp', 'Failed nhé', 'Admin', 'nano', '2022-06-12 05:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `stars` int(11) NOT NULL,
  `at` timestamp NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `authen_token` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 mean not verified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `authen_token`, `status`) VALUES
(1, 'taiproduaxe', 'nhito1doraemon@gmail.com', '$2y$10$nD/JczonoaH1p7jQiNLdBuVjDr3N4Ymz46Pvoff/i1pCUK3lLrxzq', '37cbb1095b629776d62d8b3b1e0deec7', 0),
(2, 'nano', 'nano@gmail.com', '$2y$10$Urp.Ie2YONkiWQ4F4ulLH.M2DR3ATxF/T5ImYtTZkdBmROQHwhRI6', 'b8412488888c2053ec68fe8992214433', 0),
(3, 'susan', 'susan@gmail.com', '$2y$10$pBuNbVR5688oQnjJVw8X7ukSWDo8DhwEfn2gpc4b6pSbTuYgTAk7y', 'aaf91e4a4b3a9815df1dc62288218b1b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_files`
--

CREATE TABLE `user_files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `download_link` varchar(255) NOT NULL,
  `bought_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `buyer` varchar(255) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_files`
--

INSERT INTO `user_files` (`id`, `file_name`, `download_link`, `bought_at`, `buyer`, `file_id`) VALUES
(20, 'OP SKYBLOCK 1.0', 'https://uploading.vn/oizugjxr97sq', '2022-06-13 05:40:09', 'susan', 8),
(21, 'SuperTrails', 'https://www.spigotmc.org/resources/supertrails.1879/', '2022-06-14 00:56:54', 'taiproduaxe', 20);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `view` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balances`
--
ALTER TABLE `balances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_balances_to_users` (`username`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_comments_to_users` (`username`);

--
-- Indexes for table `detail_files`
--
ALTER TABLE `detail_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_detail_files_to_files` (`file_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_files_to_users` (`author`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_infos_to_users` (`username`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_logs_to_users` (`username`);

--
-- Indexes for table `mailboxs`
--
ALTER TABLE `mailboxs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_mailboxs_to_users` (`to`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_files`
--
ALTER TABLE `user_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_user_files_to_users` (`buyer`),
  ADD KEY `fk_from_user_files_to_files` (`file_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balances`
--
ALTER TABLE `balances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_files`
--
ALTER TABLE `detail_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1385280692;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `mailboxs`
--
ALTER TABLE `mailboxs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_files`
--
ALTER TABLE `user_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `balances`
--
ALTER TABLE `balances`
  ADD CONSTRAINT `fk_from_balances_to_users` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_from_comments_to_users` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_files`
--
ALTER TABLE `detail_files`
  ADD CONSTRAINT `fk_from_detail_files_to_files` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `fk_from_files_to_users` FOREIGN KEY (`author`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `infos`
--
ALTER TABLE `infos`
  ADD CONSTRAINT `fk_from_infos_to_users` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_from_logs_to_users` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mailboxs`
--
ALTER TABLE `mailboxs`
  ADD CONSTRAINT `fk_from_mailboxs_to_users` FOREIGN KEY (`to`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_files`
--
ALTER TABLE `user_files`
  ADD CONSTRAINT `fk_from_user_files_to_files` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_from_user_files_to_users` FOREIGN KEY (`buyer`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
