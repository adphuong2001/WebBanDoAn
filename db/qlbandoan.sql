-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 12:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbandoan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `account_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`account_id`, `fullname`, `email`, `password`, `phone`, `address`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin123', '0945843758', 'Hà Nội', 'admin'),
(2, 'User', 'user@gmail.com', 'user123', '0956875345', 'Hà Nội', 'customer'),
(10, 'Thành', 'thanh@gmail.com', 'thanh123', '0923423784', 'Vĩnh Phúc', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(5, 'Kem'),
(4, 'Món tráng miệng'),
(3, 'Burger'),
(2, 'Combo gà'),
(1, 'Gà'),
(6, 'Cà phê'),
(7, 'Đồ uống');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discount`
--

CREATE TABLE `tbl_discount` (
  `MaGG` int(11) NOT NULL,
  `GiaGiam` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ChiTiet` varchar(500) NOT NULL,
  `NgayBatDau` datetime NOT NULL,
  `NgayKetThuc` datetime NOT NULL,
  `TrangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_discount`
--

INSERT INTO `tbl_discount` (`MaGG`, `GiaGiam`, `SoLuong`, `ChiTiet`, `NgayBatDau`, `NgayKetThuc`, `TrangThai`) VALUES
(1, 20, 15, 'Ưu đãi tới 20% cho đơn hàng lớn\r\nDeal siêu xịn xò, cực hời nha các fan ơi: Ưu đãi tới 20% cho đơn hàng lớn\r\n\r\nChi tiết vui lòng liên hệ trực tiếp các cửa hàng của Lotteria\r\n\r\nLưu ý: Giảm giá không áp dụng đồng thời với các chương trình khuyến mãi khác tại cửa hàng.', '2022-06-26 11:02:17', '2022-06-30 16:02:17', 'Còn'),
(2, 15, 10, '[Grabfood x Lotteria] Giảm 25%\nKhi đặt đơn hàng đầu tiên bạn nhớ nhập ngay mã LOTTERIANEW là được giảm liền 25k cho đơn hàng giá trị bất kì.\n\nĐặt tại đây.', '2022-06-26 11:03:52', '2022-06-28 16:03:52', 'Còn'),
(3, 10, 20, 'Bữa Trưa Vui Vẻ Chỉ 37K\nBurger Tôm + Pepsi (M) chỉ 37k\nCơm Gà Sốt Đậu + Pepsi (M) chỉ 37k\nMì Ý Thịt Bò + Pepsi (M) chỉ 37k\nGà Rán + Pepsi (M) chỉ 37k\nÁp dụng từ 11 giờ đến 14 giờ thứ 2 đến thứ 6, không áp dụng thứ 7, chủ nhật và ngày Lễ.', '2022-06-26 11:04:18', '2022-06-29 16:04:19', 'Còn'),
(4, 20, 0, 'Lotteria x Zalo: voucher 20k\r\nNhấn quan tâm Zalo OA Lotteria để nhận voucher 20k ngay nhé.\r\nLưu ý:\r\n\r\nChương trình khuyến mãi có thể không được áp dụng tại một số cửa hàng, mong quý khách thông cảm\r\nMau mau đặt hàng qua hotline 1900.6778 để được giao hàng miễn phí và nhận nhiều ưu đãi hấp dẫn hơn nhé!!', '2022-06-26 11:05:00', '2022-06-28 16:05:00', 'Hết'),
(5, 15, 10, 'Giao Tận Nơi Nhận Thêm Quà Đỉnh\r\nMăm ngon tròn bữa, thêm quà nữa càng vui:\r\n\r\nVới đơn hàng thứ 2 bạn sẽ nhận ngay 1 Khoai tây lắc trị giá 40k.\r\nVới đơn hàng thứ 3 bạn sẽ nhận ngay 1 Mỳ Ý thịt bằm trị giá 29k.\r\nVới đơn hàng thứ 4 bạn sẽ nhận ngay 1 Gà rán trị giá 36k.\r\nVới đơn hàng thứ 5 bạn sẽ nhận ngay 1 Burger Double double trị giá 59k.', '2022-06-26 11:20:19', '2022-06-30 16:20:19', 'Còn'),
(6, 20, 15, 'Burger Mê Ly Tiệc Vui Hết Ý Chỉ 39K\r\nLotteria “trình làng” món mới đảm bảo làm say ngất ngây các tín đồ Bacon đây!\r\n\r\nBacon Beef Burger – Sự kết hợp giữa thịt bò kèm vị sốt Bulgogi cùng với mùi hương xông khói và vị mặn mặn đặc trưng của bacon, hương vị vô cùng mới lạ, ngon “nhức nách”, hứa hẹn chiều lòng các Fan nhà Lotteria giá chỉ 39K.\r\n\r\nĐừng bỏ lỡ món mới trong mùa lễ hội này nhé!\r\n\r\nGọi đến số 19006778 để được giao hàng miễn phí và nhận thêm nhiều ưu đãi bạn nhé!', '2022-06-26 11:21:05', '2022-06-30 16:21:05', 'Còn');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `MaNL` int(11) NOT NULL,
  `MaKho` int(11) NOT NULL,
  `MaNCC` int(11) NOT NULL,
  `TenNL` varchar(50) NOT NULL,
  `GiaTien` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `NgayNhap` date NOT NULL,
  `HanSuDung` date NOT NULL,
  `AnhNL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`MaNL`, `MaKho`, `MaNCC`, `TenNL`, `GiaTien`, `SoLuong`, `Unit`, `NgayNhap`, `HanSuDung`, `AnhNL`) VALUES
(1, 1, 1, 'Gà', 50000, 1000, 'Kilogram', '2022-06-26', '2022-06-29', 'ga.jpg'),
(2, 2, 2, 'Tôm', 10000, 1000, 'Con', '2022-06-26', '2022-07-31', 'tom.jpg'),
(3, 3, 1, 'Rau xanh', 30000, 1000, 'Mo', '2022-06-26', '2022-06-28', 'rauxanh.jpg'),
(4, 2, 4, 'Dầu thực vật', 20000, 986, 'Litre', '2022-06-26', '2022-08-31', 'dauan.jpg'),
(5, 1, 3, 'Bột chiên giòn', 15000, 99800, 'Gram', '2022-06-26', '2022-08-19', 'botchien.jpg'),
(6, 2, 3, 'Mật ong', 30000, 1000, 'Litre', '2022-06-26', '2022-07-31', 'matong.jpg'),
(7, 3, 4, 'Tương Cà - Tương Ớt', 26000, 760, 'Gram', '2022-06-26', '2022-07-21', 'tuongca.jpg'),
(8, 3, 2, 'Thịt Bò', 24000, 1000, 'Kilogram', '2022-06-26', '2022-07-21', 'thitbo.jpg'),
(9, 2, 4, 'Trứng Gà', 5000, 928, 'Qua', '2022-06-26', '2022-06-26', 'trungga.jpg'),
(10, 2, 1, 'Đùi gà', 15000, 784, 'Thighs', '2022-12-01', '2022-12-31', 'dui_ga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `MaTinTuc` int(11) NOT NULL,
  `TenTinTuc` varchar(200) NOT NULL,
  `NoiDung` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`MaTinTuc`, `TenTinTuc`, `NoiDung`) VALUES
(1, 'Lý giải nguyên nhân Lotteria Việt Nam vẫn tiếp tục hoạt động dù kinh doanh thua lỗ', ' 06:56 PM | KINH DOANH\r\n\r\nKorea Times đưa tin, Lotte GRS cho biết hoạt động kinh doanh thực phẩm và bán lẻ tại Việt Nam vẫn tiếp tục dù đang gặp khó khăn do việc xây dựng cơ sở hạ tầng bị tạm dừng, cùng với việc nhập khẩu thiết bị bị đình trệ do đại dịch Covid-19.\r\n\r\nLý giải nguyên nhân Lotteria Việt Nam vẫn tiếp tục hoạt động dù kinh doanh thua lỗ\r\n\"Đúng là Lotte GRS đang rút khỏi thị trường Indonesia, nhưng chúng tôi vẫn đang tiếp tục kinh doanh nhượng quyền và bán lẻ thực phẩm tại Việt Nam\", đại diện Lotte GRS chia sẻ...'),
(3, 'RIA Fans ơi, App Lotteria VN đã lộ diện với visual cực \"kool\" nè', 'Lotteria \"trình làng\" ứng dụng đặt hàng với diện mạo HOÀN TOÀN MỚI đi kèm với chương trình khuyến mãi cực hấp dẫn:  TẶNG NGAY 1 GÀ RÁN* CHO ĐƠN ĐẶT HÀNG ĐẦU TIÊN QUA APP \r\nBên cạnh đó trong suốt quá trình sử dụng, bạn sẽ được trải nghiệm thêm nhiều tiện ích:\r\n- Miễn phí giao hàng.\r\n- Thao tác đơn giản với giao diện trẻ trung.\r\n- Cập nhật thông tin các chương trình khuyến mãi nhanh chóng.\r\n* Áp dụng cho đơn từ 99.000đ.\r\nQuét mã QR tại hình ảnh đi kèm hoặc nhấp chọn các đường link bên dưới \r\nIOS: https://apps.apple.com/vn/app/lotteria/id1423528065?l=vi\r\n \r\nAndroid: https://play.google.com/store/'),
(4, 'Chúc mừng một chiếc store Lotteria với đầy ắp kỷ niệm được thay áo mới ', 'Cùng tiếp tục lưu giữ những khoảnh khắc tuyệt vời của RIA fan với chúng tớ tại Lotteria Dương Bá Trạc nữa nha bạn ơi\r\n Đừng quên chúng tớ còn có sự kiện tặng 1 áo in hình biệt đội siêu điệp viên L4 cho 200 khách hàng đầu tiên có hóa đơn từ 100k tại cửa hàng nhé\r\n Ghé chơi ngay tại 111 Thanh Xuân,Hà Nội'),
(5, 'Nhà Lotteria mời bạn bữa trưa ngon', 'Cơm gà sốt (H&S/phô mai/ buffalo/ đậu) + Pepsi (M) giá 37k \r\nMì Ý Thịt Bò + Pepsi (M) chỉ 37k \r\nGà Rán + Pepsi (M) chỉ 37k \r\nBurger Tôm + Pepsi (M) chỉ 37k \r\nÁp dụng từ 11 giờ đến 14 giờ thứ 2 đến thứ 6, không áp dụng thứ 7, chủ nhật và ngày Lễ \r\n#LotteriaVietnam #MyFAVORITELOTTERIA \r\n-----\r\nLưu ý:\r\n(*) Chương trình khuyến mãi có thể không được áp dụng tại một số cửa hàng, mong quý khách thông cảm\r\n(*) Mau mau đặt hàng qua hotline 1900.6778 để được giao hàng miễn phí và nhận nhiều ưu đãi hấp dẫn hơn nhé!!!'),
(6, 'Ra mắt diện mạo mới siêu hoành tráng của Lotteria tại Hà Nội', 'Các fan Thủ Đô mau ghé chơi với chúng tớ để tham gia nhiều chương trình hấp dẫn nhé 😍\r\n🔥 Đặc biệt, sự kiện 200 khách hàng đầu tiên mua hóa đơn từ 100k dược tặng 1 áo in hình biệt đội siêu điệp viên L4 siêu đáng yêu vẫn diễn ra nha\r\nĐịa chỉ store: 138 P. Lê Thanh Nghị, Bách Khoa, Hai Bà Trưng, Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0: chưa giao hàng - 1: đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `create_at`, `status`) VALUES
(19, 2, '2022-06-26', 0),
(20, 2, '2022-06-26', 0),
(21, 2, '2022-12-06', 0),
(22, 2, '2022-12-06', 0),
(23, 2, '2022-12-06', 0),
(24, 2, '2022-12-06', 0),
(25, 2, '2022-12-07', 0),
(26, 2, '2022-12-07', 0),
(27, 2, '2022-12-07', 0),
(28, 2, '2022-12-07', 0),
(29, 2, '2022-12-08', 0),
(30, 2, '2022-12-08', 0),
(31, 2, '2022-12-08', 0),
(32, 2, '2022-12-08', 0),
(33, 2, '2022-12-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `product_id`, `price`, `number`) VALUES
(21, 16, 23, 25000, 1),
(22, 17, 16, 127000, 1),
(23, 18, 23, 25000, 1),
(24, 19, 15, 304000, 2),
(25, 19, 6, 33000, 1),
(26, 20, 22, 25000, 3),
(27, 20, 8, 44000, 1),
(28, 21, 15, 304000, 1),
(29, 22, 15, 304000, 1),
(30, 23, 15, 304000, 1),
(31, 24, 15, 304000, 4),
(32, 25, 15, 304000, 3),
(33, 25, 23, 25000, 1),
(34, 28, 15, 304000, 1),
(35, 29, 14, 203000, 10000),
(36, 31, 15, 304000, 10),
(37, 32, 15, 304000, 3),
(38, 33, 15, 304000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `hotproduct` int(1) NOT NULL,
  `img` varchar(500) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `category_id`, `description`, `content`, `hotproduct`, `img`, `price`) VALUES
(1, 'Burger Bò Teriyaki Trứng', 3, 'Xuất xứ : Việt Nam      \r\nKích cỡ : Full size\r\n', 'Hamburger chế biến tại Loterria với nguyên liệu tươi sạch hương vị của bò cùng với trứng hòa quyện tạo nên hương vị đầy hấp dẫn và thơm ngon.', 1, 'burger-bo-teriyaki-trung.png', 35000),
(2, 'Burger Bò Teriyaki', 3, 'Xuất xứ : Việt Nam\r\nKích cỡ : Full size', 'Chất lượng hảo hạng của thịt bò Fuji khiến món ăn thêm phần hoàn hảo. Thịt bò Fuji được lấy từ phần thịt ngon nhất của những chú bò được nuôi và chăm sóc theo tiêu chuẩn Nhật Bản, Úc. Chúng còn rất thơm, ngọt và ngậy bởi được đưa thêm tinh chất Nấm Shimeji, tinh chất từ xương thịt, sữa bò (Kobe, Wagyu) vào bên trong thớ thịt. Chỉ cần ăn một lần, bạn sẽ nhớ mãi.', 1, 'burger-bo-teriyaki.png', 30000),
(3, 'Burger Bulgogi', 3, 'Xuất xứ : Việt Nam\r\nKích cỡ : Full size', 'Bánh burger ăn kèm thịt bò được ướp với sốt Bulgogi đặc trưng từ xứ sở kim chi tạo nên món ăn ngon và lạ miệng. Chiếc bánh không chỉ có hương vị của thịt, mà còn có vị ngọt, beo béo của sốt Mayonnaise, thịt xông khói, các loại rau tươi và phô mai, cung cấp cho bạn bữa ăn thơm ngon đầy dinh dưỡng mà không thể tìm thấy ở bất cứ thương hiệu fast food nào vị ngon và sức hấp dẫn như tại Lotteria.', 0, 'burger-bulgogi.png', 43000),
(4, 'Burger Cá', 3, 'Xuất xứ : Việt Nam\r\nKích cỡ: Full size', 'Burger cá là món ăn nhanh được rất nhiều tín đồ ẩm thực ưa chuộng. Với nhân cá thơm ngon từ đại dương, đây là món ăn rất giàu dinh dưỡng, thích hợp dùng để thưởng thức vào bữa sáng. Cùng tham khảo công thức làm bánh hamburger cá tại nhà đơn giản qua bài viết sau.', 0, 'burger-ca.png', 33000),
(5, 'Burger Mozzarella', 3, 'Xuất xứ : Việt Nam\r\nKích cỡ : tiêu chuẩn', 'Mozzarella Burger của Lotteria có nhân bò tẩm ướp sốt Bulgogi đặc trưng cùng 1 lớp phomai, phomai mozzarella là nguyên 1 miếng, được tẩm bột chiên giòn kẹp trong vỏ bánh thơm mềm.', 0, 'burger-mozzarella.png', 59000),
(6, 'Burger Phô Mai', 3, 'Xuất xứ: Việt Nam\r\nKích cỡ : tiêu chuẩn', 'Phô mai là một nguyên liệu quen thuộc đối với cả người Châu Á và Châu Âu. Nó được dùng nhiều trong các món ăn kể cả món ăn mặn hay món ăn ngọt do góp phần làm tăng hương vị của món ăn một cách tối đa. Chưa kể tới, món ăn có chứa phô mai dường như luôn trở nên hấp dẫn hơn rất nhiều do mùi thơm của sữa, sự béo ngậy của phô mai hòa quyện với nhau.', 0, 'burger-pho-mai.png', 33000),
(7, 'Cơm Gà Nướng Góc Tư', 2, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn', 'Cơm là loại thực phẩm thiết yếu trong cuộc sống hàng ngày của người Việt ta. Thời trước đây có cơm ăn ngày 3 bữa đã là niềm hạnh phúc,ngày nay ăn no không quan trọng nữa mà phải là ăn ngon. Cơm gà nướng (góc tư lườn cánh) chính là món ăn mà 29 Food muốn giới thiệu đến bạn trong bài viết này. Muốn ăn no, ăn ngon thì đây là lựa chọn không thể nào hợp lý hơn đấy. Nào, cùng tìm hiểu thêm nhé!', 1, 'com-ga-nuong-goc-tu.png', 57000),
(8, 'Cơm Gà Sốt Đậu', 2, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn', 'Đến Lotteria mình chỉ thích mỗi món Gà rán sốt đậu của Lotteria ăn thơm bùi, ngọt ngọt cay cay lại không bị quá khô rất hợp khẩu vị. Chắc chẳn nếu bạn là tín đồ món gà rán thì học cách làm gà rán sốt đậu Lotteria tại nhà thử xem sao nhé.', 0, 'com-ga-sot-dau.png', 44000),
(9, 'Cơm Thịt Bò Phô Mai', 2, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn', 'Phô mai sợi tan chảy hòa quyện vào từng hạt cơm vô cùng thơm ngậy và hấp dẫn. Những sợi phô mai kéo dài khi thưởng thức còn làm các bé thấy thích thú và khiến giờ ăn ngon miệng, vui vẻ hơn. Sự kết hợp của cơm cùng thịt bò, trứng, phô mai cùng các loại rau củ như cà rốt, đậu Hà Lan, ngô ngọt còn giúp món ăn đầy đủ dinh dưỡng và có màu sắc rất sinh động, đẹp mắt.\r\nNguyên liệu:\r\nCơm trắng: 3 chén\r\nThịt bò thăn: 100g\r\nTrứng gà: 2 quả nhỏ (hoặc 1 quả lớn)\r\nCà rốt thái hạt lựu: 50g\r\nNgô ngọt tách hạt: 50g\r\nĐậu hạt Hà Lan: 50g\r\nPhô mai bào sợi: 50g\r\nNước ép tỏi: 1 muỗng canh\r\nTỏi phi: 1 muỗng canh\r\nRượu trắng: 1/2 muỗng cà phê\r\nHành lá: 2 cây\r\nHạt tiêu trắng xay: 1/2 muỗng cà phê\r\nHạt nêm củ quả: 3 muỗng cà phê\r\nNước tương: 1 muỗng cà phê\r\nDầu ăn: 2  muỗng canh', 1, 'com-thit-bo-pho-mai.png', 44000),
(10, 'Cơm Thịt Bò', 2, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn', 'Gyudon là món cơm thịt bò được nhiều thực khách sành ăn ưa thích. Với nguyên liệu dễ tìm và mùi vị thơm ngon nên món này rất được hoan nghênh. Cùng vào bếp cùng Bách hóa XANH làm món cơm thịt bò chuẩn vị Nhật cho cả nhà nếm thử.\r\nNguyên liệu :\r\n400g thịt bò cắt mỏng (loại dùng để ăn lẩu)\r\n2 quả trứng gà\r\n1 nửa củ hành tây\r\n1 gói Dashi\r\n20ml rượu mirin\r\n2 nhánh hành lá\r\n5g tỏi băm\r\n500ml nước\r\nGia vị: 30ml nước tương, 15g đường, 5g muối\r\n\r\n', 0, 'com-thit-bo.png', 44000),
(11, 'Mì Ý', 2, 'Xuất xứ : Ý\r\nKích cỡ : Tiêu chuẩn', 'Mì ý được biết đến là món ăn nổi tiếng trong nền văn hóa ẩm thực phương Tây. Những sợi mì vàng tươi, mềm thơm phủ nước sốt sánh mịn làm bùng nổ vị giác của bất cứ ai từng nếm thử. Không chỉ ngon miệng mà cách làm mì Ý còn rất đơn giản. Hôm nay hãy cùng Nguyễn Kim “lăn vào bếp” để thử 5 cách làm mì Ý siêu ngon, siêu dễ dưới đây nhé! ', 0, 'mi-y.png', 28000),
(12, 'Súp Gà', 2, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn', 'Súp gà là món ăn khai vị quen thuộc trong các bữa tiệc tại nhà hàng. Món súp gà rất bổ dưỡng và dễ tiêu hóa, cách nấu cũng không quá phức tạp. Hãy theo dõi bài viết dưới đây để cùng vào bếp thực hiện nấu món từ gà siêu hấp dẫn, thơm ngon như ngoài hàng nhé!', 0, 'sup-ga.png', 12000),
(13, 'Gà Sốt Buffalo - 9 Miếng', 1, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn ', 'Có rất nhiều cácg để chế biến biến gà nhưng nướng vẫn là cách ngon miệng và không gây ngán hơn cả. Gà nướng sốt buffalo với những miếng gà giòn tan hòa quyện cùng sốt mặn-cay-chua-ngọt hấp dẫn từ hương vị đến hình thức. Cùng thử nhé!', 0, 'ga-sot-buffalo-9-mieng.png', 304000),
(14, 'Gà Sốt Đậu - 6 Miếng', 1, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn', 'Nhắc đến gà sốt không thể bỏ qua Gà Sốt H&S ngọt cay của Lotteria nha. Miếng gà phủ sốt hơi sẫm màu, hơi hăng mùi của bột ớt Hàn Quốc nhưng lúc ăn thì chỉ cay tê tê nhẹ. Vị sốt thì rất hợp khẩu vị của người Việt, đậm đà, mặn ngọt vừa phải.', 1, 'ga-sot-dau-6-mieng.png', 203000),
(15, 'Gà Sốt H&S - 9 Miếng', 1, 'Xuất xứ: Việt Nam\r\nKích cỡ : Tiêu chuẩn', 'Nguyên liệu: \r\n-Cánh gà: 4 cái ( mọi người có thể sử dụng đùi, lườn... nha) \r\n-Bột chiên giòn\r\n-Phần nước sốt: tiêu, tương cà, tương ớt Chinsu ( phiên bản Hàn là dùng tương ớt Hàn Quốc ạ mọi người có thể thay thế nha), mật ong, nước mắm( gia vị phiên bản Việt ạ ), muối, ớt bột. \r\n-Tỏi, gừng. \r\n-Vừng trắng. ', 1, 'ga-sot-hs-9-mieng.png', 304000),
(16, 'Couple Set 1 (Tiết Kiệm 42.000đ)', 2, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn', 'Combo Set 1 tiết kiệm lên tới 42.000 VNĐ gồm có 1 hamburger, 1 phần gà rán, 1 khoai tây chiên và 2 coca giúp cho bạn có những bữa ăn ngon lành và bao no.', 0, 'couple-set-1-tiet-kiem-42.000d.png', 127000),
(17, 'Khoai Tây Lắc', 3, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn', 'Khoai tây lắc phô mai với hương vị thơm ngon, hấp dẫn sẽ khiến bạn thích mê ngay từ lần đầu tiên thưởng thức.', 0, 'khoai-tay-lac.png', 39000),
(18, '7 UP (L)', 7, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn', '7 Up là một trong những thương hiệu nước ngọt được người tiêu dùng ưa thích. Nước ngọt 7 Up với vị chanh tự nhiên mát lạnh, mang đến cho bạn cảm giác sảng khoái. Sản phẩm chứa nhiều vitamin C giúp cho cơ thể khoẻ khoắn và tinh thần luôn tươi vui mỗi ngày. Nước giải khát 7 Up sẽ là một lựa chọn vô cùng thích hợp dành cho các chuyến du lịch giúp bạn luôn tràn đầy năng lượng.', 0, '7-up-l.png', 18000),
(19, 'Mirinda (L)', 7, 'Xuất xứ : Vệt Nam\r\nKích cỡ : L', 'Mirinda là một trong những thương hiệu nước ngọt có ga hàng đầu thế giới thuộc tập đoàn Suntory Pepsico. Mirinda được thành lập từ năm 1959 tại Tây Ban Nha đến nay đã trở nên phổ biến và phân phối rộng rãi trên toàn cầu. \r\n\r\nNước ngọt Mirinda có những hương vị nào?\r\n\r\nTại Việt Nam, bộ 4 hương vị mà người dùng luôn nhớ khi nhắc đến nước ngọt Mirinda là cam, soda kem, xá xị và gần đây nhất là hương vị đá me.\r\n \r\nNước ngọt Mirinda hương cam 320ml với thiết kế nền cam chủ đạo trùng với màu nước, điểm thêm những họa tiết lát cam sinh động, tươi tắn tạo nên một thiết kế trẻ trung năng động mang đến cảm giác sôi nổi, vui vẻ cũng làm tâm trạng của bạn thêm phấn khởi hơn. Hương cam là một trong những hương vị truyền thống của Mirinda, trải qua nhiều năm vẫn giữ được hương vị tươi mát sảng khoái cùng ga bùng nổ thích thú hấp dẫn người dùng. \r\n\r\nNước ngọt Mirinda hương xá xị lon 320ml với tông màu nâu tím chủ đạo trầm hơn, điểm xuyến thêm những vằn cam mạnh mẽ mang lại phong cách trưởng thành hơn. Khi mở lon bạn sẽ cảm nhận ngay hương thơm xá xị không thể lẫn được, cực cuốn hút và hấp dẫn. Cảm giác ga bùng nổ hòa cùng vị chua ngọt tự nhiên sẽ níu giữ bạn lưu luyến mãi.\r\n\r\nNước ngọt Mirinda vị soda kem lon 320ml thơm béo ngất ngây, vị ngon xoắn lưỡi là một lựa chọn khác cho những giây phút cười thả ga, vui quá đã. Cùng với thiết kế với tông màu xanh chủ đạo tươi sáng, trẻ trung càng khiến sản phẩm này được người dùng yêu thích.\r\n\r\nNước ngọt Mirinda đá me lon 320ml chua chua ngọt ngọt, chỉ một ngụm đã mang lại cho mạng cảm giác thích mê, đê mê cùng hương vị tuổi thơ. Mirinda đá me, ngon ngã nghiêng.\r\n\r\n \r\nNước ngọt Mirinda giá bao nhiêu?\r\n\r\nNgoài 4 hương vị độc đáo mới lạ, Mirinda còn cung cấp cho người dùng nhiều sự lựa chọn về đóng gói và dung tích từ nước ngọt Mirinda lon 330ml, nước ngọt Mirinda chai nhỏ 390ml đến nước ngọt chai lớn 1.5 lít tiết kiệm, uống thả ga. Bạn có thể tham khảo qua mức giá các sản phẩm Mirinda dưới đây:\r\n\r\nNước ngọt dạng lon: \r\n\r\nGiá bán lẻ khoảng 10.000 - 11.000 đồng/lon.\r\n\r\nGiá khoảng 220.000 - 230.000 đồng cho dạng thùng 24 lon.\r\n\r\n\r\nNước ngọt dạng chai:\r\n \r\n\r\nGiá bản lẻ khoảng 7.500 đồng/chai nhỏ 390ml và 20.000 đồng/chai lớn 1.5 lít.\r\n\r\nGiá khoảng 155.000 đồng/thùng 24 chai 390ml và 230.000 đồng với dạng thùng 12 chai 1.5 lít.\r\n\r\n \r\nMua nước ngọt Mirinda chính hãng, chất lượng ở đâu?\r\n\r\nNgày nay bạn có thể tìm mua nước ngọt Mirinda dễ dàng tại nhiều nơi tuy nhiên để đảm bảo chất lượng nhất cũng như có đầy đủ sự lựa chọn về hương vị và dùn tích thì bạn nên đến tại những điểm bán hàng lớn, uy tín, đơn cử như Bách hóa XANH, luôn sẵn sàng rất nhiều loại nước ngọt chính hãng thơm ngon cho bạn lựa chọn với mức giá cả hợp lý và thường xuyên có nhiều ưu đãi giá trị.\r\n\r\n', 0, 'mirinda-l.png', 18000),
(20, 'Nestea', 7, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn\r\n', 'Nestea với tinh chất từ lá trà tự nhiên và vị chanh đích thực mang đến cho bạn sự tươi mát. Giải nhiệt sảng khoái với trà chanh hòa tan Nestea. Giải pháp cho ngày hè oi bức. Dinh Dưỡng Cho Cả Nhà. Thực Phẩm Và Đồ Uống. Nâng Cao Chất Lượng Sống.', 0, 'nestea.png', 18000),
(21, 'Tornado Cashew', 7, 'Xuất xứ : Việt Nam \r\nKích cỡ : Tiêu chuẩn\r\n', 'Cashew nuts được sử dụng như một món ăn nhẹ cho bữa phụ hoặc được sử dụng khá rộng rãi trong các công thức nấu nướng như salad, sinh tố, bánh nướng,...Cùng khám phá lợi ích sức khỏe đáng kinh ngạc khiến chúng khác biệt với các loại hạt khác như thế nào ngay nhé.', 0, 'tornado-cashew.png', 25000),
(22, 'Tornado Chocolate', 7, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn\r\n\r\n', 'Cashew nuts được sử dụng như một món ăn nhẹ cho bữa phụ hoặc được sử dụng khá rộng rãi trong các công thức nấu nướng như salad, sinh tố, bánh nướng,...Cùng khám phá lợi ích sức khỏe đáng kinh ngạc khiến chúng khác biệt với các loại hạt khác như thế nào ngay nhé. kết hợp với vị socola thơm ngậy.', 0, 'tornado-chocolate.png', 25000),
(23, 'Mực Rán - 3 Miếng', 1, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn\r\n', '03 miếng Mực nugget\r\n- 01 Pepsi (S)\r\n• Voucher không áp dụng hình thức đổi trả/ hủy/ hoàn tiền.\r\n• Được sử dụng tối đa 5 voucher/ hóa đơn.\r\n• Mỗi voucher chỉ được sử dụng 01 lần.\r\n• Nếu giá tiền đơn đặt hàng của khách hàng vượt quá giá trị của voucher thì khách hàng phải thanh toán thêm số tiền chênh lệch đó.\r\n• Voucher không áp dụng cho các chương trình khuyến mãi khác.\r\nKhông áp dụng ở 58 cửa hàng nhượng quyền của Lotteia. Trên ảnh đại diện quý khách vui lòng xem kĩ\r\n• Khách hàng có trách nhiệm bảo mật thông tin mã thẻ quà tặng sau khi đặt mua. shop sẽ không chịu trách nhiệm hoàn trả các mã thẻ bị mất. ', 0, 'muc-ran-3-mieng.jpg', 25000),
(24, 'Pepsi Không Calories Vị Chanh (Dạng Lon)', 7, 'Xuất xứ : Việt Nam\r\nKích cỡ : Tiêu chuẩn\r\n', 'Sự kết hợp hài hòa của vị chanh thanh mát, giải nhiệt và mang lại cảm giác sảng khoái dài lâu và tốt cho sức khỏe. Nước ngọt Pepsi không calo vị chanh lon 320ml cực kỳ thích hợp cho những người thích uống nước ngọt nhưng vẫn muốn giữ lối sống ăn thanh đạm, ít đường. Sản phẩm chất lượng từ nhà Pepsi', 0, 'pepsi-khong-calories-vi-chanh-dang-lon.png', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recipe`
--

CREATE TABLE `tbl_recipe` (
  `ID` int(11) NOT NULL,
  `Pro_ID` int(11) NOT NULL,
  `Mat_ID` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recipe`
--

INSERT INTO `tbl_recipe` (`ID`, `Pro_ID`, `Mat_ID`, `SoLuong`) VALUES
(1, 15, 10, 9),
(2, 15, 4, 1),
(3, 15, 5, 50),
(4, 15, 7, 10),
(5, 15, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_storage`
--

CREATE TABLE `tbl_storage` (
  `MaKho` int(11) NOT NULL,
  `TenKho` varchar(50) NOT NULL,
  `DiaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_storage`
--

INSERT INTO `tbl_storage` (`MaKho`, `TenKho`, `DiaChi`) VALUES
(1, 'Kho 1', 'Nam Từ Liêm, Hà Nội, Việt Nam'),
(2, 'Kho 2', 'ngõ 29, Hoàng Mai, Hà Nội, Việt Nam'),
(3, 'Kho 3', 'ngõ 12, Thanh Xuân, Hà Nội, Việt Nam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `MaNCC` int(11) NOT NULL,
  `TenNCC` varchar(50) NOT NULL,
  `MailNCC` varchar(50) NOT NULL,
  `SĐT` varchar(20) NOT NULL,
  `DiaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`MaNCC`, `TenNCC`, `MailNCC`, `SĐT`, `DiaChi`) VALUES
(1, 'Vinmart', 'Vinmart@gmail.com', '0948275627', 'TTTM Vincom Nguyễn Chí Thanh, Sô 54A Nguyễn Chí Thanh, Phường Láng Thượng, Quận Đống Đa, Hà Nội'),
(2, 'Vinmart 2', 'Vinmart2@gmail.com', '0948375631', 'Hầm B2, khu TTTM, tổ hợp Trung tâm thương mại, giáo dục và căn hộ Royal City, số 72 Nguyễn Trãi, Phư'),
(3, 'Big C', 'Bigc@gmail.com', '0942347823', 'Tầng Hầm B1- TTTM The Garden, Phường, Từ Liêm, Hà Nội'),
(4, 'Coopmart', 'Coopmart@gmail.com', '0998568754', 'Đường Trần Phú, P. Mộ Lao, Hà Đông, Hà Nội');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  ADD PRIMARY KEY (`MaGG`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`MaNL`),
  ADD KEY `MaKho` (`MaKho`),
  ADD KEY `MaNCC` (`MaNCC`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`MaTinTuc`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_storage`
--
ALTER TABLE `tbl_storage`
  ADD PRIMARY KEY (`MaKho`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`MaNCC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  MODIFY `MaGG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `MaNL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `MaTinTuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_recipe`
--
ALTER TABLE `tbl_recipe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_storage`
--
ALTER TABLE `tbl_storage`
  MODIFY `MaKho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `MaNCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD CONSTRAINT `tbl_material_ibfk_1` FOREIGN KEY (`MaKho`) REFERENCES `tbl_storage` (`MaKho`),
  ADD CONSTRAINT `tbl_material_ibfk_2` FOREIGN KEY (`MaNCC`) REFERENCES `tbl_supplier` (`MaNCC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
