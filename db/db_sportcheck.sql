-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 05, 2020 at 09:22 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sportcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `category`) VALUES
(1, 'Running Shoes'),
(2, 'Shorts'),
(3, 'Sports Bras'),
(4, 'Jackets'),
(5, 'Swim'),
(6, 'Accessories'),
(7, 'Fitness Trackers');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `product_colour` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_img`, `product_desc`, `product_colour`, `product_price`) VALUES
(1, 'Nike Women\'s Revolution 5 Running Shoes', 'da1beeac1a1017ced710012f13d72b67.jpg', 'The Nike Women’s Revolution 5 Running Shoe cushions your stride with soft foam to keep you running in comfort. Lightweight knit material wraps your foot in breathable support, while a minimalist design fits in anywhere your day takes you.', 'Black', '$65.99'),
(2, 'Nike Women\'s Renew Arena Running Shoes', 'shoes2.jpg', 'The Nike Renew Arena Men’s Running Shoe wraps your foot in a versatile woven material that outperforms your run. The supportive upper offers miles of comfort, while the lightweight Nike Renew technology underfoot gives a smooth, stable ride.\r\n', 'Pink', ' $74.99'),
(3, 'ASICS Women\'s GEL Kayano 26 Running Shoes\r\n', 'shoes3.jpg', 'Boost your performance in bold style with the GEL-KAYANO™ 26 Platinum running shoe from ASICS. This special edition take on our classic stability running shoe features the same performance-enhancing technologies in an eye-catching, futuristic design. \r\n', 'White', '$219.99'),
(4, 'Saucony Women\'s Shift Trail Running Shoes', 'shoes4.jpg', 'Take this show off road. For whatever path you lead, the rugged utility of the Saucony Women’s Shift Trail Running Shoe has you covered in trailblazing style. \r\n', 'Blue', '$99.99'),
(5, 'Merrell Women\'s Antora Trail Running Shoes', 'shoes5.jpg', 'Designed specifically for women, this protective trail runner is made with Q FORM® 2 stability technology and a Vibram® outsole for confidence on moderate terrain.\r\n', 'Gray', '$149.99'),
(6, 'Nike Dry Women\'s Attack Shorts', 'shorts1.png', 'The Nike Dri-FIT Shorts are made with sweat-wicking jersey fabric to help you stay dry and comfortable throughout your workout.\r\n', 'Black', '$22.50'),
(7, 'Under Armour Women\'s Play UP 3.0 Shorts', 'shorts2.png', 'Before you hit the playing field, pull on the Under Armour Women’s Play UP 3.0 Shorts to stay comfortable, cool and focused.\r\n', 'Pink', '$22.49'),
(8, 'Nike Pro Women\'s 3\" Shorts', 'shorts3.png', 'The Nike Pro Shorts are a versatile base layer with Dri-FIT technology to wick sweat when you go hard. A wide elastic waistband has a snug, comfortable fit.\r\n', 'Blue', '$26.25'),
(9, 'Nike Women\'s Crew Shorts', 'shorts4.png', 'Stay cool and dry as you run your route in the Nike Dri-FIT Shorts. A wide waistband and stretchy side panels move with your body, while an all-over petal print invigorates your run.\r\n', 'Gray', ' $15.97'),
(10, 'PUMA Women\'s Clash Printed Shorts', 'shorts5.png', 'Loud and unapologetic, the PUMA Clash Shorts are go to’s for active street style.\r\n', 'White', '$22.97'),
(11, 'Nike Pro Women\'s Alpha High Sports Bra', 'bra1.png', 'Nike Alpha Women’s High Support Sports Bra features molded cups for an encapsulated fit. Designed for high-impact activities like basketball and soccer, the Nike Alpha offers a modified racerback design for a natural range of motion.\r\n', 'Black', '$50.97'),
(12, 'Under Armour Women\'s Armour Crossback Sports\r\n', 'bra2.png', 'Unique strap design delivers extra support in all the right places in the UA Armour Crossback Sports Bra so you can finish just as strong as you started.\r\n', 'White', '$29.99'),
(13, 'Nike Women\'s Classic Sports Bra', 'bra3.png', 'The Nike Swoosh Sports Bra gives you classic coverage and medium support for activities like spin, cardio and dance classes. The removable padding has been redesigned to reliably stay in place while you work out. The removable 1-piece pad is designed to resist shifting or folding for a reliably comfortable fit. The pad pocket opens from the top and can fit a phone.', 'Blue', ' $34.50'),
(14, 'Under Armour Women\'s Armour Medium No Padded Adjustable Bra', 'bra4.png', 'Under Armour Women’s Armour Medium No Padded Adjustable Bra is tailored for medium-support activities like cycling, weight training & boxing. It comes with ultra-tight, second-skin fit and features HeatGear® fabric for superior next-to-skin feel.\r\n', 'Pink', '$26.24'),
(15, 'Nike Pro Classic Padded Women\'s Bra', 'bra5.png', 'Women’s Nike Pro Classic Padded Sports Bra offers medium support for a variety of training activities. It’s lightly padded for enhanced coverage and shaping so you can tackle your workout with confidence.\r\n', 'Gray', '$20.97'),
(16, 'Columbia Women\'s Arcadia II 2L Shell Jacket', 'jacket1.png', 'You’ll be prepared for wet conditions with this shell jacket by Columbia. With an adjustable hood and drawcord waist, rain and cold are kept at bay for optimal warmth. Zippered hand pockets keep essentials safe and protected, and when the weather improves, fold this jacket down and store it in an area as small as a hand pocket.\r\n', 'Pink', ' $109.99'),
(17, 'Helly Hansen Women\'s Long Belfast Shell Jacket', 'jacket2.png', 'This design gives you a long rain coat with sporty detailing. A nice cut and full HELLY TECH® Protection gives you a coat you’ll get to love and trust to keep you dry from the rain.\r\n', 'White', '$184.99'),
(18, 'The North Face Women\'s Arctic Down Parka\r\n', 'jacket3.png', ' Make tracks and set trends in this weatherproof, 550-fill down insulation parka that’s designed to deflect rain, wind, sleet and snow all winter long. Darting and elastic at the waist create a flattering shape for warmth without weight.', 'Black', '$399.99'),
(19, 'Woods Women\'s Bennington Down Hooded Jacket\r\n', 'jacket4.png', 'Lightweight and versatile, the Women’s Bennington Down Puffy Jacket can function as an extra layer or standalone piece. The 700 Fill Power Allied Feather & Down® Duck Down warmth-to-weight ratio makes it the perfect all around insulator, while the ripstop nylon and down-proof shell’s DWR finish will make sure you’re protected from light precipitation.\r\n', 'Blue', '$200'),
(20, 'Columbia Women\'s Lake 22 Long Down Jacket', 'jacket5.png', 'This water-resistant jacket with 650-fill-power down, Heat Seal Construction, and cozy long length ensures zero cold spots, making it a winter must-have.\r\n', 'Gray', ' $219.99'),
(21, 'Nike Core Solid Women\'s Swimsuit', 'swim1.png', ' This feminine yet functional suit offers a streamlined fit for reduced drag and more efficient performance in the water.\r\n', 'Black', '$45'),
(22, 'Nike Women\'s Psyche Mesh Racerback One Piece Swimsuit', 'swim2.png', 'Nike Swim Women’s Nike Psyche Mesh Racerback One Piece is a supportive, comfort-focused swimsuit with chlorine-resistance for lasting performance. This sporty one piece swimsuit has breathable, water draining mesh insets to help it dry quickly.\r\n', 'Blue', ' $39.97'),
(23, 'Speedo Women\'s Heather Quantum Splice One Piece', 'swim3.png', 'From swimming laps to training for meets, this heathered swimsuit delivers, offering lightweight durability to get you through every stroke. The contemporary design enhances your figure thanks to contoured paneling, a strappy back design and a built-in Hydroform bra that provides compressive support and comfort.\r\n', 'Pink', '$62.97'),
(24, 'O\'Neill Women\'s Highway Stripe One Piece Swimsuit\r\n', 'swim4.png', 'Let the suit do the talking in O’Neill’s high neck halter one piece. The elegant cut of this style will have all eyes on you this season.\r\n', 'White', '$49.98'),
(25, 'Nike Women\'s Flash Highneck One Piece Swimsuit\r\n', 'swim5.png', 'Nike Swim Women’s Flash Highneck One Piece features a high bust, moderate style back and standard legs for extra coverage without impacting movements. The iridescent chlorine-resistant fabric performs as well as it looks and the fully lined swimsuit has adjustable straps for a custom fit.\r\n', 'Gray', '$53.97'),
(26, 'The North Face Women\'s Purrl Stitch Beanie', 'acc1.png', 'The North Face Purrl Stitch Beanie is a slouchy smooth-knit beanie with a double layer cuff delivers style and warmth when the temperature drops.\r\n', 'Blue', ' $34.99'),
(27, 'Kombi Women\'s P1 Liner', 'acc2.png', 'Stay warm and dry under your glove or mitten with this convenient, ultra-soft ACTIVE SPORT micropolyester glove liner. Equipped with POWERPOINTTouch technology for touchscreens.\r\n', 'Black', ' $19.99'),
(28, 'Under Armour Women\'s Multi Hair Cap', 'acc3.png', 'UA Free Fit: pre-curved visor & unstructured front conforms to your head for a sleek, low profile fit.\r\n', 'Pink', '$34.99'),
(29, 'Nike NBA Headband', 'acc4.png', 'The Nike NBA Headband features a breathable open knit to enhance air flow and sweat-wicking material to help keep you dry and comfortable.\r\n', 'White', '$12.75'),
(30, 'Icebreaker Women’s Hike Mountaineer Crew Sock', 'acc5.png', 'For making big attempts on big mountains, put your trust in the Women’s Mountaineer mid calf sock. Fully and densely cushioned, the Mountaineer is engineered to fit great inside your boots, provide all day warmth and breathability, and give you a little extra cushioning. A seamless toe box prevents bunching, especially important during a long descent, and reinforced toe and heel areas mean they’ll be your trusted partner for many expeditions to come.\r\n', 'Gray', '$37.99'),
(31, 'Fitbit Versa 2 Smartwatch', 'track1.png', 'Meet Fitbit Versa 2​™​—a smartwatch that elevates every moment. Use your voice to create alarms, set bedtime reminders or check the weather with Amazon Alexa Built-in.​ Take your look from the gym to the office with its modern and versatile design. Control your favourite playlists and podcasts with Spotify. ​Plus get Fitbit Pay​™​, daily in-app sleep quality scores, notifications, 24/7 heart rate and store 300+ songs for an experience that revolves around you.\r\n', 'Black', '$249.95'),
(32, 'Fitbit Versa Lite Edition Smart Watch', 'track2.png', ' Open a world of possibilities with Fitbit Versa™ Lite Edition, the versatile, everyday smartwatch. With all the core fitness and smart features, vibrant colors and an easy one-button design, this watch will inspire you to live boldly and make your goals reality.\r\n', 'Gray', '$199.95'),
(33, 'Garmin vívofit 4 Activity Tracker', 'track3.png', 'The Garmin vívofit 4 activity tracker follows your progress 24/7 and lets you ditch the charging cord, thanks to its 1+ year battery life. It’s also safe for the pool or the shower, and its always-on color display is bright and easy to see, even in the sunlight. Let your personality shine through by customizing the screen with color themes, watch faces and text phrases or by swapping out the band for a different one. \r\n', 'White', '$99.99'),
(34, 'Apple Watch Series 5 GPS 40MM', 'track4.png', 'Apple Watch Series 5, with an Always-On Retina display. You’ve never seen a watch like this. Apple Watch Series 5 has a display that’s always on, showing the time and important information—no need to raise your wrist. It helps you navigate with the built-in compass. Lets you check on your heart with the ECG app.1 Tracks your workouts and activity. And makes it easy to connect with the people and information you care about, right from your wrist.\r\n', 'Pink', '$529'),
(35, 'Fitbit Versa 2 Smartwatch SE ', 'track5.png', 'The Fitbit Versa 2​™ Special Edition takes your experience to another level with a premium jacquard woven band, an extra classic silicone band and a 3-month free trial of Fitbit Premium. Use your voice to create alarms, set bedtime reminders or check the weather with Amazon Alexa Built-in.​ Take your look from the gym to the office with its modern and versatile design. Control your favourite playlists and podcasts with Spotify. ​Plus get Fitbit Pay​™​, daily in-app sleep quality scores, notifications, 24/7 heart rate and store 300+ songs for an experience that revolves around you.\r\n', 'Blue', '$279.95');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_categories`
--

CREATE TABLE `tbl_products_categories` (
  `product_category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products_categories`
--

INSERT INTO `tbl_products_categories` (`product_category_id`, `product_id`, `category_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 3),
(12, 12, 3),
(13, 13, 3),
(14, 14, 3),
(15, 15, 3),
(16, 16, 4),
(17, 17, 4),
(18, 18, 4),
(19, 19, 4),
(20, 20, 4),
(21, 21, 5),
(22, 22, 5),
(23, 23, 5),
(24, 24, 5),
(25, 25, 5),
(26, 26, 6),
(27, 27, 6),
(28, 28, 6),
(29, 29, 6),
(30, 30, 6),
(31, 31, 7),
(32, 32, 7),
(33, 33, 7),
(34, 34, 7),
(35, 35, 7),
(36, 36, 1),
(37, 37, 1),
(38, 38, 1),
(39, 36, 1),
(40, 37, 1),
(41, 38, 1),
(42, 36, 1),
(43, 37, 1),
(44, 38, 1),
(45, 39, 2),
(46, 40, 1),
(47, 41, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_ip` varchar(100) NOT NULL,
  `edited` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`, `edited`) VALUES
(1, 'Admin1', 'admin', '123', 'me@you.com', '2020-04-05 14:49:08', '::1', 1),
(2, 'dummy', 'dummy', '123', 'me@you.com', '2020-04-05 21:17:28', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_products_categories`
--
ALTER TABLE `tbl_products_categories`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_products_categories`
--
ALTER TABLE `tbl_products_categories`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
