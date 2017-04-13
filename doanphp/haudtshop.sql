-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2016 at 04:36 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haudtshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'haudt', 'da9a84a530d1cacb1139a2dd9caf4f5b');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Váy dự tiệc'),
(2, 'Đầm công sở'),
(3, 'Đầm dạo phố'),
(4, 'Đồ thể thao'),
(5, 'Áo khoác'),
(16, 'Do bay');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `contents` text,
  `created` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `title`, `contents`, `created`, `status`) VALUES
(1, 'ha', 'ha@gmail.com', 'ha', 'Thắc mắc về giá của sản phẩm ', '2016-07-21 15:43:45', 1),
(2, 'adad', 'a@gmail.com', 'ádad', 'Thắc mắc về giá của sản phẩm ', '2016-07-21 15:44:03', 1),
(8, 'chien', 'chiennt@student.passerellesnumeriques.org', 'I have problem about service of shop', '	I have buy some product \r\n                        ', '2016-08-10 18:11:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total` float DEFAULT NULL,
  `dateorder` datetime DEFAULT NULL,
  `status` tinyint(2) DEFAULT '0',
  `idUser` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `dateorder`, `status`, `idUser`) VALUES
(68, 750000, '2016-07-29 10:54:04', 0, 47),
(69, 800000, '2016-07-29 11:04:18', 0, 47),
(70, 791413, '2016-07-29 14:04:29', 1, 49),
(71, 791413, '2016-07-29 14:04:31', 0, 49),
(72, 750000, '2016-07-29 16:20:22', 1, 49),
(73, 950000, '2016-07-29 16:22:14', 1, 49),
(74, 1150000, '2016-07-29 16:25:30', 1, 49),
(75, 750000, '2016-07-29 16:32:08', 1, 49),
(76, 350000, '2016-07-29 16:36:05', 0, 49),
(77, 750000, '2016-07-29 16:38:17', 1, 49),
(78, 700000, '2016-07-29 16:38:42', 1, 49),
(79, 400000, '2016-07-29 16:39:37', 0, 49),
(80, 2250000, '2016-07-29 16:58:48', 0, 49),
(81, 750000, '2016-07-29 17:38:19', 1, 49),
(82, 750000, '2016-07-29 17:40:02', 0, 49),
(83, 1500000, '2016-07-29 17:42:08', 0, 50),
(84, 750000, '2016-08-01 07:40:40', 0, 51),
(85, 1100000, '2016-08-01 07:43:32', 1, 49),
(86, 750000, '2016-08-01 07:44:53', 0, 49),
(87, 750000, '2016-08-01 07:47:05', 0, 49),
(88, 400000, '2016-08-01 07:48:29', 0, 49),
(89, 750000, '2016-08-01 07:50:34', 0, 49),
(90, 750000, '2016-08-01 07:52:40', 0, 49),
(91, 750000, '2016-08-01 07:59:15', 0, 49),
(92, 950000, '2016-08-01 07:59:52', 0, 49),
(93, 750000, '2016-08-01 08:18:19', 0, 52),
(94, 700000, '2016-08-01 08:20:21', 0, 53),
(95, 1100000, '2016-08-01 08:29:39', 0, 54),
(96, 200000, '2016-08-01 08:30:38', 0, 55),
(97, 3400000, '2016-08-01 08:44:20', 0, 55),
(98, 750000, '2016-08-01 08:45:57', 0, 56),
(99, 1150000, '2016-08-01 08:57:05', 0, 57),
(100, 1150000, '2016-08-01 09:08:04', 0, 58),
(101, 600000, '2016-08-01 09:33:55', 0, 49),
(102, 750000, '2016-08-01 09:38:31', 0, 49),
(103, 750000, '2016-08-01 09:38:42', 0, 49),
(104, 750000, '2016-08-01 09:49:14', 0, 49),
(105, 750000, '2016-08-01 09:58:49', 0, 49),
(106, 400000, '2016-08-01 10:00:53', 0, 49),
(107, 540000, '2016-08-01 10:01:15', 0, 49),
(108, 280000, '2016-08-01 10:01:46', 0, 49),
(109, 400000, '2016-08-01 10:01:59', 0, 49),
(110, 1150000, '2016-08-01 10:07:13', 0, 59),
(111, 400000, '2016-08-01 10:16:55', 0, 60),
(112, 750000, '2016-08-01 10:33:50', 0, 49),
(113, 750000, '2016-08-01 10:35:00', 0, 49),
(114, 750000, '2016-08-01 10:36:16', 0, 49),
(115, 400000, '2016-08-01 10:37:17', 0, 49),
(116, 750000, '2016-08-01 10:54:01', 0, 49),
(117, 1150000, '2016-08-02 01:15:08', 0, 61),
(118, 640000, '2016-08-02 01:19:30', 0, 62),
(119, 990000, '2016-08-02 01:40:10', 0, 63),
(120, 750000, '2016-08-02 01:43:14', 0, 64),
(121, 750000, '2016-08-02 02:36:34', 0, 64),
(122, 2250000, '2016-08-02 02:41:19', 0, 64),
(123, 1550000, '2016-08-02 02:44:48', 0, 64),
(124, 1150000, '2016-08-02 02:48:31', 0, 65),
(125, 1450000, '2016-08-02 03:10:45', 0, 66),
(126, 889999, '2016-08-02 09:27:52', 0, 67),
(127, 680000, '2016-08-02 09:28:53', 0, 49),
(128, 840000, '2016-08-02 09:56:32', 0, 68),
(129, 750000, '2016-08-02 10:06:48', 0, 69),
(130, 750000, '2016-08-02 10:36:28', 0, 70),
(131, 400000, '2016-08-02 12:20:43', 0, 71),
(132, 950000, '2016-08-03 01:20:44', 0, 72),
(133, 750000, '2016-08-03 11:51:20', 0, 49),
(134, 350000, '2016-08-04 09:49:24', 0, 73),
(135, 750000, '2016-08-04 09:51:03', 0, 74),
(136, 1100000, '2016-08-04 09:56:51', 0, 49),
(137, 650000, '2016-08-04 09:57:44', 0, 49),
(138, 600000, '2016-08-04 09:58:34', 0, 75),
(139, 350000, '2016-08-04 10:10:50', 0, 76),
(140, 1500000, '2016-08-04 10:19:57', 0, 64),
(141, 739999, '2016-08-05 01:28:24', 0, 77),
(142, 739999, '2016-08-05 01:28:52', 0, 78),
(143, 1040000, '2016-08-05 01:31:24', 0, 79),
(144, 1040000, '2016-08-05 01:38:14', 0, 80),
(145, 540001, '2016-08-05 01:39:05', 0, 81),
(146, 139999, '2016-08-05 09:41:50', 0, 49),
(147, 139999, '2016-08-05 09:41:51', 0, 49),
(148, 679998, '2016-08-09 10:39:59', 0, 47),
(149, 439999, '2016-08-09 10:43:47', 0, 47),
(150, 539999, '2016-08-09 10:57:00', 0, 47),
(151, 297002, '2016-08-10 07:13:52', 0, 82);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `saleprice` float NOT NULL DEFAULT '0',
  `created` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `sizeS` int(11) DEFAULT '0',
  `sizeM` int(11) DEFAULT '0',
  `sizeL` int(11) DEFAULT '0',
  `red` int(11) DEFAULT '0',
  `white` int(11) DEFAULT '0',
  `black` int(11) DEFAULT '0',
  `purple` int(11) DEFAULT '0',
  `pink` int(11) DEFAULT '0',
  `green` int(11) DEFAULT '0',
  `keyword` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `image`, `description`, `price`, `saleprice`, `created`, `quantity`, `sizeS`, `sizeM`, `sizeL`, `red`, `white`, `black`, `purple`, `pink`, `green`, `keyword`, `status`) VALUES
(8, 'Đầm ren hoa nổi in 3d', 1, '229_Dam_ren_hoa_noi_in_3d_cao_cap_mau_xanh_a8622.jpg', '', 150000, 0, '2016-07-14', 3, 0, 0, 1, 0, 0, 0, 0, 0, 0, '', 0),
(10, 'Đầm ôm in hóa súng trắng ', 1, '223_Dam_om_in_hoa_sung_trang_tay_lo_a6784.jpg', '', 250000, 0, '2016-07-14', 5, 0, 0, 0, 0, 0, 1, 1, 1, 1, '', 0),
(11, 'Đầm maxi hau dây kẹp nịt', 1, '218_Dam_maxi_hai_day_kem_nit_b0878.jpg', '', 400000, 0, '2016-07-14', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(12, 'Đầm dự tiệc tà xéo hồng', 1, '200_Dam_du_tiec_dun_eo_ta_xeo_mau_hong_cam_a8930.jpg', '', 450000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(13, 'Đầm công sở vắt xéo', 2, '280_Dam_cong_so_vat_xeo_mau_xanh_a1558.jpg', '', 280000, 0, '2016-07-14', 2, 1, 0, 0, 0, 0, 0, 1, 0, 0, '', 0),
(14, 'Đầm công sở tay phồng', 2, '268_Dam_cong_so_tay_phong_thoi_trang_a7985.jpg', '', 230000, 0, '2016-07-14', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(15, 'Đầm  peplum kèm hoa', 2, '261_Dam_cong_so_peplum_kem_hoa_b0007.jpg', '', 250000, 0, '2016-07-14', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(16, 'Đầm công sở tay dài cổ V', 2, '241_Dam_cong_so_tay_dai_nep_co_v_a8361.jpg', '', 400000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(17, 'Peplum màu xanh', 2, '240_Dam_cong_so_peplum_mau_xanh_b0312.jpg', '', 400000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(18, ' Peplum cách diều', 2, '239_Dam_cong_so_peplum_cach_dieu_b0314.jpg', '', 400000, 0, '2016-07-14', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(19, 'Đầm công sở thời trang', 2, '228_Dam_cong_so_phoi_bi_thoi_trang_a9789.jpg', '', 460000, 0, '2016-07-14', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(20, 'Đầm ôm body tay lỡ in 3d', 2, '219_Dam_om_body_tay_lo_in_3d_a7122.jpg', '', 250000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(21, ' Đầm Hồng vắt xéo', 2, '217_Dam_cong_so_mau_hong_vat_xeo_la_mat_md1315.jpg', '', 200000, 0, '2016-07-14', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(22, 'Đầm dự tiệc cá tính', 1, '27_Dam_om_body_phoi_day_keo_noi_b1169.jpg', '', 200000, 20, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(23, 'Đầm công sở cổ v xẻ tà', 2, '201_Dam_cong_so_co_v_xe_ta_a9781.jpg', '', 280000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(24, 'Đầm công sở peplum  đỏ', 2, '200_Dam_cong_so_peplum_mau_do_a8269.jpg', '', 280000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(25, 'Đầm dạo phố thời trang', 3, '231_Set_ao_croptop_co_sen_chan_vay_mau_xanh_b1287.jpg', '', 180000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(26, 'Đầm maxi hoa lá xanh đen', 3, '223_Dam_maxi_hoa_la_xanh_den_a9362.jpg', '', 450000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(27, 'Đầm dạo phố viền sọc ', 3, '210_Dam_dao_pho_vien_soc_xinh_xan_md1413.jpg', '', 300000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(28, 'Đầm sơ mi xòe màu xám', 3, '203_Dam_so_mi_sat_nach_xoe_mau_xam_b1233.jpg', '', 200000, 0, '2016-07-14', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(29, 'Đầm suông màu trắng', 3, '194_Dam_suong_mau_trang_co_xep_ly_b0228.jpg', '', 600000, 0, '2016-07-14', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(30, 'Đầm suông màu đen', 3, '194_Dam_suong_mau_den_co_xep_ly_b0229.jpg', '', 200000, 0, '2016-07-14', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(31, 'Đầm xếp tầng sành điệu', 3, '181_Dam_tre_vai_kieu_xep_tang_sanh_dieu_b1137.jpg', '', 250000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(32, 'Đầm dạo phố màu xanh', 3, '164_Dam_thuy_thu_dao_pho_mau_xanh_b1236.jpg', '', 200000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(33, 'Đầm xoè họa tiết tím', 3, '159_Dam_xoe_duoi_tom_hoa_tiet_tim_a9664.jpg', '', 1800000, 0, '2016-07-14', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(34, 'Đầm sơ mi xòe  màu đỏ', 3, '139_Dam_so_mi_sat_nach_xoe_mau_do_b1234.jpg', '', 500000, 0, '2016-07-14', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(35, 'Set áo chân váy màu cam', 3, '76_Set_ao_croptop_co_sen_chan_vay_mau_cam_b1286.jpg', '', 350000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(36, 'Đầm xèo phối ren', 3, '63_Dam_xoe_phoi_ren_xinh_xan_mau_trang_a1229.jpg', '', 600000, 10, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(37, 'Bộ đồ số 7', 3, '300_Bo_do_lung_so_7_mau_trang_b1181.jpg', '', 400000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(38, 'Bộ đồ kiểu dáng đẹp  trắng', 4, '299_Bo_do_ngan_xe_co_mau_trang_b1295.jpg', '', 1500000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(39, 'Bộ đồ thể thao sọc ngang', 4, '276_Bo_do_the_thao_soc_ngang_mau_do_b1246.jpg', '', 180000, 0, '2016-07-14', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(40, 'Bộ đồ xanh kèm áo khoác ', 4, '274_Bo_do_the_thao_mau_xanh_kem_ao_khoac_a1201.jpg', '', 400000, 40, '2016-07-14', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(41, 'Bộ đồ goodtime màu hồng', 4, '251_Bo_do_the_thao_goodtime_mau_hong_b1298.jpg', '', 400000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(42, 'Bồ đồ thể thao đen', 4, '228_Bo_do_the_thao_in_black_b1243.jpg', '', 400000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(43, 'Bộ đồ dj thơi trang', 4, '228_Bo_do_dj_thoi_trang_b1171.jpg', '', 400000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(44, 'Bộ đồ thể thao  xanh', 4, '214_Bo_do_the_thao_goodtime_mau_xanh_b1299.jpg', '', 400000, 0, '2016-07-14', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(45, 'Bộ đồ  smile màu đỏ', 4, '22_Bo_do_lung_so_7_mau_do_b1180.jpg', '', 400000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(46, 'Áo vest hai lớp màu xanh', 5, '282_Ao_vest_hai_lop_mau_xanh_mot_nut_co_cach_dieu_av130.jpg', '', 400000, 0, '2016-07-14', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(47, 'Áo khoác kaki ', 5, '278_Ao_khoac_kaki_nu_tui_vuong_mau_den_b0937.jpg', '', 400000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(48, 'Áo khoác kaki phối ren màu đỏ', 5, '271_Ao_khoac_kaki_phoi_ren_noi_mau_do_do_a7661.jpg', '', 400000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(49, 'Áo khoác dạ xéo màu hồng', 5, '270_Ao_khoac_da_tui_xeo_mau_hong_a8818.jpg', '', 300000, 0, '2016-07-14', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(50, 'Áo khoác  form chữ a', 5, '262_Ao_khoac_kaki_xanh_den_form_chu_a_a8212.jpg', '', 400000, 0, '2016-07-14', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(51, 'Áo khoác da màu đen', 5, '257_Ao_khoac_da_nu_mau_den_b0814.jpg', '', 400000, 30, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(52, 'Áo khoác kèm thắt lưng', 5, '254_Ao_khoac_kem_that_lung_mau_xam_a7347.jpg', '', 400000, 10, '2016-07-14', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(53, 'Áo khoác Số', 5, '31_Ao_khoac_so_23_a7346.jpg', '', 200000, 50, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(54, 'Áo khoác kaki màu đen', 5, '237_Ao_khoac_kaki_mau_den_phoi_day_keo_a8665.jpg', '', 450000, 0, '2016-07-14', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(55, 'Áo khoác màu xám', 5, '223_Ao_khoac_cap_ni_mau_xam_mk556.jpg', '', 400000, 0, '2016-07-14', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(57, 'Áá khoác jean thời trang', 5, '192_Ao_khoac_jean_thoi_trang_a8624.jpg', '', 200000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(58, 'Áo khoác hai lớp màu kem', 5, '43_Ao_khoac_kaki_hai_lop_mau_kem_mk551.jpg', '', 400000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(59, 'Áo khoác đen tay 3 nút', 5, '174_Ao_khoac_mau_den_tay_3_nut_mk089.jpg', '', 300000, 0, '2016-07-14', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(60, 'Áo khoác jean da ', 5, '170_Ao_khoac_jean_dinh_da_thoi_trang_a9241.jpg', '', 400000, 0, '2016-07-14', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(62, 'Đầm ôm phối nút', 1, '63_Dam_om_body_mau_do_phoi_nut_a9497.jpg', '', 400000, 0, '2016-07-14', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(68, 'Váy dự tiệc', 2, '158_Quan_nu_han_quoc_phong_cach_mau_do_mq046.jpg', '', 300000, 1, '2016-07-26', 2, 0, 1, 1, 1, 0, 0, 1, 0, 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id_product` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id_product`, `id_order`, `quantity`) VALUES
(62, 150, 1),
(68, 150, 1),
(68, 151, 1),
(69, 151, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`, `phone`, `address`, `created`, `role`) VALUES
(47, 'linhdt', 'linhdt', 'b73b9176e46b5ad8d320c51ebe8fa071', 'linhdt@gmail.com', '1647391035', 'Gio Việt -Gio Linh-Quảng Trị', NULL, 1),
(48, 'dungntn', '', '', 'dungntn@gmail.com', '167459863', 'Hải Lăng-Quảng Trị', NULL, 0),
(49, 'dungntn', 'dungntn', 'cebb4d7e5a471087c6c90b9d8b874387', 'dungntn@gmail.com', '1764529876', 'Hải Lăng-Quảng Trị', NULL, 1),
(50, 'huyen@gmail.com', '', '', 'huyen@gmail.com', '1468978789', 'Da Nang', NULL, 0),
(51, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(52, 'trieu', '', '', 'trieu@gmail.com', '1646212321', 'Gio Binh-Gio Linh', NULL, 0),
(53, 'trieu', '', '', 'haudt96@gmail.com', '1646212321', 'Gio Binh-Gio Linh-Quang Tri', NULL, 0),
(54, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(55, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(56, 'hau', '', '', 'haudt96@gmail.com', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(57, 'haudt', '', '', 'haudt96@gmail.com', '1674249594', '152/21 Ly Tu Trong/ Hai Chau/ Da nang', NULL, 0),
(58, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(59, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(60, 'a', '', '', 'chiennt@gmail.com', '987424567', 'Hồ Chí Minh', NULL, 0),
(61, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(62, 'a', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(63, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(64, 'tuanh', 'tuanh', 'b33789fa69c9594b091acb09b8cd5de5', 'tuanh@gmail.com', '1697424954', 'Huế', NULL, 1),
(65, 'hau', '', '', 'haudt96@gmail.com', '1674249594', 'Hau@1012', NULL, 0),
(66, 'hau', '', '', 'chiennt@student.passerellesnumeriques.org', '16502423', 'HCM', NULL, 0),
(67, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(68, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(69, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(70, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(71, 'a', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Lin', NULL, 0),
(72, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(73, 'hau', '', '', 'a@gmail.com', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(74, 'hau', '', '', 'a@gmail.com', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(75, 'hau', '', '', 'haudt96@gmail.com', '167424959', 'haudt96@gmail.com', NULL, 0),
(76, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(77, 'hau', '', '', 'haudt96@gmail.com', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(78, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(79, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(80, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(81, 'hau', '', '', 'haudt@student.passerellesnumeriques.org', '167424959', 'Gio viet-Gio Linh', NULL, 0),
(82, 'Linh', '', '', 'haudt96@gmail.com', '167424959', 'Gio viet-Gio Linh', NULL, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_groupby_idorder`
--
CREATE TABLE `v_groupby_idorder` (
`idOrder` int(11)
,`status` tinyint(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_order_list`
--
CREATE TABLE `v_order_list` (
`idOrder` int(11)
,`fullname` varchar(50)
,`phone` varchar(50)
,`email` varchar(50)
,`idUser` int(11)
,`address` varchar(45)
,`idProduct` int(11)
,`nameProduct` varchar(255)
,`price` float
,`saleprice` float
,`quantity` int(11)
,`status` tinyint(2)
,`dateOrder` datetime
);

-- --------------------------------------------------------

--
-- Structure for view `v_groupby_idorder`
--
DROP TABLE IF EXISTS `v_groupby_idorder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_groupby_idorder`  AS  select `orders`.`id` AS `idOrder`,`orders`.`status` AS `status` from (((`orders` join `users` on((`orders`.`idUser` = `users`.`id`))) join `product_order` on((`product_order`.`id_order` = `orders`.`id`))) join `products` on((`product_order`.`id_product` = `products`.`id`))) group by `orders`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `v_order_list`
--
DROP TABLE IF EXISTS `v_order_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_order_list`  AS  select `orders`.`id` AS `idOrder`,`users`.`fullname` AS `fullname`,`users`.`phone` AS `phone`,`users`.`email` AS `email`,`users`.`id` AS `idUser`,`users`.`address` AS `address`,`products`.`id` AS `idProduct`,`products`.`name` AS `nameProduct`,`products`.`price` AS `price`,`products`.`saleprice` AS `saleprice`,`product_order`.`quantity` AS `quantity`,`orders`.`status` AS `status`,`orders`.`dateorder` AS `dateOrder` from (((`orders` join `users` on((`orders`.`idUser` = `users`.`id`))) join `product_order` on((`product_order`.`id_order` = `orders`.`id`))) join `products` on((`product_order`.`id_product` = `products`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_OrdersUser_idx` (`idUser`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-category-product_idx` (`category_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD KEY `fk_product_order_idx` (`id_product`),
  ADD KEY `fk_orders_product_idx` (`id_order`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
