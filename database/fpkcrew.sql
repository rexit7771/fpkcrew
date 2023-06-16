-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 03:34 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpkcrew`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `nik` varchar(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL,
  `direct_superior` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `nik`, `nama`, `divisi`, `departemen`, `grade`, `direct_superior`, `created_at`, `updated_at`) VALUES
(1, '88888', 'Admin', 'Human Capital Management', 'Human Capital Management', 4, NULL, '2023-03-17 13:56:11', NULL),
(2, '00295', 'Aldo Omar Dharma Setiawan', 'Human Capital Management', 'Human Capital Management', 3, '11', '2023-03-17 07:39:22', '2023-03-17 07:39:22'),
(3, '02005', 'Muhammad Rizky Pratomo', 'Sales', 'KAM', 4, '88', '2023-03-17 07:39:22', '2023-03-17 07:39:22'),
(4, '02603', 'Devis Polim', 'Sales', 'Sales', 3, '42', '2023-03-17 07:39:22', '2023-03-17 07:39:22'),
(5, '02008', 'Farastika Amalia', 'MSC & Engineering', 'QC System', 4, '20', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(6, '00183', 'Indriani', 'Human Capital Management', 'Human Capital Management', 3, '2', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(7, '01648', 'Filipus', 'Sales', 'Sales', 4, '91', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(8, '02088', 'Ahlakul Amin', 'Sales', 'Sales', 4, '34', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(9, '02387', 'Wawan Hermawan', 'Sales', 'Sales', 3, '42', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(10, '02943', 'Anas Joenaedi', 'Sales', 'Sales', 4, '34', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(11, '00819', 'Adhi S. Lukman', 'BOD', 'BOD', 2, NULL, '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(12, '00816', 'Philip Hamdani', 'BOD', 'BOD', 2, NULL, '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(13, '02820', 'Leo Wibowo', 'Marketing', 'Marketing', 4, '24', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(14, '00817', 'Trisno Kuntjoro', 'BOD', 'BOD', 2, NULL, '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(15, '00818', 'Tjokro Susilo', 'BOD', 'BOD', 2, NULL, '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(16, '00820', 'Erijanto Djajasudarma', 'BOD', 'BOD', 2, NULL, '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(17, '00821', 'Tony Lusiahari', 'BOD', 'BOD', 2, NULL, '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(18, '00021', 'Lucia Indrawati Latief', 'Product Development', 'Product Development', 3, '11', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(19, '00024', 'Misno Yulianto', 'MSC & Engineering', 'Engineering', 4, '31', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(20, '00026', 'Yani Heryani', 'MSC & Engineering', 'QC System', 3, '115', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(21, '00029', 'Hasanudin', 'MSC & Engineering', 'Produksi', 4, '33', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(22, '00032', 'Sundari', 'MSC & Engineering', 'Supply Chain', 3, '115', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(23, '00057', 'Dian Yuliandi', 'MSC & Engineering', 'Supply Chain', 4, '32', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(24, '01976', 'Roy Johar Tamzil', 'Marketing', 'Marketing', 3, '12', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(25, '01979', 'Ricko Dwi Syahputra', 'Marketing', 'Marketing', 3, '24', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(26, '00067', 'Aspuriyadi', 'Sales', 'Sales', 4, '49', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(27, '01307', 'Sandi Destrian', 'MSC & Engineering', 'Produksi', 4, '115', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(28, '00073', 'AP Indra Jaya', 'Sales', 'Sales', 4, '9', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(29, '00075', 'Sri Rahayu', 'MSC & Engineering', 'Produksi', 4, '33', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(30, '02081', 'Suryadinata', 'MSC & Engineering', 'Engineering', 4, '31', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(31, '00080', 'Kandek Santoso', 'MSC & Engineering', 'Engineering', 3, '115', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(32, '00085', 'Ramli Malau', 'MSC & Engineering', 'Supply Chain', 3, '22', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(33, '00001', 'Jaswadi', 'MSC & Engineering', 'Produksi', 3, '115', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(34, '02084', 'Udianto', 'Sales', 'Sales', 3, '42', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(35, '00102', 'Indra Hermawan', 'MSC & Engineering', 'Produksi', 4, '33', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(36, '00103', 'Jonni Sihombing', 'MSC & Engineering', 'Supply Chain', 4, '32', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(37, '01311', 'Santi U', 'MSC & Engineering', 'Produksi', 4, '22', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(38, '01309', 'Megawati', 'MSC & Engineering', 'Produksi', 4, '115', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(39, '00109', 'Mardi', 'Sales', 'Sales', 4, '9', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(40, '01312', 'Maria Yustini', 'MSC & Engineering', 'Produksi', 4, '20', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(41, '00121', 'Suwandi', 'Sales', 'Sales', 4, '49', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(42, '00122', 'Awan Akhadi', 'Sales', 'Sales', 3, '12', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(43, '00129', 'Rita', 'Sales', 'Sales', 4, '57', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(44, '00131', 'Suyanti', 'Sales', 'Sales', 4, '42', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(45, '00135', 'Epi Supianti', 'Sales', 'Sales', 4, '69', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(46, '00145', 'Ni Putu Dian Purnama Dewi', 'Sales', 'Sales', 4, '105', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(47, '00150', 'Nela Handayani', 'MSC & Engineering', 'QC System', 4, '20', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(48, '00157', 'Yeni Kobaryanti', 'Sales', 'Sales', 4, '9', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(49, '02238', 'Setyo Nugroho', 'Sales', 'Sales', 4, '59', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(50, '00161', 'Budi Himawan', 'Sales', 'Sales', 4, '73', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(51, '00176', 'Amsar Juarsa', 'Sales', 'Sales', 4, '73', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(52, '00182', 'Christ Wina Dyah Ayu Maharani', 'Product Development', 'Product Development', 3, '18', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(53, '00317', 'Jefri Aprianto', 'Human Capital Management', 'Human Capital Management', 4, '6', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(54, '01217', 'Lia Karmila', 'Sales', 'Sales', 4, '73', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(55, '01523', 'Totok Wahyudianto', 'Sales', 'Sales', 4, '34', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(56, '02590', 'Erin Puji Astuti', 'Marketing', 'Marketing', 3, '12', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(57, '02790', 'Franky Ronald Koroh', 'Sales', 'Sales', 4, '59', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(58, '02810', 'Mulyani M', 'MSC & Engineering', 'QC System', 4, '20', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(59, '02828', 'Gladdy Koko Wicaksono', 'Sales', 'Sales', 3, '42', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(60, '02864', 'Jantih', 'Marketing', 'Marketing', 3, '24', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(61, '02882', 'Kris Imanias Trikasih Putri', 'Product Development', 'Product Development', 4, '52', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(62, '03050', 'Ridwan Tansil', 'Sales', 'Sales', 4, '78', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(63, '03056', 'Romi Sanjaya', 'Sales', 'Sales', 4, '4', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(64, '01172', 'Wawan Hermawan', 'MSC & Engineering', 'QC System', 4, '20', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(65, '03069', 'Faizal Athhar', 'Sales', 'Sales', 4, '9', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(66, '03072', 'Dadan Ridwan', 'Marketing', 'Marketing', 3, '24', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(67, '03083', 'Cipto Utomo', 'Sales', 'Sales', 4, '34', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(68, '03102', 'Hadi', 'Sales', 'Sales', 4, '57', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(69, '03206', 'Naim Mustofa', 'Sales', 'Sales', 3, '42', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(70, '03287', 'Bayu Defanza', 'Sales', 'Sales', 4, '59', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(71, '03328', 'Erik Ramdhani', 'Sales', 'Sales', 4, '59', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(72, '03338', 'Maria Carolina Laksmiwikansari Raja Seda', 'Sales', 'Sales', 4, '105', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(73, '03347', 'Benny Handiman', 'Sales', 'Sales', 3, '42', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(74, '03348', 'Handoko', 'Sales', 'KAM', 4, '88', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(75, '03351', 'Syafrizal', 'Sales', 'Sales', 4, '4', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(76, '03354', 'Rido Fernando', 'Sales', 'Sales', 4, '4', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(77, '03356', 'Rizqi Oktaviani', 'Sales', 'KAM', 4, '88', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(78, '03361', 'Henro Rondonuwu', 'Sales', 'Sales', 3, '42', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(79, '03363', 'Nurika Putri Astuti', 'Sales', 'KAM', 4, '56', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(80, '03629', 'Zaky Rosyadi', 'Sales', 'Sales', 4, '9', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(81, '03674', 'Muhammad Hidayat', 'Sales', 'Sales', 4, '91', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(82, '03675', 'Ari Zainul Muhadid', 'Sales', 'Sales', 4, '9', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(83, '03695', 'Andri Rizky Desta Syahfutra', 'Human Capital Management', 'Human Capital Management', 4, '6', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(84, '03712', 'Dimas Gusti Bagus Prayogo', 'Sales', 'KAM', 4, '56', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(85, '03722', 'Nirwanto', 'Sales', 'Sales', 4, '4', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(86, '03726', 'Tivan Fitraniya', 'Sales', 'KAM', 4, '88', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(87, '03727', 'Ade Rizky Kurniawan', 'Sales', 'Sales', 4, '9', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(88, '03729', 'Raden Yully Fitriani', 'Sales', 'KAM', 3, '12', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(89, '03758', 'Firmansyah', 'Sales', 'Sales', 4, '78', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(90, '03769', 'Amri Nurdin Haq', 'Sales', 'Sales', 4, '34', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(91, '04044', 'Andi Aspianto', 'Sales', 'Sales', 3, '42', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(92, '03770', 'Erwin Sihombing', 'Sales', 'Sales', 4, '69', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(93, '04068', 'Hengky Hariadi', 'Sales', 'Sales', 4, '57', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(94, '04076', 'Ardani', 'Human Capital Management', 'Human Capital Management', 4, '6', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(95, '04091', 'Yulianto Dwi Nugroho', 'MSC & Engineering', 'Produksi', 4, '33', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(96, '04098', 'Muhammad Luqmanul Hakim', 'Sales', 'Sales', 4, '49', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(97, '04105', 'Bima Arya Yudha', 'Sales', 'Sales', 4, '69', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(98, '04110', 'Ahmad Muchlasin', 'Sales', 'KAM', 4, '88', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(99, '04120', 'Taufik Eka Nerawanto', 'Sales', 'Sales', 4, '34', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(100, '04121', 'Nanda Trisa Putra', 'Sales', 'Sales', 4, '4', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(101, '04122', 'Hary Junova', 'MSC & Engineering', 'Engineering', 4, '31', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(102, '04130', 'Ifan Torza', 'Sales', 'Sales', 4, '69', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(103, '04131', 'Oki Rustandi', 'Sales', 'Sales', 4, '73', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(104, '04134', 'Moch. Rizki Amin Herman', 'Sales', 'Sales', 4, '91', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(105, '04153', 'Purnomo', 'Sales', 'Sales', 3, '42', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(106, '04155', 'Rudi Iswandi', 'Sales', 'KAM', 4, '88', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(107, '04162', 'Ahmad Efendi Pontoh', 'Sales', 'Sales', 4, '78', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(108, '04164', 'Novan Atyanto Gunawan', 'Sales', 'Sales', 4, '105', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(109, '04159', 'Fajar Alfahri Tarigan', 'Sales', 'Sales', 4, '4', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(110, '04165', 'Dwi Prasetyo', 'Sales', 'Sales', 4, '73', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(111, '04166', 'Yadi Firdaus', 'Sales', 'Sales', 4, '91', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(112, '04168', 'Marjan Lahasim', 'Sales', 'Sales', 4, '78', '2023-03-17 07:39:37', NULL),
(113, '04173', 'Bayu Aditiya', 'Sales', 'Sales', 4, '34', '2023-03-17 07:39:37', NULL),
(114, '04065', 'Sadikun Wiratno', 'BOD', 'BOD', 2, NULL, '2023-03-17 07:39:37', NULL),
(115, '02581', 'Agustiawan', 'MSC & Engineering', 'Engineering', 3, '17', '2023-03-17 07:39:37', NULL),
(121, '00121', 'SPV_divisi_name', 'HCM', 'HCM', 4, '122', '2023-03-23 13:47:57', NULL),
(122, '00122', 'manager_divisi_name', 'HCM', 'HCM', 3, '123', '2023-03-23 13:47:57', NULL),
(123, '00123', 'Direksi_divisi_name', 'HCM', 'HCM', 2, NULL, '2023-03-23 14:00:45', NULL),
(124, '00124', 'Manager_HCM_name', 'HCM', 'HCM', 3, '125', '2023-03-24 08:25:56', NULL),
(125, '00125', 'Direksi_HCM_name', 'HCM', 'HCM', 2, NULL, '2023-03-24 08:25:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fpk_requests`
--

CREATE TABLE `fpk_requests` (
  `id` int(11) NOT NULL,
  `nik` varchar(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `jabatan_lama` varchar(100) NOT NULL,
  `jabatan_baru` varchar(100) NOT NULL,
  `level_lama` varchar(100) NOT NULL,
  `grade_lama` varchar(10) NOT NULL,
  `level_baru` varchar(100) NOT NULL,
  `grade_baru` varchar(10) NOT NULL,
  `divisi_lama` varchar(100) NOT NULL,
  `divisi_baru` varchar(100) NOT NULL,
  `status_karyawan_lama` varchar(100) NOT NULL,
  `status_karyawan_baru` varchar(100) NOT NULL,
  `tanggal_efektif` date NOT NULL,
  `note` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ishc` int(11) DEFAULT NULL,
  `next_approval` int(11) DEFAULT NULL,
  `full_approve` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fpk_requests`
--

INSERT INTO `fpk_requests` (`id`, `nik`, `nama`, `tanggal_masuk`, `jenis`, `jabatan_lama`, `jabatan_baru`, `level_lama`, `grade_lama`, `level_baru`, `grade_baru`, `divisi_lama`, `divisi_baru`, `status_karyawan_lama`, `status_karyawan_baru`, `tanggal_efektif`, `note`, `status`, `ishc`, `next_approval`, `full_approve`, `created_by`, `created_at`, `updated_at`) VALUES
(175, '00121', 'Aji', '2023-03-24', 'Promosi', 'Junior Programmer', 'Senior Programmer', '16', 'VI', '15', 'V', 'Human Capital Management', 'Human Capital Management', 'Kontrak', 'Tetap', '2023-04-03', 'bad', 'Reject', NULL, NULL, 0, 121, '2023-03-24 13:41:07', '2023-03-24 07:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `fpk_requests_approvals`
--

CREATE TABLE `fpk_requests_approvals` (
  `fpk_req_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fpk_requests_approvals`
--

INSERT INTO `fpk_requests_approvals` (`fpk_req_id`, `employee_id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(170, 122, 'Approve', 'Noted', '2023-03-23 14:02:21', NULL),
(170, 122, 'Approve', 'Noted', '2023-03-23 14:02:36', NULL),
(171, 122, 'Approve', 'Noted', '2023-03-23 14:03:33', NULL),
(170, 122, 'Approve', NULL, '2023-03-23 14:05:04', NULL),
(170, 122, 'Approve', 'Noted', '2023-03-23 14:58:25', NULL),
(171, 122, 'Approve', 'Noted', '2023-03-23 14:59:45', NULL),
(170, 122, 'Approve', NULL, '2023-03-23 15:10:03', NULL),
(171, 122, 'Approve', NULL, '2023-03-23 15:12:22', NULL),
(171, 122, 'Approve', NULL, '2023-03-23 15:12:39', NULL),
(171, 122, 'Approve', NULL, '2023-03-23 15:12:50', NULL),
(170, 122, 'Approve', NULL, '2023-03-23 15:14:53', NULL),
(175, 122, 'Reject', 'Noted', '2023-03-24 13:44:04', NULL),
(175, 122, 'Reject', 'Noted', '2023-03-24 13:47:48', NULL),
(175, 122, 'Approve', 'Noted', '2023-03-24 13:56:02', NULL),
(175, 123, 'Reject', 'Noted', '2023-03-24 13:59:20', NULL),
(175, 123, 'Approve', 'Noted', '2023-03-24 14:02:04', NULL),
(175, 123, 'Approve', 'Noted', '2023-03-24 14:04:31', NULL),
(175, 124, 'Reject', 'bad', '2023-03-24 14:06:07', NULL),
(175, 124, 'Approve', 'Noted', '2023-03-24 14:07:45', NULL),
(175, 124, 'Reject', 'Noted', '2023-03-24 14:11:41', NULL),
(175, 124, 'Approve', 'Noted', '2023-03-24 14:17:34', NULL),
(175, 125, 'Approve', 'Good', '2023-03-24 14:19:46', NULL),
(175, 125, 'Reject', 'bad', '2023-03-24 14:20:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, 'admin.hrms@inacofood.com', '$2a$12$2wDTCL.3iCjzVkPzCeQdfuXst7wq57dkqWDyVDCmlBHp9.I1Jg7ke', '1', '2023-03-17 13:57:02', NULL),
(2, 'aldo.omar@inacofood.com', '$2y$10$9AFpn1gDXmTN/Nfjqb2.QeI1AI5HcKW44hi9L8eDNdSmdq6RvBC1q', '2', '2023-03-17 07:39:22', '2023-03-17 07:39:22'),
(3, 'muhammad.rizky@inacofood.com', '$2y$10$zVr3BBzhUEhbqMupu00OZexOFSGwRXh7hfChV9cvUiTyYpXk42s2K', '3', '2023-03-17 07:39:22', '2023-03-17 07:39:22'),
(4, 'devis.polim@inacofood.com', '$2y$10$hInfkcatboe7MY9nY7vhUOKPO1c1iqkGpURsemdaXxbiStv8U8R/a', '4', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(5, 'farastika.amalia@inacofood.com', '$2y$10$D4h7UFofBdvYLirAJXFzCuBSlH8bJTzYVJwnZWEVhnWmVhhGuZ4HS', '5', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(6, 'indriani@inacofood.com', '$2y$10$QrvXhTcJNRGZZGUf7HypCOzllq.uQrw3BXU1ADvOtkWwmm4S5pulG', '6', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(7, 'filipus@inacofood.com', '$2y$10$EMmfwP6Fm2LG0sQX8IV5eesGGN9p/T5QM0LrmCaVvdGL65rqU2HVe', '7', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(8, 'ahlakul.amin@inacofood.com', '$2y$10$huF44Ghyj3L3iCrwIQdRPuLKqrrEOWEOmkWeJbGJYiS6RPuu2vfkG', '8', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(9, 'wawan@inacofood.com', '$2y$10$4ezVwH667LLXshS3SWhmnulj2kubVAzpiowVcJfo4mLVgT4tMhrEm', '9', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(10, 'anas.joenaedi@inacofood.com', '$2y$10$6wl7nCpt29NKP71pGMZG5Oth3ejCj0lNygJsVJHyRzdySH7pfmdXO', '10', '2023-03-17 07:39:23', '2023-03-17 07:39:23'),
(11, 'adhi.lukman@inacofood.com', '$2y$10$.vhODFgZclycKAusqVoYzOwvnVlLOD/Hdyllv/1rY9WF/HKgx6/2u', '11', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(12, 'philip.hamdani@inacofood.com', '$2y$10$6Oqual5GabruJHEbf6.5MutVwTRKooOldpN1gkD2Odw2OlEuzizNi', '12', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(13, 'leo.wibowo@inacofood.com', '$2y$10$VoQ9ddizGOMNUBCHIbvWyOscY/cEusbxRy88teg4tAUuhY/AdCZ3u', '13', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(14, 'trisno.kuntjoro@inacofood.com', '$2y$10$Xu1hj2zZJfZY6Qh.TxE3YuN6njfkpBp17usw5zxYc7bBJoepJer..', '14', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(15, 'tjokro.susilo@inacofood.com', '$2y$10$/lF5PYeMLQRmcp94VSbxUe5/37RGOjFZX9p6zGGViAzoSAyBO6bKm', '15', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(16, 'erijanto@inacofood.com', '$2y$10$2.KGVPma9JIp2ac0ojRoz.vfgLYJdhtPju/sl8iC8r6KXNOWqV5aa', '16', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(17, 'tony.lusiahari@inacofood.com', '$2y$10$0mAVASqxbpwdkzZXlulfoOCTPtn9GqDs5x2y0R9tggyWWN8j7AcDO', '17', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(18, 'lucia.indrawati@inacofood.com', '$2y$10$x3nFqOy708WO7ck8ouyI2uPEmQjEtHdjCIwgYDzLtdvB4HG1CUz3u', '18', '2023-03-17 07:39:24', '2023-03-17 07:39:24'),
(19, 'misno.yulianto@inacofood.com', '$2y$10$yEO0QCbfkP0GglqPKeLbSOG9e4gijj3Slv0BULdC6L8XCSb9C86AS', '19', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(20, 'yani.heryani@inacofood.com', '$2y$10$fOVg50u/NxOFmZzIhYfMCeou3bRMXh9io0jLxsS4tmtyzZQ2ngYse', '20', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(21, 'hasanudin@inacofood.com', '$2y$10$PZOFhsbiAVjK.i0b2ZiNr.708L2rHuVW5.IhUlpptZMCV0aBhoTGm', '21', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(22, 'sundari@inacofood.com', '$2y$10$TAeshPaQ/.031LkP1O4JiunJpypE9AHgP.4w.ZRoKF/laPmVY6pg2', '22', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(23, 'dian.yuliandi@inacofood.com', '$2y$10$hVCcuLCSJOvCKZ4p76257eSKGDkQFRdrGUptpMmYLUhjYuChFuJgu', '23', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(24, 'roy.tamzil@inacofood.com', '$2y$10$kCiJtia20MSbRpmniRfFgeNC6kP3VVflfismHNR14KZa2YgwIBQP.', '24', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(25, 'ricko.dwi@inacofood.com', '$2y$10$haSNFhPeNZ2/2w1QK69xJOL9Y6JCkR33E0DSXPg/AtkW6y.4QGX8e', '25', '2023-03-17 07:39:25', '2023-03-17 07:39:25'),
(26, 'aspuriyadi@inacofood.com', '$2y$10$P1kQoUMdkkPolikofEAjWuQN8HvZYf7daKZj/kfnCddLAhLQhYmRS', '26', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(27, 'sandi.destrian@inacofood.com', '$2y$10$4kMdeiw1SACXG6UoYmxZIe2UnadKI5z4ccQfAEU0L55kJ1FY..vje', '27', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(28, 'ap.indra@inacofood.com', '$2y$10$S6fTkBqYQU1opRyTPCrjEeZ/v4GAz78JWvCmppI0Bha.Zri3YUU.a', '28', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(29, 'sri.rahayu@inacofood.com', '$2y$10$1xUHfZ7qB5msOjfLMO1SyOxPgrcQc9dIe3wLHAkr3Zr.RMNpalD7y', '29', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(30, 'suryadinata@inacofood.com', '$2y$10$imIKy0cVQU904PfHfuJSVOSRXBPZOjyqGxh1MhY.PFdyIKsG9nRrK', '30', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(31, 'kandek.santoso@inacofood.com', '$2y$10$3av7iVu.pRrV2no1.szbu.5TxBsl7mQk5kMNIQ7wqFj0EoM/TRaca', '31', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(32, 'ramli.malau@inacofood.com', '$2y$10$.w79g5xnBnXjkKaRaZMGjeFZZ26nqwBS.f8/YvcpQ9CE7B/j11Emq', '32', '2023-03-17 07:39:26', '2023-03-17 07:39:26'),
(33, 'djaswadi@inacofood.com', '$2y$10$1x8MOLow6apkPJ2fcKowT.CaaeybQ2lRnAJM1aanMnccZL7BDxAue', '33', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(34, 'udianto@inacofood.com', '$2y$10$DENkkfH1wTjlU.Zo6w2Pv.4uCIDdyC8tUl0zIVXBp72w9Ikh6AqRy', '34', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(35, 'indra.hermawan@inacofood.com', '$2y$10$yNYUA03wuOHmjZpcrTWe6uGSkGrqWHlg2t2Xtv/nW54x6ExCPDB1i', '35', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(36, 'jonni.sihombing@inacofood.com', '$2y$10$MtoMwHtnGOOKCoqWCTZ5AOmzpXbXL9j9fFHjfZQY3hQ5JY9OkAb3q', '36', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(37, 'santi@inacofood.com', '$2y$10$zVAY2J.SMqmsTY4wSU9VluDhgot.8PjqqvKquQ.wnBDaBWqFMD.Ja', '37', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(38, 'megawati@inacofood.com', '$2y$10$yK/JYl5D6LGWUo4xMwCmm.IIZL9G21NOOgQLVt0wJfm2AVIeC6DGa', '38', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(39, 'mardi@inacofood.com', '$2y$10$rl9dgJW9GS82pPLqTk7AleYENOeppOoUa9XtOSjJBbh.Iubmtf05G', '39', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(40, 'maria.yustini@inacofood.com', '$2y$10$ulQ0ZkiHxfgmG7zo2JizAO84AF.h51T31is8Nyy2N9leOH7u0JGYi', '40', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(41, 'suwandi@inacofood.com', '$2y$10$vg1uSrj79RCqMICvK7hbHeQPHjauVWQ8TtlMyTOUpgw4gdHF.htum', '41', '2023-03-17 07:39:27', '2023-03-17 07:39:27'),
(42, 'awan.akhadi@inacofood.com', '$2y$10$cXEZkaRwOedt/qjPJlhylOJ9tjbhvFmmH8KRCCHbN1TKa6V32T9j6', '42', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(43, 'rita@inacofood.com', '$2y$10$OU/vTb6ZqJ2mi86ufgH/duSTn4aRYQnkUa.A4cVI7Sf3fcBpoqPLa', '43', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(44, 'suyanti@inacofood.com', '$2y$10$DoIyrKc2HPWxULrMRDmZHupMZvXbXVDJRrff4j6Qw0dc1C3Bo7OYa', '44', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(45, 'epi.supianti@inacofood.com', '$2y$10$h.39zfCz3JAsX.bX6LtG3eH2a3tnve8eU9yQ3dUJNF3M06xDcnh72', '45', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(46, 'ni.putu@inacofood.com', '$2y$10$eYvjYDH7JewrZg.TcqJ/KODWfmJtCYAHt91tsTnIf025Z3GnNvgg6', '46', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(47, 'nela.handayani@inacofood.com', '$2y$10$bX/4H036ViTe1N1yZCM2HeOWiBEaJEil3CUCMk4rvPBnlAA.LwGtK', '47', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(48, 'yeni.kobariyanti@inacofood.com', '$2y$10$icUrrwAhZeIDsPKOn5UPqO5CROxUCZDjqXJoEG01hkA8TR0GAgMrW', '48', '2023-03-17 07:39:28', '2023-03-17 07:39:28'),
(49, 'setyo.nugroho@inacofood.com', '$2y$10$5O3nks9n3D6j9vn9RuqKmOdkj01f.VUNfFx.6AAapbxLSMafExD7C', '49', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(50, 'budi.himawan@inacofood.com', '$2y$10$v5fw60dS/PWdQh06z3P/D.e1hC0OS8D3Xon7b2U68Wng5R0tAbN2O', '50', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(51, 'amsar.juarsa@inacofood.com', '$2y$10$0FWyPgBAIS7WCL9j3tVtKe0qWumol64F9D0ZnFYOXX4Q/HK09SS6G', '51', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(52, 'christ.wina@inacofood.com', '$2y$10$TKWZQYlA7JJnb.5.EEH28uXreYKhHNU7HQti7lZmbksta2mh96n2O', '52', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(53, 'jefri.aprianto@inacofood.com', '$2y$10$nVXkS1QsAsMyfRdFPIA2rOjXxP7QMiOLOm/2eJLKCE1bjm7.FmQV2', '53', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(54, 'lia.karmila@inacofood.com', '$2y$10$FrwNi8RvV7Jenb4k5eIlKO0eWfiwWgyZ6l1qqJ5EG7yBWH9n0WI46', '54', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(55, 'totok.wahyudianto@inacofood.com', '$2y$10$VgnObeqiI.D7kAffMiUs7e9KV9cX1N2pnKMgVaG3TfPUu.GMuvM6m', '55', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(56, 'erin.puji@inacofood.com', '$2y$10$mZvrMKMkADXJmgHAyCcA0OPcxumNDLQm6Kb7GgfJAdQzvJLPgzXCm', '56', '2023-03-17 07:39:29', '2023-03-17 07:39:29'),
(57, 'franky.ronald@inacofood.com', '$2y$10$9KxvH0C51ONmYHXKPW3N1OAk8w7kJnYUw1yMglIE.ch4BxpNlyXQy', '57', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(58, 'mulyani.mathias@inacofood.com', '$2y$10$2bw2rJqbN5IinUpbKnWRke63Jrr0cn.dBWGbFju.86Q0Zdshhm3uW', '58', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(59, 'gladdy.koko@inacofood.com', '$2y$10$mMX5goodTft1XpLSuVcJs.NJ7Sw/mIC767H0V7vdSLMgW5dIaKQtu', '59', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(60, 'jantih@inacofood.com', '$2y$10$rl1G684g67Dc9OHfOSOjd.DQoCcg8TqBUUYEAQShNR8fzZA96Uexi', '60', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(61, 'kris.imanias@inacofood.com', '$2y$10$fmwPT3umJoXRQK9I4du0tuaPbQBt3YhjgH7Il.6v0QfNbjb35t9fi', '61', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(62, 'ridwan.tansil@inacofood.com', '$2y$10$frdQGN/XdQzvDFb6LrNDXusOVpTv4F03oQVBl6y4cQWVOzIUa2qyq', '62', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(63, 'romi.sanjaya@inacofood.com', '$2y$10$fws5ICyRZF/rrhfiDCO9eus2Lc/j7Ugo6HMN2goc6lLlP717GAYdu', '63', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(64, 'wawan.hermawan@inacofood.com', '$2y$10$/22.Fx23qOX7lQf1Hbt./OgdBzpEGqB9yKidJZ0J8coHU3CDaCIl2', '64', '2023-03-17 07:39:30', '2023-03-17 07:39:30'),
(65, 'faizal.athhar@inacofood.com', '$2y$10$U1zf/hHFIsjFJVzQtnQqcOPlf6B2bighoNiXAgqCI3mqlK9Bh2S1.', '65', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(66, 'dadan.ridwan@inacofood.com', '$2y$10$NzhlbfXeHbHIcD4YmFTK7OP3ccVq9oHCse/47rS7Fk3AmWnC1hm5S', '66', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(67, 'cipto.utomo@inacofood.com', '$2y$10$hWFk0crbF2IDq9POOLdX8OC8rAI7IT5of1qj9xmhScgZ0547UEDzK', '67', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(68, 'hadi@inacofood.com', '$2y$10$g7ocILjDmK5gezrz2Sy6.upNtpsYbPVqzM3skUT2MUF6nOouEiUIK', '68', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(69, 'naim.mustofa@inacofood.com', '$2y$10$b7IOZNMX9A4wEjc2B2pq8OQxGsuJ5uHmBDiog84wgUH7nn4vFtjoi', '69', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(70, 'bayu.defanza@inacofood.com', '$2y$10$Te3HtYDaPavtFZ.WfyanGOYoNkkxXqguD4b8p./QmE51t13dnFdj.', '70', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(71, 'erik.ramdhani@inacofood.com', '$2y$10$jMc4mEumF4MdmwDJohwnienJpkjW6nwAuWDlf1Vd.7X1kF1DMQPeG', '71', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(72, 'maria.seda@inacofood.com', '$2y$10$JrfBN7RUU4/WfwsgXlQIpOqFxb2FE1tN6TUYtbYvBEv9FGRfVFULW', '72', '2023-03-17 07:39:31', '2023-03-17 07:39:31'),
(73, 'Benny.handiman@inacofood.com', '$2y$10$WkIDYrTVfXZhAl88x80YmuZfjnZFOl7w09EmDWmuOnRFWx.dU0I.O', '73', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(74, 'handoko@inacofood.com', '$2y$10$xz7vVQ4aHZZjOr.KnxCKJ.ni6eAUg4HUm8C.waKKtJbhCiE3uMtTy', '74', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(75, 'syafrizal@inacofood.com', '$2y$10$BhDU8MUmqYLWzTx5CAvUquf.PQP/CcuJDP65Fl7cdoNwdPy0KQxP.', '75', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(76, 'Rido.fernando@inacofood.com', '$2y$10$OwkniVX101Jppnpf7h3srO03.LsE8vM4HWKqJJT//O56nGI3nLW2C', '76', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(77, 'Rizqi.oktaviani@inacofood.com', '$2y$10$s.aUdKEeVcwkA5iRHlgUIOGyX13T229wKSI0.6b/e28B6Ic8447aS', '77', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(78, 'Henro.rondonuwu@inacofood.com', '$2y$10$lZJQnj/AQKau0uoujV9Wlu57CFLjuB/f8uABhXfw/sFq3o5kXhS5u', '78', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(79, 'nurika.putri@inacofood.com', '$2y$10$RDZj4zMkPpwaX/EMDMJnmue0ZHwkCZfB8csQdlIZXnM1Xx3z4QKHa', '79', '2023-03-17 07:39:32', '2023-03-17 07:39:32'),
(80, 'zaky.rosyadi@inacofood.com', '$2y$10$Zm6xBLL.BopVnl1SUIyIrO/VOn94mwi3zDCppIh0M8RN1HITErkXu', '80', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(81, 'muhammad.hidayat@inacofood.com', '$2y$10$SqP1COiubk.Xe5n0F8W62.olTtBmioK/4uuYhdyMi5.krq8O/pUDW', '81', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(82, 'ari.zainul@inacofood.com', '$2y$10$18ZHjwkSX4lU.QEKXwP.NeFHRTmf1mjSpTxmoypn7iLfqOQU76RBy', '82', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(83, 'andri.rizky@inacofood.com', '$2y$10$7x775FnJl7kmsswJal4MwO5yKdE7sXRWXMRTRhfTUr3CsSnXQo4EW', '83', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(84, 'dimas.gusti@inacofood.com', '$2y$10$eEwz8zWgDhT6DpNoPFR3wOQzuiGZrMVjLnMs1PPBpLq7XWclRbYqe', '84', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(85, 'nirwanto@inacofood.com', '$2y$10$NyMHX3qNNknJTfCvCneHC.RpugMqJ1H6kqsBPnkCQzd.DOmfrOS5a', '85', '2023-03-17 07:39:33', '2023-03-17 07:39:33'),
(86, 'tivan.fitraniya@inacofood.com', '$2y$10$BPY8Jvort7gFblS4JmpQEOzK3JmzvSOc7LBvS2BfWTRkQUSOJe4Lq', '86', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(87, 'aderizky.kurniawan@inacofood.com', '$2y$10$icK.Iewdd.Wem6gO1clMROayVKCtiSl5aK/s1K9IDkP3qnaY89Bqm', '87', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(88, 'yully.fitriani@inacofood.com', '$2y$10$FTGicFcEpYox9LYP99P8Ren3WpyD4XtxgzNyuhJfUMojlgglSK6Hu', '88', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(89, 'firmansyah@inacofood.com', '$2y$10$OtbQAb.H7CCA1mn.4O3zouHokPAFHZT/TJjNj.HWVUzAbGmCbFOZ.', '89', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(90, 'amri.nurdinhaq@inacofood.com', '$2y$10$k/vZ9qLIQIR2JNO4dqhwXuKDQ2/Ra6jGcxK9436vzDgNxkv6c33eG', '90', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(91, 'andi.aspianto@inacofood.com', '$2y$10$16W1/3oewVmjBLso3Hx5re.lVLv2tBBYWMswEWc5.V6ZaoZoK8uDG', '91', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(92, 'erwin.sihombing@inacofood.com', '$2y$10$haVeYVYdwvcwLivb55.G4OK4iY4MALKieMcyKxOKnjAKyfyaCZ1w6', '92', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(93, 'hengky.hariadi@inacofood.com', '$2y$10$JoWlBT28ey/4phifuFrQtu3XFSvLmNqYdsu/YtveS6ZlIwnecWIfS', '93', '2023-03-17 07:39:34', '2023-03-17 07:39:34'),
(94, 'ardani@inacofood.com', '$2y$10$5z/K4Wpu6Beov8qjL.bKEu1moo45DABkILZe5zRxJFsUEocJIgyra', '94', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(95, 'yulianto.dwi@inacofood.com', '$2y$10$1r6BIREgZbtNKQUkWCs2/.8Mr32yvyvxLjXiyxNQpzJyXzEO28KHS', '95', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(96, 'muhammad.luqmanul@inacofood.com', '$2y$10$7gsd.krneSi2IK6B2S8OcuLLmWbB78WI8hGB9hlKQLZUBacNPxxO2', '96', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(97, 'bima.arya@inacofood.com', '$2y$10$HdMYOwQZtdpnC82yfzSyrOPe9Q00RXSJRpLcCT56Ouztkj8YCu5AW', '97', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(98, 'ahmad.muchlasin@inacofood.com', '$2y$10$X1/fzvevxrfll2DxRfCf6OKO4TC9zMkZ.D3mYHkQrr.y6UC8.OMEW', '98', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(99, 'taufik.eka@inacofood.com', '$2y$10$w1Zn.JpM5x3mGOOHElkcH.N0jhk2/UlEdFt2OVrbINbKd.8v.qd12', '99', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(100, 'nanda.trisa@inacofood.com', '$2y$10$nmPQHDrp7jVQJQ4y6F8nYumGfKp3.j0PZ031C7lTp.4200H38IqTC', '100', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(101, 'hary.junova@inacofood.com', '$2y$10$sZFtdbd081Yd3vmFTsKnLe8/js/.9cDPZT3bV4aEQTpzXE7eSOToy', '101', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(102, 'ifan.torza@inacofood.com', '$2y$10$..o8wo4b5GdjXfKSyJgRcOjMfxABuhrTj6ju3Kfw20ivpW60hbgre', '102', '2023-03-17 07:39:35', '2023-03-17 07:39:35'),
(103, 'oki.rustandi@inacofood.com', '$2y$10$cMXE1KA5DMLGc43I2LH.sOgnqtdUL6Y3awisSmNqtxi.dyQ/umpW2', '103', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(104, 'moch.rizki@inacofood.com', '$2y$10$zzkIWwObcXBaMKQGa94vd.sdMgaQTCtOnKrh9mXl0Ej1C2N9YDMSe', '104', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(105, 'purnomo@inacofood.com', '$2y$10$NL1tkNUnBbhKvx94rVfH4eEX/bw3ok3Fm8vkJxje9061LxfmLn4ey', '105', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(106, 'rudi.iswandi@inacofood.com', '$2y$10$WQfDyaJQrLaidtuQhCSp2OurcX/xDKfkgSHMP2wUB5GSdNEZPeh8e', '106', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(107, 'ahmad.efendi@inacofood.com', '$2y$10$3ikKF7TvcttNl3mlBqyBo.RT7nO7waK2vi8WT595Iz3uHufpI58OG', '107', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(108, 'novan.atyanto@inacofood.com', '$2y$10$.TW1.J7Kc9pJZXpS7UjdhujR6uw61IrgVvt7ZVNRNAIH2OuzFBP6K', '108', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(109, 'fajar.alfahri@inacofood.com', '$2y$10$OnYLOpHzmfno8/M7AWSvFe6w/1vGw1XyW9cTYjtcQYUz76JxZA0Ba', '109', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(110, 'dwi.prasetyo@inacofood.com', '$2y$10$B2MOJ4jMy6Jht25dGiMXy.vFxN.hGzcwANy7rrExodtpFYXhx61JO', '110', '2023-03-17 07:39:36', '2023-03-17 07:39:36'),
(111, 'yadi.firdaus@inacofood.com', '$2y$10$qrfqX/b4AY/erlX8XweV3O//NBgBZnk8a.7bl0EqHDVhow6EqqvoO', '111', '2023-03-17 07:39:37', '2023-03-17 07:39:37'),
(112, 'marjan.lahasim@inacofood.com', '$2y$10$00WXEp1EpQkHOQyWFWs3WurpZbJBCrh/MZvUsfn8yFhDsvMfGzsWe', '112', '2023-03-17 07:39:37', '2023-03-17 07:39:37'),
(113, 'bayu.aditiya@inacofood.com', '$2y$10$ojHA3FZT6wT.kcCkIPjrduZ607dUjyJFVgPCbYc/qGl7c.KQvcM0G', '113', '2023-03-17 07:39:37', '2023-03-17 07:39:37'),
(114, 'sadikun.wiratno@inacofood.com', '$2y$10$8XuGzLS1g91PI.K.8m2vUuREuFRV3Vwo9M1IWeUR.supWGhiQZ3um', '114', '2023-03-17 07:39:37', '2023-03-17 07:39:37'),
(115, 'laurensius.agustiawan@inacofood.com', '$2a$12$lLtzw9tzqyP7iMhWiqgHWOyizxMvq/SPDE2AmS/dNusBL4L/CXjI2', '115', '2023-03-23 11:15:43', NULL),
(121, 'aditya.welly@inacofood.com', '$2a$12$VbkEvzn6sNF1fO3k.i25q.VGBpMnUNuMS0/kIJZrdQEfsbL2/aMQe', '121', '2023-03-23 13:47:02', NULL),
(122, 'manajerDivisi@inacofood.com', '$2a$12$VbkEvzn6sNF1fO3k.i25q.VGBpMnUNuMS0/kIJZrdQEfsbL2/aMQe', '122', '2023-03-23 13:47:02', NULL),
(123, 'direksiDivisi@inacofood.com', '$2a$12$zrSpkOtvft5wlCa63yBhNufsKFGzXTfqEYPBsCcN8gqMjmGz3bHiu', '123', '2023-03-23 14:01:38', NULL),
(124, 'manajerHCM@inacofood.com', '$2a$12$irTXH3.Ke.vNunsyOHKBtuBciGT25MG9gPp/pFYiSMfJxZEqbgvva', '124', '2023-03-24 08:19:58', NULL),
(125, 'direksiHCM@inacofood.com', '$2a$12$irTXH3.Ke.vNunsyOHKBtuBciGT25MG9gPp/pFYiSMfJxZEqbgvva', '125', '2023-03-24 08:19:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fpk_requests`
--
ALTER TABLE `fpk_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `fpk_requests`
--
ALTER TABLE `fpk_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
