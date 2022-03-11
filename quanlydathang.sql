-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2021 lúc 01:07 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydathang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` int(11) DEFAULT NULL,
  `MSHH` int(11) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaDatHang` int(11) DEFAULT NULL,
  `GiamGia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdathang`
--

INSERT INTO `chitietdathang` (`SoDonDH`, `MSHH`, `SoLuong`, `GiaDatHang`, `GiamGia`) VALUES
(8, 71, 1, 34223443, 2369),
(9, 71, 1, 34223443, 3226),
(9, 70, 1, 1122433, 5895),
(10, 71, 2, 34223443, 5993),
(11, 70, 3, 1122433, 8786),
(11, 69, 3, 34223443, 5571),
(12, 70, 2, 1122433, 7106),
(13, 71, 1, 34223443, 5160),
(13, 70, 1, 1122433, 4654),
(13, 74, 1, 34445, 2710),
(14, 71, 1, 34223443, 8562),
(14, 73, 2, 34223443, 2759),
(14, 69, 1, 34223443, 7028),
(15, 70, 1, 1122433, 2721),
(15, 74, 1, 34445, 1693),
(16, 75, 1, 34223443, 7329),
(16, 69, 1, 34223443, 2804),
(17, 73, 1, 34223443, 1722),
(17, 71, 1, 34223443, 8877),
(19, 70, 1, 1122433, NULL),
(20, 70, 1, 1122433, NULL),
(21, 70, 2, 1122433, NULL),
(22, 70, 2, 1122433, NULL),
(23, 70, 2, 1122433, NULL),
(24, 70, 2, 1122433, NULL),
(25, 70, 2, 1122433, NULL),
(26, 70, 2, 1122433, NULL),
(27, 70, 2, 1122433, NULL),
(28, 70, 2, 1122433, NULL),
(29, 70, 2, 1122433, NULL),
(30, 70, 1, 1122433, NULL),
(31, 70, 1, 1122433, NULL),
(32, 71, 1, 34223443, NULL),
(33, 69, 1, 34223443, NULL),
(34, 70, 2, 1122433, NULL),
(34, 69, 2, 34223443, NULL),
(35, 70, 1, 1122433, NULL),
(36, 70, 1, 1122433, NULL),
(36, 69, 1, 34223443, NULL),
(37, 70, 1, 1122433, NULL),
(37, 69, 1, 34223443, NULL),
(37, 74, 1, 34445, NULL),
(38, 71, 1, 34223443, NULL),
(38, 73, 1, 34223443, NULL),
(38, 75, 1, 34223443, NULL),
(39, 72, 1, 1223433, NULL),
(40, 70, 1, 1122433, NULL),
(40, 69, 1, 34223443, NULL),
(41, 70, 1, 1122433, NULL),
(41, 75, 1, 34223443, NULL),
(42, 71, 1, 34223443, NULL),
(43, 74, 1, 34445, NULL),
(43, 70, 1, 1122433, NULL),
(44, 71, 1, 34223443, NULL),
(45, 71, 1, 34223443, NULL),
(46, 76, 1, 200000, NULL),
(46, 71, 1, 34223443, NULL),
(47, 76, 1, 1000000, NULL),
(48, 76, 1, 1000000, NULL),
(49, 73, 1, 247000, NULL),
(50, 71, 2, 79000, NULL),
(51, 71, 1, 79000, NULL),
(52, 71, 7, 79000, NULL),
(53, 71, 7, 79000, NULL),
(54, 70, 1, 200000, NULL),
(57, 69, 4, 500000, NULL),
(58, 71, 1, 79000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` int(11) NOT NULL,
  `MSKH` int(11) DEFAULT NULL,
  `MSNV` int(11) DEFAULT NULL,
  `NgayDH` date DEFAULT NULL,
  `NgayGH` date DEFAULT NULL,
  `TrangThai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`SoDonDH`, `MSKH`, `MSNV`, `NgayDH`, `NgayGH`, `TrangThai`) VALUES
(8, 3, 1, '2021-05-31', '2021-06-05', 1),
(9, 3, 1, '2021-05-31', '2021-06-05', 1),
(10, 3, 1, '2021-05-31', '2021-06-05', 1),
(11, 3, 1, '2021-05-31', '2021-06-05', 1),
(12, 3, 1, '2021-05-31', '2021-06-05', 1),
(13, 3, 1, '2021-05-31', '2021-06-05', 1),
(14, 3, 1, '2021-05-31', '2021-06-05', 0),
(15, 3, 1, '2021-05-31', '2021-06-05', 0),
(16, 3, 1, '2021-05-31', '2021-06-05', 0),
(17, 3, 1, '2021-05-31', '2021-06-05', 0),
(18, 3, 1, '2021-06-05', '2021-06-10', 0),
(19, 3, 1, '2021-06-05', '2021-06-10', 0),
(20, 3, 1, '2021-06-05', '2021-06-10', 0),
(21, 3, 1, '2021-06-05', '2021-06-10', 0),
(22, 3, 1, '2021-06-05', '2021-06-10', 0),
(23, 3, 1, '2021-06-05', '2021-06-10', 0),
(24, 3, 1, '2021-06-05', '2021-06-10', 0),
(25, 3, 1, '2021-06-05', '2021-06-10', 0),
(26, 3, 1, '2021-06-05', '2021-06-10', 0),
(27, 3, 1, '2021-06-05', '2021-06-10', 0),
(28, 3, 1, '2021-06-05', '2021-06-10', 0),
(29, 3, 1, '2021-06-05', '2021-06-10', 0),
(30, 3, 1, '2021-06-05', '2021-06-10', 0),
(31, 3, 1, '2021-06-05', '2021-06-10', 0),
(32, 3, 1, '2021-06-05', '2021-06-10', 0),
(33, 3, 1, '2021-06-05', '2021-06-10', 0),
(34, 3, 1, '2021-06-05', '2021-06-10', 0),
(35, 3, 1, '2021-06-05', '2021-06-10', 0),
(36, 3, 1, '2021-06-05', '2021-06-10', 0),
(37, 3, 1, '2021-06-05', '2021-06-10', 0),
(38, 3, 1, '2021-06-05', '2021-06-10', 0),
(39, 3, 1, '2021-06-05', '2021-06-10', 0),
(40, 3, 1, '2021-06-05', '2021-06-10', 0),
(41, 3, 1, '2021-06-05', '2021-06-10', 0),
(42, 3, 1, '2021-06-05', '2021-06-10', 0),
(43, 3, 1, '2021-06-05', '2021-06-10', 0),
(44, 3, 1, '2021-06-05', '2021-06-10', 0),
(45, 3, 1, '2021-06-05', '2021-06-10', 0),
(46, 3, 1, '2021-06-05', '2021-06-10', 0),
(47, 5, 1, '2021-06-05', '2021-06-10', 0),
(48, 5, 1, '2021-06-05', '2021-06-10', 0),
(49, 4, 1, '2021-06-05', '2021-06-10', 0),
(50, 4, 6, '2021-06-06', '2021-06-11', 0),
(51, 4, 1, '2021-06-06', '2021-06-11', 0),
(52, 4, 3, '2021-06-06', '2021-06-11', 0),
(53, 4, 3, '2021-06-06', '2021-06-11', 0),
(54, 4, 3, '2021-06-06', '2021-06-11', 0),
(55, 4, 1, '2021-06-06', '2021-06-11', 0),
(56, 4, 2, '2021-06-06', '2021-06-11', 0),
(57, 4, 1, '2021-06-06', '2021-06-11', 0),
(58, 4, 4, '2021-06-06', '2021-06-11', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachikh`
--

CREATE TABLE `diachikh` (
  `MaDC` int(11) NOT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `MSKH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` int(11) NOT NULL,
  `TenHH` char(50) DEFAULT NULL,
  `QuyCach` text DEFAULT NULL,
  `Gia` int(50) DEFAULT NULL,
  `SoLuongHang` int(11) DEFAULT NULL,
  `MaLoaiHang` int(11) NOT NULL,
  `GhiChu` text DEFAULT NULL,
  `DuongDan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `QuyCach`, `Gia`, `SoLuongHang`, `MaLoaiHang`, `GhiChu`, `DuongDan`) VALUES
(69, 'Tai Ương', 'Minimum: OS: Windows Vista/Windows 7/Windows 8 Processor: 1.7+ GHz or better Memory: 1 GB RAM Graphics: Radeon HD5450 or better; 256 MB or higher DirectX: Version 9.0c Network: Broadband Internet connection Storage: 750 MB available space Sound Card: 100% DirectX9.0c compatible sound card and drivers', 500000, 96, 4, 'I. Sơ lược game Tai Ương Khai sinh bởi nhà sáng tạo game Beaztek Studio, Tai Ương (hay The Scourge) là một sản phẩm game trên nền tảng Unity. Điểm đặc biệt của Tai Ương nằm ở việc sử dụng màu sắc cũng như bối cảnh thuần Việt. Ngoài ra, tựa game này còn có phần cốt truyện khai thác từ những câu chuyện kinh dị đô thị Việt Nam mà có thể chúng ta đều đã từng nghe qua.  Ngay từ trailer, Tai Ương đã khiến cho người chơi cực kỳ tò mò vì những ẩn ý ma quái trong từng cảnh quay. Những bóng đen thấp thoáng, tờ báo đưa bản tin chết chóc, gian điệu nhạc nền kỳ bí,... tất cả đã khiến Tai Ương trở nên vô cùng bí ẩn.   II. Bối cảnh câu chuyện có thật Như đã đề cập, Tai Ương được nhà sản xuất sáng tạo dựa trên những câu chuyện kinh dị có thật. Thông qua những bối cảnh của teaser game, chúng ta có thể đoán được một số chi tiết của tựa game kinh dị này.  Bối cảnh câu chuyện có thật Bối cảnh câu chuyện có thật  Câu chuyện của Tai Ương được kể trong một căn nhà với lối kiến trúc phổ biến ở Việt Nam. Dần dần men theo hành lang, người chơi sẽ được dẫn đến một căn phòng nơi có tiếng nhạc phát bài “Chuyện tình người trinh nữ tên Thi” vang lên réo rắt. Nhà phát hành cũng đã sử dụng phần nhạc với kiểu thu âm của những năm 75 khiến cho không khí game càng trở nên hồi hộp, ma mị hơn.  Theo những chia sẻ của nhạc sĩ Hoàng Thi Thơ, ca khúc ', './hinh/taiuong.jpg'),
(70, 'Thần Trùng', 'Minimum: OS: Windows Vista/Windows 7/Windows 8 Processor: 1.7+ GHz or better Memory: 1 GB RAM Graphics: Radeon HD5450 or better; 256 MB or higher DirectX: Version 9.0c Network: Broadband Internet connection Storage: 750 MB available space Sound Card: 100% DirectX9.0c compatible sound card and drivers', 200000, 99, 4, 'I. Thần Trùng hé lộ trailer mới nhất Vào ngày 16/03/2021, trailer về  tựa game Thần Trùng được hé lộ kênh Trực Tiếp Game khiến cộng đồng game thủ Việt trở nên phấn khích hơn bao giờ hết. Được biết, Thần Trùng là một sản phẩm game kinh dị thuần Việt do DUT Studio (chỉ gồm 3 thành viên) sản xuất, lấy bối cảnh 100% tại Việt Nam.  II. Bối cảnh truyền thuyết dân gian trong Thần Trùng Trong Thần Trùng, game thủ sẽ đến với thủ đô Hà Nội phồn hoa chứa đầy những câu chuyện huyền bí đằng sau. Trò chơi lấy bối cảnh một khu tập thể cũ tối tăm với gạch hoa, biển hiệu cổ động, chuồng cọp cùng những hình ảnh quen thuộc với người dân Việt Nam.  Mở đầu trailer là cảnh trời mưa tầm tã tại một khu nhà tập thể cũ kỹ, nơi gần như không có sự xuất hiện của bóng người ngoại trừ nhân vật chính đang cầm đèn pin đi dọc hành lang để khám phá các căn phòng. Khi bước vào hành lang, một cánh cửa bỗng tự mở ra, vết máu ghê rợn khiến người xem không khỏi lạnh gáy.  Một cỗ quan tài cùng tiếng khóc than phát ra từ trong căn phòng. Điều kỳ lạ là cô gái xinh đẹp ngồi ở cửa sổ trước đó đã biến mất một cách bí ẩn rồi bỗng dưng xuất hiện với cặp mắt rỉ máu khiến nhiều game thủ phải đứng tim.  Cuối trailer là một tờ báo với mẩu tin của tờ báo Hà Nội, và tiêu đề lớn nhất \"Bí Ẩn Giữa Thủ Đô, một gia đình 5 người qua đời trong 1 đêm\" tiết lộ cho người xem về một vụ tai nạn kinh hoàng, có thể 5 người xấu số này là một gia đình. Theo chia sẻ của chính Dũng CT, Thần Trùng sẽ xoay quanh câu chuyện về một nam thanh niên, người đã mắc kẹt vào cơn ác mộng không hồi kết ở chính căn nhà trọ của mình.', './hinh/thantrung.jpg'),
(71, '1406', 'OS: Windows 7/8/10 Processor: Intel CORE i5 Memory: 6 GB RAM Graphics: Nvidia Geforce 920mx Storage: 5 GB available space Additional Notes: 64-Bit', 79000, 13, 4, 'Câu chuyện về nhà văn Mike Williams, một chuyên gia về các hiện tượng huyền bí, anh ta được gửi đến thành phố chết Centralia để tìm kiếm nguồn cảm hứng, để hoàn thành việc viết cuốn sách của anh ấy về những điều huyền bí.  Mike Williams, cố gắng viết sách, là một chuyên gia về điều huyền bí, bản thân anh không tin vào sự tồn tại của ma, coi loại hoạt động này là thu nhập thông thường của anh và không có gì khác. Một ngày vô nghĩa khác Mike bắt đầu với việc duyệt Internet, anh đọc về nhiều nơi xa lạ khác nhau, để tìm kiếm nguồn cảm hứng và tư liệu, tình cờ đọc được một bài báo về thành phố chết Centralia, anh quyết định đến thành phố này,nhưng vì sự nhộn nhịp của thành phố này nên bằng cách nào đó đã  \"không cho phép\" anh ấy để hoàn thành cuốn sách của mình.  Toàn bộ câu chuyện bắt đầu ở Centralia, Pennsylvania.  Vào giữa thế kỷ XIX, tại đây, phía đông dãy núi Allegheny, người ta đã phát hiện ra trữ lượng than đá khá phong phú. Sự phát triển công nghiệp ở Centrailia ít nhiều cũng đã kéo dài thành công trong khoảng một thế kỷ và có lẽ hơn thế nữa , nếu không phải do hoàn cảnh hợp lưu, và cùng với sự cẩu thả trong việc sản xuất của con người.  Vào đầu những năm 1960, cư dân địa phương đã biến cái hố không sử dụng của một trong những mỏ xung quanh thành một bãi rác của thành phố.  Các tình nguyện viên đến dọn dẹp nó vào tháng 5 năm 1962, và cách duy nhất để dọn nơi này không có gì tốt hơn là phải đốt nó đi - một cách làm mà họ đã từng áp dụng ở Centrelia. Một hoạt động đơn giản chỉ là đốt rác đã được thực hiện thành công, nhưng với việc dập tắt sau đó, tình hình trở nên phức tạp hơn rất nhiều.  Từ bãi rác, ngọn lửa lan sang các mỏ than còn lại trong khu mỏ, lan tới những ngòi nổ còn tồn dư, và ngọn lửa bùng cháy khá lớn, và sau đó liên tục lan rộng qua vùng của mỏ đã ngừng hoạt động.  Một thời gian sau khi sự cố xảy ra, bang cầm quyền cuối cùng đã chú ý đến quy mô của vấn đề và cấp kinh phí để giải quyết vấn đề này. Vào thời điểm này, ngọn lửa đã lan rộng xuống tới Centreilia đến nỗi lối thoát duy nhất là di tản hoàn toàn thị trấn nhỏ này, nơi có khoảng 1 nghìn người đang sinh sống.  Bạn sẽ thấy trò chơi sẽ có vài cái kết khác nhau để bạn có thể khám phá , cùng với đó là bầu không khí kinh dị khủng khiếp.  Tôi đã không tin vào sự tồn tại của một con quỷ cho đến tận ngày này ! Tôi thực sự hy vọng rằng tôi sẽ nhìn thấy bình minh.', './hinh/1406.jpg'),
(72, 'The Witcher 3', 'CPU: Intel CPU Core i7 3770 3,4 GHz / AMD CPU AMD FX-8350 4 GHz. VGA: Nvidia GPU GeForce GTX 770 / AMD GPU Radeon R9 290. RAM 8GB. Windows 7 64-bit hoặc Windows 8 (8.1) 64-bit.', 300000, 1, 5, 'Với một nền tảng đồ họa tuyệt mỹ, lối chơi đa dạng và có chiều sâu, cùng với một cốt truyện gợi mở, tựa game này đã làm cho cộng đồng game phải điên đảo với một siêu phẩm hay như vậy. Và chính siêu phẩm này cũng đã hướng sự chú ý vào Ba Lan, một đất nước vô danh trong mắt game thủ, nay đã trở nên nổi tiếng khi chúng ta nhập vai vào anh hùng Geralt xứ Rivia.    Game cực kì cuốn hút người chơi không chỉ ở nhiệm vụ chinh mà còn ở các nhiệm vụ và mạch truyện phụ khác. Các thủ pháp diễn tả khác cũng đã đặc tả được khung cảnh hỗn mang và đầy chết chóc trong the Witcher 3. Bên cạnh đó, các chuỗi nhiệm vụ đặc biệt, sự kết nối hình âm – chân thực, và hệ thống kĩ năng – trang bị rất ấn tượng khiến tựa game này chẳng bao giờ mất đi số lượng người chơi khổng lồ cho đến bây giờ.  Sản phẩm này bạn mua sẽ có bao gồm:   The Witcher® 3: Wild Hunt  The Witcher 3: Wild Hunt - Hearts of Stone  The Witcher 3: Wild Hunt - Blood and Wine', './hinh/thewitcher.png'),
(73, 'Subnautica', 'OS: Windows Vista SP2 or newer, 64-bit Processor: Intel Haswell 2 cores / 4 threads @ 2.5Ghz or equivalent Memory: 4 GB RAM Graphics: Intel HD 4600 or equivalent - This includes most GPUs scoring greater than 950pts in the 3DMark Fire Strike benchmark Storage: 6 GB available space Additional Notes: Subnautica is an Early Access game, and minimum specifications may change during development', 247000, 9, 5, 'Subnautica là một trò chơi phiêu lưu, khám phá, thế giới mở ở dưới nước được đặt trên một hành tinh đại dương ngoài hành tinh. Một thế giới rộng mở, tự do và nguy hiểm đang chờ đón bạn! Khi vào game bạn sẽ rơi xuống một thế giới đại dương ngoài hành tinh, các đại dương của Subnautica trải dài từ các rặng san hô cạn mặt trời đến các rãnh đào sâu dưới biển, các mỏ dung nham và các dòng sông dưới nước phát quang sinh học. Quản lý nguồn cung cấp oxy của bạn khi bạn khám phá rừng tảo bẹ, cao nguyên, rạn san hô và các hệ thống hang động quanh co dưới đáy đại dương. Bạn cần tìm kiếm, thu thập thức ăn và phát triển thiết bị để khám phá. Thu thập tài nguyên từ đại dương xung quanh bạn, thiết bị lặn, đèn chiếu sáng, môi trường sống, tìm các tài nguyên hiếm hơn, cho phép bạn tạo ra các vật phẩm cao cấp hơn. Xây dựng căn cứ dưới đáy biển. Chọn vị trí, bố trí các thành phần, và quản lý toàn vẹn thân tàu cũng như như chiều sâu và áp lực. Sử dụng cơ sở của bạn để lưu trữ tài nguyên, xe, công viên và bổ sung nguồn cung cấp oxy khi bạn khám phá đại dương rộng lớn. Khi mặt trời lặn, những kẻ săn mồi xuất hiện. Đại dương không nhân từ cho những người bị bắt cóc trong bóng tối. Các khu vực được an toàn để khám phá trong ngày trở nên nguy hiểm vào ban đêm, nhưng cũng tiết lộ một vẻ đẹp mà những người trốn tránh và sợ bóng tối sẽ không bao giờ nhìn thấy. Hệ thống hang động dưới đáy biển, từ những đoạn tối ngột ngạt đến hang động được thắp sáng bởi sinh vật phát quang sinh học và dòng dung nham nóng bỏng. Khám phá thế giới bên dưới đáy đại dương, nhưng bạn nên để ý mức độ oxy của bạn, và cẩn thận để tránh những mối đe dọa ẩn giấu trong bóng tối. Điều gì đã xảy ra với hành tinh này? Có rất nhiều điều bất thường và có điều gì đó không đúng. Điều gì khiến bạn gặp sự cố? Điều gì đang lây nhiễm cho sinh vật biển? Ai đã xây dựng các cấu trúc bí ẩn nằm rải rác quanh đại dương? Tất cả đang chờ bạn khám phá.', './hinh/subnautica.jpg'),
(74, 'Raft', 'OS: Windows 7 or later Processor: 2.6 GHz Dual Core or similar Memory: 4 GB RAM Graphics: GeForce GTX 500 series or similar DirectX: Version 11 Network: Broadband Internet connection Storage: 3 GB available space', 186000, 80, 5, 'Raft – một trò chơi sinh tồn mới ra mắt vào cuối năm 2016 và tạo nên được tiếng vang lớn. Raft có tên đầy đủ là Original Survival Game. Trò chơi này có 2 phần là cuộc sinh tồn trên biển và chinh phục biển cả. Bạn có thể chọn chơi một trong 2 phần. Khi chơi, bạn sẽ được tận hưởng cảm giác thú vị ở môi trường sinh tồn ngoài khơi. Không chỉ thế, việc lênh đênh trên biển, tự mình phải xây nhà và đi tìm lương thực để chống lại lũ cá mập háu ăn ngoài. Bạn vất vả nghĩ cách lắm đấy nhưng thú vị vẫn còn phía trước, ngại ngần gì chút khó khăn đúng không nào. Cách chơi Raft không hề gây khó khăn như bạn nghĩ đâu. Bạn chỉ cần nhớ thật kỹ các phím cũng như chức năng của nó là được. Thêm vào đó, bạn cần sử dụng linh hoạt các phím, điều này sẽ giúp cho việc chinh phục biển cả không phải trở ngại có thể làm khó bạn. Bên cạnh đó, các nguyên liệu cần được bạn sử dụng và ghép túi đồ một cách phù hợp để không bị thiếu lương thực khi xây nhà. Bạn đừng bỏ cuộc quá nhanh vì những thử thách sau đó không thể làm khó bạn được nữa. Chơi nhiều kinh nghiệm dày, dặn thêm khả năng thuần thục, điêu luyện mọi thử thách chỉ là chuyện nhỏ. Đặc biệt, trong cái khó mới có thể phát huy được hết tiềm lực nên hãy thử sức hết mình nhé. Ngoài ra, vài hòn đảo sẽ nhảy lên khiến bạn dễ dàng tiếp cận nhưng có một số thì không đâu. Lúc này, bạn cần tỉnh táo và cần biết cách kết hợp giữa cầu thang và mái lợp ngói để thành cầu nối giữa thuyền và các điểm trên cao của đảo bạn đang sinh tồn. Bạn cứ xây cao và dài ra, lên đảo cái một liền. Không khó đâu, cứ thử chơi theo cách này xem.', './hinh/raft.jpg'),
(75, 'Ride 2', 'OS: Windows® 7 SP1 / Windows® 8 / Windows® 8.1 / Windows® 10 Processor: Intel i5 2500K 3.3GHz / AMD Phenom II X4 850 or equivalent Memory: 4 GB RAM Graphics: GeForce GT 640 / Radeon HD 6670 1GB* DirectX: Version 10 Storage: 33 GB available space Sound Card: DirectX compatible Additional Notes: *Laptop versions of graphics cards may work but are not officially supported.', 300000, 100, 1, 'Chào mừng bạn đến với ngôi đền của xe máy, nhà để xe kỹ thuật số duy nhất cho phép bạn khám phá, biến đổi và thử nghiệm những chiếc xe nguyên bản, mang tính biểu tượng và nhanh nhất trên thế giới. Hàng đầu của hàng loạt các thương hiệu nổi tiếng nhất sẽ chờ đợi bạn cạnh tranh với nhau trong một trò chơi điện tử độc đáo và cho cả thế giới thấy tiềm năng đầy đủ của họ! Hơn 170 chiếc xe đạp là những nhân vật chính không thể tranh cãi trong chương mới của trò chơi đua xe hai bánh được chờ đợi từ lâu này! Cảm nhận adrenaline trào dâng trong huyết quản của bạn và đối mặt với những khúc cua kinh hoàng nhất bằng niềm đam mê và sự táo bạo của một tay đua chuyên nghiệp! RIDE 2 sẽ bao gồm các đường đua của những cuộc đua hoang dã và thú vị nhất mọi thời đại! Đường đua Country, City, GP, Road, Motard và Drag: thách thức những loại đường khó khăn nhất và để lại vết trượt sau mỗi tiếng lốp bốp!  NHỮNG CHIẾC XE ĐẠP Hơn 170 xe đạp! Thu thập tất cả chúng để tạo nhà để xe cá nhân của riêng bạn, chọn từ các danh mục và mô hình mạnh mẽ và mang tính biểu tượng nhất (như Nakeds và Supersports).  CÁC BÀI HÁT Du lịch vòng quanh thế giới trong một chuỗi sự kiện đặc biệt và khó quên: đường đua GP, đường đua đồng quê và đường đua thành phố. Hơn 30 đường đua, bao gồm các huyền thoại của đua xe mô tô như Nürburgring Nordschleife.  TÙY CHỈNH Tăng sức mạnh cho chiếc xe đạp của bạn bằng cách sửa đổi 5 lĩnh vực chính: Động cơ Phanh và hệ thống treo Bánh xe Quá trình lây truyền Tính thẩm mỹ Bạn có hơn 20 sửa đổi khác nhau dành cho mình, bao gồm cả bộ truyền động hoàn toàn mới, cho phép lắp đặt hệ thống dây dẫn bằng sợi thủy tinh được chế tạo đặc biệt cho những cuộc đua khắc nghiệt nhất. Tùy chỉnh hồ sơ người lái của bạn, quần áo của họ (Đường phố / Đường đua / Supermoto) và phong cách cưỡi nhờ hệ thống chỉnh sửa tư thế nâng cao!  CHẾ ĐỘ TRÒ CHƠI 12 chế độ cho trải nghiệm trò chơi lâu dài và trên hết là thú vị! Phi tiêu trên nữ hoàng của các đường đua, Nürburgring, đi xe theo phong cách motocross điển hình, đua dọc theo các bố cục quanh co, nhảy, đường cong parabol và thi đấu trong các cuộc đua xe đặc biệt giữa các nón giao thông. Nhưng hãy cẩn thận! Bạn phải thực sự nhanh chóng và chính xác nếu bạn muốn đánh bại đối thủ của mình vì khi bạn đi xe, thời gian sẽ không ngừng trôi!  RIDE 2 IN A NUTSHELL Hơn 170 mẫu xe đạp Các danh mục mới như Sport Bike 2 Strokes huyền thoại, Supermotos và Naked Café Racers 30 tuyến đường khác nhau với các đặc điểm địa hình khác nhau, mỗi tuyến 22 nhà sản xuất xe máy quan trọng nhất thế giới Hơn 1200 bộ phận có thể tùy chỉnh và hơn 600 đời sống khác nhau mà bạn có thể sử dụng để biến một chiếc xe máy cho mọi người thành chiếc xe đạp tùy chỉnh của riêng BẠN Các tính năng Xã hội mới và Bạn bè mới để có trải nghiệm trò chơi hoàn chỉnh và thú vị', './hinh/ride2.jpg'),
(76, 'NBA 2K20', 'Operating system : Windows 7 64-bit, Windows 8.1 64-bit or Windows 10 64-bit Processor : Intel® Core ™ i3-530 @ 2.93 GHz / AMD FX-4100 @ 3.60 GHz or better RAM: 4 GB of memory Graphics: NVIDIA® GeForce® GT 450 1GB / AMD® Radeon ™ HD 7770 1GB or better DirectX: Version 11 Disk space : 80 GB of available disk space Soundcard : DirectX 9.0x compatible', 1000000, 0, 1, 'Năm nay nhà phát hành đã đưa ra quyết định rất đặc biệt đó là lựa chọn 2 ngôi sao Anthony Davis và Dwyan Wade. Tân binh của Los Angeles Lakers là cầu thủ xuất hiện với tần suất lớn nhất trên bìa đĩa NBA 2K. Chỉ trong vòng 4 năm anh đã có 2 lần vinh dự được lựa chọn xuất hiện trên bìa đĩa, điều mà chưa cầu thủ nào từng làm được kể cả LeBron James hay Stephen Curry. Lần gần nhất Anthony Davis xuất hiện trên bìa đĩa NBA 2K16 cùng với 2 ngôi sao khác là James Harden và Stephen Curry. Đối với cái tên còn lại Dwyane Wade, sau 16 năm chơi bóng anh cuối cùng đã có lần đầu tiên xuất hiện trên bìa đĩa tựa game nổi tiếng này. Đáng chú ý Dwyane Wade đã tuyên bố giải nghệ ở mùa giải vừa qua, vì vậy động thái này như một lời tri ân với sự nghiệp lừng lẫy của Wade          NBA 2K20 chính là trò chơi điện tử mô phỏng bóng rổ hấp dẫn bậc nhất hiện nay, hệ thống vật lý tỏ ra chân thực hơn so với phiên bản 2K19, qua đó các nhân vật trong game có khả năng dẫn bóng tốt hơn. Nhiều động tác mang thương hiệu của những siêu sao như Stephen Curry hay LeBron James cũng được thêm thắt, kể cả các tình huống di chuyển không bóng.', './hinh/nba2k.jpg'),
(78, 'Esports Life', 'OS: Windows XP Processor: Intel i3 or equivalent Memory: 2 GB RAM Graphics: 1GB VRAM DirectX: Version 9.0 Storage: 8 GB available space', 180000, 50, 1, 'Esports Life là phần mềm giả lập dành cho game thủ chuyên nghiệp, trong đó bạn cảm nhận được cảm giác hồi hộp khi chơi game cạnh tranh khi cố gắng cân bằng nó với cuộc sống học tập và xã hội của mình. Thể hiện kỹ năng của bạn trong hai thể loại esports phổ biến nhất –FPS và MOBA– và đánh bại từng đối thủ của bạn. Hãy rèn luyện chăm chỉ và đạt đến đỉnh cao của sự nổi tiếng trong ông trùm simulator cuộc đời nhiều tập nhiều tập này.    Episode One: Dreams of Glory mô tả câu chuyện của một game thủ nghiệp dư khao khát thành công trong thế giới game chuyên nghiệp. Tùy chỉnh nhân vật của bạn và tham gia cùng Mike, Mark và Amy trong cuộc tìm kiếm ngôi sao lớn nhất của họ. Hãy gặp kẻ thù của bạn, Russell, và đừng để anh ta làm hỏng giấc mơ trở thành huyền thoại thể thao điện tử của bạn.    Hãy trở thành tâm điểm bằng cách chiến thắng các giải đấu và ký hợp đồng với các câu lạc bộ thể thao điện tử tốt nhất trên thế giới. Đây là trình mô phỏng game thủ chuyên nghiệp đầu tiên và duy nhất bao gồm giấy phép chính thức. Nhiều đội sẽ được bổ sung trong tương lai gần. Số phận của thể thao điện tử nằm trong tay bạn!', './hinh/esportlife.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` int(11) NOT NULL,
  `HoTenKH` varchar(50) DEFAULT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `SoDienThoai` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `MatKhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `HoTenKH`, `DiaChi`, `SoDienThoai`, `Email`, `MatKhau`) VALUES
(3, 'anhduy', 'ct', '123456789', 'duybui100073@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'anhduy', 'ct', '3243235565', 'linhngu', '202cb962ac59075b964b07152d234b70'),
(5, 'admin', 'nga sau', '0351234567', 'admin', '71880c184a693b6c91f8692b8fd004ad'),
(9, 'duy', 'can tho', '012345678', 'anhduy', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihanghoa`
--

CREATE TABLE `loaihanghoa` (
  `MaLoaiHang` int(11) NOT NULL,
  `TenLoaiHang` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaihanghoa`
--

INSERT INTO `loaihanghoa` (`MaLoaiHang`, `TenLoaiHang`) VALUES
(1, 'thethao'),
(2, 'hanhdong'),
(3, 'sinhton'),
(4, 'kinhdi'),
(5, 'khampha'),
(6, 'giaido'),
(7, 'mophong'),
(8, 'khac');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` int(11) NOT NULL,
  `HoTenNV` varchar(50) DEFAULT NULL,
  `ChucVu` text DEFAULT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `SoDienThoai` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `ChucVu`, `DiaChi`, `SoDienThoai`) VALUES
(1, 'Bui Le Anh Duy', 'Nhan Vien', 'Hau Giang', '0354136770'),
(2, 'Phan Van Vuong Linh', 'Nhan vien', 'Can Tho', '0123098765'),
(3, 'Kim Thanh Cong', 'Nhan vien', 'Soc Trang', '0356780943'),
(4, 'Do Thong Tri', 'Nhan vien', 'Soc Trang', '0351248907'),
(5, 'Do Nguyen Duy Linh', 'Nhan vien', 'Can Tho', '0985765123'),
(6, 'Tran Thanh Binh', 'Nhan vien', 'An Giang', '0351240987');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD KEY `MSHH` (`MSHH`),
  ADD KEY `SoDonDH` (`SoDonDH`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `MSNV` (`MSNV`),
  ADD KEY `MSKH` (`MSKH`);

--
-- Chỉ mục cho bảng `diachikh`
--
ALTER TABLE `diachikh`
  ADD PRIMARY KEY (`MaDC`),
  ADD KEY `MSKH` (`MSKH`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaLoaiHang` (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Chỉ mục cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  ADD PRIMARY KEY (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `SoDonDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `diachikh`
--
ALTER TABLE `diachikh`
  MODIFY `MaDC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MSHH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MSKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  MODIFY `MaLoaiHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MSNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`),
  ADD CONSTRAINT `chitietdathang_ibfk_2` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`);

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`),
  ADD CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`),
  ADD CONSTRAINT `dathang_ibfk_3` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Các ràng buộc cho bảng `diachikh`
--
ALTER TABLE `diachikh`
  ADD CONSTRAINT `diachikh_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
