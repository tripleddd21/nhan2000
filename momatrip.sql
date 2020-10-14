-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2018 lúc 03:20 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `halotrip`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `Ma_admin` int(11) NOT NULL,
  `Ten_admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`Ma_admin`, `Ten_admin`, `Email`, `Password`, `Phone`) VALUES
(1, 'Nhom Halotrip', 'admin', '123', '0869029472');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `Ma_banner` int(11) NOT NULL,
  `Ten_banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Chi_tiet` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_loaitour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`Ma_banner`, `Ten_banner`, `Chi_tiet`, `Hinh_anh`, `Ma_loaitour`) VALUES
(1, 'Tour trong nước', 'Tour trong nước rất đẹp', 'view/images/banner/news_1.jpg', 2),
(2, 'Tour nước ngoài', 'Tour nước ngoài', 'view/images/banner/news.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `Ma_gallery` int(11) NOT NULL,
  `Ten_gallery` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`Ma_gallery`, `Ten_gallery`, `Hinh_anh`) VALUES
(2, 'Brazil', 'view/images/gallery/popular_1.jpg'),
(3, 'Canada', 'view/images/gallery/popular_2.jpg'),
(4, 'Malaysia', 'view/images/gallery/popular_3.jpg'),
(5, 'Japan', 'view/images/gallery/popular_4.jpg'),
(6, 'Việt Nam', 'view/images/gallery/popular_5.jpg'),
(7, 'Lào', 'view/images/gallery/popular_6.jpg'),
(8, 'Campuchia', 'view/images/gallery/popular_7.jpg'),
(9, 'Myanma', 'view/images/gallery/popular_8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `Ma_KH` int(11) NOT NULL,
  `Ten_KH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`Ma_KH`, `Ten_KH`, `Email`, `Sdt`, `Mat_khau`) VALUES
(1, 'Võ Đức Mạnh', 'voducmanh963@gmail.com', '0869029472', '0869029472Manh'),
(2, 'Anh Trung', 'trung@gmail.com', '0869029472', '1234'),
(3, 'Hải', 'haikute@gmail.com', '0869029472', '123'),
(4, 'Lăng Chi Nhiều', 'chinhieu@gmail.com', '0869029472', '123'),
(6, 'Đào Hữu Hải', 'huuhai@gmail.com', '0869029472', '123'),
(9, 'Trần Thiện Trung', 'thientrung@gmail.com', '0869029472', '123'),
(10, 'Trần Bá Hộ', 'tranbaho@gmail.com', '0869029472', '123'),
(11, 'Phạm Văn A', 'phamvana@gmail.com', '0869029472', '123'),
(12, 'Nguyễn Thị B', 'nguyenthiB@gmail.com', '0869029472', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tour`
--

CREATE TABLE `loai_tour` (
  `Ma_loaitour` int(11) NOT NULL,
  `Ten_loaitour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tour`
--

INSERT INTO `loai_tour` (`Ma_loaitour`, `Ten_loaitour`, `Sort`) VALUES
(1, 'Tour Đất Liền', 1),
(2, 'Tour Biển Đảo', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `Ma_news` int(11) NOT NULL,
  `Ten_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Mo_ta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Chi_tiet` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`Ma_news`, `Ten_news`, `Mo_ta`, `Chi_tiet`, `Hinh_anh`) VALUES
(2, 'Hội Thảo Chia Sẻ Kinh Nghiệm', 'Vào học các trường công tại Singapore là ước mơ của nhiều học sinh Tiểu học và Trung học Việt Nam.', 'Đó là nội dung của buổi Hội thảo do Văn phòng Du học Saigontourist tổ chức tại Văn phòng 102 Nguyễn Huệ (Q.1, TP.HCM) vào lúc 3 giờ chiều thứ Bảy ngày 01/12. Đại diện tuyển sinh của Học Viện SSTC Singapore - Ông  Đinh Hoàng Hà (Kevin Dinh) - là diễn giả chính của buổi hội thảo này,\r\nÔng Kevin Dinh vừa là Đại diện tuyển sinh của Học Viện SSTC Singapore và cũng là một phụ huynh có con đang học tại trường công lập Singapore. Vì thế, Ông thấu hiểu sâu sắc nỗi lo lắng của các phụ huynh khi đầu tư cho con học luyện thi vào trường công.\r\nTại buổi hội thảo, ông Kevin Dinh sẽ giải đáp tất cả các thắc mắc của phụ huynh và học sinh. Ngoài ra, ông còn chia sẻ về nhiều vấn đề có liên quan, như Chương trình Trung học công lập Singapore và những ưu điểm nối bật; Chi tiết về chương trình và tổng chi phí luyện thi vào công lập của SSTC; lộ trình luyện thi và chi phí phù hợp cho từng học sinh. Các thắc mắc của phụ huynh khi cho con nhỏ đi du học xa nhà và học sinh nhỏ tuổi liệu có thể thích nghi được với cuộc sống tại Singapore không… cũng sẽ được giải đáp tường tận.\r\nSSTC là một trong những nơi cung cấp các khóa học luyện thi vào hệ thống trường công lập tốt nhất tại Singapore. Được thành lập từ năm 1973 và tọa lạc ngay trung tâm đảo quốc Singapore, Học viện có hơn 40 năm kinh nghiệm trong việc giảng dạy và được nhận danh hiệu Edutrust 4 năm trong nhiều năm liền. Bên cạnh chất lượng giảng dạy cao, Học viện còn cung cấp cho học sinh dịch vụ lưu trú tại ký túc xá hoặc homestay.', 'view/images/news/news.jpg'),
(3, 'Tháp Eiffel Có Áo Mới', 'Kể từ thời điểm này, nếu bạn đến Paris và ghé thăm tháp Eiffel ở cự ly gần sẽ được nhìn thấy một bức tường kính ngay dưới chân tháp. ', 'Bức tường bao quanh khu vực đài tưởng niệm ra đời với mục đích bảo vệ biểu tượng của thành phố Paris khỏi các cuộc tấn công khủng bố. Bạn đừng lo bộ áo mới sẽ khiến việc chụp ảnh tháp Eiffel bớt đẹp, bức tường bằng kính chống đạn trị giá lên đến 40 triệu đô-la Mỹ này hoàn toàn trong suốt nên không ảnh hưởng đến cảnh quan. Tham khảo các hành trình đến Pháp tại: ', 'view/images/news/news_2.jpg'),
(4, 'NHỮNG ĐỊA ĐIỂM VUI CHƠI Ở SENTOSA SINGAPORE TUYỆT ĐỐI KHÔNG THỂ BỎ LỠ', 'Toàn bộ Sentosa có 4 khu giải trí và nghỉ dưỡng, bao gồm: Imbiah Lookout, Siloso Point, Beaches và Resorts World Sentosa với nhiều khu vui chơi giải trí phù hợp với nhu cầu của khách tham quan.', 'Không cần phải lặn lội đến tận nước Mỹ với chi phí đắt đỏ mới có thể chiêm ngưỡng những hình ảnh quen thuộc trong các bộ phim điện ảnh nổi tiếng của kinh đô Hollywood, đến với Universal Studios Singgapore là bạn đã thỏa mãn ước mơ của mình rồi.\r\nVới 24 đại cảnh theo 7 chủ đề phim nổi tiếng, Universal Studios Singapore là một thế giới thần tiên thu nhỏ dành cho trẻ em và cả người lớn. Vừa bước chân qua cánh cổng lớn, bạn sẽ gặp ngay những nhân vật trong phim hoạt hình, viễn tưởng yêu thích và còn nhiều bất ngờ đang chờ đón du khách. Đặc biệt, mỗi khu trò chơi đều có gian hàng bán đồ lưu niệm riêng với thiết kế dễ thương làm quà hay giữ kỷ niệm sau chuyến đi chơi.\r\n\r\nThủy cung S.E.A Aquarium\r\n\r\nThủy cung S.E.A. Aquarium đưa du khách đến với thế giới đại dương bao la tuyệt đẹp với hơn 100.000 sinh vật biển thuộc 800 loài và hơn 20.000 loại san hô sinh sống tại đây. Thủy cung cũng là nơi có dòng sông lười dài nhất thế giới (620m) và bộ sưu tập cá đuối lớn nhất thế giới.\r\n\r\nBên cạnh các bể nước là màn hình chiếu các đoạn phim về đời sống sinh vật biển, bảng thông tin cho du khách về từng loài sinh vật sống tại thủy cung.\r\n\r\nNgoài ra, du khách có thể trải nghiệm bữa tối tại nhà hàng Đại dương tại S.E.A Aquarium và nhìn ngắm những sinh vật biển bơi lội tung tăng xung quanh bàn ăn.', 'view/images/news/Universal-Studios_766231354.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `Ma_tour` int(11) NOT NULL,
  `Ten_tour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Mo_ta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Chi_tiet` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ngay_khoihanh` date NOT NULL,
  `Thoi_gian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_loaitour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`Ma_tour`, `Ten_tour`, `Mo_ta`, `Chi_tiet`, `Hinh_anh`, `Ngay_khoihanh`, `Thoi_gian`, `Gia`, `Ma_loaitour`) VALUES
(18, 'DU LỊCH NHA TRANG - ĐÀ LẠT', 'Chiêm ngưỡng vẻ đẹp của biển Cà Ná - một trong những bãi biển đẹp của miền Trung', 'Tour này có gì hay\r\n- Thư giãn và tắm khoáng trung tâm suối khoáng nóng I resort Nha Trang (tự túc chi phí tắm bùn các loại)\r\n- Tham quan dinh vua Bảo Đại - nơi vị vua cuối cùng của triều đại phong kiến Việt Nam từng sống và làm việc \r\n- Tham quan Thiền viện Trúc Lâm - nơi ngắm được toàn cảnh hồ Tuyền Lâm', 'view/images/tour/Langbiang-dalat-vietnam_519197881.jpg', '2018-12-08', '5 ngày 4 đêm', '5.000.000 VNĐ', 2),
(19, 'DU LỊCH HỒ TRÀM', '- Trải nghiệm dịch vụ 5 sao tại The Grand Ho Tram Strip  - Nghỉ ngơi thư giãn và tự do tắm biển', 'Giá tour bao gồm:  \r\n- Chi phí xe máy lạnh phục vụ theo chương trình.\r\n- Chi phí khách sạn tại The Grand Ho Tram Strip, loại phòng Grand Dune (tiêu chuẩn 2 khách/phòng). Lẻ khách ngủ phòng 3 khách hoặc chịu phí phụ thu phòng đơn.\r\n- Chi phí các bữa ăn theo chương trình (đặt bên ngoài khách sạn)\r\n- Hướng dẫn viên tiếng Việt suốt tuyến.\r\n- Quà tặng: nón,  nước suối, khăn lạnh, viết…\r\n\r\nGiá tour không bao gồm:  \r\n- Sử dụng các dịch vụ - tiện nghi của khách sạn (không bao gồm trong tiền phòng)\r\n- Chi phí ăn uống, giặt ủi, điện thoại và các chi phí cá nhân khác.\r\n- Chi phí phụ thu người nước ngoài, phụ thu phòng đơn (nếu có)', 'view/images/tour/ho-tram-outside.jpg', '2019-01-01', '7 ngày 6 đêm', '10.000.000 VNĐ', 2),
(20, 'DU LỊCH SINGAPORE', 'Thưởng lãm những thắng cảnh nổi tiếng Singapore với mức giá tiết kiệm, chất lượng tiêu chuẩn Saigontourist.', '- Khám phá vườn năng lượng với các “siêu cây”; đập nước Marina Barrage - hồ nước nhân tạo lớn khổng lồ ngay giữa trung tâm thành phố; Vườn chim Jurong.\r\n- Viếng Phật Nha Tự - tìm hiểu lịch sử, triết lý nhà Phật qua các tác phẩm nghệ thuật.\r\n- Đặc biệt, thưởng thức chương trình biểu diễn nhạc nước “Wings Of Time” với các tia nước nhảy múa trên nền nhạc cổ điển kết hợp hiện đại…', 'view/images/tour/garden-by-the-bay_209258761.jpg', '2019-02-01', '20 ngày ', '20.000.000', 1),
(21, 'KHÁM PHÁ TRUNG ÂU', 'Khám phá vẻ đẹp quyến rũ, lãng mạn của Trung Âu, phần “cựu lục địa” vốn còn lạ lẫm đối với nhiều du khách Việt. ', '- Đặt chân đến 4 thủ đô nổi tiếng bậc nhất: Budapest (Hungary), Bratislava (Slovakia), Vienna (Áo) và Praha (Séc). \r\n- Trải nghiệm độc đáo: thăm pháo đài Fisherman’s Bastion - kỳ quan kiến trúc tại Budapest, chiêm ngưỡng thành Vienna tráng lệ, dạo quanh phố cổ bên lâu đài Cesky Krumlov, và đến Praha - “thành phố của trăm hình chóp”\r\n- Đặc biệt nhất trong hành trình này chính là thành phố Budapest duyên dáng soi bóng bên hai bờ sông “Danube blue”. Vẻ đẹp đến mê hoặc của Budapest sẽ đọng lại trong lòng du khách cảm xúc khó quên.', 'view/images/tour/Chain-Bridge_228647908.jpg', '2018-12-30', '3 ngày 3 đêm', '2.560.000 VNĐ', 1),
(22, 'DU LỊCH KHÁM PHÁ CÁI BÈ', 'Tham quan nhà xưa Nam bộ hơn trăm năm tuổi, theo lối kiến trúc Pháp - Việt (tùy theo thủy triều)', '- Tham quan chợ nổi Cái Răng - một chợ nổi lớn của vùng Đồng Bằng sông Cửu Long\r\n- Viếng Lăng Thoại Ngọc Hầu - danh nhân có công khai mở đất An Giang\r\n- Viếng Chùa Hang - ngôi chùa gắn liền với truyền thuyết 2 con rắn lớn biết nghe kinh Phật\r\n- Viếng lăng Mạc Cửu - người có công khai trấn đất Hà Tiên vào thế kỷ 18', 'view/images/tour/mekong-delta-floating-market.jpg', '2018-12-20', '10 ngày 9 đêm', '5.290.000 VNĐ', 2),
(24, 'CỔ VŨ ĐỘI TUYỂN VIỆT NAM', 'Bay thẳng từ Tp HCM cùng Vietnam Airlines', 'Cùng Lữ hành Saigontourist hòa chung không khí cổ vũ cho đội tuyển Việt Nam trong trận Chung kết lượt đi giải AFF CUP 2018 cùng đội tuyển Malaysia.', 'view/images/tour/1-co-vu-bong-da-asiad-2018.jpg', '2018-12-30', '2 ngày 1 đêm', '2.000.000 VNĐ', 1),
(25, 'DU LỊCH NHẬT BẢN', 'Hiện thực hóa ước mơ khám phá cảnh đẹp và văn hóa đặc sắc của xứ Phù Tang với thủ tục visa thuận lợi, nhanh chóng hơn bao giờ hết.', '- Thưởng lãm một Tokyo hiện đại nhưng vẫn cảm nhận từng cung bậc cảm xúc khi dạo bước bên ngôi cổ tự Asakusa, Hoàng cung và không thể thiếu ngọn núi Phú Sĩ hùng vĩ - biểu tượng của nước Nhật.\r\n- Khám phá cảnh sắc từ Tokyo đến Kyoto, kết nối Osaka với đền đài, chùa thiêng đẫm không khí thiền tịnh.\r\n- Thỏa sức mua sắm hàng nội địa Nhật Bản tại các khu thương mại sầm uất.', 'view/images/tour/Fujiten-Snow-Resort_1019294278.jpg', '2018-12-25', '4 ngày 3 đêm', '5.000.000 VNĐ', 1),
(26, 'DU LỊCH TẠI DAK NONG', 'HỒ TÀ ĐÙNG - BẢO LỘC- THÁC DAMRI', '- Dạo một vòng quanh hồ Tà Đùng bằng thuyền - được ví von là Vịnh Hạ Long của Tây Nguyên, với khung cảnh nên thơ, bởi vẻ đẹp của thiên nhiên với hơn 36 hòn đảo lớn nhỏ, nhấp nhô trên mặt hồ.\r\n-  Tham quan Tu Viện Bát Nhã một công trình phật giáo có nét kiến trúc độc đáo mang màu sắc Á Đông với mái ngói hai tầng cong vút cổ kính làm cho công trình nổi bật giữa những rừng chè bạt ngàn.', 'view/images/tour/DakNong_TaDung_1079286740.jpg', '2018-12-16', '3 ngày', '4.050.000 VNĐ', 2),
(27, 'DU LỊCH HONG KONG', 'DISNEYLAND - BẢO TÀNG SÁP - THIỀN VIỆN CHÍ LIÊN - THỎA SỨC KHÁM PHÁ & MUA SẮM', '- Thỏa thích vui chơi ở Công viên Disneyland - Công viên được ưa thích nhất trên thế giới. \r\n- Chiêm ngưỡng và chụp hình cùng những nhân vật nổi tiếng bằng sáp sống động như thật.\r\n- Thỏa sức mua sắm tại những trung tâm thương mại lớn, chợ truyền thống với mức giá phải chăng. \r\n- Tham quan những danh thắng nổi tiếng của xứ Hương Cảng, viếng Thiền Viện Chí Liên, thưởng ngoạn cảnh sắc Vườn Nam Liên mang phong cách kiến trúc đời Đường.', 'view/images/tour/Hollywood-Walk-of-Fame_220247812.jpg', '2019-01-30', '6 ngày', '7.555.000 VNĐ', 1),
(28, 'DU LỊCH NHA TRANG - BÃI DÀI', 'Chiêm ngưỡng Bãi biển cát trắng Cà Ná - một trong những bãi biển đẹp nổi tiếng của miền Trung', '- Tự do thư giãn và tắm biển tại khu du lịch Sealife Bãi Dài\r\n- Tháp Bảo Tích tại chùa Từ Vân được xây dựng từ những viên san hô xếp chồng lên nhau, kết hợp với vỏ ốc, vỏ sò tạo nên một không gian mang đậm phong vị biển cả.', 'view/images/tour/Ca-Na-beach_781076338.jpg', '2018-12-26', '7 ngày', '7.999.000 VNĐ', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Ma_admin`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Ma_banner`),
  ADD KEY `fk_loaibanner` (`Ma_loaitour`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Ma_gallery`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`Ma_KH`);

--
-- Chỉ mục cho bảng `loai_tour`
--
ALTER TABLE `loai_tour`
  ADD PRIMARY KEY (`Ma_loaitour`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Ma_news`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`Ma_tour`),
  ADD KEY `fk_loaitour` (`Ma_loaitour`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `Ma_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `Ma_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Ma_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `Ma_KH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loai_tour`
--
ALTER TABLE `loai_tour`
  MODIFY `Ma_loaitour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `Ma_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `Ma_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `fk_loaibanner` FOREIGN KEY (`Ma_loaitour`) REFERENCES `loai_tour` (`Ma_loaitour`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `fk_loaitour` FOREIGN KEY (`Ma_loaitour`) REFERENCES `loai_tour` (`Ma_loaitour`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
