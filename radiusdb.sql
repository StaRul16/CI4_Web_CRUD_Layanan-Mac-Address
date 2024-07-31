-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 10:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radiusdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `kode_department` varchar(32) NOT NULL,
  `nama_department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `kode_department`, `nama_department`) VALUES
(1, '7212', 'Human Capital & General Affair'),
(2, '6211', 'IT'),
(4, '1235', 'Produksi'),
(7, '6292', 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_perangkat`
--

CREATE TABLE `jenis_perangkat` (
  `id` int(11) NOT NULL,
  `nama_perangkat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_perangkat`
--

INSERT INTO `jenis_perangkat` (`id`, `nama_perangkat`) VALUES
(1, 'PC'),
(3, 'Samsung'),
(6, 'Laptop'),
(7, 'Iphone'),
(8, 'Sepatu');

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE `operators` (
  `id` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(1) DEFAULT NULL,
  `mng_search` varchar(32) DEFAULT NULL,
  `mng_batch` varchar(32) DEFAULT NULL,
  `mng_del` varchar(32) DEFAULT NULL,
  `mng_edit` varchar(32) DEFAULT NULL,
  `mng_new` varchar(32) DEFAULT NULL,
  `mng_new_quick` varchar(32) DEFAULT NULL,
  `mng_list_all` varchar(32) DEFAULT NULL,
  `mng_hs_del` varchar(32) DEFAULT NULL,
  `mng_hs_edit` varchar(32) DEFAULT NULL,
  `mng_hs_new` varchar(32) DEFAULT NULL,
  `mng_hs_list` varchar(32) DEFAULT NULL,
  `mng_rad_nas_del` varchar(32) DEFAULT NULL,
  `mng_rad_nas_edit` varchar(32) DEFAULT NULL,
  `mng_rad_nas_new` varchar(32) DEFAULT NULL,
  `mng_rad_nas_list` varchar(32) DEFAULT NULL,
  `mng_rad_usergroup_del` varchar(32) DEFAULT NULL,
  `mng_rad_usergroup_edit` varchar(32) DEFAULT NULL,
  `mng_rad_usergroup_new` varchar(32) DEFAULT NULL,
  `mng_rad_usergroup_list_user` varchar(32) DEFAULT NULL,
  `mng_rad_usergroup_list` varchar(32) DEFAULT NULL,
  `mng_rad_groupcheck_search` varchar(32) DEFAULT NULL,
  `mng_rad_groupcheck_del` varchar(32) DEFAULT NULL,
  `mng_rad_groupcheck_list` varchar(32) DEFAULT NULL,
  `mng_rad_groupcheck_new` varchar(32) DEFAULT NULL,
  `mng_rad_groupcheck_edit` varchar(32) DEFAULT NULL,
  `mng_rad_groupreply_search` varchar(32) DEFAULT NULL,
  `mng_rad_groupreply_del` varchar(32) DEFAULT NULL,
  `mng_rad_groupreply_list` varchar(32) DEFAULT NULL,
  `mng_rad_groupreply_new` varchar(32) DEFAULT NULL,
  `mng_rad_groupreply_edit` varchar(32) DEFAULT NULL,
  `mng_rad_profiles_edit` varchar(32) DEFAULT NULL,
  `mng_rad_profiles_del` varchar(32) DEFAULT NULL,
  `mng_rad_profiles_list` varchar(32) DEFAULT NULL,
  `mng_rad_profiles_new` varchar(32) DEFAULT NULL,
  `rep_online` varchar(32) DEFAULT NULL,
  `rep_topusers` varchar(32) DEFAULT NULL,
  `rep_username` varchar(32) DEFAULT NULL,
  `rep_lastconnect` varchar(32) DEFAULT NULL,
  `rep_logs_radius` varchar(32) DEFAULT NULL,
  `rep_stat_services` varchar(32) DEFAULT NULL,
  `rep_stat_server` varchar(32) DEFAULT NULL,
  `rep_logs_system` varchar(32) DEFAULT NULL,
  `rep_logs_boot` varchar(32) DEFAULT NULL,
  `rep_logs_daloradius` varchar(32) DEFAULT NULL,
  `acct_active` varchar(32) DEFAULT NULL,
  `acct_username` varchar(32) DEFAULT NULL,
  `acct_all` varchar(32) DEFAULT NULL,
  `acct_date` varchar(32) DEFAULT NULL,
  `acct_ipaddress` varchar(32) DEFAULT NULL,
  `acct_nasipaddress` varchar(32) DEFAULT NULL,
  `acct_hotspot_accounting` varchar(32) DEFAULT NULL,
  `acct_hotspot_compare` varchar(32) DEFAULT NULL,
  `acct_custom_query` varchar(32) DEFAULT NULL,
  `bill_persecond` varchar(32) DEFAULT NULL,
  `bill_prepaid` varchar(32) DEFAULT NULL,
  `bill_rates_del` varchar(32) DEFAULT NULL,
  `bill_rates_new` varchar(32) DEFAULT NULL,
  `bill_rates_edit` varchar(32) DEFAULT NULL,
  `bill_rates_list` varchar(32) DEFAULT NULL,
  `gis_editmap` varchar(32) DEFAULT NULL,
  `gis_viewmap` varchar(32) DEFAULT NULL,
  `graphs_alltime_logins` varchar(32) DEFAULT NULL,
  `graphs_alltime_traffic_compare` varchar(32) DEFAULT NULL,
  `graphs_overall_download` varchar(32) DEFAULT NULL,
  `graphs_overall_upload` varchar(32) DEFAULT NULL,
  `graphs_overall_logins` varchar(32) DEFAULT NULL,
  `config_db` varchar(32) DEFAULT NULL,
  `config_interface` varchar(32) DEFAULT NULL,
  `config_lang` varchar(32) DEFAULT NULL,
  `config_logging` varchar(32) DEFAULT NULL,
  `config_maint_test_user` varchar(32) DEFAULT NULL,
  `config_maint_disconnect_user` varchar(32) DEFAULT NULL,
  `config_operators_del` varchar(32) DEFAULT NULL,
  `config_operators_edit` varchar(32) DEFAULT NULL,
  `config_operators_list` varchar(32) DEFAULT NULL,
  `config_operators_new` varchar(32) DEFAULT NULL,
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `title` varchar(32) DEFAULT NULL,
  `department` varchar(32) DEFAULT NULL,
  `company` varchar(32) DEFAULT NULL,
  `phone1` varchar(32) DEFAULT NULL,
  `phone2` varchar(32) DEFAULT NULL,
  `email1` varchar(32) DEFAULT NULL,
  `email2` varchar(32) DEFAULT NULL,
  `messenger1` varchar(32) DEFAULT NULL,
  `messenger2` varchar(32) DEFAULT NULL,
  `notes` varchar(128) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `creationdate` datetime DEFAULT NULL,
  `mng_rad_attributes_list` varchar(32) DEFAULT NULL,
  `mng_rad_attributes_new` varchar(32) DEFAULT NULL,
  `mng_rad_attributes_edit` varchar(32) DEFAULT NULL,
  `mng_rad_attributes_search` varchar(32) DEFAULT NULL,
  `mng_rad_attributes_del` varchar(32) DEFAULT NULL,
  `mng_rad_realms_list` varchar(32) DEFAULT NULL,
  `mng_rad_realms_new` varchar(32) DEFAULT NULL,
  `mng_rad_realms_edit` varchar(32) DEFAULT NULL,
  `mng_rad_realms_del` varchar(32) DEFAULT NULL,
  `mng_rad_proxys_list` varchar(32) DEFAULT NULL,
  `mng_rad_proxys_new` varchar(32) DEFAULT NULL,
  `mng_rad_proxys_edit` varchar(32) DEFAULT NULL,
  `mng_rad_proxys_del` varchar(32) DEFAULT NULL,
  `acct_maintenance_cleanup` varchar(32) DEFAULT NULL,
  `acct_maintenance_delete` varchar(32) DEFAULT NULL,
  `mng_rad_ippool_list` varchar(32) DEFAULT NULL,
  `mng_rad_ippool_new` varchar(32) DEFAULT NULL,
  `mng_rad_ippool_edit` varchar(32) DEFAULT NULL,
  `mng_rad_ippool_del` varchar(32) DEFAULT NULL,
  `rep_history` varchar(32) DEFAULT NULL,
  `creationby` varchar(128) DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `updateby` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`id`, `username`, `nama`, `password`, `level`, `mng_search`, `mng_batch`, `mng_del`, `mng_edit`, `mng_new`, `mng_new_quick`, `mng_list_all`, `mng_hs_del`, `mng_hs_edit`, `mng_hs_new`, `mng_hs_list`, `mng_rad_nas_del`, `mng_rad_nas_edit`, `mng_rad_nas_new`, `mng_rad_nas_list`, `mng_rad_usergroup_del`, `mng_rad_usergroup_edit`, `mng_rad_usergroup_new`, `mng_rad_usergroup_list_user`, `mng_rad_usergroup_list`, `mng_rad_groupcheck_search`, `mng_rad_groupcheck_del`, `mng_rad_groupcheck_list`, `mng_rad_groupcheck_new`, `mng_rad_groupcheck_edit`, `mng_rad_groupreply_search`, `mng_rad_groupreply_del`, `mng_rad_groupreply_list`, `mng_rad_groupreply_new`, `mng_rad_groupreply_edit`, `mng_rad_profiles_edit`, `mng_rad_profiles_del`, `mng_rad_profiles_list`, `mng_rad_profiles_new`, `rep_online`, `rep_topusers`, `rep_username`, `rep_lastconnect`, `rep_logs_radius`, `rep_stat_services`, `rep_stat_server`, `rep_logs_system`, `rep_logs_boot`, `rep_logs_daloradius`, `acct_active`, `acct_username`, `acct_all`, `acct_date`, `acct_ipaddress`, `acct_nasipaddress`, `acct_hotspot_accounting`, `acct_hotspot_compare`, `acct_custom_query`, `bill_persecond`, `bill_prepaid`, `bill_rates_del`, `bill_rates_new`, `bill_rates_edit`, `bill_rates_list`, `gis_editmap`, `gis_viewmap`, `graphs_alltime_logins`, `graphs_alltime_traffic_compare`, `graphs_overall_download`, `graphs_overall_upload`, `graphs_overall_logins`, `config_db`, `config_interface`, `config_lang`, `config_logging`, `config_maint_test_user`, `config_maint_disconnect_user`, `config_operators_del`, `config_operators_edit`, `config_operators_list`, `config_operators_new`, `firstname`, `lastname`, `title`, `department`, `company`, `phone1`, `phone2`, `email1`, `email2`, `messenger1`, `messenger2`, `notes`, `lastlogin`, `creationdate`, `mng_rad_attributes_list`, `mng_rad_attributes_new`, `mng_rad_attributes_edit`, `mng_rad_attributes_search`, `mng_rad_attributes_del`, `mng_rad_realms_list`, `mng_rad_realms_new`, `mng_rad_realms_edit`, `mng_rad_realms_del`, `mng_rad_proxys_list`, `mng_rad_proxys_new`, `mng_rad_proxys_edit`, `mng_rad_proxys_del`, `acct_maintenance_cleanup`, `acct_maintenance_delete`, `mng_rad_ippool_list`, `mng_rad_ippool_new`, `mng_rad_ippool_edit`, `mng_rad_ippool_del`, `rep_history`, `creationby`, `updatedate`, `updateby`) VALUES
(3, 'admin', NULL, 'S1st3kf0t34m.', '0', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Sys', 'Administrator', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, NULL, NULL),
(4, 'operator', NULL, 'Op3r4t0r123', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'syahrul', 'syahrul', '1234554321', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Jonathan', 'Liandi', '$2y$10$BSj7SOo6l6cZTzYiL8Mzkebjp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Infinix', 'HOT 11', '$2y$10$70shub85mKSxiqEim.Dbeugrx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'lenovo', 'lemkorea', '$2y$10$3a0NX3625xAEGHj0j4rCQOFiZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Arulul', 'GTALIMA', '$2y$10$lBVH0bZs3viV1xlv4AuJ/eIgU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'starbuck', 'syahrul eka fauzi', '$2y$10$ZLfHdIaN0NE8kbZPJfDCW.l7P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'fazril', 'fazril sidik', '$2y$10$P1uf2ed/RpRS7XCDrryY9.rR1MOqzjarM4myJ4CLn90IDerRw75He', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `radcheck`
--

CREATE TABLE `radcheck` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(32) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '==',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `radcheck`
--

INSERT INTO `radcheck` (`id`, `username`, `attribute`, `op`, `value`) VALUES
(16624, '90:0B:C1:00:05:EC', 'Auth-Type', ':=', 'Accept'),
(16931, '48:5D:60:5A:1E:57', 'Auth-Type', ':=', 'Accept'),
(17032, '00-45-E2-DA-FD-0F', 'Auth-Type', ':=', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `radreply`
--

CREATE TABLE `radreply` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(32) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '=',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `radreply`
--

INSERT INTO `radreply` (`id`, `username`, `attribute`, `op`, `value`) VALUES
(16948, '90:0B:C1:00:05:EC', 'Mikrotik-Mark-Id', '=', 'Proxy-AOD'),
(17358, '48:5D:60:5A:1E:57', 'Mikrotik-Mark-Id', '=', 'Proxy-200'),
(17487, '00-45-E2-DA-FD-0F', 'Mikrotik-Mark-Id', '=', 'Proxy-AOD');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `workphone` varchar(200) DEFAULT NULL,
  `homephone` varchar(200) DEFAULT NULL,
  `mobilephone` varchar(200) DEFAULT NULL,
  `notes` varchar(200) DEFAULT NULL,
  `creationdate` datetime DEFAULT NULL,
  `creationby` varchar(128) DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `updateby` varchar(128) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `jenis_perangkat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `username`, `firstname`, `lastname`, `email`, `workphone`, `homephone`, `mobilephone`, `notes`, `creationdate`, `creationby`, `updatedate`, `updateby`, `department_id`, `jenis_perangkat_id`) VALUES
(15774, '02-45-E2-DA-FD-0F', 'Laptop Lenovo', '92183', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 6),
(15794, '00-45-E2-DA-FD-0F', 'Syahrul', '87652', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_perangkat`
--
ALTER TABLE `jenis_perangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radcheck`
--
ALTER TABLE `radcheck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(32));

--
-- Indexes for table `radreply`
--
ALTER TABLE `radreply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(32));

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `jenis_perangkat_id` (`jenis_perangkat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenis_perangkat`
--
ALTER TABLE `jenis_perangkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `operators`
--
ALTER TABLE `operators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `radcheck`
--
ALTER TABLE `radcheck`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17034;

--
-- AUTO_INCREMENT for table `radreply`
--
ALTER TABLE `radreply`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17489;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15796;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `userinfo_ibfk_2` FOREIGN KEY (`jenis_perangkat_id`) REFERENCES `jenis_perangkat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
