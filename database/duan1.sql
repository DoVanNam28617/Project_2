-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 12:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dia_diem`
--

CREATE TABLE `dia_diem` (
  `id_dd` int(11) NOT NULL,
  `ten_dd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dia_diem`
--

INSERT INTO `dia_diem` (`id_dd`, `ten_dd`) VALUES
(1, 'Miền Bắc'),
(2, 'Miền Trung'),
(3, 'Miền Nam');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `id_sp`, `anh`) VALUES
(339, 298, 'p-2.jpg'),
(340, 298, 'p-3.jpg'),
(341, 298, 'p-4.jpg'),
(342, 298, 'p-5.jpg'),
(343, 298, 'p-6.jpg'),
(344, 299, 'p-2.jpg'),
(345, 299, 'p-3.jpg'),
(346, 299, 'p-4.jpg'),
(347, 299, 'p-5.jpg'),
(348, 299, 'p-6.jpg'),
(354, 301, 'p-23.jpg'),
(355, 301, 'p-24.jpg'),
(356, 301, 'p-25.jpg'),
(357, 301, 'p-26.jpg'),
(358, 301, 'p-27.jpg'),
(359, 302, 'p-23.jpg'),
(360, 302, 'p-24.jpg'),
(361, 302, 'p-25.jpg'),
(362, 302, 'p-26.jpg'),
(363, 302, 'p-27.jpg'),
(364, 303, 'p-23.jpg'),
(365, 303, 'p-24.jpg'),
(366, 303, 'p-25.jpg'),
(367, 303, 'p-26.jpg'),
(368, 303, 'p-27.jpg'),
(369, 304, 'p-23.jpg'),
(370, 304, 'p-24.jpg'),
(371, 304, 'p-25.jpg'),
(372, 304, 'p-26.jpg'),
(373, 304, 'p-27.jpg'),
(374, 305, 'p-23.jpg'),
(375, 305, 'p-24.jpg'),
(376, 305, 'p-25.jpg'),
(377, 305, 'p-26.jpg'),
(378, 305, 'p-27.jpg'),
(379, 306, 'p-23.jpg'),
(380, 306, 'p-24.jpg'),
(381, 306, 'p-25.jpg'),
(382, 306, 'p-26.jpg'),
(383, 306, 'p-27.jpg'),
(384, 307, 'p-23.jpg'),
(385, 307, 'p-24.jpg'),
(386, 307, 'p-25.jpg'),
(387, 307, 'p-26.jpg'),
(388, 307, 'p-27.jpg'),
(389, 308, 'p-23.jpg'),
(390, 308, 'p-24.jpg'),
(391, 308, 'p-25.jpg'),
(392, 308, 'p-26.jpg'),
(393, 308, 'p-27.jpg'),
(394, 309, 'p-23.jpg'),
(395, 309, 'p-24.jpg'),
(396, 309, 'p-25.jpg'),
(397, 309, 'p-26.jpg'),
(398, 309, 'p-27.jpg'),
(399, 310, 'p-23.jpg'),
(400, 310, 'p-24.jpg'),
(401, 310, 'p-25.jpg'),
(402, 310, 'p-26.jpg'),
(403, 310, 'p-27.jpg'),
(404, 311, 'p-23.jpg'),
(405, 311, 'p-24.jpg'),
(406, 311, 'p-25.jpg'),
(407, 311, 'p-26.jpg'),
(408, 311, 'p-27.jpg'),
(409, 312, 'p-23.jpg'),
(410, 312, 'p-24.jpg'),
(411, 312, 'p-25.jpg'),
(412, 312, 'p-26.jpg'),
(413, 312, 'p-27.jpg'),
(414, 313, 'p-23.jpg'),
(415, 313, 'p-24.jpg'),
(416, 313, 'p-25.jpg'),
(417, 313, 'p-26.jpg'),
(418, 313, 'p-27.jpg'),
(419, 314, 'p-23.jpg'),
(420, 314, 'p-24.jpg'),
(421, 314, 'p-25.jpg'),
(422, 314, 'p-26.jpg'),
(423, 314, 'p-27.jpg'),
(424, 315, 'p-23.jpg'),
(425, 315, 'p-24.jpg'),
(426, 315, 'p-25.jpg'),
(427, 315, 'p-26.jpg'),
(428, 315, 'p-27.jpg'),
(429, 316, 'p-23.jpg'),
(430, 316, 'p-24.jpg'),
(431, 316, 'p-25.jpg'),
(432, 316, 'p-26.jpg'),
(433, 316, 'p-27.jpg'),
(434, 317, 'p-23.jpg'),
(435, 317, 'p-24.jpg'),
(436, 317, 'p-25.jpg'),
(437, 317, 'p-26.jpg'),
(438, 317, 'p-27.jpg'),
(439, 318, 'p-23.jpg'),
(440, 318, 'p-24.jpg'),
(441, 318, 'p-25.jpg'),
(442, 318, 'p-26.jpg'),
(443, 318, 'p-27.jpg'),
(444, 319, 'd-1.jpg'),
(445, 319, 'd-2.jpg'),
(446, 319, 'd-3.jpg'),
(447, 319, 'd-4.jpg'),
(448, 319, 'd-5.jpg'),
(449, 320, 'd-6.jpg'),
(450, 320, 'd-7.jpg'),
(451, 320, 'd-8.jpg'),
(452, 320, 'd-9.jpg'),
(453, 320, 'd-10.jpg'),
(454, 321, 'd-6.jpg'),
(455, 321, 'd-7.jpg'),
(456, 321, 'd-8.jpg'),
(457, 321, 'd-9.jpg'),
(458, 321, 'd-10.jpg'),
(459, 322, 'd-6.jpg'),
(460, 322, 'd-7.jpg'),
(461, 322, 'd-8.jpg'),
(462, 322, 'd-9.jpg'),
(463, 322, 'd-10.jpg'),
(464, 323, 'd-6.jpg'),
(465, 323, 'd-7.jpg'),
(466, 323, 'd-8.jpg'),
(467, 323, 'd-9.jpg'),
(468, 323, 'd-10.jpg'),
(469, 324, 'd-6.jpg'),
(470, 324, 'd-7.jpg'),
(471, 324, 'd-8.jpg'),
(472, 324, 'd-9.jpg'),
(473, 324, 'd-10.jpg'),
(474, 325, 'd-6.jpg'),
(475, 325, 'd-7.jpg'),
(476, 325, 'd-8.jpg'),
(477, 325, 'd-9.jpg'),
(478, 325, 'd-10.jpg'),
(479, 326, 'd-6.jpg'),
(480, 326, 'd-7.jpg'),
(481, 326, 'd-8.jpg'),
(482, 326, 'd-9.jpg'),
(483, 326, 'd-10.jpg'),
(484, 327, 'd-6.jpg'),
(485, 327, 'd-7.jpg'),
(486, 327, 'd-8.jpg'),
(487, 327, 'd-9.jpg'),
(488, 327, 'd-10.jpg'),
(489, 328, 'd-6.jpg'),
(490, 328, 'd-7.jpg'),
(491, 328, 'd-8.jpg'),
(492, 328, 'd-9.jpg'),
(493, 328, 'd-10.jpg'),
(494, 329, 'd-6.jpg'),
(495, 329, 'd-7.jpg'),
(496, 329, 'd-8.jpg'),
(497, 329, 'd-9.jpg'),
(498, 329, 'd-10.jpg'),
(505, 336, 'p-15.jpg'),
(506, 336, 'p-16.jpg'),
(507, 336, 'p-17.jpg'),
(508, 336, 'p-18.jpg'),
(511, 340, 'p-15.jpg'),
(512, 340, 'p-16.jpg'),
(513, 340, 'p-17.jpg'),
(514, 340, 'p-18.jpg'),
(515, 340, 'p-19.jpg'),
(516, 341, ''),
(517, 342, ''),
(518, 343, ''),
(519, 344, 'p-14.jpg'),
(520, 344, 'p-15.jpg'),
(521, 344, 'p-16.jpg'),
(522, 344, 'p-17.jpg'),
(523, 344, 'p-18.jpg'),
(524, 345, ''),
(525, 300, 'p-1.jpg'),
(526, 300, 'p-2.jpg'),
(527, 300, 'p-3.jpg'),
(528, 300, 'p-4.jpg'),
(529, 300, 'p-5.jpg'),
(530, 346, ''),
(531, 347, ''),
(532, 348, 'p-23.jpg'),
(533, 348, 'p-24.jpg'),
(534, 348, 'p-25.jpg'),
(535, 348, 'p-26.jpg'),
(536, 348, 'p-27.jpg'),
(537, 349, 'd-6.jpg'),
(538, 349, 'd-7.jpg'),
(539, 349, 'd-8.jpg'),
(540, 349, 'd-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vai_tro` tinyint(4) NOT NULL,
  `kich_hoat` tinyint(4) NOT NULL,
  `so_dth` int(11) NOT NULL,
  `coin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `ho_ten`, `img`, `mat_khau`, `email`, `vai_tro`, `kich_hoat`, `so_dth`, `coin`) VALUES
(1, 'mainthinguyen', 'icon2.jpg', '2003', 'dovannam04052003@gmail.com', 0, 0, 686974626, 10000),
(2, 'dovannam', 'icon3.jpg', '0503', 'namdvph28617@fpt.edu.vn', 10, 0, 989698698, 2900),
(3, 'vuanhba', 'icon4.jpg', '123', 'anhba@gmail.com', 0, 0, 64647363, 500),
(4, 'vuongquangminh', 'icon5.jpg', '678', 'minhvqph27791@fpt.edu.vn', 0, 0, 73457438, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `lich_su_coin`
--

CREATE TABLE `lich_su_coin` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `so_coin` int(11) NOT NULL,
  `ngay_nap` date NOT NULL DEFAULT current_timestamp(),
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lich_su_coin`
--

INSERT INTO `lich_su_coin` (`id`, `id_kh`, `anh`, `so_coin`, `ngay_nap`, `trang_thai`) VALUES
(6, 15, 'icon1.jpg', 1000, '2022-11-26', 1),
(9, 45, 'icon2.jpg', 500, '2022-11-26', 1),
(10, 15, 'icon4.jpg', 300, '2022-11-26', 1),
(11, 15, 'icon2.jpg', 1000, '2022-11-28', 1),
(12, 15, 'icon1.jpg', 1000, '2022-11-28', 1),
(13, 15, 'icon3.jpg', 1000, '2022-11-28', 1),
(14, 15, 'icon2.jpg', 1000, '2022-11-28', 1),
(15, 15, 'icon3.jpg', 300, '2022-11-28', 1),
(16, 15, 'icon3.jpg', 500, '2022-11-28', 1),
(19, 15, 'icon4.jpg', 1000, '2022-11-28', 1),
(20, 15, 'icon5.jpg', 2000, '2022-11-28', 1),
(21, 15, 'anh8 - Copy.jpg', 1000, '2022-11-30', 1),
(22, 15, 'icon3.jpg', 2000, '2022-12-03', 1),
(23, 2, 'p-13.jpg', 500, '2022-12-05', 1),
(24, 2, 'p-12.jpg', 2000, '2022-12-07', 1),
(25, 4, 'p-14.jpg', 2000, '2022-12-07', 1),
(26, 4, 'p-14.jpg', 2000, '2022-12-07', 1),
(27, 2, 'p-14.jpg', 2000, '2022-12-11', 1),
(28, 2, 'p-15.jpg', 1000, '2022-12-11', 1),
(29, 2, 'p-1.jpg', 1000, '2022-12-12', 1),
(30, 2, 'p-13.jpg', 1000, '2022-12-12', 1),
(31, 2, 'p-14.jpg', 500, '2022-12-12', 0),
(32, 2, 'p-13.jpg', 1000, '2022-12-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `id_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`id_loai`, `ten_loai`) VALUES
(1, 'Chung cư'),
(2, 'Đất đai'),
(3, 'Căn Hộ');

-- --------------------------------------------------------

--
-- Table structure for table `sp_duan`
--

CREATE TABLE `sp_duan` (
  `id` int(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `dien_tich` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `mo_ta` varchar(512) NOT NULL,
  `ngay_dang` date NOT NULL DEFAULT current_timestamp(),
  `dac_biet` tinyint(4) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_dd` int(11) NOT NULL,
  `ngay_duyet` varchar(255) NOT NULL,
  `li_do` varchar(500) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1,
  `goi_tin` varchar(255) NOT NULL,
  `ngay_daytin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_duan`
--

INSERT INTO `sp_duan` (`id`, `dia_chi`, `hinh`, `dien_tich`, `don_gia`, `ten_sp`, `mo_ta`, `ngay_dang`, `dac_biet`, `id_loai`, `id_kh`, `id_dd`, `ngay_duyet`, `li_do`, `trang_thai`, `goi_tin`, `ngay_daytin`) VALUES
(298, 'Khuất Duy Tiến - cầu Giấy', 'p-1.jpg', 32, 6, 'Chung cư jsc4', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 1, 1, 1, '01:02:38pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-12'),
(299, 'soos1 - đường Láng-Khuất Duy Tiến - Cầu Giấy', 'p-3.jpg', 32, 6, 'Chung cư tòa Park Home', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 0, 1, 2, 1, '01:02:41pm 2022-12-05', 'Bài đăng có chứa hình ảnh không phù hợp', 2, '', ''),
(300, 'soos1 - đường Láng-Khuất Duy Tiến - Cầu Giấy', 'p-2.jpg', 30, 8, 'Chung cư Smart City', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 1, 2, 1, '01:02:44pm 2022-12-05', '', 1, '1000', '08:44:49pm 2023-06-14'),
(301, 'số1 - Trung Hòa - Cầu Giấy', 'p-4.jpg', 30, 12, 'Chung cư Epic Tower Cầu Giấy', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 1, 4, 1, '01:02:47pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-12'),
(302, 'Long Biên - Cầu Giấy', 'p-5.jpg', 35, 9, 'Chung Cư Le Grand Jardin Long Biên', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 1, 1, 1, '01:02:50pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-12'),
(303, 'quận Cầu Giấy', 'p-6.jpg', 35, 9, 'Hà Nội Paragon Cầu Giấy', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 1, 2, 1, '01:02:53pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-09'),
(304, 'Nam Từ Liêm - Cầu Giấy', 'p-7.jpg', 35, 10, 'Chung Cư The Charm An Hưng', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 1, 3, 1, '01:02:55pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-09'),
(305, 'Bắc Từ Liêm - Cầu Giấy', 'p-8.jpg', 35, 12, 'Chung Cư The City Nam Hưng', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 1, 4, 1, '01:02:58pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-09'),
(306, 'Gia Lâm - Hà Nội', 'p-9.jpg', 35, 15, 'Chung Cư The  Home City', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 1, 1, 1, '01:03:00pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-09'),
(307, 'hai Bà Trưng - Hà Nội', 'p-10.jpg', 35, 11, 'Chung Cư Grand Home City', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 1, 2, 1, '01:03:03pm 2022-12-05', '', 1, '1000', '03:15:00pm 2022-12-09'),
(308, 'hai Bà Trưng - Hà Nội', 'p-10.jpg', 35, 15, 'Chung Cư Grand Home City', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 0, 1, 3, 1, '01:03:05pm 2022-12-05', '', 1, '0', ''),
(309, 'Khuất Duy Tiến - Cầu Giấy', 'p-10.jpg', 72, 14, 'Căn hộ Roud City', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.', '2022-12-05', 1, 1, 4, 2, '01:03:11pm 2022-12-05', '', 1, '1000', '02:52:06pm 2022-12-09'),
(310, 'hai Bà Trưng - Hà Nội', 'p-10.jpg', 35, 15, 'Chung Cư Grand Home City', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 0, 1, 1, 1, '01:03:14pm 2022-12-05', '', 1, '0', ''),
(311, 'Diễn Châu - Nghệ an', 'p-13.jpg', 35, 8, 'Căn hộ The Home', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.', '2022-12-05', 1, 3, 2, 2, '01:03:16pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-12'),
(312, 'Lê Hoàn - Thanh Hóa', 'p-14.jpg', 35, 15, 'Căn Hộ Grand Home City', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 3, 3, 2, '01:03:19pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-12'),
(313, 'Nguyễn Huệ - Thanh Hóa', 'p-15.jpg', 35, 15, 'Căn Hộ The Home Time', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 3, 4, 2, '01:03:21pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-12'),
(314, 'Đức Thanh - Hà Tĩnh', 'p-16.jpg', 35, 15, 'Căn Hộ Grand House', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 3, 1, 2, '01:03:24pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-12'),
(315, 'Đức Lâm- Hà Tĩnh', 'p-17.jpg', 35, 15, 'Căn Hộ Grand House Time', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 3, 2, 2, '01:03:26pm 2022-12-05', '', 1, '1000', '02:33:52pm 2022-12-12'),
(316, 'Đức Lâm- Nghệ An', 'p-18.jpg', 32, 12, 'Căn Hộ Grand House Time City', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 0, 3, 3, 2, '01:03:29pm 2022-12-05', '', 1, '0', ''),
(317, 'Đức Lâm- Nghệ An', 'p-19.jpg', 32, 9, 'Căn Hộ Grand Time City', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 3, 4, 2, '01:03:31pm 2022-12-05', '', 1, '1000', '02:52:01pm 2022-12-12'),
(318, 'Đức Khánh - Ninh Bình', 'p-20.jpg', 28, 9, 'Căn Hộ Grand Time ', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 0, 3, 1, 2, '01:03:34pm 2022-12-05', '', 1, '0', ''),
(319, 'Phu Ninh - Quảng Nam', 'd-2.jpg', 200, 2, 'Cần bán lô đất giá rẻ , rộng , đẹp', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.', '2022-12-05', 1, 2, 2, 3, '01:03:36pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-12'),
(320, 'Đức Khánh - Nghệ An', 'd-2.jpg', 250, 3, 'Bán lô đất,  rộng , giá rẻ', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 2, 3, 2, '01:03:39pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-12'),
(321, 'Đức Khánh - Nghệ An', 'd-3.jpg', 250, 2, 'Bán lô đất,  rộng , giá rẻ , địa lí đẹp', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 2, 4, 2, '01:03:41pm 2022-12-05', '', 1, '1000', '01:02:41pm 2022-12-12'),
(322, 'Minh Toàn - Biên Hòa', 'd-4.jpg', 250, 3, 'Bán lô đất,  rộng , giá rẻ , địa lí đẹp', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 0, 2, 1, 3, '01:03:44pm 2022-12-05', '', 1, '0', ''),
(323, 'Minh Toàn - Đồng Nai', 'd-6.jpg', 200, 2, 'Gia chủ chuyển nơi ở cần bán lô đất nền đẹp', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 2, 2, 3, '01:03:47pm 2022-12-05', '', 1, '1000', '01:12:09pm 2022-12-12'),
(324, 'Minh Toàn - Kiên Gian', 'd-7.jpg', 100, 2, 'Bán lô đất nền , 3 mặt tiền , đẹp', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 2, 3, 3, '01:03:49pm 2022-12-05', '', 1, '1000', '03:39:14pm 2022-12-12'),
(325, 'Minh Toàn - Kiên Gian', 'd-10.jpg', 180, 4, 'Bán lô đất nền , 4 mặt tiền , đẹp', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-11', 1, 2, 4, 3, '01:03:52pm 2022-12-03', '', 1, '1000', '02:52:10pm 2022-12-12'),
(326, 'Minh Toàn - Khánh Hòa', 'd-5.jpg', 72, 4, 'Lô đất đẹp, rộng, vị trí thuận lợi', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-08', 0, 2, 1, 3, '01:03:55pm 2022-12-11', '', 1, '0', ''),
(327, 'Minh Toàn - Khánh Hòa', 'd-8.jpg', 98, 2, 'Bán lô đất nền , 4 mặt tiền , đẹp', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-10', 1, 2, 2, 3, '01:03:57pm 2022-12-10', '', 1, '1000', '02:36:23pm 2022-12-12'),
(328, 'Minh Toàn - Quảng Nam', 'd-4.jpg', 200, 2, 'Lô đất năm trên đường lớn giá đẹp cần bán', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-03', 0, 2, 3, 3, '01:04:00pm 2022-12-09', '', 1, '0', ''),
(329, 'Minh Toàn - Quảng Nam', 'd-2.jpg', 135, 1, 'Gia chủ chuyển nơi ở cần bán miếng đất 4 mặt tiền', '- Vị trí siêu vip, song song với phố Nguyễn Du cả Phố chưa có căn nhà nào bán từ trước đến nay.\r\n- Nhà có diện tích khủng 150m² + mặt tiền lớn 7m quá hiếm cho những căn nhà mặt phố cổ.\r\n- Nhà 3 tầng được thiết kế dạng biệt thự rất thích hợp với những khách thích mở nhà hàng, spa còn nếu đập ra xây toà nhà 10 tầng như nhà bên cạnh thì đỉnh của đỉnh luôn.\r\n- Nhà có sổ đỏ nở hậu, riêng biệt và chỉ có 1 chủ đứng tên - quá hiếm cho những nhà khu vực phố cổ.', '2022-12-05', 1, 2, 4, 3, '01:04:07pm 2022-12-01', '', 1, '1000', '02:52:19pm 2022-12-12'),
(346, 'số 135 cầu dieecn hà Nội', 'p-13.jpg', 123, 9999, 'Miền Bắc', 'uy tín, đẹp', '2022-12-12', 0, 2, 2, 1, '', '', 0, '0', ''),
(347, 'Nguyên xá', 'p-14.jpg', 72, 2, 'Bán lô đất nền , 4 mặt tiền , đẹp', 'uy tín số 1', '2022-12-12', 0, 2, 2, 2, '', '', 0, '0', ''),
(348, 'số 135 cầu dieecn hà Nội', 'p-14.jpg', 72, 2, 'Miền Bắc', 'dự án 1', '2022-12-12', 1, 1, 2, 2, '02:46:34pm 2022-12-12', '', 1, '1000', '02:47:27pm 2022-12-12'),
(349, 'Hai Bà Trưng', 'p-10.jpg', 70, 16, 'Dự án tiềm năng mới', 'sản phẩm rất đẹp', '2023-06-24', 0, 3, 0, 1, '', '', 1, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dia_diem`
--
ALTER TABLE `dia_diem`
  ADD PRIMARY KEY (`id_dd`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `lich_su_coin`
--
ALTER TABLE `lich_su_coin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id_loai`);

--
-- Indexes for table `sp_duan`
--
ALTER TABLE `sp_duan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dia_diem`
--
ALTER TABLE `dia_diem`
  MODIFY `id_dd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=541;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `lich_su_coin`
--
ALTER TABLE `lich_su_coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sp_duan`
--
ALTER TABLE `sp_duan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
